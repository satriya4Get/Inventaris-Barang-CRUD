@extends('layouts.app')


@section('content')
<style>
    /* kategori */

        select {
            max-width: 400px;
            padding: 10px;
            font-size: 14px;
            border: 2px solid #4CAF50;
            border-radius: 5px;
            background-color: #f9f9f9;
            color: #333;
            cursor: pointer;
            outline: none;
        }

        select:focus {
            border-color: #45a049;
            box-shadow: 0 0 10px rgba(0, 128, 0, 0.2);
        }

        option {
            padding: 10px;
        }
    /* button */
    #tambah-data-button {
        background-color: #004cff;
        color: #ffffff;
        padding: 10px 20px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        margin-left: 45%;
        margin-bottom: 20px
    }

    #tambah-data-button:hover {
        background-color: rgb(0, 128, 255);
    }
    /* Form */
    form {
        max-width: 500px;
        margin: 40px auto;
        padding: 20px;
        border: 1px solid #ddd;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    label {
        display: block;
        margin-bottom: 10px;
    }

    input,
    textarea {
        width: 100%;
        padding: 10px;
        margin-bottom: 20px;
        border: 1px solid #ccc;
    }

    input[type="submit"] {
        background-color: #4CAF50;
        color: #fff;
        padding: 10px 20px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
    }

    input[type="submit"]:hover {
        background-color: #3e8e41;
    }
</style>
    <body>
        <form action="{{ route('items.update', $item->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <h2>Update Barang</h2>

            <label for="name">Nama:</label>
            <input type="text" id="name" name="name" value="{{ $item->name }}">

            <label for="image">Image:</label>
            <input type="file" id="image" name="image">

            <label for="Category">Kategori:</label>
            <select id="category" name="category" value="{{ $item->category }}">
              <option value="hardware">Hardware</option>
              <option value="software">Software</option>
              <option value="tools">Tools</option>
              <option value="electronics">Electronics</option>
            </select>
            

            <label for="price">Harga:</label>
            <input type="text" id="price" name="price" value="{{ $item->price }}">

            <label for="date">Tanggal:</label>
            <input type="date" id="date" name="date" value="{{ $item->date }}">

            <label for="stock">Stok:</label>
            <input type="text" id="stock" name="stock" value="{{ $item->stock }}">

            <label for="description">Description:</label>
            <textarea id="description" name="description"></textarea value="{{ $item->description }}">

            <button type="submit">Simpan</button>
        </form>
    </body>
@endsection