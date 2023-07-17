<x-guest-layout>
    <section class="bg-sand/50">
        <x-frontend.navbar />

        <section class="pt-10 pb-10 lg:pt-20 lg:pb-20">
            <div class="md:container mx-auto">
            <h1 class="py-5 text-white block text-6xl font-exo">DZIENNIK BUDOWY</h1>     
                <p class="py-5 px-10 mb-2 block text-2xl text-sand_dark mx-auto">#{{$logitem->name}}</p>           
                <div class="-mx-4 flex flex-wrap">                    
                    @foreach($logitemlist as $log)
                    <div class="w-full px-4 md:w-1/2 lg:w-1/3" x-data="{modalImg{{$log->id}}: false}">
                        <div class="mx-auto mb-10 bg-sand/25 p-2 rounded-lg shadow-md">
                            <div class="h-60 overflow-hidden rounded">
                                <a @click="modalImg{{$log->id}} = true" class="cursor-pointer"><img src="{{Storage::url('blog/'.$log->filename)}}" alt="image" class="object-cover w-full h-full" /></a>
                            </div>                            
                        </div>
                        <x-modal-img url="{{Storage::url('blog/'.$log->filename)}}" id="{{$log->id}}"/>
                    </div>
                    @endforeach
                </div>
                <div class="text-center"><a href="/log" class="rounded p-2 bg-secondary hover:bg-secondary/75 text-white">Powrót</a></div>
            </div>
        </section>

        <x-frontend.footer />
    </section>
</x-guest-layout>