<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    @vite(['resources/css/custom.css'])
</head>
<body>
    <div>
        <h1 class="fs-3 fw-bold">Add Player</h1>
        {{ 'Hello from blade.' }}
        <br>
        {{ 5*8 }}
        <br>
        {{ $more }}
    </div>
    <form method="POST" enctype="multipart/form-data">
        <div class="mb-3">
            <label for="name" class="form-label">{{ __('Name') }}</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="{{ __('Bunthong') }}">
          </div>
          <div class="mb-3">
            <label for="photo" class="form-label">{{ __("Photo") }}</label>
            <input type="file" class="form-control" id="photo" name="photo">
          </div>
          <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>