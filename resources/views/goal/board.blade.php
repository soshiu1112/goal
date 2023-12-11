<!DOCTYPE HTML>
<html lang = "ja">
    <head>
        <meta charset = "utf-8">
        <title>Board</title>
        <link href = "./public/css/board.css" rel = "stylesheet"> 
    </head>
    <x-app-layout>
        <x-slot name="header">募集掲示板</x-slot>
    <body>
        <h1>対戦募集掲示板</h1>
        <a href = "/createRecruit">募集する</a>
        <a href = "/profile">プロフィール登録</a>
        <br>
        <p>レート範囲を絞り込む</p>
        @foreach($regulations as $regulation)
        <a href="/regulations/{{$regulation->id}}">{{$regulation->rate}}</a>
        @endforeach
            @foreach($rooms as $room)
                <div class = 'match'>
                    <h2 class='title'>{{$room->user->name}} 
                        
                        
                    </h2>
                    <p class = 'body'> 
                        <a href = "/room/{{$room->id}}">対戦申し込みリンク</a>
                    </p>
                    
                    <p>試合数{{$room->matches}}</p>
                    <a href="/regulations/{{$room->regulation->id}}">レート範囲{{$room->regulation->rate}}</a>
                    
                    <p>備考 {{$room->remarks}}</p>
                </div>
                ----------------------------------------------
            @endforeach
            
        </div>
        <div class='paginate'>
            {{$rooms->links()}}
        </div>
    </body>
    </x-app-layout>
</html>