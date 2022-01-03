@extends('layouts.guest')

@section('content')
    <!-- Section I -->
    <div class="flex phone:flex-col tablet:flex-row desktop:flex-row h-full bg-black">
        <div class="flex tablet:basis-2/5 desktop:basis-2/5 px-5">
            <div class="flex flex-col w-full">
                <div class="flex flex-row justify-center mb-5">
                    <img src="../assets/vector.svg" />
                </div>
                <div class="flex flex-row justify-center mb-5">
                    <div class="grid grid-cols-3 justify-items-center gap-3">
                        <img src="../assets/F.svg" />
                        <img src="../assets/O.svg" />
                        <img src="../assets/R.svg" />
                        <img src="../assets/Y.svg" />
                        <img src="../assets/O-white.svg" />
                        <img src="../assets/U.svg" />
                    </div>
                </div>
                <div class="flex flex-row justify-center phone:mb-10 desktop:mb-20">
                    <div class="grid grid-cols-2 gap-3">
                        <img src="{{ asset('assets/2.png') }}" />
                        <img src="{{ asset('assets/0.png') }}" />
                        <img src="{{ asset('assets/3.png') }}" />
                        <img src="{{ asset('assets/2-red.png') }}" />
                    </div>
                </div>
            </div>
        </div>
        <div class="flex basis-3/5 px-5 py-5">
            <div class="flex flex-col h-full justify-center custom-w-570 text-center text-white">
                <img src="{{ asset('assets/2032-is-made-for-you.svg') }}" class="mb-10" />
                <h3 class="font-Signika font-bold text-2xl mb-2">On your marks! Get set! Wait for it …</h3>
                <p class="font-Signika text-lg mb-10">Your journey to the 2032 Olympic Games starts here. Register your interest and we’ll notify you when applications open!</p>
                <div class="mb-10">
                    <a href="#register" class="inline-block rounded py-4 px-8 bg-ocean text-white font-Lato font-bold">Register your interest</a>
                </div>
                <div class="flex justify-center">
                    <a href="#next">
                        <img src="{{ asset('assets/v.svg') }}" />
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Section II -->
    <div id="next" class="flex flex-row justify-center">
        <div class="flex flex-col phone:my-10 desktop:my-16 text-center phone:gap-3 desktop:gap-5 phone:p-4 tablet:p-4 desktop:p-5">
            <h2 class="phone:text-3xl desktop:text-5xl font-bold font-Guthen text-ocean">This could be your starting line for the 2032 games in Brisbane</h2>
            <div class="flex phone:flex-col tablet:flex-row desktop:flex-row justify-center phone:gap-3 desktop:gap-5">
                <div class="tablet:basis-2/6 desktop::basis-2/6 text-left phone:py-3 phone:pl-5 phone:pr-5 desktop:pl-10">
                    <p>We’re looking for talented young Queensland athletes with Olympic-sized dreams to register their interest in being part the Queensland Academy of Sport Talent Identification Program. This program is strictly for athletes born between 1999 and 2009 inclusive. Parents, coaches and sporting clubs are also welcome to register athletes on their behalf.</p>
                </div>
                <div class="tablet:basis-2/6 desktop::basis-2/6 text-left phone:py-3 phone:pl-5 phone:pr-5 desktop:pr-10">
                    <div class="rounded-full bg-taliqua circle-23 float-start text-white text-5xl mr-2 flex items-center justify-center -rotate-45 font-bold">!</div><p><span class="font-bold">Warning:</span>&nbsp;Our standards are high (because we want the best) but if you think you have what it takes please pre-register now by filling out the form. Further information will become available in December when we launch our application portal, but by pre-registering you will be automatically prompted when applications become open.</p>
                </div>
            </div>
            <div class="phone:pl-5 phone:pr-5">
                <h3 class="font-bold phone:text-md desktop:text-xl phone:mb-3 phone:px-10">This could be the first step in your Olympic journey.&nbsp;&nbsp;<span class="font-Guthen text-5xl text-red phone:hidden tablet:inherit desktop:inherit">Good Luck!</span></h3>
                <span class="font-Guthen text-5xl text-red tablet:hidden desktop:hidden">Good Luck!</span>
            </div>
        </div>
    </div>

    <!-- Section III -->
    <div id="register" class="flex flex-row justify-center bg-repeat bg-center bg-cover bg-fixed bg-curtis text-white py-20 gap-5">
        <div class="flex phone:flex-col tablet:flex-col desktop:flex-row phone:basis-5/6 desktop:basis-4/6 gap-5">
            <div class="desktop:basis-2/5 desktop:pl-10">
                <h2 class="font-bold font-Guthen text-5.3xl mb-3">
                    Register now!
                </h2>
                <p class="font-Lato">
                    Register your details and create an account. When applications open in December, we’ll let you know.
                </p>
            </div>
            <div class="desktop:basis-3/5 font-Lato desktop:pr-10">
                <form>
                    <div class="flex flex-col gap-2">
                        <div class="flex phone:flex-col tablet:flex-row desktop:flex-row desktop:justify-start desktop:items-center">
                            <label class="font-bold w-32">
                                Full Name
                            </label>
                            <div class="flex-1">
                                <input class="text-gray rounded border-none w-full py-2 px-4" type="text" />
                            </div>
                        </div>

                        <div class="flex phone:flex-col tablet:flex-row desktop:flex-row desktop:justify-start desktop:items-center">
                            <label class="font-bold w-32">
                                Email Address
                            </label>
                            <div class="flex-1">
                                <input class="text-gray rounded border-none w-full py-2 px-4" type="text" />
                            </div>
                        </div>

                        <div class="flex phone:flex-col tablet:flex-row desktop:flex-row desktop:justify-start desktop:items-center mb-3">
                            <label class="font-bold w-32">
                                I am...
                            </label>
                            <div class="flex-1">
                                <select class="text-gray appearance-none rounded border-none w-full py-2 px-4">
                                    <option>Pleasae select</option>
                                    <option>An athlete</option>
                                    <option>A parent or guardian</option>
                                    <option>A coach or teacher</option>
                                    <option>A relevant organisation</option>
                                </select>
                            </div>
                        </div>

                        <div class="flex flex-row justify-start">
                            <div class="phone:hidden tablet:block desktop:block w-32">
                            </div>
                            <div class="flex-1">
                                <div class="flex flex-row w-full">
                                    <div class="flex flex-col">
                                        <a href="#" class="underline pb-2 text-sm hover:text-ocean">Privacy policy</a>
                                        <a href="#" class="underline pb-2 text-sm hover:text-ocean">Term and condition</a>
                                    </div>
                                    <div class="flex-1 text-right">
                                        <button class="rounded bg-black phone:py-3 phone:px-3 desktop:py-3 desktop:px-5 font-bold">Register Now</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Section IV -->
    <div class="bg-no-repeat bg-cover bg-fixed py-20 bg-abby">
        <div class="flex flex-row justify-center">
            <div class="flex flex-col text-center gap-5">
                <h2 class="text-5.4xl font-bold font-Guthen">A snapshot of the program</h2>
                <div class="flex phone:flex-col tablet:flex-row desktop:flex-row justify-center phone:gap-3 desktop:gap-5">
                    <div class="tablet:basis-2/6 desktop::basis-2/6 text-left phone:pl-10 phone:pr-10 desktop:pl-10">
                        <p class="mb-3">The Talent Identification Program has been designed to unearth our next generation of Queensland sporting stars. The aim is to develop and nurture young Queensland athletes who have the potential to be an Olympian in 2032.</p>
                        <p class="mb-3">Athletic ability is the key ingredient in the program. You may be currently competing in a sport that isn’t in the Olympics, but we may identity an Olympic sport that’s perfect for your athletic strengths.</p>
                    </div>
                    <div class="tablet:basis-2/6 desktop::basis-2/6 text-left phone:pl-10 phone:pr-10 desktop:pr-10">
                        <p class="mb-3">Those successful in being selected for the program will receive substantial training, coaching and development support over an extended period of time. More details about the program will become available to athletes who who gain selection.</p>
                        <p class="mb-3">Once applications open in December, a thorough process of vetting and assessments will take place. The diagram below indicates the basic process.</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Swiper -->
        <div class="swiper mySwiper my-15">
            <div class="swiper-wrapper">
                <div class="flex flex-row swiper-slide">
                    <div class="flex flex-col slide-item-wrapper text-center">
                        <span class="font-bold">1</span>
                        <div class="flex flex-col slide-item bg-black text-white items-center justify-center text-md text-center font-bold">
                            Register your interest
                        </div>
                    </div>
                    <div class="flex flex-row justify-center items-center mb-10">
                        <img src="{{ asset('/assets/arrow.svg') }}" />
                    </div>
                </div>
                <div class="flex flex-row swiper-slide">
                    <div class="flex flex-col slide-item-wrapper text-center">
                        <span class="font-bold">2</span>
                        <div class="flex flex-col slide-item bg-white items-center justify-center text-md text-center font-bold">
                            Applications open in December
                        </div>
                    </div>
                    <div class="flex flex-row justify-center items-center mb-10">
                        <img src="{{ asset('/assets/arrow.svg') }}" />
                    </div>
                </div>
                <div class="flex flex-row swiper-slide">
                    <div class="flex flex-col slide-item-wrapper text-center">
                        <span class="font-bold">3</span>
                        <div class="flex flex-col slide-item bg-white items-center justify-center text-md text-center font-bold">
                            Submit your application
                        </div>
                    </div>
                    <div class="flex flex-row justify-center items-center mb-10">
                        <img src="{{ asset('/assets/arrow.svg') }}" />
                    </div>
                </div>
                <div class="flex flex-row swiper-slide">
                    <div class="flex flex-col slide-item-wrapper text-center">
                        <span class="font-bold">4</span>
                        <div class="flex flex-col slide-item bg-taliqua items-center justify-center text-md text-center text-white font-bold">
                            Assessment
                        </div>
                    </div>
                    <div class="flex flex-row justify-center items-center mb-10">
                        <img src="{{ asset('/assets/arrow.svg') }}" />
                    </div>
                </div>
                <div class="flex flex-row swiper-slide">
                    <div class="flex flex-col slide-item-wrapper text-center">
                        <span class="font-bold">5</span>
                        <div class="flex flex-col slide-item bg-white items-center justify-center text-md text-center font-bold">
                            Get invited to our testing days
                        </div>
                    </div>
                    <div class="flex flex-row justify-center items-center mb-10">
                        <img src="{{ asset('/assets/arrow.svg') }}" />
                    </div>
                </div>
                <div class="flex flex-row swiper-slide">
                    <div class="flex flex-col slide-item-wrapper text-center">
                        <span class="font-bold">6</span>
                        <div class="flex flex-col slide-item bg-taliqua items-center justify-center text-md text-center text-white font-bold">
                            Assessment
                        </div>
                    </div>
                    <div class="flex flex-row justify-center items-center mb-10">
                        <img src="{{ asset('/assets/arrow.svg') }}" />
                    </div>
                </div>
                <div class="flex flex-row swiper-slide">
                    <div class="flex flex-col slide-item-wrapper text-center">
                        <span class="font-bold">7</span>
                        <div class="flex flex-col slide-item bg-white items-center justify-center text-md text-center font-bold">
                            Qualify for our combines
                        </div>
                    </div>
                    <div class="flex flex-row justify-center items-center mb-10">
                        <img src="{{ asset('/assets/arrow.svg') }}" />
                    </div>
                </div>
                <div class="flex flex-row swiper-slide">
                    <div class="flex flex-col slide-item-wrapper text-center">
                        <span class="font-bold">8</span>
                        <div class="flex flex-col slide-item bg-taliqua items-center justify-center text-md text-center text-white font-bold">
                            Assessment
                        </div>
                    </div>
                    <div class="flex flex-row justify-center items-center mb-10">
                        <img src="{{ asset('/assets/arrow.svg') }}" />
                    </div>
                </div>
                <div class="flex flex-row swiper-slide">
                    <div class="flex flex-col slide-item-wrapper text-center">
                        <span class="font-bold">9</span>
                        <div class="flex flex-col slide-item bg-white items-center justify-center text-md text-center font-bold">
                            Confirmation and selection into development program
                        </div>
                    </div>
                    <div class="flex flex-row justify-center items-center mb-10">
                        <img src="{{ asset('/assets/arrow.svg') }}" />
                    </div>
                </div>
                <div class="flex flex-row swiper-slide">
                    <div class="flex flex-col slide-item-wrapper text-center">
                        <span class="font-bold">10</span>
                        <div class="flex flex-row slide-item bg-white items-center justify-center text-md text-center font-bold">
                            <img src="{{ asset('/assets/2032.png') }}" />
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-pagination"></div>
        </div>
    </div>

    <!-- Section V -->
    <faq-component id="faq-component"></faq-component>
@endsection

@section('scripts')
    <script>
        function docReady(fn) {
            if (document.readyState === "complete" || document.readyState === "interactive") {
                setTimeout(fn, 1);
            } else {
                document.addEventListener("DOMContentLoaded", fn);
            }
        }

        docReady(function() {
            var swiper = new Swiper('.mySwiper', {
                spaceBetween: 15,
                slidesPerView: 6,
                centeredSlides: true,
                breakpoints: {
                    320: {
                        slidesPerView: 2.5
                    },
                    576: {
                        slidesPerView: 2.5
                    },
                    768: {
                        slidesPerView: 4.5
                    },
                    1200: {
                        slidesPerView: 6
                    }
                },
                autoplay: {
                    delay: 2500,
                    disableOnInteraction: false,
                },
                pagination: {
                    el: '.swiper-pagination',
                    clickable: true,
                },
                navigation: {
                    nextEl: '.swiper-button-next',
                    prevEl: '.swiper-button-prev',
                },
            });
        });

        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();

                document.querySelector(this.getAttribute('href')).scrollIntoView({
                    behavior: 'smooth'
                });
            });
        });
    </script>
@endsection
