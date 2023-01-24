@extends('pages.layout.app')
@section('content')
    <style>
        .bg {
            background:  linear-gradient(rgba(243, 239, 239, 0.64), rgba(230, 224, 224, 0.91)), url("/img2/banner.webp");
            background-position: center center;
            background-repeat: no-repeat;
            background-size: cover;
        }

        .img1.img-fluid {
            max-width: 100%;
             height: 600px;
        }
        .img-drop.img-fluid {
            max-width: 100%;
             height: 450px;
        }
        .whatnft {
            background:  linear-gradient(rgba(67, 62, 62, 0.64), rgba(55, 52, 52, 0.78)), url("img2/nft-cost.jpg.optimal.jpg");
            background-position: center down;
            background-repeat: no-repeat;
            background-size: cover;
        }

        .c li{
            list-style-type: circle;
           text-transform: capitalize;
        }

    </style>

<div style="" class="bg intro1 section-padding">
    <div class="container">
        <div class="row justify-content-between align-items-center">
            <div class="col-xl-5 col-lg-6 col-12">
                <div class="intro-content  my-5">
                    <h1 class="mb-3">Discover, collect, and sell<span> extraordinary NFTs</span></h1>
                    <p class="text-dark">on the world's first &amp; largest NFT marketplace</p>
                    <div class="intro-btn mt-5">
                        <a class="btn btn-primary" href="{{ route('explore') }}">Explore<i class="bi bi-arrow-right"></i>
                        </a>
                        <a class="btn btn-outline-primary" href="{{ route('user.upload') }}">Create</a>
                    </div>
                </div>
            </div>
            <div class="col-xl-5 col-lg-6 col-12">
                <div class="intro-slider">
                    <div class="slider-item"><img  src="nfts/KILLABEARS.gif" alt="" class="img1 img-fluid">
                        <div class="slider-item-avatar"><a >
                                <img src="images/avatar/1.jpg" alt=""></a>
                            <div>
                                <h5>The Sandbox</h5>
                                <p>Sound Box</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="notable-drops section-padding bg-light triangle-top-light triangle-bottom-light">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="section-title text-center d-flex justify-content-between mb-3">
                    <h2 class="text-center">Notable Drops</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-3 col-lg-6 col-md-6">
                <div class="card"><img class="img-drop img-fluid card-img-top" src="img/1.png" alt="">
                    <div class="card-body">
                        <div class="notable-drops-content-img"></div>
                        <h4 class="card-title">Shrapnel Operators</h4>
                        <a  class="text-success">Live<span class="circle bg-success"></span></a>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-6">
                <div class="card">
                    <img class="img-drop img-fluid card-img-top" src="img/2.png" alt="">
                    <div class="card-body">
                        <div class="notable-drops-content-img"></div>
                        <h4 class="card-title">Zombie Ape Club</h4>
                        <a  class="text-success">Live<span class="circle bg-success"></span></a>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-6">
                <div class="card">
                    <img class="img-drop img-fluid card-img-top" src="img/3.gif" alt="">
                    <div class="card-body">
                        <div class="notable-drops-content-img"></div>
                        <h4 class="card-title">Beach Ape</h4>
                        <a  class="text-success">Live<span class="circle bg-success"></span></a>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-6">
                <div class="card"><img class="img-drop img-fluid card-img-top" src="img/4.png" alt="">
                    <div class="card-body">
                        <div class="notable-drops-content-img"></div>
                        <h4 class="card-title">Alien</h4>
                        <a  class="text-success">Live<span class="circle bg-success"></span></a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<div class="item-single section-padding">
        <div class="container">
            <div class="row">
                <div class="col-xxl-12">
                    <div class="top-bid">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <h2 class="mb-3">What is
                                        NFT Marketplace?</h2>
                                    <p style="font-size: 20px" class="mb-3">
                                        NFT, A non-fungible token is a financial security consisting of digital data stored in a blockchain, a form of distributed ledger. The ownership of an NFT is recorded in the blockchain, and can be transferred by the owner, allowing NFTs to be sold and traded.
                                    </p>
                                    <p style="font-size: 20px" class="mb-3">
                                        NFT Marketplace is a decentralized platform where users can create, store, buy & sell NFTs (non fungible tokens).
                                    </p>
                                    <p style="font-size: 20px" class="mb-3">
                                        To trade on the NFTs Marketplace, you need to have a blockchain wallet that supports the type of NFTs you want to buy and sell.
                                    </p>
                                    <p style="font-size: 20px" class="mb-3">
                                        You need to have money in your E-wallet before making all the transactions, such as creating or auctioning NFTs.

                                    </p>
                                </div>
                                <div class="col-md-6"><img  height="450" width="450" src="img2/nft.jpeg" class="img-fluid rounded" alt="..."></div>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<div class="item-single section-padding">
        <div class="container">
            <div class="row">
                <div class="col-xxl-12">
                    <div class="top-bid">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6 pr-0"><img  height="450" width="450" src="img2/nft2.png" class="img-fluid rounded" alt="..."></div>

                                <div class="col-md-6">
                                    <h4>Your one-stop NFT marketplace
                                    </h4>
                                    <h2 class="mb-3">Discover NFTs, built on top of the world's most powerful network.
                                    </h2>
                                    <p style="font-size: 20px" class="mb-3">
                                        Earn up 2% daily interests on your digital assets. It is safe and secure and handled by experts.
                                    </p>
                                   <ul class="c" >
                                       <li>Decentralize</li>
                                       <li>auction</li>
                                       <li>Collections</li>
                                       <li>Create & Sell</li>
                                       <li>NFT Launchpad</li>
                                       <li>OMNI Chain</li>
                                       <li>Data Security</li>
                                       <li>Multi Crypto Wallet</li>
                                       <li>Smart NFts Minting</li>
                                   </ul>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<div class="top-collection section-padding">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-8">
                <div class="section-title text-center">
                    <h2>Top collections over <span class="text-primary">last 7 days</span></h2>
                    <p>Here are a few reasons why you should choose NFTPremiumarts</p>
                </div>
            </div>
        </div>
        <div class="row align-items-center">
            <div class="col-xl-4 col-lg-6 col-md-6">
                <a class="top-collection-content d-block" href="explore">
                    <div class="d-flex align-items-center"><span class="serial">1
                            <!-- -->.
                            </span>
                        <div class="flex-shrink-0"><span class="top-img">
                                <img class="img-fluid" src="img/c1.gif" alt="" width="70"></span></div>
                        <div class="flex-grow-1 ms-3">
                            <h5>Owly #4556</h5>
                            <p class="text-muted"><img src="images/svg/eth.svg" alt="" width="10"
                                                       class="me-2">1.78</p>
                        </div>
                        <h5 class="text-success">+
                            <!-- -->139.25
                        </h5>
                    </div>
                </a>
            </div>
            <div class="col-xl-4 col-lg-6 col-md-6">
                <a class="top-collection-content d-block" href="explore">
                    <div class="d-flex align-items-center"><span class="serial">2
                            <!-- -->.
                            </span>
                        <div class="flex-shrink-0">
                            <span class="top-img">
                                <img class="img-fluid"
                                          src="img/c2.png" alt="" width="70"></span></div>
                        <div class="flex-grow-1 ms-3">
                            <h5>UltraPunk #1035</h5>
                            <p class="text-muted">
                                <img src="images/svg/eth.svg" alt="" width="10"
                                                       class="me-2">0.018</p>
                        </div>
                        <h5 class="text-success">+
                            <!-- -->56.25
                        </h5>
                    </div>
                </a>
            </div>
            <div class="col-xl-4 col-lg-6 col-md-6">
                <a class="top-collection-content d-block" href="explore">
                    <div class="d-flex align-items-center"><span class="serial">3
                            <!-- -->.
                            </span>
                        <div class="flex-shrink-0">
                            <span class="top-img">
                                <img class="img-fluid"
                                          src="img/c3.png" alt="" width="70"></span></div>
                        <div class="flex-grow-1 ms-3">
                            <h5>Alone Astronaut #40324</h5>
                            <p class="text-muted">
                                <img src="images/svg/eth.svg" alt="" width="10"
                                                       class="me-2">0.03</p>
                        </div>
                        <h5 class="text-danger">-
                            <!-- -->78.25
                        </h5>
                    </div>
                </a>
            </div>
            <div class="col-xl-4 col-lg-6 col-md-6">
                <a class="top-collection-content d-block" href="explore">
                    <div class="d-flex align-items-center"><span class="serial">4
                            <!-- -->.
                            </span>
                        <div class="flex-shrink-0">
                            <span class="top-img">
                                <img class="img-fluid"
                                          src="img/c4.png" alt="" width="70"></span></div>
                        <div class="flex-grow-1 ms-3">
                            <h5>Okay Apes #5292
                            </h5>
                            <p class="text-muted">
                                <img src="images/svg/eth.svg" alt="" width="10"
                                                       class="me-2">0.3</p>
                        </div>
                        <h5 class="text-success">+
                            <!-- -->90.25
                        </h5>
                    </div>
                </a>
            </div>
            <div class="col-xl-4 col-lg-6 col-md-6">
                <a class="top-collection-content d-block" href="explore">
                    <div class="d-flex align-items-center"><span class="serial">5
                            <!-- -->.
                            </span>
                        <div class="flex-shrink-0">
                            <span class="top-img">
                                <img class="img-fluid"
                                          src="img/c5.gif" alt="" width="70"></span></div>
                        <div class="flex-grow-1 ms-3">
                            <h5>Shiba #3904</h5>
                            <p class="text-muted">
                                <img src="images/svg/eth.svg" alt="" width="10"
                                                       class="me-2">0.03</p>
                        </div>
                        <h5 class="text-danger">-
                            <!-- -->20.25
                        </h5>
                    </div>
                </a>
            </div>
            <div class="col-xl-4 col-lg-6 col-md-6">
                <a class="top-collection-content d-block" href="explore">
                    <div class="d-flex align-items-center"><span class="serial">6
                            <!-- -->.
                            </span>
                        <div class="flex-shrink-0"><span class="top-img">
                                <img class="img-fluid" src="img/c6.gif" alt="" width="70"></span></div>
                        <div class="flex-grow-1 ms-3">
                            <h5>Bean #6267
                            </h5>
                            <p class="text-muted"><img src="images/svg/eth.svg" alt="" width="10"
                                                       class="me-2">0.78</p>
                        </div>
                        <h5 class="text-success">+
                            <!-- -->104.25
                        </h5>
                    </div>
                </a>
            </div>
            <div class="col-xl-4 col-lg-6 col-md-6">
                <a class="top-collection-content d-block" href="explore">
                    <div class="d-flex align-items-center"><span class="serial">7
                            <!-- -->.
                            </span>
                        <div class="flex-shrink-0"><span class="top-img">
                                <img class="img-fluid" src="img/c7.png" alt="" width="70"></span></div>
                        <div class="flex-grow-1 ms-3">
                            <h5>Exclusive Ape Billionaire Club #1384</h5>
                            <p class="text-muted"><img src="images/svg/eth.svg" alt="" width="10"
                                                       class="me-2">0.58</p>
                        </div>
                        <h5 class="text-danger">-
                            <!-- -->104.25
                        </h5>
                    </div>
                </a>
            </div>
            <div class="col-xl-4 col-lg-6 col-md-6">
                <a class="top-collection-content d-block" href="explore">
                    <div class="d-flex align-items-center">
                        <span class="serial">8
                            <!-- -->.
                            </span>
                        <div class="flex-shrink-0">
                            <span class="top-img">
                                <img class="img-fluid" src="img/c8.png" alt="" width="70"></span></div>
                        <div class="flex-grow-1 ms-3">
                            <h5>FBC #0127</h5>
                            <p class="text-muted"><img src="images/svg/eth.svg" alt="" width="10"
                                                       class="me-2">1.78</p>
                        </div>
                        <h5 class="text-success">+
                            <!-- -->104.25
                        </h5>
                    </div>
                </a>
            </div>
            <div class="col-xl-4 col-lg-6 col-md-6">
                <a class="top-collection-content d-block" href="explore">
                    <div class="d-flex align-items-center"><span class="serial">9
                            <!-- -->.
                            </span>
                        <div class="flex-shrink-0"><span class="top-img"><img class="img-fluid"
                                                                              src="img/c9.gif" alt="" width="70"></span></div>
                        <div class="flex-grow-1 ms-3">
                            <h5>iCat #3760</h5>
                            <p class="text-muted"><img src="images/svg/eth.svg" alt="" width="10"
                                                       class="me-2">0.8</p>
                        </div>
                        <h5 class="text-danger">-
                            <!-- -->104.25
                        </h5>
                    </div>
                </a>
            </div>
            <div class="col-xl-4 col-lg-6 col-md-6">
                <a class="top-collection-content d-block" href="explore">
                    <div class="d-flex align-items-center"><span class="serial">10
                            <!-- -->.
                            </span>
                        <div class="flex-shrink-0"><span class="top-img"><img class="img-fluid"
                                                                              src="img/c10.png" alt="" width="70"></span></div>
                        <div class="flex-grow-1 ms-3">
                            <h5>Colonist #7488</h5>
                            <p class="text-muted"><img src="images/svg/eth.svg" alt="" width="10"
                                                       class="me-2">1.78</p>
                        </div>
                        <h5 class="text-success">+
                            <!-- -->164.25
                        </h5>
                    </div>
                </a>
            </div>
            <div class="col-xl-4 col-lg-6 col-md-6">
                <a class="top-collection-content d-block" href="collection.html">
                    <div class="d-flex align-items-center"><span class="serial">11
                            <!-- -->.
                            </span>
                        <div class="flex-shrink-0"><span class="top-img"><img class="img-fluid"
                                                                              src="img/c11.gif" alt="" width="70"></span></div>
                        <div class="flex-grow-1 ms-3">
                            <h5>Pop It Punk #343
                            </h5>
                            <p class="text-muted"><img src="images/svg/eth.svg" alt="" width="10"
                                                       class="me-2">1.78</p>
                        </div>
                        <h5 class="text-success">+
                            <!-- -->200.0
                        </h5>
                    </div>
                </a>
            </div>
            <div class="col-xl-4 col-lg-6 col-md-6">
                <a class="top-collection-content d-block" href="collection.html">
                    <div class="d-flex align-items-center"><span class="serial">12
                            <!-- -->.
                            </span>
                        <div class="flex-shrink-0"><span class="top-img"><img class="img-fluid"
                                                                              src="img/c12.gif" alt="" width="70"></span></div>
                        <div class="flex-grow-1 ms-3">
                            <h5>SuperMaskMan Club#1715</h5>
                            <p class="text-muted"><img src="images/svg/eth.svg" alt="" width="10"
                                                       class="me-2">0.78</p>
                        </div>
                        <h5 class="text-danger">-
                            <!-- -->40.25
                        </h5>
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>

<div  class="whatnft item-single section-padding ">
        <div class="container">
            <div class="row">
                <div class="col-xxl-12">
                    <div class="top-bid">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <h2 style="font-size: 45px; font-weight: bolder" class="mb-3 text-center text-white">NFT Exchangeable Fields</h2>
                                </div>
                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="col-xl-2 col-lg-2 col-md-2">
                                            <div class="stat-widget create-sell-content">
                                                <div class="create-sell-content-icon">
                                                    {{--                                                    <img height="70" width="70" src="img2/game.svg" alt="">--}}
                                                    <i class="fas fa-palette"></i>
                                                </div>
                                                <div>
                                                    <h4>Art</h4>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-2 col-lg-2 col-md-2">
                                            <div class="stat-widget create-sell-content">
                                                <div class="create-sell-content-icon">
{{--                                                    <img height="70" width="70" src="img2/game.svg" alt="">--}}
                                                    <i class="fas fa-gamepad"></i></div>
                                                <div>
                                                    <h4>Game</h4>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-xl-2 col-lg-2 col-md-2">
                                            <div class="stat-widget create-sell-content">
                                                <div class="create-sell-content-icon">
                                                    {{--                                                    <img height="70" width="70" src="img2/game.svg" alt="">--}}
                                                    <i class="fas fa-city"></i></div>
                                                <div>
                                                    <h4>Real Estate</h4>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-xl-2 col-lg-2 col-md-2">
                                            <div class="stat-widget create-sell-content">
                                                <div class="create-sell-content-icon">
                                                    {{--                                                    <img height="70" width="70" src="img2/game.svg" alt="">--}}
                                                    <i class="fas fa-music"></i></div>
                                                <div>
                                                    <h4>Music</h4>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-xl-2 col-lg-2 col-md-2">
                                            <div class="stat-widget create-sell-content">
                                                <div class="create-sell-content-icon">
                                                    {{--                                                    <img height="70" width="70" src="img2/game.svg" alt="">--}}
                                                    <i class="fas fa-futbol"></i>
                                                </div>
                                                <div>
                                                    <h4>Sport</h4>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-xl-2 col-lg-2 col-md-2">
                                            <div class="stat-widget create-sell-content">
                                                <div class="create-sell-content-icon">
                                                    {{--                                                    <img height="70" width="70" src="img2/game.svg" alt="">--}}
                                                    <i class="fas fa-photo-video"></i>
                                                </div>
                                                <div>
                                                    <h4>Video Clip</h4>
                                                </div>
                                            </div>
                                        </div>

                                    </div>

                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


<div class="trending-category section-padding bg-light triangle-top-light triangle-bottom-light">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="section-title text-center d-flex justify-content-between mb-3">
                    <h2>Trending Items</h2>
                </div>
            </div>
        </div>
        <div class="row align-items-center">
            @foreach($nfts as $item)
                <div class="col-xxl-3 col-xl-6 col-lg-6 col-md-6 col-sm-6">
                    <div class="card items">
                        <div class="card-body">
                            <div class="items-img position-relative">
                                <img src="{{ asset('nfts/'.$item->image) }}" class="img-fluid rounded mb-3" alt="">
                                {{--                                        <img src="images/avatar/17.html" class="creator" width="50" alt="">--}}
                            </div>
                            <a href="{{ route('details', $item->id) }}">
                                <h4 class="card-title">{{ $item->name }}</h4>
                            </a>
                            <div class="d-flex justify-content-between">
                                <div class="text-start">
                                    <p class="mb-2">Auction</p>
                                    <h5 class="text-success">Live </h5>
                                </div>
                                <div class="text-end">
                                    <p class="mb-2">Bid : <strong class="text-primary">{{ $item->bid }}</strong></p>
                                    <h5 class="text-muted">{{ $item->price }}</h5>
                                </div>
                            </div>
                            <div class="d-flex justify-content-center mt-3">
                                <a href="{{ route('details', $item->id) }}" class="btn btn-primary">Place a Bid</a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
                <a href="{{ route('explore') }}" class="text-center">Explore More <i class="bi bi-arrow-right-short"></i></a>

        </div>
    </div>
</div>

<div class="item-single section-padding">
        <div class="container">
            <div class="row">
                <div class="col-xxl-12">
                    <div class="top-bid">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6"><img  height="400" width="400" src="{{ asset('img/logo.png') }}" class="img-fluid rounded" alt="..."></div>

                                <div class="col-md-6">
                                    <h2 class="mb-3">What is NFTPremiumarts ?</h2>
                                    <p style="font-size: 20px" class="mb-3">
                                        NFTPremiumarts is a decentralized marketplace where users can generate, store, buy & sell NFTs (non-fungible tokens).
                                    </p>

                                    <p style="font-size: 20px" class="mb-3">
                                        NFTPremiumarts Marketplace connects and collaborates with Strategic Partners globally.
                                    </p>
                                    <a href="{{ route('about') }}" class="text-center">Read More <i class="bi bi-arrow-right-short"></i></a>
                                </div>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="create-sell section-padding">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-8">
                <div class="section-title text-center">
                    <h2>Create and sell your NFTs</h2>
                    <p>Here are a few reasons why you should choose NFTPremiumarts</p>
                </div>
            </div>
        </div>
        <div class="row align-items-center">
            <div class="col-xl-6 col-lg-6 col-md-6">
                <div class="create-sell-content">
                    <div class="create-sell-content-icon"><i class="bi bi-shield-check"></i></div>
                    <div>
                        <h4>Set up your wallet </h4>
                        <p>Once you’ve set up your wallet of choice, connect it to NFTPremiumarts by clicking the wallet
                            icon in the top right corner. Learn about the wallets we support.</p>

                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-6">
                <div class="create-sell-content">
                    <div class="create-sell-content-icon"><i class="bi bi-x-diamond"></i></div>
                    <div>
                        <h4>Create your collection</h4>
                        <p>Click My Collections and set up your collection. Add social links, a description, profile
                            &amp; banner images, and set a secondary sales fee.</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-6">
                <div class="create-sell-content">
                    <div class="create-sell-content-icon"><i class="bi bi-circle-half"></i></div>
                    <div>
                        <h4>Add your NFTs</h4>
                        <p>Upload your work (image, video, audio, or 3D art), add a title and description, and
                            customize your NFTs with properties, stats, and unlockable content.</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-6">
                <div class="create-sell-content">
                    <div class="create-sell-content-icon"><i class="bi bi-circle-half"></i></div>
                    <div>
                        <h4>List them for sale</h4>
                        <p>Choose between auctions, fixed-price listings, and declining-price listings. You choose
                            how you want to sell your NFTs, and we help you sell them!</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

 <div class="browse-category section-padding border-top">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-8">
                    <div class="section-title text-center">
                        <h2>Browse by category</h2>
                        <p>Here are a few reasons why you should choose NFTPremiumarts</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
                    <div class="card browse-cat"><img class="img-fluid card-img-top" src="/img2/art.webp" alt="">
                        <div class="card-body">
                            <h4>Art</h4>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
                    <div class="card browse-cat"><img class="img-fluid card-img-top" src="/img2/collectibles.webp" alt="">
                        <div class="card-body">
                            <h4>Collectibles</h4>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
                    <div class="card browse-cat"><img class="img-fluid card-img-top" src="/img2/domain-names.webp" alt="">
                        <div class="card-body">
                            <h4>Domain Names</h4>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
                    <div class="card browse-cat"><img class="img-fluid card-img-top" src="/img2/music.webp" alt="">
                        <div class="card-body">
                            <h4>Music</h4>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
                    <div class="card browse-cat"><img class="img-fluid card-img-top" src="/img2/photography-category.webp" alt="">
                        <div class="card-body">
                            <h4>Photography</h4>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
                    <div class="card browse-cat"><img class="img-fluid card-img-top" src="/img2/sports.webp" alt="">
                        <div class="card-body">
                            <h4>Sports</h4>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
                    <div class="card browse-cat"><img class="img-fluid card-img-top" src="/img2/trading-cards.webp" alt="">
                        <div class="card-body">
                            <h4>Trading Cards</h4>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
                    <div class="card browse-cat"><img class="img-fluid card-img-top" src="/img2/utility.webp" alt="">
                        <div class="card-body">
                            <h4>Utility</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



@endsection
