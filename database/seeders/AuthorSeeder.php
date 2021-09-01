<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Blog\Author;


class AuthorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $authorRecord=[
            ['id'=>1,'first_name'=>'Ion','last_name'=>'Grajdieru','email'=>'iongrajdieru@gmail.com','phone'=>'79405634','created_at'=>'2020/06/24','updated_at'=>'2020/06/24'],
            ['id'=>2,'first_name'=>'Emilia','last_name'=>'Russu','email'=>'emiliarussu@gmail.com','phone'=>'794565263','created_at'=>'2020/06/24','updated_at'=>'2020/06/24'],
            ['id'=>3,'first_name'=>'Ruslana','last_name'=>'Perju','email'=>'ruslanaperju@gmail.com','phone'=>'794565456','created_at'=>'2020/06/24','updated_at'=>'2020/06/24'],
            ['id'=>4,'first_name'=>'Alexandru','last_name'=>'Macrinici','email'=>'alexandrumacrinici@gmail.com','phone'=>'79565656','created_at'=>'2020/06/24','updated_at'=>'2020/06/24'],
           
        ];
        Author::insert($authorRecord);
    }
}
