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

    <form method='Post' action="{{route('stockout')}}" enctype="multipart/form-data">
        <h2>Stock ins</h2>
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
            <label for="inputPassword4">PO number</label>
            <input type="number" class="form-control" id="inputPassword4" name='ponumber' placeholder="" required>
            </div>
        </div>
        <div class="form-group">
            <label for="inputAddress">PO date</label>
            <input type="date" class="form-control" id="inputAddress" name='podate' placeholder="unit" required>
        </div>
        <div class="form-group">
            <label for="inputAddress2">Stock no</label>
            <input type="text" class="form-control" id="inputAddress2" name='stockno' placeholder="description" required>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
            <label for="inputCity">Type</label>
            <input type="text" class="form-control" name='type' id="inputCity" required>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
            <label for="inputCity">Unit</label>
            <input type="text" class="form-control" name='unit' id="inputCity" required>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
            <label for="inputCity">Description</label>
            <input type="text" class="form-control" name='description' id="inputCity" required>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
            <label for="inputCity">Quantity</label>
            <input type="number" class="form-control" name='quantity' id="inputCity" required>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
            <label for="inputCity">Unit cost</label>
            <input type="number" class="form-control" name='unitcost' id="inputCity" required>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
            <label for="inputCity">Status/Remarks</label>
            <input type="text" class="form-control" name='statusremarks' id="inputCity" required>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
            <label for="inputCity">Received by</label>
            <input type="text" class="form-control" name='receivedby' id="inputCity" required>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
            <label for="inputCity">No of units received</label>
            <input type="number" class="form-control" name='unitsreceived' id="inputCity" required>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
            <label for="inputCity">Date Received</label>
            <input type="date" class="form-control" name='datereceived' id="inputCity" required>
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
