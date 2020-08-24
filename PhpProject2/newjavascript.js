/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


function helloWorld()
{
     document.write("Hello World <br/> ");
    
    
}

helloWorld();




function displayDate(){
    var today = new Date();
    var date = today.getDate()+ "-" + (today.getMonth()+1) + "-" +today.getFullYear();
//    var date = today.getDate()+ "-" + (today.getMonth()+1) + "-" +today.getFullYear();
    var time = today.getHours() + ":" + today.getMinutes() + ":" +today.getSeconds();
    var dateTime = date + " " + time ;
    
    
    
    
    document.write("Today date &time =" + dateTime );
}
displayDate();