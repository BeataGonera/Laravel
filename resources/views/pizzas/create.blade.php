@extends('layouts.layout')

@section('content')
<!-- <div>
    <p>Create a new pizza</p>
    <form action='/pizzas' method='POST'> 
        @csrf
        <label class="text-3xl" for='type'>Type of pizza:</label>
        <input id='type' name='type' required type='text'/>

        <label for='base'>Base:</label>
        <input id='base' name='base' required type='text'/>

        <label for='name'>Order for:</label>
        <input id='name' name='name' required type='text'/>

        <label for='price'>Price:</label>
        <input id='price' name='price' required type='text'/>

        <button type='submit'>Submit</button>
    </form>
</div> -->


<form class="w-[80vw]" action='/pizzas' method='POST'>
    @csrf
  <div class="flex flex-col gap-4 items-center border-b border-teal-500 py-2">

    <label for='type' class="block text-gray-700 text-sm font-bold mb-2">Type of pizza:</label>
    <input class="shadow appearance-none border rounded w-1/6 py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" aria-label="pizza type" name='type'>

    <label for='base' class="block text-gray-700 text-sm font-bold mb-2">Base:</label>
    <input class="shadow appearance-none border rounded w-1/6 py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" aria-label="base" name='base'>

    <label for='name' class="block text-gray-700 text-sm font-bold mb-2">Order for:</label>
    <input class="shadow appearance-none border rounded w-1/6 py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" aria-label="name" name='name'>

    <label for='price' class="block text-gray-700 text-sm font-bold mb-2">Price:</label>
    <input class="shadow appearance-none border rounded w-1/6 py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" aria-label="price" name='price'>

    <button class="flex-shrink-0 bg-teal-500 hover:bg-teal-700 border-teal-500 hover:border-teal-700 text-sm border-4 text-white py-1 px-2 rounded" type="submit">
      Add pizza
    </button>
  </div>
</form>


@endsection

