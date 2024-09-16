@extends('web.master')
@section('content')
<!-- online exam section start -->
<section class="sub-sections question-section">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="exam-test-content exam-change-position">
                    {{-- <h1>Online Driving Licence Computer Test Exam - RTO Exam</h1> --}}
                    <h1>{{__('messages.ExamH')}}</h1>
                    <img src="{{asset('assets/images/rto-banner-image.png')}}" class="img-fluid">
                    {{-- <p>Time and question bound test exactly same as actual RTO test</p> --}}
                    <p>{{__('messages.Feature2D')}}</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- online exam section end -->

<!-- quiz section start -->
<section class="quiz-section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-5">
                <div class="quiz-content-info">
                    <div class="card quiz-card">
                        <div class="card-body quiz-card-body">
                            <form class="question-answer" id="question-answer">
                                @csrf
                                <div class="easy-to-use d-flex align-items-center">
                                    {{-- Timer --}}
                                    {{-- <div class="timer-main-container center">
                                            <div class="semicircle "></div>
                                            <div class="semicircle "></div>
                                            <div class="semicircle "></div>
                                            <div class="outmost-circle "></div>
                                    </div> --}}
                                    {{-- timer --}}
                                    <span class="quiz-time" id="quiz-time">
                                        {{-- 46s --}}
                                    </span>
                                    <p class="card-text" id="card-text"> </p><br>
                                </div>
                                <div class="image-text" id="image-text"> </div>
                                <label for="check1" class="click-answer first-click">
                                    <div class="select-answer d-flex align-items-center">
                                        <input type="radio" name="Questioncheckbox[]" id="check1">
                                        <div class="click-with">A</div>
                                        <div class="option-texta"> </div>
                                    </div>
                                </label>
                                <label for="check2" class="click-answer first-click">
                                    <div class="select-answer d-flex align-items-center">
                                        <input type="radio" name="Questioncheckbox[]" id="check2">
                                        <div class="click-with">B</div>
                                        <div class="option-textb"> </div>
                                    </div>
                                </label>

                                <label for="check3" class="click-answer first-click">
                                    <div class="select-answer d-flex align-items-center">
                                        <input type="radio" name="Questioncheckbox[]" id="check3">
                                        <div class="click-with">C</div>
                                        <div class="option-textc"> </div>
                                    </div>
                                </label>
                                <div class="errorExam">
                                </div>
                                <br>
                                <div class="question-number d-flex align-items-center justify-content-between">
                                    <p class="display-number"> </p>
                                    <div class="true-false-btn d-flex">
                                        <a class="true-btn d-flex justify-content-between" data-bs-toggle="modal"
                                            href="#examFailed">
                                            <span class="true-answer"><i class="fa-solid fa-check"></i></span>
                                            <span class="true-answer-counter" id="correct_answer_count"> </span>
                                        </a>
                                        <a class="false-btn d-flex justify-content-between" data-bs-toggle="modal"
                                            href="#examPass">
                                            <span class="true-answer"><i class="fa-solid fa-xmark"></i></span>
                                            <span class="true-answer-counter" id="wrong_answer_count"> </span>
                                        </a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="card quiz-card card-position"></div>
                </div>
            </div>
        </div>
        <div class="next-question-btn">
            <div class="row">
                <div class="col-12">
                    <div class="next-button text-center">
                        {{-- <button type="submit" form='question-answer' class="next" id="next">Next
                            <i class="fa-solid fa-chevron-right"></i></button> --}}
                        <button type="submit" form='question-answer' class="next" id="next">{{__('messages.NextBtn')}}
                            <i class="fa-solid fa-chevron-right"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- quiz section end -->

<!--ScoreBoard Section start -->
<!-- ScoreBoard Heading section start -->
<section class="sub-sections ScoreBoard-section" id="ScoreBoard-section">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="exam-test-content exam-change-position">
                    <h1>ScoreBoard</h1>
                    <img src="{{asset('assets/images/rto-banner-image.png')}}" class="img-fluid-scoreboard">
                    {{-- <p>Time and question bound test exactly same as actual RTO test</p> --}}
                    <p>{{__('messages.Feature2D')}}</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ScoreBoard Heading section end -->
<br>
<!-- ScoreBoard Question&Answer section start -->
<section class="ScoreBoard-section">
    <div class="container" style="margin-bottom:10px;">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-5">
                <div class="quiz-content-info">
                    <div class="card quiz-card">
                        <div class="card-body quiz-card-body">
                            {{-- <div class="easy-to-use d-flex align-items-center"> --}}
                                <div class="scoreboard-text" id="scoreboard-text">
                                    <p class="card-text" id="que-text"> </p>
                                    <p class="img-text" id="img-text"></p>
                                    <p class="card-text" id="CAns-text"> </p>
                                    <p class="card-text" id="UAns-text"> </p>
                                </div>
                            {{-- </div> --}}
                        </div>
                    </div>
                    <div class="card quiz-card card-position"></div>
                </div>
            </div>
        </div>
        <div class="next-question-btn">
            <div class="row">
                <div class="col-12">
                    <div class="next-button text-center">
                        <a class="r-submit" href="{{route('home')}}">Home</a>
                        <a class="r-submit" href="{{route('exam')}}">Try Again</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ScoreBoard Question&Anser section end -->
<!--ScoreBoard Section end -->

<!-- result section start -->
<section class="result-section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-5">
                <div class="quiz-content-info">
                    <div class="card quiz-card">
                        <div class="card-body quiz-card-body">
                            <div class="easy-to-use d-flex align-items-center center">
                                <div>
                                    <h1 class="card-text" id="result-text"> Exam is Successfully Completed. </h1>
                                    <h2 class="card-text" id="passed-text"> </h2>
                                    <h2 class="card-text" id="failed-text"> </h2>
                                    <p class="card-text" id="correct_answer">Correct Answers: </p>
                                    <p class="card-text" id="wrong_answer">Wrong Answers: </p>
                                    <a class="r-submit" href="{{route('home')}}">Home</a>
                                    <a class="r-submit" href="#ScoreBoard-section" id="ScoreBoard-link">ScoreBoard</a>
                                    {{-- <a class="r-submit" href="#" id="ScoreBoard-link">ScoreBoard</a> --}}
                                    {{-- <button class="r-submit" onclick="{{route('home')}}">Home</button>
                                    <button class="r-submit" id="ScoreBoard">ScoreBoard</button> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card quiz-card card-position"></div>
                </div>
            </div>
        </div>
        {{-- <div class="next-question-btn">
            <div class="row">
                <div class="col-12">
                    <div class="next-button text-center">
                        <button type="submit" form='question-answer' class="next" id="next">Next
                        <button type="submit" for='quiz-section' class="next" id="re-exam">Retake Exam
                            <i class="fa-solid fa-chevron-right"></i></button>
                    </div>
                </div>
            </div>
        </div> --}}
    </div>
</section>
<!-- result section end -->

@endsection
@section('js')
<script>
    $(document).ready(function(){
        // $(".result-section").show();
        $("#ScoreBoard-section").hide();
        $(".ScoreBoard-section").hide();
        $(".result-section").hide();
        let currentQuestion =0;
        const totalQuestions=20;
        // var currenttimer;
        var currentTimer;
        var formSubmitted;
        getQuestion();

        var formSubmitted=false;
        var timerExpired= false; //flag to track if timer expired
        //function to handle timeout
        function timeout(duration){
            var time=duration;
            var seconds=time%60
            $("#quiz-time").html(time+'s');

            var interval = setInterval(() => {
            if(seconds <= 0)
            {
                clearInterval(interval);
                timerExpired=true; //set timer flag to true//timer is expired
                // submitQuestion();
                if(!formSubmitted)//if form is not submiited then
                {
                    submitQuestion();
                }
            }
            else{
                let temptime=seconds.toString().length > 1? seconds:'0'+seconds;
                $("#quiz-time").html(temptime +'s');
                // document.getElementById("quiz-time").innerHTML=seconds+'s';
            }
            seconds--;
            }, 1000);
            return interval;
        }
        //function to start timer
        function startTimer(duration){
            clearInterval(currentTimer);
            currentTimer = timeout(duration);
        }

        $("#ScoreBoard-link").click(function(event)
        {
            event.preventDefault();
            $(".question-section").hide();
            $(".quiz-section").hide();
            $(".result-section").hide();

            $("#ScoreBoard-section").show();
            $(".ScoreBoard-section").show();
        });

        // $("#next").prop('disabled',true);
        $("#question-answer").validate({
            rules:{
                "Questioncheckbox[]": {required:true},
            },
            messages:{
                "Questioncheckbox[]":{required: "*Please Select an Option"},
            },
            errorElement:'div',
            errorLabelContainer:'.errorExam',
            // errorClass:"error",
            beforeSend: function(){
                // $("#next").prop('disabled',true);
            },
            submitHandler:function(form,e){
                e.preventDefault();
                formSubmitted=true;//if form is submitted
                if(!timerExpired){
                submitQuestion();//submit
                }
                // submitQuestion();//submit
            },
            complete: function(){
                if(timerExpired)//if timer is expired
                {
                    $("#next").prop('disabled',false);//make it enable
                }
            }
        });

        function submitQuestion(){
                if(timerExpired || $("#question-answer").valid())
                {
                    // $("#next").prop('disabled',true);
                    $.ajax({
                            url: "{{ route('exam.submit-answer') }}",
                            method: "POST",
                            dataType: "json",
                            data: new FormData($("#question-answer")[0]),
                            processData: false,
                            contentType: false,
                            cache: false,
                            // async: false,
                            beforeSend: function () {
                                // $("#next").prop("disabled",true);
                            },
                            success: function (result) {
                                console.log(result);
                                $.each(result, function(index, value){
                                    console.log(value);
                                    // $('#que-text').append('<b>Q. </b>'+value.question_txt+'<br>');
                                    var questionHtml='<div class="scoreboard-text" id="scoreboard-text">';

                                    // questionHtml += '<b>' '</b><br>';
                                    questionHtml += '<b>'+currentQuestion+'. </b>'+value.question_txt+'<br>';
                                    if(value.image != null){
                                        questionHtml += '<b> Image : </b>'+'<img src="'+value.image+'" height="60">'+'<br>';
                                    }
                                    else{
                                        $('#img-text').append('');
                                    }
                                    if(value.Uanswer==null){
                                        questionHtml += '<b><font color="green">Correct Answer : </b>'+value.answer+'<br>';
                                        questionHtml += '<b><font color="red">Your Answer : </b>Not Answered.</font><br>';
                                        questionHtml += '<hr>';
                                    }
                                    else{
                                        if(value.answer==value.Uanswer){
                                        questionHtml += '<b><font color="green">Correct Answer : </b>'+value.answer+'<br>';
                                        questionHtml += '<b><font color="green">Your Answer is right : </b>'+value.Uanswer+'</font><br>';
                                        questionHtml += '<hr>';
                                        }
                                        else{
                                        questionHtml += '<b><font color="green">Correct Answer : </b>'+value.answer+'<br>';
                                        questionHtml += '<b><font color="red">Your Answer is wrong : </b>'+value.Uanswer+'</font><br>';
                                        questionHtml += '<hr>';
                                        }
                                    }
                                    $('#scoreboard-text').append(questionHtml);

                                if(currentQuestion < totalQuestions){
                                    getQuestion();
                                    $('#correct_answer_count').html(value.correctAnswersCount);
                                    $('#wrong_answer_count').html(value.wrongAnswersCount);
                                }
                                else{
                                    clearInterval(currentTimer);
                                    $(".quiz-section").hide();
                                    $(".result-section").show();
                                    // $("#ScoreBoard-section").show();
                                    if(value.correctAnswersCount >=10)
                                    {
                                        $('#passed-text').html('Passed');
                                    }
                                    else{
                                        $('#failed-text').html('Failed');
                                    }
                                    $('#correct_answer').html('Correct Answer : '+value.correctAnswersCount);
                                    $('#wrong_answer').html('Wrong Answer : '+value.wrongAnswersCount);
                                }

                            });
                        },
                        complete: function (result) {
                            $("#question-answer")[0].reset();
                            // $("#next").prop('disabled',false);
                        },
                        error: function (xhr) {
                            console.error("Error: ",error);
                        }
                    });
                }
                else{
                    console.log("Form is not valid.");
                }
            }

        //function to retrieve  questions via ajax
        function getQuestion(){
            startTimer(30)
            $('#correct_answer_count').html(0);
            $('#wrong_answer_count').html(0);
            $.ajax({
                type:'get',
                url:'{{route("exam.getQuestion")}}',
                beforeSend: function () {
                    // $("#next").prop('disabled',true);
                },
                success:function(response){
                    const questions = response.questions;
                    console.log(response);
                    console.log(questions);
                    // if(questions.length >0){
                    if(currentQuestion<totalQuestions){
                    // startTimer(6)
                        // alert();
                        $('#card-text').html(questions[0].question);

                        if(questions[0].image != null){
                            $('#image-text').html('<img src="'+questions[0].image+'"alt="Question Image">');
                        }
                        else{
                            $('#image-text').html('');
                        }
                        $('.option-texta').html(questions[0].option_a)
                        $('#check1').val(questions[0].option_a);
                        $('.option-textb').html(questions[0].option_b);
                        $('#check2').val(questions[0].option_b);
                        $('.option-textc').html(questions[0].option_c);
                        $('#check3').val(questions[0].option_c);
                        $('.display-number').html( 'Question '+(currentQuestion + 1)+ '/20');
                        currentQuestion++;

                        timerExpired=false;
                        formSubmitted=false;
                        // startTimer(30)
                    }
                // }
                },
                complete: function (result) {
                    $("#question-answer")[0].reset();
                    // $("#next").prop('disabled',false);
                },
                error:function(xhr,status,error){
                    console.error("error",error);
                }
            });
        }

        $("#re-exam").click(function(){
            window.location.href="{{route('exam')}}";
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
