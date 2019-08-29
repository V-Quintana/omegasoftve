<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Blog;
use App\Category;
use App\ExpenseReport;


class BlogWebController extends Controller{

    public function index(Request $request){
        $categories = Category::get();
        $lastsBlogs = Blog::orderBy('created_at','desc')->take(4)->get();
        $search = $request->input('search');
        if($search){
            $blogs = Blog::where('title', 'like', '%'.$search.'%')->paginate(5);
        }else{
            $blogs = Blog::orderBy('created_at','desc')->paginate(5);
        }
        return view('web.blog',
            [
                'categories'=>$categories,
                'blogs'=>$blogs,
                'catg'=>null,
                'search'=>$search,
                'lastsBlogs'=>$lastsBlogs,
            ]);
    }

    public function blog($title){
        $title = str_replace('-',' ',$title);
        $blog = Blog::where('title', $title)->first();
        $blogComentario = ExpenseReport::orderBy('created_at','desc')->where('blog_id',  $blog->id)->get();

        $categories = Category::all();
        $title = str_replace('-',' ',$title); 
        $blog = Blog::where('title', 'like', '%'.$title.'%')->first();
        $lastsBlogs = Blog::orderBy('created_at','desc')->take(4)->get();
        return view('web.blogDetail',[
            'categories'=>$categories,
            'blog'=>$blog,
            'lastsBlogs'=>$lastsBlogs,
            'blogComentario'=>$blogComentario,
        ]);
    }

    public function blogsCategory(Request $request, $name){
        $categories = Category::get();
        $category_name = str_replace('-',' ',$name); 
        $catg = Category::where('name','like', '%'.$category_name.'%')->first();
        if(!$catg){
            return redirect('/blog/');
        }
        $lastsBlogs = Blog::orderBy('created_at','desc')->take(4)->get();
        $search = $request->input('search');
        if($search){
            $blogs = Blog::where('title', 'like', '%'.$search.'%')->where('category_id', $catg->id)->paginate(5);
        }else{
            $blogs = Blog::where('category_id', $catg->id)->paginate(5);
        }
        return view('web.blog',
        [
            'categories'=>$categories,
            'catg'=>$catg,
            'blogs'=>$blogs,
            'search'=>$search,
            'lastsBlogs'=>$lastsBlogs,
        ]);
    }
    
}