<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Job\Application;
use App\Models\Job\JobSaved;
use Auth;
use File;



class UsersController extends Controller
{
    public function profile()
    {
        $profile = User::find(Auth::user()->id);

        return view('users.profile', compact('profile'));
    }

    public function applications()
    {
        $applications = Application::where('user_id', Auth::user()->id)->get();

        return view('users.applications', compact('applications'));
    }

    public function savedJobs()
    {
        $saved = JobSaved::where('user_id', Auth::user()->id)->get();

        return view('users.saved', compact('saved'));
    }

     public function editDetails()
      {
          $userDetails = User::find(Auth::user()->id);

          return view('users.edit_details', compact('userDetails'));
      }

    public function updateDetails(Request $request)
    {
        Request()->validate([
            "first_name" => 'required|max:40',
            "last_name" => 'required|max:40',
            "job_title" => 'required|max:40',
            "bio" => 'required',
            "facebook" => 'required|max:140',
            "twitter" => 'required|max:140',
            "linkedin" => 'required|max:140',

        ]);

        $userDetailsUpdate = User::find(Auth::user()->id);
        $userDetailsUpdate->update([
            "first_name" => $request->first_name,
            "last_name" => $request->last_name,
            "job_title" => $request->job_title,
            "bio" => $request->bio,
            "facebook" => $request->facebook,
            "twitter" => $request->twitter,
            "linkedin" => $request->linkedin,
        ]);

        if($userDetailsUpdate) {
            return redirect('/users/edit-details/')->with('update','Profile updated successfully.');
        }

        return view('users.edit_details', compact('userDetailsUpdate'));
    }

    public function editCV()
    {
        $userDetails = User::find(Auth::user()->id);

        return view('users.editcv', compact('userDetails'));
    }

    public function updateCV(Request $request)
    {

        Request()->validate([
            'required|mimes:doc,docx,pdf|max:10000'
        ]);

        $oldCV = User::find(Auth::user()->id);

        if(File::exists(public_path('assets/cvs/'.$oldCV->cv))){
            File::delete(public_path('assets/cvs/'.$oldCV->cv));
        }
        else {

        }




        $destinationPath = 'assets/cvs/';
        $mycv = $request->cv->getClientOriginalName();
        $request->cv->move(public_path($destinationPath), $mycv);


        $oldCV->update([
            "cv" => $mycv,
        ]);

        if($oldCV) {
            return redirect('/users/profile')->with('update','CV updated successfully.');
        }

        return view('users.editcv');
    }
}
