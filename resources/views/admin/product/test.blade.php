@extends('admin.layout.master')

@section('content')
    <!-- Container-fluid starts-->
    @include('admin.alert.notfications')

    <div class="container-fluid">
        <a class="btn btn-primary"  href="{{ route('product.create') }}">اضافه قسم</a>
        <div class="row">

            <!-- no styling classes styles-->
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h5>الاقسام</h5>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="example-style-2">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>الاسم</th>
                                        <th>السريال</th>
                                        <th>العدد</th>
                                        <th>user</th>
                                        <th>الحاله</th>
                                        <th>المشتملات</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    @foreach ($products as $product)

                                        <tr>
                                            <td>{{ $product->id }}</td>
                                            <td>{{ $product->name_product }}</td>
                                            <td>{{ $product->serial_number }}</td>
                                            <td>1</td>
                                            <td>{{ $product->user->name }}</td>
                                            <td>{{ $product->product_inclusions }}</td>
                                            <td>
                                                <a href="{{ route('product.edit', $product->id) }}"><i
                                                        class="icofont icofont-ui-edit"></i></a>
                                                {{-- <a href="{{ route('product.delet', $product->id) }}"><i --}}
                                                        {{-- class="icofont icofont-ui-delete"></i></a> --}}
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- no styling classes styles Ends-->
        </div>
    </div>
    <!-- Container-fluid Ends-->
@endsection
