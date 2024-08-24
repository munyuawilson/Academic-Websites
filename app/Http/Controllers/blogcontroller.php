<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BlogPost;
use App\Models\Sample;
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
function writeSamples(Request $request){

    $Content=$request->get('blog');

    $title=$request->get('title');

    $sample = Sample::create([
        'title' => $title,
        'content' =>  $Content,
    ]);
    


   return view('layouts.pages.admin.samples');

} 

function Sample(){
    $samples = Sample::latest()->paginate(10);
    return view('layouts.pages.samples',compact('samples'));
 }
 function returnsamples(){

    $samples = Sample::all();

    return view('layouts.pages.admin.deletesamples',compact('samples'));
 }
 function returnblogs(){

    $blogs = BlogPost::all();

    return view('layouts.pages.admin.deleteblog',compact('blogs'));
 }

 function destroy($id)
    {
         // Find the blog post by ID
    $blog = BlogPost::findOrFail($id);

    // Delete the blog post
    $blog->delete();

        return redirect('/admin/deleteblog');
    }
    function destroysamples($id)
    {
         // Find the blog post by ID
    $sample = Sample::findOrFail($id);

    // Delete the blog post
    $sample->delete();

        return redirect('/admin/deletesamples');
    }

}
