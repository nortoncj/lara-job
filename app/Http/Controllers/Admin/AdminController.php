<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Models\Category\Category;
use App\Models\Job\Application;
use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Job\Job;
use Illuminate\Support\Facades\Hash;
use Auth;
use File;
use Spatie\Permission\Models\Role;


class AdminController extends Controller
{
   public function login() {
       return view('admin.login');
   }

   public function index() {
       $jobs = Job::select()->count();
       $categories = Category::select()->count();
       $admins = Admin::select()->count();
       $applications = Application::select()->count();
       return view('admin.index', compact('jobs','categories','admins','applications'));
   }
    public function admins() {
       $admins = Admin::all();
        return view('admin.admin-all', compact('admins'));
    }
    public function checkLogin(Request $request) {
       $remember_me = $request->has('remember_me') ? true : false;

       if (auth()->guard('admin')->attempt(['email' => $request->input('email'), 'password' => $request->input('password')],$remember_me)) {
               return redirect()->route('admin.index');
           }
       return redirect()->back()->with(['error' => 'Error! Incorrect email or password']);
    }

    public function createAdmins(){

       return view('admin.create-admins');
    }
    public function saveAdmin(Request $request) {

        Request()->validate([
            "first_name" => 'required|max:40',
            "last_name" => 'required|max:40',
            "email" => 'required|max:40',
            "password" => 'required',
        ]);

       $createAdmin = Admin::create([
           'first_name' => $request->first_name,
           'last_name' => $request->last_name,
           'email' => $request->email,
           'password' => Hash::make($request->password),
       ]);

       if($createAdmin) {
           return redirect('admin/all')->with(['create' => 'Admin created successfully']);
       }

        return view('admin.create-admins');

    }

    public function categories() {
        $categories = category::all();
        return view('admin.categories-all', compact('categories'));
    }

    public function createCategory(){

        return view('admin.create-category');
    }
    public function saveCategory(Request $request) {

        Request()->validate([
            "name" => 'required|max:40',
        ]);

        $createCategory = Category::create([
            'name' => $request->name,

        ]);

        if($createCategory) {
            return redirect('admin/categories/all')->with(['create' => 'Category created successfully']);
        }

        return view('admin.create-category');

    }
    public function editCategories($id){
       $category = Category::find($id);

        return view('admin.edit-category', compact('category'));
    }
    public function updateCategories(Request $request,$id) {

        Request()->validate([
            "name" => 'required|max:40',
        ]);

        $categoryUpdate = Category::find($id);

        $categoryUpdate->update([
            'name' => $request-> name,
        ]);

        if($categoryUpdate) {
            return redirect('admin/categories/all')->with(['update' => 'Category updated successfully']);
        }

        return view('admin.create-category');

    }
    public function deleteCategories($id) {

        $deleteCategory = Category::find($id);
        $deleteCategory->delete();

        if($deleteCategory) {
            return redirect('admin/categories/all')->with(['delete' => 'Category deleted successfully']);
        }

    }


    public function jobs() {
       $jobs = Job::all();
        return view('admin.jobs-all', compact('jobs'));
    }

    public function createJobs(){

        $categories = Category::all();
        return view('admin.create-job', compact('categories'));
    }
    public function saveJobs(Request $request) {

        Request()->validate([
            "job_title" => 'required|max:40',
            "job_region"=>'required|max:40',
            "company"=>'required|max:40',
            "job_type"=>'required|max:40',
            "experience"=>'required|max:40',
            "gender"=>'required|max:40',
            "application_deadline"=>'required|max:40',
            "job_description"=>'required|max:40',
            "responsibilities"=>'required|max:40',
            "education"=>'required|max:40',
            "other_benefits"=>'required|max:40',
            "image"=>'required|max:40',
            "category"=>'required|max:40',
            "salary"=>'required|max:40',
        ]);


        $destinationPath = 'assets/images/';
        $myimage = $request->image->getClientOriginalName();
        $request->image->move(public_path($destinationPath), $myimage);

        $createJob = Job::create([
            'job_title' => $request->job_title,
            'job_region' => $request->job_region,
            'company' => $request->company,
            'job_type' => $request->job_type,
            'vacancy' => $request->vacancy,
            'experience' => $request->experience,
            'salary' => $request->salary,
            'gender' => $request->gender,
            'application_deadline' => $request->application_deadline,
            'job_description' => $request->job_description,
            'responsibilities' => $request->responsibilities,
            'education' => $request->education,
            'other_benefits' => $request->other_benefits,
            'category' => $request->category,
            'image' => $request-> $myimage,
        ]);

        if($createJob) {
            return redirect('admin/jobs/all')->with(['create' => 'Job created successfully']);
        }

        return view('admin.create-category');

    }
    public function deleteJobs($id) {

        $deleteJob = Job::find($id);

        if(File::exists(public_path('uploads/images/'. $deleteJob->image))){
            File::delete(public_path('uploads/images/'. $deleteJob->image));
        }else{
            //dd('File does not exist!');
        }
        $deleteJob->delete();

        if($deleteJob) {
            return redirect('admin/jobs/all')->with(['delete' => 'job deleted successfully']);
        }

    }

    public function applications() {
       $applications = Application::all();
       return view('admin.applications-all', compact('applications'));
    }

    public function deleteApps($id) {

        $deleteApp = Application::find($id);


        $deleteApp->delete();

        if($deleteApp) {
            return redirect('admin/applications/all')->with(['delete' => 'Application deleted successfully']);
        }

    }

    public function roles() {
        $roles = Role::all();

       return view('admin.roles-all', compact('roles'));
    }


}
