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
                            <a href="index.html">الرئيسية</a>
                        </li>
                        <li class="breadcrumb-item">الملف الشخصي</li>
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
                <div class="col-xl-4">
                    <div class="card">
                        <div class="card-header pb-0">
                            <h4 class="card-title mb-0"> الصلاحيات</h4>
                        </div>
                        <div class="card-body">
                            <form>
                                <div class="row mb-2">

                                </div>
                                <div class="mb-3">
                                    <h4 class="form-label text-center">{{ $user->roles_name[0] }}</h4>
                                </div>
                                <div class="row">
                                    @foreach ($userrolePermissions as $value)
                                        <div class="col-12" style="margin-bottom: 10px">
                                            <label for="chk-ani{{ $value->id }}">
                                                {{ $value->name }}
                                            </label>
                                        </div>
                                    @endforeach

                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-xl-8">
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
                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <label class="form-label">كلمه السر</label>
                                        <select class="form-select" name="roles_name">
                                            @foreach ($roles as $key)
                                                <option value="{{ $key }}">{{ $key }}</option>
                                            @endforeach
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
