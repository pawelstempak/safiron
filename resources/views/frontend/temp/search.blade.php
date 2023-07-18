<x-guest-layout>
    <section class="bg-sand/50">
        <x-frontend.navbar />
        <x-frontend.search-content :$apartmentslist :$buildingslist :$storey :$building :$squarefootage :$minsquarefootage :$maxsquarefootage :$status  />
        <x-frontend.footer />
    </section>
</x-guest-layout>