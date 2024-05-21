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

    <form method='Post' action="{{route('purchaserequest')}}" enctype="multipart/form-data">
        <h2>Purchase Request</h2>
        @csrf
        <div class="form-row">
            <div class="form-group col-md-4">
            <label for="inputState">Item</label>
            <select id="inputState" name='item' class="form-control">
                <option selected>Choose...</option>
                @foreach($items as $item)
                    <option value='{{$item->id}}'>{{$item->item_name}}</option>
                @endforeach
            </select>
            </div>
            <div class="form-group col-md-6">
            <label for="inputPassword4">Item type</label>
            <input type="text" class="form-control" id="inputPassword4" name='item_type' placeholder="type" required>
            </div>
        </div>
        <div class="form-group">
            <label for="inputAddress">Unit</label>
            <input type="text" class="form-control" id="inputAddress" name='unit' placeholder="unit" required>
        </div>
        <div class="form-group col-md-4">
            <label for="inputState">Description</label>
            <select id="inputState" name='description' class="form-control">
                <option selected>Choose...</option>
                @foreach($items as $item)
                    <option>{{$item->item_description}}</option>
                @endforeach
            </select>
            </div>
        <div class="form-row">
            <div class="form-group col-md-6">
            <label for="inputCity">Quantity</label>
            <input type="number" class="form-control" name='quantity' id="inputCity" required>
            </div>
        </div>
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox" id="gridCheck" required>
            <label class="form-check-label" for="gridCheck">
                Check me out
            </label>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Add</button>
    </form>
</x-app-layout>
