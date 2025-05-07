<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Models\Categories;
use App\Models\Products;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index(): Factory|Application|View
    {
        $data = [
            'name' => 'Laravel',
            'version' => '12.x',
            'author' => 'Taylor Otwell',
        ];

        $author = 'uni1046';

        $categories = Categories::paginate($this->perPage);

        //查询构建器
        //$categories = DB::table('categories')
        //->select('id', 'name')
        //->where('name', 'like', '%e%') //包含e
        //->orderBy('id', 'desc') //升序'asc'
        //->paginate($this->perPage);



        //$categoriesE = DB::table('categories')->where('name','like','%e%')->get();
        //foreach ($categoriesE as $categoryE) {
        //    echo '名字含e: ' . $categoryE->name . "<br>";
        //}
        //dd($categoriesE);


        //$products = DB::table('products')
        //->leftJoin('categories', 'categories.id', '=', 'products.category_id')
        //->select('products.id', 'products.name AS product_name', 'categories.name AS category_name')
        //->orderBy('id', 'desc')
        //->paginate($this->perPage);

        //dd($products);

        //$categoriesID = DB::table('categories')->pluck('id');
        //echo "所有分类id：";
        //foreach ($categoriesID as $id) {
        //    echo "ID:{$id}, NAME:" . htmlspecialchars($id);
        //}
        //dd($categoriesID);

        //$categoriesE10 = DB::table('categories')
        //->where('id', 10)
        //->where('name', 'like', '%e%')
        //->get();

        //dd($categoriesE10);


        //获取单个 category 然后像面向对象修改对象属性一样来修改实际的数据
        //$category = Categories::find(1);
        //if ($category) {
        //    $category->name = '家用电器';
        //    $category->save();
        //}

        //$category->delete();

        //$newCategory = new Categories();
        //$newCategory->name = '家用电器';
        //$newCategory->save();

        //$products = Products::where('id', '<', 10)
        //    ->orderBy('id', 'desc')
        //    ->get();
        //$products = Products::findMany([1, 2, 3]);
        //dd($products);

        //$product = Products::find(1); // 返回的是一个模型对象, 如果没有找到就返回 null
        $product = Products::findOrFail(99); // 如果没有找到(例如 id 改成 100000)就抛出异常, 404 页面
        dd($product->toArray());









        $html = '<h1 class="text-4xl">Hello World</h1>';

        // session()->flash('success', 'This is a flash message!');

        return view('test.index', compact('data', 'author', 'categories', 'html'));
    }
}
