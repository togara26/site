@extends('base')


@section('custom_styles')

@endsection

@section('content')
    <section id="about" class="container content-section">
        <!--suppress HtmlUnknownTarget -->
        <form class="form-horizontal" id="contact-form" onsubmit="event.preventDefault();">
            <div class="form-group">
                <label for="name-field" class="col-sm-2 control-label">Name</label>
                <div class="col-sm-10">
                    <input type="text" required class="form-control" id="name-field" placeholder="Name">
                </div>
            </div>

            <div class="form-group">
                <label for="email-field" class="col-sm-2 control-label">Email Address</label>
                <div class="col-sm-10">
                    <input type="email" required class="form-control" id="email-field" placeholder="Email">
                </div>
            </div>

            <div class="form-group">
                <label for="message-field" class="col-sm-2 control-label">Message</label>
                <div class="col-sm-10">
                    <textarea class="form-control" required id="message-field" placeholder="Message"></textarea>
                </div>
            </div>

            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" class="btn btn-default">Send</button>
                </div>
            </div>
        </form>
    </section>
@endsection

@section('custom_scripts')
    <script>
        document.onkeydown = function(evt) {
            evt = evt || window.event;
            switch (evt.keyCode) {
                case 37:
                    leftArrowPressedContact();
                    break;
                case 39:
                    rightArrowPressedContact();
                    break;
            }
        };

        $('#contact-form').submit(function () {
            $.post("/send_contact_message",
                {
                    "name": $('#name-field').val(),
                    "email": $('#email-field').val(),
                    "message": $('#message-field').val()
                })
                .done(function () {
                    alert("Message sent!");
                })
                .fail(function(data) {
                    //noinspection JSUnresolvedVariable
                    alert(data.responseJSON.failure_reason);
                });
        })
    </script>
@endsection