<html>
    <head>
        <style>
            #screen
            {
             width: 1200px;
             height: 500px;
             font-size: 2em;
             text-align: center;
            }
        </style>
        <script>
            var number = 0;
            var checked;
            
            window.onload = function()
            {
                 for (var i = 0; i < 100; i++ )  
                 {
                    number++;
                    var id = "field" + (i + 1);
                    document.getElementById(id).innerHTML = number;
                    document.getElementById(id).style.backgroundColor="red";
                    document.getElementById(id).style.height = "100px";
                    document.getElementById(id).style.width = "100px";
                    document.getElementById(id).style.float = "left";
                    document.getElementById(id).style.margin = "5px";
                 }
            };
            
            function check(field_id)
            {
                var x = document.getElementById(field_id).textContent; 
                document.getElementById(field_id).style.backgroundColor="green";
                document.getElementById(field_id).style.backgroundImage="url(img2/stonemine.gif)"; 
                checked = "field" + x + "id";
                
                document.getElementById("output").innerHTML = rename;
            }
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
             <div id="field<?php echo $fieldnr; ?>" onclick="check(this.id)"></div>
             <?php } ?>
        </div>
        <div id="output"></div>
    </body>
</html>
