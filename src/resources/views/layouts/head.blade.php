
  <title>{{config('app.name')}}</title>
  
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="{{ URL::asset('vendor/laravel/shared-files/assets/font/css.css') }}">

  <!-- Font Awesome and bootstrap icon -->
  <link rel="stylesheet" href="{{ URL::asset('assets/fontawesome-bootstrapIcon/all.min.css') }}">
  <link rel="stylesheet" href="{{ URL::asset('assets/fontawesome-bootstrapIcon/bootstrap-icons.css') }}">
  
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ URL::asset('assets/css/adminlte.min.css') }}">

  <link rel="icon" href="{{ URL::asset('assets/our_image/icon.png') }}" type="image/x-icon">

  @yield('css')
