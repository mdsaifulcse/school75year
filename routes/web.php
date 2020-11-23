<?php
Auth::routes(['verify' => false]);

Route::middleware(['disablepreventback'])->group(function () {

    Route::get('/','IndexController@index');
    Route::get('show-registration-data/{status?}','IndexController@showAllRegistrationData');//->middleware('permission:student');

    Route::get('/load-thana/{district_id}','IndexController@loadThanaUpazila');
    Route::get('/load-union/{thana_id}','IndexController@loadUnions');
    Route::get('/load-village/{union_id}','IndexController@loadVillages');


    Route::get('check-unique-user/{data}/{userID?}','IndexController@uniqueUserValidation');

    Route::post('/registration','IndexController@registration');

    Route::get('/check-registration-status/{mobile}/{code}','IndexController@getRegistrationStatus');


//    Route::get('/','IndexController@login');
    Route::get('/user-login','IndexController@login');
    Route::get('/logout','IndexController@logout');
    /* End */

    Route::post('/custom-login','RegistrationController@login');

    Route::post('/forget-code','RegistrationController@forgetCode');
    Route::get('/login',function(){
        return redirect('user-login');
    })->name('login');
});


Route::middleware(['auth','admin',])->group(function () {

    Route::get('/generate-report','GenerateReport@showReportForm');
    Route::get('/admin-wise-report','GenerateReport@generateCashReport');
    Route::get('/load-admin-wise-amount/{afterBefore}/{adminId}', 'GenerateReport@adminWiseAmountCollection')->middleware('permission:admin-wise-report');

    Route::resource('quick-registration','StudentRegisterController')->middleware('permission:quick-registration');


    Route::get('pending-applicant','StudentsController@pendingApplicant')->middleware('permission:pending-applicant');
    Route::get('show-pending-applicant/{regStatus?}','StudentsController@showAllRegistrationData')->middleware('permission:pending-applicant');

    Route::get('partial-approve-applicant','StudentsController@partialApproveApplicant')->middleware('permission:partial-approve-applicant');
    Route::get('show-partial-approve-list/{regStatus?}/{adminId?}','StudentsController@showAllRegistrationData')->middleware('permission:partial-approve-applicant');

    Route::get('full-approve-applicant','StudentsController@fullApproveApplicant')->middleware('permission:full-approve-applicant');
    Route::get('show-full-approve-list/{regStatus?}','StudentsController@showAllRegistrationData')->middleware('permission:full-approve-applicant');

    Route::get('user-applicant-details/{user_id}','StudentsController@showUserApplicantDetails')->middleware('permission:full-approve-applicant');
    Route::get('user-photo-upload/{user_id}','StudentsController@showUserPhotoUploadForm')->middleware('permission:full-approve-applicant');
    Route::post('user-photo-upload','StudentsController@saveUserUploadedPhoto')->middleware('permission:full-approve-applicant');

    Route::get('approve-with-payment/{user_id}','StudentsController@userApproveWithPayment');//->middleware('permission:student');
    Route::post('approve-with-payment','StudentsController@saveRegistrationPayment');//->middleware('permission:student');
    Route::post('update-voucher-number','StudentsController@updateVoucherNumber');//->middleware('permission:student');

    Route::post('final-approve','StudentsController@finalApprove');//->middleware('permission:student');
    Route::post('delete-user','StudentsController@deleteApplicantUser');//->middleware('permission:student');

    // student area ----------------

    Route::get('/payment','StudentPaymentController@index')->middleware('permission:my-payment');
    Route::get('/payment-received','StudentPaymentController@paymentReceived')->middleware('permission:my-payment');
    Route::get('/payment-url-generate/{amount}','StudentPaymentController@urlGenerate')->middleware('permission:my-payment');
    Route::get('/student-payment/{studyId}','StudentPaymentController@showStudentPaymentInfo')->middleware('permission:my-payment');
    Route::get('my-payment-history','StudentPaymentController@showMyPaymentHistory')->middleware('permission:my-payment');


    //Notice View
    Route::get('notice/{id?}','NoticeViewController@noticeList');//->middleware('permission:notice-view');
    Route::get('notice-view/{id?}','NoticeViewController@noticePage');//->middleware('permission:notice-view');

    Route::get('calendar', 'CalendarController@index');
    Route::get('calendar-modal/{id}', 'CalendarController@modalLoad');
    Route::resource('events', 'EventController');
    //Notice
    Route::resource('notice-category','NoticecategoryController')->middleware('permission:notice');
    Route::resource('notice-admin','NoticeController')->middleware('permission:notice');

    // Route::resource('about-update','AboutController')->middleware('permission:about');
    Route::resource('acl-role', 'AclRolesController')->middleware('permission:acl');
    Route::resource('acl-permission', 'AclPermissionController')->middleware('role:system');
    Route::post('acl-permission-role', 'AclPermissionController@storeRole')->middleware('permission:acl');


    Route::resource('primary-info','PrimaryInfoController')->middleware('permission:primary-info');
    Route::resource('slider-admin','SliderController')->middleware('permission:slider');
    Route::resource('batches', 'BatchController')->middleware('permission:batches');
    Route::resource('/district','DistrictController');
    Route::resource('/thana-upazila','ThanaUpazilaController');
    Route::resource('/union','UnionController');
    Route::resource('/village','VillageController');
    Route::resource('all-users','UsersController')->middleware('permission:users');

    Route::resource('user-profile','ProfileController');
    Route::post('change-password',[ 'as'=>'password','uses'=>'UsersController@password']);
    Route::get('change-password','UsersController@changePass')->middleware('permission:users');

    // menu setting --------------------
    Route::resource('menu','MenuController')->middleware('permission:menu');
    Route::resource('sub-menu','SubMenuController')->middleware('permission:menu');
    Route::resource('sub-sub-menu','SubSubMenuController')->middleware('permission:menu');
    Route::get('page-menu','MenuController@page')->middleware('permission:menu');
    Route::resource('pages','PagesController');

    Route::get('/home', 'DashboadController@home');
    Route::get('/dashboard', 'DashboadController@dashboard');
    Route::get('/load-admin-wise-payment/{adminId}', 'DashboadController@adminWiseCollection');
    Route::get('/email/verify', function(){return redirect('/home');})->name('verification.notice');

    include('routeOne.php');

});



Route::get('register', function () {
    return redirect('/');
});
Route::get('email-template', function () {
    return view('vendor.notifications.email');
});