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


                    <form action="/team/add" method="post">
                        {{csrf_field()}}
                        <div class="form-group">
                            <label for="user_email">Email</label>
                            <input type="email" class="form-control" id="user_email" placeholder="Email">
                        </div>
                        <button type="submit" class="btn btn-default">Add</button>
                    </form>
                </div>


            </div>
        </div>
    </div>
    </div>
@endsection
