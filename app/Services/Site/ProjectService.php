<?php

namespace App\Services\Site;

use App\Project;
use App\ProjectCategory;

class ProjectService
{
    public function index($request)
    {
        $projectCategories = ProjectCategory::all();

        $singleProject = Project::inRandomOrder()->limit(1)->first();

        $projects = Project::where('id','!=',$singleProject->id);

        if($request->category_id)
        {
            $projects = $projects->where('category_id',$request->category_id);
        }

        $projects = $projects->get();


        return view('site.project.project',compact('projectCategories','singleProject','projects'));
    }

    public function detail($id)
    {
        $data = Project::find($id);


        if($data)
        {

            $relatedProject = Project::where('category_id',$data->category_id)->inRandomOrder()->first();
            return view('site.project.project_detail',compact('data','relatedProject'));
        }
        else{
            return redirect()->route('project')->with('error','Record Not Found');
        }
    }
}
