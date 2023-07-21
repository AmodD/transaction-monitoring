<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Arr;

use App\Models\PaymentGateway;
use App\Models\Transaction;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Transaction>
 */
class TransactionFactory extends Factory
{
  protected $model = Transaction::class;


    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        return [
          'payment_gateway' => Arr::random(PaymentGateway::all()->pluck('code')->toArray()) ,
          'transaction_id' => $this->faker->ean8(),
          'token_requester_id' => $this->faker->uuid(),
          'expiry_token' => $this->faker->creditCardExpirationDateString(),
          'consent_flag' => $this->faker->boolean(),
          'transaction_status' => Arr::random(['successfull','successfull','failed','successfull','successfull','successfull','pending','successfull','successfull','successfull','successfull',]),
          'transaction_date' => $this->faker->dateTimeBetween('-12 week', 'now'),
        ];
    }

}
