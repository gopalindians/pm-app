@extends('layouts.app')

@section('title',  '('.count($teams).') Your Team')
@section('content')

    <section class="lead_team">
        <div class="container">
            <h2 class="team_title">Our Active Team</h2>
            <div class="row">
                <div class="col-md-2">
                    <div class="add_people">
                        <a href="{{url('/team/add')}}">
                            <div class="plus_icon"><i class="fa fa-plus" aria-hidden="true"></i></div>
                            <p>Add new project</p></a>
                    </div>
                </div>
                @foreach($teams as $team)
                    <div class="col-md-2">
                        <div class="team_member">
                            <a href="{{url('people/'.$team->member_id)}}">
                                <img src="{{asset('images/employee_img.jpg')}}" class="img-thumbnail">
                                <div class="emp_name_pos">
                                    <p>{{$team->member_name}}</p>
                                    <span>{{$team->member_position}}</span>
                                </div>
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="row space-top">

            </div>
            {{ $teams->links() }}
        </div>

    </section>

@endsection
