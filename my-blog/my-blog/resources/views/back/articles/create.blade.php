@extends('back.layouts.master')
@section('title','İçerik Oluştur')
@section('content')
<div class="card shadow nb-4">
    <div class="card-body">
        <form method="POST" action="{{route('admin.makaleler.store')}}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="title">İçerik Başlığı</label>
                <input type="text" name="title" class="form-control" required></input>
            </div>
            <div class="form-group">
                <label for="category">İçerik Kategorisi</label>
                <input type="text" name="category" class="form-control" required></input>
            </div>
            <div class="form-group">
                <label for="content">Metin</label>
                <textarea name="content" id="editor" class="form-control" rows="10" required></textarea>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary btn-block">Blog İçeriğini Oluştur</button>
            </div>
        </form>
    </div>

</div>

@endsection
@section('css')
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
@endsection
@section('js')
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
<script>
    $(document).ready(function() {
  $('#editor').summernote(
      {
          height:300
      }
  );
});
</script>
@endsection