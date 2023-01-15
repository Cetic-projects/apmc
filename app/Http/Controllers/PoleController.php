<?php

namespace App\Http\Controllers;

use App\Models\pole;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PoleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = Pole::latest('updated_at')->get();

        return view('admin.poles.index', compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.poles.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, Pole::rules());
        $data = $request->all();
        $item=Pole::create($data);
        return back()->withSuccess(trans('app.success_store'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\pole  $pole
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\pole  $pole
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $item = Pole::findOrFail($id);

        return view('admin.poles.edit', compact('item'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\pole  $pole
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, Pole::rules(true, $id));

        $item = Pole::findOrFail($id);

        $data = $request->all();

        $item->update($data);

        return redirect()->route(ADMIN . '.poles.index')->withSuccess(trans('app.success_update'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\pole  $pole
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Pole::destroy($id);
        return back()->withSuccess(trans('app.success_destroy'));
    }
    public function groupedAction()
    {
        if (empty(request('ids', []))) {
            return back()->withWarning('must select poles to delete');
        }
        $ids = request('ids', []);
        $poles = Pole::whereIn('id', $ids)->get();

        $poles->each(fn ($Pole) => $Pole->delete());
        return back()->withSucces('poles have been deleted');
        # code...
    }
}
