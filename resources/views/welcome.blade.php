<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>APMC</title>
  @vite('resources/css/app.css')
  @vite('resources/js/app.js')

  <link rel="shortcut icon" href="assets/images/logo/logo.jpg" type="image/x-icon" />
  <link rel="stylesheet" href="https://unpkg.com/swiper@6.8.4/swiper-bundle.min.css" />
  <script defer src="https://unpkg.com/swiper@6.8.4/swiper-bundle.min.js"></script>

<body>
  <!-- ====== Navbar Section Start -->
  <header x-data="
        {
          navbarOpen: false
        }
      " class="sticky left-0 top-0 z-50 w-full bg-white">
    <div class="container mx-auto">
      <div class="relative flex items-center">

        <div class="flex w-full items-center justify-between mx-4">
          <div class=" w-28 xl:w-32 max-w-full">
            <a href="javascript:void(0)" class="block w-full py-2">
              <img src="{{ Vite::asset('resources/images/logo/apmc.png') }}" alt="logo" class="w-full" />
            </a>
          </div>
          <div>
            <button @click="navbarOpen = !navbarOpen" :class="navbarOpen && 'navbarTogglerActive' " id="navbarToggler"
              class="absolute right-4 top-1/2 block -translate-y-1/2 rounded-lg px-3 py-[6px] ring-primary focus:ring-2 lg:hidden">
              <span class="relative my-[6px] block h-[2px] w-[30px] bg-body-color"></span>
              <span class="relative my-[6px] block h-[2px] w-[30px] bg-body-color"></span>
              <span class="relative my-[6px] block h-[2px] w-[30px] bg-body-color"></span>
            </button>
            <nav :class="!navbarOpen && 'hidden'" id="navbarCollapse"
              class="absolute right-4 top-full w-full max-w-[250px] rounded-lg bg-white py-5 shadow transition-all lg:static lg:block lg:w-full lg:max-w-full lg:shadow-none">
              <ul class="blcok lg:flex">
                <li>
                  <a href="javascript:void(0)"
                    class="flex py-2 px-3 lg:px-2 xl:px-3 text-sm xl:text-base font-semibold text-dark hover:text-primary lg:inline-flex">
                    Acceuil
                  </a>
                </li>
                <li>
                  <div x-data="
                        {
                          dropdownOpen: false
                        }
                        " @click.outside="dropdownOpen = false" class="relative inline-block text-left">
                    <button @click="dropdownOpen = !dropdownOpen"
                      class="flex items-center rounded py-2 px-3 lg:px-2 xl:px-3 text-sm xl:text-base font-semibold text-black hover:text-primary">
                      A propos
                      <span class="pl-1">

                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 22" stroke-width="3"
                          stroke="currentColor" class="w-4 h-4">
                          <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                        </svg>

                      </span>

                    </button>
                    <div :class="dropdownOpen ? 'top-full opacity-100 visible' : 'top-[110%] invisible opacity-0' "
                      class="absolute left-0 z-40 mt-2 w-full  border-[.5px] border-light bg-white py-3 shadow-card transition-all">
                      <a href="javascript:void(0)"
                        class="block py-2 px-2 text-sm xl:text-base font-semibold text-black hover:text-primary">
                        Presentation
                      </a>
                      <a href="javascript:void(0)"
                        class="block py-2 px-2 text-sm xl:text-base font-semibold text-black hover:text-primary">
                        Mot du PDG
                      </a>

                    </div>
                  </div>

                </li>
                <li>
                  <a href="javascript:void(0)"
                    class="flex  text-sm xl:text-base font-semibold text-dark hover:text-primary py-2 px-3 lg:px-2 xl:px-3 lg:inline-flex">
                    Nos produits
                  </a>
                </li>
                <li>
                  <a href="javascript:void(0)"
                    class="flex  text-sm xl:text-base font-semibold text-dark hover:text-primary py-2 px-3 lg:px-2 xl:px-3 lg:inline-flex">
                    Nos poles et unites
                  </a>
                </li>
                <li>

                  <div x-data="
                        {
                          dropdownOpen: false
                        }
                        " @click.outside="dropdownOpen = false" class="relative  inline-block text-left">
                    <button @click="dropdownOpen = !dropdownOpen"
                      class="flex items-center rounded py-2 px-3 lg:px-2 xl:px-3 text-sm xl:text-base font-semibold text-black hover:text-primary">
                      Galerie
                      <span class="pl-1">

                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 22" stroke-width="3"
                          stroke="currentColor" class="w-4 h-4">
                          <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                        </svg>

                      </span>

                    </button>
                    <div :class="dropdownOpen ? 'top-full opacity-100 visible' : 'top-[110%] invisible opacity-0' "
                      class="absolute left-0 z-40 mt-2 w-full  border-[.5px] border-light bg-white py-3 shadow-card transition-all">
                      <a href="javascript:void(0)"
                        class="block py-2 px-1 text-sm xl:text-base font-semibold text-black hover:text-primary">
                        Nos photos
                      </a>
                      <a href="javascript:void(0)"
                        class="block py-2 px-1 text-sm xl:text-base font-semibold text-black hover:text-primary">
                        Nos videos
                      </a>

                    </div>
                  </div>

                </li>
                <li>
                  <a href="javascript:void(0)"
                    class="flex  text-sm xl:text-base font-semibold text-dark hover:text-primary py-2 px-3 lg:px-2 xl:px-3 lg:inline-flex">
                    Actualite
                  </a>
                </li>
                <li>
                  <a href="javascript:void(0)"
                    class="flex  text-sm xl:text-base font-semibold text-dark hover:text-primary py-2 px-3 lg:px-2 xl:px-3 lg:inline-flex">
                    Contact
                  </a>
                </li>
              </ul>
            </nav>
          </div>
          <div class="hidden justify-end pr-16 sm:flex lg:pr-0">
            <a href="javascript:void(0)" class="flex items-center text-sm font-semibold text-black ">
              <label
                class="relative w-10 h-10 cursor-pointer font-bold text-white hover:text-white rounded-full bg-primary hover:bg-primary text-center z-10">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                  stroke="currentColor" class="w-8 h-6 absolute inset-0 my-auto mx-auto">
                  <path stroke-linecap="round" stroke-linejoin="round"
                    d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 002.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 01-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 00-1.091-.852H4.5A2.25 2.25 0 002.25 4.5v2.25z" />
                </svg>
              </label>
              <div class="pl-2 text-xs"> <span class="text-body-color"> Contactez nous</span></br>+213(0)770 14 10 47</div>
            </a>
          </div>
        </div>
      </div>
    </div>
  </header>
  <!-- ====== Navbar  Section  End -->
  

  <!-- ====== slider Section Start -->
  <section class="w-full flex justify-around scroll-smooth hover:scroll-auto overflow-hidden" style="height:90vh;">
    <div class="relative w-full mx-auto flex  bg-black scroll-smooth hover:scroll-auto" 
    x-data="{ activeSlide: 1,
                    slides: [
                  {
                    id:1,
                    title1:['Vos revenus dentreprise à la lune'],
                    title2:['Materiaux de construction par APMC Divindus.'],
                    body:['There are many variations of passages of Lorem Ipsum available, but the majority have suffered.'],
                    image:['slide1.jpg']
                  },
                  {
                    id:2,
                    title1:['Vos revenus dentreprise à la lune2'],
                    title2:['Materiaux \n de construction par APMC Divindus.'],
                    body:['There are many variations of passages of Lorem Ipsum available, but the majority have suffered.'],
                    image:['slide2.jpg']
                  },
                  {
                    id:3,
                    title1:['Vos revenus dentreprise à la lune3'],
                    title2:['Materiaux de construction par APMC Divindus.'],
                    body:['There are many variations of passages of Lorem Ipsum available, but the majority have suffered.'],
                    image:['slide3.jpg']
                  },


                  ]}">
      <!-- Slides -->
      <template x-for="slide in slides" :key="slide.id">

        <div x-show="activeSlide === slide.id" 
        x-transition:enter="transition ease-out duration-900"
        x-transition:enter-start="opacity-0 scale-90"
        x-transition:enter-end="opacity-100 scale-100"
        x-transition:leave="transition ease-in duration-300"
        x-transition:leave-start="opacity-100 scale-100"
        x-transition:leave-end="opacity-0 scale-90"
        class=" flex flex-col font-normal text-xl w-full items-center  text-white rounded-lg">
          <div class="absolute w-full ">
            <img class="h-screen w-full object-cover"  :src="`assets/images/slider/${slide.image}`" alt="">
            <img class="h-screen w-full object-cover"  :src="`{{ Vite::asset('resources/images/slider/${slide.image}') }}`" alt="">
            <img src="{{ Vite::asset('resources/images/about/image-1.jpg') }}" alt="" class="w-full rounded-2xl" />


          </div>
          
          <div class="w-full control-1 absolute  top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 z-10 bg-opacity-50 bg-white p-12 xl:p-16 lg:w-5/12">
            <div class="container mx-auto">
              <h6 class=" text-sm sm:text-base font-bold leading-snug text-primary" x-text="slide.title1"></h6>
              <h1 class="mb-3 text-xl sm:text-2xl 2xl:text-3xl  font-bold leading-snug text-black" x-text="slide.title2"></h1>
              <p class="mb-8 max-w-[480px] font-medium text-sm sm:text-base text-black" x-text="slide.body"></p>
              <ul class="flex flex-wrap items-center">
                <li>
                  <a href="javascript:void(0)"
                    class="inline-flex items-center justify-center rounded-lg bg-primary py-4 px-6 text-center text-sm sm:text-base font-bold text-white hover:bg-opacity-90 sm:px-10 lg:px-8 xl:px-10">
                    Voir plus
                  </a>
              </ul>
            </div>
          </div>
        </div>

      </template>



      <!-- Prev/Next Arrows -->
      <div class="absolute inset-0 flex">
        <div class="flex items-center justify-start w-1/2">
          <button
            class=" bg-white -mr-2 lg:-mr-4 flex justify-center items-center w-10 h-10 rounded-full shadow focus:outline-none"
            x-on:click="activeSlide = activeSlide === 1 ? slides.length : activeSlide - 1">
            <svg viewBox="0 0 20 20" fill="currentColor" class="chevron-left w-6 h-6"><path fill-rule="evenodd" d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
          </button>
        </div>
        <div class="flex items-center justify-end w-1/2">
          <button 
            class="bg-white -mr-2 lg:-mr-4 flex justify-center items-center w-10 h-10 rounded-full shadow focus:outline-none"
          x-on:click="activeSlide = activeSlide === slides.length ? 1 : activeSlide + 1">
          <svg viewBox="0 0 20 20" fill="currentColor" class="chevron-right w-6 h-6"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path></svg>
        </button>
        </div>
      </div>


    </div>
  </section>
  <!-- ====== slider Section End -->

  <!-- ====== About Section Start -->
  <section class="overflow-hidden pt-20 pb-12 lg:pt-[120px] lg:pb-[90px]">
    <div class="container mx-auto">
      <div class="flex flex-wrap items-center justify-between">
        <div class="w-full lg:w-6/12 px-4">
          <div class="flex items-center">
            <div class="w-full xl:w-1/2">
              <div class="py-3 sm:py-4">
                <img src="{{ Vite::asset('resources/images/about/image-1.jpg') }}" alt="" class="w-full rounded-2xl" />

              </div>
              <div class="py-3 sm:py-4">
                <img src="{{ Vite::asset('resources/images/about/image-2.jpg') }}" alt="" class="w-full rounded-2xl" />
              </div>
            </div>
            <div class="w-full px-3 sm:px-4 xl:w-1/2">
              <div class="relative z-10 my-4">
                <img src="{{ Vite::asset('resources/images/about/image-3.jpg') }}" alt="" class="w-full rounded-2xl" />
                <span class="absolute -right-7 -bottom-7 z-[-1]">
                  <svg width="134" height="106" viewBox="0 0 134 106" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <circle cx="1.66667" cy="104" r="1.66667" transform="rotate(-90 1.66667 104)" fill="#3056D3" />
                    <circle cx="16.3333" cy="104" r="1.66667" transform="rotate(-90 16.3333 104)" fill="#3056D3" />
                    <circle cx="31" cy="104" r="1.66667" transform="rotate(-90 31 104)" fill="#3056D3" />
                    <circle cx="45.6667" cy="104" r="1.66667" transform="rotate(-90 45.6667 104)" fill="#3056D3" />
                    <circle cx="60.3334" cy="104" r="1.66667" transform="rotate(-90 60.3334 104)" fill="#3056D3" />
                    <circle cx="88.6667" cy="104" r="1.66667" transform="rotate(-90 88.6667 104)" fill="#3056D3" />
                    <circle cx="117.667" cy="104" r="1.66667" transform="rotate(-90 117.667 104)" fill="#3056D3" />
                    <circle cx="74.6667" cy="104" r="1.66667" transform="rotate(-90 74.6667 104)" fill="#3056D3" />
                    <circle cx="103" cy="104" r="1.66667" transform="rotate(-90 103 104)" fill="#3056D3" />
                    <circle cx="132" cy="104" r="1.66667" transform="rotate(-90 132 104)" fill="#3056D3" />
                    <circle cx="1.66667" cy="89.3333" r="1.66667" transform="rotate(-90 1.66667 89.3333)"
                      fill="#3056D3" />
                    <circle cx="16.3333" cy="89.3333" r="1.66667" transform="rotate(-90 16.3333 89.3333)"
                      fill="#3056D3" />
                    <circle cx="31" cy="89.3333" r="1.66667" transform="rotate(-90 31 89.3333)" fill="#3056D3" />
                    <circle cx="45.6667" cy="89.3333" r="1.66667" transform="rotate(-90 45.6667 89.3333)"
                      fill="#3056D3" />
                    <circle cx="60.3333" cy="89.3338" r="1.66667" transform="rotate(-90 60.3333 89.3338)"
                      fill="#3056D3" />
                    <circle cx="88.6667" cy="89.3338" r="1.66667" transform="rotate(-90 88.6667 89.3338)"
                      fill="#3056D3" />
                    <circle cx="117.667" cy="89.3338" r="1.66667" transform="rotate(-90 117.667 89.3338)"
                      fill="#3056D3" />
                    <circle cx="74.6667" cy="89.3338" r="1.66667" transform="rotate(-90 74.6667 89.3338)"
                      fill="#3056D3" />
                    <circle cx="103" cy="89.3338" r="1.66667" transform="rotate(-90 103 89.3338)" fill="#3056D3" />
                    <circle cx="132" cy="89.3338" r="1.66667" transform="rotate(-90 132 89.3338)" fill="#3056D3" />
                    <circle cx="1.66667" cy="74.6673" r="1.66667" transform="rotate(-90 1.66667 74.6673)"
                      fill="#3056D3" />
                    <circle cx="1.66667" cy="31.0003" r="1.66667" transform="rotate(-90 1.66667 31.0003)"
                      fill="#3056D3" />
                    <circle cx="16.3333" cy="74.6668" r="1.66667" transform="rotate(-90 16.3333 74.6668)"
                      fill="#3056D3" />
                    <circle cx="16.3333" cy="31.0003" r="1.66667" transform="rotate(-90 16.3333 31.0003)"
                      fill="#3056D3" />
                    <circle cx="31" cy="74.6668" r="1.66667" transform="rotate(-90 31 74.6668)" fill="#3056D3" />
                    <circle cx="31" cy="31.0003" r="1.66667" transform="rotate(-90 31 31.0003)" fill="#3056D3" />
                    <circle cx="45.6667" cy="74.6668" r="1.66667" transform="rotate(-90 45.6667 74.6668)"
                      fill="#3056D3" />
                    <circle cx="45.6667" cy="31.0003" r="1.66667" transform="rotate(-90 45.6667 31.0003)"
                      fill="#3056D3" />
                    <circle cx="60.3333" cy="74.6668" r="1.66667" transform="rotate(-90 60.3333 74.6668)"
                      fill="#3056D3" />
                    <circle cx="60.3333" cy="30.9998" r="1.66667" transform="rotate(-90 60.3333 30.9998)"
                      fill="#3056D3" />
                    <circle cx="88.6667" cy="74.6668" r="1.66667" transform="rotate(-90 88.6667 74.6668)"
                      fill="#3056D3" />
                    <circle cx="88.6667" cy="30.9998" r="1.66667" transform="rotate(-90 88.6667 30.9998)"
                      fill="#3056D3" />
                    <circle cx="117.667" cy="74.6668" r="1.66667" transform="rotate(-90 117.667 74.6668)"
                      fill="#3056D3" />
                    <circle cx="117.667" cy="30.9998" r="1.66667" transform="rotate(-90 117.667 30.9998)"
                      fill="#3056D3" />
                    <circle cx="74.6667" cy="74.6668" r="1.66667" transform="rotate(-90 74.6667 74.6668)"
                      fill="#3056D3" />
                    <circle cx="74.6667" cy="30.9998" r="1.66667" transform="rotate(-90 74.6667 30.9998)"
                      fill="#3056D3" />
                    <circle cx="103" cy="74.6668" r="1.66667" transform="rotate(-90 103 74.6668)" fill="#3056D3" />
                    <circle cx="103" cy="30.9998" r="1.66667" transform="rotate(-90 103 30.9998)" fill="#3056D3" />
                    <circle cx="132" cy="74.6668" r="1.66667" transform="rotate(-90 132 74.6668)" fill="#3056D3" />
                    <circle cx="132" cy="30.9998" r="1.66667" transform="rotate(-90 132 30.9998)" fill="#3056D3" />
                    <circle cx="1.66667" cy="60.0003" r="1.66667" transform="rotate(-90 1.66667 60.0003)"
                      fill="#3056D3" />
                    <circle cx="1.66667" cy="16.3333" r="1.66667" transform="rotate(-90 1.66667 16.3333)"
                      fill="#3056D3" />
                    <circle cx="16.3333" cy="60.0003" r="1.66667" transform="rotate(-90 16.3333 60.0003)"
                      fill="#3056D3" />
                    <circle cx="16.3333" cy="16.3333" r="1.66667" transform="rotate(-90 16.3333 16.3333)"
                      fill="#3056D3" />
                    <circle cx="31" cy="60.0003" r="1.66667" transform="rotate(-90 31 60.0003)" fill="#3056D3" />
                    <circle cx="31" cy="16.3333" r="1.66667" transform="rotate(-90 31 16.3333)" fill="#3056D3" />
                    <circle cx="45.6667" cy="60.0003" r="1.66667" transform="rotate(-90 45.6667 60.0003)"
                      fill="#3056D3" />
                    <circle cx="45.6667" cy="16.3333" r="1.66667" transform="rotate(-90 45.6667 16.3333)"
                      fill="#3056D3" />
                    <circle cx="60.3333" cy="60.0003" r="1.66667" transform="rotate(-90 60.3333 60.0003)"
                      fill="#3056D3" />
                    <circle cx="60.3333" cy="16.3333" r="1.66667" transform="rotate(-90 60.3333 16.3333)"
                      fill="#3056D3" />
                    <circle cx="88.6667" cy="60.0003" r="1.66667" transform="rotate(-90 88.6667 60.0003)"
                      fill="#3056D3" />
                    <circle cx="88.6667" cy="16.3333" r="1.66667" transform="rotate(-90 88.6667 16.3333)"
                      fill="#3056D3" />
                    <circle cx="117.667" cy="60.0003" r="1.66667" transform="rotate(-90 117.667 60.0003)"
                      fill="#3056D3" />
                    <circle cx="117.667" cy="16.3333" r="1.66667" transform="rotate(-90 117.667 16.3333)"
                      fill="#3056D3" />
                    <circle cx="74.6667" cy="60.0003" r="1.66667" transform="rotate(-90 74.6667 60.0003)"
                      fill="#3056D3" />
                    <circle cx="74.6667" cy="16.3333" r="1.66667" transform="rotate(-90 74.6667 16.3333)"
                      fill="#3056D3" />
                    <circle cx="103" cy="60.0003" r="1.66667" transform="rotate(-90 103 60.0003)" fill="#3056D3" />
                    <circle cx="103" cy="16.3333" r="1.66667" transform="rotate(-90 103 16.3333)" fill="#3056D3" />
                    <circle cx="132" cy="60.0003" r="1.66667" transform="rotate(-90 132 60.0003)" fill="#3056D3" />
                    <circle cx="132" cy="16.3333" r="1.66667" transform="rotate(-90 132 16.3333)" fill="#3056D3" />
                    <circle cx="1.66667" cy="45.3333" r="1.66667" transform="rotate(-90 1.66667 45.3333)"
                      fill="#3056D3" />
                    <circle cx="1.66667" cy="1.66683" r="1.66667" transform="rotate(-90 1.66667 1.66683)"
                      fill="#3056D3" />
                    <circle cx="16.3333" cy="45.3333" r="1.66667" transform="rotate(-90 16.3333 45.3333)"
                      fill="#3056D3" />
                    <circle cx="16.3333" cy="1.66683" r="1.66667" transform="rotate(-90 16.3333 1.66683)"
                      fill="#3056D3" />
                    <circle cx="31" cy="45.3333" r="1.66667" transform="rotate(-90 31 45.3333)" fill="#3056D3" />
                    <circle cx="31" cy="1.66683" r="1.66667" transform="rotate(-90 31 1.66683)" fill="#3056D3" />
                    <circle cx="45.6667" cy="45.3333" r="1.66667" transform="rotate(-90 45.6667 45.3333)"
                      fill="#3056D3" />
                    <circle cx="45.6667" cy="1.66683" r="1.66667" transform="rotate(-90 45.6667 1.66683)"
                      fill="#3056D3" />
                    <circle cx="60.3333" cy="45.3338" r="1.66667" transform="rotate(-90 60.3333 45.3338)"
                      fill="#3056D3" />
                    <circle cx="60.3333" cy="1.66683" r="1.66667" transform="rotate(-90 60.3333 1.66683)"
                      fill="#3056D3" />
                    <circle cx="88.6667" cy="45.3338" r="1.66667" transform="rotate(-90 88.6667 45.3338)"
                      fill="#3056D3" />
                    <circle cx="88.6667" cy="1.66683" r="1.66667" transform="rotate(-90 88.6667 1.66683)"
                      fill="#3056D3" />
                    <circle cx="117.667" cy="45.3338" r="1.66667" transform="rotate(-90 117.667 45.3338)"
                      fill="#3056D3" />
                    <circle cx="117.667" cy="1.66683" r="1.66667" transform="rotate(-90 117.667 1.66683)"
                      fill="#3056D3" />
                    <circle cx="74.6667" cy="45.3338" r="1.66667" transform="rotate(-90 74.6667 45.3338)"
                      fill="#3056D3" />
                    <circle cx="74.6667" cy="1.66683" r="1.66667" transform="rotate(-90 74.6667 1.66683)"
                      fill="#3056D3" />
                    <circle cx="103" cy="45.3338" r="1.66667" transform="rotate(-90 103 45.3338)" fill="#3056D3" />
                    <circle cx="103" cy="1.66683" r="1.66667" transform="rotate(-90 103 1.66683)" fill="#3056D3" />
                    <circle cx="132" cy="45.3338" r="1.66667" transform="rotate(-90 132 45.3338)" fill="#3056D3" />
                    <circle cx="132" cy="1.66683" r="1.66667" transform="rotate(-90 132 1.66683)" fill="#3056D3" />
                  </svg>
                </span>
              </div>
            </div>
          </div>
        </div>
        <div class="w-full lg:w-5/12 px-4">
          <div class="mt-10 lg:mt-0">
            <span class="mb-2 block text-lg font-semibold text-primary">
              Pourquoi nous choisir
            </span>
            <h2 class="mb-8 text-3xl font-bold text-dark sm:text-4xl">
              Rendez vos clients heureux en offrant des services.
            </h2>
            <p class="mb-8 text-base text-body-color">
              Lorem ipsum dolor sit amet consectetur. Amet scelerisque odio auctor enim tempor phasellus. Est est sit
              sed sed duis senectus sit semper mi. Pellentesque consectetur dui ac dis.
            </p>
            <p class="mb-12 text-base text-body-color">
              Lorem ipsum dolor sit amet consectetur. Amet scelerisque odio auctor enim tempor phasellus. Est est sit
              sed sed duis senectus sit semper mi. Pellentesque consectetur dui ac dis.
            </p>
            <a href="javascript:void(0)"
              class="inline-flex items-center justify-center rounded-lg bg-primary py-4 px-10 text-center text-base font-normal text-white hover:bg-opacity-90 lg:px-8 xl:px-10">
              Voir plus
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- ====== About Section End -->

  <!-- ====== Portfolio Section Start -->
  <section x-data="
    {
      showCards: 'produit',
      activeClasses: 'bg-primary text-white',
      inactiveClasses: 'text-body-color hover:bg-primary hover:text-white',
    }
  " class="pt-20 pb-12 lg:pt-[120px] lg:pb-[90px]">
    <div class="container mx-auto">
      <div class="flex flex-wrap">
        <div class="w-full">
          <div class="mx-auto mb-[60px] max-w-[510px] text-center">
            <span class="mb-2 block text-lg font-semibold text-primary">
              Our Portfolio
            </span>
            <h2 class="mb-4 text-3xl font-bold text-dark sm:text-4xl md:text-[40px]">
              PRODUITS & SERVICES
            </h2>
            <p class="text-base text-body-color">
              There are many variations of passages of Lorem Ipsum available
              but the majority have suffered alteration in some form.
            </p>
          </div>
        </div>
      </div>
      <div class="flex flex-wrap justify-center">
        <div class="w-full">
          <ul class="mb-12 flex flex-wrap justify-center space-x-1">
            <li class="mb-1">
              <button @click="showCards = 'produit' " :class="showCards == 'produit' ? activeClasses : inactiveClasses "
                class="inline-block rounded-lg py-2 px-5 text-center text-base font-semibold transition md:py-3 lg:px-8">
                Nos Produits
              </button>
            </li>
            <li class="mb-1">
              <button @click="showCards = 'service' " :class="showCards == 'service' ? activeClasses : inactiveClasses "
                class="inline-block rounded-lg py-2 px-5 text-center text-base font-semibold transition md:py-3 lg:px-8">
                Nos Services
              </button>
            </li>
          </ul>
        </div>
      </div>
      <div class="flex flex-wrap">
        <div :class="showCards == 'produit' ? 'block' : 'hidden' " class="w-full px-4 md:w-1/2 xl:w-1/3">
          <div class="relative mb-12">
            <div class="overflow-hidden rounded-lg">
              <img src="{{ Vite::asset('resources/images/portfolio/portfolio-01/image-01.png') }}" alt="portfolio" class="w-full" />
            </div>
            <div class="relative z-10 mx-7 -mt-20 rounded-lg bg-white py-9 px-3 text-center shadow-lg">
              <span class="mb-2 block text-sm font-semibold text-primary">
                Produit
              </span>
              <h3 class="mb-4 text-xl font-bold text-dark">
                Produit rouges
              </h3>
              <a href="javascript:void(0)"
                class="inline-block rounded-md border py-3 px-7 text-sm font-semibold text-body-color transition hover:border-primary hover:bg-primary hover:text-white">
                voir Details
              </a>
            </div>
          </div>
        </div>
        <div :class="showCards == 'produit' ? 'block' : 'hidden' " class="w-full px-4 md:w-1/2 xl:w-1/3">
          <div class="relative mb-12">
            <div class="overflow-hidden rounded-lg">
              <img src="{{ Vite::asset('resources/images/portfolio/portfolio-01/image-02.png') }}" alt="portfolio" class="w-full" />
            </div>
            <div class="relative z-10 mx-7 -mt-20 rounded-lg bg-white py-9 px-3 text-center shadow-lg">
              <span class="mb-2 block text-sm font-semibold text-primary">
                Produit
              </span>
              <h3 class="mb-4 text-xl font-bold text-dark">
                Agrégats de carrière
              </h3>
              <a href="javascript:void(0)"
                class="inline-block rounded-md border py-3 px-7 text-sm font-semibold text-body-color transition hover:border-primary hover:bg-primary hover:text-white">
                voir Details
              </a>
            </div>
          </div>
        </div>
        <div :class="showCards == 'produit' ? 'block' : 'hidden' " class="w-full px-4 md:w-1/2 xl:w-1/3">
          <div class="relative mb-12">
            <div class="overflow-hidden rounded-lg">
              <img src="{{ Vite::asset('resources/images/portfolio/portfolio-01/image-03.png') }}" alt="portfolio" class="w-full" />
            </div>
            <div class="relative z-10 mx-7 -mt-20 rounded-lg bg-white py-9 px-3 text-center shadow-lg">
              <span class="mb-2 block text-sm font-semibold text-primary">
                Produit
              </span>
              <h3 class="mb-4 text-xl font-bold text-dark">
                Plâtre, enduit, ciment colle
              </h3>
              <a href="javascript:void(0)"
                class="inline-block rounded-md border py-3 px-7 text-sm font-semibold text-body-color transition hover:border-primary hover:bg-primary hover:text-white">
                voir Details
              </a>
            </div>
          </div>
        </div>
        <div :class="showCards == 'produit' ? 'block' : 'hidden' " class="w-full px-4 md:w-1/2 xl:w-1/3">
          <div class="relative mb-12">
            <div class="overflow-hidden rounded-lg">
              <img src="{{ Vite::asset('resources/images/portfolio/portfolio-01/image-04.png') }}" alt="portfolio" class="w-full" />
            </div>
            <div class="relative z-10 mx-7 -mt-20 rounded-lg bg-white py-9 px-3 text-center shadow-lg">
              <span class="mb-2 block text-sm font-semibold text-primary">
                Produit
              </span>
              <h3 class="mb-4 text-xl font-bold text-dark">
                Produits d’émulsions routières
              </h3>
              <a href="javascript:void(0)"
                class="inline-block rounded-md border py-3 px-7 text-sm font-semibold text-body-color transition hover:border-primary hover:bg-primary hover:text-white">
                voir Details
              </a>
            </div>
          </div>
        </div>
        <div :class="showCards == 'all' || showCards == 'produit' ? 'block' : 'hidden' " class="w-full px-4 md:w-1/2 xl:w-1/3">
          <div class="relative mb-12">
            <div class="overflow-hidden rounded-lg">
              <img src="{{ Vite::asset('resources/images/portfolio/portfolio-01/image-05.png') }}" alt="portfolio" class="w-full" />
            </div>
            <div class="relative z-10 mx-7 -mt-20 rounded-lg bg-white py-9 px-3 text-center shadow-lg">
              <span class="mb-2 block text-sm font-semibold text-primary">
                Produit
              </span>
              <h3 class="mb-4 text-xl font-bold text-dark">
                Agglomérés béton
              </h3>
              <a href="javascript:void(0)"
                class="inline-block rounded-md border py-3 px-7 text-sm font-semibold text-body-color transition hover:border-primary hover:bg-primary hover:text-white">
                voir Details
              </a>
            </div>
          </div>
        </div>
        <div :class="showCards == 'all' || showCards == 'produit' ? 'block' : 'hidden' " class="w-full px-4 md:w-1/2 xl:w-1/3">
          <div class="relative mb-12">
            <div class="overflow-hidden rounded-lg">
              <img src="{{ Vite::asset('resources/images/portfolio/portfolio-01/image-06.png') }}" alt="portfolio" class="w-full" />
            </div>
            <div class="relative z-10 mx-7 -mt-20 rounded-lg bg-white py-9 px-3 text-center shadow-lg">
              <span class="mb-2 block text-sm font-semibold text-primary">
                Produit
              </span>
              <h3 class="mb-4 text-xl font-bold text-dark">
                Menuiserie bâtiment
              </h3>
              <a href="javascript:void(0)"
                class="inline-block rounded-md border py-3 px-7 text-sm font-semibold text-body-color transition hover:border-primary hover:bg-primary hover:text-white">
                voir Details
              </a>
            </div>
          </div>
        </div>



        <div :class="showCards == 'all' || showCards == 'service' ? 'block' : 'hidden' "
          class="w-full px-4 md:w-1/2 xl:w-1/3">
          <div class="relative mb-12">
            <div class="overflow-hidden rounded-lg">
              <img src="{{ Vite::asset('resources/images/portfolio/portfolio-01/image-07.png') }}" alt="portfolio" class="w-full" />
            </div>
            <div class="relative z-10 mx-7 -mt-20 rounded-lg bg-white py-9 px-3 text-center shadow-lg">
              <span class="mb-2 block text-sm font-semibold text-primary">
                Services
              </span>
              <h3 class="mb-4 text-xl font-bold text-dark">
                Menuiserie bâtiment
              </h3>
              <a href="javascript:void(0)"
                class="inline-block rounded-md border py-3 px-7 text-sm font-semibold text-body-color transition hover:border-primary hover:bg-primary hover:text-white">
                voir Details
              </a>
            </div>
          </div>
        </div>

        <div :class="showCards == 'all' || showCards == 'service' ? 'block' : 'hidden' "
          class="w-full px-4 md:w-1/2 xl:w-1/3">
          <div class="relative mb-12">
            <div class="overflow-hidden rounded-lg">
              <img src="{{ Vite::asset('resources/images/portfolio/portfolio-01/image-08.png') }}" alt="portfolio" class="w-full" />
            </div>
            <div class="relative z-10 mx-7 -mt-20 rounded-lg bg-white py-9 px-3 text-center shadow-lg">
              <span class="mb-2 block text-sm font-semibold text-primary">
                Services
              </span>
              <h3 class="mb-4 text-xl font-bold text-dark">
                Menuiserie bâtiment
              </h3>
              <a href="javascript:void(0)"
                class="inline-block rounded-md border py-3 px-7 text-sm font-semibold text-body-color transition hover:border-primary hover:bg-primary hover:text-white">
                voir Details
              </a>
            </div>
          </div>
        </div>

        <div :class="showCards == 'all' || showCards == 'service' ? 'block' : 'hidden' "
          class="w-full px-4 md:w-1/2 xl:w-1/3">
          <div class="relative mb-12">
            <div class="overflow-hidden rounded-lg">
              <img src="{{ Vite::asset('resources/images/portfolio/portfolio-01/image-09.png') }}" alt="portfolio" class="w-full" />
            </div>
            <div class="relative z-10 mx-7 -mt-20 rounded-lg bg-white py-9 px-3 text-center shadow-lg">
              <span class="mb-2 block text-sm font-semibold text-primary">
                Services
              </span>
              <h3 class="mb-4 text-xl font-bold text-dark">
                Menuiserie bâtiment
              </h3>
              <a href="javascript:void(0)"
                class="inline-block rounded-md border py-3 px-7 text-sm font-semibold text-body-color transition hover:border-primary hover:bg-primary hover:text-white">
                voir Details
              </a>
            </div>
          </div>
        </div>


      </div>
    </div>
  </section>
  <!-- ====== Portfolio Section End -->

  <!-- ====== acctualite Section Start -->
  <section class="pt-20 pb-10 lg:pt-[120px] lg:pb-20">
    <div class="container mx-auto">
      <div class="flex flex-wrap justify-center">
        <div class="w-full ">
          <div class="mx-auto mb-[60px]  text-center lg:mb-20">
            <span class="mb-2 block text-lg font-semibold text-primary">
              Actualités
            </span>
            <h2 class="mb-4 text-3xl font-bold text-dark sm:text-4xl md:text-[40px]">
              Nos nouvelles récentes
            </h2>
            <p class="text-base text-body-color">
              There are many variations of passages of Lorem Ipsum available
              but the majority have suffered alteration in some form.
            </p>
          </div>
        </div>
      </div>

      <div class="flex flex-col md:flex-row justify-between">
        <div class="flex md:w-1/2 lg:w-1/3 justify-center lg:justify-start px-4 ">
          <div class="flex flex-col mb-10 shadow-md hover:shadow-lg">
            <div class="mb-8 overflow-hidden rounded ">
              <img src="{{ Vite::asset('resources/images/blogs/blog-01/image-01.png') }}" alt="image" class="lg:w-full bg-cover  mx-auto" />
            </div>
            <div class="flex md:w-10/12 mx-auto items-center text-xs font-semibold text-body-color mb-3">
              <span class="pr-2">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                  stroke="currentColor" class="w-6 h-6">
                  <path stroke-linecap="round" stroke-linejoin="round"
                    d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 012.25-2.25h13.5A2.25 2.25 0 0121 7.5v11.25m-18 0A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75m-18 0v-7.5A2.25 2.25 0 015.25 9h13.5A2.25 2.25 0 0121 11.25v7.5m-9-6h.008v.008H12v-.008zM12 15h.008v.008H12V15zm0 2.25h.008v.008H12v-.008zM9.75 15h.008v.008H9.75V15zm0 2.25h.008v.008H9.75v-.008zM7.5 15h.008v.008H7.5V15zm0 2.25h.008v.008H7.5v-.008zm6.75-4.5h.008v.008h-.008v-.008zm0 2.25h.008v.008h-.008V15zm0 2.25h.008v.008h-.008v-.008zm2.25-4.5h.008v.008H16.5v-.008zm0 2.25h.008v.008H16.5V15z" />
                </svg>
              </span>
              Dec 22, 2023
            </div>
            <h3 class="w-8/12 md:w-10/12 mx-auto ">
              <a href="javascript:void(0)"
                class="mb-4 inline-block text-sm md:text-base font-semibold text-dark hover:text-primary lg:text-2xl lg:text-xl xl:text-xl">
                APMC autorisé à construire une
                nouvelle centrale à béton à
                BATNA APMC autorisé à construire une
                nouvelle centrale à béton à
                BATNA
              </a>
            </h3>
            <p class="flex-1 text-xs md:text-base text-body-color w-8/12 md:w-10/12 mx-auto mb-6">
              Lorem Ipsum is simply dummy text of the
              printing and typesetting industry simply
              dummy text of the simply printing Ipsum....
            </p>
            <div class="flex md:w-10/12 mx-auto items-center text-xs font-semibold text-body-color mb-3 justify-end">
              Lire la suite
              <span class="pl-2">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 33 24" stroke-width="1.5"
                  stroke="currentColor" class="w-6 h-6">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25L21 12m0 0l-3.75 3.75M21 12H3" />
                </svg>
              </span>
            </div>
            <div
              class="flex h-10 md:w-10/12 items-center text-xs font-semibold text-body-color mb-3 justify-end border-t mx-auto">
              Par Nadour Sabrina
            </div>
          </div>
        </div>
        <div class="flex md:w-1/2 lg:w-1/3 lg:justify-around px-4">
          <div class="flex flex-col mb-10  shadow-md hover:shadow-lg">
            <div class="mb-8 overflow-hidden rounded">
              <img src="{{ Vite::asset('resources/images/blogs/blog-01/image-02.png') }}" alt="image" class="lg:w-full bg-cover mx-auto" />
            </div>

            <div class="flex md:w-10/12 mx-auto items-center text-xs font-semibold text-body-color mb-3">
              <span class="pr-2">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                  stroke="currentColor" class="w-6 h-6">
                  <path stroke-linecap="round" stroke-linejoin="round"
                    d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 012.25-2.25h13.5A2.25 2.25 0 0121 7.5v11.25m-18 0A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75m-18 0v-7.5A2.25 2.25 0 015.25 9h13.5A2.25 2.25 0 0121 11.25v7.5m-9-6h.008v.008H12v-.008zM12 15h.008v.008H12V15zm0 2.25h.008v.008H12v-.008zM9.75 15h.008v.008H9.75V15zm0 2.25h.008v.008H9.75v-.008zM7.5 15h.008v.008H7.5V15zm0 2.25h.008v.008H7.5v-.008zm6.75-4.5h.008v.008h-.008v-.008zm0 2.25h.008v.008h-.008V15zm0 2.25h.008v.008h-.008v-.008zm2.25-4.5h.008v.008H16.5v-.008zm0 2.25h.008v.008H16.5V15z" />
                </svg>
              </span>
              Dec 22, 2023
            </div>

            <h3 class="flex-1 w-8/12 md:w-10/12 mx-auto ">
              <a href="javascript:void(0)"
                class="mb-4 inline-block text-sm md:text-base font-semibold text-dark hover:text-primary lg:text-2xl lg:text-xl xl:text-xl">
                Isolation des réservoirs industriels
              </a>
            </h3>
            <p class=" text-xs md:text-base text-body-color w-8/12 md:w-10/12 mx-auto mb-6 ">
              Au cours de ces dernières années, APMC a
              développé des projets d'isolation pour des
              entreprises de secteurs très différents, tels
              quel'agroalimentaire, la pharmacie....

            </p>
            <div class="flex md:w-10/12 mx-auto items-center text-xs font-semibold text-body-color mb-3 justify-end">
              Lire la suite
              <span class="pl-2">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 33 24" stroke-width="1.5"
                  stroke="currentColor" class="w-6 h-6">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25L21 12m0 0l-3.75 3.75M21 12H3" />
                </svg>
              </span>
            </div>

            <div
              class="flex h-10 md:w-10/12 items-center text-xs font-semibold text-body-color mb-3 justify-end border-t mx-auto">
              Par Nadour Sabrina
            </div>

          </div>
        </div>
        <div class="flex md:w-1/2 lg:w-1/3 lg:justify-end  px-4">
          <div class="flex flex-col mb-10  shadow-md hover:shadow-lg">
            <div class="mb-8 overflow-hidden rounded">
              <img src="{{ Vite::asset('resources/images/blogs/blog-01/image-03.png') }}" alt="image" class="lg:w-full bg-cover mx-auto" />
            </div>
            <div class="flex md:w-10/12 mx-auto items-center text-xs font-semibold text-body-color mb-3">
              <span class="pr-2">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                  stroke="currentColor" class="w-6 h-6">
                  <path stroke-linecap="round" stroke-linejoin="round"
                    d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 012.25-2.25h13.5A2.25 2.25 0 0121 7.5v11.25m-18 0A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75m-18 0v-7.5A2.25 2.25 0 015.25 9h13.5A2.25 2.25 0 0121 11.25v7.5m-9-6h.008v.008H12v-.008zM12 15h.008v.008H12V15zm0 2.25h.008v.008H12v-.008zM9.75 15h.008v.008H9.75V15zm0 2.25h.008v.008H9.75v-.008zM7.5 15h.008v.008H7.5V15zm0 2.25h.008v.008H7.5v-.008zm6.75-4.5h.008v.008h-.008v-.008zm0 2.25h.008v.008h-.008V15zm0 2.25h.008v.008h-.008v-.008zm2.25-4.5h.008v.008H16.5v-.008zm0 2.25h.008v.008H16.5V15z" />
                </svg>
              </span>
              Dec 22, 2023
            </div>
            <h3 class="w-8/12 md:w-10/12 mx-auto">
              <a href="javascript:void(0)"
                class="mb-4 inline-block text-sm md:text-base font-semibold text-dark hover:text-primary lg:text-2xl lg:text-xl xl:text-xl">
                Sculptures en briques
                tridimen -sionnelles de Apmc divindus
              </a>
            </h3>
            <p class=" flex-1 text-xs md:text-base text-body-color w-8/12 md:w-10/12 mx-auto mb-6">
              Lorem Ipsum is simply dummy text of the
              printing and typesetting industry simply
              dummy text of the simply printing Ipsum....
            </p>
            <div class="flex md:w-10/12 mx-auto items-center text-xs font-semibold text-body-color mb-3 justify-end">
              Lire la suite
              <span class="pl-2">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 33 24" stroke-width="1.5"
                  stroke="currentColor" class="w-6 h-6">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25L21 12m0 0l-3.75 3.75M21 12H3" />
                </svg>
              </span>
            </div>
            <div
              class="flex h-10 md:w-10/12 items-center text-xs font-semibold text-body-color mb-3 justify-end border-t mx-auto">
              Par Nadour Sabrina
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- ====== Actualite Section End -->
  
  <!-- ====== Contact Section Start -->
  <section class="relative z-10 overflow-hidden bg-white py-20 lg:py-[120px] bg-no-repeat bg-cover bg-center "
    style="background-image: url('assets/images/contact/img3.png');">
    <div class="container mx-auto">
      <div class=" flex flex-wrap lg:justify-between">
        <div class="w-full lg:w-1/2 xl:w-6/12 flex flex-wrap justify-start content-around px-4">
          <div class="mb-12 max-w-[570px] lg:mb-0">
            <span class="mb-4 block text-base font-semibold text-primary">
              Contact Us
            </span>
            <h2 class="mb-6 text-[32px] font-semibold  text-dark sm:text-[40px] lg:text-[36px] xl:text-[25px]">
              Lorem ipsum dolor sit amet consectetur.
            </h2>

            <div class="mb-8 flex w-full max-w-[370px]">
              <div
                class="mr-6 flex h-[60px] w-full max-w-[60px] items-center justify-center overflow-hidden rounded bg-primary bg-opacity-5 text-primary sm:h-[70px] sm:max-w-[70px]">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                  stroke="currentColor" class="w-8 h-7">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z" />
                  <path stroke-linecap="round" stroke-linejoin="round"
                    d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z" />
                </svg>
              </div>
              <div class="w-full flex flex-col justify-center">
                <h4 class="mb-1 text-sm font-bold text-dark">Notre Adresse</h4>
                <p class="text-xs text-black font-medium ">
                  202, rue Hassiba </br> BENBOULI.W.ALGER
                </p>
              </div>
            </div>

            <div class="mb-8 flex w-full max-w-[370px]">
              <div
                class="mr-6 flex h-[60px] w-full max-w-[60px] items-center justify-center overflow-hidden rounded bg-primary bg-opacity-5 text-primary sm:h-[70px] sm:max-w-[70px]">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                  stroke="currentColor" class="w-8 h-7">
                  <path stroke-linecap="round" stroke-linejoin="round"
                    d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 002.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 01-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 00-1.091-.852H4.5A2.25 2.25 0 002.25 4.5v2.25z" />
                </svg>
              </div>
              <div class="w-full flex flex-col justify-center">
                <h4 class="mb-1 text-sm font-bold text-dark">Numero</h4>
                <p class="text-xs text-black font-medium">+213(0) 23 53 54 93</p>
              </div>
            </div>

            <div class="mb-8 flex w-full max-w-[370px]">
              <div
                class="mr-6 flex h-[60px] w-full max-w-[60px] items-center justify-center overflow-hidden rounded bg-primary bg-opacity-5 text-primary sm:h-[70px] sm:max-w-[70px]">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                  stroke="currentColor" class="w-8 h-7">
                  <path stroke-linecap="round" stroke-linejoin="round"
                    d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75" />
                </svg>
              </div>
              <div class="w-full flex flex-col justify-center">
                <h4 class="mb-1 text-sm font-bold text-dark">
                  Email
                </h4>
                <p class="text-xs text-black font-medium">apmc.commercial@gmail.com</p>
              </div>
            </div>
          </div>
        </div>
        <div class="w-full lg:w-1/2 xl:w-5/12 px-4">
          <div class="relative rounded-lg bg-white p-8 shadow-lg sm:p-12">
            <h2 class="mb-6 font-bold text-dark sm:text-[30px] lg:text-[30px] xl:text-[25px]">
              Envoyez-nous un message
            </h2>
            <form>

              <div class="mb-6">
                <label for="" class="mb-3 block text-base font-medium text-black">
                  Email*
                </label>
                <input type="email" placeholder="example@yourmail.com"
                  class="border-[f8f8f8] w-full rounded border-b py-1 px-[0px] text-sm text-body-color outline-none focus:border-primary focus-visible:shadow-none" />
              </div>
              <div class="mb-6">
                <label for="" class="mb-3 block text-base font-medium text-black">
                  Message*
                </label>
                <textarea rows="3" placeholder="tapez votre message ici"
                  class="border-[f0f0f0] w-full resize-none rounded border py-3 px-[14px] text-sm text-body-color outline-none focus:border-primary focus-visible:shadow-none"></textarea>
              </div>
              <div>
                <button type="submit"
                  class="w-1/4 rounded-lg border  bg-body-color p-3 text-white transition hover:bg-opacity-90">
                  Envoyer
                </button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- ====== Contact Section End -->

  <!-- ====== Footer Section Start -->
  <footer class="relative z-10 bg-white pt-20 lg:pt-[120px]">
    <div class="container mx-auto">
      <div class=" flex flex-wrap justify-between">
        <div class="w-full px-4 sm:w-2/3 lg:w-3/12">
          <div class="mb-5 w-full">
            <a href="javascript:void(0)" class="mb-6 inline-block max-w-[250px]">
              <img src="{{ Vite::asset('resources/images/logo/apmc.png') }}" alt="logo" class="w-full" />
            </a>
            <p class="mb-7 text-base text-dark font-medium" style="line-height: 2rem;" >
              Lorem ipsum doloramet consectetur
              adipiscing elit do eiusmod tempor
              incididunt ut labore et dolore.
            </p>

          </div>
        </div>
        <div class="w-full flex flex-row justify-between px-4 sm:w-2/3 lg:w-4/12">
          <div class="mb-5">
            <h4 class="mb-5 lg:mb-10 text-lg font-semibold text-dark">Liens utiles</h4>
            <ul>
              <li>
                <a href="javascript:void(0)"
                  class="mb-2 inline-block text-base font-semibold leading-loose text-dark hover:text-primary">
                  A propos
                </a>
              </li>
              <li>
                <a href="javascript:void(0)"
                  class="mb-2 inline-block text-base font-semibold leading-loose text-dark hover:text-primary">
                  Contact
                </a>
              </li>
              <li>
                <a href="javascript:void(0)"
                  class="mb-2 inline-block text-base font-semibold leading-loose text-dark hover:text-primary">
                  Domaine d’activite
                </a>
              </li>
              <li>
                <a href="javascript:void(0)"
                  class="mb-2 inline-block text-base font-semibold leading-loose text-dark hover:text-primary">
                  Actualite
                </a>
              </li>
              <li>
                <a href="javascript:void(0)"
                  class="mb-2 inline-block text-base font-semibold leading-loose text-dark hover:text-primary">
                  Produit
                </a>
              </li>
            </ul>
          </div>
          <div class="mb-5">
            <h4 class="mb-5 lg:mb-10 text-lg font-semibold text-dark">Lorem ipsum</h4>
            <ul>
              <li>
                <a href="javascript:void(0)"
                  class="mb-2 inline-block text-base font-semibold leading-loose text-dark hover:text-primary">
                  Lorem 
                </a>
              </li>
              <li>
                <a href="javascript:void(0)"
                  class="mb-2 inline-block text-base font-semibold leading-loose text-dark hover:text-primary">
                  Lorem 
                </a>
              </li>
              <li>
                <a href="javascript:void(0)"
                  class="mb-2 inline-block text-base font-semibold leading-loose text-dark hover:text-primary">
                  Lorem ipsum
                </a>
              </li>
              <li>
                <a href="javascript:void(0)"
                  class="mb-2 inline-block text-base font-semibold leading-loose text-dark hover:text-primary">
                  Lorem 
                </a>
              </li>
              <li>
                <a href="javascript:void(0)"
                  class="mb-2 inline-block text-base font-semibold leading-loose text-dark hover:text-primary">
                  Lorem 
                </a>
              </li>
            </ul>
          </div>
        </div>

        <div class="w-full px-4 sm:w-2/3 lg:w-3/12">
          <div class="mb-5 w-full">
            <a href="javascript:void(0)" class="mb-1 inline-block max-w-[200px]">
              <img src="{{ Vite::asset('resources/images/logo/divindus.png') }}" alt="logo" class="w-2/4" />
            </a>
            <p class="mb-3 text-sm text-dark font-medium" style="line-height: 1.4rem;">
              Groupe d’industries Locale  DIVINDUS,
              Crée en 2015, sous la tutelle du
              ministère de l’industrie et des mines.
            </p>
            <div>
              <button type="submit"
                class="rounded border  bg-body-color p-3 text-white transition hover:bg-opacity-90">
                Consutlter
              </button>
            </div>

          </div>
        </div>

        <!--<div class="w-full px-4 sm:w-1/2 lg:w-3/12">
          <div class="mb-10 w-full">
            <h4 class="mb-9 text-lg font-semibold text-dark">Follow Us On</h4>
            <div class="mb-6 flex items-center">
              <a href="javascript:void(0)"
                class="mr-3 flex h-8 w-8 items-center justify-center rounded-full border border-[#E5E5E5] text-dark hover:border-primary hover:bg-primary hover:text-white sm:mr-4 lg:mr-3 xl:mr-4">
                <svg width="8" height="16" viewBox="0 0 8 16" class="fill-current">
                  <path
                    d="M7.43902 6.4H6.19918H5.75639V5.88387V4.28387V3.76774H6.19918H7.12906C7.3726 3.76774 7.57186 3.56129 7.57186 3.25161V0.516129C7.57186 0.232258 7.39474 0 7.12906 0H5.51285C3.76379 0 2.54609 1.44516 2.54609 3.5871V5.83226V6.34839H2.10329H0.597778C0.287819 6.34839 0 6.63226 0 7.04516V8.90323C0 9.26452 0.243539 9.6 0.597778 9.6H2.05902H2.50181V10.1161V15.3032C2.50181 15.6645 2.74535 16 3.09959 16H5.18075C5.31359 16 5.42429 15.9226 5.51285 15.8194C5.60141 15.7161 5.66783 15.5355 5.66783 15.3806V10.1419V9.62581H6.13276H7.12906C7.41688 9.62581 7.63828 9.41935 7.68256 9.10968V9.08387V9.05806L7.99252 7.27742C8.01466 7.09677 7.99252 6.89032 7.85968 6.68387C7.8154 6.55484 7.61614 6.42581 7.43902 6.4Z" />
                </svg>
              </a>
              <a href="javascript:void(0)"
                class="mr-3 flex h-8 w-8 items-center justify-center rounded-full border border-[#E5E5E5] text-dark hover:border-primary hover:bg-primary hover:text-white sm:mr-4 lg:mr-3 xl:mr-4">
                <svg width="16" height="12" viewBox="0 0 16 12" class="fill-current">
                  <path
                    d="M14.2194 2.06654L15.2 0.939335C15.4839 0.634051 15.5613 0.399217 15.5871 0.2818C14.8129 0.704501 14.0903 0.845401 13.6258 0.845401H13.4452L13.3419 0.751468C12.7226 0.258317 11.9484 0 11.1226 0C9.31613 0 7.89677 1.36204 7.89677 2.93542C7.89677 3.02935 7.89677 3.17025 7.92258 3.26419L8 3.73386L7.45806 3.71037C4.15484 3.61644 1.44516 1.03327 1.00645 0.587084C0.283871 1.76125 0.696774 2.88845 1.13548 3.59296L2.0129 4.90802L0.619355 4.20352C0.645161 5.18982 1.05806 5.96477 1.85806 6.52838L2.55484 6.99804L1.85806 7.25636C2.29677 8.45401 3.27742 8.94716 4 9.13503L4.95484 9.36986L4.05161 9.93346C2.60645 10.8728 0.8 10.8024 0 10.7319C1.62581 11.7652 3.56129 12 4.90323 12C5.90968 12 6.65806 11.9061 6.83871 11.8356C14.0645 10.2857 14.4 4.41487 14.4 3.2407V3.07632L14.5548 2.98239C15.4323 2.23092 15.7935 1.8317 16 1.59687C15.9226 1.62035 15.8194 1.66732 15.7161 1.6908L14.2194 2.06654Z" />
                </svg>
              </a>
              <a href="javascript:void(0)"
                class="mr-3 flex h-8 w-8 items-center justify-center rounded-full border border-[#E5E5E5] text-dark hover:border-primary hover:bg-primary hover:text-white sm:mr-4 lg:mr-3 xl:mr-4">
                <svg width="16" height="12" viewBox="0 0 16 12" class="fill-current">
                  <path
                    d="M15.6645 1.88018C15.4839 1.13364 14.9419 0.552995 14.2452 0.359447C13.0065 6.59222e-08 8 0 8 0C8 0 2.99355 6.59222e-08 1.75484 0.359447C1.05806 0.552995 0.516129 1.13364 0.335484 1.88018C0 3.23502 0 6 0 6C0 6 0 8.79263 0.335484 10.1198C0.516129 10.8664 1.05806 11.447 1.75484 11.6406C2.99355 12 8 12 8 12C8 12 13.0065 12 14.2452 11.6406C14.9419 11.447 15.4839 10.8664 15.6645 10.1198C16 8.79263 16 6 16 6C16 6 16 3.23502 15.6645 1.88018ZM6.4 8.57143V3.42857L10.5548 6L6.4 8.57143Z" />
                </svg>
              </a>
              <a href="javascript:void(0)"
                class="mr-3 flex h-8 w-8 items-center justify-center rounded-full border border-[#E5E5E5] text-dark hover:border-primary hover:bg-primary hover:text-white sm:mr-4 lg:mr-3 xl:mr-4">
                <svg width="14" height="14" viewBox="0 0 14 14" class="fill-current">
                  <path
                    d="M13.0214 0H1.02084C0.453707 0 0 0.451613 0 1.01613V12.9839C0 13.5258 0.453707 14 1.02084 14H12.976C13.5432 14 13.9969 13.5484 13.9969 12.9839V0.993548C14.0422 0.451613 13.5885 0 13.0214 0ZM4.15142 11.9H2.08705V5.23871H4.15142V11.9ZM3.10789 4.3129C2.42733 4.3129 1.90557 3.77097 1.90557 3.11613C1.90557 2.46129 2.45002 1.91935 3.10789 1.91935C3.76577 1.91935 4.31022 2.46129 4.31022 3.11613C4.31022 3.77097 3.81114 4.3129 3.10789 4.3129ZM11.9779 11.9H9.9135V8.67097C9.9135 7.90323 9.89082 6.8871 8.82461 6.8871C7.73571 6.8871 7.57691 7.74516 7.57691 8.60323V11.9H5.51254V5.23871H7.53154V6.16452H7.55423C7.84914 5.62258 8.50701 5.08065 9.52785 5.08065C11.6376 5.08065 12.0232 6.43548 12.0232 8.2871V11.9H11.9779Z" />
                </svg>
              </a>
            </div>
            <p class="text-base text-body-color">&copy; 2025 TailGrids</p>
          </div>
        </div>-->

      </div>
    </div>
    <div class="bg-body-color py-5">
      <div class="container mx-auto ">
        <div class="flex flex-wrap justify-between content-center items-center">
          <div class="text-white">
            <p>© 2022 CETIC Spa. Tous droits Réservés</p>
          </div>
          <div class=" flex items-center">
            <a href="javascript:void(0)"
              class="mr-3 flex h-8 w-8 items-center justify-center rounded-full border border-[#E5E5E5] text-white hover:border-primary hover:bg-primary hover:text-white sm:mr-4 lg:mr-3 xl:mr-4">
              <svg width="8" height="16" viewBox="0 0 8 16" class="fill-current">
                <path
                  d="M7.43902 6.4H6.19918H5.75639V5.88387V4.28387V3.76774H6.19918H7.12906C7.3726 3.76774 7.57186 3.56129 7.57186 3.25161V0.516129C7.57186 0.232258 7.39474 0 7.12906 0H5.51285C3.76379 0 2.54609 1.44516 2.54609 3.5871V5.83226V6.34839H2.10329H0.597778C0.287819 6.34839 0 6.63226 0 7.04516V8.90323C0 9.26452 0.243539 9.6 0.597778 9.6H2.05902H2.50181V10.1161V15.3032C2.50181 15.6645 2.74535 16 3.09959 16H5.18075C5.31359 16 5.42429 15.9226 5.51285 15.8194C5.60141 15.7161 5.66783 15.5355 5.66783 15.3806V10.1419V9.62581H6.13276H7.12906C7.41688 9.62581 7.63828 9.41935 7.68256 9.10968V9.08387V9.05806L7.99252 7.27742C8.01466 7.09677 7.99252 6.89032 7.85968 6.68387C7.8154 6.55484 7.61614 6.42581 7.43902 6.4Z" />
              </svg>
            </a>
            <a href="javascript:void(0)"
              class="mr-3 flex h-8 w-8 items-center justify-center rounded-full border border-[#E5E5E5] text-white hover:border-primary hover:bg-primary hover:text-white sm:mr-4 lg:mr-3 xl:mr-4">
              <svg width="16" height="12" viewBox="0 0 16 12" class="fill-current">
                <path
                  d="M14.2194 2.06654L15.2 0.939335C15.4839 0.634051 15.5613 0.399217 15.5871 0.2818C14.8129 0.704501 14.0903 0.845401 13.6258 0.845401H13.4452L13.3419 0.751468C12.7226 0.258317 11.9484 0 11.1226 0C9.31613 0 7.89677 1.36204 7.89677 2.93542C7.89677 3.02935 7.89677 3.17025 7.92258 3.26419L8 3.73386L7.45806 3.71037C4.15484 3.61644 1.44516 1.03327 1.00645 0.587084C0.283871 1.76125 0.696774 2.88845 1.13548 3.59296L2.0129 4.90802L0.619355 4.20352C0.645161 5.18982 1.05806 5.96477 1.85806 6.52838L2.55484 6.99804L1.85806 7.25636C2.29677 8.45401 3.27742 8.94716 4 9.13503L4.95484 9.36986L4.05161 9.93346C2.60645 10.8728 0.8 10.8024 0 10.7319C1.62581 11.7652 3.56129 12 4.90323 12C5.90968 12 6.65806 11.9061 6.83871 11.8356C14.0645 10.2857 14.4 4.41487 14.4 3.2407V3.07632L14.5548 2.98239C15.4323 2.23092 15.7935 1.8317 16 1.59687C15.9226 1.62035 15.8194 1.66732 15.7161 1.6908L14.2194 2.06654Z" />
              </svg>
            </a>
            <a href="javascript:void(0)"
              class="mr-3 flex h-8 w-8 items-center justify-center rounded-full border border-[#E5E5E5] text-white hover:border-primary hover:bg-primary hover:text-white sm:mr-4 lg:mr-3 xl:mr-4">
              <svg width="16" height="12" viewBox="0 0 16 12" class="fill-current">
                <path
                  d="M15.6645 1.88018C15.4839 1.13364 14.9419 0.552995 14.2452 0.359447C13.0065 6.59222e-08 8 0 8 0C8 0 2.99355 6.59222e-08 1.75484 0.359447C1.05806 0.552995 0.516129 1.13364 0.335484 1.88018C0 3.23502 0 6 0 6C0 6 0 8.79263 0.335484 10.1198C0.516129 10.8664 1.05806 11.447 1.75484 11.6406C2.99355 12 8 12 8 12C8 12 13.0065 12 14.2452 11.6406C14.9419 11.447 15.4839 10.8664 15.6645 10.1198C16 8.79263 16 6 16 6C16 6 16 3.23502 15.6645 1.88018ZM6.4 8.57143V3.42857L10.5548 6L6.4 8.57143Z" />
              </svg>
            </a>
            <a href="javascript:void(0)"
              class=" flex h-8 w-8 items-center justify-center rounded-full border border-[#E5E5E5] text-white hover:border-primary hover:bg-primary hover:text-white ">
              <svg width="14" height="14" viewBox="0 0 14 14" class="fill-current">
                <path
                  d="M13.0214 0H1.02084C0.453707 0 0 0.451613 0 1.01613V12.9839C0 13.5258 0.453707 14 1.02084 14H12.976C13.5432 14 13.9969 13.5484 13.9969 12.9839V0.993548C14.0422 0.451613 13.5885 0 13.0214 0ZM4.15142 11.9H2.08705V5.23871H4.15142V11.9ZM3.10789 4.3129C2.42733 4.3129 1.90557 3.77097 1.90557 3.11613C1.90557 2.46129 2.45002 1.91935 3.10789 1.91935C3.76577 1.91935 4.31022 2.46129 4.31022 3.11613C4.31022 3.77097 3.81114 4.3129 3.10789 4.3129ZM11.9779 11.9H9.9135V8.67097C9.9135 7.90323 9.89082 6.8871 8.82461 6.8871C7.73571 6.8871 7.57691 7.74516 7.57691 8.60323V11.9H5.51254V5.23871H7.53154V6.16452H7.55423C7.84914 5.62258 8.50701 5.08065 9.52785 5.08065C11.6376 5.08065 12.0232 6.43548 12.0232 8.2871V11.9H11.9779Z" />
              </svg>
            </a>
          </div>
        </div>
      </div>
    </div>

    <div>

      <span class="absolute top-10 right-10 z-[-1]">
        <svg width="134" height="106" viewBox="0 0 134 106" fill="none" xmlns="http://www.w3.org/2000/svg">
          <circle cx="60.3333" cy="74.6668" r="1.66667" transform="rotate(-90 60.3333 74.6668)"fill="#969A9B" />
          <circle cx="60.3333" cy="30.9998" r="1.66667" transform="rotate(-90 60.3333 30.9998)"fill="#969A9B" />
          <circle cx="88.6667" cy="74.6668" r="1.66667" transform="rotate(-90 88.6667 74.6668)"fill="#969A9B" />
          <circle cx="88.6667" cy="30.9998" r="1.66667" transform="rotate(-90 88.6667 30.9998)"fill="#969A9B" />
          <circle cx="117.667" cy="74.6668" r="1.66667" transform="rotate(-90 117.667 74.6668)"fill="#969A9B" />
          <circle cx="117.667" cy="30.9998" r="1.66667" transform="rotate(-90 117.667 30.9998)"fill="#969A9B" />
          <circle cx="74.6667" cy="74.6668" r="1.66667" transform="rotate(-90 74.6667 74.6668)"fill="#969A9B" />
          <circle cx="74.6667" cy="30.9998" r="1.66667" transform="rotate(-90 74.6667 30.9998)"fill="#969A9B" />
          <circle cx="103" cy="74.6668" r="1.66667" transform="rotate(-90 103 74.6668)" fill="#969A9B" />
          <circle cx="103" cy="30.9998" r="1.66667" transform="rotate(-90 103 30.9998)" fill="#969A9B" />
          <circle cx="132" cy="74.6668" r="1.66667" transform="rotate(-90 132 74.6668)" fill="#969A9B" />
          <circle cx="132" cy="30.9998" r="1.66667" transform="rotate(-90 132 30.9998)" fill="#969A9B" />
          <circle cx="60.3333" cy="60.0003" r="1.66667" transform="rotate(-90 60.3333 60.0003)"fill="#969A9B" />
          <circle cx="60.3333" cy="16.3333" r="1.66667" transform="rotate(-90 60.3333 16.3333)"fill="#969A9B" />
          <circle cx="88.6667" cy="60.0003" r="1.66667" transform="rotate(-90 88.6667 60.0003)"fill="#969A9B" />
          <circle cx="88.6667" cy="16.3333" r="1.66667" transform="rotate(-90 88.6667 16.3333)"fill="#969A9B" />
          <circle cx="117.667" cy="60.0003" r="1.66667" transform="rotate(-90 117.667 60.0003)"fill="#969A9B" />
          <circle cx="117.667" cy="16.3333" r="1.66667" transform="rotate(-90 117.667 16.3333)"fill="#969A9B" />
          <circle cx="74.6667" cy="60.0003" r="1.66667" transform="rotate(-90 74.6667 60.0003)"fill="#969A9B" />
          <circle cx="74.6667" cy="16.3333" r="1.66667" transform="rotate(-90 74.6667 16.3333)"fill="#969A9B" />
          <circle cx="103" cy="60.0003" r="1.66667" transform="rotate(-90 103 60.0003)" fill="#969A9B" />
          <circle cx="103" cy="16.3333" r="1.66667" transform="rotate(-90 103 16.3333)" fill="#969A9B" />
          <circle cx="132" cy="60.0003" r="1.66667" transform="rotate(-90 132 60.0003)" fill="#969A9B" />
          <circle cx="132" cy="16.3333" r="1.66667" transform="rotate(-90 132 16.3333)" fill="#969A9B" />
          <circle cx="60.3333" cy="45.3338" r="1.66667" transform="rotate(-90 60.3333 45.3338)"fill="#969A9B" />
          <circle cx="60.3333" cy="1.66683" r="1.66667" transform="rotate(-90 60.3333 1.66683)"fill="#969A9B" />
          <circle cx="88.6667" cy="45.3338" r="1.66667" transform="rotate(-90 88.6667 45.3338)"fill="#969A9B" />
          <circle cx="88.6667" cy="1.66683" r="1.66667" transform="rotate(-90 88.6667 1.66683)"fill="#969A9B" />
          <circle cx="117.667" cy="45.3338" r="1.66667" transform="rotate(-90 117.667 45.3338)"fill="#969A9B" />
          <circle cx="117.667" cy="1.66683" r="1.66667" transform="rotate(-90 117.667 1.66683)"fill="#969A9B" />
          <circle cx="74.6667" cy="45.3338" r="1.66667" transform="rotate(-90 74.6667 45.3338)"fill="#969A9B" />
          <circle cx="74.6667" cy="1.66683" r="1.66667" transform="rotate(-90 74.6667 1.66683)"fill="#969A9B" />
          <circle cx="103" cy="45.3338" r="1.66667" transform="rotate(-90 103 45.3338)" fill="#969A9B" />
          <circle cx="103" cy="1.66683" r="1.66667" transform="rotate(-90 103 1.66683)" fill="#969A9B" />
          <circle cx="132" cy="45.3338" r="1.66667" transform="rotate(-90 132 45.3338)" fill="#969A9B" />
          <circle cx="132" cy="1.66683" r="1.66667" transform="rotate(-90 132 1.66683)" fill="#969A9B" />
        </svg>
      </span>
    </div>
  </footer>
  <!-- ====== Footer Section End -->

</body>

</html>