
 Period in Transaction-Status-Count : {{$period}}
 Total Transactions = {{ $total_transactions }}
<div class="py-2" wire:poll>
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    <div class="grid grid-cols-10 gap-8 text-center">

                        <div class="col-span-2 justify-center scale-100 p-2 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
                          <div>
                                <h2 class="text-sm font-semibold text-gray-900 dark:text-white">Total Transactions</h2>
                                <p class=" text-gray-500 dark:text-gray-400 text-4xl leading-relaxed">{{$total_transactions}}</p>
                          </div>
                        </div>
                        <div class="col-span-2 justify-center scale-100 p-2 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
                          <div>
                                <h2 class=" text-sm font-semibold text-gray-900 dark:text-white">Successfull Transactions</h2>
                                <p class=" text-gray-500 dark:text-gray-400 text-4xl leading-relaxed">{{$successfull_transactions}}</p>
                          </div>
                        </div>
                        <div class="col-span-2 justify-center scale-100 p-2 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
                          <div>
                                <h2 class=" text-sm font-semibold text-gray-900 dark:text-white">Failed Transactions</h2>
                                <p class=" text-gray-500 dark:text-gray-400 text-4xl leading-relaxed">{{$failed_transactions}}</p>
                          </div>
                        </div>
                        <div class="col-span-2 justify-center scale-100 p-2 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
                          <div>
                                <h2 class=" text-sm font-semibold text-gray-900 dark:text-white">Pending Transactions</h2>
                                <p class=" text-gray-500 dark:text-gray-400 text-4xl leading-relaxed">{{$pending_transactions}}</p>
                          </div>
                        </div>
                        <div class="col-span-2 justify-center scale-100 text-sm p-2 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
                          <div>
                                <h2 class=" font-semibold text-gray-900 dark:text-white">Suspended Transactions</h2>
                                <p class=" text-gray-500 dark:text-gray-400 text-4xl leading-relaxed">{{$suspended_transactions}}</p>
                          </div>
                        </div>

</div>
</div>
</div>
