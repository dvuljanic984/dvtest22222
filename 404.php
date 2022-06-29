<!doctype html>
<html lang="en">
  <head>
    
    <meta charset="utf-8">
    <title>Page Not Found :(</title>
    <style>

      * {
        box-sizing: border-box;
      }

      ::-moz-selection {
        background: #b3d4fc;
        text-shadow: none;
      }

      ::selection {
        background: #b3d4fc;
        text-shadow: none;
      }

      html {
        font-size: 20px;
        line-height: 1.4;
        color: #737373;
        background: #f0f0f0;
        -webkit-text-size-adjust: 100%;
        -ms-text-size-adjust: 100%;
      }

      html,
      input {
        font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
        height: 100%;
      }

      body {
        /*max-width: 500px;*/
        padding: 30px 20px 50px;
        height: 100%;
        margin: 0 auto;
        box-shadow: 0 1px 10px #a7a7a7, inset 0 1px 0 #fff;
        background: #fcfcfc url(/images/404/bg.jpg) no-repeat center;
        -webkit-background-size: 100%;
        background-size: 100%;
      }

      h1 {
        margin: 0 10px;
        font-size: 50px;
        text-align: center;
      }

      h1 span {
        color: #bbb;
      }

      h3 {
        margin: 1.5em 0 0.5em;
      }

      p {
        margin: 1em 0;
      }

      ul {
        padding: 0 0 0 40px;
        margin: 1em 0;
      }

      .container {
        max-width: 380px;
        margin: 0 auto;
      }

      /* google search */

      #goog-fixurl ul {
        list-style: none;
        padding: 0;
        margin: 0;
      }

      #goog-fixurl form {
        margin: 0;
      }

      #goog-wm-qt,
      #goog-wm-sb {
        border: 1px solid #bbb;
        font-size: 16px;
        line-height: normal;
        vertical-align: top;
        color: #444;
        border-radius: 2px;
      }

      #goog-wm-qt {
        width: 220px;
        height: 20px;
        padding: 5px;
        margin: 5px 10px 0 0;
        box-shadow: inset 0 1px 1px #ccc;
      }

      #goog-wm-sb {
        display: inline-block;
        height: 32px;
        padding: 0 10px;
        margin: 5px 0 0;
        white-space: nowrap;
        cursor: pointer;
        background-color: #f5f5f5;
        background-image: -webkit-linear-gradient(rgba(255,255,255,0), #f1f1f1);
        background-image: -moz-linear-gradient(rgba(255,255,255,0), #f1f1f1);
        background-image: -ms-linear-gradient(rgba(255,255,255,0), #f1f1f1);
        background-image: -o-linear-gradient(rgba(255,255,255,0), #f1f1f1);
        -webkit-appearance: none;
        -moz-appearance: none;
        appearance: none;
      }

      #goog-wm-sb:hover,
      #goog-wm-sb:focus {
        border-color: #aaa;
        box-shadow: 0 1px 1px rgba(0, 0, 0, 0.1);
        background-color: #f8f8f8;
      }

      #goog-wm-qt:hover,
      #goog-wm-qt:focus {
        border-color: #105cb6;
        outline: 0;
        color: #222;
      }

      input::-moz-focus-inner {
        padding: 0;
        border: 0;
      }

      img {
        max-width: 100%;
      }

      .clouds {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 50%;
        transition: all 30s linear;
      }

      .clouds-blue {
        background: url(/images/404/clouds_blue.png) repeat-x left;
        animation: cloudMoveRight 180s linear infinite alternate;
        z-index:5;
      }

      .clouds-gray {
        background: url(/images/404/clouds_gray.png) repeat-x right;
        animation: cloudMoveLeft 240s linear infinite alternate;
        z-index:1;
      }

      .hills {
        position: absolute;
        top: 30%;
        width: 100%;
        z-index:2;
      }

      body {
        max-width: 100%;
        overflow: hidden;
        font-family: "Open Sans";
      }

      .nature {
        position: absolute;
        bottom: -10px;
        z-index: 2;
        width: 100%;
        z-index: 3;
      }

      .four-o-four {
        position: absolute;
        top: 37%;
        text-align: center;
        width: 100%;
        z-index: 2;
        transform: translateY(10px);
        animation: hover 5s ease-in-out infinite alternate;
      }

      .message {
        position: absolute;
        top: 15%;
        z-index: 10;
        width: 100%;
        text-align: center;
      }

      .message h1 {
        color: #033;
        font-weight: 800;
      }

      .message p {
        color: #808080;
        font-weight: 300;
        margin: 0;
      }

      .back-sign {
        position: absolute;
        bottom: 50px;
        left: 35%;
        z-index: 10;
      }

      .back-sign img.small-grass {
        position: absolute;
        bottom: -5px;
        left: 25%;
      }

      .back-sign a{
        display: block;
      }

      .back-sign:hover a{
        transform: rotate(-7.5deg);
        transform-origin: 60px bottom;
      }

      .kojot {
        width: 110px;
        position: absolute;
        bottom: 40px;
        left: 46%;
        z-index: 65;
      }

      @keyframes cloudMoveLeft {
        to {
          background-position: -5000px center;
        }
      }
      @keyframes cloudMoveRight {
        to {
          background-position: 5000px center;
        }
      }

      @keyframes hover {
        to {
          transform: translateY(-10px);
        }
      }

    </style>
  </head>
  <body class="404">
  <jdoc:include type="debug"/>
  <div class="message">
    <h1>Sorkač!</h1>
    <p>Došlo je do 404 greške.</p>
    <p>Tražena stranica nije pronađena.</p>
  </div>
  <div class="clouds clouds-blue"></div>
  <div class="clouds clouds-gray"></div>
  <div class="hills">
    <img src="/images/404/hills.png" alt="">
  </div>
  <div class="nature">
    <img src="/images/404/nature.png" alt="">
  </div>
  <div class="four-o-four">
    <img src="/images/404/404.png" alt="">
  </div>
  <div class="back-sign">
    <a href="/">
      <img src="/images/404/back-sign2.png" alt="">
    </a>
    <img src="/images/404/small_grass.png" alt="" class="small-grass">
  </div>
  <div class="container">
  </div>
  <div class="kojot">
    <img src="/images/404/coyote.png">
  </div>

  </body>
</html>
