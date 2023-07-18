<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Edytuj lokal
        </h2>
    </x-slot>

    <form action="/apartments/edit/{{$apartments->id}}" method="post" enctype="multipart/form-data">
                            @csrf                            


<div id="accordionFlushExample" class="max-w-7xl mx-auto py-12">
  <div
    class="mb-6 rounded-lg border border-l-0 border-r-0 border-t-0 border-neutral-200 bg-white dark:border-neutral-600 dark:bg-neutral-800 shadow-xl">
    <h2 class="mb-0" id="flush-headingOne">
      <button
        class="group relative flex w-full items-center rounded-lg border-0 bg-white px-5 py-4 text-left text-base text-neutral-800 transition [overflow-anchor:none] hover:z-[2] focus:z-[3] focus:outline-none dark:bg-neutral-800 dark:text-white [&:not([data-te-collapse-collapsed])]:bg-dark [&:not([data-te-collapse-collapsed])]:text-white [&:not([data-te-collapse-collapsed])]:[box-shadow:inset_0_-1px_0_rgba(229,231,235)] dark:[&:not([data-te-collapse-collapsed])]:bg-neutral-800 dark:[&:not([data-te-collapse-collapsed])]:text-primary-400 dark:[&:not([data-te-collapse-collapsed])]:[box-shadow:inset_0_-1px_0_rgba(75,85,99)]"
        type="button"
        data-te-collapse-init
        data-te-target="#flush-collapseOne"
        aria-expanded="false"
        aria-controls="flush-collapseOne">
        Parametry podstawowe
        <span
          class=" -mr-1 ml-auto h-5 w-5 shrink-0 rotate-[-180deg] fill-[#336dec] transition-transform duration-200 ease-in-out group-[[data-te-collapse-collapsed]]:mr-0 group-[[data-te-collapse-collapsed]]:rotate-0 group-[[data-te-collapse-collapsed]]:fill-[#212529] motion-reduce:transition-none dark:fill-blue-300 dark:group-[[data-te-collapse-collapsed]]:fill-white">
          <svg
            xmlns="http://www.w3.org/2000/svg"
            fill="none"
            viewBox="0 0 24 24"
            stroke-width="1.5"
            stroke="currentColor"
            class="h-6 w-6">
            <path
              stroke-linecap="round"
              stroke-linejoin="round"
              d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
          </svg>
        </span>
      </button>
    </h2>
    <div
      id="flush-collapseOne"
      class="!visible border-0"
      data-te-collapse-item
      data-te-collapse-show
      aria-labelledby="flush-headingOne"
      >

                <div class="container flex justify-center">
                    <div class="mb-12">
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
                                        value="{{$apartments->name}}"
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
                                        value="{{$apartments->number}}"
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
                                        value="{{$apartments->square_footage}}"
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
                                        value="{{$apartments->rooms}}"
                                        />
                                    </div>       
                                    <div class="pb-10">
                                    <div><label class="font-semibold">Wpisz cenę lokalu<label></div>
                                    @error('price')<div class="text-alert">{{ $message }}</div>@enderror                                   
                                    <input
                                        type="text"
                                        placeholder="np. 345000"
                                        class="border-form-stroke text-body-color placeholder-body-color focus:border-primary active:border-primary rounded-lg border-[1.5px] py-3 px-5 font-medium outline-none transition disabled:cursor-default disabled:bg-[#F5F7FD]  w-96"
                                        name="price"
                                        value="{{$apartments->price}}"
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
                                        <option value="{{ $bl->id }}" @if($bl->id == $apartments->buildings_id) selected @endif>{{ $bl->name }}</option>
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
                                            <option value="{{$i}}" @if($i == $apartments->storey) selected @endif>@if($i==0) Parter @else {{$i}} @endif</option>
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
                                        <option value="{{ $ol->id }}" @if($ol->id == $apartments->offertypes_id) selected @endif>{{ $ol->name }}</option>
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
                                        <option value="{{ $sl->id }}" @if($sl->id == $apartments->status_id) selected @endif>{{ $sl->name }}</option>
                                        @endforeach
                                        </select>
                                        <span
                                        class="border-body-color absolute right-4 top-1/2 mt-[-2px] h-[10px] w-[10px] -translate-y-1/2 rotate-45 border-r-2 border-b-2"
                                        >
                                        </span>
                                    </div>
                                    <div><label class="font-semibold">Karta lokalu<label></div>                                   
                                    <div class="pt-2">
                                    @if($apartments->card==null)
                                    <input
                                        type="file"
                                        class="border-form-stroke text-body-color placeholder-body-color focus:border-primary active:border-primary file:border-form-stroke file:text-body-color file:hover:bg-primary w-full cursor-pointer rounded-lg border-[1.5px] font-medium outline-none transition file:mr-5 file:border-collapse file:cursor-pointer file:border-0 file:border-r file:border-solid file:bg-[#F5F7FD] file:py-1 file:px-2 file:hover:bg-opacity-10 disabled:cursor-default disabled:bg-[#F5F7FD]"
                                        name="apartment_card"
                                        />
                                    @else
                                    <div class="flex flex-row">
                                    <div class="pb-1"><a href="{{Storage::url('cards/'.$apartments->card)}}" target="_blank">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-file-pdf mx-auto" viewBox="0 0 22 22">
                                            <path d="M4 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H4zm0 1h8a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1z"/>
                                            <path d="M4.603 12.087a.81.81 0 0 1-.438-.42c-.195-.388-.13-.776.08-1.102.198-.307.526-.568.897-.787a7.68 7.68 0 0 1 1.482-.645 19.701 19.701 0 0 0 1.062-2.227 7.269 7.269 0 0 1-.43-1.295c-.086-.4-.119-.796-.046-1.136.075-.354.274-.672.65-.823.192-.077.4-.12.602-.077a.7.7 0 0 1 .477.365c.088.164.12.356.127.538.007.187-.012.395-.047.614-.084.51-.27 1.134-.52 1.794a10.954 10.954 0 0 0 .98 1.686 5.753 5.753 0 0 1 1.334.05c.364.065.734.195.96.465.12.144.193.32.2.518.007.192-.047.382-.138.563a1.04 1.04 0 0 1-.354.416.856.856 0 0 1-.51.138c-.331-.014-.654-.196-.933-.417a5.716 5.716 0 0 1-.911-.95 11.642 11.642 0 0 0-1.997.406 11.311 11.311 0 0 1-1.021 1.51c-.29.35-.608.655-.926.787a.793.793 0 0 1-.58.029zm1.379-1.901c-.166.076-.32.156-.459.238-.328.194-.541.383-.647.547-.094.145-.096.25-.04.361.01.022.02.036.026.044a.27.27 0 0 0 .035-.012c.137-.056.355-.235.635-.572a8.18 8.18 0 0 0 .45-.606zm1.64-1.33a12.647 12.647 0 0 1 1.01-.193 11.666 11.666 0 0 1-.51-.858 20.741 20.741 0 0 1-.5 1.05zm2.446.45c.15.162.296.3.435.41.24.19.407.253.498.256a.107.107 0 0 0 .07-.015.307.307 0 0 0 .094-.125.436.436 0 0 0 .059-.2.095.095 0 0 0-.026-.063c-.052-.062-.2-.152-.518-.209a3.881 3.881 0 0 0-.612-.053zM8.078 5.8a6.7 6.7 0 0 0 .2-.828c.031-.188.043-.343.038-.465a.613.613 0 0 0-.032-.198.517.517 0 0 0-.145.04c-.087.035-.158.106-.196.283-.04.192-.03.469.046.822.024.111.054.227.09.346z"/>
                                        </svg>                                    
                                        </a>
                                    </div>
                                    <div><a href="{{Storage::url('cards/'.$apartments->card)}}" target="_blank" class="underline">Pokaż kartę lokalu</a> <a href="/apartments/deletecard/{{$apartments->id}}" class="ml-3 bg-primary hover:bg-primary/50 rounded text-xs p-1 text-white">Usuń kartę</a></div>
                                    </div>                                                                           
                                    @endif
                                    </div>                                                                        
                                </div>
                            </div>
                            <div class="text-center">  
                                <input type="submit" name="save_button" value="Zapisz" class="cursor-pointer border-gray-500 hover:bg-primary hover:border-primary inline-flex items-center justify-center rounded-lg border py-2 px-3 text-center text-base font-semibold text-dark transition-all hover:text-white m-2">
                                <input type="submit" name="save_button" value="Zapisz i zamknij" class="cursor-pointer border-gray-500 hover:bg-primary hover:border-primary inline-flex items-center justify-center rounded-lg border py-2 px-3 text-center text-base font-semibold text-dark transition-all hover:text-white m-2">
                                <a href="/apartments" class="cursor-pointer border-gray-500 hover:bg-primary hover:border-primary inline-flex items-center justify-center rounded-lg border py-2 px-3 text-center text-base font-semibold text-gray-300 transition-all hover:text-white m-2">Anuluj</a>
                            </div>
                    </div>
                </div>

    </div>
  </div>

  <div
    class="mb-6 rounded-lg border border-l-0 border-r-0 border-t-0 border-neutral-200 bg-white dark:border-neutral-600 dark:bg-neutral-800 shadow-xl">
    <h2 class="mb-0" id="flush-headingOneO">
      <button
        class="group relative flex w-full items-center rounded-lg border-0 bg-white px-5 py-4 text-left text-base text-neutral-800 transition [overflow-anchor:none] hover:z-[2] focus:z-[3] focus:outline-none dark:bg-neutral-800 dark:text-white [&:not([data-te-collapse-collapsed])]:bg-dark [&:not([data-te-collapse-collapsed])]:text-white [&:not([data-te-collapse-collapsed])]:[box-shadow:inset_0_-1px_0_rgba(229,231,235)] dark:[&:not([data-te-collapse-collapsed])]:bg-neutral-800 dark:[&:not([data-te-collapse-collapsed])]:text-primary-400 dark:[&:not([data-te-collapse-collapsed])]:[box-shadow:inset_0_-1px_0_rgba(75,85,99)]"
        type="button"
        data-te-collapse-init
        data-te-target="#flush-collapseOneO"
        aria-expanded="false"
        aria-controls="flush-collapseOneO">
        Pomieszczenia
        <span
          class=" -mr-1 ml-auto h-5 w-5 shrink-0 rotate-[-180deg] fill-[#336dec] transition-transform duration-200 ease-in-out group-[[data-te-collapse-collapsed]]:mr-0 group-[[data-te-collapse-collapsed]]:rotate-0 group-[[data-te-collapse-collapsed]]:fill-[#212529] motion-reduce:transition-none dark:fill-blue-300 dark:group-[[data-te-collapse-collapsed]]:fill-white">
          <svg
            xmlns="http://www.w3.org/2000/svg"
            fill="none"
            viewBox="0 0 24 24"
            stroke-width="1.5"
            stroke="currentColor"
            class="h-6 w-6">
            <path
              stroke-linecap="round"
              stroke-linejoin="round"
              d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
          </svg>
        </span>
      </button>
    </h2>
    <div
      id="flush-collapseOneO"
      class="!visible border-0"
      data-te-collapse-item
      data-te-collapse-show
      aria-labelledby="flush-headingOneO"
      >

                <div class="container flex justify-center">
                    <div class="mb-12">
                        <div class="grid grid-cols-2 content-start mt-10">
                            <div class="px-10 w-96">  
                              <p class="bg-primary text-white py-1 px-3 my-1">Wewnętrzne</p>                          
                              @foreach ($insidespaceslist as $isl)
                              <p class="py-1 px-3 my-1">{{ $isl->name }} {{ $isl->square_footage }} m<sup>2</sup>
                              <a href="/apartments/{{$apartments->id}}/spacedelete/{{$isl->id}}" class="bg-primary rounded hover:bg-primary/75 text-xs p-1 text-white">
                                Usuń
                              </a></p>
                              @endforeach
                            </div>                             
                            <div class="px-10">
                              <p class="bg-primary text-white py-1 px-3 my-1">Zewnętrzne</p>   
                            @foreach ($outsidespaceslist as $osl)
                              <p class="py-1 px-3 my-1">{{ $osl->name }} {{ $osl->square_footage }} m<sup>2</sup>
                              <a href="/apartments/{{$apartments->id}}/spacedelete/{{$osl->id}}" class="bg-primary rounded hover:bg-primary/75 text-xs p-1 text-white">
                                Usuń
                              </a></p>
                              @endforeach                                    
                            </div>
                        </div>
                        <div class="text-center">  
                            {{-- <input type="submit" name="save_button" value="Zapisz" class="cursor-pointer border-gray-500 hover:bg-primary hover:border-primary inline-flex items-center justify-center rounded-lg border py-2 px-3 text-center text-base font-semibold text-dark transition-all hover:text-white m-2">
                            <input type="submit" name="save_button" value="Zapisz i zamknij" class="cursor-pointer border-gray-500 hover:bg-primary hover:border-primary inline-flex items-center justify-center rounded-lg border py-2 px-3 text-center text-base font-semibold text-dark transition-all hover:text-white m-2">
                            --}}
                            <a href="/apartments/addspace/{{$apartments->id}}/" class="cursor-pointer border-gray-500 hover:bg-primary hover:border-primary inline-flex items-center justify-center rounded-lg border py-2 px-3 text-center text-base font-semibold text-dark transition-all hover:text-white m-2">Dodaj</a>
                        </div>
                    </div>
                </div>

    </div>
  </div>

  <div
    class="mb-6 rounded-lg border border-l-0 border-r-0 border-t-0 border-neutral-200 bg-white dark:border-neutral-600 dark:bg-neutral-800 shadow-xl">
    <h2 class="mb-0" id="flush-headingThree">
      <button
        class="group relative flex w-full items-center rounded-lg border-0 bg-white px-5 py-4 text-left text-base text-neutral-800 transition [overflow-anchor:none] hover:z-[2] focus:z-[3] focus:outline-none dark:bg-neutral-800 dark:text-white [&:not([data-te-collapse-collapsed])]:bg-dark [&:not([data-te-collapse-collapsed])]:text-white [&:not([data-te-collapse-collapsed])]:[box-shadow:inset_0_-1px_0_rgba(229,231,235)] dark:[&:not([data-te-collapse-collapsed])]:bg-neutral-800 dark:[&:not([data-te-collapse-collapsed])]:text-primary-400 dark:[&:not([data-te-collapse-collapsed])]:[box-shadow:inset_0_-1px_0_rgba(75,85,99)]"
        type="button"
        data-te-collapse-init
        data-te-target="#flush-collapseThree"
        aria-expanded="false"
        aria-controls="flush-collapseThree">
        Zdjęcia
        <span
          class="-mr-1 ml-auto h-5 w-5 shrink-0 rotate-[-180deg] fill-[#336dec] transition-transform duration-200 ease-in-out group-[[data-te-collapse-collapsed]]:mr-0 group-[[data-te-collapse-collapsed]]:rotate-0 group-[[data-te-collapse-collapsed]]:fill-[#212529] motion-reduce:transition-none dark:fill-blue-300 dark:group-[[data-te-collapse-collapsed]]:fill-white">
          <svg
            xmlns="http://www.w3.org/2000/svg"
            fill="none"
            viewBox="0 0 24 24"
            stroke-width="1.5"
            stroke="currentColor"
            class="h-6 w-6">
            <path
              stroke-linecap="round"
              stroke-linejoin="round"
              d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
          </svg>
        </span>
      </button>
    </h2>
    <div
      id="flush-collapseThree"
      class="!visible"
      data-te-collapse-item
      data-te-collapse-show
      aria-labelledby="flush-headingThree"
      >
        <div class="container w-full">
          <div class="flex flex-row flex-auto">

            @if($isMainImageExist)
            <div class="my-6 w-1/2 px-20">
                <div>Zdjęcie główne</div>
                <div class="m-5 text-center mx-auto">
                <img src="{{Storage::url('images/'.$main_image->filename)}}" class="rounded-xl">
                <a 
                class="bg-sand hover:bg-primary px-3 rounded text-white cursor-pointer" 
                data-te-toggle="modal" 
                data-te-target="#delete{{$main_image->id}}" 
                data-te-ripple-init 
                data-te-ripple-color="light">Usuń</a>
                <x-modal-delete type="images" :id="$main_image->id"/>           
                </div>
            </div>
            @endif          
            @if($isMainImageExist==null)
            <div class="my-6">
              <div class="mx-auto">
                  <div class="mb-6 px-20">
                      <label for="" class="mb-3 block text-base font-medium text-black w-96">
                      Dodaj zdjęcie główne
                      </label>
                      <input
                          type="file"
                          class="border-form-stroke text-body-color placeholder-body-color focus:border-primary active:border-primary file:border-form-stroke file:text-body-color file:hover:bg-primary w-full cursor-pointer rounded-lg border-[1.5px] font-medium outline-none transition file:mr-5 file:border-collapse file:cursor-pointer file:border-0 file:border-r file:border-solid file:bg-[#F5F7FD] file:py-1 file:px-3 file:hover:bg-opacity-10 disabled:cursor-default disabled:bg-[#F5F7FD]"
                          name="main_image"
                          />
                  </div>
              </div>
            </div>
            @endif 

            @if($is3dSketchImageExist)
            <div class="my-6 w-1/2 px-20">
            <div>Rzut 3D</div>
                <div class="m-5 text-center mx-auto">
                <img src="{{Storage::url('images/'.$sketch_image->filename)}}" class="rounded-xl">
                <a 
                class="bg-sand hover:bg-primary px-3 rounded text-white cursor-pointer" 
                data-te-toggle="modal" 
                data-te-target="#delete{{$sketch_image->id}}" 
                data-te-ripple-init 
                data-te-ripple-color="light">Usuń</a>
                <x-modal-delete type="images" :id="$sketch_image->id"/>           
                </div>
            </div>
            @endif          
            @if($is3dSketchImageExist==null)
            <div class="my-6">
              <div class="mx-auto">
                  <div class="mb-6 px-20">
                      <label for="" class="mb-3 block text-base font-medium text-black w-96">
                      Dodaj Rzut 3D
                      </label>
                      <input
                          type="file"
                          class="border-form-stroke text-body-color placeholder-body-color focus:border-primary active:border-primary file:border-form-stroke file:text-body-color file:hover:bg-primary w-full cursor-pointer rounded-lg border-[1.5px] font-medium outline-none transition file:mr-5 file:border-collapse file:cursor-pointer file:border-0 file:border-r file:border-solid file:bg-[#F5F7FD] file:py-1 file:px-3 file:hover:bg-opacity-10 disabled:cursor-default disabled:bg-[#F5F7FD]"
                          name="sketch_image"
                          />
                  </div>
              </div>
            </div>
            @endif             

          </div>  
          <div class="text-center mb-5">  
            <input type="submit" name="save_button" value="Zapisz" class="cursor-pointer border-gray-500 hover:bg-primary hover:border-primary inline-flex items-center justify-center rounded-lg border py-2 px-3 text-center text-base font-semibold text-dark transition-all hover:text-white m-2">
            <input type="submit" name="save_button" value="Zapisz i zamknij" class="cursor-pointer border-gray-500 hover:bg-primary hover:border-primary inline-flex items-center justify-center rounded-lg border py-2 px-3 text-center text-base font-semibold text-dark transition-all hover:text-white m-2">
            <a href="/apartments" class="cursor-pointer border-gray-500 hover:bg-primary hover:border-primary inline-flex items-center justify-center rounded-lg border py-2 px-3 text-center text-base font-semibold text-gray-300 transition-all hover:text-white m-2">Anuluj</a>
          </div>        
        </div>                      
    </div>
  </div>

  <div id="accordionFlushExample" class="max-w-7xl mx-auto py-12">
  <div
    class="mb-6 rounded-lg border border-l-0 border-r-0 border-t-0 border-neutral-200 bg-white dark:border-neutral-600 dark:bg-neutral-800 shadow-xl">
    <h2 class="mb-0" id="flush-headingSix">
      <button
        class="group relative flex w-full items-center rounded-lg border-0 bg-white px-5 py-4 text-left text-base text-neutral-800 transition [overflow-anchor:none] hover:z-[2] focus:z-[3] focus:outline-none dark:bg-neutral-800 dark:text-white [&:not([data-te-collapse-collapsed])]:bg-dark [&:not([data-te-collapse-collapsed])]:text-white [&:not([data-te-collapse-collapsed])]:[box-shadow:inset_0_-1px_0_rgba(229,231,235)] dark:[&:not([data-te-collapse-collapsed])]:bg-neutral-800 dark:[&:not([data-te-collapse-collapsed])]:text-primary-400 dark:[&:not([data-te-collapse-collapsed])]:[box-shadow:inset_0_-1px_0_rgba(75,85,99)]"
        type="button"
        data-te-collapse-init
        data-te-target="#flush-collapseSix"
        aria-expanded="false"
        aria-controls="flush-collapSix">
        Animacje
        <span
          class=" -mr-1 ml-auto h-5 w-5 shrink-0 rotate-[-180deg] fill-[#336dec] transition-transform duration-200 ease-in-out group-[[data-te-collapse-collapsed]]:mr-0 group-[[data-te-collapse-collapsed]]:rotate-0 group-[[data-te-collapse-collapsed]]:fill-[#212529] motion-reduce:transition-none dark:fill-blue-300 dark:group-[[data-te-collapse-collapsed]]:fill-white">
          <svg
            xmlns="http://www.w3.org/2000/svg"
            fill="none"
            viewBox="0 0 24 24"
            stroke-width="1.5"
            stroke="currentColor"
            class="h-6 w-6">
            <path
              stroke-linecap="round"
              stroke-linejoin="round"
              d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
          </svg>
        </span>
      </button>
    </h2>
    <div
      id="flush-collapseSix"
      class="!visible border-0"
      data-te-collapse-item
      data-te-collapse-show
      aria-labelledby="flush-headingSix"
      >

                <div class="container flex justify-center">
                    <div class="mb-12">
                            <div class="content-center mt-10">
                                <div class="px-10">                            
                                    <div class="pb-10">
                                    <div><label class="font-semibold">Model 360<label></div>
                                    <input
                                        type="text"
                                        placeholder="Adres url"
                                        class="border-form-stroke text-body-color placeholder-body-color focus:border-primary active:border-primary rounded-lg border-[1.5px] py-3 px-5 font-medium outline-none transition disabled:cursor-default disabled:bg-[#F5F7FD] w-[800px]"
                                        name="rotatingmodel"
                                        value="{{$apartments->rotatingmodel}}"
                                        />
                                    </div>
                                    <div class="pb-10">
                                    <div><label class="font-semibold">Wirtualny spacer<label></div>
                                    <input
                                        type="text"
                                        placeholder="Adres url"
                                        class="border-form-stroke text-body-color placeholder-body-color focus:border-primary active:border-primary rounded-lg border-[1.5px] py-3 px-5 font-medium outline-none transition disabled:cursor-default disabled:bg-[#F5F7FD] w-[800px]"
                                        name="virtualwalk"
                                        value="{{$apartments->virtualwalk}}"
                                        />
                                    </div>       
                                </div>
                            </div>
                            <div class="text-center">  
                                <input type="submit" name="save_button" value="Zapisz" class="cursor-pointer border-gray-500 hover:bg-primary hover:border-primary inline-flex items-center justify-center rounded-lg border py-2 px-3 text-center text-base font-semibold text-dark transition-all hover:text-white m-2">
                                <input type="submit" name="save_button" value="Zapisz i zamknij" class="cursor-pointer border-gray-500 hover:bg-primary hover:border-primary inline-flex items-center justify-center rounded-lg border py-2 px-3 text-center text-base font-semibold text-dark transition-all hover:text-white m-2">
                                <a href="/apartments" class="cursor-pointer border-gray-500 hover:bg-primary hover:border-primary inline-flex items-center justify-center rounded-lg border py-2 px-3 text-center text-base font-semibold text-gray-300 transition-all hover:text-white m-2">Anuluj</a>
                            </div>
                    </div>
                </div>

    </div>
  </div>

  <div
    class="mb-6 rounded-lg border border-l-0 border-r-0 border-t-0 border-neutral-200 bg-white dark:border-neutral-600 dark:bg-neutral-800 shadow-xl">
    <h2 class="mb-0" id="flush-headingTwo">
      <button
        class="group relative flex w-full items-center rounded-lg border-0 bg-white px-5 py-4 text-left text-base text-neutral-800 transition [overflow-anchor:none] hover:z-[2] focus:z-[3] focus:outline-none dark:bg-neutral-800 dark:text-white [&:not([data-te-collapse-collapsed])]:bg-dark [&:not([data-te-collapse-collapsed])]:text-white [&:not([data-te-collapse-collapsed])]:[box-shadow:inset_0_-1px_0_rgba(229,231,235)] dark:[&:not([data-te-collapse-collapsed])]:bg-neutral-800 dark:[&:not([data-te-collapse-collapsed])]:text-primary-400 dark:[&:not([data-te-collapse-collapsed])]:[box-shadow:inset_0_-1px_0_rgba(75,85,99)]"
        type="button"
        data-te-collapse-init
        
        data-te-target="#flush-collapseTwo"
        aria-expanded="false"
        aria-controls="flush-collapseTwo">
        Pola tekstowe
        <span
          class="-mr-1 ml-auto h-5 w-5 shrink-0 rotate-[-180deg] fill-[#336dec] transition-transform duration-200 ease-in-out group-[[data-te-collapse-collapsed]]:mr-0 group-[[data-te-collapse-collapsed]]:rotate-0 group-[[data-te-collapse-collapsed]]:fill-[#212529] motion-reduce:transition-none dark:fill-blue-300 dark:group-[[data-te-collapse-collapsed]]:fill-white">
          <svg
            xmlns="http://www.w3.org/2000/svg"
            fill="none"
            viewBox="0 0 24 24"
            stroke-width="1.5"
            stroke="currentColor"
            class="h-6 w-6">
            <path
              stroke-linecap="round"
              stroke-linejoin="round"
              d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
          </svg>
        </span>
      </button>
    </h2>
    <div
      id="flush-collapseTwo"
      class="!visible border-0"
      data-te-collapse-item
      data-te-collapse-show
      aria-labelledby="flush-headingTwo"
      >

      <div class="container flex justify-center">
                        <div class="mb-12">
                            <div class="content-start mt-10">
                                <div class="px-10">                            
                                    <div class="pb-10">
                                    <div><label class="font-semibold">Pole opisowe 1<label></div>
                                    <textarea
                                    placeholder="Wpisz treść"
                                    class="border-form-stroke text-body-color placeholder-body-color focus:border-primary active:border-primary rounded-lg border-[1.5px] py-3 px-5 font-medium outline-none transition disabled:cursor-default disabled:bg-[#F5F7FD] w-[800px] h-48"
                                    name="description1"
                                    />{{$apartments->description1}}</textarea>
                                    </div>
                                </div>                             
                            </div>
                            <div class="content-start mt-10">
                                <div class="px-10">                            
                                    <div class="pb-10">
                                    <div><label class="font-semibold">Pole opisowe 2<label></div>
                                    <textarea
                                    placeholder="Wpisz treść"
                                    class="border-form-stroke text-body-color placeholder-body-color focus:border-primary active:border-primary rounded-lg border-[1.5px] py-3 px-5 font-medium outline-none transition disabled:cursor-default disabled:bg-[#F5F7FD] w-[800px] h-48"
                                    name="description2"
                                    />{{$apartments->description2}}</textarea>
                                    </div>
                                </div>                             
                            </div>
                            <div class="content-start mt-10">
                                <div class="px-10">                            
                                    <div class="pb-10">
                                    <div><label class="font-semibold">Pole opisowe 3<label></div>
                                    <textarea
                                    placeholder="Wpisz treść"
                                    class="border-form-stroke text-body-color placeholder-body-color focus:border-primary active:border-primary rounded-lg border-[1.5px] py-3 px-5 font-medium outline-none transition disabled:cursor-default disabled:bg-[#F5F7FD] w-[800px] h-48"
                                    name="description3"
                                    />{{$apartments->description3}}</textarea>
                                    </div>
                                </div>                             
                            </div>                                                        
                            <div class="text-center">  
                                <input type="submit" name="save_button" value="Zapisz" class="cursor-pointer border-gray-500 hover:bg-primary hover:border-primary inline-flex items-center justify-center rounded-lg border py-2 px-3 text-center text-base font-semibold text-dark transition-all hover:text-white m-2">
                                <input type="submit" name="save_button" value="Zapisz i zamknij" class="cursor-pointer border-gray-500 hover:bg-primary hover:border-primary inline-flex items-center justify-center rounded-lg border py-2 px-3 text-center text-base font-semibold text-dark transition-all hover:text-white m-2">
                                <a href="/apartments" class="cursor-pointer border-gray-500 hover:bg-primary hover:border-primary inline-flex items-center justify-center rounded-lg border py-2 px-3 text-center text-base font-semibold text-gray-300 transition-all hover:text-white m-2">Anuluj</a>
                            </div>
                        </div>
                    </div>

    </div>
  </div>

  <div
    class="mb-6 rounded-lg border border-l-0 border-r-0 border-t-0 border-neutral-200 bg-white dark:border-neutral-600 dark:bg-neutral-800 shadow-xl">
    <h2 class="mb-0" id="flush-headingFour">
      <button
        class="group relative flex w-full items-center rounded-lg border-0 bg-white px-5 py-4 text-left text-base text-neutral-800 transition [overflow-anchor:none] hover:z-[2] focus:z-[3] focus:outline-none dark:bg-neutral-800 dark:text-white [&:not([data-te-collapse-collapsed])]:bg-dark [&:not([data-te-collapse-collapsed])]:text-white [&:not([data-te-collapse-collapsed])]:[box-shadow:inset_0_-1px_0_rgba(229,231,235)] dark:[&:not([data-te-collapse-collapsed])]:bg-neutral-800 dark:[&:not([data-te-collapse-collapsed])]:text-primary-400 dark:[&:not([data-te-collapse-collapsed])]:[box-shadow:inset_0_-1px_0_rgba(75,85,99)]"
        type="button"
        data-te-collapse-init
        data-te-target="#flush-collapseFour"
        aria-expanded="false"
        aria-controls="flush-collapseFour">
        Galeria
        <span
          class="-mr-1 ml-auto h-5 w-5 shrink-0 rotate-[-180deg] fill-[#336dec] transition-transform duration-200 ease-in-out group-[[data-te-collapse-collapsed]]:mr-0 group-[[data-te-collapse-collapsed]]:rotate-0 group-[[data-te-collapse-collapsed]]:fill-[#212529] motion-reduce:transition-none dark:fill-blue-300 dark:group-[[data-te-collapse-collapsed]]:fill-white">
          <svg
            xmlns="http://www.w3.org/2000/svg"
            fill="none"
            viewBox="0 0 24 24"
            stroke-width="1.5"
            stroke="currentColor"
            class="h-6 w-6">
            <path
              stroke-linecap="round"
              stroke-linejoin="round"
              d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
          </svg>
        </span>
      </button>
    </h2>
    <div
      id="flush-collapseFour"
      class="!visible"
      data-te-collapse-item
      data-te-collapse-show
      aria-labelledby="flush-headingFour"
      >
      <div class="container">
          <div class="my-6 px-10 grid grid-cols-5">
          @foreach ($gallerylist as $gl)
          <div class="m-5 text-center">
          <img src="{{Storage::url('gallery/'.$gl->filename)}}" class="rounded-xl"> 
          <a 
          class="bg-sand hover:bg-primary px-3 rounded text-white cursor-pointer" 
          data-te-toggle="modal" 
          data-te-target="#delete{{$gl->id}}" 
          data-te-ripple-init 
          data-te-ripple-color="light">Usuń</a>
          <x-modal-delete type="gallery" :id="$gl->id"/> 
          </div>
          @endforeach
          </div>
          <div class="my-6">

                <div class="mx-auto md:w-1/2 lg:w-1/3">
                    <div class="mb-6">
                        <label for="" class="mb-3 block text-base font-medium text-black w-96">
                        Dodaj nowe zdjęcie
                        </label>
                        <input
                            type="file"
                            class="border-form-stroke text-body-color placeholder-body-color focus:border-primary active:border-primary file:border-form-stroke file:text-body-color file:hover:bg-primary w-full cursor-pointer rounded-lg border-[1.5px] font-medium outline-none transition file:mr-5 file:border-collapse file:cursor-pointer file:border-0 file:border-r file:border-solid file:bg-[#F5F7FD] file:py-1 file:px-2 file:hover:bg-opacity-10 disabled:cursor-default disabled:bg-[#F5F7FD]"
                            name="gallery_image"
                            />
                    </div>
                </div>

                <div class="text-center">  
                    <input type="submit" name="save_button" value="Zapisz" class="cursor-pointer border-gray-500 hover:bg-primary hover:border-primary inline-flex items-center justify-center rounded-lg border py-2 px-3 text-center text-base font-semibold text-dark transition-all hover:text-white m-2">
                    <input type="submit" name="save_button" value="Zapisz i zamknij" class="cursor-pointer border-gray-500 hover:bg-primary hover:border-primary inline-flex items-center justify-center rounded-lg border py-2 px-3 text-center text-base font-semibold text-dark transition-all hover:text-white m-2">
                    <a href="/apartments" class="cursor-pointer border-gray-500 hover:bg-primary hover:border-primary inline-flex items-center justify-center rounded-lg border py-2 px-3 text-center text-base font-semibold text-gray-300 transition-all hover:text-white m-2">Anuluj</a>
                </div>                
        </div>
      </div>
    </div>
  </div>  
</div>

</form>
</x-app-layout>