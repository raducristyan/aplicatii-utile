<div class="row">

    <div class="form-group" >

        {!! Form::label('category', 'Categorie', ['class' => 'col-md-3 control-label']) !!}
        <div class="col-md-8">
            <input type="text" name="category" @keyup="validateCategoryForm" v-model="category.val" class="form-control" id="category" placeholder="Categoria vehicolului..." value="{{old('category')}}" required>
        </div>

    </div>

</div>
