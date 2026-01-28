<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $courses = [
            [
                'course_code' => 'CS101',
                'name' => 'Algoritma & Pemrograman',
                'sks' => 3,
                'lecturer' => 'Dr. Budi',
                'description' => 'Dasar pemrograman...',
                'category' => 'Wajib'
            ],
            [
                'course_code' => 'CS102',
                'name' => 'Struktur Data',
                'sks' => 3,
                'lecturer' => 'Ir. Siti',
                'description' => 'Mempelajari list, tree, graph...',
                'category' => 'Wajib'
            ],
            [
                'course_code' => 'CS103',
                'name' => 'Pemrograman Web',
                'sks' => 3,
                'lecturer' => 'Ir. Wahid',
                'description' => 'Mempelajari pemrograman web',
                'category' => 'Wajib'
            ],
            [
                'course_code' => 'CS104',
                'name' => 'Sistem Teknologi Informasi',
                'sks' => 2,
                'lecturer' => 'Ir. Wowo',
                'description' => 'Mempelajari Sistem Tekonologi dan Informasi',
                'category' => 'Wajib'
            ],
            [
                'course_code' => 'CS105',
                'name' => 'Basis Data',
                'sks' => 3,
                'lecturer' => 'Dr. Ahmad',
                'description' => 'Mempelajari Database',
                'category' => 'Wajib'
            ],
            [
                'course_code' => 'CS106',
                'name' => 'Robotika',
                'sks' => 2,
                'lecturer' => 'Dr. Hasyim',
                'description' => 'Mempelajari IoT dasar',
                'category' => 'Permintaan'
            ],
            [
                'course_code' => 'CS107',
                'name' => 'Bahasa Inggris',
                'sks' => 3,
                'lecturer' => 'Dr. Andi',
                'description' => 'Mempelajari Bahasa Inggris',
                'category' => 'Wajib'
            ],
            [
                'course_code' => 'CS108',
                'name' => 'Bahasa Indonesia',
                'sks' => 3,
                'lecturer' => 'Dr. Nayli',
                'description' => 'Mempelajari Bahasa Indonesia',
                'category' => 'Wajib'
            ],
            [
                'course_code' => 'CS109',
                'name' => 'Pendidikan Kewarganegaraan',
                'sks' => 3,
                'lecturer' => 'Dr. Kuncoro',
                'description' => 'Mempelajari Tentang Kewarganegaraan',
                'category' => 'Wajib'
            ],
            [
                'course_code' => 'CS110',
                'name' => 'Pendidikan Agama',
                'sks' => 2,
                'lecturer' => 'Dr. Sholahuddin',
                'description' => 'Mempelajari Tentang Keagamaan',
                'category' => 'Wajib'
            ],
            [
                'course_code' => 'CS111',
                'name' => 'Praktikum Pemrograman Web',
                'sks' => 1,
                'lecturer' => 'Ir. Wahid',
                'description' => 'Mempraktikkan Pemrograman Web',
                'category' => 'Wajib'
            ],
            [
                'course_code' => 'CS112',
                'name' => 'Praktikum Algoritma dan Pemrograman',
                'sks' => 1,
                'lecturer' => 'Dr. Budi',
                'description' => 'Mengimplementasikan Algoritma',
                'category' => 'Wajib'
            ],
            [
                'course_code' => 'CS113',
                'name' => 'Praktikum Sistem Operasi',
                'sks' => 1,
                'lecturer' => 'Dr. Farid',
                'description' => 'Mempraktikkan Pemrograman Web',
                'category' => 'Wajib'
            ],
            [
                'course_code' => 'CS114',
                'name' => 'Praktikum Robotika',
                'sks' => 1,
                'lecturer' => 'Dr. Hasyim',
                'description' => 'Mempraktikkan Perakitan IoT',
                'category' => 'Wajib'
            ],
            [
                'course_code' => 'CS115',
                'name' => 'Bahasa Arab',
                'sks' => 2,
                'lecturer' => 'Dr. Subkhan',
                'description' => 'Nahwu Sorof',
                'category' => 'Perminatan'
            ],
            [
                'course_code' => 'CS116',
                'name' => 'Bahasa Jepang',
                'sks' => 2,
                'lecturer' => 'Dr. Andini',
                'description' => '-',
                'category' => 'Perminatan'
            ],
        ];

        foreach ($courses as $course) {
            \App\Models\Course::create($course);
        }
    }
}
