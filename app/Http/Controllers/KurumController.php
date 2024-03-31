<?php

namespace App\Http\Controllers;

use App\Models\Kurum;
use Illuminate\Http\Request;

class KurumController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kurumlar = Kurum::all();
        return view("backend.modules.kurum.index",compact("kurumlar"));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("backend.modules.kurum.create");

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       $request->validate([
            "adi" => "required | min:3"
        ]);
        $request["kamu"] = $request->kamu ? 1:0;
        Kurum::create($request->all());
        return to_route("kurum.index");
    }

    /**
     * Display the specified resource.
     */
    public function show(Kurum $kurum)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Kurum $kurum)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Kurum $kurum)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Kurum $kurum)
    {
        //
    }
}
