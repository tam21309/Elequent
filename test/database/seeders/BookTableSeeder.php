<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BookTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('books')->insert([
            [  
                'category_id' => 1 ,
                'name' => 'Truyen Kieu',
                'price' => 12000,
                'description' => 'Van Hoc'
            
            ],  
            [  
            'category_id' => 2 ,
            'name' => 'Hanh Tinh',
            'price' => 15000,
            'description' => 'Vat Li'
        
            ], 
            [  'category_id' => 1 ,
            'name' => 'Truyen Kieu',
            'price' => 17000,
            'description' => 'Van Hoc'
        
            ] 
            ]);
    }
}
