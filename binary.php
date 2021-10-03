<!doctype html>
<html class="no-js" lang="">

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title> Letters to Binary | Binary to Letters  </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
      <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!-- Animate CSS -->
    <link rel="stylesheet" href="assets/css/css/animate.min.css">
    <!-- Font-awesome CSS-->
    <link rel="stylesheet" href="assets/css/css/font-awesome.min.css">
    
    <!-- Custom CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
  </head>

<body>
     <!-- Main Body Area Start Here -->
    <div id="wrapper">
	<div class="container text-center">
	<div class="col-md-12 col-sm-12 col-xs-12">
  <h2 class="text-white">Letters to Binary  
  </h2>
  <div>
    <input type="text" id="input" class="form-controll" value=" " onfocus="  " onblur=" " />
  </div>
  <div class="binary-output">
    <p id="answer"></p>
  </div>
  <button id="stringToBinary" class="btn btn-primary">Result</button>
  <br>
  <br />
  <br />
  <h2 class="text-white">Binary to Letters </h2>
  <div>
    <input type="text" id="inputBi" class="form-controll" value=" " onfocus=" " onblur=" " />
  </div>
  <div class="binary-output">
    <p id="answerBi"></p>
  </div>
  <button id="binaryToString" class="btn btn-primary">Result</button>
</div>
</div>
</div>
	 </div>
    <!-- Main Body Area End Here -->
    <!-- jquery-->
    <script src="assets/js/jquery.min.js" type="text/javascript"></script>
     <!-- Bootstrap js -->
    <script src="assets/js/bootstrap.min.js" type="text/javascript"></script>
      
	<script>
	$('#stringToBinary').click(function(){
  var str = $('#input').val();
  var arr=[];
  var arrBi = [];
  for (var i = 0; i < str.length; i++) {
      arr.push(str.charCodeAt(i));
      arrBi.push(arr[i].toString(2));
  };
  var arrBiJoined = arrBi.join(" ");
  $('#answer').html(arrBiJoined);
});
// $('button').click(function(){
//   console.log("text");
// });

$('#binaryToString').click(function(str) {
  var str = $('#inputBi').val();
  var biString = str.split(" ");
  var uniString = [];
  for (var i = 0; i < biString.length; i++) {
    uniString.push(String.fromCharCode(parseInt(biString[i], 2)));
  }
  $('#answerBi').html(uniString.join(""));
});
</script>

</body>

</html>
