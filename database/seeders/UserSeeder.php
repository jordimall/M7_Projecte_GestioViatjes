<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

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
                'password'    => Hash::make('7w2^v@2&Ik6m'),
                'role_id'   => 1,
            ],
            [
                'name'  => 'Rodrigo',
                'surname'  => 'Caparrós Sanmartín',
                'username'    => 'rodrigocs',
                'email' => 'rodrigocs@gmail.com',
                'password'    => Hash::make('EZ9%5Z7rp70o'),
                'role_id' => 0,
            ],
            [
                'name'  => 'Claudia',
                'surname'  => 'Varela Oliver',
                'username'    => 'claudiavo',
                'email' => 'claudiavo@gmail.com',
                'password'    => Hash::make('9YI7z%&R^TK8'),
                'role_id' => 0,
            ],
            [
                'name'  => 'Lorena',
                'surname'  => 'Jordá Losa',
                'username'    => 'lorenajl',
                'email' => 'lorenajl@gmail.com',
                'password'    => Hash::make('48vp0Cg^^DJK'),
                'role_id' => 0,
            ],
            [
                'name'  => 'Remigio',
                'surname'  => 'Pineda Arce',
                'username'    => 'remigiopa',
                'email' => 'remigiopa@gmail.com',
                'password'    => Hash::make('V9d!v%se224y'),
                'role_id' => 0,
            ],
            [
                'name'  => 'Jordi',
                'surname'  => 'Paz Múñiz',
                'username'    => 'jordipm',
                'email' => 'jordipm@gmail.com',
                'password'    => Hash::make('&G47h9K01spb'),
                'role_id' => 0,
            ],
            [
                'name'  => 'Alonso',
                'surname'  => 'Iglesias Ibañez',
                'username'    => 'alonsoii',
                'email' => 'alonsoii@gmail.com',
                'password'    => Hash::make('PnTnm^9Nr17F'),
                'role_id' => 0,
            ],
            [
                'name'  => 'Jenny',
                'surname'  => 'Planas Campillo',
                'username'    => 'jennypc',
                'email' => 'jennypc@gmail.com',
                'password'    => Hash::make('yAHi0593Wm!g'),
                'role_id' => 0,
            ],
            [
                'name'  => 'Gregorio',
                'surname'  => 'Salom Barrios',
                'username'    => 'gregoriosb',
                'email' => 'gregoriosb@gmail.com',
                'password'    => Hash::make('8%q7lv032RdR'),
                'role_id' => 0,
            ],
            [
                'name'  => 'Begoña',
                'surname'  => 'Barbero Gutiérrez',
                'username'    => 'begoñabg',
                'email' => 'begoñabg@gmail.com',
                'password'    => Hash::make('7&8q8%vZVCil'),
                'role_id' => 0,
            ],
            [
                'name'  => 'Imelda',
                'surname'  => 'Saez Carpio',
                'username'    => 'imeldasc',
                'email' => 'imeldasc@gmail.com',
                'password'    => Hash::make('@dGzFJz!907S'),
                'role_id' => 0,
            ],
            [
                'name'  => 'Úrsula',
                'surname'  => 'Dalmau Barrena',
                'username'    => 'ursuladb',
                'email' => 'ursuladb@gmail.com',
                'password'    => Hash::make('igF1kP&R&8W5'),
                'role_id' => 0,
            ],
            [
                'name'  => 'Marcos',
                'surname'  => 'Burgos Cózar',
                'username'    => 'marcosbc',
                'email' => 'marcosbc@gmail.com',
                'password'    => Hash::make('4000JLWT#qht'),
                'role_id' => 0,
            ],
            [
                'name'  => 'Sebastián',
                'surname'  => 'Cabeza Murillo',
                'username'    => 'sebastiancm',
                'email' => 'sebastiancm@gmail.com',
                'password'    => Hash::make('*uab311Ccdli'),
                'role_id' => 0,
            ],
            [
                'name'  => 'Alex',
                'surname'  => 'Corbacho Reguera',
                'username'    => 'alexcr',
                'email' => 'alexcr@gmail.com',
                'password'    => Hash::make('7D73$9aaEg^0'),
                'role_id' => 0,
            ],
            [
                'name'  => 'Ainara',
                'surname'  => 'Figuerola Gras',
                'username'    => 'ainarafg',
                'email' => 'ainarafg@gmail.com',
                'password'    => Hash::make('qM9YCz0@%06d'),
                'role_id' => 0,
            ],
            [
                'name'  => 'Nico',
                'surname'  => 'Cabrera Grande',
                'username'    => 'nicocg',
                'email' => 'nicocg@gmail.com',
                'password'    => Hash::make('Dg4b35*o2#QD'),
                'role_id' => 0,
            ],
            [
                'name'  => 'Aarón',
                'surname'  => 'Bernad Malo',
                'username'    => 'aaronbm',
                'email' => 'aaronbm@gmail.com',
                'password'    => Hash::make('3LR5A4$6EQzL'),
                'role_id' => 0,
            ],
            [
                'name'  => 'Ismael',
                'surname'  => 'Ramis Bernad',
                'username'    => 'ismaelrb',
                'email' => 'ismaelrb@gmail.com',
                'password'    => Hash::make('#zB55D3N*5%8'),
                'role_id' => 0,
            ],
            [
                'name'  => 'Mireia',
                'surname'  => 'Salinas Lozano',
                'username'    => 'mireiasl',
                'email' => 'mireiasl@gmail.com',
                'password'    => Hash::make('%Ml475*eH17n'),
                'role_id' => 0,
            ],
        ];

        User::insert($users);
    }
}
