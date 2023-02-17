@extends('layouts.layout')

@section('content')
<div>
    <!-- @for($i = 0; $i < count($pizzas); $i++)
        <p>Name: {{$pizzas[$i]['type']}}</p>
    @endfor -->
    @csrf
    @foreach($pizzas as $pizza)
        <p class="text-xl">{{$pizza->type}}</p>
    @endforeach
        <p>{{session('message')}}</p>


</div>
@endsection

