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
                <select name="category" class="custom-select custom-select-lg mb-3" required>
                    <option value="Pipo">Pipo</option>
                    <option value="Tütün">Tütün</option>
                    <option value="Piposeverler">Piposeverler</option>
                    <option value="Yorumlar">Yorumlar</option>
                </select>                
            </div>
            <div class="form-group">
                <label for="">İçerik Görseli</label>
            <!-- Filepond 
                    <div class="input-group mb-3">

                        <div class="input-group-prepend">
                            <span class="input-group-text" id="">Yükle</span>
                        </div>
                        <div class="custom-file">
                            <input type="file" class="custom-file-input gorselYukle" id="gorsel" name="image" aria-describedby="inputGroupFileAddon01">
                            <label class="custom-file-label" for="gorsel">Görsel seç</label>
                        </div>
                    </div>
            </div>
            -->
            <input type="file" name="image" id="gorsel">
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
@endsection
@section('js')

<script>

</script>
@endsection