<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'CMS') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Kaisei+Tokumin&family=Poppins&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&family=Roboto+Slab:wght@400;700&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
        

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        

    </head>
    <body class="font-sans antialiased">
        <div class="bg-white w-screen font-light flex">

            <!-- Side Bar -->
            @include('components.sidebar')
        
            <!-- Main Section-->
            <main class="flex-grow">
            
              <!-- Header-->
             @include('components.header')
        
                <!-- Card section of the page -->
                <div class="w-[80%] h-auto mx-20 mt-[3.8rem]">
                  
                    <p class="text-3xl font-[Kaisei]">
                      Fill Your Complain
                    </p>
                    
                    <!--form for the page  -->
                    <form class="w-[90%] mt-5 m-auto md:ml-6 shadow-lg rounded">
                      
                      <div class="flex flex-wrap -mx-3 mb-6 px-4">
          
                      <!--Room number and Dpt  -->
                        <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                          <label class="uppercase tracking-wide text-xs sm:text-sm font-normal mb-2" for="room-no">
                            Room Number
                          </label>
                          <input class="appearance-none block w-full bg-gray-100 text-gray-700 border 
                          focus:border-gray-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" 
                          id="room-no" name="room-no" type="\d" pattern="[0-9]+" placeholder="eg. 205" required>
                        </div>
          
                        <div class="w-full md:w-1/2 px-3">
                          <label class="uppercase tracking-wide text-xs sm:text-sm font-normal mb-2" for="department" name="department">
                            Department
                          </label>
                          <input class="appearance-none block w-full bg-gray-100 text-gray-700 border 
                          border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white 
                          focus:border-gray-500" id="department" name="department" type="text" placeholder="eg. CSE" required>
                        </div>
                        
                      <!-- Reported and Requested By -->
                        <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0 mt-2">
                          <label class="uppercase tracking-wide text-xs sm:text-sm font-normal mb-2" for="room-no">
                            Reported By
                          </label>
                          <input class="appearance-none block w-full bg-gray-100 text-gray-700 border 
                          focus:border-gray-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" 
                          id="reported-by" name="reported-by" type="text" pattern="" placeholder="eg. Dan" required>
                        </div>
          
                        <div class="w-full md:w-1/2 px-3 mt-2 ">
                          <label class="uppercase tracking-wide text-xs sm:text-sm font-normal mb-2" for="department" name="department">
                            Requested By
                          </label>
                          <input class="appearance-none block w-full bg-gray-100 text-gray-700 border 
                          border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white 
                          focus:border-gray-500" id="requested-by" name="requested-by" type="text" placeholder="eg. Manny" required>
                        </div>
          
          
                    <!-- Description Text Field -->
                      <label for="message" class="uppercase tracking-wide text-xs sm:text-sm font-normal mb-2">Description</label>
                      <textarea id="message" name="description" rows="4" class="appearance-none block p-2.5 w-full text-sm text-gray-900 
                      bg-gray-100 rounded-lg border border-gray-300 
                      focus:ring-blue-500 focus:border-blue-500 focus:bg-white dark:placeholder-gray-700
                        dark:focus:ring-blue-400" placeholder="Write your thoughts here..." required>
                      </textarea>
                      </div>
                      
                      <!-- Submit Button -->
                      <div class="flex justify-center mt-5">
                        <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 flex rounded">
                          Submit
                        </button>
                      </div>
          
                    </form>
        
                </div>
        
            </main>
          </div>
        
    </body>
</html>
