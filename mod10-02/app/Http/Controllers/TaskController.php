<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use App\Task;

class TaskController extends Controller
{
    function show() {
        $tasks = Task::all();
        return view('/task', compact('tasks'));
    }
    
    function create(Request $request) {
        // dd($request);
        // echo $request->name;
        $rules = array(
            'name' => 'required',
        );
        $this->validate($request, $rules);

        $new_task = new Task;
        $new_task->name = $request->name;
        $new_task->save();

        Session::flash('create_article_success','Task successfully created');

        return redirect('/');
    }

    function delete($id){
        $tasks = Task::find($id);
        $tasks->delete();
        Session::flash('create_article_success','Task successfully deleted');
        return redirect('/');
    }
}
