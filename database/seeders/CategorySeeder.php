<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categoryRecord=[
            ['id'=>1,'section_id'=>1,'name'=>'jacket','image_path'=>'images/category/men_jacket.jpg','description'=>'The word jacket comes from the French word jaquette.','created_at'=>'2020/06/24','updated_at'=>'2020/06/24'],
            ['id'=>2,'section_id'=>2,'name'=>'jacket','image_path'=>'images/category/woman_jacket.jpg','description'=>'The word jacket comes from the French word jaquette. ','created_at'=>'2020/06/24','updated_at'=>'2020/06/24'],
            ['id'=>3,'section_id'=>1,'name'=>'coat','image_path'=>'images/category/man-coat.jpg','description'=>'A coat is a garment worn on the upper body by either gender for warmth or fashion.','created_at'=>'2020/06/24','updated_at'=>'2020/06/24'],
            ['id'=>4,'section_id'=>2,'name'=>'coat','image_path'=>'images/category/woman-coat.jpg','description'=>'A coat is a garment worn on the upper body by either gender for warmth or fashion.','created_at'=>'2020/06/24','updated_at'=>'2020/06/24'],
            ['id'=>5,'section_id'=>1,'name'=>'t-shirt','image_path'=>'images/category/man-t_shirt.jpg','description'=>'A T-shirt, or tee shirt, is a style of fabric shirt named after the T shape of its body and sleeves. ','created_at'=>'2020/06/24','updated_at'=>'2020/06/24'],
            ['id'=>6,'section_id'=>2,'name'=>'t-shirt','image_path'=>'images/category/woman_t_shirt.jpg','description'=>'A T-shirt, or tee shirt, is a style of fabric shirt named after the T shape of its body and sleeves. ','created_at'=>'2020/06/24','updated_at'=>'2020/06/24'],
            ['id'=>7,'section_id'=>1,'name'=>'trousers','image_path'=>'images/category/men_trousers.jpg','description'=>'There are several different main types of pants and trousers, such as dress pants, jeans, khakis, chinos, leggings, and sweatpants. ','created_at'=>'2020/06/24','updated_at'=>'2020/06/24'],
            ['id'=>8,'section_id'=>2,'name'=>'trousers','image_path'=>'images/category/woman_trousers.jpg','description'=>'There are several different main types of pants and trousers, such as dress pants, jeans, khakis, chinos, leggings, and sweatpants. ','created_at'=>'2020/06/24','updated_at'=>'2020/06/24'],
            ['id'=>9,'section_id'=>1,'name'=>'sportswear','image_path'=>'images/category/sportswear_men.jpg','description'=>'Sport-specific clothing is worn for most sports and physical exercise, for practical, comfort or safety reasons. ','created_at'=>'2020/06/24','updated_at'=>'2020/06/24'],
            ['id'=>10,'section_id'=>2,'name'=>'sportswear','image_path'=>'images/category/sportswear-woman.jpg','description'=>'Sport-specific clothing is worn for most sports and physical exercise, for practical, comfort or safety reasons','created_at'=>'2020/06/24','updated_at'=>'2020/06/24'],
            ['id'=>11,'section_id'=>1,'name'=>'jeans','image_path'=>'images/category/jeans-men.jpg','description'=>'Jeans are a type of pants or trousers, typically made from denim or dungaree cloth.e. ','created_at'=>'2020/06/24','updated_at'=>'2020/06/24'],
            ['id'=>12,'section_id'=>2,'name'=>'jeans','image_path'=>'images/category/jeans-woman.jpg','description'=>'Jeans are a type of pants or trousers, typically made from denim or dungaree cloth.. ','created_at'=>'2020/06/24','updated_at'=>'2020/06/24'],
            ['id'=>13,'section_id'=>2,'name'=>'dresses','image_path'=>'images/category/woman-dress.jpg','description'=>'Dress is a garment traditionally worn by women or girls consisting of a skirt with an attached bodice  ','created_at'=>'2020/06/24','updated_at'=>'2020/06/24'],
        ];
        Category::insert($categoryRecord);
    }
}
