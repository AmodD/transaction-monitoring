<div class="">       
<button wire:click="toggleFilterBody('web_mobile')" id="dropdownWebMobileButton" data-dropdown-placement="bottom" class="relative inline-flex items-center p-3 text-white bg-gray-600 hover:bg-gray-800 focus:ring-4 focus:outline-none focus:ring-gray-300 font-medium rounded-lg text-sm px-4 py-2 text-center inline-flex items-center dark:bg-gray-600 dark:hover:bg-gray-700 dark:focus:ring-gray-800 {{$showWebMobileFilterButton}}" type="button">
          <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" class="h-4 w-4 mr-2 text-gray-400" viewbox="0 0 20 20" fill="currentColor">
            <path fill-rule="evenodd" d="M3 3a1 1 0 011-1h12a1 1 0 011 1v3a1 1 0 01-.293.707L12 11.414V15a1 1 0 01-.293.707l-2 2A1 1 0 018 17v-5.586L3.293 6.707A1 1 0 013 6V3z" clip-rule="evenodd" />
          </svg>
          
          @if($webMobileFiltered)
            <span class="">Web / Mobile | Selected  </span>
          @else
            <span class="">Web / Mobile | All </span>
          @endif

          <svg class="w-2.5 h-2.5 ml-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
          </svg>
</button>
<!-- Dropdown menu -->
<div  id="dropdownSearchWebMobile" class="z-10 bg-white rounded-lg shadow w-60 dark:bg-gray-700 {{$showWebMobileFilterDropdown}}" style="position: absolute;">
    <ul class="h-48 px-3 pb-3 overflow-y-auto text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownSearchButton">
    @foreach($webMobileDisplayed as $webMobile)
      <li>
        <div class="flex items-center pl-2 rounded hover:bg-gray-100 dark:hover:bg-gray-600">
          <input wire:model="webMobileFiltered" type="checkbox" value="{{ ($webMobile == 'Web') ? 1:0 }}" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
          <label for="checkbox-item-11" class="w-full py-2 ml-2 text-sm font-medium text-gray-900 rounded dark:text-gray-300">{{$webMobile}}</label>
        </div>
      </li>
    @endforeach
    </ul>
</div>

</div>
