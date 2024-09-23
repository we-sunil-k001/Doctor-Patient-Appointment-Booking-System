<?php

use VaahCms\Modules\appointment\Http\Controllers\Doctor\doctorsController;

Route::group(
    [
        'prefix' => 'doctor/appointment/doctors',
        
        'middleware' => ['web'],
        
],
function () {
    /**
     * Get Assets
     */
    Route::get('/assets', [doctorsController::class, 'getAssets'])
        ->name('vh.doctor.appointment.doctors.assets');
    /**
     * Get List
     */
    Route::get('/', [doctorsController::class, 'getList'])
        ->name('vh.doctor.appointment.doctors.list');
    /**
     * Update List
     */
    Route::match(['put', 'patch'], '/', [doctorsController::class, 'updateList'])
        ->name('vh.doctor.appointment.doctors.list.update');
    /**
     * Delete List
     */
    Route::delete('/', [doctorsController::class, 'deleteList'])
        ->name('vh.doctor.appointment.doctors.list.delete');


    /**
     * Fill Form Inputs
     */
    Route::any('/fill', [doctorsController::class, 'fillItem'])
        ->name('vh.doctor.appointment.doctors.fill');

    /**
     * Create Item
     */
    Route::post('/', [doctorsController::class, 'createItem'])
        ->name('vh.doctor.appointment.doctors.create');
    /**
     * Get Item
     */
    Route::get('/{id}', [doctorsController::class, 'getItem'])
        ->name('vh.doctor.appointment.doctors.read');
    /**
     * Update Item
     */
    Route::match(['put', 'patch'], '/{id}', [doctorsController::class, 'updateItem'])
        ->name('vh.doctor.appointment.doctors.update');
    /**
     * Delete Item
     */
    Route::delete('/{id}', [doctorsController::class, 'deleteItem'])
        ->name('vh.doctor.appointment.doctors.delete');

    /**
     * List Actions
     */
    Route::any('/action/{action}', [doctorsController::class, 'listAction'])
        ->name('vh.doctor.appointment.doctors.list.actions');

    /**
     * Item actions
     */
    Route::any('/{id}/action/{action}', [doctorsController::class, 'itemAction'])
        ->name('vh.doctor.appointment.doctors.item.action');

    //---------------------------------------------------------

});
