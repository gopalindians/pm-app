@extends('layouts.app')


@if(0!=count($projects))
    @section('title',  '('.count($projects).') Your Project')
@else
    @section('title',  'Your Project')
@endif

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">


                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-danger">
                            {{ session('status') }}
                        </div>
                    @endif



                    @if(count($projects)==0)

                        <div class="alert alert-danger">
                            You don't have any projects yet
                            create new <a href="/createProject">Project</a>
                        </div>
                    @else
                        <div class="panel panel-default">
                            <div class="panel-heading">Total Projects - {{count($projects)}}</div>
                            <div class="panel-body">
                                <div class="row">
                                    @foreach($projects as $project)
                                        <a href="/project/{{$project->project_id}}">

                                            <div class="col-sm-6 col-md-4">
                                                <div class="thumbnail">
                                                    <div class="caption">
                                                        <h5>{{$project->project_name}}</h5>
                                                        <h5>{{$project->project_description}}</h5>
                                                    </div>

                                                    <div class="footer">
                                                        <h6>Created on: {{$project->project_created_at}}</h6>
                                                        <h6>Updated on: {{$project->project_updated_at}}</h6>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>

                                    @endforeach
                                </div>
                            </div>
                        </div>
                </div>


                @endif

            </div>
        </div>
    </div>
    </div>
@endsection
