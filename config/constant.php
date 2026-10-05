<?php
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\App;
define('App_Name', 'Punjab-Angel-Network');
define('App_Logo', "logo.png");
// define('App_Logo_white', "Unify-Healthcare-Logo-white.png");
// define('STRIPE_KEY', "pk_test_51N5MM1SJv72rtuFZJsGYCY6osSS0TVLT7wB4tc2EfoH8AWmBeMLBLNPodaEMmeBNohAkEPYWXLzJuqQV7AXkc6V100thD0Mq0W");
// define('STRIPE_SECRET', "sk_test_51N5MM1SJv72rtuFZI7XfSY1LOx1RI9ZhAIqld51gPbAYVyazBX81UQuAZh4twvQpWhMAkM4HsKJDacJHVm1gQ3ah00TtNBxeln");
// define('STRIPE_WEBHOOK_SECRET', "Unify-Healthcare-Logo-white.png");
// define('CASHIER_CURRENCY', "eur");
define('baseURl', env('environment') == 'local' ? 'http://127.0.0.1:8000' : 'http://staging.unifyholidays.com');
define('logo',baseURl.'/'.'assets/img/'.App_Logo);
define('placeHolderBlogImage',baseURl.'/'.'images/PlaceHolderEvent.jpg');
define('placeHolderEventImage',baseURl.'/'.'images/PlaceHolderEvent.jpg');
define('placeHolderPageImage',baseURl.'/'.'images/PagePlaceHolder.jpg');
define('placeHolderBannerImage',baseURl.'/'.'front/images/banner-blog.jpg');
$fileinstruction='<span class="span-bold">Max file size : 200kb (Jpeg, Jpg, Png, Webp)</span>';
define('fileinstruction',$fileinstruction);
// define('emailTemplateLogo',baseURl.'/'.'assets/logo/Unify-Healthcare-Logo.png');