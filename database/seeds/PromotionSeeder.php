<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use App\Promotion;

class PromotionSeeder extends Seeder
{
    /** 
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('promotions')->delete();

        $promotions = [
            [
                'title' => 'proin vel',
                'price' => '22327.43',
                'address' => 'San Jose',
                'latitude' => '-30.13206',
                'longitude' => '-4.55607',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'title' => 'varius et',
                'price' => '93.70',
                'address' => 'Loreto',
                'latitude' => '4.60955',
                'longitude' => '77.59575',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'title' => 'odio auctor',
                'price' => '565.80',
                'address' => 'Herfelingen',
                'latitude' => '-47.82575',
                'longitude' => '5.93654',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'title' => 'rutrum lorem',
                'price' => '378.15',
                'address' => 'Limache',
                'latitude' => '-47.0241',
                'longitude' => '-25.26643',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'title' => 'convallis ante',
                'price' => '3985.49',
                'address' => 'Humbeek',
                'latitude' => '-74.79313',
                'longitude' => '-17.08992',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'title' => 'Nullam vitae',
                'price' => '5287.61',
                'address' => 'Dannevirke',
                'latitude' => '-30.81376',
                'longitude' => '21.31801',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'title' => 'ac feugiat',
                'price' => '44.31',
                'address' => 'San Vicente',
                'latitude' => '30.31428',
                'longitude' => '105.68544',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'title' => 'arcu et',
                'price' => '895.33',
                'address' => 'La Roche-sur-Yon',
                'latitude' => '-3.27108',
                'longitude' => '125.01729',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'title' => 'consectetuer adipiscing',
                'price' => '199.03',
                'address' => 'Santa Croce',
                'latitude' => '-48.32451',
                'longitude' => '-89.1833',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'title' => 'massa non',
                'price' => '313.81',
                'address' => 'Habra',
                'latitude' => '9.38998',
                'longitude' => '87.45281',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'title' => 'faucibus orci',
                'price' => '2365.10',
                'address' => 'Campli',
                'latitude' => '-7.94002',
                'longitude' => '-114.87077',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'title' => 'commodo at',
                'price' => '8657.41',
                'address' => 'Maple Creek',
                'latitude' => '47.44765',
                'longitude' => '-159.04012',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'title' => 'erat volutpat',
                'price' => '30.15',
                'address' => 'Seloignes',
                'latitude' => '87.21891',
                'longitude' => '-17.11677',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'title' => 'gravida nunc',
                'price' => '893.79',
                'address' => 'Monmouth',
                'latitude' => '61.20488',
                'longitude' => '69.44671',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'title' => 'elit pellentesque',
                'price' => '665.67',
                'address' => 'Cariboo Regional District',
                'latitude' => '8.17562',
                'longitude' => '119.62883',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'title' => 'nec ligula',
                'price' => '195.48',
                'address' => 'Lokeren',
                'latitude' => '-50.36903',
                'longitude' => '92.47876',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'title' => 'auctor Mauris',
                'price' => '117.90',
                'address' => 'Salzwedel',
                'latitude' => '69.75814',
                'longitude' => '176.41204',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'title' => 'congue turpis',
                'price' => '350.08',
                'address' => 'Sinaai-Waas',
                'latitude' => '-45.03772',
                'longitude' => '111.6994',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'title' => 'ac urna',
                'price' => '228.80',
                'address' => 'Bridge of Allan',
                'latitude' => '31.18168',
                'longitude' => '-101.9158',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'title' => 'sed pede',
                'price' => '161.45',
                'address' => 'Emmen',
                'latitude' => '-54.11704',
                'longitude' => '85.08219',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'title' => 'augue ac',
                'price' => '307.95',
                'address' => 'Hull',
                'latitude' => '-48.58133',
                'longitude' => '-149.79687',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'title' => 'id blandit',
                'price' => '88.84',
                'address' => 'Tillet',
                'latitude' => '21.02835',
                'longitude' => '179.8933',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'title' => 'imperdiet non',
                'price' => '439.59',
                'address' => 'Annapolis County',
                'latitude' => '83.75269',
                'longitude' => '152.17237',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'title' => 'In faucibus',
                'price' => '520.80',
                'address' => 'Tynda',
                'latitude' => '61.39882',
                'longitude' => '94.12036',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'title' => 'sed consequat',
                'price' => '483.47',
                'address' => 'Shawinigan',
                'latitude' => '-4.71874',
                'longitude' => '-71.44689',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'title' => 'vitae velit',
                'price' => '717.98',
                'address' => 'Fryazino',
                'latitude' => '-2.43538',
                'longitude' => '-149.45262',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'title' => 'libero Integer',
                'price' => '168.15',
                'address' => 'Kirkwall',
                'latitude' => '83.79258',
                'longitude' => '41.55386',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'title' => 'quis accumsan',
                'price' => '569.95',
                'address' => 'Purral',
                'latitude' => '46.25947',
                'longitude' => '-12.57915',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'title' => 'at velit',
                'price' => '224.98',
                'address' => 'Metro',
                'latitude' => '52.76451',
                'longitude' => '-96.52033',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'title' => 'nulla magna',
                'price' => '470.97',
                'address' => 'Volgograd',
                'latitude' => '-68.35583',
                'longitude' => '-132.12587',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'title' => 'odio Phasellus',
                'price' => '259.38',
                'address' => 'Trento',
                'latitude' => '89.02575',
                'longitude' => '-30.53995',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'title' => 'vestibulum nec',
                'price' => '553.64',
                'address' => 'Goutroux',
                'latitude' => '-7.35121',
                'longitude' => '-100.15946',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'title' => 'vel sapien',
                'price' => '8.79',
                'address' => 'Itapipoca',
                'latitude' => '-34.63803',
                'longitude' => '-4.69134',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'title' => 'lectus ante',
                'price' => '234.15',
                'address' => 'Mohmand Agency',
                'latitude' => '27.07741',
                'longitude' => '94.02757',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'title' => 'vehicula et',
                'price' => '787.98',
                'address' => 'Khuzdar',
                'latitude' => '-43.38501',
                'longitude' => '-56.18318',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'title' => 'placerat velit',
                'price' => '593.49',
                'address' => 'Multan',
                'latitude' => '-4.65039',
                'longitude' => '104.5347',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'title' => 'pede malesuada',
                'price' => '811.73',
                'address' => 'Saint-Pierre',
                'latitude' => '-22.22491',
                'longitude' => '-56.43245',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'title' => 'lorem tristique',
                'price' => '411.75',
                'address' => 'Wanaka',
                'latitude' => '21.4793',
                'longitude' => '23.42666',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'title' => 'ut ipsum',
                'price' => '511.97',
                'address' => 'Rhayader',
                'latitude' => '-51.5518',
                'longitude' => '127.88149',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'title' => 'convallis dolor',
                'price' => '388.74',
                'address' => 'West Ham',
                'latitude' => '-41.94482',
                'longitude' => '-92.14706',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'title' => 'ligula elit',
                'price' => '71.13',
                'address' => 'Zwickau',
                'latitude' => '-78.97989',
                'longitude' => '28.52456',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'title' => 'massa lobortis',
                'price' => '190.62',
                'address' => 'Molenbeersel',
                'latitude' => '-73.02211',
                'longitude' => '-82.58863',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'title' => 'nisl arcu',
                'price' => '93.187',
                'address' => 'Carbonear',
                'latitude' => '29.4566',
                'longitude' => '-102.55239',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'title' => 'dui Suspendisse',
                'price' => '761.15',
                'address' => 'De Haan',
                'latitude' => '22.7999',
                'longitude' => '-80.04716',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'title' => 'dictum placerat',
                'price' => '529.88',
                'address' => 'Mandi Bahauddin',
                'latitude' => '56.89504',
                'longitude' => '-80.31555',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'title' => 'ipsum primis',
                'price' => '361.34',
                'address' => 'Paulatuk',
                'latitude' => '56.68818',
                'longitude' => '-160.01708',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'title' => 'tellus sem',
                'price' => '542.38',
                'address' => 'Jonqui�re',
                'latitude' => '-71.84815',
                'longitude' => '39.20323',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'title' => 'sem eget',
                'price' => '853.67',
                'address' => 'Roselies',
                'latitude' => '83.52975',
                'longitude' => '163.29933',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'title' => 'vitae erat',
                'price' => '252.60',
                'address' => 'Bracknell',
                'latitude' => '-79.7309',
                'longitude' => '-140.43224',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'title' => 'amet ultricies',
                'price' => '93.18',
                'address' => 'Floridablanca',
                'latitude' => '-14.73641',
                'longitude' => '-63.51913',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'title' => 'Cum sociis',
                'price' => '270.48',
                'address' => 'Antalya',
                'latitude' => '-10.64222',
                'longitude' => '135.02661',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'title' => 'eu euismod',
                'price' => '413.52',
                'address' => 'Veenendaal',
                'latitude' => '-88.76301',
                'longitude' => '-94.79857',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'title' => 'a magna',
                'price' => '506.24',
                'address' => 'Kendari',
                'latitude' => '-2.92568',
                'longitude' => '150.06932',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'title' => 'porttitor scelerisque',
                'price' => '317.64',
                'address' => 'Muradiye',
                'latitude' => '-31.86356',
                'longitude' => '68.10107',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'title' => 'ultrices, mauris',
                'price' => '597.45',
                'address' => 'Castel Baronia',
                'latitude' => '80.2276',
                'longitude' => '134.99873',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'title' => 'placerat eget',
                'price' => '717.78',
                'address' => 'Hawera',
                'latitude' => '-53.44564',
                'longitude' => '-102.04367',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'title' => 'tristique pellentesque',
                'price' => '523.41',
                'address' => 'Llandrindod Wells',
                'latitude' => '-55.04003',
                'longitude' => '154.33577',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'title' => 'nisl Nulla',
                'price' => '518.34',
                'address' => 'Spremberg',
                'latitude' => '-73.9244',
                'longitude' => '6.26684',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'title' => 'semper auctor',
                'price' => '257.59',
                'address' => 'Cambrai',
                'latitude' => '-20.67375',
                'longitude' => '-7.52347',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'title' => 'libero dui',
                'price' => '273.82',
                'address' => 'Montauban',
                'latitude' => '67.35547',
                'longitude' => '139.64817',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'title' => 'Nulla semper',
                'price' => '550.16',
                'address' => 'Guben',
                'latitude' => '-14.41642',
                'longitude' => '-31.34466',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'title' => 'sem, consequat',
                'price' => '120.93',
                'address' => 'Orlando',
                'latitude' => '68.70256',
                'longitude' => '-19.88325',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'title' => 'dis parturient',
                'price' => '562.46',
                'address' => 'Meix-le-Tige',
                'latitude' => '31.36376',
                'longitude' => '173.16013',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'title' => 'velit Quisque',
                'price' => '543.87',
                'address' => 'Casablanca',
                'latitude' => '89.98016',
                'longitude' => '-43.15692',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'title' => 'nulla magna',
                'price' => '608.11',
                'address' => 'Sant Eusanio',
                'latitude' => '-31.4794',
                'longitude' => '-128.25155',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'title' => 'facilisis Suspendisse',
                'price' => '594.35',
                'address' => 'Ciudad Valles',
                'latitude' => '-49.72272',
                'longitude' => '-97.49279',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'title' => 'et netus',
                'price' => '178.13',
                'address' => 'Ottawa',
                'latitude' => '0.45204',
                'longitude' => '-75.91218',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'title' => 'diam dictum',
                'price' => '300.82',
                'address' => 'Rüsselsheim',
                'latitude' => '-80.80269',
                'longitude' => '-2.94599',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'title' => 'velit in',
                'price' => '837.12',
                'address' => 'Jabbeke',
                'latitude' => '68.26451',
                'longitude' => '-2.90789',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'title' => 'tellus sem',
                'price' => '198.70',
                'address' => 'Pöttsching',
                'latitude' => '-68.56385',
                'longitude' => '43.10679',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'title' => 'aliquet Proin',
                'price' => '569.57',
                'address' => 'Attock',
                'latitude' => '-70.25387',
                'longitude' => '-1.66012',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'title' => 'pharetra Quisque',
                'price' => '801.34',
                'address' => 'Tenali',
                'latitude' => '51.10752',
                'longitude' => '1.33781',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'title' => 'lobortis quis',
                'price' => '49.49',
                'address' => 'Pınarbaşı',
                'latitude' => '-8.51972',
                'longitude' => '-168.04347',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'title' => 'nulla magna',
                'price' => '956.06',
                'address' => 'Exeter',
                'latitude' => '56.23138',
                'longitude' => '160.31088',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'title' => 'pharetra ut',
                'price' => '813.96',
                'address' => 'Lapscheure',
                'latitude' => '-49.67495',
                'longitude' => '79.12093',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'title' => 'at pede',
                'price' => '207.67',
                'address' => 'Mataró',
                'latitude' => '-85.05862',
                'longitude' => '-139.36715',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'title' => 'luctus lobortis',
                'price' => '13.56',
                'address' => 'Perpignan',
                'latitude' => '-14.82178',
                'longitude' => '85.47336',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'title' => 'est Nunc',
                'price' => '396.29',
                'address' => 'Satna',
                'latitude' => '5.94154',
                'longitude' => '32.49798',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'title' => 'Aliquam ornare',
                'price' => '195.10',
                'address' => 'Hemel Hempstead',
                'latitude' => '-13.25504',
                'longitude' => '-86.22404',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'title' => 'ac mattis',
                'price' => '741.68',
                'address' => 'Mottola',
                'latitude' => '-27.0427',
                'longitude' => '-106.04096',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'title' => 'et eros',
                'price' => '558.29',
                'address' => 'North Berwick',
                'latitude' => '-38.51761',
                'longitude' => '-15.94209',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'title' => 'arcu Vivamus',
                'price' => '553.63',
                'address' => 'Sefro',
                'latitude' => '33.17244',
                'longitude' => '75.54954',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'title' => 'ut nulla.',
                'price' => '647.49',
                'address' => 'Harelbeke',
                'latitude' => '-19.00547',
                'longitude' => '-155.75002',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'title' => 'natoque penatibus',
                'price' => '940.44',
                'address' => 'West Jordan',
                'latitude' => '21.40667',
                'longitude' => '55.38702',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'title' => 'eu accumsan',
                'price' => '188.16',
                'address' => 'San Rosendo',
                'latitude' => '-66.98336',
                'longitude' => '88.54882',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'title' => 'libero mauris',
                'price' => '535.30',
                'address' => 'Ramara',
                'latitude' => '24.92732',
                'longitude' => '55.7423',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'title' => 'pellentesque tellus',
                'price' => '103.62',
                'address' => 'Hulste',
                'latitude' => '52.92841',
                'longitude' => '-10.56611',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'title' => 'convallis in',
                'price' => '343.11',
                'address' => 'Sint-Renelde Saintes',
                'latitude' => '-89.53797',
                'longitude' => '-90.95736',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'title' => 'luctus ut',
                'price' => '135.43',
                'address' => 'Bouwel',
                'latitude' => '30.98243',
                'longitude' => '167.55121',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'title' => 'ante blandit',
                'price' => '674.96',
                'address' => 'Etawah',
                'latitude' => '-20.91199',
                'longitude' => '109.13674',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'title' => 'id magna',
                'price' => '586.37',
                'address' => 'Gols',
                'latitude' => '-66.71042',
                'longitude' => '-107.95887',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'title' => 'orci sem',
                'price' => '273.47',
                'address' => 'Castello',
                'latitude' => '-22.33072',
                'longitude' => '132.76976',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'title' => 'eget ipsum',
                'price' => '296.65',
                'address' => 'Fontenoille',
                'latitude' => '18.14605',
                'longitude' => '-64.81945',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'title' => 'turpis egestas',
                'price' => '41.99',
                'address' => 'Stilo',
                'latitude' => '-86.06806',
                'longitude' => '83.04425',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'title' => 'Duis risus',
                'price' => '73.11',
                'address' => 'Rankweil',
                'latitude' => '62.21218',
                'longitude' => '149.76483',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'title' => 'lacus Aliquam',
                'price' => '712.94',
                'address' => 'Vaulx-lez-Chimay',
                'latitude' => '86.06095',
                'longitude' => '-70.08986',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'title' => 'eu neque',
                'price' => '711.48',
                'address' => 'South Perth',
                'latitude' => '-36.02321',
                'longitude' => '58.36367',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'title' => 'enim Mauris',
                'price' => '509.06',
                'address' => 'Coevorden',
                'latitude' => '77.47306',
                'longitude' => '-54.21233',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'title' => 'sed consequat',
                'price' => '29.73',
                'address' => 'Torrevieja',
                'latitude' => '-50.67508',
                'longitude' => '-5.80946',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'title' => 'Nunc lectus',
                'price' => '241.93',
                'address' => 'La Magdeleine',
                'latitude' => '-69.03952',
                'longitude' => '-19.77391',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]                
        ];

        foreach ($promotions as $promotion){
            Promotion::create($promotion);
        }
    }
}
