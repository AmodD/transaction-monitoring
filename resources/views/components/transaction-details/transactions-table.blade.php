<div>
    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-3 py-3">
                  <div class="flex items-center">
                    Sr No
                    <a  wire:click="sortBy('id')">
                      <svg class="w-3 h-3 ml-1.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M8.574 11.024h6.852a2.075 2.075 0 0 0 1.847-1.086 1.9 1.9 0 0 0-.11-1.986L13.736 2.9a2.122 2.122 0 0 0-3.472 0L6.837 7.952a1.9 1.9 0 0 0-.11 1.986 2.074 2.074 0 0 0 1.847 1.086Zm6.852 1.952H8.574a2.072 2.072 0 0 0-1.847 1.087 1.9 1.9 0 0 0 .11 1.985l3.426 5.05a2.123 2.123 0 0 0 3.472 0l3.427-5.05a1.9 1.9 0 0 0 .11-1.985 2.074 2.074 0 0 0-1.846-1.087Z"/>
                      </svg>
                    </a>
                  </div>
                </th>
                <th scope="col" class="px-3 py-3">
                  <div class="flex items-center">
                    Payment Gateway
                    <a wire:click="sortBy('payment_gateway')">
                      <svg class="w-3 h-3 ml-1.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M8.574 11.024h6.852a2.075 2.075 0 0 0 1.847-1.086 1.9 1.9 0 0 0-.11-1.986L13.736 2.9a2.122 2.122 0 0 0-3.472 0L6.837 7.952a1.9 1.9 0 0 0-.11 1.986 2.074 2.074 0 0 0 1.847 1.086Zm6.852 1.952H8.574a2.072 2.072 0 0 0-1.847 1.087 1.9 1.9 0 0 0 .11 1.985l3.426 5.05a2.123 2.123 0 0 0 3.472 0l3.427-5.05a1.9 1.9 0 0 0 .11-1.985 2.074 2.074 0 0 0-1.846-1.087Z"/>
                      </svg>
                    </a>
                  </div>
                </th>
                <th scope="col" class="px-3 py-3">
                  <div class="flex items-center">
                    MCC
                    <a wire:click="sortBy('merchant_category_code')">
                      <svg class="w-3 h-3 ml-1.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M8.574 11.024h6.852a2.075 2.075 0 0 0 1.847-1.086 1.9 1.9 0 0 0-.11-1.986L13.736 2.9a2.122 2.122 0 0 0-3.472 0L6.837 7.952a1.9 1.9 0 0 0-.11 1.986 2.074 2.074 0 0 0 1.847 1.086Zm6.852 1.952H8.574a2.072 2.072 0 0 0-1.847 1.087 1.9 1.9 0 0 0 .11 1.985l3.426 5.05a2.123 2.123 0 0 0 3.472 0l3.427-5.05a1.9 1.9 0 0 0 .11-1.985 2.074 2.074 0 0 0-1.846-1.087Z"/>
                      </svg>
                    </a>
                  </div>
                </th>
                <th scope="col" class="px-3 py-3">
                    Transaction ID
                </th>
                <th scope="col" class="px-3 py-3">
                    Token Requester ID
                </th>
                <th scope="col" class="px-3 py-3">
                  <div class="flex items-center">
                    Expiry
                    <a  wire:click="sortBy('expiry_token')">
                      <svg class="w-3 h-3 ml-1.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M8.574 11.024h6.852a2.075 2.075 0 0 0 1.847-1.086 1.9 1.9 0 0 0-.11-1.986L13.736 2.9a2.122 2.122 0 0 0-3.472 0L6.837 7.952a1.9 1.9 0 0 0-.11 1.986 2.074 2.074 0 0 0 1.847 1.086Zm6.852 1.952H8.574a2.072 2.072 0 0 0-1.847 1.087 1.9 1.9 0 0 0 .11 1.985l3.426 5.05a2.123 2.123 0 0 0 3.472 0l3.427-5.05a1.9 1.9 0 0 0 .11-1.985 2.074 2.074 0 0 0-1.846-1.087Z"/>
                      </svg>
                    </a>
                  </div>
                </th>
                <th scope="col" class="px-3 py-3">
                  <div class="flex items-center">
                    CF
                    <a  wire:click="sortBy('consent_flag')">
                      <svg class="w-3 h-3 ml-1.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M8.574 11.024h6.852a2.075 2.075 0 0 0 1.847-1.086 1.9 1.9 0 0 0-.11-1.986L13.736 2.9a2.122 2.122 0 0 0-3.472 0L6.837 7.952a1.9 1.9 0 0 0-.11 1.986 2.074 2.074 0 0 0 1.847 1.086Zm6.852 1.952H8.574a2.072 2.072 0 0 0-1.847 1.087 1.9 1.9 0 0 0 .11 1.985l3.426 5.05a2.123 2.123 0 0 0 3.472 0l3.427-5.05a1.9 1.9 0 0 0 .11-1.985 2.074 2.074 0 0 0-1.846-1.087Z"/>
                      </svg>
                    </a>
                  </div>
                </th>
                <th scope="col" class="px-3 py-3">
                  <div class="flex items-center">
                    W/M
                    <a  wire:click="sortBy('web_mobile')">
                      <svg class="w-3 h-3 ml-1.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M8.574 11.024h6.852a2.075 2.075 0 0 0 1.847-1.086 1.9 1.9 0 0 0-.11-1.986L13.736 2.9a2.122 2.122 0 0 0-3.472 0L6.837 7.952a1.9 1.9 0 0 0-.11 1.986 2.074 2.074 0 0 0 1.847 1.086Zm6.852 1.952H8.574a2.072 2.072 0 0 0-1.847 1.087 1.9 1.9 0 0 0 .11 1.985l3.426 5.05a2.123 2.123 0 0 0 3.472 0l3.427-5.05a1.9 1.9 0 0 0 .11-1.985 2.074 2.074 0 0 0-1.846-1.087Z"/>
                      </svg>
                    </a>
                  </div>
                </th>
                <th scope="col" class="px-3 py-3">
                  <div class="flex items-center">
                    Txn Status
                    <a  wire:click="sortBy('transaction_status')">
                      <svg class="w-3 h-3 ml-1.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M8.574 11.024h6.852a2.075 2.075 0 0 0 1.847-1.086 1.9 1.9 0 0 0-.11-1.986L13.736 2.9a2.122 2.122 0 0 0-3.472 0L6.837 7.952a1.9 1.9 0 0 0-.11 1.986 2.074 2.074 0 0 0 1.847 1.086Zm6.852 1.952H8.574a2.072 2.072 0 0 0-1.847 1.087 1.9 1.9 0 0 0 .11 1.985l3.426 5.05a2.123 2.123 0 0 0 3.472 0l3.427-5.05a1.9 1.9 0 0 0 .11-1.985 2.074 2.074 0 0 0-1.846-1.087Z"/>
                      </svg>
                    </a>
                  </div>
                </th>
                <th scope="col" class="px-3 py-3">
                  <div class="flex items-center">
                    Transaction Date
                    <a  wire:click="sortBy('transaction_date')">
                      <svg class="w-3 h-3 ml-1.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M8.574 11.024h6.852a2.075 2.075 0 0 0 1.847-1.086 1.9 1.9 0 0 0-.11-1.986L13.736 2.9a2.122 2.122 0 0 0-3.472 0L6.837 7.952a1.9 1.9 0 0 0-.11 1.986 2.074 2.074 0 0 0 1.847 1.086Zm6.852 1.952H8.574a2.072 2.072 0 0 0-1.847 1.087 1.9 1.9 0 0 0 .11 1.985l3.426 5.05a2.123 2.123 0 0 0 3.472 0l3.427-5.05a1.9 1.9 0 0 0 .11-1.985 2.074 2.074 0 0 0-1.846-1.087Z"/>
                      </svg>
                    </a>
                  </div>
                </th>
            </tr>
        </thead>
        <tbody>
            @forelse($transactions as $transaction)
            <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                <th scope="row" class="px-3 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">{{$transaction->id}}</th>
                <td class="px-3 py-4">{{$transaction->payment_gateway}}</td>
                <td class="px-3 py-4">{{$transaction->mcc}}</td>
                <td class="px-3 py-4">{{$transaction->transaction_id}}</td>
                <td class="px-3 py-4" data-tooltip-target="tooltip-hover-{{$transaction->id}}" data-tooltip-trigger="hover">{{Str::substrReplace($transaction->token_requester_id, '...', 6, -6);}}<span id="tooltip-hover-{{$transaction->id}}" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">{{$transaction->token_requester_id}}<div class="tooltip-arrow" data-popper-arrow></div></span></td>
                <td class="px-3 py-4">{{$transaction->expiry_token}}</td>
                <td class="px-3 py-4">       
                  @if($transaction->consent_flag)
                   <input id="checkbox-table-search-1" type="checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600" checked disabled>
                   <label for="checkbox-table-search-1" class="sr-only">checkbox</label>
                  @else
                   <input id="checkbox-table-search-1" type="checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600" disabled>
                   <label for="checkbox-table-search-1" class="sr-only">checkbox</label>
                  @endif 
                </td>
                <td class="px-3 py-4">{{ $transaction->web_mobile ? 'Web' : 'Mobile'}}</td>
                <td class="px-3 py-4"><span class="bg-{{$transaction->status_color}}-100 text-{{$transaction->status_color}}-800 text-xs font-medium mr-2 px-2.5 py-0.5 rounded-full dark:bg-{{$transaction->status_color}}-900 dark:text-{{$transaction->status_color}}-300">{{$transaction->transaction_status}}</span></td>
                <td class="px-3 py-4">{{$transaction->transaction_date}}</td>
            </tr>
            @empty
            <tr><td> . </td></tr>
            <tr><td> . </td></tr>
            <tr><td> . </td></tr>
            <tr class="bg-white dark:bg-gray-900 dark:border-gray-700">
                <td class="px-3 py-4"> </td>
                <td class="px-3 py-4"> </td>
                <td class="px-3 py-4"> </td>
                <td class="px-3 py-4"> </td>
                <td class="px-3 py-4 text-lg font-semibold text-slate-500">NO RESULTS</td>
            </tr>
            <tr><td> . </td></tr>
            <tr><td> . </td></tr>
            <tr><td> . </td></tr>
            @endforelse
        </tbody>
    </table>
    <div class="">{{$transactions->links()}}</div>
</div>
