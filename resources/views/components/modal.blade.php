<section class="modal">
  <div class="modal__wrapper">
    <span>&#9587;</span>
    
    @if(request()->is('/'))
    <h4>Получите бесплатный доступ к лучшим ценамм на  <p>нефтепродукты, СУГи, минеральные удобрения и другие сырьевые товары</p></h4>
   
    @else
    <h4>Оставить заявку</h4>
    @endif
    <input type="text" placeholder="Имя">
    <input type="text" class="number-input" placeholder="Телефон">
    <div class="form-group">
      <input type="checkbox" id="checkbox-modal" checked>
      <label for="checkbox-modal">Даю согласие на сбор и обработку моих данных</label>
    </div>
    <button class="b-btn send-modal">Отправить</button>
  </div>
</section>