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
                    @else

                        @if(isset($sender[0]->email) ||is_null($sender[0]->email))
                            <div class="panel panel-default">
                                <div class="panel-heading">Panel heading without title</div>
                                <div class="panel-body">
                                    <h3><span class="label label-default">{{$sender[0]->email}}</span> + <span
                                                class="label label-success">{{$receiverEmail}}</span></h3>
                                    <form action="{{\App\CH::getUrl('/team/join')}}" method="post">
                                        {{csrf_field()}}
                                        <input type="hidden" name="senderEmail" value="{{$sender[0]->email}}">
                                        <input type="hidden" name="senderId" value="{{$sender[0]->id}}">
                                        <input type="hidden" name="receiverEmail" value="{{$receiverEmail}}">
                                        <button class="btn btn-success" type="submit">Accept</button>
                                        <button class="btn btn-danger" type="submit">Cancel</button>
                                    </form>
                                </div>
                            </div>
                        @endif
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection
