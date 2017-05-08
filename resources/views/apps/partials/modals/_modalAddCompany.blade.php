<div class="modal fade" id="add-companies" tabindex="-1" role="dialog" aria-labeled-by="#add-company">
    <div class="modal-dialog">
        {{-- Modal content --}}
        <div class="modal-content">
            {{-- Modal header --}}
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="add-company">Adăugare firmă</h4>
            </div>
            {{-- End modal header --}}
            {{-- Modal body --}}
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-10 col-md-offset-1 alert alert-danger" v-if="!formAddCompany.isEmpty && !formAddCompany.isValid">
                        <strong>Verificați următoarele erori!!!</strong>
                        <li v-if="company.name.hasError">
                            @{{company.name.hasError}}
                        </li>
                        <li v-if="company.cif.hasError">
                            @{{company.cif.hasError}}
                        </li>
                        <li v-if="company.authorized.name.hasError">
                            @{{company.authorized.name.hasError}}
                        </li>
                        <li v-if="company.authorized.cnp.hasError">
                            @{{company.authorized.cnp.hasError}}
                        </li>
                        <li v-if="company.email.hasError">
                            @{{company.email.hasError}}
                        </li>
                        <li v-if="company.iban.hasError">
                            @{{company.iban.hasError}}
                        </li>
                        <li v-if="company.bank.hasError">
                            @{{company.bank.hasError}}
                        </li>
                        <li v-if="county.hasError">
                            @{{county.hasError}}
                        </li>
                        <li v-if="city.hasError">
                            @{{city.hasError}}
                        </li>
                        <li v-if="company.street.hasError">
                            @{{company.street.hasError}}
                        </li>
                        <li v-if="company.number.hasError">
                            @{{company.number.hasError}}
                        </li>
                        <li v-if="company.postalCode.hasError">
                            @{{company.postalCode.hasError}}
                        </li>
                    </div>
                    {!! Form::open( ['url' => 'api/company', 'method' => 'POST', 'class' => 'form-horizontal'] ) !!}
                    @include('apps.partials.forms._formAddCompany')
                </div>
            </div>
            {{-- End modal body --}}
            {{-- Modal footer --}}
            <div class="modal-footer">
                <button type="button" class="btn btn-warning" data-dismiss="modal">Renunță</button>
                <button type="submit" class="btn btn-primary" :disabled="!formAddCompany.isCompleted">Salvează</button>
            </div>
            {!! Form::close() !!}
        </div><!-- /.modalAddCompany-content -->
    </div><!-- /.modalAddCompany-dialog -->
</div><!-- /.modalAddCompany -->
