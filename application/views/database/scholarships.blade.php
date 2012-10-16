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
    @if($data)
        <table>
            <tr>
                <th>Name</th>
                <th>Location</th>
                <th>Subject</th>
                <th>Deadline</th>
                <th>Application Opening</th>
            </tr>
            @foreach($data as $d)
                <tr>
                    <td><a href="{= $d['link'] =}">{= $d['name'] =}</td>
                    <td>{= $d['location'] =}</td>
                    <td>{= $d['subject'] =}</td>
                    <td>{= $d['deadline'] =}</td>
                    <td>{= $d['opening'] =}</td>
                </tr>
            @endforeach
        </table>
    @else
        No data to show!!
    @endif
@endsection