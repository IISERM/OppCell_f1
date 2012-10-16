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
    @if($data)
        <table>
            <tr>
                <th>Name</th>
                <th>Location</th>
                <th>Skill</th>
                <th>Deadline</th>
                <th>Application Opening</th>
            </tr>
            @foreach($data as $d)
                <tr>
                    <td><a href="{= $d['link'] =}">{= $d['name'] =}</td>
                    <td>{= $d['location'] =}</td>
                    <td>{= $d['skill'] =}</td>
                    <td>{= $d['deadline'] =}</td>
                    <td>{= $d['opening'] =}</td>
                </tr>
            @endforeach
        </table>
    @else
        No data to show!!
    @endif
@endsection