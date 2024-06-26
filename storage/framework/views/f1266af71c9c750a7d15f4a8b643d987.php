<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Registration </title>
    <script src="https://kit.fontawesome.com/b9304c053b.js" crossorigin="anonymous"></script>

    <style>
        @import url('https://fonts.googleapis.com/css?family=Poppins:400,500,600,700&display=swap');

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: "Playwrite NG Modern", cursive;

        }

        body {
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            background: #4070f4;
        }

        .heading {
            display: flex;
            justify-content: space-between;
        }

        .heading i {
            font-size: 30px;
            color: black;
            font-weight: bold;
        }

        .wrapper {
            position: relative;
            max-width: 430px;
            width: 100%;
            background: #fff;
            padding: 34px;
            border-radius: 6px;
            box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
        }

        .wrapper h2 {
            position: relative;
            font-size: 22px;
            font-weight: 600;
            color: #333;
        }

        .wrapper h2::before {
            content: '';
            position: absolute;
            left: 0;
            bottom: 0;
            height: 3px;
            width: 28px;
            border-radius: 12px;
            background: #4070f4;
        }

        .wrapper form {
            margin-top: 30px;
        }

        .wrapper form .input-box {
            height: 52px;
            margin: 18px 0;
        }

        form .input-box input , select{
            height: 100%;
            width: 100%;
            outline: none;
            padding: 0 15px;
            font-size: 17px;
            font-weight: 400;
            color: #333;
            border: 1.5px solid #C7BEBE;
            border-bottom-width: 2.5px;
            border-radius: 6px;
            transition: all 0.3s ease;
        }

        .input-box input:focus,
        .input-box input:valid {
            border-color: #4070f4;
        }

        form .policy {
            display: flex;
            align-items: center;
        }

        form h3 {
            color: #707070;
            font-size: 14px;
            font-weight: 500;
            margin-left: 10px;
        }

        .input-box.button input {
            color: #fff;
            letter-spacing: 1px;
            border: none;
            background: #4070f4;
            cursor: pointer;
        }

        .input-box.button input:hover {
            background: #0e4bf1;
        }

        form .text h3 {
            color: #333;
            width: 100%;
            text-align: center;
        }

        form .text h3 a {
            color: #4070f4;
            text-decoration: none;
        }

        form .text h3 a:hover {
            text-decoration: underline;
        }
    </style>
</head>

<body>
    <div class="wrapper">
        <div class="heading">
            <h2>Registration</h2>
            <a href="<?php echo e(route('welcome')); ?>"><i class="fa-regular fa-circle-xmark"></i></a>

        </div>

        <form method="POST" action="<?php echo e(route('register.perform')); ?>">
            <?php echo csrf_field(); ?>
            <div class="input-box">
                <input type="text" placeholder="Enter your name" name="name" required>
            </div>
            <div class="input-box">
                <input type="text" placeholder="Enter your  email" name="email" required>
            </div>
            <div class="input-box">
                <select name="type_name" required>
                    <option value="" disabled selected>Type</option>
                    <option value="student">Student</option>
                    <option value="teacher">Teacher</option>
                    <option value="parents">Parents</option>
                </select>
            </div>
            <div class="input-box">
                <input type="password" placeholder="Create password" name="password" required>
            </div>
            <div class="input-box">
                <input type="password" placeholder="Confirm password" name="password_confirmation" required>
            </div>

            <div class="policy">
                <input type="checkbox">
                <h3>I accept all terms & condition</h3>
            </div>
            <div class="input-box button">
                <input type="Submit" value="Register Now">
            </div>
            <div class="text">
                <h3>Already have an account? <a href="<?php echo e(route('login')); ?>">Login now</a></h3>
            </div>

            <?php if($errors->any()): ?>
            <div class="alert alert-danger mt-3">
                <ul>
                    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li><?php echo e($error); ?></li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
            </div>
            <?php endif; ?>
            <?php if(session('success')): ?>
            <div class="alert alert-success mt-3">
                <?php echo e(session('success')); ?>

            </div>
            <?php endif; ?>
        </form>
    </div>
</body>

</html><?php /**PATH D:\xampp\htdocs\School_Management\resources\views/register.blade.php ENDPATH**/ ?>