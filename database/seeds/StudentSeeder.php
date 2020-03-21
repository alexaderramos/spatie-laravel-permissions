<?php

use App\Student;
use Illuminate\Database\Seeder;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Student::create([
            'name'=>'Estudiante R',
            'email_verified_at' => now(),
            'password' => bcrypt('123123123'), // password
            'email'=>'student@student.com',
        ]);
        factory(Student::class, 5)->create();
    }
}
