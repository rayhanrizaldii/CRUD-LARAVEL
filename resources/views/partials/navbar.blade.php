<link rel="stylesheet" href="navbar.css">

<nav class="navbar navbar-expand-lg fixed-top" style="background-color: #3483FA;">
    <div class="container">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0" style="font-size:25px;">
                <li class="nav-item p-2">
                    <a class="nav-link active" aria-current="page" href="/index">Home</a>
                </li>
                <li class="nav-item dropdown p-2">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Obat
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="/addMed">Tambah Obat</a></li>
                        <li><a class="dropdown-item" href="/listMed">List Obat</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown p-2">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Pembelian
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="/addBuy">Catat Pembelian</a></li>
                        <li><a class="dropdown-item" href="/listBuy">List Pembelian</a></li>
                    </ul>
                </li>
            </ul>
        </div>
        <div class="container" style="width:150px;">
            <h2 style="font-family: Lobster; font-size:32px">My Medic</h2>
        </div>
    </div>
</nav>