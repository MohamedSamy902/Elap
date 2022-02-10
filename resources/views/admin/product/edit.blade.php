@extends('admin.layout.master')
@section('css')
<link rel="stylesheet" type="text/css" href="{{ asset('admin') }}/assets/css/dropzone.css">
@endsection
@section('content')
    @include('admin.alert.notfications')
    <!-- Container-fluid starts-->
    <div class="container-fluid">
        <form action="{{ route('product.update', $product->id) }}" method="POST">
            @csrf
            @method('patch')
            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="form theme-form">
                                <h4 style="display: flex;justify-content: center;padding: 10px;margin-bottom: 50px;box-shadow: 0px 5px 30px -21px;">بيانات العميل</h4>
                                <div class="row">
                                    <div class="col">
                                        <div class="mb-3">
                                            <div class="row">
                                                <div class="col-12">
                                                    <label>رقم الهاتف</label>
                                                    <input class="form-control" type="text" name="phone" id="phone" value="{{ $product->user->phone }}">
                                                </div>
                                                {{-- <div class="col-2" style="cursor: pointer">
                                                    <label>بحث</label><br>
                                                    <i id="searchphone" class="icofont icofont-job-search icofont-2x"></i>
                                                </div> --}}
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="mb-3">
                                            <label>اسم العميل</label>
                                            <input id="coustmerName" class="form-control" type="text"  name="name" value="{{ $product->user->name }}">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="mb-3">
                                            <label>البريد الالكتروني</label>
                                            <input name="email" id="emailCoustmer" class="form-control" type="text" value="{{ $product->user->email }}">
                                            <input name="user_id" id="user_id"  type="hidden" value="{{ $product->user->id }}">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="mb-3">
                                            <div id="insertuser" class="btn btn-primary" type="submit">تحديث</div>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <h4 style="display: flex;justify-content: center;padding: 10px;margin-bottom: 50px;box-shadow: 0px 5px 30px -21px;margin-top: 60px;">بيانات منتج</h4>
                                <div class="row">
                                    <div class="col-sm-4">
                                        <div class="mb-3">
                                            <label>اسم المنتج</label>
                                            <input name="name_product" class="datepicker-here form-control" type="text" data-language="en" value="{{ $product->name_product }}">
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="mb-3">
                                            <label>القسم</label>
                                            <select class="form-select" name="category_id">
                                                @foreach($categories as $category)
                                                    <option {{ $category->id == $product->category_id ? "selected" : "" }} value="{{ $category->id }}"  >{{ $category->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="mb-3">
                                            <label>العطل</label>
                                            <input name="damage" class="datepicker-here form-control" type="text" data-language="en" value="{{ $product->damage }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-4">
                                        <div class="mb-3">
                                            <label>العدد</label>
                                            <input name="count" class="datepicker-here form-control" type="text" data-language="en" value="{{ $product->count }}">
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="mb-3">
                                            <label>المشتملات</label>
                                            <input name="product_inclusions" class="datepicker-here form-control" type="text" data-language="en" value="{{ $product->product_inclusions }}">
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="mb-3">
                                            <label>السريال</label>
                                            <input name="serial_number" class="datepicker-here form-control" type="text" data-language="en" value="{{ $product->serial_number }}" disabled>
                                        </div>
                                    </div>
                                </div>
                                {{-- <div class="row">
                                    <div class="col">
                                        <div class="mb-3">
                                            <label>تعليق</label>
                                            <textarea class="form-control" id="exampleFormControlTextarea4"
                                                rows="3" name="comment"></textarea>
                                        </div>
                                    </div>
                                </div> --}}
                                <div class="row">
                                    <div class="col">
                                        <button class="btn btn-secondary me-3">حفظ</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
    {{-- ntainer-fluid Ends--> --}}
@endsection


@section('js')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js">
    </script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')
            }
        });
        $('#searchphone').click(function() {
            var phone = $('#phone').val();
            if (phone == '') {} else {
                $.ajax({
                    type: 'POST',
                    url: '/testajax/' + phone + '/',
                    data: {
                        "_token": "{{ csrf_token() }}",
                        phone: phone,
                    },
                    success: function(data) {
                        $('#coustmerName').val(data.name);
                        $('#emailCoustmer').val(data.email);
                        $('#user_id').val(data.id);
                        if (data.name && data.email && data.id) {
                            Swal.fire({
                            position: 'top-start',
                            icon: 'success',
                            title: "تم العثور علي النتائج",
                            timer: 2000
                        })
                        }else{
                            Swal.fire({
                                position: 'top-start',
                                icon: 'error',
                                title: "هذا الرقم غير موجود من قبل",
                                showConfirmButton: false,
                                timer: 2000
                            })
                        }

                    },

                });
            }
        });


    </script>
    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')
            }
        });

        // Insert User
        $('#insertuser').click(function() {
            let phone   = $('#phone').val();
            let name    = $('#coustmerName').val();
            let email   = $('#emailCoustmer').val();
            let id      = $('#user_id').val();
            var url = "{{URL('admin/updateuser/'.$product->user->id )}}";
            $.ajax({
                type: 'patch',
                url: url,
                data: {
                    _token:'{{ csrf_token() }}',
                    phone: phone,
                    name:name,
                    email:email,
                },

                success: function(data) {
                    // $('#user_id').val(data);
                    Swal.fire({
                        position: 'top-start',
                        icon: 'success',
                        title: "تمت اضافه العميل بنجاح",
                        showConfirmButton: false,
                        timer: 2000
                    })
                },
                error: function(data){
                    Swal.fire({
                        position: 'top-start',
                        icon: 'error',
                        title: "هذا العميل موجود بالفعل",
                        showConfirmButton: false,
                        timer: 2000
                    })
                }
            });

        });

    </script>
@endsection
