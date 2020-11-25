<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\Models\User;
use DB;

class UserController extends Controller
{
    public function index(){
        $user= User::get();
        return \view('index')->with('users',$user);
    }
    public function input(){
        return \view('input');
    }

    public function createUser(Request $request){
        $validator = Validator::make($request->all(), [
            'name' => 'bail|required|max:255',
            'email' => 'bail|required|email',
            'address' => 'bail|required|max:255',
            'phone' => 'bail|required|min:10|max:10',
        ]);
    
        if ($validator->fails()) {
            return back()->withInput()->withErrors($validator);
        }
        User::insert([
            'name' => $request->name,
            'email' => $request->email,
            'address' => $request->address,
            'phone' => $request->phone
        ]);
        return \redirect('/index');
    }

    public function editUser(Request $request){
        $validator = Validator::make($request->all(), [
            'name' => 'bail|required|max:255',
            'email' => 'bail|required|email',
            'address' => 'bail|required|max:255',
            'phone' => 'bail|required|min:10|max:10',
        ]);
            
        if ($validator->fails()) {
            return back()->withInput()->with('user',$user);
        }
        $user = User::find($request->id)->update($request->all());
        return \redirect('/index');
    }

    public function getEditUser(Request $request){
        $user = User::find($request->id);
        return \view('edit')->with('user',$user);
    }

    public function deleteUser(Request $request){
        DB::table('users')->where('id', '=', $request->id)->delete();
        return \redirect('/index');
    }
}
