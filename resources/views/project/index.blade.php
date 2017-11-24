@extends('layouts.app')


@if(0!=count($projects))
    @section('title',  '('.count($projects).') Your Project')
@else
    @section('title',  'Your Project')
@endif

@section('content')

    <project-component></project-component>

@endsection
