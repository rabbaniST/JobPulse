<?php

namespace App\Http\Controllers\Admin;

use App\Models\Job;
use App\Models\Order;
use App\Models\Company;
use App\Models\Candidate;
use App\Models\CompanyPhoto;
use App\Models\CompanyVideo;
use Illuminate\Http\Request;
use App\Models\CandidateAward;
use App\Models\CandidateSkill;
use App\Models\CandidateResume;
use App\Models\CandidateBookmark;
use App\Models\CandidateEducation;
use App\Models\CandidateExperience;
use App\Http\Controllers\Controller;
use App\Models\CandidateApplication;

class AdminCompanyController extends Controller
{
    public function index()
    {
        $companies = Company::where('status',1)->get();
        return view('admin.companies', compact('companies'));
    }

    public function companies_detail($id)
    {
        $companies_detail = Company::with('CompanyLocation','CompanyIndustry','CompanySize')->where('id',$id)->first();

        
        $photos = CompanyPhoto::where('company_id',$id)->get();
        $videos = CompanyVideo::where('company_id',$id)->get();
        return view('admin.companies-detail', compact('companies_detail','photos','videos'));
    }

    public function companies_jobs($id)
    {
        $companies_detail = Company::where('id',$id)->first();
        $companies_jobs = Job::with('JobCategory','JobLocation')->where('company_id',$id)->get();
        return view('admin.companies-job', compact('companies_jobs','companies_detail'));
    }

    public function companies_applicants($id)
    {
        $job_detail = Job::where('id',$id)->first();
        $applicants = CandidateApplication::with('Candidate')->where('job_id',$id)->get();
        return view('admin.companies-applicants', compact('applicants','job_detail'));
    }

    public function companies_applicant_resume($id)
    {
        $candidate_single = Candidate::where('id',$id)->first();
        $candidate_educations = CandidateEducation::where('candidate_id',$id)->get();
        $candidate_experiences = CandidateExperience::where('candidate_id',$id)->get();
        $candidate_skills = CandidateSkill::where('candidate_id',$id)->get();
        $candidate_awards = CandidateAward::where('candidate_id',$id)->get();
        $candidate_resumes = CandidateResume::where('candidate_id',$id)->get();

        return view('admin.companies-applicant-resume', compact('candidate_single','candidate_educations','candidate_experiences','candidate_skills','candidate_awards','candidate_resumes'));
    }

    public function delete($id)
    {
        $company_photos = CompanyPhoto::where('company_id',$id)->get();
        foreach($company_photos as $item) {
            unlink(public_path('uploads/'.$item->photo));
        }
        
        CompanyPhoto::where('company_id',$id)->delete();
        CompanyVideo::where('company_id',$id)->delete();
        
        $jobs_list = Job::where('company_id',$id)->get();
        foreach($jobs_list as $item) {
            CandidateApplication::where('job_id',$item->id)->delete();
            CandidateBookmark::where('job_id',$item->id)->delete();
        }
        
        Job::where('company_id',$id)->delete();
        Order::where('company_id',$id)->delete();

        $company_data = Company::where('id',$id)->first();
        if($company_data->logo != null) {
            unlink(public_path('uploads/'.$company_data->logo));
        }

        Company::where('id',$id)->delete();
        return redirect()->back()->with('success', 'Data is deleted successfully.');
    }
}
