<?php

namespace Space\Stimulsoft\Http\Controllers;

use App\Http\Controllers\Controller;
use Space\Stimulsoft\Facades\Stimulsoft;

class ReportController extends Controller
{
    public function __invoke()
    {
        $report = json_decode(file_get_contents(Stimulsoft::make()->getBaseReport()));
        $report->Dictionary->Databases->{0}->PathData = route('stimulsoft.report.data');
        return $report;
    }
}
