<!DOCTYPE html>
<html lang="uz">
<head>
  <meta charset="UTF-8">
  <title>API havolalari</title>
  <style>
    html, body {
      margin: 0;
      padding: 0;
      height: 100%;
      font-family: sans-serif;
      color: white;
      overflow: hidden;
    }

    #particles-js {
      position: absolute;
      width: 100%;
      height: 100%;
      background: linear-gradient(#004e92, #000428);
      z-index: -1;
    }

    .content {
      position: relative;
      z-index: 1;
      height: 100%;
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      text-align: center;
    }

    h1 {
      font-size: 2.5rem;
      margin-bottom: 40px;
    }

    button {
      background-color: rgba(255, 255, 255, 0.1);
      border: 2px solid white;
      color: white;
      padding: 15px 30px;
      margin: 10px;
      font-size: 16px;
      border-radius: 12px;
      cursor: pointer;
      transition: 0.3s ease;
    }

    button:hover {
      background-color: rgba(255, 255, 255, 0.3);
      transform: scale(1.05);
    }
  </style>
</head>
<body>

  <!-- Particle background -->
  <div id="particles-js"></div>

  <div class="content">
    <h1>Ma'lumotlar sahifalari</h1>

    <button onclick="window.location.href='http://127.0.0.1:8000/api/users'">
      Foydalanuvchilarni ko‘rish
    </button>

    <button onclick="window.location.href='http://127.0.0.1:8000/api/posts'">
      Postlarni ko‘rish
    </button>
  </div>

  <!-- Particles.js CDN -->
  <script src="https://cdn.jsdelivr.net/npm/particles.js@2.0.0/particles.min.js"></script>
  <script>
    particlesJS("particles-js", {
      "particles": {
        "number": {
          "value": 80
        },
        "color": {
          "value": "#ffffff"
        },
        "shape": {
          "type": "circle"
        },
        "opacity": {
          "value": 0.5
        },
        "size": {
          "value": 3
        },
        "line_linked": {
          "enable": true,
          "distance": 150,
          "color": "#ffffff",
          "opacity": 0.4,
          "width": 1
        },
        "move": {
          "enable": true,
          "speed": 2
        }
      },
      "interactivity": {
        "events": {
          "onhover": {
            "enable": true,
            "mode": "grab"
          }
        }
      }
    });
  </script>

</body>
</html>

