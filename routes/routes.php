<?php


use Illuminate\Support\Facades\Route;
use Space\Stimulsoft\Http\Controllers\DataController;
use Space\Stimulsoft\Http\Controllers\DesignerController;
use Space\Stimulsoft\Http\Controllers\ReportController;
use Space\Stimulsoft\Http\Controllers\ViewerController;

Route::get('stimulsoft/report.mrt',ReportController::class)->name('stimulsoft.report.template');
Route::get('stimulsoft/data.json', DataController::class)->name('stimulsoft.report.data');
Route::get('stimulsoft/view',ViewerController::class);
Route::get('stimulsoft/design',DesignerController::class);
