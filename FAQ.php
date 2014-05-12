<?php
$db = mysql_connect("localhost", "nwevers", "5220131");
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>FAQ</title>
    <link style="text/css" rel="stylesheet" href="css.css">
    <script src="jquery-2.1.0.min.js"></script>
</head>
<body>
   <div class="container">
    <div id="sidebar">
        <ul>
            <li><a href="HBO_Vragenlijst.html">Hulp bij ongeval</a></li>
            <li><a href="Landinformatie.html">Safety on travel</a></li>
        </ul>
    </div>
    <div class="main-content">
        <div class="swipe-area"></div>
        <a href="#" data-toggle=".container" id="sidebar-toggle" class= "svg">
                <object id="menuarrow" data="../img/Menubutton.svg" alt = "menubutton" type="image/svg+xml" >
                </object>
        </a>
        <div class="content">
    </div>
</div>
    
    <script>
        $(document).ready(function() {
  $("[data-toggle]").click(function() {
    var toggle_el = $(this).data("toggle");
    $(toggle_el).toggleClass("open-sidebar");
  });
     
});
 
$(".swipe-area").swipe({
    swipeStatus:function(event, phase, direction, distance, duration, fingers)
        {
            if (phase=="move" && direction =="right") {
                 $(".container").addClass("open-sidebar");
                 return false;
            }
            if (phase=="move" && direction =="left") {
                 $(".container").removeClass("open-sidebar");
                 return false;
            }
        }
});
</script>
    
    
</body>
</html>