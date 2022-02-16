@extends('admin.layout.master')

@section('content')
    <!-- Container-fluid starts-->
    @include('admin.alert.notfications')

        <!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="page-header">
            <div class="row">
                <div class="col-sm-6">
                    <h3>الموظفين</h3>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="index.html">الرئيسية</a>
                        </li>
                        <li class="breadcrumb-item active">الموظفين</li>
                    </ol>
                </div>
                <div class="col-sm-6">
                    <!-- Bookmark Start-->
                    <div class="bookmark">
                        <ul>
                            <li>
                                <a href="{{ route('user.create') }}" >
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
                                        <th>الموبايل</th>
                                        <th>الوظيفه</th>
                                        <th>القسم</th>
                                        <th>التحكم</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    @foreach ($users as $user)
                                        <tr>
                                            <td>{{ $i++ }}</td>
                                            <td>{{ $user->name }}</td>
                                            <td>{{ $user->phone }}</td>
                                            <td>{{ $user->roles_name[0] }}</td>
                                            <td>
                                                @foreach($user->permission_cat as $cat)
                                                    {{ $cat->category->name }}<br>
                                                @endforeach
                                            </td>
                                            <td>
                                                <a href="{{ route('user.edit', $user->id) }}"><i
                                                        class="icofont icofont-ui-edit"></i></a>
                                               {!! Form::open(['method' => 'DELETE', 'route' => ['user.destroy', $user->id], 'style' => 'display:inline']) !!}
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
