<label for="{{ $field->getName() }}">{{ $field->getLabel() }}</label>
<input type="checkbox" id="{{ $field->getName() }}" name="{{ $field->getName() }}" value="{{ $field->getValue() }}" {!! $field->attributes() !!}>
<span>{{ $errors->first($field->getName()) }}</span>