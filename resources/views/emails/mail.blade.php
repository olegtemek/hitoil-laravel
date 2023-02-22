<p>Имя: {{$mailData['name']}}</p>
<p>Номер телефона: {{$mailData['number']}}</p>

@if ($mailData['city_title'])
    <p>Город: {{$mailData['city_title']}}</p>
@endif
@if ($mailData['factory_title'])
    <p>Завод: {{$mailData['factory_title']}}</p>
@endif
@if ($mailData['volume'])
    <p>Объем: {{$mailData['volume']}}</p>
@endif
@if ($mailData['product_title'])
    <p>Продукция: {{$mailData['product_title']}}</p>
@endif

@if ($mailData['product'])
    <p>Товар: {{$mailData['product']['title']}}</p>
    <p>Цена: {{$mailData['product']['price']}}</p>
    <p>Количество: {{$mailData['product']['qty']}}</p>
@endif