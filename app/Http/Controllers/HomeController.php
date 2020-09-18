<?php

namespace App\Http\Controllers;

use App\User;
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
    public function index(Request $request)
    {
        return view('home',[
            'userName' => $request->user->name,
            'userEmail' => $request->user->email,
            'userImage' => $request->user->image,
        ]);
    }

    public function userUpdate(Request $request){
        $userModel = new User;
        $userModel = $userModel->find(Auth::User()->id);
        if($request->image == 'image') {
            $userModel->image = $request->img;
        } else {
            $userModel->name = $request->name;
            $userModel->email = $request->email;
        }
        $userModel->save();
     
    }

  
}
