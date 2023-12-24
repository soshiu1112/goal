<!DOCTYPE HTML>
<html lang = "ja">
    <head>
        <meta charset = "utf-8">
        <title>Board</title>
        
        @vite(['resources/css/app.css','resources/js/app.js'])
        <link rel = "stylesheet" href = "./css/board.css">
    </head>
    <x-app-layout>
    <body>
        <h2 class = "heading">ぷよぷよeスポーツ対戦募集掲示板</h2>
        <a class = "btn btn-border-shadow btn-border-shadow--color" href = "/createRecruit">募集する</a>
        <a class = "btn btn-border-shadow btn-border-shadow--color" href = "/profile">プロフィール登録</a>
        <br>
        <h4>
            レート範囲を絞り込む<br>
        </h4>
        @foreach($regulations as $regulation)
            <a class = "btn btn-border-shadow btn-border-shadow--color2" href="/regulations/{{$regulation->id}}">{{$regulation->rate}}</a>
        @endforeach
            @foreach($rooms as $room)
                <br>
                <div class = 'match'>
                    <img class = "image" src = "{{asset('storage/'.$room->user->image_path)}}" alt = "">
                    <h3>{{$room->user->name}}</h3>
                    
                    <div class = "box18">    
                        <p>
                            本数    {{$room->matches}}本<br>
                            <p href="/regulations/{{$room->regulation->id}}">レート範囲 {{$room->regulation->rate}}</p>
                            
                            備考 {{$room->remarks}}
                            <div class = 'text-xl'> 
                                <a class = "btn btn-border-shadow btn-border-shadow--color2" href = "/room/{{$room->id}}">この対戦に参加する</a>
                            </div>
                        </p>
                    </div>
                    
                </div>
                <br>
                <h1></h1>
            @endforeach
            
        </div>
        <div class='box18'>{{$rooms->links()}}</div>
    </body>
    </x-app-layout>
</html>