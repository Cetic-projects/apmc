<?php



namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use App\Models\Category;





class CategoryController extends Controller

{

    /**

     * Display a listing of the resource.

     *

     * @return \Illuminate\Http\Response

     */

    public function index()

    {

        // $items = Category::latest('updated_at')->get();

        $items = Category::get()->toTree();
        return view('admin.categories.index', compact('items'));

    }

    /**

     * Show the form for creating a new resource.

     *

     * @return \Illuminate\Http\Response

     */

    public function create()

    {


        return view('admin.categories.create');

    }

    /**

     * Store a newly created resource in storage.

     *

     * @param  \Illuminate\Http\Request  $request

     * @return \Illuminate\Http\Response

     */

    public function store(Request $request)

    {
        $this->validate($request, Category::rules());
        $data=$request->all();

        $data['slug']=$data['name'];

        $item = Category::create($data);



        return redirect()->route(ADMIN . '.categories.edit', $item)->withSuccess(trans('app.success_store'));
    }



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

        $item = Category::findOrFail($id);



        return view('admin.categories.edit', compact('item'));

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
        $this->validate($request, Category::rules(true, $id));

        $parent = Category::find(request('parent_id'));

        $item = Category::findOrFail($id);

        $data=$request->all();
        $data['slug']=$data['name'];

        $item->update($data);

        if ($parent) {

            $item->appendToNode($parent)->save();

        } else {

            $item->saveAsRoot();

        }
        return back()->withSuccess(trans('app.success_update'));
    }



    /**

     * Remove the specified resource from storage.

     *

     * @param  int  $id

     * @return \Illuminate\Http\Response

     */

    public function destroy($id)

    {

        Category::destroy($id);



        return back()->withSuccess(trans('app.success_destroy'));

    }



    /**

     * Get children

     */

    public function ajaxChildren($category)

    {

        $category = ($category == 0) ? null : $category;



        return Category::where('parent_id', $category)->get()->map(fn ($category) => [

            'id'          => $category->id,

            'name'        => $category->name,

            'parent_id'   => $category->parent_id,


        ]);

    }





    /**

     * Display a listing of the resource.

     *

     * @return \Illuminate\Http\Response

     */





    /**

     * Get Tree

     */

    public function ajaxTree(Category $category)

    {

        return Category::ancestorsAndSelf($category->id)->pluck('name');

    }

    public function groupedAction()
    {

        if (empty(request('ids', []))) {
            return back()->withWarning('must select categories to delete');
        }
        $ids = request('ids', []);
        $categories = Category::whereIn('id', $ids)->get();

        $categories->each(fn ($item) => $item->delete());
        return back()->withSucces('Categories have been deleted');
    }
}
