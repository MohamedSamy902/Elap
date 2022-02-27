@extends('admin.layout.master')

@section('content')
    @include('admin.alert.notfications')
    <div class="container-fluid">
        <div class="page-header">
            <div class="row">
                <div class="col-sm-6">
                    <h3>الملف الشخصي</h3>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="{{ url('/admin') }}">الرئيسية</a>
                        </li>
                        <li class="breadcrumb-item">
                            <a href="{{ route('customer.index') }}">
                                العملاء
                            </a>
                        </li>
                        <li class="breadcrumb-item active">تعديل الملف الشخصي</li>
                    </ol>
                </div>

            </div>
        </div>
    </div>
    <!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="edit-profile">
            <div class="row">

                <div class="col-xl-12">
                    <form class="card" action="{{ route('user.update', $user->id) }}" method="post">
                        @csrf
                        @method('patch')
                        <div class="card-header pb-0">
                            <h4 class="card-title mb-0">الملف الشحصي</h4>
                            <div class="card-options"><a class="card-options-collapse" href="#"
                                    data-bs-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a><a
                                    class="card-options-remove" href="#" data-bs-toggle="card-remove"><i
                                        class="fe fe-x"></i></a></div>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-6 col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">الاسم</label>
                                        <input class="form-control" type="text" name="name" value="{{ $user->name }}">
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">البريد الالكتروني</label>
                                        <input class="form-control" type="text" placeholder="" name="email"
                                            value="{{ $user->email }}">
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-12">
                                    <div class="mb-3">
                                        <label class="form-label">رقم الهاتف</label>
                                        <input class="form-control" type="text" placeholder="" name="phone"
                                            value="{{ $user->phone }}">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <label class="form-label">كلمه السر</label>
                                        <input class="form-control" type="text" placeholder="كلمه السر" name="password">
                                    </div>
                                </div>
                                {{-- <div class="col-md-12">
                                    <div class="mb-3">
                                        <label class="form-label">كلمه السر</label>
                                        <select class="form-select" name="roles_name">

                                        </select>
                                    </div>
                                </div> --}}

                            </div>
                        </div>
                        <div class="card-footer text-end">
                            <button class="btn btn-primary" type="submit">حفظ</button>
                        </div>
                    </form>
                </div>

                @foreach ($products as $product)
                    <div class="col-xxl-12 col-lg-12">
                        <div class="project-box"><span class="badge badge-primary">Doing</span>
                            <div class="row">
                                <div class="col-xxl-4 col-lg-4">
                                    <h6><a href="{{ route('product.show', $product->id) }}">{{ $product->name_product }}
                                        </a></h6>

                                    <div class="media"><img class="img-20 me-2 rounded-circle"
                                            src="../assets/images/user/3.jpg" alt="" data-original-title="" title="">
                                        <div class="media-body">
                                            <p>{{ $product->user->name }}</p>
                                        </div>
                                    </div>
                                    <p>{{ $product->user->name }}</p>
                                    <div class="row details">
                                        <div class="col-6"><span>المشتملات </span>
                                        </div>
                                        <div class="col-6 font-primary">
                                            {{ $product->product_inclusions }}
                                        </div>
                                        <div class="col-6"> <span>العطل</span></div>
                                        <div class="col-6 font-primary">{{ $product->damage }}
                                        </div>
                                        <div class="col-6"> <span>التعليقات</span>
                                        </div>
                                        <div class="col-6 font-primary">
                                            {{ COUNT($product->comment) }}</div>
                                    </div>

                                </div>
                                <div class="col-xxl-5 col-lg-5 text-center mt-5">
                                    <div class="row details">
                                        @foreach ($product->history_products as $history)
                                            <div class="col-4">
                                                <span>{{ $history->user->roles_name[0] }}
                                                </span>
                                            </div>
                                            <div class="col-4 font-primary">
                                                {{ $history->created_at }}
                                            </div>
                                            <div class="col-4 font-primary">
                                                {{ $history->end_at }}</div>
                                            <hr>
                                        @endforeach

                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-3">
                                    <div class="row">
                                        @can('تعديل منتج')
                                            @if ($product->status == 0)
                                                <div class="col-xxl-6 col-lg-6 col-sm-6 text-center mt-5">
                                                    <a class="btn btn-primary "
                                                        href="{{ route('product.edit', $product->id) }}">تعديل</a>
                                                </div>
                                            @endif
                                        @endcan

                                        @can('حذف منتج')
                                            @if ($product->status == 0 || $product->status >= 7)
                                                <div class="col-xxl-6 col-lg-6 col-sm-6 text-center mt-5">
                                                    <a class="btn btn-primary " href="#">حذف</a>
                                                </div>
                                            @endif
                                        @endcan

                                        @can('استلام المنتج')
                                            <div class="col-xxl-6 col-lg-6 col-sm-6 text-center mt-5">
                                                <a class="btn btn-primary "
                                                    href="{{ route('product.receptiontest', $product->id) }}">الاستلام</a>
                                            </div>
                                        @endcan


                                        @can('تسليم العميل')
                                            <div class="col-xxl-6 col-lg-6 col-sm-6 text-center mt-5">
                                                <a class="btn btn-primary " href="#">تسليم
                                                    العميل</a>
                                            </div>
                                        @endcan

                                        @can('رفض منتج')
                                            <div class="col-xxl-6 col-lg-6 text-center mt-5">
                                                <a class="btn btn-primary " href="#">مرفوض</a>
                                            </div>
                                        @endcan

                                        @can('اضافه ملاحظه للمنتج')
                                            <div class="col-xxl-6 col-lg-6 text-center mt-5 mb-5">
                                                <a class="btn btn-primary " href="#">اضافة تعليق</a>
                                            </div>
                                        @endcan
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                @endforeach
            @endsection
