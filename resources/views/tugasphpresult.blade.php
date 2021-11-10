<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        h1 {
            text-align : center;
            margin-top : 20%;
            
        }
    
        .timer {
        margin-top : 100px;
        font-size:120px;
        text-align:center;
        }
        .red {
            color:red;
        }
    </style>
</head>
<body>
    
<h1><?php
$q1 = 0;
$q2 = 0;
$q3 = 0;
$q4 = 0;
$q1 = (int) $_GET["quantity1"]* 15000;
$q2 = (int) $_GET["quantity2"]* 49000;
$q3 = (int) $_GET["quantity3"]* 77000;
$q4 = (int) $_GET["quantity4"]* 126000;
$total = $q1+$q2+$q3+$q4;
$bayar = $_GET["payment"];
$nomorovo = "";
$nomorgopay = "";
$nomorovo = $_GET["ovo"];
$nomorgopay = $_GET["gopay"];
$riotid = $_GET["riotid"];
$tag = $_GET["tag"];

echo "Pembayaran menggunakan " . $bayar . " dengan nomor : " . $nomorgopay . $nomorovo ?>
<br>
<?php
echo "Akan di top up pada akun : ".$riotid . $tag ?>
<br>
<?php
echo "Dengan total Rp "  ?> <div class="red"> <?php echo $total  ?> </div>
<?php 
echo "Silahkan melakukan pembayaran pada akun " . $bayar ." anda sebelum 5 menit"

                    ?></h1>
<div class="timer">time left = <span id="timer">05:01</span></div>
<script>
    startTimer();

function startTimer() {
  var presentTime = document.getElementById('timer').innerHTML;
  var timeArray = presentTime.split(/[:]+/);
  var m = timeArray[0];
  var s = checkSecond((timeArray[1] - 1));
  if(s==59){m=m-1}
  if((m + '').length == 1){
    m = '0' + m;
  }
  if(m < 0){
    m = '59';
  }
  document.getElementById('timer').innerHTML = m + ":" + s;
  setTimeout(startTimer, 1000);
}

function checkSecond(sec) {
  if (sec < 10 && sec >= 0) {sec = "0" + sec}; 
  if (sec < 0) {sec = "59"};
  return sec;
}

</script>
</body>
</html>