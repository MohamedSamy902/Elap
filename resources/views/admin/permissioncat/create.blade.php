@extends('admin.layout.master')

@section('content')
    <div class="container-fluid">
        <div class="page-header">
            <div class="row">
                <div class="col-sm-6">
                    <h3>اضافه قسم</h3>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="index.html">الرئيسية</a>
                        </li>
                        <li class="breadcrumb-item">الاقسام</li>
                        <li class="breadcrumb-item active">اضافة قسم</li>
                    </ol>
                </div>

            </div>
        </div>
    </div>
    <!-- Container-fluid starts-->
    <div class="container-fluid">
        <form class="form theme-form" method="post" action="{{ route('permissioncat.store') }}">
            @csrf
            <div class="row">
                <div class="col-sm-12">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card">

                                <div class="card-body">
                                        <div class="mb-3">
                                            <label class="col-form-label">اسم القسم</label>
                                            <select name="category_id" id="" class="form-control">
                                                @foreach($categories as $category)
                                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>

                                        <div class="mb-3">
                                            <label class="col-form-label">اسم الموظف</label>
                                            <select name="user_id" id="" class="form-control">
                                                 @foreach($users as $user)
                                                    <option value="{{ $user->id }}">{{ $user->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>

                                </div>
                                <div class="card-footer">
                                    <button class="btn btn-primary">حفظ</button>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </form>
    </div>
    <!-- Container-fluid Ends-->
@endsection
