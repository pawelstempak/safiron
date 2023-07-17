<!-- ====== Modal Section Start -->
<div
    x-show="modalApartmentContactPhone{{$id}}"
    x-transition.duration.500ms
    class="fixed top-0 left-0 flex h-full min-h-screen w-full items-center justify-center bg-primary bg-opacity-50 z-50"
  >
    <div
      @click.outside="modalApartmentContactPhone{{$id}} = false"
      class="w-full max-w-[1000px] rounded-[20px] bg-white pt-6 pb-12 px-8 text-right"
    >
      <div class="relative">
       <p @click="modalApartmentContactPhone{{$id}} = false" class="cursor-pointer absolute top-0 right-0">
          <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="#000000" class="bi bi-x-square-fill" viewBox="0 0 16 16">
          <path d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm3.354 4.646L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 1 1 .708-.708z"/>
          </svg>
        </p>
        <br><br>
        <div class="px-20 text-2xl text-primary font-semibold pt-5 pb-2 mb-5 text-center">Umów rozmowę telefoniczną</div>
        <div class="px-20 text-xl text-primary text-center mb-5">{{$item}}</div>
        <div class="px-20">
          <form>
            <div class="mb-6">
              <input
                type="text"
                placeholder="Wpisz swoję imię"
                class="text-body-color border-[f0f0f0] focus:border-primary w-full rounded border py-3 px-[14px] text-base outline-none focus-visible:shadow-none"
              />
            </div>
            <div class="mb-6">
              <input
                type="text"
                placeholder="Wpisz swój numer telefonu"
                class="text-body-color border-[f0f0f0] focus:border-primary w-full rounded border py-3 px-[14px] text-base outline-none focus-visible:shadow-none"
              />
            </div>
            <div class="mb-6">
        <div class="flex flex-row">
            <div class="mr-5 w-full">
                <div>
                    <select
                    class="border-form-stroke text-body-color focus:border-primary active:border-primary w-full appearance-none rounded-lg border-[1.5px] py-3 px-5 font-medium outline-none transition disabled:cursor-default disabled:bg-[#F5F7FD]"
                    >
                    <option value="9:00">9:00</option>
                    <option value="10:00">10:00</option>
                    <option value="11:00">11:00</option>
                    <option value="12:00">12:00</option>
                    <option value="13:00">13:00</option>
                    <option value="14:00">14:00</option>                    
                    <option value="15:00">15:00</option>
                    <option value="16:00">16:00</option>
                    <option value="17:00">17:00</option>                    
                    </select>
                    <span
                    class="border-body-color absolute right-4 top-1/2 mt-[-2px] h-[10px] w-[10px] -translate-y-1/2 rotate-45 border-r-2 border-b-2"
                    >
                    </span>
                </div>
            </div>
            <div class="w-full">
                <div>
                    <select
                    class="border-form-stroke text-body-color focus:border-primary active:border-primary w-full appearance-none rounded-lg border-[1.5px] py-3 px-5 font-medium outline-none transition disabled:cursor-default disabled:bg-[#F5F7FD]"
                    >
                    <option value="10:00">10:00</option>
                    <option value="11:00">11:00</option>
                    <option value="12:00">12:00</option>
                    <option value="13:00">13:00</option>
                    <option value="14:00">14:00</option>                    
                    <option value="15:00">15:00</option>
                    <option value="16:00">16:00</option>
                    <option value="17:00">17:00</option>                    
                    <option value="18:00">18:00</option>                    
                    </select>
                    <span
                    class="border-body-color absolute right-4 top-1/2 mt-[-2px] h-[10px] w-[10px] -translate-y-1/2 rotate-45 border-r-2 border-b-2"
                    >
                    </span>
                </div>
            </div>
        </div>
            </div>
            <div class="w-full flex content-center justify-center">
              <button
                type="submit"
                class="                
                mt-2
                inline-block 
                rounded-lg
                px-10 py-2 text-xl 
                font-mono font-semibold
                leading-normal 
                text-white
                hover:text-white  
                bg-secondary
                hover:bg-[#008A17]
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
                cursor-pointer"
              >
                Wyślij
              </button>
            </div>
          </form>      
        </div>

      </div>
    </div>
  </div>
<!-- ====== Modal Section End -->