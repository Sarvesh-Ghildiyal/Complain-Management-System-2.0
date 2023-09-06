<x-app-layout>
    
    {{-- Fill your complain Card --}}
    <div class="w-4/5 h-auto mx-auto mt-14">

        <p class="text-3xl font-[Kaisei] mb-5">
            Fill Your Complain
        </p>
    
        <!-- Form -->
        <form class="w-11/12 mx-auto shadow-lg rounded-lg p-5" method="POST" action="route">
            @csrf
            <div class="flex flex-wrap -mx-3 mb-6">
    
                <!-- Room number -->
                <div class="w-full md:w-1/2 px-3 mb-4 md:mb-0">
                    <label for="room-no" class="uppercase tracking-wide text-xs sm:text-sm font-normal mb-2">
                        Room Number
                    </label>
                    <input class="appearance-none block w-full bg-gray-100 text-gray-700 border border-gray-200 
                    rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" 
                    id="room-no" name="room-no" type="text" pattern="[0-9]+" placeholder="e.g. 205" required>
                </div>
    
                <!-- Department -->
                <div class="w-full md:w-1/2 px-3 mb-4">
                    <label for="department" class="uppercase tracking-wide text-xs sm:text-sm font-normal mb-2">
                        Department
                    </label>
                    <input class="appearance-none block w-full bg-gray-100 text-gray-700 border border-gray-200 
                    rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" 
                    id="department" name="department" type="text" placeholder="e.g. CSE" required>
                </div>
    
                <!-- Reported By -->
                <div class="w-full md:w-1/2 px-3 mb-4">
                    <label for="reported-by" class="uppercase tracking-wide text-xs sm:text-sm font-normal mb-2">
                        Reported By
                    </label>
                    <input class="appearance-none block w-full bg-gray-100 text-gray-700 border border-gray-200 
                    rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" 
                    id="reported-by" name="reported-by" type="text" placeholder="e.g. Dan" required>
                </div>
    
                <!-- Requested By -->
                <div class="w-full md:w-1/2 px-3 mb-4">
                    <label for="requested-by" class="uppercase tracking-wide text-xs sm:text-sm font-normal mb-2">
                        Requested By
                    </label>
                    <input class="appearance-none block w-full bg-gray-100 text-gray-700 border border-gray-200 
                    rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" 
                    id="requested-by" name="requested-by" type="text" placeholder="e.g. Manny" required>
                </div>
    
            </div>
    
            <!-- Description -->
            <div class="mb-4">
                <label for="message" class="uppercase tracking-wide text-xs sm:text-sm font-normal mb-2">
                    Description
                </label>
                <textarea id="message" name="description" rows="4" class="appearance-none w-full p-2.5 text-sm 
                bg-gray-100 rounded-lg border border-gray-300 
                focus:ring-blue-500 focus:border-blue-500 focus:bg-white dark:placeholder-gray-700"
                placeholder="Write your thoughts here..." required></textarea>
            </div>
    
            <!-- Submit Button -->
            <div class="flex justify-center mt-5">
                <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                    Submit
                </button>
            </div>
    
        </form>
    
    </div>
    
</x-app-layout>
