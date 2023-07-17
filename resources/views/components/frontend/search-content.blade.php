<div class="xl:mx-3 2xl:container 2xl:mx-auto">
    <div class="lg:grid lg:grid-cols-4">
        <div class="mt-10 mb-20 lg:col-span-1 mr-5">
            <div class="w-full bg-primary p-10">
                <form action="/search" method="post" id="searchForm" x-ref="myForm" x-data>
                    @csrf
                    <div class="mb-2">
                        <label for="" class="mb-2 block text-3xl font-exo text-white">
                            ZNAJDŹ MIESZKANIE
                        </label>
                        <br>
                        <div class="relative mb-6 text-white">
                            <label class="mb-1 block text-base font-medium text-slate-400">Powierzchnia m<sup>2</sup></label>
                            <style>
                                input[type=range]::-webkit-slider-thumb {
                                    pointer-events: all;
                                    width: 24px;
                                    height: 24px;
                                    -webkit-appearance: none;
                                    /* @apply w-6 h-6 appearance-none pointer-events-auto; */
                                }

                                input[type=range]::-moz-range-thumb {
                                    pointer-events: all;
                                    width: 24px;
                                    height: 24px;
                                    -moz-appearance: none;
                                    /* @apply w-6 h-6 appearance-none pointer-events-auto; */
                                }
                            </style>
                            <div x-data="range()" x-init="mintrigger(); maxtrigger()" class="mt-1">
                                <div class="flex justify-center items-center">
                                    <div class="flex flex-row max-w-xl w-full">
                                        <div>
                                            <input @change="$refs.myForm.submit()" type="text" maxlength="5" x-on:input="mintrigger" x-model="minprice" class="px-1 py-1 border border-gray-500 rounded w-10 text-center bg-[#08435f] focus:bg-secondary text-white hover:border-white">
                                        </div>

                                        <div class="relative max-w-xl w-full pt-3 px-2 mr-2">
                                            <input type="range" @click.debounce="$refs.myForm.submit()" @change="$refs.myForm.submit()" name="squarefootage[]" step="1" x-bind:min="min" x-bind:max="max" x-on:input="mintrigger" x-model="minprice" class="absolute pointer-events-none appearance-none z-20 h-2 w-full opacity-0 cursor-pointer">

                                            <input type="range" @click.debounce="$refs.myForm.submit()" @change="$refs.myForm.submit()" name="squarefootage[]" step="1" x-bind:min="min" x-bind:max="max" x-on:input="maxtrigger" x-model="maxprice" class="absolute pointer-events-none appearance-none z-20 h-2 w-full opacity-0 cursor-pointer">

                                            <div class="relative z-10 h-2">

                                                <div class="absolute z-10 left-0 right-0 bottom-0 top-0 rounded-md bg-gray-200"></div>

                                                <div class="absolute z-20 top-0 bottom-0 rounded-md bg-secondary" x-bind:style="'right:'+maxthumb+'%; left:'+minthumb+'%'"></div>

                                                <div class="absolute z-30 w-6 h-6 top-0 left-0 bg-secondary rounded-full -mt-2 -ml-1" x-bind:style="'left: '+minthumb+'%'"></div>

                                                <div class="absolute z-30 w-6 h-6 top-0 right-0 bg-secondary rounded-full -mt-2 -mr-3" x-bind:style="'right: '+maxthumb+'%'"></div>

                                            </div>
                                        </div>
                                        <div>
                                            <input @change="$refs.myForm.submit()" type="text" maxlength="5" x-on:input="maxtrigger" x-model="maxprice" class="px-1 py-1 border border-gray-500 rounded w-10 text-center bg-[#08435f] focus:bg-secondary text-white hover:border-white">
                                        </div>

                                    </div>

                                    <script>
                                        function range() {
                                            return {
                                                minprice: <?= isset($_POST['squarefootage'][0]) ? $_POST['squarefootage'][0] : floor($minsquarefootage) ?>,
                                                maxprice: <?= isset($_POST['squarefootage'][1]) ? $_POST['squarefootage'][1] : ceil($maxsquarefootage) ?>,
                                                min: <?= floor($minsquarefootage) ?>,
                                                max: <?= ceil($maxsquarefootage) ?>,
                                                minthumb: 0,
                                                maxthumb: 0,

                                                mintrigger() {
                                                    this.minprice = Math.min(this.minprice, this.maxprice - 1);
                                                    this.minthumb = ((this.minprice - this.min) / (this.max - this.min)) * 100;
                                                },

                                                maxtrigger() {
                                                    this.maxprice = Math.max(this.maxprice, this.minprice + 1);
                                                    this.maxthumb = 100 - (((this.maxprice - this.min) / (this.max - this.min)) * 100);
                                                },
                                            }
                                        }
                                    </script>
                                </div>
                            </div>
                        </div>
                        <div class="relative pb-3 text-white">
                            <label class="mb-1 block text-base font-medium text-slate-400">Piętro:</label>
                            <div class="relative pb-3">
                                <div class="mb-[0.125rem] block min-h-[1.5rem] pl-[1.5rem]">
                                    <input @click="$refs.myForm.submit()" class="text-secondary active:border-secondary relative float-left -ml-[1.5rem] mr-[6px] mt-[0.15rem] h-[1.125rem] w-[1.125rem] appearance-none rounded-[0.25rem] border-[0.125rem] border-solid border-neutral-300 outline-none before:pointer-events-none before:absolute before:h-[0.875rem] before:w-[0.875rem] before:scale-0 before:rounded-full before:bg-transparent before:opacity-0 before:shadow-[0px_0px_0px_13px_transparent] before:content-[''] checked:border-secondary checked:bg-secondary checked:hover:border-white checked:before:opacity-[0.16] checked:after:absolute checked:after:-mt-px checked:after:ml-[0.25rem] checked:after:block checked:after:h-[0.8125rem] checked:after:w-[0.375rem] checked:after:rotate-45 checked:after:border-[0.125rem] checked:after:border-l-0 checked:after:border-t-0 checked:after:border-solid checked:after:border-white checked:after:bg-transparent checked:after:content-[''] hover:cursor-pointer hover:before:opacity-[0.04] hover:before:shadow-[0px_0px_0px_13px_rgba(0,0,0,0.6)] focus:shadow-none focus:transition-[border-color_0.2s] focus:before:scale-100 focus:before:opacity-[0.12] focus:before:shadow-[0px_0px_0px_13px_rgba(0,0,0,0.6)] focus:before:transition-[box-shadow_0.2s,transform_0.2s] focus:after:absolute focus:after:z-[1] focus:after:block focus:after:h-[0.875rem] focus:after:w-[0.875rem] focus:after:rounded-[0.125rem] focus:after:content-[''] checked:focus:before:scale-100 checked:focus:before:shadow-[0px_0px_0px_13px_#00E200] checked:focus:before:transition-[box-shadow_0.2s,transform_0.2s] checked:focus:after:-mt-px checked:focus:after:ml-[0.25rem] checked:focus:after:h-[0.8125rem] checked:focus:after:w-[0.375rem] checked:focus:after:rotate-45 checked:focus:after:rounded-none checked:focus:after:border-[0.125rem] checked:focus:after:border-l-0 checked:focus:after:border-t-0 checked:focus:after:border-solid checked:focus:after:border-white checked:focus:after:bg-transparent dark:border-neutral-600 dark:checked:border-primary dark:checked:bg-primary dark:focus:before:shadow-[0px_0px_0px_13px_rgba(255,255,255,0.4)] dark:checked:focus:before:shadow-[0px_0px_0px_13px_#00E200]" type="checkbox" value="0" name="storey[]" id="storey1" {{ (in_array(0,$storey) ? 'checked' : '')}} />
                                    <label class="inline-block pl-[0.15rem] hover:cursor-pointer hover:text-secondary text-white" for="storey1">
                                        Parter
                                    </label>
                                </div>
                                <div class="mb-[0.125rem] block min-h-[1.5rem] pl-[1.5rem]">
                                    <input @click="$refs.myForm.submit()" class="text-secondary active:border-secondary relative float-left -ml-[1.5rem] mr-[6px] mt-[0.15rem] h-[1.125rem] w-[1.125rem] appearance-none rounded-[0.25rem] border-[0.125rem] border-solid border-neutral-300 outline-none before:pointer-events-none before:absolute before:h-[0.875rem] before:w-[0.875rem] before:scale-0 before:rounded-full before:bg-transparent before:opacity-0 before:shadow-[0px_0px_0px_13px_transparent] before:content-[''] checked:border-secondary checked:bg-secondary checked:hover:border-white checked:before:opacity-[0.16] checked:after:absolute checked:after:-mt-px checked:after:ml-[0.25rem] checked:after:block checked:after:h-[0.8125rem] checked:after:w-[0.375rem] checked:after:rotate-45 checked:after:border-[0.125rem] checked:after:border-l-0 checked:after:border-t-0 checked:after:border-solid checked:after:border-white checked:after:bg-transparent checked:after:content-[''] hover:cursor-pointer hover:before:opacity-[0.04] hover:before:shadow-[0px_0px_0px_13px_rgba(0,0,0,0.6)] focus:shadow-none focus:transition-[border-color_0.2s] focus:before:scale-100 focus:before:opacity-[0.12] focus:before:shadow-[0px_0px_0px_13px_rgba(0,0,0,0.6)] focus:before:transition-[box-shadow_0.2s,transform_0.2s] focus:after:absolute focus:after:z-[1] focus:after:block focus:after:h-[0.875rem] focus:after:w-[0.875rem] focus:after:rounded-[0.125rem] focus:after:content-[''] checked:focus:before:scale-100 checked:focus:before:shadow-[0px_0px_0px_13px_#00E200] checked:focus:before:transition-[box-shadow_0.2s,transform_0.2s] checked:focus:after:-mt-px checked:focus:after:ml-[0.25rem] checked:focus:after:h-[0.8125rem] checked:focus:after:w-[0.375rem] checked:focus:after:rotate-45 checked:focus:after:rounded-none checked:focus:after:border-[0.125rem] checked:focus:after:border-l-0 checked:focus:after:border-t-0 checked:focus:after:border-solid checked:focus:after:border-white checked:focus:after:bg-transparent dark:border-neutral-600 dark:checked:border-primary dark:checked:bg-primary dark:focus:before:shadow-[0px_0px_0px_13px_rgba(255,255,255,0.4)] dark:checked:focus:before:shadow-[0px_0px_0px_13px_#00E200]" type="checkbox" value="1" name="storey[]" id="storey2" {{ (in_array(1,$storey) ? 'checked' : '')}} />
                                    <label class="inline-block pl-[0.15rem] hover:cursor-pointer hover:text-secondary text-white" for="storey2">
                                        Pierwsze
                                    </label>
                                </div>
                                <div class="mb-[0.125rem] block min-h-[1.5rem] pl-[1.5rem]">
                                    <input @click="$refs.myForm.submit()" class="text-secondary active:border-secondary relative float-left -ml-[1.5rem] mr-[6px] mt-[0.15rem] h-[1.125rem] w-[1.125rem] appearance-none rounded-[0.25rem] border-[0.125rem] border-solid border-neutral-300 outline-none before:pointer-events-none before:absolute before:h-[0.875rem] before:w-[0.875rem] before:scale-0 before:rounded-full before:bg-transparent before:opacity-0 before:shadow-[0px_0px_0px_13px_transparent] before:content-[''] checked:border-secondary checked:bg-secondary checked:hover:border-white checked:before:opacity-[0.16] checked:after:absolute checked:after:-mt-px checked:after:ml-[0.25rem] checked:after:block checked:after:h-[0.8125rem] checked:after:w-[0.375rem] checked:after:rotate-45 checked:after:border-[0.125rem] checked:after:border-l-0 checked:after:border-t-0 checked:after:border-solid checked:after:border-white checked:after:bg-transparent checked:after:content-[''] hover:cursor-pointer hover:before:opacity-[0.04] hover:before:shadow-[0px_0px_0px_13px_rgba(0,0,0,0.6)] focus:shadow-none focus:transition-[border-color_0.2s] focus:before:scale-100 focus:before:opacity-[0.12] focus:before:shadow-[0px_0px_0px_13px_rgba(0,0,0,0.6)] focus:before:transition-[box-shadow_0.2s,transform_0.2s] focus:after:absolute focus:after:z-[1] focus:after:block focus:after:h-[0.875rem] focus:after:w-[0.875rem] focus:after:rounded-[0.125rem] focus:after:content-[''] checked:focus:before:scale-100 checked:focus:before:shadow-[0px_0px_0px_13px_#00E200] checked:focus:before:transition-[box-shadow_0.2s,transform_0.2s] checked:focus:after:-mt-px checked:focus:after:ml-[0.25rem] checked:focus:after:h-[0.8125rem] checked:focus:after:w-[0.375rem] checked:focus:after:rotate-45 checked:focus:after:rounded-none checked:focus:after:border-[0.125rem] checked:focus:after:border-l-0 checked:focus:after:border-t-0 checked:focus:after:border-solid checked:focus:after:border-white checked:focus:after:bg-transparent dark:border-neutral-600 dark:checked:border-primary dark:checked:bg-primary dark:focus:before:shadow-[0px_0px_0px_13px_rgba(255,255,255,0.4)] dark:checked:focus:before:shadow-[0px_0px_0px_13px_#00E200]" type="checkbox" value="2" name="storey[]" id="storey3" {{ (in_array(2,$storey) ? 'checked' : '')}} />
                                    <label class="inline-block pl-[0.15rem] hover:cursor-pointer hover:text-secondary text-white" for="storey3">
                                        Drugie
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="relative pb-3 text-white">
                            <label for="" class="mb-1 block text-base font-medium text-slate-400">
                                Budynek
                            </label>
                            <div class="relative pb-3">
                                @foreach ($buildingslist as $bl)
                                <div class="mb-[0.125rem] block min-h-[1.5rem] pl-[1.5rem]">
                                    <input @click="$refs.myForm.submit()" class="text-secondary active:border-secondary relative float-left -ml-[1.5rem] mr-[6px] mt-[0.15rem] h-[1.125rem] w-[1.125rem] appearance-none rounded-[0.25rem] border-[0.125rem] border-solid border-neutral-300 outline-none before:pointer-events-none before:absolute before:h-[0.875rem] before:w-[0.875rem] before:scale-0 before:rounded-full before:bg-transparent before:opacity-0 before:shadow-[0px_0px_0px_13px_transparent] before:content-[''] checked:border-secondary checked:bg-secondary checked:hover:border-white checked:before:opacity-[0.16] checked:after:absolute checked:after:-mt-px checked:after:ml-[0.25rem] checked:after:block checked:after:h-[0.8125rem] checked:after:w-[0.375rem] checked:after:rotate-45 checked:after:border-[0.125rem] checked:after:border-l-0 checked:after:border-t-0 checked:after:border-solid checked:after:border-white checked:after:bg-transparent checked:after:content-[''] hover:cursor-pointer hover:before:opacity-[0.04] hover:before:shadow-[0px_0px_0px_13px_rgba(0,0,0,0.6)] focus:shadow-none focus:transition-[border-color_0.2s] focus:before:scale-100 focus:before:opacity-[0.12] focus:before:shadow-[0px_0px_0px_13px_rgba(0,0,0,0.6)] focus:before:transition-[box-shadow_0.2s,transform_0.2s] focus:after:absolute focus:after:z-[1] focus:after:block focus:after:h-[0.875rem] focus:after:w-[0.875rem] focus:after:rounded-[0.125rem] focus:after:content-[''] checked:focus:before:scale-100 checked:focus:before:shadow-[0px_0px_0px_13px_#00E200] checked:focus:before:transition-[box-shadow_0.2s,transform_0.2s] checked:focus:after:-mt-px checked:focus:after:ml-[0.25rem] checked:focus:after:h-[0.8125rem] checked:focus:after:w-[0.375rem] checked:focus:after:rotate-45 checked:focus:after:rounded-none checked:focus:after:border-[0.125rem] checked:focus:after:border-l-0 checked:focus:after:border-t-0 checked:focus:after:border-solid checked:focus:after:border-white checked:focus:after:bg-transparent dark:border-neutral-600 dark:checked:border-primary dark:checked:bg-primary dark:focus:before:shadow-[0px_0px_0px_13px_rgba(255,255,255,0.4)] dark:checked:focus:before:shadow-[0px_0px_0px_13px_#00E200]" type="checkbox" value="{{$bl->id}}" name="building[]" id="building{{$loop->iteration}}" {{ (in_array($bl->id, $building) ? 'checked' : '')}} />
                                    <label class="inline-block pl-[0.15rem] hover:text-secondary hover:cursor-pointer text-white" for="building{{$loop->iteration}}">
                                        {{$bl->name}}
                                    </label>
                                </div>
                                @endforeach
                            </div>
                        </div>
                        <label class="mb-1 block text-base font-medium text-slate-400">Dostepność</label>
                        <label class="relative inline-flex items-center cursor-pointer">
                            <input type="checkbox" name="status[]" value="1" id="dostepne" class="sr-only peer" @change="$refs.myForm.submit()" {{ (in_array(1,$status) ? 'checked' : '')}}>
                            <div class="w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-1 peer-focus:ring-[#0092cc] dark:peer-focus:ring-blue-800 rounded-full peer dark:bg-gray-700 peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-[#0092cc]"></div>
                            <span class="ml-3 text-sm font-medium hover:text-[#0092cc] text-white dark:text-gray-300">Dostępne</span>
                        </label>
                        <br>
                        <label class="relative inline-flex items-center cursor-pointer">
                            <input type="checkbox" name="status[]" value="2" id="rezerwacja" class="sr-only peer" @change="$refs.myForm.submit()" {{ (in_array(2,$status) ? 'checked' : '')}}>
                            <div class="w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-1 peer-focus:ring-warning dark:peer-focus:ring-blue-800 rounded-full peer dark:bg-gray-700 peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-warning"></div>
                            <span class="ml-3 text-sm font-medium hover:text-warning text-white dark:text-gray-300">Zarezerwowane</span>
                        </label>
                        <br>
                        <label class="relative inline-flex items-center cursor-pointer mb-6">
                            <input type="checkbox" name="status[]" value="3" id="sprzedane" class="sr-only peer" @change="$refs.myForm.submit()" {{ (in_array(3,$status) ? 'checked' : '')}}>
                            <div class="w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-1 peer-focus:ring-alert dark:peer-focus:ring-blue-800 rounded-full peer dark:bg-gray-700 peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-alert"></div>
                            <span class="ml-3 text-sm font-medium hover:text-alert text-white dark:text-gray-300">Sprzedane</span>
                        </label>                         
                    </div>                     
                </form>
            </div>
        </div>
        <div class="mt-10 lg:col-span-3">
            <div class="flex flex-row">
                <div class="{{ (in_array(1,$status) ? 'block' : 'hidden')}} pb-2 mr-1">
                    <a onclick="uncheck('dostepne')" class="bg-[#0092cc] cursor-pointer inline-flex items-center justify-center rounded-[5px] py-1 px-2 text-center text-sm text-white hover:bg-opacity-90">
                    Dostępne
                    <span class="ml-1">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x" viewBox="0 0 16 16">
                        <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
                    </svg>
                    </span>
                    </a>
                </div>
                <div class="{{ (in_array(2,$status) ? 'block' : 'hidden')}} pb-2 mr-1">
                    <a onclick="uncheck('rezerwacja')" class="bg-warning cursor-pointer inline-flex items-center justify-center rounded-[5px] py-1 px-2 text-center text-sm text-white hover:bg-opacity-90">
                    Rezerwacja
                    <span class="ml-1">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x" viewBox="0 0 16 16">
                        <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
                    </svg>
                    </span>
                    </a>
                </div>
                <div class="{{ (in_array(3,$status) ? 'block' : 'hidden')}} pb-2 mr-1">
                    <a onclick="uncheck('sprzedane')" class="bg-alert cursor-pointer inline-flex items-center justify-center rounded-[5px] py-1 px-2 text-center text-sm text-white hover:bg-opacity-90">
                    Sprzedane
                    <span class="ml-1">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x" viewBox="0 0 16 16">
                        <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
                    </svg>
                    </span>
                    </a>
                </div>   
                
                <div class="{{ (in_array(0,$storey) ? 'block' : 'hidden')}} pb-2 mr-1">
                    <a onclick="uncheck('storey1')" class="bg-primary cursor-pointer inline-flex items-center justify-center rounded-[5px] py-1 px-2 text-center text-sm text-white hover:bg-opacity-90">
                    Parter
                    <span class="ml-1">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x" viewBox="0 0 16 16">
                        <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
                    </svg>
                    </span>
                    </a>
                </div> 
                <div class="{{ (in_array(1,$storey) ? 'block' : 'hidden')}} pb-2 mr-1">
                    <a onclick="uncheck('storey2')" class="bg-primary cursor-pointer inline-flex items-center justify-center rounded-[5px] py-1 px-2 text-center text-sm text-white hover:bg-opacity-90">
                    I piętro
                    <span class="ml-1">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x" viewBox="0 0 16 16">
                        <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
                    </svg>
                    </span>
                    </a>
                </div> 
                <div class="{{ (in_array(2,$storey) ? 'block' : 'hidden')}} pb-2 mr-1">
                    <a onclick="uncheck('storey3')" class="bg-primary cursor-pointer inline-flex items-center justify-center rounded-[5px] py-1 px-2 text-center text-sm text-white hover:bg-opacity-90">
                    II piętro
                    <span class="ml-1">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x" viewBox="0 0 16 16">
                        <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
                    </svg>
                    </span>
                    </a>
                </div>        
                
                <div class="{{ (in_array(1,$building) ? 'block' : 'hidden')}} pb-2 mr-1">
                    <a onclick="uncheck('building1')" class="bg-primary cursor-pointer inline-flex items-center justify-center rounded-[5px] py-1 px-2 text-center text-sm text-white hover:bg-opacity-90">
                    Budynek A
                    <span class="ml-1">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x" viewBox="0 0 16 16">
                        <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
                    </svg>
                    </span>
                    </a>
                </div> 
                <div class="{{ (in_array(2,$building) ? 'block' : 'hidden')}} pb-2 mr-1">
                    <a onclick="uncheck('building2')" class="bg-primary cursor-pointer inline-flex items-center justify-center rounded-[5px] py-1 px-2 text-center text-sm text-white hover:bg-opacity-90">
                    Budynek B
                    <span class="ml-1">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x" viewBox="0 0 16 16">
                        <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
                    </svg>
                    </span>
                    </a>
                </div> 
                <div class="{{ (in_array(3,$building) ? 'block' : 'hidden')}} pb-2 mr-1">
                    <a onclick="uncheck('building3')" class="bg-primary cursor-pointer inline-flex items-center justify-center rounded-[5px] py-1 px-2 text-center text-sm text-white hover:bg-opacity-90">
                    Budynek C
                    <span class="ml-1">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x" viewBox="0 0 16 16">
                        <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
                    </svg>
                    </span>
                    </a>
                </div>        
                
                <div class="{{ ($building or $storey or $status) ? 'block' : 'hidden' }} pb-2 mr-1 content-end">
                    <a onclick="resetForm()" class="bg-sand_dark cursor-pointer inline-flex items-center justify-center rounded-[5px] py-1 px-2 text-center text-sm text-white hover:bg-opacity-90">
                    Wyczyść
                    <span class="ml-1">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x" viewBox="0 0 16 16">
                        <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
                    </svg>
                    </span>
                    </a>
                </div>                
                
                <script>
                    function resetForm() {
                        document.getElementById('slot').style.display='none';
                        document.getElementById('spin').style.display='block';
                        window.location.href = "/search";
                    }
                    function uncheck(stat) {
                        document.getElementById(stat).checked = false;
                        sendSubmit();
                    }
                    function sendSubmit() {
                        document.getElementById('slot').style.display='none';
                        document.getElementById('spin').style.display='block';
                        document.getElementById("searchForm").submit();
                    }
                </script>                

            </div>
            <div class="w-full">
                @foreach ($apartmentslist as $sl)
                <div class="bg-dark text-white font-xl font-exo p-3 flex justify-between">
                    <div>{{$sl->name}} {{$sl->square_footage}} m<sup>2</sup></div>
                </div>
                <div class="w-full flex flex-row mb-5 h-72" x-data="{modalImageMain{{$sl->id}}: false, modalImageSketch{{$sl->id}}: false, modalIframe{{$sl->id}}: false, modalEmbeded{{$sl->id}}: false}">
                    <div class="basis-1/5 p-10 bg-white">
                        <img class="cursor-pointer" @click="modalImageMain{{$sl->id}} = true" src="
                                @if($sl->mainimage != null) {{Storage::disk('images')->url($sl->mainimage->filename)}} @else /images/images.png @endif
                                ">
                        @if($sl->mainimage != null)<x-modal-image url="{{Storage::disk('images')->url($sl->mainimage->filename)}}" id="Main{{$sl->id}}" /> @endif
                    </div>
                    <div class="flex flex-row basis-4/5 pt-5 bg-white">
                        <div class="grid grid-cols-3 basis-2/3 content-start">
                            <div class="text-center mb-8">
                                <p>Status</p>
                                <p class="font-bold font-exo text-lg @if($sl->statusname == 'Dostępne') text-[#0092cc] @elseif($sl->statusname == 'Rezerwacja') text-warning @else text-alert @endif">{{$sl->statusname}}</p>
                            </div>
                            <div class="text-center mb-8">
                                <p>Numer</p>
                                <p class="font-semibold font-exo text-lg">{{$sl->number}}</p>
                            </div>
                            <div class="text-center mb-8">
                                <p>Powierzchnia</p>
                                <p class="font-semibold font-exo text-lg">{{$sl->square_footage}} m<sup>2</sup></p>
                            </div>
                            <div class="text-center mb-8">
                                <p>Liczba pokoi</p>
                                <p class="font-semibold font-exo text-lg">{{$sl->rooms}}</p>
                            </div>
                            <div class="text-center mb-8">
                                <p>Kondygnacja</p>
                                <p class="font-semibold font-exo text-lg">@if($sl->storey==0) Parter @else {{$sl->storey}} @endif</p>
                            </div>
                            @if($sl->price != 0)
                            <div class="text-center mb-8">
                                <p>Cena</p>
                                <p class="font-semibold font-exo text-lg">{{$sl->price}} zł</p>
                            </div>
                            @endif
                            <div class="text-center mb-8">
                                <p>Budynek</p>
                                <p class="font-semibold font-exo text-lg">{{$sl->buildingsname}}</sup></p>
                            </div>
                            @if($sl->sketchimage != null)
                            <div class="text-center">
                                <p>Rzut 3D</p>
                                <svg @click="modalImageSketch{{$sl->id}} = true" xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="text-secondary cursor-pointer text-center bi bi-badge-3d mx-auto hover:scale-110 transition duration-300 ease-in-out" viewBox="0 0 16 16">
                                    <path d="M4.52 8.368h.664c.646 0 1.055.378 1.06.9.008.537-.427.919-1.086.919-.598-.004-1.037-.325-1.068-.756H3c.03.914.791 1.688 2.153 1.688 1.24 0 2.285-.66 2.272-1.798-.013-.953-.747-1.38-1.292-1.432v-.062c.44-.07 1.125-.527 1.108-1.375-.013-.906-.8-1.57-2.053-1.565-1.31.005-2.043.734-2.074 1.67h1.103c.022-.391.383-.751.936-.751.532 0 .928.33.928.813.004.479-.383.835-.928.835h-.632v.914zm3.606-3.367V11h2.189C12.125 11 13 9.893 13 7.985c0-1.894-.861-2.984-2.685-2.984H8.126zm1.187.967h.844c1.112 0 1.621.686 1.621 2.04 0 1.353-.505 2.02-1.621 2.02h-.844v-4.06z" />
                                    <path d="M14 3a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1h12zM2 2a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V4a2 2 0 0 0-2-2H2z" />
                                </svg>
                                @if($sl->sketchimage != null)<x-modal-image url="{{Storage::disk('images')->url($sl->sketchimage->filename)}}" id="Sketch{{$sl->id}}" /> @endif
                            </div>
                            @endif
                            @if($sl->rotatingmodel != null)
                            <div class="text-center">
                                <p>Model 360</p>
                                <svg @click="modalIframe{{$sl->id}} = true" xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="text-secondary cursor-pointer text-center mt-1 bi bi-arrows-move mx-auto hover:scale-110 transition duration-300 ease-in-out" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M7.646.146a.5.5 0 0 1 .708 0l2 2a.5.5 0 0 1-.708.708L8.5 1.707V5.5a.5.5 0 0 1-1 0V1.707L6.354 2.854a.5.5 0 1 1-.708-.708l2-2zM8 10a.5.5 0 0 1 .5.5v3.793l1.146-1.147a.5.5 0 0 1 .708.708l-2 2a.5.5 0 0 1-.708 0l-2-2a.5.5 0 0 1 .708-.708L7.5 14.293V10.5A.5.5 0 0 1 8 10zM.146 8.354a.5.5 0 0 1 0-.708l2-2a.5.5 0 1 1 .708.708L1.707 7.5H5.5a.5.5 0 0 1 0 1H1.707l1.147 1.146a.5.5 0 0 1-.708.708l-2-2zM10 8a.5.5 0 0 1 .5-.5h3.793l-1.147-1.146a.5.5 0 0 1 .708-.708l2 2a.5.5 0 0 1 0 .708l-2 2a.5.5 0 0 1-.708-.708L14.293 8.5H10.5A.5.5 0 0 1 10 8z" />
                                </svg>
                                @if($sl->rotatingmodel != null)<x-modal-iframe url="{{$sl->rotatingmodel}}" id="{{$sl->id}}" /> @endif
                            </div>
                            @endif
                            @if($sl->virtualwalk != null)
                            <div class="text-center">
                                <p>Wirtualny spacer</p>
                                <a href="{{$sl->virtualwalk}}" target="_blank" class="text-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="text-secondary bi bi-cast mx-auto hover:scale-110 transition duration-300 ease-in-out" viewBox="0 0 16 16">
                                        <path d="m7.646 9.354-3.792 3.792a.5.5 0 0 0 .353.854h7.586a.5.5 0 0 0 .354-.854L8.354 9.354a.5.5 0 0 0-.708 0z" />
                                        <path d="M11.414 11H14.5a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.5-.5h-13a.5.5 0 0 0-.5.5v7a.5.5 0 0 0 .5.5h3.086l-1 1H1.5A1.5 1.5 0 0 1 0 10.5v-7A1.5 1.5 0 0 1 1.5 2h13A1.5 1.5 0 0 1 16 3.5v7a1.5 1.5 0 0 1-1.5 1.5h-2.086l-1-1z" />
                                    </svg>
                                </a>
                            </div>
                            @endif
                        </div>
                        <div class="basis-1/3 pb-1 mx-auto pl-10" x-data="{modalApartmentSpaces{{$sl->id}}: false}">
                            <div class="flex flex-row mt-1">
                                <div class="pb-1">
                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-card-list" viewBox="0 0 22 22">
                                <path fill-rule="evenodd" d="M0 .5A.5.5 0 0 1 .5 0h9a.5.5 0 0 1 0 1h-9A.5.5 0 0 1 0 .5Zm13 0a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1h-2a.5.5 0 0 1-.5-.5Zm-13 2A.5.5 0 0 1 .5 2h8a.5.5 0 0 1 0 1h-8a.5.5 0 0 1-.5-.5Zm13 0a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1h-2a.5.5 0 0 1-.5-.5Zm-13 2A.5.5 0 0 1 .5 4h10a.5.5 0 0 1 0 1H.5a.5.5 0 0 1-.5-.5Zm13 0a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1h-2a.5.5 0 0 1-.5-.5Zm-13 2A.5.5 0 0 1 .5 6h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5Zm13 0a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1h-2a.5.5 0 0 1-.5-.5Zm-13 2A.5.5 0 0 1 .5 8h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5Zm13 0a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1h-2a.5.5 0 0 1-.5-.5Zm-13 2a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5Zm13 0a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1h-2a.5.5 0 0 1-.5-.5Zm-13 2a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5Zm13 0a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1h-2a.5.5 0 0 1-.5-.5Zm-13 2a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H.5a.5.5 0 0 1-.5-.5Zm13 0a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1h-2a.5.5 0 0 1-.5-.5Z"/>                                </svg>
                                </div>
                                <div>
                                <a @click="modalApartmentSpaces{{$sl->id}} = true" class="font-bold cursor-pointer bg-white text-dark">Lista pomieszczeń</a>
                                </div>
                            </div>
                           
                            <div
                                x-show="modalApartmentSpaces{{$sl->id}}"
                                x-transition.duration.500ms
                                class="relative -top-2 -left-1"
                            >
                                <div
                                @click.outside="modalApartmentSpaces{{$sl->id}} = false"
                                class="absolute z-50 rounded-[5px] text-left bg-primary text-white py-3 px-4"
                                >
                                    <div>
                                        @foreach ($sl->insidespaces as $isl)
                                        <p class="text-left text-xs ml-1"> {{ $isl->name }} <span class="font-bold">{{ $isl->square_footage }} m<sup>2</sup></span></p>
                                        @endforeach
                                        @foreach ($sl->outsidespaces as $osl)
                                        <p class="text-left text-xs ml-1"> {{ $osl->name }} <span class="font-bold">{{ $osl->square_footage }} m<sup>2</sup></span></p>
                                        @endforeach
                                    </div>                                
                                </div>
                            </div>                            
                            @if($sl->card!=null)
                            <div class="flex flex-row mt-1">
                                <div class="pb-1">
                                    <svg @click="modalEmbeded{{$sl->id}} = true" xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="cursor-pointer text-center bi bi-file-pdf mx-auto" viewBox="0 0 22 22">
                                        <path d="M4 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H4zm0 1h8a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1z" />
                                        <path d="M4.603 12.087a.81.81 0 0 1-.438-.42c-.195-.388-.13-.776.08-1.102.198-.307.526-.568.897-.787a7.68 7.68 0 0 1 1.482-.645 19.701 19.701 0 0 0 1.062-2.227 7.269 7.269 0 0 1-.43-1.295c-.086-.4-.119-.796-.046-1.136.075-.354.274-.672.65-.823.192-.077.4-.12.602-.077a.7.7 0 0 1 .477.365c.088.164.12.356.127.538.007.187-.012.395-.047.614-.084.51-.27 1.134-.52 1.794a10.954 10.954 0 0 0 .98 1.686 5.753 5.753 0 0 1 1.334.05c.364.065.734.195.96.465.12.144.193.32.2.518.007.192-.047.382-.138.563a1.04 1.04 0 0 1-.354.416.856.856 0 0 1-.51.138c-.331-.014-.654-.196-.933-.417a5.716 5.716 0 0 1-.911-.95 11.642 11.642 0 0 0-1.997.406 11.311 11.311 0 0 1-1.021 1.51c-.29.35-.608.655-.926.787a.793.793 0 0 1-.58.029zm1.379-1.901c-.166.076-.32.156-.459.238-.328.194-.541.383-.647.547-.094.145-.096.25-.04.361.01.022.02.036.026.044a.27.27 0 0 0 .035-.012c.137-.056.355-.235.635-.572a8.18 8.18 0 0 0 .45-.606zm1.64-1.33a12.647 12.647 0 0 1 1.01-.193 11.666 11.666 0 0 1-.51-.858 20.741 20.741 0 0 1-.5 1.05zm2.446.45c.15.162.296.3.435.41.24.19.407.253.498.256a.107.107 0 0 0 .07-.015.307.307 0 0 0 .094-.125.436.436 0 0 0 .059-.2.095.095 0 0 0-.026-.063c-.052-.062-.2-.152-.518-.209a3.881 3.881 0 0 0-.612-.053zM8.078 5.8a6.7 6.7 0 0 0 .2-.828c.031-.188.043-.343.038-.465a.613.613 0 0 0-.032-.198.517.517 0 0 0-.145.04c-.087.035-.158.106-.196.283-.04.192-.03.469.046.822.024.111.054.227.09.346z" />
                                    </svg>
                                </div>
                                <div>
                                    <p class="font-bold cursor-pointer" @click="modalEmbeded{{$sl->id}} = true">Karta mieszkania</p>
                                </div>
                                <div><a href="{{Storage::url('cards/'.$sl->card)}}" class="text-primary font-bold cursor-pointer" target="_blank">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="ml-2 mt-1 bi bi-download" viewBox="0 0 16 16">
                                            <path d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z" />
                                            <path d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3z" />
                                        </svg>
                                    </a></div>
                            </div>
                            @endif
                            @if($sl->card != null)<x-modal-embeded url="{{Storage::url('cards/'.$sl->card)}}" id="{{$sl->id}}" /> @endif
         
                            <div class="mt-16">
                                <div class="pb-2" x-data="{modalApartmentContact{{$sl->id}}: false}">
                                    <a @click="modalApartmentContact{{$sl->id}} = true" class="bg-secondary text-white cursor-pointer inline-flex items-center justify-center rounded-[5px] py-2 px-5 text-center text-base hover:bg-secondary/75">
                                    <span class="mr-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x" viewBox="0 0 16 16">
                                        <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2Zm13 2.383-4.708 2.825L15 11.105V5.383Zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741ZM1 11.105l4.708-2.897L1 5.383v5.722Z"/>
                                    </svg>
                                    </span>
                                    Zadaj pytanie
                                    </a>
                                    <x-frontend.modal-apartment-contact id="{{$sl->id}}" item="{{$sl->name}} {{$sl->number}} - {{$sl->buildingsname}}" />
                                </div>                                
                                <div class="pb-2 mr-1" x-data="{modalApartmentContactPhone{{$sl->id}}: false}">
                                    <a @click="modalApartmentContactPhone{{$sl->id}} = true" class="text-dark cursor-pointer inline-flex items-center justify-center px-1 text-center text-base hover:text-secondary">
                                    <span class="mr-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"/>
                                    </svg>
                                    </span>
                                    Zamów rozmowę
                                    </a>
                                    <x-frontend.modal-apartment-contact-phone id="{{$sl->id}}" item="{{$sl->name}} {{$sl->number}} - {{$sl->buildingsname}}" />
                                </div>

                            </div>                                              
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="pl-5 py-5">
                {{ $apartmentslist->links() }}
            </div>
        </div>
    </div>
</div>