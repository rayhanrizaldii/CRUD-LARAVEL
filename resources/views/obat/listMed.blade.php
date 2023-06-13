<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Medic</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    @include('partials.navbar')
    <div class="container-fluid mt-5 p-5 overflow-hidden">
        <div class="row justify-content-center">
            <div class="col-9">
                <h2><b>List Obat</b></h2>
                <table class="table">
                    <thead class="table-primary">
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nama Obat</th>
                            <th scope="col">Harga</th>
                            <th scope="col">Jenis Obat</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $index => $dta)
                        <tr>
                            <th scope="row">{{$index + $data->firstItem()}}</th>
                            <td>{{$dta->nama_obat}}</td>
                            <td>Rp.{{$dta->harga_obat}}</td>
                            <td>{{$dta->jenis_obat}}</td>
                            <td>
                                <a href="/adminEditObat/{{$dta->id}}" class="btn btn-warning">Edit</a>
                                <a href="/DeleteObat/{{$dta->id}}" class="btn btn-danger m-1">Hapus</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                    <div class="mt-2 mb-2">
                        <form action="/listMed" method="GET" style="display:flex; justify-content:flex-end; align-items:center">
                            <div class="col-sm-4" style="margin-left: auto;">
                                <input type="search" class="form-control" id="search" name="search" placeholder="Cari Nama Obat...">
                            </div>
                        </form>
                    </div>
                </table>
                {{$data->links()}}
            </div>
        </div>
        @include('partials.footer')
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>

</html>