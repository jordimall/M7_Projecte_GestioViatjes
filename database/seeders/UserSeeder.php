<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [                
                'name'  => 'Marco',
                'surname'  => 'Torrent Lastra',
                'username'    => 'marcotl',
                'email' => 'marcotl@gmail.com',
                'password'    => '7w2^v@2&Ik6m',
            ],
            [                
                'name'  => 'Rodrigo',
                'surname'  => 'Caparrós Sanmartín',
                'username'    => 'rodrigocs',
                'email' => 'rodrigocs@gmail.com',
                'password'    => 'EZ9%5Z7rp70o',
            ],
            [                
                'name'  => 'Claudia',
                'surname'  => 'Varela Oliver',
                'username'    => 'claudiavo',
                'email' => 'claudiavo@gmail.com',
                'password'    => '9YI7z%&R^TK8',
            ],
            [                
                'name'  => 'Lorena',
                'surname'  => 'Jordá Losa',
                'username'    => 'lorenajl',
                'email' => 'lorenajl@gmail.com',
                'password'    => '48vp0Cg^^DJK',
            ],
            [                
                'name'  => 'Remigio',
                'surname'  => 'Pineda Arce',
                'username'    => 'remigiopa',
                'email' => 'remigiopa@gmail.com',
                'password'    => 'V9d!v%se224y',
            ],
            [                
                'name'  => 'Jordi',
                'surname'  => 'Paz Múñiz',
                'username'    => 'jordipm',
                'email' => 'jordipm@gmail.com',
                'password'    => '&G47h9K01spb',
            ],
            [                
                'name'  => 'Alonso',
                'surname'  => 'Iglesias Ibañez',
                'username'    => 'alonsoii',
                'email' => 'alonsoii@gmail.com',
                'password'    => 'PnTnm^9Nr17F',
            ],
            [                
                'name'  => 'Jenny',
                'surname'  => 'Planas Campillo',
                'username'    => 'jennypc',
                'email' => 'jennypc@gmail.com',
                'password'    => 'yAHi0593Wm!g',
            ],
            [                
                'name'  => 'Gregorio',
                'surname'  => 'Salom Barrios',
                'username'    => 'gregoriosb',
                'email' => 'gregoriosb@gmail.com',
                'password'    => '8%q7lv032RdR',
            ],
            [                
                'name'  => 'Begoña',
                'surname'  => 'Barbero Gutiérrez',
                'username'    => 'begoñabg',
                'email' => 'begoñabg@gmail.com',
                'password'    => '7&8q8%vZVCil',
            ],
            [                
                'name'  => 'Imelda',
                'surname'  => 'Saez Carpio',
                'username'    => 'imeldasc',
                'email' => 'imeldasc@gmail.com',
                'password'    => '@dGzFJz!907S',
            ],
            [                
                'name'  => 'Úrsula',
                'surname'  => 'Dalmau Barrena',
                'username'    => 'ursuladb',
                'email' => 'ursuladb@gmail.com',
                'password'    => 'igF1kP&R&8W5',
            ],
            [                
                'name'  => 'Marcos',
                'surname'  => 'Burgos Cózar',
                'username'    => 'marcosbc',
                'email' => 'marcosbc@gmail.com',
                'password'    => '4000JLWT#qht',
            ],
            [                
                'name'  => 'Sebastián',
                'surname'  => 'Cabeza Murillo',
                'username'    => 'sebastiancm',
                'email' => 'sebastiancm@gmail.com',
                'password'    => '*uab311Ccdli',
            ],
            [                
                'name'  => 'Alex',
                'surname'  => 'Corbacho Reguera',
                'username'    => 'alexcr',
                'email' => 'alexcr@gmail.com',
                'password'    => '7D73$9aaEg^0',
            ],
            [                
                'name'  => 'Ainara',
                'surname'  => 'Figuerola Gras',
                'username'    => 'ainarafg',
                'email' => 'ainarafg@gmail.com',
                'password'    => 'qM9YCz0@%06d',
            ],
            [                
                'name'  => 'Nico',
                'surname'  => 'Cabrera Grande',
                'username'    => 'nicocg',
                'email' => 'nicocg@gmail.com',
                'password'    => 'Dg4b35*o2#QD',
            ],
            [                
                'name'  => 'Aarón',
                'surname'  => 'Bernad Malo',
                'username'    => 'aaronbm',
                'email' => 'aaronbm@gmail.com',
                'password'    => '3LR5A4$6EQzL',
            ],
            [                
                'name'  => 'Ismael',
                'surname'  => 'Ramis Bernad',
                'username'    => 'ismaelrb',
                'email' => 'ismaelrb@gmail.com',
                'password'    => '#zB55D3N*5%8',
            ],
            [                
                'name'  => 'Mireia',
                'surname'  => 'Salinas Lozano',
                'username'    => 'mireiasl',
                'email' => 'mireiasl@gmail.com',
                'password'    => '%Ml475*eH17n',
            ],
        ];

        User::insert($users);
    }
}
