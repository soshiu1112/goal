<?php
$min = 1000;
$max = 9999;

$pass = mt_rand($min,$max);
$name = Auth::user();
?>

<x-app-layout>
    

    <body>
        <h1>room</h1>
        <p>
            
            ユーザ情報1{{$name->name}}
            
        </p>
        <p>パスワード{{$pass}}</p>
        
        <p>チャット</p>
        
         
            {{--  チャットルーム  --}}
            
        <div id = 'message_area'></div>
        <div class="fixed bottom-0 left-0 w-full bg-white border-t border-gray-300 p-4">
            <div class="flex items-center">
                <input id='message' type="text" placeholder="Type your message..." class="w-full px-4 py-2 mr-4 border border-gray-300 rounded focus:outline-none focus:border-blue-500">
                <input id='room' type="hidden" value={{ $room->id }}>
                <button id='submit' class="bg-blue-500 text-black px-6 py-2 rounded hover:bg-blue-600 focus:outline-none">Send</button>
            </div>
        </div>
        
        

    </body> 
</x-app-layout>
