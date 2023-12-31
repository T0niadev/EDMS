@extends('layouts.app')

@section('content')
  <main class="main-content w-full px-[var(--margin-x)] pb-8">
    <div class="pt-6">
      @if (session('error'))
        <div id="alert-2" class="flex p-4 mb-4 bg-red-100 rounded-lg dark:bg-red-200" role="alert">
          <svg aria-hidden="true" class="flex-shrink-0 w-5 h-5 text-red-700 dark:text-red-800" fill="currentColor"
            viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd"
              d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z"
              clip-rule="evenodd"></path>
          </svg>
          <span class="sr-only">Info</span>
          <div class="ml-3 text-sm font-medium text-red-700 dark:text-red-800">
            {{ session('error') }}
          </div>
          <button type="button"
            class="ml-auto -mx-1.5 -my-1.5 bg-red-100 text-red-500 rounded-lg focus:ring-2 focus:ring-red-400 p-1.5 hover:bg-red-200 inline-flex h-8 w-8 dark:bg-red-200 dark:text-red-600 dark:hover:bg-red-300"
            data-dismiss-target="#alert-2" aria-label="Close">
            <span class="sr-only">Close</span>
            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd"
                d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                clip-rule="evenodd"></path>
            </svg>
          </button>
        </div>
      @elseif(session('success'))
        <div id="alert-3" class="flex p-4 mb-4 bg-green-100 rounded-lg dark:bg-green-200" role="alert">
          <svg aria-hidden="true" class="flex-shrink-0 w-5 h-5 text-green-700 dark:text-green-800" fill="currentColor"
            viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd"
              d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z"
              clip-rule="evenodd"></path>
          </svg>
          <span class="sr-only">Info</span>
          <div class="ml-3 text-sm font-medium text-green-700 dark:text-green-800">
            {{ session('success') }}
          </div>
          <button type="button"
            class="ml-auto -mx-1.5 -my-1.5 bg-green-100 text-green-500 rounded-lg focus:ring-2 focus:ring-green-400 p-1.5 hover:bg-green-200 inline-flex h-8 w-8 dark:bg-green-200 dark:text-green-600 dark:hover:bg-green-300"
            data-dismiss-target="#alert-3" aria-label="Close">
            <span class="sr-only">Close</span>
            <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
              xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd"
                d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                clip-rule="evenodd"></path>
            </svg>
          </button>
        </div>
      @elseif(session('info'))
        <div id="alert-5" class="flex p-4 bg-gray-100 rounded-lg dark:bg-gray-700" role="alert">
          <svg aria-hidden="true" class="flex-shrink-0 w-5 h-5 text-gray-700 dark:text-gray-300" fill="currentColor"
            viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd"
              d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z"
              clip-rule="evenodd"></path>
          </svg>
          <span class="sr-only">Info</span>
          <div class="ml-3 text-sm font-medium text-gray-700 dark:text-gray-300">
            {{ session('info') }}
          </div>
          <button type="button"
            class="ml-auto -mx-1.5 -my-1.5 bg-gray-100 text-gray-500 rounded-lg focus:ring-2 focus:ring-gray-400 p-1.5 hover:bg-gray-200 inline-flex h-8 w-8 dark:bg-gray-700 dark:text-gray-300 dark:hover:bg-gray-800 dark:hover:text-white"
            data-dismiss-target="#alert-5" aria-label="Close">
            <span class="sr-only">Dismiss</span>
            <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
              xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd"
                d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                clip-rule="evenodd"></path>
            </svg>
          </button>
        </div>
      @endif
    </div>
    <div class="mt-5 grid grid-cols-12 gap-4 sm:gap-5 lg:gap-6">
      <div class="col-span-12 space-y-4 sm:space-y-5 lg:col-span-8 lg:space-y-6 xl:col-span-9">


        <div>
          <div class="flex items-center justify-between">
            <h3 class="text-xl font-medium text-slate-800 dark:text-navy-50">
              Available Packages
            </h3>

            <div class="hidden w-full max-w-xs justify-between space-x-4 text-slate-700 dark:text-navy-100 sm:flex"
              x-data="{ activeTab: 'tabAll' }">

            </div>

            <div class="flex space-x-1 sm:hidden">
 
            </div>
          </div>

          <div class="mt-4 grid grid-cols-1 gap-4 sm:grid-cols-2 sm:gap-5 lg:grid-cols-3 lg:gap-6">
            @foreach ($packages as $package)
              <div class="card group p-3">
                <div class="flex items-center justify-between space-x-2 px-1">
                  <div class="flex items-center space-x-2">

                    <div>
                      <a href="#" class="font-medium text-slate-600 line-clamp-1 dark:text-navy-100">
                        {{ $package['name'] }}</a>
                      <p class="text-xs text-primary dark:text-accent-light">
                        Get {{ $package['roi'] }}% of your investment after {{ $package['description'] }}
                      </p>
                    </div>
                  </div>
                  <button x-data="{ isLiked: false }" @click="isLiked = !isLiked"
                    class="btn h-9 w-9 bg-slate-150 p-0 text-slate-800 hover:bg-slate-200 focus:bg-slate-200 active:bg-slate-200/80 dark:bg-navy-500 dark:text-navy-50 dark:hover:bg-navy-450 dark:focus:bg-navy-450 dark:active:bg-navy-450/90">
                    <i x-show="!isLiked" class="fa-regular fa-heart text-lg"></i>
                    <i x-show="isLiked" class="fa-solid fa-heart text-lg text-error"></i>
                  </button>
                </div>
                <div>
                  <div class="relative mt-4">
                    <img class="h-56 w-full rounded-lg object-cover object-center"
                      src="{{ asset('assets/images/blogs/blog-detail.jpg') }}" alt="image" />
                    <div
                      class="absolute top-0 h-full w-full rounded-lg bg-black/20 opacity-0 transition-opacity duration-300 group-hover:opacity-100">
                    </div>
                    <div
                      class="absolute top-0 flex h-full w-full items-center justify-center opacity-0 group-hover:opacity-100">
                      <button
                        class="btn min-w-[7rem] border border-white/10 bg-white/20 text-white backdrop-blur hover:bg-white/30 focus:bg-white/30">
                        <a href="{{ url('/investment/add', $package->id) }}"> Invest</a>
                      </button>
                    </div>
                  </div>
                  <div class="mt-3 px-1">
                    <a href="#"
                      class="text-base font-medium text-slate-700 line-clamp-1 hover:text-primary focus:text-primary dark:text-navy-100 dark:hover:text-accent-light dark:focus:text-accent-light">
                      {{ $package['roi'] }}% after {{ $package['description'] }}
                    </a>
                    <div class="my-3 h-px bg-slate-200 dark:bg-navy-500"></div>
                    <div class="flex justify-between">
                      <div>
                        <!-- <p class="text-xs text-slate-400 dark:text-navy-300">
                          Minimum Deposit: ${{ $package['min_amount'] }}

                        </p> -->
                        <p class="text-base font-medium text-slate-700 dark:text-navy-100">
                          Minimum Deposit: ${{ $package['min_amount'] }}
                        </p>
                      </div>
                      <div class="text-right">
                        <p class="text-xs text-slate-400 dark:text-navy-300">
                          invest today
                        </p>
                        <p class="text-base font-medium text-primary dark:text-accent-light">

                        </p>
                      </div>
                    </div>

                  </div>
                </div>
              </div>
            @endforeach
          </div>
        </div>





        <div>
          <div class="flex items-center justify-between">
            <h3 class="text-xl font-medium text-slate-800 dark:text-navy-50">
              My Investments
            </h3>


          </div>
          <p class="text-xs text-primary dark:text-accent-light mt-2">
            Your investments will appear here. Ensure that you have enough in your wallet before placing a bid for desired
            investment package.
          </p>
          <!-- <div class="mt-4 grid grid-cols-2 gap-4 sm:grid-cols-4 sm:gap-5">
                          @foreach ($investments as $investment)
  <div class="card items-center pb-5 text-center">
                                  <img
                                      class="h-24 w-full rounded-t-lg object-cover object-center"
                                      src="{{ asset('assets/images/payments/invest3.png') }}"
                                      alt="image"
                                  />
                                   {{ $investment->package->name }}
                                  <div class="mt-1.5 px-2">
                                  <a
                                      href="#"
                                      class="text-base font-medium text-slate-700 line-clamp-1 hover:text-primary focus:text-primary dark:text-navy-100 dark:hover:text-accent-light dark:focus:text-accent-light"
                                  >
                                  </a>


                                  <p class="font-medium text-slate-600 line-clamp-1 dark:text-navy-100">

                                  </p>

                                  <p class="font-medium text-slate-600 line-clamp-1 dark:text-navy-100">
                                  Amount Invested:  ${{ $investment['amount'] }}
                                  </p>

                                  <p class="font-medium text-slate-600 line-clamp-1 dark:text-navy-100">

                                  </p>

                                  <p class="font-medium text-slate-600 line-clamp-1 dark:text-navy-100">
                                     Total Returns:  ${{ $investment['total_return'] }}
                                  </p>

                                  <p class="font-medium text-slate-600 line-clamp-1 dark:text-navy-100">

                                  </p>

                                  <p class="font-medium text-slate-600 line-clamp-1 dark:text-navy-100">
                                     Withdrawal Date:  {{ $investment['withdrawal_date'] }}
                                  </p>

                                  <p class="font-medium text-slate-600 line-clamp-1 dark:text-navy-100">

                                  </p>

                                  <button
                                      class="btn mt-4 h-8 min-w-[7rem] rounded-full bg-primary font-medium text-white hover:bg-primary-focus focus:bg-primary-focus active:bg-primary-focus/90 dark:bg-accent dark:hover:bg-accent-focus dark:focus:bg-accent-focus dark:active:bg-accent/90"
                                  >
                                      Check Withdrawal status
                                  </button>
                                  </div>
                              </div>
  @endforeach


                      </div> -->
          <table class="is-hoverable w-full text-left mt-4">
            <thead>
              <tr>
                <th
                  class="whitespace-nowrap bg-slate-200 px-4 py-3 font-semibold uppercase text-slate-800 dark:bg-navy-800 dark:text-navy-100 lg:px-5">
                  Package Name
                </th>
                <th
                  class="whitespace-nowrap bg-slate-200 px-4 py-3 font-semibold uppercase text-slate-800 dark:bg-navy-800 dark:text-navy-100 lg:px-5">
                  ROI
                </th>
                <th
                  class="whitespace-nowrap bg-slate-200 px-4 py-3 font-semibold uppercase text-slate-800 dark:bg-navy-800 dark:text-navy-100 lg:px-5">
                  Investment Amount
                </th>

                <th
                  class="whitespace-nowrap bg-slate-200 px-4 py-3 font-semibold uppercase text-slate-800 dark:bg-navy-800 dark:text-navy-100 lg:px-5">
                  Expected Total Returns
                </th>


                <th
                  class="whitespace-nowrap bg-slate-200 px-4 py-3 font-semibold uppercase text-slate-800 dark:bg-navy-800 dark:text-navy-100 lg:px-5">
                  Status
                </th>
                <th
                  class="whitespace-nowrap bg-slate-200 px-4 py-3 font-semibold uppercase text-slate-800 dark:bg-navy-800 dark:text-navy-100 lg:px-5">
                  Start Date
                </th>
                <th
                  class="whitespace-nowrap bg-slate-200 px-4 py-3 font-semibold uppercase text-slate-800 dark:bg-navy-800 dark:text-navy-100 lg:px-5">
                  Expected Withdrawal Date
                </th>
              </tr>
            </thead>
            @foreach ($investments as $investment)
              <tbody>
                <tr class="border-y border-transparent border-b-slate-200 dark:border-b-navy-500">
                  <td class="whitespace-nowrap px-4 py-3 sm:px-5">
                    {{ $investment->package->name }}
                  </td>
                  <td class="whitespace-nowrap px-4 py-3 sm:px-5">
                    {{ $investment->package->roi }} %
                  </td>
                  <td class="whitespace-nowrap px-4 py-3 font-medium text-slate-700 dark:text-navy-100 sm:px-5">
                    ${{ $investment['amount'] }}
                  </td>
                  <td class="whitespace-nowrap px-4 py-3 sm:px-5">
                    ${{ $investment['total_return'] }}
                  </td>
                  <td class="whitespace-nowrap px-4 py-3 sm:px-5">
                    <div class="badge space-x-2.5 px-0 text-primary dark:text-accent-light">
                      <div class="h-2 w-2 rounded-full bg-current"></div>
                      <span>{{ $investment['status'] }}</span>
                    </div>
                  </td>
                  <td class="whitespace-nowrap px-4 py-3 sm:px-5">
                    {{ $investment['start_date'] }}
                  </td>
                  <td class="whitespace-nowrap px-4 py-3 sm:px-5">
                    {{ $investment['withdrawal_date'] }}
                  </td>
                </tr>
            @endforeach


            </tbody>
          </table>
        </div>



      </div>
      <div class="col-span-12 space-y-4 sm:space-y-5 lg:col-span-4 lg:space-y-6 xl:col-span-3">
        <div class="card bg-gradient-to-br from-info to-info-focus p-4">
          <div class="flex justify-between text-white">
            <i class="fa-brands fa-bitcoin text-2xl"></i>
            <p>**** **** 4995</p>
          </div>
          <div class="mt-10">
            <p class="text-sky-100">Bitcoin</p>
            <div class="flex justify-between">
              <p class="text-2xl font-semibold text-white">2.656651</p>
              <img src="{{ asset('assets/images/payments/cc-visa-white.svg') }}" class="w-10 rounded-lg"
                alt="creditcard" />
            </div>
          </div>
        </div>


        <div class="card p-3">
          <img class="h-56 w-full rounded-lg object-cover object-center" {{-- src="{{ asset('assets/images/object/object-18.jpg' ) }}" --}}
            src="{{ asset('assets/images/blogs/image-01.jpg') }}" alt="image" />
          <div class="mt-3 p-1">
            <div class="flex items-center justify-between space-x-1">
              <a href="#"
                class="text-base font-medium text-slate-700 line-clamp-1 hover:text-primary focus:text-primary dark:text-navy-100 dark:hover:text-accent-light dark:focus:text-accent-light">
                Latest Investment Packages
              </a>
              <button x-data="{ isLiked: true }" @click="isLiked = !isLiked"
                class="btn h-7 w-7 rounded-full bg-slate-150 p-0 text-slate-800 hover:bg-slate-200 focus:bg-slate-200 active:bg-slate-200/80 dark:bg-navy-500 dark:text-navy-50 dark:hover:bg-navy-450 dark:focus:bg-navy-450 dark:active:bg-navy-450/90">
                <i x-show="!isLiked" class="fa-regular fa-heart"></i>
                <i x-show="isLiked" class="fa-solid fa-heart text-error"></i>
              </button>
            </div>
            <p class="mt-2 text-xs+">
              Check out the latest investment package available.
            </p>

            <div class="mt-5 flex items-center justify-between space-x-2">
              <div class="flex items-center space-x-2">
                <div class="avatar h-10 w-10">
                  <img class="rounded-full" src="{{ asset('assets/images/blogs/image-01.jpg') }}" alt="avatar" />
                </div>
                <div>
                  <a href="#"
                    class="font-medium text-slate-600 line-clamp-1 dark:text-navy-100">{{ $pack['name'] }}</a>
                  <p class="text-xs text-slate-400 dark:text-navy-300">
                    {{ $pack['roi'] }}% after {{ $pack['duration'] }} {{ $pack['duration_mode'] }}
                  </p>
                </div>
              </div>
              <button
                class="btn h-7 rounded-full bg-primary/10 px-2.5 text-xs font-medium text-primary hover:bg-primary/20 focus:bg-primary/20 active:bg-primary/25 dark:bg-accent-light/10 dark:text-accent-light dark:hover:bg-accent-light/20 dark:focus:bg-accent-light/20 dark:active:bg-accent-light/25">

              </button>
            </div>
            <p class="mt-6 font-medium">Package expires in</p>
            <div
              class="mt-3 grid grid-cols-3 gap-3 text-center font-inter text-4xl font-semibold text-primary dark:text-accent-light">
              <div class="grid grid-cols-2 gap-1">
                <div class="rounded-lg bg-primary/10 py-3 dark:bg-accent-light/10">
                  0
                </div>
                <div class="rounded-lg bg-primary/10 py-3 dark:bg-accent-light/10">
                  9
                </div>
              </div>
              <div class="grid grid-cols-2 gap-1">
                <div class="rounded-lg bg-primary/10 py-3 dark:bg-accent-light/10">
                  3
                </div>
                <div class="rounded-lg bg-primary/10 py-3 dark:bg-accent-light/10">
                  5
                </div>
              </div>
              <div class="grid grid-cols-2 gap-1">
                <div class="rounded-lg bg-primary/10 py-3 dark:bg-accent-light/10">
                  4
                </div>
                <div class="rounded-lg bg-primary/10 py-3 dark:bg-accent-light/10">
                  5
                </div>
              </div>
            </div>
            <div class="mt-2 grid grid-cols-3 gap-3 text-center text-xs+">
              <p>months</p>
              <p>days</p>
              <p>hours</p>
            </div>
            <div class="my-5 h-px bg-slate-200 dark:bg-navy-500"></div>
            <div class="flex items-center justify-between">
              <p class="text-lg font-medium text-slate-700 dark:text-navy-100">
                Mininimum of ${{ $pack['min_amount'] }}
              </p>
              <button
                class="btn h-9 min-w-[7rem] rounded-full bg-primary font-medium text-white hover:bg-primary-focus focus:bg-primary-focus active:bg-primary-focus/90 dark:bg-accent dark:hover:bg-accent-focus dark:focus:bg-accent-focus dark:active:bg-accent/90">
                <a href="{{ url('/investment/add', $pack->id) }}"> Place a bid</a>

              </button>
            </div>
          </div>
        </div>


      </div>
    </div>
  </main>
@endsection
