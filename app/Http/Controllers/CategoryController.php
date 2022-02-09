<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\categories;

class CategoryController extends Controller
{
    //Categories
    public function managerCategories(){
        $categories=categories::all();
        return view('manager.manager-categories', compact('categories'));
    }

    public function createNewCategory(){
        return view('manager.create-category');
    }

    public function storeNewCategory(){
        //validation for fields
        request()->validate([
            'category_title' =>['required', 'max:30'],
            'category_description' => ['max:250'],
        ]);

        // fetching the request data from create form
        $category = new categories();
        $category->category=request('category_title');
        $category->category_description=request('category_description');
            
        $category->save();
        return redirect('/manager-categories')->with('success', 'New Category Added!');
    }

    public function deleteCategory(categories $category){
        $category->delete();
        return redirect('/manager-categories')->with('deleted', 'Category Removed!');
    }
}
