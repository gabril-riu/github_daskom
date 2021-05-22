<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Halaman Home</title>
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
            align-content: center;
            text-align: center;
        }

        .form{
            margin: 40px;
        }

        .form img{
            width: 15%;
            height: auto;
        }
        .riwayat{
            margin: 10px;
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
              <li class="nav-item">
                <a class="nav-link active" href="{{url('/contactUs')}}">Contact us</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
</div>

    <div class="content">
        <div class="form">
            <div class="foto">
                <img src="image/211404.jpg" alt="img">
            </div>
            <div class="riwayat">
                <p>nama    : gabriel Aprilyan</p>
                <p>contact : 081394565412</p>
                <p>email   : gabril@gmail.com</p>
                <p>facebook : gabril aprilian</p>
            </div>
        </div>
    </div>

</body>
</html>