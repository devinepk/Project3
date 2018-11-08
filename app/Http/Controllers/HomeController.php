<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }


    public function store(Request $request, $blog_id)
   {
       $blog = new \App\blog;
       $blog->title = $request->input('title');
       $blog->post = $request->input('post');
       $blog->save();
       // $request->session()->flash('status', "Task <strong>{$item->task}</strong> was added!");
       // return redirect("/lists/{$item->todolist_id}");
   }

}
