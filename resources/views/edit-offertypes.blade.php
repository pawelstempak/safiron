<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Edytuj typ oferty
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="bg-dark py-2 px-5 text-white text-right">Pola oznaczone gwiazdką są wymagane</div>
                    <div class="container flex justify-center">
                        <div class="mb-12 w-96">
                            <form action="/offertypes/edit/{{ $offertypes->id }}" method="post">
                            @csrf
                            <div class="mt-10 mb-2"><label>Wpisz nazwę typu oferty *<label></div>
                            @error('name')<div class="text-alert">{{ $message }}</div>@enderror
                            <div class="pb-10">
                            <input
                                type="text"
                                class="@error('name') border-alert @enderror border-form-stroke text-body-color placeholder-body-color focus:border-primary active:border-primary rounded-lg border-[1.5px] py-3 px-5 font-medium outline-none transition disabled:cursor-default disabled:bg-[#F5F7FD]  w-96"
                                value="{{ $offertypes->name }}"
                                name="name"
                                />
                            </div>
                            <div class="text-center">
                                <input type="submit" name="save_button" value="Zapisz"  class="cursor-pointer border-gray-500 hover:bg-primary hover:border-primary inline-flex items-center justify-center rounded-lg border py-[10px] px-[12px] text-center text-base font-semibold text-dark transition-all hover:text-white sm:py-3 sm:px-6">
                                <input type="submit" name="save_button" value="Zapisz i zamknij"  class="cursor-pointer border-gray-500 hover:bg-primary hover:border-primary inline-flex items-center justify-center rounded-lg border py-[10px] px-[12px] text-center text-base font-semibold text-dark transition-all hover:text-white sm:py-3 sm:px-6">
                                <a href="/offertypes" class="cursor-pointer border-gray-500 hover:bg-primary hover:border-primary inline-flex items-center justify-center rounded-lg border py-[10px] px-[12px] text-center text-base font-semibold text-gray-300 transition-all hover:text-white sm:py-3 sm:px-6">Anuluj</a>
                            </div>
                        </form>
                        </div>
                    </div>
            </div>
        </div>
    </div>
</x-app-layout>