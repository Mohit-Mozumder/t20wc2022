@extends('layouts.master')
@section('title')News @endsection
@section('content')
<div id="wrapper">

    <h1 class="h3 mb-4 text-gray-800">All News</h1>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Photo</th>
                <th>Title</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($news as $news)
            <tr>
                <td>{{ $news->photo }}</td>
                <td>{{ $news->title }}</td>
                <td> <a href="{{route('admin.news.show', $news->id)}}">More info</a> </td>
                <td> <a href="{{route('admin.news.edit', $news->id)}}">Edit</a> </td>
                <td> @include('admin.includes._confirm_delete',[
                    'id' => $news->id,
                    'url' => route('admin.news.destroy', $news->id),
                    'message' => 'Are you sure want to delete this news?',
                    ]) </td>
            </tr>
            @endforeach
        </tbody>
    </table>
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