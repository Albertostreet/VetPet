<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<style>
    .Forma{
        position: fixed;
        background-color: white;
        width: 100%;
        height: 100%;
    }
    body{
        background-color:cornflowerblue;
        margin: 0px;
    }
    table, tr, th, td{
        border: 1px solid black;
    }
    table{
        position:relative;
        left: 25%;
        top: 15%;
        transform: translate(-25%, -15%);
        width: 75%;
    }
    .form{
        position:relative;
        top: 50%;
        left: 50%;
        /* bring your own prefixes */
        transform: translate(-50%, -50%);
        width: 30%;
        
    }
    input, label, div{
        font-size: 25px;
    }
    .menu{
        width: 100%;
        height: 50px;
        display: flex;
        align-items: center;
        justify-content: center;
    }
    .a{
        margin-right: 50px;
    }
    </style>