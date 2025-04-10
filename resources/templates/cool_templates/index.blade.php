<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>AI Sales</title>
    <meta name="description" content="" />
    <link rel="shortcut icon" href="{{ Vite::asset('templates/cool_templates/assets/logo.png') }}" type="image/x-icon" />

    <!-- Open Graph / Facebook -->
    <meta property="og:title" content="Title of the project" />
    <meta property="og:description" content="" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="https://github.com/PaulleDemon" />
    <!--Replace with the current website url-->
    <meta property="og:image" content="" />

    <!-- <link rel="stylesheet" href="../../tailwind-css/tailwind-runtime.css"> -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="{{ Vite::asset('resources/templates/cool_templates/css/tailwind-build.css') }}" />
    <link rel="stylesheet" href="{{ Vite::asset('resources/templates/cool_templates/css/index.css') }}" />

    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.11.3/font/bootstrap-icons.min.css"
        integrity="sha512-dPXYcDub/aeb08c63jRq/k6GaKccl256JQy/AnOq7CAnEZ9FzSL9wSbcZkMp4R26vBsMLFYH4kQ67/bbV8XaCQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body class="tw-flex tw-min-h-[100vh] tw-flex-col tw-bg-[#fff]">
    <header
        class="tw-absolute tw-top-0 tw-z-20 tw-flex tw-h-[60px] tw-w-full tw-bg-opacity-0
                    tw-px-[5%] max-lg:tw-mr-auto max-lg:tw-px-4 lg:tw-justify-around">
        <a class="tw-h-[50px] tw-w-[50px] tw-p-[4px]" href="">

            <img src="{{ Vite::asset('resources/templates/cool_templates/assets/logo.png') }}" alt="logo"
                class="tw-object tw-h-full tw-w-full" />
        </a>
        <div class="collapsible-header animated-collapse max-lg:tw-shadow-md" id="collapsed-header-items">
            <div
                class="tw-flex tw-h-full tw-w-max tw-gap-5 tw-text-base tw-text-black
                            max-lg:tw-mt-[30px] max-lg:tw-flex-col max-lg:tw-place-items-end
                            max-lg:tw-gap-5 lg:tw-mx-auto lg:tw-place-items-center">
                <a class="header-links" href=""> About us </a>
                <a class="header-links" href="#pricing"> Pricing </a>
                <a class="header-links" href=""> Features </a>
                <a class="header-links" href=""> Blog </a>
                <a class="header-links" href=""> Contact us </a>
            </div>
            <div
                class="tw-mx-4 tw-flex tw-place-items-center tw-gap-[20px] tw-text-base
                            max-md:tw-w-full max-md:tw-flex-col max-md:tw-place-content-center">
                <a href="{{ route('custom.login') }}"
                    class="px-5 py-2 cursor-pointer bg-blue-200 hover:bg-blue-300 rounded-2xl border">
                    <span>Login</span>
                </a>
            </div>
        </div>
        <button
            class="bi bi-list tw-absolute tw-right-3 tw-top-3 tw-z-50 tw-text-3xl
                        tw-text-black lg:tw-hidden"
            onclick="toggleHeader()" aria-label="menu" id="collapse-btn"></button>
    </header>

    <section
        class="tw-relative tw-flex tw-min-h-[100vh] tw-w-full tw-max-w-[100vw] tw-flex-col
                    tw-overflow-hidden max-lg:tw-p-4 max-md:tw-mt-[50px]">
        <div
            class="tw-flex tw-h-full tw-min-h-[100vh] tw-w-full tw-place-content-center
                        tw-gap-6 tw-p-[5%] max-xl:tw-place-items-center max-lg:tw-flex-col">
            <div class="tw-flex tw-flex-col tw-place-content-center">
                <div
                    class="tw-flex tw-flex-wrap tw-text-6xl tw-font-semibold tw-uppercase
                                tw-leading-[80px] max-lg:tw-text-4xl max-md:tw-leading-snug">
                    <span class="reveal-hero-text">
                        Negotiation better
                    </span>
                    <br />
                    <span class="reveal-hero-text"> with AI. </span>
                </div>
                <div
                    class="reveal-hero-text tw-mt-2 tw-max-w-[450px] tw-p-2
                                tw-text-justify max-lg:tw-max-w-full">
                    Lorem ipsum dolor sit amet consectetur, adipisicing
                    elit. Error adipisci corrupti accusamus reiciendis
                    similique assumenda nostrum fuga dicta vitae ipsum.
                </div>

                <div
                    class="reveal-hero-text tw-mt-4 tw-flex tw-place-items-center tw-gap-4
                                tw-overflow-hidden tw-p-2">
                    <a class="tw-h-[50px] tw-max-w-[150px]" href="">
                        <img src="{{ Vite::asset('resources/templates/cool_templates/assets/images/brand-logos/app-store-badge.png') }}"
                            alt="app store" class="tw-h-full tw-w-full" srcset="" />
                    </a>
                    <a class="tw-h-[50px] tw-max-w-[150px]" href="">
                        <img src="{{ Vite::asset('resources/templates/cool_templates/assets/images/brand-logos/google-play-badge.png') }}"
                            alt="app store" class="tw-h-full tw-w-full" srcset="" />
                    </a>
                </div>
            </div>

            <div
                class="tw-flex tw-w-full tw-max-w-[50%] tw-place-content-center tw-place-items-center
                            tw-overflow-hidden max-lg:tw-max-w-[unset]">
                <div
                    class="tw-relative tw-flex tw-max-h-[580px] tw-min-h-[450px] tw-min-w-[350px]
                            tw-max-w-[650px] tw-overflow-hidden max-lg:tw-h-fit max-lg:tw-max-h-[320px]
                            max-lg:tw-min-h-[180px] max-lg:tw-w-[320px] max-lg:tw-min-w-[320px]">
                    <img src="{{ Vite::asset('resources/templates/cool_templates/assets/images/home/iphone.png') }}"
                        alt="app" class="reveal-hero-img tw-z-[1] tw-h-full tw-w-full tw-object-contain" />

                    <div class="tw-absolute tw-bottom-0 tw-left-1/2 tw-h-[80%] tw-w-[80%]
                                    tw--translate-x-1/2 tw-rounded-full tw-bg-secondary"
                        id="hero-img-bg"></div>
                </div>
            </div>
        </div>
    </section>
    <section
        class="tw-relative tw-flex tw-w-full tw-max-w-[100vw] tw-flex-col tw-place-content-center
                    tw-place-items-center tw-overflow-hidden tw-p-6">
        <div
            class="reveal-up tw-flex tw-min-h-[300px] tw-w-full tw-max-w-[80%] tw-place-items-center
                        tw-justify-around tw-gap-8 tw-rounded-xl tw-bg-[#e7e6e685] tw-p-4 max-lg:tw-max-w-full max-md:tw-flex-col">
            <div class="tw-flex tw-flex-col tw-place-items-center tw-gap-4">
                <div class="tw-flex tw-text-xl tw-text-orange-500">
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-half"></i>
                </div>
                <span class="tw-text-lg">
                    <b>4.2/5</b>
                    <span>from 18k reviews</span>
                </span>
                <img src="./assets/images/brand-logos/capterra.svg" alt="capterra" class="tw-h-[80px] tw-w-[250px]" />
            </div>
            <div class="tw-flex tw-flex-col tw-place-items-center tw-gap-4">
                <div class="tw-flex tw-text-xl tw-text-orange-500">
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-half"></i>
                </div>
                <span class="tw-text-lg">
                    <b>4.6/5</b>
                    <span>from 20k reviews</span>
                </span>
                <img src="./assets/images/brand-logos/G2.svg" alt="G2" class="tw-h-[80px]" />
            </div>
            <div class="tw-flex tw-flex-col tw-place-items-center tw-gap-4">
                <div class="tw-flex tw-text-xl tw-text-orange-500">
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-half"></i>
                </div>
                <span class="tw-text-lg">
                    <b>4.5/5</b>
                    <span>from 6k reviews</span>
                </span>
                <img src="./assets/images/brand-logos/trust-pilot.svg" alt="capterra"
                    class="tw-h-[80px] tw-w-[250px]" />
            </div>
        </div>
    </section>

    <section class="tw-relative tw-flex tw-w-full tw-max-w-[100vw] tw-flex-col tw-overflow-hidden tw-p-6">
        <div
            class="reveal-up tw-flex tw-min-h-[60vh] tw-place-content-center tw-place-items-center
                        tw-gap-[10%] max-lg:tw-flex-col max-lg:tw-gap-10">
            <div class="tw-flex">
                <div class="tw-h-[450px] tw-w-[300px]">
                    <img src="./assets/images/home/2.png" alt="product1"
                        class="tw-h-full tw-w-full tw-object-contain" />
                </div>
            </div>
            <div class="tw-mt-6 tw-flex tw-max-w-[450px] tw-flex-col tw-gap-4">
                <h3 class="tw-text-4xl tw-font-medium">Highly secure</h3>

                <div class="tw-mt-4 tw-flex tw-flex-col tw-gap-3">
                    <h4 class="tw-text-xl tw-font-medium">
                        <i class="bi bi-check-all !tw-text-2xl"></i>
                        DDOS protection
                    </h4>
                    <span class="tw-text-xl">
                        Lorem ipsum dolor sit amet, consectetur adipisicing
                        elit. Reiciendis commodi temporibus at? Aspernatur,
                        a necessitatibus?
                    </span>
                </div>
                <div class="tw-mt-4 tw-flex tw-flex-col tw-gap-3">
                    <h4 class="tw-text-xl tw-font-medium">
                        <i class="bi bi-check-all !tw-text-2xl"></i>
                        CSRF protection
                    </h4>
                    <span class="tw-text-xl">
                        Lorem ipsum dolor sit amet, consectetur adipisicing
                        elit. Reiciendis commodi temporibus at? Aspernatur,
                        a necessitatibus?
                    </span>
                </div>
            </div>
        </div>
    </section>

    <section class="tw-relative tw-flex tw-w-full tw-max-w-[100vw] tw-flex-col tw-overflow-hidden tw-p-6">
        <div
            class="reveal-up tw-flex tw-min-h-[60vh] tw-place-content-center tw-place-items-center
                        tw-gap-[10%] max-lg:tw-flex-col max-lg:tw-gap-10">
            <div class="tw-mt-6 tw-flex tw-max-w-[450px] tw-flex-col tw-gap-4">
                <h3 class="tw-text-4xl tw-font-medium">Lightning speed</h3>

                <div class="tw-mt-4 tw-flex tw-flex-col tw-gap-3">
                    <h4 class="tw-text-xl tw-font-medium">
                        <i class="bi bi-check-all !tw-text-2xl"></i>
                        10x Speed
                    </h4>
                    <span class="tw-text-xl">
                        Lorem ipsum dolor sit amet, consectetur adipisicing
                        elit. Reiciendis commodi temporibus at? Aspernatur,
                        a necessitatibus?
                    </span>
                </div>
                <div class="tw-mt-4 tw-flex tw-flex-col tw-gap-3">
                    <h4 class="tw-text-xl tw-font-medium">
                        <i class="bi bi-check-all !tw-text-2xl"></i>
                        CSRF protection
                    </h4>
                    <span class="tw-text-xl">
                        Lorem ipsum dolor sit amet, consectetur adipisicing
                        elit. Reiciendis commodi temporibus at? Aspernatur,
                        a necessitatibus?
                    </span>
                </div>
            </div>

            <div class="tw-flex">
                <div class="tw-h-[450px] tw-w-[300px]">
                    <img src="./assets/images/home/4.png" alt="product1"
                        class="tw-h-full tw-w-full tw-object-contain" />
                </div>
            </div>
        </div>
    </section>

    <section
        class="tw-relative tw-flex tw-w-full tw-max-w-[100vw] tw-flex-col tw-place-content-center
                    tw-place-items-center tw-overflow-hidden tw-p-6">
        <div
            class="reveal-up tw-flex tw-min-h-[300px] tw-w-full tw-place-content-center
                        tw-place-items-center tw-gap-8 tw-rounded-xl tw-p-4 max-lg:tw-flex-col">
            <div
                class="tw-flex tw-h-[450px] tw-w-[350px] tw-flex-col tw-gap-[5%]
                            tw-rounded-xl tw-bg-[#FFD5CA] tw-p-8">
                <div
                    class="tw-flex tw-h-[80px] tw-w-[80px] tw-place-content-center tw-items-center tw-rounded-full tw-bg-white">
                    <i class="material-icons md-40">bolt</i>
                </div>

                <h3 class="tw-mt-5 tw-text-3xl tw-font-medium">
                    Lightning fast
                </h3>
                <p class="tw-text-lg">
                    Lorem ipsum dolor, sit amet consectetur adipisicing
                    elit. Voluptates tenetur officiis temporibus natus
                    ratione nam officia tempore nostrum esse tempora.
                </p>
            </div>

            <div
                class="tw-flex tw-h-[450px] tw-w-[350px] tw-flex-col tw-gap-[5%] tw-rounded-xl
                         tw-bg-primary tw-p-8">
                <div
                    class="tw-flex tw-h-[80px] tw-w-[80px] tw-place-content-center tw-items-center
                                 tw-rounded-full tw-bg-white">
                    <i class="material-icons md-40">forum</i>
                </div>

                <h3 class="tw-mt-5 tw-text-3xl tw-font-medium">
                    Negotiate better
                </h3>
                <p class="tw-text-lg">
                    Lorem ipsum dolor, sit amet consectetur adipisicing
                    elit. Voluptates tenetur officiis temporibus natus
                    ratione nam officia tempore nostrum esse tempora.
                </p>
            </div>
            <div
                class="tw-flex tw-h-[450px] tw-w-[350px] tw-flex-col tw-gap-[5%] tw-rounded-xl
                            tw-bg-[#FFEB99] tw-p-8">
                <div
                    class="tw-flex tw-h-[80px] tw-w-[80px] tw-place-content-center tw-items-center
                                tw-rounded-full tw-bg-white">
                    <i class="material-icons md-40">shield</i>
                </div>

                <h3 class="tw-mt-5 tw-text-3xl tw-font-medium">Secure</h3>
                <p class="tw-text-lg">
                    Lorem ipsum dolor, sit amet consectetur adipisicing
                    elit. Voluptates tenetur officiis temporibus natus
                    ratione nam officia tempore nostrum esse tempora.
                </p>
            </div>
        </div>
    </section>

    <section
        class="tw-mt-5 tw-flex tw-min-h-[60vh] tw-w-full tw-flex-col tw-place-content-center
                    tw-place-items-center tw-bg-black tw-p-[2%] tw-text-white max-lg:tw-min-h-[40vh]">
        <h3 class="reveal-up tw-text-5xl tw-font-medium max-md:tw-text-2xl">
            Clients love us
        </h3>
        <!-- Testimonials -->
        <div class="reveal-up tw-max-w-[750px] max-md:tw-max-w-[100vw]">
            <div class="swiper tw-mt-8 tw-flex tw-flex-col tw-gap-10 tw-space-y-8">
                <div class="swiper-wrapper">
                    <div class="swiper-slide tw-flex tw-place-content-center">
                        <div
                            class="tw-flex tw-h-fit tw-max-w-[750px] tw-place-content-center tw-place-items-center tw-gap-10 tw-rounded-lg tw-p-4 tw-shadow-lg">
                            <div class="tw-flex tw-place-items-center">
                                <div
                                    class="tw-h-[150px] tw-w-[150px] tw-overflow-hidden tw-rounded-full max-lg:tw-h-[80px] max-lg:tw-w-[80px]">
                                    <img src="./assets/images/people/women.jpg"
                                        class="tw-h-full tw-w-full tw-object-cover" alt="women" />
                                </div>
                            </div>
                            <div class="tw-flex tw-max-w-[450px] tw-flex-col tw-gap-4">
                                <p class="tw-mt-4 tw-italic tw-text-gray-200">
                                    Lorem ipsum dolor sit amet consectetur
                                    adipisicing elit. Voluptate, sequi sunt
                                    velit aut omnis nulla ut, autem corrupti
                                    nemo optio ipsam amet ducimus illum?
                                    Repellendus itaque autem alias eos quis.
                                </p>
                                <b>- Ferman</b>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide tw-flex tw-place-content-center">
                        <div
                            class="tw-flex tw-h-fit tw-max-w-[750px] tw-place-content-center
                                        tw-place-items-center tw-gap-10 tw-rounded-lg tw-p-4 tw-shadow-lg">
                            <div class="tw-flex tw-place-items-center">
                                <div
                                    class="tw-h-[150px] tw-w-[150px] tw-overflow-hidden
                                                tw-rounded-full max-lg:tw-h-[80px] max-lg:tw-w-[80px]">
                                    <img src="./assets/images/people/women.jpg"
                                        class="tw-h-full tw-w-full tw-object-cover" alt="women" />
                                </div>
                            </div>
                            <div class="tw-flex tw-max-w-[450px] tw-flex-col tw-gap-4">
                                <p class="tw-mt-4 tw-italic tw-text-gray-200">
                                    Lorem ipsum dolor sit amet consectetur
                                    adipisicing elit. Voluptate, sequi sunt
                                    velit aut omnis nulla ut, autem corrupti
                                    nemo optio ipsam amet ducimus illum?
                                    Repellendus itaque autem alias eos quis.
                                </p>
                                <b>- Ferman</b>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="pagination-container tw-flex tw-place-content-center"></div>

                <div class="tw-flex tw-place-content-center tw-gap-6">
                    <div
                        class="testmonial-prev tw-flex tw-h-[40px] tw-w-[40px] tw-place-content-center
                                    tw-place-items-center tw-rounded-full tw-border-2 tw-border-solid
                                    tw-border-gray-300 tw-text-2xl">
                        <i class="bi bi-arrow-left"></i>
                    </div>
                    <div
                        class="testmonial-next tw-flex tw-h-[40px] tw-w-[40px] tw-place-content-center
                                    tw-place-items-center tw-rounded-full tw-border-2 tw-border-solid
                                    tw-border-gray-300 tw-text-2xl">
                        <i class="bi bi-arrow-right"></i>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section
        class="tw-relative tw-flex tw-min-h-[80vh] tw-w-full tw-max-w-[100vw] tw-flex-col tw-place-content-center
                    tw-place-items-center tw-overflow-hidden tw-p-6"
        id="">
        <div class="tw-mt-8 tw-flex tw-flex-col tw-place-items-center tw-gap-5">
            <div class="reveal-up tw-mt-5 tw-flex tw-flex-col tw-gap-3 tw-text-center">
                <h2 class="tw-text-4xl tw-font-semibold">
                    Take your negotiation to next level
                </h2>
            </div>
            <div
                class="tw-mt-6 tw-flex tw-max-w-[60%] tw-flex-wrap tw-place-content-center tw-gap-2 max-lg:tw-flex-col">
                <div class="reveal-up tw-flex tw-h-[150px] tw-w-[350px] tw-flex-col tw-gap-2 tw-p-4">
                    <!-- <img src="./assets/images/home/sample.jpg"
                                alt="feature1"> -->
                    <div class="tw-flex tw-gap-1">
                        <i class="bi bi-boombox-fill tw-text-2xl"></i>
                        <h3 class="tw-text-2xl tw-font-semibold">
                            Feature 1
                        </h3>
                    </div>
                    <div class="tw-text-[#595959]">
                        Lorem ipsum dolor sit amet, consectetur adipisicing
                        elit.
                    </div>
                </div>
                <div class="reveal-up tw-flex tw-h-[150px] tw-w-[350px] tw-flex-col tw-gap-2 tw-p-4">
                    <!-- <img src="./assets/images/home/sample.jpg"
                                alt="feature1"> -->
                    <div class="tw-flex tw-gap-1">
                        <i class="bi bi-0-circle-fill tw-text-2xl"></i>
                        <h3 class="tw-text-2xl tw-font-semibold">
                            Feature 2
                        </h3>
                    </div>
                    <div class="tw-text-[#595959]">
                        Lorem ipsum dolor sit amet, consectetur adipisicing
                        elit.
                    </div>
                </div>
                <div class="reveal-up tw-flex tw-h-[150px] tw-w-[350px] tw-flex-col tw-gap-2 tw-p-4">
                    <!-- <img src="./assets/images/home/sample.jpg"
                                alt="feature1"> -->
                    <div class="tw-flex tw-gap-1">
                        <i class="bi bi-0-square-fill tw-text-2xl"></i>
                        <h3 class="tw-text-2xl tw-font-semibold">
                            Feature 3
                        </h3>
                    </div>
                    <div class="tw-text-[#595959]">
                        Lorem ipsum dolor sit amet, consectetur adipisicing
                        elit.
                    </div>
                </div>
                <div class="reveal-up tw-flex tw-h-[150px] tw-w-[350px] tw-flex-col tw-gap-2 tw-p-4">
                    <!-- <img src="./assets/images/home/sample.jpg"
                                alt="feature1"> -->
                    <div class="tw-flex tw-gap-1">
                        <i class="bi bi-airplane-engines-fill tw-text-2xl"></i>
                        <h3 class="tw-text-2xl tw-font-semibold">
                            Feature 4
                        </h3>
                    </div>
                    <div class="tw-text-[#595959]">
                        Lorem ipsum dolor sit amet, consectetur adipisicing
                        elit.
                    </div>
                </div>
                <div class="reveal-up tw-flex tw-h-[150px] tw-w-[350px] tw-flex-col tw-gap-2 tw-p-4">
                    <!-- <img src="./assets/images/home/sample.jpg"
                                alt="feature1"> -->
                    <div class="tw-flex tw-gap-1">
                        <i class="bi bi-cake-fill tw-text-2xl"></i>
                        <h3 class="tw-text-2xl tw-font-semibold">
                            Feature 5
                        </h3>
                    </div>
                    <div class="tw-text-[#595959]">
                        Lorem ipsum dolor sit amet, consectetur adipisicing
                        elit.
                    </div>
                </div>
                <div class="reveal-up tw-flex tw-h-[150px] tw-w-[350px] tw-flex-col tw-gap-2 tw-p-4">
                    <!-- <img src="./assets/images/home/sample.jpg"
                                alt="feature1"> -->
                    <div class="tw-flex tw-gap-1">
                        <i class="bi bi-shield-fill tw-text-2xl"></i>
                        <h3 class="tw-text-2xl tw-font-semibold">
                            Feature 6
                        </h3>
                    </div>
                    <div class="tw-text-[#595959]">
                        Lorem ipsum dolor sit amet, consectetur adipisicing
                        elit.
                    </div>
                </div>
            </div>

            <a href="" aria-label="download"
                class="reveal-up tw-flex tw-h-[40px] tw-place-items-center tw-gap-2 tw-rounded-full
                             tw-bg-black tw-p-1 tw-pl-4 tw-text-white">
                <span>Download</span>
                <div
                    class="tw-flex tw-h-[30px] tw-w-[30px] tw-place-content-center tw-place-items-center
                                tw-rounded-full tw-bg-primary tw-font-semibold tw-text-black">
                    <i class="bi bi-download"></i>
                </div>
            </a>
        </div>
    </section>

    <section class="tw-mt-5 tw-flex tw-w-full tw-flex-col tw-place-items-center tw-p-[2%]">
        <h3 class="reveal-up tw-text-4xl tw-font-medium max-md:tw-text-2xl">
            Read our articles for more insights
        </h3>
        <!-- pricing -->
        <div class="reveal-up tw-mt-10 tw-flex tw-flex-wrap tw-place-content-center tw-gap-10 max-lg:tw-flex-col">
            <a href=""
                class="tw-flex tw-h-[400px] tw-w-[350px] tw-flex-col tw-gap-2 tw-overflow-clip
                            tw-rounded-lg tw-bg-[#edecec79] tw-p-4 tw-shadow-xl max-lg:tw-w-[300px]">
                <div class="tw-h-[200px] tw-w-full tw-overflow-hidden tw-rounded-md">
                    <img src="./assets/images/home/sample.jpg" alt="article image"
                        class="tw-h-full tw-w-full tw-object-cover" srcset="" />
                </div>
                <h3 class="tw-text-2xl tw-font-semibold max-md:tw-text-xl">
                    Article 1
                </h3>
                <p class="tw-mt-2 tw-text-gray-600">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Ab, explicabo!
                </p>
                <span>
                    <span>Learn more</span>
                    <i class="bi bi-arrow-right"></i>
                </span>
            </a>
            <a href=""
                class="tw-flex tw-h-[400px] tw-w-[350px] tw-flex-col tw-gap-2 tw-overflow-clip
                            tw-rounded-lg tw-bg-[#edecec79] tw-p-4 tw-shadow-xl max-lg:tw-w-[300px]">
                <div class="tw-h-[200px] tw-w-full tw-overflow-hidden tw-rounded-md">
                    <img src="./assets/images/home/sample.jpg" alt="article image"
                        class="tw-h-full tw-w-full tw-object-cover" srcset="" />
                </div>
                <h3 class="tw-text-2xl tw-font-semibold max-md:tw-text-xl">
                    Article 2
                </h3>
                <p class="tw-mt-2 tw-text-gray-600">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Ab, explicabo!
                </p>
                <span>
                    <span>Learn more</span>
                    <i class="bi bi-arrow-right"></i>
                </span>
            </a>
            <a href=""
                class="tw-flex tw-h-[400px] tw-w-[350px] tw-flex-col tw-gap-2 tw-overflow-clip
                            tw-rounded-lg tw-bg-[#edecec79] tw-p-4 tw-shadow-xl max-lg:tw-w-[300px]">
                <div class="tw-h-[200px] tw-w-full tw-overflow-hidden tw-rounded-md">
                    <img src="./assets/images/home/sample.jpg" alt="article image"
                        class="tw-h-full tw-w-full tw-object-cover" srcset="" />
                </div>
                <h3 class="tw-text-2xl tw-font-semibold max-md:tw-text-xl">
                    Article 3
                </h3>
                <p class="tw-mt-2 tw-text-gray-600">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Ab, explicabo!
                </p>
                <span>
                    <span>Learn more</span>
                    <i class="bi bi-arrow-right"></i>
                </span>
            </a>
        </div>
    </section>

    <section
        class="tw-flex tw-w-full tw-flex-col tw-place-content-center tw-place-items-center tw-gap-[10%]
                    tw-p-[5%] tw-px-[10%]">
        <div class="tw-flex tw-w-full tw-flex-col tw-place-content-center tw-place-items-center tw-gap-3">
            <h2 class="tw-text-xl max-md:tw-text-lg">
                Keep yourself updated
            </h2>

            <div class="tw-flex tw-h-[60px] tw-place-items-center tw-gap-2 tw-overflow-hidden tw-p-2">
                <input type="email" class="input tw-h-full tw-w-full tw-p-2 tw-outline-none" placeholder="email" />
                <a class="btn tw-transition-colors tw-duration-[0.3s]" href="">
                    Signup
                </a>
            </div>
        </div>
    </section>

    <footer
        class="tw-mt-auto tw-flex tw-w-full tw-place-content-around tw-gap-3 tw-p-[5%] tw-px-[10%]
                    tw-text-black max-md:tw-flex-col">
        <div
            class="tw-flex tw-h-full tw-w-[250px] tw-flex-col tw-place-items-center tw-gap-6
                        max-md:tw-w-full">
            <img src="./assets/logo.png" alt="logo" srcset="" class="tw-max-w-[120px]" />
            <div>
                2 Lord Edward St,
                <br />
                D02 P634,
                <br />
                United Kingdom
            </div>
            <div class="tw-mt-3 tw-text-lg tw-font-semibold">Follow us</div>
            <div class="tw-flex tw-gap-4 tw-text-2xl">
                <a href="" aria-label="Facebook">
                    <i class="bi bi-facebook"></i>
                </a>
                <a href="https://twitter.com/@pauls_freeman" aria-label="Twitter">
                    <i class="bi bi-twitter"></i>
                </a>
                <a href="https://instagram.com/" class="tw-h-[40px] tw-w-[40px]" aria-label="Instagram">
                    <i class="bi bi-instagram"></i>
                </a>
            </div>
        </div>

        <div class="tw-flex tw-h-full tw-w-[250px] tw-flex-col tw-gap-4">
            <h2 class="tw-text-3xl max-md:tw-text-xl">Company</h2>
            <div class="tw-flex tw-flex-col tw-gap-3 max-md:tw-text-sm">
                <a href="" class="footer-link">Pricing</a>
                <a href="" class="footer-link">FAQ</a>
                <a href="" class="footer-link">Contact Us</a>
            </div>
        </div>

        <div class="tw-flex tw-h-full tw-w-[250px] tw-flex-col tw-gap-4">
            <h2 class="tw-text-3xl max-md:tw-text-xl">Resources</h2>
            <div class="tw-flex tw-flex-col tw-gap-3 max-md:tw-text-sm">
                <a href="" class="footer-link">About us</a>
                <a href="" class="footer-link">FAQ</a>
                <a href="" class="footer-link">Contact Us</a>
                <a href="" class="footer-link">Blogs</a>
                <a href="" class="footer-link">Privacy policy</a>
            </div>
        </div>
    </footer>
</body>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.0/gsap.min.js"
    integrity="sha512-B1lby8cGcAUU3GR+Fd809/ZxgHbfwJMp0jLTVfHiArTuUt++VqSlJpaJvhNtRf3NERaxDNmmxkdx2o+aHd4bvw=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.0/ScrollTrigger.min.js"
    integrity="sha512-AY2+JxnBETJ0wcXnLPCcZJIJx0eimyhz3OJ55k2Jx4RtYC+XdIi2VtJQ+tP3BaTst4otlGG1TtPJ9fKrAUnRdQ=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script src="{{ Vite::asset('resources/templates/cool_templates/index.js') }}"></script>

<style>
    .swiper-pagination-bullet {
        width: 10px;
        height: 10px;
        text-align: center;
        /* font-size: 12px; */
        opacity: 1;
        background: #f7f7f7fa;
        left: auto;
    }

    .swiper-pagination-bullet:hover {
        color: #000;
        opacity: 1;
        background: #ede0e0bd;
    }

    .swiper-pagination-bullet-active {
        background: #f39696 !important;
    }

    .swiper {
        padding: 10px !important;
    }
</style>

<script>
    const swiper = new Swiper('.swiper', {
        // Optional parameters
        direction: 'horizontal',
        loop: true,
        centeredSlides: true,

        // If we need pagination
        pagination: {
            el: '.pagination-container',
            clickable: true,
            renderBullet: function(index, className) {
                return `<span class="${className}"></span>`
            },
        },
        // Navigation arrows
        navigation: {
            nextEl: '.testmonial-next',
            prevEl: '.testmonial-prev',
        },
    })
</script>

</html>
