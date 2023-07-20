<?php

namespace App\Http\Livewire;

use Illuminate\Support\Arr;
use Illuminate\Support\Str;
use Livewire\Component;

class TransactionDetails extends Component
{
    // this is the list of checkbox items for Transaction Filter 
    public $filterTransactionsCheckbox = [];

    public $showPaymentGatewayFilterButton = 'invisible'; //button
    public $showPaymentGatewayFilterDropdown = ''; //dropdown
    
    public $showConsentFlagFilter = 'invisible'; //button
    
    public $showMerchantCategoryCodeFilterButton = 'invisible'; //button
    public $showMerchantCategoryCodeFilterDropdown = ''; //dropdown

    public $showTransactionStatusFilter = 'invisible'; //button
    public $showPaymentAppFilter = 'invisible'; //button
    public $showWebMobileFilter = 'invisible'; //button

    // this is the list pf checkbox items selected aka filtered in respective filters
    public $paymentGatewaysFiltered = [];
    public $consentFlagFilter = [];
    public $merchantCategoryCodesFiltered = [];
    public $transactionStatusFilter = [];
    public $paymentAppFilter = [];
    public $webMobileFilter = [];

    // search boxes in respective filters
    public $searchPG = '';
    public $searchMCC = '';

    public $paymentGatewaysDisplayed = [];
    public $paymentGatewaysAll = ['480001','480002','480003','480004','480005','480006','480007'];
    
    public $merchantCategoryCodesDisplayed = [];
    public $merchantCategoryCodesAll = ['4829 money orders - wire transfer','4900 electric, gas, sanitary and water utilities','5013 motor vehicle supplies and new parts','5045 computers, computer peripheral equipment, software','5047 medical, dental ophthalmic, hospital equipment and supplies','5139 commercial footwear','5411 grocery stores','5462 bakeries','5571 motorcycle dealers','5732 electronic sales','5814 fast food restaurants','5942 book stores','5977 cosmetic stores','7032 sporting and recreational camps','7298 health and beauty shops','7542 car washes'];

    public function mount()
    {
      $this->paymentGatewaysDisplayed = $this->paymentGatewaysAll;
      $this->showPaymentGatewayFilterDropdown = 'hidden';
      
      $this->merchantCategoryCodesDisplayed = $this->merchantCategoryCodesAll;
      $this->showMerchantCategoryCodeFilterDropdown = 'hidden';
    }


    public function updatedSearchPG()
    {
      $this->paymentGatewaysDisplayed = Arr::where($this->paymentGatewaysAll, function($value){
        return Str::contains($value,$this->searchPG);
      });

      if(!$this->paymentGatewaysDisplayed) $this->paymentGatewaysDisplayed  = $this->paymentGatewaysAll;

    }

    public function updatedSearchMCC()
    {
      $this->merchantCategoryCodesDisplayed = Arr::where($this->merchantCategoryCodesAll, function($value){
        return Str::contains($value,$this->searchMCC);
      });
      
      if(!$this->merchantCategoryCodesDisplayed) $this->merchantCategoryCodesDisplayed  = $this->merchantCategoryCodesAll;

    }

    public function toggleFilterBody($data)
    {
      if($data == 'payment_gateway') {
        ($this->showPaymentGatewayFilterDropdown == 'hidden') ? 
          $this->showPaymentGatewayFilterDropdown = '' : 
          $this->showPaymentGatewayFilterDropdown = 'hidden'  ;
      }
      else if($data == 'merchant_category_code') {
        ($this->showMerchantCategoryCodeFilterDropdown == 'hidden') ? 
          $this->showMerchantCategoryCodeFilterDropdown = '' : 
          $this->showMerchantCategoryCodeFilterDropdown = 'hidden'  ;
      }
    }

    public function updatedFilterTransactionsCheckbox()
    {
      if(in_array('payment_gateway',$this->filterTransactionsCheckbox,TRUE)){
        $this->showPaymentGatewayFilterButton = 'visible' ;
        $this->showPaymentGatewayFilterDropdown = 'hidden' ; 
      }
      else{
        $this->showPaymentGatewayFilterButton = 'hidden invisible' ;
        $this->showPaymentGatewayFilterDropdown = 'hidden' ;
        $this->reset('paymentGatewaysFiltered');
      }

      if(in_array('merchant_category_code',$this->filterTransactionsCheckbox,TRUE)){
        $this->showMerchantCategoryCodeFilterButton = 'visible' ;
        $this->showMerchantCategoryCodeFilterDropdown = 'hidden' ; 
      }
      else{
        $this->showMerchantCategoryCodeFilterButton = 'invisible' ;
        $this->showMerchantCategoryCodeFilterDropdown = 'hidden' ;
        $this->reset('merchantCategoryCodesFiltered');
      }

    }


    public function render()
    {
      return view('livewire.transaction-details',[
        'name' => 'tets',
      ]);
    }
}
