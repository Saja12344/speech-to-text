<?php
require_once('header.php');
?>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
<style>
      @import url('https://fonts.googleapis.com/css2?family=Sriracha&display=swap');
  
      body {
        margin: 0;
        box-sizing: border-box;
      }
        
      .nav-items {
        display: flex;
        justify-content: space-around;
        align-items: center;
        background-color: #f5f5f5;
        margin-right: 20px;
      }
  
      .nav-items a {
        text-decoration: none;
        color: #000;
        padding: 35px 20px;
      }
  
      /* CSS for main element */
      .intro {
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        width: 100%;
        height: 500px;
        background: linear-gradient(to bottom, rgba(0, 0, 0, 0.5) 0%, rgba(0, 0, 0, 0.5) 100%), url(https://mir-s3-cdn-cf.behance.net/projects/max_808_webp/1e217137585097.Y3JvcCw5NTgsNzQ5LDcwLDA.jpg) ;
        background-position: center;
        background-size: cover;
        background-repeat: no-repeat;
      }
  
      .intro h1 {
        font-family: sans-serif;
        font-size: 60px;
        color: #fff;
        font-weight: bold;
        text-transform: uppercase;
        margin: 0;
      }
  
      .intro p {
        font-size: 20px;
        color: #d1d1d1;
        text-transform: uppercase;
        margin: 20px 0;
      }
  
      .intro button {
        background-color: #5edaf0;
        color: #000;
        padding: 10px 25px;
        border: none;
        border-radius: 5px;
        font-size: 20px;
        font-weight: bold;
        cursor: pointer;
        box-shadow: 0px 0px 20px rgba(255, 255, 255, 0.4)
      }
  
      .achievements {
        display: flex;
        justify-content: space-around;
        align-items: center;
        padding: 40px 80px;
      }
  
      .achievements .work {
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        padding: 0 40px;
      }
  
      .achievements .work i {
        width: fit-content;
        font-size: 50px;
        color: #333333;
        border-radius: 50%;
        border: 2px solid #333333;
        padding: 12px;
      }
  
      .achievements .work .work-heading {
        font-size: 20px;
        color: #333333;
        text-transform: uppercase;
        margin: 10px 0;
      }
  
      .achievements .work .work-text {
        font-size: 15px;
        color: #585858;
        margin: 10px 0;
      }
  
      .about-me {
        display: flex;
        justify-content: center;
        align-items: center;
        padding: 40px 80px;
        border-top: 2px solid #eeeeee;
      }
  
      .about-me img {
        width: 500px;
        max-width: 100%;
        height: auto;
        border-radius: 10px;
      }
  
      .about-me-text h2 {
        font-size: 30px;
        color: #333333;
        text-transform: uppercase;
        margin: 0;
      }
  
      .about-me-text p {
        font-size: 15px;
        color: #585858;
        margin: 10px 0;
      }
  
    </style>
    <main>
        <div class="intro">
          <h1>WRITTEN VOICE</h1>
          <p>Our website help you to turn the voice into text in easist way</p>

        </div>
        <div class="achievements">
          <div class="work">
            <i class="fas fa-atom"></i>
            <p class="work-heading">Features</p>
            <p class="work-text">Turn Every Live Lecuter Inot Text.</p>
          </div>
          <div class="work">
            <i class="fas fa-skiing"></i>
            <p class="work-heading">Objectives</p>
            <p class="work-text">Help Every Deaf Students Or Hard oF Hearing Students Faced Proplems TO Understand Live Lecuter  .</p>
          </div>
         
        </div>
        <div class="about-me">
          <div class="about-me-text">
            <h2>About our website</h2>
            <p>Technology that enables humen speach to be converted into text .</p>
          </div>
          <img src="https://assets.justinmind.com/wp-content/webp-express/webp-images/uploads/2019/09/voice-user-interface-design.png.webp" alt="me">
        </div>
      </main>

<?php
require_once('footer.php');
?>