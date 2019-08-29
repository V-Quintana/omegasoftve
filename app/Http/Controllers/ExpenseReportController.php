<?php

namespace App\Http\Controllers;
use App\ExpenseReport;
use App\Blog;
use App\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ExpenseReportController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){   
        if (!Auth::check()) {
            return redirect('login/');
        }
        $expenseReports = \App\ExpenseReport::all();
        return view('admin.commentary.index', array('expenseReports'=>$expenseReports));    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(){
         return view('modals.Commentary');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request){
        \App\ExpenseReport::create([
            'name'=> $request->input('name'),
            'email'=> $request->input('email'),
            'content'=> $request->input('content'),
            'blog_id'=> $request->input('blog_id'),
            
        ]);
        
        $blog = Blog::where('id', $request->input('blog_id'))->first();
        $title = str_replace(' ','-',$blog->title);
        flash('Comentario Registrado!')->success();
        return redirect('/blog/'.$title);

    }


    public function delete(Request $request, $id){
        if (!Auth::check()) {
            return redirect('login/');
        }
        \App\ExpenseReport::find($id)->delete();
        flash('Comentario eliminado!')->success();
        return redirect('admin/commentary/');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id){
        $comentarios = ExpenseReport::get();


        return view('web.blogDetail',[
            'comentarios'=>$comentarios,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id){
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id){
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id){
        //
    }


}
