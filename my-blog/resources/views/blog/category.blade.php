@extends('layouts.master')
@section('title','Piposever')
   
@section('content')
<main>
<div class="wrapper">

<div class="navSpace"></div>
<div class="categoryNames">
    <h2>{{$category}} Kategorisi</h2>
    <p>{{$postCount}} blog yazısı</p>
</div>

@livewire('category', ['category' => $category])
@endsection
</div>
</main>
