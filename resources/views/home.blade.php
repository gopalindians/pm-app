@extends('layouts.app')

@section('content')
    <section class="all_project">
        <div class="container">

            @if (session('success'))
                <div class="alert alert-success  alert-dismissible" role="alert">
                    <button type="button" class="close"
                            data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    {{ session('success') }}
                </div>
            @endif
            @if (session('info'))
                <div class="alert alert-info  alert-dismissible" role="alert">
                    <button type="button" class="close"
                            data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    {{ session('info') }}
                </div>
            @endif


            <h2 class="grid_title">All Projects</h2>

            @if(count($projects)==0)
                <div class="col-md-3">
                    <div class="start_porject">
                        <a href="/createProject">
                            <div class="plus_icon"><i class="fa fa-plus" aria-hidden="true"></i></div>
                            <p>Add new porject</p></a>
                    </div>
                </div>
            @else
                <div class="col-md-3">
                    <div class="start_porject">
                        <a href="/createProject">
                            <div class="plus_icon"><i class="fa fa-plus" aria-hidden="true"></i></div>
                            <p>Add new porject</p></a>
                    </div>
                </div>
                <div class="row">
                    @foreach($projects as $project)
                        <div class="col-md-3">
                            <div class="project_grid">
                                <h1><a href="/project/{{$project->project_id}}/{{$project->project_name}}">{{$project->project_name}}</a></h1>
                                <p class="bill_team"><span>Description :</span> {{$project->project_description}}</p>
                                <div class="last_update">

                                    <p>Last updated on : <span>{{$project->project_updated_at}}</span></p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            @endif
            {{ $projects->links() }}
        </div>
    </section>
@endsection
