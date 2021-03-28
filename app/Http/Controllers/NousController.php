<?php

namespace App\Http\Controllers;

use App\Models\Nous;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class NousController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $nous = Nous::get()->first();
        $nous_id = '';

        return view('backend.nous', ['nous' => $nous]);
    }

    public function indexWebsite()
    {
        $nous = Nous::get()->first();
        return view('pages.nous', ['nous' => $nous]);
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = auth()->user();
        // $validator =  Validator::make($request->all(), [
        $validatedData = $request->validate([
            'historique' => ['required',],
            'mission' => ['required',],
            'vision' => ['required',],
            'objectif' => ['required',],
        ]);

        // if ($validator->fails()) {
        //     return response()->json(['errors' => $validator->errors()]);
        // } else {
        // $data = $request->except('_token');
        // Nous::create($data);
        $nous = new Nous();
        $nous->historique = $request->historique;
        $nous->mission = $request->mission;
        $nous->vision = $request->vision;
        $nous->objectif = $request->objectif;
        $nous->user_id = auth()->id();
        $nous->save();

        return
            back()->with(['success' => 'A Propos has benn Update Successfully.', 'type' => 'success']);
        // }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Nous  $nous
     * @return \Illuminate\Http\Response
     */
    public function show(Nous $nous)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Nous  $nous
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // if (\Gate::allows('isAdmin')) {
        $user = auth()->user();
        // if ($user->type == 'admin') {

        $result = Nous::findOrFail($id);

        return ['result' => $result];
        // }
        // }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Nous  $nous
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Nous $nous)
    {
        $user = auth()->user();
        $validator =  Validator::make($request->all(), [
            'historique' => ['required',],
            'mission' => ['required',],
            'vision' => ['required',],
            'objectif' => ['required',],
        ]);

        // if ($validator->fails()) {
        //     return response()->json(['errors' => $validator->errors()]);
        // } else {
        // $data = $request->except('_token');
        // Nous::create($data);
        $nous = new Nous();
        $nous->historique = $request->historique;
        $nous->mission = $request->mission;
        $nous->vision = $request->vision;
        $nous->objectif = $request->objectif;
        $nous->user_id = auth()->id();
        $nous->update();

        return back()->with(['success' => 'A Propos has benn Update Successfully.', 'type' => 'success']);

        // return  ['success' => 'A Propos has benn Update Successfully.', 'type' => 'success'];
        // }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Nous  $nous
     * @return \Illuminate\Http\Response
     */
    public function destroy(Nous $nous)
    {
        //
    }
}
