<?php


namespace App\Services\Admin;


use App\CMS;
use App\FooterManagement;
use App\Helpers\ImageUploadHelper;
use App\MainPageContent;
use App\News;
use App\Project;
use App\QualityCraftsmanship;
use App\QualityCraftsmanshipProcess;
use App\UserDetail;
use Illuminate\Support\Facades\DB;
use File;

class CMSService
{
//    public function index()
//    {
//        $data  = CMS::all();
//        return view('admin.cms.listing',compact('data'));
//    }
//
//    public function create()
//    {
//        return view('admin.cms.create');
//    }
//
//    public function save($request)
//    {
//        DB::beginTransaction();
//        $save_image = null;
//        if($request->has('image'))
//        {
//            $image = $request->image;
//            $ext = $image->getClientOriginalExtension();
//            $fileName = $image->getClientOriginalName();
//            $fileNameUpload = time() . "-" . $fileName;
//            $path = public_path('site/cms/images/');
//            $imageSave = ImageUploadHelper::saveImage($image, $fileNameUpload, 'site/cms/images/');
//            $save_image = $imageSave;
//        }
//
//        try{
//            $save = CMS::create($request->except('_token','image')+['image'=>$save_image]);
//
//            DB::commit();
//            return response()->json(['result'=>'success','message'=>'Record Save']);
//
//        }
//        catch (\Exception $e)
//        {
//            DB::rollBack();
//            return response()->json(['result'=>'error','message'=>'Unable to Save Record: '.$e]);
//        }
//    }

    public function edit()
    {
        $data =  CMS::where('page_name','about_us')->first();

        if($data)
        {
            return view('admin.cms.edit',compact('data'));
        }
        else{
            return redirect()->route('adminDashboard')->with('error','Record Not Found');
        }
    }

    public function update($request)
    {
        $data = CMS::find($request->id);


        if($data) {
            DB::beginTransaction();

            $save_image = $data->image;

            if ($request->has('image')) {
                $image = $request->image;
                $ext = $image->getClientOriginalExtension();
                $fileName = $image->getClientOriginalName();
                $fileNameUpload = time() . "-." .$ext;
                $path = public_path('site/cms/images/');
                if (!file_exists($path)) {
                    File::makeDirectory($path, 0777, true);
                }

                $imageSave = ImageUploadHelper::saveImage($image, $fileNameUpload, 'site/cms/images/');
                $save_image = $imageSave;
            }

            try {
                $save = $data->update($request->except('_token', 'image') + ['image' => $save_image]);

                DB::commit();
                return response()->json(['result' => 'success', 'message' => 'Record Updated']);

            } catch (\Exception $e) {
                DB::rollBack();
                return response()->json(['result' => 'error', 'message' => 'Unable to Update Record: ' . $e]);
            }
        }
        else{
            return response()->json(['result'=>'error','message'=>'Record Not Found']);
        }
    }


    public function editMainPage()
    {
        $data =  MainPageContent::first();

        if($data)
        {
            return view('admin.cms.edit_main_page',compact('data'));
        }
        else{
            return redirect()->route('adminDashboard')->with('error','Record Not Found');
        }
    }

    public function updateMainPage($request)
    {
        $data = MainPageContent::find($request->id);


        if($data) {
            DB::beginTransaction();

            $save_image = $data->image;

            if ($request->has('image')) {
                $image = $request->image;
                $ext = $image->getClientOriginalExtension();
                $fileName = $image->getClientOriginalName();
                $fileNameUpload = time() . "-." .$ext;
                $path = public_path('site/cms/images/');
                if (!file_exists($path)) {
                    File::makeDirectory($path, 0777, true);
                }

                $imageSave = ImageUploadHelper::saveImage($image, $fileNameUpload, 'site/cms/images/');
                $save_image = $imageSave;
            }

            try {
                $save = $data->update($request->except('_token', 'image') + ['image' => $save_image]);

                DB::commit();
                return response()->json(['result' => 'success', 'message' => 'Record Updated']);

            } catch (\Exception $e) {
                DB::rollBack();
                return response()->json(['result' => 'error', 'message' => 'Unable to Update Record: ' . $e]);
            }
        }
        else{
            return response()->json(['result'=>'error','message'=>'Record Not Found']);
        }
    }


    public function editBanner()
    {
        $data =  CMS::where('page_name','banner')->first();

        if($data)
        {
            return view('admin.cms.edit_banner',compact('data'));
        }
        else{
            return redirect()->route('adminDashboard')->with('error','Record Not Found');
        }
    }

    public function updateBanner($request)
    {
        $data = CMS::find($request->id);


        if($data) {
            DB::beginTransaction();

            try {
                $save = $data->update($request->except('_token'));

                DB::commit();
                return response()->json(['result' => 'success', 'message' => 'Record Updated']);

            } catch (\Exception $e) {
                DB::rollBack();
                return response()->json(['result' => 'error', 'message' => 'Unable to Update Record: ' . $e]);
            }
        }
        else{
            return response()->json(['result'=>'error','message'=>'Record Not Found']);
        }
    }

    public function editFooter()
    {
        $data =  FooterManagement::first();

        if($data)
        {
            return view('admin.cms.edit_footer',compact('data'));
        }
        else{
            return redirect()->route('adminDashboard')->with('error','Record Not Found');
        }
    }

    public function updateFooter($request)
    {
        $data = FooterManagement::find($request->id);


        if($data) {
            DB::beginTransaction();


            $save_image_1 = $data->image_1;

            if ($request->has('image_1')) {
                $image = $request->image_1;
                $ext = $image->getClientOriginalExtension();
                $fileName = $image->getClientOriginalName();
                $fileNameUpload = time() . "-." .$ext;
                $path = public_path('site/cms/images/');
                if (!file_exists($path)) {
                    File::makeDirectory($path, 0777, true);
                }

                $imageSave = ImageUploadHelper::saveImage($image, $fileNameUpload, 'site/cms/images/');
                $save_image_1 = $imageSave;
            }



            $save_image_2 = $data->image_2;

            if ($request->has('image_2')) {
                $image = $request->image_2;
                $ext = $image->getClientOriginalExtension();
                $fileName = $image->getClientOriginalName();
                $fileNameUpload = time() . "-." .$ext;
                $path = public_path('site/cms/images/');
                if (!file_exists($path)) {
                    File::makeDirectory($path, 0777, true);
                }

                $imageSave = ImageUploadHelper::saveImage($image, $fileNameUpload, 'site/cms/images/');
                $save_image_2 = $imageSave;
            }



            $save_image_3 = $data->image_3;

            if ($request->has('image_3')) {
                $image = $request->image_3;
                $ext = $image->getClientOriginalExtension();
                $fileName = $image->getClientOriginalName();
                $fileNameUpload = time() . "-." .$ext;
                $path = public_path('site/cms/images/');
                if (!file_exists($path)) {
                    File::makeDirectory($path, 0777, true);
                }

                $imageSave = ImageUploadHelper::saveImage($image, $fileNameUpload, 'site/cms/images/');
                $save_image_3 = $imageSave;
            }



            $save_image_4 = $data->image_4;

            if ($request->has('image_4')) {
                $image = $request->image_4;
                $ext = $image->getClientOriginalExtension();
                $fileName = $image->getClientOriginalName();
                $fileNameUpload = time() . "-." .$ext;
                $path = public_path('site/cms/images/');
                if (!file_exists($path)) {
                    File::makeDirectory($path, 0777, true);
                }

                $imageSave = ImageUploadHelper::saveImage($image, $fileNameUpload, 'site/cms/images/');
                $save_image_4 = $imageSave;
            }

            $save_image_5 = $data->image_5;

            if ($request->has('image_5')) {
                $image = $request->image_5;
                $ext = $image->getClientOriginalExtension();
                $fileName = $image->getClientOriginalName();
                $fileNameUpload = time() . "-." .$ext;
                $path = public_path('site/cms/images/');
                if (!file_exists($path)) {
                    File::makeDirectory($path, 0777, true);
                }

                $imageSave = ImageUploadHelper::saveImage($image, $fileNameUpload, 'site/cms/images/');
                $save_image_5 = $imageSave;
            }

            try {
                $save = $data->update($request->except('_token','image_1','image_2','image_3','image_4','image_5')+
                    [
                        'image_1' => $save_image_1 , 'image_2' => $save_image_2, 'image_3' => $save_image_3,
                        'image_4' => $save_image_4, 'image_5' => $save_image_5
                    ]);

                DB::commit();
                return response()->json(['result' => 'success', 'message' => 'Record Updated']);

            } catch (\Exception $e) {
                DB::rollBack();
                return response()->json(['result' => 'error', 'message' => 'Unable to Update Record: ' . $e]);
            }
        }
        else{
            return response()->json(['result'=>'error','message'=>'Record Not Found']);
        }
    }


    public function editHeritage()
    {
        $data =  CMS::where('page_name','heritage')->first();

        if($data)
        {
            return view('admin.cms.edit_heritage',compact('data'));
        }
        else{
            return redirect()->route('adminDashboard')->with('error','Record Not Found');
        }
    }

    public function updateHeritage($request)
    {
        $data = CMS::find($request->id);


        if($data) {
            DB::beginTransaction();

            $save_image = $data->image;

            if ($request->has('image')) {
                $image = $request->image;
                $ext = $image->getClientOriginalExtension();
                $fileName = $image->getClientOriginalName();
                $fileNameUpload = time() . "-." .$ext;
                $path = public_path('site/cms/images/');
                if (!file_exists($path)) {
                    File::makeDirectory($path, 0777, true);
                }

                $imageSave = ImageUploadHelper::saveImage($image, $fileNameUpload, 'site/cms/images/');
                $save_image = $imageSave;
            }


            try {
                $save = $data->update($request->except('_token','image')+['image'=>$save_image]);

                DB::commit();
                return response()->json(['result' => 'success', 'message' => 'Record Updated']);

            } catch (\Exception $e) {
                DB::rollBack();
                return response()->json(['result' => 'error', 'message' => 'Unable to Update Record: ' . $e]);
            }
        }
        else{
            return response()->json(['result'=>'error','message'=>'Record Not Found']);
        }
    }


    public function editPolicy()
    {
        $data =  CMS::where('page_name','privacy_policy')->first();

        if($data)
        {
            return view('admin.cms.edit_policy',compact('data'));
        }
        else{
            return redirect()->route('adminDashboard')->with('error','Record Not Found');
        }
    }

    public function updatePolicy($request)
    {
        $data = CMS::find($request->id);


        if($data) {
            DB::beginTransaction();

            try {
                $save = $data->update($request->except('_token'));

                DB::commit();
                return response()->json(['result' => 'success', 'message' => 'Record Updated']);

            } catch (\Exception $e) {
                DB::rollBack();
                return response()->json(['result' => 'error', 'message' => 'Unable to Update Record: ' . $e]);
            }
        }
        else{
            return response()->json(['result'=>'error','message'=>'Record Not Found']);
        }
    }

    public function editTerms()
    {
        $data =  CMS::where('page_name','terms_conditions')->first();

        if($data)
        {
            return view('admin.cms.edit_terms',compact('data'));
        }
        else{
            return redirect()->route('adminDashboard')->with('error','Record Not Found');
        }
    }

    public function updateTerms($request)
    {
        $data = CMS::find($request->id);


        if($data) {
            DB::beginTransaction();

            try {
                $save = $data->update($request->except('_token'));

                DB::commit();
                return response()->json(['result' => 'success', 'message' => 'Record Updated']);

            } catch (\Exception $e) {
                DB::rollBack();
                return response()->json(['result' => 'error', 'message' => 'Unable to Update Record: ' . $e]);
            }
        }
        else{
            return response()->json(['result'=>'error','message'=>'Record Not Found']);
        }
    }


    public function editQualityCraftsmanship()
    {
        $data =  QualityCraftsmanship::first();

        if($data)
        {
            return view('admin.cms.quality_craftsmanship',compact('data'));
        }
        else{
            return redirect()->route('adminDashboard')->with('error','Record Not Found');
        }
    }

    public function updateQualityCraftsmanship($request)
    {
        $data =  QualityCraftsmanship::find($request->id);

        DB::beginTransaction();
        if($data)
        {
            try {
                $save_image = $data->header_image;
                if ($request->has('header_image')) {
                    $image = $request->header_image;
                    $ext = $image->getClientOriginalExtension();
                    $fileName = $image->getClientOriginalName();
                    $fileNameUpload = time() . "-." . $ext;
                    $path = public_path('site/cms/images/');
                    if (!file_exists($path)) {
                        File::makeDirectory($path, 0777, true);
                    }

                    $imageSave = ImageUploadHelper::saveImage($image, $fileNameUpload, 'site/cms/images/');
                    $save_image = $imageSave;
                }

                $data->update(['header_image' => $save_image, 'title' => $request->title, 'description' => $request->description]);
            }
            catch(\Exception $e)
            {
                DB::rollBack();
                return response()->json(['result'=>'error','message'=>'Unable to update record: '.$e]);
            }

            try{
//                QualityCraftsmanshipProcess::where('quality_id',$data->id)->delete();

                foreach($request->process as $key => $singleProcess)
                {

                    if(isset($singleProcess['id']))
                    {
                        $findProcess = QualityCraftsmanshipProcess::find($singleProcess['id']);
                        $save_image = $findProcess->background_image;
                    }
                    else{
                        $findProcess =  new QualityCraftsmanshipProcess();
                    }

                    if (isset($singleProcess['background_image'])) {
                        $image = $singleProcess['background_image'];
                        $ext = $image->getClientOriginalExtension();
                        $fileName = $image->getClientOriginalName();
                        $fileNameUpload = time() ."-".$key.".". $ext;
                        $path = public_path('site/cms/images/');
                        if (!file_exists($path)) {
                            File::makeDirectory($path, 0777, true);
                        }

                        $imageSave = ImageUploadHelper::saveImage($image, $fileNameUpload, 'site/cms/images/');
                        $save_image = $imageSave;
                    }

                    $findProcess->quality_id = $data->id;
                    $findProcess->description=$singleProcess['description'];
                    $findProcess->title = $singleProcess['title'];
                    $findProcess->step_number =$singleProcess['step_number'];
                    $findProcess->background_image = $save_image;

                    $findProcess->save();

                }
            }
            catch(\Exception $e)
            {
                DB::rollBack();
                return response()->json(['result'=>'error','message'=>'Unable to update process: '.$e]);
            }

            DB::commit();
            return response()->json(['result'=>'success','message'=>'Record Update']);

        }
        else{
            return redirect()->route('adminDashboard')->with('error','Record Not Found');
        }
    }

    public function deleteProcess($request)
    {
        $data = QualityCraftsmanshipProcess::find($request->id);
        if($data)
        {
            $data->delete();
            return response()->json(['result'=>'success','message'=>'Process Deleted']);
        }
        else{
            return response()->json(['result'=>'error','message'=>'Record Not Found']);
        }
    }

}
