<?php


use Illuminate\Support\Facades\Route;
use Space\Stimulsoft\Http\Controllers\DataController;
use Space\Stimulsoft\Http\Controllers\ReportController;
use Space\Stimulsoft\Http\Controllers\TestController;

Route::get('stimulsoft/report.mrt',ReportController::class)->name('stimulsoft.report.template');
Route::get('stimulsoft/data.json', DataController::class)->name('stimulsoft.report.data');
Route::get('stimulsoft/test',TestController::class);
