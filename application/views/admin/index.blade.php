@layout('templates.backbone')

@section('title')
	Admin Panel
@endsection

@section('description')
    @parent
    <!-- "{=URL::base().'/css/admin/one.css'=}" -->
    <!-- <link rel="stylesheet" type="text/css" href=<?php echo "\"".URL::base()."/css/admin/one.css\""; ?> /> -->
    <!-- <script type="text/javascript" src=<?php echo "\"".URL::base()."/js/libraries/angularjs/angular.current.js\""; ?>> </script> -->
    <!-- <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/angularjs/1.0.2/angular.min.js"> </script> -->
    <script type="text/javascript" src="{=URL::base().'/js/libraries/angularjs/angular.current.js'=}"> </script>    
    <script type="text/javascript" src="{=URL::to('admin/js_main')=}" > </script>    
    <link rel="stylesheet" type="text/css" href="{=URL::base().'/css/extra.css'=}" />
@endsection

@section('full_content')
    <div ng-app="oppapp" id="main">
    <div ng-controller="c_oppcell" id="side_content">
        <div id="menubar">
            <ul id="menu">
                <!-- put class="current" in the li tag for the selected page - to highlight which page you're on -->
                <li ng-class="truthSource.nav.current_select['progs']"><a href="#/progs">Summers and PhDs</a></li>
                <li ng-class="truthSource.nav.current_select['scholarships']"><a href="#/scholarships">Scholarships</a></li>
                <li ng-class="truthSource.nav.current_select['jobs']"><a href="#/jobs">Jobs</a></li>
            </ul>
        </div>
        <!-- insert the page content here -->        
        <h1>{{truthSource.nav.current}}</h1>
        
        <h1>The Database</h1>
        <div ng-view>
        </div>
    </div>
    </div>
    
@endsection