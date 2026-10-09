
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Coming Soon</title>

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">

  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      min-height: 100vh;
      min-height: 100dvh;
      display: flex;
      justify-content: center;
      align-items: center;
      overflow: hidden;
      position: relative;
      font-family: 'Inter', sans-serif;
      color: #153c2b;
      background:
        radial-gradient(circle at 5% 5%, #e6f2df 0%, transparent 32%),
        radial-gradient(circle at 100% 100%, #dcebd4 0%, transparent 30%),
        #fcfdf9;
    }

    /* Decorative corner circles */
    .orb {
      position: absolute;
      width: 450px;
      height: 450px;
      border-radius: 50%;
      border: 1px solid rgba(65, 132, 83, 0.55);
      pointer-events: none;
    }

    .orb::before {
      content: "";
      position: absolute;
      inset: 20px;
      border-radius: 50%;
      background: linear-gradient(
        135deg,
        rgba(174, 211, 163, 0.18),
        transparent
      );
    }

    .orb-top {
      width: 600px;
      height: 600px;
      top: -390px;
      left: -220px;
    }

    .orb-bottom {
      width: 600px;
      height: 600px;
      right: -300px;
      bottom: -420px;
    }

    /* Main content */
    .coming-soon {
      position: relative;
      z-index: 2;
      width: 100%;
      max-width: 760px;
      padding: 35px 24px;
      text-align: center;
      animation: fadeIn 1s ease both;
    }

    /* Leaf-inspired icon */
    .brand-icon {
      width: 62px;
      height: 54px;
      position: relative;
      margin: 0 auto 35px;
    }

    .leaf {
      position: absolute;
      bottom: 7px;
      width: 29px;
      height: 42px;
      border-radius: 90% 10% 80% 15%;
      background: linear-gradient(145deg, #9bc99a, #28764e);
    }

    .leaf-left {
      left: 7px;
      transform: rotate(-43deg);
    }

    .leaf-right {
      right: 7px;
      transform: rotate(43deg) scaleX(-1);
      background: linear-gradient(145deg, #c0dcb0, #4d9560);
    }

    h1 {
      font-size: clamp(48px, 8vw, 94px);
      font-weight: 400;
      line-height: 1.05;
      letter-spacing: -5px;
      color: #102e22;
    }

    h1 span {
      display: block;
    }

    h1 .soon {
      margin-top: 5px;
      font-weight: 700;
      background: linear-gradient(100deg, #54a985, #77a94b);
      -webkit-background-clip: text;
      background-clip: text;
      -webkit-text-fill-color: transparent;
    }

    .description {
      margin-top: 28px;
      color: #71877b;
      font-size: clamp(16px, 2vw, 22px);
      line-height: 1.7;
      font-weight: 400;
    }

    /* Animated accent */
    .progress {
      width: 105px;
      height: 5px;
      margin: 35px auto 0;
      position: relative;
      border-radius: 20px;
      background: #e0eddb;
      overflow: hidden;
    }

    .progress span {
      display: block;
      width: 55%;
      height: 100%;
      border-radius: 20px;
      background: linear-gradient(90deg, #b5d8a4, #278e69);
      animation: progressMove 2s ease-in-out infinite alternate;
    }

    /* Subtle floating leaves */
    .decor-leaves {
      position: absolute;
      width: 140px;
      height: 140px;
      opacity: 0.55;
      filter: blur(1px);
      pointer-events: none;
    }

    .decor-leaves span {
      position: absolute;
      display: block;
      width: 35px;
      height: 65px;
      border-radius: 90% 5% 90% 5%;
      background: linear-gradient(135deg, #b5d3a8, #588664);
    }

    .decor-leaves span:nth-child(1) {
      top: 10px;
      left: 50px;
      transform: rotate(35deg);
    }

    .decor-leaves span:nth-child(2) {
      top: 50px;
      left: 80px;
      transform: rotate(75deg) scale(0.8);
    }

    .decor-leaves span:nth-child(3) {
      top: 55px;
      left: 25px;
      transform: rotate(-35deg) scale(0.9);
    }

    .leaves-top {
      top: -25px;
      right: -30px;
      transform: rotate(20deg);
    }

    .leaves-bottom {
      bottom: -25px;
      left: -35px;
      transform: rotate(190deg);
    }

    @keyframes fadeIn {
      from {
        opacity: 0;
        transform: translateY(18px);
      }
      to {
        opacity: 1;
        transform: translateY(0);
      }
    }

    @keyframes progressMove {
      from {
        transform: translateX(0);
      }
      to {
        transform: translateX(75%);
      }
    }

    /* Mobile responsive */
    @media (max-width: 600px) {
      .coming-soon {
        padding: 24px 20px;
      }

      h1 {
        letter-spacing: -3px;
      }

      .brand-icon {
        margin-bottom: 28px;
      }

      .description {
        margin-top: 22px;
      }

      .orb-top {
        top: -450px;
        left: -350px;
      }

      .orb-bottom {
        right: -400px;
        bottom: -450px;
      }

      .decor-leaves {
        transform: scale(0.7);
      }
    }

    @media (prefers-reduced-motion: reduce) {
      *,
      *::before,
      *::after {
        animation: none !important;
      }
    }
  </style>
</head>

<body>

  <div class="orb orb-top"></div>
  <div class="orb orb-bottom"></div>

  <div class="decor-leaves leaves-top" aria-hidden="true">
    <span></span>
    <span></span>
    <span></span>
  </div>

  <div class="decor-leaves leaves-bottom" aria-hidden="true">
    <span></span>
    <span></span>
    <span></span>
  </div>

  <main class="coming-soon">

    <div class="brand-icon" aria-hidden="true">
      <span class="leaf leaf-left"></span>
      <span class="leaf leaf-right"></span>
    </div>

    <h1>
      <span>Coming</span>
      <span class="soon">Soon</span>
    </h1>

    <p class="description">
      Something amazing is on the way.<br>
      Stay tuned!
    </p>

    <div class="progress" aria-hidden="true">
      <span></span>
    </div>

  </main>

</body>
</html>

