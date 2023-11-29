</head>
    <x-app-layout>
        <x-slot name="header">募集掲示板</x-slot>
    <body>
        <h1>対戦募集掲示板</h1>
        <a href = "/createRecruit">募集する</a>
        <a href = "/profile">プロフィール登録</a>
        
            @foreach($recruits as $recruit)
                <div class = 'match'>
                    <h2 class='title'>{{$recruit->user->name}} 
                        
                        
                    </h2>
                    <p class = 'body'> 
                        <a href = "/room">対戦申し込みリンク</a>
                    </p>
                    <p>対戦数{{$recruit->matches}}</p>
                    <p>レート上限{{ $recruit->regulation->rate}}</p>
                    
                    <p> {{$recruit->remarks}}</p>
                    
                </div>
            @endforeach
            
        </div>
        <div class='paginate'>
            {{$recruits->links()}}
        </div>
    </body>
    </x-app-layout>
</html>