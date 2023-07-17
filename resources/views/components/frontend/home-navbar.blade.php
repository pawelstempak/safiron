      <!-- ====== Navbar Section Start -->
      <header x-data="
              {
                navbarOpen: false
              }
            " class="flex w-full items-center">
        <div class="mx-auto bg-white/25 w-full">
          <div class="bg-primary text-white text-center p-2 shadow-xl hidden sm:block">
            Inwestuj w swoje mieszkanie w Łańcucie - sprzedaż mieszkań w naszej nowej inwestycji właśnie ruszyła! <a href="tel:+48 512 280 900" class="ml-5 border bg-secondary hover:bg-secondary/75 border-secondary hover:border-white rounded text-white py-1 px-3">+48 512 280 900</a>
          </div>
          <div class="sm:container xs:px-5 mx-auto">
            <div class="relative -mx-4 flex items-center justify-between">
              <div class="w-80 max-w-full px-4">
                <a href="/" class="block w-full py-2 transition ease-in-out delay-50 duration-300 hover:scale-105">
                  <img src="/images/logotype.png" alt="logo" class="w-full" />
                </a>
              </div>
              <div class="flex w-full items-end justify-end px-4">
                <x-frontend.navbar-links />
              </div>
            </div>
          </div>
        </div>
      </header>
      <!-- ====== Navbar Section End -->