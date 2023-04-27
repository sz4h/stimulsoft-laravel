<?php

namespace Space\Stimulsoft\Http\Controllers;

use App\Http\Controllers\Controller;
use Space\Stimulsoft\Facades\Stimulsoft;

class SaveRouteController extends Controller
{
    public function __invoke()
    {
        return request()->get('report',[]);
    }
}
