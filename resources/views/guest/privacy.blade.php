@extends('layouts.guest.master')

@php $seo=StaticPageSeo();@endphp
    @php $meta_title=$seo->privacy_meta;@endphp
    @php $meta_desc=$seo->privacy_description;@endphp
    @php $meta_key=$seo->privacy_keyword;@endphp
@section('title', $meta_title)
@section('description',$meta_desc)
@section('keywords',$meta_key)

@section('page_level_style')

@endsection

@section('content')
<!-- Breadcrumb -->
<section class="breadcrumb-outer text-center" style="background-image: url('{{asset('images/privacy_policy.png')}}');">
        <div class="container">
            <div class="breadcrumb-content">
                <h2 class="white"> Privacy Policy </h2>
            </div>
        </div>
        <div class="overlay"></div>
    </section>
    <!-- BreadCrumb Ends -->

    <section class="blogmain">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-xs-12 pad-right-30">
                    <div class="blog-single">
                       
                        <div class="blog-content mar-bottom-30">
                            <h2 class="blog-title mar-bottom-0">Our Privacy Policy  </h2>
                            
                            <br>

                            <p style=" font-weight:500">Purpose of this privacy policy</p>  
                            
                            <p>The main aim of the privacy policy is to give you information on how we collect and process the data you provide on the website. It includes all the information you put in when you sign up to our website. Whether you submit a travel query, buy a package, or discuss your travel requirements. We advise you to read this privacy notice carefully so that you are aware of how and why we are using your data. This website is not intended for children, we knowingly do not collect data related to children. If we learn that we have collected or received information of any individua under the age of 18 without verification of parental consent, we will delete that information. </p>
                            <h3>Member’s profile</h3>  

                          

                            <p> When you are booking your trip from our website, we need to collect certain mandatory information so that we can process it further.  </p>
                            <p>This information includes: </p>
<ul>
    <li>1. Name</li>
    <li>2. Date of birth</li>
    <li>3. Gender</li>
    <li>4. mailing address</li>
    <li>5. e-mail address</li>
    <li>6. Telephone number</li>
    <li>7. Frequent traveller number</li>
    <li>8. Credit card and payment information</li>
    <li>9. Travel and accommodation details</li>
    <li>10. Passport information</li>
    <li>11. Special travel requests, such as a request for a wheelchair, sitting arrangements, or a special meal.</li>
</ul>
                            

                            <p>**Individual profile and company details are not used for any other reasons and will never be supplied to a third party.  </p>

                          

                            <h3> Third parties </h3> 

                           

                            <p>Sometimes a third party will provide some exciting offers and plans for clients. For that, Unify Holidays may give your personal information to a third party so that you can get the best of it from such opportunities. Our website may include links to a third party. Clicking to those links or enabling those connections may allow third parties to collect or share data about you. We do not control third party's websites and we are not responsible for their privacy statements. </p> 
                            <h3> Information collected on the site</h3> 

                            <p>When you visit our website, our Internet Service Provider makes a record of your visit and logs the following information for static reasons:  </p> 
<ul>
    <li> 1. Your server address</li>
    <li>2. Your top-level domains ( for example: www., .com, .in etc)</li>
    <li>3. The date and time, when you visit our website</li>
    <li>4. Which type of browser you are using</li>
    <li>5. The page you accessed</li>
</ul>
                           

                            <p>Sometimes we may use some advertising companies to serve ads on our website and another website. These companies may use the information (not personal data or contact details) about their website visitors and provide you with advertisements about goods and services of your interest. We have special in-house services for your data protection, and they are available for all your questions and data-related queries. </p>
                            <p>We may have collected, used, stored, and transferred different kinds of data, which we group together as follows:  </p> 

<ul>
    <li><p><b> Identity data:</b>It includes your first name, last name, marital status, date of birth, and gender.</p></li>
    <li><p><b>Contact data:</b>It includes your billing address, email address, residence address, and phone number. </p></li>
    <li><p><b>Financial data:</b>It includes your bank account, payment details, and the details about payment to and from you along with services you have purchased from us. </p></li>
    <li><p><b>Technical data:</b>It includes your IP address, browsers type and version, operating system platform, and other technology on the device you use to access our website.</p></li>
    <li><p><b>Usage data:</b>it includes information about how you use our website, products, and services. </p></li>
</ul>
                           

                            <p>If you fail to provide personal data
<br>
We need to collect your data under the law and the contract binds up between you and us. If you are not able to provide us with personal information with original documents, we may not be able to continue the contract we have or are trying to have. In that case, we will cancel all the services you have with us, but we will notify you in advance. </p> 
<h3>Booking Details</h3>
                            

                            <p>If you are booking a trip with us, we are going to ask you to provide some certain details so that we can arrange the travel on your behalf. This includes details of your passport, emergency contacts, travel insurance, preferences or special choices, Visa requirements, and some others. We would also like to have details of friends and family who are accompanying you as a part of the journey, but we would get consent from your friend or family member before sharing their details. We need this information to book the trip on your behalf. </p>  
                            <h3>Disclosure of Information</h3>
                            

                            <p>Unify Holidays will not rent, send, trade, or share your personal information with others. We do not log in to your data and nor do we link your data with others’ profiles. We also collect the information which you provide by volunteering yourself while using our services.  </p>
                            <h3>Cookies<h3>
                            

                            <p>You can set your browser to refuse some browser cookies or to alert you when websites access cookies. If you refuse and disable cookies, some parts of the website may become inaccessible or not function properly. We use cookies for interaction, but it does not store your personal information. </p>

                          
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- attraction ends -->
    <!-- attraction ends -->


<!-- contact Ends -->
<!-- footer starts -->
@endsection

@section('page_level_script')
@endsection