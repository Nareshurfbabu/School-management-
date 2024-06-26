<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contect Us</title>
    <script src="https://kit.fontawesome.com/b9304c053b.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">



    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: "Playwrite NG Modern", cursive;
        }

        .back {
            background-color: #a832a0;
        }

        .header {
            color: white;
            padding: 20px 0;
            width: 100%;
        }

        .container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            max-width: 1400px;
            margin: 0 auto;
            padding: 0 20px;
        }

        .logo img {
            width: 260px;
        }

        .user {
            margin-right: 15px;
        }

        .nav {
            display: flex;
        }

        .nav-list {
            display: flex;
            list-style: none;
        }

        .nav-item {
            position: relative;
            margin-left: 20px;
        }


        .nav-item a {
            color: white;
            text-decoration: none;
            font-size: 18px;
            padding: 20px;
            display: block;
        }




        .nav-item:hover .dropdown-menu {
            display: block;
        }



        .search-icon {
            margin-left: 20px;
            margin-top: 20px;
        }

        .search-icon a {
            color: white;
            text-decoration: none;
            font-size: 18px;
            padding: 10px;
            border: 2px solid white;
            border-radius: 50%;
            transition: color 0.3s, border-color 0.3s;
        }

        .search-icon a:hover {
            color: #ffcc00;
            border-color: #ffcc00;
        }

        .nav-item a:hover {
            color: #ffcc00;
            border-color: #ffcc00;
        }

        .welcome-section {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 380px;

            opacity: 0.65;

            text-align: center;
            color: white;
        }

        .welcome-content {
            max-width: 600px;
            padding: 20px;
        }

        .welcome-content h1 {
            margin-bottom: 20px;
            font-size: 2.5em;
            margin-top: 40px;

        }

        .welcome-content p {
            font-size: 1.1em;

            line-height: 1.6;
        }

        .welcome-content a {
            color: white;
        }

        .containerss {
            display: flex;
            justify-content: space-around;
            align-items: center;
            height: 400px;
        }

        .info-box {
            border-radius: 8px;
            padding: 20px;
            width: 30%;
            text-align: center;
        }

        .info-box h2 {
            margin-bottom: 15px;
        }

        .info-box p {
            font-size: 21px;
            margin: 12px 0;
        }

        /* Google Font CDN Link */
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');


        .container-form {
            width: 100%;
            background: #fff;
            border-radius: 6px;
            padding: 20px 60px 30px 40px;
            margin-top: 40px;
        }

        .container-form .content {
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .container-form .content .left-side {
            width: 25%;
            height: 100%;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            margin-top: 15px;
            position: relative;
        }

        .content .left-side::before {
            content: '';
            position: absolute;
            height: 70%;
            width: 2px;
            right: -15px;
            top: 50%;
            transform: translateY(-50%);
            background: #afafb6;
        }

        .content .left-side .details {
            margin: 14px;
            text-align: center;
        }

        .content .left-side .details i {
            font-size: 30px;
            color: #3e2093;
            margin-bottom: 10px;
        }

        .content .left-side .details .topic {
            font-size: 18px;
            font-weight: 500;
        }

        .content .left-side .details .text-one,
        .content .left-side .details .text-two {
            font-size: 14px;
            color: #afafb6;
        }

        .container-form .content .right-side {
            width: 75%;
            margin-left: 75px;
        }

        .content .right-side .topic-text {
            font-size: 23px;
            font-weight: 600;
            color: #3e2093;
        }

        .right-side .input-box {
            height: 50px;
            width: 100%;
            margin: 12px 0;
        }

        .right-side .input-box input,
        .right-side .input-box textarea {
            height: 100%;
            width: 100%;
            border: none;
            outline: none;
            font-size: 16px;
            background: #F0F1F8;
            border-radius: 6px;
            padding: 0 15px;
            resize: none;
        }

        .right-side .message-box {
            min-height: 110px;
        }

        .right-side .input-box textarea {
            padding-top: 6px;
        }

        .right-side .button {
            display: inline-block;
            margin-top: 12px;
        }

        .right-side .button input[type="submit"] {
            color: #fff;
            font-size: 18px;
            outline: none;
            border: none;
            padding: 8px 16px;
            border-radius: 6px;
            background: #3e2093;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .button input[type="submit"]:hover {
            background: #5029bc;
        }

        @media (max-width: 950px) {
            .container-form {
                width: 90%;
                padding: 30px 40px 40px 35px;
            }

            .container-form .content .right-side {
                width: 75%;
                margin-left: 55px;
            }
        }

        @media (max-width: 820px) {
            .container-form {
                margin: 40px 0;
                height: 100%;
            }

            .container-form .content {
                flex-direction: column-reverse;
            }

            .container-form .content .left-side {
                width: 100%;
                flex-direction: row;
                margin-top: 40px;
                justify-content: center;
                flex-wrap: wrap;
            }

            .container-form .content .left-side::before {
                display: none;
            }

            .container-form .content .right-side {
                width: 100%;
                margin-left: 0;
            }
        }


        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: "Playwrite NG Modern", cursive;

            text-decoration: none;
        }

        footer {
            width: 100%;
            margin-top: 35px;
            background-color: #a832a0;
            padding: 30px;

        }

        footer .content {
            max-width: 1350px;
            margin: auto;
            padding: 20px;
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
        }

        footer .content p,
        a {
            color: #fff;
        }

        footer .content .box {
            width: 33%;
            transition: all 0.4s ease;
        }

        footer .content .topic {
            font-size: 22px;
            font-weight: 600;
            color: #fff;
            margin-bottom: 16px;

        }

        footer .content p {
            text-align: justify;
        }

        footer .content .lower .topic {
            margin: 24px 0 5px 0;
        }

        footer .content .lower i {
            padding-right: 16px;
        }

        footer .content .middle {
            padding-left: 80px;
        }

        footer .content .middle a {
            line-height: 32px;
        }

        footer .content .right input[type="text"] {
            height: 45px;
            width: 100%;
            outline: none;
            color: #d9d9d9;
            background: #000;
            border-radius: 5px;
            padding-left: 10px;
            font-size: 17px;
            border: 2px solid #222222;
        }

        footer .content .right input[type="submit"] {
            height: 42px;
            width: 100%;
            font-size: 18px;
            color: #d9d9d9;
            background: #eb2f06;
            outline: none;
            border-radius: 5px;
            letter-spacing: 1px;
            cursor: pointer;
            margin-top: 12px;
            border: 2px solid #eb2f06;
            transition: .8s all;
        }

        .content .right input[type="submit"]:hover {
            background: none;
            color: #eb2f06;
        }

        footer .content .media-icons a {
            font-size: 16px;
            height: 45px;
            width: 45px;
            display: inline-block;
            text-align: center;
            line-height: 43px;
            border-radius: 5px;
            border: 2px solid #222222;
            margin: 30px 5px 0 0;
            transition: all 0.3s ease;
        }

        .content .media-icons a:hover {
            border-color: #eb2f06;
        }

        footer .bottom {
            width: 100%;
            text-align: right;
            color: #d9d9d9;
            padding: 0 40px 5px 0;
        }

        footer .bottom a {
            color: #eb2f06;
        }

        footer a {
            transition: all 0.3s ease;
        }

        footer a:hover {
            color: #eb2f06;
        }

        @media (max-width: 768px) {
            .nav {
                display: none;
                flex-direction: column;
                width: 100%;
            }

            .nav-list {
                flex-direction: column;
            }

            .nav-item {
                margin: 10px 0;
            }

            .menu-toggle {
                display: flex;
            }

            .features-section {
                flex-direction: column;
                align-items: center;
            }

            .team-section {
                flex-direction: column;
                align-items: center;
            }


            .feature {
                max-width: 100%;
                margin: 10px 0;
            }

        }

        @media (max-width:1100px) {
            footer .content .middle {
                padding-left: 50px;
            }
        }

        @media (max-width:950px) {
            footer .content .box {
                width: 50%;
            }

            .content .right {
                margin-top: 40px;
            }
        }

        @media (max-width:560px) {
            footer {
                position: relative;
            }

            footer .content .box {
                width: 100%;
                margin-top: 30px;
            }

            footer .content .middle {
                padding-left: 0;
            }
        }




        .info-box i {
            font-size: 35px;
            margin-bottom: 30px;
        }

        @media (max-width: 768px) {
            .contact-form .form-group {
                flex-direction: column;
            }

            .contact-form .form-group input {
                margin-bottom: 10px;
            }


        }

        @media (max-width: 600px) {
            .contact-form {
                padding: 15px;
            }

            .contact-form .form-group input,
            .contact-form .form-group textarea {
                padding: 8px;
            }

            .contact-form button {
                padding: 8px;
                font-size: 14px;
            }
        }
    </style>
</head>

<body>
    <div class="back">
        <header class="header">
            <div class="container">
                <div class="logo">
                    <a href="#"><img src="https://ttcrobotronics.com/assets/images/ttc-robotronics-logo.png" alt=""></a>
                </div>
                <nav class="nav">
                    <ul class="nav-list">
                        <li class="nav-item"><a href="{{route('welcome')}}">Home</a></li>
                        <li class="nav-item dropdown">
                            <a href="#">Pages</a>

                        </li>
                        <li class="nav-item dropdown">
                            <a href="#">Courses</a>

                        </li>
                        <li class="nav-item"><a href="#">Events</a></li>
                        <li class="nav-item"><a href="#">Blog</a></li>
                        <li class="nav-item"><a href="#">Contact us</a></li>
                        <li class="nav-item"><a href="{{route('register.show')}}"><i class="fa-solid fa-user user"></i>Sign up</a></li>
                        <div class="search-icon">
                            <a href="#"><i class="fas fa-search"></i></a>
                        </div>
                    </ul>
                </nav>
                <div class="menu-toggle">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div>
        </header>
        <section class="welcome-section">
            <div class="welcome-content">

                <h1>Contact us</h1>
                <p>
                    Home/Contact us
                </p>
            </div>
        </section>
    </div>
    <div class="containerss">
        <div class="info-box">
            <a href="#"> <i class="fa-solid fa-location-dot" style="color: #a832a0;"></i></a>
            <h2>OUR LOCATION</h2>
            <p>PO Box 97845 Baker st. 567,</p>
            <p>Los Angeles, California, US.</p>
        </div>

        <div class="info-box">
            <a href="#"> <i class="fa-solid fa-phone" style="color: #a832a0;"></i></a>
            <h2>CONTACT US</h2>
            <p>Mobile: (+04) 600 444 999</p>
            <p>Fax: (+04) 600 888 222</p>
        </div>

        
        <div class="info-box">
            <a href="#"> <i class="fa-solid fa-paper-plane" style="color: #a832a0;"></i></a>
            <h2>WRITE SOME WORDS</h2>
            <p>Support24/7@domain.com</p>
            <p>Info@domain.com</p>
        </div>
    </div>
    <h1 style="text-align: center; margin-top: 40px; font-size: 45px;">Leave A Message </h1>

    <div class="map" style=" margin-top: 40px;">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3430.7539587604047!2d76.68711007393918!3d30.697197987352094!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390fef4bafa29bef%3A0x692fde31582daeeb!2sTTC%20Robotronics%20Pvt.%20Ltd.!5e0!3m2!1sen!2sin!4v1719048243155!5m2!1sen!2sin" width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>


    <div class="container-form">
        <div class="content">
            <div class="left-side">
                <div class="address details">
                    <i class="fas fa-map-marker-alt"></i>
                    <div class="topic">Address</div>
                    <div class="text-one">Surkhet, NP12</div>
                    <div class="text-two">Birendranagar 06</div>
                </div>
                <div class="phone details">
                    <i class="fas fa-phone-alt"></i>
                    <div class="topic">Phone</div>
                    <div class="text-one">+91 9358445838</div>
                    <div class="text-two">+91 9166111962</div>
                </div>
                <div class="email details">
                    <i class="fas fa-envelope"></i>
                    <div class="topic">Email</div>
                    <div class="text-one">babu@gmail.com</div>
                    <div class="text-two">info.babu@gmail.com</div>
                </div>
            </div>
            <div class="right-side">
                <div class="topic-text">Send us a message</div>
                <p>If you have any work from me or any types of quries related to my tutorial, you can send me message from here. It's my pleasure to help you.</p>
                <form action="{{ route('contect.submit') }}" method="POST">
                    @csrf
                    <div class="input-box">
                        <input type="text" name="name" placeholder="Enter your name">
                    </div>
                    <div class="input-box">
                        <input type="text" name="subject" placeholder="Enter your subject">
                    </div>
                    <div class="input-box">
                        <input type="text" name="email" placeholder="Enter your email">
                    </div>
                    <div class="input-box message-box">
                        <textarea id="message" name="message" rows="10" placeholder="Message" required></textarea>
                    </div>
                    <div class="button">
                        <input type="submit" value="Send Now">
                    </div>
                </form>
            </div>
        </div>
    </div>

    <footer>
        <div class="content">
            <div class="left box">
                <div class="upper">
                    <div class="topic">About us</div>
                    <p>CodingLab is a channel where you can learn HTML,
                        CSS, and also JavaScript along with creative CSS Animations and Effects.</p>
                </div>
                <div class="lower">
                    <div class="topic">Contact us</div>
                    <div class="phone">
                        <a href="#"><i class="fas fa-phone-volume"></i>+007 9089 6767</a>
                    </div>
                    <div class="email">
                        <a href="#"><i class="fas fa-envelope"></i>abc@gmail.com</a>
                    </div>
                </div>
            </div>
            <div class="middle box">
                <div class="topic">Our Services</div>
                <div><a href="#"> Web Design, Development</a></div>
                <div><a href="#">Web UX Design, Reasearch</a></div>
                <div><a href="#">Web User Interface Design</a></div>
                <div><a href="#">Theme Development, Design</a></div>
                <div><a href="#">Mobile Application Design</a></div>
                <div><a href="#">Wire raming & Prototyping</a></div>
            </div>
            <div class="right box">
                <div class="topic">Subscribe us</div>
                <form action="#">
                    <input type="text" placeholder="Enter email address">
                    <input type="submit" name="" value="Send">
                    <div class="media-icons">
                        <a href="https://www.facebook.com/" target="_blank"><i class="fab fa-facebook-f"></i></a>
                        <a href="https://www.instagram.com/" target="_blank"><i class="fab fa-instagram"></i></a>
                        <a href="https://x.com/" target="_blank"><i class="fab fa-twitter"></i></a>
                        <a href="https://www.youtube.com/" target="_blank"><i class="fab fa-youtube"></i></a>
                        <a href="https://www.linkedin.com/" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </form>
            </div>
        </div>
        <div class="bottom">
            <p>Copyright © 2020 All rights reserved</p>
        </div>
    </footer>

</body>

</html>