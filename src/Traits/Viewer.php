<?php

namespace Space\Stimulsoft\Traits;

use Illuminate\Contracts\View\View;
use Stimulsoft\Report\StiReport;
use Stimulsoft\Viewer\StiViewer;
use Stimulsoft\Viewer\StiViewerOptions;

trait Viewer
{

    public function renderViewer(string $htmlBlock = 'viewerContent'): string
    {
        $options = new StiViewerOptions();
        $options->appearance->fullScreenMode = config('stimulsoft.viewer.options.fullScreenMode');
        $options->appearance->scrollbarsMode = config('stimulsoft.viewer.options.scrollbarsMode');
        $options->height = config('stimulsoft.viewer.options.height');

        /** https://www.stimulsoft.com/en/documentation/online/programming-manual/index.html?reports_and_dashboards_for_php_deployment.htm */
        $viewer = new StiViewer($options);

        /** https://www.stimulsoft.com/en/documentation/online/programming-manual/index.html?reports_and_dashboards_for_php_web_designer_creating_editing_report.htm */
        $report = new StiReport();
        $report->loadFile($this->getTemplate());
        $viewer->report = $report;
        return $viewer->getHtml($htmlBlock);
    }


    public function view(): View
    {
        return view('stimulsoft::viewer', ['report' => $this]);
    }
}
