<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    /**
     * Display all to dos
     */
    public function index()
    {
        $todos = Todo::get();

        return view('index', [ 
            'todos' => $todos 
        ]);
    }

    /**
     * Store to do to the database
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required'
        ]);

        $todo = new Todo;
        $todo->title = $request->title;
        $todo->save();
        return back();

        // dd($request->title);
    }

    /**
     * Remove to do
     */
    public function destroy(Todo $todo)
    {
        $todo->delete();

        return back();
    }
}
