<?php

namespace App\Http\Controllers;


use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class buyController extends Controller
{
    /**
     * Paginate the authenticated user's tasks.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        // paginate the authorized user's tasks with 5 per page
        $tasks = Auth::user()
            ->tasks()
            ->orderByDesc('created_at')
            ->paginate(2);

        // return task index view with paginated tasks
        return view('buy', [
            'tasks' => $tasks
        ]);
    }

    /**
     * Store a new incomplete task for the authenticated user.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        // validate the given request
        $data = $this->validate($request, [
            'Book_title' => 'required|string|max:255',
            'Book_author' => 'required|string|max:255',
            'price' =>     'required|numeric',
             'phone_no' =>  'required|string|max:10',
             
        ]);

        // create a new incomplete task with the given title
        Auth::user()->tasks()->create([
            'Book_title' => $data['Book_title'],
            'Book_author' => $data['Book_author'],
            'price' => $data['price'],
            'phone_no' => $data['phone_no'],


            
        ]);

        // flash a success message to the session
        session()->flash('status', 'Data saved!');

        // redirect to tasks index
        return redirect('/buy');
    }

    /**
     * Mark the given task as complete and redirect to tasks index.
     *
     * @param \App\Models\Task $task
     * @return \Illuminate\Routing\Redirector
     * @throws \Illuminate\Auth\Access\AuthorizationException
     */
    public function update(Task $task)
    {
        // check if the authenticated user can complete the task
        $this->authorize('complete', $task);

        // mark the task as complete and save it
        $task->save();

        // flash a success message to the session
        // session()->flash('status', 'Task Completed!');

        // redirect to tasks index
        return redirect('/buy');
    }
    
}
