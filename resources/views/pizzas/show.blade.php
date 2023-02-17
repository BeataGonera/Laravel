@extends('layouts.layout')

@section('content')
<div>
    <p class='text-xl'>{{ $pizza->type }}</p> 

    <form action='/pizzas/{{ $pizza->id }}' method='POST'>
        @csrf
        @method('DELETE')
        <button>Delete pizza</button>
    </form>
</div>
@endsection
