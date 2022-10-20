<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Publication;

class PublicationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $publications = [
            [
                'url'  => 'url_image/clouddown_icon-icons.com_54405.png',
                'likes'  => 0,
                'description'    => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras ornare suscipit libero.',
                'user_id'  => 1,
            ],
            [
                'url'  => 'url_image/clouddown_icon-icons.com_54405.png',
                'likes'  => 0,
                'description'    => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras ornare suscipit libero.',
                'user_id'  => 2,
            ],
            [
                'url'  => 'url_image/clouddown_icon-icons.com_54405.png',
                'likes'  => 2,
                'description'    => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras ornare suscipit libero.',
                'user_id'  => 3,
            ],
            [
                'url'  => 'url_image/clouddown_icon-icons.com_54405.png',
                'likes'  => 0,
                'description'    => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras ornare suscipit libero.',
                'user_id'  => 4,
            ],
            [
                'url'  => 'url_image/clouddown_icon-icons.com_54405.png',
                'likes'  => 4,
                'description'    => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras ornare suscipit libero.',
                'user_id'  => 5,
            ],
            [
                'url'  => 'url_image/clouddown_icon-icons.com_54405.png',
                'likes'  => 7,
                'description'    => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras ornare suscipit libero.',
                'user_id'  => 6,
            ],
            [
                'url'  => 'url_image/clouddown_icon-icons.com_54405.png',
                'likes'  => 5,
                'description'    => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras ornare suscipit libero.',
                'user_id'  => 7,
            ],
            [
                'url'  => 'url_image/clouddown_icon-icons.com_54405.png',
                'likes'  => 14,
                'description'    => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras ornare suscipit libero.',
                'user_id'  => 8,
            ],
            [
                'url'  => 'url_image/clouddown_icon-icons.com_54405.png',
                'likes'  => 23,
                'description'    => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras ornare suscipit libero.',
                'user_id'  => 9,
            ],
            [
                'url'  => 'url_image/clouddown_icon-icons.com_54405.png',
                'likes'  => 31,
                'description'    => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras ornare suscipit libero.',
                'user_id'  => 10,
            ],
            [
                'url'  => 'url_image/clouddown_icon-icons.com_54405.png',
                'likes'  => 0,
                'description'    => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras ornare suscipit libero.',
                'user_id'  => 11,
            ],
            [
                'url'  => 'url_image/clouddown_icon-icons.com_54405.png',
                'likes'  => 28,
                'description'    => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras ornare suscipit libero.',
                'user_id'  => 12,
            ],
            [
                'url'  => 'url_image/clouddown_icon-icons.com_54405.png',
                'likes'  => 19,
                'description'    => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras ornare suscipit libero.',
                'user_id'  => 13,
            ],
            [
                'url'  => 'url_image/clouddown_icon-icons.com_54405.png',
                'likes'  => 37,
                'description'    => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras ornare suscipit libero.',
                'user_id'  => 14,
            ],
            [
                'url'  => 'url_image/clouddown_icon-icons.com_54405.png',
                'likes'  => 16,
                'description'    => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras ornare suscipit libero.',
                'user_id'  => 15,
            ],
            [
                'url'  => 'url_image/clouddown_icon-icons.com_54405.png',
                'likes'  => 47,
                'description'    => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras ornare suscipit libero.',
                'user_id'  => 16,
            ],
            [
                'url'  => 'url_image/clouddown_icon-icons.com_54405.png',
                'likes'  => 35,
                'description'    => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras ornare suscipit libero.',
                'user_id'  => 17,
            ],
            [
                'url'  => 'url_image/clouddown_icon-icons.com_54405.png',
                'likes'  => 0,
                'description'    => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras ornare suscipit libero.',
                'user_id'  => 18,
            ],
            [
                'url'  => 'url_image/clouddown_icon-icons.com_54405.png',
                'likes'  => 10,
                'description'    => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras ornare suscipit libero.',
                'user_id'  => 19,
            ],
            [
                'url'  => 'url_image/clouddown_icon-icons.com_54405.png',
                'likes'  => 50,
                'description'    => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras ornare suscipit libero.',
                'user_id'  => 20,
            ],
        ];

        Publication::insert($publications);
    }
}
