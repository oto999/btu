<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Quiz;

class QuizzesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $quizzes = [
            [
                'name' => 'Quiz 1',
                'photo' => 'quiz1.jpg',
                'status' => 'completed'
            ],
            [
                'name' => 'Quiz 2',
                'photo' => 'quiz2.jpg',
                'status' => 'pending'
            ],
            [
                'name' => 'Quiz 3',
                'photo' => 'quiz3.jpg',
                'status' => 'pending'
            ],
            [
                'name' => 'Quiz 4',
                'photo' => 'quiz4.jpg',
                'status' => 'pending'
            ],
            [
                'name' => 'Quiz 5',
                'photo' => 'quiz5.jpg',
                'status' => 'pending'
            ]
        ];

        // Use Eloquent to create records
        foreach ($quizzes as $quiz) {
            Quiz::create($quiz);
        }
    }
}
