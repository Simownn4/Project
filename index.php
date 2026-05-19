<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>My Portfolio</title>

  <style>

    *{
      margin:0;
      padding:0;
      box-sizing:border-box;
      font-family: Arial, sans-serif;
    }

    :root{
      --bg:#f5f5f5;
      --text:#222;
      --accent:#d94f2c;
      --card:#ffffff;
    }

    html{
      scroll-behavior:smooth;
    }

    body{
      background:var(--bg);
      color:var(--text);
      line-height:1.6;
    }

    nav{
      background:#222;
      padding:15px 30px;
      display:flex;
      justify-content:space-between;
      align-items:center;
      position:sticky;
      top:0;
    }

    .logo{
      color:white;
      font-size:22px;
      font-weight:bold;
    }

    nav ul{
      display:flex;
      list-style:none;
      gap:20px;
    }

    nav ul a{
      color:white;
      text-decoration:none;
      font-size:14px;
    }

    nav ul a:hover{
      color:var(--accent);
    }

    .hero{
      min-height:90vh;
      display:flex;
      align-items:center;
      max-width:1000px;
      margin:auto;
      padding:60px 30px;
    }

    .hero-text .small{
      color:var(--accent);
      font-size:13px;
      letter-spacing:2px;
      text-transform:uppercase;
      margin-bottom:10px;
    }

    .hero h1{
      font-size:80px;
      line-height:0.95;
      margin-bottom:20px;
    }

    .hero h1 span{
      color:var(--accent);
    }

    .hero p{
      max-width:500px;
      color:#555;
      margin-bottom:25px;
    }

    .btn{
      display:inline-block;
      background:var(--accent);
      color:white;
      text-decoration:none;
      padding:12px 22px;
      border-radius:4px;
      font-size:14px;
    }

    section{
      max-width:1000px;
      margin:auto;
      padding:70px 30px;
    }

    .section-title{
      font-size:40px;
      margin-bottom:25px;
    }

    .about p{
      color:#444;
      margin-bottom:15px;
    }

    .skills{
      margin-top:25px;
      display:flex;
      flex-wrap:wrap;
      gap:10px;
    }

    .skill{
      border:1px solid #222;
      padding:8px 15px;
      font-size:14px;
      background:white;
    }

    .projects{
      display:grid;
      grid-template-columns:repeat(auto-fit, minmax(250px,1fr));
      gap:20px;
    }

    .card{
      background:var(--card);
      padding:25px;
      border-left:4px solid var(--accent);
      box-shadow:0 2px 10px rgba(0,0,0,0.08);
    }

    .card h3{
      margin-bottom:10px;
      font-size:24px;
    }

    .card p{
      color:#555;
      font-size:14px;
    }

    .contact-links{
      display:flex;
      flex-direction:column;
      gap:15px;
    }

    .contact-links a{
      background:white;
      padding:15px 20px;
      text-decoration:none;
      color:#222;
      box-shadow:0 2px 10px rgba(0,0,0,0.08);
    }

    footer{
      background:#222;
      color:#aaa;
      text-align:center;
      padding:20px;
      font-size:14px;
    }

    @media(max-width:700px){
      .hero h1{
        font-size:55px;
      }

      nav{
        padding:15px 20px;
      }

      section{
        padding:60px 20px;
      }
    }

  </style>
</head>

<body>

  
  <nav>
    <div class="logo">
      MY PORTFOLIO
    </div>

    <ul>
      <li><a href="#about">About</a></li>
      <li><a href="#projects">Projects</a></li>
      <li><a href="#contact">Contact</a></li>
    </ul>
  </nav>

  
  <section class="hero">

    <div class="hero-text">

      <p class="small">BSIT 2E </p>

      <h1>
        Simon<br>
        <span>Modesto</span>
      </h1>


      <div style="text-align:left;">
        <img src="simon.jfif" alt="Simon Modesto Profile" style="
          width: 200px;
          height: 200px;
          border-radius: 50%;
          object-fit: cover;
          margin: 20px 0;
          border: 5px solid var(--accent);
          box-shadow: 0 4px 15px rgba(0,0,0,0.2);
        ">
      </div>

      <p>
        I enjoy creating simple websites and programs.
        Currently learning web development and programming.
      </p>

      <a href="#projects" class="btn">
        View Projects
      </a>

    </div>

  </section>

  
  <section id="about">

    <h2 class="section-title">About Me</h2>

    <div class="about">

      <p>
        Hi, I'm Simon! Since I was a child, I have always loved computers. I used to spend a lot of time with the computer — it was my favorite thing to do growing up.
      </p>

      <p>
        That passion stayed with me, and now as a BSIT student I get to turn it into a career. I enjoy building websites and programs, and I'm always looking to improve my skills.

      </p>

      <div class="skills">
        <div class="skill">HTML</div>
        <div class="skill">CSS</div>
        <div class="skill">JavaScript</div>
        <div class="skill">Python</div>
        <div class="skill">GitHub</div>
      </div>

    </div>

  </section>

  
  <section id="projects">

    <h2 class="section-title">Projects</h2>

    <div class="projects">

      <div class="card">
        <h3>School Webpage</h3>
        <p>A simple school activity webpage made using HTML and CSS.</p>
      </div>

      <div class="card">
        <h3>Python Calculator</h3>
        <p>A calculator program that performs basic math operations.</p>
      </div>

      <div class="card">
        <h3>Electricity Bill System</h3>
        <p>A simple electricity bill system using java and database.</p>
      </div>
<div style="text-align:left;">
        <img src="elect.jfif" alt="elect" style="
          width: 400px;
          height: 400px;
          border-radius: 10px;
          object-fit: cover;
          margin: 20px 0;
          border: 5px solid var(--accent);
          box-shadow: 0 4px 15px rgba(0,0,0,0.2)
    </div>

  </section>


  <section id="contact">

    <h2 class="section-title">Contact</h2>

    <div class="contact-links">

      <a href="mailto:simon.montnao@gmail.com">
        Gmail: simon.montnao@gmail.com
      </a>

      <a href="http://github.com/Simownn4" target="_blank">
        GitHub: github.com/Simownn4
      </a>

    </div>

  </section>


  <footer>
    © 2026 Simon Modesto Portfolio
  </footer>

</body>
</html>