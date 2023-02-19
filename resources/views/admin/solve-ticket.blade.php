<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no" />
    <title>Untitled</title>
    <link rel="stylesheet" href="{{ asset('dash/assets/bootstrap/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('dash/assets/css/moch') }}" />
    <link rel="stylesheet" href="{{ asset('dash/assets/css/Poppins.css') }}" />
    <link rel="stylesheet" href="{{ asset('dash/assets/css/Navbar-With-Button-icons.css') }}" />
</head>

<body>
    @include('components.user-header')
    <div class="card">
        <div class="card-body">
            <h4 class="card-title"></h4>
            <h6 class="text-muted card-subtitle mb-2">
                Title - {{$tickect->title}}
            </h6>

            <p class="card-text border p-2">
                Issue - {{$tickect->description}}
            </p>
            <label class="form-label">Query Image</label><img src="{{$tickect->image}}" style="width: 400px" />
            <h1 style="
                        width: 100ppx;
                        --bs-body-font-size: 16px;
                        font-size: 16px;
                        text-shadow: 0px 0px;
                    ">
                Solve Query
            </h1>
            <form>
                <label class="form-label">Select Query Status for update</label><select class="form-select">
                    <optgroup label="This is a group">
                        <option value="1" selected="">
                            Solved
                        </option>
                        <option value="0">Pending</option>

                    </optgroup>
                </select><label class="form-label">Query Reply</label><textarea class="form-control"></textarea>
            </form>
            <input id="submit" class="btn btn-primary" type="submit" style="margin: 5px" /><a class="card-link"
                href="#"></a>
        </div>
    </div>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>

    {{-- cdn jeuqye --}}
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script>
        $(document).ready(function() {
            $('#submit').click(function() {
                var status = $('select').val();
                var reply = $('textarea').val();
                var id = {{$tickect->id}};

                console.log(reply);
                console.log(status);
                $.ajax({
                    url: '/admin/ticket/solved/{{$tickect->id}}',
                    type: 'POST',
                    data: {
                        _token: '{{ csrf_token() }}',
                        status: status,
                        reply: reply,
                        id: id
                    },
                    success: function(data) {
                        console.log(data);
                        if (data == 'success') {
                            alert('Ticket Solved');
                            window.location.href = '/home';
                        } else {
                            alert('Something went wrong');
                        }
                    }
                });
            });
        });
    </script>
</body>

</html>