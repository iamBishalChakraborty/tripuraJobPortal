<form class="w-full" wire:submit.prevent="savePersonalInformation" enctype="multipart/form-data">

    {{-- Image --}}
        <div class="flex flex-wrap -mx-3 mb-6">
            <div class="w-full md:w-1/2 px-3">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-image">Image</label>
                <input class="rounded pl-2 pr-2 pt-2 mb-1" id="grid-image" type="file" wire:model="avatar">
                <p class="text-gray-600 text-xs italic">Max Size 300 KB</p>
            </div>
            <div class="w-full md:w-1/2 px-3">
                @if ($avatar)
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="avatarUpload">Photo Preview: </label>
                    <img class="rounded-full h-24 w-24 flex items-center justify-center" id="avatarUpload" src="{{ $avatar->temporaryUrl() }}">
                @endif
            </div>
        </div>

    {{-- Father & Mother --}}
    <div class="flex flex-wrap -mx-3 mb-2">
        <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="fName">Father Name</label>
            <input class="bg-gray-300 block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:border-gray-500" id="fName" type="text" wire:model.lazy="f_name">

        </div>
        <div class="w-full md:w-1/2 px-3">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="mName">Mother Name</label>
            <input class="bg-gray-300 block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:border-gray-500" id="mName" type="text" wire:model.lazy="m_name">
        </div>
    </div>
    {{-- Gender & Phone --}}
    <div class="flex flex-wrap -mx-3 mb-3">
        <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="gender">Gender</label>
           <div class="relative">
               <select class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none bg-gray-300" id="gender" wire:model="gender">
                   <option value="" selected>Select</option>
                   <option value="Male">Male</option>
                   <option value="Female">Female</option>
                   <option value="Transgender">Transgender</option>
               </select>
               <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                   <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
               </div>
           </div>

        </div>
        <div class="w-full md:w-1/2 px-3">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="phoneNumber">Phone Number</label>
            <input class="bg-gray-300 block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:border-gray-500" id="phoneNumber" type="number" placeholder="1234567890" wire:model.lazy="phone">
        </div>
    </div>

    {{-- DOB & Community --}}
    <div class="flex flex-wrap -mx-3 mb-2">
        <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="dob">Date of Birth</label>
            <input class="bg-gray-300 block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:border-gray-500" id="dob" type="date" wire:model.lazy="dob">

        </div>
        <div class="w-full md:w-1/2 px-3">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="community">Community</label>
            <div class="relative">
                <select class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none bg-gray-300" id="community" wire:model="community">
                    <option value="" selected>Select</option>
                    <option value="UR">UR</option>
                    <option value="OBC">OBC</option>
                    <option value="SC">SC</option>
                    <option value="ST">ST</option>
                </select>
                <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                    <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                </div>
            </div>
        </div>
    </div>


    <h4 class="text-gray-700 text-2xl font-medium mt-10 mb-5">Address</h4>
    {{-- Address 1 & 2 --}}
    <div class="flex flex-wrap -mx-3 mb-2">
        <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="addressOne">Address 1</label>
            <input class="bg-gray-300 block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:border-gray-500" id="addressOne" type="text" wire:model.lazy="add_one">

        </div>
        <div class="w-full md:w-1/2 px-3">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="addressTwo">Address 2</label>
            <input class="bg-gray-300 block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:border-gray-500" id="addressTwo" type="text" wire:model.lazy="add_two">
        </div>
    </div>

    <div class="flex flex-wrap -mx-3 mt-2 mb-2">

            {{-- City --}}
            <div class="w-full md:w-1/4 px-3 mb-6 md:mb-0">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-city">
                    City
                </label>
                <input class="bg-gray-300 block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:border-gray-500" id="grid-city" type="text" placeholder="Agartala" wire:model.lazy="city">
            </div>

            {{-- District --}}

            <div class="w-full md:w-1/4 px-3 mb-6 md:mb-0">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-state">District</label>
            <div class="relative">
                <select class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none bg-gray-300" id="grid-state" wire:model.lazy="dist">
                    <option value="" selected>Select</option>
                    @foreach($districts as $item)
                        <option value="{{$item->id}}">{{$item->district}}</option>
                    @endforeach
                </select>
                <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                    <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                </div>
            </div>
        </div>

            {{-- State --}}

            <div class="w-full md:w-1/4 px-3 mb-6 md:mb-0">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="state">
                    State
                </label>
                <div class="relative">
                    <input class="bg-gray-300 block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:border-gray-500" id="state" value="Tripura" disabled>
                    <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                        <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                    </div>
                </div>
            </div>

             {{-- Pincode --}}
            <div class="w-full md:w-1/4 px-3 mb-6 md:mb-0">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-zip">
                    Zip
                </label>
                <input class="bg-gray-300 block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:border-gray-500" id="grid-zip" type="text" placeholder="799001" wire:model.lazy="pincode">
            </div>
        </div>

    <!-- Using utilities: -->
   <div class="text-center py-5">
       <button class="bg-blue-500 hover:bg-blue-700 py-2 px-4 text-center rounded text-white px-10">Submit</button>
   </div>
    </form>

