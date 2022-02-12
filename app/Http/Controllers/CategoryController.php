<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Requests\category\CategoryRequest;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::all();
        return view('admin.category.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.category.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CategoryRequest $request)
    {
        try {
            // Request All In Form
            $category = $request->all();
            // Cereat Request
            $cat = Category::create($category);
            // Check Done Or Fil
            if ($cat) {
                // Redirect Success Masseg
                return redirect()->route('category.create')->with(['success' => 'تم حفط القسم بنجاح']);
            }else {
                // Return Error Massege
                return redirect()->route('category.index')->with(['error' => 'يرجي المحاوله مره اخري']);
            }
        } catch (\Exception $ex) {
            // Massege Error
            return redirect()->route('category.index')->with(['error' => 'يرجي المحاوله مره اخري']);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        $categories = Category::all();
        return view('admin.category.show', compact('categories'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        try {
            // Check Id In Request Or No
            if (isset($id) && !empty($id)) {
                // return $id;
                // Get Category With Id
                $category = Category::find($id);
                // return $category;
                // Check Category Found Or Fil
                if ($category) {
                    // Requrn Redirect With Success Massege
                    return view('admin.category.edit', compact('category'));
                }else {
                    // Requrn Redirect With Error Massege
                    return redirect()->route('category.index')->with(['error' => 'يرجي المحاوله مره اخري']);
                }
            }
        } catch (\Exception $ex) {
             return redirect()->route('category.index')->with(['error' => 'يرجي المحاوله مره اخري']);
        }

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(CategoryRequest $request, $id)
    {
        try {
            $category = Category::find($id);
            if ($category) {
                $data = $request->all();
                $status = $category->fill($data)->save();
                if ($status) {
                    return redirect()->route('category.index')->with(['success' => 'تم تعديل القسم بنجاح']);
                }else {
                    return redirect()->route('category.index')->with(['error' => 'يرجي المحاوله مره اخري']);
                }
            }
        } catch (\Exception $ex) {
            return redirect()->route('category.index')->with(['error' => 'يرجي المحاوله مره اخري']);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function deletcat($id)
    {
        try {
            $category = Category::find($id);
            if ($category) {
                $category->delete();
                return redirect()->route('category.index')->with(['success' => 'تم الحذف بنجاح']);
            }else {
                return redirect()->route('category.index')->with(['error' => 'يرجي المحاوله مره اخري']);
            }

        } catch (\Exception $ex) {
            return redirect()->route('category.index')->with(['error' => 'يرجي المحاوله مره اخري']);
        }
    }
}
