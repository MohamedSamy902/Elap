<div class="col-xxl-12 col-lg-12">
    <div class="project-box"><span class="badge badge-primary">Doing</span>
        <div class="row">
            <div class="col-xxl-4 col-lg-4">
                <h6><a href="{{ route('product.show', $product->id) }}">{{ $product->name_product }}
                    </a></h6>

                <div class="media"><img class="img-20 me-2 rounded-circle" src="../assets/images/user/3.jpg"
                        alt="" data-original-title="" title="">
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
                                <a class="btn btn-primary " href="{{ route('product.edit', $product->id) }}">تعديل</a>
                            </div>
                        @endif
                    @endcan

                    @can('حذف منتج')
                        @if ($product->status == 0)
                            <div class="col-xxl-6 col-lg-6 col-sm-6 text-center mt-5">
                                <a class="btn btn-primary " href="#">حذف</a>
                            </div>
                        @endif
                    @endcan

                    @can('تسليم المنتج')
                        <div class="col-xxl-6 col-lg-6 col-sm-6 text-center mt-5">
                            <a class="btn btn-primary "
                                href="{{ route('product.deliverytest', $product->id) }}">انتهاء</a>
                        </div>
                    @endcan


                    @can('تسليم العميل')
                        @if ($product->status == 7 || $product->status == 8)
                            <div class="col-xxl-6 col-lg-6 col-sm-6 text-center mt-5">
                                <a class="btn btn-primary " href="{{ route('product.compleat', $product->id) }}">تسليم
                                    العميل</a>
                            </div>
                        @endif

                    @endcan

                    @can('رفض منتج')

                        <div class="col-xxl-6 col-lg-6 text-center mt-5">
                            <a class="btn btn-primary " href="{{ route('product.filedfixed', $product->id) }}">مرفوض</a>
                        </div>
                    @endcan

                    @can('تم الاصلاح')

                        <div class="col-xxl-6 col-lg-6 text-center mt-5">
                            <a class="btn btn-primary " href="{{ route('product.donefixed', $product->id) }}">تم الاصلاح </a>
                        </div>
                    @endcan

                    @can('اضافه ملاحظه للمنتج')

                        <div class="col-xxl-6 col-lg-6 text-center mt-5">
                            <a class="btn btn-primary " href="#">اضافة تعليق</a>
                        </div>
                    @endcan
                </div>
            </div>

        </div>


    </div>
</div>
