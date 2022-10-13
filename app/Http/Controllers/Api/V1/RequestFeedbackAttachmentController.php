<?php

namespace App\Http\Controllers\Api\V1;

use App\Models\RequestFeedbackAttachment;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreRequestFeedbackAttachmentRequest;
use App\Http\Requests\UpdateRequestFeedbackAttachmentRequest;

class RequestFeedbackAttachmentController extends Controller
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
     * @param  \App\Http\Requests\StoreRequestFeedbackAttachmentRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRequestFeedbackAttachmentRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\RequestFeedbackAttachment  $requestFeedbackAttachment
     * @return \Illuminate\Http\Response
     */
    public function show(RequestFeedbackAttachment $requestFeedbackAttachment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\RequestFeedbackAttachment  $requestFeedbackAttachment
     * @return \Illuminate\Http\Response
     */
    public function edit(RequestFeedbackAttachment $requestFeedbackAttachment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateRequestFeedbackAttachmentRequest  $request
     * @param  \App\Models\RequestFeedbackAttachment  $requestFeedbackAttachment
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateRequestFeedbackAttachmentRequest $request, RequestFeedbackAttachment $requestFeedbackAttachment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\RequestFeedbackAttachment  $requestFeedbackAttachment
     * @return \Illuminate\Http\Response
     */
    public function destroy(RequestFeedbackAttachment $requestFeedbackAttachment)
    {
        //
    }
}
