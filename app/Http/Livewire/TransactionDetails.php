<?php

namespace App\Http\Livewire;

use Illuminate\Support\Arr;
use Illuminate\Support\Str;
use Livewire\Component;

class TransactionDetails extends Component
{
    // this is the list of checkbox items for Transaction Filter 
    public $filterTransactionsCheckbox = [];

    public $showPaymentGatewayFilter = 'invisible'; //button
    public $showPaymentGatewayFilterBody = ''; //dropdown
    
    public $showConsentFlagFilter = 'invisible'; //button
    
    public $showMerchantCategoryCodeFilterButton = 'invisible'; //button
    public $showMerchantCategoryCodeFilterDropdown = ''; //dropdown

    public $showTransactionStatusFilter = 'invisible'; //button
    public $showPaymentAppFilter = 'invisible'; //button
    public $showWebMobileFilter = 'invisible'; //button

    // this is the list pf checkbox items selected aka filtered in respective filters
    public $paymentGatewayFilter = [];
    public $consentFlagFilter = [];
    public $merchantCategoryCodeFiltered = [];
    public $transactionStatusFilter = [];
    public $paymentAppFilter = [];
    public $webMobileFilter = [];

    // search boxes in respective filters
    public $searchPG = '';
    public $searchMCC = '';

    public $paymentGatewaysAll = ['480001','480002','480003','480004','480005','480006','480007'];
    public $paymentGateways = [];
    
    public $merchantCategoryCodesDisplayed = [];
    public $merchantCategoryCodesAll = ['4829 money orders - wire transfer','4900 electric, gas, sanitary and water utilities','5013 motor vehicle supplies and new parts','5045 computers, computer peripheral equipment, software','5047 medical, dental ophthalmic, hospital equipment and supplies','5139 commercial footwear','5411 grocery stores','5462 bakeries','5571 motorcycle dealers','5732 electronic sales','5814 fast food restaurants','5942 book stores','5977 cosmetic stores','7032 sporting and recreational camps','7298 health and beauty shops','7542 car washes'];

    public function mount()
    {
      $this->paymentGateways = $this->paymentGatewaysAll;
      $this->merchantCategoryCodesDisplayed = $this->merchantCategoryCodesAll;
      $this->showMerchantCategoryCodeFilterDropdown = 'hidden';
    }


    public function updatedSearchPG()
    {
      $this->paymentGateways = Arr::where($this->paymentGatewaysAll, function($value)
      {
        return Str::contains($value,$this->searchPG);
      });

      if(!$this->paymentGateways) $this->paymentGateways  = $this->paymentGatewaysAll;

    }

    public function updatedSearchMCC()
    {
      $this->merchantCategoryCodesDisplayed = Arr::where($this->merchantCategoryCodesAll, function($value)
      {
        return Str::contains($value,$this->searchMCC);
      });
      
      if(!$this->merchantCategoryCodesDisplayed) $this->merchantCategoryCodesDisplayed  = $this->merchantCategoryCodesAll;

    }

    public function toggleFilterBody($data)
    {
      if($data == 'merchant_category_code') {
      ($this->showMerchantCategoryCodeFilterDropdown == 'hidden') ? 
        $this->showMerchantCategoryCodeFilterDropdown = '' : 
        $this->showMerchantCategoryCodeFilterDropdown = 'hidden'  ;
      }
    }

    public function updatedFilterTransactionsCheckbox()
    {
      in_array('payment_gateway',$this->filterTransactionsCheckbox,TRUE) ? 
        $this->showPaymentGatewayFilter = 'visible' : 
        $this->showPaymentGatewayFilter = 'hidden invisible' ;
      in_array('consent_flag',$this->filterTransactionsCheckbox,TRUE) ? 
        $this->showConsentFlagFilter = 'visible' : 
        $this->showConsentFlagFilter = 'invisible' ;
      in_array('merchant_category_code',$this->filterTransactionsCheckbox,TRUE) ? 
        $this->showMerchantCategoryCodeFilterButton = 'visible' : 
        $this->showMerchantCategoryCodeFilterButton = 'invisible' ;
      in_array('transaction_status',$this->filterTransactionsCheckbox,TRUE) ? 
        $this->showTransactionStatusFilter = 'visible' : 
        $this->showTransactionStatusFilter = 'invisible' ;
      in_array('payment_app',$this->filterTransactionsCheckbox,TRUE) ? 
        $this->showPaymentAppFilter = 'visible' : 
        $this->showPaymentAppFilter = 'invisible' ;
      in_array('web_mobile',$this->filterTransactionsCheckbox,TRUE) ? 
        $this->showWebMobileFilter = 'visible' : 
        $this->showWebMobileFilter = 'invisible' ;
      
      in_array('merchant_category_code',$this->filterTransactionsCheckbox,TRUE) ? 
        $this->showMerchantCategoryCodeFilterDropdown = 'hidden' : 
        $this->showMerchantCategoryCodeFilterDropdown = 'hidden' ;

      in_array('merchant_category_code',$this->filterTransactionsCheckbox,TRUE) ? : $this->reset('merchantCategoryCodeFiltered');
    }


    public function render()
    {
      return view('livewire.transaction-details',[
        'name' => 'tets',
      ]);
    }
}
