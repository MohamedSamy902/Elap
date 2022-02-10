@extends('admin.layout.master')

@section('content')
    <div class="container-fluid">
        @include('admin.alert.notfications')
        <form action="{{ route('roles.store') }}" method="POST">
            @csrf
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
                                                    <input class="form-control" type="text" name="name">
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
                                                                    value="{{ $value->id }}" />
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

@endsection
