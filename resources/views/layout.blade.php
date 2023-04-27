<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <title>{{ $report->getPageTitle() }}</title>
    <meta name="csrf-token" content="{{ csrf_token() }}"/>

    <style>
        html, body {
            font-family: sans-serif;
        }
    </style>
    {!!  $report->renderJs()  !!}
    @yield('beforeJs')
    <script type="text/javascript">
        {!!  $report->renderHandler()  !!}
        function onLoad() {
            @yield('onload')
        }
        @yield('jsScope')
    </script>
    @yield('afterJs')
</head>
<body onload="onLoad();">
@yield('body')
</body>
</html>
