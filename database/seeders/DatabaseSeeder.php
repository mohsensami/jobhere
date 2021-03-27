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
        // \App\Models\User::factory(10)->create();

        DB::table('employers')->delete();
        $employers = array(
            array('company_name'=>'جاب هییر'),
        );
        DB::table('employers')->insert($employers);

        DB::table('users')->delete();
        $users = array(
            array('full_name'=>'جاب هییر', 'role'=>'admin','email'=>'info@jobhere.ir','phone'=>'9033451850','password'=>bcrypt('1872718727mM')),
        );
        DB::table('users')->insert($users);


    }
}
