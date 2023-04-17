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
    <script type="text/javascript">
        {!!  $report->renderHandler()  !!}
        function onLoad() {
            {!!  $report->renderViewer('viewerContent')  !!}
        }
    </script>
</head>
<body onload="onLoad();">
<div id="viewerContent"></div>
</body>
</html>
