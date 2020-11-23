<?php
Route::get('/clear-all', function() {
    Artisan::call('cache:clear');
    Artisan::call('route:cache');
    Artisan::call('view:clear');
    return redirect()->back()->with('success','Successfully Clear Cache facade value.');
});


Route::get('/config-cache', function() {
    $exitCode = Artisan::call('config:cache');
    return redirect()->back()->with('success','Successfully Clear Config cache.');
});


Route::get('/home/{slug}', 'DashboadController@subMenu');
Route::get('/home/{slug}/{subslug}', 'DashboadController@subSubMenu');

// new student create by admin --------------
Route::resource('students','StudentRegisterController')->middleware('permission:admit-student');
Route::get('quick-admit','StudentRegisterController@quick')->middleware('permission:admit-student');
Route::get('check-unique-student/{data}/{userID?}','StudentRegisterController@userValidation');//->middleware('permission:admit-student');//data may be mobile or email



Route::resource('/notifications','NotificationController');

