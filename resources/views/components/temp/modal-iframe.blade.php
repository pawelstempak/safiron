<!-- ====== Modal Section Start -->
<div
    x-show="modalIframe{{$id}}"
    x-transition.duration.500ms
    class="fixed top-0 left-0 flex h-full min-h-screen w-full items-center justify-center bg-black bg-opacity-90 px-4 py-5 z-50"
  >
    <div
      @click.outside="modalIframe{{$id}} = false"
      class="w-full max-w-[1500px] h-full rounded-[20px] bg-white py-12 px-8 text-right md:py-[60px] md:px-[70px]"
    >
      <p @click="modalIframe{{$id}} = false" class="cursor-pointer right">
        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-x-square-fill" viewBox="0 0 16 16">
        <path d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm3.354 4.646L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 1 1 .708-.708z"/>
        </svg>
      </p>
      <iframe src="{{$url}}" class="w-full h-full"></iframe>
    </div>
  </div>
<!-- ====== Modal Section End -->