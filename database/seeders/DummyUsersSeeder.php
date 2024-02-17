<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DummyUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $userData = [
            //guru
            [
                'NIP'=>'guru1',
                'name'=>'Putri',
                'email'=>'putri@gmail.com',
                'password'=>bcrypt('guru'),
                'telp'=>'0895360953970',
                'role'=>'guru',
                'jurusan'=>'TJKT',
                'kuota_bimbingan' =>'2',
            ],
            [
                'NIP'=>'guru2',
                'name'=>'Almaas',
                'email'=>'almaas@gmail.com',
                'password'=>bcrypt('guru'),
                'telp'=>'0895360953970',
                'role'=>'guru',
                'jurusan' => 'DPIB',
                'kuota_bimbingan' =>'5',
            ],

            //siswa
            [
                'NIS'=>'siswa1',
                'name'=>'Kirani',
                'email'=>'kirani@gmail.com',
                'password'=>bcrypt('siswa'),
                'role'=>'siswa',
                'jurusan'=>'TJKT',
                'telp'=>'083452197680',
                'kelas'=>'TJKT 1',

            ],
            [
                'NIS'=>'siswa2',
                'name'=>'Juli',
                'email'=>'juli@gmail.com',
                'password'=>bcrypt('siswa'),
                'role'=>'siswa',
                'jurusan'=>'DPIB',
                'telp'=>'082546398462',
                'kelas'=>'DPIB 1',
            ],
            [
                'NIS'=>'siswa3',
                'name'=>'Andini',
                'email'=>'andini@gmail.com',
                'password'=>bcrypt('siswa'),
                'role'=>'siswa',
                'jurusan'=>'TJKT',
                'telp'=>'082546398462',
                'kelas'=>'TJKT 1',
            ],

            //admin
            [
                'no_admin'=>'admin1',
                'name'=>'Galih',
                'email'=>'galih@gmail.com',
                'password'=>bcrypt('admin'),
                'role'=>'admin',
            ],
            [
                'no_admin'=>'admin2',
                'name'=>'Bayu',
                'email'=>'bayu@gmail.com',
                'password'=>bcrypt('admin'),
                'role'=>'admin',
                'jurusan'=>'DPIB',
            ],
        ];
        foreach($userData as $key => $val){
            User::create($val);
        } 
    }
}
