<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=My+Soul&family=Ubuntu:wght@500&display=swap');
        *{
            padding:0px;
            margin:0px;
            
        }
        body{
          background-image: url('https://t3.ftcdn.net/jpg/01/99/79/88/240_F_199798806_PAFfWGapie6Mk8igqKHbhIIa9LwQcvQr.jpg');
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: cover;
        }
        .mainn{
            align-items: center;
            text-align: center;
            justify-content: center;
            margin-top: 30vh;
            margin-right:45vh;
            margin-left:70vh;
            padding-top:10vh;
            height:30vh;
            width:60vh;
            background-color: rgb(36, 163, 186); 
            border-radius:2vh;
        }
        .mainn h2{
          color:black;
            font-size: 5vh;
            font-family: 'My Soul', cursive;
            font-family: 'Ubuntu', sans-serif;
        }
        .mainn h3{
            color: azure;
            font-family: 'Ubuntu', sans-serif;
            margin-bottom: 2vh;
        }
        
        form{
            background-color: rgb(48, 48, 187); 
            border: none;
            color: white;
            padding: 15px 32px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            border-radius: 10px;
            margin-top: 2vh;
        }
        form input{
            background-color:  rgb(48, 48, 187);
            border:none;
        }
    </style>
</head>
<body>
    <div class="mainn">
        <h3>Connect to  your friends with</h3>
        <h2>HangoutOnTatling</h2>
        <form action="first.php" method="post" >
       <input type="submit" value="Get Started " name="submit" />
    </form>
    </div>