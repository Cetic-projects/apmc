<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>ACS</title>
  @vite('resources/css/app.css')
  @vite('resources/js/app.js')

  <link rel="shortcut icon" href="{{ Vite::asset('resources/images/logo/logo.jpg') }}" type="image/x-icon" />
  <link rel="stylesheet" href="https://unpkg.com/swiper@6.8.4/swiper-bundle.min.css" />
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script  src="https://unpkg.com/swiper@6.8.4/swiper-bundle.min.js"></script>


  <body>

  <!-- ====== Navbar Section Startt -->
  <header x-data="
          {
            navbarOpen: false
          }
        " class="sticky left-0 top-0 z-50 w-full bg-white">
    <div class="container mx-auto">
      <div class="relative flex items-center">

        <div class="flex w-full items-center justify-between mx-4">
          <div class=" w-28 xl:w-16 max-w-full">
            <a  href="index.html" class="block w-full py-2">
              <img src="{{ Vite::asset('resources/images/logo/acs.png') }}" alt="logo" class="w-full" />
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
                  <a href="index.html"
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
                      <a href="aboutus.html"
                        class="block py-2 px-2 text-sm xl:text-base font-semibold text-black hover:text-primary">
                        Presentation
                      </a>
                      <a href="mdp.html"
                        class="block py-2 px-2 text-sm xl:text-base font-semibold text-black hover:text-primary">
                        Mot du PDG
                      </a>

                    </div>
                  </div>

                </li>
                <li>
                  <a href="javascript:void(0)"
                    class="flex  text-sm xl:text-base font-semibold text-dark hover:text-primary py-2 px-3 lg:px-2 xl:px-3 lg:inline-flex">
                    Vision & mission
                  </a>
                </li>
                <li>
                  <a href="filiere.html"
                    class="flex  text-sm xl:text-base font-semibold text-dark hover:text-primary py-2 px-3 lg:px-2 xl:px-3 lg:inline-flex">
                    Filieres
                  </a>
                </li>
                <li>
                  <a href="filiales.html"
                    class="flex  text-sm xl:text-base font-semibold text-dark hover:text-primary py-2 px-3 lg:px-2 xl:px-3 lg:inline-flex">
                    Filiales
                  </a>
                </li>
                <li>
                  <a href="mediatheque.html"
                    class="flex  text-sm xl:text-base font-semibold text-dark hover:text-primary py-2 px-3 lg:px-2 xl:px-3 lg:inline-flex">
                    Mediatheque
                  </a>
                </li>
                <li>
                  <a href="actualite.html"
                    class="flex  text-sm xl:text-base font-semibold text-dark hover:text-primary py-2 px-3 lg:px-2 xl:px-3 lg:inline-flex">
                    Actualites
                  </a>
                </li>
                <li>
                  <a href="contact.html"
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
                class="relative w-10 h-10 cursor-pointer font-bold text-white hover:text-white rounded-full bg-white hover:bg-primary text-center z-10">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                  stroke="currentColor" class="w-8 h-6 absolute inset-0 my-auto mx-auto">
                  <path stroke-linecap="round" stroke-linejoin="round"
                    d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 002.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 01-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 00-1.091-.852H4.5A2.25 2.25 0 002.25 4.5v2.25z"
                    style="color: black;" />
                </svg>
              </label>
              <div class="text-xs"> <span class="text-body-color"> Contactez nous</span></br>+213(0)770 14 10 47</div>
            </a>
          </div>
        </div>
      </div>
    </div>
  </header>
  <!-- ====== Navbar  Section  End -->


  <!-- ====== slide Start 2-->
    <section class=" flex flex-col justify-center items-center  relative z-10 overflow-hidden">
    <div class=" flex flex-wrap content-center items-center z-20 ">
      <img src="{{ Vite::asset('resources/images/slider/cnsbanner2.jpg') }}"
        class="block bg-no-repeat bg-cover bg-center rounded-2xl object-cover" alt="Wild Landscape"
        style="height: 85vh;" />
    </div>
    <div class="container absolute w-full z-40 h-screen">
    <div class="z-30 absolute right-0 inset-y-0  justify-center flex flex-col  " >
      <div  id="pattern" class="w-32 sm:w-40 lg:max-w-xl lg:w-full md:w-32 xl:w-5/6 bg-contain bg-no-repeat md:ml-40 xl:mr-16">
        <div class="w-full flex gap-1 justify-center  ">
        </div>
        <div class="w-full flex gap-1 justify-center  " style="margin-bottom:-1.2rem; margin-left:-0.8rem;">
          <div class=" object-cover  object-center ">
            <img class=" mask mask-hexagon h-24 w-30 p-4 bg-opacity-100 bg-white" style="height:7rem; padding:1.5rem;" alt="hero" src="{{ Vite::asset('resources/images/logo/filiales/endimed.png') }}">
          </div>
          <div class=" object-cover  object-center">
          <img class=" mask mask-hexagon h-24 w-30 p-4 bg-opacity-100 bg-white" style="height:7rem; padding:1.5rem;" alt="hero" src="{{ Vite::asset('resources/images/logo/filiales/gipec.png') }}">
          </div>
          <div class=" ">
          <img class="object-contain object-center rounded-xl mask mask-hexagon bg-opacity-100 bg-white" style="height:7rem; padding:1.4rem; margin-left:-0.4rem;" alt="hero" src="{{ Vite::asset('resources/images/logo/filiales/diprochim.png') }}">          
          </div>
        </div>
        <div class="w-full h- flex gap-1 justify-center items-center " style="margin-left:-1.2rem;">
            <div class=" object-cover  object-center ">
            <img class=" mask mask-hexagon h-1/6 w-30 bg-opacity-100 bg-white" style="height:7rem; padding:1.5rem;" alt="hero" src="{{ Vite::asset('resources/images/logo/filiales/enad.png') }}">
            </div>  
            <div class=" object-cover  object-center ">
            <img class=" mask mask-hexagon h-1/6 w-30 p-4 bg-opacity-100 bg-white" style="height:7rem; padding:1.5rem;" alt="hero" src="{{ Vite::asset('resources/images/logo/filiales/enava.png') }}">
            </div>   
            <div class=" object-cover  object-center ">
            <img class=" mask mask-hexagon h-1/6 w-30 p-4 bg-opacity-100 bg-white" style="height:7rem; padding:1.5rem;" alt="hero" src="{{ Vite::asset('resources/images/logo/filiales/enap.png') }}">
            </div>      
            <div class=" object-cover  object-center ">
            <img class=" mask mask-hexagon h-1/6 w-30 p-4 bg-opacity-100 bg-white" style="height:7rem; padding:1.5rem;" alt="hero" src="{{ Vite::asset('resources/images/logo/filiales/enpc.png') }}">
            </div>
        </div>
          <div class="w-full flex gap-1 justify-center " style="margin-top:-1.2rem;">
            <div class=" object-cover  object-center  ">
            <img class=" mask mask-hexagon h-24 w-30 p-4 bg-opacity-100 bg-white" style="height:7rem; padding:1.5rem;" alt="hero" src="{{ Vite::asset('resources/images/logo/filiales/tonic.png') }}">
            </div>
            <div class=" object-cover  object-center ">
            <img class=" mask mask-hexagon h-24 w-30 p-4 bg-opacity-100 bg-white" style="height:7rem; padding:1.5rem;" alt="hero" src="{{ Vite::asset('resources/images/logo/filiales/socothyd.png') }}">
            </div>
            <div class=" object-cover  object-center ">
            <img class=" mask mask-hexagon h-24 w-30 p-8 bg-opacity-100 bg-white" style="height:7rem; padding:2.2rem; margin-left:-1.2rem;" alt="hero" src="{{ Vite::asset('resources/images/logo/filiales/sante.png') }}">
            </div>
          </div>
          <div class="w-full flex gap-1 justify-center ">
          </div>
        </div>
    </div>
      <div class="z-30 absolute top-1/3 bg-white bg-opacity-0 p-12 " data-aos="fade-up" >
        <div class="">

          <h6 class="text-4xl font-extrabold text-white  sm:text-[42px] lg:text-[40px] xl:text-[42px]"
             data-aos="fade-up" data-aos-duration="500">
            Algeria Chemical Specialites</h6>
          <h1 class="mb-3 text-4xl font-bold leading-snug text-white sm:text-[42px] lg:text-[40px] xl:text-[42px]" data-aos="fade-up" data-aos-duration="1000">
            Votre pont vers les <br> liens locaux en chimie
          </h1>
          <p class="mb-8 max-w-[480px] font-medium text-base text-white" data-aos="fade-up" data-aos-duration="1500">
            There are many variations of passages of Lorem Ipsum <br> available, but the majority have suffered.
          </p>
          <ul class="flex flex-wrap items-center">
            <li>
              <a href="#_" class="relative px-5 py-2 font-medium text-white group" >
                <span
                  class="absolute inset-0 w-full h-full transition-all duration-300 ease-out transform translate-x-0 -skew-x-12 bg-green-500 group-hover:bg-green-700 group-hover:skew-x-12"></span>
                <span
                  class="absolute inset-0 w-full h-full transition-all duration-300 ease-out transform skew-x-12 bg-green-700 group-hover:bg-green-500 group-hover:-skew-x-12"></span>
                <span
                  class="absolute bottom-0 left-0 hidden w-10 h-20 transition-all duration-100 ease-out transform -translate-x-8 translate-y-10 bg-green-600 -rotate-12"></span>
                <span
                  class="absolute bottom-0 right-0 hidden w-10 h-20 transition-all duration-100 ease-out transform translate-x-10 translate-y-8 bg-green-400 -rotate-12" ></span>
                <span class="relative" >Voir plus</span>
              </a>
            </li>
          </ul>
          <!--<div class="clients pt-16">
            <h6 class="mb-2 flex items-center text-xs font-normal text-body-color">
              Some Of Our Clients
              <span class="ml-2 inline-block h-[1px] w-8 bg-body-color"></span>
            </h6>
            <div class="flex items-center">
              <div class="mr-4 w-full py-3">
                <img src="{{ Vite::asset('resources/images/brands/ayroui.svg') }}" alt="ayroui" />
              </div>
              <div class="mr-4 w-full py-3">
                <img src="{{ Vite::asset('resources/images/brands/graygrids.svg') }}" alt="graygrids" />
              </div>
              <div class="mr-4 w-full py-3">
                <img src="{{ Vite::asset('resources/images/brands/uideck.svg') }}" alt="uideck" />
              </div>
            </div> 
          </div>-->
        </div>
      </div>
    </div>
  </section>
  <!--slide END 2-->

  <!-- ====== About Section Start -->
  <section class="overflow-hidden pt-20 pb-20 lg:pt-[120px] lg:pb-[90px]">
    <div class="container mx-auto">
      <div class="-mx-4 flex flex-wrap items-center justify-between">
        <div class="w-full px-16 lg:w-6/12">
          <div class="-mx-3 flex items-center sm:-mx-4">
            <div class=" relative w-full xl:w-2/3" data-aos="fade-right">
              <img src="{{ Vite::asset('resources/images/about/5.jpg') }}" alt="" class=" w-full rounded-2xl border-4 cover"
                style="height: 28rem;" />

            </div>
            <div class="w-full px-3 sm:px-4 xl:w-1/3">
              <div class="absolute z-10 my-4" data-aos="fade-left">
                <img src="{{ Vite::asset('resources/images/about/4.jpeg') }}" alt="" class="relative w-full rounded-2xl border-4 z-20"
                  style="height: 13rem; margin: -3rem;" />
                <span class="absolute -right-4 -bottom-20 z-[-1]">
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
        <div class="w-full px-12 lg:w-6/12  pt-20">
          <div class="mt-10 lg:mt-0" data-aos="fade-up">
            <span class="mb-2 block text-lg font-bold text-primary" style="color: #49A494 ;">
              Mot du PDG
            </span>
            <h2 class="mb-8 text-3xl font-semibold text-dark sm:text-4xl" style="color: #1E4293;">
              ACS HOLDING ,Une strategique <br> efficiente pour une <br> modernisation du secteur
            </h2>
            <p class="mb-4 text-xl font-semibold  text-body-color"
              style="line-height: 2.25rem; color: rgb(75, 74, 74);">
              le Holding A.C.S Spa Ex CHIMIDUS Spa, est issue de la restructuration de l'ex Société de Gestion des
              Participation de l'Etat Chimie Pharmacie (SGP GEPHAC), dans le cadre de la réorganisation du Secteur
              Public Marchand du Ministère de l'Industrie et des Mines .
            </p>
            <p class="mb-12 text-xl font-semibold " style="line-height: 2.25rem; color: rgb(75, 74, 74);">
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
  " class="pt-10 pb-40 lg:pt-[120px] lg:pb-[90px]e="background-color: rgba(161, 163, 167, 0.192);">
    <div class="container mx-auto">
      <div class="-mx-4 flex flex-wrap pb-10">
        <div class="w-full px-4">
          <div class="mx-auto mb-[60px] max-w-[510px] text-center" data-aos="fade-up">
            <h2 class="uppercase mb-4 text-3xl font-bold text-dark sm:text-4xl md:text-[40px]" style="color: #1E4293;">
              nos Filiales
            </h2>

          </div>
        </div>
      </div>

      <div x-data="{swiper: null}" x-init="swiper = new Swiper($refs.container, {
          loop: true,
          slidesPerView: 1,
          spaceBetween: 0,
      
          breakpoints: {
            640: {
              slidesPerView: 1,
              spaceBetween: 0,
            },
            768: {
              slidesPerView: 2,
              spaceBetween: 0,
            },
            1024: {
              slidesPerView: 4,
              spaceBetween: 0,
            },
          },
        })" class="relative mx-auto flex flex-row">
        <div class="absolute inset-y-0 left-0 z-10 flex items-center">
          <button @click="swiper.slidePrev()"
            class="bg-white -ml-2 lg:-ml-4 flex justify-center items-center w-10 h-10 rounded-full shadow focus:outline-none">
            <svg viewBox="0 0 20 20" fill="currentColor" class="chevron-left w-6 h-6">
              <path fill-rule="evenodd"
                d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z"
                clip-rule="evenodd"></path>
            </svg>
          </button>
        </div>

        <div class="swiper-container" x-ref="container">
          <div class="swiper-wrapper flex ">
            <!-- Slides -->
            <div class="flex flex-col swiper-slide p-4 items-center" data-aos="zoom-out" data-aos-duration="1000">
              <div class="flex flex-col rounded shadow overflow-hidden shadow-gray-50
                <div class="flex-shrink-0 ">
                  <img class="scale-50 hover:scale-75 ease-in duration-500 relative h-64 w-full object-cover rounded-md"
                    src="{{ Vite::asset('resources/images/filiales/gipec-image.jpeg') }}" alt="">
                  <div class="absolute top-4 left-4 bottom-0 right-4 h-64 bg-black bg-opacity-50 rounded-md"></div>
                </div>
              </div>
              <div class="absolute flex flex-wrap rounded-md h-24 w-24 content-center justify-center top-1/3 p-4"
                style="background-color: white;">
                <img class="h-18 w-20 object-cover" src="{{ Vite::asset('resources/images/logo/filiales/gipec.png') }}" alt="">
              </div>
              <div
                class="absolute flex flex-wrap rounded-md h-16 w-60 content-center justify-center  shadow-xl bottom-2"
                style="background-color: white;">
                <a href="filiales/gipec.html"
                  class="uppercase text-sm font-bold text-body-color transition hover:border-primary hover:bg-primary hover:text-white">
                  gipec
                </a>
              </div>
            </div>

            <div class="flex flex-col swiper-slide p-4 items-center" data-aos="zoom-out" data-aos-duration="1000">
              <div class="flex flex-col rounded overflow-hidden shadow-xl shadow-gray-50">
                <div class="flex-shrink-0">
                  <img class="relative h-64 w-96 object-cover rounded-md"
                    src="{{ Vite::asset('resources/images/filiales/dipro2.jpeg') }}" alt="">
                  <div class="absolute top-4 left-4 bottom-0 right-4 h-64 bg-black bg-opacity-50 rounded-md"></div>
                </div>
              </div>
              <div class="absolute flex flex-wrap rounded-md h-24 w-24 content-center justify-center top-1/3 p-4"
                style="background-color: white;">
                <img class="h-18 w-20 object-cover" src="{{ Vite::asset('resources/images/logo/filiales/diprochim.png') }}" alt="">
              </div>
              <div
                class="absolute flex flex-wrap rounded-md h-16 w-60 content-center justify-center  shadow-xl bottom-2"
                style="background-color: white;">
                <a href="filiales/diprochim.html"
                  class="uppercase text-sm font-bold text-body-color transition hover:border-primary hover:bg-primary hover:text-white">
                  diprochim
                </a>
              </div>
            </div>

            <div class="flex flex-col swiper-slide p-4 items-center" data-aos="zoom-out" data-aos-duration="1000">
              <div class="flex flex-col rounded shadow overflow-hidden shadow-gray-50">
                <div class="flex-shrink-0">
                  <img class="relative h-64 w-full object-cover rounded-md"
                    src="{{ Vite::asset('resources/images/filiales/socothyde-image.jpg') }}" alt="">
                  <div class="absolute top-4 left-4 bottom-0 right-4 h-64 bg-black bg-opacity-30 rounded-md"></div>
                </div>
              </div>
              <div class="absolute flex flex-wrap rounded-md h-24 w-24 content-center justify-center top-1/3 p-4"
                style="background-color: white;">
                <img class="h-20 w-18 object-cover" src="{{ Vite::asset('resources/images/logo/filiales/socothyd.png') }}" alt="">
              </div>
              <div
                class="absolute flex flex-wrap rounded-md h-16 w-60 content-center justify-center  shadow-xl bottom-2"
                style="background-color: white;">
                <a href="filiales/socothyd.html"
                  class="uppercase text-sm font-bold text-body-color transition hover:border-primary hover:bg-primary hover:text-white">
                  socothyd
                </a>
              </div>
            </div>

            <div class="flex flex-col swiper-slide p-4 items-center" data-aos="zoom-out" data-aos-duration="1000">
              <div class="flex flex-col rounded shadow overflow-hidden shadow-gray-50">
                <div class="flex-shrink-0">
                  <img class="relative h-64 w-full object-cover rounded-md"
                    src="{{ Vite::asset('resources/images/filiales/enap.jpeg') }}" alt="">
                  <div class="absolute top-4 left-4 bottom-0 right-4 h-64 bg-black bg-opacity-50 rounded-md"></div>
                </div>
              </div>
              <div class="absolute flex flex-wrap rounded-md h-24 w-24 content-center justify-center top-1/3 p-4"
                style="background-color: white;">
                <img class="h-20 w-18 object-cover" src="{{ Vite::asset('resources/images/logo/filiales/enap.png') }}" alt="">
              </div>
              <div
                class="absolute flex flex-wrap rounded-md h-16 w-60 content-center justify-center  shadow-xl bottom-2"
                style="background-color: white;">
                <a href="filiales/enap.html"
                  class="uppercase text-sm font-bold text-body-color transition hover:border-primary hover:bg-primary hover:text-white">
                  enap
                </a>
              </div>
            </div>

            <div class="flex flex-col swiper-slide p-4 items-center">
              <div class="flex flex-col rounded shadow overflow-hidden shadow-gray-50">
                <div class="flex-shrink-0">
                  <img class="relative h-64 w-full object-cover rounded-md"
                    src="{{ Vite::asset('resources/images/filiales/enava.jpg') }}" alt="">
                  <div class="absolute top-4 left-4 bottom-0 right-4 h-64 bg-black bg-opacity-50 rounded-md"></div>
                </div>
              </div>
              <div class="absolute flex flex-wrap rounded-md h-24 w-24 content-center justify-center top-1/3 p-4"
                style="background-color: white;">
                <img class="h-18 w-18 object-cover" src="{{ Vite::asset('resources/images/logo/filiales/enava.png') }}" alt="">
              </div>
              <div
                class="absolute flex flex-wrap rounded-md h-16 w-60 content-center justify-center  shadow-xl bottom-2"
                style="background-color: white;">
                <a href="filiales/enava.html"
                  class="uppercase text-sm font-bold text-body-color transition hover:border-primary hover:bg-primary hover:text-white">
                  enava
                </a>
              </div>
            </div>

            <div class="flex flex-col swiper-slide p-4 items-center" data-aos="zoom-out" data-aos-duration="1000">
              <div class="flex flex-col rounded overflow-hidden shadow-xl shadow-gray-50">
                <div class="flex-shrink-0">
                  <img class="relative h-64 w-full object-cover rounded-md"
                    src="{{ Vite::asset('resources/images/filiales/enad.jpg') }}" alt="">
                  <div class="absolute top-4 left-4 bottom-0 right-4 h-64 bg-black bg-opacity-50 rounded-md"></div>
                </div>
              </div>
              <div class="absolute flex flex-wrap rounded-md h-24 w-24 content-center justify-center top-1/3 p-4"
                style="background-color: white;">
                <img class="h-20 w-18 object-cover" src="{{ Vite::asset('resources/images/logo/filiales/enad.png') }}" alt="">
              </div>
              <div
                class="absolute flex flex-wrap rounded-md h-16 w-60 content-center justify-center  shadow-xl bottom-2"
                style="background-color: white;">
                <a href="filiales/enad.html"
                  class="uppercase text-sm font-bold text-body-color transition hover:border-primary hover:bg-primary hover:text-white">
                  enad
                </a>
              </div>
            </div>


            <div class="flex flex-col swiper-slide p-4 items-center">
              <div class="flex flex-col rounded shadow overflow-hidden shadow-gray-50">
                <div class="flex-shrink-0">
                  <img class="relative h-64 w-full object-cover rounded-md"
                    src="{{ Vite::asset('resources/images/filiales/endimed.jpg') }}" alt="">
                  <div class="absolute top-4 left-4 bottom-0 right-4 h-64 bg-black bg-opacity-50 rounded-md"></div>
                </div>
              </div>
              <div class="absolute flex flex-wrap rounded-md h-24 w-24 content-center justify-center top-1/3 p-4"
                style="background-color: white;">
                <img class="h-18 w-16 object-cover" src="{{ Vite::asset('resources/images/logo/filiales/endimed.png') }}" alt="">
              </div>
              <div
                class="absolute flex flex-wrap rounded-md h-16 w-60 content-center justify-center  shadow-xl bottom-2"
                style="background-color: white;">
                <a href="filiales/endimed.html"
                  class="uppercase text-sm font-bold text-body-color transition hover:border-primary hover:bg-primary hover:text-white">
                  n.dimed
                </a>
              </div>
            </div>

            <div class="flex flex-col swiper-slide p-4 items-center">
              <div class="flex flex-col rounded overflow-hidden shadow-xl shadow-gray-50
                <div class="flex-shrink-0">
                  <img class="relative h-64 w-full object-cover rounded-md"
                    src="{{ Vite::asset('resources/images/filiales/sante.jpg') }}" alt="">
                  <div class="absolute top-4 left-4 bottom-0 right-4 h-64 bg-black bg-opacity-50 rounded-md"></div>
                </div>
              </div>
              <div class="absolute flex flex-wrap rounded-md h-24 w-26 content-center justify-center top-1/3 p-4"
                style="background-color: white;">
                <img class="h-10 w-26 object-cover" src="{{ Vite::asset('resources/images/logo/filiales/sante.png') }}" alt="">
              </div>
              <div
                class="absolute flex flex-wrap rounded-md h-16 w-60 content-center justify-center  shadow-xl bottom-2"
                style="background-color: white;">
                <a href="filiales/3rsante.html"
                  class="uppercase text-sm font-bold text-body-color transition hover:border-primary hover:bg-primary hover:text-white">
                  3r sante
                </a>
              </div>
            </div>

            <div class="flex flex-col swiper-slide p-4 items-center">
              <div class="flex flex-col rounded overflow-hidden shadow-xl shadow-gray-50">
                <div class="flex-shrink-0">
                  <img class="relative h-64 w-full object-cover rounded-md"
                    src="{{ Vite::asset('resources/images/filiales/Papier-Sac-craft.jpeg') }}" alt="">
                  <div class="absolute top-4 left-4 bottom-0 right-4 h-64 bg-black bg-opacity-50 rounded-md"></div>
                </div>
              </div>
              <div class="absolute flex flex-wrap rounded-md h-24 w-24 content-center justify-center top-1/3 p-4"
                style="background-color: white;">
                <img class="h-18 w-18 object-cover" src="{{ Vite::asset('resources/images/logo/filiales/tonic.png') }}" alt="">
              </div>
              <div
                class="absolute flex flex-wrap rounded-md h-16 w-60 content-center justify-center  shadow-xl bottom-2"
                style="background-color: white;">
                <a href="filiales/tonic.html"
                  class="uppercase text-sm font-bold text-body-color transition hover:border-primary hover:bg-primary hover:text-white">
                  tonic
                </a>
              </div>
            </div>


          </div>
        </div>

        <div class="absolute inset-y-0 right-0 z-10 flex items-center">
          <button @click="swiper.slideNext()"
            class="bg-white -mr-2 lg:-mr-4 flex justify-center items-center w-10 h-10 rounded-full shadow focus:outline-none">
            <svg viewBox="0 0 20 20" fill="currentColor" class="chevron-right w-6 h-6">
              <path fill-rule="evenodd"
                d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                clip-rule="evenodd"></path>
            </svg>
          </button>
        </div>
      </div>
    </div>
  </section>
  <!-- ====== Portfolio Section End -->

  <!-- ====== presentation Section Start -->
  <section class=" pb-10 lg:pt-[120px] lg:pb-20">

    <div class="flex flex-wrap justify-center">
      <div class="w-full relative ">
        <img src="{{ Vite::asset('resources/images/about/meet.jpeg') }}" style="height: 90vh;"
          class="block  bg-no-repeat bg-cover w-full bg-center object-cover " alt="Wild Landscape" />
        <div class="absolute top-10 flex flex-col  items-start" style="left: 45%;">
          <div class="w-1/2">
            <h1 class="text-white font-bold text-2xl text-left py-16" data-aos="zoom-out" data-aos-duration="1000">A propos de nous</h1>
            <p class="text-white text-3xl font-semibold text-left pb-16" data-aos="zoom-out" data-aos-duration="1000">ACS HOLDING ,Une strategique<br>
              efficiente, et Une large Activite <br>
              dans plusieurs Domaines !</p>
          </div>
          <div class=" flex flex-row w-1/2" data-aos="zoom-out" data-aos-duration="1000">
            <div class="pr-24">
              <a href="javascript:void(0)" @click="videoOpen = true"
              class="absolute z-20 flex h-20 w-20 items-center justify-center rounded-full  text-primary md:h-[100px] md:w-[100px]" style="background-color: #17af95;">
              <span
                class="absolute top-0 right-0 z-[-1] h-full w-full animate-ping rounded-full bg-white bg-opacity-20 delay-300 duration-1000" style="background-color: #17af95;"> </span>
              <svg width="23" height="27" viewBox="0 0 23 27" class="fill-current" style="color: white;">
                <path
                  d="M22.5 12.634C23.1667 13.0189 23.1667 13.9811 22.5 14.366L2.25 26.0574C1.58333 26.4423 0.750001 25.9611 0.750001 25.1913L0.750002 1.80866C0.750002 1.03886 1.58334 0.557731 2.25 0.942631L22.5 12.634Z" />
              </svg>
              </a>
              <!-- <button type="button"
                class=" text-white border-8 border-green-50 bg-green-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-full text-sm p-5 text-center inline-flex items-center mr-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 bg-opacity-70"
                style="border-color:#EDF0EF0E; border-width: 1rem;">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="3"
                  stroke="currentColor" class="w-10 h-10">
                  <path stroke-linecap="round" stroke-linejoin="round"
                    d="M5.25 5.653c0-.856.917-1.398 1.667-.986l11.54 6.348a1.125 1.125 0 010 1.971l-11.54 6.347a1.125 1.125 0 01-1.667-.985V5.653z" />
                </svg>
                <span class="sr-only">Icon description</span>
              </button> -->
            </div>
            <div class="flex w-full flex-wrap flex-col justify-between ">
              <div class="flex flex-row">
                <div class="w-full flex space-x-4  p-4 text-sm">
                  <span>
                    <img class="h-14 w-14 object-cover" style="color: #136d69;" src="{{ Vite::asset('resources/images/about/icon1.png') }}"
                      alt="">
                    <!-- <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1" stroke="currentColor" class="w-12 h-12" style="color:#49A494;">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 21h19.5m-18-18v18m10.5-18v18m6-13.5V21M6.75 6.75h.75m-.75 3h.75m-.75 3h.75m3-6h.75m-.75 3h.75m-.75 3h.75M6.75 21v-3.375c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21M3 3h12m-.75 4.5H21m-3.75 3.75h.008v.008h-.008v-.008zm0 3h.008v.008h-.008v-.008zm0 3h.008v.008h-.008v-.008z" />
                      </svg> -->


                  </span>
                  <div class="flex flex-wrap flex-col items-start">
                    <span class="font-bold text-4xl text-white">06</span>
                    <span class=" text-white text-base">filières spécialisées</span>
                  </div>
                </div>
                <div class="w-full flex space-x-4  p-4 text-sm">
                  <span>
                    <!-- <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8" style="color:#49A494;">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 21h19.5m-18-18v18m10.5-18v18m6-13.5V21M6.75 6.75h.75m-.75 3h.75m-.75 3h.75m3-6h.75m-.75 3h.75m-.75 3h.75M6.75 21v-3.375c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21M3 3h12m-.75 4.5H21m-3.75 3.75h.008v.008h-.008v-.008zm0 3h.008v.008h-.008v-.008zm0 3h.008v.008h-.008v-.008z" />
                      </svg> -->
                    <img class="h-14 w-14 object-cover" src="{{ Vite::asset('resources/images/about/icon2.png') }}" alt="">
                  </span>
                  <div class="flex flex-wrap flex-col items-start">
                    <span class="font-bold text-4xl text-white">+200</span>
                    <span class="text-base text-white  ">Employes </span>
                  </div>
                </div>
              </div>
              <div class="flex flex-row">
                <div class="w-full flex space-x-4  p-4 text-sm">
                  <span>
                    <!-- <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8" style="color:#49A494;">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 21h19.5m-18-18v18m10.5-18v18m6-13.5V21M6.75 6.75h.75m-.75 3h.75m-.75 3h.75m3-6h.75m-.75 3h.75m-.75 3h.75M6.75 21v-3.375c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21M3 3h12m-.75 4.5H21m-3.75 3.75h.008v.008h-.008v-.008zm0 3h.008v.008h-.008v-.008zm0 3h.008v.008h-.008v-.008z" />
                      </svg> -->
                    <img class="h-12 w-14 object-cover" src="{{ Vite::asset('resources/images/about/icon3.png') }}" alt="">
                  </span>
                  <div class="flex flex-wrap flex-col items-start">
                    <span class="font-bold text-4xl text-white">+35 </span>
                    <span class="text-base text-white">Ans d'Experience</span>
                  </div>
                </div>
                <div class="w-full flex space-x-4  p-4 text-sm">
                  <span>
                    <!-- <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8" style="color:#49A494;">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 21h19.5m-18-18v18m10.5-18v18m6-13.5V21M6.75 6.75h.75m-.75 3h.75m-.75 3h.75m3-6h.75m-.75 3h.75m-.75 3h.75M6.75 21v-3.375c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21M3 3h12m-.75 4.5H21m-3.75 3.75h.008v.008h-.008v-.008zm0 3h.008v.008h-.008v-.008zm0 3h.008v.008h-.008v-.008z" />
                      </svg> -->
                    <img class="h-14 w-14 object-cover" src="{{ Vite::asset('resources/images/about/icon4.png') }}" alt="">
                  </span>
                  <div class="flex flex-wrap flex-col items-start" style="width: 11rem;">
                    <span class="font-bold text-4xl text-white">+06</span>
                    <span class="text-base text-white ">Domaines d'Expertise</span>
                  </div>
                </div>
              </div>

            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- ====== presentation Section End -->

    <!-- ====== Services Section Start -->
    <section class="pt-20 pb-12 lg:pt-[120px] lg:pb-[90px]">
    <div class="container mx-auto">
      <div class="-mx-4 flex flex-wrap">
        <div class="w-full px-4">
          <div class="mx-auto mb-12 max-w-[510px] text-center lg:mb-20">
            <span class="mb-2 block text-lg font-bold text-primary" style="color: #17af95;" data-aos="fade-down" data-aos-duration="500">
              Filieres ACS Holding
            </span>
            <h2 class="mb-4 text-3xl font-bold text-dark sm:text-4xl md:text-[40px]" style="color: #1E4293;" data-aos="fade-down" data-aos-duration="1000">
              Ce que nous offrons
            </h2>
            <p class="text-base text-body-color font-semibold" style="color:#4B4A4A;" data-aos="fade-down" data-aos-duration="1500">
              There are many variations of passages of Lorem Ipsum available
              but the majority have suffered alteration in some form.
            </p>
          </div>
        </div>
      </div>
      <div class="-mx-4 flex flex-wrap">

        
        <div class="group [perspective:1000px] w-full px-4 md:w-1/2 lg:w-1/3" data-aos="fade-down" data-aos-duration="500" style="height: 30vh;">
          <div class="relative h-full w-full rounded-xl  transition-all duration-500 [transform-style:preserve-3d] group-hover:[transform:rotateY(180deg)]">
            <div class="absolute inset-0 mb-8  rounded-[20px] bg-white shadow-md hover:shadow-lg md:px-7 xl:px-10">
              <div class="mb-8 flex h-[70px] w-[70px] items-center justify-center rounded-2xl" data-aos="zoom-out" data-aos-duration="1500"
              style="background-color: white; height: 3.5rem; width: 3.5rem;">
              <img class="h-18 w-18 object-cover" src="{{ Vite::asset('resources/images/filieres/packaging.png') }}" alt="">
            </div>
            <h4 class="mb-3 text-xl font-semibold text-dark" data-aos="zoom-out" data-aos-duration="500">
              Papier et Cellulose
            </h4>
            <p class="text-body-color font-semibold" style="color:#4B4A4A;" data-aos="zoom-out" data-aos-duration="1000">
              We dejoy working with discerning clients, people for whom
              qualuty, service, integrity & aesthetics.
            </p>
            </div>
            <div class="absolute inset-0 mb-8  rounded-xl bg-white bg-opacity-80 px-12 text-center text-black [transform:rotateY(180deg)] [backface-visibility:hidden]">
              <div class="flex min-h-full flex-row items-center justify-around ">
                <div class=" flex shadow-lg flex-wrap rounded-md h-28 w-28 content-center justify-center p-4 border-4 hover:border-primary ">
                <img class="h-22 w-24 object-cover" src="{{ Vite::asset('resources/images/logo/filiales/gipec.png') }}" alt="">
                </div>
                <div class=" flex shadow-lg flex-wrap rounded-md h-28 w-28 content-center justify-center  p-4"
                style="background-color: white;">
                <img class="h-22 w-24 object-cover " src="{{ Vite::asset('resources/images/logo/filiales/gipec.png') }}" alt="">
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="group [perspective:1000px] w-full px-4 md:w-1/2 lg:w-1/3 " data-aos="fade-down" data-aos-duration="500"  style="height: 30vh;">
          <div class="relative h-full w-full rounded-xl  transition-all duration-500 [transform-style:preserve-3d] group-hover:[transform:rotateY(180deg)]">
            <div class="absolute inset-0 mb-8  rounded-[20px] bg-white shadow-md hover:shadow-lg md:px-7 xl:px-10">
              <div class="mb-8 flex h-[70px] w-[70px] items-center justify-center rounded-2xl" data-aos="zoom-out" data-aos-duration="1500"
              style="background-color: white; height: 3.5rem; width: 3.5rem;">
              <img class="h-18 w-18 object-cover" src="{{ Vite::asset('resources/images/filieres/packaging.png') }}" alt="">
            </div>
            <h4 class="mb-3 text-xl font-semibold text-dark" data-aos="zoom-out" data-aos-duration="500">
              Plastiques et Caoutchoucs
            </h4>
            <p class="text-body-color font-semibold" style="color:#4B4A4A;" data-aos="zoom-out" data-aos-duration="1000">
              We dejoy working with discerning clients, people for whom
              qualuty, service, integrity & aesthetics.
            </p>
            </div>
            <div class="absolute inset-0 mb-8  rounded-xl bg-white bg-opacity-80 px-12 text-center text-black [transform:rotateY(180deg)] [backface-visibility:hidden]">
              <div class="flex min-h-full flex-row items-center justify-around ">
                <div class=" flex shadow-lg flex-wrap rounded-md h-28 w-28 content-center justify-center  p-4"
                style="background-color: white;">
                <img class="h-22 w-24 object-cover " src="assets/images/logo/filiales/sante.png" alt="">
                </div>
                <div class=" flex shadow-lg flex-wrap rounded-md h-28 w-28 content-center justify-center  p-4"
                style="background-color: white;">
                <img class="h-22 w-24 object-cover " src="assets/images/logo/filiales/endimed.png" alt="">
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="group [perspective:1000px] w-full px-4 md:w-1/2 lg:w-1/3 " data-aos="fade-down" data-aos-duration="500"  style="height: 30vh;">
          <div class="relative h-full w-full rounded-xl  transition-all duration-500 [transform-style:preserve-3d] group-hover:[transform:rotateY(180deg)]">
            <div class="absolute inset-0 mb-8  rounded-[20px] bg-white shadow-md hover:shadow-lg md:px-7 xl:px-10">
              <div class="mb-8 flex h-[70px] w-[70px] items-center justify-center rounded-2xl" data-aos="zoom-out" data-aos-duration="1500"
              style="background-color: white; height: 3.5rem; width: 3.5rem;">
              <img class="h-18 w-18 object-cover" src="{{ Vite::asset('resources/images/filieres/packaging.png') }}" alt="">
            </div>
            <h4 class="mb-3 text-xl font-semibold text-dark" data-aos="zoom-out" data-aos-duration="500">
              Verre et Abrasifs
            </h4>
            <p class="text-body-color font-semibold" style="color:#4B4A4A;" data-aos="zoom-out" data-aos-duration="1000">
              We dejoy working with discerning clients, people for whom
              qualuty, service, integrity & aesthetics.
            </p>
            </div>
            <div class="absolute inset-0 mb-8  rounded-xl bg-white bg-opacity-80 px-12 text-center text-black [transform:rotateY(180deg)] [backface-visibility:hidden]">
              <div class="flex min-h-full flex-row items-center justify-around ">
                <div class=" flex shadow-lg flex-wrap rounded-md h-28 w-28 content-center justify-center  p-4"
                style="background-color: white;">
                <img class="h-22 w-24 object-cover " src="assets/images/logo/filiales/diprochim.png" alt="">
                </div>

              </div>
            </div>
          </div>
        </div>
        <div class="group [perspective:1000px] w-full px-4 md:w-1/2 lg:w-1/3 " data-aos="fade-down" data-aos-duration="500"  style="height: 30vh;">
          <div class="relative h-full w-full rounded-xl  transition-all duration-500 [transform-style:preserve-3d] group-hover:[transform:rotateY(180deg)]">
            <div class="absolute inset-0 mb-8  rounded-[20px] bg-white shadow-md hover:shadow-lg md:px-7 xl:px-10">
              <div class="mb-8 flex h-[70px] w-[70px] items-center justify-center rounded-2xl" data-aos="zoom-out" data-aos-duration="1500"
              style="background-color: white; height: 3.5rem; width: 3.5rem;">
              <img class="h-18 w-18 object-cover" src="{{ Vite::asset('resources/images/filieres/packaging.png') }}" alt="">
            </div>
            <h4 class="mb-3 text-xl font-semibold text-dark" data-aos="zoom-out" data-aos-duration="500">
              Detergents et Produits d'Etretien
            </h4>
            <p class="text-body-color font-semibold" style="color:#4B4A4A;" data-aos="zoom-out" data-aos-duration="1000">
              We dejoy working with discerning clients, people for whom
              qualuty, service, integrity & aesthetics.
            </p>
            </div>
            <div class="absolute inset-0 mb-8  rounded-xl bg-white bg-opacity-80 px-12 text-center text-black [transform:rotateY(180deg)] [backface-visibility:hidden]">
              <div class="flex min-h-full flex-row items-center justify-around ">
                <div class=" flex shadow-lg flex-wrap rounded-md h-28 w-28 content-center justify-center  p-4"
                style="background-color: white;">
                <img class="h-22 w-24 object-cover " src="assets/images/logo/filiales/enava.png" alt="">
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="group [perspective:1000px] w-full px-4 md:w-1/2 lg:w-1/3 " data-aos="fade-down" data-aos-duration="500"  style="height: 30vh;">
          <div class="relative h-full w-full rounded-xl  transition-all duration-500 [transform-style:preserve-3d] group-hover:[transform:rotateY(180deg)]">
            <div class="absolute inset-0 mb-8  rounded-[20px] bg-white shadow-md hover:shadow-lg md:px-7 xl:px-10">
              <div class="mb-8 flex h-[70px] w-[70px] items-center justify-center rounded-2xl" data-aos="zoom-out" data-aos-duration="1500"
              style="background-color: white; height: 3.5rem; width: 3.5rem;">
              <img class="h-18 w-18 object-cover" src="{{ Vite::asset('resources/images/filieres/packaging.png') }}" alt="">
            </div>
            <h4 class="mb-3 text-xl font-semibold text-dark" data-aos="zoom-out" data-aos-duration="500">
              Peintures et Vernis
            </h4>
            <p class="text-body-color font-semibold" style="color:#4B4A4A;" data-aos="zoom-out" data-aos-duration="1000">
              We dejoy working with discerning clients, people for whom
              qualuty, service, integrity & aesthetics.
            </p>
            </div>
            <div class="absolute inset-0 mb-8  rounded-xl bg-white bg-opacity-80 px-12 text-center text-black [transform:rotateY(180deg)] [backface-visibility:hidden]">
              <div class="flex min-h-full flex-row items-center justify-around ">
                <div class=" flex shadow-lg flex-wrap rounded-md h-28 w-28 content-center justify-center  p-4"
                style="background-color: white;">
                <img class="h-22 w-24 object-cover " src="assets/images/logo/filiales/endimed.png" alt="">
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="group [perspective:1000px] w-full px-4 md:w-1/2 lg:w-1/3 " data-aos="fade-down" data-aos-duration="500"  style="height: 30vh;">
          <div class="relative h-full w-full rounded-xl  transition-all duration-500 [transform-style:preserve-3d] group-hover:[transform:rotateY(180deg)]">
            <div class="absolute inset-0 mb-8  rounded-[20px] bg-white shadow-md hover:shadow-lg md:px-7 xl:px-10">
              <div class="mb-8 flex h-[70px] w-[70px] items-center justify-center rounded-2xl" data-aos="zoom-out" data-aos-duration="1500"
              style="background-color: white; height: 3.5rem; width: 3.5rem;">
              <img class="h-18 w-18 object-cover" src="{{ Vite::asset('resources/images/filieres/packaging.png') }}" alt="">
            </div>
            <h4 class="mb-3 text-xl font-semibold text-dark" data-aos="zoom-out" data-aos-duration="500">
              Produits Parapharmaceutiques
            </h4>
            <p class="text-body-color font-semibold" style="color:#4B4A4A;" data-aos="zoom-out" data-aos-duration="1000">
              We dejoy working with discerning clients, people for whom
              qualuty, service, integrity & aesthetics.
            </p>
            </div>
            <div class="absolute inset-0 mb-8  rounded-xl bg-white bg-opacity-80 px-12 text-center text-black [transform:rotateY(180deg)] [backface-visibility:hidden]">
              <div class="flex min-h-full flex-row items-center justify-around ">
                <div class=" flex shadow-lg flex-wrap rounded-md h-28 w-28 content-center justify-center  p-4"
                style="background-color: white;">
                <img class="h-22 w-24 object-cover " src="assets/images/logo/filiales/enap.png" alt="">
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>
  <!-- ====== Services Section End -->

  <!-- ====== Services Section Start -->
  <section class="pt-20 pb-12 lg:pt-[120px] lg:pb-[90px]">
    <div class="container mx-auto">
      <div class="-mx-4 flex flex-wrap">
        <div class="w-full px-4">
          <div class="mx-auto mb-12 max-w-[510px] text-center lg:mb-20">
            <span class="mb-2 block text-lg font-bold text-primary" style="color: #17af95;" data-aos="fade-down" data-aos-duration="500">
              Filieres ACS Holding
            </span>
            <h2 class="mb-4 text-3xl font-bold text-dark sm:text-4xl md:text-[40px]" style="color: #1E4293;" data-aos="fade-down" data-aos-duration="1000">
              Ce que nous offrons
            </h2>
            <p class="text-base text-body-color font-semibold" style="color:#4B4A4A;" data-aos="fade-down" data-aos-duration="1500">
              There are many variations of passages of Lorem Ipsum available
              but the majority have suffered alteration in some form.
            </p>
          </div>
        </div>
      </div>
      <div class="-mx-4 flex flex-wrap">
        <div class="w-full px-4 md:w-1/2 lg:w-1/3" data-aos="fade-down" data-aos-duration="500">
          <div class="mb-8 rounded-[20px] bg-white p-10 shadow-md hover:shadow-lg md:px-7 xl:px-10">
            <div class="mb-8 flex h-[70px] w-[70px] items-center justify-center rounded-2xl bg-primary "data-aos="zoom-out" data-aos-duration="1500"
              style="background-color: white; height: 3.5rem; width: 3.5rem;">
              <img class="h-18 w-18 object-cover" src="{{ Vite::asset('resources/images/filieres/packaging.png') }}" alt="">
            </div>
            <h4 class="mb-3 text-xl font-semibold text-dark" data-aos="zoom-out" data-aos-duration="500">
              Papier et Cellulose
            </h4>
            <p class="text-body-color font-semibold" style="color:#4B4A4A;" data-aos="zoom-out" data-aos-duration="1000">
              We dejoy working with discerning clients, people for whom
              qualuty, service, integrity & aesthetics.
            </p>
          </div>
        </div>
        <div class="w-full px-4 md:w-1/2 lg:w-1/3" data-aos="fade-down" data-aos-duration="500">
          <div class="mb-8 rounded-[20px] bg-white p-10 shadow-md hover:shadow-lg md:px-7 xl:px-10">
            <div class="mb-8 flex h-[70px] w-[70px] items-center justify-center rounded-2xl bg-primary" data-aos="zoom-out" data-aos-duration="1500"
              style="background-color: white; height: 3.5rem; width: 3.5rem;">
              <img class="h-18 w-18 object-cover" src="{{ Vite::asset('resources/images/filieres/plastic.png') }}" alt="">
            </div>
            <h4 class="mb-3 text-xl font-semibold text-dark" data-aos="zoom-out" data-aos-duration="500">
              Plastiques et Caoutchoucs
            </h4>
            <p class="text-body-color font-semibold" style="color:#4B4A4A;" data-aos="zoom-out" data-aos-duration="1000">
              We dejoy working with discerning clients, people for whom
              qualuty, service, integrity & aesthetics.
            </p>
          </div>
        </div>
        <div class="w-full px-4 md:w-1/2 lg:w-1/3" data-aos="fade-down" data-aos-duration="500">
          <div class="mb-8 rounded-[20px] bg-white p-10 shadow-md hover:shadow-lg md:px-7 xl:px-10">
            <div class="mb-8 flex h-[70px] w-[70px] items-center justify-center rounded-2xl bg-primary" data-aos="zoom-out" data-aos-duration="1500"
              style="background-color: white; height: 3.5rem; width: 3.5rem;">
              <img class="h-18 w-18 object-cover" src="{{ Vite::asset('resources/images/filieres/sliding-doors.png') }}" alt="">
            </div>
            <h4 class="mb-3 text-xl font-semibold text-dark" data-aos="zoom-out" data-aos-duration="500">
              Verre et Abrasifs
            </h4>
            <p class="text-body-color font-semibold" style="color:#4B4A4A;" data-aos="zoom-out" data-aos-duration="1000">
              We dejoy working with discerning clients, people for whom
              qualuty, service, integrity & aesthetics.
            </p>
          </div>
        </div>
        <div class="w-full px-4 md:w-1/2 lg:w-1/3" data-aos="fade-down" data-aos-duration="500">
          <div class="mb-8 rounded-[20px] bg-white p-10 shadow-md hover:shadow-lg md:px-7 xl:px-10">
            <div class="mb-8 flex h-[70px] w-[70px] items-center justify-center rounded-2xl bg-primary" data-aos="zoom-out" data-aos-duration="1500"
              style="background-color:white; height: 3.5rem; width: 3.5rem;">
              <img class="h-18 w-18 object-cover" src="{{ Vite::asset('resources/images/filieres/detergent.png') }}" alt="">
            </div>
            <h4 class="mb-3 text-xl font-semibold text-dark" data-aos="zoom-out" data-aos-duration="500">
              Detergents et Produits d'Etretien
            </h4>
            <p class="text-body-color font-semibold" style="color:#4B4A4A;" data-aos="zoom-out" data-aos-duration="1000">
              We dejoy working with discerning clients, people for whom
              qualuty, service, integrity & aesthetics.
            </p>
          </div>
        </div>
        <div class="w-full px-4 md:w-1/2 lg:w-1/3" data-aos="fade-down" data-aos-duration="500">
          <div class="mb-8 rounded-[20px] bg-white p-10 shadow-md hover:shadow-lg md:px-7 xl:px-10">
            <div class="mb-8 flex h-[70px] w-[70px] items-center justify-center rounded-2xl bg-primary" data-aos="zoom-out" data-aos-duration="1500"
              style="background-color: white; height: 3.5rem; width: 3.5rem;">
              <img class="h-18 w-18 object-cover" src="{{ Vite::asset('resources/images/filieres/varnish.png') }}" alt="">

            </div>
            <h4 class="mb-3 text-xl font-semibold text-dark" data-aos="zoom-out" data-aos-duration="500">
              Peintures et Vernis
            </h4>
            <p class="text-body-color font-semibold" style="color:#4B4A4A;" data-aos="zoom-out" data-aos-duration="1000">
              We dejoy working with discerning clients, people for whom
              qualuty, service, integrity & aesthetics.
            </p>
          </div>
        </div>
        <div class="w-full px-4 md:w-1/2 lg:w-1/3" data-aos="fade-down" data-aos-duration="500">
          <div class="mb-8 rounded-[20px] bg-white p-10 shadow-md hover:shadow-lg md:px-7 xl:px-10">
            <div class="mb-8 flex h-[70px] w-[70px] items-center justify-center rounded-2xl bg-primary" data-aos="zoom-out" data-aos-duration="1500"
              style="background-color: white; height: 3.5rem; width: 3.5rem;">
              <img class="h-18 w-18 object-cover" src="{{ Vite::asset('resources/images/filieres/aspirin.png') }}" alt="">
            </div>
            <h4 class="mb-3 text-xl font-semibold text-dark" data-aos="zoom-out" data-aos-duration="500">
              Produits Parapharmaceutiques
            </h4>
            <p class="text-body-color font-semibold" style="color:#4B4A4A;" data-aos="zoom-out" data-aos-duration="1000">
              We dejoy working with discerning clients, people for whom
              qualuty, service, integrity & aesthetics.
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- ====== Services Section End -->


  <!-- ====== actualite Section Start -->
  <section class="pt-10 pb-20 ">
    <div class="pt-20 pb-20"
      style="background-color: rgba(211, 211, 211, 0.233); border-radius: 0% 20% 0% 20%; ">
      <div class="flex flex-wrap justify-center">
        <div class="mx-auto mb-12 max-w-[510px] text-center lg:mb-20">
          <h2 class="mb-4 text-3xl font-bold text-dark sm:text-4xl md:text-[40px]" style="color: #1E4293;" data-aos="fade-down" data-aos-duration="1000">
            Actualites
          </h2>
          <p class="text-base text-body-color font-semibold" style="color:#4B4A4A;" data-aos="fade-down" data-aos-duration="1500">
            There are many variations of passages of Lorem Ipsum available <br>
            but the majority have suffered alteration in some form.
          </p>
        </div>
      </div>

      <div class="flex flex-col md:flex-row justify-center">
        <div class="flex md:w-1/2 lg:w-1/4 justify-center lg:justify-start px-4 " data-aos="zoom-out" data-aos-duration="1000">
          <div class="flex flex-col mb-10 shadow-md hover:shadow-lg">
            <div class="mb-8 overflow-hidden rounded ">
              <img src="{{ Vite::asset('resources/images/articles/5.jpeg') }}" alt="image" class="lg:w-full bg-cover  mx-auto" />
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
                class="mb-4 inline-block text-sm md:text-base font-bold text-dark hover:text-primary lg:text-xl xl:text-2xl">
                Hausse de 20% du chiffre d’affaires en 2022              </a>
            </h3>
            <p class="flex-1 text-xs md:text-base text-body-color  w-8/12 md:w-10/12 mx-auto mb-6"
              style="color: #727070;">
              Le holding Algeria Chemical Specialities (ACS) a réalisé un chiffre d’affaires estimé à 28,21 milliards ....
            </p>
            <a href="article1.html" >
              <div class="flex md:w-10/12 mx-auto items-center text-base font-semibold text-body-color mb-3 justify-start"
                style="color: #17af95;">
                Consuler plus
                <span class="pl-2">
                  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="3.5"
                    stroke="currentColor" class="w-3 h-3">
                    <path stroke-linecap="round" stroke-linejoin="round"
                      d="M11.25 4.5l7.5 7.5-7.5 7.5m-6-15l7.5 7.5-7.5 7.5" />
                  </svg>
                </span>
              </div>
            </a>

          </div>
        </div>
        <div class="flex md:w-1/2 lg:w-1/4 lg:justify-around px-4" data-aos="zoom-out" data-aos-duration="1000">
          <div class="flex flex-col mb-10  shadow-md hover:shadow-lg">
            <div class="mb-8 overflow-hidden rounded">
              <img src="{{ Vite::asset('resources/images/articles/1.jpeg') }}" alt="image" class="lg:w-full bg-cover mx-auto" />
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
                class="mb-4 inline-block text-sm md:text-base font-bold text-dark hover:text-primary lg:text-xl xl:text-2xl">
                Lorem ipsum dolor
              </a>
            </h3>
            <p class="flex-1 text-xs md:text-base text-body-color  w-8/12 md:w-10/12 mx-auto mb-6"
              style="color: #727070;">
              Lorem Ipsum is simply dummy text of the
              printing and typesetting industry simply
              dummy text ....
            </p>
            <a href="article1.html" >
              <div class="flex md:w-10/12 mx-auto items-center text-base font-semibold text-body-color mb-3 justify-start"
                style="color: #17af95;">
                Consuler plus
                <span class="pl-2">
                  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="3.5"
                    stroke="currentColor" class="w-3 h-3">
                    <path stroke-linecap="round" stroke-linejoin="round"
                      d="M11.25 4.5l7.5 7.5-7.5 7.5m-6-15l7.5 7.5-7.5 7.5" />
                  </svg>
                </span>
              </div>
            </a>



          </div>
        </div>
        <div class="flex md:w-1/2 lg:w-1/4 lg:justify-end  px-4" data-aos="zoom-out" data-aos-duration="1000">
          <div class="flex flex-col mb-10  shadow-md hover:shadow-lg">
            <div class="mb-8 overflow-hidden rounded">
              <img src="{{ Vite::asset('resources/images/articles/2.jpeg') }}" alt="image" class="lg:w-full bg-cover mx-auto" />
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
                class="mb-4 inline-block text-sm md:text-base font-bold text-dark hover:text-primary lg:text-xl xl:text-2xl">
                Lorem ipsum dolor
              </a>
            </h3>
            <p class="flex-1 text-xs md:text-base text-body-color  w-8/12 md:w-10/12 mx-auto mb-6"
              style="color: #727070;">
              Lorem Ipsum is simply dummy text of the
              printing and typesetting industry simply
              dummy text ....
            </p>
            <a href="article1.html" >
              <div class="flex md:w-10/12 mx-auto items-center text-base font-semibold text-body-color mb-3 justify-start"
                style="color: #17af95;">
                Consuler plus
                <span class="pl-2">
                  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="3.5"
                    stroke="currentColor" class="w-3 h-3">
                    <path stroke-linecap="round" stroke-linejoin="round"
                      d="M11.25 4.5l7.5 7.5-7.5 7.5m-6-15l7.5 7.5-7.5 7.5" />
                  </svg>
                </span>
              </div>
            </a>

          </div>
        </div>

      </div>
    </div>
  </section>
  <!-- ====== Actualite Section End -->

  <!-- ====== Contact Section Start -->
  <section class="relative z-10 overflow-hidden bg-white py-10 lg:py-[120px] bg-no-repeat bg-cover bg-center "
    style="height: 60vh;">
    <iframe class="absolute inset-0 w-full " src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3197.309320624329!2d3.100050915543919!3d36.739145779961156!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x128e53d0e6b1537b%3A0xfb8904703c600682!2sHolding%20ACS!5e0!3m2!1sfr!2sdz!4v1677417444332!5m2!1sfr!2sdz" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    <div class="container absolute inset-0  mx-auto">
      <div class=" flex flex-wrap justify-end">
        <div class=" w-1/4 ">
          <div class="relative rounded-lg bg-secondary px-6 py-12 shadow-lg ">
            <h2 class="mb-6 font-bold text-white sm:text-[30px] lg:text-[30px] xl:text-2xl">
              Info contact
            </h2>
            <div class="mb-8 flex w-full max-w-[370px]">
              <div class="w-full flex flex-row justify-start items-center">
                <div
                  class=" flex  items-center justify-center overflow-hidden rounded bg-opacity-5 text-primary sm:h-[70px] sm:max-w-[70px]">
                  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                    stroke="currentColor" class="w-8 h-7">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z" />
                    <path stroke-linecap="round" stroke-linejoin="round"
                      d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z" />
                  </svg>
                </div>
                <p class="text-base text-white font-medium ">
                  Rue Layache Yahia, Hussein Dey                </p>
              </div>
            </div>

            <div class="mb-8 flex w-full max-w-[370px]">
              <div class="w-full flex flex-row justify-start items-center">
                <div
                  class=" flex  items-center justify-center overflow-hidden rounded bg-opacity-5 text-primary sm:h-[70px] sm:max-w-[70px]">
                  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                    stroke="currentColor" class="w-8 h-7">
                    <path stroke-linecap="round" stroke-linejoin="round"
                      d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 002.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 01-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 00-1.091-.852H4.5A2.25 2.25 0 002.25 4.5v2.25z" />
                  </svg>
                </div>
                <p class="text-base text-white font-medium ">
                  021 49 60 83                </p>
              </div>
            </div>

            <div class="mb-8 flex w-full max-w-[370px]">
              <div class="w-full flex flex-row justify-start items-center">
                <div
                  class=" flex  items-center justify-center overflow-hidden rounded bg-opacity-5 text-primary sm:h-[70px] sm:max-w-[70px]">
                  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                    stroke="currentColor" class="w-8 h-7">
                    <path stroke-linecap="round" stroke-linejoin="round"
                      d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75" />
                  </svg>
                </div>
                <p class="text-base text-white font-medium ">
                  contact@acsgroup-dz.com                
                </p>
              </div>
            </div>

            <div class="mb-8 flex w-full max-w-[370px]">
              <div class="w-full flex flex-row justify-start items-center">
                <div
                  class=" flex  items-center justify-center overflow-hidden rounded bg-opacity-5 text-primary sm:h-[70px] sm:max-w-[70px]">
                  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                    stroke="currentColor" class="w-8 h-7">
                    <path stroke-linecap="round" stroke-linejoin="round"
                      d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75" />
                  </svg>
                </div>
                <p class="text-base text-white font-medium ">
                  www.acs-chimi.dz
                </p>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>

  </section>
  <!-- ====== Contact Section End -->

  <!-- ====== Footer Section Start -->
  <footer class="pt-40 mt-10 z-10 overflow-hidden bg-white lg:py-[120px]">

    <div class="flex justify-center relative z-0  object-cover md:h-screen-60 h-screen bg-hero-pattern "
      style=" background-image: url('{{ Vite::asset('resources/images/footer/footer.jpg') }}');">
     

      <div class="absolute inset-0 bg-black z-0" style="opacity: 80%;"></div>
      <div class="absolute inset-0 lg:container mx-auto top-1/4">
        <div class=" flex flex-wrap justify-between">
          <div class="flex flex-row px-4 md:w-1/3 w-1/2 mb-5">
            <div class="w-1/3 text-center">
              <a href="javascript:void(0)" class="inline-block max-w-[250px]">
                <img src="{{ Vite::asset('resources/images/footer/logo-Holding-acs-w.png') }}" alt="logo" class="w-40 h-40" />
              </a>
            </div>
            <div class="w-2/3">
              <p class=" 2xl:text-xl md:text-base text-xl font-semibold pl-4 text-white" style="line-height: 2rem;">
                le Holding A.C.S Spa Ex CHIMIDUS Spa, est issue de la
                restructuration de l'ex Société de Gestion des
                Participation.
              </p>
            </div>
          </div>
          <div class="flex flex-col justify-between px-4 md:w-1/3 w-1/2">
            <div>
              <h4 class="mb-5 lg:mb-5 text-2xl font-semibold text-white">Filieres</h4>
            </div>
            <div class="w-full flex flex-row justify-between">
              <div class="mb-5 w-1/2">
                <ul>
                  <li>
                    <div class="flex items-center">
                      <span style="color: #17af95;">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="3.5"
                          stroke="currentColor" class="w-4 h-4">
                          <path stroke-linecap="round" stroke-linejoin="round"
                            d="M11.25 4.5l7.5 7.5-7.5 7.5m-6-15l7.5 7.5-7.5 7.5" />
                        </svg>
                      </span>
                      <a href="javascript:void(0)"
                        class=" inline-block text-base mb-2 leading-loose text-white hover:text-primary ml-2">
                        Socothyde
                      </a>
                    </div>
                  </li>
                  <li>
                    <div class="flex items-center">
                      <span style="color: #17af95;">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="3.5"
                          stroke="currentColor" class="w-4 h-4">
                          <path stroke-linecap="round" stroke-linejoin="round"
                            d="M11.25 4.5l7.5 7.5-7.5 7.5m-6-15l7.5 7.5-7.5 7.5" />
                        </svg>
                      </span>
                      <a href="javascript:void(0)"
                        class=" inline-block text-xl mb-2 leading-loose text-white hover:text-primary ml-2">
                        3R Sante
                      </a>
                    </div>
                  </li>
                  <li>
                    <div class="flex items-center">
                      <span style="color: #17af95;">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="3.5"
                          stroke="currentColor" class="w-4 h-4">
                          <path stroke-linecap="round" stroke-linejoin="round"
                            d="M11.25 4.5l7.5 7.5-7.5 7.5m-6-15l7.5 7.5-7.5 7.5" />
                        </svg>
                      </span>
                      <a href="javascript:void(0)"
                        class=" inline-block text-xl mb-2 leading-loose text-white hover:text-primary ml-2">
                        Diprochim
                      </a>
                    </div>
                  </li>
                  <li>
                    <div class="flex items-center">
                      <span style="color: #17af95;">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="3.5"
                          stroke="currentColor" class="w-4 h-4">
                          <path stroke-linecap="round" stroke-linejoin="round"
                            d="M11.25 4.5l7.5 7.5-7.5 7.5m-6-15l7.5 7.5-7.5 7.5" />
                        </svg>
                      </span>
                      <a href="javascript:void(0)"
                        class=" inline-block text-xl mb-2 leading-loose text-white hover:text-primary ml-2">
                        ENAD
                      </a>
                    </div>
                  </li>
                  <li>
                    <div class="flex items-center">
                      <span style="color: #17af95;">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="3.5"
                          stroke="currentColor" class="w-4 h-4">
                          <path stroke-linecap="round" stroke-linejoin="round"
                            d="M11.25 4.5l7.5 7.5-7.5 7.5m-6-15l7.5 7.5-7.5 7.5" />
                        </svg>
                      </span>
                      <a href="javascript:void(0)"
                        class=" inline-block text-xl mb-2 leading-loose text-white hover:text-primary ml-2">
                        ENAP
                      </a>
                    </div>
                  </li>

                </ul>
              </div>
              <div class="mb-5 w-1/2">
                <ul>
                  <li>
                    <div class="flex items-center">
                      <span style="color: #17af95;">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="3.5"
                          stroke="currentColor" class="w-4 h-4">
                          <path stroke-linecap="round" stroke-linejoin="round"
                            d="M11.25 4.5l7.5 7.5-7.5 7.5m-6-15l7.5 7.5-7.5 7.5" />
                        </svg>
                      </span>
                      <a href="javascript:void(0)"
                        class=" inline-block text-xl mb-2 leading-loose text-white hover:text-primary ml-2 ">
                        ENAVA
                      </a>
                    </div>
                  </li>
                  <li>
                    <div class="flex items-center">
                      <span style="color: #17af95;">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="3.5"
                          stroke="currentColor" class="w-4 h-4">
                          <path stroke-linecap="round" stroke-linejoin="round"
                            d="M11.25 4.5l7.5 7.5-7.5 7.5m-6-15l7.5 7.5-7.5 7.5" />
                        </svg>
                      </span>
                      <a href="javascript:void(0)"
                        class=" inline-block text-xl mb-2 leading-loose text-white hover:text-primary ml-2">
                        ENDIMED
                      </a>
                    </div>
                  </li>
                  <li>
                    <div class="flex items-center">
                      <span style="color: #17af95;">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="3.5"
                          stroke="currentColor" class="w-4 h-4">
                          <path stroke-linecap="round" stroke-linejoin="round"
                            d="M11.25 4.5l7.5 7.5-7.5 7.5m-6-15l7.5 7.5-7.5 7.5" />
                        </svg>
                      </span>
                      <a href="javascript:void(0)"
                        class=" inline-block text-xl mb-2 leading-loose text-white hover:text-primary ml-2">
                        ENPC
                      </a>
                    </div>
                  </li>
                  <li>
                    <div class="flex items-center">
                      <span style="color: #17af95;">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="3.5"
                          stroke="currentColor" class="w-4 h-4">
                          <path stroke-linecap="round" stroke-linejoin="round"
                            d="M11.25 4.5l7.5 7.5-7.5 7.5m-6-15l7.5 7.5-7.5 7.5" />
                        </svg>
                      </span>
                      <a href="javascript:void(0)"
                        class=" inline-block text-xl mb-2 leading-loose text-white hover:text-primary ml-2">
                        GIPEC
                      </a>
                    </div>
                  </li>
                  <li>
                    <div class="flex items-center">
                      <span style="color: #17af95;">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="3.5"
                          stroke="currentColor" class="w-4 h-4">
                          <path stroke-linecap="round" stroke-linejoin="round"
                            d="M11.25 4.5l7.5 7.5-7.5 7.5m-6-15l7.5 7.5-7.5 7.5" />
                        </svg>
                      </span>
                      <a href="javascript:void(0)"
                        class=" inline-block text-xl mb-2 leading-loose text-white hover:text-primary ml-2">
                        TONIC
                      </a>
                    </div>
                  </li>


                </ul>
              </div>
            </div>
          </div>
          <div class="w-full flex flex-col px-4 md:w-1/3 ">
            <div>
              <h4 class="mb-5 lg:mb-5 text-2xl font-semibold text-white">Nous contacter</h4>
            </div>
            <div class="mb-5 flex flex-col w-full">
              <div class="mb-8 flex w-full ">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                  stroke="currentColor" class="w-6 h-6" style="color: #17af95;">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z" />
                  <path stroke-linecap="round" stroke-linejoin="round"
                    d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z" />
                </svg>
                <p class="text-base text-white ml-2 ">
                  01 rue yahia layachi, Hussein Dey</br> 16040, Alger, Algerie
                </p>
              </div>

              <div class="mb-8 flex w-full max-w-[370px]">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                  stroke="currentColor" class="w-6 h-6 " style="color: #17af95;">
                  <path stroke-linecap="round" stroke-linejoin="round"
                    d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 002.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 01-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 00-1.091-.852H4.5A2.25 2.25 0 002.25 4.5v2.25z" />
                </svg>
                <p class="text-base text-white ml-2">+213(0) 21 496 083</p>
              </div>

              <div class="mb-8 flex w-full max-w-[370px]">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                  stroke="currentColor" class="w-6 h-6" style="color: #17af95;">
                  <path stroke-linecap="round" stroke-linejoin="round"
                    d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75" />
                </svg>
                <p class="text-base text-white ml-2">contact@acs-holding.dz</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="absolute container mx-auto w-2/3 h-56 rounded-lg -top-32" style="background-color: #1E4293; ">
        <div class="flex justify-center items-center  ">
          <h1 class="pt-10 uppercase text-xl text-white text-center pb-5"> abonnez-vous a la newsletter obtenez les
            nouvelles <br> de l'entreprise </h1>
        </div>
        <div class="flex flex-row justify-center">
          <div class="flex bg-white text-xs rounded-full h-12 items-center mr-4 " style="color: #c2bdbd; width: 30rem;">
            <h1 class="ml-6">Inserer votre adresse email</h1>
          </div>
          <button class=" text-white font-bold py-2 px-8 rounded-full " style="background-color: #17af95;">
            S'inscrire
          </button>
        </div>

      </div>
    </div>

    <div class="flex justify-center items-center h-20 text-white" style="background-color:black;">2023 © Tous droits
      Réservés <span style="color:#17af95;">ACS HOLDING</span></div>
  </footer>
  <!-- ====== Footer Section End -->

  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>
</body>

</html>