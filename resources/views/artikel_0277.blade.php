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

        *,h1,body,html{
            margin: 0;
            border: 0;
        }

        .home{
            margin: 10px 10%;
            
        }
        
        .content{
            margin: 20px 25%;
        }

        .judul h3{
            font-size: 30px;
            margin: 20px 0;
        }
        .pembukaan{
            font-family:sans-serif;
            margin-bottom: 20px;
        }

        .judul-content{
            margin-bottom: 20px;
        }

        .deskripsi p{
            font-family: sans-serif;
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
        <div class="judul"><h3>Yuk! Mengenal Apa Itu Framework & Fungsinya</h3></div>
        <p class="pembukaan">Anda mungkin sedang bertanya: “Apa itu Framework?” Nah, framework adalah sebuah kerangka program yang digunakan untuk membantu developer untuk mengembangkan kode secara konsisten. 
            <br><br>
            Dengan adanya framework developer bisa mengurangi jumlah bug pada website atau aplikasi yang dibuat. Karena, fungsi dan variabel yang sudah tersedia di dalam komponen framework.
            <br><br>
            Dalam artikel ini, Anda akan mempelajari lebih dalam pengertian dan fungsi framework. Tak hanya itu, Anda pun akan diajak mengenal jenis jenis framework yang sering digunakan. Yuk, simak artikel ini sampai selesai.</p>
        
        <div class="isi-content">
            <div class="judul-content"><h1>Apa Itu Framework?</h1></div>
            <div class="deskripsi">
                <p class="pembukaan">Framework adalah kerangka kerja yang digunakan untuk mengembangkan aplikasi berbasis desktop atau aplikasi berbasis website. Dengan menggunakan framework Anda akan lebih mudah untuk membuat aplikasi atau website. Itu karena Anda hanya perlu menyusun komponen-komponen pemrograman yang sudah jadi. Dengan kata lain, Anda tidak perlu membuat berbagai fitur dari awal lagi.
                    <br><br>
                    Framework sengaja diciptakan untuk membantu developer mengembangkan aplikasi atau website lebih cepat serta tersusun dan terstruktur. 
                    <br><br>
                    Dengan begitu, developer dan programmer tidak perlu melakukan koding program yang diulang-ulang.
                    <br><br>
                    Nah, sudah tahu kan apa itu framework? Sekarang, mari pelajari fungsinya.</p>
            </div>
        </div>

        <div class="isi-content">
            <div class="judul-content"><h1>Fungsi Framework</h1></div>
            <div class="deskripsi">
                <p>Framework memiliki fungsi utama untuk mempermudah 
                    para developer mengembangkan aplikasi dan website terkait 
                    struktur MVC (Model View Controller) yang digunakan. 
                    Selain itu, ada tiga fungsi framework yang dapat Anda ketahui 
                    di bawah ini:
                </p>
            </div>
        </div>
        <div class="isi-content">
            <div class="judul-content"><h3>1. Program Menjadi Lebih Terstruktur dan Tersusun</h3></div>
            <div class="deskripsi">
                <p>Saat developer mengerjakan pengembangan aplikasi atau website yang besar, maka program yang akan ditulis di dalamnya menjadi semakin banyak. Terkadang, semakin banyaknya program yang ditulis akan menjadikan proses debugging semakin lambat. Selain itu, saat Anda mencari kode program yang error akan semakin sulit karena program yang tidak terstruktur.</p>
            </div>
        </div>
        <div class="isi-content">
            <div class="judul-content"><h3>2. Praktis untuk Developer</h3></div>
            <div class="deskripsi">
                <p>Saat Anda mengembangkan aplikasi atau website, akan lebih praktis ketika Anda menggunakan framework. Alasannya karena framework sudah menyediakan kode berupa function dan class jadi proses pembuatan software atau aplikasi akan menjadi lebih cepat. Anda cukup memanggil function atau class tersebut ke dalam kode program Anda.</p>
            </div>
        </div>
        <div class="isi-content">
            <div class="judul-content"><h3>3. Memiliki Keamanan yang Lebih Unggul</h3></div>
            <div class="deskripsi">
                <p>Selama bertahun-tahun, keamanan untuk aplikasi dan website telah menjadi perhatian utama bagi developer. Beberapa dari developer telah menggunakan segala cara untuk  mengamankan aplikasi dan website yang telah mereka buat.</p>
                <p>Setelah framework hadir, developer boleh sedikit tenang soal keamanan program yang telah dibuat. Karena setiap celah keamanan dari framework sudah diidentifikasi oleh 10-100+ developer ahli. Framework juga terus diperbarui versinya untuk menawarkan fitur baru dan menangani bug yang meminimalisir celah keamanan framework.</p>
            </div>
        </div>
        <div class="isi-content">
            <div class="judul-content"><h3></h3></div>
            <div class="deskripsi">
                <p></p>
            </div>
        </div>
        <div class="isi-content">
            <div class="judul-content"><h3></h3></div>
            <div class="deskripsi">
                <p></p>
            </div>
        </div>
        <div class="isi-content">
            <div class="judul-content"><h2>Sudah Mengerti Apa itu Framework?</h2></div>
            <div class="deskripsi">
                <p>Framework adalah platform yang tepat untuk membuat website atau aplikasi yang responsif dan lebih menarik. Dengan bantuan framework, Anda bisa membuat website atau aplikasi dengan lebih cepat dan aman.</p>
                <p>Di artikel ini, kami sudah membahas banyak pilihan jenis framework yang dapat Anda gunakan. Anda dapat memilih framework sesuai dengan kebutuhan Anda. Terlebih jika nantinya Anda ingin menjadi web developer, maka pengetahuan framework ini wajib Anda ketahui.</p>
            </div>
        </div>
    </div>

</body>
</html>