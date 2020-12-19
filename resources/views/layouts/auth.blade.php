<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>Store - Your Best Marketplace</title>

  @include('includes.style')
</head>

<body>
  <!-- Navbar -->
  @include('includes.navbar-auth')

  <!-- Page Content -->
  @yield('content')


  @include('includes.footer')

  @include('includes.script')

</body>

</html>