<?php

namespace App\Http\Livewire;

use Illuminate\Support\Arr;
use Illuminate\Support\Str;

use Livewire\Component;
use Livewire\WithPagination;

use App\Models\PaymentGateway;
use App\Models\MerchantCategoryCode;
use App\Models\Transaction;

class TransactionDetails extends Component
{
    use WithPagination;

    public $period = 30;

    public $searchTransactions = 'failed';
    public $sortField ;
    public $sortDirection = 'desc';

    // this is the list of checkbox items for Transaction Filter 
    public $filterTransactionsCheckbox = [];

    public $showPaymentGatewayFilterButton = 'invisible'; //button
    public $showPaymentGatewayFilterDropdown = ''; //dropdown
    
    public $showConsentFlagFilterButton = 'invisible';
    public $showConsentFlagFilterDropdown = ''; 
    
    public $showMerchantCategoryCodeFilterButton = 'invisible'; 
    public $showMerchantCategoryCodeFilterDropdown = '';

    public $showTransactionStatusFilterButton = 'invisible';
    public $showTransactionStatusFilterDropdown = '';

    public $showPaymentAppFilter = 'invisible'; //button

    public $showWebMobileFilterButton = 'invisible'; 
    public $showWebMobileFilterDropdown = ''; 

    // this is the list pf checkbox items selected aka filtered in respective filters
    public $paymentGatewaysFiltered = [];
    public $consentFlagsFiltered = [];
    public $merchantCategoryCodesFiltered = [];
    public $transactionStatusesFiltered = [];
    public $paymentAppFilter = [];
    public $webMobileFiltered = [];

    // search boxes in respective filters
    public $searchPG = '';
    public $searchMCC = '';
    public $searchTS = '';

    public $paymentGatewaysDisplayed = [];
    public $paymentGatewaysAll = ['480001','480002','480003','480004','480005','480006','480007'];
    
    public $consentFlagsDisplayed = [];
    public $consentFlagsAll = ['YES','NO'];

    public $transactionStatusesDisplayed = [];
    public $transactionStatusesAll = ['successfull','failed','pending'];

    public $merchantCategoryCodesDisplayed = [];
    public $merchantCategoryCodesAll = ['4829 money orders - wire transfer','4900 electric, gas, sanitary and water utilities','5013 motor vehicle supplies and new parts','5045 computers, computer peripheral equipment, software','5047 medical, dental ophthalmic, hospital equipment and supplies','5139 commercial footwear','5411 grocery stores','5462 bakeries','5541 ','5571 motorcycle dealers','5732 electronic sales','5814 fast food restaurants','5942 book stores','5977 cosmetic stores','7032 sporting and recreational camps','7298 health and beauty shops','7542 car washes'];
    
    public $webMobileDisplayed = [];
    public $webMobileAll = ['Web','Mobile'];

    public function mount()
    {
 //     $this->transactions = Transaction::paginate(10);
      $this->paymentGatewaysAll = PaymentGateway::all()->pluck('code')->toArray();
      $this->paymentGatewaysDisplayed = $this->paymentGatewaysAll;
      $this->showPaymentGatewayFilterDropdown = 'hidden';
      
      $this->consentFlagsDisplayed = $this->consentFlagsAll;
      $this->showConsentFlagFilterDropdown = 'hidden';
      
      $this->merchantCategoryCodesAll = MerchantCategoryCode::all()->pluck('code')->toArray();
      $this->merchantCategoryCodesDisplayed = $this->merchantCategoryCodesAll;
      $this->showMerchantCategoryCodeFilterDropdown = 'hidden';
      
      $this->transactionStatusesDisplayed = $this->transactionStatusesAll;
      $this->showTransactionStatusFilterDropdown = 'hidden';
      
      $this->webMobileDisplayed = $this->webMobileAll;
      $this->showWebMobileFilterDropdown = 'hidden';
      
    }

    public function periodSelector()
    {
      $periodSelectorText = '';

      ($this->period) > 1 ? $periodSelectorText = 'Last '.$this->period.' Days' : $periodSelectorText = 'Yesterday';
      return $periodSelectorText;
    }

    public function sortBy($field)
    {
      if($this->sortField === $field)
      {
        $this->sortDirection = $this->sortDirection === 'asc' ? 'desc' : 'asc'; 
      }
      else {
        $this->sortDirection = 'asc';
      }

      $this->sortField = $field;
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

    public function updatedSearchTS()
    {
      $this->transactionStatusesDisplayed = Arr::where($this->transactionStatusesAll, function($value){
        return Str::contains($value,$this->searchTS);
      });

      if(!$this->transactionStatusesDisplayed) $this->transactionStatusesDisplayed  = $this->transactionStatusesAll;
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
      else if($data == 'consent_flag') {
        ($this->showConsentFlagFilterDropdown == 'hidden') ? 
          $this->showConsentFlagFilterDropdown = '' : 
          $this->showConsentFlagFilterDropdown = 'hidden'  ;
      }
      else if($data == 'transaction_status') {
        ($this->showTransactionStatusFilterDropdown == 'hidden') ? 
          $this->showTransactionStatusFilterDropdown = '' : 
          $this->showTransactionStatusFilterDropdown = 'hidden'  ;
      }
      else if($data == 'web_mobile') {
        ($this->showWebMobileFilterDropdown == 'hidden') ? 
          $this->showWebMobileFilterDropdown = '' : 
          $this->showWebMobileFilterDropdown = 'hidden'  ;
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

      if(in_array('consent_flag',$this->filterTransactionsCheckbox,TRUE)){
        $this->showConsentFlagFilterButton = 'visible' ;
        $this->showConsentFlagFilterDropdown = 'hidden' ; 
      }
      else{
        $this->showConsentFlagFilterButton = 'hidden invisible' ;
        $this->showConsentFlagFilterDropdown = 'hidden' ;
        $this->reset('consentFlagsFiltered');
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

      if(in_array('transaction_status',$this->filterTransactionsCheckbox,TRUE)){
        $this->showTransactionStatusFilterButton = 'visible' ;
        $this->showTransactionStatusFilterDropdown = 'hidden' ; 
      }
      else{
        $this->showTransactionStatusFilterButton = 'invisible' ;
        $this->showTransactionStatusFilterDropdown = 'hidden' ;
        $this->reset('transactionStatusesFiltered');
      }

      if(in_array('web_mobile',$this->filterTransactionsCheckbox,TRUE)){
        $this->showWebMobileFilterButton = 'visible' ;
        $this->showWebMobileFilterDropdown = 'hidden' ; 
      }
      else{
        $this->showWebMobileFilterButton = 'hidden invisible' ;
        $this->showWebMobileFilterDropdown = 'hidden' ;
        $this->reset('webMobileFiltered');
      }

    }

    public function render()
    {
      return view('livewire.transaction-details',[
        'name' => 'tets',
        'periodSelectorText' => ($this->period) > 1 ? 'Last '.$this->period.' Days' : 'Yesterday',
        //'transactions' => Transaction::search('transaction_id',$this->searchTransactions)->paginate(10),
        'transactions' => Transaction::query()
          ->where('transaction_date', '>', now()->subDays($this->period)->endOfDay())
          ->when($this->paymentGatewaysFiltered, fn($query,$pg) => $query->whereIn('payment_gateway',$pg))
          ->when($this->consentFlagsFiltered, fn($query,$cf) => $query->whereIn('consent_flag',$cf))
          ->when($this->merchantCategoryCodesFiltered, fn($query,$mcc) => $query->whereIn('mcc',$mcc))
          ->when($this->transactionStatusesFiltered, fn($query,$ts) => $query->whereIn('transaction_status',$ts))
          ->when($this->webMobileFiltered, fn($query,$wm) => $query->whereIn('web_mobile',$wm))
          ->orderBy($this->sortField,$this->sortDirection)->paginate(10),
        
      ]);
    }
}
