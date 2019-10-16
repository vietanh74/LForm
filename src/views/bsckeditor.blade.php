<div class="form-group">
  {{ Form::label($name, $title, ['class' => 'control-label']) }}
  <textarea class="editor1-{{ $name }}" name="{{ $name }}" style="display: none;">
      {{ @$value }}
  </textarea>
</div>
@push('script')
<script type="text/javascript">
  ClassicEditor.create(document.querySelector('.editor1-{{ $name }}'), {
    language: 'vi',
    ckfinder: {
      uploadUrl: '/js/plugin/ckeditor5/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files&responseType=json'
    }
  })
  .then(editor => {
    editor.editing.view.change( writer => { writer.setAttribute( 'spellcheck', 'false', editor.editing.view.document.getRoot() ); } );
  })
  .catch(error => {
    console.error( error );
  });
</script>
@endpush
