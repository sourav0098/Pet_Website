<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function edit(){
        $users=User::all();
        return view('pets.users',['users'=>$users]);
    }
    public function update(Request $request){
        $user=User::find($request->get('idEdit'));

        $user->fname=$request->get('fnameEdit');
        $user->lname=$request->get('lnameEdit');
        $user->email=$request->get('emailEdit');
        $user->phone=$request->get('phoneEdit');
        $user->street=$request->get('addressEdit');
        $user->city=$request->get('cityEdit');
        $user->province=$request->get('provinceEdit');
        $user->postal_code=$request->get('postalcodeEdit');

        $user->save();
        return redirect()->route('users.edit')->with('status', 'user-profile-updated');
    }
    public function destroy(Request $request){
        $user=User::find($request->get('id'));
        $user->delete();
        return redirect()->route('users.edit')->with('status', 'user-profile-deleted');
    }
}
