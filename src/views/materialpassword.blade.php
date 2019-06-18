<div class="form-group @if (isset($errors) && $errors->has($name)) has-error @endif">
	<?php
    	$attrs = array('class' => 'fundstart-material-input');
		if (isset($place_holder))
		{
			$attrs['placeholder'] = $place_holder;
		}
		if (isset($attribute))
		{
			$attrs = array_merge($attrs, $attribute);
		}
    ?>
    @if (isset($title) && (strlen($title) > 0))
    	{{ Form::label($name, $title, array('class' => 'control-label')) }} @if($forgot)<a href="javascript:void(0)" class="pull-right">@lang('general.FORGET_PASSWORD') </a>@endif
    @endif
    {{ Form::password($name, $attrs) }}

    @if (isset($hin) && (strlen($hin) > 0))
	    <div class="note">
	        {{ $hin }}
	    </div>
    @endif
    @if (isset($errors) && $errors->has($name))
    	@foreach ($errors->get($name) as $error)
			<div class="invalid-feedback" style="display: block;">{{ $error }}</div>
		@endforeach
    @endif
</div>
