<!doctype html>
<html lang="en">
  <head>
    <title>404 Page</title>
    <link type="text/css" rel="stylesheet" href="{{ URL('assets/css/404.css') }}" />
  </head>

  <body class="permission_denied">
    <div id="tsparticles"></div>
    <div class="denied__wrapper">
      <h1>404</h1>
      <h3> LOST IN <span>SPACE</span> ? Hmm, looks like that page doesn't exist. </h3>
      <img id="astronaut" src="{{ URL('assets/images/astronaut.svg') }}" />
      <img id="planet" src="{{ URL('assets/images/planet.svg') }}" />
      <a href="{{URL('')}}"><button class="denied__link">Go Home</button></a>
    </div>

    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/tsparticles@2/tsparticles.bundle.min.js"></script>
    <script type="text/javascript" src="{{ URL('assets/js/404.js') }}"></script>
  </body>
</html>
