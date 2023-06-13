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
    <div class="container-fluid mt-5">
        <div class="row justify-content-center">
            <div class="col-10 p-5">
                <h2><b>List Pembelian</b></h2>
                <table class="table">
                    <thead class="table-primary">
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nama Pembeli</th>
                            <th scope="col">Nama Obat</th>
                            <th scope="col">Jumlah</th>
                            <th scope="col">Total</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    @php
                    $no =1
                    @endphp
                    <tbody>
                        @foreach ($data as $dta)
                        <tr>
                            <th scope="row">{{$no++}}</th>
                            <td>{{$dta->nama_pembeli}}</td>
                            <td>{{$dta['obat']['nama_obat']}}</td>
                            <td>{{$dta->jumlah}}</td>
                            <td>Rp.{{$dta->totalharga}}</td>
                            <td>
                                <!-- <a href="/adminEditBuy/{{$dta->id}}" class="btn btn-warning">Edit</a> -->
                                <a href="/DeleteBuy/{{$dta->id}}" class="btn btn-danger m-1">Hapus</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    @include('partials.footer')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>

</html>