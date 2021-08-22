<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\PressRecordRequest;
use App\Services\Admin\PressRecordService;
use Illuminate\Http\Request;

class PressRecordsController extends Controller
{
    public function index(PressRecordService $pressRecordService)
    {
        return $pressRecordService->index();
    }

    public function create(PressRecordService $pressRecordService)
    {
        return $pressRecordService->create();
    }

    public function save(PressRecordRequest $request,PressRecordService $pressRecordService)
    {
        return $pressRecordService->save($request);
    }

    public function edit($id,PressRecordService $pressRecordService)
    {
        return $pressRecordService->edit($id);
    }

    public function update(PressRecordRequest $request,PressRecordService $pressRecordService)
    {
        return $pressRecordService->update($request);
    }

    public function delete(Request $request,PressRecordService $pressRecordService)
    {
        return $pressRecordService->delete($request);
    }
}
