<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class NewsletterWebController extends Controller
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
        $newsletters = \App\Newsletter::orderBy('created_at','desc')->get();
        return view('admin.newsletter.index', array('newsletters'=>$newsletters));    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(){
        if (!Auth::check()) {
            return redirect('login/');
        }
        return view('admin.newsletter.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request){
        if (!Auth::check()) {
            return redirect('login/');
        }
        $newsletter = \App\Newsletter::create([
            'title'=> $request->input('title'),
            'content'=> $request->input('content'),
            'imagen'=>''
        ]);
        $imageName = time().'.'.$request->image->getClientOriginalExtension();
        $request->image->move(public_path('newsletters/'.$newsletter->id.'/'), $imageName);
        \App\Newsletter::find($newsletter->id)->update([
            'imagen'=>$imageName
        ]);
        flash('newsletter registrado!')->success();
        return redirect('admin/newsletter/');
    }

    public function update(Request $request, $newsletterid){
        if (!Auth::check()) {
            return redirect('login/');
        }
        if ($request->isMethod('post')) {
            \App\Newsletter::find($newsletterid)->update([
                'title'=> $request->input('title'),
                'content'=> $request->input('content')
            ]);
            $newsletter = \App\Newsletter::find($newsletterid);
            $imageName = time().'.'.$request->image->getClientOriginalExtension();
            $request->image->move(public_path('newsletters/'.$newsletter->id.'/'), $imageName);
            $newsletter->imagen = $imageName;
            $newsletter->save();
            flash('Blog actualizado!')->success();
            return redirect('admin/newsletter/');
            }
            else{
                // $newsletter = \App\Newsletter::pluck('name', 'id');
                $newsletter = \App\Newsletter::find($newsletterid);
                return view('admin.newsletter.update', array(
                    // 'categories'=>$categories,
                'newsletter'=>$newsletter
            ));
        }
    }

    public function delete(Request $request, $id){
        if (!Auth::check()) {
            return redirect('login/');
        }
        \App\Newsletter::find($id)->delete();
        flash('newsletter eliminado!')->success();
        return redirect('admin/newsletter/');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function show($id)
    // {
    //     //
    // }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function edit($id)
    // {
    //     //
    // }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function update(Request $request, $id)
    // {
    //     //
    // }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function destroy($id)
    // {
    //     //
    // }
}
