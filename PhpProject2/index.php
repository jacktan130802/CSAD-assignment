<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <script>

day=new Date()  ;   //..get the date

x=day.getHours() ;   //..get the hour

if(x>=0 && x<4) {

   document.write('<h1>'+'<span style="color:white">Good Night</span>');

} else

if(x>=4 && x<12) {

   document.write('<h1>'+'<span style="color:white">Good Morning </span>');

} else

if(x>=12 && x<18) {

   document.write('<h1>'+'<span style="color:white">Good afternoon</span>');

} else

if (x>=18 && x<24) {

   document.write('<h1>'+'<span style="color:white">Good Night</span>');
   document.write("background-image:url('giphy.gif')"); 
}

</script> 
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <link rel="stylesheet" href="newcss2.css"/>
        <img src="Flag_of_Singapore.gif
             " alt=""><br>
        <audio controls>
            <br/>
            <source src='20.mp3' type="audio/mpeg">
            
        </audio>
        <br>
       
<iframe width="560" height="315" src="https://www.youtube.com/embed/xNP0rijHlmk" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        <?php
        echo '   <span style="color:white">  .<h2>Good afternoon SINGAPORE'; // you cannot add class inside php inside html too many inner so they banned it
       echo '<br>Hello world</div> <br>'; //  the only way to do it is  thru span method which allows styling if needed.Do whatever you want die=rectly through direct tags like span
       echo "Today is " . date("Y/m/d") . "<br>";
       echo"Today is " . date("Y.m.d") ."<br>";
       echo "Today is " .date("Y-m-d") ."<br>";
       echo "Today is " .date("l")."<br>"; //l means day.
       date_default_timezone_set("Singapore"); //NO CLASS IN PHP'S HTML
       echo "The time is " .'<h1>'.'<span style="color:yellow"> '. date("h:i:m");
       // check what does the dot operator do.(Concatenate string)
        ?>
    </body>
</html>
