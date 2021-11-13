<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Asxox-Ecommerce</title>
  <link rel="stylesheet" href="{{asset('frontend/assets/vendor/bootstrap/css/bootstrap.css')}}">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css">
  <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
  <link rel='stylesheet' href='http://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/smoothness/jquery-ui.css'>
  <link rel='stylesheet' href='//fonts.googleapis.com/css?family=Droid+Sans' type='text/css'>
  <link rel="stylesheet" href="{{asset('frontend/assets/css/style.css')}}">
</head>

<body>

  <!---------------Website Header ----------------------->
  <x-frontend.nav />

  <!---------------Body Content ----------------------->
  {{ $slot }}

  <script src="{{ asset('frontend/assets/vendor/jquery/dist/jquery.js') }}"></script>
  <script src='http://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js'></script>
  <script src="{{ asset('frontend/assets/vendor/bootstrap/js/bootstrap.bundle.js') }}"></script>
  <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
  <!-- extra js -->
  <script src="{{ asset('frontend/assets/js/script.js') }}"></script>
</body>

</html>