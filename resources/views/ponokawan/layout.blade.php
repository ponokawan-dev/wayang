<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="{{ asset('/assets/foundation/css/foundation.css') }}">
  <script src="{{ asset('/assets/foundation/js/vendor/jquery.js') }}"></script>
  <title>Ponokawan</title>
</head>
<body>
    <div class="grid-container">
      <div class="grid-x grid-margin-x">
        <div class="cell medium-12" style="margin-top: 30px; margin-bottom: 20px;">
          <div class="top-bar">
            <div class="top-bar-left">
              <p class="h3 subheader" style="padding-left: 10px;">Ponokawan's Tale Story</p>
            </div>
          </div>
        </div>
        <div class="cell small-1">
          <ul class="vertical menu align-right">
            <li><a href="{{ url('/ponokawan') }}">Home</a></li>
            <li><a href="{{ url('/ponokawan/semar') }}">Semar</a></li>
            <li><a href="{{ url('/ponokawan/gareng') }}">Gareng</a></li>
            <li><a href="{{ url('/ponokawan/petruk') }}">Petruk</a></li>
            <li><a href="{{ url('/ponokawan/bagong') }}">Bagong</a></li>
          </ul>
        </div>
        <div class="cell small-1"></div>
        <div class="cell auto">
          @yield('content')
        </div>
        <div class="cell medium-12" style="margin-top: 30px; margin-bottom: 20px;">
          <p class="text-center" style="font-size: 10px;">Powered by ponokawan-dev @ 2019</p>
        </div>
      </div>
    </div>
</body>
</html>