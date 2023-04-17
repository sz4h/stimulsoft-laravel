<?php


use Illuminate\Support\Facades\Route;
use Space\Stimulsoft\Facades\Stimulsoft;
$report = Stimulsoft::make()
    ->setTemplate('reports/SimpleList.mrt')
    ->view();
Route::get('test',fn() => $report);
