<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Comment;

class CommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $comments =
            [
                [
                    'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras ornare suscipit libero.',
                    'user_id' => 1,
                    'publication_id' => 1,
                    'created_at' => now()
                ],
                [
                    'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras ornare suscipit libero.',
                    'user_id' => 11,
                    'publication_id' => 20,
                    'created_at' => now()
                ],
                [
                    'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras ornare suscipit libero.',
                    'user_id' => 2,
                    'publication_id' => 15,
                    'created_at' => now()
                ],
                [
                    'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras ornare suscipit libero.',
                    'user_id' => 2,
                    'publication_id' => 1,
                    'created_at' => now()
                ],
                [
                    'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras ornare suscipit libero.',
                    'user_id' => 1,
                    'publication_id' => 10,
                    'created_at' => now()
                ],
                [
                    'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras ornare suscipit libero.',
                    'user_id' => 10,
                    'publication_id' => 15,
                    'created_at' => now()
                ],
                [
                    'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras ornare suscipit libero.',
                    'user_id' => 10,
                    'publication_id' => 14,
                    'created_at' => now()
                ],
                [
                    'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras ornare suscipit libero.',
                    'user_id' => 14,
                    'publication_id' => 10,
                    'created_at' => now()
                ],
                [
                    'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras ornare suscipit libero.',
                    'user_id' => 2,
                    'publication_id' => 1,
                    'created_at' => now()
                ],
                [
                    'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras ornare suscipit libero.',
                    'user_id' => 12,
                    'publication_id' => 20,
                    'created_at' => now()
                ],
                [
                    'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras ornare suscipit libero.',
                    'user_id' => 2,
                    'publication_id' => 8,
                    'created_at' => now()
                ],
                [
                    'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras ornare suscipit libero.',
                    'user_id' => 2,
                    'publication_id' => 7,
                    'created_at' => now()
                ],
            ];

        Comment::insert($comments);
    }
}
