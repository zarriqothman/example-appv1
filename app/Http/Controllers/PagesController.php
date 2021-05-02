<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function view(){
        $data = array(
            'title' => 'View Note',
            'note' => ['note 1', 'test test test']
        );
        return view('sample.view')->with($data);
    }

    public function add(){
        $title = "Add Note";
        return view('sample.add')->with('title', $title);
    }

    public function edit(){
        $data = array(
            'title' => 'Edit Note',
            'note' => ['note 1', 'test test test']
        );
        return view('sample.edit')->with($data);
    }
}
