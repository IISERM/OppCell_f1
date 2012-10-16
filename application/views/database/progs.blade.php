@layout('templates.databases')

@section('heading')
	Academic Programs
@endsection

@section('heading2')
	Summer Projects and PhDs
@endsection

@section('text')
	The same people will be there for both... Apply wild!!
@endsection

@section('title_table')
	Academic Programs available for you
@endsection

@section('sort')
    <p>Sort by: </p>
@endsection

@section('table')
    @if($data)
        <table>
            <tr>
                <th>Name</th>
                <th>Location</th>
                <th>Subject</th>
                <th>Position</th>
                <th>Deadline</th>
                <th>Application Opening</th>
            </tr>
            @foreach($data as $d)
                <tr>
                    <td><a href="{= $d['link'] =}">{= $d['name'] =}</td>
                    <td>{= $d['location'] =}</td>
                    <td>{= $d['subject'] =}</td>
                    <td>{= $d['position'] =}</td>
                    <td>{= $d['deadline'] =}</td>
                    <td>{= $d['opening'] =}</td>
                </tr>
            @endforeach
        </table>
    @else
        No data to show!!
    @endif
@endsection