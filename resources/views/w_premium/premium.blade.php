<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Агентсво недвижимости w-premium</title>

    <link rel="stylesheet" href="/css/premium.css">
    <link href="https://fonts.googleapis.com/css?family=Fira+Sans" rel="stylesheet">

    <style>
        @import url('https://fonts.googleapis.com/css?family=Fira+Sans');
    </style>

</head>
<body>

<div class="slides">
@include('w_premium.index')
@include('w_premium.mission')
@include('w_premium.reviews')
@include('w_premium.contacts')
@include('w_premium.services')
</div>
<ul class="menu">
    <div class="abs"> </div>
    <a href="#index" id="link_to_index"><li class="cell">Главная</li></a>
    <a href="#services" id ="link_to_services"><li class="cell">Услуги</li></a>
    <a href="#mission" id ="link_to_mission"><li class="cell">Наша миссия</li></a>
    <a href="#reviews" id ="link_to_reviews"><li class="cell">Отзывы</li></a>
    <a href="#contacts" id ="link_to_contacts"><li class="cell">Контакты</li></a>
    <li class="contacts">г. Екатеринбург,<br>
        ул. Московская, 195,<br>
        офис 1118</li>
   {{-- <li class="cell">+7 (343) 271-0-272</li>
    <li class="cell">г.Екатеринбург,<br>
        ул.Московская, 195, <br>
        офис 1118
    </li>--}}
</ul>
<script src="/js/premium.js"> </script>
</body>
</html>