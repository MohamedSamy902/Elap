@extends('admin.layout.master')

@section('content')
    @include('admin.alert.notfications')
    <div class="container-fluid">
        <div class="page-header">
            <div class="row">
                <div class="col-sm-6">
                    <h3>تعديل دور الموظف</h3>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="{{ url('/admin') }}">الرئيسية</a>
                        </li>
                        <li class="breadcrumb-item">
                            <a href="{{ route('roles.index') }}">
                                دور الموظف
                            </a>
                        </li>
                        <li class="breadcrumb-item active">تعديل دور الموظف</li>
                    </ol>
                </div>

            </div>
        </div>
    </div>
    <div class="container-fluid">
        @include('admin.alert.notfications')
        <form action="{{ route('roles.update', $role->id) }}" method="POST">
            @csrf
            @method('patch')
            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="form theme-form">
                                <div class="row">
                                    <div class="col">
                                        <div class="mb-3">
                                            <div class="row">
                                                <div class="col-12">
                                                    <label>دور الموظف</label>
                                                    <input class="form-control" type="text" name="name"
                                                        value="{{ $role->name }}">
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <h4>صلاحيات الموظف</h4>
                                    <div class="col-md-12">
                                        <div class="card">
                                            <div class="card-body animate-chk">
                                                <div class="row">
                                                    @foreach ($permission as $value)
                                                        <div class="col-3" style="margin-bottom: 20px">
                                                            <label for="chk-ani{{ $value->id }}">
                                                                <input class="checkbox_animated" id="chk-ani2"
                                                                    type="checkbox" name="permission[]"
                                                                    value="{{ $value->id }}"
                                                                    {{ in_array($value->id, $rolePermissions) ? 'checked' : '' }} />
                                                                {{ $value->name }}
                                                            </label>
                                                        </div>
                                                    @endforeach

                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <hr>

                                <div class="row">
                                    <div class="col">
                                        <button class="btn btn-secondary me-3">تحديث</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection
