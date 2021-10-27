<?php

namespace Database\Seeders;

use App\Models\Section;
use Illuminate\Database\Seeder;

class SectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $sectionRecord=[
            ['id'=>1,'name'=>'men','status'=>1,'created_at'=>'2020/06/24','updated_at'=>'2020/06/24'],
            ['id'=>2,'name'=>'woman', 'status'=>1,'created_at'=>'2020/06/24','updated_at'=>'2020/06/24'],

        ];
        Section::insert($sectionRecord);


    }
}
