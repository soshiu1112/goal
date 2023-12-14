<!DOCTYPE HTML>
<html lang = "ja">
    <head>
        <meta charset = "utf-8">
        <title>Board</title>
        <link rel = "stylesheet" href = "/css/board.css">
    </head>
    <x-app-layout>
        <x-slot name="header">募集作成</x-slot>
        <body>
            <form action="/" method="POST">
                @csrf
                
                <div class = "box18"> 
                    <p>対戦数について<br>
                    <input type = "hidden" name = "room[creater_id]" value = {{Auth::user()->id}}>
                       
                    <input
                        type="number"
                        
                        name = "room[matches]"
                        placeholder = "数値を入力"
                    >
                    </p>
                    <div class = "regulations">
                        <p>希望するレートの範囲</p>
                        <select name = "room[regulation_id]">
                            
                            @foreach($regulations as $regulation)
                                <option value="{{ $regulation->id }}">{{ $regulation->rate }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <p>対戦数についての備考（任意）<br>
                       <textarea cols="30" rows="5" name="room[remarks]"></textarea> 
                    </p>
                </div>  
                <input type="submit" class= "reset flat border" value = "募集する"/>
            </form>
            <a class = "btn btn-border" href = '/'>戻る</a>
        </body>
    </x-app-layout>
    
        