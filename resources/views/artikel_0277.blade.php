<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Artikel framework</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>
<body>

    <style>

        *,h1,body{
            margin: 0;
        }

        .home{
            margin: 10px;
            
        }
        
        .content{
            margin: 20px 100px;
        }

        .judul{
            font-size: 30px;
            margin: 20px 0;
        }
        .pembukaan{
            font-family:sans-serif;
        }
    </style>

    <div class="top-nav">
        <nav class="navbar navbar-expand-lg navbar-light bg-primary">
            <div class="container-fluid home">
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{url('/')}}">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link active" href="{{url('/artikel')}}">Artikel</a>
                  </li>
                </ul>
              </div>
            </div>
          </nav>
    </div>

    <div class="content">
        <div class="judul">Yuk! Mengenal Apa Itu Framework & Fungsinya</div>
        <p class="pembukaan">Anda mungkin sedang bertanya: “Apa itu Framework?” Nah, framework adalah sebuah kerangka program yang digunakan untuk membantu developer untuk mengembangkan kode secara konsisten. 
            <br><br>
            Dengan adanya framework developer bisa mengurangi jumlah bug pada website atau aplikasi yang dibuat. Karena, fungsi dan variabel yang sudah tersedia di dalam komponen framework.
            <br><br>
            Dalam artikel ini, Anda akan mempelajari lebih dalam pengertian dan fungsi framework. Tak hanya itu, Anda pun akan diajak mengenal jenis jenis framework yang sering digunakan. Yuk, simak artikel ini sampai selesai.</p>
        <div class="isi-content">
            <div class="judul-content"></div>
            <div class="deskripsi">

            </div>
        </div>
        <div class="isi-content">
            <div class="judul-content"></div>
            <div class="deskripsi">
                
            </div>
        </div>
        <div class="isi-content">
            <div class="judul-content"></div>
            <div class="deskripsi">
                
            </div>
        </div>
        <div class="isi-content">
            <div class="judul-content"></div>
            <div class="deskripsi">
                
            </div>
        </div>
    </div>

</body>
</html>