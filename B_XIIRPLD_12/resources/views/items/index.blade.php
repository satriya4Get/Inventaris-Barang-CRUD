@extends('layouts.app')

@section('content')
    <style>
        .button-container {
            display: flex;
            justify-content: center;
            /* Pusatkan tombol secara horizontal */
            margin-bottom: 20px;
        }

        /* Button */
        #tambah-data-button {
            background-color: #0066cc;
            color: #ffffff;
            padding: 10px 20px;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            font-size: 16px;
            font-weight: bold;
            transition: all 0.3s ease;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            /* Drop shadow for button */
        }

        #tambah-data-button:hover {
            background-color: #004c99;
            transform: translateY(-3px);
            /* Hover effect: naik sedikit */
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.3);
            /* Enhance shadow on hover */
        }

        .table-container {
            display: flex;
            justify-content: center;

            margin-bottom: 20px;
        }

        /* Table */
        table {
            border-collapse: collapse;
            width: 80%;

            max-width: 1000px;

            margin: 15px 0;
            font-family: 'Arial', sans-serif;
            font-size: 14px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        th,
        td {
            border: 1px solid #dddddd;
            padding: 8px 10px;
            text-align: left;
        }

        th {
            background-color: #f4f4f4;
            font-weight: 600;
            color: #333;
        }

        tr:hover {
            background-color: #f1f1f1;
        }

        img {
            border-radius: 8px;
            width: 120px;
        }

        /* button */
        .action-buttons {
            display: flex;
            gap: 10px;
        }

        .btn-edit,
        .btn-delete {
            padding: 5px 10px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 14px;
        }

        .btn-edit {
            background-color: #28a745;
            color: white;
        }

        .btn-delete {
            background-color: #dc3545;
            color: white;
        }

        .btn-delete:hover {
            background-color: #c82333;
        }

        .btn-edit:hover {
            background-color: #218838;
        }

        @media only screen and (max-width: 768px) {
            table {
                font-size: 12px;
                width: 100%;
            }

            th,
            td {
                padding: 6px;
            }

            img {
                width: 90px;
            }
        }
    </style>

    <div class="button-container">
        <a href="{{ route('items.create') }}">
            <button id="tambah-data-button">Tambah Data</button>
        </a>
    </div>

    <div class="table-container">
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Image</th>
                    <th>Name</th>
                    <th>Category</th>
                    <th>Price</th>
                    <th>Stock</th>
                    <th>Description</th>
                    <th>Entry Date</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($items as $item)
                    <tr>
                        <td>{{ $item->id }}</td>
                        <td><img src="{{ asset('storage/' . $item->image) }}" alt="{{ $item->name }}"></td>
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->merk }}</td>
                        <td>Rp. {{ $item->specifications }}</td>
                        <td>{{ $item->condition }}</td>
                        <td>{{ $item->specifications }}</td>
                        <td>{{ $item->locate }}</td>
                        <td>
                            <div class="action-buttons">
                                <!-- Tombol Edit -->
                                <a href="{{ route('items.edit', $item->id) }}">
                                    <button class="btn-edit">Edit</button>
                                </a>
                                <!-- Tombol Delete -->
                                <form action="{{ route('items.destroy', $item->id) }}" method="POST" class="form-delete">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn-delete">Remove</button>
                                </form>

                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    </div>
    <!-- SweetAlert JS -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.all.min.js"></script>
    <!-- SweetAlert CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script>
        document.querySelectorAll('.form-delete').forEach(form => {
            form.addEventListener('submit', function(event) {
                event.preventDefault();
                Swal.fire({
                    title: "Are you sure?",
                    text: "You won't be able to revert this!",
                    icon: "warning",
                    showCancelButton: true,
                    confirmButtonColor: "#3085d6",
                    cancelButtonColor: "#d33",
                    confirmButtonText: "Yes, delete it!"
                }).then((result) => {
                    if (result.isConfirmed) {
                        form.submit(); // Submit the form if the user confirms
                        Swal.fire({
                            title: "Deleted!",
                            text: "Your file has been deleted.",
                            icon: "success"
                        });
                    }
                });
            });
        });
    </script>
@endsection
