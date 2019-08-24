<form class="hidden">
    <div class="form-group">
        <label for="institution_email">Adresa de email</label>
        <input type="email" class="form-control" :class="{'is-invalid': errors.email}" id="institution_email" aria-describedby="institutionEmailHelp" v-model="profile.email">
        <small id="institutionEmailHelp" class="form-text text-muted" :class="{'invalid-feedback': errors.email}" v-text="errors.email">Adresa de email a instituției.</small>
    </div>

    <div class="form-group">
        <label for="institution_name">Denumire</label>
        <input type="text" class="form-control" :class="{'is-invalid': errors.name}" id="institution_name" aria-describedby="institutionNameHelp" v-model="profile.name">
        <small id="institutionNameHelp" class="form-text text-muted" :class="{'invalid-feedback': errors.name}" v-text="errors.name">Denumirea instituției.</small>
    </div>
    <div class="form-group">
        <label for="cif">Codul fiscal</label>
        <input type="text" class="form-control" :class="{'is-invalid': errors.cif}" id="cif" aria-describedby="institutionCifHelp" v-model="profile.cif" disabled>
        <small id="institutionCifHelp" class="form-text text-muted" :class="{'invalid-feedback': errors.cif}" v-text="errors.cif">Codul fiscal al instituției.</small>
    </div>
    <div class="form-group">
        <label for="institution_phone">Telefon</label>
        <input type="text" class="form-control" :class="{'is-invalid': errors.phone}" id="institution_phone" aria-describedby="institutionPhoneHelp" v-model="profile.phone">
        <small id="institutionPhonelHelp" class="form-text text-muted" :class="{'invalid-feedback': errors.phone}" v-text="errors.phone">Numărul de telefon.</small>
    </div>
    <div class="form-group">
        <label for="institutionFax">Fax</label>
        <input type="text" class="form-control" :class="{'is-invalid': errors.fax}" id="institution_fax" aria-describedby="institutionFaxHelp" v-model="profile.fax">
        <small id="institutionFaxlHelp" class="form-text text-muted" :class="{'invalid-feedback': errors.fax}" v-text="errors.fax">Numărul de fax.</small>
    </div>
    <div class="form-group">
        <label for="institution_bank">Banca</label>
        <input type="text" class="form-control" :class="{'is-invalid': errors.bank}" id="institution_bank" aria-describedby="institutionBankHelp" v-model="profile.bank">
        <small id="institutionBankHelp" class="form-text text-muted" :class="{'invalid-feedback': errors.bank}" v-text="errors.bank">Instituția bancară.</small>
    </div>
    <div class="form-group">
        <label for="institution_iban">Contul IBAN</label>
        <input type="text" class="form-control" :class="{'is-invalid': errors.iban}" id="institution_iban" aria-describedby="institutionIbanHelp" v-model="profile.iban">
        <small id="institutionIbanlHelp" class="form-text text-muted" :class="{'invalid-feedback': errors.iban}" v-text="errors.iban">Numărul contului de trezorerie sau bancar.</small>
    </div>
</form>