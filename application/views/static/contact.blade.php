@layout('templates.front')

@section('title')
	Contact Us
@endsection

@section('description')
    <meta name="description" content="This is the opportunity cell of IISER Mohali" />
    <meta name="keywords" content="opportunities, MS students, PhD, jobs, placement, IISER Mohali" />
@endsection

@section('menu')
	@parent
@endsection

@section('content')
    <!-- insert the page content here -->
    <h1>Contact Us</h1>
    <p>Contact us for any queries and/or suggestions:</p>
    <form action="#" method="post">
        <div class="form_settings">
            <p><span>Name</span><input class="contact" type="text" name="your_name" value="" /></p>
            <p><span>Email Address</span><input class="contact" type="text" name="your_email" value="" /></p>
            <p><span>Message</span><textarea class="contact textarea" rows="8" cols="50" name="your_enquiry"></textarea></p>
            <p style="padding-top: 15px"><span>&nbsp;</span><input class="submit" type="submit" name="contact_submitted" value="submit" /></p>
        </div>
    </form>
@endsection