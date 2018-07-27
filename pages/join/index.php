<div class="row container section valign-wrapper forms">
  <form class="col s12">

    <div class="row">

      <div class="input-field col s12 m4">
        <i class="material-icons prefix">account_circle</i>
        <input id="first_name" type="text" class="validate">
        <label for="first_name">Имя</label>
      </div>

      <div class="input-field col s12 m4">
        <input id="last_name" type="text" class="validate">
        <label for="last_name">Фамилия</label>
      </div>

      <div class="input-field col s12 m4">
        <input type="text" class="datepicker">
        <label for="birthdate">Дата рождения</label>
      </div>

    </div>

    <div class="row">

      <div class="input-field col s12 m4">
        <i class="material-icons prefix">account_balance</i>
        <select>
          <option value="" disabled selected>Факультет / Институт</option>
          <option value="1">Option 1</option>
          <option value="2">Option 2</option>
          <option value="3">Option 3</option>
        </select>
        <label>Я не шляпа из Гарри Потера, но ты должен выбрать:</label>
      </div>

      <div class="col s12 m4">
        <div class="row">
          <div class="input-field col s12">
            <input type="text" id="autocomplete-input" class="autocomplete">
            <label for="autocomplete-input">Группа</label>
          </div>
        </div>
      </div>

      <div class="input-field col s12 m4">
        <select>
          <option value="" disabled selected>Форма обучения</option>
          <option value="1">Бюджет</option>
          <option value="2">Контракт</option>
        </select>
        <label>Если контракт... не плач.</label>
      </div>

    </div>

    <div class="row">

      <div class="input-field col s12 m6">
        <i class="material-icons prefix">smartphone</i>
        <input id="icon_telephone" type="tel" class="validate">
        <label for="icon_telephone">Телефон</label>
      </div>

      <div class="input-field col s12 m6">
        <input id="email" type="email" class="validate">
        <label for="email">Email</label>
      </div>

    </div>

    <div class="row">
      <div class="input-field col s12">
        <i class="material-icons prefix">mode_edit</i>
        <textarea id="icon_prefix2" class="materialize-textarea"></textarea>
        <label for="icon_prefix2">Адресс</label>
      </div>
    </div>

    <div class="row right-align">
      <button class="btn waves-effect waves-light" type="submit" name="action">Жмякай
        <i class="material-icons right">send</i>
      </button>
    </div>

  </form>
</div>