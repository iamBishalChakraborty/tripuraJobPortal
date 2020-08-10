@extends('dashboard.dashboardbase')

@section('content')

    <x-alert/>
    <h4 class="text-gray-700 text-3xl font-medium">Personal Information</h4>

    <div class="flex mt-5">
        <div class="w-full pl-16 pr-16">
            <div class="flex flex-wrap -mx-3">
                {{-- Name --}}
                <div class=" flex w-full md:w-1/2 px-3 md:mb-0">
                    <p class="block uppercase tracking-wide text-gray-700 text-md font-bold mb-2 mt-1">Name : </p>
                    <p class="pl-5 text-gray-700 text-xl">{{auth()->user()->name}}</p>
                </div>
                {{-- Email --}}
                <div class="flex w-full md:w-1/2 px-3">
                    <p class="block uppercase tracking-wide text-gray-700 text-md font-bold mb-2 mt-1">Email : </p>
                    <p class="pl-5 text-gray-700 text-xl">{{auth()->user()->email}}</p>
                </div>
            </div>
            @if (!auth()->user()->dob)
                <livewire:personal-information/>
            @else
                <div class="flex flex-wrap -mx-3 mt-5">
                    {{-- Name --}}
                    <div class=" flex w-full md:w-1/2 px-3 md:mb-0">
                        <p class="block uppercase tracking-wide text-gray-700 text-md font-bold mb-2 mt-1">Father Name : </p>
                        <p class="pl-5 text-gray-700 text-xl">{{auth()->user()->f_name}}</p>
                    </div>
                    {{-- Email --}}
                    <div class="flex w-full md:w-1/2 px-3">
                        <p class="block uppercase tracking-wide text-gray-700 text-md font-bold mb-2 mt-1">Mother Name : </p>
                        <p class="pl-5 text-gray-700 text-xl">{{auth()->user()->m_name}}</p>
                    </div>
                </div>

                <div class="flex flex-wrap -mx-3 mt-5">
                    {{-- Name --}}
                    <div class=" flex w-full md:w-1/3 px-3 md:mb-0">
                        <p class="block uppercase tracking-wide text-gray-700 text-md font-bold mb-2 mt-1">Gender : </p>
                        <p class="pl-5 text-gray-700 text-xl">{{auth()->user()->gender}}</p>
                    </div>
                    {{-- Email --}}
                    <div class="flex w-full md:w-1/3 px-3">
                        <p class="block uppercase tracking-wide text-gray-700 text-md font-bold mb-2 mt-1">Community : </p>
                        <p class="pl-5 text-gray-700 text-xl">{{auth()->user()->community}}</p>
                    </div>

                    <div class="flex w-full md:w-1/3 px-3">
                        <p class="block uppercase tracking-wide text-gray-700 text-md font-bold mb-2 mt-1">Date Of Birth: </p>
                        <p class="pl-5 text-gray-700 text-xl">{{auth()->user()->dob}}</p>
                    </div>
                </div>

                <div class="flex flex-wrap -mx-3 px-3 mt-5">
                        <p class="block uppercase tracking-wide text-gray-700 text-md font-bold mb-2 mt-1">Address : </p>
                        <p class="pl-5 text-gray-700 text-xl">{{auth()->user()->address}}, {{auth()->user()->address_2}}</p>
                </div>
                <div class="flex flex-wrap mt-5">
                    <div class=" flex w-full md:w-1/4 px-1">
                        <p class="block uppercase tracking-wide text-gray-700 text-md font-bold mb-2 mt-1">City : </p>
                        <p class="pl-3 text-gray-700 text-xl">{{auth()->user()->city}}</p>
                    </div>
                    <div class="flex w-full md:w-1/4 px-1">
                        <p class="block uppercase tracking-wide text-gray-700 text-md font-bold mb-2 mt-1">District : </p>
                        <p class="pl-3 text-gray-700 text-xl">{{Auth::user()->district->district}}</p>
                    </div>
                    <div class="flex w-full md:w-1/4 px-1">
                        <p class="block uppercase tracking-wide text-gray-700 text-md font-bold mb-2 mt-1">State : </p>
                        <p class="pl-3 text-gray-700 text-xl">{{auth()->user()->state->state}}</p>
                    </div>
                    <div class="flex w-full md:w-1/4 px-1">
                        <p class="block uppercase tracking-wide text-gray-700 text-md font-bold mb-2 mt-1">Pincode:  </p>
                        <p class="pl-3 text-gray-700 text-xl">{{auth()->user()->pincode}}</p>
                    </div>
                </div>


            @endif

        </div>
    </div>






@endsection

