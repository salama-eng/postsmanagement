<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use App\Models\Posts;
use Illuminate\Http\Request;

class PostsController extends Controller
{
   function index($id = 0)
   {

        $postsAll= $id > 0 ? Posts::where('category_id',$id)->get() : Posts::get();
        $categories=Categories::get();
            return view('posts', [
                'posts' => $postsAll,
                'categories' => $categories,
            ]);
     
   }

   function show_add()
   {  
            $categories=Categories::get();
            return view('show_add', [
                'categories' => $categories,
            ]);
     
   }

   public function save_post(Request $request)
{
    $post = new Posts();
    $post->title =$request->title;
    $post->category_id = $request->category_id;
    $post->details = $request->details;
    $post->image = $_FILES['image']['name'];
    $post->save();
    $request->file('image')->store('media', 'public');
    if ($request->hasFile('media')) {
        foreach ($request->file('media') as $file) {
            $path = $file->store('media', 'public');
            $type = $file->getClientOriginalExtension();
            $post->media()->create([
                'name' => $path,
                'type' => $type,
            ]);
        }
    }

    return redirect()->route('index')->with('success', 'Post created successfully.');
}
   
public function delete($id)
{
    $post = Posts::findOrFail($id);
    $post->delete();
    return redirect()->route('index')->with('success', 'Post deleted successfully.');
}
}
