<!DOCTYPE HTML>
<html lang = "ja">
    <head>
        <meta charset = "utf-8">
        <title>Board</title>
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
        <a href="/{{$regulation->id}}">{{$regulation->rate}}</a>
        @endforeach
            @foreach($recruits as $recruit)
                <div class = 'match'>
                    <h2 class='title'>{{$recruit->user->name}} 
                        
                        
                    </h2>
                    <p class = 'body'> 
                        <a href = "/room/{{$recruit->user->name}}">対戦申し込みリンク</a>
                    </p>
                    
                    <p>試合数{{$recruit->matches}}</p>
                    <a href="/{{$recruit->regulation->id}}">レート範囲{{$recruit->regulation->rate}}</a>
                    
                    <p>備考 {{$recruit->remarks}}</p>
                </div>
            @endforeach
            
        </div>
        <div class='paginate'>
            {{$recruits->links()}}
        </div>
    </body>
    </x-app-layout>
</html>