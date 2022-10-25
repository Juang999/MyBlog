@extends('layouts.dashboard_app')

@section('title', 'My Portofolio')

@section('feature', 'My Portofolio')

@section('content')
<div class="container-fluid ">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">All Portofolio</h3>

                    <div class="card-tools d-flex flex-row align-items-center justify-content-between bg-primary">
                        {{-- <div class="input-group input-group-sm">
                            <form action="#" method="get" class="d-flex align-items-center">
                                <input type="text" name="table_search" class="form-control float-right"
                                placeholder="Search">

                                <div class="input-group-append">
                                    <button type="submit" class="btn btn-default">
                                        <i class="fas fa-search"></i>
                                    </button>
                                </div>
                            </form>
                        </div> --}}
                        @include('admin.portofolio.parts.modal')
                    </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body table-responsive p-0">
                    <table class="table table-hover text-nowrap">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Title</th>
                                <th>BuildWith</th>
                                <th>Description</th>
                                <th>URL Demo</th>
                                <th>URL Repo</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($portofolio as $data)
                            <tr>
                                <td>{{$loop->iteration()}}</td>
                                <td>{{$data->title}}</td>
                                <td>{{$data->build_with}}</td>
                                <td>{{$data->demo_url}}</td>
                                <td>{{$data->project_url}}</td>
                                <td>{{$data->is_active ? '<i class="fa-solid fa-check"></i>' : '<i class="fa-regular fa-xmark"></i>'}}</td>
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
