<x-app-layout>
    
    
    {{-- Fill your complain Card --}}
    <div class="w-4/5 h-auto mx-auto mt-14">

       {{-- For Displaying any error messages --}}
        @include('components.error')

        <p class="text-3xl font-[Kaisei] mb-5">
           {{$action}} your Complains
        </p>
    
        
        {{-- Table --}}
        <div class="w-full rounded-lg">
            <div class="bg-white py-2 md:py-4 px-2 md:px-4 xl:px-5">
                <div class="sm:flex items-center justify-between">
                    <div class="flex items-center">
                        <a class="rounded-full focus:outline-none focus:ring-2 focus:bg-indigo-50 focus:ring-indigo-800" href="{{route('user.viewComp', ['status' => 'all'])}}">
                            <div class="py-2 px-8 bg-indigo-100 text-indigo-700 rounded-full">
                                All
                            </div>
                        </a>
                        <a class="rounded-full focus:outline-none focus:ring-2 focus:bg-indigo-50 focus:ring-indigo-800 ml-4 sm:ml-8" href="{{route('user.viewComp', ['status' => 'open'])}}">
                            <div class="py-2 px-8 text-gray-600 hover:text-indigo-700 hover:bg-indigo-100 rounded-full">
                                Open
                            </div>
                        </a>
                        <a class="rounded-full focus:outline-none focus:ring-2 focus:bg-indigo-50 focus:ring-indigo-800 ml-4 sm:ml-8" href="{{route('user.viewComp', ['status' => 'closed'])}}">
                            <div class="py-2 px-8 text-gray-600 hover:text-indigo-700 hover:bg-indigo-100 rounded-full">
                                Closed
                            </div>
                        </a>
                    </div>
                    {{-- Paggination --}}
                    {{$complains->onEachside(3)->links()}}
                </div>
                <div class="mt-7 table-responsive">
                    <table class="border-collapse w-full">
                        <thead>
                            <tr>
                                <th class="p-3 font-bold uppercase bg-gray-200 text-gray-600 border border-gray-300">Complain Title</th>
                                <th class="p-3 font-bold uppercase bg-gray-200 text-gray-600 border border-gray-300">Description</th>
                                <th class="p-3 font-bold uppercase bg-gray-200 text-gray-600 border border-gray-300">Status</th>
                                <th class="p-3 font-bold uppercase bg-gray-200 text-gray-600 border border-gray-300">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- Repeat the following structure for each row -->
                             @foreach($complains as $complain)
                                <tr class="bg-white lg:hover:bg-gray-50">
                                    <td class="p-3 text-gray-800 border border-b text-center">
                                        {{ Str::limit($complain->title . '..', 50) }}
                                    </td>
                                    <td class="p-3 text-gray-800 border border-b text-center">
                                        {{ Str::limit($complain->body .'...', 100) }}
                                    </td>
                                    <td class="p-3 text-gray-800 border border-b text-center">
                                        <span class="rounded {{ $complain->status == 'open' ? 'text-green-500' : 'text-red-500' }}
                                             py-1 px-3">{{$complain->status}}</span>
                                             {{-- {{dd($complain->cid)}} --}}
                                    </td>
                                    <td class="p-3 text-gray-800 border border-b text-center"> 
                                      <a href="{{ route($action == 'View' ? 'user.showComp' : 'user.editShowComp', $complain->cid)}}" class="text-blue-400 hover:text-blue-600 underline">{{$action}}</a>
                                    </td>
                                </tr>
                             @endforeach
                            <!-- End of the repeated structure -->
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

</x-app-layout>
