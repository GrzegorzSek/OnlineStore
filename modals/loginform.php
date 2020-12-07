<div class="modal fade" id="signIn" tabindex="-1" role="dialog" aria-labelledby="signIn" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <div class="allGood"><p>Udało Ci się zalogować!</p></div>
        <div class="somethingWentWrong"><p>Błędny e-mail lub hasło!</p></div>
        <div class="almostGood"><p>Uzupełnij wszystkie pola!</p></div>
        <h5 class="modal-title" id="signIn">Logowanie</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="error" id="error"></div>
        <form class="form-login">
          <div class="form-row">
            <div class="form-group col-md-12">
              <label for="email">Adres e-mail</label><br>
              <input type="email" name="email" placeholder="e-mail" class="form-control" id="email" required/><br>
              <label for="password">Hasło</label><br>
              <input type="password" name="password" placeholder="hasło" class="form-control" id="password" required/><br>
            </div>
            <div class="form-group col-12 text-right">
              <a type="button" data-toggle="modal" href="#signUp">Nie masz konta? Zarejestruj się.</a>
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Zamknij</button>
              <button type="button" name="but_submit" class="btn btn-primary" id="but_submit">Zaloguj</buton>
            </div>
          </div>
        </form>
        <div class="text-center">
          <hr>
          <a class="text-center" type="button" data-dismiss="modal" data-toggle="modal" href="#forgottenPassword">Zapomniałeś hasło? Kliknij tutaj.</a>
        </div>
      </div>
    </div>
  </div>
</div>
