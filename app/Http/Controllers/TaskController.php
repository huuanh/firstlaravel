<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Task;

use App\Http\Requests;

class TaskController extends Controller
{
    public function index() {
        $tasks = Task::all();
        return view('tasks.index', compact('tasks'));
    }

    public function show(Task $task) {
        return $task->name;
    }

	public function create(Task $task) {
        return view('tasks.create', compact('task'));
	}

    public function store(Request $request){
        $this->validate($request, [
            'name' => 'required'
        ]);
        $input = $request->all();
        Task::create($input);
        return redirect()
            ->route('task.index');
    }

    public function edit(Task $task) {
        return view('tasks.edit', compact('task'));
    }

    public function update($id, Request $request) {
        $task = Task::findOrFail($id);
//        return $request['name'];
        $this->validate($request, [
            'name' => 'required',
        ]);

        $task->name = $request['name'];
        $task->save();
        $input = $request->all();

        $task->fill($input)->save();

        return redirect()->route('task.index');
    }

    public function destroy($id) {
        $task = Task::where('id', '=', $id)->firstOrFail();
        $task->delete();
        return redirect()->route('task.index');
    }
}
