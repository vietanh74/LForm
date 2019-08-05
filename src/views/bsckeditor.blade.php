<div class="form-group">
    {{ Form::label($name, $title, ['class' => 'control-label']) }}
    <textarea class="ckeditor" class="editor1" rows="10" cols="80" name="{{ $name }}">
		{{ @$value }}
	</textarea>
</div>
@section ('ckeditor_script')
CKEDITOR.inline('editor1');
$('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
  checkboxClass: 'icheckbox_minimal-green',
  radioClass: 'iradio_minimal-green'
});
@endsection
