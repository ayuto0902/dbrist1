<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class dbcontroller extends Controller
{
    public function index(Post $post){
        return $post->get();
    }
    
}
