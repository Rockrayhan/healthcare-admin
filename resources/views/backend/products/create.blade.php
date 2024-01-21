@extends('backend.layouts.app')


@section('content')
<h1 class="text-red-600"> Insert Product </h1>
 
@if ($errors->any())
<div class="p-2 text-white bg-red-500 rounded-lg shadow-md w-3/5">
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

<form class="max-w-sm mx-auto" method="POST" action="{{route('product.store')}}">
    @csrf
    <div class="mb-5">
      <label  class="block mb-2 text-sm font-medium text-white">Product Name</label>
      <input type="text" name="name"  class=" p-2 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required value="{{old('name')}}">
    </div>

    <div class="mb-5">
      <label  class="block mb-2 text-sm font-medium text-white">Product Description</label>
      <textarea class="bg-gray-700" name="desc" cols="50" rows="5"> {{old('desc')}} </textarea>
    </div>

    <div class="mb-5">
      <label  class="block mb-2 text-sm font-medium text-white">Price</label>
      <input type="text" name="price"  class=" p-2 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{old('price')}}">
    </div>

    {{-- category --}}
    <div class="mb-5">
      <label  class="block mb-2 text-sm font-medium ">Category</label>
      <select name="cats" class="bg-gray-500">
        <option class="bg-gray-500" value="">Select a Category</option>  
        @foreach ($cats as $item)
        <option class="bg-gray-500" value="{{$item['id']}}" {{old('cats')==$item['id'] ? 'selected': '' }} > {{$item['name']}} </option>  
        @endforeach
      </select>
    </div>


    {{-- radio for availibility --}}
    
<div class="flex items-center mb-4">
  <input id="default-radio-1" type="radio" value="" name="default-radio" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
  <label for="default-radio-1" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Available</label>
</div>
<div class="flex items-center">
  <input checked id="default-radio-2" type="radio" value="" name="default-radio" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
  <label for="default-radio-2" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300"> Not Available </label>
</div>




    <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
  </form>
  


@endsection