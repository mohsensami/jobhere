<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $users = \App\Models\User::factory(5)->create();

        $employers = \App\Models\Employer::factory(10)->make()->each(function($employers) use($users) {
            $employers->user_id = $users->random()->id;
            $employers->save();
        });

        $ads = \App\Models\Ad::factory(20)->make()->each(function($ads) use($employers) {
            $ads->employer_id = $employers->random()->id;
            $ads->save();
        });








        DB::table('cities')->delete();
        $states = array(
            array('id' => "1", 'name' => "تهران"),
            array('id' => "2", 'name' => "خراسان رضوی"),
            array('id' => "3", 'name' => "اصفهان"),
            array('id' => "4", 'name' => "البرز"),
            array('id' => "5", 'name' => "فارس"),
            array('id' => "6", 'name' => "آذربایجان شرقی"),
            array('id' => "7", 'name' => "خوزستان"),
            array('id' => "8", 'name' => "قم"),
            array('id' => "9", 'name' => "مازندران"),
            array('id' => "10", 'name' => "گیلان"),
            array('id' => "11", 'name' => "کرمان"),
            array('id' => "12", 'name' => "مرکزی"),
            array('id' => "13", 'name' => "قزوین"),
            array('id' => "14", 'name' => "کرمانشاه"),
            array('id' => "15", 'name' => "همدان"),
            array('id' => "16", 'name' => "هرمزگان"),
            array('id' => "17", 'name' => "یزد"),
            array('id' => "18", 'name' => "لرستان"),
            array('id' => "19", 'name' => "سمنان"),
            array('id' => "20", 'name' => "سیستان و بلوچستان"),
            array('id' => "21", 'name' => "زنجان"),
            array('id' => "22", 'name' => "آذربایجان غربی"),
            array('id' => "23", 'name' => "بوشهر"),
            array('id' => "24", 'name' => "خراسان جنوبی"),
            array('id' => "25", 'name' => "اردبیل"),
            array('id' => "26", 'name' => "گلستان"),
            array('id' => "27", 'name' => "چهارمحال و بختیاری"),
            array('id' => "28", 'name' => "خراسان شمالی"),
            array('id' => "29", 'name' => "کردستان"),
            array('id' => "30", 'name' => "ایلام"),
            array('id' => "31", 'name' => "کهکیلویه و بویراحمد"),


        );
        DB::table('cities')->insert($states);



        DB::table('categories')->delete();
        $cats = array(
            array('id' => "1", 'name' => "وب،‌ برنامه‌نویسی و نرم‌افزار"),
            array('id' => "2", 'name' => "فروش و بازاریابی"),
            array('id' => "3", 'name' => "تولید و مدیریت محتوا"),
            array('id' => "4", 'name' => "طراحی"),
            array('id' => "5", 'name' => "مالی و حسابداری"),
            array('id' => "6", 'name' => "مسئول دفتر، اجرائی و اداری"),
            array('id' => "7", 'name' => "IT / DevOps / Server"),
            array('id' => "8", 'name' => "پشتیبانی و امور مشتریان"),
            array('id' => "9", 'name' => "خرید و بازرگانی"),
            array('id' => "10", 'name' => "مهندسی برق و الکترونیک"),
            array('id' => "11", 'name' => "منابع انسانی و کارگزینی"),
            array('id' => "12", 'name' => "مهندسی صنایع و مدیریت صنعتی"),
            array('id' => "13", 'name' => "آموزش"),
            array('id' => "14", 'name' => "مهندسی مکانیک و هوافضا"),
            array('id' => "15", 'name' => "مهندسی عمران و معماری"),
            array('id' => "16", 'name' => "انبارداری"),
            array('id' => "17", 'name' => "مدیر محصول"),
            array('id' => "18", 'name' => "تحقیق و توسعه"),
            array('id' => "19", 'name' => "تحقیق بازار و تحلیل اقتصادی"),
            array('id' => "20", 'name' => "کارشناس حقوقی،‌ وکالت"),
            array('id' => "21", 'name' => "ترجمه"),
            array('id' => "22", 'name' => "روابط عمومی"),
            array('id' => "23", 'name' => "مهندسی شیمی و نفت"),
            array('id' => "24", 'name' => "پزشکی،‌ پرستاری و دارویی"),
            array('id' => "25", 'name' => "حمل و نقل"),
            array('id' => "26", 'name' => "مدیریت بیمه"),
            array('id' => "27", 'name' => "صنایع غذایی"),
            array('id' => "28", 'name' => "گردشگری"),
            array('id' => "29", 'name' => "مهندسی معدن و متالورژی"),
            array('id' => "30", 'name' => "HSE"),
            array('id' => "31", 'name' => "مهندسی نساجی، طراحی پارچه و لباس"),
            array('id' => "32", 'name' => "مهندسی کشاورزی"),
            array('id' => "33", 'name' => "خبر‌نگاری"),
            array('id' => "34", 'name' => "مهندسی پزشکی"),
            array('id' => "35", 'name' => "CEO"),
            array('id' => "36", 'name' => "هتلداری"),
        );
        DB::table('categories')->insert($cats);

    }
}
