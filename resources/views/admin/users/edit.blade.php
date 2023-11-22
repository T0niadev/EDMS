@extends('layouts.app')

@section('content')
<div class="p-4 h-full my-6 mx-16 sm:ml-64 lg-64">
  
   <div class="p-4 border-2 border-gray-200 border rounded-lg dark:border-gray-900 mt-14">
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
                <a href="{{ url('/admin/users') }}">Users</a> 
                >> Edit User {{$user->name}}
            </p>
        </div>

        <div class="card dark:bg-gray-900 ">
    
                    <div class="tab-content p-4 sm:p-5">
                        <form id="username" method="POST" action="{{ url('admin/user/update',$user->id) }}" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <label class="block">
                                <span class="font-medium text-slate-600 dark:text-navy-100">User Name</span>

                                <input
                                class="form-input mt-1.5 w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                                    value="{{$user->name}}" name="name" type="text" />
                            </label>

                            <label class="block mt-8">
                                <span class="font-medium text-slate-600 dark:text-navy-100">User</span>

                                <input
                                class="form-input mt-1.5 w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                                    value="{{$user->email}}" name="email" type="email" />
                            </label>

                         

                            <label class="block mt-8">
                                <span class="font-medium text-slate-600 dark:text-navy-100">Department</span>

                                    <select name="department" id="department" 
                                    class="form-input mt-1.5 w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent">
                                        <option>Select Department</option>
                                        <option value="0" {{ "0" == old('department', $user->department) ? 'selected' : '' }}>All</option> 
                                       @foreach($deps as $dep)
                                        <option 
                                        class="form-input mt-1.5 w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                                        value="{{$dep->id}}" {{ $dep->id == old('department', $user->department) ? 'selected' : '' }}>{{$dep->name}}</option>
                                        @endforeach
                                    </select>
                            </label>

                            <label class="block mt-8">
                               <span class="font-medium text-slate-600 dark:text-navy-100">Password</span>

                              <input type="password"  name="password" id="input-password" class="form-input mt-1.5 w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent">
                                
                            </label>


                            <div class="mt-8 space-x-2  border-gray-200 rounded-b dark:border-gray-600">
                                <button type="submit"
                                    class="btn min-w-[7rem] bg-primary font-medium text-white hover:bg-primary-focus focus:bg-primary-focus active:bg-primary-focus/90 dark:bg-accent dark:hover:bg-accent-focus dark:focus:bg-accent-focus dark:active:bg-accent/90">
                                    Save User Details
                                </button>
                            </div>
                            
                        
                            
                           
                        </form>

                            @if($user->roles)
                                <label class="block mt-8">
                                    <span class="font-medium text-slate-600 dark:text-navy-100">Roles</span>

                                        
                                            @foreach($user->roles as $user_role)
                                            <div class="flex"> 
                                                <input
                                                class="form-input mt-1.5 rounded-lg border border-slate-300 bg-transparent px-3 py-2 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                                                 value="{{$user_role->name}}" disabled>
                                                <form id="deleterole" method="POST" action="{{ url('admin/user/delete',[$user->id, $user_role->id]) }}" enctype="multipart/form-data">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button class="mt-1.5" value="{{$user_role->name}}" onclick="document.getElementById('deleterole').submit();">
                                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-10">
                                                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                                                        </svg>
                                                    </button>
                                                </form>
                                            </div>
                                            @endforeach
                                        </select>
                                </label>
                            @endif
                       
                            
                      
                        <form id="role{{$user->id}}" method="POST" action="{{ url('admin/user/assign',$user->id) }}" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <label class="block mt-8">
                                <span class="font-medium text-slate-600 dark:text-navy-100">Assign Role</span>

                                    <select name="role" id="role" onchange="document.getElementById('role{{$user->id }}').submit();"
                                    class="form-input mt-1.5 w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent">
                                        <option>Select Role</option>
                                        @foreach($roles as $role)  
                                        <option 
                                        class="form-input mt-1.5 w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                                        value="{{$role->name}}">{{$role->name}}</option>
                                        @endforeach
                                    </select>
                            </label>
                        </form>
                        <div class="mt-8 space-x-2  border-gray-200 rounded-b dark:border-gray-600">
                                <button 
                                    class="btn min-w-[7rem] bg-primary font-medium text-white hover:bg-primary-focus focus:bg-primary-focus active:bg-primary-focus/90 dark:bg-accent dark:hover:bg-accent-focus dark:focus:bg-accent-focus dark:active:bg-accent/90">
                                     <a href="{{ url('/admin/users') }}">Save Changes</a> 
                                    </button>

                        </div>
                    </div>


                
                    </div>
                </div>

        
      

    </div>
    <div class="flex items-center justify-center h-48 mb-4 rounded ">
             
             </div>
             <div class="flex items-center justify-center h-48 mb-4 rounded ">
                    
             </div> <div class="flex items-center justify-center h-48 mb-4 rounded ">
                    
             </div>
</div>
@endsection