<?php

namespace App\Http\Controllers\API;

use App\Comment;
use App\Post;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CommentController extends Controller
{

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $postId)
    {
        $post    = Post::with('comments')->find($postId);
        $comment = new Comment(['comment' => $request->comment]);
        return $post->comments()->save($comment);
    }
}
