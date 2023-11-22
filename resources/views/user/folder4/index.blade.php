@extends('layouts.app')

@section('content')

  <div class="p-4 h-full my-6 mx-16 sm:ml-64 lg-64">
    <div class="p-4 border-2 border-gray-200 border rounded-lg dark:border-gray-700 mt-14">
      <div class="flex h-13 mb-1">
        <p class="text-2xl text-gray-400 dark:text-gray-500">
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
        </p>
      </div>

      <div class="flex my-1 h-10 mb-2 rounded border-bottom">
          <p class="text-2xl text-gray-900 dark:text-white">
          <a href="{{ url($folderc->folderb->foldera->department->id, 'folders') }}"  >{{$folderc->folderb->foldera->department->name}} >></a>
              <a href="{{ url($folderc->folderb->foldera->id, 'subfolders') }}" > {{$folderc->folderb->foldera->name}} >> </a>
              <a href="{{ url($folderc->folderb->id, 'subfolders/2ndtier') }}"> {{$folderc->folderb->name}} >> </a>
              {{$folderc->name }}
          </p>
      </div>
      <div class="flex h-10 mb-10 rounded">
          <button onclick="document.getElementById('file4-modal').style.display='block'"
            class="btn  h-9 min-w-[7rem] mt-2 rounded dark:text-white font-medium border text-gray-900">
             Upload Document
          </button>
      </div>
      <div class="grid grid-cols-7 gap-2 mb-4">
          @foreach ($folderds as $folderd)
            <div class="h-30 rounded">
              <div>
                <p class="text-2xl text-gray-400 dark:text-gray-500">
                  <a href="{{ asset($folderd->document) }}">
                      <svg class="h-10 w-9 rounded-lg object-cover object-center" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 14.25v-2.625a3.375 3.375 0 00-3.375-3.375h-1.5A1.125 1.125 0 0113.5 7.125v-1.5a3.375 3.375 0 00-3.375-3.375H8.25m2.25 0H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 00-9-9z" />
                      </svg>
                  </a>
                  
                
                </p>
              </div>
              <div class="mt-1">
                <a href="{{ asset($folderd->document) }}">

                  <p class="font-medium text-gray-900 dark:text-white w-10">
                  {{ $folderd['name'] }}.{{ $folderd['ext'] }}
                  </p>
                
                </a>  
              </div>
              <div class="mt-1 flex items-center w-30">


                              
                <a href="{{ url('3rdtier/edit',$folderd->id) }}"><svg class="h-4 w-6 text-gray-800 dark:text-white"  viewBox="0 0 24 24"  xmlns="http://www.w3.org/2000/svg"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round">  <path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z" /></svg></button>

                <span class="flex-1 text-left whitespace-nowrap" sidebar-toggle-item>
                  <a href="">
                    <svg class="h-4 w-6 text-gray-800 dark:text-white"  fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"/>
                    </svg>
                  </a>
                </span>

              </div>
            </div>
          @endforeach
      </div>
      <div class="flex items-center justify-center h-48 mb-4 rounded ">         
      </div>
      <div class="flex items-center justify-center h-48 mb-4 rounded ">      
      </div> <div class="flex items-center justify-center h-48 mb-4 rounded ">      
      </div>
    </div>
    
  </div>
  <div id="file4-modal" style="top: 10%; left: 500px;" class="fixed top-40 z-50 hidden p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative w-full max-w-2xl max-h-full">
      <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
          <!-- Modal header -->
          <div class="flex items-start justify-between p-4 border-b rounded-t dark:border-gray-600">
              <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                  Create  Folder
              </h3>
              <button   onclick="document.getElementById('file4-modal').style.display='none'"  type="button" data-modal-hide="file4-modal"  class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ml-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white">
                  <svg class="w-3 h-3" aria-hidden="true"  xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                      <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                  </svg>
                  <span class="sr-only">Close modal</span>
              </button>
          </div>
          <!-- Modal body -->
          <div class="p-6 space-y-6">
            <form  method="POST" action="{{ url('/subfolder/3rdtier/store') }}"   enctype="multipart/form-data">
              @csrf
                <label class="block">
                  <span class="font-medium text-slate-600 dark:text-navy-100">Document Name</span>

                  <input 
                    class="form-input mt-1.5 w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                    placeholder="" type="text"  name="name"/>
                </label>


                <label class="block">
                  <span class="font-medium text-slate-600 dark:text-navy-100">Upload Document</span>

                  <input 
                    class="form-input mt-1.5 w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                    placeholder="" type="file"  name="document"/>
                </label>



                <input value="{{ $folderc->id }}" name="folderc_id"
                  class=" bg-transparent px-3 py-2 text:text-transparent " placeholder="" type="hidden" />

                <input value="{{ $folderc->department_id }}" name="department_id"
                  class=" bg-transparent px-3 py-2 text:text-transparent " placeholder="" type="hidden" />

              <input value="{{ $folderc->foldera_id }}" name="foldera_id"
                  class=" bg-transparent px-3 py-2 text:text-transparent " placeholder="" type="hidden" />

              <input value="{{ $folderc->folderb_id }}" name="folderb_id"
                  class=" bg-transparent px-3 py-2 text:text-transparent " placeholder="" type="hidden" />   

              <!-- Modal footer -->
              <div class="flex items-center p-6 space-x-2 border-t border-gray-200 rounded-b dark:border-gray-600">
                <button type="submit"
                  class="btn min-w-[7rem] bg-primary font-medium text-white hover:bg-primary-focus focus:bg-primary-focus active:bg-primary-focus/90 dark:bg-accent dark:hover:bg-accent-focus dark:focus:bg-accent-focus dark:active:bg-accent/90">
                  Save
                </button>

              </div>
            </form>
          </div>
        </div>
  
    </div>
  
  </div>
  <script>
    // Get the modal
    var modal = document.getElementById('file4-modal');

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
      if (event.target == modal) {
        modal.style.display = "none";
      }
    }
  </script>

    

@endsection