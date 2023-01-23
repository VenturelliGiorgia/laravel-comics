<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comics</title>
    
    @vite('resources/js/app.js')

</head>
<body>
    <div class="my-bg-primary p-2"></div>

    @include("partials.header")
    
    @yield('content')

    <div class="my-bg-primary">
        <div class="container">
            <div class="p-5 text-white d-flex justify-content-between font-size-14">
                <div>
                    <img class="image-first-banner" src="{{ Vite::asset('resources/img/buy-comics-digital-comics.png') }}" alt="">
                    <span class="font-size-14">DIGITAL COMICS</span>

                </div>
                <div>
                    <img class="image-first-banner" src="{{ Vite::asset('resources/img/buy-comics-merchandise.png') }}" alt="">
                    <span class="font-size-14">DC MERCHANDISE</span>

                </div>
                <div>
                    <img class="image-first-banner" src="{{ Vite::asset('resources/img/buy-comics-subscriptions.png') }}" alt="">
                    <span class="font-size-14">COMIC SHOP LOCATOR</span>

                </div>
                <div>
                    <img class="image-first-banner" src="{{ Vite::asset('resources/img/buy-comics-shop-locator.png') }}" alt="">
                    <span class="font-size-14">COMIC SHOP LOCATOR</span>

                </div>
                <div>
                    <img class="image-first-banner" src="{{ Vite::asset('resources/img/buy-dc-power-visa.svg') }}" alt="">
                    <span class="font-size-14">DC POWER VISA</span>

                </div>
            </div>
        </div>
    </div>

    @include("partials.footer")

    <div class="bg-banner">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center  ">
                <div class="pt-3 pb-3">
                    <button class="my-btn text-white">SIGN-UP NOW!</button>
                </div>
                <div class="d-flex">
                    <div class="align-self-center pe-1">
                        <span class="text-primary">FOLLOW US</span>
                    </div>
                    <div>
                        <img src="{{ Vite::asset('resources/img/footer-facebook.png') }}" alt="Facebook">

                    </div>
                    <div>
                        <img src="{{ Vite::asset('resources/img/footer-twitter.png') }}" alt="Twitter">

                    </div>
                    <div>
                        <img src="{{ Vite::asset('resources/img/footer-youtube.png') }}" alt="YouTube">

                    </div>
                    <div>
                        <img src="{{ Vite::asset('resources/img/footer-pinterest.png') }}" alt="Pinterest">

                    </div>
                    <div>
                        <img src="{{ Vite::asset('resources/img/footer-periscope.png') }}" alt="Periscope">

                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>
