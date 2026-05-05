<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePhoneRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Str;

class AuthController extends Controller
{
    public function loginRegister(StorePhoneRequest $req)
    {
        // return $req->all();

        // Step 1: Check If the mobile number is in correct format
    }

    /**
     * Step 1: درخواست OTP
     */
    public function requestOtp(StorePhoneRequest $request)
    {

        $mobile = $this->normalizeMobile($request->mobile);

        $requestId = (string) Str::uuid();

        Cache::put("otp:$requestId", [
            'mobile' => $mobile,
            'otp' => '111111',
            'attempts' => 0,
        ], now()->addMinutes(2));

        return response()->json([
            'request_id' => $requestId,
            'message' => 'OTP sent',
        ]);
    }

    /**
     * Step 2: تایید OTP + login/register
     */
    public function verifyOtp(Request $request)
    {
        $request->validate([
            'request_id' => ['required'],
            'otp' => ['required'],
        ]);

        $key = "otp:{$request->request_id}";
        $data = Cache::get($key);

        if (! $data) {
            return response()->json([
                'message' => 'OTP expired',
            ], 422);
        }

        // کنترل تعداد تلاش
        $data['attempts']++;

        if ($data['attempts'] > 3) {
            Cache::forget($key);

            return response()->json([
                'message' => 'Too many attempts',
            ], 429);
        }

        Cache::put($key, $data, now()->addMinutes(2));

        if ($data['otp'] !== $request->otp) {
            return response()->json([
                'message' => 'Invalid OTP',
            ], 422);
        }

        Cache::forget($key);

        $mobile = $data['mobile'];

        // login / register
        $user = User::firstOrCreate([
            'mobile' => $mobile,
        ]);

        $token = $user->createToken('auth')->plainTextToken;

        return response()->json([
            'type' => $user->wasRecentlyCreated ? 'register' : 'login',
            'user' => $user,
            'token' => $token,
        ]);
    }

    /**
     * Normalize mobile:
     * - حذف کاراکترهای غیر عددی
     * - اطمینان از شروع با 0
     */
    private function normalizeMobile(string $mobile): string
    {
        // فقط عددها
        $mobile = preg_replace('/\D+/', '', $mobile);

        // اگر با 0 شروع نشده باشد، اضافه کن
        if ($mobile === '') {
            return $mobile;
        }

        if (! str_starts_with($mobile, '0')) {
            $mobile = '0'.$mobile;
        }

        return $mobile;
    }
}
