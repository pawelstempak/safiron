      <!-- ====== Navbar Section Start -->
      
      <header
        x-data="
              {
                navbarOpen: false
              }
            "
        class="flex w-full items-center shadow-2xl"
      >
        <div class="mx-auto bg-white/90 w-full" id="first">
        <!-- <div class="bg-primary text-white text-center p-2 shadow-xl hidden sm:block">
              Ruszyła sprzedaż mieszkań. Znajdź swoje wymarzone mieszkanie.
        </div>  -->
        <div class="sm:container xs:px-5 mx-auto">
          <div class="relative -mx-4 flex items-center justify-between">
              <div class="w-80 max-w-full px-4">
                <a href="/" class="block w-full py-2 transition ease-in-out delay-50 duration-300 hover:scale-105">
                  <img
                    src="/images/logotype.png"
                    alt="logo"
                    class="w-full"
                  />
                </a>
              </div>
              <div class="flex w-full items-end justify-end px-4 z-50">
                  <x-frontend.navbar-links/>
              </div>
            </div>
          </div>
        </div>
      </header>
      <!-- ====== Navbar Section End -->
