<?php
    require_once('header.php');
    include_once("../backend/db.php");
    $url = "http://";
    // Append the host(domain name, ip) to the URL.   
    $url.= $_SERVER['HTTP_HOST'];   
        
    // Append the requested resource location to the URL   
    $url.= $_SERVER['REQUEST_URI'];

    $url_components = parse_url($url);
    // Use parse_str() function to parse the
    // string passed via URL
    parse_str($url_components['query'], $params);

    $id = $params['id'];

    $records = mysqli_query($con,"select * from lectures where id='$id'");
    while($data = mysqli_fetch_array($records))
    {
?>


<style>

    body{
     overflow-x:hidden;   
    }
    .content {
    background: #ccc;
    font-family:  Helvetica, Arial, sans-serif;
    padding-left:25%;
    padding-right: 25%;
    }

    .content h1 {
    border-bottom: solid 1p #000;
    padding-bottom: 20px;
    margin-bottom: 20px;
    color: #0079FF;
    text-align:center;
    }


    .content p {
    line-height: 150%;
    text-align:center;
    }

</style>


<div class="row">
    <div class="col-md-6">
        <div class="content">

        <h1><?php echo $data['title'] ?></h1>

        </div>
    </div>
    <div class="col-md-6">
    <video id="video" controls >
    <source src="../lectures/<?php echo $data['id'] ?>/<?php echo $data['slide'] ?>" type="video/mp4">
			<track label="English" kind="subtitles" srclang="en" src="../lectures/<?php echo $data['id'] ?>/<?php echo $data['lecture'] ?>" default>
		</video>
    </div>
</div>


<?php } ?>
<?php
    require_once('footer.php');
?>