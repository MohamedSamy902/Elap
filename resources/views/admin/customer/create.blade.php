@extends('admin.layout.master')

@section('content')
@include('admin.alert.notfications')
    <div class="container-fluid">
        <div class="page-header">
            <div class="row">
                <div class="col-sm-6">
                    <h3>اضافه الموظفين</h3>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="index.html">الرئيسية</a>
                        </li>
                        <li class="breadcrumb-item">الموظفين</li>
                        <li class="breadcrumb-item active">اضافة موظف</li>
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
                    <form class="card" action="{{ route('user.store') }}" method="post">
                        @csrf
                        <div class="card-header pb-0">
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
                                        <input class="form-control" type="text" name="name">
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">البريد الالكتروني</label>
                                        <input class="form-control" type="text" placeholder="" name="email">
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-12">
                                    <div class="mb-3">
                                        <label class="form-label">رقم الهاتف</label>
                                        <input class="form-control" type="text" placeholder="" name="phone">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <label class="form-label">كلمه السر</label>
                                        <input class="form-control" type="text" placeholder="كلمه السر" name="password">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="mb-3" hidden>
                                        <label class="form-label">دور الموظف</label>
                                        <select class="form-select" name="roles_name">
                                            <option value='عميل'></option>
                                        </select>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="card-footer text-end">
                            <button class="btn btn-primary" type="submit">حفظ</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Container-fluid Ends-->
@endsection
