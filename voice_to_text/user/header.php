<!DOCTYPE html>
<html>
<head>
    <title> Writtrn Video </title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  
</head>
  <body>
    <style>
      @import url('https://fonts.googleapis.com/css2?family=Sriracha&display=swap');
  
      body {
        margin: 0;
        box-sizing: border-box;
      }
  
      /* CSS for header */
      .header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        background-color: #f5f5f5;
      }
  
      .header .logo {
        font-size: 25px;
        font-family: 'Sriracha', cursive;
        color: #000;
        text-decoration: none;
        margin-left: 30px;
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
      
  
      .footer {
        display: flex;
        justify-content: space-between;
        align-items: center;
        background-color: #302f49;
        padding: 40px 80px;
      }
  
      .footer .copy {
        color: #fff;
      }
  
      .bottom-links {
        display: flex;
        justify-content: space-around;
        align-items: center;
        padding: 40px 0;
      }
  
      .bottom-links .links {
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        padding: 0 40px;
      }
  
      .bottom-links .links span {
        font-size: 20px;
        color: #fff;
        text-transform: uppercase;
        margin: 10px 0;
      }
  
      .bottom-links .links a {
        text-decoration: none;
        color: #a1a1a1;
        padding: 10px 20px;
      }

      .text{
         background-color: lightgrey;
         width: 300px;
         border: 8px solid rgb(95, 105, 150);
         padding: 80px;
         margin: 20px;
         width: 500px;
        border-radius: 10px;
        display: flex;
        flex-direction: column;
        vertical-align: middle;
        margin-left: 320px;
       }
       .img{
        width: 20px;
        max-width: 70%;
        border-radius: 10px;
        margin-left: 620px;
       }

      </style>

      <header class="header">
    <a class="logo">WV</a>
    <nav class="nav-items">
      <a href="index.php">Home</a>
      <a href="lectures.php">Lectures</a>
      <a href="../backend/logout.php">Logout</a>
    </nav>
  </header>

    </body>

</html>