<form class="">
    <div class="form-group">
        <label for="user_email">Adresa de email</label>
        <input type="email" class="form-control" id="user_email_profile" aria-describedby="userEmailHelp" placeholder="Introduceți adresa de email" value="{{ auth()->user()->email ?? ''}}" readonly>
        <small id="userEmailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
    </div>

    <div class="form-group">
        <label for="first_name">Prenume</label>
        <input type="text" class="form-control" id="user_first_name" aria-describedby="userFirstNameHelp" placeholder="Introduceți prenumele dumneavoastră" v-model="forms.userProfile.first_name" :value="forms.userProfile.first_name">
        <small id="userFirstNameHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
    </div>
    <div class="form-group">
        <label for="last_name">Nume</label>
        <input type="text" class="form-control" id="user_last_name" aria-describedby="userLastNameHelp" placeholder="Introduceți numele dumneavoastră" v-model="forms.userProfile.last_name" :value="forms.userProfile.last_name">
        <small id="userLastNameHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
    </div>
    <div class="form-group">
        <label for="user_job">Funcție</label>
        <input type="text" class="form-control" id="user_job" aria-describedby="userJobHelp" placeholder="Introduceți funcția dumneavoastră" v-model="forms.userProfile.job" :value="forms.userProfile.job">
        <small id="userJoblHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
    </div>
    <div class="form-group">
        <label for="user_mobile">Telefon mobil</label>
        <input type="text" class="form-control" id="user_mobile" aria-describedby="userMobileHelp" placeholder="Introduceți numărul telefonului mobil" v-model="forms.userProfile.mobile" :value="forms.userProfile.mobile">
        <small id="userMobilelHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
    </div>
    <div class="form-group">
        <label for="user_phone">Telefon</label>
        <input type="text" class="form-control" id="user_phone" aria-describedby="userPhoneHelp" placeholder="Introduceți numărul telefonului" v-model="forms.userProfile.phone" v-model="forms.userProfile.phone" :value="forms.userProfile.phone">
        <small id="userPhonelHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
    </div>
</form> 