              <div>
                <button @click="navbarOpen = !navbarOpen" :class="navbarOpen && 'navbarTogglerActive' " id="navbarToggler" class="ring-primary absolute right-4 top-1/2 block -translate-y-1/2 rounded-lg px-3 py-[6px] focus:ring-2 xl:hidden">
                  <span class="bg-primary relative my-[6px] block h-[2px] w-[30px]"></span>
                  <span class="bg-primary relative my-[6px] block h-[2px] w-[30px]"></span>
                  <span class="bg-primary relative my-[6px] block h-[2px] w-[30px]"></span>
                </button>
                <nav :class="!navbarOpen && 'hidden' " id="navbarCollapse" class="absolute right-4 top-full w-full max-w-[300px] bg-white xl:bg-transparent rounded-lg py-5 px-6 shadow xl:static xl:block xl:w-full xl:max-w-full xl:shadow-none">
                  <ul class="block xl:flex">
                    <li>
                      <a href="/search" class="{{ request()->is('search') ? 'bg-secondary text-white' : 'bg-dark text-white animate-pulse'}} hover:bg-secondary/75 hover:text-white hover:font-bold text-primary transition ease-in-out flex pt-3 pb-3 px-3 rounded xl:py-2 text-xl font-exo font-medium xl:inline-flex mx-1">
                        &nbsp;W SPRZEDAŻY&nbsp;
                      </a>
                    </li>
                    <li>
                      <a href="/log" class="{{ request()->is('log') ? 'bg-secondary text-white' : 'bg-transparent'}} hover:bg-secondary/75 hover:text-white hover:font-bold text-primary transition ease-in-out flex py-3 px-3 rounded xl:py-2 text-xl font-exo font-medium xl:inline-flex mx-1">
                        &nbsp;DZIENNIK BUDOWY&nbsp;
                      </a>
                    </li>
                    <li>
                      <a href="/investment" class="{{ request()->is('investment') ? 'bg-secondary text-white' : 'bg-transparent'}} hover:bg-secondary/75 hover:text-white hover:font-bold text-primary transition ease-in-out flex py-3 px-3 rounded xl:py-2 text-xl font-exo font-medium xl:inline-flex mx-1">
                        &nbsp;INWESTYCJA&nbsp;
                      </a>
                    </li>
                    {{-- <li>
                      <a
                        href="/location"
                        class="{{ request()->is('location') ? 'bg-secondary text-white' : 'bg-transparent'}} hover:bg-secondary/75 hover:text-white hover:font-bold text-primary transition ease-in-out flex py-3 px-3 rounded xl:py-2 text-xl font-exo font-medium xl:inline-flex mx-1"
                    >
                    &nbsp;LOKALIZACJA&nbsp;
                    </a>
                    </li> --}}
                    <li>
                      <a href="/contact" class="{{ request()->is('contact') ? 'bg-secondary text-white' : 'bg-transparent'}} hover:bg-secondary/75 hover:text-white hover:font-bold text-primary transition ease-in-out flex py-3 px-3 rounded xl:py-2 text-xl font-exo font-medium xl:inline-flex mx-1">
                        &nbsp;KONTAKT&nbsp;
                      </a>
                    </li>
                  </ul>
                </nav>
              </div>
              <!-- <div class="hidden justify-end pr-16 sm:flex lg:pr-0">
                <a
                  href="javascript:void(0)"
                  class="text-dark hover:text-primary py-3 px-7 text-base text-white font-medium"
                >
                  Login
                </a>
                <a
                  href="javascript:void(0)"
                  class="bg-primary rounded-lg py-3 px-7 text-base font-medium text-white hover:bg-opacity-90"
                >
                  Sign Up
                </a>
              </div> -->