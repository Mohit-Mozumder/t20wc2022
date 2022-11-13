@extends('layouts.admin_master')
@section('title')Create Teams @endsection
@section('content')
<div id="wrapper">

    <!-- Sidebar -->
    @include('admin.includes.sidebar')
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

        <!-- Main Content -->
        <div id="content">

            <!-- Topbar -->
            @include('admin.includes.topbar')
            <!-- End of Topbar -->

            <!-- Begin Page Content -->
            <div class="container-fluid">

                <!-- Page Heading -->
                <h1 class="h3 mb-4 text-gray-800">Create Team</h1>
                <div class="card-body">
                <div class="row justify-content-center">
                    <div class="col-md-12">
                        <form action="{{ route('admin.teams.store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="exampleInputEmail1">Name</label>
                                <input name="name" type="text" class="form-control" value="{{ old('name') }}">
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-info float-right">Create</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- End of Main Content -->

        <!-- Footer -->
        @include('admin.includes.footer')
        <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

</div>
@endsection