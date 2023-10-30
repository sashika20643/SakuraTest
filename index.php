<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Abhaya+Libre:wght@600&family=Oswald&display=swap" rel="stylesheet">
    <style>
        *{
            padding:0px;
            margin: 0;
            box-sizing: border-box;
            font-family: 'Abhaya Libre', serif;
font-family: 'Oswald', sans-serif;
        }
        body{
            min-height: 100vh;
        }
        img{
            width:250px;
        }
       
        .logocont{
            display:flex;
            justify-content: center;
            align-items: center;
        }
        span{
            font-size: 60px;
            font-weight: bolder;
            color:#c51a48 ;
        }
    

    </style>
</head>
<body>
    
<div class="container d-flex flex-column  justify-content-center align-items-center" style="height: 100vh;">

<div class="logocont" id="logocont">
    <img src="./images/pngegg.png" alt="" id="img" >
  
       <span id="s" >S</span>
       <span id="a"> A</span>
       <span id="k">K</span>
       <span id="u"> U</span>
       <span id="r"> R</span>
       <span id="a2">A</span>
   
</div>
<div class="container d-flex flex-column   justify-content-center align-items-center mt-4"  id="continue">
    <h3>You Are Warmly Welcome To Sakura Framework.</h3>
    <p>Sakura will help to install your laravel project easy.</p>
    <br>
    <a href="./editform.php" class="btn btn-outline-primary mt-3">Continue</a>
</div>
</div>
<script src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/16327/gsap-latest-beta.min.js" ></script>

<script>
const t1=gsap.timeline();
var xv=800;
var yv=200;
var rt=360;
t1.from("#s",{rotation: rt,y:yv, x:xv,opacity:0.2,duration:1,transformOrigin:'bottom'},1);
t1.from("#a",{rotation: rt,y:400, x:xv+50,opacity:0.2,duration:1,transformOrigin:'bottom'},1.2);
t1.from("#k",{rotation: rt,y:-200, x:xv+ 100,opacity:0.2,duration:1,transformOrigin:'bottom'},1.4);
t1.from("#u",{rotation: rt,y:-400, x:xv+150,opacity:0.2,duration:1,transformOrigin:'bottom'},1.6);
t1.from("#r",{rotation: rt,y:50, x:xv+200,opacity:0.2,duration:1,transformOrigin:'bottom'},1.8);
t1.from("#a2",{rotation: rt,y:60, x:xv+250,opacity:0.2,duration:1,transformOrigin:'bottom'},2);
t1.fromTo("#img",{y:-800,opacity:0,duration:1,transformOrigin:'center'},{y:0,opacity:1,duration:.5,transformOrigin:'center' },2.5);
t1.from("#continue",{opacity:0,duration:.5,transformOrigin:'bottom'});


// t1.fromTo("#logocont",{,opacity:0.2,duration:.5,transformOrigin:'bottom',yoyo:true},{scale:1.2,opacity:1,duration:.5,transformOrigin:'bottom' ,yoyo:true});


</script>

</body>
</html>
<!-- 

