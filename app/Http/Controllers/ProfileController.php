<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;


class ProfileController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function profile()
    {
        
       
  
        return view('user.profile.index');

    }
    public function updateprofile(Request $request, User $user) {

        $id = auth()->user()->id;
		$user = User::findorfail($id);


		if($request->password){

            if ($request->get('password') == $request->get('confirm_password')) {
                $user->name = $request->get('name');

                $user->email = $request->get('email');

                $user->password = Hash::make($request->get('password'));

                $user->save();

                return redirect('/profile')->with([
                    "success" => "Details updated succesfully"
                ]);

            }
            else{

                return redirect('/profile')->with([
                    "error" => "passwords don't match"
                ]);
            }
        }
        else{

            $user->name = $request->get('name');

            $user->email = $request->get('email');

            $user->update();

            
            return redirect('/profile')->with([
                "success" => "Details updated succesfully"
            ]);
        }
       

	}
}
