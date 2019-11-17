<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Auth::routes();

Route::get('/', [
    'as' => 'home',
    'uses' => 'HomeController@index'
]);

Route::get('/register', [
    'as' => 'auth.register',
    'uses' => 'Auth\RegisterController@showRegistrationForm'
]);

Route::post('/register_store', [
    'as' => 'auth.register_store',
    'uses' => 'Auth\RegisterController@storeRegistration'
]);

Route::get('/reset_password', [
    'as' => 'auth.reset_password',
    'uses' => 'Auth\ResetPasswordController@showResetForm'
]);

Route::get('/announcements', [
    'as' => 'home.announcements',
    'uses' => 'HomeController@announcements'
]);

Route::group(['prefix' => 'admin', 'middleware' => ['auth'], 'as' => 'admin.', 'namespace' => 'Admin'], function() {
    Route::get('dashboard', [
        'as' => 'dashboard',
        'uses' => 'HomeController@index'
    ]);

    //------------ USERS --------------//
    Route::get('users', [
        'as' => 'users.index',
        'uses' => 'UserController@index',
    ])->middleware('permission:list users');
    Route::get('users/create', [
        'as' => 'users.create',
        'uses' => 'UserController@create',
    ])->middleware('permission:create users');
    Route::post('users/store', [
        'as' => 'users.store',
        'uses' => 'UserController@store',
    ])->middleware('permission:create users');
    Route::get('users/{user}/edit', [
        'as' => 'users.edit',
        'uses' => 'UserController@edit',
    ])->middleware('permission:edit users');
    Route::put('users/{user}', [
        'as' => 'users.update',
        'uses' => 'UserController@update',
    ])->middleware('permission:edit users');
    Route::patch('users/{user}', [
        'as' => 'users.update',
        'uses' => 'UserController@update',
    ])->middleware('permission:edit users');
    Route::delete('users/{user}', [
        'as' => 'users.destroy',
        'uses' => 'UserController@destroy',
    ])->middleware('permission:delete users');

    //------------ ROLES --------------//
    Route::get('roles', [
        'as' => 'roles.index',
        'uses' => 'RoleController@index',
    ])->middleware('permission:list roles');
    Route::get('roles/create', [
        'as' => 'roles.create',
        'uses' => 'RoleController@create',
    ])->middleware('permission:list roles');
    Route::post('roles/store', [
        'as' => 'roles.store',
        'uses' => 'RoleController@store',
    ])->middleware('permission:list roles');
    Route::get('roles/{role}/edit', [
        'as' => 'roles.edit',
        'uses' => 'RoleController@edit',
    ])->middleware('permission:list roles');
    Route::put('roles/{role}', [
        'as' => 'roles.update',
        'uses' => 'RoleController@update',
    ])->middleware('permission:list roles');
    Route::patch('roles/{role}', [
        'as' => 'roles.update',
        'uses' => 'RoleController@update',
    ])->middleware('permission:list roles');
    Route::delete('roles/{role}', [
        'as' => 'roles.destroy',
        'uses' => 'RoleController@destroy',
    ])->middleware('permission:list roles');

    //------------ announcements --------------//
    Route::get('announcements', [
        'as' => 'announcements.index',
        'uses' => 'AnnouncementController@index',
    ]);
    Route::get('announcements/create', [
        'as' => 'announcements.create',
        'uses' => 'AnnouncementController@create',
    ]);
    Route::post('announcements/store', [
        'as' => 'announcements.store',
        'uses' => 'AnnouncementController@store',
    ]);
    Route::get('announcements/{role}/edit', [
        'as' => 'announcements.edit',
        'uses' => 'AnnouncementController@edit',
    ]);
    Route::put('announcements/{role}', [
        'as' => 'announcements.update',
        'uses' => 'AnnouncementController@update',
    ]);
    Route::patch('announcements/{role}', [
        'as' => 'announcements.update',
        'uses' => 'AnnouncementController@update',
    ]);
    Route::delete('announcements/{role}', [
        'as' => 'announcements.destroy',
        'uses' => 'AnnouncementController@destroy',
    ]);

    //------------ Postulants --------------//
    Route::get('postulants', [
        'as' => 'postulants.index',
        'uses' => 'PostulantController@index',
    ]);
    Route::get('postulants/create', [
        'as' => 'postulants.create',
        'uses' => 'PostulantController@create',
    ]);
    Route::post('postulants/store', [
        'as' => 'postulants.store',
        'uses' => 'PostulantController@store',
    ]);
    Route::get('postulants/{role}/edit', [
        'as' => 'postulants.edit',
        'uses' => 'PostulantController@edit',
    ]);
    Route::put('postulants/{role}', [
        'as' => 'postulants.update',
        'uses' => 'PostulantController@update',
    ]);
    Route::patch('postulants/{role}', [
        'as' => 'postulants.update',
        'uses' => 'PostulantController@update',
    ]);
    Route::delete('postulants/{role}', [
        'as' => 'postulants.destroy',
        'uses' => 'PostulantController@destroy',
    ]);

    //-------------- AREAS ------------------//
    Route::get('areas', [
        'as' => 'areas.index',
        'uses' => 'AreaController@index',
    ])->middleware('permission:list areas');
    Route::get('areas/create', [
        'as' => 'areas.create',
        'uses' => 'AreaController@create',
    ])->middleware('permission:create areas');
    Route::post('areas/store', [
        'as' => 'areas.store',
        'uses' => 'AreaController@store',
    ])->middleware('permission:create areas');
    Route::get('areas/{area}/edit', [
        'as' => 'areas.edit',
        'uses' => 'AreaController@edit',
    ])->middleware('permission:edit areas');
    Route::put('areas/{area}', [
        'as' => 'areas.update',
        'uses' => 'AreaController@update',
    ])->middleware('permission:edit areas');
    Route::patch('areas/{area}', [
        'as' => 'areas.update',
        'uses' => 'AreaController@update',
    ])->middleware('permission:edit areas');
    Route::delete('areas/{area}', [
        'as' => 'areas.destroy',
        'uses' => 'AreaController@destroy',
    ])->middleware('permission:delete areas');

    //-------------- CONVOCATORIAS ------------------//
    Route::get('announcements', [
        'as' => 'announcements.index',
        'uses' => 'AnnouncementController@index',
    ])->middleware('permission:list announcements');
    Route::get('announcements/create', [
        'as' => 'announcements.create',
        'uses' => 'AnnouncementController@create',
    ])->middleware('permission:create announcements');
    Route::post('announcements/store', [
        'as' => 'announcements.store',
        'uses' => 'AnnouncementController@store',
    ])->middleware('permission:create announcements');
    Route::get('announcements/{id}/edit', [
        'as' => 'announcements.edit',
        'uses' => 'AnnouncementController@edit',
    ])->middleware('permission:edit announcements');
    Route::put('announcements/{announcement}', [
        'as' => 'announcements.update',
        'uses' => 'AnnouncementController@update',
    ])->middleware('permission:edit announcements');
    Route::patch('announcements/{announcement}', [
        'as' => 'announcements.update',
        'uses' => 'AnnouncementController@update',
    ])->middleware('permission:edit announcements');
    Route::delete('announcements/{announcement}', [
        'as' => 'announcements.destroy',
        'uses' => 'AnnouncementController@destroy',
    ])->middleware('permission:delete announcements');

    //-------------- REQUIREMENTS ------------------//
    Route::get('{announcement}/requirements', [
        'as' => 'requirements.index',
        'uses' => 'RequirementController@index',
    ])->middleware('permission:list requirements');
    Route::get('{announcement}/requirements/create', [
        'as' => 'requirements.create',
        'uses' => 'RequirementController@create',
    ])->middleware('permission:create requirements');
    Route::post('{announcement}requirements/store', [
        'as' => 'requirements.store',
        'uses' => 'RequirementController@store',
    ])->middleware('permission:create requirements');
    Route::get('{announcement}requirements/{requirement}/edit', [
        'as' => 'requirements.edit',
        'uses' => 'RequirementController@edit',
    ])->middleware('permission:edit requirements');
    Route::put('{announcement}requirements/{requirement}', [
        'as' => 'requirements.update',
        'uses' => 'RequirementController@update',
    ])->middleware('permission:edit requirements');
    Route::patch('{announcement}requirements/{requirement}', [
        'as' => 'requirements.update',
        'uses' => 'RequirementController@update',
    ])->middleware('permission:edit requirements');
    Route::delete('{announcement}requirements/{requirement}', [
        'as' => 'requirements.destroy',
        'uses' => 'RequirementController@destroy',
    ])->middleware('permission:delete requirements');

});