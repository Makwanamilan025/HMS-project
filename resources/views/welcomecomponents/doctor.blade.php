<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    @include('layouts.cdn')
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Doctor</title>
</head>
<style>
     html {
        scroll-behavior: smooth;
    }

    .about {
   $cubic: cubic-bezier(0.64, 0.01, 0.07, 1.65);
   $transition: 0.6s $cubic;
   $size: 40px;
   position: fixed;
   z-index: 10;
   bottom: 10px;
   right: 10px;
   width: $size;
   height: $size;
   display: flex;
   justify-content: flex-end;
   align-items: flex-end;
   transition: all 0.2s ease;
   margin-bottom:10%;

   .bg_links {
      width: $size;
      height: $size;
      border-radius: 100%;
      display: flex;
      justify-content: center;
      align-items: center;
      background-color: rgba(#000000, 0.2);
      border-radius: 100%;
      backdrop-filter: blur(5px);
      position: absolute;
   }

   .logo {
      width: $size;
      height: $size;
      z-index: 9;
      background-image: url(https://rafaelavlucas.github.io/assets/codepen/logo_white.svg);
      background-size: 50%;
      background-repeat: no-repeat;
      background-position: 10px 7px;
      opacity: 0.9;
      transition: all 1s 0.2s ease;
      bottom: 0;
      right: 0;
   }

   .social {
      opacity: 0;
      right: 0;
      bottom: 0;

      .icon {
         width: 100%;
         height: 100%;
         background-size: 20px;
         background-repeat: no-repeat;
         background-position: center;
         background-color: transparent;
         display: flex;
         transition: all 0.2s ease, background-color 0.4s ease;
         opacity: 0;
         border-radius: 100%;
      }

      &.portfolio {
         transition: all 0.8s ease;

         .icon {
            background-image: url(https://rafaelavlucas.github.io/assets/codepen/link.svg);
         }
      }

      &.dribbble {
         transition: all 0.3s ease;
         .icon {
            background-image: url(https://rafaelavlucas.github.io/assets/codepen/dribbble.svg);
         }
      }

      &.linkedin {
         transition: all 0.8s ease;
         .icon {
            background-image: url(https://rafaelavlucas.github.io/assets/codepen/linkedin.svg);
         }
      }
   }

   &:hover {
      width: 105px;
      height: 105px;
      transition: all $transition;

      .logo {
         opacity: 1;
         transition: all 0.6s ease;
      }

      .social {
         opacity: 1;

         .icon {
            opacity: 0.9;
         }

         &:hover {
            background-size: 28px;
            .icon {
               background-size: 65%;
               opacity: 1;
            }
         }

         &.portfolio {
            right: 0;
            bottom: calc(100% - 40px);
            transition: all 0.3s 0s $cubic;
            .icon {
               &:hover {
                  background-color: #f8f7f6;
               }
            }
         }

         &.dribbble {
            bottom: 45%;
            right: 45%;
            transition: all 0.3s 0.15s $cubic;
            .icon {
               &:hover {
                  background-color: #f8f7f6;
               }
            }
         }

         &.linkedin {
            bottom: 0;
            right: calc(100% - 40px);
            transition: all 0.3s 0.25s $cubic;
            .icon {
               &:hover {
                  background-color: #f8f7f6;
               }
            }
         }
      }
   }
}

@import url("https://fonts.googleapis.com/css?family=Roboto:400,400i,700");
@import url("https://fonts.googleapis.com/css?family=Barlow:300,400,500,600,700&display=swap");

$font: "Barlow", sans-serif;

body {
  font-family: $font;
  margin: 0;
  height: 100vh;
  display: grid;
  place-items: center;
  background-color: #f8f7f6;
}

.cards {
  width: 100%;
  display: flex;
  justify-content: center;
  align-items: center;

  .card {
    height: 440px;
    background: #fff;
    border-radius: 4px;
    box-shadow: 0px 20px 30px -10px rgba(0, 0, 0, 0.1);
    max-width: 300px;
    min-width: 260px;
    overflow: hidden;
    display: flex;
    justify-content: space-between;
    align-items: center;
    flex-direction: column;
    position: relative;
    transition: all 0.4s ease;
    margin: 0 10px;


    &:before {
      height: 190px;
      width: calc(100% + 100px);
      content: "";
      position: absolute;
      background-image: linear-gradient(to top,  hsl(32, 91%, 49%) 0%, #ecb26f 100%);
      border-radius: 4px 4px 100% 100%;
      transition: all 0.4s ease-out;
      top: 0;
    }

    .close {
      width: 18px;
      height: 18px;
      position: absolute;
      z-index: 2;
      cursor: pointer;
      background-image: url("https://rafaelalvucas.github.io/assets/icons/misc/cross.svg");
      background-size: 80%;
      background-repeat: no-repeat;
      background-position: center;
      top: 0;
      right: 0;
      margin: 10px;
      padding: 5px;
      transition: all 0.2s ease;

      &:hover {
        background-size: 100%;
        opacity: 0.8;
      }
    }

    .arrow {
      display: none;
    }

    article {
      z-index: 1;
      display: flex;
      align-items: center;
      flex-direction: column;
      text-align: center;

      h2 {
        color: white;
        margin: 0;
        padding: 40px 20px 10px 20px;
        font-weight: 500;
        font-size: 24px;
        letter-spacing: 0.5px;
      }

      .title {
        color: white;
        padding: 10px 20px;
        letter-spacing: 0.8px;
        transition: all 0.4s ease;
      }

      .desc {
        padding: 10px 30px;
        font-size: 14px;
        text-align: center;
        line-height: 24px;
        color: #666;
        height: 90px;
        transition: all 0.4s ease-out;
      }

      .pic {
        width: 120px;
        height: 120px;
        overflow: hidden;
        border-radius: 100%;
        margin: 20px 0;
        box-shadow: 0px 0px 0px 0px rgba(255, 255, 255, 0.3);
        transition: all 0.6s ease;

        img {
          width: 100%;
          -webkit-filter: grayscale(100%);
          filter: grayscale(100%);
        }
      }
    }
    .actions {
      width: 100%;
      display: flex;
      justify-content: space-between;
      background: white;
      //bottom: 4px;
      z-index: 1;

      .btn {
        border: 0;
        background-color: transparent;
        box-sizing: border-box;
        width: calc(50% - 1px);
        height: 36px;
        margin: 0;
        text-transform: uppercase;
        font-size: 10px;
        transition: all 0.6s ease-in-out;
        cursor: pointer;
        color: #eb9544;
        position: relative;
        display: flex;
        justify-content: center;
        align-items: center;
        font-weight: 500;
        font-family: $font;
        letter-spacing: 0.5px;
        background: rgba(68, 129, 235, 0.08);

        span {
          z-index: 1;
          opacity: 1;
          transition: all 0.4s ease-in-out;
        }

        .icon {
          width: 10px;
          opacity: 0;
          position: absolute;
          transition: all 0.2s ease-in-out;
        }

        &:before {
          content: "";
          width: 100%;
          height: 0%;
          position: absolute;
          background: #4481eb;
          transition: all 0.4s ease;
          bottom: 0;
          opacity: 0.2;
        }

        &:focus {
          outline: 0;
        }

        &:hover {
          background-color: rgba(255, 255, 255, 0.5);

          span {
            opacity: 0;
            transition: all 0.3s ease-in-out;
          }

          .icon {
            width: 22px;
            opacity: 1;
            transition: all 0.4s ease-in-out;
          }

          &:nth-child(3) {
            .icon {
              width: 18px;
            }
          }
          &:before {
            height: 100%;
          }
        }

        &.clicked {

          span {
            display: none;
          }
          .icon {
            width: 22px;
            opacity: 1;
            animation: icon 0.5s ease forwards;

            @keyframes icon {
              0%{
                width: 22px;
              }
              50%{
                width: 40px;
              }
              100%{
                width: 22px;
              }
            }
          }
          &:before {
            opacity: 0.3;
            height: 100%;
          }
        }
      }
    }

    &:hover {
      transform: translateY(-10px);
      box-shadow: 0px 5px 10px -5px rgba(0, 0, 0, 0.3);

      &:before {
        height: 100%;
        border-radius: 4px;
      }

      .desc {
        color: white;
      }

      .pic {
        box-shadow: 0px 0px 0px 8px rgba(255, 255, 255, 0.3);
        img {
          -webkit-filter: grayscale(0%);
          filter: grayscale(0%);
        }
      }
    }

    &.closed {
      min-width: 120px;
      max-width: 120px;
      display: flex;
      justify-content: center;
      align-items: center;
      transition: all 0.6s ease;
      cursor: pointer;

      .title,
      .desc,
      .actions,
      .close {
        display: none;
      }

      h2 {
        padding: 0;
        height: 100%;
        transform: rotate(-90deg);
        width: 440px;
        z-index: 2;
        transition: all 0.6s ease;
      }

      .pic {
        border-radius: 100%;
        height: 400px;
        width: 400px;
        position: absolute;
        top: -20px;
        margin: 0;
        box-shadow: 0;
        transition: all 0.6s ease;

        img {
          object-fit: cover;
          height: 100%;
          transform: translateY(20px);
        }

        &:before {
          content: "";
          position: absolute;
          width: 100%;
          height: 100%;
          background-color: black;
          opacity: 0.5;
          z-index: 1;
          transition: all 0.4s ease;
          transform: translateY(20px);
        }
      }

      &:before {
        height: 100%;
        border-radius: 4px;
      }

      .arrow {
        width: 18px;
        height: 18px;
        position: absolute;
        z-index: 2;
        cursor: pointer;
        bottom: 15px;
        padding: 5px;
        display: flex;
        justify-content: center;
        background-image: url("https://rafaelavlucas.github.io/assets/icons/misc/expand.svg");
        background-size: 80%;
        background-repeat: no-repeat;
        background-position: center;
        transition: all 0.2s ease;
      }

      &:hover {
        .arrow {
          background-size: 100%;
          opacity: 0.6;
        }
      }
    }
  }
}

 </style>
<body>
    @include('layouts.header')
    <div class="flex justify-around my-24">
        <div class="mt-48">
            <h2 class="text-6xl text-orange-500 font-bold ">Doctor</h2>
        </div>
        <img src="https://hms-staging.infyom.com/web_front/images/page-banner/Doctors.png" alt="" class="w-[35%]">
    </div>


    <!-- about -->
    <div>
        <div>
            <h4 class="ml-[830px] text-orange-500 text-2xl mb-4">Professional Top Doctors</h4>
        </div>
        <div class="ml-[600px]  text-3xl font-bold mb-20">
            <h1>We are Experienced Healthcare Professionals<h1>
        </div>
        {{-- <div class="ml-[830px]  text-3xl font-bold"> {{ @$data[8]->department->name }}</div> --}}
    </div>

<div class="about">
    <a class="bg_links social portfolio" href="https://www.rafaelalucas.com" target="_blank">
       <span class="icon"></span>
    </a>
    <a class="bg_links social dribbble" href="https://dribbble.com/rafaelalucas" target="_blank">
       <span class="icon"></span>
    </a>
    <a class="bg_links social linkedin" href="https://www.linkedin.com/in/rafaelalucas/" target="_blank">
       <span class="icon"></span>
    </a>

    <a class="bg_links logo"></a>
 </div>
 <!-- end about -->


 <div class="cards">
   <div class="card">
     <span class="close"></span>
     <span class="arrow"></span>
     <article>
       <h2>{{ @$data[5]->department->name }}</h2>
       <div class="title">{{ $data[5]->name }}</div>
       <div class="pic"><img src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/joseph-mcfall.png"></div>

       <div class="desc">Elijah has collected bugs since they were six years old and now has many dozen bugs but none in their pants.</div>

     </article>
     <div class="actions">
       <button class="btn"><span>like</span><img class="icon" src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/joseph-mcfall.png"></button>
       <button class="btn"><span>trade</span><img class="icon" src="https://rafaelavlucas.github.io/assets/icons/misc/trade.svg"></button>

     </div>
   </div>
   <div class="card">
     <span class="close"></span>
     <span class="arrow"></span>
     <article>
       <h2>{{ @$data[4]->department->name }}</h2>
       <div class="title">{{ $data[4]->name }}</div>
       <div class="pic"><img src="Doctor_img\d6.jpeg"></div>

       <div class="desc">Morgan has collected ants since they were six years old and now has many dozen ants but none in their pants.</div>

     </article>
     <div class="actions">
       <button class="btn"><span>like</span><img class="icon" src="https://rafaelavlucas.github.io/assets/icons/misc/heart.svg"></button>
       <button class="btn"><span>trade</span><img class="icon" src="https://rafaelavlucas.github.io/assets/icons/misc/trade.svg"></button>

     </div>
   </div>
   <div class="card">
    <span class="close"></span>
    <span class="arrow"></span>
    <article>
      <h2>{{ @$data[3]->department->name }}</h2>
      <div class="title">{{ $data[3]->name }}</div>
      <div class="pic"><img src="Doctor_img\d2.jpeg"></div>

      <div class="desc">Morgan has collected ants since they were six years old and now has many dozen ants but none in their pants.</div>

    </article>
    <div class="actions">
      <button class="btn"><span>like</span><img class="icon" src="https://rafaelavlucas.github.io/assets/icons/misc/heart.svg"></button>
      <button class="btn"><span>trade</span><img class="icon" src="https://rafaelavlucas.github.io/assets/icons/misc/trade.svg"></button>

    </div>
  </div>
   <div class="card">
     <span class="close"></span>
     <span class="arrow"></span>
     <article>
       <h2>{{ @$data[1]->department->name }}</h2>
       <div class="title">{{ $data[1]->name }}</div>
       <div class="pic"><img src="Doctor_img\d3.jpeg"></div>

       <div class="desc">Adrian has collected flies since they were six years old and now has many dozen flies but none in their pants.</div>

     </article>
     <div class="actions">
       <button class="btn"><span>like</span><img class="icon" src="https://rafaelavlucas.github.io/assets/icons/misc/heart.svg"></button>
       <button class="btn"><span>trade</span><img class="icon" src="https://rafaelavlucas.github.io/assets/icons/misc/trade.svg"></button>

     </div>
   </div>
 </div>
 {{-- teem section --}}

 <div id="Meet our Doctor" class="mt-48">
    <div class="bg-white py-24 sm:py-32">
        <div class="mx-auto grid max-w-7xl gap-x-8 gap-y-20 px-6 lg:px-8 xl:grid-cols-3">
            <div class="max-w-2xl">
                <h2 class="text-3xl font-bold tracking-tight text-orange-500 sm:text-4xl">Meet our Doctor</h2>
                <p class="mt-6 text-lg leading-8 text-gray-600">A medical team, also known as a clinical care team,
                    is a group of health professionals that work together to better serve their patients. A medical
                    team .</p>
            </div>

            <ul role="list" class="grid gap-x-8 gap-y-12 sm:grid-cols-2 sm:gap-y-16 xl:col-span-2">
                <li>
                    <div class="flex items-center gap-x-6">
                        <img class="h-16 w-16 rounded-full" src="/Doctor_img/d1.jpeg" alt="">
                        <div>
                            <h3 class="text-base font-semibold leading-7 tracking-tight text-gray-900">yadav
                            </h3>
                            <p class="text-sm font-semibold leading-6 text-orange-500">mbbs</p>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="flex items-center gap-x-6">
                        <img class="h-16 w-16 rounded-full" src="/Doctor_img/d2.jpeg" alt="">
                        <div>
                            <h3 class="text-base font-semibold leading-7 tracking-tight text-gray-900">
                                mishara</h3>
                            <p class="text-sm font-semibold leading-6 text-orange-500">
                           Orthopedik </p>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="flex items-center gap-x-6">
                        <img class="h-16 w-16 rounded-full" src="/Doctor_img/d3.jpeg" alt="">
                        <div>
                            <h3 class="text-base font-semibold leading-7 tracking-tight text-gray-900">Dr joi</h3>
                            <p class="text-sm font-semibold leading-6 text-orange-500">Radiology</p>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="flex items-center gap-x-6">
                        <img class="h-16 w-16 rounded-full" src="/Doctor_img/d4.jpeg" alt="">
                        <div>
                            <h3 class="text-base font-semibold leading-7 tracking-tight text-gray-900">Dr k.v sharma
                            </h3>
                            <p class="text-sm font-semibold leading-6 text-orange-500">Urology</p>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="flex items-center gap-x-6">
                        <img class="h-16 w-16 rounded-full" src="/Doctor_img/d5.jpeg" alt="">
                        <div>
                            <h3 class="text-base font-semibold leading-7 tracking-tight text-gray-900">Dr krupa</h3>
                            <p class="text-sm font-semibold leading-6 text-orange-500">Pediatrics</p>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="flex items-center gap-x-6">
                        <img class="h-16 w-16 rounded-full" src="/Doctor_img/d6.jpeg" alt="">
                        <div>
                            <h3 class="text-base font-semibold leading-7 tracking-tight text-gray-900">Dr kunal</h3>
                            <p class="text-sm font-semibold leading-6 text-orange-500">phisayotherpi</p>
                        </div>
                    </div>
                </li>
                <!-- More people... -->
            </ul>
        </div>
    </div>
</div>


 <script>
    var closeBtn = document.querySelectorAll(".close"),
    card = document.querySelectorAll(".card"),
    btnActions = document.querySelectorAll(".btn");

closeBtn.forEach(function(el) {
  el.addEventListener("click", closeCard);
});

card.forEach(function(el) {
  el.addEventListener("click", openCard);
});

btnActions.forEach(function(el) {
  el.addEventListener("click", clickBtn);
});

function closeCard(event) {
  event.stopPropagation();
  event.target.closest(".card").classList.add("closed");

    }

function openCard(event) {
  if (event.currentTarget.classList.contains("closed")) {
        event.currentTarget.classList.remove("closed");
  }
}

function clickBtn(event) {
  if (event.currentTarget.classList.contains("clicked")) {
    event.currentTarget.classList.remove("clicked");
  } else {
    event.currentTarget.classList.add("clicked");
  }
}

 </script>
    {{-- --------------------------------------------------footer-------------------------------------------------- --}}
    @include('layouts.footer')
    {{-- ---------------------------------------------------end footer------------------------------------------------- --}}
</body>

</html>
