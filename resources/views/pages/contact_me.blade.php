@extends('base')


@section('custom_styles')

@endsection

@section('content')
    <section id="about" class="container content-section">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
                <h2>
                    Contact Me
                </h2>
                <p>
                    If you wish to contact me, I have included a link to my LinkedIn page above or you can call/email me at: </br>
                    763-516-6652 </br>
                    tyogara26&#64gmail.com
                </p>
            </div>
        </div>
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
        </script>
    </section>
@endsection