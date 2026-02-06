<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorehomeRequest;
use App\Http\Requests\UpdatehomeRequest;
use App\Models\home;

class HomeController extends Controller
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
    public function store(home $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        //
        $homeData = home::latest()->first();

        if (empty($homeData)) {
            return response()->json(['message' => '沒有找到資料'], 400);
        }
        $member = new MemberController()->showOnHome();
        $event = new EventController()->showOnHome();
        $result = ['img' => $homeData['img'], 'member' => $member, 'event' => $event];
        return $result;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(home $home)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(home $request, home $home)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(home $home)
    {
        //
    }
}
