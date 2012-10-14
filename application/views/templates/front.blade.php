<!DOCTYPE HTML>
<html>

<head>
    <title>@yield('title') | Opportunity Cell</title>
    @section('description')
    <meta name="description" content="This is the opportunity cell of IISER Mohali" />
    <meta name="keywords" content="opportunities, MS students, PhD, jobs, placement, IISER Mohali" />
    @yield_section
    <!-- <meta http-equiv="content-type" content="text/html; charset=utf-8" /> -->
    <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Tangerine&amp;v1" />
    <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Yanone+Kaffeesatz" />
    <link rel="stylesheet" type="text/css" href="{{URL::base().'/css/front.css'}}" />
</head>

<body>
    <div id="main">
        <div id="header">
            <div id="logo">
                <h1><a href="./">Opportunity Cell</a></h1>
                <div class="slogan">So what are you doing after Graduation?</div>
            </div>
            <br/>
            <div id="menubar">
                <ul id="menu">
                    <!-- put class="current" in the li tag for the selected page - to highlight which page you're on -->
                    @section('menu')
                    <li @if (URI::segment(1) == 'home')
                        {{"class='current'"}}
                    @endif><a href="{{URL::to('home')}}">Home</a></li>
                    <li @if (URI::segment(1) == 'about')
                        {{"class='current'"}}
                    @endif><a href="{{URL::to('about')}}">About</a></li>
                    <li @if (URI::segment(1) == 'databases')
                        {{"class='current'"}}
                    @endif><a href="{{URL::to('database')}}">Summers</a></li>
                    <li @if (URI::segment(1) == 'contact')
                        {{"class='current'"}}
                    @endif><a href="{{URL::to('contact')}}">Contact Us</a></li>
                    @yield_section
                </ul>
            </div>
        </div>
        <div id="site_content">
            <div id="sidebar_container">
                <img class="paperclip" src="{{URL::base().'/img/front'}}/paperclip.png" alt="paperclip" />
                <div class="sidebar">
                <!-- insert your sidebar items here -->
                <h3>Latest News</h3>
                <h4>Title</h4>
                <h5>Date</h5>
                <p>Content<br /><a href="#">Read more</a></p>
                </div>
                <img class="paperclip" src="{{URL::base().'/img/front'}}/paperclip.png" alt="paperclip" />
                <div class="sidebar">
                    <h3>Upcoming Things</h3>
                    <h4>Opp Cell Awareness Seminar</h4>
                    <h5>15th Nov 2012</h5>
                    <p>We will tell people about what Opp Cell does in IISER Mohali...<br /><a href="#">read more</a></p>
                </div>
            </div>
            <div id="content">
                @yield('content')
        </div>
        <div id="footer">
            <p>Copyright &copy; Opportunity Cell - IISER Mohali | <a href="http://validator.w3.org/check?uri=referer">HTML5</a> | <a href="http://jigsaw.w3.org/css-validator/check/referer">CSS</a> | <a href="http://www.html5webtemplates.co.uk">Template source</a></p>
        </div>
    </div>
</body>
</html>
