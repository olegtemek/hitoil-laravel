<section class="form__analog">
  <div class="container">
    @if (isset($title))
    <h2 class="title">{!! $title !!}</h2>
    @else
    <h2 class="title">Остались вопросы?<br>Заполните заявку</h2>    
    @endif
    
    <div class="form__analog__wrapper">
      <div class="form__analog__left">
        <p>
          мы ответим на все интересующие вопросы
        </p>
        <p>
          предоставим оперативный просчет по доставке
        </p>
        <p>
          предложим лучшие условия
        </p>
      </div>
      <div class="form__analog__right">
        <div class="form__analog__right-row">
          <input type="text" placeholder="Имя">
          <input type="text" placeholder="Телефон" class="number-input">
        </div>
        <div class="form__analog__right-row">
          <button class="send-form">Отправить</button>

          <div class="form-group">
            <input type="checkbox" id="checkbox" checked>
            <label for="checkbox">Даю согласие на сбор и обработку моих данных</label>
          </div>


        </div>
      </div>
    </div>
  </div>
</section>