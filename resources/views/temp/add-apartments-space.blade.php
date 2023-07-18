<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Dodaj status
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="bg-dark py-2 px-5 text-white text-right">Pola oznaczone gwiazdką są wymagane</div>
                    <div class="container flex justify-center">
                        <div class="mb-12 w-96">
                            <form action="/apartments/addspace/{{$id}}" method="post">
                            @csrf

                                <div class="pb-10 pt-10">
                                <div><label class="font-semibold">Wpisz nazwę pomieszczenia *<label></div>
                                @error('name')<div class="text-alert">{{ $message }}</div>@enderror                           
                                <input
                                    type="text"
                                    placeholder="np. pokój, kuchnia, taras, balkon"
                                    class="border-form-stroke text-body-color placeholder-body-color focus:border-primary active:border-primary rounded-lg border-[1.5px] py-3 px-5 font-medium outline-none transition disabled:cursor-default disabled:bg-[#F5F7FD]  w-96"
                                    name="name"
                                    value="{{old('name')}}"
                                    />
                                </div>
                                <div class="pb-10">
                                <div><label class="font-semibold">Powierzchnia pomieszczenia m<sup>2</sup> *<label></div>
                                @error('space_squarefootage')<div class="text-alert">{{ $message }}</div>@enderror                                    
                                <input
                                    type="text"
                                    placeholder="Metraż np. 74.34"
                                    class="border-form-stroke text-body-color placeholder-body-color focus:border-primary active:border-primary rounded-lg border-[1.5px] py-3 px-5 font-medium outline-none transition disabled:cursor-default disabled:bg-[#F5F7FD]  w-96"
                                    name="squarefootage"
                                    value="{{old('squarefootage')}}"
                                    />
                                </div>
                                <div><label class="font-semibold">Typ *<label></div>                        
                                <div class="pb-10">
                                    <select
                                    class="border-form-stroke text-body-color focus:border-primary active:border-primary w-96 appearance-none rounded-lg border-[1.5px] py-3 px-5 font-medium outline-none transition disabled:cursor-default disabled:bg-[#F5F7FD]"
                                    name="type"
                                    >
                                    <option value="0">Wewnętrze</option>
                                    <option value="1">Zewnętrze</option>
                                    </select>
                                    <span
                                    class="border-body-color absolute right-4 top-1/2 mt-[-2px] h-[10px] w-[10px] -translate-y-1/2 rotate-45 border-r-2 border-b-2"
                                    >
                                    </span>
                                </div>                                   

                            <div class="text-center">
                                <input type="submit" value="Dodaj" class="cursor-pointer border-gray-500 hover:bg-primary hover:border-primary inline-flex items-center justify-center rounded-lg border py-[10px] px-[12px] text-center text-base font-semibold text-dark transition-all hover:text-white sm:py-3 sm:px-6 m-5">
                                <a href="/apartments/edit/{{$id}}" class="cursor-pointer border-gray-500 hover:bg-primary hover:border-primary inline-flex items-center justify-center rounded-lg border py-[10px] px-[12px] text-center text-base font-semibold text-gray-300 transition-all hover:text-white sm:py-3 sm:px-6 m-5">Anuluj</a>
                            </div>
                        </form>
                        </div>
                    </div>
            </div>
        </div>
    </div>
</x-app-layout>