<!-- Customer Field -->
<div class="form-group col-sm-6">
    {!! Form::label('customer', 'Customer:') !!}
    {!! Form::text('customer', null, ['class' => 'form-control','maxlength' => 191,'maxlength' => 191]) !!}
</div>

<!-- Sales Revenue Field -->
<div class="form-group col-sm-6">
    {!! Form::label('sales_revenue', 'Sales Revenue:') !!}
    {!! Form::number('sales_revenue', null, ['class' => 'form-control']) !!}
</div>