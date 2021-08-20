<?php

namespace App\Http\Controllers;
use App\Post;
use App\Comment;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function addPost()
    {
          $post = new Post();
          $post->title = "Second Post";
          $post->body = "First post description";
          $post->save();
          return "Post has been created successfully";
    }

    public function addComment($id)
    {
        $post = Post::find($id);
        $comment = new Comment();
        $comment->comment = "This is first comment";
        $post->comments()->save($comment);
        return "Comment has been created successfully";

    }

    public function getCommentsByPost($id)
    {
        $comments = Post::find($id)->comments;
        return $comments;
    }
}
