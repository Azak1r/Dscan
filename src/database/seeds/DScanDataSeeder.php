<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DScanDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (DB::connection()->getDriverName() == 'mysql') {
        	DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        }

        DB::table('d_scan_datas')->truncate();

        DB::unprepared(File::get('database/seeds/ships.sql'));

        if (DB::connection()->getDriverName() == 'mysql') {
        	DB::statement('SET FOREIGN_KEY_CHECKS=1;');
        }
    }
}
