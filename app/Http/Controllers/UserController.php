<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
class UserController extends Controller
{
    public function index(Request $request){
        $users = DB::table('users')
            ->select('id','name','email','password','phoneNumber','role')
            ->get();
        return view('users.index',compact('users'));
    }
//    public function add(UserRequest $request){
//        if ($request->isMethod('POST')){
//            $params =  $request->except('_token');
//            $selectedValue = $request->input('role');
//            $user = User::create($params);
//            if ($user->id) {
//                Session::flash('success','Add user successfully');
//                return redirect()->route('route_user_index');
//            }
//        }
//        return view('users.add');
//    }
    public function add(UserRequest $request){
        $role = DB::table('role')->get();
        if ($request->isMethod('POST')){
            $params =  $request->except('_token');
            $selectedValue = $request->input('role');
            $user = User::create($params);
            if ($user->id) {
                Session::flash('success','Add user successfully');
                return redirect()->route('route_user_index');
            }
        }
        return view('users.add',compact('role'));
    }
    public function edit(UserRequest $request, $id){
        // cach 1 DB query
        $user = DB::table('users')->where('id','=',$id)->first();
//        $user = DB::table('users')
//        ->select('users.*', 'role.name as role')
//        ->join('role', 'users.role', '=', 'role.id')
//        ->get();
//        dd($user);
        // cach 2 dung model
//        $airline = Airline::find($idAirline);
        if ($request->isMethod('POST')){
            $result = User::where('id',$id)->update($request->except('_token'));
            if ($result){
                Session::flash('success','successfully update the user');
                return redirect()->route('route_user_index',['id'=>$id]);
            }
        }
        return view('users.edit',compact('user'));
    }
    public function delete($id){
        User::where('id',$id)->delete();
        Session::flash('success','successfully deleted the user whose id is '.$id);
        return redirect()->route('route_user_index');
    }
}
