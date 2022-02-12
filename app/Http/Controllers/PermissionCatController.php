<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\PermissionCat;
use App\Http\Controllers\Controller;
use App\Http\Requests\category\CategoryRequest;

class PermissionCatController extends Controller
{
       /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $permissioncats = PermissionCat::all();
        $user       = User::all();
        return view('admin.permissioncat.index', compact( 'permissioncats'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        $users       = User::all();
        return view('admin.permissioncat.create', compact('users', 'categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
            // Request All In Form
            $permissioncat = $request->all();

            $count = PermissionCat::where('category_id', '=', $request->category_id)->where('user_id', '=', $request->user_id)->count();
            // Cereat Request
            if ($count == 0) {
                $cat = PermissionCat::create($permissioncat);
            }else {
                return redirect()->route('permissioncat.index')->with(['error' => 'تمت الاضافه من قبل']);
            }
            // Check Done Or Fil
            if ($cat) {
                // Redirect Success Masseg
                return redirect()->route('permissioncat.create')->with(['success' => 'تم حفط القسم بنجاح']);
            }else {
                // Return Error Massege
                return redirect()->route('permissioncat.index')->with(['error' => 'يرجي المحاوله مره اخري']);
            }
        } catch (\Exception $ex) {
            return $ex;
            // Massege Error
            return redirect()->route('permissioncat.index')->with(['error' => 'يرجي المحاوله مره اخري']);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            $permissioncat = PermissionCat::find($id);
            if ($permissioncat) {
                $permissioncat->delete();
                return redirect()->route('permissioncat.index')->with(['success' => 'تم الحذف بنجاح']);
            }else {
                return redirect()->route('category.index')->with(['error' => 'يرجي المحاوله مره اخري']);
            }

        } catch (\Exception $ex) {
            return redirect()->route('category.index')->with(['error' => 'يرجي المحاوله مره اخري']);
        }
    }
}
