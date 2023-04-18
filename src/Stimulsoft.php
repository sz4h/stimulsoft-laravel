<?php /** @noinspection ALL */

namespace Space\Stimulsoft;

use Stimulsoft\Report\StiReport;
use Stimulsoft\StiComponentType;
use Stimulsoft\StiHandler;
use Stimulsoft\StiJavaScript;
use Stimulsoft\Viewer\StiViewer;
use Stimulsoft\Viewer\StiViewerOptions;
use ReflectionClass;

class Stimulsoft
{
    private string $template;
    private string $pageTitle = 'Report';

    public function make(): static
    {
        return $this;
    }

    public function setTemplate(string $template): static
    {
        $this->template = $template;
        return $this;
    }

    public function getTemplate(): string
    {
        return $this->template;
    }

    public function setPageTitle(string $pageTitle): static
    {
        $this->pageTitle = $pageTitle;
        return $this;
    }

    public function getPageTitle(): string
    {
        return $this->pageTitle;
    }

    public function renderViewer(string $htmlBlock = 'viewerContent')
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

    public function renderJs()
    {
        return view('stimulsoft::js-import')->render();
    }

    public function renderHandler()
    {
        $handler = new StiHandler();
        if (config('stimulsoft.license.key'))
            $handler->license->setKey(config('stimulsoft.license.key'));
        if (config('stimulsoft.license.file'))
            $handler->license->setFile('license.key');
        return $handler->getHtml();
    }

    public function view()
    {
        return view('stimulsoft::viewer', ['report' => $this]);
    }

    public function getBaseReport()
    {
        return $this->getBasePath() . 'stubs/report-example.mrt';
    }

    public function getBaseDatasource()
    {
        return $this->getBasePath() . 'stubs/example.json';
    }

    private function getBasePath() {
        $reflector = new ReflectionClass(get_class($this));

        return dirname(dirname($reflector->getFileName())) . DIRECTORY_SEPARATOR;
    }

}
