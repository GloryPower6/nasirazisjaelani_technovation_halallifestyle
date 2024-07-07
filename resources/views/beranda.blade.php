@extends('layouts.app')

@section('title', 'Beranda - Halal Lifestyle Information')

@section('content')
<div class="pl-11">
    <div class="container mx-auto">
        <div class="my-12">
            <p>Temukan tips, panduan dan informasi seputar gaya hidup islami.</p>
        </div>

        <h3 class="text-xl font-bold mb-6">Artikel dan Berita</h3>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach ($news as $newsItem)
                <div class="bg-white p-6 rounded-lg shadow-lg">
                    <h4 class="text-lg font-semibold mb-2">{{ $newsItem->title }}</h4>
                    <p class="text-gray-700 mb-4">{{ Str::limit($newsItem->content, 24) }}</p>
                    <a href="/berita/{{ $newsItem->slug }}" class="text-blue-600 hover:text-blue-800">Baca Selengkapnya</a>
                </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
