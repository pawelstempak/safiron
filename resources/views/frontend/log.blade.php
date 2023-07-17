<x-guest-layout>
    <section class="bg-sand/50">
        <x-frontend.navbar />

        <section class="pt-10 pb-10 lg:pt-20 lg:pb-20">
            <div class="md:container mx-auto">
            <h1 class="p-5 text-white mb-5 block text-6xl font-exo">DZIENNIK BUDOWY</h1>                
                <div class="-mx-4 flex flex-wrap">                    
                    @foreach($loglist as $log)
                    <div class="w-full px-4 md:w-1/2 lg:w-1/4">
                        <div class="mx-auto mb-10 max-w-[400px] bg-sand/25 p-5 rounded-lg shadow-md">
                            <div class="relative mb-2 h-52 overflow-hidden rounded">
                                <a href="log/{{$log->blogs_id}}"><img src="{{Storage::url('blog/'.$log->filename)}}" alt="image" class="object-cover w-full h-full" /></a>
                                <div class="shadow-lg absolute bottom-2 left-2 bg-sand inline-block rounded py-1 px-4 text-center text-xs font-semibold leading-loose text-primary">
                                    {{$log->updated_at}}
                                </div>
                            </div>                            
                            <div>
                                <h3>
                                    <a href="log/{{$log->id}}" class="text-primary hover:text-secondary mb-1 inline-block text-xl font-semibold sm:text-2xl lg:text-lg xl:text-xl">
                                        {{$log->name}}
                                    </a>
                                </h3>
                                <p class="text-body-color text-base mb-2">
                                    {{ Str::limit($log->description),40,'(...)' }}
                                </p>
                                <div class="text-right">
                                    <a href="/log/{{$log->blogs_id}}" class="cursor-pointer shadow-lg bg-secondary hover:bg-secondary/75 rounded py-2 px-4 text-xs font-semibold text-white ">
                                        zobacz galerię
                                </a> 
                                </div>                               
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </section>

        <x-frontend.footer />
    </section>
</x-guest-layout>