<?php

namespace Space\Stimulsoft\Traits;

use Stimulsoft\Designer\StiDesigner;
use Stimulsoft\Designer\StiDesignerOptions;
use Stimulsoft\Report\StiReport;

trait Designer
{

    private bool $saveToString = false;
    private ?string $saveRoute = null;
    public function renderDesigner(string $htmlBlock = 'viewerContent'): string
    {
        $options = new StiDesignerOptions();
        $options->appearance->fullScreenMode = config('stimulsoft.viewer.options.fullScreenMode');
        $options->appearance->scrollbarsMode = config('stimulsoft.viewer.options.scrollbarsMode');
        $options->height = config('stimulsoft.viewer.options.height');

        /** https://www.stimulsoft.com/en/documentation/online/programming-manual/index.html?reports_and_dashboards_for_php_web_designer_deployment.htm */
        $designer = new StiDesigner($options);
        /** https://www.stimulsoft.com/en/documentation/online/programming-manual/index.html?reports_and_dashboards_for_php_web_designer_creating_editing_report.htm */
        $report = new StiReport();

        $report->loadFile($this->getTemplate());
        $designer->report = $report;
        return $designer->getHtml($htmlBlock);
    }


    public function design()
    {
        return view('stimulsoft::designer', ['report' => $this]);
    }



    public function saveToString(?string $routeName = null): self
    {
        $this->saveToString = true;
        $this->saveRoute = $routeName;
        return $this;
    }

    public function saveToMrt(): self
    {
        $this->saveToString = false;
        $this->saveRoute = null;
        return $this;
    }

    public function isSaveToString()
    {
        return $this->saveToString;
    }

    public function getSaveRoute()
    {
        return $this->saveRoute;
    }
}
