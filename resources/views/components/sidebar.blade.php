<aside class="bg-[#E5F3FF] sm:w-[24%] md:w-[20%] lg:w-[17%] h-screen flex flex-col">
   
   <a href="{{route('home')}}">
  
    <!--Logo -->
      <img class="w-[160px] h-auto mx-auto my-3" src="{{ asset('logo.png') }}" alt="College image">         
    <!-- Portal Heading -->
      <h1 class=" mt-2 mb-3 sm:text-[1.1rem] sm:ml-1.5 md:text-[1.4rem] lg:text-[1.3rem] 
          font-[Roboto-Serif]">Complain Portal</h1>
   </a>
   
    <!-- Nav Bar-->
      <nav class="text-lg">
        <ul class="flex flex-col">
          <a href="{{route('user.fillComp')}}">
            <li class="p-3 hover:bg-blue-500 hover:text-white">
              <span>Fill Complain</span>    
            </li>
          </a>

          <a href="{{route('user.viewComp')}}">
            <li class="p-3 hover:bg-blue-500 hover:text-white">
              <span>View Complain</span>    
            </li>
          </a>

          <a href="{{route('user.editViewComp')}}">
            <li class="p-3 hover:bg-blue-500 hover:text-white">
                    <span>Edit Complain</span>    
            </li>
          </a>

          <a href="#">
            <li class="p-3 hover:bg-blue-500 hover:text-white">
              <span>Check Status</span>    
            </li>
          </a>

          <a href="#">
            <li class="p-3 hover:bg-blue-500 hover:text-white">
              <span>Remark</span>    
            </li>
          </a>

          <a href="#">
            <li class="p-3 hover:bg-blue-500 hover:text-white">
              <span>Delete Complain</span>    
            </li>
          </a>
        </ul>
      </nav>

    <!-- Logout Link-->
  
      <div class="mt-auto h-auto px-3 mb-2 text-2xl text-blue-500 hover:bg-blue-600 hover:text-white">
        <form method="POST" action="{{ route('logout') }}" class="">
            @csrf
    
            <a href="route('logout')"
               onclick="event.preventDefault();
                        this.closest('form').submit();"
               class="flex items-center group">
    
                <span class="no-shrink">{{ __('Log Out') }}</span>
    
                <svg class="inline ml-[-0.5] flex-grow hover:group-hover:translate-x-2 transform tansition-transform transition duration-200 ease-in-out" xmlns="http://www.w3.org/2000/svg" height="1rem" viewBox="0 0 24 24">
                    <g transform="rotate(180 12 12)">
                        <g fill="none" stroke="Black" stroke-linecap="round" stroke-width="1.5">
                            <path d="M9.002 7c.012-2.175.109-3.353.877-4.121C10.758 
                            2 12.172 2 15 2h1c2.829 0 4.243 0 5.122.879C22 3.757 22 5.172 22 8v8c0 2.828 0 4.243-.878
                            5.121C20.242 22 18.829 22 16 22h-1c-2.828 0-4.242 0-5.121-.879c-.768-.768-.865-1.946-.877-4.121"/>
                            <path stroke-linejoin="round" d="M15 12H2m0 0l3.5-3M2 12l3.5 3"/>
                        </g>
                    </g>
                </svg>
            </a>
        </form>
    </div>

</aside>