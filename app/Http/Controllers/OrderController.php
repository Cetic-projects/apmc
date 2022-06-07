<?php

namespace App\Http\Controllers;
use App\Models\Order;
use App\Models\User;
use App\Models\Post;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items=Order::latest('updated_at')->get();
        return view('admin.orders.index', compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users=User::pluck('first_name','id');
        $posts=Post::pluck('title','id');
        return view('admin.orders.create',compact('users','posts'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, Order::rules());
        $data = $request->all();
        $command = Order::create($data);
        $post=Post::find($command->post_id);
        $command->receipt=$post->price*$command->amount;
        $command->save();
        $post->decrement('amount',$request->amount);

        return back()->withSuccess(trans('app.success_store'));    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $item = Order::findOrFail($id);
        $users=User::pluck('first_name','id');
        $posts=Post::pluck('title','id');
        return view('admin.orders.edit', compact('item','users','posts'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, Order::rules(true, $id));

        $item = Order::findOrFail($id);
        $post=Post::find($item->post_id);
        $price=$post->price;
        $data = $request->all();
        $data['receipt']=$price*$request->amount;
        $item->update($data);

        return redirect()->route(ADMIN . '.orders.index')->withSuccess(trans('app.success_update'));    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $order=Order::find($id);
        $post=Post::find($order->post_id);
        $order->delete();
        return back()->withSuccess(trans('app.success_destroy'));    }


    public function groupedAction()
    {
        if (empty(request('ids', []))) {
            return back()->withWarning('must select orders to delete');
        }
        $ids = request('ids', []);
        $orders = Order::whereIn('id', $ids)->get();
        $orders->each(fn ($order) => $order->delete());
        return back()->withSucces('orders have been deleted');
    }
}
