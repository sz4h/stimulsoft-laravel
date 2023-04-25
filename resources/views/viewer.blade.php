@extends('stimulsoft::layout')
@section('onload')
    {!!  $report->renderViewer('viewerContent')  !!}
@endsection
@section('body')
    <div id="viewerContent"></div>
@endsection
