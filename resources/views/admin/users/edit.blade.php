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



    <div class="container-fluid">
        <div class="page-header">
            <div>
                <h3 class="text-center">منتجات {{ $user->name }}</h3>
            </div>

        </div>
    </div>
    <!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="row project-cards">
            <div class="col-md-12 project-list">
                <div class="card">
                    <div class="row">
                        <div class="col-md-6 p-0">
                            <ul class="nav nav-tabs border-tab" id="top-tab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="top-home-tab" data-bs-toggle="tab" href="#top-home"
                                        role="tab" aria-controls="top-home" aria-selected="true">
                                        <i data-feather="target"></i>
                                        الكل
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="profile-top-tab" data-bs-toggle="tab" href="#top-profile"
                                        role="tab" aria-controls="top-profile" aria-selected="false">
                                        <i data-feather="info"></i>
                                        تم بدء العمل
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="contact-top-tab" data-bs-toggle="tab" href="#top-contact"
                                        role="tab" aria-controls="top-contact" aria-selected="false">
                                        <i data-feather="check-circle"></i>
                                        تم انتهاء العمل
                                    </a>
                                </li>
                            </ul>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <div class="tab-content" id="top-tabContent">
                            <div class="tab-pane fade show active" id="top-home" role="tabpanel"
                                aria-labelledby="top-home-tab">
                                <div class="row">
                                    <div class="col-xxl-12 col-lg-12">
                                    @foreach($historys as $history)
                                        <div class="project-box">
                                            <span class="badge badge-primary">Doing</span>
                                            <div class="row">
                                                <div class="col-xxl-4 col-lg-4">
                                                    <h6>
                                                        <a href="{{ route('product.show', $history->product->id) }}">
                                                            {{ $history->product->name_product }}
                                                        </a>
                                                    </h6>

                                                    <div class="media">
                                                        <div class="media-body">
                                                            <p>{{ $history->user->name }}</p>
                                                        </div>
                                                    </div>

                                                    <div class="row details">
                                                        <div class="col-6"><span>المشتملات </span>
                                                        </div>
                                                        <div class="col-6 font-primary">
                                                            {{ $history->product->product_inclusions }}
                                                        </div>
                                                        <div class="col-6"> <span>العطل</span></div>
                                                        <div class="col-6 font-primary">{{ $history->product->damage }}
                                                        </div>
                                                        <div class="col-6"> <span>التعليقات</span>
                                                        </div>
                                                        <div class="col-6 font-primary">
                                                            {{ COUNT($history->product->comment) }}</div>
                                                    </div>

                                                </div>
                                                <div class="col-xxl-5 col-lg-5 text-center mt-5">
                                                    <div class="row details">
                                                        {{-- @foreach ($historys as $history) --}}
                                                            <div class="col-4">
                                                                <span>{{ $history->user->roles_name[0] }}
                                                                    ({{ $history->user->name }})
                                                                </span>
                                                            </div>
                                                            <div class="col-4 font-primary">
                                                                {{ $history->created_at }}
                                                            </div>
                                                            <div class="col-4 font-primary">
                                                                {{ $history->end_at }}</div>
                                                            <hr>
                                                        {{-- @endforeach --}}

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                    </div>

                                </div>
                            </div>
                            <div class="tab-pane fade" id="top-profile" role="tabpanel" aria-labelledby="profile-top-tab">
                                <div class="row">
                                    <div class="col-xxl-12 col-lg-12">
                                        @foreach($historys as $history)
                                            @if($history->status == 0 && $history->end_at == NUll)
                                                <div class="project-box">
                                                    <span class="badge badge-primary">Doing</span>
                                                    <div class="row">
                                                        <div class="col-xxl-4 col-lg-4">
                                                            <h6>
                                                                <a href="{{ route('product.show', $history->product->id) }}">
                                                                    {{ $history->product->name_product }}
                                                                </a>
                                                            </h6>

                                                            <div class="media">
                                                                <div class="media-body">
                                                                    <p>{{ $history->user->name }}</p>
                                                                </div>
                                                            </div>

                                                            <div class="row details">
                                                                <div class="col-6"><span>المشتملات </span>
                                                                </div>
                                                                <div class="col-6 font-primary">
                                                                    {{ $history->product->product_inclusions }}
                                                                </div>
                                                                <div class="col-6"> <span>العطل</span></div>
                                                                <div class="col-6 font-primary">{{ $history->product->damage }}
                                                                </div>
                                                                <div class="col-6"> <span>التعليقات</span>
                                                                </div>
                                                                <div class="col-6 font-primary">
                                                                    {{ COUNT($history->product->comment) }}</div>
                                                            </div>

                                                        </div>
                                                        <div class="col-xxl-5 col-lg-5 text-center mt-5">
                                                            <div class="row details">
                                                                <div class="col-4">
                                                                    <span>{{ $history->user->roles_name[0] }}
                                                                        ({{ $history->user->name }})
                                                                    </span>
                                                                </div>
                                                                <div class="col-4 font-primary">
                                                                    {{ $history->created_at }}
                                                                </div>
                                                                <div class="col-4 font-primary">
                                                                    {{ $history->end_at }}
                                                                </div>
                                                                <hr>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endif
                                        @endforeach
                                    </div>

                                </div>
                            </div>
                            <div class="tab-pane fade" id="top-contact" role="tabpanel" aria-labelledby="contact-top-tab">
                                <div class="row">
                                    <div class="col-xxl-12 col-lg-12">
                                        @foreach($historys as $history)
                                            @if($history->status == 1 && $history->end_at != NUll)
                                                <div class="project-box">
                                                    <span class="badge badge-primary">Doing</span>
                                                    <div class="row">
                                                        <div class="col-xxl-4 col-lg-4">
                                                            <h6>
                                                                <a href="{{ route('product.show', $history->product->id) }}">
                                                                    {{ $history->product->name_product }}
                                                                </a>
                                                            </h6>

                                                            <div class="media">
                                                                <div class="media-body">
                                                                    <p>{{ $history->user->name }}</p>
                                                                </div>
                                                            </div>

                                                            <div class="row details">
                                                                <div class="col-6"><span>المشتملات </span>
                                                                </div>
                                                                <div class="col-6 font-primary">
                                                                    {{ $history->product->product_inclusions }}
                                                                </div>
                                                                <div class="col-6"> <span>العطل</span></div>
                                                                <div class="col-6 font-primary">{{ $history->product->damage }}
                                                                </div>
                                                                <div class="col-6"> <span>التعليقات</span>
                                                                </div>
                                                                <div class="col-6 font-primary">
                                                                    {{ COUNT($history->product->comment) }}</div>
                                                            </div>

                                                        </div>
                                                        <div class="col-xxl-5 col-lg-5 text-center mt-5">
                                                            <div class="row details">
                                                                <div class="col-4">
                                                                    <span>{{ $history->user->roles_name[0] }}
                                                                        ({{ $history->user->name }})
                                                                    </span>
                                                                </div>
                                                                <div class="col-4 font-primary">
                                                                    {{ $history->created_at }}
                                                                </div>
                                                                <div class="col-4 font-primary">
                                                                    {{ $history->end_at }}
                                                                </div>
                                                                <hr>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endif
                                        @endforeach
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Container-fluid Ends-->
@endsection
