@extends('back.layouts.master')
@section('title',$article->title.' İçeriğini Güncelle')
@section('content') 
<div class="card shadow nb-4">
    <div class="card-body">
        <form method="POST" action="{{route('admin.makaleler.update',$article->id)}}" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="title">İçerik Başlığı</label>
                <input type="text" name="title" value="{{$article->title}}" class="form-control" required></input>
            </div>
            <div class="form-group">
                <label for="category">İçerik Kategorisi</label>
                <input type="text" name="category" value="{{$article->category}}" class="form-control" required></input>
            </div>
            <div class="form-group">
                <label for="content">Metin</label>
                <textarea name="content" id="editor" class="form-control" rows="10" required>{!!$article->body!!}</textarea>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary btn-block">Blog İçeriğini Güncelle</button>
            </div>
        </form>
    </div>

</div>

@endsection
@section('css')
@endsection
@section('js')

@endsection