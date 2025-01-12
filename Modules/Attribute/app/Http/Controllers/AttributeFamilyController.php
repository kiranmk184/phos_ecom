<?php

namespace Modules\Attribute\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Modules\Attribute\Http\Requests\AttributeFamilyStoreRequest;
use Modules\Attribute\Services\AttributeFamilyService;

class AttributeFamilyController extends Controller
{
    public function __construct(protected AttributeFamilyService $attributeFamilyService)
    {

    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //

        return response()->json([]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(AttributeFamilyStoreRequest $request)
    {
        $data = $request->validated();
        $data['status'] = $data['status'] ?? false;
        $data['is_user_defined'] = $data['is_user_defined'] ?? true;

        $this->attributeFamilyService->store($data);

        return response()->json([$data]);
    }

    /**
     * Show the specified resource.
     */
    public function show($id)
    {
        //

        return response()->json([]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        //

        return response()->json([]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //

        return response()->json([]);
    }
}
