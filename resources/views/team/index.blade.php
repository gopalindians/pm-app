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
                            <p>Add new tem member</p></a>
                    </div>
                </div>
                @foreach($teams as $team)
                    <div class="col-md-2">
                        <div class="team_member">
                            <a href="{{url('people/'.$team->member_id)}}">
                                @if($team->member_profile_image==null)
                                    <img src="{{asset('images/employee_img.jpg')}}" class="img-thumbnail">
                                @else
                                    <img src="{{asset('storage/'.$team->member_profile_image)}}" class="img-thumbnail">
                                @endif()
                                <div class="emp_name_pos">
                                    <p>{{$team->member_name}}
                                        <small style="font-size: 12px">({{$team->member_position}})</small>
                                    </p>
                                    <span></span>
                                </div>
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="row space-top">

            </div>
            {{--   {{ $teams->links() }}--}}
        </div>

    </section>

@endsection
