<?php
namespace App\Http\Controllers;
use App\Post;
use App\Comment;
class CommentsController extends Controller
{    
    public function store(Post $post)
    {
    	$this->validate(request(), [
    		'name' => 'required',
    		'email' => 'required',
    		'comment' => 'required | min:5',
    	] );
    	$post->addComment(request(['name', 'email', 'comment']));
    	return back();    	
    }
}
