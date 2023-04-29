<?php

namespace App\Http\Controllers;

use App\Models\Jobs;
use Illuminate\Http\Request;
use Illuminate\Queue\Jobs\Job;

class JobsController extends Controller
{

    public function index()
    {

        $jobs = Jobs::all();
        return view('jobs' ,compact('jobs'));
    }


    public function create()
    {
        return view('create');
    }


    public function store(Request $request)
    {
        $validated = $request->validate([
            'job_name' => 'required',
            'dept' => 'required',
            'salary' => 'required',
            'photo'=>'required|mimes:png,jpg,jpeg',
        ]);
        Jobs::create([
            'name' => $request->job_name,
            'dept'=> $request->dept,
            'salary'=> $request->salary,
        ]);

return  redirect()->route('jobs.index')->with(['success' =>'record addded']);
    }


    public function show(Jobs $jobs)
    {
        //
    }


    public function edit($id)
    {
        $data_to_update =  Jobs::find($id);
        return view('edit',compact('data_to_update'));
    }

    public function update(Request $request,  $id)
    {
        $job = Jobs::find($id);
        $job->name = $request->job_name;
        $job->dept = $request->dept;
        $job->salary = $request->salary;
        $job->save();
        return  redirect()->route('jobs.index')->with(['success' =>'record Updated']);
    }


    public function destroy($id)
    {
        $job = Jobs::find($id);
        $job->delete();
        return  redirect()->route('jobs.index')->with(['delete' =>'record Deleted']);
    }
}
