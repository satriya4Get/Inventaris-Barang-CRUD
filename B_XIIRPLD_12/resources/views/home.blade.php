@extends('layouts.app')

@section('content')
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
        }

        .container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
        }

        .card {
            background: #fff;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            margin: 15px;
            overflow: hidden;
            width: 300px;
            transition: transform 0.3s;
        }

        .card:hover {
            transform: scale(1.05);
        }

        .card-img {
            width: 100%;
            height: 200px;
            object-fit: cover;
        }

        .card-content {
            padding: 15px;
        }

        .card-title {
            font-size: 1.5em;
            margin: 0;
        }

        .card-category {
            color: #888;
            font-size: 0.9em;
        }

        .card-price {
            color: #e74c3c;
            font-weight: bold;
            font-size: 1.2em;
        }

        .card-date,
        .card-stock,
        .card-description {
            margin: 5px 0;
        }
    </style>
    <div class="container">
        @foreach ($item as $product)
            <div class="card">
                <td><img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}"></td>
                <div class="card-content">
                    <h3 class="card-title">{{ $product->name }}</h3>
                    <p class="card-category">{{ $product->category }}</p>
                    <p class="card-price">Rp. {{ $product->price }}</p>
                    <p class="card-date">{{ $product->date }}</p>
                    <p class="card-stock">Stock: {{ $product->stock }}</p>
                    <p class="card-description">{{ $product->description }}</p>
                </div>
            </div>
        @endforeach
    </div>
@endsection
