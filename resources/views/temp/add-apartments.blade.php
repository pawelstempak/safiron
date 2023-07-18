<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Dodaj lokal
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="bg-dark py-2 px-5 text-white text-right">Pola oznaczone gwiazdką są wymagane</div>
                    <div class="container flex justify-center">
                        <div class="mb-12">
                            <form action="/apartments/add" method="post">
                            @csrf
                            <div class="grid grid-cols-2 content-start mt-10">
                                <div class="px-10 w-96">                            
                                    <div class="pb-10">
                                    <div><label class="font-semibold">Wpisz nazwę lokalu *<label></div>
                                    @error('name')<div class="text-alert">{{ $message }}</div>@enderror                           
                                    <input
                                        type="text"
                                        placeholder="np. Lokal, Mieszkanie, Apartament, Fiołkowy itp."
                                        class="border-form-stroke text-body-color placeholder-body-color focus:border-primary active:border-primary rounded-lg border-[1.5px] py-3 px-5 font-medium outline-none transition disabled:cursor-default disabled:bg-[#F5F7FD]  w-96"
                                        name="name"
                                        value="{{old('name')}}"
                                        />
                                    </div>
                                    <div class="pb-10">
                                    <div><label class="font-semibold">Wpisz numer lokalu *<label></div>
                                    @error('number')<div class="text-alert">{{ $message }}</div>@enderror 
                                    <input
                                        type="text"
                                        placeholder="np. 1, 0.1, M001"
                                        class="border-form-stroke text-body-color placeholder-body-color focus:border-primary active:border-primary rounded-lg border-[1.5px] py-3 px-5 font-medium outline-none transition disabled:cursor-default disabled:bg-[#F5F7FD]  w-96"
                                        name="number"
                                        value="{{old('number')}}"
                                        />
                                    </div>       
                                    <div class="pb-10">
                                    <div><label class="font-semibold">Powierzchnia lokalu w m<sup>2</sup> *<label></div>
                                    @error('squarefootage')<div class="text-alert">{{ $message }}</div>@enderror                                    
                                    <input
                                        type="text"
                                        placeholder="Metraż np. 74.34"
                                        class="border-form-stroke text-body-color placeholder-body-color focus:border-primary active:border-primary rounded-lg border-[1.5px] py-3 px-5 font-medium outline-none transition disabled:cursor-default disabled:bg-[#F5F7FD]  w-96"
                                        name="squarefootage"
                                        value="{{old('squarefootage')}}"
                                        />
                                    </div>   
                                    <div class="pb-10">  
                                    <div><label class="font-semibold">Wpisz liczbę pokoi *<label></div>
                                    @error('rooms')<div class="text-alert">{{ $message }}</div>@enderror                                
                                    <input
                                        type="text"
                                        placeholder="np. 1, 0.1, M001"
                                        class="border-form-stroke text-body-color placeholder-body-color focus:border-primary active:border-primary rounded-lg border-[1.5px] py-3 px-5 font-medium outline-none transition disabled:cursor-default disabled:bg-[#F5F7FD]  w-96"
                                        name="rooms"
                                        value="{{old('rooms')}}"
                                        />
                                    </div>       
                                    <div class="pb-10">
                                    <div><label class="font-semibold">Wpisz cenę lokalu<label></div>
                                    @error('price')<div class="text-alert">{{ $message }}</div>@enderror                                   
                                    <input
                                        type="text"
                                        placeholder="0"
                                        class="border-form-stroke text-body-color placeholder-body-color focus:border-primary active:border-primary rounded-lg border-[1.5px] py-3 px-5 font-medium outline-none transition disabled:cursor-default disabled:bg-[#F5F7FD]  w-96"
                                        name="price"
                                        value="@if(! old('price')) 0 @else {{old('price')}} @endif"
                                        />
                                    </div>                                                        
                                </div>                             
                                <div class="px-10">
                                    <div><label class="font-semibold">Budynek *<label></div>                        
                                    <div class="pb-10">
                                        <select
                                        class="border-form-stroke text-body-color focus:border-primary active:border-primary w-96 appearance-none rounded-lg border-[1.5px] py-3 px-5 font-medium outline-none transition disabled:cursor-default disabled:bg-[#F5F7FD]"
                                        name="buildings_id"
                                        >
                                        @foreach ($buildingslist as $bl)
                                        <option value="{{ $bl->id }}">{{ $bl->name }}</option>
                                        @endforeach
                                        </select>
                                        <span
                                        class="border-body-color absolute right-4 top-1/2 mt-[-2px] h-[10px] w-[10px] -translate-y-1/2 rotate-45 border-r-2 border-b-2"
                                        >
                                        </span>
                                    </div>    
                                    <div><label class="font-semibold">Piętro *<label></div>
                                    @error('storey')<div class="text-alert">{{ $message }}</div>@enderror                               
                                    <div class="pb-10">
                                        <select
                                        class="border-form-stroke text-body-color focus:border-primary active:border-primary w-96 appearance-none rounded-lg border-[1.5px] py-3 px-5 font-medium outline-none transition disabled:cursor-default disabled:bg-[#F5F7FD]"
                                        name="storey"
                                        >
                                        @for ($i = 0; $i <= $max_storey; $i++)
                                            <option value="{{$i}}">@if($i==0) Parter @else {{$i}} @endif</option>
                                        @endfor
                                        </select>
                                        <span
                                        class="border-body-color absolute right-4 top-1/2 mt-[-2px] h-[10px] w-[10px] -translate-y-1/2 rotate-45 border-r-2 border-b-2"
                                        >
                                        </span>
                                    </div>                             
                                    <div><label class="font-semibold">Typ oferty *<label></div>                          
                                    <div class="pb-10">
                                        <select
                                        class="border-form-stroke text-body-color focus:border-primary active:border-primary w-96 appearance-none rounded-lg border-[1.5px] py-3 px-5 font-medium outline-none transition disabled:cursor-default disabled:bg-[#F5F7FD]"
                                        name="offertypes_id"
                                        >
                                        @foreach ($offertypeslist as $ol)
                                        <option value="{{ $ol->id }}">{{ $ol->name }}</option>
                                        @endforeach
                                        </select>
                                        <span
                                        class="border-body-color absolute right-4 top-1/2 mt-[-2px] h-[10px] w-[10px] -translate-y-1/2 rotate-45 border-r-2 border-b-2"
                                        >
                                        </span>
                                    </div>
                                    <div><label class="font-semibold">Status *<label></div>                                   
                                    <div class="pb-10">
                                        <select
                                        class="border-form-stroke text-body-color focus:border-primary active:border-primary w-96 appearance-none rounded-lg border-[1.5px] py-3 px-5 font-medium outline-none transition disabled:cursor-default disabled:bg-[#F5F7FD]"
                                        name="status_id"
                                        >
                                        @foreach ($statuslist as $sl)
                                        <option value="{{ $sl->id }}">{{ $sl->name }}</option>
                                        @endforeach
                                        </select>
                                        <span
                                        class="border-body-color absolute right-4 top-1/2 mt-[-2px] h-[10px] w-[10px] -translate-y-1/2 rotate-45 border-r-2 border-b-2"
                                        >
                                        </span>
                                    </div>                                    
                                </div>
                            </div>
                            <div class="text-center">
                                <input type="submit" value="Dodaj" class="cursor-pointer border-gray-500 hover:bg-primary hover:border-primary rounded-lg border py-[10px] px-[12px] text-base font-semibold text-dark transition-all hover:text-white sm:py-3 sm:px-6 m-5">
                                <a href="/apartments" class="cursor-pointer border-gray-500 hover:bg-primary hover:border-primary inline-flex items-center justify-center rounded-lg border py-[10px] px-[12px] text-center text-base font-semibold text-gray-300 transition-all hover:text-white sm:py-3 sm:px-6 m-5">Anuluj</a>
                            </div>
                        </form>
                        </div>
                    </div>
            </div>
        </div>
    </div>
</x-app-layout>
