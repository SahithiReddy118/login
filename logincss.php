*{
    margin:0;padding:0;
    box-sizing: border-box;
    font-family: 'Roboto',sans-serif;
    border: none;
    outline: none;
    user-select: none;
}
body{
    display: flex;
    justify-content: center;
    align-items: center;
    width: 100%;height: 100vh;
    background: url("img.jpg")no-repeat;
    background-size: cover;
}
.main{
    text-align: center;
    color:rgba(255,255,255,0.836);
    width:350px;
    height:380px;
    padding-top: 30px;
    background: transparent;
    border-radius: 8px;
    box-shadow: 5px 5px 5px rgba(32,32,32,0.8);inset 3px 3px 3px rgba(41,41,41,0.9);
}
h1{
    color:rgba(22,22,22,0.973);
    font-size: 34px;
    padding-bottom: 20px;
}
.field{
    width:220px;
    height: 40px;
    margin: auto;
    margin-bottom: 20px;
    border-radius: 50px;
    border: 1px solid rgba(0,0,0,0.932);
    text-align: center;
    font-size: 25px;
}
input{
    width:165px;
    height:40px;
    padding-left: 12px;
    background: transparent;
    font-size: 18px;
    letter-spacing: 1px;
}
i{
    color: rgba(92,10,24);
    font-size: 18px;
}
.main .login{
    cursor: pointer;
    width: 220px;
    height: 38px;
    color:white;
    border-radius: 18px;
    font-size: 16px;
    letter-spacing: 1px;
    background: rgba(255,44,79);
    transition: .4s;
}
.main .login:hover{background: rgba(221,37,68);}
.signup{
    margin:30px;
    text-align: center;
    font-size: 16px;
    color: #666666;
}
.signup a{
    color: rgb(73, 73, 245);
    text-decoration: none;
    padding-left: 5px;
}
.signup a:hover{
    text-decoration: underline;
}

.pass{
    margin: -5px 0 20px 5px;
    color: #a6a6a6;
    cursor: pointer;
}
.pass:hover{
    text-decoration: underline;
}

