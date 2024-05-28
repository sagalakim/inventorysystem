


<!-- Details Modal -->
<div class="modal fade bd-example-modal-md " id="stockoutmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog modal-md" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Stock Out</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body d-flex justify-content-center">
<form id="agentstockoutForm" action="{{route('stockout')}}" action='Post' enctype="multipart/form-data" class="w-full max-w-lg">
  @csrf
  <input id='itemid2' name='item' style="display: none" />
<div class="flex flex-wrap -mx-3">
    <div class="w-full md:w-1/2 px-3  md:mb-0">
      <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
      Given to
      </label>
      <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="given2" name='receivedby' type="text" placeholder="Fill in">
    </div>
    <div class="w-full md:w-1/2 px-3">
      <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-last-name">
        No. of units given to
      </label>
      <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="nounits" name='nounits' type="number" placeholder="Fill in">
    </div>
  </div>

  <div class="flex flex-wrap -mx-3">
    <div class="w-full  px-3  md:mb-0">
      <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
      Date given to
      </label>
      <input type = "date" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="dategiven" name='dategiven' type="text" placeholder="Fill in">
    </div>
</div>

  <div class="flex flex-wrap -mx-3">
    <div class="w-full md:w-1/3 px-3  md:mb-0">
      <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
      Quantity
      </label>
      <input class="appearance-none locked block w-full bg-gray-200 text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="quantity2" type="number" name='quantity' placeholder="Fill in">
    </div>
    <div class="w-full md:w-1/3 px-3">
      <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-last-name">
        Unit Cost
      </label>
      <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="unitcost2" type="number" name='unitcost' placeholder="Fill in">
    </div>
    <div class="w-full md:w-1/3 px-3">
      <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-last-name">
        Remarks
      </label>
      <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="remarks2" type="text" name='remarks' placeholder="Fill in">
    </div>
  </div>

  <div class="flex flex-wrap -mx-3">
    <div class="w-full  px-3  md:mb-0">
      <label class="block  tracking-wide text-center text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
      <a id="showText" href="#" onclick="toggleDisplay()">Show more details</a>
      </label>
    </div>
</div>

 <div id= "showMore" style="display:none;opacity: 1;transition:opacity 0.5s ease-in-out;" >
 <div class="flex flex-wrap -mx-3">
    <div class="w-full md:w-1/2 px-3  md:mb-0">
      <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
        PO Number
      </label>
      <input class="appearance-none locked block w-full bg-gray-200 text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="ponumber2" type="number" name='ponumber' placeholder="Fill in">
    </div>
    <div class="w-full md:w-1/2 px-3">
      <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-last-name">
        Date of PO
      </label>
      <input type='date' class="appearance-none locked block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="podate2" name='podate' placeholder="Fill in">
    </div>
  </div>
  
  <div class="flex flex-wrap -mx-3">
    <div class="w-full md:w-1/2 px-3  md:mb-0">
      <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
      Stock No./Property No./ICS No.
      </label>
      <input class="appearance-none locked block w-full bg-gray-200 text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="stockno2" type="text" name='stockno'  placeholder="Fill in">
    </div>
    <div class="w-full md:w-1/2 px-3">
      <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-last-name">
        Type
      </label>
      <input class="appearance-none locked block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="type2" type="text" name='type'  placeholder="Fill in">
    </div>
  </div>

    <div class="flex flex-wrap -mx-3">
    <div class="w-full md:w-1/2 px-3  md:mb-0">
      <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
      Unit
      </label>
      <input class="appearance-none locked block w-full bg-gray-200 text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="unit2" type="text" name='unit' placeholder="Fill in">
    </div>
    <div class="w-full md:w-1/2 px-3">
      <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-last-name">
        Description
      </label>
      <input class="appearance-none locked block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="description2" type="text" name='description'>
    </div>
  </div>

 </div> 

  
</form>

      </div>
      <script>
        function toggleDisplay() {
            var element = document.getElementById("showMore");
            var Aelement = document.getElementById("showText");
            if (element.style.display === "none") {
                element.style.display = "block";
                Aelement.innerText = "Show less details"
            } else {
                element.style.display = "none";
                Aelement.innerText = "Show more details"
            }
        }
    </script>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" id='agentstockoutsubmitForm' class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>


