@extends('layouts.app')

@section('title',  'hkj')
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

                    @if (session('error'))
                        <div class="alert alert-danger">
                            {{ session('error') }}
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
                        <div class="panel-heading">Panel heading without title</div>
                        <div class="panel-body">
                            <h3><span class="label label-default">{{$sender[0]->email}}</span> + <span
                                        class="label label-success">{{$receiverEmail}}</span></h3>
                            <button class="btn btn-primary" type="button">
                                Accept
                            </button>
                            <button class="btn btn-dan" type="button">
                                Cancel
                            </button>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>
    </div>
@endsection
