@extends('layouts.dashboard_app')

@section('title', 'My Portofolio')

@section('feature', 'My Portofolio')

@section('alert')
    @if (session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Success!</strong> {{ session('success') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @elseif (session('failed'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Failed!</strong> {{ session('failed') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif
@endsection

@section('content')
<div class="container-fluid ">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    {{-- <h3 class="card-title">All Portofolio</h3> --}}

                    <div class="card-tools d-flex flex-row align-items-center justify-content-between bg-primary">
                        @include('admin.portofolio.parts.modal-create')
                    </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body table-responsive p-0">
                    <table class="table table-hover text-nowrap">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Title</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($portofolio as $data)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$data->title}}</td>
                                <td><i class="{{($data->is_active == 1) ? 'fa-solid fa-check' : 'fa-regular fa-xmark'}}"></i></td>
                                <td>
                                    @include('admin.portofolio.parts.modal-detail')
                                    @include('admin.portofolio.parts.modal-edit')
                                    @include('admin.portofolio.parts.modal-delete')
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    {{-- <h3 class="card-title">All Portofolio</h3> --}}

                    <div class="card-tools d-flex flex-row align-items-center justify-content-between bg-primary">
                        @include('admin.portofolio.parts.modal-create')
                    </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body table-responsive p-0">
                    <table class="table table-hover text-nowrap">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Title</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($portofolio as $data)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$data->title}}</td>
                                <td><i class="{{($data->is_active == 1) ? 'fa-solid fa-check' : 'fa-regular fa-xmark'}}"></i></td>
                                <td>
                                    @include('admin.portofolio.parts.modal-detail')
                                    @include('admin.portofolio.parts.modal-edit')
                                    @include('admin.portofolio.parts.modal-delete')
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
    </div>
</div>
@endsection

@section('js')
    <script>
        $(document).ready(function () {
            $('.detail-portofolio').on('click', function () {
                    $.get("/admin-panel/portofolio/"+ $(this).data('id'), (data) => {
                        $('#title').text(data.title)
                        $('#buildWith').text(data.build_with)
                        $('#demoUrl').text(data.demo_url)
                        $('#projectUrl').text(data.project_url)
                        $('#status').text((data.is_active == 1) ? 'active' : 'inactive')
                        $('#description').text(data.description)
                    }
                );
            });
        });

        $('.delete-portofolio').on('click', function () {
            $('.form-delete').attr('action', '/admin-panel/portofolio/'+ $(this).data('id'));
        });

        $('.edit-portofolio').on('click', function () {
            // console.log('hello world')

            $.get("/admin-panel/portofolio/"+ $(this).data('id'), (data) => {
                    $('#form-edit').attr('action', '/admin-panel/portofolio'+$(this).data('id'));
                    $('#editTitle').attr('value', data.title)
                    $('#editBuildWith').attr('value', data.build_with)
                    $('#editDemoUrl').attr('value', data.demo_url)
                    $('#editProjectUrl').attr('value', data.project_url)
                    $('#editDescription').text(data.description)
                }
            );
        });
    </script>
@endsection
