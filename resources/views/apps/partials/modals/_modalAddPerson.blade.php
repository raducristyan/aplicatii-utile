<div class="modal fade" id="add-people" tabindex="-1" role="dialog" aria-labeled-by="#add-person">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            {{-- Modal header --}}
            <div class="modal-header">
                <h4 class="modal-title" id="add-person">Adăugare persoană</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            {{-- End modal header --}}
            {{-- Modal body --}}
            <div class="modal-body">
                <div class="">
                    <div class="col-md-10 col-md-offset-1 alert alert-danger" v-if="!formAddPerson.isEmpty && !formAddPerson.isValid">
                        <strong>Verificați următoarele erori!!!</strong>
                        <li v-if="person.name.hasError">
                            @{{person.name.hasError}}
                        </li>
                        <li v-if="person.cnp.hasError">
                            @{{person.cnp.hasError}}
                        </li>
                        <li v-if="person.email.hasError">
                            @{{person.email.hasError}}
                        </li>
                        <li v-if="county.hasError">
                            @{{county.hasError}}
                        </li>
                        <li v-if="city.hasError">
                            @{{city.hasError}}
                        </li>
                        <li v-if="person.street.hasError">
                            @{{person.street.hasError}}
                        </li>
                        <li v-if="person.number.hasError">
                            @{{person.number.hasError}}
                        </li>
                        <li v-if="person.postalCode.hasError">
                            @{{person.postalCode.hasError}}
                        </li>
                    </div>
                    {!! Form::open( ['url' => 'api/person', 'method' => 'POST'] ) !!}
                    @include('apps.partials.forms._formAddPerson')
                </div>
            </div>
            {{-- End modal body --}}
            {{-- Modal footer --}}
            <div class="modal-footer d-flex flex-row-reverse">
                <button type="button" class="btn btn-warning" data-dismiss="modal">Renunță</button>
                <button type="submit" class="btn btn-primary" :disabled="!formAddPerson.isCompleted">Salvează</button>
            </div><!-- End modal footer -->
            {!! Form::close() !!}
        </div><!-- /.modalAddPerson-content -->
    </div><!-- /.modalAddPerson-dialog -->
</div><!-- /.modalAddPerson -->
