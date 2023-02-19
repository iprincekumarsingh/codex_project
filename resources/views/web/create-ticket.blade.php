<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no" />
    <title>create-tcket</title>
    <link rel="stylesheet" href="{{ asset('dash/assets/bootstrap/css/bootstrap.min.css') }}" />
</head>

<body>
    <div class="container">
        @include('components.user-header')

        {{-- show success msg --}}
        @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
        @endif


        @error('image')
        <div class="alert alert-danger">{{ $message }}</div>

        @enderror

        <form action="{{ route('create-ticketPost') }}" enctype="multipart/form-data" method="POST">

            @csrf
            <label class="form-label">Subject</label><input id="subject" name="title" class="form-control" type="text"
                style="border: 1px solid black" />
            <label class="form-label">Query</label><textarea id="query" name="description"
                class="form-control"></textarea>
                @error('description')
                <div class="alert alert-danger mt-4">{{ $message }}</div>
        
                @enderror
                <label class="form-label">Upoad ScreenShot</label>

            <input type="file" class="form-control" name="image" />

            <button id="submit" class="btn btn-primary" type="submit" style="margin-top: 10px">
                Submit
            </button>
        </form>
    </div>
</body>

</html>