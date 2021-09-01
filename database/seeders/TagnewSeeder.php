<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Blog\Tagnew;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class TagnewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tagnews')->insert([
            'name' => Str::random(10)
        ]);
    }
}
