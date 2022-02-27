<?php

namespace App\Http\Controllers;

use App\Models\JobPosting;
use App\Http\Requests\StoreJobPostingRequest;
use App\Http\Requests\UpdateJobPostingRequest;
use Illuminate\Support\Facades\Session;

class JobPostingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $job_posts = JobPosting::latest('id')->get();
        return  $job_posts;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('job_posting.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreJobPostingRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreJobPostingRequest $request)
    {
        try {
            $jobPosting = new JobPosting();
            $jobPosting->job_title = $request->job_title;
            $jobPosting->company_name = $request->company_name;
            $jobPosting->sal_package = $request->sal_package;
            $jobPosting->job_location = $request->job_location;
            $jobPosting->skills = $request->skills;
            $jobPosting->job_description = $request->job_description;
            $jobPosting->education_experiance = $request->education_experiance;
            $jobPosting->roles_responsibilities = $request->roles_responsibilities;
            $jobPosting->job_type = $request->job_type;
            $jobPosting->company_logo = $request->company_logo;
            $jobPosting->save();
            Session::flash('flash_message', 'Job Posting Successfully');
            return redirect()->to('/home'); 
        } catch (\Exception $e) {
            return redirect()->to('/home'); 
        }
       
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\JobPosting  $jobPosting
     * @return \Illuminate\Http\Response
     */
    public function show(JobPosting $jobPosting)
    {
       return "testing";
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\JobPosting  $jobPosting
     * @return \Illuminate\Http\Response
     */
    public function edit(JobPosting $jobPosting)
    {
        return view('job_posting.edit',compact('jobPosting'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateJobPostingRequest  $request
     * @param  \App\Models\JobPosting  $jobPosting
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateJobPostingRequest $request, JobPosting $jobPosting)
    {
        try {
            $jobPosting->job_title = $request->job_title;
            $jobPosting->company_name = $request->company_name;
            $jobPosting->sal_package = $request->sal_package;
            $jobPosting->job_location = $request->job_location;
            $jobPosting->skills = $request->skills;
            $jobPosting->job_description = $request->job_description;
            $jobPosting->education_experiance = $request->education_experiance;
            $jobPosting->roles_responsibilities = $request->roles_responsibilities;
            $jobPosting->job_type = $request->job_type;
            $jobPosting->company_logo = $request->company_logo;
            $jobPosting->save();
            Session::flash('flash_message', 'Updated Job Posting Successfully');
            return redirect()->to('/home'); 
        } catch (\Exception $e) {
            return redirect()->to('/home'); 
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\JobPosting  $jobPosting
     * @return \Illuminate\Http\Response
     */
    public function destroy(JobPosting $jobPosting)
    {
        $jobPosting->delete();
        Session::flash('flash_message', ' Job Post has been deleted Successfully');
        return redirect()->to('/home'); 
    }
}
