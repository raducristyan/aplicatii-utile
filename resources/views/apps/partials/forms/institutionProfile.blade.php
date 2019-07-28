<form class="">
    <div class="form-group">
        <label for="institution_email">Adresa de email</label>
        <input type="email" class="form-control" id="institution_email" aria-describedby="institutionEmailHelp" v-model="forms.institutionProfile.email">
        <small id="institutionEmailHelp" class="form-text text-muted">Adresa de email a instituției.</small>
    </div>

    <div class="form-group">
        <label for="institution_name">Denumire</label>
        <input type="text" class="form-control" id="institution_name" aria-describedby="institutionNameHelp" v-model="forms.institutionProfile.name">
        <small id="institutionNameHelp" class="form-text text-muted">Denumirea instituției.</small>
    </div>
    <div class="form-group">
        <label for="cif">Codul fiscal</label>
        <input type="text" class="form-control" id="cif" aria-describedby="institutionCifHelp" v-model="forms.institutionProfile.cif">
        <small id="institutionCifHelp" class="form-text text-muted">Codul fiscal al instituției.</small>
    </div>
    <div class="form-group">
        <label for="institution_phone">Telefon</label>
        <input type="text" class="form-control" id="institution_phone" aria-describedby="institutionPhoneHelp" v-model="forms.institutionProfile.phone">
        <small id="institutionPhonelHelp" class="form-text text-muted">Numărul de telefon.</small>
    </div>
    <div class="form-group">
        <label for="institutionFax">Fax</label>
        <input type="text" class="form-control" id="institutionFax" aria-describedby="institutionFaxHelp" v-model="forms.institutionProfile.fax">
        <small id="institutionFaxlHelp" class="form-text text-muted">Numărul de fax.</small>
    </div>
    <div class="form-group">
        <label for="institution_bank">Banca</label>
        <input type="text" class="form-control" id="institution_bank" aria-describedby="institutionBankHelp" v-model="forms.institutionProfile.bank">
        <small id="institutionBankHelp" class="form-text text-muted">Instituția bancară.</small>
    </div>
    <div class="form-group">
        <label for="institution_iban">Contul IBAN</label>
        <input type="text" class="form-control" id="institution_iban" aria-describedby="institutionIbanHelp" v-model="forms.institutionProfile.iban">
        <small id="institutionIbanlHelp" class="form-text text-muted">Numărul contului de trezorerie sau bancar.</small>
    </div>
</form>