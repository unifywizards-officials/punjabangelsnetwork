<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\LocationController;
use App\Http\Controllers\BannerController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\StaticPageSeoController;
use App\Http\Controllers\AdvisorMember;
use App\Http\Controllers\CustomFormDataController;
use App\Http\Controllers\FormBuilderController;
use App\Http\Controllers\InvestorMember;
use App\Http\Controllers\SpecialistMember;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\DynamicPartnerController;
use App\Http\Controllers\StartupPortfolioController;
use App\Http\Controllers\PartnerInActionController;
use App\Http\Controllers\EcosystemPartnerController;
use App\Http\Controllers\InstitutionalPartnerController;


use Illuminate\Support\Facades\Mail;
use App\Mail\ContactUsMail;
use App\Mail\SubscribeMail;
use App\Models\Member;
use Illuminate\Support\Facades\Hash;
use App\Models\PartnerInAction;
use App\Models\EcosystemPartner;
use App\Models\InstitutionalPartner;
use App\Models\Events;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/guest-registration', function () {
    return view('guest.visitor-registration');
});
Route::get('event-form/{event}', [EventController::class, 'eventFormView'])->name('eventForm.view');
Route::post('submit-visitor-form', [HomeController::class, 'submitvisitorform'])->name('submit-visitor-form');

Route::get('/abcd', function () {
    // return view('guest.demo');
    // return Hash::make('panindiamanager!@#123');
});

Route::get('/captech-24', function () {

    $blog=Events::where('slug','captech-2024')->first();
    return view('guest.captech-24',compact('blog'));
})->name('captech-24');



Route::get('/investor-enrollment', function () {
    return view('guest.page.investor-enrollment');
})->name('investor-enrollment');

Route::post('save-investor-enrollment', [HomeController::class, 'investorenrollmentSave'])->name('forms.investorenrollment');

Route::get('/mentorship-fundraise-for-startups', function () {
    return view('guest.page.mentorship-fundraise');
})->name('mentorship-fundraise-for-startups');
Route::post('save-mentorship-fundraise', [HomeController::class, 'mentorshipfundraiseSave'])->name('forms.mentorshipfundraise');

Route::get('/corporate-membership-enrollment', function () {
    return view('guest.page.corporate-membership-enrollment');
})->name('corporate-membership-enrollment');

Route::post('save-corporate-membership-enrollment', [HomeController::class, 'corporatememberSave'])->name('forms.corporate-membership-enrollment');






Route::get('/startup-form', function () {
    return view('guest.page.startup-form');
})->name('startup.form');


Route::get('/', [PageController::class, 'homepage'])->name('homepage');


Route::get('/send-email', function () {
    // Email sending logic here
    // Mail::to('rajan@unifywizards.com')->send(new SubscribeMail());
    // Mail::to(['rajan@unifywizards.com','anand.singh@unifywizards.com','manish.negi@unifywizards.com'])->send(new SubscribeMail());
    Mail::to(['anand.singh@unifywizards.com','manish.negi@unifywizards.com'])->send(new SubscribeMail());

    return 'Email sent successfully';
});

Route::get('/send-email1', function () {
    $toEmail = 'manish.negi@unifywizards.com';
    // Define the email content
    $data = [
        'subject' => 'Test Email',
        'body' => 'This is a test email sent using SMTP.'
    ];

    // Send email using Laravel's Mail facade
    Mail::raw($data['body'], function ($message) use ($toEmail, $data) {
        $message->to($toEmail)
            ->subject($data['subject']);
    });

    return 'Email sent successfully!';
});




// Route::view('admin','admin.dashboard');
// Route::view('guest','guest.dashboard');
Auth::routes();
// Route::get('contact', [HomeController::class, 'contactform'])->name('contact.show');
Route::get('/visa-and-insurance', [HomeController::class, 'show_visa_insurance'])->name('show_visa_insurance');

// Route::get('{destination}-packages', [DestinationController::class, 'showDestination'])->name('showDestination');
// Route::get('{destination}-packages/{package}', [PackageController::class, 'showPackage'])->name('showPackage');
Route::get('/get-quote', [HomeController::class, 'getQuote'])->name('get-quote');
Route::post('/submit-quote', [HomeController::class, 'submitQuote'])->name('submit-quote');
Route::post('/submit-contact', [HomeController::class, 'submitContact'])->name('submit-contact');
Route::get('/about', function () {
    $MetaOg = '';
    return view('guest.about', compact('MetaOg'));
})->name('about');

Route::get('/partners', function () {
    $MetaOg = '';
    $partner_in_action = PartnerInAction::where('is_active', '1')->get();
    $ecosystem_partner = EcosystemPartner::where('is_active', '1')->get();
    $institutional_partner = InstitutionalPartner::where('is_active', '1')->get();
    return view('guest.partners', compact('MetaOg', 'partner_in_action', 'ecosystem_partner', 'institutional_partner'));
})->name('partners');

Route::get('/custom-form-link', function () {
    $MetaOg = '';
    return view('guest.pagelink', compact('MetaOg'));
})->name('custom-form-link');

Route::get('/our-team', function () {
    $MetaOg = '';
    $board_adviser = Member::where('is_active', '1')->where('type', '1')->orderBy('order_position')->get();
    $turn_around_specialist = Member::where('is_active', '1')->where('type', '2')->orderBy('order_position')->get();
    $investors = Member::where('is_active', '1')->where('type', '3')->orderBy('order_position')->get();
    return view('guest.our-team', compact('MetaOg', 'board_adviser', 'turn_around_specialist', 'investors'));
})->name('our-team');

Route::get('/startup', function () {
    $MetaOg = '';
    return view('guest.startup', compact('MetaOg'));
})->name('startup');

Route::get('/apply', function () {
    $MetaOg = '';
    return view('guest.apply', compact('MetaOg'));
})->name('apply');

Route::get('/fund-raising', function () {
    $MetaOg = '';
    return view('guest.fund-raising', compact('MetaOg'));
})->name('fund-raising');

Route::get('/investors', function () {
    return view('guest.investors');
})->name('investors');

Route::get('/institutional-support', function () {
    return view('guest.school-college');
})->name('institutional-support');


Route::get('/privacy', function () {
    $MetaOg = '';
    return view('guest.privacy', compact('MetaOg'));
})->name('privacy');

Route::get('/contact', function () {
    $MetaOg = '';
    return view('guest.contact', compact('MetaOg'));
})->name('contact');

Route::get('blog', [BlogController::class, 'bloglist'])->name('blog.list');
Route::get('events', [EventController::class, 'eventlist'])->name('events.list');
Route::get('news', [NewsController::class, 'newslist'])->name('news.list');
Route::get('event-Form-data/{event}', [EventController::class, 'eventFormView'])->name('eventFormView');
Route::post('event-Form-data-save', [EventController::class, 'eventFormDataPost'])->name('submit-eventform');


Route::get('qa-series/{slug}', [FormBuilderController::class, 'getForm'])->name('view-form');

Route::get('get-form-builder', [FormBuilderController::class, 'read'])->name('read-form');
Route::post('save-form-transaction', [CustomFormDataController::class, 'create'])->name('save-form');


Route::post('/filepond/upload', [HomeController::class, 'upload'])->name('filepond.upload');
Route::delete('/filepond/revert', [HomeController::class, 'revert'])->name('filepond.revert');
Route::post('save-apply-now', [HomeController::class, 'saveAppynow'])->name('forms.store');






Route::prefix('admin')->middleware(['auth', 'CheckTypeOfUser:admin'])->group(function () {
    Route::get('/dashboard', [HomeController::class, 'index'])->name('dashboard');
    Route::resource('category', CategoryController::class, ['as' => 'admin']);
    Route::resource('manage-blog', BlogController::class, ['as' => 'admin']);
    Route::resource('manage-event', EventController::class, ['as' => 'admin']);
    Route::resource('manage-news', NewsController::class, ['as' => 'admin']);

    Route::resource('manage-board-advisors', AdvisorMember::class, ['as' => 'admin']);
    Route::resource('manage-turnaroud-specialist', SpecialistMember::class, ['as' => 'admin']);
    Route::resource('manage-investors', InvestorMember::class, ['as' => 'admin']);


    Route::resource('custom-form', FormBuilderController::class, ['as' => 'admin']);
    Route::get('custom-formData/edit', [FormBuilderController::class, 'editData'])->name('admin.custom-formData.edit');
    Route::post('custom-form/update', [FormBuilderController::class, 'updateData'])->name('admin.custom-formData.update');

    Route::get('dataview', [CustomFormDataController::class, 'index'])->name('admin.custom-showData');
    Route::get('data/{formid}/{id}', [FormBuilderController::class, 'viewData'])->name('admin.data.show');


    Route::get('data-view-show-in-form', [CustomFormDataController::class, 'showDataInform'])->name('admin.data-view-show-in-form');


    // Route::get('custom-form/{slug}', [FormBuilderController::class, 'viweFormContent'])->name('admin.custom-viweFormContent');



    Route::get('event-Form-data', [EventController::class, 'eventFormData'])->name('admin.eventFormData');
    Route::get('captech24-event-Form-data', [EventController::class, 'event24FormData'])->name('admin.24eventFormData');
    Route::post('/update-order', [MemberController::class, 'updateOrder'])->name('updateOrder');
    Route::get('view-apply-now', [HomeController::class, 'viewAppynow'])->name('admin.applynow.view');

    Route::get('view-mentorship-or-fundraise', [HomeController::class, 'viewMentorShip'])->name('admin.mentorship-or-fundraise.view');
    Route::get('view-investor-enrollment', [HomeController::class, 'viewInvestorEnrollment'])->name('admin.investor-enrollment');
    Route::get('view-corporate-enrollment', [HomeController::class, 'viewCorporateEnrollment'])->name('admin.corporate-enrollment');


    Route::get('/edit-setting', [SettingController::class, 'editSetting'])->name('admin.edit.setting');
    Route::post('/update-setting', [SettingController::class, 'updateSetting'])->name('admin.update.setting');

    Route::get('/contact-data', [HomeController::class, 'contactDataList'])->name('admin.contactdata.list');
    Route::get('/quote-data', [HomeController::class, 'quoteDataList'])->name('admin.quotedata.list');
    Route::delete('/items/delete-selected', [HomeController::class, 'deleteSelected'])->name('admin.delete.selected');
    Route::resource('manage-banner', BannerController::class, ['as' => 'admin']);
    Route::resource('manage-partners', DynamicPartnerController::class, ['as' => 'admin']);
    Route::resource('manage-startup-portfolio', StartupPortfolioController::class, ['as' => 'admin']);
    Route::resource('manage-partner-in-action', PartnerInActionController::class, ['as' => 'admin']);
    Route::resource('manage-ecosystem-partner', EcosystemPartnerController::class, ['as' => 'admin']);
    Route::resource('manage-institutional-partner', InstitutionalPartnerController::class, ['as' => 'admin']);



    Route::get('edit-staticpage_seo', [StaticPageSeoController::class, 'editStaticPageSeo'])->name('admin.edit-staticpage_seo');
    Route::post('update-staticpage_seo', [StaticPageSeoController::class, 'updateStaticPageSeo'])->name('admin.update-staticpage_seo');
    Route::get('/edit-visa-and-insurance', [HomeController::class, 'editVisaInsurance'])->name('admin.edit.visa_insurance');
    Route::post('/update-visa-and-insurance', [HomeController::class, 'updateVisaInsurance'])->name('admin.update.visa_insurance');
});

Route::prefix('user')->middleware(['auth', 'CheckTypeOfUser:user'])->group(function () {
    Route::get('/dashboard', [HomeController::class, 'index'])->name('user.dashboard');
    Route::get('/contact-data', [HomeController::class, 'contactDataList'])->name('user.contactdata.list');
    Route::get('/quote-data', [HomeController::class, 'quoteDataList'])->name('user.quotedata.list');
});



Route::prefix('event-manager')->middleware(['auth', 'CheckTypeOfUser:event-manager'])->group(function () {
    Route::get('/dashboard', [HomeController::class, 'index'])->name('event-manager.dashboard');

    Route::resource('category', CategoryController::class, ['as' => 'event-manager']);
    Route::resource('manage-blog', BlogController::class, ['as' => 'event-manager']);
    Route::resource('manage-event', EventController::class, ['as' => 'event-manager']);
    Route::resource('manage-news', NewsController::class, ['as' => 'event-manager']);


    Route::resource('manage-board-advisors', AdvisorMember::class, ['as' => 'event-manager']);
    Route::resource('manage-turnaroud-specialist', SpecialistMember::class, ['as' => 'event-manager']);
    Route::resource('manage-investors', InvestorMember::class, ['as' => 'event-manager']);

    Route::get('event-Form-data', [EventController::class, 'eventFormData'])->name('event-manager.eventFormData');


    Route::get('/edit-setting', [SettingController::class, 'editSetting'])->name('event-manager.edit.setting');
    Route::post('/update-setting', [SettingController::class, 'updateSetting'])->name('event-manager.update.setting');

    Route::delete('/items/delete-selected', [HomeController::class, 'deleteSelected'])->name('event-manager.delete.selected');
    Route::resource('manage-banner', BannerController::class, ['as' => 'event-manager']);


    Route::get('edit-staticpage_seo', [StaticPageSeoController::class, 'editStaticPageSeo'])->name('event-manager.edit-staticpage_seo');
    Route::post('update-staticpage_seo', [StaticPageSeoController::class, 'updateStaticPageSeo'])->name('event-manager.update-staticpage_seo');
    Route::get('/contact-data', [HomeController::class, 'contactDataList'])->name('event-manager.contactdata.list');
    Route::get('/quote-data', [HomeController::class, 'quoteDataList'])->name('event-manager.quotedata.list');
});

Route::prefix('seo-manager')->middleware(['auth', 'CheckTypeOfUser:seo-manager'])->group(function () {
    Route::get('/dashboard', [HomeController::class, 'index'])->name('seo-manager.dashboard');
    Route::resource('category', CategoryController::class, ['as' => 'seo-manager']);
    Route::resource('manage-blog', BlogController::class, ['as' => 'seo-manager']);
    Route::get('/edit-setting', [SettingController::class, 'editSetting'])->name('seo-manager.edit.setting');
    Route::post('/update-setting', [SettingController::class, 'updateSetting'])->name('seo-manager.update.setting');
    Route::delete('/items/delete-selected', [HomeController::class, 'deleteSelected'])->name('delete.selected');
    Route::get('edit-staticpage_seo', [StaticPageSeoController::class, 'editStaticPageSeo'])->name('seo-manager.edit-staticpage_seo');
    Route::post('update-staticpage_seo', [StaticPageSeoController::class, 'updateStaticPageSeo'])->name('seo-manager.update-staticpage_seo');
    Route::get('/edit-visa-and-insurance', [HomeController::class, 'editVisaInsurance'])->name('seo-manager.edit.visa_insurance');
    Route::post('/update-visa-and-insurance', [HomeController::class, 'updateVisaInsurance'])->name('seo-manager.update.visa_insurance');
});

// Route::get('{slug}', [PageController::class, 'pageView'])->name('page.view');

Route::prefix('blog')->group(function () {
    Route::get('{slug}', [BlogController::class, 'blogDetail'])->name('blog.detail');
});

Route::prefix('event')->group(function () {
    Route::get('{slug}', [EventController::class, 'blogDetail'])->name('event.detail');
});

Route::prefix('news')->group(function () {
    Route::get('{slug}', [NewsController::class, 'newsDetail'])->name('news.detail');
});

// Route::get('blog/search', [BlogController::class, 'searchData'])->name('blog.search');

Route::get('/notfound', function () {
    abort(404);
});
