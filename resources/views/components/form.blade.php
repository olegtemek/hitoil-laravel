<section class="form">
  <div class="container">
    <div class="form__wrapper">
      <div class="form__left">
        <img src="{{ Vite::asset('resources/assets/man.png') }}" alt="Мужик для формы">
      </div>
      <div class="form__right">
        <h2 class="title">Оставить заявку</h2>
        <p>
          мы ответим на все интересующие вопросы
        </p>
        <p>
          предоставим оперативный просчет по доставке
        </p>
        <p>
          предложим лучшие условия
        </p>

        <div class="form__right-row">
          <input type="text" placeholder="Имя">
          <input type="text" placeholder="Телефон" class="number-input">
        </div>
        <div class="form__right-row">
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