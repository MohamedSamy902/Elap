@extends('admin.layout.master')

@section('content')
@include('admin.alert.notfications')

    <!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="page-header">
            <div class="row">
                <div class="col-sm-6">
                    <h3>صلاحيات الموظفين</h3>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="index.html">الرئيسية</a>
                        </li>
                        <li class="breadcrumb-item active">صلاحيات الموظفين</li>
                    </ol>
                </div>
                <div class="col-sm-6">
                    <!-- Bookmark Start-->
                    <div class="bookmark">
                        <ul>
                            <li>
                                <a href="{{ route('roles.create') }}" >
                                    <i data-feather="plus"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <!-- Bookmark Ends-->
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row">
            <!-- no styling classes styles-->
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="example-style-2">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>الاسم</th>
                                        <th>التحكم</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    @foreach ($roles as $key => $role)

                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            <td>{{ $role->name }}</td>
                                            <td>
                                                <a href="{{ route('roles.edit', $role->id) }}""><i
                                                        class="icofont icofont-ui-edit"></i></a>
                                                <a href="{{ route('roles.edit', $role->id) }}""><i
                                                        class="icofont icofont-ui-delete"></i></a>
                                                {!! Form::open(['method' => 'DELETE', 'route' => ['roles.destroy', $role->id], 'style' => 'display:inline']) !!}
                                                    {!! Form::submit('Delete', ['class' => 'icofont icofont-ui-delete']) !!}
                                                {!! Form::close() !!}
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
