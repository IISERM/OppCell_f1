@layout('templates.databases')

@section('heading')
	Scholarship Programs
@endsection

@section('heading2')
	Scholarships
@endsection

@section('text')
	Scholarships are like salaries!! You need them so please aply for them dumb wits!!
@endsection

@section('title_table')
	Scholarship opportunities around the world
@endsection

@section('sort')
	Sort by: 
@endsection

@section('table')
    <tr>
        <th>Name</th>
        <th>Country</th>
        <th>Subject</th>
        <th>Deadline</th>
        <th>Application Opening</th>
    </tr>
    @yield('data')
@endsection