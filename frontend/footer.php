<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <title>Document</title>
    <style>

@import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,500;0,600;0,700;1,100&display=swap');

body{
    line-height: 1.5;
    font-family: 'Poppins', sans-serif;

}
*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

.container{
    max-width: 1170px;
    margin: auto;
}

.row{
    display: flex;
    flex-wrap: wrap;
}

ul{
    list-style: none;
}

.footer{
    background-color: #24262b;
    padding: 70px 0;
}

.footer-col{
    width: 25%;
    padding: 0 15px;
}
.footer-col h4{
    font-size: 18px;
    color: #ffffff;
    text-transform: capitalize;
    margin-bottom: 35px;
    font-weight: 500;
    position: relative;
}

.footer-col h4::before{
    content: '';
    position: absolute;
    left: 0;
    bottom: -10px;
    background-color: #e91e63;
    height: 2px;
    box-sizing: border-box;
    width: 50px;
}

.footer-col ul li:not(:last-child) {
    margin-bottom: 10px;
}

.footer-col ul li a{
    font-size: 16px;
    text-transform: capitalize;
    color: #ffffff;
    text-decoration: none;
    font-weight: 300;
    color: #bbbbbb;
    display: block;
    transition: all 0.3sec ease ;
}
.footer-col ul li a:hover{
    color: #ffffff;
    padding-left: 8px;
}

.footer-col .social-links a{
    display: inline-block;
    height: 40px;
    width: 40px;
    background-color: rgba(225, 225, 225, 0.2);
    margin: 0 10px 0px 0;
    text-align: center;
    line-height: 40px;
    border-radius: 50%;
    color: #ffffff;
    transition: all 0.5s ease;
}

.footer-col .social-links a:hover{
    color: #24262b;
    background-color: #ffffff;
}

/*responsive*/
@media(max-width: 767px){
    .footer-col{
        width: 50%;
        margin-bottom: 30px;
    }
}

@media(max-width: 574px){
    .footer-col{
        width: 100%;
    }
}
    </style>
</head>

<body>
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="footer-col">
                    <h4>company</h4>
                    <ul>
                        <li><a href="#">HOME</a></li>
                        <li><a href="#">ABOUT US</a></li>
                        <li><a href="#">SHOP</a></li>
                        <li><a href="#">CONTACT</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>Get help</h4>
                    <ul>
                        <li><a href="#">LOGIN</a></li>
                        <li><a href="#">REGISTER</a></li>
                        <li><a href="#">CART</a></li>
                        <li><a href="#">ORDERS</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>CONTACT</h4>
                    <ul>
                        <li><a href="#">0325-6482215</a></li>
                        <li><a href="#">0325-6924713</a></li>
                        <li><a href="#">ABC@GMAIL.COM</a></li>
                        <li><a href="#">KARACHI/PAKISTAN</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>follow us</h4>
                    <div class="social-links">
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-linkedin-in"></i></a>

             </div>

                </div>
            </div>

        </div>

    </footer>
</body>

</html>