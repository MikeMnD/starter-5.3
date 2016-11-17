<div class="row">
    <div class="col-sm-12">
        <label>{{ $field->getLabel() }}</label>
    </div>

    @foreach($builder->fields() as $field)
        <div class="col-sm-6">
            {!! $field->render() !!}
        </div>
    @endforeach
</div>