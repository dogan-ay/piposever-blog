@extends('layouts.master')
@section('title','Piposever')
   
@section('content')
<main>
<div class="wrapper">
@livewire('category', ['category' => $category])
@endsection
</div>
</main>
