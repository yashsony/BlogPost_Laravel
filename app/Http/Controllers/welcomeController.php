<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\task;
class welcomeController extends Controller
{
    public function index() {
        $userCount = User::count();
        $bookCount= task::count();
        return view('welcome', compact('userCount','bookCount'));
  }

}
