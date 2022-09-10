<?php

use Illuminate\Database\Seeder;

class PenulisSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('penulis')->insert([
            'role_id' => 1,
            'name' => 'ADMIN 1',
            'email' => 'admin1@gmail.com',
            'password' => bcrypt('12345678'),
            'created_At' =>  Carbon::now()->format('Y-m-d H:i:s'),
            'updated_At' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
    }
}
