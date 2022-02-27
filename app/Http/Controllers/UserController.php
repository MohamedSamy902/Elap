<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Http\Request;
use App\Models\HistoryProduct;
use Spatie\Permission\Models\Role;
use App\Http\Controllers\Controller;
use Spatie\Permission\Models\Permission;

class UserController extends Controller
{
    function __construct()
    {
        $this->middleware('permission:موظفين', ['only' => ['index']]);
        $this->middleware('permission:اضافه موظف', ['only' => [ 'create','store']]);
        $this->middleware('permission:تعديل موظف', ['only' => ['edit','update']]);
    }
    /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */
    public function index(Request $request)
    {
        $users = User::where('roles_name', '!=', 'admin')->orderBy('id','DESC')->get();
        $i = 0;
        return view('admin.users.index',compact('users', 'i'));
    }
    /**
    * Show the form for creating a new resource.
    *
    * @return \Illuminate\Http\Response
    */
    public function create()
    {
        $roles = Role::pluck('name','name')->all();
        return view('admin.users.create',compact('roles'));
    }
    /**
    * Store a newly created resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @return \Illuminate\Http\Response
    */
    public function store(Request $request)
    {
        $input = $request->all();
        $input['roles_name'] = [$input['roles_name']];
        $input['password'] = Hash::make($input['password']);
        $user = User::create($input);
        $user->assignRole($request->input('roles_name'));
        return redirect()->back()
        ->with('success','تم الاضافه بنجاح');
    }
    /**
    * Display the specified resource.
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
    public function show($id)
    {
        $user = User::find($id);
        return view('users.show',compact('user'));
    }
    /**
    * Show the form for editing the specified resource.
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
    public function edit($id)
    {
        $user       = User::find($id);
        $roles      = Role::pluck('name','name')->all();
        $historys   = HistoryProduct::where('user_id', '=', $id)->get();


        return view('admin.users.edit',compact('user','roles', 'historys'));
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
        $input = $request->all();
        $user = User::find($id);
        $user->update($input);
        DB::table('model_has_roles')->where('model_id',$id)->delete();
        $user->assignRole($request->input('roles'));
        return redirect()->back()
        ->with('success','تم التحديث بنجاح');
    }
    /**
    * Remove the specified resource from storage.
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
    public function destroy($id)
    {
        User::find($id)->delete();
        return redirect()->back()
        ->with('success','تم الحذف بنجاح');
    }


    // Show User In Product Page With Ajax
    public function ajaxtest($phone)
    {
        $user = User::where('phone', '=', $phone)->first();
        if ($user) {
            return $user;
        }else {
            return $user;
        }
    }

    // Insert User In Product Page With Ajax
    public function insertuser(Request $request)
    {
        $data = $request->all();
        $data['status'] = 0;
        $data['roles_name'] = ['owner'];
        $user = User::create($data);
        if ($user) {
            return $user->id;
        }else {
            ['success' => 'تم الحذف بنجاح'];
        }

    }

    // Update User In Product Page With Ajax
    public function updateuser(Request $request, $id)
    {
        $user = User::find($id);
        $data = $request->all();
        $status = $user->fill($data)->save();
    }

    // Update User In Product Page With Ajax
    public function customerIndex()
    {
        $customers = User::orderBy('id','DESC')->where('roles_name', '=', 'coustmer')->get();
        return view('admin.customer.index',compact(['customers']))->with('i');
    }


    public function customerEdit($id)
    {
        $user       = User::find($id);
        $products = \App\Models\Product::where('customers_id', '=', $id)->get();
        return view('admin.customer.edit',compact('user', 'products'));
    }

    public function customerCreate()
    {
        return view('admin.customer.create');
    }
}


