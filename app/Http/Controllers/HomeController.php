<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class HomeController extends Controller
{
    public function index(){
        return view('frontend.templates.layoutClient');
    }

    public function addAccount(UserRequest $request){
        $role = DB::table('role')->get();
        if ($request->isMethod('POST')){
            $params =  $request->except('_token');
            $params['password'] = Hash::make($request->password);
            $selectedValue = $request->input('role');
            $user = User::create($params);
            if ($user->id) {
                Session::flash('success','Add user successfully');
                return redirect()->route('route_home');
            }
        }
        return view('frontend.clients.createAcc',compact('role'));
    }

}

