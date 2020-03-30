<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class sellController extends Controller
{
    /**
     * Paginate the authenticated user's tasks.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        // paginate the authorized user's tasks with 5 per page
        $tasks = DB::table('tasks')->paginate(4);
        

        // return task index view with paginated tasks
        return view('sell', [
            'tasks' => $tasks
        ]);
    }


}
