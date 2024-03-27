<!DOCTYPE html>
<html>
<head>
    <title>Chat Section</title>
    <style>
        /* Chat container */
        #chat-container {
            height: 300px;
            overflow-y: scroll;
            padding: 10px;
            margin-bottom: 10px;
            background-color: #f2f2f2;
        }

        /* Chat messages */
        .chat-message {
            max-width: 70%;
            padding: 8px 12px;
            margin-bottom: 10px;
            border-radius: 20px;
            clear: both;
        }

        .chat-message.sender {
            float: left;
            background-color: #DCF8C6;
            color: #333;
        }

        .chat-message.receiver {
            float: left;
            background-color: #E5E5EA;
            color: #333;
        }

        .chat-message span {
            font-weight: bold;
            margin-right: 5px;
        }

        /* Chat form */
        #chat-form {
            background-color: #f2f2f2;
            padding: 10px;
            border-top: 1px solid #ccc;
        }

        #chat-form input[type="text"] {
            width: calc(100% - 70px);
            padding: 8px;
            margin-right: 5px;
            border-radius: 20px;
            border: 1px solid #ccc;
            outline: none;
        }

        #chat-form button {
            padding: 8px 12px;
            border: none;
            background-color: #128C7E;
            color: white;
            border-radius: 20px;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <div id="chat-container">

    @foreach($datas as $data)
        <div class="chat-message sender"><span>{{$data['user']['name']}}</span>{{$data->messege}}</div>
     @endforeach  

    </div>
    <div id="chat-form">
        <form action="{{url('chat/messege')}}" method="post">
        @csrf
        <input type="text" id="messege" name="messege" placeholder="Type your message here...">
        <button>Send</button>
        </form>
       
    </div>
</body>
</html>
