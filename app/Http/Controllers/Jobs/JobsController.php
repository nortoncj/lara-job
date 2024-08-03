<?php

namespace App\Http\Controllers\Jobs;

use App\Http\Controllers\Controller;
use App\Models\Job\Job;
use App\Models\Category\Category;
use App\Models\Job\JobSaved;
use App\Models\Job\Application;
use App\Models\Job\Search;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;


class JobsController extends Controller
{
    public function single($id) {
        $job = Job::find($id);

        // getting related jobs
        $related_jobs = Job::where('category',$job->category)->where('id','!=',$id)->take(5)->get();
        $relatedJobsCount = Job::where('category',$job->category)->where('id','!=',$id)->count();

        // categories
//            $categories = Category::all();
        $categories = DB::table('categories')
            ->join('jobs', 'jobs.category', '=', 'categories.name')
            ->select('categories.name AS name', 'categories.id AS id', DB::raw('COUNT(jobs.category) AS total'))
            ->groupBy('jobs.category','categories.id')
            ->get();


        if(auth()->user()) {
            // saved jobs
            $savedJob = JobSaved::where('job_id',$id)->where('user_id', Auth::user()->id)->count();

            // verified application
            $appliedJob = Application::where('user_id', Auth::user()->id)->where('job_id', $id)->count();

            return view('jobs.single', compact('job','related_jobs','relatedJobsCount','savedJob','appliedJob','categories'));
        }
        else {

            return view('jobs.single', compact('job','related_jobs','relatedJobsCount','categories'));
        }




    }

    public function saveJob(Request $request) {

        $saveJob = JobSaved::create([
           'job_id' => $request->job_id,
            'user_id' => $request->user_id,
            'job_image' => $request->job_image,
            'job_title' => $request->job_title,
            'job_region' => $request->job_region,
            'job_type' => $request->job_type,
            'company' => $request->company,
        ]);

        if($saveJob) {
            return redirect('/jobs/single/'.$request->job_id.'')->with('save','Job Saved!');
        }

    }

    public function applyJob(Request $request) {

        if(Auth::user()->cv == 'No cv') {
            return redirect('/jobs/single/'.$request->job_id.'')->with('apply','Please upload your CV first in your profile!');
        } else {
            $applyJob = Application::create([
                'cv' => Auth::user()->cv,
                'user_id' => Auth::user()->id,
                'email'=>Auth::user()->email,
                'job_id' => $request->job_id,
                'job_image' => $request->job_image,
                'job_title' => $request->job_title,
                'job_region' => $request->job_region,
                'job_type' => $request->job_type,
                'company' => $request->company,
            ]);

            if($applyJob) {
                return redirect('/jobs/single/'.$request->job_id.'')->with('applied','Job Applied!');
            }
        }

    }

    public function search(Request $request) {
        Request()->validate([
           "job_title" => "required",
           "job_region" => "required",
           "job_type" => "required",
        ]);

        Search::Create([
            "keyword" => $request->job_title
        ]);

        $job_title = $request->get('job_title');
        $job_region = $request->get('job_region');
        $job_type = $request->get('job_type');


        $searches = Job::select()->where('job_title', 'like', '%'.$job_title.'%')
            ->where('job_region', 'like', '%'.$job_region.'%')
            ->where('job_type', 'like', '%'.$job_type.'%')
            ->get();

        return view('jobs.search', compact('searches','job_title','job_region','job_type'));
    }

    public function about()
    {

        return view('pages.about');
    }

    public function contact()
    {

        return view('pages.contact');
    }

}
