<form class="hidden">
    <div class="alert alert-danger" role="alert" v-if="Object.keys(errors).length > 0">
        <i class="fal fa-exclamation-triangle"></i> Formularul nu este valid!
    </div>
    <div class="form-group">
        <label for="user_email">Adresa de email</label>
        <input type="email" class="form-control" name="user_email" id="user_email" aria-describedby="userEmailHelp" placeholder="Introduceți adresa de email" value="{{ auth()->user()->email ?? ''}}" readonly>
        <small id="userEmailHelp" class="form-text text-muted">Adresa de email al contului dumneavoastră</small>
    </div>
    <div class="form-group">
        <label class="">Parola veche</label>
        <input type="password" name="old_password" placeholder="*******" class="form-control" :class="{'is-invalid': errors.old_password}" v-model="userPassword.old_password">
        <small id="userPasswordHelp" class="form-text text-warning" v-if="errors.old_password">@{{ errors.old_password }}</small>
        <small id="userPasswordHelp" class="form-text text-muted" v-else>Introduceți parola actuală a contului dumneavoastră</small>
    </div>
    <div class="form-group">
        <label class="">Parola nouă</label>
        <input type="password" name="new_password" placeholder="*******" class="form-control" :class="{'is-invalid': errors.new_password}" v-model="userPassword.new_password">
        <small id="userPasswordHelp" class="form-text text-warning" v-if="errors.new_password">@{{errors.new_password}}</small>
        <small id="userPasswordHelp" class="form-text text-muted" v-else>Noua parolă trebuie să fie diferită de vechea parolă și conțină minimum 6 caractere.</small>
    </div>
    <div class="form-group">
        <label class="">Confirmare parolă</label>
        <input type="password" name="new_password_confirmation" placeholder="*******" class="form-control" :class="{'is-invalid': errors.new_password}" v-model="userPassword.new_password_confirmation">
        <small id="userConfirmPasswordHelp" class="form-text text-warning" v-if="errors.new_password">@{{errors.new_password}}</small>
        <small id="userConfirmPasswordHelp" class="form-text text-muted" v-else>Confirmați noua parolă.</small>
    </div>
</form>