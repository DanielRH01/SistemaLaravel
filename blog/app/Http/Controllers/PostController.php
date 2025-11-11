<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    //Creación de métodos para las rutas definidas en web.php
    public function index(){
        return view('post.index');
    }

    public function create(){
        return view('post.create');
    }

    //Función para mostrar un post específico según el parámetro {post} ingresado en la URL
    public function show($post){
        
        //compact(post) también es una opción similar para enviar variables a la vista;
        return view('post.show', [
            'post' => $post
        ]);
    }
}
