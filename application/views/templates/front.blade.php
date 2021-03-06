@layout('templates.backbone')

@section('side_bar')
    <div id="sidebar_container">
        <img class="paperclip" src="{=URL::base().'/img/front'=}/paperclip.png" alt="paperclip" />
        <div class="sidebar">
        <!-- insert your sidebar items here -->
        <h3>Latest News</h3>
        <h4>Better LaTe(x) than never</h4>
        <h5>January 30, 2013</h5>
        <h6>7 PM, LH5 (LHC)</h6>
        <p>The talk is about - How to write a CV in LaTeX, how to write research proposals in Chem/Phy/Mth/Bio. There will also be a Q A session on internships.<br/>
        </div>

        <img class="paperclip" src="{=URL::base().'/img/front'=}/paperclip.png" alt="paperclip" />
        <div class="sidebar">
        <!-- insert your sidebar items here -->
        <h3>Past Events</h3>
        <h4>MS08 Batch Interactive Session</h4>
        <h5>November 6, 2012</h5>
        <p>Registration for this year's opportunities for PhD positions and jobs in Academia and Research Industries<br/>
        </div>


<!--         <img class="paperclip" src="{=URL::base().'/img/front'=}/paperclip.png" alt="paperclip" />
        <div class="sidebar">
            <h3>Upcoming Things</h3>
            <h4>Opp Cell Awareness Seminar</h4>
            <h5>15th Nov 2012</h5>
            <p>We will tell people about what Opp Cell does in IISER Mohali...<br /><a href="#">read more</a></p>
        </div> -->
    </div>
@endsection

@section('contents')
            <div id="content">
                @yield('content')
            </div>
@endsection