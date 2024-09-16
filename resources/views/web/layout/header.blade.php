 <!-- header start -->
 <header class="web-background">
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light">
            <a class="navbar-brand" href="javascript:void(0)">
                <div class="nav-logo d-flex align-items-center">
                    <img src="{{asset('assets/images/nav-image.png')}}"  alt="nav logo" class="img-fluid logo-image">
                    {{-- RTO EXAM --}}
                    {{__('messages.Title')}}
                </div>
            </a>
            <button class="navbar-toggler nav-show" type="button" data-bs-toggle="collapse" >
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <i class="fa-solid fa-xmark nav-close nav-show"></i>
                <ul class="navbar-nav nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        {{-- <a class="nav-link {{ request()->is('/') ? 'active': '' }}" aria-current="page" href="/">Home</a> --}}
                        <a class="nav-link {{ request()->is('/') ? 'active': '' }}" href="{{route('home') }}">{{__('messages.Home')}}</a>
                        {{-- <a class="nav-link {{ request()->is('/') ? 'active': '' }}" href="{{route('home') }}">Home</a> --}}

                    </li>
                    <li class="nav-item">
                        {{-- <a class="nav-link {{ request()->is('questionbank') ? 'active': '' }}" href="{{route('questionbank')}}">Question Bank</a> --}}
                        <a class="nav-link {{ request()->is('questionbank') ? 'active': '' }}" href="{{route('questionbank')}}">{{__('messages.QueBank')}}</a>
                    </li>
                    <li class="nav-item">
                        {{-- <a class="nav-link {{ request()->is('exam') ? 'active': '' }}" href="{{route('exam')}}">Exam</a> --}}
                        <a class="nav-link {{ request()->is('exam') ? 'active': '' }}" href="{{route('exam')}}">{{__('messages.Exam')}}</a>
                    </li>
                    <li class="nav-item">
                        {{-- <a class="nav-link {{ request()->is('setting') ? 'active': '' }}" href="{{route('setting')}}">Setting & Help</a> --}}
                        <a class="nav-link {{ request()->is('setting') ? 'active': '' }}" href="{{route('setting')}}">{{__('messages.Setting')}}</a>
                    </li>

                    <div class="language">
                    <form id="languageForm" action="{{route('lang')}}" method="post">
                            @csrf
                            <select class="js-example-disabled-results p-2" id="LanguageSelect" name="language" onchange="this.form.submit()">
                                {{-- <option value="two" disabled="disabled">Second (disabled)</option>
                                @foreach (config('app.locales') as $locale=>$language)
                                    <option value="{{$locale}}" {{ app()->getLocale() === $locale ? 'selected' : '' }}>{{$language}}</option>
                                @endforeach --}}

                                {{-- <option value="two" disabled="disabled">Second (disabled)</option> --}}
                                {{-- <option value="one">Language</option> --}}
                                {{-- <option value="eng" {{ app()->getLocale() === 'eng' ? 'selected' : 'eng' }}>LAng</option> --}}
                                {{-- {{ session()->forget('selectedLang');}} --}}

                                <option value="two" disabled="disabled">Second (disabled)</option>
                                <option value="eng" {{app()->getLocale() === 'eng' ? 'selected' : '' }}>English</option>
                                {{-- <option value="eng" {{app()->getLocale() === 'eng' ? 'selected' : '' }}>English</option> --}}
                                <option value="guj" {{ app()->getLocale() === 'guj' ? 'selected' : '' }}>Gujrati</option>
                            </select>
                    </form>
                    </div>
                        {{-- <div>
                            {{__('messages.welcome')}}
                        </div> --}}
            </div>
        </nav>
    </div>
</header>
<!-- header end -->
