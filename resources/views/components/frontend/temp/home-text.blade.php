<section class="pt-10 md:pt-16 xl:pt-28">
  <div class="mx-auto sm:container xs:px-8">
    <div class="bg-secondary/75 px-5 py-3 text-white text-4xl font-mono xl:w-1/2 2xl:w-1/2">Przestrzeń, styl, doskonała lokalizacja</div>
    <div class="text-white text-2xl px-5 py-3 bg-dark/80 mt-10 font-mono xl:w-1/2 2xl:w-1/2 ">Osiedle Nowe Przedmieście ma wszystko, czego potrzebujesz!</div>
    <div class="my-6">
      <a href="/search" type="button" class="
        inline-block 
        rounded-lg border
        border-[#473e38]
        px-10 p-2 text-xl 
        font-mono font-bold
        leading-normal 
        text-dark
        hover:text-white  
        bg-sand
        hover:bg-sand_dark/75
        hover:border-dark
        focus:border-neutral-800
        focus:text-white 
        focus:outline-none 
        focus:ring-0 
        active:border-primary 
        active:text-white 
        dark:border-neutral-900 
        dark:text-neutral-900 
        dark:hover:border-neutral-900
        dark:hover:bg-neutral-100 
        dark:hover:bg-opacity-10 
        dark:hover:text-neutral-900 
        dark:focus:border-neutral-900 
        dark:focus:text-neutral-900 
        dark:active:border-neutral-900 
        dark:active:text-neutral-900
        hover:scale-105
        transition duration-200 ease-in-out
        " data-te-ripple-init>
        Wyszukaj mieszkanie
      </a>
    </div>
  </div>
</section>

<section class="pt-10 md:pt-20 pb-10 lg:pt-[120px] lg:pb-10" x-data="counting()">
  <div class="mx-auto sm:container xs:px-8" x-init="toggleCounting()">
    <div class="md:flex md:justify-between w-full">
      <div class="mx-auto w-full text-center">
        <div class="mb-5 py-6 md:mr-10 lg:mr-20 bg-dark/75 md:py-[62px] xl:py-12">
          <span class="text-4xl md:text-2xl lg:text-6xl font-exo text-white" x-text="apartmentsValue"></span><br />
          <span class="text-2xl md:text-xl lg:text-2xl font-exo text-lightSecondary">Mieszkań</span>
        </div>
      </div>
      <div class="mx-auto w-full text-center">
        <div class="mb-5 py-6 md:py-12 md:mr-5 md:ml-5 lg:mx-10 bg-dark/75">
          <span class="text-4xl md:text-2xl lg:text-6xl font-exo text-white" x-text="fromSquareFootageValue"></span><span class="text-4xl md:text-2xl lg:text-6xl font-exo text-white">-</span><span class="text-4xl md:text-2xl lg:text-6xl font-exo text-white" x-text="toSquareFootageValue"></span><span class="text-4xl md:text-2xl lg:text-6xl font-exo text-white"> m<sup>2</sup></span><br />
          <span class="text-2xl md:text-xl lg:text-2xl font-exo text-lightSecondary">Powierzchnia mieszkań</span>
        </div>
      </div>
      <div class="mx-auto w-full text-center">
        <div class="py-6 md:py-12 md:ml-10 lg:ml-20 bg-dark/75">
          <span class="text-4xl md:text-2xl lg:text-6xl font-exo text-white" x-text="parkingSpacesValue"></span><br />
          <span class="px-0 text-2xl md:px-1 lg:px-0 md:text-xl lg:text-2xl font-exo text-lightSecondary">Miejsc parkingowych podziemnych</span>
        </div>
      </div>
    </div>
    <div id="second"></div>
  </div>
</section>
<div class="text-center mb-10 hidden md:block">
  <a href="#second" class="px-3 py-3 border-2 border-white inline-block rounded-full animate-bounce">
    <svg width="16" height="16" fill="currentColor" class="h-6 w-6 text-white " viewBox="0 0 16 16">
      <path fill-rule="evenodd" d="M1.646 6.646a.5.5 0 0 1 .708 0L8 12.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z" />
      <path fill-rule="evenodd" d="M1.646 2.646a.5.5 0 0 1 .708 0L8 8.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z" />
    </svg>
  </a>
</div>

<section class="bg-white">
  <div class="mx-auto py-10 md:pt-32 md:pb-20 text-center text-dark">
    <h2 class="text-4xl md:text-6xl font-extrabold text-primary mb-4"><span class="text-secondary">Energooszczędne</span> i zdrowe dla środowiska osiedle</h2>
    <p class="text-3xl py-5 font-exo w-2/3 mx-auto"><b class="text-primary">Panele fotowoltaiczne</b> zapewniające energię elektryczną dla części wspólnych<br><b class="text-secondary">obniżą miesięczne koszty</b></p>
    <p class="text-3xl py-5 font-exo w-2/3 mx-auto">Czysta energia cieplna z <b class="text-primary">sieci miejskiej</b> - brak gazu</p>
    <p class="text-3xl py-5 font-exo w-2/3 mx-auto"><b class="text-primary">Miejsca postojowe</b> dla pojazdów elektrycznych</p>
  </div>
  <div id="third"></div>
</section>
<div class="text-center mb-10 hidden md:block">
  <a href="#third" class="px-3 py-3 border-2 border-primary inline-block rounded-full animate-bounce">
    <svg width="16" height="16" fill="#154360" class="h-6 w-6 text-white " viewBox="0 0 16 16">
      <path fill-rule="evenodd" d="M1.646 6.646a.5.5 0 0 1 .708 0L8 12.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z" />
      <path fill-rule="evenodd" d="M1.646 2.646a.5.5 0 0 1 .708 0L8 8.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z" />
    </svg>
  </a>
</div>
<!-- ====== Services Section Start -->
<section class="bg-primary/25 py-10 md:pt-20 md:pb-10">
  <div class="mx-auto sm:container xs:px-8">
    <div class="-mx-4 flex flex-wrap">
      <div class="w-full px-4">
        <div class="mx-auto mb-6 text-center lg:mb-10">
          <span class="text-primary mb-2 block text-lg font-semibold">
            Dlaczego Osiedle Nowe Przedmieście?
          </span>
          <h2 class="mb-12 text-4xl md:text-6xl font-extrabold text-secondary">
            Stawiamy na Twoje bezpieczeństwo!
          </h2>
        </div>
      </div>
    </div>
    <div class="-mx-4 flex flex-wrap">
      <div class="mx-auto w-full px-4 lg:w-1/3 max-w-xl text-center">
        <div class="mb-8 rounded-[20px] bg-white p-10 shadow-md hover:shadow-lg md:px-7 xl:px-10">
          <div class="bg-white mb-8 flex h-[70px] w-[70px] items-center justify-center rounded-2xl mx-auto">
            <svg fill="#154360" height="800px" width="800px" version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" xmlns:xlink="http://www.w3.org/1999/xlink" enable-background="new 0 0 512 512">
              <g>
                <path d="m491.1,211.1l-296.2-182.2c-27.5-16.9-59.8-22-91.2-14.6-31.3,7.5-57.8,26.8-74.7,54.3-34.8,56.7-17,131.3 39.6,166.1l89.1,54.8v119.5h-78.2v-29c0-11.3-9.1-20.4-20.4-20.4s-20.4,9.1-20.4,20.4v100.6c0,11.3 9.1,20.4 20.4,20.4s20.4-9.1 20.4-20.4v-30.8h98.6c11.3,0 20.4-9.1 20.4-20.4v-114.8c0,0 90.5,55.7 91.9,56.6 8.3,5.1 17.7,7.7 28.1,7.7 33.5,0 72.3-28 98.9-71.4 16.3-26.6 25.2-53.7 26.6-77.5l25.7,15.8c9.6,5.9 22.2,2.9 28.1-6.7 5.9-9.5 2.9-22.1-6.7-28zm-427.3-121.2c11.1-18.2 28.7-30.9 49.5-35.9 20.7-5 42.1-1.5 60.3,9.6l173.5,106.8c-20.9,12.2-41.3,32.7-57.2,58.7-16.3,26.6-25.2,53.7-26.6,77.5l-173.3-106.6c-37.5-23.1-49.3-72.5-26.2-110.1zm318.8,196.3c-20.9,34.1-55.4,58.5-70.8,50.3-12-6.4-12.3-45 12.8-86 20.9-34.1 51.9-57.3 70.8-50.3 11.6,7.1 12.3,45-12.8,86z" />
              </g>
            </svg>
          </div>
          <h4 class="text-dark mb-3 text-3xl font-semibold font-exo">
            Monitoring
          </h4>
          <p class="text-body-color text-lg">
            Monitoring zapewniający bezpieczeństwo Twoje i rodziny
          </p>
        </div>
      </div>
      <div class="mx-auto w-full px-4 lg:w-1/3 max-w-xl text-center">
        <div class="mb-8 rounded-[20px] bg-white p-10 shadow-md hover:shadow-lg md:px-7 xl:px-10">
          <div class="bg-white mb-8 flex h-[70px] w-[70px] items-center justify-center rounded-2xl mx-auto">
            <svg width="800px" height="800px" viewBox="0 0 48 48" fill="#154360" xmlns="http://www.w3.org/2000/svg">
              <path d="M9 4V44" stroke="#154360" stroke-width="4" stroke-linecap="round" stroke-linejoin="round" />
              <path d="M16 9L16 37" stroke="#154360" stroke-width="4" stroke-linecap="round" stroke-linejoin="round" />
              <path d="M24 9L24 37" stroke="#154360" stroke-width="4" stroke-linecap="round" stroke-linejoin="round" />
              <path d="M32 9L32 37" stroke="#154360" stroke-width="4" stroke-linecap="round" stroke-linejoin="round" />
              <path d="M42 44L6 44" stroke="#154360" stroke-width="4" stroke-linecap="round" stroke-linejoin="round" />
              <path d="M42 37L6 37" stroke="#154360" stroke-width="4" stroke-linecap="round" stroke-linejoin="round" />
              <path d="M39 4V44" stroke="#154360" stroke-width="4" stroke-linecap="round" stroke-linejoin="round" />
              <path d="M42 9L6 9" stroke="#154360" stroke-width="4" stroke-linecap="round" stroke-linejoin="round" />
            </svg>
          </div>
          <h4 class="text-dark mb-3 text-3xl font-semibold font-exo">
            Bezpieczna przestrzeń
          </h4>
          <p class="text-body-color text-lg">
            W pełni ogrodzone osiedle z kontrolą dostępu dla bezpieczeństwa
          </p>
        </div>
      </div>
      <div class="mx-auto w-full px-4 lg:w-1/3 max-w-xl text-center">
        <div class="mb-8 rounded-[20px] bg-white p-10 shadow-md hover:shadow-lg md:px-7 xl:px-10">
          <div class="bg-white mb-8 flex h-[70px] w-[70px] items-center justify-center rounded-2xl mx-auto">
            <svg fill="#154360" height="800px" width="800px" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 507.996 507.996" xml:space="preserve">
              <g>
                <g>
                  <circle cx="66.3" cy="262.679" r="13.3" />
                </g>
              </g>
              <g>
                <g>
                  <path d="M506.4,75.179l-35.5-67.6c-3.6-6.9-12.1-9.6-19-5.9l-355.8,186.3c-9-4.6-19.1-7.2-29.8-7.2c-36.6,0-66.3,29.8-66.3,66.3
                        v246.8c0,7.8,6.3,14.1,14.1,14.1h104.3c7.8,0,14.1-6.3,14.1-14.1v-206.8l367.9-192.8C507.3,90.679,510,82.179,506.4,75.179z
                        M28.2,479.779v-232.7c0-21,17.1-38,38-38c21,0,38,17.1,38,38v232.7H28.2z M144.5,248.979l-12,6.3v-8.1c0-14.9-4.9-28.5-13.1-39.5
                        l26.6-13.9l-1.8,55.2H144.5z M212,213.579l-39.1,20.5l1.8-55.4l39.1-20.5L212,213.579z M284.7,175.579l-44,23l1.8-55.4l44-23
                        L284.7,175.579z M357.3,137.479l-43.9,23l1.7-55.4l44-23L357.3,137.479z M429.9,99.379l-44,23l1.9-55.4l43.9-23L429.9,99.379z
                        M458.7,84.279l1.2-37l15,28.5L458.7,84.279z" />
                </g>
              </g>
            </svg>
          </div>
          <h4 class="text-dark mb-3 text-3xl font-semibold font-exo">Szlabany wjazdowe</h4>
          <p class="text-body-color text-lg">
            Pełna kontrola wjeżdzajacych i wyjeżdzających pojazdów.
          </p>
        </div>
      </div>
    </div>
  </div>
  <div class="text-center mt-10 hidden md:block">
    <a href="#fourth" class="px-3 py-3 border-2 border-primary inline-block rounded-full animate-bounce">
      <svg width="16" height="16" fill="#154360" class="h-6 w-6 text-white " viewBox="0 0 16 16">
        <path fill-rule="evenodd" d="M1.646 6.646a.5.5 0 0 1 .708 0L8 12.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z" />
        <path fill-rule="evenodd" d="M1.646 2.646a.5.5 0 0 1 .708 0L8 8.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z" />
      </svg>
    </a>
  </div>
</section>
<!-- ====== Services Section End -->


<!-- Container for demo purpose -->
<div id="fourth"></div>
<div class="container my-24 mx-auto md:px-6">
  <!-- Section: Design Block -->
  <section class="mb-10">
    <h2 class="mb-12 text-center text-5xl font-bold text-secondary">
      Zalety osiedla
    </h2>

    <div class="flex flex-wrap items-center">
      <div class="mb-12 w-full shrink-0 grow-0 basis-auto md:px-6 lg:mb-0 lg:w-5/12">
        <div class="relative overflow-hidden rounded-lg bg-cover bg-[50%] bg-no-repeat shadow-lg dark:shadow-black/20" data-te-ripple-init data-te-ripple-color="light">
          <img src="/images/bg21.jpg" class="w-full" />
          <a href="#!">
            <div class="absolute top-0 right-0 bottom-0 left-0 h-full w-full overflow-hidden bg-fixed">
              <div class="flex h-full items-center justify-center">
                <div class="px-6 py-12 text-center text-white md:px-12">
                </div>
              </div>
            </div>
            <div class="relative overflow-hidden bg-cover bg-no-repeat">
              <div class="absolute top-0 right-0 bottom-0 left-0 h-full w-full overflow-hidden bg-[hsl(0,0%,98.4%,0.2)] bg-fixed opacity-0 transition duration-300 ease-in-out hover:opacity-100">
              </div>
            </div>
          </a>
        </div>
      </div>

      <div class="w-full shrink-0 grow-0 basis-auto md:px-6 lg:w-7/12">
        <div class="mb-12 flex">
          <div class="shrink-0">
            <div class="rounded-md p-4 shadow-lg dark:bg-[hsl(204,23%,30%)]">
              <svg width="50px" height="50px" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                <g clip-path="url(#clip0_901_1217)">
                  <path d="M5 15V31M27 15V31M1 31H31M3 1V12H9L16 5L23 12H29V1H3ZM18 19H22V15H18V19ZM18 27H22V23H18V27ZM10 19H14V15H10V19ZM10 31H14V23H10V31Z" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                </g>
                <defs>
                  <clipPath id="clip0_901_1217">
                    <rect width="32" height="32" fill="white" />
                  </clipPath>
                </defs>
              </svg>
            </div>
          </div>
          <div class="ml-4 grow">
            <p class="mb-1 font-exo text-3xl font-bold text-primary">Architektura</p>
            <p class="text-neutral-500 dark:text-neutral-300">
              Projektując osiedle z myślą o respektowaniu zabytkowego sąsiedztwa i otoczenia oferujemy jedyne takie budownictwo w Łańcucie łączące w sobie nowoczesność z elementami architektury pałacykowej.
            </p>
          </div>
        </div>

        <div class="mb-12 flex">
          <div class="shrink-0">
            <div class="rounded-md p-4 shadow-lg dark:bg-[hsl(204,23%,30%)]">
              <svg fill="#000000" height="50px" width="50px" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 512.002 512.002" xml:space="preserve">
                <g transform="translate(0 -1)">
                  <g>
                    <path d="M512.001,330.677v-90.743H501.13c-33.319,0-63.604,12.971-86.094,34.133H264.534V137.533h216.879
                        c14.427,0,18.896-19.52,5.911-25.805L259.715,1.849c-2.344-1.131-5.076-1.131-7.42,0L24.686,111.724
                        c-12.993,6.29-8.524,25.81,5.903,25.81h216.879v136.533H96.966c-22.49-21.162-52.774-34.133-86.094-34.133H0.001v90.743
                        c0,23.452,17.629,42.768,40.354,45.458L8.789,502.397c-1.143,4.572,1.637,9.205,6.209,10.348
                        c4.572,1.143,9.205-1.637,10.348-6.209l30.561-122.242l38.349,122.718c1.406,4.498,6.192,7.005,10.69,5.6
                        c4.498-1.406,7.005-6.192,5.6-10.69L71.341,376.467h65.193v-10.871c0-14.107-2.324-27.67-6.611-40.329h74.877V359.4h25.6v68.267
                        c0,37.706-30.56,68.267-68.267,68.267h-17.067c-4.713,0-8.533,3.821-8.533,8.533s3.82,8.533,8.533,8.533h17.067h187.733h17.067
                        c4.713,0,8.533-3.821,8.533-8.533s-3.82-8.533-8.533-8.533h-17.067c-37.706,0-68.267-30.56-68.267-68.267V359.4h25.6v-34.133
                        h74.877c-4.286,12.658-6.611,26.222-6.611,40.329v10.871h57.337l-31.483,125.93c-1.143,4.572,1.637,9.205,6.209,10.348
                        c4.572,1.143,9.205-1.637,10.348-6.209l30.561-122.242l38.349,122.718c1.406,4.498,6.192,7.005,10.69,5.6
                        c4.498-1.406,7.005-6.192,5.6-10.69l-39.205-125.455h2.336C491.501,376.467,512.001,355.969,512.001,330.677z M256.005,19.009
                        L466.17,120.467H45.833L256.005,19.009z M59.773,359.4c-0.03,0-0.061,0-0.091,0H45.791c-15.864,0-28.723-12.857-28.723-28.723
                        v-73.503c27.002,1.518,51.363,12.905,69.546,30.606l0.871,0.867c9.066,9.026,16.509,19.752,21.982,31.652l2.122,4.614
                        c4.346,10.749,7.023,22.351,7.706,34.487H59.773z M290.134,342.333h-25.6v85.333c0,27.916,13.401,52.699,34.122,68.267h-85.311
                        c20.721-15.568,34.122-40.351,34.122-68.267v-85.333h-25.6v-17.067h68.267V342.333z M307.201,308.2h-102.4h-82.112
                        c-3.078-5.985-6.627-11.688-10.59-17.067h287.804c-3.963,5.379-7.512,11.081-10.59,17.067H307.201z M400.414,324.912l2.121-4.613
                        c5.473-11.9,12.917-22.626,21.982-31.652l0.868-0.864c18.183-17.703,42.545-29.091,69.549-30.61v73.503
                        c0,15.866-12.859,28.723-28.723,28.723h-13.905c-0.03,0-0.061,0-0.091,0h-59.507C393.391,347.263,396.068,335.661,400.414,324.912
                        z" />
                  </g>
                </g>
              </svg>
            </div>
          </div>
          <div class="ml-4 grow">
            <p class="mb-1 font-exo text-3xl font-bold text-primary">Przestrzeń zewnętrzna</p>
            <p class="text-neutral-500 dark:text-neutral-300">
              Mieszkania na parterze posiadają tarasy oraz ogródki, natomiast mieszkania na wyższych kondygnacja balkony.
            </p>
          </div>
        </div>

        <div class="mb-12 flex">
          <div class="shrink-0">
            <div class="rounded-md p-4 shadow-lg dark:bg-[hsl(204,23%,30%)]">
              <svg fill="#000000" height="50px" width="50px" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 511.995 511.995" xml:space="preserve">
                <g>
                  <g>
                    <rect y="468.512" width="511.995" height="15.661" />
                  </g>
                </g>
                <g>
                  <g>
                    <path d="M231.996,308.65c-17.552,0-31.83,14.279-31.83,31.83c0,17.551,14.279,31.83,31.83,31.83h279.995v-15.661h-53.093
			l32.338-32.338h20.755v-15.66H231.996z M256.843,356.65h-24.847c-8.915-0.001-16.169-7.254-16.169-16.17
			c0-8.915,7.253-16.169,16.169-16.169h24.847V356.65z M272.504,356.649v-32.338h52.585l-32.338,32.338H272.504z M314.9,356.649
			l32.337-32.338h49.851l-32.338,32.338H314.9z M436.749,356.649h-49.851l32.338-32.338h49.849L436.749,356.649z" />
                  </g>
                </g>
                <g>
                  <g>
                    <rect x="231.781" y="332.688" width="15.661" height="15.661" />
                  </g>
                </g>
                <g>
                  <g>
                    <polygon points="216.124,379.676 216.124,461.114 231.785,461.114 231.785,395.337 272.504,395.337 272.504,379.676 		" />
                  </g>
                </g>
                <g>
                  <g>
                    <polygon points="168.096,61.233 168.096,461.114 183.758,461.114 183.758,76.894 511.598,76.894 511.598,61.233 		" />
                  </g>
                </g>
                <g>
                  <g>
                    <path d="M0.169,60.654v247.657h151.66V60.654H0.169z M136.168,292.65H15.83V76.315h120.337V292.65z" />
                  </g>
                </g>
                <g>
                  <g>
                    <path d="M32.366,92.555V244.99h15.661v-73.085h72.041v-79.35H32.366z M104.408,156.244h-56.38v-48.028h56.38V156.244z" />
                  </g>
                </g>
                <g>
                  <g>
                    <rect x="72.037" y="229.334" width="48.028" height="15.661" />
                  </g>
                </g>
                <g>
                  <g>
                    <rect x="72.037" y="204.276" width="48.028" height="15.661" />
                  </g>
                </g>
                <g>
                  <g>
                    <rect x="31.318" y="260.657" width="16.705" height="15.661" />
                  </g>
                </g>
                <g>
                  <g>
                    <rect x="55.332" y="260.657" width="16.705" height="15.661" />
                  </g>
                </g>
                <g>
                  <g>
                    <rect x="79.346" y="260.657" width="16.705" height="15.661" />
                  </g>
                </g>
                <g>
                  <g>
                    <rect x="104.404" y="260.657" width="15.661" height="15.661" />
                  </g>
                </g>
                <g>
                  <g>
                    <polygon points="136.774,315.988 136.774,348.354 0,348.354 0,364.015 136.774,364.015 136.774,379.676 0,379.676 0,395.337 
			136.774,395.337 136.774,461.114 152.435,461.114 152.435,315.988 		" />
                  </g>
                </g>
                <g>
                  <g>
                    <polygon points="136.774,27.822 136.774,51.836 152.435,51.836 152.435,43.483 511.598,43.483 511.598,27.822 		" />
                  </g>
                </g>
              </svg>
            </div>
          </div>
          <div class="ml-4 grow">
            <p class="mb-1 font-exo text-3xl font-bold text-primary">Miejsca postojowe w parkingu podziemnym</p>
            <p class="text-neutral-500 dark:text-neutral-300">
              Dzięki dużemu parkingowi podziemnemu, każdy z mieszkańców będzie miał zapewnione miejsce postojowe.
            </p>
          </div>
        </div>

        <div class="flex">
          <div class="shrink-0">
            <div class="rounded-md p-4 shadow-lg dark:bg-[hsl(204,23%,30%)]">
              <svg fill="#000000" height="50px" width="50px" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 508.587 508.587" xml:space="preserve">
                <g transform="translate(2 2)">
                  <g>
                    <path d="M405.775,198.222l100.812-73.929l-143.36-86.187l-101.973,67.982L159.28,38.107L-2,123.44l102.123,78.672l-85.056,78.341
                        l83.627,48.82v33.953c0,2.56,1.707,5.12,4.267,6.827l142.365,92.956c0.711,1.021,1.624,1.899,2.702,2.617
                        c1.707,0.853,2.56,0.853,4.267,0.853c1.04,0,1.763-0.003,2.555-0.582c0.701-0.314,1.305-0.718,1.711-1.124l145.067-93.867
                        c2.56-0.853,4.267-4.267,4.267-6.827v-40.566l83.627-53.3L405.775,198.222z M251.993,276.968l-121.453-74.896l130.087-75.884
                        l113.804,71.876L251.993,276.968z M335.92,347.867l-69.12-59.733l123.733-79.36l69.973,60.587L335.92,347.867z M363.227,58.587
                        L475.867,126l-83.337,60.836l-0.29-0.249l-2.184,1.407l-113.458-71.123l0.442-0.258l-0.427-0.284L363.227,58.587z M157.573,58.587
                        l87.04,58.027l-130.56,75.093L28.72,126.853L157.573,58.587z M114.907,212.187l122.847,75.402l-67.38,62.838l-58.88-34.133
                        c-0.448-0.299-0.928-0.526-1.42-0.72L44.08,277.04L114.907,212.187z M115.76,339.333l51.2,29.867
                        c0.642,0.481,1.314,0.842,1.999,1.093l3.975,2.32l25.837-24.178l44.99-41.529v135.68l-128-83.627V339.333z M339.333,366.64
                        l49.493-31.573v24.747l-128,82.773V306.053l68.267,59.733c0.911,0.911,2.041,1.492,3.269,1.793l1.851,1.62l2.591-1.651
                        C337.672,367.347,338.527,367.043,339.333,366.64z" />
                  </g>
                </g>
              </svg>
            </div>
          </div>
          <div class="ml-4 grow">
            <p class="mb-1 font-exo text-3xl font-bold text-primary">Komórki lokatorskie</p>
            <p class="text-neutral-500 dark:text-neutral-300">
              Dodatkowa powierzchnia do przechowania.
            </p>
          </div>
        </div>
      </div>
    </div>
    <div class="text-center mt-20 hidden md:block">
      <a href="#fifth" class="px-3 py-3 border-2 border-primary inline-block rounded-full animate-bounce">
        <svg width="16" height="16" fill="#154360" class="h-6 w-6 text-white " viewBox="0 0 16 16">
          <path fill-rule="evenodd" d="M1.646 6.646a.5.5 0 0 1 .708 0L8 12.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z" />
          <path fill-rule="evenodd" d="M1.646 2.646a.5.5 0 0 1 .708 0L8 8.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z" />
        </svg>
      </a>
    </div>
  </section>
  <!-- Section: Design Block -->
</div>
<!-- Container for demo purpose -->

<!-- ====== FAQ Section Start -->
<div class="bg-primary" id="fifth">
  <section x-data="
   {
   openFaq1: false, 
   openFaq2: false, 
   openFaq3: false, 
   openFaq4: false, 
   openFaq5: false, 
   openFaq6: false
   }
   " class="relative z-20 overflow-hidden pt-20 pb-20 lg:pt-[120px] lg:pb-[90px]">
    <div class="xs:container-sm mx-5 mb-10 md:container md:mx-auto">
      <div class="-mx-4 flex flex-wrap">
        <div class="w-full px-4">
          <div class="mx-auto mb-[60px] max-w-[520px] text-center lg:mb-20">
            <h2 class="mb-4 text-3xl font-bold text-[#75db46] sm:text-4xl md:text-[40px]">
              Pełna ochrona twoich pieniędzy!
            </h2>
            <p class="text-base text-white">
              Jako pierwsi w Łańcucie oferujemy podwójną ochronę środków nabywców stosując przepisy nowej ustawy deweloperskiej
            </p>
          </div>
        </div>
      </div>
      <div class="-mx-4 flex flex-wrap">
        <div class="w-full px-4 lg:w-2/3 mx-auto">
          <div class="single-faq mb-8 w-full rounded-lg border border-[#F3F4FE] bg-white bg-opacity-10 p-4 sm:p-8 lg:px-6 xl:px-8">
            <button class="faq-btn flex w-full text-left" @click="openFaq1 = !openFaq1">
              <div class="mr-5 flex h-10 w-full max-w-[40px] items-center justify-center rounded-lg bg-white bg-opacity-25 text-white">
                <svg width="17" height="10" viewBox="0 0 17 10" class="icon fill-current">
                  <path d="M7.28687 8.43257L7.28679 8.43265L7.29496 8.43985C7.62576 8.73124 8.02464 8.86001 8.41472 8.86001C8.83092 8.86001 9.22376 8.69083 9.53447 8.41713L9.53454 8.41721L9.54184 8.41052L15.7631 2.70784L15.7691 2.70231L15.7749 2.69659C16.0981 2.38028 16.1985 1.80579 15.7981 1.41393C15.4803 1.1028 14.9167 1.00854 14.5249 1.38489L8.41472 7.00806L2.29995 1.38063L2.29151 1.37286L2.28271 1.36548C1.93092 1.07036 1.38469 1.06804 1.03129 1.41393L1.01755 1.42738L1.00488 1.44184C0.69687 1.79355 0.695778 2.34549 1.0545 2.69659L1.05999 2.70196L1.06565 2.70717L7.28687 8.43257Z" fill="white" stroke="white" />
                </svg>
              </div>
              <div class="w-full">
                <h4 class="text-xl font-semibold text-white mt-1">
                  Gwarancja zwrotu całości wpłaty przez Deweloperski Fundusz Gwarancyjny
                </h4>
              </div>
            </button>
            <div x-show="openFaq1" class="faq-content pl-[62px]" x-transition.duration.1500ms>
              <p class="p-5 text-xl leading-relaxed text-white">Inwestycja Osiedle Nowe Przedmieście jest realizowana na podstawie nowych przepisów ustawy deweloperskiej, które weszły w życie 1 lipca 2022 r. Deweloperski Fundusz Gwarancyjny (DFG) zabezpiecza w pełni środki Nabywców wpłacone po zawarciu umowy deweloperskiej.</p>
              <p class="p-5 text-2xl leading-relaxed text-white font-bold underline">
                DFG zapewnia ochronę Twoich środków w przypadku:
              <ul class="px-5 text-xl leading-relaxed text-white list-disc">
                <li>upadłości banku prowadzącego Otwarty Mieszkaniowych Rachunek Powierniczy,</li>
                <li>upadłości dewelopera,</li>
                <li>braku zwrotu środków przez dewelopera w przypadku odstąpienia od umowy deweloperskiej przez Nabywcę.</li>
              </ul>
              <p class="px-5 pt-5 text-xl leading-relaxed text-warning underline">Pamiętaj, wpłacone przez Ciebie pieniądze są chronione w CAŁOŚCI!</p>
              </p>
            </div>
          </div>
          <div class="single-faq mb-8 w-full rounded-lg border border-[#F3F4FE] bg-white bg-opacity-10 p-4 sm:p-8 lg:px-6 xl:px-8">
            <button class="faq-btn flex w-full text-left" @click="openFaq2 = !openFaq2">
              <div class="mr-5 flex h-10 w-full max-w-[40px] items-center justify-center rounded-lg bg-white bg-opacity-25 text-white">
                <svg width="17" height="10" viewBox="0 0 17 10" class="icon fill-current">
                  <path d="M7.28687 8.43257L7.28679 8.43265L7.29496 8.43985C7.62576 8.73124 8.02464 8.86001 8.41472 8.86001C8.83092 8.86001 9.22376 8.69083 9.53447 8.41713L9.53454 8.41721L9.54184 8.41052L15.7631 2.70784L15.7691 2.70231L15.7749 2.69659C16.0981 2.38028 16.1985 1.80579 15.7981 1.41393C15.4803 1.1028 14.9167 1.00854 14.5249 1.38489L8.41472 7.00806L2.29995 1.38063L2.29151 1.37286L2.28271 1.36548C1.93092 1.07036 1.38469 1.06804 1.03129 1.41393L1.01755 1.42738L1.00488 1.44184C0.69687 1.79355 0.695778 2.34549 1.0545 2.69659L1.05999 2.70196L1.06565 2.70717L7.28687 8.43257Z" fill="white" stroke="white" />
                </svg>
              </div>
              <div class="w-full">
                <h4 class="text-xl font-semibold text-white mt-1">
                  Ochrona środków dzięki wpłatom na Otwarty Mieszkaniowy Rachunek Powierniczy
                </h4>
              </div>
            </button>
            <div x-show="openFaq2" class="faq-content pl-[62px]" x-transition.duration.1500ms>
              <p class="py-5 text-xl leading-relaxed text-white">
                Otwarty Mieszkaniowy Rachunek Powierniczy (OMRP) jest drugim instrumentem chroniącym pieniądze Nabywców.
                Po zawarciu umowy deweloperskiej Nabywcy dokonują wpłat na OMRP za poszczególne etapy zgodnie z harmonogramem budowy.
              </p>
              <p class="py-5 text-xl leading-relaxed text-white">
                Środki są wypłacane deweloperowi przez bank wyłącznie w chwili stwierdzenia przez rzeczoznawcę bankowego, że określony etap robót został zakończony.
                Dewelopera otrzymuje środki wyłącznie za wykonane już roboty budowlane opisane w harmonogramie budowy.
              </p>
              <p class="py-5 text-xl leading-relaxed text-white">                
                Dzięki OMRP masz pewność, że Twoje środki w całości są przeznaczone na realizację Przedsięwzięcia Deweloperskiego, a dokładnie, na budowę Twojego wymarzonego mieszkania.
              </p>
            </div>
          </div>

        </div>
      </div>
    </div>
    <div class="absolute bottom-0 right-0 z-[-1]">
      <svg width="1440" height="886" viewBox="0 0 1440 886" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path opacity="0.5" d="M193.307 -273.321L1480.87 1014.24L1121.85 1373.26C1121.85 1373.26 731.745 983.231 478.513 729.927C225.976 477.317 -165.714 85.6993 -165.714 85.6993L193.307 -273.321Z" fill="url(#paint0_linear)" />
        <defs>
          <linearGradient id="paint0_linear" x1="1308.65" y1="1142.58" x2="602.827" y2="-418.681" gradientUnits="userSpaceOnUse">
            <stop stop-color="#3056D3" stop-opacity="0.36" />
            <stop offset="1" stop-color="#F5F2FD" stop-opacity="0" />
            <stop offset="1" stop-color="#F5F2FD" stop-opacity="0.096144" />
          </linearGradient>
        </defs>
      </svg>
    </div>
    <div class="text-center mt-10">
      <a href="#first" class="px-3 py-3 border-2 border-white inline-block rounded-full animate-bounce">
        <svg width="16" height="16" fill="currentColor" class="h-6 w-6 text-white " viewBox="0 0 16 16">
          <path fill-rule="evenodd" d="M7.646 2.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1-.708.708L8 3.707 2.354 9.354a.5.5 0 1 1-.708-.708l6-6z" />
          <path fill-rule="evenodd" d="M7.646 6.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1-.708.708L8 7.707l-5.646 5.647a.5.5 0 0 1-.708-.708l6-6z" />
        </svg>
      </a>
    </div>
  </section>
</div>
<!-- ====== FAQ Section End -->