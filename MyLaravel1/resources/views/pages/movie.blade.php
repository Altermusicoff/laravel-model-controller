@extends('layouts.main-layout')
@section('content')
<h1>dettagli Movie</h1>
    {{$movie -> title}}
    <br>
    {{$movie -> original_title}}
    <br>
    {{$movie -> nationality}}
    <br>
    {{$movie -> date}}
    <br>
    {{$movie -> vote}}                    
@endsection