<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;

use Illuminate\Http\Request;
use App\Trip;
use App\User;
use App\District;
use Auth;
use DB;
use redirect;
use Validator;
use Input;


class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    

    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function changePassword(Request $request)
    {

        // if (!(Hash::check($request->get('current-password'), Auth::user()->password))) {
        //     // The passwords matches
        //     return redirect()->back()->with("error","Your current password does not matches with the password you provided. Please try again.");
        //     }
        // if(strcmp($request->get('current-password'), $request->get('new-password')) == 0){
        //         //Current password and new password are same
        //     return redirect()->back()->with("error","New Password cannot be same as your current password. Please choose a different password.");
        //     }
        //     $validatedData = $request->validate([
        //     'current-password' => 'required',
        //     'new-password' => 'required|string|min:4|confirmed',
        //     ]);

            //Change Password
            // $user = Auth::user();
            // echo $user->password = bcrypt($request->get('new-password'));

            // $user->save();
            // return redirect()->back()->with("success","Password changed successfully !");
            
        
    }





    public function UpdateProfile(Request $request)
    {
         // dump($request->all());
         $user_model=new User();
         $user_model =$user_model::find(Auth::user()->id);
         $user_model->district=$request->district;
         $user_model->city=$request->city;
         $user_model->sex=$request->sex;
         $user_model->age=$request->age;
         $user_model->relationship_status=$request->relationship_status;
         $user_model->about_me=$request->about_me;
         $user_model->interests=$request->interests;
         $user_model->my_travel_style=$request->my_travel_style;
      
         
         $user_model->updated_at=time();
         $user_model->save();

         return redirect()->back()->with("success","Profile Updated successfully !");

    }


}
