
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

</head>
<body>
    
</body>
</html>



<form name="flight" method="POST">
  <label>
    Arrival <br/>
    <input type="date" name="arrival" id="arrival" />
  </label>
 
 <br>
  <label>
    Departure <br/>
    <input type="date" name="departure" id="departure" onchange="checkIt()"/>
  </label>

    <input type="hidden" name="BL"/>

  <span id="result"></span><br>
  <input type="submit" name="btnSubmit" onclick="checkSubmit()"/>
</form>





<script>
function checkIt(){
    var start = document.getElementById('arrival').value;
    var end = document.getElementById('departure').value;
    

    if(start < end){
        document.getElementById('result').innerHTML="OK";
        return true;
    }else{
        document.getElementById('result').innerHTML="Failed";
        return false;
    }

}

function che
}ckSubmit(){
    var result = checkIt();
    var cf = confirm("Sure?"); 
    if(result == true){
        cf = true;
    }else{
        cf = false;
    }
// var start = new Date("11/07/2018");
// var end = new Date("12/07/2018");
// var abc = new Date();
// var abc = Date(document.form1.arrival_date);

// console.log(abc);



</script>

<?php
    if(isset($_POST['btnSubmit'])){
        echo "<h2>Booking Success</h2>";
    }
?>