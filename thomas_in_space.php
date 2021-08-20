<?php
    $k = 20;
?>

<html>
    <head>
        <title>cybershit</title>
        <meta name="viewport" content="width=devicve-width, initial-scale=1.0"> 
         <script>
            function check(field_id)
            {
                var x = document.getElementById(field_id).textContent; 
                var audio_explosion = new Audio('sounds/explosion.mp3');
                audio_explosion.play();
                document.getElementById(field_id).style.backgroundImage="url(img/crash1.png)";
            }
              
        </script>
        <style>
     
            body
            {
                background-image:url("img/star.gif");
            }
            
            #main
            {
                width:100%;
            }
              <?php
            
            $n = $k;
            
            while($x<$n)
            {
              $x++;  
              $timer1 = rand(9,65);
              $timer2 = rand(5,45);
              $timer3 = rand(2,35);
            ?>
            .centrum<?php echo $x; ?> 
            {
            	height: 6px;
            	left: 0px;
            	position: fixed;
            	top: 20%;
            	width: 550px;
            	animation: fly_horizontal <?php echo $timer1; ?>s ease-in-out 0s infinite;
            }
            
            .moveY<?php echo $x; ?> 
            {
            	height: 950px;
            	position: fixed;
            	top: 20%;
            	width: 150px;
            	animation: rotate <?php echo $timer1; ?>s linear 0s infinite;
           }
           
            #bong<?php echo $x; ?> 
            {
            	bottom: 0px;
            	position: fixed;
                background-image: url("img/thomas.png");
                background-repeat: no-repeat;
                width: 120px;
                height: 158px;
                 cursor: url("img/aim.png"), pointer;
            }
                    <?php
    }
?>


@keyframes fly_horizontal 
{
    0% { left: 0;}
    50%{ left : 50%;}
    100%{ left: 0;}
}

@keyframes fly_vertical
{
    0%   {bottom: 0;}
    100% {bottom: 100%;}
}


@keyframes rotate 
{
    100% {transform: rotate(360deg);}
}


        </style>
        
       
    </head>

    <body>
    <?php
    $i = 0;
    $g = $k;
    while($i<$g)
    {
      $i++;  

?>
    <div class="main">
        <div class="centrum<?php echo $i; ?>"> 
            <span class="moveY<?php echo $i; ?>">
                <span id="bong<?php echo $i; ?>" onclick="check(this.id)"></span>
            </span>
        </div>
        <?php
    }
?>
</div>
    </body>
</html>

