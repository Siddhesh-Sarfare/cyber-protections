<!DOCTYPE html>
<html lang="en">

<head>
    @include('layouts.frontend.head')

    <script src="{{asset("assets/frontend/scripts/jquery-3.4.1.min.js")}}"></script>
    <script src="{{asset("assets/frontend/scripts/bootstrap.min.js")}}"></script>
    <script src="{{asset("assets/frontend/scripts/owl.carousel.min.js")}}"></script>
    <script src="{{asset("assets/frontend/scripts/animation.js")}}"></script>
    <script src="{{asset("assets/frontend/scripts/custom.js")}}"></script>
</head>

<body>
    <!-- Start preloader -->
    <div id="preloader">
        <div class="preloader-box">
            <img src="{{asset("assets/frontend/images/loader.png")}}" decoding="async" alt="Loader">
            <p class="loading">Loading</p>
        </div>
    </div>
    <!-- End preloader -->

    @include('layouts.frontend.navigation')
    @yield('page-content')
    @include('layouts.frontend.footer')
    @stack('scripts')


    <script>
  // Get the current URL
  var currentURL = window.location.href;

  // Get all anchor tags
  var anchorTags = document.getElementsByTagName('a');

  // Loop through each anchor tag
  for (var i = 0; i < anchorTags.length; i++) {
    var anchorTag = anchorTags[i];

    // Check if the anchor tag's href attribute matches the current URL
    if (anchorTag.href === currentURL) {
      // Add the "active" class to the parent <li> tag
      var parentLi = anchorTag.parentNode;
      if (parentLi.tagName === 'LI') {
        parentLi.classList.add('active');
        break;
      }
    }
  }
</script>
    
</body>

</html>