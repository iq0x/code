<html>
    <head>
        <style>
            #screen
            {
             width: 700px;
             height: 500px;
            }
            #field1
    
            }
        </style>
        <script>
            var number;
            function getRandomInt(max) 
            {
                return Math.floor(Math.random() * max);
            }
            
            window.onload = function()
            {
                
                 for (var i = 0; i < 100; i++ )  
                 {
                    number = getRandomInt(20);
                    var id = "field" + (i + 1);
                    document.getElementById(id).innerHTML = number;
                    document.getElementById(id).style.backgroundColor="red";
                    document.getElementById(id).style.height = "50px";
                    document.getElementById(id).style.width = "50px";
                    document.getElementById(id).style.float = "left";
                    document.getElementById(id).style.margin = "5px";
                 }
                
            };
        </script>
    </head>
    <body>
        <div id="screen">
        <?php
        $i = 1;
        $fieldnr = 0;
        while ($i < 100)
        {
            $fieldnr++;
            $i++;
         ?>
         <div id="field<?php echo $fieldnr; ?>"></div>
         
         <?php
        } 
        ?>
        </div>
    </body>
</html>
