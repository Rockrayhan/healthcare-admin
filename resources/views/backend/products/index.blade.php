@extends('backend.layouts.app')


@section('content')
<h1> All Products </h1>

@if (session('msg'))
    <div class="col-sm-12">
        <div class="p-4 mb-4 text-sm text-green-800 rounded-lg bg-gray-600" role="alert">
            {{ session('msg') }}
                <span class="font-medium">Success alert!</span> Change a few things up and try submitting again.
            </div>
    </div>
@endif
 

<div class="relative overflow-x-auto shadow-md sm:rounded-lg">
    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    Product name
                </th>
                <th scope="col" class="px-6 py-3">
                    Desription
                </th>
                <th scope="col" class="px-6 py-3">
                    Price
                </th>
                <th scope="col" class="px-6 py-3">
                    Category
                </th>
               
                <th scope="col" class="px-6 py-3">
                Action
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($product as $item)
                
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                <td scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    {{$item['name']}}
                </td>
                <td scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    {{$item['description']}}
                </td>
                <td scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    {{$item['price']}}
                </td>
                <td scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    {{$item['category_id']}}
                </td>
                <td scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    <a href="category/delete/{{$item['id']}}"> delete </a>
                    <a href="category/edit/{{$item['id']}}" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                </td>
   
            </tr>
            @endforeach
        </tbody>
    </table>
</div>




@endsection