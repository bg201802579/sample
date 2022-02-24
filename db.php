<html>
    <head><title><?php echo $_POST["sFname"]."'s Letter to ".$_POST["Fname"]?></title>
    <link rel="stylesheet" href="dsb.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Tangerine"></head>
    <link rel="icon" href="528076.png" type="imageIcon" >
    <body>
        <?php
        echo "<h1>Dear : ".$_POST["Fname"]." .</h1>";
        ?>
       <h3 class="f2"> <?php echo "<br> <br>".$_POST["msg"]."";?></h3>
        
        
        <h3 class="f1"><?php echo "- " .$_POST["sFname"]?></h3>
    </body>
</html>