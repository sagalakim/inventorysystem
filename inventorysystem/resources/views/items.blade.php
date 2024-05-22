@include('stockinn')
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("You're logged in!!!!!!") }}
                </div>
            </div>
        </div>
    </div>

    <table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Action</th>
    </tr>
  <tbody>
    @foreach($items as $item)
    <tr>
      <th scope="row">{{$item->id}}</th>
      <td>{{$item->item_name}}</td>
      <td>{{$item->item_description}}</td>
      <td><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-id="{{$item->id}}" data-item="{{$item}}">
    Stockin
</button></td>
    </tr>
    @endforeach
    
  </tbody>
</table>
</x-app-layout>
