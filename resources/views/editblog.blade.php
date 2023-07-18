<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Dodaj nowy wpis dziennika
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="bg-dark py-2 px-5 text-white text-right">Pola oznaczone gwiazdką są wymagane</div>
                <div class="container flex justify-center">
                    <div class="mb-12 w-[800px]">
                        <form action="/blog/edit/{{ $blog->id }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="mt-10 mb-2"><label>Wpisz tytuł wpisu *<label></div>
                            @error('name')<div class="text-alert">{{ $message }}</div>@enderror
                            <div class="pb-5">
                                <input type="text" placeholder="Tytuł wpisu" class="@error('name') border-alert @enderror border-form-stroke text-body-color placeholder-body-color focus:border-primary active:border-primary rounded-lg border-[1.5px] py-3 px-5 font-medium outline-none transition disabled:cursor-default disabled:bg-[#F5F7FD]  w-[800px]" name="name" value="{{ $blog->name }}" />
                            </div>
                            <div class="pb-5">
                                    <textarea
                                    placeholder="Opis"
                                    class="@error('description') border-alert @enderror border-form-stroke text-body-color placeholder-body-color focus:border-primary active:border-primary rounded-lg border-[1.5px] py-3 px-5 font-medium outline-none transition disabled:cursor-default disabled:bg-[#F5F7FD]  w-[800px] h-[200px]"
                                    name="description"
                                    />{{ $blog->description }}</textarea>
                            </div>
                            <div class="pb-5">
                                <div class="mx-auto">
                                    <div class="mb-6">
                                        <label for="" class="mb-3 block text-base font-medium text-black w-96">
                                        Dodaj zdjęcie główne
                                        </label>
                                        <input
                                            type="file"
                                            class="border-form-stroke text-body-color placeholder-body-color focus:border-primary active:border-primary file:border-form-stroke file:text-body-color file:hover:bg-primary w-full cursor-pointer rounded-lg border-[1.5px] font-medium outline-none transition file:mr-5 file:border-collapse file:cursor-pointer file:border-0 file:border-r file:border-solid file:bg-[#F5F7FD] file:py-1 file:px-3 file:hover:bg-opacity-10 disabled:cursor-default disabled:bg-[#F5F7FD]"
                                            name="image"
                                            />
                                    </div>
                                </div>
                            </div>
                            <div class="pb-5 grid grid-cols-4 gap-4">
                                @foreach($blogitems as $item)
                                <div class="">
                                    <a href="/blog/edit/{{ $blog->id }}/delete/{{$item->id}}"><img src="{{Storage::url('blog/'.$item->filename)}}" class="rounded-xl hover:opacity-50"></a>
                                </div>
                                @endforeach
                            </div>                    
                            <div class="text-center">
                                <input type="submit" value="Zapisz" class="cursor-pointer border-gray-500 hover:bg-primary hover:border-primary inline-flex items-center justify-center rounded-lg border py-[10px] px-[12px] text-center text-base font-semibold text-dark transition-all hover:text-white sm:py-3 sm:px-6 m-5">
                                <a href="/blog" class="cursor-pointer border-gray-500 hover:bg-primary hover:border-primary inline-flex items-center justify-center rounded-lg border py-[10px] px-[12px] text-center text-base font-semibold text-gray-300 transition-all hover:text-white sm:py-3 sm:px-6 m-5">Zamknij</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>