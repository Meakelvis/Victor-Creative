<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Victor Creative</title>
    <link rel="shortcut icon" href="img/icon.png">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
    <style>
        * {
            box-sizing: border-box;
        }

        header,
        section {
            overflow-x: hidden;
        }

        :root {
            --dark-blue: #09242f;
            --light-red: #ff4f24;
            --white-bg: #fffdfe;
            --grey-bg: #f5f5f5;
        }

        header a {
            color: var(--dark-blue);
        }

        header {
            height: 100%;
            background-image: url("img/header.png");
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
        }

        header .navbar-brand img {
            height: 2em;
            padding-left: 2em;
        }

        header .nav-item:last-child {
            padding-right: 12em;
        }

        header .nav-item {
            padding: 1em;
        }

        header .nav-link {
            font-weight: bold;
        }

        header .nav-link:hover {
            color: var(--light-red);
        }

        header .row .col-md-6 {
            padding: 22vmin 1vmin;
            padding-bottom: 35vmin;
            text-align: left;
        }

        header .row .col-md-6 h1 {
            color: var(--dark-blue);
            padding-bottom: 0.2em;
        }

        header .row .col-md-6 h6 {
            color: var(--dark-blue);
            padding-bottom: 1em;
            font-weight: lighter;
            letter-spacing: 2px;
        }

        .primary-btn {
            background-color: var(--white-bg);
            color: var(--dark-blue);
            border-radius: 20px;
            border-color: var(--dark-blue);
            font-weight: bold;
        }

        .primary-btn:hover {
            background-color: var(--dark-blue);
            color: var(--white-bg);
        }

        header .row .col-md-6 img {
            height: 80vmin;
            margin-top: -15vmin;
        }

        /*****section-1******/
        .section-1 {
            padding: 10vmin 10vmin;
            background-color: var(--white-bg);
        }

        .section-1 .row .col-md-6 h2 {
            color: var(--dark-blue);
        }

        .section-1 .row .col-md-6 h6 {
            color: var(--dark-blue);
            font-weight: lighter;
            text-align: left;
        }

        .section-1 .row .col-md-6 p {
            padding-top: 3em;
            letter-spacing: 2px;
            text-align: justify;
        }

        .section-1 .row .col-md-6 .logos {
            padding: 2vmin 5vmin;
        }

        /******section-2******/
        .section-2 {
            padding: 10vmin 10vmin;
            background-color: var(--grey-bg);
        }

        .section-2 h2 {
            color: var(--dark-blue);
            padding-bottom: 5vmin;
        }

        .title::after {
            content: '';
            background: var(--light-red);
            height: 3px;
            width: 30vmin;
            margin-left: auto;
            margin-right: auto;
            display: block;
            transform: translateY(5px);
        }

        .section-2 .row .col-md-4 img {
            height: 375px;
            width: 374px;
            size: cover;
            position: center;
        }

        /******section-3*******/
        .section-3 {
            padding: 10vmin 10vmin;
            background-color: var(--white-bg);
        }

        .section-3 h2 {
            color: var(--dark-blue);
            padding-bottom: 5vmin;
        }

        .section-3 h2::after {
            content: '';
            background: var(--light-red);
            height: 3px;
            width: 45vmin;
            margin-left: auto;
            margin-right: auto;
            display: block;
            transform: translateY(5px);
        }

        .section-3 .row .col-md-4 img {
            height: 200px;
            width: 200px;
        }

        .section-3 .row .col-md-4 .comment {
            padding-top: 1em;
        }

        .section-3 .row .col-md-4 .post {
            margin-top: -1em;
        }

        /******section-4*********/
        .section-4 {
            padding: 10vmin 10vmin;
            background-color: var(--grey-bg);
        }

        .section-4 h2::after {
            content: '';
            background: var(--light-red);
            height: 3px;
            width: 25vmin;
            margin-left: auto;
            margin-right: auto;
            display: block;
            transform: translateY(5px);
        }

        .section-4 .rect {
            padding: 5vmin 5vmin;
            background-color: #ffffff;
            width: 43vmin;
            height: 25vmin;
            position: relative;
            margin: 2rem;
            box-shadow: 0px 5px 10px rgba(0, 0, 0, 0.2);
            border-radius: 5px;
        }

        .section-4 .rect h6 {
            padding-top: 15px;
        }

        .section-4 .rect p {
            letter-spacing: 1px;
            padding-top: 10px;
        }

        .section-4 .rect .row img {
            margin: 2px;
            padding-top: 5px;
        }

        .section-4 .contact-rect {
            background-color: white;
            padding: 10vmin;
            box-shadow: 0px 5px 10px rgba(0, 0, 0, 0.2);
            border-radius: 5px;
            margin-top: 2vmin;
        }

        .section-4 .contact-rect .form-row .form-group input {
            border-radius: 20px;
            background-color: #f5f5f5;
            border: none;
            margin-bottom: 5px;
        }

        .section-4 .contact-rect .form-group textarea {
            border-radius: 20px;
            background-color: #f5f5f5;
            border: none;
            margin-bottom: 20px;
        }

        .section-4 .contact-rect button {
            margin-top: 5px;
        }

        footer {
            color: var(--white-bg);
            background-color: var(--dark-blue);
            font-weight: lighter;
            height: 10vmin;
        }

        footer p {
            padding: 25px;
        }
    </style>
</head>

<body>
    <header>
        <div class="container-fluid p-0">
            <nav class="navbar navbar-expand-lg">
                <a class="navbar-brand" href="#"><img src="img/logo.png" alt=""></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav mx-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="#">Portfolio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Testimonials</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Contact</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
        <div class="container text-center">
            <div class="row">
                <div class="col-md-6 col-sm-12">
                    <h1>Graphics Designer</h1>
                    <h6>Imagine it, and it will come to life</h6>
                    <button class="btn px-5 py-2 primary-btn">Get A Quote</button>
                </div>
                <div class="col-md-6 col-sm-12 text-center">
                    <img src="img/victor.png" class="img-fluid">
                </div>
            </div>
        </div>
    </header>
    <main>
        <section class="section-1">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6 col-sm-12">
                        <h2>Victor Charles Kirunda</h2>
                        <h6>DESIGN, BRANDING, ADVERTISEMENT, MOTION GRAPHICS</h6>
                        <p>I am a full fledged graphics designer working
                            for the past four years. I have experience with
                            local along side with clients all over the world.
                            I am vast with Adobe Illustrator, Photoshop,
                            InDesign, Adobe XD and so on.</p>
                    </div>
                    <div class="col-md-6 col-sm-12 text-center">
                        <h2>My SKills</h2>
                        <div class="d-flex flex-md-row flex-wrap justify-content-center">
                            <div class="logos">
                                <img src="img/Adobe-Illustrator-icon.png" alt="">
                            </div>
                            <div class="logos">
                                <img src="img/Adobe-Photoshop-icon.png" alt="">
                            </div>
                            <div class="logos">
                                <img src="img/Adobe-InDesign-icon.png" alt="">
                            </div>
                            <div class="logos">
                                <img src="img/Adobe-Lightroom-icon.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="section-2">
            <div class="container text-center">
                <h2 class="title">My Work</h2>
                <div class="row no-gutters">
                    <div class="col-md-4 col-sm-12">
                        <img src="img/nrc.jpg" class="img-fluid">
                    </div>
                    <div class="col-md-4 col-sm-12">
                        <img src="img/chelsie.jpg" class="img-fluid">
                    </div>
                    <div class="col-md-4 col-sm-12">
                        <img src="img/craft.jpg" class="img-fluid">
                    </div>
                </div>
                <div class="row no-gutters">
                    <div class="col-md-4 col-sm-12">
                        <img src="img/ballo.jpg" class="img-fluid">
                    </div>
                    <div class="col-md-4 col-sm-12">
                        <img src="img/veloce.jpg" class="img-fluid">
                    </div>
                    <div class="col-md-4 col-sm-12">
                        <img src="img/jim.jpg" class="img-fluid">
                    </div>
                </div>
            </div>
        </section>
        <section class="section-3">
            <div class="container text-center">
                <h2>What Clients Say</h2>
                <div class="row text-center">
                    <div class="col-md-4 col-sm-12">
                        <img src="img/eli-defaria-14556-unsplash.jpg" alt="" class="img-fluid rounded-circle">
                        <p class="comment">"Good timekeeper and proffessional"</p>
                        <p class="font-italic font-weight-lighter post">Director, Ballo Logotics</p>
                    </div>
                    <div class="col-md-4 col-sm-12">
                        <img src="img/christopher-campbell-28567-unsplash.jpg" alt=""
                            class="img-fluid rounded-circle">
                        <p class="comment">"Creative and good communicator"</p>
                        <p class="font-italic font-weight-lighter post">Manager, Chelsie Dinner</p>
                    </div>
                    <div class="col-md-4 col-sm-12">
                        <img src="img/michael-dam-258165-unsplash.jpg" alt="" class="img-fluid rounded-circle">
                        <p class="comment">"The best freelance designer"</p>
                        <p class="font-italic font-weight-lighter post">CEO, Akzer Transport</p>
                    </div>
                </div>
            </div>
        </section>
        <section class="section-4">
            <div class="container">
                <h2 class="text-center">Contact</h2>
                <div class="d-flex flex-md-row flex-wrap justify-content-center">
                    <div class="rect text-center">
                        <img src="img/phone.png" class="contact-logos">
                        <h6>PHONE</h6>
                        <p>+256 702 334 118</p>
                    </div>
                    <div class="rect text-center">
                        <img src="img/gmail.png" class="contact-logos">
                        <h6>EMAIL</h6>
                        <p>kirundacharles33@gmail.com</p>
                    </div>
                    <div class="rect text">
                        <img src="img/handshake.png" class="contact-logos">
                        <h6>SOCIAL MEDIA</h6>
                        <div class="row">
                            <div class="col-3">
                                <img src="img/facebook.png" alt="">
                            </div>
                            <div class="col-3">
                                <img src="img/twitter.png" alt="">
                            </div>
                            <div class="col-3">
                                <img src="img/instagram.png" alt="">
                            </div>
                            <div class="col-3">
                                <img src="img/snapchat.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="contact-rect">
                    <form>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <input type="text" class="form-control" placeholder="Enter full name">
                            </div>
                            <div class="form-group col-md-6">
                                <input type="password" class="form-control" placeholder="Enter your email">
                            </div>
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" rows="5" placeholder="Your message"></textarea>
                        </div>
                        <button type="submit" class="btn btn-light px-5 py-2 primary-btn">Sign in</button>
                    </form>
                </div>
            </div>
        </section>
    </main>
    <footer>
        <div class="container text-center">
            <p class="font-weight-lighter">&copy; 2019 elvisarinaitwe</p>
        </div>
    </footer>
</body>

</html>