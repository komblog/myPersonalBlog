<?php
namespace App\Http\Controllers;
use Carbon\Carbon;
use App\Post;
use Purifier;
use Illuminate\Http\Request;
class BlogController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except(['index', 'show']);
    }
    public function index()
    {	
    	$posts = Post::latest()
                ->filter(request(['month', 'year']))
                ->get();
    	return view('home', compact('posts'));
    }
    public function formCreate()
    {
    	return view('new-post');
    }
    public function create()
    {
    	$this->validate(request(), [
    		'title' => 'required',
    		'content' => 'required'
    	]);

       // $post = Post::create([

       //      'title' => request('title'),
       //      'content' => request('content'),
       //      'user_id' => auth()->id()

       //  ]);
        auth()->User()->publish(
            new Post(request([
                    'title',
                    'content'
            ]))
        );
    	return redirect('/');
    }
    public function show($id)
    {
    	$post = Post::find($id);
    	return view('single-post', compact('post'));
    }

}
