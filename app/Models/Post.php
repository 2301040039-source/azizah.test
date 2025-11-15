<?php

namespace App\Models;

class post
{
    public static function data(){
        return [
            ['id' => 1, 'title' => 'Acropolis, Yunani', 'image' => 'images/acropolis.jpg',  'content' => ''],
            ['id' => 2, 'title' => 'Shibuya, Jepang', 'image' => 'images/shibuya.jpg',  'content' => ''],
            ['id' => 3, 'title' => 'Cappadocia, mudi bale', 'image' => 'images/cappadocia.webp',  'content' => ''],
            ['id' => 4, 'title' => 'Giza, Lotim', 'image' => 'images/giza.webp',  'content' => ''],
            ['id' => 5, 'title' => 'Garuda wisnu kencana, Bali', 'image' => 'images/garuda.jpg',  'content' => ''],
            ['id' => 6, 'title' => 'Huayana, Peru', 'image' => 'images/huayana.jpg',  'content' => ''],
            ['id' => 7, 'title' => 'Jumeirah, Abu Dhabi', 'image' => 'images/jumeirah.jpg', 'content' => ''],
            ['id' => 8, 'title' => 'New York, US', 'image' => 'images/newyork.jpg', 'content' => ''],
            ['id' => 9, 'title' => 'Niagara, Kanada (karangan anak narmada)', 'image' => 'images/niagara.jpg', 'content' => ''],
        ];
    }
    public static function caridata($id){
        $posts = self::data();

        foreach ($posts as $post){
            if ($post['id'] == $id){
                return $post;
            }
        }
        return null;
    }
    // public static function count(){
    //     return count(self::data() );
    // }
}