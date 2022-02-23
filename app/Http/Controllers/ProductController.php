<?php
namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Comment;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\HistoryProduct;
use App\Models\Point;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Auth;
use Spatie\Permission\Models\Permission;
use App\Http\Requests\product\ProductRequest;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
    */

    // function __construct()
    // {
    //     $this->middleware('permission:role-list|role-create|role-edit|role-delete', ['only' => ['index','store']]);
    //     $this->middleware('permission:role-create', ['only' => ['create','store']]);
    //     $this->middleware('permission:role-edit', ['only' => ['edit','update']]);
    //     $this->middleware('permission:role-delete', ['only' => ['destroy']]);
    // }


    public function index()
    {
        $products = Product::all();

        // Get Id Role Name With Name Role In User
        $userRoleId = Role::where('name', '=', Auth::user()->roles_name[0])->first();

        // Get Pirmations Catrgories
        $pirmations_cat = Auth::user()->permission_cat->pluck('category_id');
        // Canver Object To Array
        $cat = json_decode($pirmations_cat);

        return view('admin.product.index', compact('products', 'cat'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('admin.product.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductRequest $request)
    {
        try {
            // Get Coustmer With Phone Nymber
            $costmer = User::where('phone', '=', $request->phone)->count();
            // Check This Coustmer Is Exiest Or No
            if ($costmer !== 0) {
                // Get Count Requrd
                $count = COUNT($request->serial_number);

                // return COUNT($count);
                for ($i=0; $i < $count; $i++) {

                    // Inser Only Prodact
                    // Except User Data
                    $data = $request->except(['name', 'phone', 'email']);
                    // return $data['product_inclusions'][$i];
                    // Get User Id
                    $customers_id = $request->user_id;
                    // Get Coustmer Id
                    $data['customers_id'] = $customers_id;
                    $data['count'] = 1;
                    $data['product_inclusions'] = $request->product_inclusions[$i];
                    $data['user_id'] = Auth::user()->id;
                    // Insert Prodact

                    // Insert Serial Number
                    if ($request->serial_number[$i] == "") {
                        $data['serial_number'] = serial_number(1);
                    }else {
                        $data['serial_number'] = $request->serial_number[$i];
                    }

                    $product = Product::create($data);
                    //  return $product->serial_number;
                    if ($request->serial_number[$i] == "") {
                        history(0, Auth::user()->id, $product->id, $product->serial_number);
                    }else {
                        history(0, Auth::user()->id, $product->id, $product->serial_number);
                    }


                    // Insert Comment
                    if ($request->comment) {
                        $data = [];
                        $data['comment'] = $request->comment;
                        $data['product_id'] = $product->id;
                        $data['user_id'] = Auth::user()->id;
                        $comment = Comment::create($data);
                    }
                }
            }else {
                return redirect()->route('product.create')->with(['error' => 'يرجي اضافه العميل اولا']);
            }

            return redirect()->route('product.create')->with(['success' => 'تم حفط المنتج بنجاح']);

        } catch (\Exception $ex) {
            return $ex;
            return redirect()->route('product.create')->with(['error' => 'يرجي المحاوله مره اخري']);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = Product::where('id', '=', $id)->first();

        return view('admin.product.show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        $categories = Category::all();
        return view('admin.product.edit', compact('product', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $id)
    {
        try {

            $product = Product::find($id);
            // Get User Id

            $data = $request->all();
            $userId = $request->user_id;

            $data['customers_id'] = $userId;
            $product->fill($data)->save();

            return redirect()->route('product.index')->with(['success' => 'تم التعديل بنجاح']);
        } catch (\Exception $ex) {

            return redirect()->route('product.create')->with(['error' => 'يرجي المحاوله مره اخري']);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //
    }

    // استلام المنتج لكل المستخدمين و فعل ما يمكن فعله حسب و ظيفه كل موظف
    public function reception($id)
    {
        $product = Product::find($id);
        if(Auth::user()->roles_name[0] == 'eneshial_test'){
            $data_product['status'] = 1;
            $product->fill($data_product)->save();
        }elseif (Auth::user()->roles_name[0] == 'fixed') {
            $data_product['status'] = 3;
            $product->fill($data_product)->save();
        }elseif (Auth::user()->roles_name[0] == 'advanced_fixed') {
            $data_product['status'] = 5;
            $product->fill($data_product)->save();
        }elseif (Auth::user()->roles_name[0] == 'final_test') {
            $data_product['status'] = 9;
            $product->fill($data_product)->save();
        }
        // Insert History Product
        history(1, Auth::user()->id, $product->id, $product->serial_number);

        return redirect()->route('product.index')->with(['success' => 'تم بنجاح']);
    }

    public function delivery($id)
    {
        $product = Product::find($id);

        $history = $product->history_products->last();
        if ($history->status == 1 && $history->product_id == $id && $history->end_at == NULL) {
            if(Auth::user()->roles_name[0] == 'eneshial_test'){
                $data_product['status'] = 2;
                $product->fill($data_product)->save();
            }elseif (Auth::user()->roles_name[0] == 'fixed') {
                $data_product['status'] = 4;
                $product->fill($data_product)->save();
            }elseif (Auth::user()->roles_name[0] == 'advanced_fixed') {
                $data_product['status'] = 6;
                $product->fill($data_product)->save();
            }elseif (Auth::user()->roles_name[0] == 'final_test') {
                $data_product['status'] = 10;
                $product->fill($data_product)->save();
            }


            $data_history['status'] = 2;
            $data_history['end_at'] = NOW();

            $history->fill($data_history)->save();

            return redirect()->route('product.index')->with(['success' => 'تم بنجاح']);
        }
        // return redirect()->route('product.create')->with(['error' => 'يرجي المحاوله مره اخري']);
    }

    public function doneFixed($id)
    {
        $product = Product::find($id);
        $data_product['status'] = 8;
        $product->fill($data_product)->save();

        $history = $product->history_products->last();
        $data_history['status'] = 2;
        $data_history['end_at'] = NOW();
        $history->fill($data_history)->save();


        $data = [];
        $data['user_id'] = Auth::user()->id;
        $data['product_id'] = $id;
        $data['point'] = 2;
        Point::create($data);
        return redirect()->route('product.index')->with(['success' => 'تم بنجاح']);
    }

    public function filedFixed($id)
    {
        $product = Product::find($id);
        $data_product['status'] = 7;
        $product->fill($data_product)->save();
        $history = $product->history_products->last();
        history(1, Auth::user()->id, $product->id, $product->serial_number);

        return redirect()->route('product.index')->with(['success' => 'تم بنجاح']);
    }

    public function compleat($id)
    {

        $product = Product::find($id);
        $data_product['status'] = 9;
        $product->fill($data_product)->save();

        history(1, Auth::user()->id, $product->id, $product->serial_number);


        Point::where('product_id', '=', $id);

        return redirect()->route('product.index')->with(['success' => 'تم بنجاح']);
    }


    public function productSearch(Request $request)
    {
        $product       = Product::where('serial_number', '=', $request->search)->first();
        return view('admin.product.show', compact('product'));
    }
}
