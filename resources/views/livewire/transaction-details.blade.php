   <div class="py-2">

    <div class="relative max-w-7xl mx-auto overflow-x-auto shadow-md px-4 py-2 pb-4 bg-white dark:bg-gray-900">

       <div class="flex items-center justify-between pb-2">
          <x-transaction-details.period-selector />
          <x-transaction-details.transactions-search />
          <x-transaction-details.transactions-filter />
      </div>

      <div class="flex py-2" >
        <div class=""> 
            <x-transaction-details.transactions-filter.payment-gateway 
                showPaymentGatewayFilter="{{$showPaymentGatewayFilter}}"  
                :paymentGateways="$paymentGateways"
                :paymentGatewayFilter="$paymentGatewayFilter" />
        </div>
        <div class="px-4">
            <x-transaction-details.transactions-filter.merchant-category-code 
                showMerchantCategoryCodeFilter="{{$showMerchantCategoryCodeFilter}}"  
                showMerchantCategoryCodeFilterBody="{{$showMerchantCategoryCodeFilterBody}}"  
                :merchantCategoryCodes="$merchantCategoryCodes"
                :merchantCategoryCodeFilter="$merchantCategoryCodeFilter" />
        </div>
      </div>

          <x-transaction-details.transactions-table />
          <x-transaction-details.table-pagination />

    </div>


   </div>
















  </div>


