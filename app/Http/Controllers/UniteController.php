<?php

namespace App\Http\Controllers;

use App\Models\unite;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UniteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = Unite::latest('updated_at')->get();

        return view('admin.unites.index', compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.unites.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, Unite::rules());
        $data = $request->all();
        $item=Unite::create($data);
        return back()->withSuccess(trans('app.success_store'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\unite  $unite
     * @return \Illuminate\Http\Response
     */
    public function show(unite $unite)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\unite  $unite
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $item = Unite::findOrFail($id);

        return view('admin.unites.edit', compact('item'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\unite  $unite
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, Unite::rules(true, $id));

        $item = Unite::findOrFail($id);

        $data = $request->all();

        $item->update($data);

        return redirect()->route(ADMIN . '.unites.index')->withSuccess(trans('app.success_update'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\unite  $unite
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Unite::destroy($id);
        return back()->withSuccess(trans('app.success_destroy'));
    }
    public function groupedAction()
    {
        if (empty(request('ids', []))) {
            return back()->withWarning('must select unites to delete');
        }
        $ids = request('ids', []);
        $unites = Unite::whereIn('id', $ids)->get();

        $unites->each(fn ($unite) => $unite->delete());
        return back()->withSucces('unites have been deleted');
        # code...
    }
}
