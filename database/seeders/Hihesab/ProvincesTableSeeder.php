<?php

declare(strict_types=1);

namespace Database\Seeders\Hihesab;

use App\Models\Province;
use Illuminate\Database\Seeder;

class ProvincesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Province::create([
            'id'=>1,
            'name'=>'آذربایجان شرقی',
        ]);
        Province::create([
            'id'=>2,
            'name'=>'آذربایجان غربی',
        ]);
        Province::create([
            'id'=>3,
            'name'=>'اردبیل',
        ]);
        Province::create([
            'id'=>4,
            'name'=>'اصفهان',
        ]);
        Province::create([
            'id'=>5,
            'name'=>'البرز',
        ]);
        Province::create([
            'id'=>6,
            'name'=>'ایلام',
        ]);
        Province::create([
            'id'=>7,
            'name'=>'بوشهر',
        ]);
        Province::create([
            'id'=>8,
            'name'=>'تهران',
        ]);
        Province::create([
            'id'=>9,
            'name'=>'چهارمحال بختیاری',
        ]);
        Province::create([
            'id'=>10,
            'name'=>'خراسان جنوبی',
        ]);
        Province::create([
            'id'=>11,
            'name'=>'خراسان رضوی',
        ]);
        Province::create([
            'id'=>12,
            'name'=>'خراسان شمالی',
        ]);
        Province::create([
            'id'=>13,
            'name'=>'خوزستان',
        ]);
        Province::create([
            'id'=>14,
            'name'=>'زنجان',
        ]);
        Province::create([
            'id'=>15,
            'name'=>'سمنان',
        ]);
        Province::create([
            'id'=>16,
            'name'=>'سیستان و بلوچستان',
        ]);
        Province::create([
            'id'=>17,
            'name'=>'فارس',
        ]);
        Province::create([
            'id'=>18,
            'name'=>'قزوین',
        ]);
        Province::create([
            'id'=>19,
            'name'=>'قم',
        ]);
        Province::create([
            'id'=>20,
            'name'=>'کردستان',
        ]);
        Province::create([
            'id'=>21,
            'name'=>'کرمان',
        ]);
        Province::create([
            'id'=>22,
            'name'=>'کرمانشاه',
        ]);
        Province::create([
            'id'=>23,
            'name'=>'کهكيلويه و بويراحمد',
        ]);
        Province::create([
            'id'=>24,
            'name'=>'گلستان',
        ]);
        Province::create([
            'id'=>25,
            'name'=>'گیلان',
        ]);
        Province::create([
            'id'=>26,
            'name'=>'لرستان',
        ]);
        Province::create([
            'id'=>27,
            'name'=>'مازندران',
        ]);
        Province::create([
            'id'=>28,
            'name'=>'مرکزی',
        ]);
        Province::create([
            'id'=>29,
            'name'=>'هرمزگان',
        ]);
        Province::create([
            'id'=>30,
            'name'=>'همدان',
        ]);
        Province::create([
            'id'=>31,
            'name'=>'یزد',
        ]);
    }
}
