@extends('layouts.layout')

@section('content')
<div class='container mx-auto p-[100px]'>
    <p class='text-xl'>{{ $pizza->type }}</p> 

    <form action='/pizzas/{{ $pizza->id }}' method='POST'>
        @csrf
        @method('DELETE')
        <button class='bg-teal-500 hover:bg-teal-700 text-white font-bold py-2 px-4 rounded'>Delete pizza</button>
    </form>
</div>
@endsection
