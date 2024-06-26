<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>School Menagement</title>
    <script src="https://kit.fontawesome.com/b9304c053b.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: "Noto Sans", sans-serif;
            
            /* font-family: "Playwrite NG Modern", cursive; */

        }

        .header {
            background-color: #a832a0;
            color: white;
            padding: 20px 0;
            position: fixed;
            top: 0;
            left: 0;
            z-index: 1000;
            width: 100%;
        }

        .user {
            margin-right: 15px;
        }

        .container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            max-width: 1400px;
            margin: 0 auto;
            padding: 0 20px;
        }



        .logo a {
            color: white;
            text-decoration: none;
            font-size: 24px;
            font-weight: bold;
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

        .dropdown-menu {
            list-style: none;
        }

        .nav-item a {
            color: white;
            text-decoration: none;
            font-size: 18px;
            padding: 20px;
            display: block;
        }

        .dropdown-menu {
            display: none;
            position: absolute;
            background-color: #a832a0;
            top: 100%;
            left: 0;
            width: 240px;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
        }

        .dropdown-item a {
            padding: 10px;
            text-decoration: none;
            display: block;
        }

        .nav-item:hover .dropdown-menu {
            display: block;
        }

        .menu-toggle {
            display: none;
            flex-direction: column;
            cursor: pointer;
        }

        .menu-toggle span {
            height: 3px;
            width: 25px;
            background: white;
            margin: 4px 0;
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
            height: 600px;
            background-color: #bf0cb3;
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

        i.fa-solid.fa-flask {
            font-size: 100px;
            margin-top: 80px;
        }

        .features-section {
            display: flex;
            justify-content: space-around;
            align-items: flex-start;
            padding: 40px 20px;
            text-align: center;
        }

        .feature {
            flex: 1;
            margin: 0 10px;
            padding: 20px;
        }

        .feature h2 {
            margin-bottom: 20px;
            font-size: 1.5em;
            color: #333;
        }

        .feature p {
            font-size: 20px;
            color: #666;
            line-height: 1.6;
        }

        .feature h2 {
            margin-top: 40px;
        }

        i.fa-solid.fa-code {
            font-size: 90px;
            color: #777777;
        }

        i.fa-solid.fa-terminal {
            font-size: 90px;
            color: #777777;
        }

        i.fa-solid.fa-bolt {
            font-size: 90px;
            color: #777777;
        }

        .line {
            height: 5px;
            width: 87px;
            background-color: #e1e1e1;
            margin: auto;
            margin-top: 20px;
        }

        .wrapper {
            margin: auto;
            text-align: center;
            line-height: 40px;
            height: 180px;


        }

        .wrapper h3 {
            color: #7b6c6cdb;
            font-size: 20px;
        }

        .wrapper h1 {
            margin-top: 40px;
        }


        .logo img {
            width: 260px;
        }

        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');


        footer {
            background: #bf0cb3;
            width: 100%;

        }

        footer::before {
            content: '';
            position: absolute;
            left: 0;
            top: 100px;
            height: 1px;
            width: 100%;
            background: #AFAFB6;
        }

        footer .content {
            max-width: 1250px;
            margin: auto;
            padding: 30px 40px 40px 40px;
        }

        footer .content .top {
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-bottom: 50px;
        }

        .content .top .logo-details {
            color: #fff;
            font-size: 30px;
        }

        .content .top .media-icons {
            display: flex;
        }

        .content .top .media-icons a {
            height: 40px;
            width: 40px;
            margin: 0 8px;
            border-radius: 50%;
            text-align: center;
            line-height: 40px;
            color: #fff;
            font-size: 17px;
            text-decoration: none;
            transition: all 0.4s ease;
        }

        .top .media-icons a:nth-child(1) {
            background: #4267B2;
        }

        .top .media-icons a:nth-child(1):hover {
            color: #4267B2;
            background: #fff;
        }

        .top .media-icons a:nth-child(2) {
            background: #1DA1F2;
        }

        .top .media-icons a:nth-child(2):hover {
            color: #1DA1F2;
            background: #fff;
        }

        .top .media-icons a:nth-child(3) {
            background: #E1306C;
        }

        .top .media-icons a:nth-child(3):hover {
            color: #E1306C;
            background: #fff;
        }

        .top .media-icons a:nth-child(4) {
            background: #0077B5;
        }

        .top .media-icons a:nth-child(4):hover {
            color: #0077B5;
            background: #fff;
        }

        .top .media-icons a:nth-child(5) {
            background: #FF0000;
        }

        .top .media-icons a:nth-child(5):hover {
            color: #FF0000;
            background: #fff;
        }

        footer .content .link-boxes {
            width: 100%;
            display: flex;
            justify-content: space-between;
        }

        footer .content .link-boxes .box {
            width: calc(100% / 5 - 10px);
        }

        .content .link-boxes .box .link_name {
            color: #fff;
            font-size: 18px;
            font-weight: 400;
            margin-bottom: 10px;
            position: relative;
        }

        .link-boxes .box .link_name::before {
            content: '';
            position: absolute;
            left: 0;
            bottom: -2px;
            height: 2px;
            width: 35px;
            background: #fff;
        }

        .content .link-boxes .box li {
            margin: 6px 0;
            list-style: none;
        }

        .content .link-boxes .box li a {
            color: #fff;
            font-size: 14px;
            font-weight: 400;
            text-decoration: none;
            opacity: 0.8;
            transition: all 0.4s ease
        }

        .content .link-boxes .box li a:hover {
            opacity: 1;
            text-decoration: underline;
        }

        .content .link-boxes .input-box {
            margin-right: 55px;
        }

        .link-boxes .input-box input {
            height: 40px;
            width: calc(100% + 55px);
            outline: none;
            border: 2px solid #AFAFB6;
            border-radius: 4px;
            padding: 0 15px;
            font-size: 15px;
            margin-top: 5px;
        }

        .link-boxes .input-box input::placeholder {
            color: #AFAFB6;
            font-size: 16px;
        }

        .link-boxes .input-box input[type="button"] {
            background: #fff;
            color: #140B5C;
            border: none;
            font-size: 18px;
            font-weight: 500;
            margin: 4px 0;
            opacity: 0.8;
            cursor: pointer;
            transition: all 0.4s ease;
        }

        .input-box input[type="button"]:hover {
            opacity: 1;
        }

        footer .bottom-details {
            width: 100%;
            background: #bf0cb3;
        }

        footer .bottom-details .bottom_text {
            max-width: 1250px;
            margin: auto;
            padding: 20px 40px;
            display: flex;
            justify-content: space-between;
        }

        .bottom-details .bottom_text span,
        .bottom-details .bottom_text a {
            font-size: 14px;
            font-weight: 300;
            color: #fff;
            opacity: 0.8;
            text-decoration: none;
        }

        .bottom-details .bottom_text a:hover {
            opacity: 1;
            text-decoration: underline;
        }

        .bottom-details .bottom_text a {
            margin-right: 10px;
        }

        @media (max-width: 900px) {
            footer .content .link-boxes {
                flex-wrap: wrap;
            }

            footer .content .link-boxes .input-box {
                width: 40%;
                margin-top: 10px;
            }
        }

        @media (max-width: 700px) {
            footer {
                position: relative;
            }

            .content .top .logo-details {
                font-size: 26px;
            }

            .content .top .media-icons a {
                height: 35px;
                width: 35px;
                font-size: 14px;
                line-height: 35px;
            }

            footer .content .link-boxes .box {
                width: calc(100% / 3 - 10px);
            }

            footer .content .link-boxes .input-box {
                width: 60%;
            }

            .bottom-details .bottom_text span,
            .bottom-details .bottom_text a {
                font-size: 12px;
            }
        }

        @media (max-width: 520px) {
            footer::before {
                top: 145px;
            }

            footer .content .top {
                flex-direction: column;
            }

            .content .top .media-icons {
                margin-top: 16px;
            }

            footer .content .link-boxes .box {
                width: calc(100% / 2 - 10px);
            }

            footer .content .link-boxes .input-box {
                width: 100%;
            }
        }


        /* Import Google font - Poppins */
        @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap");

        ::-webkit-scrollbar {
            height: 8px;
        }

        ::-webkit-scrollbar-thumb {
            background: #cdcdcd;
            display: none;
        }


        .container11 {
            display: flex;
            gap: 12px;
            width: 100%;
            border-radius: 12px;
            padding: 30px;
            scroll-snap-type: x mandatory;
            overflow-x: scroll;
            scroll-padding: 30px;
        }

        .container11 .card {
            display: flex;
            flex: 0 0 100%;
            flex-direction: column;
            align-items: center;
            padding: 30px;
            border-radius: 12px;
            background: #fff;
            scroll-snap-align: start;
            box-shadow: 0 15px 25px rgba(0, 0, 0, 0.1);
        }

        .card .image {
            height: 150px;
            width: 150px;
            padding: 4px;
            background: #a832a0;
            border-radius: 50%;
        }

        .image img {
            height: 100%;
            width: 100%;
            object-fit: cover;
            border-radius: 50%;
            border: 5px solid #fff;
        }

        .card h2 {
            margin-top: 25px;
            color: #333;
            font-size: 22px;
            font-weight: 600;
        }

        .card p {
            margin-top: 4px;
            font-size: 18px;
            font-weight: 400;
            color: #333;
            text-align: center;
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

        .show-nav .nav {
            display: flex;
        }
    </style>
</head>

<body>
    <header class="header">
        <div class="container">
            <div class="logo">
                <a href="#"><img src="https://ttcrobotronics.com/assets/images/ttc-robotronics-logo.png" alt=""></a>
            </div>
            <nav class="nav">
                <ul class="nav-list">
                    <li class="nav-item"><a href="#">Home</a></li>
                    <li class="nav-item dropdown">
                        <a href="#">Pages</a>
                        <ul class="dropdown-menu">
                            <li class="dropdown-item"><a href="#">About</a></li>
                            <li class="dropdown-item"><a href="#">Account</a></li>
                            <li class="dropdown-item"><a href="#">Mambership Levels</a></li>

                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a href="#">Courses</a>
                        <ul class="dropdown-menu">
                            <li class="dropdown-item"><a href="#">Landing Page</a></li>
                            <li class="dropdown-item"><a href="#">Programs</a></li>
                            <li class="dropdown-item"><a href="#">All Teacher</a></li>
                            <li class="dropdown-item"><a href="#">Become an instructor</a></li>
                        </ul>
                    </li>
                    <li class="nav-item"><a href="#">Events</a></li>
                    <li class="nav-item"><a href="#">Blog</a></li>
                    <li class="nav-item"><a href="<?php echo e(route('contect.show')); ?>">Contact us</a></li>
                    <li class="nav-item"><a href="<?php echo e(route('register.show')); ?>"><i class="fa-solid fa-user user"></i>Sign up</a></li>
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
            <div class="icon">
                <a href="#"> <i class="fa-solid fa-flask"></i></a>
            </div>
            <h1>Welcome to TTC Robotronics</h1>
            <p>Lorem ipsum dolor sit amet, natum bonorum expetendis usu ut. Eum impetus offendit disputationi eu, at vim aliquip lucilius praesent. Alia laudem antiopam te ius, sed ad munere integre, ubique facete sapientem nam ut.</p>
        </div>
    </section>
    <section class="features-section">
        <div class="feature">
            <div class="icon">
                <a href="#"> <i class="fa-solid fa-code"></i></a>
            </div>
            <h2>Valid HTML5</h2>
            <p>Lorem ipsum dolor sit amet, mutat graeco volumus ad eam, singulis patrioque comprehensam nam no. Mei cu dicat voluptaria volumus.</p>
        </div>
        <div class="feature">
            <div class="icon">
                <a href="#"> <i class="fa-solid fa-terminal"></i></a>
            </div>
            <h2>Responsive</h2>
            <p>Lorem ipsum dolor sit amet, mutat graeco volumus ad eam, singulis patrioque comprehensam nam no. Mei cu dicat voluptaria volumus.</p>
        </div>
        <div class="feature">
            <div class="icon">
                <a href="#"> <i class="fa-solid fa-bolt"></i></a>
            </div>
            <h2>Customizable</h2>
            <p>Lorem ipsum dolor sit amet, mutat graeco volumus ad eam, singulis patrioque comprehensam nam no. Mei cu dicat voluptaria volumus.</p>
        </div>
    </section>


    <div class="wrapper">
        <h1>Our Team</h1>
        <h3>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet consectetur, <br> adipisci velit, sed quia non numquam.</h3>

        <div class="line"></div>
    </div>
    <section class="container11">
        <div class="card">
            <div class="image">
                <img src="<?php echo e(asset('images/img1.jpg')); ?>" alt="" />
            </div>
            <h2>Shree</h2>
            <h5>Digital Marketing Analyst</h5>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elite.</p>
        </div>
        <div class="card">
            <div class="image">
                <img src="<?php echo e(asset('images/img2.jpg')); ?>" alt="" />
            </div>
            <h2>Ajeet Kumar Verma</h2>
            <h5>Website Developer</h5>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elite.</p>
        </div>
        <div class="card">
            <div class="image">
                <img src="<?php echo e(asset('images/img3.jpg')); ?>" alt="" />
            </div>
            <h2>Sakshi Singh</h2>
            <h5>IT Manager</h5>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elite.</p>
        </div>
        <div class="card">
            <div class="image">
                <img src="<?php echo e(asset('images/img4.jpg')); ?>" alt="" />
            </div>
            <h2>Rachit ranjan Srivastava</h2>
            <h5>Software Engineer</h5>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elite.</p>
        </div>
    </section>






    



    <footer>
        <div class="content">
            <div class="top">
                <div class="logo-details">
                    <i class="fab fa-slack"></i>
                    <span class="logo_name">CodingLab</span>
                </div>
                <div class="media-icons">
                    <a href="https://www.facebook.com/" target="_blank"><i class="fab fa-facebook-f"></i></a>
                    <a href="https://x.com/" target="_blank"><i class="fab fa-twitter"></i></a>
                    <a href="https://www.instagram.com/" target="_blank"><i class="fab fa-instagram"></i></a>
                    <a href="https://www.linkedin.com/" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                    <a href="https://www.youtube.com/" target="_blank"><i class="fab fa-youtube"></i></a>
                </div>
            </div>
            <div class="link-boxes">
                <ul class="box">
                    <li class="link_name">Company</li>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Contact us</a></li>
                    <li><a href="#">About us</a></li>
                    <li><a href="#">Get started</a></li>
                </ul>
                <ul class="box">
                    <li class="link_name">Services</li>
                    <li><a href="#">App design</a></li>
                    <li><a href="#">Web design</a></li>
                    <li><a href="#">Logo design</a></li>
                    <li><a href="#">Banner design</a></li>
                </ul>
                <ul class="box">
                    <li class="link_name">Account</li>
                    <li><a href="#">Profile</a></li>
                    <li><a href="#">My account</a></li>
                    <li><a href="#">Prefrences</a></li>
                    <li><a href="#">Purchase</a></li>
                </ul>
                <ul class="box">
                    <li class="link_name">Courses</li>
                    <li><a href="#">HTML & CSS</a></li>
                    <li><a href="#">JavaScript</a></li>
                    <li><a href="#">Photography</a></li>
                    <li><a href="#">Photoshop</a></li>
                </ul>
                <ul class="box input-box">
                    <li class="link_name">Subscribe</li>
                    <li><input type="text" placeholder="Enter your email"></li>
                    <li><input type="button" value="Subscribe"></li>
                </ul>
            </div>
        </div>
        <div class="bottom-details">
            <div class="bottom_text">
                <span class="copyright_text">Copyright © 2021 All rights reserved</span>
                <span class="policy_terms">
                    <a href="#">Privacy policy</a>
                    <a href="#">Terms & condition</a>
                </span>
            </div>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html><?php /**PATH D:\xampp\htdocs\School_Management\resources\views/welcome.blade.php ENDPATH**/ ?>