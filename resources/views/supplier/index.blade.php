<!DOCTYPE html>
<html lang="en">
<head>  
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Supplier</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body style="background: lightgray">
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div>
                    <h3 class="text-center my-4">Daftar Supplier</h3>
                    <hr>
                </div>
                <div class="card border-0 shadow-sm rounded">
                    <div class="card-body">
                        <a href="{{ route('supplier.create') }}" class="btn btn-md btn-success mb-3">Add Supplier</a>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col">Nama Supplier</th>
                                    <th scope="col">Alamat Supplier</th>
                                    <th scope="col">PIC Supplier</th> 
                                    <th scope="col">No Hp PIC Supplier</th>
                                    <th scope="col">Actions</th> 
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($supplier as $s)
                                    <tr>
                                        <td>{{ $s->supplier_name }}</td>
                                        <td>{{ $s->alamat_supplier }}</td>
                                        <td>{{ $s->pic_supplier}}</td> 
                                        <td>{{ $s->no_hp_pic_supplier }}</td> 
                                        <td class="text-center">
                                            <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('supplier.destroy', $s->id) }}" method="POST">
                                                <a href="{{ route('supplier.show', $s->id) }}" class="btn btn-sm btn-dark">Show</a>
                                                <a href="{{ route('supplier.edit', $s->id) }}" class="btn btn-sm btn-primary">Edit</a>
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-sm btn-danger">Hapus</button>
                                            </form>
                                        </td>
                                    </tr>
                                @empty
                                <tr>
                                    <td colspan="5" class="text-center">Data Supplier belum Tersedia.</td>
                                </tr>
                                @endforelse
                            </tbody>
                        </table>
                        {{ $supplier->links() }} 
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
