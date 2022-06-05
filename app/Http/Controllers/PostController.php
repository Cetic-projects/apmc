<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Http\Controllers\Controller;
use App\Models\Branch;
use App\Models\Category;
use Illuminate\Http\Request;


class PostController extends Controller
{
    public $posts;



    //
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items=Post::latest('updated_at')->with('category')->get();
        return view('admin.posts.index', compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories=Category::pluck('name','id');

        return view('admin.posts.create', compact('categories'));
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, Post::rules());
        $data = $request->all();
        $data['slug'] = $request->name;
        $item = Post::create($data);
        if (request()->has('image')) {
            $item->addMedia(request('image'))
                ->toMediaCollection('posts');
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

        $item =Post::whereId($id)->with(['category'])->first();
        $categories=Category::pluck('name','id');


        return view('admin.posts.edit', compact('item','categories'));
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
        $this->validate($request, Post::rules(true, $id));

        $item = Post::findOrFail($id);

        $data = $request->all();


        $data['begin_promotional_date'] = $this->StringToDate($request->begin_promotional_date);

        $data['end_promotional_date'] = $this->StringToDate($request->end_promotional_date);
        $item->update($data);
        if (request()->has('image')) {
            $item->clearMediaCollection('posts')
                ->addMedia(request('image'))
                ->toMediaCollection('posts');
        }

        return redirect()->route(ADMIN . '.posts.index')->withSuccess(trans('app.success_update'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Post::findOrFail($id)->delete();
        return back()->withSuccess(trans('app.success_destroy'));
    }

    public function groupedAction()
    {
        if (empty(request('ids', []))) {
            return back()->withWarning('must select posts to delete');
        }
        $ids = request('ids', []);
        $posts = Post::whereIn('id', $ids)->get();

        $posts->each(fn ($posts) => $posts->delete());
        return back()->withSucces('posts have been deleted');
        # code...
    }
}
