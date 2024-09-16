@extends('web.master')
@section('content')
    <!-- question answer section start -->
    <section class="sub-sections question-section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="exam-test-content">
                        {{-- <h1>RTO EXAM</h1> --}}
                        <h1>{{__('messages.QueBankH')}}</h1>
                        <img src="{{asset('assets/images/rto-banner-image.png')}}" class="img-fluid">
                        {{-- <img src="./assets/images/rto-banner-image.png" class="img-fluid"> --}}
                        {{-- <p>List of Questions & answer and meaning of road signs</p> --}}
                        <p>{{__('messages.Feature1D')}}</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="sub-section">
       <div class="container">
            <div class="row g-3">
                <div class="col-12">
                    <ul class="nav nav-pills nav-fill question-nav" id="pills-tab" role="tablist">
                        <li class="nav-item" role="presentation">
                          {{-- <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Questions</button> --}}
                          <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">{{__('messages.QueBankH2')}}</button>
                        </li>
                        <li class="nav-item nav-secont-item" role="presentation">
                            <button class="nav-link sign-link traffic-content-space" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="true">{{__('messages.QueBankH3')}}</button>
                        </li>
                    </ul>

                        <div class="tab-content question-tab-content" id="pills-tabContent">
                            <div class="tab-pane fade show active question-tab-info" id="home" role="tabpanel" aria-labelledby="home-tab">
                                <div class="row">
                                    @foreach ($question as $que => $value)
                                    <div class="col-12 col-md-6">
                                        <div class="card content-card">
                                            <div class="card-body">
                                                <div class="content-body d-flex align-items-center">
                                                    <span class="start-content start-number">{{$value -> id}}
                                                    </span>
                                                    <p>{{preg_replace('/^[0-9.]+/','',$value['question'])}}</p>
                                                </div>
                                                <div class="content-body second-content d-flex align-items-center">
                                                    <span class="start-content start-alpha">A</span>
                                                    <p>{{preg_replace('/^[A-Z]\.\s*/','',$value['answer'])}}</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    @endforeach

                                    {{-- <div class="col-12 col-md-6">
                                        <div class="card content-card">
                                            <div class="card-body">
                                                <div class="content-body d-flex align-items-center">
                                                    <span class="start-content start-number">1</span>
                                                    <p>Near a pedestrian crossing, when the pedestrians are waiting to cross the road, you should</p>
                                                </div>
                                                <div class="content-body second-content d-flex align-items-center">
                                                    <span class="start-content start-alpha">A</span>
                                                    <p>Near a pedestrian crossing, when the pedestrians are waiting to cross the road, you should</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <div class="card content-card">
                                            <div class="card-body">
                                                <div class="content-body d-flex align-items-center">
                                                    <span class="start-content start-number">1</span>
                                                    <p>Near a pedestrian crossing, when the pedestrians are waiting to cross the road, you should</p>
                                                </div>
                                                <div class="content-body second-content d-flex align-items-center">
                                                    <span class="start-content start-alpha">A</span>
                                                    <p>Near a pedestrian crossing, when the pedestrians are waiting to cross the road, you should</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <div class="card content-card">
                                            <div class="card-body">
                                                <div class="content-body d-flex align-items-center">
                                                    <span class="start-content start-number">1</span>
                                                    <p>Near a pedestrian crossing, when the pedestrians are waiting to cross the road, you should</p>
                                                </div>
                                                <div class="content-body second-content d-flex align-items-center">
                                                    <span class="start-content start-alpha">A</span>
                                                    <p>Near a pedestrian crossing, when the pedestrians are waiting to cross the road, you should</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <div class="card content-card">
                                            <div class="card-body">
                                                <div class="content-body d-flex align-items-center">
                                                    <span class="start-content start-number">1</span>
                                                    <p>Near a pedestrian crossing, when the pedestrians are waiting to cross the road, you should</p>
                                                </div>
                                                <div class="content-body second-content d-flex align-items-center">
                                                    <span class="start-content start-alpha">A</span>
                                                    <p>Near a pedestrian crossing, when the pedestrians are waiting to cross the road, you should</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <div class="card content-card">
                                            <div class="card-body">
                                                <div class="content-body d-flex align-items-center">
                                                    <span class="start-content start-number">1</span>
                                                    <p>Near a pedestrian crossing, when the pedestrians are waiting to cross the road, you should</p>
                                                </div>
                                                <div class="content-body second-content d-flex align-items-center">
                                                    <span class="start-content start-alpha">A</span>
                                                    <p>Near a pedestrian crossing, when the pedestrians are waiting to cross the road, you should</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <div class="card content-card">
                                            <div class="card-body">
                                                <div class="content-body d-flex align-items-center">
                                                    <span class="start-content start-number">1</span>
                                                    <p>Near a pedestrian crossing, when the pedestrians are waiting to cross the road, you should</p>
                                                </div>
                                                <div class="content-body second-content d-flex align-items-center">
                                                    <span class="start-content start-alpha">A</span>
                                                    <p>Near a pedestrian crossing, when the pedestrians are waiting to cross the road, you should</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <div class="card content-card">
                                            <div class="card-body">
                                                <div class="content-body d-flex align-items-center">
                                                    <span class="start-content start-number">1</span>
                                                    <p>Near a pedestrian crossing, when the pedestrians are waiting to cross the road, you should</p>
                                                </div>
                                                <div class="content-body second-content d-flex align-items-center">
                                                    <span class="start-content start-alpha">A</span>
                                                    <p>Near a pedestrian crossing, when the pedestrians are waiting to cross the road, you should</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <div class="card content-card">
                                            <div class="card-body">
                                                <div class="content-body d-flex align-items-center">
                                                    <span class="start-content start-number">1</span>
                                                    <p>Near a pedestrian crossing, when the pedestrians are waiting to cross the road, you should</p>
                                                </div>
                                                <div class="content-body second-content d-flex align-items-center">
                                                    <span class="start-content start-alpha">A</span>
                                                    <p>Near a pedestrian crossing, when the pedestrians are waiting to cross the road, you should</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <div class="card content-card">
                                            <div class="card-body">
                                                <div class="content-body d-flex align-items-center">
                                                    <span class="start-content start-number">1</span>
                                                    <p>Near a pedestrian crossing, when the pedestrians are waiting to cross the road, you should</p>
                                                </div>
                                                <div class="content-body second-content d-flex align-items-center">
                                                    <span class="start-content start-alpha">A</span>
                                                    <p>Near a pedestrian crossing, when the pedestrians are waiting to cross the road, you should</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <div class="card content-card">
                                            <div class="card-body">
                                                <div class="content-body d-flex align-items-center">
                                                    <span class="start-content start-number">1</span>
                                                    <p>Near a pedestrian crossing, when the pedestrians are waiting to cross the road, you should</p>
                                                </div>
                                                <div class="content-body second-content d-flex align-items-center">
                                                    <span class="start-content start-alpha">A</span>
                                                    <p>Near a pedestrian crossing, when the pedestrians are waiting to cross the road, you should</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <div class="card content-card">
                                            <div class="card-body">
                                                <div class="content-body d-flex align-items-center">
                                                    <span class="start-content start-number">1</span>
                                                    <p>Near a pedestrian crossing, when the pedestrians are waiting to cross the road, you should</p>
                                                </div>
                                                <div class="content-body second-content d-flex align-items-center">
                                                    <span class="start-content start-alpha">A</span>
                                                    <p>Near a pedestrian crossing, when the pedestrians are waiting to cross the road, you should</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div> --}}
                                </div>
                            </div>

                            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                <div class="row g-4">
                                    @foreach ($sign as $sign => $value)
                                    <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                                        <div class="card content-card traffic-sign-card">
                                            <div class="card-body">
                                                <div class="content-body card-border-none">
                                                    <span class="start-content start-number">{{$value -> id}}</span>
                                                    <div class="traffic-sign-image">
                                                        <img src="{{$value -> image}}" class="img-fluid mx-auto d-block ">
                                                      {{-- <img src="{{asset('assets/images/traffic-sign-image.png')}}" class="img-fluid mx-auto d-block "> --}}
                                                    </div>
                                                    <p class="traffic-signs-info">{{$value -> title}}</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                    {{-- <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                                        <div class="card content-card traffic-sign-card">
                                            <div class="card-body">

                                                <div class="content-body card-border-none">
                                                    <span class="start-content start-number">2</span>
                                                    <div class="traffic-sign-image">
                                                        <img src="./assets/images/keep-left-img.png" class="img-fluid mx-auto d-block ">
                                                    </div>
                                                    <p class="traffic-signs-info">Keep Left</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                                        <div class="card content-card traffic-sign-card">
                                            <div class="card-body">
                                                <div class="content-body card-border-none">
                                                    <span class="start-content start-number">3</span>
                                                    <div class="traffic-sign-image">
                                                        <img src="./assets/images/way-img.png" class="img-fluid mx-auto d-block">
                                                    </div>
                                                    <p class="traffic-signs-info">Give Way</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                                        <div class="card content-card traffic-sign-card">
                                            <div class="card-body">
                                                <div class="content-body card-border-none">
                                                    <span class="start-content start-number">4</span>
                                                </div>
                                                <div class="traffic-sign-image empty-image">
                                                    <img src="./assets/images/traffic-sign-image.png" class="img-fluid">
                                                </div>
                                                <p class="traffic-signs-info mt-auto d-block">No entry</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                                        <div class="card content-card traffic-sign-card" data-bs-toggle="modal" href="#exampleModalToggle">
                                            <div class="card-body">
                                                <div class="content-body card-border-none">
                                                    <span class="start-content start-number">5</span>
                                                    <div class="traffic-sign-image">
                                                        <img src="./assets/images/traffic-sign-image.png" class="img-fluid mx-auto d-block">
                                                    </div>
                                                    <p class="traffic-signs-info">Shape curve to the right</p>
                                                </div>
                                            </div>
                                        </div>
                                    <div class="modal fade exam-modal" id="exampleModalToggle" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
                                        <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content modal-card">
                                            <div class="modal-header">
                                            <h6 class="modal-title" id="exampleModalToggleLabel">Instructions</h6>
                                            <!-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> -->
                                            </div>
                                            <div class="modal-body">
                                                <div class="exam-details d-flex align-items-center">
                                                    <div class="modal-circle"></div>
                                                    <div class="exam-option">Subject like Rules and Regulations of traffic, and traffic signage’s are included in the test.</div>
                                                </div>
                                                <div class="exam-details exam-datail-space d-flex align-items-center">
                                                    <div class="modal-circle"></div>
                                                    <div class="exam-option">15 questions are asked in the test at random, out of which 11 questions are required to be answered  correctly to pass the test.</div>
                                                </div>
                                                <div class="exam-details d-flex align-items-center">
                                                    <div class="modal-circle"></div>
                                                    <div class="exam-option">48 seconds are allowed to answer each question.</div>
                                                </div>
                                                <div class="modal-footer start-exam">
                                                    <a href="javascript:void(0)" class="btn" data-bs-target="#exampleModalToggle2" data-bs-toggle="modal" data-bs-dismiss="modal">START EXAM</a>
                                                </div>
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                    </div>
                                    <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                                        <div class="card content-card traffic-sign-card">
                                            <div class="card-body">
                                                <div class="content-body card-border-none">
                                                    <span class="start-content start-number">6</span>
                                                    <div class="traffic-sign-image">
                                                        <img src="./assets/images/traffic-sign-image.png" class="img-fluid mx-auto d-block">
                                                    </div>
                                                    <p class="traffic-signs-info">Pedestrian crossing</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                                        <div class="card content-card traffic-sign-card">
                                            <div class="card-body">
                                                <div class="content-body card-border-none">
                                                    <span class="start-content start-number">7</span>
                                                    <div class="traffic-sign-image">
                                                        <img src="./assets/images/traffic-sign-image.png" class="img-fluid mx-auto d-block ">
                                                    </div>
                                                    <p class="traffic-signs-info">Parking on the right allowed</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                                        <div class="card content-card traffic-sign-card">
                                            <div class="card-body">
                                                <div class="content-body card-border-none">
                                                    <span class="start-content start-number">8</span>
                                                    <div class="traffic-sign-image">
                                                        <img src="./assets/images/traffic-sign-image.png" class="img-fluid mx-auto d-block ">
                                                    </div>
                                                    <p class="traffic-signs-info">U-turn prohibited</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                                        <div class="card content-card traffic-sign-card">
                                            <div class="card-body">
                                                <div class="content-body card-border-none">
                                                    <span class="start-content start-number">9</span>
                                                    <div class="traffic-sign-image">
                                                        <img src="./assets/images/traffic-sign-image.png" class="img-fluid mx-auto d-block ">
                                                    </div>
                                                    <p class="traffic-signs-info">Stop</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                                        <div class="card content-card traffic-sign-card">
                                            <div class="card-body">
                                                <div class="content-body card-border-none">
                                                    <span class="start-content start-number">10</span>
                                                    <div class="traffic-sign-image">
                                                        <img src="./assets/images/traffic-sign-image.png" class="img-fluid mx-auto d-block ">
                                                    </div>
                                                    <p class="traffic-signs-info">Stop</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                                        <div class="card content-card traffic-sign-card">
                                            <div class="card-body">
                                                <div class="content-body card-border-none">
                                                    <span class="start-content start-number">11</span>
                                                    <div class="traffic-sign-image">
                                                        <img src="./assets/images/traffic-sign-image.png" class="img-fluid mx-auto d-block ">
                                                    </div>
                                                    <p class="traffic-signs-info">Stop</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                                        <div class="card content-card traffic-sign-card">
                                            <div class="card-body">
                                                <div class="content-body card-border-none">
                                                    <span class="start-content start-number">12</span>
                                                    <div class="traffic-sign-image">
                                                        <img src="./assets/images/traffic-sign-image.png" class="img-fluid mx-auto d-block ">
                                                    </div>
                                                    <p class="traffic-signs-info">Stop</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                                        <div class="card content-card traffic-sign-card">
                                            <div class="card-body">
                                                <div class="content-body card-border-none">
                                                    <span class="start-content start-number">13</span>
                                                    <div class="traffic-sign-image">
                                                        <img src="./assets/images/traffic-sign-image.png" class="img-fluid mx-auto d-block ">
                                                    </div>
                                                    <p class="traffic-signs-info">Stop</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                                        <div class="card content-card traffic-sign-card">
                                            <div class="card-body">
                                                <div class="content-body card-border-none">
                                                    <span class="start-content start-number">14</span>
                                                    <div class="traffic-sign-image">
                                                        <img src="./assets/images/traffic-sign-image.png" class="img-fluid mx-auto d-block ">
                                                    </div>
                                                    <p class="traffic-signs-info">Stop</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                                        <div class="card content-card traffic-sign-card">
                                            <div class="card-body">
                                                <div class="content-body card-border-none">
                                                    <span class="start-content start-number">15</span>
                                                    <div class="traffic-sign-image">
                                                        <img src="./assets/images/traffic-sign-image.png" class="img-fluid mx-auto d-block ">
                                                    </div>
                                                    <p class="traffic-signs-info">Stop</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                                        <div class="card content-card traffic-sign-card">
                                            <div class="card-body">
                                                <div class="content-body card-border-none">
                                                    <span class="start-content start-number">16</span>
                                                    <div class="traffic-sign-image">
                                                        <img src="./assets/images/traffic-sign-image.png" class="img-fluid mx-auto d-block ">
                                                    </div>
                                                    <p class="traffic-signs-info">Stop</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
       </div>
    </section>
    <!-- question answer section end -->

@endsection
