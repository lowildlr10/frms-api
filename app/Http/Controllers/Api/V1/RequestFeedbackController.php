<?php

namespace App\Http\Controllers\Api\V1;

use App\Models\RequestFeedback;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreRequestFeedbackRequest;
use App\Http\Requests\UpdateRequestFeedbackRequest;

class RequestFeedbackController extends Controller
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
     * @param  \App\Http\Requests\StoreRequestFeedbackRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRequestFeedbackRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\RequestFeedback  $requestFeedback
     * @return \Illuminate\Http\Response
     */
    public function show(RequestFeedback $requestFeedback)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\RequestFeedback  $requestFeedback
     * @return \Illuminate\Http\Response
     */
    public function edit(RequestFeedback $requestFeedback)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateRequestFeedbackRequest  $request
     * @param  \App\Models\RequestFeedback  $requestFeedback
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateRequestFeedbackRequest $request, RequestFeedback $requestFeedback)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\RequestFeedback  $requestFeedback
     * @return \Illuminate\Http\Response
     */
    public function destroy(RequestFeedback $requestFeedback)
    {
        //
    }
}
