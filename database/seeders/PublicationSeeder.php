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
                'url'  => 'url_image/ciutat/alley-gcc29857a6_1280.jpg',
                'like'  => 0,
                'description'    => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras ornare suscipit libero.',
                'user_id'  => 1,
                'title' => 'Consectetur Adipiscing'
            ],
            [
                'url'  => 'url_image/ciutat/aqueduct-g6ff5e094b_1280.jpg',
                'like'  => 0,
                'description'    => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras ornare suscipit libero.',
                'user_id'  => 2,
                'title' => 'Consectetur Adipiscing'
            ],
            [
                'url'  => 'url_image/ciutat/bridge-g888e1bedb_1280.jpg',
                'like'  => 2,
                'description'    => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras ornare suscipit libero.',
                'user_id'  => 3,
                'title' => 'Consectetur Adipiscing'
            ],
            [
                'url'  => 'url_image/ciutat/cathedral-gcc50d909e_1280.jpg',
                'like'  => 0,
                'description'    => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras ornare suscipit libero.',
                'user_id'  => 4,
                'title' => 'Consectetur Adipiscing'
            ],
            [
                'url'  => 'url_image/ciutat/girona-gdc8a6153e_1280.jpg',
                'like'  => 4,
                'description'    => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras ornare suscipit libero.',
                'user_id'  => 5,
                'title' => 'Consectetur Adipiscing'
            ],
            [
                'url'  => 'url_image/ciutat/la-seu-vella-g955b028e7_1280.jpg',
                'likes'  => 7,
                'description'    => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras ornare suscipit libero.',
                'user_id'  => 6,
                'title' => 'Consectetur Adipiscing'
            ],
            [
                'url'  => 'url_image/ciutat/prague-g4f1a6caa7_1280.jpg',
                'like'  => 5,
                'description'    => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras ornare suscipit libero.',
                'user_id'  => 7,
                'title' => 'Consectetur Adipiscing'
            ],
            [
                'url'  => 'url_image/ciutat/ships-ge61fe604c_1280.jpg',
                'like'  => 14,
                'description'    => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras ornare suscipit libero.',
                'user_id'  => 8,
                'title' => 'Consectetur Adipiscing'
            ],
            [
                'url'  => 'url_image/ciutat/tarragona-gc6ae00816_1280.jpg',
                'like'  => 23,
                'description'    => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras ornare suscipit libero.',
                'user_id'  => 9,
                'title' => 'Consectetur Adipiscing'
            ],
            [
                'url'  => 'url_image/ciutat/travel-gafec7ff82_1280.jpg',
                'like'  => 31,
                'description'    => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras ornare suscipit libero.',
                'user_id'  => 10,
                'title' => 'Consectetur Adipiscing'
            ],
            [
                'url'  => 'url_image/costa/beach-g3d05d4770_1280.jpg',
                'like'  => 0,
                'description'    => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras ornare suscipit libero.',
                'user_id'  => 11,
                'title' => 'Consectetur Adipiscing'
            ],
            [
                'url'  => 'url_image/costa/boat-g75aba84d5_1280.jpg',
                'like'  => 28,
                'description'    => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras ornare suscipit libero.',
                'user_id'  => 12,
                'title' => 'Consectetur Adipiscing'
            ],
            [
                'url'  => 'url_image/costa/cadaques-g370cf4faf_1280.jpg',
                'like'  => 19,
                'description'    => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras ornare suscipit libero.',
                'user_id'  => 13,
                'title' => 'Consectetur Adipiscing'
            ],
            [
                'url'  => 'url_image/costa/girl-gb3bac375c_1280.jpg',
                'like'  => 37,
                'description'    => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras ornare suscipit libero.',
                'user_id'  => 14,
                'title' => 'Consectetur Adipiscing'
            ],
            [
                'url'  => 'url_image/costa/landscape-gf452351c4_1280.jpg',
                'like'  => 16,
                'description'    => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras ornare suscipit libero.',
                'user_id'  => 15,
                'title' => 'Consectetur Adipiscing'
            ],
            [
                'url'  => 'url_image/costa/sant-joan-g4934501f6_1280.jpg',
                'like'  => 47,
                'description'    => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras ornare suscipit libero.',
                'user_id'  => 16,
                'title' => 'Consectetur Adipiscing'
            ],
            [
                'url'  => 'url_image/costa/sea-g469c4b797_1280.jpg',
                'like'  => 35,
                'description'    => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras ornare suscipit libero.',
                'user_id'  => 17,
                'title' => 'Consectetur Adipiscing'
            ],
            [
                'url'  => 'url_image/costa/sea-g597e9138e_1280.jpg',
                'like'  => 0,
                'description'    => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras ornare suscipit libero.',
                'user_id'  => 18,
                'title' => 'Consectetur Adipiscing'
            ],
            [
                'url'  => 'url_image/costa/sea-g15309faa5_1280.jpg',
                'like'  => 10,
                'description'    => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras ornare suscipit libero.',
                'user_id'  => 19,
                'title' => 'Consectetur Adipiscing'
            ],
            [
                'url'  => 'url_image/costa/sea-g28307412f_1280.jpg',
                'like'  => 50,
                'description'    => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras ornare suscipit libero.',
                'user_id'  => 20,
                'title' => 'Consectetur Adipiscing'
            ],
            [
                'url'  => 'url_image/esportsAventura/adventure-g76df1e3ef_1280.jpg',
                'like'  => 23,
                'description'    => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras ornare suscipit libero.',
                'user_id'  => 5,
            ],
            [
                'url'  => 'url_image/esportsAventura/bike-g2eea26ad7_1280.jpg',
                'like'  => 12,
                'description'    => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras ornare suscipit libero.',
                'user_id'  => 12,
            ],
            [
                'url'  => 'url_image/esportsAventura/canoe-g1a1c392ac_1280.jpg',
                'like'  => 47,
                'description'    => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras ornare suscipit libero.',
                'user_id'  => 18,
            ],
            [
                'url'  => 'url_image/esportsAventura/climbing-g2edfc5c6b_1280.jpg',
                'like'  => 2,
                'description'    => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras ornare suscipit libero.',
                'user_id'  => 8,
            ],
            [
                'url'  => 'url_image/esportsAventura/cycling-g2447cc367_1280.jpg',
                'like'  => 32,
                'description'    => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras ornare suscipit libero.',
                'user_id'  => 7,
            ],
            [
                'url'  => 'url_image/esportsAventura/rafting-g1231d05de_1280.jpg',
                'like'  => 51,
                'description'    => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras ornare suscipit libero.',
                'user_id'  => 20,
            ],
            [
                'url'  => 'url_image/esportsAventura/snow-g077e3237a_1280.jpg',
                'like'  => 49,
                'description'    => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras ornare suscipit libero.',
                'user_id'  => 19,
            ],
            [
                'url'  => 'url_image/esportsAventura/snow-g95ae2e55f_1280.jpg',
                'like'  => 56,
                'description'    => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras ornare suscipit libero.',
                'user_id'  => 11,
            ],
            [
                'url'  => 'url_image/esportsAventura/sports-g00cfbe443_1280.jpg',
                'like'  => 8,
                'description'    => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras ornare suscipit libero.',
                'user_id'  => 12,
            ],
            [
                'url'  => 'url_image/esportsAventura/surfer-g136c18932_1280.jpg',
                'like'  => 9,
                'description'    => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras ornare suscipit libero.',
                'user_id'  => 5,
            ],
            [
                'url'  => 'url_image/gastronomia/beans-g64deccde0_1280.jpg',
                'like'  => 54,
                'description'    => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras ornare suscipit libero.',
                'user_id'  => 3,
            ],
            [
                'url'  => 'url_image/gastronomia/breads-g73c267eef_1280.jpg',
                'like'  => 89,
                'description'    => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras ornare suscipit libero.',
                'user_id'  => 2,
            ],
            [
                'url'  => 'url_image/gastronomia/breakfast-g496f4a0ed_1280.jpg',
                'like'  => 65,
                'description'    => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras ornare suscipit libero.',
                'user_id'  => 1,
            ],
            [
                'url'  => 'url_image/gastronomia/cafe-g4c135e3d5_1280.jpg',
                'like'  => 7,
                'description'    => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras ornare suscipit libero.',
                'user_id'  => 18,
            ],
            [
                'url'  => 'url_image/gastronomia/food-g4a5842429_1280.jpg',
                'like'  => 54,
                'description'    => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras ornare suscipit libero.',
                'user_id'  => 20,
            ],
            [
                'url'  => 'url_image/gastronomia/food-g399f6d774_1280.jpg',
                'like'  => 94,
                'description'    => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras ornare suscipit libero.',
                'user_id'  => 11,
            ],
            [
                'url'  => 'url_image/gastronomia/pancakes-gcb2503c20_1280.jpg',
                'like'  => 213,
                'description'    => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras ornare suscipit libero.',
                'user_id'  => 12,
            ],
            [
                'url'  => 'url_image/gastronomia/platter-g339f0ecb0_1280.jpg',
                'like'  => 4,
                'description'    => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras ornare suscipit libero.',
                'user_id'  => 10,
            ],
            [
                'url'  => 'url_image/gastronomia/seafood-g9314cc57f_1280.jpg',
                'like'  => 32,
                'description'    => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras ornare suscipit libero.',
                'user_id'  => 18,
            ],
            [
                'url'  => 'url_image/gastronomia/service-ga0b139c83_1280.jpg',
                'like'  => 78,
                'description'    => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras ornare suscipit libero.',
                'user_id'  => 14,
            ],
            [
                'url'  => 'url_image/muntanya/andorra-gcdf12582d_1280.jpg',
                'like'  => 14,
                'description'    => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras ornare suscipit libero.',
                'user_id'  => 13,
            ],
            [
                'url'  => 'url_image/muntanya/body-of-water-ge7a3f76f1_1280.jpg',
                'like'  => 451,
                'description'    => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras ornare suscipit libero.',
                'user_id'  => 9,
            ],
            [
                'url'  => 'url_image/muntanya/cable-car-g2ae986ef6_1280.jpg',
                'like'  => 121,
                'description'    => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras ornare suscipit libero.',
                'user_id'  => 6,
            ],
            [
                'url'  => 'url_image/muntanya/irati-g329a224a7_1280.jpg',
                'like'  => 44,
                'description'    => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras ornare suscipit libero.',
                'user_id'  => 4,
            ],
            [
                'url'  => 'url_image/muntanya/lake-g1b299f854_1280.jpg',
                'like'  => 74,
                'description'    => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras ornare suscipit libero.',
                'user_id'  => 5,
            ],
            [
                'url'  => 'url_image/muntanya/ordesa-g4c19d3504_1280.jpg',
                'like'  => 56,
                'description'    => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras ornare suscipit libero.',
                'user_id'  => 14,
            ],
            [
                'url'  => 'url_image/muntanya/pyrenees-g4b43d7932_1280.jpg',
                'like'  => 72,
                'description'    => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras ornare suscipit libero.',
                'user_id'  => 15,
            ],
            [
                'url'  => 'url_image/muntanya/pyrenees-g048001005_1280.jpg',
                'like'  => 124,
                'description'    => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras ornare suscipit libero.',
                'user_id'  => 18,
            ],
            [
                'url'  => 'url_image/muntanya/pyrenees-gec6683e61_1280.jpg',
                'like'  => 22,
                'description'    => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras ornare suscipit libero.',
                'user_id'  => 17,
            ],
            [
                'url'  => 'url_image/muntanya/river-g99469b6c9_1280.jpg',
                'like'  => 85,
                'description'    => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras ornare suscipit libero.',
                'user_id'  => 16,
            ],
            [
                'url'  => 'url_image/rural/apples-gf21e4c079_1280.jpg',
                'like'  => 32,
                'description'    => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras ornare suscipit libero.',
                'user_id'  => 20,
            ],
            [
                'url'  => 'url_image/rural/autumn-g847c69eef_1280.jpg',
                'like'  => 47,
                'description'    => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras ornare suscipit libero.',
                'user_id'  => 18,
            ],
            [
                'url'  => 'url_image/rural/castle-g304a40d2d_1280.jpg',
                'like'  => 84,
                'description'    => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras ornare suscipit libero.',
                'user_id'  => 19,
            ],
            [
                'url'  => 'url_image/rural/elderly-g1104e6dbe_1280.jpg',
                'like'  => 93,
                'description'    => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras ornare suscipit libero.',
                'user_id'  => 6,
            ],
            [
                'url'  => 'url_image/rural/house-g1d4c7509b_1280.jpg',
                'like'  => 37,
                'description'    => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras ornare suscipit libero.',
                'user_id'  => 18,
            ],
            [
                'url'  => 'url_image/rural/log-cabin-g29eec821a_1280.jpg',
                'like'  => 49,
                'description'    => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras ornare suscipit libero.',
                'user_id'  => 7,
            ],
            [
                'url'  => 'url_image/rural/mother-gfd786b472_1280.jpg',
                'like'  => 94,
                'description'    => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras ornare suscipit libero.',
                'user_id'  => 12,
            ],
            [
                'url'  => 'url_image/rural/old-windmill-gaff67e468_1280.jpg',
                'like'  => 27,
                'description'    => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras ornare suscipit libero.',
                'user_id'  => 7,
            ],
            [
                'url'  => 'url_image/rural/road-g7d63f95ae_1280.jpg',
                'like'  => 39,
                'description'    => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras ornare suscipit libero.',
                'user_id'  => 12,
            ],
            [
                'url'  => 'url_image/rural/street-g0783604e7_1280.jpg',
                'like'  => 80,
                'description'    => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras ornare suscipit libero.',
                'user_id'  => 18,
            ],
        ];

        Publication::insert($publications);
    }
}
