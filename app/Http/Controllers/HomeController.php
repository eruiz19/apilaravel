<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

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
        $seu_token = "eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJzdG9yZUlkIjoiNCIsInVzZXJJZCI6Ijg2NzciLCJpYXQiOjE2NjAxNjMzNjMsImV4cCI6MTY2MjAwMTE5OX0.8jO-ykt8Su39hSQ6gGdOVj_H9xmseCWPeGh2Ao7J2bs"; 
        $variable = HTTP::get('https://api11.ecompleto.com.br/exams/processTransaction?accessToken=' .$seu_token);
        $variableArray = $variable->json();

        return view('home', compact('variableArray'));
    }
}
