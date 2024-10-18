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
        <form action="{{ route('items.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <h2>Tambahkan Barang</h2>

            <label for="name">Nama:</label>
            <input type="text" id="name" name="name">

            <label for="image">Image:</label>
            <input type="file" id="image" name="image">

            <label for="merk">Merk Barang:</label>
            <input type="text" id="merk" name="merk">

            <label for="specifications">Spesifikasi</label>
            <input type="text" id="specifications" name="specifications">

            <label for="condition">Kondisi Barang:</label>
            <select id="condition" name="condition" required>
                <option value="">Pilih kondisi</option>
                <option value="baru">Baru</option>
                <option value="bekas">Bekas</option>
            </select>
            
            <label for="stock">Stok:</label>
            <input type="text" id="stock" name="stock">

            <label for="locate">lokasi Barang:</label>
            <textarea id="locate" name="locate"></textarea>

            <button type="submit">Simpan</button>
        </form>
    </body>
@endsection