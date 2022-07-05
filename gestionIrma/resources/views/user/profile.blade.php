@extends('layout.app')
@section('content')

<section class="h-screen bg-gray-100 bg-opacity-50 pt-5 ">
    <form action="{{ route('user@update', $user)}}" enctype="multipart/form-data"
    method="POST"
     class="container max-w-2xl mx-auto shadow-md md:w-3/4">
     @csrf
        <div class="p-4 bg-gray-100 border-t-2 rounded-lg bg-opacity-5 ">
            <div class="max-w-sm mx-auto md:w-full md:mx-0">
                <div class="inline-flex items-center space-x-4">
                    
                    <h1 class="text-gray-600">
                       {{$user->name}}
                    </h1>
                </div>
            </div>
        </div>
        <div class="space-y-6 bg-white">
          
            <div class="items-center w-full p-4 space-y-4 text-gray-500 md:inline-flex md:space-y-0">
                <h2 class="max-w-sm mx-auto md:w-1/3">
                    Account
                </h2>
                <div class="max-w-sm mx-auto md:w-2/3">
                    <div class=" relative ">
                        <input type="email" name="email" value="{{$user->email}}" id="user-info-email" required class=" rounded-lg border-transparent flex-1 appearance-none border border-gray-300 w-full py-2 px-4 bg-white text-gray-700 placeholder-gray-400 shadow-sm text-base focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent" placeholder="email"/>
                        </div>
                    </div>
                </div>
                <hr/>
                <div class="items-center w-full p-4 space-y-4 text-gray-500 md:inline-flex md:space-y-0">
                    <h2 class="max-w-sm mx-auto md:w-1/3">
                        Personal info
                    </h2>
                    <div class="max-w-sm mx-auto space-y-5 md:w-2/3">
                        <div>
                            <div class=" relative ">
                                <input type="text" name="name" required id="user-info-name" value="{{$user->name}}" class=" rounded-lg border-transparent flex-1 appearance-none border border-gray-300 w-full py-2 px-4 bg-white text-gray-700 placeholder-gray-400 shadow-sm text-base focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent" placeholder="name"/>
                                </div>
                            </div>
                           
                            </div>
                        </div>
                        <hr/>
                       
                            <hr/>
                            <div class="w-full px-4 pb-4 ml-auto text-gray-500 md:w-1/3">
                                <button type="submit" class="py-2 px-4  bg-blue-600 hover:bg-blue-700 focus:ring-blue-500 focus:ring-offset-blue-200 text-white w-full transition ease-in duration-200 text-center text-base font-semibold shadow-md focus:outline-none focus:ring-2 focus:ring-offset-2  rounded-lg ">
                                    update
                                </button>
                            </div>

                        </div>
                    </form>
                </section>
@endsection