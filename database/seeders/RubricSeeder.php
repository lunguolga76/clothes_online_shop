<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Blog\Rubric;
class RubricSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $rubricRecord=[
            ['id'=>1,'name'=>'travel','description'=>'needing companionship and therefore best suited to living in communities','image'=>'','created_at'=>'2020/06/24','updated_at'=>'2020/06/24'],
            ['id'=>2,'name'=>'politic', 'description'=>'go from one place to another, typically over a distance of some length','image'=>'','created_at'=>'2020/06/24','updated_at'=>'2020/06/24'],
            ['id'=>3,'name'=>'social','description'=>'needing companionship and therefore best suited to living in communities','image'=>'','created_at'=>'2020/06/24','updated_at'=>'2020/06/24'],
            ['id'=>4,'name'=>'sport', 'description'=>'an activity involving physical exertion and skill in which an individual or team competes against another or others for entertainment','image'=>'','created_at'=>'2020/06/24','updated_at'=>'2020/06/24'],
            ['id'=>5,'name'=>'economic','description'=>'relating to economics or the economy','image'=>'','created_at'=>'2020/06/24','updated_at'=>'2020/06/24'],
        ];
        Rubric::insert($rubricRecord);
        
    }
}
