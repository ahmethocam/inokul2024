<?php

namespace App\Http\Controllers;

use App\Models\Kampus;
use App\Models\Kurum;
use Illuminate\Http\Request;

class KampusController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($kurum_id)
    {
        $kurum = Kurum::find($kurum_id);

        return view("backend.modules.kampus.index",compact("kurum"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create($kurum_id)
    {
        $kurum = Kurum::find($kurum_id);

        return view("backend.modules.kampus.create",compact("kurum"));

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $request->validate([
            "adi" => "required | min:3"
        ]);
        Kampus::create($request->all());
        return to_route("kampus.index",$request->kurum_id);
    }

    /**
     * Display the specified resource.
     */
    public function show(Kampus $kampus)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Kampus $kampus)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Kampus $kampus)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Kampus $kampus)
    {
        //
    }
}
