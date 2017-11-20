@extends('layouts.app')

@section('title',  'Create new Project')

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



                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif


                        <div class="panel panel-default">
                        <div class="panel-heading">Create your awesome new project below</div>
                        <div class="panel-body">
                            <form action="/createProject" method="post">

                                {{csrf_field()}}
                                <div class="form-group">
                                    <label for="project_name">Project name</label>
                                    <input type="text" class="form-control" name="project_name" id="project_name"
                                    value={{old('project_name')}}>
                                </div>


                                <div class="form-group">
                                    <label for="project_description">Project description</label>
                                    <input type="text" class="form-control" name="project_description"
                                           id="project_description"
                                           value={{old('project_description')}}>
                                </div>

                                <button type="submit" class="btn btn-primary"> Create</button>


                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
