


<!-- Details Modal -->
<div class="modal fade bd-example-modal-md " id="edititemsmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog modal-md" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Edit Item</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body d-flex justify-content-center">
<form id="agentedititemForm" action="{{route('edit.item')}}" method='Post' enctype="multipart/form-data" class="w-full max-w-lg">
  @csrf
  <div class="flex flex-wrap -mx-3">
  <input id='itemid3' name='item' style="display: none" />
    <div class="w-full md:w-1/2 px-3  md:mb-0">
      <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name" >
        PAR / ICS No.
      </label>
      <input id='ponumber5' class="appearance-none block w-full bg-gray-200 text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"  type="text" placeholder="2024-03-141" name='par' required>
    </div>
    <div class="w-full md:w-1/2 px-3  md:mb-0">
      <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
        Property No. / Inventory No.
      </label>
      <input id='stockno5' class="appearance-none block w-full bg-gray-200 text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"  type="text" placeholder="2024-03-141" name='stockno' required>
    </div>
    <div class="w-full md:w-1/0 px-3" style='margin-bottom:20px;'>
      <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-last-name">
        Date Acquired
      </label>
      <input id='podate5' type='date' class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"  name="dateacquired" placeholder="Fill in" required>
    </div>
  </div>
  
  <div class="flex flex-wrap -mx-3">
    <div class="w-full md:w-1/0 px-3">
      <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-last-name">
        Type
      </label>
      <select id='type5' name='type' class="form-control form-select-lg mb-3" style='background-color:#efeff5; font-size:20px;' aria-label=".form-select-lg example">
        <option selected>-- Select --</option>
        <option value="Supply">Supply</option>
        <option value="Equipment">Equipment</option>
      </select>
      </div>
  </div>

    <div class="flex flex-wrap -mx-3">
    <div class="w-full md:w-1/2 px-3  md:mb-0">
      <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
      Unit
      </label>
      <input id='unit5' class="appearance-none block w-full bg-gray-200 text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"  type="text" name='unit' placeholder="Fill in" required>
    </div>
    <div class="w-full md:w-1/2 px-3">
      <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-last-name">
        Description
      </label>
      <input id='description5' class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"  name='description' type="text" placeholder="Fill in" required>
    </div>
  </div>

  <div class="flex flex-wrap -mx-3">
    <div class="w-full md:w-1/3 px-3  md:mb-0">
      <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
      Quantity
      </label>
      <input id='quantity5' class="appearance-none block w-full bg-gray-200 text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"  name="quantity" type="number"  placeholder="0"required>
    </div>
    <div class="w-full md:w-1/3 px-3">
      <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-last-name">
        Unit Cost
      </label>
      <input id='unitcost5' class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"  name='unitcost' type="number" placeholder="0"required>
    </div>
    <div class="w-full md:w-1/3 px-3">
      <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-last-name">
        Remarks
      </label>
      <input id='remarks5' class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"  name='remarks' type="text"  placeholder="Fill in"required>
    </div>
    <div class="w-full md:w-1/0 px-3">
      <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-last-name">
        New Custodian Name
      </label>
      <input id='custname5' class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"  name='custname' type="text"  placeholder="Fill in"required>
    </div>
  </div>
</form>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button id="agenteditsubmitForm" type="submit" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>


