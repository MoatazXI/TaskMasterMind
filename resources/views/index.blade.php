<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Task Mastermind</title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="icon" href="{{URL ('/Images/tab-icon.png') }}"/>

    @vite(['resources/css/styles.css'])
  </head>
  <body>
    <!-- Start Header -->
    <header class="header">
      <div class="container">
        <img src="{{URL ('/Images/taskmastermind-logo.png') }}" alt=""  width="200px">
        <nav class="links">
          <ul>
            <li><a href="{{ route('index') }}">Home</a></li>
            <li><a href="{{ route('aboutus') }}">About Us</a></li>
            <li><a href="{{ route('contacts') }}">Contact Us</a></li>
            <li><a href="{{ route('login') }}" id="signin">Sign In</a></li>
            <li><a href="{{ route('register') }}" id="signup">Sign Up For Free</a></li>
          </ul>
        </nav>
      </div>
    </header>
    <!-- End Header -->

    <!-- Start Home -->
    <div class="home">
      <div class="container">
        <div class="intro-text">
          <h1>Stay Organized</h1>
          <p>
            An easy-to-use to do list website that offers a clean and minimalist
            interface, Is designed to be fast, reliable, and easy to use.
          </p>
          <div class="getstarted">
            <a href="{{ route('register') }}" class="btn">Get Started</a>
          </div>
        </div>
        <div class="intro-image">
          <img src="{{URL ('/Images/Bullet journal-rafiki.png') }}" alt="" />

        </div>
      </div>
    </div>
    <!-- End Home -->

    <!-- Start boostproductivity -->
    <div class="boostproductivity">
      <div class="container">
        <div class="left">
          <h1>Boost Productivity</h1>
          <p>
            With our to-do list website, you'll never forget a task again. Stay
            on top of your priorities and get things done faster
          </p>
        </div>
        <div class="image">

          <img src="{{URL ('/Images/Checklist-rafiki.png') }}" alt="" />
        </div>
      </div>
    </div>
    <!-- End Features -->

    <div class="stayfocused">
      <div class="container">
        <div class="image">
          <img src="{{URL ('/Images/newyear.png') }}" alt="" />
        </div>

        <div class="right">
          <h1>Stay Focused</h1>
          <p>
            Our to-do list website helps you prioritize your tasks and stay
            focused on what matters most
          </p>
        </div>
      </div>
    </div>


    <div class="footer">
      <div class="container">
        <div class="col1">

          <h1>
            TASK <br />
            MASTERMIND <br />
            <sub>2023</sub>
          </h1>
        </div>
        <div class="col2">
          <ul>
            <li><a href="{{ route('register') }}">get started</a></li>
            <li><a href="{{ route('contacts') }}">contact us</a></li>
            <li><a href="">about us</a></li>
          </ul>
        </div>
        <div class="col3">
          <ul>
            <li><a href="">linkedin</a></li>
            <li><a href="">facebook</a></li>
          </ul>
        </div>
        <div class="col4">
          <ul>
            <li><a href="">privacy policy</a></li>
            <li><a href="">Terms Of Services </a></li>
          </ul>
        </div>
      </div>
    </div>
  </body>
</html>
