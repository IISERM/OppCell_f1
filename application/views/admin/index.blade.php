@layout('templates.backbone')

@section('title')
	Admin Panel
@endsection

@section('fullcontent')

    <div id="menubar">
        <ul id="menu">
            <!-- put class="current" in the li tag for the selected page - to highlight which page you're on -->
            <li><a href="#progs">Academic Programs</a></li>
            <li><a href="#scholarships">Scholarships</a></li>
            <li><a href="#jobs">Jobs</a></li>
        </ul>
    </div>
    <!-- insert the page content here -->
    <h1>Heading 1</h1>
    <br/>
    
    <h2>Heading 2</h2>
    <p>Write Down some stuff</p>
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

	
@endsection