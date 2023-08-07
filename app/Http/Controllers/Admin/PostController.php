<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\post;

class PostController extends Controller
{
    public function index(Request $request)
    {
    //   dd($request->c);
       $query = post::with('category');
       if($request->search)
       {
         $query->where('title','like','%'.$request->search.'%');
       }
       $query->orderBy('id','desc');
       $posts = $query->paginate(20);

        $categories = Category::orderBy('name','asc')->get();
        return  response()->json(compact('posts'),200);
    }
    public function response(Request $request)

    {
      $post = post::where('id',$request->id)->first();
      $post->status = $request->status;
      $request->save();
      return  response()->json(['message' => 'status updated'],201);
    }
}
