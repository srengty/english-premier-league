<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    @vite(['resources/css/custom.css'])
</head>

<body>
    <div>
        <h1 class="fs-3 fw-bold">Add Player</h1>
        {{ 'Hello from blade.' }}
        <br>
        {{ 5 * 8 }}
        <br>
        {{ $more }}
    </div>
    <div class="m-5">
        @if($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div> 
        @endif
        <form method="POST" action="{{ route('players.store') }}" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="team" class="form-label">{{ __('Team') }}</label>
                <select class="form-control" id="team" name="team_id">
                    @foreach ($teams as $team)
                        <option value="{{ $team->id }}">{{ $team->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="name" class="form-label">{{ __('Name') }}</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="{{ __('Bunthong') }}">
                @if($errors->has('name'))
                    <div class="text-danger">{{ $errors->first('name') }}</div>
                @endif
            </div>
            <div class="mb-3">
                <label for="photo" class="form-label">{{ __('Photo') }}</label>
                <input type="file" accept="image/*" class="form-control" id="photo" name="photo">
            </div>
            <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
</body>

</html>
