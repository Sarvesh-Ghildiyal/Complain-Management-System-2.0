<x-app-layout>
    
    
    {{-- Fill your complain Card --}}
    <div class="w-4/5 h-auto mx-auto mt-12">

        <p class="text-3xl font-[Kaisei] mb-5">
            View <span class="text-sky-500">Complain {{$complain->cid}}</span>
        </p>
        
        {{-- Status Button --}}
        <div class="flex items-center px-8 mt-[-0.5rem]">
                <div class="py-2 px-8 rounded-full
                    {{ $complain->status == 'open' ? 'bg-green-100 text-green-800' : 'bg-gray-600 text-white' }}">
                    {{ ucfirst(Str::lower($complain->status)) }}
                </div>
        </div>

        <!-- View Form -->
        <form class="w-11/12 mx-auto shadow-lg rounded-lg p-5">
            <div class="flex flex-wrap -mx-3 mb-6">
    
                {{-- Complain Title --}}
                <div class="w-full md:w-1/2 px-3 mb-4">
                    <label for="title" class="uppercase tracking-wide text-xs sm:text-sm font-normal mb-2">
                        Title
                    </label>
                    <input class="appearance-none font-semibold block w-full bg-gray-100 text-gray-700 border border-gray-200 
                    rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" 
                    id="title" name="title" type="text" placeholder="e.g. Printer is not working" readonly value="{{$complain->title}}">
                </div>
               
               
                <!-- Room number -->
                <div class="w-full md:w-1/2 px-3 mb-4 md:mb-0">
                    <label for="room_no" class="uppercase tracking-wide text-xs sm:text-sm font-normal mb-2">
                        Room Number
                    </label>
                    <input class="appearance-none font-semibold block w-full bg-gray-100 text-gray-700 border border-gray-200 
                    rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" 
                    id="room_no" name="room_no" type="text" pattern="[0-9]+" placeholder="e.g. 205" readonly value="{{$complain->room_no}}">
                </div>
    

                <!-- Requested By -->
                <div class="w-full md:w-1/2 px-3 mb-4">
                    <label for="requested_by" class="uppercase tracking-wide text-xs sm:text-sm font-normal mb-2">
                        Requested By
                    </label>
                    <input class="appearance-none font-semibold block w-full bg-gray-100 text-gray-700 border border-gray-200 
                    rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" 
                    id="requested_by" name="requested_by" type="text" placeholder="e.g. Manny" readonly value="{{$complain->requested_by}}">
                </div>

                <!-- Reported By -->
                <div class="w-full md:w-1/2 px-3 mb-4">
                    <label for="reported_by" class="uppercase tracking-wide text-xs sm:text-sm font-normal mb-2">
                        Reported By
                    </label>
                    <input class="appearance-none font-semibold block w-full bg-gray-100 text-gray-700 border border-gray-200 
                    rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" 
                    id="reported_by" name="reported_by" type="text" placeholder="e.g. Dan" readonly value="{{ $complain->reported_by }}">
                </div>

            </div>
    
            <!-- Body -->
            <div class="mb-4">
                <label for="message" class="uppercase tracking-wide text-xs sm:text-sm font-normal mb-2">
                    Description
                </label>
                <textarea id="message" name="body" rows="4" class="appearance-none font-semibold w-full p-2.5 text-sm 
                bg-gray-100 rounded-lg border border-gray-300 
                focus:ring-blue-500 focus:border-blue-500 focus:bg-white dark:placeholder-gray-700"
                placeholder="Write your thoughts here..." readonly>{{$complain->body}}</textarea>
            </div>
    
            <!-- Back Button -->
            <div class="flex justify-center mt-5">
               <a href="{{route('user.viewComp')}}">
                    <button type="button" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                        {{$action}}
                    </button>
               </a>
            </div>
    
        </form>
    
    </div>

</x-app-layout>
