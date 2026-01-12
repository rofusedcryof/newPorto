<?php

namespace App\Http\Controllers;

class PortoflioController extends Controller
{
    public function index()
    {
        $data = [
            'nama' => 'Dionysius Diaz Damar Wilansa',
            'program_studi' => 'Informatika',
            'universitas' => 'Universitas Sanata Dharma',
            'profile_photo' => 'profile.jpg',
            'deskripsi_singkat' => 'Saya merupakan seorang mahasiswa dari Program Studi Informatika Universitas Sanata Dharma dengan fokus dan minat utama pada bidang Machine Learning. Saya juga memiliki keahlian dalam pengembangan web dan manajemen database untuk mendukung implementasi model AI.',
            'skills' => [
                'Machine Learning',
                'Web Development',
                'Database',
            ],
            'fokus_utama' => 'Machine Learning',
            'kontak' => [
                'linkedin' => 'https://www.linkedin.com/in/dionysiusdiaz/',
                'github' => 'https://github.com/rofusedcryof',
                'email' => 'dezttroll@gmail.com',
                'whatsapp' => 'https://wa.me/628812669728',
            ],
            'lokasi' => 'Based in Yogyakarta, Indonesia (GMT+7)',
        ];

        return view('portfolio', compact('data'));
    }
}
