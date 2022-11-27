<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

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

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        DB::table('about')->insert([
            'fname' => "Juan",
            'lname' => "Gutierrez",
            'role' => "developer",
            'description' => "Full Stack Developer +3 years of experience. Especially interested in React, Node and Java Spring Boot",
            'email' => "jgutierrezoa2@gmail.com",
            'linkedinUrl' => "https://www.linkedin.com/in/-juan-gutierrez/",

        ]);
        DB::table('about')->insert([
            'fname' => "Sourav",
            'lname' => "",
            'role' => "developer",
            'description' => "IT Student@Humber College | Java | MERN Stack | HTML | CSS | JavaScript | SQL | Php | Laravel",
            'email' => "souravchoudhary1998@gmail.com",
            'linkedinUrl' => "https://www.linkedin.com/in/sourav009",

        ]);
        DB::table('about')->insert([
            'fname' => "Rutvik",
            'lname' => "",
            'role' => "developer",
            'description' => "Passionate about quality kitchen and front-end development",
            'email' => "rutvik@gmail.com",
            'linkedinUrl' => "",

        ]);
        DB::table('about')->insert([
            'fname' => "Jordan",
            'lname' => "",
            'role' => "developer",
            'description' => "Willing to travel the world programming and in company of my guitar",
            'email' => "jordan@gmail.com",
            'linkedinUrl' => "",

        ]);

    }
}
