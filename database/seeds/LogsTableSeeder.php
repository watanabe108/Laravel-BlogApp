<?php

use Illuminate\Database\Seeder;

class LogsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=1;$i<=30;$i++){
            $param=[
                'logTitle' => 'testTitle'.$i,
                'detail' => 'testdetail'.$i,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ];
            DB::table('logs')->insert($param);
        }
    }
}
