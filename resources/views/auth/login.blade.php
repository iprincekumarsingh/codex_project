<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login </title>
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
        integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <section class="h-screen">
        <div class="container px-6 py-12 h-full">
            <div class="flex justify-center items-center flex-wrap h-full g-6 text-gray-800">
                <div class="md:w-8/12 lg:w-6/12 mb-12 md:mb-0">
                    <img src="{{asset('login.png')}}" class="w-full" alt="Phone image" />
                </div>
                <div class="md:w-8/12 lg:w-5/12 lg:ml-20">
                    <form action="#">
                        <!-- Email input -->
                        <div class="mb-6">
                            <input type="text" id="email" name="email"
                                class="form-control block w-full px-4 py-2 text-xl font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                                placeholder="Email address" />
                        </div>

                        <!-- Password input -->
                        <div class="mb-6">
                            <input type="password" id="password"
                                class="form-control block w-full px-4 py-2 text-xl font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                                placeholder="Password" />
                                <div class="flex justify-between items-center mb-6">


                                        <label id="msg" class="form-check-label inline-block text-red-800" for="exampleCheck2">
                                            </label>


                                </div>
                        </div>


                        <div class="flex justify-between items-center mb-6">
                            <div class="form-group form-check visible">

                                <label class="form-check-label inline-block text-gray-800" for="exampleCheck2">
                                    </label>
                            </div>
                            <a href="#!"
                                class="text-blue-600 hover:text-blue-700 focus:text-blue-700 active:text-blue-800 duration-200 transition ease-in-out">Forgot
                                password?</a>
                        </div>

                        <!-- Submit button -->
                        <button type="submit"
                            class="inline-block px-7 py-3 bg-[#FF6666] text-white font-medium text-sm leading-snug uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out w-full"
                            data-mdb-ripple="true" data-mdb-ripple-color="light" id="submit">
                            Sign in
                        </button>

                        <div
                            class="flex items-center my-4 before:flex-1 before:border-t before:border-gray-300 before:mt-0.5 after:flex-1 after:border-t after:border-gray-300 after:mt-0.5">
                            <p class="text-center font-semibold mx-4 mb-0">OR</p>
                        </div>

                        <a class="px-7 py- focus:outline-none  transition duration-150 ease-in-out w-full flex justify-center items-center mb-3"
                            href="#!" role="button" data-mdb-ripple="true" data-mdb-ripple-color="light">
                            <!-- Facebook -->
                            <img class="flex item-center justify-center rounded-sm p-3 w-2/3"
                                src="{{asset('gfoucs.png')}}" alt="" srcset=""></i>
                        </a>

                    </form>
                </div>
            </div>
        </div>
    </section>


    <script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>

    <script>
        // ajax login laravel
        $(document).ready(function () {
            $('#submit').click(function (e) {
                e.preventDefault();

                var email = $('#email').val();
                var password = $('#password').val();
                if (email == '') {
                    $('#msg').html('Email is required');
                    return false;
                }
                if (password == '') {
                    $('#msg').html('Password is required');
                    return false;
                }
                $.ajax({
                    type: "POST",
                    url: "{{ route('loginPost') }}",
                    data: {
                        email: email,
                        password: password,
                        _token: "{{ csrf_token() }}"
                    },
                    success: function (response) {
                        if (response.status == 'success') {
                            $('#msg').html(response.message);
                            window.location.href = "{{ route('home') }}";

                        } else {
                            $('#msg').html(response.message);
                        }
                    }
                });
            });
        });
    </script>

</body>

</html>
