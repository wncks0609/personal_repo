
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Chat Room</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js">></script>
    <script src="chat.js"></script>
    <style type="text/css">
    #viewChats {
        padding : 12px;
        overflow : auto;
        border : #333 1px solid;
        border-radius : 6px;
        width : 800px;
        height : 300px;
    }
    #un {
        color : #09F;
    }
    p {
        display : inline-block;
    }
    #chat {
        width : 300px;
        padding : 10px;
        box-sizing : border-box;
        margin : 10px;
    }
    #userID {
        padding : 5px;
        box-sizing : border-box;
        margin : 10px;
    }
    #chatBtn {
        padding : 10px;
        color : white;
        background-color : green;
    }
    #clearBtn {
        padding : 10px;
        color : white;
        background-color : grey;
    }
    #recentBtn {
        padding : 10px;
        color : white;
        background-color : blue;
    }
    .names {
        color : green;
    }
    .time{
        float : right;
    }
    </style>
</head>
<body>
    <div id="wrap">
        <h2>Welcome to Random Chat</h2>
        <div id="viewChats"></div>
        <br>
        <input type="text" name="userID" id="userID" size="20" placeholder="Enter your name"/>
        <br>
        <input type="text" name="chat" id="chat" size="48" placeholder="Enter messages here"/>
        <button id="chatBtn" >Send</button>
        <button id="clearBtn" onClick="deleteChat()" >Clear</button>
        <button id="recentBtn" onClick="recentChat()" >Recent</button>

    </div>
    
</body>
</html>