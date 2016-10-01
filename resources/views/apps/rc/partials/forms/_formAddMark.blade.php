<div class="row">

    <div class="form-group" >

        {!! Form::label('mark', 'Marcă', ['class' => 'col-md-3 control-label', 'for' => 'mark']) !!}
        <div class="col-md-8">
          <input type="text" name="mark" @keyup="validateMarkForm" v-model="mark.val" class="form-control" id="mark" placeholder="Marca vehicolului..." value="{{old('mark')}}" required>
        </div>

    </div>

</div>
