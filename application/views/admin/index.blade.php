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
@endsection

@section('full_content')
    <div ng-app="oppapp">
    <div ng-controller="c_oppcell">
        <div id="menubar">
            <ul id="menu">
                <!-- put class="current" in the li tag for the selected page - to highlight which page you're on -->
                <li ng-class="truthSource.nav.current_select['progs']"><a href="#/progs">Academic Programs</a></li>
                <li ng-class="truthSource.nav.current_select['scholarships']"><a href="#/scholarships">Scholarships</a></li>
                <li ng-class="truthSource.nav.current_select['jobs']"><a href="#/jobs">Jobs</a></li>
            </ul>
        </div>
        <!-- insert the page content here -->
        <input type="text" ng-model="bam"></input>

        <h1>{{bam}}</h1>
        <p>Use this system to introduce changes</p>
        <br/>
        
        <h2>About</h2>
        <p>This section deals with Academic Programmes including Scholarships, PhDs, Summer Intern-ships etcetera</p>
        <br/>

        <h2>Table's Title</h2>
        <table>
            <tr>
                <th>Name</th>
                <th>Country</th>
                <th>Subject</th>
                <th>Deadline</th>
                <th>Application Opening</th>
            </tr>    
        </table>

        <h1> THIS IS THE VIEW </h1>
        <div ng-view>
        </div>
    </div>
    </div>
    
@endsection