<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Transaction;

class TransactionStatusCount extends Component
{
    public $period = 30;

    protected $listeners = ['period'];

    public function period($period)
    {
      $this->period = $period;
    }

    public function mount($period)
    {
      $this->period = $period;
    }

    private function format_number_in_k_notation(int $number): string
    {
        $suffixByNumber = function () use ($number) {
            if ($number < 1000) {
                return sprintf('%d', $number);
            }

            if ($number < 1000000) {
              //return sprintf('%d%s', floor($number / 1000), 'K+');
                return sprintf('%.2f%s', $number/1000, ' K');
            }

            if ($number >= 1000000 && $number < 1000000000) {
                return sprintf('%.2f%s', floor($number / 1000000), 'M+');
            }

            if ($number >= 1000000000 && $number < 1000000000000) {
                return sprintf('%.2f%s', floor($number / 1000000000), 'B+');
            }

            return sprintf('%.2f%s', floor($number / 1000000000000), 'T+');
        };

        return $suffixByNumber();
    }

    public function render()
    {
      $transactions = Transaction::query()->where('transaction_date', '>', now()->subDays($this->period)->startOfDay())->get();

      return view('livewire.transaction-status-count',[
        'total_transactions' => $this->format_number_in_k_notation($transactions->count()),
        //'total_transactions' => '12',
        'successfull_transactions' => $this->format_number_in_k_notation(Transaction::query()->where('transaction_status', 'successfull')->count()),
        'failed_transactions' => $this->format_number_in_k_notation(Transaction::query()->where('transaction_status', 'failed')->count()),
        'pending_transactions' => $this->format_number_in_k_notation(Transaction::query()->where('transaction_status', 'pending')->count()),
        'suspended_transactions' => $this->format_number_in_k_notation(Transaction::query()->where('transaction_status', 'suspended')->count()),
      ]);
    }
}
