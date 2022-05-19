<?php

namespace App\Http\Controllers;

use App\Models\Position;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PositionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = Position::latest('updated_at')->get();

        return view('admin.positions.index', compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.positions.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, Position::rules());
        $data = $request->all();
        $item=Position::create($data);
        return back()->withSuccess(trans('app.success_store'));
    }



    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Position  $position
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $item = Position::findOrFail($id);

        return view('admin.positions.edit', compact('item'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Position  $position
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id )
    {
        $this->validate($request, Position::rules(true, $id));

        $item = Position::findOrFail($id);

        $data = $request->all();

        $item->update($data);

        return redirect()->route(ADMIN . '.positions.index')->withSuccess(trans('app.success_update'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Position  $position
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Position::destroy($id);
        return back()->withSuccess(trans('app.success_destroy'));
    }
    public function groupedAction()
    {
        if (empty(request('ids', []))) {
            return back()->withWarning('must select positions to delete');
        }
        $ids = request('ids', []);
        $positions = Position::whereIn('id', $ids)->get();

        $positions->each(fn ($position) => $position->delete());
        return back()->withSucces('Positions have been deleted');
        # code...
    }
}
