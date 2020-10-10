<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    //
    public function show($post){
        //  return 'hello';
        $posts = [
            'myfirstpost' => 'this my first post' ,
            'mysecondpost' => 'this my second post'
        ];
        if(! array_key_exists($post,$posts))
        {abort(404, 'sorry doesnot exists');}

        return view('post',['post' => $posts[$post] //?? 'nothing here yet

        ]);
    }
}
