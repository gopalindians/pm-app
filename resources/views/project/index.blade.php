@extends('layouts.app')


@if(0!=count($projects))
    @section('title',  '('.count($projects).') Your Project')
@else
    @section('title',  'Your Project')
@endif

@section('content')
<section class="all_project">
        <div class="container">
              <div class="panel panel-default">
                <div class="panel-heading">Panel Heading</div>
                <div class="panel-body">Panel Content</div>
              </div>

                    @if (session('status'))
                        <div class="alert alert-danger">
                            {{ session('status') }}
                        </div>
                    @endif
                    @if(count($projects)==0)
                        <div class="col-md-3">
                            <div class="start_porject">
                                <a href="/createProject"><div class="plus_icon"><i class="fa fa-plus" aria-hidden="true"></i></div>
                                <p>Add new porject</p></a>
                            </div>
                        </div>
                  @else
                <div class="col-md-3">
                    <div class="start_porject">
                        <a href="/createProject"><div class="plus_icon"><i class="fa fa-plus" aria-hidden="true"></i></div>
                        <p>Add new porject</p></a>
                    </div>
                </div>
             <div class="row">
                  @foreach($projects as $project)
                <div class="col-md-3">
                    <div class="project_grid">
                        <h1><a href="/project/{{$project->project_id}}">{{$project->project_name}}</a></h1>
                        <p class="bill_team"><span>Description :</span> {{$project->project_description}}</p>
                        <div class="last_update">
                            <p>Last updated on : <span>{{$project->project_updated_at}}</span></p>
                        </div>
                    </div>
                </div>
              @endforeach                  
            </div>
            {{ $projects->links() }}
                    @endif
  </div>
    </section>
@endsection
