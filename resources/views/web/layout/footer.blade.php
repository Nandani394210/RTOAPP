 <!-- footer section start -->
 <footer>
    <div class="footer-section">
        <div class="container">
            <div class="footer-info">
                <div class="row justify-content-center justify-content-xl-start">
                    <div class="col-12 col-xl-4">
                        <div class="footer-content text-center text-xl-start">
                            <div class="footer-logo">
                                <img src="{{asset('assets/images/footer-logo.png')}}" class="img-fluid">
                            </div>
                            {{-- <p class="mb-3 mb-lg-4"><b>Disclaimer: </b> This test is only for public awareness. Thought all efforts have been made to ensure the accuracy of the content, the same should not be construed as a statement of low or used for any legal purposes. This application accepts no responsibility in relation to the accuracy, completeness, usefulness or otherwise, of the contents. Users are advised to verify/check any information  with the Transport Department.
                            </p> --}}
                            <p class="mb-3 mb-lg-4"><b><font color='#FEDF53'> {{__('messages.FooterH')}}</font></b> {{__('messages.FooterD')}}</p>
                            {{-- <div class="footer-social-media">
                                <a href="javascript:void(0)"><i class="fa-brands fa-square-facebook"></i></a>
                                <a href="javascript:void(0)"><i class="fa-brands fa-youtube"></i></a>
                                <a href="javascript:void(0)"><i class="fa-brands fa-whatsapp"></i></a>
                                <a href="javascript:void(0)"><i class="fa-brands fa-instagram"></i></a>
                                <a href="javascript:void(0)"><i class="fa-brands fa-twitter"></i></a>
                            </div> --}}
                        </div>
                    </div>
                    <div class="col-12 col-lg-2">
                        <div class="footer-nav">
                            {{-- <h4 class="mb-2 mb-lg-3">Navigation</h4> --}}
                            <h4 class="mb-2 mb-lg-3">{{__('messages.NavH')}}</h4>
                            <ul class="footer-navigation">
                                {{-- <a class="nav-link {{ request()->is('/') ? 'active': '' }}" href="{{route('home')}}">Home</a> --}}
                                {{-- <li><a href="{{route('questionbank')}}">Question Bank</a></li>
                                <li><a href="{{route('exam')}}">Exam</a></li>
                                <li><a href="{{route('setting')}}">Settings & Help</a></li> --}}
                                {{-- <li><a href="{{route('setting')}}#v-pills-settings-tab">Contact Us</a></li> --}}

                                <li><a href="{{route('questionbank')}}">{{__('messages.QueBank')}}</a></li>
                                <li><a href="{{route('exam')}}">{{__('messages.Exam')}}</a></li>
                                <li><a href="{{route('setting')}}">{{__('messages.Setting')}}</a></li>

                            </ul>
                        </div>
                    </div>
                    <div class="col-12 col-lg-2">
                        <div class="contact-info">
                            {{-- <h4 class="mb-2 mb-lg-3">Contact</h4> --}}
                            <h4 class="mb-2 mb-lg-3">{{__('messages.ContactH')}}</h4>
                            <ul class="contact-us">
                                <li><a href="javascript:void(0)">+91 6356585034</a></li>
                                <li><a href="javascript:void(0)">nandaniingale07@gmail.com</a></li>
                                <li><a href="javascript:void(0)">Portfolio-nandani.com</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-12 col-ld-6 col-xl-4">
                        <div class="information-info">
                            {{-- <h4 class="mb-3 mb-lg-4">Get the latest information</h4> --}}
                            <h4 class="mb-3 mb-lg-4">{{__('messages.Info')}}</h4>
                            <form class="footer-form" name="footer-form" id="footer-form">
                                @csrf
                                <input type="email" name="email" placeholder="Email Address">
                                <input type="submit" action="send" value="send" style="background-color: #fedf53; width:30px; margin-top:0px; text-align:left;">
                                    {{-- <img src="{{asset('assets/images/send-image.svg')}}" class="img-fluid"> --}}
                                {{-- <input type="image" src="{{asset('assets/images/send-image.svg')}}" class="img-fluid"> --}}
                            </form>
                            <div class="error">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="sub-footer">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-6">
                    <div class="copyright d-flex justify-content-lg-start justify-content-center">
                        <p>Copyright© 2023 RTO Exam. All Rights Reserved.</p>
                    </div>
                </div>
                <div class="col-12 col-lg-6">
                    <div class="privacy d-flex justify-content-lg-end justify-content-center">
                        {{-- <a href="javascript:void(0)">User Terms & Conditions | Privacy Policy</a> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- footer section end -->
@section('js')
<script>
    $(document).ready(function(){
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
