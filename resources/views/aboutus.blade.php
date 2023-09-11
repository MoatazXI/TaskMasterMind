<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>About Us</title>
        <link rel="icon" href="{{URL ('/Images/tab-icon.png') }}"/>
        @vite(['resources/css/aboutus.css'])

</head>

<body>

    <!----oabout us--->

    <section class="about">
        <div class="main">
            <img src="{{ URL('/Images/Checklist-bro.png') }}">
            <div class="all-text">
                <h4>About Us</h4>
                <h1>A to-do list you’d actually use.</h1>
                <p>With award winning design and powerful features, Task MasterMind is the to-do list you would actually
                    stick to. Designed to help you get organized, achieve your goals and never forget a thing.</p>

            </div>
        </div>
    </section>
     <!-- End about us-->


    <div class="container">
        <h3>Our Team</h3>
    </div>

    <!----ourteam--->

    <section class="ourteam" id="ourteam">

        <div class="container">
            <div class="card">

                <div class="imgBx">
                    <img src="{{ URL('/Images/person4.png') }}" alt="">
                </div>
                <div class="contentBx">
                    <h4>Ahmed Diaa</h4>
                    <h5>Frontend developer</h5>
                </div>
            </div>

            <div class="card">

                <div class="imgBx">
                    <img src="{{ URL('/Images/person3.png') }}" alt="">
                </div>
                <div class="contentBx">
                    <h4>Ahmed Adel</h4>
                    <h5>Designer</h5>
                </div>
            </div>

            <div class="card">

                <div class="imgBx">
                    <img src="{{ URL('/Images/person4.png') }}" alt="">
                </div>
                <div class="contentBx">
                    <h4>Ahmed Osman</h4>
                    <h5>Software engineering</h5>

                </div>
            </div>

            <div class="card">

                <div class="imgBx">
                    <img src="{{ URL('/Images/person3.png') }}" alt="">
                </div>
                <div class="contentBx">
                    <h4>Moataz Mohammed</h4>
                    <h5>Backend developer</h5>
                </div>
            </div>

            <div class="card">

                <div class="imgBx">
                    <img src="{{ URL('/Images/person4.png') }}" alt="">
                </div>
                <div class="contentBx">
                    <h4>Kariem Hatem</h4>
                    <h5>Frontend developer</h5>
                </div>
            </div>

            <div class="card">

                <div class="imgBx">
                    <img src="{{ URL('/Images/person3.png') }}" alt="">
                </div>
                <div class="contentBx">
                    <h4>Abdelrahman Saad</h4>
                    <h5>Designer</h5>
                </div>
            </div>
        </div>

    </section>
     <!-- End ourteam -->

</body>

</html>
