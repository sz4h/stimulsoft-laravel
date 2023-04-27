<?php


use Illuminate\Support\Facades\Route;
use Space\Stimulsoft\Http\Controllers\DataController;
use Space\Stimulsoft\Http\Controllers\DesignerController;
use Space\Stimulsoft\Http\Controllers\ReportController;
use Space\Stimulsoft\Http\Controllers\SaveRouteController;
use Space\Stimulsoft\Http\Controllers\ViewerController;

Route::middleware('web')
    ->name('stimulsoft.')
    ->prefix('stimulsoft/')
    ->group(function () {
        Route::get('report.mrt', ReportController::class)->name('report.template');
        Route::get('data.json', DataController::class)->name('report.data');
        Route::get('view', ViewerController::class)->name('view');
        Route::get('design', DesignerController::class)->name('design');
        Route::post('save-design', SaveRouteController::class)->name('save-design');
    });
