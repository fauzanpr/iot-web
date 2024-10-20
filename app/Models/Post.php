<?php

namespace App\Models;

class Post {
    public static function all() {
        return [
        [
            "id" => 1,
            "slug" => "judul-artikel-1",
            "title" => "Judul Artikel 1",
            "author" => "Fauzan Pradana",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos illum accusamus inventore aliquid repellendus laudantium excepturi, nisi consequatur perspiciatis facilis magnam odit sed modi voluptates nihil. Quia culpa obcaecati officiis.",
        ],
        [
            "id" => 2,
            "slug" => "judul-artikel-2",
            "title" => "Judul Artikel 2",
            "author" => "Fauzan Pradana 2",
            "body" => "222 Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos illum accusamus inventore aliquid repellendus laudantium excepturi, nisi consequatur perspiciatis facilis magnam odit sed modi voluptates nihil. Quia culpa obcaecati officiis.",
        ]];
    }
}