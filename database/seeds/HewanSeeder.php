<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HewanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('hewan')->insert([
            'id' => 1,
            'nama' => 'Sapi',
            'jumlah_kaki' => 4,
            'created_At' =>  Carbon::now()->format('Y-m-d H:i:s'),
            'updated_At' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
    }
}
