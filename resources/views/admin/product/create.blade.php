@extends('admin.layout.master')
@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('admin') }}/assets/css/dropzone.css">
@endsection
@section('content')
    @include('admin.alert.notfications')
    <!-- Container-fluid starts-->
    <div class="container-fluid">
        <form action="{{ route('product.store') }}" method="POST">
            @csrf
            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="form theme-form">
                                <h4
                                    style="display: flex;justify-content: center;padding: 10px;margin-bottom: 50px;box-shadow: 0px 5px 30px -21px;">
                                    بيانات العميل</h4>
                                <div class="row">
                                    <div class="col">
                                        <div class="mb-3">
                                            <div class="row">
                                                <div class="col-10">
                                                    <label>رقم الهاتف</label>
                                                    <input required class="form-control" type="text"
                                                        placeholder="رقم الهاتف *" name="phone" id="phone">
                                                </div>
                                                <div class="col-2" style="cursor: pointer">
                                                    <label>بحث</label><br>
                                                    <i id="searchphone" class="icofont icofont-job-search icofont-2x"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="mb-3">
                                            <label>اسم العميل</label>
                                            <input required id="coustmerName" class="form-control" type="text"
                                                placeholder="اسم العميل *" name="name">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="mb-3">
                                            <label>البريد الالكتروني</label>
                                            <input required name="email" id="emailCoustmer" class="form-control"
                                                type="text" placeholder="البريد الاليكتروني">
                                            <input required name="user_id" id="user_id" type="hidden">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="mb-3">
                                            <div id="insertuser" class="btn btn-primary" type="submit">اضافة</div>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <h4
                                    style="display: flex;justify-content: center;padding: 10px;margin-bottom: 50px;box-shadow: 0px 5px 30px -21px;margin-top: 60px;">
                                    بيانات منتج</h4>
                                <div class="row">
                                    <div class="col-sm-4">
                                        <div class="mb-3">
                                            <label>اسم المنتج</label>
                                            <input required name="name_product" class="datepicker-here form-control"
                                                type="text" data-language="en">
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="mb-3">
                                            <label>القسم</label>
                                            <select class="form-select" name="category_id">
                                                @foreach ($categories as $category)
                                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>

                                </div>
                                <div class="element row" id="div_1">

                                    <div class="col-sm-4">
                                        <div class="mb-4">
                                            <label>المشتملات</label>
                                            <input name="product_inclusions[]" class="datepicker-here form-control"
                                                type="text" data-language="en">
                                        </div>
                                    </div>

                                    <div class="col-sm-3">
                                        <div class="mb-3">
                                            <label>السريال</label>
                                            <input type="text" name="serial_number[]" class="datepicker-here form-control"
                                                id="txt_1" />&nbsp;

                                        </div>
                                    </div>

                                    <div class="col-sm-4">
                                        <div class="mb-4">
                                            <label>العطل</label>
                                            <input name="damage[]" class="datepicker-here form-control" type="text"
                                                data-language="en">
                                        </div>
                                    </div>

                                    <div class="col-sm-1">
                                        <div class="mb-1">
                                            <label></label>
                                            <span class="add btn btn-primary">اضافة</span>
                                        </div>
                                    </div>




                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="mb-3">
                                            <label>تعليق</label>
                                            <textarea class="form-control" id="exampleFormControlTextarea4" rows="3"
                                                name="comment"></textarea>
                                        </div>
                                    </div>
                                </div>
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
                    url: '/admin/testajax/' + phone,

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
                        } else {
                            console.log(data);
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
            let phone = $('#phone').val();
            let name = $('#coustmerName').val();
            let email = $('#emailCoustmer').val();
            $.ajax({
                type: 'POST',
                url: '/admin/insertuser',
                data: {
                    "_token": "{{ csrf_token() }}",
                    phone: phone,
                    name: name,
                    email: email,
                },

                success: function(data) {
                    $('#user_id').val(data);
                    Swal.fire({
                        position: 'top-start',
                        icon: 'success',
                        title: "تمت اضافه العميل بنجاح",
                        showConfirmButton: false,
                        timer: 2000
                    })
                },
                error: function(data) {
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
    <script>
        $(document).ready(function() {
            // Add new element
            $(".add").click(function() {
                // Finding total number of elements added
                var total_element = $(".element").length;

                // last <> with element class id
                var lastid = $(".element:last").attr("id");
                var split_id = lastid.split("_");
                var nextindex = Number(split_id[1]) + 1;

                // Adding new div container after last occurance of element class
                $(".element:last").after(

                    "<div class='element row' id='div_" + nextindex + "'></div>"
                );

                // Adding element to <div>
                $("#div_" + nextindex).append(
                    `
                    <div class="col-sm-4">
                        <div class="mb-4">
                            <label>المشتملات</label>
                            <input name="product_inclusions[]" class="datepicker-here form-control"
                                type="text" data-language="en">
                        </div>
                    </div>

                    <div class="col-sm-3">
                        <div class="mb-3">
                            <label>السريال</label>
                            <input type="text" name="serial_number[]" class="datepicker-here form-control"
                                id="txt_1" />&nbsp;

                        </div>
                    </div>

                    <div class="col-sm-3">
                        <div class="mb-3">
                            <label>العطل</label>
                            <input name="damage[]" class="datepicker-here form-control" type="text"
                                data-language="en">
                        </div>
                    </div>

                    <div class="col-sm-1">
                        <div class="mb-3">
                        <label></label>
                            <span id="remove_${nextindex}" class="remove btn btn-danger">-</span>
                        </div>
                    </div>`
                );
            });

            // Remove element
            $(".row").on("click", ".remove", function() {
                var id = this.id;
                var split_id = id.split("_");
                var deleteindex = split_id[1];
                // Remove <div> with id
                $("#div_" + deleteindex).remove();
            });
        });
    </script>
@endsection
