<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\File;

class ProfileController extends Controller
{
    /**
     * Display the user's profile form.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\View\View
     */
    public function edit(Request $request)
    {
        $provinces=['Alberta','British Columbia','Manitoba','New Brunswick','New Foundland and Labrador','Northwest Territories','Nova Scotia','Nunavut','Ontario','Prince Edward Island','Quebec','Saskatchewan','Yukon Territory'];
        return view('pets.profile', [
            'user' => $request->user(),
            'provinces'=>$provinces,
        ]);
    }

    /**
     * Update the user's profile information.
     *
     * @param  \App\Http\Requests\ProfileUpdateRequest  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(ProfileUpdateRequest $request)
    {
        if($request->hasFile('image')){
            $destination='uploads/'.$request->user()->image;
            if(File::exists($destination)){
                if($destination!='uploads/user.png'){
                    File::delete($destination);
                }
            }
            $imagePath=time().$request->image->getClientOriginalName();
            $request->image->move(public_path('uploads'),$imagePath);
            $request->user()->image=$imagePath;
        }

        $request->user()->fname=$request->get('fname');
        $request->user()->lname=$request->get('lname');
        $request->user()->phone=$request->get('phone');
        $request->user()->street=$request->get('streetAddress');
        $request->user()->city=$request->get('city');
        $request->user()->province=$request->get('province');
        $request->user()->postal_code=$request->get('postal_code');

        $request->user()->save();

        return Redirect::route('profile.edit')->with('status', 'profile-updated');
    }

    /**
     * Delete the user's account.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Request $request)
    {
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current-password'],
        ]);

        $user = $request->user();

        Auth::logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/');
    }
}
