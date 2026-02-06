<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorememberRequest;
use App\Http\Requests\UpdatememberRequest;
use App\Models\member;

class MemberController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorememberRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(member $member)
    {
        //
    }

    public function showOnHome()
    {
        $memberList = member::all(['id', 'gid', 'name', 'img', 'activeDate', 'sns', 'live']);
        return $memberList;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(member $member)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatememberRequest $request, member $member)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(member $member)
    {
        //
    }
}
