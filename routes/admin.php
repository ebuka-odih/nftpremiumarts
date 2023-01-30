<?php

use Illuminate\Support\Facades\Route;


Route::group(['middleware' => ['auth', 'verified', 'admin'], 'prefix' => 'admin', 'as' => 'admin.'], function(){

    Route::get('dashboard', "Admin\AdminController@dashboard")->name('dashboard');
    Route::get('security', "Admin\AdminController@security")->name('security');
    Route::post('security', "Admin\AdminController@storePassword")->name('storePassword');
    Route::post('update/balance', "Admin\AdminController@minusBalance")->name('minusBalance');


    Route::get('user/details/{id}', "Admin\UserController@userDetails")->name('userDetails');
    Route::get('users', 'Admin\UserController@users')->name('users');
    Route::delete('delete/user', 'Admin\UserController@deleteUser')->name('deleteUser');
    Route::get('add-wallet', "Admin\UserController@wallet")->name('wallet');
    Route::post('add-wallet', "Admin\UserController@storeWallet")->name('storeWallet');

    Route::get('user/withdrawal/method/{id}', "Admin\UserController@userWithdrawMethod")->name('userWithdrawMethod');
    Route::delete('delete/user/{id}', "Admin\UserController@deleteUser")->name('deleteUser');


    Route::get('deposits', "Admin\AdminDeposit@deposits")->name('deposit');
    Route::get('view/deposits', "Admin\AdminDeposit@view_deposit")->name('view_deposit');
    Route::get('approve/deposit/{id}', "Admin\AdminDeposit@approve_deposit")->name('approve_deposit');
    Route::delete('delete/deposit/{id}', "Admin\AdminDeposit@deleteDeposit")->name('deleteDeposit');

    // Withdrawal Route
    Route::get('withdrawals', "Admin\AdminWithdraw@withdrawal")->name('withdrawal');
    Route::get('approve/withdrawal/{id}', "Admin\AdminWithdraw@approve_withdrawal")->name('approve_withdrawal');
    Route::delete('delete/withdrawal/{id}', "Admin\AdminWithdraw@delete_withdrawal")->name('delete_withdrawal');

    Route::get('investments', "Admin\AdminInvestment@investment")->name('investment');
    Route::get('investments/details/{id}', "Admin\AdminInvestment@investmentDetails")->name('investmentDetails');
    Route::delete('delete/investments', "Admin\AdminInvestment@delete_investment")->name('delete_investment');
    Route::get('pause/investment', "Admin\AdminInvestment@pauseInvestment")->name('pauseInvestment');
    Route::get('resume/investment', "Admin\AdminInvestment@resumeInvestment")->name('resumeInvestment');

    Route::resource('package', "Admin\PackageController");
    Route::resource('collectable', "Admin\AdminCollectable");
    Route::resource('nftlisting', "Admin\AdminNFTListing");

    // Funding Route
    Route::get('fund/user', "Admin\FundingController@fund")->name('fund');
    Route::post('fund/user', "Admin\FundingController@sendFund")->name('sendFund');

    Route::resource('wallet', "Admin\PaymentMethodController");

//    Buy4me Routes
    Route::get('buy4me', "Admin\AdminBuy4Me@buy4me")->name('buy4me');
    Route::get('approve/buy4me/{id}', "Admin\AdminBuy4Me@approveBuy4me")->name('approveBuy4me');

    Route::get('nft/list', "Admin\AdminSellController@list")->name('nft.list');
    Route::get('apr/list/{id}', "Admin\AdminSellController@approve")->name('nft.approve');
});
