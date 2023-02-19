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

        <h1 style="margin-top: 30px;">All Tickets</h1>
        <div class="table-responsive" style="border-width: 1px;border-style: solid;border-radius: 5px;">
            <table class="table">
                <thead>
                    <tr>
                        <th style="width: 300px;">Name</th>

                        <th style="background: red;color:white">Issue</th>
                        <th style="background: yellow">Status</th>
                        <th>Tools</th>

                    </tr>
                <tbody>
                    @forEach($tickets as $item)
                    <tr style="margin: 5px">
                        <td>{{$item->title}}</td>

                        <td>{{$item->description}}</td>

                        <td>@if ($item->status == 0)
                            <span style="background: red;color:white">Pending</span>

                            @elseif ($item->status == 1)
                            <span style="background: green;color:white">Resolved</span>
                            @elseif($item->status == -1)
                            <span style="background: red;color:white">Pending</span>
                            @else


                            @endif
                        </td>
                        <td><a href="ticket/solve/{{$item->id}}"
                                style="--bs-danger: #4b0ee4;--bs-danger-rgb: 228,14,35;--bs-body-bg: var(--bs-danger);width:300px;  padding: 10px 5px;text-align: center;color: rgb(225,225,225);text-decoration:none;margin:5px;border: 1px solid rgb(35,36,36);border-radius: 5px;--bs-body-font-size: 2rem;background: blue;">View</a>
                        </td>

                    </tr>
                    @endforeach
                </tbody>
                </thead>
                <tbody id="data_latest_tickets">


                </tbody>
            </table>
        </div>
    </div><!-- End: Features Cards -->
    <script src="{{asset('dash/assets/bootstrap/js/bootstrap.min.js')}}"></script>




</body>

</html>