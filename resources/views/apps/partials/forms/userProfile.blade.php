<form class="hidden">
    <div class="form-group">
        <label for="user_email">Adresa de email</label>
        <input type="email" class="form-control" id="user_email_profile" aria-describedby="userEmailHelp" value="{{ auth()->user()->email ?? ''}}" readonly>
        <small id="userEmailHelp" class="form-text text-muted">Adresa de email a contului dumneavostră.</small>
    </div>

    <div class="form-group">
        <label for="first_name">Prenume</label>
        <input type="text" class="form-control" :class="{'border-orange-500': errors.first_name}" id="user_first_name" aria-describedby="userFirstNameHelp" v-model="profile.first_name">
        <small id="userFirstNameHelp" class="form-text text-muted" :class="{'in-valid': errors.first_name}" v-text="errors.first_name">Prenumele dumneavostră.</small>
    </div>
    <div class="form-group">
        <label for="last_name">Nume</label>
        <input type="text" class="form-control" :class="{'border-orange-500': errors.last_name}" id="user_last_name" aria-describedby="userLastNameHelp" v-model="profile.last_name">
        <small id="userLastNameHelp" class="form-text text-muted" :class="{'invalid-feedback': errors.last_name}" v-text="errors.last_name">Numele dumneavoastră.</small>
    </div>
    <div class="form-group">
        <label for="user_job">Funcție</label>
        <input type="text" class="form-control" :class="{'border-orange-500': errors.job}" id="user_job" aria-describedby="userJobHelp" v-model="profile.job">
        <small id="userJoblHelp" class="form-text text-muted" :class="{'invalid-feedback': errors.job}" v-text="errors.job">Funcția în cadrul instituției.</small>
    </div>
    <div class="form-group">
        <label for="user_mobile">Telefon mobil</label>
        <input type="text" class="form-control" :class="{'border-orange-500': errors.mobile}" id="user_mobile" aria-describedby="userMobileHelp" v-model="profile.mobile">
        <small id="userMobilelHelp" class="form-text text-muted" :class="{'invalid-feedback': errors.mobile}" v-text="errors.mobile">Numărul de telefon mobil.</small>
    </div>
    <div class="form-group">
        <label for="user_phone">Telefon</label>
        <input type="text" class="form-control" :class="{'border-orange-500': errors.phone}" id="user_phone" aria-describedby="userPhoneHelp" placeholder="Introduceți numărul telefonului" v-model="profile.phone">
        <small id="userPhonelHelp" class="form-text text-muted" :class="{'invalid-feedback': errors.phone}" v-text="errors.phone">Numărul de telefon.</small>
    </div>
</form>