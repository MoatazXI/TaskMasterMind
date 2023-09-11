<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    @vite(['resources/css/contactus.css'])
    <link rel="icon" href="{{URL ('/Images/tab-icon.png') }}"/>

    <title>Contact Us</title>
  </head>
  <body>
    <div class="container">
      <form action="{{ route('contacts.send') }}" method="POST">
        @csrf
        @method('POST')
        <div class="content">
          <div class="content-txt">
            <h1>Our Team Are Here To help</h1>
            <span
              >if you have any problem
              <h3>Contact Us</h3></span
            >
          </div>
          <div class="content-inputs">
            <div class="name">
              <input type="text" name="about" id="about" required />
              <label for="about">About</label>
            </div>
            <div class="email">
              <input type="email" name="email" id="email" required />
              <label for="email">Email</label>
            </div>
            <textarea
              name="message"
              id="message"
              cols="51"
              rows="7"
              placeholder="Message"
              required
            ></textarea>
            <button>send</button>
          </div>
        </div>
      </form>
    </div>
  </body>
</html>
