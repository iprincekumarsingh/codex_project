<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
</head>

<body class="   ">
    @include('components.header')
    <section class="relative">
        <div class="container flex flex-col-reverse lg:flex-row items-center gap-12 mt-14 lg:mt-28">
            <div class="flex flex-1 flex-col item-center lg:items-start">

                <h2 class="text-4xl font-bold ">Are you tired of your problem?<div>
                        We can help you with
                    </div>
                    </span>our smart ticketing system</h2>
                </span> </h2>
                <p class="text-lg text-center lg:text-left mb-4 mt-5">Lorem ipsum dolor sit amet consectetur adipisicing
                    elit. Id, quas suscipit commodi
                    amet, consectetur reprehenderit facilis earum laudantium ab iusto, voluptates et labore a.
                    Doloremque officia repellendus quis voluptate molestiae!</p>

                <div class="flex flex-1  lg:items-start item-center gap-6 mt-8">
                    <a class="py-4 px-12 border border-blue-300 rounded-md bg-[#383CC1] text-white text-2xl hover:bg-white
                    hover:text-[#383CC1]
                    " href="">Get support</a>
                    <a class="py-4 px-12 border border-blue-300 rounded-md bg-[white] text-2xl hover:bg-[#EB4D4B] hover:text-white"
                        href="">Get support</a>
                </div>

            </div>
            <div class=" flex justify-center  flex-1 mb-10 md:mb16 lg:mb-0 ">
                <img class="w-5/6 h-5/6 sm:3/4 sm:h-3/4 md:w-full md:h-full" src="{{asset('hero.png')}}" alt="">
            </div>
        </div>
    </section>
</body>

</html>
