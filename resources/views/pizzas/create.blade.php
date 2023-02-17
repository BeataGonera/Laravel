@extends('layouts.app')

@section('content')

<form class="w-25 p-3" action='/pizzas' method='POST'>
    @csrf
  <div class="col">

    <label for='type' class="block text-gray-700 text-sm font-bold mb-2">Type of pizza:</label>
    <input class="form-control" type="text" aria-label="pizza type" name='type'>

    <label for='base' class="block text-gray-700 text-sm font-bold mb-2">Base:</label>
    <input class="form-control" type="text" aria-label="base" name='base'>

    <label for='name' class="block text-gray-700 text-sm font-bold mb-2">Order for:</label>
    <input class="form-control" type="text" aria-label="name" name='name'>

    <label for='price' class="block text-gray-700 text-sm font-bold mb-2">Price:</label>
    <input class="form-control mb-3" type="text" aria-label="price" name='price'>

    <button class="btn btn-primary" type="submit">
      Add pizza
    </button>
  </div>
</form>


@endsection

