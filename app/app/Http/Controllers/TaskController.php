<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;

class TaskController extends Controller
{
    //取得
    public function index()
    {
        $task = Task::orderBy('id', 'asc')->get();

        return view('task', [
            'tasks' => $task
        ]);
    }

    //登録
    public function register(Request $request)
    {
        $task = new Task;
        $task->task = $request->task;
        $task->save();
        return redirect('/');
    }

    //削除
    public function delete(Request $request)
    {
        $task = Task::find($request->id);
        $task->delete();
        return redirect('/');
    }
}
