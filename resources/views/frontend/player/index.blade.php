@extends('layouts.master')
@section('title')Players @endsection
@section('content')
<div id="wrapper">


    <h1 class="h3 mb-4 text-gray-800">List of Players</h1>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Player Name</th>
                <th>Country</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($players as $player)
            <tr>
                <td>{{ $player->name }}</td>
                <td>{{ $player->team_id_object->name }}</td>
                <td> <a href="{{route('frontend.player.show', $player->id)}}">More info</a> </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>



</div>



</div>


</div>
@endsection