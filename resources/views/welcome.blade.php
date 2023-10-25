<!DOCTYPE html>

<html lang="en">

<head>
   <head>
       <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
     <title>Art Sense Goods</title>

    <link rel="shortcut icon" href="assets/img/favicon.ico" type="image/x-icon">
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback" />
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link rel="stylesheet" href="{{ asset('assets/css/utility.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/media1900.css') }}" />
    <script type="text/javascript" src="{{ asset('assets/script/html2canvas.js') }}"></script>
    <!-- Bootstrap Link -->

    <link rel="stylesheet" href="{{ asset('assets/plugin/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/index.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/loader.css') }}" />
    <link rel="stylesheet" href="{{asset('assets/sweetalert2/sweetalert2.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/css/site-color.css')}}" />
</head>
<style>
    textarea{resize:none;}
    .fs-14{font-size: 14px !important;}
    .fs-16{font-size: 16px !important;}
    #mockup1,
    #mockup2,
    #mockup3 {
        position: absolute;
        white-space: nowrap;
    }

    .hide,.d-none{display: none;}

    .disable-select {
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
    }

    .right-arrow {
        display: inline-block;
        position: relative;
        background: orange;
        padding: 15px;
    }

    #whole-dimension:before {
        content: '';
        display: block;
        position: absolute;
        left: -6px;
        bottom: 100%;
        width: 0;
        height: 0;
        border-bottom: 5px solid #fff;
        border-top: 5px solid transparent;
        border-left: 5px solid transparent;
        border-right: 5px solid transparent;
    }

    #whole-dimension:after {
        content: '';
        display: block;
        position: absolute;
        left: 100%;
        bottom: 0%;
        margin-bottom: -6px;
        width: 0;
        height: 0;
        border-top: 5px solid transparent;
        border-right: 5px solid transparent;
        border-bottom: 5px solid transparent;
        border-left: 5px solid #fff;
    }

    .boxToHide {
        transition: 1s ease-out;

    }

    .showBox {
        opacity: 1;
    }

    .all-loader{
        position: fixed;
        width: 100%;
        z-index: +2222;
        height:100vh;
        background:white;
        display:flex;
        justify-content:center; 
        align-items:center;
    }
</style>

<body class="bg-img disable-select" oncontextmenu="return false" onmousemove="$('#phone_number').focus();">
    <div class="all-loader d-none"><img src="{{asset('assets/img/loader.gif')}}"></div>
    <section class="main-padding pt-3">
        <div class="row p-1 p-sm-1 p-md-2 p-lg-2 mx-1 mx-sm-2 mx-lg-2 mx-md-2 bg-F34EFF-top text-white justify-content-center align-items-center robotoMedium box-shadow-font blinker f-22"
            id="bannarTopText">FREE GLOBAL SHIPPING + REMOTE CONTROL ON ALL ORDERS <span><i
                    class="fa fa-check text-white bg-success p-1 border ml-2" aria-hidden="true"></i></span></div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-7 col-lg-7 col-sm-12 px-1 px-sm-2 px-md-2 px-lg-2">
                    <!-- Top Text code start -->
                    <div class="bg-white pl-1 pl-sm-1 pl-md-2 pl-lg-4 pr-1 pr-sm-1 pr-md-2 pr-lg-4  pt-2 pb-2 box-shadow-font"
                        id="copyimage">
                          <section class="pb-0 pb-sm-0 pb-md-2 pb-lg-3 d-none d-md-block">
                            <div class="display-1 RetroSignature cl-F34EFF text-center">ArtSenseGoods</div>
                            <div class="text-center f-15 robotoLight pt-2 top-heading">I twist Neons the way you like it!</div>
                        </section>
                        <!-- Top Text code end -->
                        <!-- tabs view only on mobile screens code start-->
                        <div class="">
                            <div class="d-flex m-0 justify-content-between pt-2">
                                <div class="col-lg-2 col-md-2 mob_slide_image col-sm-2 p-0 text-center img-tabs img-tab-shadow mobile_tab_img_active"
                                    src="{{ asset('assets/img/room_wall.png')}}" onclick="currentSlide(this,'room')">
                                    <p class="robotoMedium m-0 top-tabs room py-1 py-sm-1 py-md-2 py-lg-2">Room </p>
                                </div>
                                <div class="col-lg-2 col-md-2 mob_slide_image col-sm-2 p-0 text-center img-tab-shadow img-tabs"
                                    src="{{ asset('assets/img/hedge_wall.jpg')}}" onclick="currentSlide(this,'green')">
                                    <p class="robotoMedium m-0 top-tabs green py-1 py-sm-1 py-md-2 py-lg-2">Green</p>
                                </div>
                                <div class="col-lg-2 col-md-2 mob_slide_image col-sm-2 p-0 text-center img-tab-shadow img-tabs"
                                    src="{{ asset('assets/img/bridal_wall.jpg')}}" onclick="currentSlide(this,'bridal')">
                                    <p class="robotoMedium m-0 top-tabs bridal py-1 py-sm-1 py-md-2 py-lg-2">Bridal</p>
                                </div>
                                <div class="col-lg-2 col-md-2 mob_slide_image col-sm-2 p-0 text-center img-tab-shadow img-tabs"
                                    src="{{ asset('assets/img/baby_room.jpg')}}" onclick="currentSlide(this,'baby')">
                                    <p class="robotoMedium m-0 top-tabs baby_room py-1 py-sm-1 py-md-2 py-lg-2">Baby
                                        room</p>
                                </div>
                                <div class="col-lg-2 col-md-2 mob_slide_image col-sm-2 p-0 text-center img-tab-shadow img-tabs"
                                    src="{{ asset('assets/img/night_room.jpg')}}" onclick="currentSlide(this,'night')">
                                    <p class="robotoMedium m-0 top-tabs  night py-1 py-sm-1 py-md-2 py-lg-2">Night</p>
                                </div>
                            </div>
                        </div>
                        <!-- tabs view only on mobile screens code end-->
                        <!-- <div class="mySlides main-img rounded h-700" id="sence" style="background: url(assets/img/room_wall.jpg) center center / 100% no-repeat; position:relative;"> -->
                        <div class="mySlides main-img rounded h-700 bannar-img-main-zoom" id="sence"
                            style="background: url({{ asset('assets/img/room_wall.png') }})">
                            <!-- Top Text code end -->
                            <div id="mockupmain">

                                <div id="whole-dimension-height" class="dimension-font"
                                    style="font-weight:bold;color:#fff;position: absolute; width: 43px; height: 80px; left: 407.125px; top: 150px;display: flex;align-items: center">
                                    5 cm</div>
                                <div id="whole-dimension-width" class="dimension-font"
                                    style="font-weight:bold;color:#fff;position: absolute; width: 141.844px; height: 80px; left: 407.125px; top: 150px;display: flex;align-items: flex-end;justify-content: center;">
                                    5 cm</div>
                                <div id="whole-dimension"
                                    style="position: absolute; width: 141.844px; height: 80px; left: 407.125px; top: 150px;border-bottom:2px solid #fff; border-left:2px solid #fff;">
                                </div>
                                <div id="whole-backing"
                                    style="position: absolute; width: 141.844px; height: 80px; left: 407.125px; top: 150px;border-radius:5px;">
                                </div>
                                <div id="mockup1" class="mockup" onmouseover="onClickFun('noenText1',1);">
                                    <div class="backing-style">
                                        <span id="noenText1backing"
                                            class="noenText1backing noen noenText1 backing-text-behind backText1-top backing-clear z-index-1 Bayshore"
                                            data-color_name="Orange" data-mob="62" data-size="105" data-height="8"
                                            data-aspect_ratio="3.28" data-color="cl-tube-3" data-class="Bayshore"
                                            style="position: absolute; white-space: pre; font-family: activeFont; left: 338.97px; top: 108px; font-size: 105px;"
                                            data-width="29">Your text</span>
                                        <span id="noenText1" class="cl-tube-3-text noen noenText1 z-index-1 Bayshore"
                                            data-color_name="Orange" data-class="Bayshore" data-mob="62"
                                            data-color="cl-tube-9" data-size="105" data-height="8"
                                            data-aspect_ratio="3.28"
                                            style="position: absolute;white-space: pre; font-family: activeFont; left: 338.97px; top: 108px; font-size: 105px;"
                                            data-width="29">Your text</span>
                                    </div>
                                </div>
                                <div id="mockup2" class="mockup" onmouseover="onClickFun('noenText2',2);">
                                    <div class="backing-style">
                                        <span id="neonbacking2"
                                            class="KIONA  noenText2backing noen2 noenText2 backing-text-behind backText2-top backing-clear z-index-2"
                                            data-color_name="Yellow" data-size="65" data-mob="17" data-height="5"
                                            data-aspect_ratio="1.58" data-class="KIONA" data-color="cl-tube-2"
                                            style="position: absolute; display: none;white-space:pre;" data-width="26">
                                            text2
                                        </span>
                                        <span id="noenText2" style="position: absolute; display: none;white-space:pre;"
                                            class="KIONA  noen noenText2 cl-tube-2-text z-index-2"
                                            data-color_name="Yellow" data-size="65" data-mob="17" data-height="5"
                                            data-aspect_ratio="1.58" data-class="KIONA" data-color="cl-tube-2"
                                            data-width="26">Your
                                            Text 2</span>
                                    </div>
                                </div>
                                <div id="mockup3" class="mockup" onmouseover="onClickFun('noenText3',3);">
                                    <div class="backing-style">
                                        <span id="neonbacking3"
                                            class="Alexa noenText3backing noen noenText3 backing-text-behind backText3-top backing-clear z-index-3"
                                            data-color_name="Ice-Blue" data-size="80" data-mob="45" data-class="Alexa"
                                            data-height="7" data-aspect_ratio="2.11" data-color="cl-tube-6"
                                            style="position: absolute; display: none;white-space:pre;" data-width="29">
                                            text3
                                        </span>
                                        <span id="noenText3" style="position: absolute; display: none;white-space:pre;"
                                            class="Alexa noen cl-tube-6-text noenText3 z-index-3"
                                            data-color_name="Ice-Blue" data-size="80" data-mob="45" data-height="7"
                                            data-aspect_ratio="2.11" data-class="Alexa" data-color="cl-tube-6"
                                            data-width="29">Your
                                            Text 3</span>
                                    </div>
                                </div>
                            </div>


                            <div class="wrapper-secleted-output">

                                <div class="d-flex align-items-center">
                                    <div class="blink_text cursor-pointer rounded bg-white mb-1 mb-sm-0 mb-lg-0 mb-md-0 py-1 py-sm-1 py-md-2 py-lg-2 w-100 text-center font-weight-bolder"
                                        id="copy-html" onclick="myFunction()" data-toggle="modal"
                                        data-target="#neonOutputModal">
                                        <div class="blinker etsyOrder">Click to order on ETSY</div>
                                    </div>
                                    <textarea id="copy_content"
                                        style="width: 0px; height: 0px; z-index: -10;opacity: 0;"></textarea>
                                </div>
                               <div> <button class="btn text-white bg-F34EFF orderStripeButton" type="button" data-toggle="modal"
                                        data-target="#orderStripeModal">Checkout with Stripe</button></div>
                                <button onclick="boxShow(this)" style="width:98.7%; margin-top:4px !important;" class="m-auto showButton border-0 rounded mt-1 py-1 bg-F34EFF text-white font-weight-bolder d-none">Show Details</button>

                                <div class="boxToHide">
                                    <div class="d-flex justify-content-between block-font flex-wrap" id="copyText">
                                        <div class="w-100 w-sm-50 w-md-50 w-lg-50 copy-html">

                                            <div class="priceSizeSection">
                                                <div class="cl-606060  robotoRegular f-22 price-text cl-red "><span
                                                        class="">Price:</span><span class="pl-1 robotoBold "><span
                                                            class="price">0</span>USD</span>
                                                </div>
                                                <div class="cl-606060 font-weight-bolder  cl-red"><span
                                                        class="robotoBold">Size:</span><span
                                                        class="pl-1 robotoBold size">35x20cm (14.0x8.0 cm);</span></div>
                                            </div>

                                            <div class="cl-606060 f-22 text-white robotoMedium">ID# <span
                                                    class="unique_id"></span></div>
                                            <div class="cl-606060 f-22 text-white text-overflow">
                                                <span class="robotoMedium">1. Text:</span>
                                                <span class="pl-1 robotoRegular" id="finaltext"><span
                                                        id="lineonefinaltext" style="white-space:pre;"></span><span
                                                        id="linetwofinaltext" style="white-space:pre;"></span><span
                                                        id="linethreefineltext" style="white-space:pre;"></span>;</span>
                                            </div>
                                            <div class="cl-606060 f-22 text-white"><span class="robotoMedium">2.
                                                    Font:</span><span id="finalfont"
                                                    class="pl-1 robotoRegular text-one-font-name"></span><span
                                                    id="finalfont"
                                                    class="pl-1 robotoRegular text-two-font-name "></span><span
                                                    id="finalfont"
                                                    class="pl-1 robotoRegular text-three-font-name "></span>
                                            </div>
                                            <div class="cl-606060 f-22 text-white"><span class="robotoMedium">3.
                                                    Color:</span><span
                                                    class="pl-1 robotoRegular text-one-color-name">Orange,</span><span
                                                    class="pl-1 robotoRegular text-two-color-name "></span><span
                                                    class="pl-1 robotoRegular text-three-color-name "></span></div>
                                            <div class="cl-606060 f-22 text-white">
                                                <span class="robotoMedium">4. Backing Color:</span><span
                                                    class="pl-1 robotoRegular"><span class="backing-color-text"> Clear
                                                        Acrylic</span>;</span>
                                            </div>
                                            <div class="cl-606060 f-22 text-white">
                                                <span class="robotoMedium">5. Backing Shape:</span><span
                                                    class="pl-1 robotoRegular"><span class="backing-shape-text">Cut to
                                                        Shape</span>;</span>
                                            </div>
                                            <div class="cl-606060 f-22 text-white"><span class="robotoMedium">6.
                                                    Install:</span><span
                                                    class="pl-1 robotoRegular install-text">Wall-Mounting-Kit, ;</span>
                                            </div>

                                            <div class="cl-606060 f-22 text-white"><span class="robotoMedium">Delivery
                                                    Date:</span><span
                                                    class="pl-1 robotoRegular deiverDate">4-19-2021;</span></div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-md-5 col-lg-5 col-sm-12 px-1 px-sm-2 px-md-2 px-lg-2">
                    <div
                        class="bg-white h-100 pb-1 pt-0 pt-sm-1 pt-md-4 pt-lg-4 pl-1 pl-sm-1 pl-md-2 pl-lg-3 pr-1 pr-sm-1 pr-md-2 pr-lg-3 box-shadow-font">
                        <div class="d-flex">
                            <div class="w-50 mr-lg-3 mr-md-3 mr-sm-3 mr-0">
                                <ul class="nav pb-1 pb-sm-2 pb-md-3 pb-lg-3" id="lineTab" role="tablist">
                                    <li onclick="selectLineColumn(this);" class="nav-item one btns-input-mob"
                                        role="presentation">
                                        <a class="nav-link-tabs active f-19-tabs robotoMedium common-btn rounded"
                                            id="one-line-tab" data-tab="one" data-toggle="tab" href="#oneline"
                                            role="tab" aria-controls="online" onclick="tabClick('one')"
                                            aria-selected="true">
                                            One Line
                                        </a>
                                    </li>
                                    <li onclick="selectLineColumn(this);" class="nav-item two btns-input-mob"
                                        role="presentation">
                                        <a class="nav-link-tabs f-19-tabs robotoMedium common-btn rounded"
                                            id="two-line-tab" data-tab="two" data-toggle="tab" href="#twoline"
                                            role="tab" aria-controls="twoline" aria-selected="false"
                                            onclick="tabClick('two')">
                                            Two Line
                                        </a>
                                    </li>
                                    <li onclick="selectLineColumn(this);" class="nav-item three btns-input-mob"
                                        role="presentation">
                                        <a class="nav-link-tabs f-19-tabs robotoMedium common-btn rounded"
                                            id="three-line-tab" data-tab="three" data-toggle="tab" href="#threeline"
                                            role="tab" aria-controls="threeline" aria-selected="false"
                                            onclick="tabClick('three')">
                                            Three Line
                                        </a>
                                    </li>
                                </ul>

                                <!-- code changes -->
                                <div class="">
                                    <input type="hidden" id="input-text-id" value="#noenText1" />
                                    <input type="hidden" id="input-font-id" value="#one_text_1" />
                                    <div class="tab-content pt-1 pt-sm-2 pt-md-2 pt-lg-2" id="myTabContent">
                                        <div class="tab-pane fade show active" id="oneline" role="tabpanel"
                                            aria-labelledby="one-line-tab">
                                            <form action="">
                                                <div class="form-group">

                                                    <textarea type="text" class="form-control txt_area_1 first_input"
                                                        id="one_text_1" onfocus="onFocusFun('noenText1','one_text_1');"
                                                         oninput="updateText(this,'1');"
                                                        data-tab="tab-one" placeholder="Your text">Your text</textarea>

                                                </div>
                                            </form>
                                        </div>
                                        <div class="tab-pane fade" id="twoline" role="tabpanel"
                                            aria-labelledby="two-line-tab">
                                            <form action="">
                                                <div class="form-group">
                                                    <textarea type="text" class="form-control txt_area_1 first_input"
                                                        oninput="updateText(this,'1');"
                                                        onfocus="onFocusFun('noenText1','two_text_1');"
                                                         id="two_text_1" data-tab="tab-two"
                                                        placeholder="Your text">Your text</textarea>

                                                    <textarea type="text" class="form-control txt_area_2 second_input mt-2"
                                                        oninput="updateText(this,'2');"
                                                        onfocus="onFocusFun('noenText2','two_text_2');"
                                                         id="two_text_2" data-tab="tab-two"
                                                        placeholder="Two line">EST. 2020</textarea>

                                                </div>
                                            </form>
                                        </div>
                                        <div class="tab-pane fade" id="threeline" role="tabpanel"
                                            aria-labelledby="three-line-tab">
                                            <form action="">
                                                <div class="form-group">
                                                    <textarea type="text" class="form-control txt_area_1 first_input"
                                                        oninput="updateText(this,'1');"
                                                        onfocus="onFocusFun('noenText1','three_text_1');"
                                                         id="three_text_1" data-tab="tab-three"
                                                        placeholder="Your text">Your text</textarea>

                                                    <textarea type="text" class="form-control txt_area_2 second_input mt-2"
                                                        oninput="updateText(this,'2');"
                                                        onfocus="onFocusFun('noenText2','three_text_2');"
                                                         id="three_text_2" data-tab="tab-three"
                                                        placeholder="Two line">EST. 2020</textarea>

                                                    <textarea type="text" class="form-control txt_area_3  third_input mt-2"
                                                        oninput="updateText(this,'3');"
                                                        onfocus="onFocusFun('noenText3','three_text_3');"
                                                        id="three_text_3" data-tab="tab-three"
                                                        placeholder="Three line">NeonSign</textarea>

                                                </div>
                                            </form>
                                        </div>
                                    </div>

                                </div>
                                <!-- code changes -->
                            </div>
                            <div class="w-50 ml-3">
                                <div class="row pb-1 pb-sm-2 pb-md-2 pb-lg-2 m-0 border-bottom flex-nowrap">
                                    <div
                                        class="col-md-6 border-right pt-1 pt-sm-2 pt-md-2 pt-lg-2 pl-0 pr-0 text-center">
                                        <div class="robotoRegular pb-2 pb-sm-2 pb-md-3 pb-lg-3 f-16">Sign Size:</div>
                                        <div class="d-flex justify-content-around">
                                            <div class="button-color" onclick="decreaseSize();">
                                                <i class="fa fa-minus" aria-hidden="true"></i>
                                            </div>
                                            <div class="button-color " onclick="increaseSize();">
                                                <i class="fa fa-plus" aria-hidden="true"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 pt-1 pt-sm-2 pt-md-2 pt-lg-2 pl-0 pr-0 text-center">
                                        <div class="robotoRegular pb-2 pb-sm-2 pb-md-3 pb-lg-3 f-16">Sign Align:</div>
                                        <div class="d-flex justify-content-around">
                                            <div class="button-color cursor-pointer" onclick="textAlign('left')">
                                                <i class="fa fa-caret-left f-17-icon" aria-hidden="true"></i>
                                            </div>
                                            <div class="button-color cursor-pointer" onclick="textAlign('center')">
                                                <i class="fa fa-bars f-17-icon" aria-hidden="true"></i>
                                            </div>
                                            <div class="button-color cursor-pointer" onclick="textAlign('right')">
                                                <i class="fa fa-caret-right f-17-icon" aria-hidden="true"></i>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                                <!-- Arrows for mobile view start-->
                                <div class="d-block d-md-none">
                                    <div class="robotoRegular py-1 py-sm-1 f-16 text-center">Adjust text position
                                        (optional)</div>
                                    <div class="row m-0 text-center justify-content-center pt-1">
                                        <div class="col-sm-1 col-2 p-0" onclick="moveTextUp()">
                                            <div class="button-color cursor-pointer">
                                                <i class="fa fa-arrow-up f-17-icon" aria-hidden="true"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row m-0 text-center justify-content-center py-1">
                                        <div class="col-sm-6 col-8 p-0">
                                            <div class="row m-0">
                                                <div class="col-sm-2 col-3 p-0" onclick="moveTextLeft()">
                                                    <div class="button-color cursor-pointer">
                                                        <i class="fa fa-arrow-left f-17-icon" aria-hidden="true"></i>
                                                    </div>
                                                </div>
                                                <div class="col-sm-8 col-6 p-0"></div>
                                                <div class="col-sm-2 col-3 p-0" onclick="moveTextRight()">
                                                    <div class="button-color cursor-pointer">
                                                        <i class="fa fa-arrow-right f-17-icon" aria-hidden="true"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row m-0 text-center justify-content-center">
                                        <div class=" col-sm-1 col-2 p-0" onclick="moveTextDown()">
                                            <div class="button-color cursor-pointer">
                                                <i class="fa fa-arrow-down f-17-icon" aria-hidden="true"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Arrows for mobile view end-->


                            </div>
                        </div>

                        <!-- The font section is to be changed -->
                        <div>
                            <div class="robotoMedium pb-1 f-18">Select Your Font.</div>
                        </div>
                        <div class="p-1 p-sm-2 p-md-2 p-lg-2 box-shadow-font">
                            <div class="row pl-2 pr-2 flex-nowrap">
                                <div class="col-md-2 col-lg-2 col-sm-2 col-xs-2 text-center pl-1 pr-1">
                                    <div class="font-btn border rounded Alexa font-div d-flex justify-content-evenly js-btn-tooltip"
                                        data-toggle="tooltip" data-placement="top" data-custom-class="tooltip-primary"
                                        title="Arial" class="" data-desk="80" data-mob="45" data-height="7"
                                        data-aspect_ratio="2.621" data-class="Alexa" data-width="29"
                                        onclick="getClass(this);">The</div>
                                </div>
                                <div class="col-md-2 col-lg-2 col-sm-2 col-xs-2 text-center pl-1 pr-1">
                                    <div class="font-btn border rounded Bayshore font-div d-flex justify-content-evenly js-btn-tooltip"
                                        data-toggle="tooltip" data-placement="top" data-custom-class="tooltip-primary"
                                        title="Bayshore" data-desk="105" data-mob="62" data-height="8"
                                        data-aspect_ratio="3.505" data-class="Bayshore" data-width="31"
                                        onclick="getClass(this);">The</div>
                                </div>
                                <div class="col-md-2 col-lg-2 col-sm-2 col-xs-2 text-center pl-1 pr-1">
                                    <div class="font-btn border rounded Dancer font-div d-flex justify-content-evenly js-btn-tooltip"
                                        data-toggle="tooltip" data-placement="top" data-custom-class="tooltip-primary"
                                        title="Dancer" data-desk="80" data-mob="38" data-height="7"
                                        data-aspect_ratio="2.779" data-class="Dancer" data-width="28"
                                        onclick="getClass(this);">The</div>
                                </div>
                                <div class="col-md-2 col-lg-2 col-sm-2 col-xs-2 text-center pl-1 pr-1">
                                    <div class="font-btn border rounded Gruenewald font-div d-flex justify-content-evenly js-btn-tooltip"
                                        data-toggle="tooltip" data-placement="top" data-custom-class="tooltip-primary"
                                        title="Gruenewald" data-desk="100" data-mob="65" data-height="7"
                                        data-aspect_ratio="2.683" data-class="Gruenewald" data-width="27"
                                        onclick="getClass(this);">The</div>
                                </div>
                                <div class="col-md-2 col-lg-2 col-sm-2 col-xs-2 text-center pl-1 pr-1">
                                    <div class="font-btn border rounded NewCursive font-div d-flex justify-content-evenly js-btn-tooltip"
                                        data-toggle="tooltip" data-placement="top" data-custom-class="tooltip-primary"
                                        title="New cursive" data-desk="100" data-mob="46" data-height="7"
                                        data-aspect_ratio="2.979" data-class="NewCursive" data-width="30"
                                        onclick="getClass(this);">The</div>
                                </div>
                                <div class="col-md-2 col-lg-2 col-sm-2 col-xs-2 text-center pl-1 pr-1">
                                    <div class="font-btn border rounded Barcelony font-div d-flex justify-content-evenly js-btn-tooltip"
                                        data-toggle="tooltip" data-placement="top" data-custom-class="tooltip-primary"
                                        title="Barcelony" data-desk="70" data-mob="35" data-height="10"
                                        data-aspect_ratio="3.906" data-class="Barcelony" data-width="31"
                                        onclick="getClass(this);">The</div>
                                </div>
                            </div>
                            <div class="row pt-2 pl-2 pr-2 flex-nowrap">
                                <div class="col-md-2 col-lg-2 col-sm-2 col-xs-2 text-center pl-1 pr-1">
                                    <div class="font-btn border rounded Vintage font-div d-flex justify-content-evenly js-btn-tooltip"
                                        data-toggle="tooltip" data-placement="top" data-custom-class="tooltip-primary"
                                        title="Vintage" data-desk="75" data-mob="45" data-height="7"
                                        data-aspect_ratio="3.028" data-class="Vintage" data-width="31"
                                        onclick="getClass(this);">The</div>
                                </div>
                                <div class="col-md-2 col-lg-2 col-sm-2 col-xs-2 text-center pl-1 pr-1">
                                    <div class="font-btn border rounded Amanda font-div d-flex justify-content-evenly js-btn-tooltip"
                                        data-toggle="tooltip" data-placement="top" data-custom-class="tooltip-primary"
                                        title="Amanda" data-desk="85" data-mob="47" data-height="9"
                                        data-aspect_ratio="3.384" data-class="Amanda" data-width="27"
                                        onclick="getClass(this);">The</div>
                                </div>
                                <div class="col-md-2 col-lg-2 col-sm-2 col-xs-2 text-center pl-1 pr-1">
                                    <div class="font-btn border rounded Budhayan font-div d-flex justify-content-evenly js-btn-tooltip"
                                        data-toggle="tooltip" data-placement="top" data-custom-class="tooltip-primary"
                                        title="Budhayan" data-desk="47" data-mob="22" data-height="10"
                                        data-aspect_ratio="3.443" data-class="Budhayan" data-width="24"
                                        onclick="getClass(this);">The</div>
                                </div>
                                <div class="col-md-2 col-lg-2 col-sm-2 col-xs-2 text-center pl-1 pr-1">
                                    <div class="font-btn border rounded Sebastian font-div d-flex justify-content-evenly js-btn-tooltip"
                                        data-toggle="tooltip" data-placement="top" data-custom-class="tooltip-primary"
                                        title="Sebastian" data-desk="110" data-mob="70" data-height="10"
                                        data-aspect_ratio="3.828" data-class="Sebastian" data-width="27"
                                        onclick="getClass(this);">The</div>
                                </div>
                                <div class="col-md-2 col-lg-2 col-sm-2 col-xs-2 text-center pl-1 pr-1">
                                    <div class="font-btn border rounded Signature font-div d-flex justify-content-evenly js-btn-tooltip"
                                        data-toggle="tooltip" data-placement="top" data-custom-class="tooltip-primary"
                                        title="Signature" data-desk="100" data-mob="65" data-height="9"
                                        data-aspect_ratio="3.230" data-class="Signature" data-width="25"
                                        onclick="getClass(this);">The</div>
                                </div>
                                <div class="col-md-2 col-lg-2 col-sm-2 col-xs-2 text-center pl-1 pr-1">
                                    <div class="font-btn border rounded Assalwa font-div d-flex justify-content-evenly js-btn-tooltip"
                                        data-toggle="tooltip" data-placement="top" data-custom-class="tooltip-primary"
                                        title="Assalwa" data-desk="115" data-mob="71" data-height="8"
                                        data-aspect_ratio="3.454" data-class="Assalwa" data-width="31"
                                        onclick="getClass(this);">The</div>
                                </div>
                            </div>
                            <div class="row pt-2 pl-2 pr-2 flex-nowrap">
                                <div class="col-md-2 col-lg-2 col-sm-2 col-xs-2 text-center pl-1 pr-1">
                                    <div class="font-btn border rounded Hamilton font-div d-flex justify-content-evenly js-btn-tooltip"
                                        data-toggle="tooltip" data-placement="top" data-custom-class="tooltip-primary"
                                        title="Hamilton" data-desk="100" data-mob="62" data-height="10"
                                        data-aspect_ratio="4.520" data-class="Hamilton" data-width="27"
                                        onclick="getClass(this);">The</div>
                                </div>
                                <div class="col-md-2 col-lg-2 col-sm-2 col-xs-2 text-center pl-1 pr-1">
                                    <div class="font-btn border rounded Hesterica font-div d-flex justify-content-evenly js-btn-tooltip"
                                        data-toggle="tooltip" data-placement="top" data-custom-class="tooltip-primary"
                                        title="Hesterica" data-desk="90" data-mob="52" data-height="9"
                                        data-aspect_ratio="4.131" data-class="Hesterica" data-width="33"
                                        onclick="getClass(this);">The</div>
                                </div>
                                <div class="col-md-2 col-lg-2 col-sm-2 col-xs-2 text-center pl-1 pr-1">
                                    <div class="font-btn border rounded LoveNote font-div d-flex justify-content-evenly js-btn-tooltip"
                                        data-toggle="tooltip" data-placement="top" data-custom-class="tooltip-primary"
                                        title="Love note" data-desk="70" data-mob="36" data-height="7"
                                        data-aspect_ratio="2.681" data-class="LoveNote" data-width="27"
                                        onclick="getClass(this);">The</div>
                                </div>
                                <div class="col-md-2 col-lg-2 col-sm-2 col-xs-2 text-center pl-1 pr-1">
                                    <div class="font-btn border rounded Northwell font-div d-flex justify-content-evenly js-btn-tooltip"
                                        data-toggle="tooltip" data-placement="top" data-custom-class="tooltip-primary"
                                        title="Northwell" data-desk="93" data-mob="56" data-height="10"
                                        data-aspect_ratio="4.871" data-class="Northwell" data-width="35"
                                        onclick="getClass(this);">The</div>
                                </div>
                                <div class="col-md-2 col-lg-2 col-sm-2 col-xs-2 text-center pl-1 pr-1">
                                    <div class="font-btn border rounded Quinzey font-div d-flex justify-content-evenly js-btn-tooltip"
                                        data-toggle="tooltip" data-placement="top" data-custom-class="tooltip-primary"
                                        title="Quinzey" data-desk="73" data-mob="37" data-height="8"
                                        data-aspect_ratio="3.181" data-class="Quinzey" data-width="28"
                                        onclick="getClass(this);">The</div>
                                </div>
                                <div class="col-md-2 col-lg-2 col-sm-2 col-xs-2 text-center pl-1 pr-1">
                                    <div class="font-btn border rounded RedVelvet font-div d-flex justify-content-evenly js-btn-tooltip"
                                        data-toggle="tooltip" data-placement="top" data-custom-class="tooltip-primary"
                                        title="Red velvet" data-desk="68" data-mob="30" data-height="9"
                                        data-aspect_ratio="3.052" data-class="RedVelvet" data-width="24"
                                        onclick="getClass(this);">The</div>
                                </div>
                            </div>
                            <div class="row pt-2 pl-2 pr-2 flex-nowrap">
                                <div class="col-md-2 col-lg-2 col-sm-2 col-xs-2 text-center pl-1 pr-1">
                                    <div class="font-btn border rounded Rocket font-div d-flex justify-content-evenly js-btn-tooltip"
                                        data-toggle="tooltip" data-placement="top" data-custom-class="tooltip-primary"
                                        title="Rocket" data-desk="50" data-mob="20" data-height="7"
                                        data-aspect_ratio="2.616" data-class="Rocket" data-width="27"
                                        onclick="getClass(this);">The</div>
                                </div>
                                <div class="col-md-2 col-lg-2 col-sm-2 col-xs-2 text-center pl-1 pr-1">
                                    <div class="font-btn border rounded WildScript font-div d-flex justify-content-evenly js-btn-tooltip"
                                        data-toggle="tooltip" data-placement="top" data-custom-class="tooltip-primary"
                                        title="Wild script" data-desk="115" data-mob="70" data-height="10"
                                        data-aspect_ratio="4.840" data-class="WildScript" data-width="29"
                                        onclick="getClass(this);">The</div>
                                </div>
                                <div class="col-md-2 col-lg-2 col-sm-2 col-xs-2 text-center pl-1 pr-1">
                                    <div class="font-btn border rounded AvantGrade font-div d-flex justify-content-evenly js-btn-tooltip"
                                        data-toggle="tooltip" data-placement="top" data-custom-class="tooltip-primary"
                                        title="Avant grade" data-desk="75" data-mob="35" data-height="5"
                                        data-aspect_ratio="2.381" data-class="AvantGrade" data-width="34"
                                        onclick="getClass(this);">The</div>
                                </div>
                                <div class="col-md-2 col-lg-2 col-sm-2 col-xs-2 text-center pl-1 pr-1">
                                    <div class="font-btn border rounded Bauhaus font-div d-flex justify-content-evenly js-btn-tooltip"
                                        data-toggle="tooltip" data-placement="top" data-custom-class="tooltip-primary"
                                        title="Bauhaus" data-desk="65" data-mob="44" data-height="6"
                                        data-aspect_ratio="2.247" data-class="Bauhaus" data-width="27"
                                        onclick="getClass(this);">The</div>
                                </div>
                                <div class="col-md-2 col-lg-2 col-sm-2 col-xs-2 text-center pl-1 pr-1">
                                    <div class="font-btn border rounded DOLCEVITA font-div d-flex justify-content-evenly js-btn-tooltip"
                                        data-toggle="tooltip" data-placement="top" data-custom-class="tooltip-primary"
                                        title="Dolcevita" data-desk="70" data-mob="30" data-height="5"
                                        data-aspect_ratio="2.205" data-class="DOLCEVITA" data-width="31"
                                        onclick="getClass(this);">The</div>
                                </div>
                                <div class="col-md-2 col-lg-2 col-sm-2 col-xs-2 text-center pl-1 pr-1">
                                    <div class="font-btn border rounded KIONA font-div d-flex justify-content-evenly js-btn-tooltip"
                                        data-toggle="tooltip" data-placement="top" data-custom-class="tooltip-primary"
                                        title="kiona" data-desk="65" data-mob="17" data-height="5"
                                        data-aspect_ratio="1.835" data-class="KIONA" data-width="26"
                                        onclick="getClass(this);">The</div>
                                </div>
                            </div>
                            <div class="row pt-2 pl-2 pr-2 flex-nowrap">
                                <div class="col-md-2 col-lg-2 col-sm-2 col-xs-2 text-center pl-1 pr-1">
                                    <div class="font-btn border rounded NixieOne font-div d-flex justify-content-evenly js-btn-tooltip"
                                        data-toggle="tooltip" data-placement="top" data-custom-class="tooltip-primary"
                                        title="Nixie one" data-desk="65" data-mob="30" data-width="26" data-height="5"
                                        data-aspect_ratio="2.112" data-class="NixieOne" onclick="getClass(this);">
                                        The
                                    </div>
                                </div>
                                <div class="col-md-2 col-lg-2 col-sm-2 col-xs-2 text-center pl-1 pr-1">
                                    <div class="font-btn border rounded Typewriter font-div d-flex justify-content-evenly js-btn-tooltip"
                                        data-toggle="tooltip" data-placement="top" data-custom-class="tooltip-primary"
                                        title="Typewriter" data-desk="70" data-mob="21" data-height="5"
                                        data-aspect_ratio="2.017" data-class="Typewriter" data-width="29"
                                        onclick="getClass(this);">The</div>
                                </div>
                                <div class="col-md-2 col-lg-2 col-sm-2 col-xs-2 text-center pl-1 pr-1">
                                    <div class="font-btn border rounded PaperDaisy font-div d-flex justify-content-evenly js-btn-tooltip"
                                        data-toggle="tooltip" data-placement="top" data-custom-class="tooltip-primary"
                                        title="Paper daisy" data-desk="120" data-mob="59" data-height="6"
                                        data-aspect_ratio="4.317" data-class="PaperDaisy" data-width="52"
                                        onclick="getClass(this);">The</div>
                                </div>
                                <div class="col-md-2 col-lg-2 col-sm-2 col-xs-2 text-center pl-1 pr-1">
                                    <div class="font-btn border rounded Roboto font-div d-flex justify-content-evenly js-btn-tooltip"
                                        data-toggle="tooltip" data-placement="top" data-custom-class="tooltip-primary"
                                        title="Roboto" data-desk="70" data-mob="35" data-height="6"
                                        data-aspect_ratio="2.500" data-class="Roboto" data-width="30"
                                        onclick="getClass(this);">The</div>
                                </div>
                                <div class="col-md-2 col-lg-2 col-sm-2 col-xs-2 text-center pl-1 pr-1">
                                    <div class="font-btn border rounded BRAVE font-div d-flex justify-content-evenly js-btn-tooltip"
                                        data-toggle="tooltip" data-placement="top" data-custom-class="tooltip-primary"
                                        title="Brave" data-desk="73" data-mob="33" data-height="6"
                                        data-aspect_ratio="2.609" data-class="BRAVE" data-width="31"
                                        onclick="getClass(this);">The</div>
                                </div>
                                <div class="col-md-2 col-lg-2 col-sm-2 col-xs-2 text-center pl-1 pr-1">
                                    <div class="font-btn border rounded LOVELO font-div d-flex justify-content-evenly js-btn-tooltip"
                                        data-toggle="tooltip" data-placement="top" data-custom-class="tooltip-primary"
                                        title="Lovelo" data-desk="60" data-mob="28" data-height="9"
                                        data-aspect_ratio="1.623" data-class="LOVELO" data-width="10"
                                        onclick="getClass(this);">The</div>
                                </div>
                            </div>
                            <div class="row pt-2 pl-2 pr-2 flex-nowrap">
                                <div class="col-md-2 col-lg-2 col-sm-2 col-xs-2 text-center pl-1 pr-1">
                                    <div class="font-btn border rounded Marquee font-div d-flex justify-content-evenly js-btn-tooltip"
                                        data-toggle="tooltip" data-placement="top" data-custom-class="tooltip-primary"
                                        title="Marquee" data-desk="85" data-mob="40" data-height="9"
                                        data-aspect_ratio="2.811" data-class="Marquee" data-width="18"
                                        onclick="getClass(this);">The</div>
                                </div>
                                <div class="col-md-2 col-lg-2 col-sm-2 col-xs-2 text-center pl-1 pr-1">
                                    <div class="font-btn border rounded NeonGlow font-div d-flex justify-content-evenly js-btn-tooltip"
                                        data-toggle="tooltip" data-placement="top" data-custom-class="tooltip-primary"
                                        title="Neon glow" data-desk="75" data-mob="40" data-height="9"
                                        data-aspect_ratio="2.556" data-class="NeonGlow" data-width="16"
                                        onclick="getClass(this);">The</div>
                                </div>
                                <div class="col-md-2 col-lg-2 col-sm-2 col-xs-2 text-center pl-1 pr-1">
                                    <div class="font-btn border rounded NeonLite font-div d-flex justify-content-evenly js-btn-tooltip"
                                        data-toggle="tooltip" data-placement="top" data-custom-class="tooltip-primary"
                                        title="Neon lite" data-desk="62" data-mob="30" data-height="6"
                                        data-aspect_ratio="1.992" data-class="NeonLite" data-width="24"
                                        onclick="getClass(this);">The</div>
                                </div>
                                <div class="col-md-2 col-lg-2 col-sm-2 col-xs-2 text-center pl-1 pr-1">
                                    <div class="font-btn border rounded NEONTUBE font-div d-flex justify-content-evenly js-btn-tooltip"
                                        data-toggle="tooltip" data-placement="top" data-custom-class="tooltip-primary"
                                        title="Neon tube" data-desk="62" data-mob="25" data-height="8"
                                        data-aspect_ratio="1.773" data-class="NEONTUBE" data-width="16"
                                        onclick="getClass(this);">The</div>
                                </div>
                                <div class="col-md-2 col-lg-2 col-sm-2 col-xs-2 text-center pl-1 pr-1">
                                    <div class="font-btn border rounded Outline font-div d-flex justify-content-evenly js-btn-tooltip"
                                        data-toggle="tooltip" data-placement="top" data-custom-class="tooltip-primary"
                                        title="Outline" data-desk="65" data-mob="55" data-height="9"
                                        data-aspect_ratio="2.212" data-class="Outline" data-width="16"
                                        onclick="getClass(this);">The</div>
                                </div>
                                <div class="col-md-2 col-lg-2 col-sm-2 col-xs-2 text-center pl-1 pr-1">
                                    <div class="font-btn border rounded SciFi disturb-font font-div d-flex justify-content-evenly js-btn-tooltip"
                                        data-toggle="tooltip" data-placement="top" data-custom-class="tooltip-primary"
                                        title="Scifi" data-desk="48" data-mob="18" data-height="9"
                                        data-aspect_ratio="1.468" data-class="SciFi" data-width="9"
                                        onclick="getClass(this);">The</div>
                                </div>
                            </div>
                        </div>

                        <!-- The font section is to be changed -->
                        <div class="d-flex justify-content-between">
                            <!-- Color tubes main wrapper -->
                            <div class="w-100 mr-1 mr-sm-2 mr-md-3 mr-lg-3">
                                <div class="robotoMedium pt-2 pt-sm-2 pt-md-2 pt-lg-2 pb-1 f-18">Select Your Color.
                                </div>

                                <div class="d-flex px-1 px-sm-2 px-md-3 px-lg-3 justify-content-between">
                                    <div class="color-selection clr-tube cl-tube-12" data-class="cl-tube-12"
                                        data-name="Warm-White" onclick="changeclass(this)"></div>
                                    <div class="color-selection clr-tube cl-tube-13" data-class="cl-tube-13"
                                        data-name="Cold-White" onclick="changeclass(this)"></div>
                                    <div class="color-selection clr-tube cl-tube-1" data-class="cl-tube-1"
                                        data-name="Light-Yellow" onclick="changeclass(this)"></div>
                                    <div class="color-selection clr-tube cl-tube-2" data-class="cl-tube-2"
                                        data-name="Yellow" onclick="changeclass(this)"></div>
                                    <div class="color-selection clr-tube cl-tube-3-on" data-class="cl-tube-3"
                                        data-name="Orange" onclick="changeclass(this)"></div>
                                    <div class="color-selection clr-tube cl-tube-4" data-class="cl-tube-4"
                                        data-name="Dark-Blue" onclick="changeclass(this)"></div>
                                    <div class="color-selection clr-tube cl-tube-5" data-class="cl-tube-5"
                                        data-name="Sky-Blue" onclick="changeclass(this)"></div>
                                    <div class="color-selection clr-tube cl-tube-6" data-class="cl-tube-6"
                                        data-name="Ice-Blue" onclick="changeclass(this)"></div>
                                    <div class="color-selection clr-tube cl-tube-7" data-class="cl-tube-7"
                                        data-name="Green" onclick="changeclass(this)"></div>
                                    <div class="color-selection clr-tube cl-tube-8" data-class="cl-tube-8"
                                        data-name="Light-Pink" onclick="changeclass(this)"></div>
                                    <div class="color-selection clr-tube cl-tube-9" data-class="cl-tube-9"
                                        data-name="Hot-Pink" onclick="changeclass(this)"></div>
                                    <div class="color-selection clr-tube cl-tube-10" data-class="cl-tube-10"
                                        data-name="Red" onclick="changeclass(this)"></div>
                                    <div class="color-selection clr-tube cl-tube-11" data-class="cl-tube-11"
                                        data-name="Purple" onclick="changeclass(this)"></div>
                                    <div class="color-selection clr-tube cl-tube-14" data-class="cl-tube-14"
                                        data-name="Teal" onclick="changeclass(this)"></div>
                                </div>
                            </div>
                            <!-- Color tubes main wrapper -->

                            <!-- Backing color tubes main wrapper -->
                            <div class="w-50 ml-1 ml-sm-2 ml-md-3 ml-lg-3 d-none">
                                <div class="robotoMedium pt-2 pt-sm-2 pt-md-2 pt-lg-2 pb-1 f-18">White Tubes:</div>
                                <div class="d-flex px-1 px-sm-2 px-md-3 px-lg-3 justify-content-between">
                                    <div class="color-selection white-tube bg-white wh-tube-1" data-class="wh-tube-1"
                                        data-name="White" onclick="changeclass(this)"></div>
                                    <div class="color-selection white-tube bg-white wh-tube-2" data-class="wh-tube-2"
                                        data-name="Warm-White" onclick="changeclass(this)"></div>
                                    <div class="color-selection white-tube bg-white wh-tube-3" data-class="wh-tube-3"
                                        data-name="Yellow-White-Tube" onclick="changeclass(this)"></div>
                                    <div class="color-selection white-tube bg-white wh-tube-4" data-class="wh-tube-4"
                                        data-name="Orange-White-Tube" onclick="changeclass(this)"></div>
                                    <div class="color-selection white-tube bg-white wh-tube-5" data-class="wh-tube-5"
                                        data-name="Blue-White-Tube" onclick="changeclass(this)"></div>
                                    <div class="color-selection white-tube bg-white wh-tube-6" data-class="wh-tube-6"
                                        data-name="Super-Cold-White" onclick="changeclass(this)"></div>
                                    <div class="color-selection white-tube bg-white wh-tube-7" data-class="wh-tube-7"
                                        data-name="Green-White-Tube" onclick="changeclass(this)"></div>
                                    <div class="color-selection white-tube bg-white wh-tube-8" data-class="wh-tube-8"
                                        data-name="Light-Pink-White-Tube" onclick="changeclass(this)"></div>
                                    <div class="color-selection white-tube bg-white wh-tube-9" data-class="wh-tube-9"
                                        data-name="Hot-Pink-White-Tube" onclick="changeclass(this)"></div>
                                    <div class="color-selection white-tube bg-white wh-tube-10" data-class="wh-tube-10"
                                        data-name="Red-White-Tube" onclick="changeclass(this)"></div>
                                    <div class="color-selection white-tube bg-white wh-tube-11" data-class="wh-tube-11"
                                        data-name="Purple-White-Tube" onclick="changeclass(this)"></div>
                                </div>
                            </div>
                            <!-- Backing color tubes main wrapper -->
                        </div>
                        <!-- The font section is to be changed -->

                        <!-- Colors code section  -->
                        <div class="row pt-2 pt-sm-2 pt-md-2 pt-lg-2 pb-1 m-0 border-bottom flex-nowrap">
                            <div class="col-md-6 border-right pt-2 px-1 px-sm-2 px-md-2 px-lg-2 text-center">
                                <div class="robotoMedium pb-1 pb-sm-2 pb-md-2 pb-lg-2 f-16">Backing Colors.</div>
                                <div class="justify-content-center">
                                    <ul class="nav d-flex pb-1 pb-sm-2 pb-md-2 pb-lg-2 justify-content-between"
                                        id="backingColorOption">
                                        <li id="clearBackingColor btn-padding"
                                            class="nav-item backing-li rounded btns-backing-mob" role="presentation"
                                            data-class="backing-clear" onclick="backingClass(this)">
                                            <a
                                                class="nav-link-btns f-16-btn robotoMedium px-1 px-sm-2 px-md-2 px-lg-3 py-1 py-sm-2 py-md-2 py-lg-2 common-btn1 bg-F34EFF ">Clear
                                                Acrylic</a>
                                        </li>
                                        <li id="whiteBackingColor btn-padding"
                                            class="nav-item backing-li rounded btns-backing-mob" role="presentation"
                                            data-class="backing-white" onclick="backingClass(this)">
                                            <a
                                                class="nav-link-btns f-16-btn robotoMedium px-1 px-sm-2 px-md-2 px-lg-3 py-1 py-sm-2 py-md-2 py-lg-2 common-btn1">White</a>
                                        </li>
                                        <li id="blackBackingColor btn-padding"
                                            class="nav-item backing-li rounded btns-backing-mob" role="presentation"
                                            data-class="backing-black" onclick="backingClass(this)">
                                            <a
                                                class="nav-link-btns f-16-btn robotoMedium px-1 px-sm-2 px-md-2 px-lg-3 py-1 py-sm-2 py-md-2 py-lg-2 common-btn1">Black</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-6 px-1 px-sm-2 px-md-2 px-lg-2 pt-2 text-center">
                                <div
                                    class="d-flex justify-content-center pb-1 pb-sm-2 pb-md-2 pb-lg-2 align-items-center">
                                    <div class="robotoMedium  f-16 mr-2">Backing Shapes</div>
                                    <div class="backingShapedPopup bg-F34EFF cp" data-toggle="modal"
                                        data-target="#backingShapes">?</div>
                                </div>
                                <div class="justify-content-center">
                                    <ul class="nav d-flex pb-1 pb-sm-2 pb-md-2 pb-lg-2 justify-content-between"
                                        id="backingShapeOption">
                                        <li id="btn-padding" class="nav-item backing-shape-li btns-backing-mob"
                                            role="presentation " data-class="backing-clear"
                                            onclick="backingShapeClass(this)">
                                            <a
                                                class="nav-link-btns f-16-btn rounded robotoMedium px-1 px-1 px-sm-2 px-md-2 px-lg-2 py-1 py-sm-2 py-md-2 py-lg-2 common-btn2 bg-F34EFF">
                                                Cut to Shape</a>
                                        </li>
                                        <li id="btn-padding" class="nav-item backing-shape-li btns-backing-mob rounded"
                                            role="presentation" data-class="shape-rectangle"
                                            onclick="backingShapeClass(this)">
                                            <a
                                                class="nav-link-btns f-16-btn rounded robotoMedium px-1 px-sm-2 px-md-2 px-lg-2 py-1 py-sm-2 py-md-2 py-lg-2 common-btn2">Cut
                                                to Square</a>
                                        </li>
                                        <li id="btn-padding" class="nav-item backing-shape-li btns-backing-mob rounded"
                                            role="presentation" data-class="shape-invisible"
                                            onclick="backingShapeClass(this)">
                                            <a
                                                class="nav-link-btns f-16-btn rounded robotoMedium px-1 px-sm-2 px-md-2 px-lg-2 py-1 py-sm-2 py-md-2 py-lg-2 common-btn2">Cut
                                                to Letter </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <!-- Colors code section  -->

                        <div>
                            <div class="robotoMedium pt-1 pt-sm-2 pt-md-2 pt-lg-2 pb-1 f-18">Accessories</div>
                        </div>
                        <div class="p-1 p-sm-2 p-md-2 p-lg-2 box-shadow-font">
                            <div class="">
                                <div class="row pt-0 pt-sm-1 pt-md-2 pt-lg-2 px-1 px-sm-2 px-md-2 px-lg-2 clas-no-wrap">
                                    <div class="col-md-3 col-lg-3 col-sm-3 col-3 text-center p-1">
                                        <div class="accessary-btn robotoMedium f-16-btn border rounded common-btn3 bg-F34EFF default"
                                            onclick="commonBtnFun3(this)">
                                            Wall-Mounting-Kit
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-lg-3 col-sm-3 col-3 text-center p-1">
                                        <div class="accessary-btn robotoMedium f-16-btn border rounded common-btn3"
                                            onclick="commonBtnFun3(this)">
                                            Hanging-Kit
                                        </div>
                                    </div>
                                    <!-- <div class="col-md-3 col-lg-3 col-sm-3 col-3 text-center p-1">
                                        <div class="accessary-btn robotoMedium f-16-btn border rounded common-btn3"
                                            onclick="commonBtnFun3(this)">
                                            Stand
                                        </div>
                                    </div> -->
                                    <div class="col-md-3 col-lg-3 col-sm-3 col-3 text-center p-1 ">
                                        <div class="accessary-btn robotoMedium f-16-btn border rounded common-btn3 rush-order text-center js-btn-tooltip"
                                            data-toggle="tooltip" data-placement="top"
                                            data-custom-class="tooltip-primary"
                                            title="Delivery within 10 business days, +50USD"
                                            onclick="commonBtnFun3(this)">
                                            <div class="blink_text border-0  cursor-pointer" id="blink_text-mob">
                                                <div class="blinker">Rush-Order
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-lg-3 col-sm-3 col-3 text-center p-1">
                                        <div class="accessary-btn robotoMedium f-16-btn border rounded common-btn3"
                                            onclick="commonBtnFun3(this)">
                                            Outdoor Use
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>


    <div class="modal fade" id="neonOutputModal" tabindex="-1" aria-labelledby="neonOutputModalLabel"
        aria-hidden="true" data-backdrop="static" data-keyboard="false">
        <div class="modal-dialog modal-dialoG1 modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="neonOutputModalLabel">Order</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                  <form>
                    <div class="row m-0">
                        <div class="col-md-12 col-lg-12 col-sm-12">
                            <!-- <p class="fs-14 mb-1 wrapText"><b class="fs-16">Note</b> Please provide phone number for shipping purposes (Required by FedEx, USPS, UPS)</p> -->
                            <p class="fs-14 mb-1 wrapText"><b class="fs-16">Imp:</b>  Please provide Recipient Phone Number so that delivery of the order remains hassle free. Phone Number is mandatory requirement for Shipping companies DHL, FedEx.</p>
                        </div>
                    </div>

                    <div class="row m-0  mb-2">
                        <div class="col-md-12 col-lg-12 col-sm-12">
                            <label>Phone Number (Optional)</label>
                            <input type="number" name="myInput" maxlength="15" id="phone_number" class="px-1 px-sm-1 px-md-2 px-lg-2 form-control" oninput="phoneNumberChange(this);" placeholder="+4357019219" autofocus="autofocus">
                            <!--<small class="text-danger d-none" id="phoneValidate">Please enter your Phone Number</small>-->
                        </div>
                    </div>
                    <div class="main-loader d-none">
                        <div class="spinner-grow" style="width: 3rem; height: 3rem;" role="status">
                            <span class="sr-only">Loading...</span>
                        </div>
                    </div>
                    <div class="row m-0">
                        <div class="col-md-6 col-lg-6 col-sm-12" style="height:290px">
                            <h4>Image view</h4>
                            <div id="modalImage"></div>
                        </div>
                        <div class="col-md-6 col-lg-6 col-sm-12">
                            <h4>Order Details</h4>
                            <textarea class="px-1 px-sm-1 px-md-2 px-lg-2" id="modal-content-text" cols="38" rows="10"
                                disabled></textarea>
                        </div>
                    </div>
                
                 </form>
                </div>
                <div class="modal-footer justify-content-end">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Back</button>
                    <button type="submit" class="btn bg-F34EFF" onclick="copy();">Proceed to
                        Etsy</button>
                </div>
            </div>
        </div>
    </div>



    <!-- Modal code end -->
    <!-- Modal -->
    <div class="modal  fade" id="backingShapes" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog  modal-dialog-centered modal-dialoG2">
            <div class="modal-content">
                <div class="modal-header ml-atuo border-0">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true" class="closetext">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="col-lg-12"><img src="{{ asset('assets/img/image_2021_09_06T10_56_38_574Z (1).png') }}" class="w-100" alt="" srcset=""></div>
                </div>
                
            </div>
        </div>
    </div>
    <div class="modal  fade" data-backdrop="static" data-keyboard="false" id="orderStripeModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg  modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header ml-atuo border">
                <h5 class="modal-title">Checkout</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true" class="closetext">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="" id="create-order" class=" require-validation needs-validation" data-cc-on-file="false" data-stripe-publishable-key="{{ $admin->stripe_pk }}" method="post" novalidate>
                        <div id="creditCardDiv">
                            <div class="px-3 bg-f0ecec rounded pt-3">
                                <div class="row m-0">
                                    <div class="col-md-12 col-lg-12 col-sm-12">
                                        <!-- <p class="fs-14 mb-1 wrapText"><b class="fs-16">Note</b> Please provide phone number for shipping purposes (Required by FedEx, USPS, UPS)</p> -->
                                        <p class="fs-14 mb-1 wrapText"><b class="fs-16">Imp:</b>  Please provide Recipient Phone Number so that delivery of the order remains hassle free. Phone Number is mandatory requirement for Shipping companies DHL, FedEx.</p>
                                    </div>
                                </div>
            
                                <div class="row m-0  mb-2">
                                    <div class="col-md-12 col-lg-12 col-sm-12">
                                        <label>Phone Number (Optional)</label>
                                        <input type="number" name="myInput" id="stripe_phone_number" class="px-1 px-sm-1 px-md-2 px-lg-2 form-control"   placeholder="+4357019219" autofocus="autofocus">
                                        <!--<small class="text-danger d-none" id="phoneValidate">Please enter your Phone Number</small>-->
                                    </div>
                                </div>

                                <div class="font-w-600 f-20 px-4">
                                    Secure Payment via Credit/Debit Card
                                </div>

                                <div class="row m-0">
                                    <div class="col-md-12 pt-4 g-0">
                                        <input type="text" class="form-control card-name" id="name" placeholder="Name on Card*" required="">
                                        
                                    </div>
                                    <div class="col-md-12 py-3 g-0">
                                        <input type="number" class="form-control card-number" id="cardNumber" placeholder="Card Number*" required="">
                                        
                                    </div>
                                    <div class="col-md-6 pb-3 ps-0">
                                        <input type="number" class="form-control card-expiry-month" onfocusout="checkMonth(this);" onkeydown="if(this.value.length==2 &amp;&amp; event.keyCode!=8) return false;" id="month" placeholder="12*" required="">
                                        
                                    </div>

                                    <div class="col-md-6 pb-3 pe-0">
                                        <input type="number" class="form-control card-expiry-year" onfocusout="checkYear(this);" onkeydown="if(this.value.length==2 &amp;&amp; event.keyCode!=8) return false;" id="year" placeholder="21*" required="">
                                    </div>

                                    <div class="col-md-12 pb-3 pe-0">
                                        <input type="number" class="form-control card-cvc" id="name" placeholder="CVC*" required="">
                                    </div>

                                    <div class="col-md-12 pb-3 pe-0">
                                        <div class="error form-group hide">
                                            <div class="alert-danger alert">Please correct the errors and try again.</div>
                                        </div>
                                    </div>


                                    <div class="col-md-12 pb-3 pe-0">
                                        <button class="btn bg-F34EFF text-white col-12 f-22 font-w-600" type="submit">Place Order</button>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="{{asset('assets/plugin/js/jquery.min.js')}}"></script>
    <script src="{{asset('assets/plugin/js/bundle.min.js')}}"></script>
    <script src="{{ asset('assets/script/index.js') }}"></script>
    <script src="{{asset('assets/sweetalert2/sweetalert2.min.js')}}"></script>
    <script src="{{ asset('assets/script/artsensegoods.js') }}"></script>
    <script type="text/javascript" src="https://js.stripe.com/v2/"></script>
    
   <script>

        var inputCheck = true;
        function phoneNumberChange(elem){
            // modal-content-text
            if($(elem).val() !=''){
                if($(elem).val().length > 15){$(elem).val($(elem).val().substring(0, 15));}
                let html = $('#modal-content-text').val();
                if(inputCheck){
                    html+='\n'+'10. Phone: ';
                    inputCheck = false;
                }
                let newHtmlArr = html.split('10. Phone: ');
                html = html.replace(newHtmlArr[1],'');
                html+= $(elem).val();
                $('#modal-content-text').val(html);
            }else{
                let resetHtmlArr = $('#modal-content-text').val().split('10. Phone: ')
                if(resetHtmlArr[1]){
                    let rmValue = '\n'+'10. Phone: '+resetHtmlArr[1];
                    $('#modal-content-text').val($('#modal-content-text').val().replace(rmValue,''));        
                }
                inputCheck = true;
            }
        }

        $(function () {
            var $form = $(".require-validation");
            $("form.require-validation").bind("submit", function (e) {
                var $form = $(".require-validation"),
                    inputSelector = ["input[type=email]", "input[type=password]", "input[type=text]", "input[type=file]", "textarea"].join(", "),
                    $inputs = $form.find(".required").find(inputSelector),
                    $errorMessage = $form.find("div.error"),
                    valid = true;
                $errorMessage.addClass("hide");

                $(".has-error").removeClass("has-error");
                $inputs.each(function (i, el) {
                    var $input = $(el);
                    if ($input.val() === "") {
                        $input.parent().addClass("has-error");
                        $errorMessage.removeClass("hide");
                        e.preventDefault();
                    }
                });

                if (!$form.data("cc-on-file")) {
                    e.preventDefault();
                    Stripe.setPublishableKey($form.data("stripe-publishable-key"));
                    Stripe.createToken(
                        {
                            number: $(".card-number").val(),
                            cvc: $(".card-cvc").val(),
                            exp_month: $(".card-expiry-month").val(),
                            exp_year: $(".card-expiry-year").val(),
                        },
                        stripeResponseHandler
                    );
                }
                
            });

            function stripeResponseHandler(status, response) {
                if (response.error) {
                    $(".error").removeClass("hide").find(".alert").text(response.error.message);
                } else {
                    // token contains id, last4, and card type
                    var token = response["id"];
                    // insert the token into the form so it gets submitted to the server
                    $form.find("input[type=text]").empty();
                    $form.append("<input type='hidden' name='stripeToken' value='" + token + "'/>");
                    // $form.get(0).submit();
                    $('.all-loader').removeClass('d-none');
                    html2canvas(document.getElementById('sence'), {
                        allowTaint: true,
                        logging: true
                    }).then(function(canvas) {
                        // Get base64URL
                        canvas.style.width = "300px"
                        canvas.style.height = "240px"
                        modalImage.appendChild(canvas);
                        $('.main-loader').addClass('d-none');
                        var base64URL = canvas.toDataURL('image/jpeg').replace('image/jpeg', 'image/octet-stream');
                        $('.wrapper-secleted-output').css('display', 'block');
                
                        $.ajax({
                            type: 'POST',
                            url: "{{route('order.store')}}",
                            data: {
                                stripeToken:token,
                                _token: '{{csrf_token()}}',
                                phone_number:$('#stripe_phone_number').val(),
                                order_id: $('.unique_id').text().replace(';', ''),
                                line_one_text: $('#lineonefinaltext').text().replace(',', ''),
                                line_two_text: $('#linetwofinaltext').text().replace(',', ''),
                                line_three_text: $('#linethreefineltext').text().replace(',', ''),
                                backing_color: $('.backing-color-text').text().replace(';', ''),
                                backing_shape: $('.backing-shape-text').text().replace(';', ''),
                                size: $('.size').text().replace(';', ''),
                                deliver_date: $('.deiverDate').text().replace(';', ''),
                                price: $('.price').text().replace(';', ''),
                                install: $('.install-text').text().replace(';', ''),
                                font: $('.text-one-font-name').text().replace(';', '') + $('.text-two-font-name').text().replace(';', '') + $('.text-three-font-name').text().replace(';', ''),
                                colors: $('.text-one-color-name').text().replace(';', '') + $('.text-two-color-name').text().replace(';', '') + $('.text-three-color-name').text().replace(';', ''),
                                image: base64URL
                            },
                            success: function(data) {
                                $('.all-loader').addClass('d-none');
                                if(data.success==true){
                                    Swal.fire(
                                        'Success!',
                                        data.message,
                                        'success'
                                    ).then((result) => {
                                        if (result.isConfirmed) { window.location = '';}
                                    });
                                }
                            }
                        });
                    });

                }
            }
        });

        function checkMonth(elem){
            if($(elem).val() > 12){
                $(elem).val(12);
            }

            if($(elem).val()<=0 ){
                $(elem).val(1);
            }
        }

        function checkYear(elem){
            var date = new Date(); // date object
            var getYear =  date.getFullYear(); // get current year
            var getTwodigitYear = getYear.toString().substring(2);
            if($(elem).val() < getTwodigitYear){
                $(elem).val(getTwodigitYear);
            }
        }

        $(document).ready(function() {
            setTimeout(() => {$('#whole-dimension').css({"width":noenText1backing.offsetWidth});}, 10);
            $('.js-btn-tooltip').tooltip();
            $('.js-btn-tooltip--custom').tooltip({
                customClass: 'tooltip-custom'
            });
            $('.js-btn-tooltip--custom-alt').tooltip({
                customClass: 'tooltip-custom-alt'
            });

            $('.js-btn-popover').popover();
            $('.js-btn-popover--custom').popover({
                customClass: 'popover-custom'
            });
            $('.js-btn-popover--custom-alt').popover({
                customClass: 'popover-custom-alt'
            });

        });
</script>

</body>

</html>