<?php

namespace Space\Stimulsoft\Http\Controllers;

use App\Http\Controllers\Controller;
use Space\Stimulsoft\Facades\Stimulsoft;

class DesignerController extends Controller
{
    public function __invoke()
    {
        return Stimulsoft::make()
            ->setTemplate(route('stimulsoft.report.template'))
            ->design();
    }
}
