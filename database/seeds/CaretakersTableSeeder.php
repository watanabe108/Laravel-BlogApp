<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CaretakersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param=[
            'handleName' => 'newName',
            'profile' => 'newProfile',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),

        ];
        DB::table('caretakers')->insert($param);
    }
}
