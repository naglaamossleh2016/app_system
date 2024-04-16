<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index()
    {
        $allPosts = [
            ['id' => 1 , 'title' => 'PHP','Priorty'=>'High','status'=>'New','logo'=>'image.png' ,'posted_by' => 'Ahmed', 'created_at' => '2022-10-10 09:00:00'],
            
        ];
        return view('projects.index', ['projects' => $allPosts]);
    }

    public function show($postId)
    {
        $singlePost = [
            'id' => 1 , 'title' => 'PHP','Priorty'=>'High','status'=>'New','logo'=>'image.png' , 'description' => 'this is description', 'posted_by' => 'Ahmed', 'created_at' => '2022-10-10 09:00:00'
        ];

        return view('projects.show', ['project' => $singlePost]);
    }

    public function create()
    {
        return view('projects.create');
    }

    public function store()
    {
//        $request = request();
//
//        dd($request->title, $request->all());

        //1- get the user data
        $data = request()->all();
        $title = request()->title;
        $priorty=request()->priorty;
        $status=request()->status;
        $log=request()->logo;
        $description = request()->description;
        $postCreator = request()->post_creator;

//        dd($data, $title, $description, $postCreator);

        //2- store the user data in database

        //3- redirection to posts.index
        return to_route('projects.index');
    }

    public function edit()
    {
        return view('projects.edit');
    }

    public function update()
    {
        //1- get the user data

        $title = request()->title;
        $priorty=request()->priorty;
        $description = request()->description;
        $postCreator = request()->post_creator;

//        dd($title, $description, $postCreator);

        //2- update the user data in database

        //3- redirection to posts.show

        return to_route('projects.show', 1);
    }

    public function destroy()
    {
        //1- delete the post from database

        //2- redirect to posts.index
        return to_route('projects.index');
    }
}
