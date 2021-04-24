<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        DB::table('project_details')->insert([
            'projectType' => 'free',
            'projectLanguage' => 'C++',
            'projectTitle' => '',
            'projectContent' => '',
        ]);
        DB::table('project_details')->insert([
            'projectType' => 'free',
            'projectLanguage' => 'C++',
            'projectTitle' => '',
            'projectContent' => '',
        ]);

        DB::table('project_details')->insert([
            'projectType' => 'free',
            'projectLanguage' => 'python',
            'projectTitle' => '',
            'projectContent' => '',
        ]);
        DB::table('project_details')->insert([
            'projectType' => 'free',
            'projectLanguage' => 'python',
            'projectTitle' => '',
            'projectContent' => '',
        ]);
    }
}
