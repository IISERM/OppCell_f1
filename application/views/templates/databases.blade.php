@layout('templates.front')

@section('title')
	@if(URI::segment(2) == 'jobs')
		Jobs Database
	@elseif(URI::segment(2) == 'scholarships')
		Scholarships Databse
	@elseif(URI::segment(2) == 'progs')
		Academic Database
	@else
		Database Index
	@endif
@endsection

@section('content')
    <div id="menubar">
        <ul id="menu">
            <!-- put class="current" in the li tag for the selected page - to highlight which page you're on -->
            <li
            @if (URI::segment(2) == 'progs')
                {="class='current'"=}
            @endif
            ><a href="{=URL::to('database/progs')=}">Academic Programs</a></li>
            <li
            @if (URI::segment(2) == 'scholarships')
                {="class='current'"=}
            @endif
            ><a href="{=URL::to('database/scholarships')=}">Scholarships</a></li>
            <li
            @if (URI::segment(2) == 'jobs')
                {="class='current'"=}
            @endif
            ><a href="{=URL::to('database/jobs')=}">Jobs</a></li>
        </ul>
    </div>
    <!-- insert the page content here -->
    <h1>@yield('heading')</h1>
    <br/>
    <h2>@yield('heading2')</h2>
    <p>@yield('text')</p>
    <br/><h2>@yield('title_table')</h2>
    <table>
        <tr>
            <th>Name</th>
            <th>Country</th>
            <th>Subject</th>
            <th>Deadline</th>
            <th>Application Opening</th>
        </tr>
        @yield('table')
    </table>
@endsection