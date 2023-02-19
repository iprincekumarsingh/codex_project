<!DOCTYPE html>
<html lang="en" style="font-family: Poppins, sans-serif;text-align: left;">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title></title>
    <link rel="stylesheet" href="{{asset('dash/assets/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('dash/assets/css/moch')}}">
    <link rel="stylesheet" href="{{asset('dash/assets/css/Poppins.css')}}">
    <link rel="stylesheet" href="{{asset('dash/assets/css/Navbar-With-Button-icons.css')}}">
</head>

<body style="border: 1px rgb(53,53,53);">
    <!-- Start: Navbar Right Links -->
    @include('components.user-header')
    <!-- End: Navbar Right Links -->
    <!-- Start: Features Cards -->
    <div class="container py-4 py-xl-5">

        <h1 style="margin-top: 30px;">Recent Tickets</h1>
        @if (auth::user()->role == '1')
        @include('admin.ticket-card')

        <div class="mt-10"></div>
        @include('admin.ticket-table')

        @else
        @include('user.ticket-card-user')
        @endif
    </div><!-- End: Features Cards -->
    <script src="{{asset('dash/assets/bootstrap/js/bootstrap.min.js')}}"></script>



    @if(auth::user()->role==1)
    <script src="{{asset('admin.js')}}"></script>
    @else
    <script src="{{asset('user.js')}}"></script>
    @endif
</body>

</html>