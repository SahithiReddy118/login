*{
    margin:0;
    padding: 0;
    box-sizing: border-box;
}
body{
    font-family: sans-serif;
    height: 100vh;
    display: flex;
    align-items: center;
    justify-content: center;

}
.container{
    text-align: center;
    width: 400px;
    height: 520px;
    border-radius: 30px;
    box-shadow: 5px 5px 10px rgba(1, 1,1,.3),inset 3px 3px 10px rgba(0,0,0,.2);
}
.container h1{
    margin-top: 25px;
    color: black;
    letter-spacing: 1px;
    font-weight: bold;
}
.container input{
    outline: none;
    border-radius: 30px;
    border: 2px solid red;
    width: 300px;
    height: 45px;
    margin-top: 25px;
    padding-left: 40px;
    padding-right: 20px;
    font-size: 16px;

}
.container button{
    cursor: pointer;
    width: 300px;
    height: 45px;
    margin-top: 25px;
    background: rgb(33, 33, 247);
    color: white;
    font-size: 16px;
    border-radius: 3px;
}
.container button:hover{background: rgb(65, 65, 238);}