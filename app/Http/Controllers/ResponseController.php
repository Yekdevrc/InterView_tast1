<?php

namespace App\Http\Controllers;

use App\Models\Response;
use App\Http\Controllers\Controller;
use App\Models\Student;
use Illuminate\Http\Request;

class ResponseController extends Controller
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
    public function store(Request $request)
    {
        $validated= $request->validate([
            'name'=> ['required', 'stirng'],
            'email'=> ['required', 'email']
        ]);

        Student::create([
            'name'=>$request->name,
            'email'=> $request->email
        ]);

        Response::create([
//
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Response $response)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Response $response)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Response $response)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Response $response)
    {
        //
    }
}
