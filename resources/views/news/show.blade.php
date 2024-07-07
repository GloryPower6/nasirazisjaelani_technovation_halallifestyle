@extends('layouts.app')

@section('title', 'Detail Berita - Halal Lifestyle Information')

@section('content')
<div class="pl-11">
    <div class="container mx-auto">
        <div class="my-12">
            <h1 class="text-3xl font-bold mb-6">{{ $newsItem->title }}</h1>
            <p>{{ $newsItem->content }}</p>
            <a href="/" class="text-blue-600 hover:text-blue-800 mt-4 inline-block">Kembali ke Beranda</a>
        </div>
    </div>
</div>
@endsection
