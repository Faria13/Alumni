<?php

namespace App\Http\Controllers;

use App\Models\Batch;
use App\Models\Department;
use App\Models\Education;
use App\Models\Experience;
use App\Models\committee;
use App\Models\Skill;
use App\Models\Location;
use App\Models\User;
use App\Models\EducationType;
use Auth;

use Illuminate\Http\Request;

class HomeController extends Controller
{   
    public function index(){
        $users = User::all();
        $designation = Experience::all('id', 'present', 'user_id');

        for($i = 0; $i< count($users);$i++){
            for($j = 0;$j<count($designation); $j++){
                
                if ($users[$i]->id == $designation[$j]->user_id) {
                    $users[$i]['present'] = $designation[$j]->present;
                    $users[$i]['experience_id'] = $designation[$j]->id;  
                }
            }
        }
        return view('home', compact('users'));
    }

    public function user_registration(){
        return view('user_registration');
    }

    public function about(){
        return view('about');
    }

    public function committee(){
        $users = User::all();
        return view('committee', compact('users'));
    }

    public function user_login(){
        return view('user_login');
    }


    public function user_profile(){

        $user_id = Auth::user()->id;
        $user = User::find($user_id);
        return view('user_profile')->withUser($user);
    }
    public function reset_password(){
        return view('reset_password');
    }

    public function alumni_list(){
        $users = User::all();
        $designation = Experience::all('id', 'present', 'company_name', 'user_id');

        for($i = 0; $i< count($users);$i++){
            for($j = 0;$j<count($designation); $j++){
                
                if ($users[$i]->id == $designation[$j]->user_id) {
                    $users[$i]['present'] = $designation[$j]->present;
                    $users[$i]['company_name'] = $designation[$j]->company_name;
                    $users[$i]['experience_id'] = $designation[$j]->id;  
                }
            }
        }
        return view('alumni', compact('users'));
    }

    public function edit_profile($id){
        $user_id = Auth::user()->id;
        $user = User::find($user_id);
        

        $eduid = Education::where('user_id','=',$user_id)->first();
        $exp = Experience::where('user_id','=',$user_id)->first();
        $skill = Skill::where('user_id','=',$user_id)->first();
        $location = Location::where('user_id','=',$user_id)->first();
        return view('edit_profile')->withUser($user)
                                   ->withEdu($eduid)
                                   ->withExperience($exp)
                                   ->withSkill($skill)
                                   ->withLocation($location);
    }

    public function job_post(){
        return view('jobpost');
    }
}
