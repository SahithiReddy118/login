<?php
session_start();
?>
<html>
    <head>
        <title>dashboard</title>
        <meta name="viewport" content="width-device-width,initial-scale=1">
        <link rel="stylesheet" href="cardcss.php">
    </head>
    <body>
        <div class="main">
            <form action="login.php" method="POST">
            <div class="first">
                <script>alert(<?php echo $_SESSION['username']; ?>)</script>
                <br><h1>&nbsp;&nbsp;Fashion Mela</h1>
                <button class="logout" type="submit" onclick="click()">Logout</button>
                
            </div>
        </form>
            <div class="second">
         <div class="cards">
             <div class="image">
                <img src="https://assets.myntassets.com/f_webp,dpr_1.5,q_60,w_210,c_limit,fl_progressive/assets/images/11985638/2020/6/25/bc4cd0fe-4bbc-48e6-a590-ede1629b87281593065470449WishKaroGirlsRedSolidFitandFlareDress2.jpg">

             </div>
             <div class="title"><b>Wish Karo</b></div>
             <div class="desc">Girls solid fit and flat dress</div>
             <p><b>Rs.1024</b></p>
         </div>
         <div class="cards">
            <div class="image">
               <img src="https://assets.myntassets.com/f_webp,dpr_1.5,q_60,w_210,c_limit,fl_progressive/assets/images/productimage/2020/2/14/8f345124-b838-470c-a0b5-d2d99b0de9681581630905932-1.jpg">
            </div>
            <div class="title"><b>Toy balloon kids</b></div>
            <div class="desc">Girls embellished fit and flare</div>
            <p><b>Rs.850</b></p>
        </div>
        <div class="cards">
            <div class="image">
               <img src="https://assets.myntassets.com/f_webp,dpr_1.5,q_60,w_210,c_limit,fl_progressive/assets/images/9962047/2019/7/2/b09cf53b-89a0-4efd-aa6d-71a98bb61b3a1562060673815-mini-miao-Girls-Navy-Blue-Fit-and-Flare-Dress-61615620606730-1.jpg">
            </div>
            <div class="title"><b>Mini miao</b></div>
            <div class="desc">Girls solid fit and flare dress</div>
            <p><b>Rs.683</b></p>
        </div>
        <div class="cards">
            <div class="image">
               <img src="https://assets.myntassets.com/f_webp,dpr_1.5,q_60,w_210,c_limit,fl_progressive/assets/images/11681082/2020/3/20/f72174c7-a274-4438-891b-e54cc37f96681584701411071BellaModaGirlsBurgundyEmbroideredFitandFlareDress1.jpg">
            </div>
            <div class="title"><b>Bella Moda</b></div>
            <div class="desc">Girls embroidered fit and flare dress</div>
            <p><b>Rs.605</b></p>
        </div>
        <div class="cards">
            <div class="image">
               <img src="https://assets.myntassets.com/f_webp,dpr_1.5,q_60,w_210,c_limit,fl_progressive/assets/images/2172537/2017/10/12/11507798544238-naughty-ninos-Girls-Magenta-Solid-Fit-and-Flare-Dress-4091507798544135-1.jpg">
            </div>
            <div class="title"><b>Naughty ninos</b></div>
            <div class="desc">Girls fit and flare dress</div>
            <p><b>Rs.899</b></p>
        </div>
        <div class="cards">
            <div class="image">
               <img src="https://assets.myntassets.com/f_webp,dpr_1.5,q_60,w_210,c_limit,fl_progressive/assets/images/productimage/2020/6/16/c61a6206-e00c-4fa6-8cb5-08082f4baed41592257246975-1.jpg">
            </div>
            <div class="title"><b>Stylo bug</b></div>
            <div class="desc">Girls solid fit and flare dress</div>
            <p><b>Rs.838</b></p>
        </div>
    </div>
    </div>
    </body>
</html>