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

Route::get('/', 'Web@index')->name('index');

Route::post('/', ['as'=>'index.send', 'uses'=>'IndexController@indexPost']);

Route::get('/soporte/', 'Web@soport')->name('web-soporte');
Route::get('/nuestros-clientes/', 'Web@clients')->name('clients');
Route::get('/casos-de-exito/', 'Web@success_stories')->name('success_stories');
Route::get('/newsletter/', 'NewsletterController@newsletter')->name('newsletter');
Route::post('/newsletter/', ['as'=>'newsletter.send', 'uses'=>'NewsletterController@newsletterPost']);
Route::get('/quienes-somos/', 'Web@about')->name('about');

Route::get('/Unete-A-Nosotros/', 'TeamController@index')->name('team');
Route::post('/Unete-A-Nosotros/', ['as'=>'team.register', 'uses'=>'TeamController@register']);


Route::get('/productos-suite/', 'SuiteController@index')->name('suite');
Route::get('/Activos-centralizados/', 'CentalizedController@index')->name('centalized-asset');
Route::get('/Omega-Cmdb/', 'CmdbController@index')->name('cmdb');
Route::get('/Omega-KnowledgeBase/', 'KBController@index')->name('omegaKB');
Route::get('/Manuales/', 'ManualController@index')->name('manuales');
Route::get('/contacto/', 'ContactController@contact')->name('contact');
Route::post('/contacto/', ['as'=>'contact.send', 'uses'=>'ContactController@contactPost']);

Route::get('/partners/', 'PartnerController@index')->name('partner');
Route::get('/portal-partner/', 'PartnerController@portal')->name('portal-partner');
Route::get('/programa-partner/', 'PartnerController@program')->name('program-partner');
Route::post('/programa-partner/', ['as'=>'partner.send', 'uses'=>'PartnerController@programPost']);

Route::get('/demo/', 'DemoController@index')->name('demo');
Route::get('/demo-guiada/', 'DemoController@guiada')->name('demo-guiada');
Route::post('/demo-guiada-send/', ['as'=>'demo.send', 'uses'=>'DemoController@demoPost']);

Route::get('/english/', 'Web@english')->name('english');

Route::get('/soluciones-itsm/', 'ITSMController@index')->name('ITSM');
Route::post('/soluciones-itsm/', ['as'=>'quotation.send', 'uses'=>'ITSMController@quotationSend']);
Route::get('/solicitud/serial/', 'Web@request_serial')->name('request_serial');
Route::get('/webcast/', 'WebcastController@index')->name('webcast');
Route::post('/webcast/', ['as'=>'webcast.register', 'uses'=>'WebcastController@register']);

Route::get('/open-ticket/', 'Web@open_ticket')->name('open_ticket');
Route::get('/ticket-tracking/', 'Web@ticket_tracking')->name('ticket_tracking');
Route::get('/kwoledgebase/', 'Web@omega_kwoledgebase')->name('omega_kwoledgebase');


Route::post('/modals/Commentary/store', ['as'=>'commentary.store', 'uses'=>'ExpenseReportController@store']);
Route::get('/modals/Commentary', 'ExpenseReportController@create');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('admin/commentary', 'ExpenseReportController@index')->name('commentary-index');
Route::get('admin/commentary/delete/{post}/', 'ExpenseReportController@delete')->name('commentary-delete');


Route::get('admin/blog', 'BlogController@index')->name('blog-index');
Route::get('admin/blog/create/', 'BlogController@create')->name('blog-create');
Route::get('admin/blog/update/{post}/', 'BlogController@update')->name('blog-update');
Route::post('admin/blog/update/{post}/', 'BlogController@update')->name('blog-update');
Route::get('admin/blog/delete/{post}/', 'BlogController@delete')->name('blog-delete');
Route::post('admin/blog/store', ['as'=>'blog.store', 'uses'=>'BlogController@store']);
Route::get('admin/', 'AdminController@index');



Route::get('admin/newsletter', 'NewsletterWebController@index')->name('newsletter-index');
Route::get('admin/newsletter/create/', 'NewsletterWebController@create')->name('newsletter-create');
Route::get('admin/newsletter/update/{post}/', 'NewsletterWebController@update')->name('newsletter-update');
Route::post('admin/newsletter/update/{post}/', 'NewsletterWebController@update')->name('newsletter-update');
Route::get('admin/newsletter/delete/{post}/', 'NewsletterWebController@delete')->name('newsletter-delete');
Route::post('admin/newsletter/store', ['as'=>'newsletterWeb.store', 'uses'=>'NewsletterWebController@store']);



Route::get('/newsletter/', 'NewsletterController@index')->name('newsletter');
Route::get('/newsletter/{newsletterName}', 'NewsletterController@details')->name('newsletter-name');


Route::get('admin/category', 'CategoryController@index')->name('category-index');
Route::get('admin/category/create/', 'CategoryController@create')->name('category-create');
Route::get('admin/category/update/{category}/', 'CategoryController@update')->name('category-update');
Route::post('admin/category/update/{category}/', 'CategoryController@update')->name('category-update');
Route::get('admin/category/delete/{category}/', 'CategoryController@delete')->name('category-delete');
Route::post('admin/category/store', ['as'=>'category.store', 'uses'=>'CategoryController@store']);


Route::get('/blog/', 'BlogWebController@index')->name('blog');
Route::get('/blog/{blogName}', 'BlogWebController@blog')->name('blog-name');

Route::get('/blogs/{categoryName}/', 'BlogWebController@blogsCategory')->name('blog-category');
Route::get('/register-user/', 'AdminController@registerUser')->name('register-user');
Route::post('/store-user/', 'AdminController@storeUser')->name('store-user');


Route::redirect('/public', '/');
Route::redirect('/soluciones/itsm', '/soluciones-itsm');
Route::redirect('/public/soluciones/itsm', '/soluciones-itsm');
Route::redirect('/public/quienes-somos', '/quienes-somos');
Route::redirect('/public/programa-partner', '/programa-partner');
Route::redirect('/public/demo-guiada', '/demo-guiada');
Route::redirect('/public/nuestros-clientes', '/nuestros-clientes');
Route::redirect('/public/blog', '/blog');
Route::redirect('/public/blog/itil', '/blog/itil');
Route::redirect('/public/blog/bienvenido', '/blog/bienvenido');
Route::redirect('/public/blogs/omega-itsm', '/blogs/omega-itsm');
Route::redirect('/public/blogs/service-desk', '/blogs/service-desk');
Route::redirect('/public/blogs/mesa-de-ayuda', '/blogs/mesa-de-ayuda');