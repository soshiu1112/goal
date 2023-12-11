<!DOCTYPE HTML>
<html lang = "ja">
    <head>
        <meta charset = "utf-8">
        <title>Board2</title>
</head>
    <x-app-layout>
        
    <body>
        <h1>対戦募集掲示板</h1>
        <a href = "/createRecruit">募集する</a>
        <a href = "/profile">プロフィール登録</a>
        
            @foreach($rooms as $room)
                <div class = 'match'>
                    <h2 class='title'>{{$room->user->name}} 
                        
                        
                    </h2>
                    <p class = 'body'> 
                        <a href = "/room/{{$room->id}}">対戦申し込みリンク</a>
                    </p>
                    <p>対戦数{{$room->matches}}</p>
                    <p>レート範囲{{ $room->regulation->rate}}</p>
                    
                    <p> {{$room->remarks}}</p>
                    
                </div>
            @endforeach
            
        </div>
        <div class='paginate'>
            {{$rooms->links()}}
        </div>
    </body>
    </x-app-layout>
</html>