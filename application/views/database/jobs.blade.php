@layout('templates.databases')

@section('heading')
	Jobs Database
@endsection

@section('heading2')
	Jobs
@endsection

@section('text')
	Jobs are for people who want money more than life itself!! Go enjoy yourselves but say goodbye to life!!
@endsection

@section('title_table')
	Job opportunities for you
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