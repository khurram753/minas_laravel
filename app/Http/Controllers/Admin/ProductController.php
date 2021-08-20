<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\ProductRequest;
use App\Services\Admin\ProductService;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(ProductService $productService)
    {
        return $productService->index();
    }

    public function create (ProductService $productService)
    {
        return $productService->create();
    }

    public function save(ProductRequest $request,ProductService $productService)
    {
        return $productService->save($request);
    }

    public function edit($id,ProductService $productService)
    {
        return $productService->edit($id);
    }

    public function update(ProductRequest $request,ProductService $productService)
    {
        return $productService->update($request);
    }

    public function delete(Request $request,ProductService $productService)
    {
        return $productService->delete($request);
    }
}
