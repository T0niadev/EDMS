@extends('layouts.app')

@section('content')
  <!-- Main Content Wrapper -->
  <main class="main-content w-full px-[var(--margin-x)] pb-8">


    <div class="mt-4 sm:mt-5 lg:mt-6">
      <div class="flex items-center justify-between">
        <h2 class="text-base font-medium tracking-wide text-slate-700 line-clamp-1 dark:text-navy-100">
      </div>
    </div>

    <div x-data="{ isFilterExpanded: false }">
      <!-- <div class="flex items-center justify-between">
            <h2
              class="text-base font-medium tracking-wide text-slate-700 line-clamp-1 dark:text-navy-100"
            >

            </h2>
            <div class="flex">
              <div class="flex items-center" x-data="{ isInputActive: false }">
                <label class="block">
                  <input
                    x-effect="isInputActive === true && $nextTick(() => { $el.focus()});"
                    :class="isInputActive ? 'w-32 lg:w-48' : 'w-0'"
                    class="form-input bg-transparent px-1 text-right transition-all duration-100 placeholder:text-slate-500 dark:placeholder:text-navy-200"
                    placeholder="Search here..."
                    type="text"
                  />
                </label>
                <button
                  @click="isInputActive = !isInputActive"
                  class="btn h-8 w-8 rounded-full p-0 hover:bg-slate-300/20 focus:bg-slate-300/20 active:bg-slate-300/25 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25"
                >
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    class="h-4.5 w-4.5"
                    fill="none"
                    viewbox="0 0 24 24"
                    stroke="currentColor"
                  >
                    <path
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      stroke-width="1.5"
                      d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"
                    />
                  </svg>
                </button>
              </div>

              <button
                @click="isFilterExpanded = !isFilterExpanded"
                class="btn h-8 w-8 rounded-full p-0 hover:bg-slate-300/20 focus:bg-slate-300/20 active:bg-slate-300/25 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25"
              >
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  class="h-4.5 w-4.5"
                  fill="none"
                  viewbox="0 0 24 24"
                >
                  <path
                    stroke="currentColor"
                    stroke-linecap="round"
                    stroke-width="2"
                    d="M18 11.5H6M21 4H3m6 15h6"
                  />
                </svg>
              </button>
            </div>
          </div>
          <div x-show="isFilterExpanded" x-collapse>
            <div class="max-w-2xl py-3">
              <div
                class="grid grid-cols-1 gap-4 sm:grid-cols-2 sm:gap-5 lg:gap-6"
              >
                <label class="block">
                  <span>Transaction type:</span>
                  <div class="relative mt-1.5 flex">
                    <input
                      class="form-input peer w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 pl-9 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                      placeholder="Enter Transaction Type"
                      type="text"
                    />
                    <span
                      class="pointer-events-none absolute flex h-full w-10 items-center justify-center text-slate-400 peer-focus:text-primary dark:text-navy-300 dark:peer-focus:text-accent"
                    >
                      <svg
                        xmlns="http://www.w3.org/2000/svg"
                        class="h-4.5 w-4.5 transition-colors duration-200"
                        fill="none"
                        viewbox="0 0 24 24"
                      >
                        <path
                          stroke="currentColor"
                          stroke-width="1.5"
                          d="M5 19.111c0-2.413 1.697-4.468 4.004-4.848l.208-.035a17.134 17.134 0 015.576 0l.208.035c2.307.38 4.004 2.435 4.004 4.848C19 20.154 18.181 21 17.172 21H6.828C5.818 21 5 20.154 5 19.111zM16.083 6.938c0 2.174-1.828 3.937-4.083 3.937S7.917 9.112 7.917 6.937C7.917 4.764 9.745 3 12 3s4.083 1.763 4.083 3.938z"
                        />
                      </svg>
                    </span>
                  </div>
                </label>
                <label class="block">
                  <span>Transaction ID:</span>
                  <div class="relative mt-1.5 flex">
                    <input
                      class="form-input peer w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 pl-9 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                      placeholder="Enter Transaction ID"
                      type="text"
                    />
                    <span
                      class="pointer-events-none absolute flex h-full w-10 items-center justify-center text-slate-400 peer-focus:text-primary dark:text-navy-300 dark:peer-focus:text-accent"
                    >
                      <svg
                        xmlns="http://www.w3.org/2000/svg"
                        class="h-4.5 w-4.5 transition-colors duration-200"
                        fill="none"
                        viewbox="0 0 24 24"
                      >
                        <path
                          stroke="currentColor"
                          stroke-width="1.5"
                          d="M3.082 13.944c-.529-.95-.793-1.425-.793-1.944 0-.519.264-.994.793-1.944L4.43 7.63l1.426-2.381c.559-.933.838-1.4 1.287-1.66.45-.259.993-.267 2.08-.285L12 3.26l2.775.044c1.088.018 1.631.026 2.08.286.45.26.73.726 1.288 1.659L19.57 7.63l1.35 2.426c.528.95.792 1.425.792 1.944 0 .519-.264.994-.793 1.944L19.57 16.37l-1.426 2.381c-.559.933-.838 1.4-1.287 1.66-.45.259-.993.267-2.08.285L12 20.74l-2.775-.044c-1.088-.018-1.631-.026-2.08-.286-.45-.26-.73-.726-1.288-1.659L4.43 16.37l-1.35-2.426z"
                        />
                        <circle
                          cx="12"
                          cy="12"
                          r="3"
                          stroke="currentColor"
                          stroke-width="1.5"
                        />
                      </svg>
                    </span>
                  </div>
                </label>
                <label class="block">
                  <span>From:</span>
                  <div class="relative mt-1.5 flex">
                    <input
                      x-flatpickr
                      class="form-input peer w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 pl-9 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                      placeholder="Choose start date..."
                      type="text"
                    />
                    <span
                      class="pointer-events-none absolute flex h-full w-10 items-center justify-center text-slate-400 peer-focus:text-primary dark:text-navy-300 dark:peer-focus:text-accent"
                    >
                      <svg
                        xmlns="http://www.w3.org/2000/svg"
                        class="h-5 w-5 transition-colors duration-200"
                        fill="none"
                        viewbox="0 0 24 24"
                        stroke="currentColor"
                        stroke-width="1.5"
                      >
                        <path
                          stroke-linecap="round"
                          stroke-linejoin="round"
                          d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"
                        />
                      </svg>
                    </span>
                  </div>
                </label>
                <label class="block">
                  <span>To:</span>
                  <div class="relative mt-1.5 flex">
                    <input
                      x-flatpickr
                      class="form-input peer w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 pl-9 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                      placeholder="Choose start date..."
                      type="text"
                    />
                    <div
                      class="pointer-events-none absolute flex h-full w-10 items-center justify-center text-slate-400 peer-focus:text-primary dark:text-navy-300 dark:peer-focus:text-accent"
                    >
                      <svg
                        xmlns="http://www.w3.org/2000/svg"
                        class="h-5 w-5 transition-colors duration-200"
                        fill="none"
                        viewbox="0 0 24 24"
                        stroke="currentColor"
                        stroke-width="1.5"
                      >
                        <path
                          stroke-linecap="round"
                          stroke-linejoin="round"
                          d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"
                        />
                      </svg>
                    </div>
                  </div>
                </label>
                <div class="sm:col-span-2">
                  <span>Transaction Status:</span>
                  <div
                    class="mt-2 grid grid-cols-1 gap-4 sm:grid-cols-4 sm:gap-5 lg:gap-6"
                  >
                    <label class="inline-flex items-center space-x-2">
                      <input
                        class="form-checkbox is-basic h-5 w-5 rounded border-slate-400/70 checked:border-secondary checked:bg-secondary hover:border-secondary focus:border-secondary dark:border-navy-400 dark:checked:border-secondary-light dark:checked:bg-secondary-light dark:hover:border-secondary-light dark:focus:border-secondary-light"
                        type="checkbox"
                      />
                      <span>Upcoming</span>
                    </label>
                    <label class="inline-flex items-center space-x-2">
                      <input
                        class="form-checkbox is-basic h-5 w-5 rounded border-slate-400/70 checked:border-primary checked:bg-primary hover:border-primary focus:border-primary dark:border-navy-400 dark:checked:border-accent dark:checked:bg-accent dark:hover:border-accent dark:focus:border-accent"
                        type="checkbox"
                      />
                      <span>In Progress</span>
                    </label>
                    <label class="inline-flex items-center space-x-2">
                      <input
                        checked
                        class="form-checkbox is-basic h-5 w-5 rounded border-slate-400/70 checked:!border-success checked:bg-success hover:!border-success focus:!border-success dark:border-navy-400"
                        type="checkbox"
                      />
                      <span>Complete</span>
                    </label>
                    <label class="inline-flex items-center space-x-2">
                      <input
                        checked
                        class="form-checkbox is-basic h-5 w-5 rounded border-slate-400/70 checked:!border-error checked:bg-error hover:!border-error focus:!border-error dark:border-navy-400"
                        type="checkbox"
                      />
                      <span>Cancelled</span>
                    </label>
                  </div>
                </div>
              </div>
              <div class="mt-4 space-x-1 text-right">
                <button
                  @click="isFilterExpanded = ! isFilterExpanded"
                  class="btn font-medium text-slate-700 hover:bg-slate-300/20 active:bg-slate-300/25 dark:text-navy-100 dark:hover:bg-navy-300/20 dark:active:bg-navy-300/25"
                >
                  Cancel
                </button>

                <button
                  @click="isFilterExpanded = ! isFilterExpanded"
                  class="btn bg-primary font-medium text-white hover:bg-primary-focus focus:bg-primary-focus active:bg-primary-focus/90 dark:bg-accent dark:hover:bg-accent-focus dark:focus:bg-accent-focus dark:active:bg-accent/90"
                >
                  Apply
                </button>
              </div>
            </div>
          </div> -->
      <p class="text-xs text-primary dark:text-accent-light mt-2">
        Your transaction history will appear here.
      </p>
      <div class="card mt-3">

        <div class="is-scrollbar-hidden min-w-full overflow-x-auto">
          <table class="is-hoverable w-full text-left">
            <thead>
              <tr>

                <th
                  class="whitespace-nowrap bg-slate-200 px-4 py-3 font-semibold uppercase text-slate-800 dark:bg-navy-800 dark:text-navy-100 lg:px-5">
                  Transaction Type
                </th>
                <th
                  class="whitespace-nowrap bg-slate-200 px-4 py-3 font-semibold uppercase text-slate-800 dark:bg-navy-800 dark:text-navy-100 lg:px-5">
                  Transaction Amount
                </th>

                <th
                  class="whitespace-nowrap bg-slate-200 px-4 py-3 font-semibold uppercase text-slate-800 dark:bg-navy-800 dark:text-navy-100 lg:px-5">
                  Status
                </th>
                <th
                  class="whitespace-nowrap bg-slate-200 px-4 py-3 font-semibold uppercase text-slate-800 dark:bg-navy-800 dark:text-navy-100 lg:px-5">
                  Transaction Date
                </th>
              </tr>
            </thead>
            @foreach ($deposits as $deposit)
              <tbody>
                <tr class="border-y border-transparent border-b-slate-200 dark:border-b-navy-500">


                  <td class="whitespace-nowrap px-4 py-3 sm:px-5">
                    Deposit
                  </td>

                  <td class="whitespace-nowrap px-4 py-3 font-medium text-slate-700 dark:text-navy-100 sm:px-5">
                    ${{ $deposit['amount'] }}
                  </td>

                  <td class="whitespace-nowrap px-4 py-3 sm:px-5">
                    @if ($deposit['status'] == 'pending')
                      <div class="badge space-x-2.5 px-0 text-red dark:text-accent-light">
                        <span class="bg-red-100 text-red-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded dark:bg-red-200 dark:text-red-900">Incomplete</span>
                      </div>
                    @elseif ($deposit['status'] == 'processing')
                      <div class="badge space-x-2.5 px-0 text-primary dark:text-accent-light">
                        <span class="bg-yellow-100 text-yellow-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded dark:bg-yellow-200 dark:text-yellow-900">{{ ucfirst($deposit['status']) }}</span>
                      </div>
                      @elseif ($deposit['status'] == 'annulled')
                      <div class="badge space-x-2.5 px-0 text-primary dark:text-accent-light">
                        <span class="bg-pink-100 text-pink-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded dark:bg-pink-200 dark:text-pink-900">{{ ucfirst($deposit['status']) }}</span>
                      </div>
                      @elseif ($deposit['status'] == 'verified')
                      <div class="badge space-x-2.5 px-0 text-primary dark:text-accent-light">
                        <span class="bg-green-100 text-green-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded dark:bg-green-200 dark:text-green-900">{{ ucfirst($deposit['status']) }}</span>
                      </div>
                      @endif
                  </td>
                  <td class="whitespace-nowrap px-4 py-3 sm:px-5">
                    {{ $deposit['created_at'] }}
                  </td>
                </tr>
            @endforeach

            @foreach ($withdrawals as $withdrawal)
              <tr class="border-y border-transparent border-b-slate-200 dark:border-b-navy-500">


                <td class="whitespace-nowrap px-4 py-3 sm:px-5">
                  Withdrawal
                </td>

                <td class="whitespace-nowrap px-4 py-3 font-medium text-slate-700 dark:text-navy-100 sm:px-5">
                  ${{ $withdrawal['amount'] }}
                </td>

                <td class="whitespace-nowrap px-4 py-3 sm:px-5">
                    @if ($withdrawal['status'] == 'annulled')
                    <div class="badge space-x-2.5 px-0 text-red dark:text-accent-light">
                      <span class="bg-red-100 text-red-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded dark:bg-red-200 dark:text-red-900">Annulled</span>
                    </div>
                  @elseif ($withdrawal['status'] == 'processing')
                    <div class="badge space-x-2.5 px-0 text-primary dark:text-accent-light">
                      <span class="bg-yellow-100 text-yellow-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded dark:bg-yellow-200 dark:text-yellow-900">{{ ucfirst($withdrawal['status']) }}</span>
                    </div>

                    @elseif ($withdrawal['status'] == 'settled')
                    <div class="badge space-x-2.5 px-0 text-primary dark:text-accent-light">
                      <span class="bg-green-100 text-green-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded dark:bg-green-200 dark:text-green-900">{{ ucfirst($withdrawal['status']) }}</span>
                    </div>
                    @endif
                </td>
                <td class="whitespace-nowrap px-4 py-3 sm:px-5">
                  {{ $withdrawal['created_at'] }}
                </td>
              </tr>
            @endforeach


            </tbody>
          </table>
        </div>


      </div>
    </div>
  </main>
@endsection
