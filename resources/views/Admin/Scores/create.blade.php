@extends('layouts.admin_master')
@section('title')Create Score @endsection
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
            <div class="container-fluid">
                @include('admin.includes.flash_message')
                <!-- Page Heading -->
                <h1 class="h3 mb-4 text-gray-800">Create Score</h1>
                <div class="card-body">
                    <div class="row justify-content-center">
                        <div class="col-md-12">
                            <form action="{{ route('admin.scores.store') }}" method="post"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label>Match Name</label><br>
                                    <select class="form-select">
                                        <option value="{{ $matches->id }}">{{$matches->description}}</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Batting Team Name</label><br>
                                    <select class="form-select">
                                        <option value="{{ $matches->team_1_object->id }}">
                                            {{$matches->team_1_object->name}}
                                        </option>
                                        <option value="{{ $matches->team_2_object->id }}">
                                            {{$matches->team_2_object->name}}
                                        </option>
                                    </select>
                                </div>
                                <!-- <div class="form-group">
                                    <label for="exampleInputEmail1">strike_player_id</label>
                                    <input name="strike_player_id" type="text" class="form-control"
                                        value="{{ old('strike_player_id') }}">
                                </div> -->
                                <div class="form-group">
                                    <label>Striker Player Name</label><br>
                                    <select class="form-select">
                                        @foreach($players as $player)
                                        <option value="{{ $player->id }}">{{ $player->name }}
                                        </option>
                                        @endforeach
                                    </select>
                                </div>

                                <!-- <div class="form-group">
                                    <label for="exampleInputEmail1">non_strike_player_id</label>
                                    <input name="non_strike_player_id" type="text" class="form-control"
                                        value="{{ old('non_strike_player_id') }}">
                                </div> -->
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Over</label>
                                    <input name="wide" type="text" class="form-control" value="{{ old('wide') }}">
                                </div>

                                <div class="form-group">
                                    <label>Non Striker Player Name</label><br>
                                    <select class="form-select">
                                        @foreach($players as $player)
                                        <option value="{{ $player->id }}">{{ $player->name }}
                                        </option>
                                        @endforeach
                                    </select>
                                </div>
                                <!-- <div class="form-group">
                                    <label for="exampleInputEmail1">bowler_id</label>
                                    <input name="bowler_id" type="text" class="form-control"
                                        value="{{ old('bowler_id') }}">
                                </div> -->
                                <div class="form-group">
                                    <label>Bowler Name</label><br>
                                    <select class="form-select">
                                        @foreach($players as $player)
                                        <option value="{{ $player->id }}">{{ $player->name }}
                                        </option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Out Player Name</label><br>
                                    <select class="form-select">
                                        @foreach($players as $player)
                                        <option value="{{ $player->id }}">{{ $player->name }}
                                        </option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Wicket taker Name</label><br>
                                    <select class="form-select">
                                        @foreach($players as $player)
                                        <option value="{{ $player->id }}">{{ $player->name }}
                                        </option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">bowling_speed</label>
                                    <input name="bowling_speed" type="text" class="form-control"
                                        value="{{ old('bowling_speed') }}">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">noball</label>
                                    <input name="noball" type="text" class="form-control" value="{{ old('noball') }}">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">wide</label>
                                    <input name="wide" type="text" class="form-control" value="{{ old('wide') }}">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">legby</label>
                                    <input name="legby" type="text" class="form-control" value="{{ old('legby') }}">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">current_score</label>
                                    <input name="current_score" type="text" class="form-control"
                                        value="{{ old('current_score') }}">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">user_id</label>
                                    <input name="user_id" type="text" class="form-control" value="{{ old('user_id') }}">
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