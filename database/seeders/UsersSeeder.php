<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('user')->insert([
            'npm'=>'2008107010025',
            'nama'=>'Faris Rasyid',
            'username'=>'murid001',
            'password'=>'password001',
            'role'=>false,
        ]);
        DB::table('user')->insert([
            'npm'=>'2108107010005',
            'nama'=>'Muhammad Ilham Ghiffari',
            'username'=>'murid002',
            'password'=>'password002',
            'role'=>false,
        ]);
        DB::table('user')->insert([
            'npm'=>'2108107010007',
            'nama'=>'T. Malik Kamal',
            'username'=>'murid004',
            'password'=>'password004',
            'role'=>false,
        ]);
        DB::table('user')->insert([
            'npm'=>'2108107010008',
            'nama'=>'Devi Anggraini',
            'username'=>'murid005',
            'password'=>'password005',
            'role'=>false,
        ]);
        DB::table('user')->insert([
            'npm'=>'2208107010058',
            'nama'=>'Andika Pebriansyah',
            'username'=>'murid006',
            'password'=>'password006',
            'role'=>false,
        ]);
        DB::table('user')->insert([
            'npm'=>'2108107010017',
            'nama'=>'Fachri Rozan',
            'username'=>'murid007',
            'password'=>'password007',
            'role'=>false,
        ]);
        DB::table('user')->insert([
            'npm'=>'2108107010023',
            'nama'=>'Ardiansyah',
            'username'=>'murid008',
            'password'=>'password008',
            'role'=>false,
        ]);
        DB::table('user')->insert([
            'npm'=>'2108107010024',
            'nama'=>'Ulan Sawalia',
            'username'=>'murid009',
            'password'=>'password009',
            'role'=>false,
        ]);
        DB::table('user')->insert([
            'npm'=>'2108107010025',
            'nama'=>'Nabila Aprillia',
            'username'=>'murid010',
            'password'=>'password010',
            'role'=>false,
        ]);
        DB::table('user')->insert([
            'npm'=>'2108107010026',
            'nama'=>'Wilda Fahera',
            'username'=>'murid011',
            'password'=>'password011',
            'role'=>false,
        ]);
        DB::table('user')->insert([
            'npm'=>'2108107010027',
            'nama'=>'Ivan Chiari',
            'username'=>'murid012',
            'password'=>'password012',
            'role'=>false,
        ]);
        DB::table('user')->insert([
            'npm'=>'2108107010028',
            'nama'=>'Abdul Helmi',
            'username'=>'murid013',
            'password'=>'password013',
            'role'=>false,
        ]);
        DB::table('user')->insert([
            'npm'=>'2108107010029',
            'nama'=>'Fanul Nastia',
            'username'=>'murid014',
            'password'=>'password014',
            'role'=>false,
        ]);
        DB::table('user')->insert([
            'npm'=>'2108107010033',
            'nama'=>'Aulia Muzhaffar',
            'username'=>'murid015',
            'password'=>'password015',
            'role'=>false,
        ]);
        DB::table('user')->insert([
            'npm'=>'2108107010048',
            'nama'=>'Elsa Mardhatillah Hariska',
            'username'=>'murid016',
            'password'=>'password016',
            'role'=>false,
        ]);
        DB::table('user')->insert([
            'npm'=>'2108107010050',
            'nama'=>'Muhammad Farhan',
            'username'=>'murid017',
            'password'=>'password017',
            'role'=>false,
        ]);
        DB::table('user')->insert([
            'npm'=>'2108107010052',
            'nama'=>'Muhammad Kemal Fasya',
            'username'=>'murid018',
            'password'=>'password018',
            'role'=>false,
        ]);
        DB::table('user')->insert([
            'npm'=>'2108107010055',
            'nama'=>'Yahdina Ahsya',
            'username'=>'murid019',
            'password'=>'password019',
            'role'=>false,
        ]);
        DB::table('user')->insert([
            'npm'=>'2208107010063',
            'nama'=>'Hidayat Nur Hakim',
            'username'=>'murid020',
            'password'=>'password020',
            'role'=>false,
        ]);
        DB::table('user')->insert([
            'npm'=>'2108107010063',
            'nama'=>'Fatiiya Humaira Yunaz',
            'username'=>'murid021',
            'password'=>'password021',
            'role'=>false,
        ]);
        DB::table('user')->insert([
            'npm'=>'2108107010064',
            'nama'=>'T. Rifal Aulia',
            'username'=>'murid022',
            'password'=>'password022',
            'role'=>false,
        ]);
        DB::table('user')->insert([
            'npm'=>'2108107010065',
            'nama'=>'T. Indris Andina',
            'username'=>'murid023',
            'password'=>'password023',
            'role'=>false,
        ]);
        DB::table('user')->insert([
            'npm'=>'2208107010084',
            'nama'=>'Raihan Firyal',
            'username'=>'murid024',
            'password'=>'password024',
            'role'=>false,
        ]);
        DB::table('user')->insert([
            'npm'=>'2208107010087',
            'nama'=>'Muhammad Ilzam',
            'username'=>'murid025',
            'password'=>'password025',
            'role'=>false,
        ]);
        DB::table('user')->insert([
            'npm'=>'2108107010085',
            'nama'=>'Rizka Nawalul Azka',
            'username'=>'murid026',
            'password'=>'password026',
            'role'=>false,
        ]);
        DB::table('user')->insert([
            'npm'=>'2208107010002',
            'nama'=>'Mila Lestari',
            'username'=>'murid027',
            'password'=>'password027',
            'role'=>false,
        ]);
        DB::table('user')->insert([
            'npm'=>'2208107010003',
            'nama'=>'Alvia Zuhra',
            'username'=>'murid028',
            'password'=>'password028',
            'role'=>false,
        ]);
        DB::table('user')->insert([
            'npm'=>'2208107010005',
            'nama'=>'Meutia Aini',
            'username'=>'murid029',
            'password'=>'password029',
            'role'=>true,
        ]);
        DB::table('user')->insert([
            'npm'=>'2208107010009',
            'nama'=>'Iffatun Nisa Nasrullah',
            'username'=>'murid030',
            'password'=>'password030',
            'role'=>false,
        ]);
        DB::table('user')->insert([
            'npm'=>'2208107010015',
            'nama'=>'Shofia Nurul Huda',
            'username'=>'murid031',
            'password'=>'password031',
            'role'=>false,
        ]);
        DB::table('user')->insert([
            'npm'=>'2208107010021',
            'nama'=>'Muhammad Raihan',
            'username'=>'murid032',
            'password'=>'password032',
            'role'=>false,
        ]);
        DB::table('user')->insert([
            'npm'=>'2208107010022',
            'nama'=>'M. Arkan Haris',
            'username'=>'murid033',
            'password'=>'password033',
            'role'=>false,
        ]);
        DB::table('user')->insert([
            'npm'=>'2208107010025',
            'nama'=>'Agil Mughni',
            'username'=>'murid034',
            'password'=>'password034',
            'role'=>false,
        ]);
        DB::table('user')->insert([
            'npm'=>'2208107010027',
            'nama'=>'Cut Dahliana',
            'username'=>'murid035',
            'password'=>'password035',
            'role'=>false,
        ]);
    }
}
