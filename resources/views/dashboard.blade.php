<x-app-layout>
    <style>
        .card-container {
            position: relative;
            display: flex;
            flex-direction: column;
        }

        .card-content {
            padding: 1rem;
            color: #333;
        }

        .card-actions {
            position: absolute;
            bottom: 0.5rem;
            right: 0.5rem;
            margin: 3px;
        }

        .card-actions button {
            margin-left: 0.5rem;
            padding: 0.5rem;
            border: none;
            border-radius: 4px;
            color: #fff;
            cursor: pointer;
        }

        .edit-button {
            background-color: #1e90ff;
        }

        .edit-button:hover {
            background-color: #1976d4;
        }

        .delete-button {
            background-color: #ff0000;
        }

        .delete-button:hover {
            background-color: #c70808;
        }

        .alert-success {
            padding: 1rem;
            margin-bottom: 1rem;
            border: 1px solid #155724;
            background-color: #d4edda;
            color: #155724;
            border-radius: 0.25rem;
        }

        .alert-failed {
            padding: 1rem;
            margin-bottom: 1rem;
            border: 1px solid #9e0d0d;
            background-color: #edd4d6;
            color: #d53e3e;
            border-radius: 0.25rem;
        }

        .check-in-container {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            margin-bottom: 1.5rem;
        }

        .check-in-input {
            display: none;
            margin-top: 1rem;
            margin-bottom: 2rem;
            border-radius: 50px;
            padding: 0.8rem;
            font-size: 1.2rem;
            width: 100%;
            box-sizing: border-box;
        }

        .check-button {
            margin-top: 0.5rem;
            padding: 0.5rem 1rem;
            border: none;
            border-radius: 4px;
            color: #fff;
            background-color: #1e90ff;
            cursor: pointer;
        }

        .check-button:hover {
            background-color: #1976d4;
        }

        .card-title {
            position: absolute;
            top: 0.5rem;
            right: 0.5rem;
            color: rgb(19, 123, 50);
        }
    </style>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("You're logged in!") }}
                </div>
            </div>
            <form action="/cek-tiket" method="POST">
                @csrf
                <div class="check-in-container">
                    <div id="check-in-input-container" class="check-in-input" style="display: flex; flex-direction: column; align-items: center;">
                        <input type="text" name="id" placeholder="Input No Tiket" style="margin-bottom: 0.2rem;" required>
                        <button class="check-button" type="submit">Check In</button>
                    </div>
                </div>
            </form>
            
            <h1 style="font-weight: 500; font-size: 1.7rem; margin-bottom: 1rem; margin-top: 0.7rem">Daftar Pengunjung Konser Koldplay 2023</h1>
            @if(Session::has('status'))
                <div class="alert @if(Session::get('status') == 'success') alert-success @else alert-failed @endif" role="alert">
                    {{ Session::get('message') }}
                </div>
            @endif

            <div class="grid grid-cols-1 gap-6 md:grid-cols-2 lg:grid-cols-3">
                @foreach ($tiketList as $tiket)
                    <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg card-container">
                        <div class="card-content">
                            <span class="card-title">{{$tiket->is_regis}}</span>
                            <p><strong>Nama Pengunjung: </strong>{{ $tiket->nama }}</p>
                            <p><strong>NIK: </strong>{{ $tiket->nik }}</p>
                            <p><strong>Jenis Kelamin: </strong>{{ $tiket->jenis_kel }}</p>
                            <p><strong>Tanggal Lahir: </strong>{{ $tiket->tgl_lahir }}</p>
                            <p><strong>Alamat: </strong>{{ $tiket->alamat }}</p>
                            <p><strong>No. Telepon: </strong>{{ $tiket->no_telp }}</p>
                            <p><strong>No. Registrasi: </strong>{{ str_pad($tiket->id, 3, '0', STR_PAD_LEFT) }}</p>
                        </div>
                        <div class="card-actions">
                            <a href="tiket-edit/{{$tiket->id}}"><button class="edit-button">Edit</button></a>
                            <form action="/buang-tiket/{{$tiket->id}}" method="post" style="display: inline-block">
                                @csrf
                                @method('delete')
                                <button class="delete-button" type="submit">Delete</button>
                            </form>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

    <script>
        const checkInButton = document.getElementById('check-in-button');
        const checkInInputContainer = document.getElementById('check-in-input-container');

        checkInButton.addEventListener('click', () => {
            checkInInputContainer.style.display = 'flex';
        });
    </script>
</x-app-layout>
