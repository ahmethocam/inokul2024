<?php

namespace App\Http\Controllers;

use App\Models\Kampus;
use App\Models\Kurum;
use App\Models\Okul;
use Illuminate\Http\Request;

class OkulController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($kampus_id)
    {
        $okullar = Okul::where("kampus_id",$kampus_id);
        $kampus = Kampus::find($kampus_id);
        return view("backend.modules.okul.index",compact("okullar","kampus"));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create($kampus_id)
    {
        $kampus = Kampus::find($kampus_id);

        return view("backend.modules.okul.create",compact("kampus"));

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            "adi" => "required | min:3"
        ]);
        Okul::create($request->all());
        return to_route("okul.index",$request->kampus_id);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
