<?php


use Illuminate\Support\Facades\Route;

Route::get('/clear', function(){
    \Illuminate\Support\Facades\Artisan::call('optimize:clear');
});



                Route::post('loan/plans', 'UserActionController@loanPlansMob')->name('loan.plans');
                Route::post('check_kyc_mob', 'UserActionController@check_kyc_mob');

                Route::post('loan/apply', 'UserActionController@applyLoan')->name('loan.apply');
                Route::get('loan/apply/form', 'UserActionController@loanForm')->name('loan.apply.form');
                Route::post('loan/apply/form', 'UserActionController@loanFormSubmit');
                Route::get('loan/list', 'UserActionController@loanList')->name('loan.list');
            Route::post('kyc-verification', 'UserController@kycFormSubmit');
            Route::post('kycsubmit', 'UserController@kycFormSubmitmob');
                Route::post('loan/apply', 'UserActionController@applyLoanMob')->name('loan.apply');


                Route::post('notification', 'UserActionController@notificationsMob');


                Route::get('loan/apply/form', 'UserActionController@loanFormMob')->name('loan.apply.form');
    Route::post('loan/apply/form', 'UserActionController@loanFormSubmitMob')->name('loan.apply');


    Route::post('/login', 'Auth\LoginController@login_mob');
    Route::get('logout', 'Auth\LoginController@logout')->name('logout');

    Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
   Route::post('register', 'Auth\RegisterController@register_mob');
    
//     Route::post('register', function() {
//     return json_encode( 'we are getting POST response');
// });
    
    Route::post('check-mail', 'Auth\RegisterController@checkUser')->name('checkUser');

    Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
    Route::post('password/email', 'Auth\ForgotPasswordController@sendResetCodeEmail')->name('password.email');
    Route::get('password/code-verify', 'Auth\ForgotPasswordController@codeVerify')->name('password.code.verify');
    Route::post('password/reset', 'Auth\ResetPasswordController@reset')->name('password.update');
    Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
    Route::post('password/verify-code', 'Auth\ForgotPasswordController@verifyCode')->name('password.verify.code');
