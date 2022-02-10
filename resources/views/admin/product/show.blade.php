@extends('admin.layout.master')

@section('content')
    <div class="row">
        <div class="col-sm-12">
            <div class="blog-single">
                <div class="row project-cards">
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="tab-content" id="top-tabContent">
                                    <div class="tab-pane fade show active" id="top-home" role="tabpanel"
                                        aria-labelledby="top-home-tab">
                                        <div class="row">
                                            <div class="col-xxl-12 col-lg-12">
                                                <div class="project-box"><span class="badge badge-primary">Doing</span>
                                                    <div class="row">
                                                        <div class="col-xxl-4 col-lg-4">
                                                            <h6><a href="{{ route('product.show', $product->id) }}">{{ $product->name_product }} </a></h6>

                                                            <div class="media"><img
                                                                    class="img-20 me-2 rounded-circle"
                                                                    src="../assets/images/user/3.jpg" alt=""
                                                                    data-original-title="" title="">
                                                                <div class="media-body">
                                                                    <p>{{ $product->user->name }}</p>
                                                                </div>
                                                            </div>
                                                            {{-- <p>{{ $product->user->name }}</p> --}}
                                                            <div class="row details">
                                                                <div class="col-6"><span>المشتملات </span></div>
                                                                <div class="col-6 font-primary">{{ $product->product_inclusions }}
                                                                </div>
                                                                <div class="col-6"> <span>العطل</span></div>
                                                                <div class="col-6 font-primary">{{ $product->damage }}</div>
                                                                <div class="col-6"> <span>التعليقات</span></div>
                                                                <div class="col-6 font-primary">{{ COUNT($product->comment) }}</div>
                                                            </div>

                                                        </div>
                                                        <div class="col-xxl-5 col-lg-5 text-center mt-5">
                                                            <div class="row details">
                                                                @foreach ($product->history_products as $history)
                                                                    <div class="col-4">
                                                                        <span>{{ $history->user->roles_name[0] }} </span>
                                                                    </div>
                                                                    <div class="col-4 font-primary">{{ $history->created_at }}
                                                                    </div>
                                                                    <div class="col-4 font-primary">{{ $history->end_at }}</div>
                                                                    <hr>
                                                                @endforeach

                                                            </div>
                                                        </div>
                                                        <div class="col-xxl-3 col-lg-3 text-end mt-5">
                                                            <a class="btn btn-primary " href="#">Add Comment </a>
                                                        </div>
                                                    </div>


                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card comment-box">
                    <div class="card-body">
                        <h4>الملاحظات</h4>
                        <ul>
                            @foreach ($product->comment as $comment)
                                <li>
                                    <div class="media">

                                        <div class="media-body">
                                            <div class="row">
                                                <div class="col-md-4"><a href="user-profile.html">
                                                        {{-- <h6 class="mt-0 text-start">{{ $comment->user["name"] }}<span> ( --}}
                                                                {{-- {{ $comment->user["roles_name"] }} )</span></h6> --}}
                                                    </a></div>
                                            </div>
                                            <p>{{ $comment->comment }}</p>
                                        </div>
                                    </div>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
