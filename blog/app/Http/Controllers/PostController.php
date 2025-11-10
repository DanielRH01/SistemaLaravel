<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){
        return "Aquí se mostrarán todos los post";
    }

    public function create(){
        return "Aquí se mostrará el formulario para crear un post";
    }

    public function show($post){
        return view('post.show', [
            'post' => $post
        ]);
    }
}
