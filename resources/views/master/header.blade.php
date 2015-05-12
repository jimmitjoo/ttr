<!doctype html>
<!---

      ,--.         ,--, ,------.    ,------. ,------. ,------.
      \   \       /   / |  .---'   |  .--.  ||  .--. '|  .---'
       \   \ '--'/   /  |  `--,    |  '--'  ||  '--'.'|  `--,
        \    '--'   /   |  `---.   |  .--.  ||  |\  \ |  `---.
         '--'   '--'    `------'   '--'  '--'`--' '--'`------'


      ,------. ,--.  ,--.,--.  ,--.,--.  ,--.,--.,--.  ,--. ,----.
      |  .--. ''  |  |  '|  ,'.|  ||  ,'.|  ||  ||  ,'.|  |'  .-./
      |  '--'.'|  |  |  ||  |' '  ||  |' '  ||  ||  |' '  ||  | .---.
      |  |\  \ '  '--'  '|  | `   ||  | `   ||  ||  | `   |'  '--'  |
      `--' '--' `------' `--'  `--'`--'  `--'`--'`--'  `--' `------'

  -->
<html lang="sv" ng-app="ttr">
<head>

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">

    <title>@yield('title')</title>
    <meta name="description" content="@yield('description')">

    <meta property="og:site_name" content="Timetorun.se"/>
    <meta property="og:title" content="@yield('title')" />
    <meta property="og:url" content="{{ "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]" }}" />
    <meta property="og:description" content="@yield('description')" />
    <meta property="fb:app_id" content="{{ getenv('FACEBOOK_CLIENT') }}" />
    <meta property="og:locale:alternate" content="sv_SE" />
    <meta property="og:image:url" content="@yield('share_image')" />

    <link rel="icon" type="image/png" href="/images/favicon.png" />
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="/images/favicon-114x114.png" />

    <link rel="stylesheet" href="{{ elixir("css/build.css") }}" >

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body>