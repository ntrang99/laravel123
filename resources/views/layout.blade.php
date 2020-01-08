<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Freelancer - Start Bootstrap Theme</title>

  <!-- Custom fonts for this theme -->
  <link href="assests/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

  <!-- Theme CSS -->
  <link href="css/freelancer.min.css" rel="stylesheet">

</head>

<body id="page-top">

  <!-- Navigation -->
  @include('navigation')
  <!-- Masthead -->
  @include('masthead')
  <!-- Portfolio Section -->
  @include('portfolio')
  <!-- About Section -->
  @include('aboutsection')
  <!-- Contact Section -->
  @include('contact')
  <!-- Footer -->
  @include('footer')
  <!-- Copyright Section -->
  @include('copyright')
  <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
  @include('scroll')

  <!-- Portfolio Modals -->
  @include('models')
  <!-- Bootstrap core JavaScript -->
  @include('JS')

</body>

</html>
