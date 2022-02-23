@extends('admin.layout.master')
@section('content')
    <div class="container-fluid">
        <div class="row project-cards">
            <div class="col-md-12 project-list">
                <div class="card">
                    <div class="row">
                        <div class="col-md-6 p-0">
                            <ul class="nav nav-tabs border-tab" id="top-tab" role="tablist">
                                @if (Auth::user()->roles_name[0] != 'recepion')
                                    <li class="nav-item">
                                        <a class="nav-link active" id="top-home-tab" data-bs-toggle="tab" href="#top-home"
                                            role="tab" aria-controls="top-home" aria-selected="true">
                                            <i data-feather="target"></i>
                                            الكل
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="profile-top-tab" data-bs-toggle="tab"
                                            href="#top-profile" role="tab" aria-controls="top-profile"
                                            aria-selected="false">
                                            <i data-feather="info"></i>
                                            تم بدء العمل
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="contact-top-tab" data-bs-toggle="tab"
                                            href="#top-contact" role="tab" aria-controls="top-contact"
                                            aria-selected="false">
                                            <i data-feather="check-circle"></i>
                                            تم انتهاء العمل
                                        </a>
                                    </li>
                                @else
                                    <li class="nav-item">
                                        <a class="nav-link active" id="top-home-tab" data-bs-toggle="tab" href="#top-home"
                                            role="tab" aria-controls="top-home" aria-selected="true">
                                            <i data-feather="target"></i>
                                            الكل
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="profile-top-tab" data-bs-toggle="tab"
                                            href="#top-profile" role="tab" aria-controls="top-profile"
                                            aria-selected="false">
                                            <i data-feather="info"></i>
                                            تم بدء العمل
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="contact-top-tab" data-bs-toggle="tab"
                                            href="#top-contact" role="tab" aria-controls="top-contact"
                                            aria-selected="false">
                                            <i data-feather="check-circle"></i>
                                            تم انتهاء العمل
                                        </a>
                                    </li>
                                @endif
                            </ul>
                        </div>
                        <div class="col-md-6 p-0">
                            <div class="form-group mb-0 me-0"></div>
                            <a class="btn btn-primary" href="{{ route('product.create') }}"> <i
                                    data-feather="plus-square"> </i>اضافه</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-body">
                        @if (Auth::user()->roles_name[0] == 'eneshial_test')
                            <div class="tab-content" id="top-tabContent">
                                <div class="tab-pane fade show active" id="top-home" role="tabpanel"
                                    aria-labelledby="top-home-tab">
                                    <div class="row">
                                        @foreach ($products as $product)
                                            @if (in_array($product->category_id, $cat) == 1 && $product->status == 0)
                                                @include('admin.product.include.all')
                                            @endif
                                        @endforeach
                                    </div>
                                </div>

                                <div class="tab-pane fade" id="top-profile" role="tabpanel"
                                    aria-labelledby="profile-top-tab">
                                    <div class="row">
                                        @foreach ($products as $product)
                                            @if (in_array($product->category_id, $cat) == 1 && $product->status == 1)
                                                @include('admin.product.include.doing')
                                            @endif
                                        @endforeach
                                    </div>
                                </div>

                                <div class="tab-pane fade" id="top-contact" role="tabpanel"
                                    aria-labelledby="contact-top-tab">
                                    <div class="row">
                                        @foreach ($products as $product)
                                            @if (in_array($product->category_id, $cat) == 1 && $product->status >= 2)
                                                @include('admin.product.include.done')
                                            @endif
                                        @endforeach
                                    </div>
                                </div>

                            </div>
                        @elseif(Auth::user()->roles_name[0] == 'fixed')
                            <div class="tab-content" id="top-tabContent">
                                <div class="tab-pane fade show active" id="top-home" role="tabpanel"
                                    aria-labelledby="top-home-tab">
                                    <div class="row">
                                        @foreach ($products as $product)
                                            @if (in_array($product->category_id, $cat) == 1 && $product->status == 2)
                                                @include('admin.product.include.all')
                                            @endif
                                        @endforeach
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="top-profile" role="tabpanel"
                                    aria-labelledby="profile-top-tab">
                                    <div class="row">
                                        @foreach ($products as $product)
                                            @if (in_array($product->category_id, $cat) == 1 && $product->status == 3)
                                                @include('admin.product.include.doing')
                                            @endif
                                        @endforeach
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="top-contact" role="tabpanel"
                                    aria-labelledby="contact-top-tab">
                                    <div class="row">
                                        @foreach ($products as $product)
                                            @if (in_array($product->category_id, $cat) == 1 && $product->status >= 4)
                                                @include('admin.product.include.done')
                                            @endif
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        @elseif(Auth::user()->roles_name[0] == 'advanced_fixed')
                            <div class="tab-content" id="top-tabContent">
                                <div class="tab-pane fade show active" id="top-home" role="tabpanel"
                                    aria-labelledby="top-home-tab">
                                    <div class="row">
                                        @foreach ($products as $product)
                                            @if (in_array($product->category_id, $cat) == 1 && $product->status == 4)
                                                @include('admin.product.include.all')
                                            @endif
                                        @endforeach
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="top-profile" role="tabpanel"
                                    aria-labelledby="profile-top-tab">
                                    <div class="row">
                                        @foreach ($products as $product)
                                            @if (in_array($product->category_id, $cat) == 1 && $product->status == 5)
                                                @include('admin.product.include.doing')
                                            @endif
                                        @endforeach
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="top-contact" role="tabpanel"
                                    aria-labelledby="contact-top-tab">
                                    <div class="row">
                                        @foreach ($products as $product)
                                            @if (in_array($product->category_id, $cat) == 1 && $product->status >= 6)
                                                @include('admin.product.include.done')
                                            @endif
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        @elseif(Auth::user()->roles_name[0] == 'استقبال')
                            <div class="tab-content" id="top-tabContent">
                                <div class="tab-pane fade show active" id="top-home" role="tabpanel"
                                    aria-labelledby="top-home-tab">
                                    <div class="row">
                                        @foreach ($products as $product)
                                            @if (in_array($product->category_id, $cat) == 1 && $product->status == 0)
                                                @include('admin.product.include.all')
                                            @endif
                                        @endforeach
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="top-profile" role="tabpanel"
                                    aria-labelledby="profile-top-tab">
                                    <div class="row">
                                        @foreach ($products as $product)
                                            @if (in_array($product->category_id, $cat) == 1 && $product->status > 0)
                                                @include('admin.product.include.doing')
                                            @endif
                                        @endforeach
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="top-contact" role="tabpanel"
                                    aria-labelledby="contact-top-tab">
                                    <div class="row">
                                        @foreach ($products as $product)
                                            @if (in_array($product->category_id, $cat) == 1 && $product->status >= 6)
                                                @include('admin.product.include.done')
                                            @endif
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        @else
                            <div class="tab-content" id="top-tabContent">
                                <div class="tab-pane fade show active" id="top-home" role="tabpanel"
                                    aria-labelledby="top-home-tab">
                                    <div class="row">
                                        @foreach ($products as $product)
                                            @if (in_array($product->category_id, $cat) == 1)
                                                @include('admin.product.include.all')
                                            @endif
                                        @endforeach
                                    </div>
                                </div>

                                <div class="tab-pane fade" id="top-profile" role="tabpanel"
                                    aria-labelledby="profile-top-tab">
                                    <div class="row">
                                        @foreach ($products as $product)
                                            @if (in_array($product->category_id, $cat) == 1)
                                                @include('admin.product.include.doing')
                                            @endif
                                        @endforeach
                                    </div>
                                </div>

                                <div class="tab-pane fade" id="top-contact" role="tabpanel"
                                    aria-labelledby="contact-top-tab">
                                    <div class="row">
                                        @foreach ($products as $product)
                                            @if (in_array($product->category_id, $cat) == 1)
                                                @include('admin.product.include.done')
                                            @endif
                                        @endforeach
                                    </div>
                                </div>

                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
