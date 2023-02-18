<?php

namespace App\Http\Controllers;

use App\Models\UserOption;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $userOption = UserOption::where('user_id', Auth::user()->id)->first();

        if ($userOption != NULL)
        {
            return redirect('/option/'.$userOption->option->id);
        }

        return view('home');
    }
}
