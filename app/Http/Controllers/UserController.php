<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Hash;
use DB;

class UserController extends Controller
{
     public function addUser(){
    	return view('admin.user.addUserContent');
    }

    public function saveUser(Request $request){
    	$this->validate($request, [
            'name' => 'required|max:255',
            'email' => 'required|email|unique:users',
            'role_id' => 'required',
            'password' => 'required|string|min:6',
        ]);

        $image = $request->file('image');
        $name = $image->getClientOriginalName();
        $uploadPath = 'public/UserImage/';
        $image->move($uploadPath, $name);
        $imageUrl = $uploadPath.$name;
        $this->saveUserInfo($request, $imageUrl);
        return redirect('/add/userInfo')->with('message', 'User Info Save Successfully');
    }


    protected function saveUserInfo($request, $imageUrl) {
        $user = new User();
        $user->image = $imageUrl;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->username = $request->username;
        $user->password = Hash::make($request->password);
        $user->role_id = $request->role_id;
        $user->save();
    }


    public function manageUser(){
    	$users = User::all();
    	return view('admin.user.manageUserContent', ['users'=>$users]);
    }

    public function viewUser($id) {
        $userById = DB::table('users')
                ->where('users.id', $id)
                ->first();
       return view('admin.user.viewUserContent',['userById'=>$userById]);
    }
    
    public function deleteUser($id){
        $user = User::where('id',$id)->first();
        $user->delete();
        return redirect()->back()->with('message', 'User delete Successfully');
    }

}
