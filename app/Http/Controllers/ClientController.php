<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;


class ClientController extends Controller
{
    public function getAllPosts()
    {
        $response = Http::get("https://jsonplaceholder.typicode.com/posts");
        return $response->json();
    }

    public function getPostById($id)
    {
        $response = Http::get("https://jsonplaceholder.typicode.com/posts/".$id);
        return $response->json();
    }

    public function addPost()
    {
        $response = Http::post("https://jsonplaceholder.typicode.com/posts", [
            'userId'=>1,
            'title' => 'new post',
            'body' => 'new post description'
        ]);
        return $response->json();
    }

    public function updatePost()
    {
        $response = Http::put("https://jsonplaceholder.typicode.com/posts/1",[
            'title' => 'updated post title',
            'body' => 'updated post description'
        ]);
        return $response->json();
    }

    public function deletePost($id)
    {
        $response = Http::delete("http://jsonplaceholder.typicode.com/posts/".$id);
        return $response->json();
    }
}
