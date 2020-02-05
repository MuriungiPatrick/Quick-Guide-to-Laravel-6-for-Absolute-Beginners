<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Session;
use Hash;
use Image;

class ProfileController extends Controller
{
  /**
   * Create a new controller instance.
   *
   * @return void
   */
  public function __construct()
  {
      $this->middleware(['auth', 'verified']);
  }
    /**
     * Get the User Profile View.
     */
     public function profile()
     {
       return view('profile');
     }
     /**
      * Update the Authenticated user profile.
      */
      public function profileUpdate(Request $request)
      {
        //Validation Rules.
        $request->validate([
          'name' => 'required|min:6|string|max:255',
          'email' => 'required|email|string|max:255'
        ]);
        //save the Profile update.
        $user = Auth::user();
        $user->name = $request['name'];
        $user->email = $request['email'];
        $user->save();
        return back()->with('message', 'Profile Updated');;
      }
      /**
       * Get the Profile view for changing the password.
       */
       public function changePasswordForm()
       {
         return view('changepassword');
       }
       /**
        * Change the password for the Authenticated user.
        */
        public function changePassword(Request $request)
        {
          //Check if the Current Password matches with what is in the database.
          if(!(Hash::check($request->get('current_password'), Auth::user()->password))) {
            return back()->with('error', 'Your current password does not match with what you provided');
          }
          // Compare the Current Password and New Password using[strcmp function]
          if(strcmp($request->get('current_password'), $request->get('new_password')) == 0) {
            return back()->with('error', 'Your current password cannot be same with the new password');
          }
          //Validate the Password.
          $request->validate([
            'current_password' => 'required',
            'new_password'     => 'required|string|min:6|confirmed'
          ]);
          // Save the New Password.
          $user = Auth::user();
          $user->password = bcrypt($request->get('new_password'));
          $user->save();
           return back()->with('message', 'Password changed successfully');
        }
        /**
         * Get the profile upload view
         */
         public function getProfileAvatar()
         {
             return view('profilepicture');
         }
         /**
          * upload and change the Profile Avatar for the Authenticated user
          */
          public function profilePictureUpload(Request $request)
          {
            if($request->hasFile('avatar')) {
              $avatar = $request->file('avatar');
              $filename = time() . "." . $avatar->getClientOriginalExtension();
              Image::make($avatar)->resize(250, 250)->save(public_path('/img/avatar/' . $filename));
              $user = Auth::user();
              $user->avatar = $filename;

              //Validate the avatar
              $request->validate([
                'avatar' => 'required|image|dimensions:min_width=200,min_height=200|mimes:jpeg,png'
              ]);
              $user->save();
            }
            return back()->with('message', 'Profile Picture Uploaded Successfully');
          }
}
