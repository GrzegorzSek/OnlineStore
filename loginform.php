<div class="modal fade" id="signIn" tabindex="-1" role="dialog" aria-labelledby="signIn" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="signIn">Logowanie</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form class="form-login">
          <div class="form-row">
            <div class="form-group col-12">
              <div id="message"></div>
              <label for="email">Adres e-mail</label><br>
              <input type="email" name="email" placeholder="email" class="form-control" id="email" required/><br>
              <label for="password">Hasło</label><br>
              <input type="password" name="password" placeholder="password" class="form-control" id="password" required/><br>
            </div>
            <div class="form-group col-12 text-right">
              <a type="button" data-toggle="modal" href="#signUp">Nie masz konta? Zarejestruj się.</a>
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Zamknij</button>
              <button type="button" name="but_submit" class="btn btn-primary" id="but_submit">Zaloguj</buton>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
