<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    public function index(){
        $posts = Post::all();
//        $posts = DB::table('posts')
//            ->join('customers','posts.customer_id','customers.id')
//            ->join('categories','posts.category_id','categories.id')
//            ->get();
        return view('AllPost',compact('posts'));
    }
    public function Post(){
//         $posts = DB::table('posts')
//             ->join('customers','posts.customer_id','customers.id')
//             ->join('categories','posts.category_id','categories.id')
//             ->where('customer_id',2)
//             ->get();

        $posts = Post::where('customer_id',2)->get();
        return view('PostById', compact('posts'));
    }
}
