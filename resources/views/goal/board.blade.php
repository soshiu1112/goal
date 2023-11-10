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
        <a href = "/recruit">募集する</a>
        <a href = "/profile">プロフィール登録</a>
        <div class = 'matches'>
            <div class = 'match'>
                <h2 class='title'>募集者一覧</h2>
                <p class = 'body'> レートやその他情報
                    <a href = "/room">対戦申し込みリンク</a>
                </p>
            </div>
        </div>
    </body>
    </x-app-layout>
</html>