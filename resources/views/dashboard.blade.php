<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Pulpit') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
            
                <div class="p-6 lg:p-8 bg-white border-b border-gray-200">
                    
                    <section class="bg-white">
                        <div class="container mx-auto">
                            <div class="-mx-4 flex flex-wrap">
                            <div class="w-full">
                                <div class="max-w-full shadow-md mx-4">
                                <table class="w-full table-auto">
                                    <thead>
                                    <tr class="bg-dark text-center">
                                        <th
                                        class="w-1/2 py-4 px-3 text-sm text-left text-white lg:py-1 lg:px-4 rounded-tl"
                                        >
                                        Nazwa
                                        </th>
                                        <th
                                        class="w-1/6 py-6 px-3 text-sm text-right text-white lg:py-1 lg:px-6 rounded-tr"
                                        >
                                        Status
                                        </th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach ($apartmentslist as $sl)                
                                    <tr class="hover:bg-slate-100">
                                        <td
                                        class="text-dark border-l border-b border-[#E8E8E8] py-1 px-4 text-left text-sm font-medium"
                                        >
                                        <a href="apartments/edit/{{$sl->id}}" class="hover:text-primary">{{$sl->buildingsname}} - {{$sl->name}} {{$sl->number}} - {{$sl->square_footage}} m<sup>2</sup></a>
                                        </td>
                                        <td
                                        class="text-dark border-b border-r border-[#E8E8E8] py-1 px-4 text-right text-sm"
                                        >
                                        @foreach ($statuslist as $stat)
                                        <a
                                            href="apartments/{{$sl->id}}/status/{{$stat->id}}"
                                            class="@if($stat->id == $sl->status_id) bg-primary text-white @else text-primary  @endif border-primary hover:bg-primary hover:border-primary inline-block rounded border px-2 py-0 hover:text-white text-xs"
                                        >
                                            {{Str::of($stat->name)->limit(3,'')}}
                                        </a>                                         
                                        @endforeach                                                                                                 
                                        </td>
                                    </tr>
                                    @endforeach
                                    </tbody>
                                    <thead>
                                    <tr class="bg-dark text-center">
                                        <th
                                        class="w-1/2 py-4 px-3 text-sm text-left text-white lg:py-1 lg:px-4 rounded-bl"
                                        >
                                        </th>
                                        <th
                                        class="w-1/6 py-6 px-3 text-sm text-right text-white lg:py-1 lg:px-6 rounded-br"
                                        >
                                        </th>
                                    </tr>
                                    </thead>                                    
                                </table>
                                </div>
                            </div>
                            </div>
                        </div>
                    </section>
                        
                </div>

                <div class="bg-gray-200 bg-opacity-25 grid grid-cols-1 md:grid-cols-2 gap-6 lg:gap-8 p-6 lg:p-8">
                    <div>
                        <div class="flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="w-6 h-6" viewBox="0 0 16 16">
                            <path d="M4.715 6.542 3.343 7.914a3 3 0 1 0 4.243 4.243l1.828-1.829A3 3 0 0 0 8.586 5.5L8 6.086a1.002 1.002 0 0 0-.154.199 2 2 0 0 1 .861 3.337L6.88 11.45a2 2 0 1 1-2.83-2.83l.793-.792a4.018 4.018 0 0 1-.128-1.287z"/>
                            <path d="M6.586 4.672A3 3 0 0 0 7.414 9.5l.775-.776a2 2 0 0 1-.896-3.346L9.12 3.55a2 2 0 1 1 2.83 2.83l-.793.792c.112.42.155.855.128 1.287l1.372-1.372a3 3 0 1 0-4.243-4.243L6.586 4.672z"/>
                            </svg>
                            <h2 class="ml-3 text-xl font-semibold text-gray-900">
                                <a href="/" target="_blank">Frontend serwisu</a>
                            </h2>
                        </div>
                   </div>
                   <div>
                        <div class="flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="w-6 h-6" viewBox="0 0 16 16">
                            <path d="M4.715 6.542 3.343 7.914a3 3 0 1 0 4.243 4.243l1.828-1.829A3 3 0 0 0 8.586 5.5L8 6.086a1.002 1.002 0 0 0-.154.199 2 2 0 0 1 .861 3.337L6.88 11.45a2 2 0 1 1-2.83-2.83l.793-.792a4.018 4.018 0 0 1-.128-1.287z"/>
                            <path d="M6.586 4.672A3 3 0 0 0 7.414 9.5l.775-.776a2 2 0 0 1-.896-3.346L9.12 3.55a2 2 0 1 1 2.83 2.83l-.793.792c.112.42.155.855.128 1.287l1.372-1.372a3 3 0 1 0-4.243-4.243L6.586 4.672z"/>
                            </svg>
                            <h2 class="ml-3 text-xl font-semibold text-gray-900">
                                <a href="/apartments">Edycja lokali</a>
                            </h2>
                        </div>
                   </div>                   
                </div>

            </div>
        </div>
    </div>
</x-app-layout>
