<?php
$min = 1000;
$max = 9999;

$pass = mt_rand($min,$max);
$name = Auth::user();
?>

<x-app-layout>
    
<link rel = "stylesheet" href = "/css/board.css">
    <body>
        <h1 class = "heading">対戦ルーム</h1>
        
        <form action="/room/{{$room->id}}" id="form_{{ $room->id }}" method="post">
            @csrf
            @method('DELETE')
            <button type="button" class = "reset flat border"onclick="deletePost({{ $room->id }})">退出</button> 
        </form>
        
        <h4 >
            
            ルームホスト：{{$name->name}}
            <p>パスワード{{$pass}}</p>
            <p class = "text-lg">チャット</p>
        </h4>
        
        
        <script>
            function deletePost(id) {
                'use strict'

                if (confirm('退出するとルームは削除されます。\n本当に退出しますか？')) {
                    document.getElementById(`form_${id}`).submit();
                }
            }
        </script>
              
        <div id = 'message_area' class = "box18"></div>
        <div class="fixed bottom-0 left-0 w-full bg-white border-t border-gray-300 p-4">
            <div class="flex items-center">
                <input id='message' type="text" placeholder="メッセージを入力してください..." class="box18">
                <input id='room' type="hidden" value={{ $room->id }}>
                <button id='submit' class="reset flat border">Send</button>
            </div>
        </div>
        
        

    </body> 
</x-app-layout>
