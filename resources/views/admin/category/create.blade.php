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
        <form class="form theme-form" method="post" action="{{ route('category.store') }}">
            @csrf
            <div class="row">
                <div class="col-sm-12">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card">

                                <div class="card-body">
                                        <div class="mb-3">
                                            <label class="col-form-label">اسم القسم</label>
                                            <input class="form-control" type="text" placeholder="اسم القسم" name="name">
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
