<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BlogPost;
class blogcontroller extends Controller
{
 function blog(){
    $blogPosts = BlogPost::latest()->paginate(10);
    return view('layouts.pages.blog', compact('blogPosts'));
 }

function writeblog(Request $request){

    $blogContent=$request->get('blog');

    $title=$request->get('title');
    $blogPost = BlogPost::create([
        'title' => $title,
        'content' =>  $blogContent,
    ]);

   return view('layouts.pages.admin.addblog');

} 
}
