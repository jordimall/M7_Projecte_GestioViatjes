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
                'like'  => 0,
                'description'    => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras ornare suscipit libero.',
                'user_id'  => 1,
            ],
            [
                'url'  => 'url_image/clouddown_icon-icons.com_54405.png',
                'like'  => 0,
                'description'    => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras ornare suscipit libero.',
                'user_id'  => 2,
            ],
            [
                'url'  => 'url_image/clouddown_icon-icons.com_54405.png',
                'like'  => 2,
                'description'    => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras ornare suscipit libero.',
                'user_id'  => 3,
            ],
            [
                'url'  => 'url_image/clouddown_icon-icons.com_54405.png',
                'like'  => 0,
                'description'    => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras ornare suscipit libero.',
                'user_id'  => 4,
            ],
            [
                'url'  => 'url_image/clouddown_icon-icons.com_54405.png',
                'like'  => 4,
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
                'like'  => 5,
                'description'    => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras ornare suscipit libero.',
                'user_id'  => 7,
            ],
            [
                'url'  => 'url_image/clouddown_icon-icons.com_54405.png',
                'like'  => 14,
                'description'    => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras ornare suscipit libero.',
                'user_id'  => 8,
            ],
            [
                'url'  => 'url_image/clouddown_icon-icons.com_54405.png',
                'like'  => 23,
                'description'    => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras ornare suscipit libero.',
                'user_id'  => 9,
            ],
            [
                'url'  => 'url_image/clouddown_icon-icons.com_54405.png',
                'like'  => 31,
                'description'    => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras ornare suscipit libero.',
                'user_id'  => 10,
            ],
            [
                'url'  => 'url_image/clouddown_icon-icons.com_54405.png',
                'like'  => 0,
                'description'    => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras ornare suscipit libero.',
                'user_id'  => 11,
            ],
            [
                'url'  => 'url_image/clouddown_icon-icons.com_54405.png',
                'like'  => 28,
                'description'    => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras ornare suscipit libero.',
                'user_id'  => 12,
            ],
            [
                'url'  => 'url_image/clouddown_icon-icons.com_54405.png',
                'like'  => 19,
                'description'    => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras ornare suscipit libero.',
                'user_id'  => 13,
            ],
            [
                'url'  => 'url_image/clouddown_icon-icons.com_54405.png',
                'like'  => 37,
                'description'    => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras ornare suscipit libero.',
                'user_id'  => 14,
            ],
            [
                'url'  => 'url_image/clouddown_icon-icons.com_54405.png',
                'like'  => 16,
                'description'    => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras ornare suscipit libero.',
                'user_id'  => 15,
            ],
            [
                'url'  => 'url_image/clouddown_icon-icons.com_54405.png',
                'like'  => 47,
                'description'    => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras ornare suscipit libero.',
                'user_id'  => 16,
            ],
            [
                'url'  => 'url_image/clouddown_icon-icons.com_54405.png',
                'like'  => 35,
                'description'    => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras ornare suscipit libero.',
                'user_id'  => 17,
            ],
            [
                'url'  => 'url_image/clouddown_icon-icons.com_54405.png',
                'like'  => 0,
                'description'    => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras ornare suscipit libero.',
                'user_id'  => 18,
            ],
            [
                'url'  => 'url_image/clouddown_icon-icons.com_54405.png',
                'like'  => 10,
                'description'    => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras ornare suscipit libero.',
                'user_id'  => 19,
            ],
            [
                'url'  => 'url_image/clouddown_icon-icons.com_54405.png',
                'like'  => 50,
                'description'    => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras ornare suscipit libero.',
                'user_id'  => 20,
            ],
        ];

        Publication::insert($publications);
    }
}
