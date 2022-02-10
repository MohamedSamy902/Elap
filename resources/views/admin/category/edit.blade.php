@extends('admin.layout.master')

@section('content')
    <div class="container-fluid">
        <div class="page-header">
            <div class="row">
                <div class="col-sm-6">
                    <h3>تعديل قسم</h3>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="index.html">الرئيسية</a>
                        </li>
                        <li class="breadcrumb-item">الاقسام</li>
                        <li class="breadcrumb-item active">تعديل قسم</li>
                    </ol>
                </div>

            </div>
        </div>
    </div>
    <!-- Container-fluid starts-->
    <div class="container-fluid">
        @include('admin.alert.notfications')
        <form class="form theme-form" method="post" action="{{ route('category.update', $category->id) }}">
            @csrf
            @method('patch')
            <div class="row">
                <div class="col-sm-12">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card">
                                {{-- <div class="card-header pb-0">
                                    <h5>بيانات القسم</h5>
                                </div> --}}
                                <div class="card-body">
                                        <div class="mb-3">
                                            <label class="col-form-label">اسم القسم</label>
                                            <input class="form-control" type="text" placeholder="اسم القسم" name="name" value="{{ $category->name }}">
                                            <input type="hidden" name="id" value="{{ $category->id }}">
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
