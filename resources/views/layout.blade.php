<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <title>{{ $report->getPageTitle() }}</title>
    <style>
        html, body {
            font-family: sans-serif;
        }
    </style>
    {!!  $report->renderJs()  !!}
    @yield('extraJs')
    <script type="text/javascript">
        {!!  $report->renderHandler()  !!}
        function onLoad() {
            @yield('onload')
        }
    </script>
</head>
<body onload="onLoad();">
@yield('body')
</body>
</html>
