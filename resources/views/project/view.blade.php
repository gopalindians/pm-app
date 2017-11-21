@extends('layouts.app')

@section('title',  'Project xyz')

@section('content')
    {{json_encode($project)}}
@endsection