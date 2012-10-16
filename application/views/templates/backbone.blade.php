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
    <link rel="stylesheet" type="text/css" href="{=URL::base().'/css/front.css'=}" />
</head>

<body>
    <div id="main">
        <div id="header">
            <div id="logo">
                <h1><a href="./">Opportunity Cell</a></h1>
                <div class="slogan">So what are you doing after this semester?</div>
            </div>
            <br/>
            <div id="menubar">
                <ul id="menu">
                    <!-- put class="current" in the li tag for the selected page - to highlight which page you're on -->
                    @section('menu')
                    <li
                    @if (URI::segment(1) == 'home')
                        {="class='current'"=}
                    @endif
                    ><a href="{=URL::to('home')=}">Home</a></li>
                    <li
                    @if (URI::segment(1) == 'about')
                        {="class='current'"=}
                    @endif
                    ><a href="{=URL::to('about')=}">About</a></li>
                    <li
                    @if (URI::segment(1) == 'database')
                        {="class='current'"=}
                    @endif
                    ><a href="{=URL::to('database')=}">Databases</a></li>
                    <li
                    @if (URI::segment(1) == 'contact')
                        {="class='current'"=}
                    @endif
                    ><a href="{=URL::to('contact')=}">Contact Us</a></li>
                    <li
                    @if (URI::segment(1) == 'admin')
                        {="class='current'"=}
                    @endif
                    ><a href="{=URL::to('admin')=}">Admin</a></li>
                    @yield_section
                </ul>
            </div>
        </div>
        <div id="site_content">
            @yield('full_content')
            @yield('side_bar')
            @yield('contents')
        </div>
        <div id="footer">
            <p style="float:left">Copyright &copy; Opportunity Cell - IISER Mohali </p>
            <p style="float:right">Powered By: <a href="http://validator.w3.org/check?uri=referer">HTML5</a> | <a href="http://jigsaw.w3.org/css-validator/check/referer">CSS</a> | <a href="http://www.html5webtemplates.co.uk">html5webtemplates</a></p>
        </div>
    </div>
</body>
</html>
