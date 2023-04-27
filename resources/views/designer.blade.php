@extends('stimulsoft::layout')
@section('beforeJs')
    <script src="{{ asset('reporting/stimulsoft.designer.js') }}" type="text/javascript"></script>
    <script src="{{ asset('reporting/stimulsoft.blockly.editor.js') }}" type="text/javascript"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
    @if($report->isSaveToString())
        <script>
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            window.saveReport = async function (json) {
                $.ajax({
                    url: '{{ route($report->getSaveRoute()) }}',
                    method: 'POST',
                    dataType: 'json',
                    data: {
                        report: json,
                    },
                    success: function (response) {
                        console.log(response)
                    },
                    error: (error) => console.error(`Download error: ${error.message}`)
                })
                console.log(json);
                console.log(JSON.parse(json));
                console.log(JSON.stringify(json));
            }
        </script>
    @endif
@endsection
@section('onload')
    {!!  $report->renderDesigner('designerContent')  !!}
    @if($report->isSaveToString())
        designer.onSaveReport = function (args) {
        let jsonReport = args.report.saveToJsonString();
        saveReport(jsonReport);
        }
    @endif
@endsection
@section('body')
    <div id="designerContent"></div>
@endsection
