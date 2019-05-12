<form class="">
<div class="form-group">
        <label for="user_email">Adresa de email</label>
        <input type="email" class="form-control" id="user_email_password_form" aria-describedby="userEmailHelp" placeholder="Introduceți adresa de email" value="{{ auth()->user()->email ?? ''}}" readonly>
        <small id="userEmailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
    </div>
    <div class="form-group">
        <label class="">Parola veche</label>
        <input type="old_password" value="" placeholder="*******" class="form-control">
        <small id="userPasswordHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
    </div>
    <div class="form-group">
        <label class="">Parola nouă</label>
        <input type="new_password" value="" placeholder="*******" class="form-control">
        <small id="userPasswordHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
    </div>
    <div class="form-group">
        <label class="">Confirmare parolă</label>
        <input type="new_password_confirmation" value="" placeholder="*******" class="form-control">
        <small id="userConfirmPasswordHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
    </div>
</form> 