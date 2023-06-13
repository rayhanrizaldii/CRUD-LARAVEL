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
            <div class="col-5 p-5">
                <h2>Form Tambah Obat</h2>
                <div class="card mt-3 p-5" style="background-color: #CFE2FF; border-radius:20px">
                    <form action="/EditBuy/{{$data->id}}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="inputName" class="form-label">Nama Pembeli</label>
                            <input type="text" class="form-control" id="nama_pembeli" name="nama_pembeli" value="{{$data->nama_pembeli}}" aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Nama Obat</label>
                            <select class="form-select" id="id_obat" name="nama_obat" aria-label="Default select example">
                                <option selected>Open this select menu</option>
                                @foreach($dataobat as $dt)
                                <option value="{{$dt->nama_obat}}">{{$dt->nama_obat}}</option>
                                @endforeach
                            </select>



                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Jumlah Obat</label>
                            <input type="text" class="form-control" id="jumlah" name="jumlah" value="{{$data->jumlah}}" aria-describedby="emailHelp">

                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    @include('partials.footer')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>

</html>