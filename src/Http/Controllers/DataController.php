<?php

namespace Space\Stimulsoft\Http\Controllers;

use App\Http\Controllers\Controller;
use Space\Stimulsoft\Facades\Stimulsoft;

class DataController extends Controller
{
    public function __invoke()
    {
        return json_decode(file_get_contents(Stimulsoft::make()->getBaseDatasource()));
    }
}
