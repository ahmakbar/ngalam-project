<?php

namespace App\Models;



class Post 
{
    public static $blog_posts = [

        
            [
                "title" => "Taman Labirin",
                "slug" => "judul-tulisan-pertama",
                "body" => "Taman Labirin Coban Rondo menjadi salah satu tempat wisata yang cocok dikunjungi bersama keluarga. Labirin ini dibuat dari tanaman hijau setinggi dua meter. Ketika masuk ke sini, bakal berasa masuk ke dunia film fiksi seperti Alice in the Wonderland. Tidak hanya mencari jalan keluar dari labirin, kita juga bisa menikmati aktivitas seru lainnya di Taman Labirin Coban Rondo. Seperti bermain air di air terjun, outbond hingga berkemah. Tempat wisata ini berlokasi di kawasan Coban Rondo, Pandesari, Kecamatan Batu."
            ],
            [
                "title" => "Pariwisata Kedua",
                "slug" => "judul-tulisan-kedua",
                "body" => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Provident odio minus blanditiis, eius quaerat aliquam amet cupiditate alias vero ad. Similique aliquam voluptatem accusamus non at deserunt laudantium consequuntur vero."
            ]
        ]
            ;

        public static function all()
        {
            // return $blog_posts ?? null;
            return self::$blog_posts;
        }

        public static function find($slug)
        {
            $posts = self::$blog_posts;
            $post = [];
        foreach ($posts as $p) {
            if ($p["slug"] === $slug) {
                $post = $p;
            }
        }
        return $post;
        }
    }
        

