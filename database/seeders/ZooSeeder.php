<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;

class ZooSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('zoos')->insert([
            'name' => 'abc',
            'orverview' => '11',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            ]);
        DB::table('zoos')->insert([
            'name' => 'def',
            'orverview' => '22',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            ]);
        DB::table('zoos')->insert([
            'name' => 'hij',
            'orverview' => '33',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            ]);            
    }
}
