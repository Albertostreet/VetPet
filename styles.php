<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<style>
    .Forma{
        position: fixed;
        background-color: white;
        width: 100%;
        height: 100%;
    }
    .FormaCitas{
        position: fixed;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        width: 50%;
        height: 70%;
        background-color: white;
        border-radius: 25px;
        box-shadow: 14px 15px 5px 0px rgba(0,0,0,0.75);
    }
    .divInputs{
        height: 370px;
        width: 550px;
        margin-left: 20%;
    }
    .citasDiv{
        position: relative;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        width: 50%;
    }
    body{
        background-color:cornflowerblue;
        margin: 0px;
    }
    table, tr, td{
        background-color: white;
        width: 960px;
    }
    td{
        width: 150px;
    }
    input, label, div, button{
        color: black;
        font-size: 25px;
        font-family: Arial, Helvetica, sans-serif;
        text-align: center;
        border-radius: 25px;
        border-color: #F2A422;
    }
    button{
        background-color: white;
        border-radius: 12px;
    }
    .menu{
        width: 100%;
        height: 50px;
        display: flex;
        align-items: center;
        justify-content: center;
    }
    .menuCitas{
        margin-top: 10px;
        margin-left: 25%;
        width: 50%;
        height: 50px;
        display: flex;
        align-items: center;
        justify-content: center;
    }
    .a{
        margin-right: 50px;
    }
    a:link{
        color: white;
        text-decoration: none;
    }
    a:hover{
        color: red;
    }
    a:visited{
        text-decoration: none;
        color: white;
    }
    .calendario1{
        display: flex;
    }
    .calendario{
        border: 1px solid #0090FE;
        width: 150px;
        height: 150px;
    }
    .FormaCalendario{
        position: fixed;
        top: 55%;
        left: 50%;
        transform: translate(-50%, -50%);
        width: 51%;
        height: 82%;
        background-color: white;
    }
    .img{
        width: 100%;
        height: 100%;
    }
    </style>