<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>GeoSearch - Sök Lokalt Enkelt På Google</title>

    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/bootstrap-theme.min.css">
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/css/main.css">

</head>
<body>

    @include('layouts._partials.nav')

    <div class="container">
        @yield('content')
    </div>

    @include('layouts._partials.om')
    <script src="/js/jquery.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-38129826-2', 'auto');
      ga('send', 'pageview');

    </script>
    <script type="text/javascript">
        $(document).ready(function() {
            $("#submit").click(function () {
                ga('send', 'event', 'form', 'click', 'submit');
            });
            $("#setting").click(function () {
                ga('send', 'event', 'form', 'click', 'settings');
            });
            $("#information").click(function () {
                ga('send', 'event', 'form', 'click', 'information');
            });
        })
    </script>


</body>
</html>