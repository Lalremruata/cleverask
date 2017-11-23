@extends('user.app')
@section('title', 'Contact Us | cleverask')
@section('main-content')
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <h2>Contact Us</h2> Got a question ? Feedback? Awesome!
                <p>
                    Send your message in the form below and we will get back to you as early as possible.
                </p>
                <form role="form" method="post" id="reused_form"   >
                    <div class="form-group">
                        <label for="name">
                            Name:</label>
                        <input type="text" class="form-control"
                               id="name" name="name"  required maxlength="50">

                    </div>
                    <div class="form-group">
                        <label for="email">
                            Email:</label>
                        <input type="email" class="form-control"
                               id="email" name="email" required maxlength="50">
                    </div>
                    <div class="form-group">
                        <label for="name">
                            Message:</label>
                        <textarea class="form-control" type="textarea" name="message"
                                  id="message" placeholder="Your Message Here"
                                  maxlength="6000" rows="7"></textarea>
                    </div>





                    <button type="submit" class="btn btn-lg btn-success pull-right" id="btnContactUs">Post It! &rarr;</button>

                </form>
            </div>
        </div>
    </div>
@endsection