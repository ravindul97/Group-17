<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Chat Bot</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins&display=swap"
      rel="stylesheet"
    />
    <style>
      body {
        margin: 0;
        padding: 0;
        width: 100%;
        height: 100vh;
        overflow: hidden;
        position: relative;
        background: -webkit-linear-gradient(left, #09012b, #048d10);
      }
      .box {
        width: 490px;
        height: 350px;
        box-shadow: 5px 5px 20px #000;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        border-radius: 20px;
      }
      .top {
        width: 100%;
        height: 80px;
        background: rgb(10, 8, 117);
        border-top-left-radius: 20px;
        border-top-right-radius: 20px;
      }
      .top h1 {
        margin: 0;
        font-size: 30px;
        color: white;
        text-align: center;
        padding-top: 20px;
        font-family: "Poppins", sans-serif;
      }
      .ans {
        width: 100%;
        height: 150px;
        background: green;
      }
      .ans .chat {
        width: 100%;
      }
      .ans .chat h2 {
        margin: 0;
        font-size: 30px;
        color: rgb(211, 245, 58);
        padding: 30px 20px;
        text-align: center;
        font-family: "Poppins", sans-serif;
      }
      .ans .chat p {
        margin: 0;
        height: 30px;
        font-size: 15px;
        color: white;
        text-align: center;
        background-color: green;
        font-weight: 600;
        letter-spacing: 0.04em;
        font-family: "Poppins", sans-serif;
      }
      .input {
        height: 100%;
        width: 489px;
        overflow: hidden;
      }
      .input {
        width: 100%;
        height: 110px;
        outline: none;
        border: none;
        padding-left: 4px;
        padding-top: 0;
        background: rgb(4, 10, 65);
      }
      .input input {
        width: 90%;
        height: 80px;
        outline: none;
        border: none;
        border-radius: 49px;
        padding-left: 15px;
        padding-top: 10;
        position: absolute;
        bottom: 6%;
        left: 3%;
        font-size: 20px;
        background: rgb(186, 189, 216);
        font-family: "Poppins", sans-serif;
        text-align: center;
      }
      .img {
        position: absolute;
        bottom: 1%;
        left: 1%;
      }
      .chatbotimg {
        width: 40%;
        height: 75%;
      }
      .btnclose {
        position: absolute;
        right: 2%;
        top: 2%;
      }
      .btn {
        background-color: #09012b;
        color: goldenrod;
        width: 80px;
        height: 45px;
        border: none;
        border-radius: 20px;
        font-size: 18px;
        font-weight: bold;
        font-family: "Poppins", sans-serif;
        cursor: pointer;
      }
    </style>
  </head>
  <body>
    <div class="btnclose">
      <a href="main.php">
        <button class="btn" value="Close">Close</button>
      </a>
    </div>
    <div class="box">
      <div style="text-align: center" class="top">
        <h1>Ask me a question !</h1>
      </div>
      <div class="ans">
        <div class="chat">
          <h2>Answers Are Below</h2>
          <p id="chatLog">I'm here to answer you</p>
        </div>
      </div>
      <div class="input">
        <input
          type="text"
          id="userBox"
          onkeydown="if(event.keyCode == 13){ talk() }"
          placeholder="Type your question here"
        />
      </div>
    </div>
    <div class="img">
      <img src="chatbot.svg" alt="image" class="chatbotimg" />
    </div>

    <script>
      function talk() {
        var know = {
          Hi: "Hello How can I help you",
          hi: "Hello How can I help you",
          "How Are You?": "Great !",
          Bye: "Have A Nice Day !",
          bye: "Have A Nice Day !",
          Hello: "Hi , Whats Up",
          hello: "Hi , Whats Up",
          "what is explore thambapanni":
            "It's a Tourisum website based on srilanka",
          "How can I plan a trip":
            "You can select any of our amazing package as you wish",
          "how can I plan a trip":
            "You can select any of our amazing package as you wish",
          "How to plan a trip":
            "You can select any of our amazing package as you wish",
          "how to plan a trip":
            "You can select any of our amazing package as you wish",
          "Contact details": "Visit About page for contact details",
          "Contact details please": "Visit About page for contact details",
          "contact details please": "Visit About page for contact details",
          "contact details": "Visit About page for contact details",
          "What are the packages you have":
            "You can visit our packages page for see our wonderful packages",
          "what are the packages you have":
            "You can visit our packages page for see our wonderful packages",
          "What are the packages":
            "You can visit our packages page for see our wonderful packages",
          "what are the packages":
            "You can visit our packages page for see our wonderful packages",
          "packages you have":
            "You can visit our packages page for see our wonderful packages",
          "Packages you have":
            "You can visit our packages page for see our wonderful packages",
          packages:
            "You can visit our packages page for see our wonderful packages",
          Packages:
            "You can visit our packages page for see our wonderful packages",
          "How much it cost to travel":
            "You can select a package as your budget",
          "how much it cost to travel":
            "You can select a package as your budget",
          "cost to travel": "You can select a package as your budget",
          "Cost to travel": "You can select a package as your budget",
          "How can I plan my trip":
            "You can select a package as your preference",
          "how can I plan my trip": "Select a package as your preference",
          "Do you pick me from my place ?":
            "Yes we are. contact us for more info.",
          "do you pick me from my place ?":
            "Yes we are. contact us for more info.",
          "Do you pick me from my place":
            "Yes we are. contact us for more info.",
          "do you pick me from my place":
            "Yes we are. contact us for more info.",
          "How to pay for my trip ?":
            "You can do online transfers or pay via visa cards",
          "how to pay for my trip ?":
            "You can do online transfers or pay via visa cards",
          "How to pay for my trip ":
            "You can do online transfers or pay via visa cards",
          "how to pay for my trip":
            "You can do online transfers or pay via visa cards",
          "Payment methods":
            "You can do online transfers or pay via visa cards",
          "payment methods":
            "You can do online transfers or pay via visa cards",
          "How to pay ?": "You can do online transfers or pay via visa cards",
          "How to pay": "You can do online transfers or pay via visa cards",
          "how to pay ?": "You can do online transfers or pay via visa cards",
          "how to pay": "You can do online transfers or pay via visa cards",
          "any package to visit kandy ?":
            "Yes you can select Cool Kandy package",
          "Any package to visit kandy ?":
            "Yes you can select Cool Kandy package",
          "any package to visit kandy": "Yes you can select Cool Kandy package",
          "Any package to visit kandy": "Yes you can select Cool Kandy package",
          "any package to visit jaffna ?":
            "Yes you can select Sunny Jaffna package",
          "Any package to visit jaffna ?":
            "Yes you can select Sunny Jaffna package",
          "any package to visit jaffna":
            "Yes you can select Sunny Jaffna package",
          "Any package to visit jaffna":
            "Yes you can select Sunny Jaffna package",
          "any package to visit galle ?":
            "Yes you can select Amaizing Down South package",
          "Any package to visit galle ?":
            "Yes you can selectAmaizing Down South package",
          "any package to visit galle":
            "Yes you can select Amaizing Down South package",
          "Any package to visit galle":
            "Yes you can select Amaizing Down South package",
          "any package to visit mathara ?":
            "Yes you can select Amaizing Down South package",
          "Any package to visit mathara ?":
            "Yes you can selectAmaizing Down South package",
          "any package to visit mathara":
            "Yes you can select Amaizing Down South package",
          "Any package to visit mathara":
            "Yes you can select Amaizing Down South package",
          "any package to visit hambanthota ?":
            "Yes you can select Amaizing Down South package",
          "Any package to visit hambanthota ?":
            "Yes you can selectAmaizing Down South package",
          "any package to visit hambanthota":
            "Yes you can select Amaizing Down South package",
          "Any package to visit hambanthota":
            "Yes you can select Amaizing Down South package",
          "any package to visit trincomale ?":
            "Yes you can select Thrilling Trinco package",
          "Any package to visit trincomale ?":
            "Yes you can select Thrilling Trinco package",
          "any package to visit trincomale":
            "Yes you can select Thrilling Trinco package",
          "Any package to visit trincomale":
            "Yes you can select Thrilling Trinco package",
          "any package to visit anurathapura ?":
            "Yes you can select Ancient Anuradhapura package",
          "Any package to visit anurathapura ?":
            "Yes you can select Ancient Anuradhapura package",
          "any package to visit anurathapura":
            "Yes you can select Ancient Anuradhapura package",
          "Any package to visit anurathapura":
            "Yes you can select Ancient Anuradhapura package",
        };
        var user = document.getElementById("userBox").value;
        document.getElementById("chatLog").innerHTML = user + "<br>";
        if (user in know) {
          document.getElementById("chatLog").innerHTML = know[user] + "<br>";
        } else {
          document.getElementById("chatLog").innerHTML =
            "I do not understand . Try different question";
        }
      }
    </script>
  </body>
</html>
