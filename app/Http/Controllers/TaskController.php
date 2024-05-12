<?php

namespace App\Http\Controllers;

use App\Http\Requests\TaskRequest;
use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Contracts\Pagination\Paginator; 

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       return view('tasks.index',['tasks'=>Task::latest()->paginate()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('tasks.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(TaskRequest $request)
    {
       $task = Task::create( $request->validated());
       return redirect()->route('tasks.show',['task'=>$task->id])->with('success','Task Added Successfully...');
    }

    /**
     * Display the specified resource.
     */
    public function show(Task $task)
    {
       return view('tasks.show',['task'=>$task]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Task $task)
    {

       return view('tasks.edit',['task'=>$task]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(TaskRequest $request, Task $task)
    {
        $task->update($request->validated());
        return redirect()->route('tasks.show',['task'=>$task])->with('success','Task Updated Successfully...');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Task $task)
    {
        $task->delete();
        return redirect()->route('tasks.index');
    }

    // public function toggle(Task $task)  {
    //     $task->toggle();
    //     return redirect()->back();
    // }
}
 