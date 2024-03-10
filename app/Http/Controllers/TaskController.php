<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StoreTaskRequest;
use App\Http\Requests\UpdateTaskRequest;
use App\Models\Task;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tasks = Task::where('complete', 0)->get();

        return view('tasks.index')
            ->with('tasks', $tasks);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  StoreTaskRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTaskRequest $request)
    {
        Task::firstOrCreate([
            'name' => $request->task,
        ]);

        return back()->with('status', "Task $request->task added successfully");
    }

    /**
     * Update the specified resource in storage.
     *
     * @param StoreTaskRequest $request
     * @param Task $task
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTaskRequest $request, Task $task)
    {
        if($task != null) {
            $task->complete = 1;
            $task->save();
        } else {
            return back()->with('error', "Task could not be found");
        }

        return back()->with('status', "Task $task->name completed successfully");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Task $task
     * @return \Illuminate\Http\Response
     */
    public function destroy(Task $task)
    {
        if($task != null) {
            $task->delete();

            return redirect('tasks')->with('status', "Task $task->name deleted!");
        }  else {
            return back()->with('error', "Task could not be found");
        }

    }
}
