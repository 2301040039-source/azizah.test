<?php

namespace App\Http\Controllers;
use App\Models\post;

class BlogController extends Controller
{
    // seperti komponen tp bukan komponen halaman posts yg plural
   

    // halaman home isinya posts banyak
    public function home()
    {
        $posts = post::data();
        // $totalposts = post::count();
        return view('home', compact('posts'));
    }

    // single kalo diklik satu2
    public function show($id)
    {
        $post = post::caridata($id);
       

        if (!$post) {
            abort(404);
        }

        return view('post', compact('post'));
    }

    //halaman tentang
    public function about()
    {
        $info = [
            'name' => 'Bunga Azizah',
            'bio' => 'Mahasiswa.'
        ];

        return view('about', compact('info'));
    }
}