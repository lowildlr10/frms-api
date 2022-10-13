<?php

namespace App\Http\Controllers\Api\V1;

use App\Models\RequestAttachment;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreRequestAttachmentRequest;
use App\Http\Requests\UpdateRequestAttachmentRequest;

class RequestAttachmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreRequestAttachmentRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRequestAttachmentRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\RequestAttachment  $requestAttachment
     * @return \Illuminate\Http\Response
     */
    public function show(RequestAttachment $requestAttachment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\RequestAttachment  $requestAttachment
     * @return \Illuminate\Http\Response
     */
    public function edit(RequestAttachment $requestAttachment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateRequestAttachmentRequest  $request
     * @param  \App\Models\RequestAttachment  $requestAttachment
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateRequestAttachmentRequest $request, RequestAttachment $requestAttachment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\RequestAttachment  $requestAttachment
     * @return \Illuminate\Http\Response
     */
    public function destroy(RequestAttachment $requestAttachment)
    {
        //
    }
}
