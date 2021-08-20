<?php


namespace App\Services\Admin;


use App\Category;
use App\Cord;
use App\Helpers\ImageUploadHelper;
use App\Material;
use App\PivotCordProduct;
use App\PivotMaterialProduct;
use App\Product;
use Illuminate\Support\Facades\DB;
use File;

class ProductService
{
    public function index()
    {
        $data = Product::all();
        return view('admin.product.listing', compact('data'));
    }

    public function create()
    {
        $categories = Category::all();
        $cords = Cord::all();
        $materials = Material::all();
        return view('admin.product.create', compact('categories', 'cords', 'materials'));
    }

    public function save($request)
    {
        DB::beginTransaction();

        try {
            $save_image = null;
            if ($request->has('image')) {
                $image = $request->image;
                $ext = $image->getClientOriginalExtension();
                $fileName = $image->getClientOriginalName();
                $fileNameUpload = time() . "-." . $ext;
                $path = public_path('site/product/images/');
                if (!file_exists($path)) {
                    File::makeDirectory($path, 0777, true);
                }

                $imageSave = ImageUploadHelper::saveImage($image, $fileNameUpload, 'site/product/images/');
                $save_image = $imageSave;
            }

            $save = Product::create($request->except('_token', 'image','cord_id','material_id') +
                ['image' => $save_image]);


        } catch (\Exception $e) {
            DB::rollBack();
            return response()->json(['result' => 'error', 'message' => 'Unable to Save Product Record: ' . $e]);
        }

        try{
            if(sizeof($request->cord_id) > 0)
            {
                $save->cord()->attach($request->cord_id);


            }
        }
        catch (\Exception $e)
        {
            DB::rollBack();
            return response()->json(['result' => 'error', 'message' => 'Unable to Save Cord Record: ' . $e]);
        }

        try{
            if(sizeof($request->material_id) > 0)
            {
                $save->material()->attach($request->material_id);

            }
        }
        catch (\Exception $e)
        {
            DB::rollBack();
            return response()->json(['result' => 'error', 'message' => 'Unable to Save Material Record: ' . $e]);
        }

        DB::commit();
        return response()->json(['result' => 'success', 'message' => 'Record Save Successfully']);
    }

    public function edit($id)
    {
        $data = Product::find($id);

        if ($data) {
            $categories = Category::all();
            $cords = Cord::all();
            $materials = Material::all();

            $selectedCord = $data->cord->pluck('id')->toArray();
            $selectedMaterial = $data->material->pluck('id')->toArray();

            return view('admin.product.edit', compact('data',
                'selectedMaterial','selectedCord','categories','cords','materials'));
        } else {
            return redirect()->route('productListing')->with('error', 'Record Not Found');
        }
    }

    public function update($request)
    {
        $data = Product::find($request->id);


        if ($data) {
            DB::beginTransaction();


            try {
                $save_image = $data->image;
                if ($request->has('image')) {
                    $image = $request->image;
                    $ext = $image->getClientOriginalExtension();
                    $fileName = $image->getClientOriginalName();
                    $fileNameUpload = time() . "-." . $ext;
                    $path = public_path('site/product/images/');
                    if (!file_exists($path)) {
                        File::makeDirectory($path, 0777, true);
                    }

                    $imageSave = ImageUploadHelper::saveImage($image, $fileNameUpload, 'site/product/images/');
                    $save_image = $imageSave;
                }

                $save = $data->update($request->except('_token', 'image','cord_id','material_id') +
                    ['image' => $save_image]);


            } catch (\Exception $e) {
                DB::rollBack();
                return response()->json(['result' => 'error', 'message' => 'Unable to Save Product Record: ' . $e]);
            }

            try{
                if(sizeof($request->cord_id) > 0)
                {
                    $data->cord()->sync($request->cord_id);

                }
            }
            catch (\Exception $e)
            {
                DB::rollBack();
                return response()->json(['result' => 'error', 'message' => 'Unable to Save Cord Record: ' . $e]);
            }

            try{
                if(sizeof($request->material_id) > 0)
                {
                    $data->material()->sync($request->material_id);

                }
            }
            catch (\Exception $e)
            {
                DB::rollBack();
                return response()->json(['result' => 'error', 'message' => 'Unable to Save Material Record: ' . $e]);
            }

            DB::commit();
            return response()->json(['result' => 'success', 'message' => 'Record Updated Successfully']);
        } else {
            return response()->json(['result' => 'error', 'message' => 'Record Not Found']);
        }
    }


    public function delete($request)
    {
        $data = Category::find($request->id);
        if ($data) {
            $data->delete();
            return response()->json(['result' => 'success', 'message' => 'Category Deleted']);
        } else {
            return response()->json(['result' => 'error', 'message' => 'Record Not Found']);
        }
    }

}
