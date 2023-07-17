<div
  id="carouselExampleCaptions"
  class="relative"
  data-te-carousel-init
  data-te-carousel-slide>
  <!--Carousel indicators-->
  <div
    class="absolute bottom-0 left-0 right-0 z-[2] mx-[15%] mb-4 flex list-none justify-center p-0"
    data-te-carousel-indicators>
    <button
      type="button"
      data-te-target="#carouselExampleCaptions"
      data-te-slide-to="0"
      data-te-carousel-active
      class="mx-[3px] box-content h-[3px] w-[30px] flex-initial cursor-pointer border-0 border-y-[10px] border-solid border-transparent bg-white bg-clip-padding p-0 -indent-[461px] opacity-50 transition-opacity duration-[600ms] ease-[cubic-bezier(0.25,0.1,0.25,1.0)] motion-reduce:transition-none"
      aria-current="true"
      aria-label="Slide 1"></button>
    <button
      type="button"
      data-te-target="#carouselExampleCaptions"
      data-te-slide-to="1"
      class="mx-[3px] box-content h-[3px] w-[30px] flex-initial cursor-pointer border-0 border-y-[10px] border-solid border-transparent bg-white bg-clip-padding p-0 -indent-[461px] opacity-50 transition-opacity duration-[600ms] ease-[cubic-bezier(0.25,0.1,0.25,1.0)] motion-reduce:transition-none"
      aria-label="Slide 2"></button>
    <button
      type="button"
      data-te-target="#carouselExampleCaptions"
      data-te-slide-to="2"
      class="mx-[3px] box-content h-[3px] w-[30px] flex-initial cursor-pointer border-0 border-y-[10px] border-solid border-transparent bg-white bg-clip-padding p-0 -indent-[461px] opacity-50 transition-opacity duration-[600ms] ease-[cubic-bezier(0.25,0.1,0.25,1.0)] motion-reduce:transition-none"
      aria-label="Slide 3"></button>
  </div>

  <!--Carousel items-->
  <div
    class="relative w-full overflow-hidden after:clear-both after:block after:content-['']">
    <!--First item-->
    <div
      class="relative float-left -mr-[100%] w-full transition-transform duration-[600ms] ease-in-out motion-reduce:transition-none"
      data-te-carousel-active
      data-te-carousel-item
      style="backface-visibility: hidden">
      <img
        src="images/navbar1.jpg"
        class="block w-full"
        alt="..." />
      <div
        class="absolute inset-x-[15%] bottom-16 hidden py-5 text-left text-white md:block">
        <h5 class="bg-secondary/75 px-5 py-3 text-white text-4xl font-mono xl:w-1/2 2xl:w-2/3">Elegancja, styl i nowoczesność</h5>
        <p class="text-white text-2xl px-5 py-3 bg-primary/75 mt-10 font-mono xl:w-1/2 2xl:w-2/3">
            Nowoczesnne schody w twoim domu!
        </p>
      </div>
    </div>
    <!--Second item-->
    <div
      class="relative float-left -mr-[100%] hidden w-full transition-transform duration-[600ms] ease-in-out motion-reduce:transition-none"
      data-te-carousel-item
      style="backface-visibility: hidden">
      <img
        src="images/navbar2.jpg"
        class="block w-full"
        alt="..." />
        <div
        class="absolute inset-x-[15%] bottom-16 hidden py-5 text-left text-white md:block">
        <h5 class="bg-primary/75 px-5 py-3 text-white text-4xl font-mono xl:w-1/2 2xl:w-2/3">Elegancja, styl i nowoczesność</h5>
        <p class="text-white text-2xl px-5 py-3 bg-dark/75 mt-10 font-mono xl:w-1/2 2xl:w-2/3">
            Nowoczesnne schody w twoim domu!
        </p>
      </div>
    </div>
    <!--Third item-->
    <div
      class="relative float-left -mr-[100%] hidden w-full transition-transform duration-[600ms] ease-in-out motion-reduce:transition-none"
      data-te-carousel-item
      style="backface-visibility: hidden">
      <img
        src="images/navbar3.jpg"
        class="block w-full"
        alt="..." />
        <div
        class="absolute inset-x-[15%] bottom-16 hidden py-5 text-left text-white md:block">
        <h5 class="bg-[#4d2403]/75 px-5 py-3 text-white text-4xl font-mono xl:w-1/2 2xl:w-2/3">Elegancja, styl i nowoczesność</h5>
        <p class="text-white text-2xl px-5 py-3 bg-[#683d1a]/75 mt-10 font-mono xl:w-1/2 2xl:w-2/3">
            Nowoczesnne schody w twoim domu!
        </p>
      </div>
    </div>
  </div>

  <!--Carousel controls - prev item-->
  <button
    class="absolute bottom-0 left-0 top-0 z-[1] flex w-[15%] items-center justify-center border-0 bg-none p-0 text-center text-white opacity-50 transition-opacity duration-150 ease-[cubic-bezier(0.25,0.1,0.25,1.0)] hover:text-white hover:no-underline hover:opacity-90 hover:outline-none focus:text-white focus:no-underline focus:opacity-90 focus:outline-none motion-reduce:transition-none"
    type="button"
    data-te-target="#carouselExampleCaptions"
    data-te-slide="prev">
    <span class="inline-block h-8 w-8">
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
          d="M15.75 19.5L8.25 12l7.5-7.5" />
      </svg>
    </span>
    <span
      class="!absolute !-m-px !h-px !w-px !overflow-hidden !whitespace-nowrap !border-0 !p-0 ![clip:rect(0,0,0,0)]"
      >Previous</span
    >
  </button>
  <!--Carousel controls - next item-->
  <button
    class="absolute bottom-0 right-0 top-0 z-[1] flex w-[15%] items-center justify-center border-0 bg-none p-0 text-center text-white opacity-50 transition-opacity duration-150 ease-[cubic-bezier(0.25,0.1,0.25,1.0)] hover:text-white hover:no-underline hover:opacity-90 hover:outline-none focus:text-white focus:no-underline focus:opacity-90 focus:outline-none motion-reduce:transition-none"
    type="button"
    data-te-target="#carouselExampleCaptions"
    data-te-slide="next">
    <span class="inline-block h-8 w-8">
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
          d="M8.25 4.5l7.5 7.5-7.5 7.5" />
      </svg>
    </span>
    <span
      class="!absolute !-m-px !h-px !w-px !overflow-hidden !whitespace-nowrap !border-0 !p-0 ![clip:rect(0,0,0,0)]"
      >Next</span
    >
  </button>
</div>

{{-- <section>
  <div class="relative">
    <img src="images/navbar.jpg">    
    <div class="absolute bottom-28 left-32 bg-secondary/75 px-5 py-3 text-white text-4xl font-mono xl:w-1/2 2xl:w-1/3">Przestrzeń, styl, nowoczesność</div>
    <div class="absolute bottom-10 left-32 text-white text-2xl px-5 py-3 bg-primary/75 mt-10 font-mono xl:w-1/2 2xl:w-1/2 ">To jest to czego potrzebujesz w swoim domu!</div>
  </div>
</section> --}}
<section class="md:pt-20 pb-10" x-data="counting()">
  <div class="mx-auto sm:container xs:px-8" x-init="toggleCounting()">
    <div class="md:flex md:justify-between w-full">
      <div class="mx-auto w-full text-center">
        <div class="mb-5 py-6 md:mr-10 lg:mr-20 bg-primary md:py-[62px] xl:py-12">
          <span class="text-4xl md:text-2xl lg:text-6xl font-exo text-white" x-text="apartmentsValue"></span><br />
          <span class="text-2xl md:text-xl lg:text-2xl font-exo text-lightSecondary">lat doświadczenia</span>
        </div>
      </div>
      <div class="mx-auto w-full text-center">
        <div class="mb-5 py-6 md:py-12 md:mr-5 md:ml-5 lg:mx-10 bg-primary">
          <span class="text-4xl md:text-2xl lg:text-6xl font-exo text-white" x-text="fromSquareFootageValue"></span><br />
          <span class="text-2xl md:text-xl lg:text-2xl font-exo text-lightSecondary">ton użytej stali</span>
        </div>
      </div>
      <div class="mx-auto w-full text-center">
        <div class="py-6 md:py-12 md:ml-10 lg:ml-20 bg-primary">
          <span class="text-4xl md:text-2xl lg:text-6xl font-exo text-white" x-text="parkingSpacesValue"></span><br />
          <span class="px-0 text-2xl md:px-1 lg:px-0 md:text-xl lg:text-2xl font-exo text-lightSecondary">różnych projektów</span>
        </div>
      </div>
    </div>
    <div id="second"></div>
  </div>
</section>
<section class="bg-slate-300">
  <div class="mx-auto py-10 md:pt-32 md:pb-20 text-center text-dark">
    <h2 class="text-4xl md:text-6xl font-extrabold text-primary mb-4"><span class="text-secondary">Energooszczędne</span> i zdrowe dla środowiska osiedle</h2>
    <p class="text-3xl py-5 font-exo w-2/3 mx-auto"><b class="text-primary">Panele fotowoltaiczne</b> zapewniające energię elektryczną dla części wspólnych<br><b class="text-secondary">obniżą miesięczne koszty</b></p>
    <p class="text-3xl py-5 font-exo w-2/3 mx-auto">Czysta energia cieplna z <b class="text-primary">sieci miejskiej</b> - brak gazu</p>
    <p class="text-3xl py-5 font-exo w-2/3 mx-auto"><b class="text-primary">Miejsca postojowe</b> dla pojazdów elektrycznych</p>
  </div>
</section>