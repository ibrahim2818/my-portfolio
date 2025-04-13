<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>My Portfolio</title>
  <style>
    * {
      margin: 0;
      padding: 10;
      box-sizing: border-box;
    }

    html, body {
      height: 100%;
      background-color: rgb(11, 166, 244);
      font-family: Arial, sans-serif;
    }

    .container {
      display: flex;
      align-items: center;
      justify-content: space-between;
      padding: 40px;
      min-height: 100vh; /* Ensures full vertical height */
    }

    .image-side img {
      max-width: 100%;
      height: auto;
      border-radius: 30px;
      border: 1px solid #ccc;
      box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1);
    }

    .text-side {
      max-width: 50%;
      padding: 20px;
    }
    .button-row {
      display: flex;
      justify-content: right; /* center the buttons */
      gap: 20px; /* spacing between buttons */
      margin-top: 30px;
      margin-right: 30px;
    }

    .button-row button {
      padding: 12px 24px;
      font-size: 16px;
      border: none;
      border-radius: 8px;
      background-color: white;
      color: #0ba6f4;
      cursor: pointer;
      transition: background-color 0.3s;
    }

    .button-row button:hover {
      background-color: #e0f4ff;
    }
  </style>
</head>
<body>
<div class="button-row">
    <button onclick="window.location.href='{{ route('projects') }}'">Projects</button>
    <button onclick="window.location.href='{{ route('about') }}'">About Me</button>
  
  <button onclick="window.location.href='{{ route('contact') }}'">Contact</button>
</div>
<div class="container">
  <div class="image-side">
    <img src="{{ asset('\images\my.jpg') }}" alt="My image">
  </div>
  <div class="text-side">
    <h1>Ibrahim</h1>
    <p>
    I'm Md. Ibrahim, a passionate tech enthusiast and a third-year student of Internet of Things and Robotics Engineering at Bangabandhu Sheikh Mujibur Rahman Digital University. I specialize in building smart systems that bridge the gap between people and technology — from IoT-based home automation to gesture-controlled learning platforms. I aim to use my knowledge, creativity, and leadership skills to drive innovation and contribute to a better, smarter world.
    </p>
    <button>Learn More</button>
  </div>
</div>
</body>
</html>
