<?php
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\App;
define('App_Name', 'Punjab-Angel-Network');
define('App_Logo', "logo.png");
define('baseURl', env('APP_URL', 'https://punjabangelsnetwork.com'));
define('logo',baseURl.'/'.'assets/img/'.App_Logo);
define('placeHolderBlogImage',baseURl.'/'.'images/PlaceHolderEvent.jpg');
define('placeHolderEventImage',baseURl.'/'.'images/PlaceHolderEvent.jpg');
define('placeHolderPageImage',baseURl.'/'.'images/PagePlaceHolder.jpg');
define('placeHolderBannerImage',baseURl.'/'.'front/images/banner-blog.jpg');
$fileinstruction='<span class="span-bold">Max file size : 200kb (Jpeg, Jpg, Png, Webp)</span>';
define('fileinstruction',$fileinstruction);
// define('emailTemplateLogo',baseURl.'/'.'assets/logo/Unify-Healthcare-Logo.png');