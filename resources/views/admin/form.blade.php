@extends('admin.layouts.app')

@section('title', isset($role) ? 'Edit' : 'Add')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Roles</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item"><a href="#">Role</a></li>
                            <li class="breadcrumb-item active">{{ isset($role) ? 'Edit' : 'Add' }}</li>

                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <!-- Small boxes (Stat box) -->
                <div class="row">
                    <div class="col-md-6 offset-md-3">
                        <div class="card card-primary">
                            <form
                                action="{{ isset($role) ? route('role.update', $role->id) : route('role.store') }}"
                                method="POST" id="role-form" enctype="multipart/form-data">
                                @csrf
                                @isset($role)
                                    <input type="hidden" name="_method" value="PUT" />
                                @endisset
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="name">Name</label><span class="text-danger">*</span>
                                        <input type="text" class="form-control" name="name" id="name"
                                            placeholder="Enter name" value="{{ old('name', @$role->name) }}">
                                        @if ($errors->has('name'))
                                            <div class="error text-danger">{{ $errors->first('name') }}</div>
                                        @endif
                                    </div>
                                </div>
                                <!-- /.card-body -->

                                <div class="card-footer justify-content-between">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                    <button type="submit"
                                        class="btn btn-primary">{{ isset($role) ? 'Update' : 'Create' }}</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
        </section>
        <!-- /.content -->
    </div>
@endsection
