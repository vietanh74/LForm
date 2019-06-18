<div class="form-group @if (isset($errors) && $errors->has($name)) has-error @endif">
	<?php
    	$attrs = array('class' => 'form-control', 'style' => 'width:100%');
		if (isset($attribute))
		{
			$attrs = array_merge($attrs, $attribute);
		}

		$options= [];
		foreach ($items as $item)
		{
			$options+= [$item['value'] => $item['name']];
		}
    ?>

	@if (isset($title))
		{{ Form::label($name, $title, array('class' => 'control-label')) }}
	@endif
	{{ Form::select($name, $options, $value, $attrs) }}
	@if (isset($errors) && $errors->has($name))
    	@foreach ($errors->get($name) as $error)
			<div class="invalid-feedback" style="display: block;">{{ $error }}</div>
		@endforeach
    @endif
</div>
