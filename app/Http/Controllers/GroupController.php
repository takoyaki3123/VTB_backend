<?php

namespace App\Http\Controllers;

use App\Models\group;
use Illuminate\Http\Request;

class GroupController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(group $group)
    {
        //
    }

    // home page random group
    public function showOnHome()
    {
        $groupList = group::all(['id', 'img', 'name', 'activeDate']);
        return $groupList;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, group $group)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(group $group)
    {
        //
    }
}
