<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use App\Models\Position;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BannerController extends Controller
{

    //
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = Banner::latest('updated_at')->with(['positions'])->get();
        return view('admin.banners.index', compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $positions= Position::pluck('name','code');
        return view('admin.banners.create',compact('positions'));
       
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, Banner::rules());
        $data = $request->all();
        $item=Banner::create($data);
        if($request->hasFile('avatar') && $request->file('avatar')->isValid()){


            $item->addMediaFromRequest('avatar')->toMediaCollection('banners');

        }

        return back()->withSuccess(trans('app.success_store'));
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $item = Banner::findOrFail($id);

        return view('admin.banners.edit', compact('item'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function StringToDate($str)
    {
        $date = strtotime($str);
        $date = date('Y-m-d H:i:s', $date);
        return $date;
    }
    public function update(Request $request, $id)
    {
        $this->validate($request, Banner::rules(true, $id));

        $item = Banner::findOrFail($id);

        $data = $request->all();


        $data['start_date'] = $this->StringToDate($request->start_date);

        $data['end_date'] = $this->StringToDate($request->end_date);
        $data['user_id']=Auth::id();
        $item->update($data);
        if($request->hasFile('avatar') && $request->file('avatar')->isValid()){
            if($item->getFirstMediaUrl('banners', 'thumb')!=null){
                $item->clearMediaCollection('banners');
            }

            $item->addMediaFromRequest('avatar')->toMediaCollection('banners');

        }

        return redirect()->route(ADMIN . '.banners.index')->withSuccess(trans('app.success_update'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Banner::destroy($id);
        return back()->withSuccess(trans('app.success_destroy'));
    }

    public function groupedAction()
    {
        if (empty(request('ids', []))) {
            return back()->withWarning('must select banners to delete');
        }
        $ids = request('ids', []);
        $banners = Banner::whereIn('id', $ids)->get();

        $banners->each(fn ($banner) => $banner->delete());
        return back()->withSucces('Banners have been deleted');
        # code...
    }
}
