<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">

    <title>Workfrom</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css">

    <style type="text/css">
        .hidden.secondary.menu {
            display: none;
        }

        .masthead.segment {
            min-height: 700px;
            padding: 1em 0em;
        }

        .masthead .logo.item img {
            margin-right: 1em;
        }

        .masthead .ui.menu .ui.button {
            margin-left: 0.5em;
        }

        .masthead h1.ui.header {
            margin-top: 3em;
            margin-bottom: 0em;
            font-size: 4em;
            font-weight: normal;
        }

        .masthead h2 {
            font-size: 1.7em;
            font-weight: normal;
        }

        .ui.vertical.stripe {
            padding: 8em 0em;
        }

        .ui.vertical.stripe h3 {
            font-size: 2em;
        }

        .ui.vertical.stripe .button+h3,
        .ui.vertical.stripe p+h3 {
            margin-top: 3em;
        }

        .ui.vertical.stripe .floated.image {
            clear: both;
        }

        .ui.vertical.stripe p {
            font-size: 1.33em;
        }

        .ui.vertical.stripe .horizontal.divider {
            margin: 3em 0em;
        }

        .quote.stripe.segment {
            padding: 0em;
        }

        .quote.stripe.segment .grid .column {
            padding-top: 5em;
            padding-bottom: 5em;
        }

        .footer.segment {
            padding: 5em 0em;
        }

        .secondary.menu .toc.item {
            display: none;
        }

        .banner {
            height: 880px;
            width: 100%;
            background-color: rgb(31, 31, 31);
            margin-top: 15px;
        }

        .ui.primary.button {
            color: black;
            background-color: rgb(151, 255, 151);
            border-radius: 0%;
            width: 200px;
            height: 50px;
            font-size: 17px;
        }

        @media only screen and (max-width: 700px) {
            .ui.fixed.menu {
                display: none !important;
            }

            .secondary.menu #item1 {
                display: none;
            }

            .secondary.menu .toc.item {
                display: block;
            }

            .masthead.segment {
                min-height: 350px;
            }

            .masthead h1.ui.header {
                font-size: 2em;
                margin-top: 1.5em;
            }

            .masthead h2 {
                margin-top: 0.5em;
                font-size: 1.5em;
            }
        }
    </style>

</head>

<body>

    <!-- Following Menu -->
    <div class="ui top fixed hidden massive secondary menu" style="background-color: white; padding: 15px;">
        <div class="ui container">
            <img src="https://workfrom.id/wp-content/uploads/2022/12/Logo-WF.png"
                style="height: 27px; margin-top: 12px;">
            <div class="right menu">
                <div class="ui dropdown item" id="item1">
                    <b>Location</b><i class="dropdown icon"></i>
                    <div class="menu">
                        <a class="item">Medan</a>
                        <a class="item">Jakarta Selatan</a>
                    </div>
                </div>
                <div class="ui dropdown item" id="item2">
                    <b>Use Case</b><i class="dropdown icon"></i>
                    <div class="menu">
                        <a class="item">Event</a>
                        <a class="item">Meeting</a>
                        <a class="item">Photoshoot</a>
                        <a class="item">Videoshoot</a>
                    </div>
                </div>
                <a class="item"><b>Blog</b></a>
            </div>

            <div class="right menu">
                <a class="item"><b>Contact Us</b></a>
                <a class="item"><b>Login</b></a>
                <a class="item"><b>Register</b></a>
            </div>


        </div>
    </div>

    <!-- Sidebar Menu -->
    <div class="ui secondary vertical sidebar menu" style="background-color: white;">
        <div class="container">
            <a class="item" style="margin-top: 350px;">
                <h3><b>Location<i class="dropdown icon"></i></b></h3>
            </a>
            <a class="item">
                <h3><b>Use Case<i class="dropdown icon"></i></b></h3>
            </a>

            <a href="" class="item">
                <h3><b>Blog</b></h3>
            </a>

            <a href="login.html/" class="item">
                <h3><b>Login</b></h3>
            </a>

            <a href="" class="item">
                <h3><b>Register</b></h3>
            </a>
        </div>
    </div>

    <!-- Page Contents -->
    <div class="pusher">
        <div class="ui vertical masthead center aligned segment">
            <div class="ui container">
                <div class="ui massive secondary menu">
                    <a class="toc item">
                        <i class="sidebar icon"></i>
                    </a>
                    <img src="https://workfrom.id/wp-content/uploads/2022/12/Logo-WF.png"
                        style="height: 27px; margin-top: 12px;">


                    <div class="right menu">
                        <div class="ui dropdown item" id="item1">
                            <b>Location</b><i class="dropdown icon"></i>
                            <div class="menu">
                                <a class="item">Medan</a>
                                <a class="item">Jakarta Selatan</a>
                            </div>
                        </div>
                        <div class="ui dropdown item" id="item1">
                            <b>Use Case</b><i class="dropdown icon"></i>
                            <div class="menu">
                                <a class="item">Event</a>
                                <a class="item">Meeting</a>
                                <a class="item">Photoshoot</a>
                                <a class="item">Videoshoot</a>
                            </div>
                        </div>
                        <a class="item" id="item1"><b>Blog</b></a>
                    </div>

                    <div class="right menu">
                        <a class="item" id="item1"><b>Contact Us</b></a>
                        <a href="login.html/" class="item" id="item1"><b>Login</b></a>
                        <a class="item" id="item1"><b>Register</b></a>
                    </div>
                </div>
            </div>

            <div class="banner">
                <div style="text-align: center; color: white; padding-top: 50px;">
                    <p style="font-size: 20px;">Office & Coworking Space</p>
                    <h1 style="font-size: 50px;">Temukan Ruangan<div>untuk
                            <span style="color: rgb(151, 255, 151);">Setiap Pekerjaan</span></div>
                    </h1>

                    <div class="ui container">
                        <div class="ui two column stackable centered grid">
                            <div class="column">
                                <p style="font-size: 20px; text-align: center;">
                                    Dengan berbagai pilihan ruangan yang dapat disesuaikan dengan kebutuhan Anda,
                                    kami akan membantu Anda mencari ruangan kerja yang sesuai dengan anggaran dan
                                    kebutuhan Anda. Temukan ruangan kerja Anda sekarang dan tingkatkan produktivitas
                                    kerja
                                    Anda!
                                </p>
                            </div>
                        </div><br><br>
                        <button class="ui primary button">
                            Book Now
                        </button>
                    </div>
                </div>

                <img class="ui fluid image centered"
                    src="https://workfrom.id/wp-content/uploads/2023/06/Group-11608.png" alt=""
                    style="margin-top: 50px; width: 1100px;">

            </div>
        </div>

        <div class="ui vertical stripe quote segment">
            <div class="ui equal width stackable internally celled grid">
                <div class="center aligned row">
                    <div class="column">
                        <h3>"What a Company"</h3>
                        <p>That is what they all say about us</p>
                    </div>
                    <div class="column">
                        <h3>"I shouldn't have gone with their competitor."</h3>
                        <p>
                            <img src="assets/images/avatar/nan.jpg" class="ui avatar image"> <b>Nan</b> Chief Fun
                            Officer Acme Toys
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="ui vertical stripe segment">
            <div class="ui text container">
                <h3 class="ui header">Breaking The Grid, Grabs Your Attention</h3>
                <p>Instead of focusing on content creation and hard work, we have learned how to master the art of doing
                    nothing by providing massive amounts of whitespace and generic content that can seem massive,
                    monolithic and worth your attention.</p>
                <a class="ui large button">Read More</a>
                <h4 class="ui horizontal header divider">
                    <a href="#">Case Studies</a>
                </h4>
                <h3 class="ui header">Did We Tell You About Our Bananas?</h3>
                <p>Yes I know you probably disregarded the earlier boasts as non-sequitur filler content, but its really
                    true. It took years of gene splicing and combinatory DNA research, but our bananas can really dance.
                </p>
                <a class="ui large button">I'm Still Quite Interested</a>
            </div>
        </div>


        <div class="ui vertical footer segment">
            <div class="ui container">
                <div class="ui stackable divided equal height stackable grid">
                    <div class="three wide column">
                        <h4 class="ui  header">About</h4>
                        <div class="ui  link list">
                            <a href="#" class="item">Sitemap</a>
                            <a href="#" class="item">Contact Us</a>
                            <a href="#" class="item">Religious Ceremonies</a>
                            <a href="#" class="item">Gazebo Plans</a>
                        </div>
                    </div>
                    <div class="three wide column">
                        <h4 class="ui  header">Services</h4>
                        <div class="ui  link list">
                            <a href="#" class="item">Banana Pre-Order</a>
                            <a href="#" class="item">DNA FAQ</a>
                            <a href="#" class="item">How To Access</a>
                            <a href="#" class="item">Favorite X-Men</a>
                        </div>
                    </div>
                    <div class="seven wide column">
                        <h4 class="ui  header">Footer Header</h4>
                        <p>Extra space for a call to action inside the footer that could help re-engage users.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script src="visibility.js"></script>
    <script src="sidebar.js"></script>
    <script src="transition.js"></script>
    <script>
        $(document)
            .ready(function () {

                // fix menu when passed
                $('.masthead')
                    .visibility({
                        once: false,
                        onBottomPassed: function () {
                            $('.fixed.menu').transition('fade in');
                        },
                        onBottomPassedReverse: function () {
                            $('.fixed.menu').transition('fade out');
                        }
                    });

                // create sidebar and attach to menu open
                $('.ui.sidebar')
                    .sidebar('attach events', '.toc.item');

            });
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.js"></script>
    <script>
        $('.ui.dropdown')
            .dropdown();
    </script>
</body>

</html>