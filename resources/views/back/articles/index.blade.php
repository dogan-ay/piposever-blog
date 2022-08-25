@extends('back.layouts.master')
@section('title','Tüm İçerikler')
@section('content')

<div class="card shadow mb-4">
                        
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>İçerik Başlığı</th>
                                            <th>Kategori</th>
                                            <th>Oluşturulma Tarihi</th>
                                            <th>Güncelleme Tarihi</th>
                                            <th>İşlemler</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($articles as $article)
                                        <tr>
                                            <td>{{$article->title}}</td>
                                            <td>{{$article->category}}</td>
                                            <td>{{$article->created_at}}</td>
                                            <td>{{$article->updated_at}}</td>
                                            <td>
                                                <a href="{{url("/blog/$article->id")}}" title="Görüntüle" class="btn btn-sm btn-success"><i class="fa fa-eye"></i></a>
                                                <a href="{{route('admin.makaleler.edit',$article->id)}}" title="Düzenle" class="btn btn-sm btn-primary"><i class="fa fa-pen"></i></a>
                                                <a href="{{route('admin.delete.article', $article->id)}}" title="Sil" class="btn btn-sm btn-danger"><i class="fa fa-times"></i></a>

                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

@endsection