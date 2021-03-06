<?php
Route::namespace('App\Modules\Admin\Controllers')
    ->prefix('admin')
    ->middleware('web')
    ->name('admin.')
    ->group(function (){

        // Authentication Routes...
        Route::get('login', 'Auth\LoginController@showLoginForm')->name('login.get');
        Route::post('login', 'Auth\LoginController@login')->name('login.post');
        Route::get('logout', 'Auth\LoginController@logout')->name('logout');

        // Registration Routes...
        Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register.get');
        Route::post('register', 'Auth\RegisterController@register')->name('register.post');

        // Password Reset Routes...
        Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
        Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
        Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
        Route::post('password/reset', 'Auth\ResetPasswordController@reset');
        
        // Change Password
        Route::post('/changePass', 'ProfileController@postChangePass')->name('changePass.postChangePass');

        /*ROLE, PERMISSION*/
        Route::get('/create-role', 'Auth\Role\RoleController@createRole')->name('createRole');
        Route::post('/create-role','Auth\Role\RoleController@postCreateRole')->name('postCreateRole');
        Route::post('/ajax-role', 'Auth\Role\RoleController@postAjaxRole')->name('ajaxCreateRole');
        Route::post('/ajax-permission', 'Auth\Role\RoleController@postAjaxPermission')->name('ajaxCreatePermission');

        Route::middleware('can_login')
            ->group(function (){
                Route::get('dashboard', 'DashboardController@index')->name('dashboard');
                //   PORFILE
                Route::get('/profile', 'ProfileController@index')->name('profile.index');
                Route::post('/profile/changePass', 'ProfileController@postChangePass')->name('profile.changePass');

                /*SKILL*/
                Route::post('/skill/deleteAll', 'SkillController@deleteAll')->name('skill.deleteAll');
                Route::post('/skill/updateStatus', 'SkillController@updateStatus')->name('skill.updateStatus');
                Route::post('/skill/postAjaxUpdateOrder', 'SkillController@postAjaxUpdateOrder')->name('skill.postAjaxUpdateOrder');
                Route::resource('/skill','SkillController');

                /*SERVICE*/
                Route::post('/service/deleteAll', 'ServiceController@deleteAll')->name('service.deleteAll');
                Route::post('/service/updateStatus', 'ServiceController@updateStatus')->name('service.updateStatus');
                Route::post('/service/postAjaxUpdateOrder', 'ServiceController@postAjaxUpdateOrder')->name('service.postAjaxUpdateOrder');
                Route::resource('/service','ServiceController');

                /*PROJECT TYPE*/
                Route::post('/projecttype/deleteAll', 'ProjectTypesController@deleteAll')->name('projecttype.deleteAll');
                Route::post('/projecttype/updateStatus', 'ProjectTypesController@updateStatus')->name('projecttype.updateStatus');
                Route::post('/projecttype/postAjaxUpdateOrder', 'ProjectTypesController@postAjaxUpdateOrder')->name('projecttype.postAjaxUpdateOrder');
                Route::resource('/projecttype','ProjectTypesController');

                /*PROJECT*/
                Route::post('/project/deleteAll', 'ProjectController@deleteAll')->name('project.deleteAll');
                Route::post('/project/updateStatus', 'ProjectController@updateStatus')->name('project.updateStatus');
                Route::post('/project/postAjaxUpdateOrder', 'ProjectController@postAjaxUpdateOrder')->name('project.postAjaxUpdateOrder');
                Route::resource('/project','ProjectController');

                /*USER MANAGEMENT*/
                Route::get('user/getData',  'UserManagementController@getData')->name('user.getData');
                Route::post('user/deleteAll', 'UserManagementController@deleteAll')->name('user.deleteAll');
                Route::post('user/updateStatus', 'UserManagementController@updateStatus')->name('user.updateStatus');
                Route::post('user/createUserByAdmin', 'Auth\AuthController@registerByAdmin')->name('user.createByAdmin');
                Route::resource('/user','UserManagementController');

                // MULTI PHOTOs
                Route::get('photo','MultiPhotoController@getIndex')->name('photo.index');
                Route::get('photo/create', 'MultiPhotoController@getCreate')->name('photo.create');
                Route::post('photo/create', 'MultiPhotoController@postCreate')->name('photo.postCreate');
                Route::get('photo/edit/{id}','MultiPhotoController@getEdit')->name('photo.edit');
                Route::put('photo/edit/{id}','MultiPhotoController@postEdit')->name('photo.update');
                Route::delete('photo/delete/{id}', 'MultiPhotoController@destroy')->name('photo.destroy');
                Route::post('photo/deleteAll', 'MultiPhotoController@deleteAll')->name('photo.deleteAll');

                /*CATEGORY*/
                Route::post('category/deleteAll', 'CategoryController@deleteAll')->name('category.deleteAll');
                Route::post('category/updateStatus', 'CategoryController@updateStatus')->name('category.updateStatus');
                Route::post('category/postAjaxUpdateOrder', 'CategoryController@postAjaxUpdateOrder')->name('category.postAjaxUpdateOrder');
                Route::resource('category', 'CategoryController');

                /* COMPANY */
                Route::any('company/{id?}', 'CompanyController@getInformation')->name('company.index');

                /*PRODUCT*/
                Route::post('product/deleteAll', ['as' => 'admin.product.deleteAll', 'uses' => 'ProductController@deleteAll']);
                Route::post('product/postAjaxUpdateOrder', ['as' => 'admin.product.postAjaxUpdateOrder', 'uses' => 'ProductController@postAjaxUpdateOrder']);
                Route::post('product/AjaxRemovePhoto', ['as' => 'admin.product.AjaxRemovePhoto', 'uses' => 'ProductController@AjaxRemovePhoto']);
                Route::post('product/AjaxUpdatePhoto', ['as' => 'admin.product.AjaxUpdatePhoto', 'uses' => 'ProductController@AjaxUpdatePhoto']);
                Route::post('product/updateStatus', ['as' => 'admin.product.updateStatus', 'uses' => 'ProductController@updateStatus']);
                Route::post('product/updateHotProduct', ['as' => 'admin.product.updateHotProduct', 'uses' => 'ProductController@updateHotProduct']);
                Route::resource('product', 'ProductController');
            });
        });
