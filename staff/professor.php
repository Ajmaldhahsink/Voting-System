<?php
        session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Student Portal</title>
    <link rel="stylesheet" href="staff.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
    <style>
    *{
        font-family: 'Poppins', sans-serif;
    }
    #head{
        margin-left: 18%; 
        color: brown;
        font-size: 2.5rem;
        margin-top: 25px;
        margin-bottom: -30px;
    }
    .col-4 h4{
        color: black;
        text-align: center;
        font-size: 1.3rem;
    }
    #names{
        font-weight: bold;
        color: blue;
        font-size: 1.2rem;
    }
    #notes{
        margin: auto;
        margin-top: 30px;
        width: 300px;
        height: 35px;
        border-radius: 10px;
        color: white;
        border: 2px solid red;
        background-color: red;
        display: none;
        text-align: center;
        font-size: 1.1rem;
    }
    button:enabled{
        background-color: green;
        border: 1px solid green;
        color: white;
        font-size: 1.4rem;

    }
    button:disabled{
        background-color: darkgray;
        color: black;
        outline: none;
        border: none;
    }
    button:disabled:hover + #notes{
        display: block;
    }
    img{
        height: 250px;
        width: 350px;
    }
    </style>
</head>
<body>
    <form action="new2.php" method="post">
    <div class="main">
        <h2>PROFESSOR</h2>
        <!--<input type="text" id="in2" name="regno" placeholder="Register No" -->
        <!--       class="in1" oninput="getname()">-->
        <input type="text" id="in2" name="name" placeholder="Enter Your Name"
               class="in2" oninput="regi()">
    </div>
    <?php
        if(isset($_SESSION['status'])){
            unset($_SESSION['status']);
        }
    ?>
    <h2 id="head">President</h2>
    <div class="small-container">
        <div class="row">
            <div class="col-4">
                    <img src="images/Hari.jpeg">
                    <h4>Hariharan</h4>
            </div>
            <div class="col-4">
                    <img src="images/jerry.jpeg">
                    <h4>Janagan</h4>
            </div>
            <div class="col-4">
                    <img src="images/sethu.jpeg">
                    <h4>Sethu Mohan Raj</h4>
            </div>
        </div>
        <div class="cont new-cont">
            <p>
                <span id="names">President : </span>
                <input type="radio" id="hariharan" name="president" value="Hariharan" onchange="onRadioChange1()">
                <label for="hariharan">Hariharan</label>
                <input type="radio" id="janagan" name="president" value="Janagan" onchange="onRadioChange1()">
                <label for="janagan">Janagan</label>
                <input type="radio" id="sethu" name="president" value="Sethu" onchange="onRadioChange1()">
                <label for="sethu">Sethu Mohan Raj</label>
            </p>
        </div>
    </div>

    <h2 id="head">Treasurer</h2>
    <div class="small-container">
        <div class="row">
            <div class="col-4">
                    <img src="images/dinesh.jpeg">
                    <h4>Dinesh</h4>
            </div>
            <div class="col-4">
                    <img src="images/kishore.jpeg">
                    <h4>Khishore</h4>
            </div>
            <div class="col-4">
                    <img src="images/saipriya.jpeg">
                    <h4>Saipriya</h4>
            </div>
        </div>
        <div class="cont new-cont">
            <p>
                <span id="names">Treasurer : </span>
                <input type="radio" id="dhinesh" name="treasurer" value="Dinesh" onchange="onRadioChange2()">
                <label for="dhinesh">Dinesh</label>
                <input type="radio" id="kishore" name="treasurer" value="Khishore" onchange="onRadioChange2()">
                <label for="kishore">Khishore</label>
                <input type="radio" id="saipriya" name="treasurer" value="Saipriya" onchange="onRadioChange2()">
                <label for="saipriya">Saipriya</label>
            </p>
        </div>
    </div>

    <h2 id="head">Vice President</h2>
    <div class="small-container">
        <div class="row">
            <div class="col-4">
                <img src="images/akil.jpeg">
                <h4>Akil</h4>
            </div>
            <div class="col-4">
                    <img src="images/anees.webp">
                    <h4>Anees</h4>
            </div>
            <div class="col-4">
                    <img src="images/sri.jpg">
                    <h4>Srikrishna</h4>
            </div>
        </div>
        <div class="cont new-cont">
            <p>
                <span id="names">Vice President : </span>
                <input type="radio" id="akil" name="vp" value="Akil" onchange="onRadioChange3()">
                <label for="akil">Akil Chakravarthi</label>
                <input type="radio" id="anees" name="vp" value="Anees" onchange="onRadioChange3()">
                <label for="anees">Anees</label>
                <input type="radio" id="srikrishna" name="vp" value="Srikrishna" onchange="onRadioChange3()">
                <label for="srikrishna">Sri krishna</label>
            </p>
        </div>
    </div>

    <h2 id="head">Secretary</h2>
    <div class="small-container">
        <div class="row">
            <div class="col-4">
                <img src="images/indu.jpeg">
                <h4>Indirani</h4>
            </div>
            <div class="col-4">
                    <img src="images/parithi.JPG">
                    <h4>Parithi</h4>
            </div>
            <div class="col-4">
                    <img src="images/sunjay.jpeg">
                    <h4>Sunjay</h4>
            </div>
        </div>
        <div class="cont new-cont">
            <p>
                <span id="names">Secretary : </span>
                <input type="radio" id="indirani" name="secretary" value="Indirani" onchange="onRadioChange4()">
                <label for="indirani">Indirani</label>
                <input type="radio" id="parithi" name="secretary" value="Parithi" onchange="onRadioChange4()">
                <label for="parithi">Parithi</label>
                <input type="radio" id="sunjay" name="secretary" value="Sunjay" onchange="onRadioChange4()">
                <label for="sunjay">Sunjay</label>
            </p>
        </div>
    </div>
     <div class="bt">
        <button type="submit" name="submit" class="btn" disabled>Submit</button>
        <span id="notes">Please !!! Fill all the Fields</span>
     </div>   

     </form>

<script src="staff.js"></script>

</body>
</html>