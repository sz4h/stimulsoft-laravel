@extends('stimulsoft::layout')
@section('extraJs')
    <script src="{{ asset('reporting/stimulsoft.designer.js') }}" type="text/javascript"></script>
    <script src="{{ asset('reporting/stimulsoft.blockly.editor.js') }}" type="text/javascript"></script>
@endsection
@section('onload')
    {!!  $report->renderDesigner('designerContent')  !!}
@endsection
@section('body')
    <div id="designerContent"></div>
@endsection
