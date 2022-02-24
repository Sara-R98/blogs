<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class LikePostController extends Controller
{
    public function store(Post $post)
    {
        $post->likes()->toggle(
            auth()->user()->id
            //تاگل میاداین ادی رو که بهش پاس میدیم با ایدی پست میبره و به جدول اضافه میکنه
        ); 
        return response(['ok'] , 200);
    }
}
