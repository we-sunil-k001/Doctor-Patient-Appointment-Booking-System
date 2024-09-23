<?php
use VaahCms\Modules\appointment\Http\Controllers\Doctor\doctorsController;
/*
 * API url will be: <base-url>/public/api/appointment/doctors
 */
Route::group(
    [
        'prefix' => 'appointment/doctors',
        'namespace' => 'Doctor',
    ],
function () {

    /**
     * Get Assets
     */
    Route::get('/assets', [doctorsController::class, 'getAssets'])
        ->name('vh.doctor.appointment.api.doctors.assets');
    /**
     * Get List
     */
    Route::get('/', [doctorsController::class, 'getList'])
        ->name('vh.doctor.appointment.api.doctors.list');
    /**
     * Update List
     */
    Route::match(['put', 'patch'], '/', [doctorsController::class, 'updateList'])
        ->name('vh.doctor.appointment.api.doctors.list.update');
    /**
     * Delete List
     */
    Route::delete('/', [doctorsController::class, 'deleteList'])
        ->name('vh.doctor.appointment.api.doctors.list.delete');


    /**
     * Create Item
     */
    Route::post('/', [doctorsController::class, 'createItem'])
        ->name('vh.doctor.appointment.api.doctors.create');
    /**
     * Get Item
     */
    Route::get('/{id}', [doctorsController::class, 'getItem'])
        ->name('vh.doctor.appointment.api.doctors.read');
    /**
     * Update Item
     */
    Route::match(['put', 'patch'], '/{id}', [doctorsController::class, 'updateItem'])
        ->name('vh.doctor.appointment.api.doctors.update');
    /**
     * Delete Item
     */
    Route::delete('/{id}', [doctorsController::class, 'deleteItem'])
        ->name('vh.doctor.appointment.api.doctors.delete');

    /**
     * List Actions
     */
    Route::any('/action/{action}', [doctorsController::class, 'listAction'])
        ->name('vh.doctor.appointment.api.doctors.list.action');

    /**
     * Item actions
     */
    Route::any('/{id}/action/{action}', [doctorsController::class, 'itemAction'])
        ->name('vh.doctor.appointment.api.doctors.item.action');



});