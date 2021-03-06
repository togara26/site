<!-- Navigation -->
<nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                Menu <i class="fa fa-bars"></i>
            </button>
            <a class="navbar-brand page-scroll" href="/">
                <span class="light">Tyler</span> O'Gara
            </a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
            <ul class="nav navbar-nav">
                <li>
                    <!--suppress HtmlUnknownTarget -->
                    <a class="navbar-toggle" href="/" data-menu-item="home" id="nav_item">Home</a>
                </li>
                <li>
                    <!--suppress HtmlUnknownTarget -->
                    <a class="navbar-toggle" data-menu-item="about_me" href="/page/about_me" id="nav_item">About</a>
                </li>
                <li>
                    <!--suppress HtmlUnknownTarget -->
                    <a class="navbar-toggle" data-menu-item="contact_me" href="/page/contact_me">Contact Me</a>
                </li>
                <li>
                    <a class="navbar-toggle" href="https://www.linkedin.com/in/tylerogara/">LinkedIn</a>
                </li>

                <li>
                    <a class="navbar-toggle" href="{{ asset('files/Resume.pdf') }}">Resume</a>
                </li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
</nav>