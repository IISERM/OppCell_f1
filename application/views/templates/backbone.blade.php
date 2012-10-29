<!DOCTYPE HTML>
<html>

<head>
    <title>@yield('title') | Opportunity Cell</title>
    <!-- <meta http-equiv="content-type" content="text/html; charset=utf-8" /> -->
    <link rel="stylesheet" type="text/css" href="{=URL::base().'/css/fonts/YanoneKaffeesatz.css'=}" />
    <link rel="stylesheet" type="text/css" href="{=URL::base().'/css/fonts/tangerine.css'=}" />
    <link rel="stylesheet" type="text/css" href="{=URL::base().'/css/front.css'=}" />
    <link rel="Shortcut Icon" href="{=URL::base().'/img/favicon.ico'=}" />

    @section('description')
    <meta name="description" content="This is the opportunity cell of IISER Mohali" />
    <meta name="keywords" content="opportunities, MS students, PhD, jobs, placement, IISER Mohali" />
    @yield_section

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
            <p style="float:left">
                Copyright &copy; Opportunity Cell - IISER Mohali
            </p>
            <p style="float:right">
                Powered By: 
                <a href="http://validator.w3.org/check?uri=referer">
                    HTML5
                </a>
                 | 
                 <a href="http://jigsaw.w3.org/css-validator/check/referer">
                    CSS
                </a>
                 | 
                 <a href="http://www.html5webtemplates.co.uk">
                    html5webtemplates
                </a>
            </p>
        </div>
        <center>        
        <br/>
        <p>Created by</p>
        <a target="_blank" href="http://www.github.com/theDeparted/"><img src= "{=URL::base().'/img/theDeparted.svg'=}" width="150px"/></a>
        <p>Can't live until you die</p>
        <p>Indian Institute of Science Education and Research, Mohali</p>
        </center>           
    </div>
</body>
</html>
