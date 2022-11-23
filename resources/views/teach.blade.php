@extends('layouts.teaching_layouts')

@section('body')

    <div class="my_div">
        <div>
            <h1> TEACHING </h1> 
        </div>
        <br>
        <div>
            <h2> {{ $time->isoFormat('dddd D') }} </h2>
        </div>
    <div>

@endsection