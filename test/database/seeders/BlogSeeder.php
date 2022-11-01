<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('blogs')->insert([
            [  'name' => 'Thảo Tâm',
                'description' => 'Girl',
                'category_id'=> 1
            ],  
            [  'name' => 'Xuân Cường',
                'description' => 'Boy',
                'category_id'=> 2
            ],  
            [  'name' => 'Xuân Thắng',
                'description' => 'Boy',
                'category_id'=> 2  
            ],  
            [  'name' => 'Phan Thảo',
                'description' => 'Girl',
                'category_id'=> 1
            ]  
            ]);
    }
}
