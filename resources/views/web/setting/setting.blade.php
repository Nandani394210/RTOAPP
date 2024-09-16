@extends('web.master')
@section('content')
<!-- setting and help section start -->
<section class="sub-sections question-section">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="exam-test-content settings-image">
                    {{-- <h1>Settings & Help</h1> --}}
                    <h1>{{__('messages.Setting')}}</h1>
                    <img src="{{asset('assets/images/rto-banner-image.png')}}" class="img-fluid">
                    {{-- <p>Form, RTO office information and more</p> --}}
                    <p>{{__('messages.Feature3D')}}</p>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- <section class="message-section" id="message-section">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="success-message" id="success-message">
                    {{-- <div class="success-container"> --}}
                        {{-- <p class="success-text">Your message has been sent. we'll get back to you shortly</p> --}}
                        {{-- </div> --}}
                    {{-- </div>
            </div>
        </div>
    </div>
</section> --}}

<!-- success message box -->
{{-- </section> --}}

<section class="contact-section">
    <div class="container">
        <div class="help-details">
            <div class="row g-4 justify-content-between">
                <div class="col-12 col-lg-4">
                    <ul class="dropdown-menu help-menubar">
                        <div class="nav nav-pills menu-pills" id="v-pills-tab" role="tablist"
                            aria-orientation="vertical">
                            {{-- <a href="javascript:void(0)" class="nav-link active dropdown-item menubar-item"
                                id="v-pills-home-tab" data-bs-toggle="pill" data-bs-target="#v-pills-home" type="button"
                                role="tab" aria-controls="v-pills-home" aria-selected="true"><i
                                    class="fa-solid fa-clipboard-list"></i>Forms</a>
                            <a href="javascript:void(0)" class="nav-link dropdown-item menubar-item"
                                id="v-pills-profile-tab" data-bs-toggle="pill" data-bs-target="#v-pills-profile"
                                type="button" role="tab" aria-controls="v-pills-profile" aria-selected="false"><i
                                    class="fa-solid fa-spinner"></i>Process of driving Licence</a>
                            <a href="javascript:void(0)" class="nav-link dropdown-item menubar-item"
                                id="v-pills-messages-tab" data-bs-toggle="pill" data-bs-target="#v-pills-messages"
                                type="button" role="tab" aria-controls="v-pills-messages" aria-selected="false"><i
                                    class="fa-solid fa-building"></i>RTO Office</a>
                            <a href="javascript:void(0)" class="nav-link dropdown-item menubar-item"
                                id="v-pills-settings-tab" data-bs-toggle="pill" data-bs-target="#v-pills-settings"
                                type="button" role="tab" aria-controls="v-pills-settings" aria-selected="false"><i
                                    class="fa-solid fa-address-book"></i>Contact Us</a>
                            <a href="javascript:void(0)" class="nav-link dropdown-item menubar-item menu-border-none"
                                id="v-pills-disclaimer-tab" data-bs-toggle="pill" data-bs-target="#v-pills-disclaimer"
                                type="button" role="tab" aria-controls="v-pills-disclaimer" aria-selected="false"><i
                                    class="fa-solid fa-circle-exclamation"></i>Disclaimer</a> --}}

                            <a href="javascript:void(0)" class="nav-link active dropdown-item menubar-item"
                                id="v-pills-home-tab" data-bs-toggle="pill" data-bs-target="#v-pills-home" type="button"
                                role="tab" aria-controls="v-pills-home" aria-selected="true"><i
                                    class="fa-solid fa-clipboard-list"></i>{{__('messages.FH')}}</a>
                            <a href="javascript:void(0)" class="nav-link dropdown-item menubar-item"
                                id="v-pills-profile-tab" data-bs-toggle="pill" data-bs-target="#v-pills-profile"
                                type="button" role="tab" aria-controls="v-pills-profile" aria-selected="false"><i
                                    class="fa-solid fa-spinner"></i>{{__('messages.PH')}}</a>
                            <a href="javascript:void(0)" class="nav-link dropdown-item menubar-item"
                                id="v-pills-messages-tab" data-bs-toggle="pill" data-bs-target="#v-pills-messages"
                                type="button" role="tab" aria-controls="v-pills-messages" aria-selected="false"><i
                                    class="fa-solid fa-building"></i>{{__('messages.RtoH')}}</a>
                            <a href="javascript:void(0)" class="nav-link dropdown-item menubar-item"
                                id="v-pills-settings-tab" data-bs-toggle="pill" data-bs-target="#v-pills-settings"
                                type="button" role="tab" aria-controls="v-pills-settings" aria-selected="false"><i
                                    class="fa-solid fa-address-book"></i>{{__('messages.ContactH')}}</a>
                            <a href="javascript:void(0)" class="nav-link dropdown-item menubar-item menu-border-none"
                                id="v-pills-disclaimer-tab" data-bs-toggle="pill" data-bs-target="#v-pills-disclaimer"
                                type="button" role="tab" aria-controls="v-pills-disclaimer" aria-selected="false"><i
                                    class="fa-solid fa-circle-exclamation"></i>{{__('messages.FooterH')}}</a>
                        </div>
                    </ul>
                </div>
                <div class="col-12 col-lg-8">
                    <div class="tab-content setting-and-help-content" id="v-pills-tabContent">
                        <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel"
                            aria-labelledby="v-pills-home-tab">
                            <div class="accordion accordion-flush setting-form" id="accordionFlushExample">
                                <div class="start-form">
                                    {{-- <h4>Forms</h4> --}}
                                    <h4>{{__('messages.FH')}}</h4>
                                </div>
                                <div class="accordion-item form-details">
                                    <h2 class="accordion-header" id="flush-headingOne">
                                        {{-- <button class="accordion-button collapsed form-button" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#flush-collapseOne"
                                            aria-expanded="false" aria-controls="flush-collapseOne">
                                            Driving Licence Forms
                                        </button> --}}
                                        <button class="accordion-button collapsed form-button" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#flush-collapseOne"
                                            aria-expanded="false" aria-controls="flush-collapseOne">
                                            {{__('messages.DForm')}}
                                        </button>
                                    </h2>
                                    <div id="flush-collapseOne" class="accordion-collapse collapse form-body-space"
                                        aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body form-body">
                                            <div class="form-body-details first-form-detail">
                                                {{-- <a href="{{route('setting.form-url')}}"
                                                    class="application-form">Form 1 - Application - cum - declaration as
                                                    to physical fitness.</a> --}}
                                                {{-- <a
                                                    href="{{route('setting.form-url',['url' => 'https://cot.gujarat.gov.in/writereaddata/images/pdf/form/form_1.PDF'])}}">Form
                                                    1 - Application - cum - declaration as to physical fitness.</a> --}}
                                                {{-- <a
                                                    href="{{route('setting.form-url',['url' => 'https://cot.gujarat.gov.in/writereaddata/images/pdf/form/form_1.PDF'])}}"
                                                    target="_blank">Form 1 - Application - cum - declaration as to
                                                    physical fitness</a> --}}
                                                <a href="{{route('setting.form-url',['url' => 'https://cot.gujarat.gov.in/writereaddata/images/pdf/form/form_1.PDF'])}}"
                                                    target="_blank">{{__('messages.DForm1')}}</a>
                                            </div>
                                            <div class="form-body-details">
                                                {{-- <a
                                                    href="{{route('setting.form-url',['url' => 'https://cot.gujarat.gov.in/writereaddata/images/pdf/form/form_1A.PDF'])}}"
                                                    target="_blank">Form 1 A - Medical certificate</a> --}}
                                                <a href="{{route('setting.form-url',['url' => 'https://cot.gujarat.gov.in/writereaddata/images/pdf/form/form_1A.PDF'])}}"
                                                    target="_blank">{{__('messages.DForm2')}}</a>
                                            </div>
                                            <div class="form-body-details">
                                                {{-- <a
                                                    href="{{route('setting.form-url',['url' => 'https://cot.gujarat.gov.in/writereaddata/images/pdf/form/form_2.pdf'])}}"
                                                    target="_blank">Form 2 - Issue/Renewal of learner's license</a> --}}
                                                <a href="{{route('setting.form-url',['url' => 'https://cot.gujarat.gov.in/writereaddata/images/pdf/form/form_2.pdf'])}}"
                                                    target="_blank">{{__('messages.DForm3')}}</a>
                                            </div>
                                            <div class="form-body-details">
                                                {{-- <a
                                                    href="{{route('setting.form-url',['url' => 'https://cot.gujarat.gov.in/writereaddata/images/pdf/form/form_4.pdf'])}}"
                                                    target="_blank">Form 4 - Issue of fresh driving license</a> --}}
                                                <a href="{{route('setting.form-url',['url' => 'https://cot.gujarat.gov.in/writereaddata/images/pdf/form/form_4.pdf'])}}"
                                                    target="_blank">{{__('messages.DForm4')}}</a>
                                            </div>
                                            <div class="form-body-details">
                                                {{-- <a
                                                    href="{{route('setting.form-url',['url' => 'https://cot.gujarat.gov.in/writereaddata/Portal/Images/pdf/Driving_License_FORM_8E.pdf'])}}"
                                                    target="_blank">Form 8 - Addition of another class of vehicle</a>
                                                --}}
                                                <a href="{{route('setting.form-url',['url' => 'https://cot.gujarat.gov.in/writereaddata/Portal/Images/pdf/Driving_License_FORM_8E.pdf'])}}"
                                                    target="_blank">{{__('messages.DForm5')}}</a>
                                            </div>
                                            <div class="form-body-details">
                                                {{-- <a
                                                    href="{{route('setting.form-url',['url' => 'https://cot.gujarat.gov.in/writereaddata/Portal/Images/pdf/Driving_License_FORM_9E.pdf'])}}"
                                                    target="_blank">Form 9 - Renewel of driving license</a> --}}
                                                <a href="{{route('setting.form-url',['url' => 'https://cot.gujarat.gov.in/writereaddata/Portal/Images/pdf/Driving_License_FORM_9E.pdf'])}}"
                                                    target="_blank">{{__('messages.DForm6')}}</a>
                                            </div>
                                            <div class="form-body-details">
                                                <a href="{{route('setting.form-url',['url' => 'https://cot.gujarat.gov.in/writereaddata/images/pdf/form/lld.pdf'])}}"
                                                    target="_blank">{{__('messages.DForm7')}}</a>
                                            </div>
                                            <div class="form-body-details">
                                                <a href="{{route('setting.form-url',['url' => 'https://cot.gujarat.gov.in/writereaddata/images/pdf/form/tva.pdf'])}}"
                                                    target="_blank">{{__('messages.DForm8')}}</a>
                                            </div>
                                            <div class="form-body-details last-form-detail">
                                                <a href="{{route('setting.form-url',['url' => 'https://cot.gujarat.gov.in/writereaddata/images/pdf/form/form4a.pdf'])}}"
                                                    target="_blank">{{__('messages.DForm9')}}</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item form-details">
                                    <h2 class="accordion-header" id="flush-headingTwo">
                                        <button class="accordion-button collapsed form-button" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo"
                                            aria-expanded="false" aria-controls="flush-collapseTwo">
                                            {{-- Registration Forms --}}
                                            {{__('messages.RForm')}}
                                        </button>
                                    </h2>
                                    <div id="flush-collapseTwo" class="accordion-collapse collapse form-body-space"
                                        aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body form-body">
                                            <div class="form-body-details first-form-detail">
                                                {{-- <a
                                                    href="{{route('setting.form-url',['url' => 'https://cot.gujarat.gov.in/writereaddata/Portal/Images/pdf/Registration_FORM_20-E.pdf'])}}"
                                                    target="_blank">Form 20 - Permanent registration</a> --}}
                                                <a href="{{route('setting.form-url',['url' => 'https://cot.gujarat.gov.in/writereaddata/Portal/Images/pdf/Registration_FORM_20-E.pdf'])}}"
                                                    target="_blank">{{__('messages.RForm1')}}</a>
                                            </div>
                                            <div class="form-body-details">
                                                <a href="{{route('setting.form-url',['url' => 'https://cot.gujarat.gov.in/writereaddata/images/pdf/form/form_25.pdf'])}}"
                                                    target="_blank">{{__('messages.RForm2')}}</a>
                                            </div>
                                            <div class="form-body-details">
                                                <a href="{{route('setting.form-url',['url' => 'https://cot.gujarat.gov.in/writereaddata/images/pdf/form/form_26.pdf'])}}"
                                                    target="_blank">{{__('messages.RForm3')}}</a>
                                            </div>
                                            <div class="form-body-details">
                                                <a href="{{route('setting.form-url',['url' => 'https://cot.gujarat.gov.in/writereaddata/Portal/Images/pdf/Registration_FORM_29-E.pdf'])}}"
                                                    target="_blank">{{__('messages.RForm4')}}</a>
                                            </div>
                                            <div class="form-body-details">
                                                <a href="{{route('setting.form-url',['url' => 'https://cot.gujarat.gov.in/writereaddata/Portal/Images/pdf/Registration_FORM_30-E.pdf'])}}"
                                                    target="_blank">{{__('messages.RForm5')}} </a>
                                            </div>
                                            <div class="form-body-details">
                                                {{-- <a
                                                    href="{{route('setting.form-url',['url' => 'https://cot.gujarat.gov.in/writereaddata/images/pdf/form/form_34.pdf'])}}"
                                                    target="_blank">Form 34 - Endorsement of hire-purchase agreement</a>
                                                --}}
                                                <a href="{{route('setting.form-url',['url' => 'https://cot.gujarat.gov.in/writereaddata/images/pdf/form/form_34.pdf'])}}"
                                                    target="_blank">{{__('messages.RForm6')}}</a>
                                            </div>
                                            <div class="form-body-details">
                                                {{-- <a
                                                    href="{{route('setting.form-url',['url' => 'https://cot.gujarat.gov.in/writereaddata/images/pdf/form/form_35.pdf'])}}"
                                                    target="_blank">Form 35 - Termination of hire-purchase agreement</a>
                                                --}}
                                                <a href="{{route('setting.form-url',['url' => 'https://cot.gujarat.gov.in/writereaddata/images/pdf/form/form_35.pdf'])}}"
                                                    target="_blank">{{__('messages.RForm7')}}</a>
                                            </div>
                                            <div class="form-body-details">
                                                {{-- <a
                                                    href="{{route('setting.form-url',['url' => 'https://cot.gujarat.gov.in/writereaddata/images/pdf/form/mt.pdf'])}}"
                                                    target="_blank">Form M.T - Application for tax exemption </a> --}}
                                                <a href="{{route('setting.form-url',['url' => 'https://cot.gujarat.gov.in/writereaddata/images/pdf/form/mt.pdf'])}}"
                                                    target="_blank">{{__('messages.RForm8')}} </a>
                                            </div>
                                            <div class="form-body-details">
                                                {{-- <a
                                                    href="{{route('setting.form-url',['url' => 'https://cot.gujarat.gov.in/writereaddata/images/pdf/form/nt.pdf'])}}"
                                                    target="_blank">Form N.T - Application for non use of motor
                                                    vehicle</a> --}}
                                                <a href="{{route('setting.form-url',['url' => 'https://cot.gujarat.gov.in/writereaddata/images/pdf/form/nt.pdf'])}}"
                                                    target="_blank">{{__('messages.RForm9')}}</a>
                                            </div>
                                            <div class="form-body-details">
                                                {{-- <a
                                                    href="{{route('setting.form-url',['url' => 'https://cot.gujarat.gov.in/writereaddata/images/pdf/form/ft.pdf'])}}"
                                                    target="_blank">Form F.T </a> --}}
                                                <a href="{{route('setting.form-url',['url' => 'https://cot.gujarat.gov.in/writereaddata/images/pdf/form/ft.pdf'])}}"
                                                    target="_blank">{{__('messages.RForm10')}} </a>
                                            </div>
                                            <div class="form-body-details last-form-detail">
                                                {{-- <a
                                                    href="{{route('setting.form-url',['url' => 'https://cot.gujarat.gov.in/writereaddata/images/pdf/form/CNA-Form.pdf'])}}"
                                                    target="_blank">CNA Form - Application for obtaining choice
                                                    number</a> --}}
                                                <a href="{{route('setting.form-url',['url' => 'https://cot.gujarat.gov.in/writereaddata/images/pdf/form/CNA-Form.pdf'])}}"
                                                    target="_blank">{{__('messages.RForm11')}}</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item form-details">
                                    <h2 class="accordion-header" id="flush-headingThree">
                                        <button class="accordion-button collapsed form-button" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#flush-collapseThree"
                                            aria-expanded="false" aria-controls="flush-collapseThree">
                                            {{-- Permit Forms --}}
                                            {{__('messages.PForm')}}
                                        </button>
                                    </h2>
                                    <div id="flush-collapseThree" class="accordion-collapse collapse form-body-space"
                                        aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body form-body">
                                            <div class="form-body-details first-form-detail">
                                                {{-- <a
                                                    href="{{route('setting.form-url',['url' => 'https://cot.gujarat.gov.in/writereaddata/Portal/Images/pdf/FORM-P.TEM.A-31120.pdf'])}}"
                                                    target="_blank">P.Tem.A. - Application for temporary permit</a> --}}
                                                <a href="{{route('setting.form-url',['url' => 'https://cot.gujarat.gov.in/writereaddata/Portal/Images/pdf/FORM-P.TEM.A-31120.pdf'])}}"
                                                    target="_blank">{{__('messages.PForm1')}}</a>
                                            </div>
                                            <div class="form-body-details">
                                                {{-- <a
                                                    href="{{route('setting.form-url',['url' => 'https://cot.gujarat.gov.in/writereaddata/Portal/Images/pdf/FORM-P.PU.C.A-31120.pdf'])}}"
                                                    target="_blank">P.Pu.C.A - Application for good carriage permit</a>
                                                --}}
                                                <a href="{{route('setting.form-url',['url' => 'https://cot.gujarat.gov.in/writereaddata/Portal/Images/pdf/FORM-P.PU.C.A-31120.pdf'])}}"
                                                    target="_blank">{{__('messages.PForm2')}}</a>
                                            </div>
                                            <div class="form-body-details last-form-detail">
                                                {{-- <a
                                                    href="{{route('setting.form-url',['url' => 'https://cot.gujarat.gov.in/writereaddata/Portal/Images/pdf/FORM-P.CO.P.A-31120.pdf'])}}"
                                                    target="_blank">P.Co.P.A - Application for contract carriage
                                                    permit</a> --}}
                                                <a href="{{route('setting.form-url',['url' => 'https://cot.gujarat.gov.in/writereaddata/Portal/Images/pdf/FORM-P.CO.P.A-31120.pdf'])}}"
                                                    target="_blank">{{__('messages.PForm3')}}</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="v-pills-profile" role="tabpanel"
                            aria-labelledby="v-pills-profile-tab">
                            <div class="accordion accordion-flush setting-form" id="accordionFlushExample">
                                <div class="start-form">
                                    {{-- <h4>Process of driving Licence</h4> --}}
                                    <h4>{{__('messages.PH')}}</h4>
                                </div>
                                <div class="accordion-item form-details">
                                    <h2 class="accordion-header" id="flush-headingOne">
                                        <button class="accordion-button collapsed form-button" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#flush-collapseOne"
                                            aria-expanded="false" aria-controls="flush-collapseOne">
                                            {{-- New driving licence --}}
                                            {{__('messages.PH1')}}
                                        </button>
                                    </h2>
                                    <div id="flush-collapseOne" class="accordion-collapse collapse form-body-space"
                                        aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body form-body">
                                            <div class="form-body-details first-form-detail">
                                                {{-- <p><b>Application Form</b></p> --}}
                                                <p><b>{{__('messages.PH1DH1')}}</b></p>
                                                <div class="licence-information">
                                                    <ul>
                                                        {{-- <li> An applicant is required to obtain a learning license
                                                            in order to get new driving license.</li>
                                                        <li> An applicant is required to apply in Form No.2/4 for the
                                                            purpose of both learning as well as driving license, Medical
                                                            Certificate in Form No.1 (A) is also required to be attached
                                                            . In case a person wants to obtain driving license for
                                                            transport goods vehicle, & to get online appointment or for
                                                            further details, please visit : <a
                                                                href="www.sarathi.nic.in">www.sarathi.nic.in</a></li>
                                                        --}}

                                                        <li> {{__('messages.PH1D1')}}</li>
                                                        <li> {{__('messages.PH1D2')}}</a></li>
                                                    </ul>
                                                </div>
                                                {{-- <p><b>Eligibility</b></p> --}}
                                                <p><b>{{__('messages.PH2DH1')}}</b></p>
                                                <div class="licence-information">
                                                    <ul>
                                                        {{-- <li>A person should have completed 16 years to obtain
                                                            license for 2 wheelers without gear.</li>
                                                        <li> person should have completed 18 years age to obtain license
                                                            for 2 wheelers with gear, Motor-car, Tractor and other
                                                            non-transport vehicles.</li>
                                                        <li>For transport vehicles, a person should have completed 20
                                                            years of age. In addition he should be passed standard 8th
                                                            pass and should have experience of 1 year driving a light
                                                            motor vehicle.</li> --}}

                                                        <li>{{__('messages.PH2D1')}}</li>
                                                        <li>{{__('messages.PH2D2')}} </li>
                                                        <li>{{__('messages.PH2D3')}}</li>
                                                    </ul>
                                                </div>
                                                {{-- <p><b>Necessary Documents</b></p> --}}
                                                <p><b>{{__('messages.PH3DH1')}}</b></p>
                                                <div class="licence-information">
                                                    <ul>
                                                        {{-- <li>Proof of Age</li>
                                                        <p>School Leaving Certificate, Birth Certificate, Passport, Pan
                                                            Card, L.I.C. Policy or a Certificate from Civil Surgeon or a
                                                            Doctor equivalent to that can be submitted as a proof of
                                                            age.</p>
                                                        <li>Proof of Address</li>
                                                        <p>School Leaving Certificate, Passport, L.I.C. Policy,
                                                            Electoral Voter I-Card, Light Bill, Telephone Bill, receipt
                                                            of House Tax with address, Pay Slip of Central/State/Local
                                                            self Government or an Affidavit from the applicant to that
                                                            effect can be submitted as the proof for address.</p> --}}

                                                        <li>{{__('messages.PH3D1')}}</li>
                                                        <p>{{__('messages.PH3D2')}}</p>
                                                        <li>{{__('messages.PH3D3')}}</li>
                                                        <p>{{__('messages.PH3D4')}}</p>
                                                    </ul>
                                                </div>
                                                {{-- <p><b>Fee</b></p> --}}
                                                <p><b>{{__('messages.PH4DH1')}}</b></p>
                                                <div class="licence-information">
                                                    <ul>
                                                        {{-- <li>The fee for Learning License and Driving License has to
                                                            be paid together. Rs.25/- as test fee plus Rs.30/- per
                                                            category of vehicle is required to be paid for Learning
                                                            License.</li>
                                                        <li>Rs.200/- for a Smart Card Driving License and Rs.50/- per
                                                            category of vehicle is required to be paid for Driving
                                                            License.</li> --}}

                                                        <li>{{__('messages.PH4D1')}}</li>
                                                        <li>{{__('messages.PH4D2')}}</li>
                                                    </ul>
                                                </div>
                                                {{-- <p><b>Procedure Of Examination</b><br>
                                                    To obtain Learning License, Knowledge Test through computer is
                                                    required to be passed.</p> --}}

                                                <p><b>{{__('messages.PH5DH1')}}</b><br>
                                                    {{__('messages.PH5DH2')}}</p>
                                                <div class="licence-information">
                                                    <ul>
                                                        {{-- <li>Subject like Rules and Regulations of traffic, and
                                                            traffic signage's are included the test.</li>
                                                        <li>15 questions are asked in the test at random, out of which
                                                            11 questions are required to be answered correctly to pass
                                                            the test.</li>
                                                        <li>48 seconds are allowed to answer each question.</li>
                                                        <li>A person failing in the test can appear for the re-test
                                                            after a gap of 24 hours.</li>
                                                        <li>A person who has learning license or driving license and
                                                            seeks to apply for an additional category of driving license
                                                            in the existing driving license, is exempted from the
                                                            knowledge test on computer.</li>
                                                        <li> Click here for<a href="https://ltest.guj.nic.in/"> LLR
                                                                Practices and Mock Test</a></li> --}}

                                                        <li>{{__('messages.PH5D1')}}</li>
                                                        <li>{{__('messages.PH5D2')}}</li>
                                                        <li>{{__('messages.PH5D3')}}</li>
                                                        <li>{{__('messages.PH5D4')}}</li>
                                                        <li>{{__('messages.PH5D5')}}</li>
                                                        <li>{{__('messages.PH5D6')}} <a
                                                                href="https://ltest.guj.nic.in/">{{__('messages.PH5D7')}}
                                                            </a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item form-details">
                                    <h2 class="accordion-header" id="flush-headingTwo">
                                        <button class="accordion-button collapsed form-button" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo"
                                            aria-expanded="false" aria-controls="flush-collapseTwo">
                                            {{-- Additional another category in the existing driving licence --}}
                                            {{__('messages.PHA2')}}
                                        </button>
                                    </h2>
                                    <div id="flush-collapseTwo" class="accordion-collapse collapse form-body-space"
                                        aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body form-body">
                                            <div class="form-body-details first-form-detail">
                                                {{-- <p><b>To add another category in the existing license for two
                                                        wheelers</b></p> --}}
                                                <p><b>{{__('messages.PHA2DH1')}}</b></p>
                                                <div class="licence-information">
                                                    <ul>
                                                        {{-- <li>Application should be made in form-8 attaching original
                                                            driving license with a fee of Rs.50/- for driving license,
                                                            Rs.200/- for a smart card driving license and Rs.50/- for
                                                            driving test is required to be paid with application</li>
                                                        <li>Learning license is required to be obtained by the
                                                            applicant, but he is exempted from the computer knowledge
                                                            test.</li>
                                                        <li>The applicant can appear for driving test after a gap of 30
                                                            days of obtaining the learning license.</li> --}}

                                                        <li>{{__('messages.PHA2D1')}}</li>
                                                        <li>{{__('messages.PHA2D2')}}</li>
                                                        <li>{{__('messages.PHA2D3')}}</li>
                                                    </ul>
                                                </div>
                                                {{-- <p><b>Addition of transport vehicle category in the L.M.V.
                                                        license</b></p> --}}
                                                <p><b>{{__('messages.PHA3DH1')}}</b></p>
                                                <div class="licence-information">
                                                    <ul>
                                                        {{-- <li>Application is made in Form No.8 attaching original
                                                            driving license is required to be attached.</li>
                                                        <li>Applicant should have completed 20 years of age.</li>
                                                        <li>Minimum standard 8th pass, and</li>
                                                        <li>Have minimum of 1 year of experience of driving L.M.V.</li>
                                                        <li>Applicant should also produce certificate of training from a
                                                            recognized Motor Driving School in Form No.5.</li>
                                                        <li>A fee of Rs.50/-for driving license with Rs.200/- for a
                                                            smart card and driving test fee of Rs.50/- per category of
                                                            vehicle is required to paid with application.</li>
                                                        <li>Please note that, an applicant is required to take learning
                                                            license, but he is exempted from the computer knowledge
                                                            test.</li> --}}

                                                        <li>{{__('messages.PHA3D1')}}</li>
                                                        <li>{{__('messages.PHA3D2')}}</li>
                                                        <li>{{__('messages.PHA3D3')}}</li>
                                                        <li>{{__('messages.PHA3D4')}}</li>
                                                        <li>{{__('messages.PHA3D5')}}</li>
                                                        <li>{{__('messages.PHA3D6')}}</li>
                                                        <li>{{__('messages.PHA3D7')}}</li>
                                                    </ul>
                                                </div>
                                                {{-- <p><b>To obtain badge or authorization for transport vehicle</b>
                                                </p> --}}
                                                <p><b>{{__('messages.PHA4DH1')}}</b></p>
                                                <div class="licence-information">
                                                    <ul>
                                                        {{-- <li>Application should be made in Form T.V.A.</li>
                                                        <li>Applicant should have completed 20 years of age and he
                                                            should be minimum standard-8th pass, and</li>
                                                        <li>Have minimum of 1 year of experience of driving L.M.V.
                                                            Applicant should also produce training certificate in From
                                                            No.5 from an authorized Motor Driving School.</li>
                                                        <li>He should also produce a Certificate of good conduct from
                                                            concerned Police Station.</li>
                                                        <li>A fee of Rs.50/- for every category of vehicle is required
                                                            to be paid for this purpose</li> --}}

                                                        <li>{{__('messages.PHA4D1')}}</li>
                                                        <li>{{__('messages.PHA4D2')}}</li>
                                                        <li>{{__('messages.PHA4D3')}}</li>
                                                        <li>{{__('messages.PHA4D4')}}</li>
                                                        <li>{{__('messages.PHA4D5')}}</li>
                                                    </ul>
                                                </div>
                                                {{-- <p><b>Inclusion of hazardous goods category in transport driving
                                                        license</b></p> --}}
                                                <p><b>{{__('messages.PHA5DH1')}}</b></p>
                                                <div class="licence-information">
                                                    <ul>
                                                        {{-- <li>Application can be made on a plain paper specifying
                                                            particulars of applicant.</li>
                                                        <li>The application should be accompanied with a certificate of
                                                            3 days training from a Central or State Government approved
                                                            centre.</li>
                                                        <li>A fee of Rs.50/- for endorsement is required to be paid.
                                                        </li>
                                                        <li>The endorsement is made for a period of one year.</li> --}}

                                                        <li>{{__('messages.PHA5D1')}}</li>
                                                        <li>{{__('messages.PHA5D2')}}</li>
                                                        <li>{{__('messages.PHA5D3')}}</li>
                                                        <li>{{__('messages.PHA5D4')}}</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item form-details">
                                    <h2 class="accordion-header" id="flush-headingThree">
                                        <button class="accordion-button collapsed form-button" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#flush-collapseThree"
                                            aria-expanded="false" aria-controls="flush-collapseThree">
                                            {{-- Renewal of driving licence --}}
                                            {{__('messages.PHA3')}}
                                        </button>
                                    </h2>
                                    <div id="flush-collapseThree" class="accordion-collapse collapse form-body-space"
                                        aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body form-body">
                                            <div class="form-body-details first-form-detail">
                                                <div class="licence-information">
                                                    <ul>
                                                        {{-- <li>Driving license is valid till the date as shown in the
                                                            driving license.</li>
                                                        <li>A grace period of 30 days is granted for renewal of driving
                                                            license.</li>
                                                        <li>If, a driving license holder comes for renewal within a
                                                            period of 5 years from the date of expiry, he is exempted
                                                            from test, but license is valid from date of renewed
                                                            license.</li>
                                                        <li>Application in Form-9 attached with original Driving License
                                                            should be made for renewal of driving license.</li>
                                                        <li>Medical Certificate in Form-1-A is required to be produced,
                                                            if, applicant has completed 50 years of age or is applying
                                                            for renewal of driving license for a transport vehicle.</li>
                                                        <li>A fee of Rs.50/- with a smart card fee of Rs.200/- is
                                                            required to be paid, if, application is made within the
                                                            period.</li>
                                                        <li>For delay, an additional fee of Rs.50/- for every year of
                                                            such delay is required to be paid.</li>
                                                        <li>In case of original driving license is from other R.T.O. or
                                                            State, then N.O.C. of concerned R.T.O. should be attached.
                                                        </li> --}}

                                                        <li>{{__('messages.PHA3RD1')}}</li>
                                                        <li>{{__('messages.PHA3RD2')}}</li>
                                                        <li>{{__('messages.PHA3RD3')}}</li>
                                                        <li>{{__('messages.PHA3RD4')}}</li>
                                                        <li>{{__('messages.PHA3RD5')}}</li>
                                                        <li>{{__('messages.PHA3RD6')}}</li>
                                                        <li>{{__('messages.PHA3RD7')}}</li>
                                                        <li>{{__('messages.PHA3RD8')}}</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item form-details">
                                    <h2 class="accordion-header" id="flush-headingFour">
                                        <button class="accordion-button collapsed form-button" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#flush-collapseFour"
                                            aria-expanded="false" aria-controls="flush-collapseFour">
                                            {{-- For change in details of driving licence or obtaining a duplicate --}}
                                            {{__('messages.PHA4')}}
                                        </button>
                                    </h2>
                                    <div id="flush-collapseFour" class="accordion-collapse collapse form-body-space"
                                        aria-labelledby="flush-headingFour" data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body form-body">
                                            <div class="form-body-details first-form-detail">
                                                <div class="licence-information">
                                                    <ul>
                                                        {{-- <li> Application should be made in Form L.L.D. with details
                                                            of original driving license and a fee of Rs.200/- should be
                                                            paid. </li>
                                                        <li>n case applicant has forgotten number of original smart
                                                            card, then, he can apply for information regarding it by
                                                            making an application indicating his name, address, date of
                                                            birth and is required to be pay a fee of Rs.25/-.</li>
                                                        <li>To change details of driving license like name, address,
                                                            etc., then, an application on plain paper with a smart card
                                                            fee of Rs.200/- is required to be made.</li>
                                                        <li>N.O.C. from the original licensing authority should be
                                                            obtained and attached with the application.</li> --}}

                                                        <li>{{__('messages.PHA4RD1')}}</li>
                                                        <li>{{__('messages.PHA4RD2')}}</li>
                                                        <li>{{__('messages.PHA4RD3')}}</li>
                                                        <li>{{__('messages.PHA4RD4')}}</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item form-details">
                                    <h2 class="accordion-header" id="flush-headingFive">
                                        <button class="accordion-button collapsed form-button" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#flush-collapseFive"
                                            aria-expanded="false" aria-controls="flush-collapseFive">
                                            {{-- International driving licence or permit --}}
                                            {{__('messages.PHA5')}}
                                        </button>
                                    </h2>
                                    <div id="flush-collapseFive" class="accordion-collapse collapse form-body-space"
                                        aria-labelledby="flush-headingFive" data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body form-body">
                                            <div class="form-body-details first-form-detail">
                                                <div class="licence-information">
                                                    <ul>
                                                        {{-- <li>To obtain international driving license, application in
                                                            Form 4 (A) should be made along with the Medical Certificate
                                                            in Form - 1 (A).</li>
                                                        <li>Copy of Existing driving license. Copy of passport, visa and
                                                            three passport size photographs should be attached with the
                                                            application.</li>
                                                        <li>A fee of Rs.500/- is required to be paid for this purpose.
                                                        </li>
                                                        <li>A permit is issued for a period of one year or till the
                                                            validity of existing driving license, whichever is earlier.
                                                        </li>
                                                        <li>Duplicate International Driving Permit is not issued or
                                                            renewed after expiry.</li>
                                                        <li>After expiry of International Driving Permit it is not
                                                            renewed.</li>
                                                        <li>It may be noted that, such license is issued only for Indian
                                                            citizen and they are required to be presented in R.T.O. in
                                                            person.</li> --}}

                                                        <li>{{__('messages.PHA5RD1')}}</li>
                                                        <li>{{__('messages.PHA5RD2')}}</li>
                                                        <li>{{__('messages.PHA5RD3')}}</li>
                                                        <li>{{__('messages.PHA5RD4')}}</li>
                                                        <li>{{__('messages.PHA5RD5')}}</li>
                                                        <li>{{__('messages.PHA5RD6')}}</li>
                                                        <li>{{__('messages.PHA5RD7')}}</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item form-details">
                                    <h2 class="accordion-header" id="flush-headingSix">
                                        <button class="accordion-button collapsed form-button" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#flush-collapseSix"
                                            aria-expanded="false" aria-controls="flush-collapseSix">
                                            {{-- Driving licence delivered --}}
                                            {{__('messages.PHA6')}}
                                        </button>
                                    </h2>
                                    <div id="flush-collapseSix" class="accordion-collapse collapse form-body-space"
                                        aria-labelledby="flush-headingSix" data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body form-body">
                                            <div class="form-body-details first-form-detail">
                                                {{-- <p><b>Learning license is delivered to the applicant in person on
                                                        the same day when he comes for knowledge test.</b></p> --}}
                                                <p><b>{{__('messages.PHA6H')}}</b></p>
                                                <div class="licence-information">
                                                    <ul>
                                                        {{-- <li>Driving license is sent by speed post at the address
                                                            mentioned by the applicant in his application.</li>
                                                        <li>International driving permit is delivered to the applicant
                                                            in person.</li> --}}

                                                        <li>{{__('messages.PHA6RD1')}}</li>
                                                        <li>{{__('messages.PHA6RD2')}}</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="v-pills-messages" role="tabpanel"
                            aria-labelledby="v-pills-messages-tab">
                            <div class="accordion accordion-flush setting-form" id="accordionFlushExample">
                                <div class="start-form">
                                    {{-- <h4>RTO Office</h4> --}}
                                    <h4>{{__('messages.RtoH')}}</h4>
                                </div>
                                @foreach ($rto as $office)
                                <div class="accordion-item form-details">
                                    <h2 class="accordion-header" id="flush-heading{{$office->id}}">
                                        <button class="accordion-button collapsed form-button" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#flush-collapse{{$office->id}}"
                                            aria-expanded="false" aria-controls="flush-collapse{{$office->id}}">
                                            {{$office->stateCode}} - {{$office->stateName}}
                                        </button>
                                    </h2>
                                    <div id="flush-collapse{{$office->id}}"
                                        class="accordion-collapse collapse form-body-space"
                                        aria-labelledby="flush-heading{{$office->id}}"
                                        data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body form-body">
                                            <div class="form-body-details first-form-detail">
                                                @if ($office->contact != null)
                                                <a href="javascript:void(0)" class="application-form"><i
                                                        class="fa-solid fa-location-dot"></i>{{$office->officeAddress}}</a>
                                            </div>
                                            <div class="form-body-details">
                                                <a href="javascript:void(0)" class="application-form"><i
                                                        class="fa-solid fa-phone"></i>{{$office->contact}}</a>
                                                @else
                                                <a href="javascript:void(0)" class="application-form"><i
                                                        class="fa-solid fa-location-dot"></i>{{$office->officeAddress}}</a>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>

                        <div class="tab-pane fade" id="v-pills-settings" role="tabpanel"
                            aria-labelledby="v-pills-settings-tab">
                            <div class="accordion accordion-flush setting-form" id="accordionFlushExample">
                                <div class="start-form">
                                    {{-- <h4>Contact Us</h4> --}}
                                    <h4>{{__('messages.ContactH')}}</h4>
                                </div>
                                <div class="accordion-item form-details">
                                    <form class="contact-form" name="contact-form" id="contact-form">
                                        @csrf
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-6">
                                                    <div class="address-info">
                                                        {{-- <div class="name">Name</div> --}}
                                                        <div class="name">{{__('messages.ContN')}}</div>
                                                        <input type="text" name="name" placeholder="Enter your name"
                                                            class="contact-input">
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="address-info">
                                                        {{-- <div class="name">Email</div> --}}
                                                        <div class="name">{{__('messages.ContE')}}</div>
                                                        <input type="text" name="email" placeholder="Enter your email"
                                                            class="contact-input">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-6">
                                                    <div class="contact-us">
                                                        <div class="address-info">
                                                            {{-- <div class="name">Mobile No. (Optional)</div> --}}
                                                            <div class="name">{{__('messages.ContM')}}</div>
                                                            <input type="text" name="mobile_no"
                                                                placeholder="Enter your mobile number"
                                                                class="contact-input">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="contact-us">
                                                        <div class="address-info">
                                                            {{-- <div class="name">City (Optional)</div> --}}
                                                            <div class="name">{{__('messages.ContC')}}</div>
                                                            <input type="text" name="city" placeholder="Enter your city"
                                                                class="contact-input">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="address-info">
                                                        {{-- <div class="name">Message</div> --}}
                                                        <div class="name">{{__('messages.ContMsg')}}</div>
                                                        <textarea name="message" cols="30" rows="5"
                                                            placeholder="Enter your massage"
                                                            class="contact-input"></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-12">
                                                    <form class="submit-button">
                                                        <input type="submit" action="submit" value="submit" placeholder="Submit"
                                                            class="submit">
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="v-pills-disclaimer" role="tabpanel"
                            aria-labelledby="v-pills-disclaimer-tab">
                            <div class="accordion accordion-flush setting-form" id="accordionFlushExample">
                                <div class="start-form">
                                    {{-- <h4>Declaimer</h4> --}}
                                    <h4>{{__('messages.FooterH')}}</h4>
                                </div>
                                <div class="accordion-item form-details last-form-detail">
                                    <div id="flush-collapseOne" class="accordion-collapse collapse form-body-space"
                                        aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                        {{-- This test is only for public awareness. Thought all efforts have been made
                                        to ensure the accuracy of the content, the same should not be construed as a
                                        statement of low or used for any legal purposes. This application accepts no
                                        responsibility in relation to the accuracy, completeness, usefulness or
                                        otherwise, of the contents. Users are advised to verify/check any information
                                        with the Transport Department. --}}
                                        {{__('messages.FooterD')}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- setting and help section end -->
@endsection

@section('js')
<script>
    $(document).ready(function(){
        $("#message-section").hide();
        $("#contact-form").validate({
            rules:{
                "name": {required:true},
                "email": {required:true},
                "message": {required:true},
            },
            messages:{
                "name":{required: "*Name is required."},
                "email":{required: "*Email is required."},
                "message":{required: "*Message is required."},
            },
            errorClass: "error",
            submitHandler:function(form,e){
                e.preventDefault();
                $.ajax({
                    url: "{{ route('store-contact') }}",
                    // url: "{{ route('store-data') }}",
                    method: "POST",
                    dataType: "json",
                    data: new FormData(form),
                    processData: false,
                    contentType: false,
                    cache: false,
                    // async: false,
                    beforeSend: function () {

                    },
                    success: function (result) {
                        console.log(result);
                        toastr.options = {
                            "positionClass": "toast-top-center", // Position the notification at the top center
                            //   "timeOut": "5000", // Display duration in milliseconds (5000ms = 5 seconds)
                            "closeButton": false // Show close button
                            };

                            // Display a success notification with customized options
                            // toastr.success("Your message has been sent. we'll get back to you shortly!");
                            toastr.success("{{__('messages.CMSG')}}");
                    },
                    complete: function (result) {
                        console.log(result);
                        // $("#contact-form").reset();
                        $("#contact-form").trigger('reset');
                    },
                    error: function (error) {
                        console.error("Error: ",error);
                    }
                });
            }
        });
        $("#footer-form").validate({
            rules:{
                "email": {required:true},
            },
            messages:{
                "email":{required: "*Email is required."},
            },
            errorElement:'div',
            errorLabelContainer:'.error',
            submitHandler:function(form,e){
                e.preventDefault();
                $.ajax({
                    url: "{{ route('store-newsletter') }}",
                    method: "POST",
                    dataType: "json",
                    data: new FormData(form),
                    processData: false,
                    contentType: false,
                    cache: false,
                    // async: false,
                    beforeSend: function () {

                    },
                    success: function (result) {
                        console.log(result);
                        toastr.options = {
                            "positionClass": "toast-top-center", // Position the notification at the top center
                            "timeOut": "2000", // Display duration in milliseconds (5000ms = 5 seconds)
                            "closeButton": false // Show close button
                            };
                            // toastr.success("Your Email Id has been sent. we'll get back to you shortly!");
                            toastr.success("{{__('messages.MSG')}}");
                    },
                    complete: function (result) {
                        // $("#footer-form").reset();
                        $("#footer-form").trigger('reset');
                    },
                    error: function (xhr) {
                        console.error("Error: ",xhr);
                    }
                });
            }
        });

    });
</script>
@endsection
