@extends('admin.layouts.app')

@section('title', 'Role')

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
                            <li class="breadcrumb-item active">Roles</li>
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
                    <div class="col-md-12">
                        <a href="{{ route('role.create') }}" class="btn btn-primary float-right"><i
                                class="fa fa-plus"></i>&nbsp;Add</a>
                    </div>
                    <div class="col-md-12 mt-3">
                        <div class="card">
                            <div class="card-body pb-0">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th width="300px;">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if (!empty($data) && $data->count())
                                            @foreach ($data as $key => $value)
                                                <tr>
                                                    <td>{{ $value->name }}</td>
                                                    <td>
                                                        <div class="d-flex">
                                                            <a href="{{ route('role.edit', $value->id) }}"
                                                                class="btn btn-primary">Edit</a>&nbsp;&nbsp;
                                                            <form method="post" class="delete_form"
                                                                action="{{ route('role.destroy', $value->id) }}">
                                                                @method('delete')
                                                                @csrf
                                                                <button type="submit"
                                                                    class="btn btn-danger">Delete</button>
                                                            </form>
                                                        </div>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        @else
                                            <tr>
                                                <td colspan="10">There are no data.</td>
                                            </tr>
                                        @endif
                                    </tbody>
                                </table>
                                <div class="mt-3">{!! $data->links() !!}</div>

                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.row -->
                    </div><!-- /.container-fluid -->
                </div>
            </div>
        </section>
        <!-- /.content -->
    </div>
@endsection

@section('js')
    <script>
        $('.delete_form').submit(function(e) {
            e.preventDefault();
            Swal.fire({
                title: 'Are you sure you want to delete ?',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#50f8ac',
                cancelButtonColor: '#d33',
                focusCancel: true,
                confirmButtonText: 'Confirm',
                cancelButtonText: 'Cancel'
            }).then((result) => {

                if (result.isConfirmed) {
                    this.submit();
                }
            });
        });
    </script>
@endsection
