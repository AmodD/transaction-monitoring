   <div class="py-2">

    <div class="relative max-w-7xl mx-auto overflow-x-auto shadow-md px-4 py-2 pb-4 bg-white dark:bg-gray-900">

       <div class="flex items-center justify-between pb-2">
          <x-transaction-details.period-selector />
          <x-transaction-details.transactions-search />
          <x-transaction-details.transactions-filter />
      </div>

      <div class="flex py-2" >
        @if(in_array('payment_gateway',$this->filterTransactionsCheckbox,TRUE))
          <div class="pr-4"> 
            <x-transaction-details.transactions-filter.payment-gateway
                showPaymentGatewayFilterButton="{{$showPaymentGatewayFilterButton}}"  
                showPaymentGatewayFilterDropdown="{{$showPaymentGatewayFilterDropdown}}"  
                :paymentGatewaysDisplayed="$paymentGatewaysDisplayed"
                :paymentGatewaysFiltered="$paymentGatewaysFiltered" />
          </div>
        @endif
        @if(in_array('consent_flag',$this->filterTransactionsCheckbox,TRUE))
        @endif
   
       @if(in_array('merchant_category_code',$this->filterTransactionsCheckbox,TRUE))
        <div class="pr-4">
            <x-transaction-details.transactions-filter.merchant-category-code 
                showMerchantCategoryCodeFilterButton="{{$showMerchantCategoryCodeFilterButton}}"  
                showMerchantCategoryCodeFilterDropdown="{{$showMerchantCategoryCodeFilterDropdown}}"  
                :merchantCategoryCodesDisplayed="$merchantCategoryCodesDisplayed"
                :merchantCategoryCodesFiltered="$merchantCategoryCodesFiltered" />
        </div>
      @endif
      
       @if(in_array('transaction_status',$this->filterTransactionsCheckbox,TRUE))
        @endif
        @if(in_array('payment_app',$this->filterTransactionsCheckbox,TRUE))
        @endif
        @if(in_array('web_mobile',$this->filterTransactionsCheckbox,TRUE))
        @endif
      </div>

          <x-transaction-details.transactions-table />
          <x-transaction-details.table-pagination />

    </div>


   </div>
















  </div>


