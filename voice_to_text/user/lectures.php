<?php
require_once('header.php');
include_once("../backend/db.php");
$records = mysqli_query($con,"select * from lectures");
?>

<style>

    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&family=Roboto+Condensed:wght@700&family=Roboto:wght@300;400;500;600;700&display=swap');

    :root {
    --purple: #4A0E60;
    --pink: #BE35AB;
    --yellow: #faad44;
    }

    .body {
    min-height: 100vh;
    background-image: url("https://images.pexels.com/photos/10458835/pexels-photo-10458835.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2");
    background-size: cover;
    }
    .body section {
    padding: 10px;
    width: 100%;
    min-height: 80px;
    transform: translateY(20%);
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: space-evenly;
    background-color: rgba(255,255,255,0.4);
    border-radius: 20px;
    box-shadow: 0px 0 31px 0px rgb(0 0 0 / 10%);
    backdrop-filter: blur(15px);
    border: 1px solid rgba(255, 255, 255, 0.5);
    margin-bottom:20px;
    }

    .body h1 {
    margin: 0 0 0 0;
    font-size: 3rem;
    font-weight: 500;
    font-family: 'Poppins', sans-serif;
    text-align: center;
    color: var(--purple);
    }

    .body .card {
    width: 100%;
    }

    .body .buy-btn {
    border: none;
    padding: 7px 20px;
    width: 50%;
    border-radius: 10px;
    font-size: 1rem;
    background-image: linear-gradient(43deg, var(--pink) 0%, var(--purple) 100%);
    color: white;
    font-weight: 600;
    box-shadow: 0px 8px 15px rgb(0 0 0 / 10%);
    margin:10px;
    }

</style>

<div class="body">

    <div class="container">

        <div class="row">
        <?php
        while($data = mysqli_fetch_array($records))
        {
        ?>
            <div class="col-md-4">
                <section>
                    <div class="card">
                        <h1><?php echo $data['title']; ?></h1>
                    </div>
                    <a class="buy-btn" href="lecture.php?id=<?php echo $data['id']; ?>">
                        Open Lecture
                    </a>
                </section>
            </div>
        <?php } ?>
            
        </div>

    </div>

</div>



<?php
require_once('footer.php');
?>
