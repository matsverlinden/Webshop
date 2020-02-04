<?php

namespace App\Http\Controllers;


use App\Category;
use App\Product;
use Session;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        $products = $category->products;
        $category = Category::all();
        return View('category.show', compact('category','products'));
    }
}
