@extends('base')

@section('custom_styles')

@endsection

@section('content')
    <section id="landing" class="container content-section">
        <div class="row">
            <div class="container-fluid">
                <h1>
                    Developer.
                </h1>
            </div>

        </div>
        <script>
            document.onkeydown = function(evt) {
                evt = evt || window.event;
                switch (evt.keyCode) {
                    case 37:
                        leftArrowPressedLanding();
                        break;
                    case 39:
                        rightArrowPressedLanding();
                        break;
                }
            };
        </script>
    </section>
@endsection