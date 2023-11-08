<?php

namespace App\Models;


class Post 

{
   private static $shoes= [
    [
        "thumbnail1"=>"asset('build\assets\images\a1.svg')",
        "bigShoe1"=>"asset('build\asseWts\images\dsaddas.png')",
    ],
    [
        "thumbnail2"=>"asset('build\assets\images\a1.svg')",
        "bigShoe2"=>"asset('build\assets\images\b2.png')",
    ],
    [
        "thumbnail3"=>"asset('build\assets\images\a1.svg')",
        "bigShoe3"=>"asset('build\assets\images\b3.png')",
    ]
];
    public static function all(){
        return self::$shoes;
    }
}
