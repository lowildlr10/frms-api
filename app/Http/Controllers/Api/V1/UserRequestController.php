<?php

namespace App\Http\Controllers\Api\V1;

use App\Models\UserRequest;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreUserRequestRequest;
use App\Http\Requests\UpdateUserRequestRequest;

class UserRequestController extends Controller
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
     * @param  \App\Http\Requests\StoreUserRequestRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreUserRequestRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\UserRequest  $userRequest
     * @return \Illuminate\Http\Response
     */
    public function show(UserRequest $userRequest)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\UserRequest  $userRequest
     * @return \Illuminate\Http\Response
     */
    public function edit(UserRequest $userRequest)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateUserRequestRequest  $request
     * @param  \App\Models\UserRequest  $userRequest
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateUserRequestRequest $request, UserRequest $userRequest)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\UserRequest  $userRequest
     * @return \Illuminate\Http\Response
     */
    public function destroy(UserRequest $userRequest)
    {
        //
    }
}
