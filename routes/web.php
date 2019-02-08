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

Route::get('/', 'HomeController@index')->name('home');

Route::get('cotizar', 'QuoteController@index')->name('quote');

Route::post('cotizar/guardar', 'QuoteController@store')->name('quote.store');

Route::get('nosotros', 'HomeController@aboutUs')->name('aboutUs');

Route::get('requisitos', 'HomeController@requirements')->name('requirements');

Route::get('servicios', 'HomeController@services')->name('services');

Route::get('entidades', 'HomeController@entities')->name('fonasa_isapre');

Route::get('kinesiologia', 'HomeController@kinesiologist')->name('kinesiologist');

Route::get('kinesiologia-areas', 'HomeController@kinesiologist_areas')->name('kinesiologist_areas');

Route::get('informacion-util', 'HomeController@information')->name('information');

Route::get('grandes-masones-ingleses', 'HomeController@biggerEnglishMasons')->name('bigger.masons');

Route::get('grandes-masones-historia', 'HomeController@biggerHistoryMasons')->name('bigger.history.masons');

Route::get('videos', 'HomeController@videos')->name('videos');

Route::get('convenio/solicitar', 'HomeController@agreement')->name('agreement');

Route::post('convenio/guardar', 'AgreementController@store')->name('agreement.store');

Route::get('noticias', 'HomeController@blog')->name('blog');

Route::get('noticias/{blog_id}', 'HomeController@post')->name('post');

Route::get('contacto', 'HomeController@contact')->name('contact');

Route::get('/admin', 'AdminController@index')->name('admin');

Route::get('/analytics/views', 'AnalyticsController@index')->name('analytics');

Route::post('message/store', 'ContactController@store')->name('store_message');

/*** Pages ***/
Route::get('page/{type}', 'PageController@index')->name('page');

Route::middleware(['auth'])->prefix('admin')->group(function () {

    /*** Banners ***/
    Route::get('banner', 'BannerController@index')->name('banner');
    Route::get('banner/add', 'BannerController@create')->name('add_banner');
    Route::post('banner/store', 'BannerController@store')->name('store_banner');
    Route::get('banner/edit/{id}',['as'=>'edit_banner', 'uses' => 'BannerController@edit']);
    Route::put('banner/update/{id}',['as'=>'update_banner', 'uses' => 'BannerController@update']);
    Route::get('banner/destroy/{id}',['as'=>'destroy_banner', 'uses' => 'BannerController@destroy']);

    /*** Pages ***/
    Route::get('section', 'SectionController@index')->name('section');
    Route::get('section/add', 'SectionController@create')->name('add_section');
    Route::post('section/store', 'SectionController@store')->name('store_section');
    Route::get('section/edit/{id}',['as'=>'edit_section', 'uses' => 'SectionController@edit']);
    Route::put('section/update/{id}',['as'=>'update_section', 'uses' => 'SectionController@update']);
    Route::get('section/destroy/{id}',['as'=>'destroy_section', 'uses' => 'SectionController@destroy']);

    /*** Users ***/
    Route::get('user', 'UserController@index')->name('users');
    Route::get('user/add', 'UserController@create')->name('add_user');
    Route::post('user/store', 'UserController@store')->name('store_user');
    Route::get('user/edit/{id}',['as'=>'edit_user', 'uses' => 'UserController@edit']);
    Route::put('user/update/{id}',['as'=>'update_user', 'uses' => 'UserController@update']);
    Route::get('user/reset/{id}',['as'=>'reset_pass_user', 'uses' => 'UserController@reset_pass']);
    Route::post('user/update/pass/',['as'=>'change_pass_user', 'uses' => 'UserController@change_pass']);
    Route::get('user/destroy/{id}',['as'=>'destroy_user', 'uses' => 'UserController@destroy']);

    /*** Company ***/
    Route::get('company', 'CompanyController@index')->name('company');
    Route::post('company/store', 'CompanyController@store')->name('store_company');
    Route::get('company/edit/{id}',['as'=>'edit_company', 'uses' => 'CompanyController@edit']);
    Route::put('company/update/{id}',['as'=>'update_company', 'uses' => 'CompanyController@update']);

    /*** Blog ***/
    Route::get('blog', 'BlogController@index')->name('post');
    Route::get('blog/add', 'BlogController@create')->name('add_post');
    Route::post('blog/store', 'BlogController@store')->name('store_post');
    Route::get('blog/edit/{id}',['as'=>'edit_post', 'uses' => 'BlogController@edit']);
    Route::put('blog/update/{id}',['as'=>'update_post', 'uses' => 'BlogController@update']);
    Route::get('blog/destroy/{id}',['as'=>'destroy_post', 'uses' => 'BlogController@destroy']);

    /*** Messages ***/
    Route::get('messages', 'ContactController@index')->name('messages');
    Route::get('messages/show/{id}',['as'=>'show_message', 'uses' => 'ContactController@show']);
    Route::get('messages/destroy/{id}',['as'=>'destroy_message', 'uses' => 'ContactController@destroy']);

    /*** Quotes ***/
    Route::get('quotes', 'QuoteController@index_admin')->name('quotes');
    Route::get('quotes/show/{id}',['as'=>'show_quote', 'uses' => 'QuoteController@show']);
    Route::get('quotes/destroy/{id}',['as'=>'destroy_quote', 'uses' => 'QuoteController@destroy']);
    Route::get('quotes/download/{id}',['as'=>'download_quote', 'uses' => 'QuoteController@download']);

    /*** Agreements ***/
    Route::get('agreements', 'AgreementController@index')->name('agreements');
    Route::get('agreements/show/{id}',['as'=>'show_agreement', 'uses' => 'AgreementController@show']);
    Route::get('agreements/destroy/{id}',['as'=>'destroy_agreement', 'uses' => 'AgreementController@destroy']);

});

Route::middleware(['member'])->group(function () {
    Route::get('miembros','MemberController@index')->name('members.dashboard');
    Route::get('miembros/mensaje','MessageController@message')->name('members.message');
    Route::post('miembros/mensaje','MessageController@message_store')->name('members.message.store');
    Route::get('miembros/mensaje/{id}','MessageController@message_details')->name('members.message.detail');
    Route::get('miembros/upload/{type}','FileController@create')->name('members.upload.form');
    Route::get('miembros/delete/file/{id}','FileController@destroy')->name('members.delete.file');
    Route::post('miembros/upload','FileController@store')->name('members.upload.file');
    Route::get('miembros/descargar/{id}','FileController@download')->name('file.download');
    Route::get('miembros/registro','Members\RegisterController@showRegisterForm')->name('members.register');
    Route::get('miembros/actualizar/{id}','MemberController@showUpdateForm')->name('members.form.update');
    Route::post('miembros/actualizar/{id}','MemberController@update')->name('members.update');
    Route::post('miembros/registro/guardar','Members\RegisterController@create')->name('members.store');
    Route::get('miembros/get/calendar', 'CalendarController@index');
    Route::get('miembros/evento', 'CalendarController@create')->name('members.create.event');
    Route::get('miembros/evento/{id}', 'CalendarController@show')->name('members.show.event');
    Route::get('miembros/evento/delete/{id}', 'CalendarController@destroy')->name('members.delete.event');
    Route::post('miembros/store/calendar', 'CalendarController@store')->name('members.store.event');
});

Route::get('miembros/ingresar','Members\LoginController@showLoginForm')->name('members.login');
Route::post('miembros/ingresar','Members\LoginController@login');
Route::post('members-password/email','Members\ForgotPasswordController@sendResetLinkEmail')->name('members.password.email');
Route::get('members-password/reset','Members\ForgotPasswordController@showLinkRequestForm')->name('members.password.request');
Route::post('members-password/reset','Members\ResetPasswordController@reset');
Route::get('members-password/reset/{token}','Members\ResetPasswordController@showResetForm')->name('members.password.reset');

Auth::routes();
