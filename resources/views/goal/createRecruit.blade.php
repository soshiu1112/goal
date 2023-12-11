<!DOCTYPE HTML>
<html lang = "ja">
    <head>
        <meta charset = "utf-8">
        <title>Board</title>
    </head>
    <x-app-layout>
        <x-slot name="header">募集作成</x-slot>
        <body>
            <form action="/" method="POST">
                @csrf
                
                   
                <p>対戦数について<br>
                
                   <textarea cols="1" rows="1" name="room[matches]"></textarea> 
                </p>
                <div class = "regulations">
                    
                    <select name = "room[regulation_id]">
                        @foreach($regulations as $regulation)
                            <option value="{{ $regulation->id }}">{{ $regulation->rate }}
                            </option>
                        @endforeach
                    </select>
                </div>
                <p>対戦数について（任意）<br>
                   <textarea cols="30" rows="5" name="room[remarks]"></textarea> 
                </p>
                <input type="submit" value = "募集する"/>
            </form>
            <a href = '/'>戻る</a>
        </body>
    </x-app-layout>
    
        