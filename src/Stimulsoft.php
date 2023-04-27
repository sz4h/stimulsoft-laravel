<?php /** @noinspection ALL */

namespace Space\Stimulsoft;

use Space\Stimulsoft\Traits\Designer;
use Space\Stimulsoft\Traits\Viewer;
use Stimulsoft\Designer\StiDesigner;
use Stimulsoft\Designer\StiDesignerOptions;
use Stimulsoft\Report\StiReport;
use Stimulsoft\StiComponentType;
use Stimulsoft\StiHandler;
use Stimulsoft\StiJavaScript;
use Stimulsoft\Viewer\StiViewer;
use Stimulsoft\Viewer\StiViewerOptions;
use ReflectionClass;

class Stimulsoft
{
    use Designer, Viewer;
    private string $template;
    private string $pageTitle = 'Report';

    public function make(): static
    {
        return $this;
    }


    public function renderJs()
    {
        return view('stimulsoft::js-import')->render();
    }

    public function renderHandler()
    {
        $handler = new StiHandler();
        $handler->options->url = '';
        if (config('stimulsoft.license.key'))
            $handler->license->setKey(config('stimulsoft.license.key'));
        if (config('stimulsoft.license.file'))
            $handler->license->setFile('license.key');
        return $handler->getHtml();
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
