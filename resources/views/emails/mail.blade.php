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

@if($mailData['cart'])
    <table>
        <thead>
            <tr>
                <td>
                    Название
                </td>
                <td>
                    Количество
                </td>
                <td>
                    Цена
                </td>
            </tr>
        </thead>

        <tbody>
            @foreach (\Cart::getContent() as $item)
            <tr>
                <td>
                    {{$item->name}}   
                </td>
                <td>
                    {{$item->quantity}}   
                </td>
                <td>
                    {{$item->getPriceSum()}} ТГ
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endif