@layout('templates.backbone')

@section('side_bar')
    <div id="sidebar_container">
        <img class="paperclip" src="{=URL::base().'/img/front'=}/paperclip.png" alt="paperclip" />
        <div class="sidebar">
        <!-- insert your sidebar items here -->
        <h3>Latest News</h3>
        <h4>Title</h4>
        <h5>Date</h5>
        <p>Content<br /><a href="#">Read more</a></p>
        </div>
        <img class="paperclip" src="{=URL::base().'/img/front'=}/paperclip.png" alt="paperclip" />
        <div class="sidebar">
            <h3>Upcoming Things</h3>
            <h4>Opp Cell Awareness Seminar</h4>
            <h5>15th Nov 2012</h5>
            <p>We will tell people about what Opp Cell does in IISER Mohali...<br /><a href="#">read more</a></p>
        </div>
    </div>
@endsection

@section('contents')
            <div id="content">
                @yield('content')
            </div>
@endsection