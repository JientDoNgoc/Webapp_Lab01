@extends('layouts.theme')

@section('content')
        <!---contact-->
<div class="contact">
    <div class="container">
        <h2 class="tittle">How To Find Us</h2>
        <div class="contact-bottom">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3919.6543997840713!2d106.68004121480065!3d10.761095992331946!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752f1b888ab357%3A0xc469f6e800231314!2zMjgwIEFuIETGsMahbmcgVsawxqFuZywgcGjGsOG7nW5nIDQsIFF14bqtbiA1LCBI4buTIENow60gTWluaCwgVmnhu4d0IE5hbQ!5e0!3m2!1svi!2s!4v1481950438296" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
        <div class="col-md-4 contact-left">
            <h4>Address</h4>
            <p>
                The Lab 
                <span>280ADV Dict5 HCMc</span>
            </p>
            <ul>
                <li>Free Phone :(084) 028 7101366</li>
                <li>Telephone :(084) 01676825746</li>
                <li><a href="#">jientdongocsp@gmail.com</a></li>
            </ul>
        </div>
        <div class="col-md-8 contact-left cont">
            <h4>Contact Form</h4>
            <form action="#" method="post">
                <input type="text" name="Name" value="Name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Name';}" required="">
                <input type="email" name="Email" value="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}" required="">
                <input type="text" name="Phone" value="Phone" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Phone';}" required="">
                <textarea type="text" name="Message" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Message...';}" required>Message...</textarea>
                <input type="submit" value="Submit">
                <input type="reset" value="Clear">
            </form>
        </div>
        <div class="clearfix"> </div>
    </div>
</div>
<!---contact-->
</div>

@endsection