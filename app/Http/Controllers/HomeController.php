<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use redirect;
use App\Trip;
use App\District;
use Auth;
use DB;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     *Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('front.index');
    }
    public function find_new_trip()
    {
        $data['trips'] =\App\Trip::get();
        $data['users']=\App\User::get();

        return view('find.find_new_trips',['data'=>$data]);
    }
    public function all_travelers()
    {
        
         $data['trips'] =\App\District::get();
         $data['users']=\App\User::get();
        return view('find.search_all',['data'=>$data]);
    }



     public function find_a_travel_buddy()
    {
        $data['district'] =\App\District::get();
        $data['trips'] =\App\Trip::get();

        return view('find.search_travel',['data'=>$data]);
    }
    public function find_a_travel_buddy_search(Request $request)
    {
        // dump($request->all());
        $data['district'] =\App\District::get();
        
        if(($request->user_gender)||($request->from_date)||($request->to_date)||($request->district)||($request->room_share)||($request->budget_id)||($request->work_and_travel)||($request->type_of_journey)!=NULL){
            
            if($request->district){
                $destination=$request->district;
                $data['trips']=DB::table('trips')->where('destination',$destination)->get();
            }
            if($request->user_gender){
                $user_gender=$request->user_gender; 
                $data['trips']=DB::table('trips')->where('find_gender',$user_gender)->get();
            } 
            if($request->room_share){
                $room_share=$request->room_share; 
                $data['trips']=DB::table('trips')->where('room_sharing',$room_share)->get();
            }
            if($request->budget_id){
                $budget_id=$request->budget_id; 
                $data['trips']=DB::table('trips')->where('budget',$budget_id)->get();
            }
            if($request->work_and_travel){
                $work_and_travel=$request->work_and_travel; 
                $data['trips']=DB::table('trips')->where('work_and_travel',$work_and_travel)->get();
            }
            if($request->type_of_journey){
                $type_of_journey=$request->type_of_journey; 
                $data['trips']=DB::table('trips')->where('type_of_journey',$type_of_journey)->get();
            }if(($request->from_date)&&($request->to_date)){
                $start=$request->from_date;
                $start = str_replace('/', '-', $start);
                $start = date("Y-m-d", strtotime($start));
                $end=$request->to_date;
                $end = str_replace('/', '-', $end);
                $end = date("Y-m-d", strtotime($end));
                $data['trips']=DB::table('trips')->whereBetween('from_date', [$start,$end])->get();
                $data['trips']=DB::table('trips')->whereBetween('to_date', [$start,$end])->get();
            }
            
            
            
            return view('find.find_a_travel_buddy_search',['data'=>$data]);
        }
        // echo $data['count']=count($data[users]);
        else{
             $data['trips'] =\App\Trip::get();
         return view('find.search_travel',['data'=>$data]);
        }

    }






















    public function meet_up()
    {
        $data['trips'] =\App\District::get();
        $data['users']=DB::table('users')->where('wants_to_meet_up','1')->get();


        return view('find.search_meetUp',['data'=>$data]);
    }



    public function meet_up_search(Request $request)
    {
        $data['trips'] =\App\District::get();
        if(($request->user_gender)||($request->district)||($request->name)||($request->age)!=NULL){
            
            if($request->district){
            $district=$request->district;
            $data['users']=DB::table('users')->where('wants_to_meet_up','1')->where('district',$district)->get();
        }
        if($request->user_gender){
            $user_gender=$request->user_gender; 
            $data['users']=DB::table('users')->where('wants_to_meet_up','1')->where('sex',$user_gender)->get();
        }
        // User::where('name', 'LIKE', '%'.$search.'%')->get()
        if($request->name){
            $name=$request->name;
            $data['users']=DB::table('users')->where('wants_to_meet_up','1')->where('name', 'LIKE', '%'.$name.'%')->get();
        
        }
        if($request->age){
             $age=$request->age;
            if($age=='18'){
                $start=0;
                $end=$age;
                 $data['users']=DB::table('users')->where('wants_to_meet_up','1')->whereBetween('age', [$start,$end])->get();
            } 
            elseif($age=='24'){
                 $start=19;
                 $end=$age;
                  $data['users']=DB::table('users')->where('wants_to_meet_up','1')->whereBetween('age', [$start,$end])->get();
            }
            elseif($age=='34'){
                $start=25;
                $end=$age;
                  $data['users']=DB::table('users')->where('wants_to_meet_up','1')->whereBetween('age', [$start,$end])->get();
            }
             elseif($age=='44'){
                 $start=35;
                $end=$age;
                  $data['users']=DB::table('users')->where('wants_to_meet_up','1')->whereBetween('age',[$start,$end])->get();
            } 
            elseif($age=='54'){
                 $start=45;
                 $end=$age;
                  $data['users']=DB::table('users')->where('wants_to_meet_up','1')->whereBetween('age', [$start,$end])->get();

            }
            elseif($age=='100'){
                 $start=55;
                 $end=$age;
                  $data['users']=DB::table('users')->where('wants_to_meet_up','1')->whereBetween('age', [$start,$end])->get();
            }
        }
        // echo $data['count']=count($data[users]);
        
        
           return view('find.search_meetUp',['data'=>$data]);
        }
        else{
            echo "string11";
             $data['users']=\App\User::where('wants_to_meet_up','1')->get();
         return view('find.search_meetUp',['data'=>$data]);
        }
    }


    public function store(Request $request){
        // dump($request->all());
    }
     public function search_all(Request $request)
    {
        $data['trips'] =\App\District::get();
        
         // dump($request->all());
         
         // echo $data['count'] = DB::table('users')->whereBetween('age', array(1,30))->get();
        if(($request->user_gender)||($request->district)||($request->name)||($request->age)!=NULL){
            if($request->district){
            $district=$request->district;
            $data['users']=DB::table('users')->where('district',$district)->get();
            }
        if($request->user_gender){
            $user_gender=$request->user_gender; 
            $data['users']=DB::table('users')->where('sex',$user_gender)->get();
        }
        // User::where('name', 'LIKE', '%'.$search.'%')->get()
        if($request->name){
            $name=$request->name;
            $data['users']=DB::table('users')->where('name', 'LIKE', '%'.$name.'%')->get();
        
        }
        if($request->age){
             $age=$request->age;
            if($age=='18'){
                $start=0;
                $end=$age;
                 $data['users']=DB::table('users')->whereBetween('age', [$start,$end])->get();
            } 
            elseif($age=='24'){
                 $start=19;
                 $end=$age;
                  $data['users']=DB::table('users')->whereBetween('age', [$start,$end])->get();
            }
            elseif($age=='34'){
                $start=25;
                $end=$age;
                  $data['users']=DB::table('users')->whereBetween('age', [$start,$end])->get();
            }
             elseif($age=='44'){
                 $start=35;
                $end=$age;
                  $data['users']=DB::table('users')->whereBetween('age',[$start,$end])->get();
            } 
            elseif($age=='54'){
                 $start=45;
                 $end=$age;
                  $data['users']=DB::table('users')->whereBetween('age', [$start,$end])->get();

            }
            elseif($age=='100'){
                 $start=55;
                 $end=$age;
                  $data['users']=DB::table('users')->whereBetween('age', [$start,$end])->get();
            }
        }
        // echo $data['count']=count($data[users]);
        
        
           return view('find.search_users',['data'=>$data]);
        }
        else{
            echo "string11";
             $data['users']=\App\User::get();
         return view('find.search_all',['data'=>$data]);
        }
        
    }

}
