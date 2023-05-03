<?php
session_start();
if (!isset($_SESSION["user"])) {
   header("Location: login.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css"
    integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">
  <script src="response.js" defer></script>
    <script src="app.js" defer></script>

  <title>User Dashboard</title>

  <style>
    @import url("https://fonts.googleapis.com/css2?family=Fira+Code:wght@400;500;600&family=Poppins:wght@200;300&display=swap");

    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: "Poppins", sans-serif;
    }

    .container {
      --light-color: #fff;
      height: 600px;
      width: 1500px;
      background: var(--light-color);
      position: fixed;
      bottom: 50px;
      right: 100px;

    }

    .chat-header {
      height: 60px;
      display: flex;
      align-items: center;
      padding: 0px 30px;
      background-color: #143A52;
      color: var(--light-color);
      font-size: 1.5rem;
    }

    .chat-header .logo {
      height: 35px;
      width: 35px;
      box-shadow: 0px 0px 10px 0px black;
    }

    .chat-header img {
      height: 100%;
      width: 100%;
    }

    .chat-header .title {

      color: #fff;
    }

    .chat-body {
      height: 400px;
      display: flex;
      flex-direction: column;
      padding: 8px 10px;
      align-items: flex-end;
      overflow-y: auto;
    }

    .chat-input {
      height: 60px;
      display: flex;
      align-items: center;
      border-top: 1px solid #ccc;
    }

    .input-sec {
      flex: 9;
    }

    .send {
      flex: 1;
      padding-right: 4px;
    }

    #txtInput {
      line-height: 30px;
      padding: 8px 10px;
      border: none;
      outline: none;
      caret-color: black;
      font-size: 1rem;
      width: 100%;
    }

    .chatbot-message,
    .user-message {
      padding: 8px;
      background: #ccc;
      margin: 5px;
      width: max-content;
      border-radius: 10px 3px 10px 10px;
    }

    .chatbot-message {
      background: #143A52;
      color: var(--light-color);
      align-self: flex-start;
      border-radius: 10px 10px 3px 10px;
    }
  </style>

</head>

<body>


  <!-- slideshow start -->
  <section>

    <header style="background-color:#143A52;">

      <link rel="icon" type="image/x-icon" href="images/tc_logo.jpg">

      <img src="images/tc-logo.png" style="width: 8%; height: 100%;background-color:#fff">

      <span class="sign"><a href="logout.php" onmouseover="this.style.color = '#C8D6DF'"
          onmouseout="this.style.color = '#fff'">Sign Out</a></span>

      <span class="sign"><a href="index.php" onmouseover="this.style.color = '#C8D6DF'"
          onmouseout="this.style.color = '#fff'">Home</a></span>

      <span class="sign"><a href="#" onmouseover="this.style.color = '#fff'" onmouseout="this.style.color = '#fff'"
          style="pointer-events: none;">Tech Con Consulting
          Portal&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Welcome
          to User Dashboard</a></span>



    </header>
  </section>
  <section>
    <div class="section">
      <div class="container">



        <div class="content-section">

          <div class="content">

            <div class="container">
              <div class="chat-header">
                <div class="title">Chat With Us</div>
              </div>
              <div class="chat-body"></div>
              <div class="chat-input">
                <div class="input-sec">
                  <input type="text" id="txtInput" placeholder="Type here" autofocus />
                </div>
                <div class="send">
                  <img src="send.png" alt="send" />
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>
  </section>


</body>

</html>