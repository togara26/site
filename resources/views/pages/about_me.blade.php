@extends('base')


@section('custom_styles')
@endsection

@section('content')
    <section id="about" class="container content-section">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
                <h2>
                    About Me
                </h2>
                <p>
                    I am 22 years old and have recently graduated from the University of St. Thomas with a B.A. in Computer Science. I am currently seeking my first job as a Software Developer. I have experience with Java, HTML, JavaScript, CSS, SQL, PHP and R.
                </p>
                <p>
                    Outside of the computer world, I enjoy watching/participating in sports such as Hockey and Football as well as spending time with family and friends.
                </p>
            </div>
        </div>
        <script>
            document.onkeydown = function(evt) {
                evt = evt || window.event;
                switch (evt.keyCode) {
                    case 37:
                        leftArrowPressedAbout();
                        break;
                    case 39:
                        rightArrowPressedAbout();
                        break;
                }
            };
        </script>
    </section>

@endsection