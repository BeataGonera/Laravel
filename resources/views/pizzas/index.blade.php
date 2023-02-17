@extends('layouts.app')

@section('content')
<div class='p-[100px]'>
    <!-- @for($i = 0; $i < count($pizzas); $i++)
        <p>Name: {{$pizzas[$i]['type']}}</p>
    @endfor -->
    @csrf
    <ul class="my-auto w-48 text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-lg dark:bg-gray-700 dark:border-gray-600 dark:text-white">
    @foreach($pizzas as $pizza)
        <li class="w-full px-4 py-2 border-b border-gray-200 rounded-t-lg dark:border-gray-600">{{$pizza->type}}</p>
    @endforeach
    </ul>

    <p>{{session('message')}}</p>


</div>
@endsection

