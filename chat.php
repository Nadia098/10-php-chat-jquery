<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <script src="app.js"></script>
    <style>
        *{margin:0;padding:0;}
        body{background-color: aqua; font-size: 15px;  }
        h1{text-align:center;text-shadow:2px 2px 3px #ccc;font-size:50px}
        #chatbox{
            width:420px;
            border:1px solid #000
            border-radius:5px;
            margin:auto;
            background-color: aquamarine;
        }
        #chatcontent{
            max-height: 300px
            overflow-y:auto;
            max-width: inherit;
        }
     
        #chatmsg{list-style:none;}
        
        #chatmsg> li{
            padding: 5px;
            margin: 10px 0px 4px 0px; 
            clear: both;
        }
        
        
        #chatmsg>li>img{
            float: left;
            width: 35px;
            border:1px solid #fff;
        }
        #chatmsg>li>span{
            float: left;
            margin-left:5px;
            width: 400px;
        }
        
        msgUser{
            width:300px;
            border: 2px solid #222;
            padding: 5px;
            margin: 5px;
        }
        #sendbutton{
            border: 1px solid #222;
            padding: 4px;
            background-color: #3b5998;
            color: #fff;
            font-weight: bold;
            
        }
    </style>
</head>
<body>
    <h1>chat same as facebook</h1>
    
    
     <div id="chatbox">
       
        <div id="chatcontent">
           
           
            <ul id="chatmsg">
             <li><img src="image/image2.jpeg" alt=""><span> </span></li>    
             <li><img src="image/img.jpeg" alt=""><span> </span></li>    
                
            </ul>
                
            </div> 
            <input type="text" id="msgUser" placeholder="Entre votre message">
            <input type="button" value="envoyer" id="sendbutton"><br/>
            &nbsp;&nbps;<input type="checkbox" id="entre">envois du message avec la touche "Entre"
        </div> 
         
         
         
    </div>



</body>

</html>