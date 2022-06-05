@extends('layout.layout')
@section('konten')


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>trashure</title>

    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

</head>

<body>

    <style>

        .informasi {
            width: 175px;
            height: 155px;
            left: 670px;
            top: 193px;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        h5 {
            width: 525px;
            height: 16px;
            left: 457px;
            top: 362px;

            font-style: normal;
            font-weight: 700;
            font-size: 48px;
            line-height: 16px;

            display: flex;
            justify-content: center;

            color: #000000;
        }

    </style>

    <div class="container">
        <div class="row align-items-center justify-content-center">
            <img src="{{url('/recycle2.png')}}" alt="" class="informasi mt-5">
            <br>
            <h5 class="mt-5">Jenis Sampah Organik</h5>
            <br>
            <p class="mt-5">Sampah adalah sisa buangan dari suatu produk atau barang yang sudah tidak digunakan lagi, tetapi masih dapat di daur ulang menjadi barang yang bernilai.

                Sampah organik adalah sampah yang berasal dari sisa mahkluk hidup yang mudah terurai secara alami tanpa proses campur tangan manusia untuk dapat terurai.

                Sampah organik bisa dikatakan sebagai sampah ramah lingkungan bahkan sampah bisa diolah kembali menjadi suatu yang bermanfaat bila dikelola dengan tepat. Tetapi sampah bila tidak dikelola dengan benar akan menimbulkan penyakit dan bau yang kurang sedap hasil dari pembusukan sampah organik yang cepat.<br>
                <br>
                Jenis - Jenis Sampah Organik
                Berdasarkan jenisnya sampah organik dapat digolongkan menjadi 2 antara lain sampah organik basah dan kering. <br><br>

                1. Sampah Organik Basah <br>
                Sampah organik basah adalah sampah organik yang banyak mengadung air. Sampah organik basah contohnya adalah sisa sayur, kulit pisang, buah yang busuk, kulit bawang dan sejenisnya.

                Inilah yang saya katakan bahwa sampah organik dapat menimbulkan bau tidak sedap sebab kandungan air tinggi yang menyebabkan sampah jenis ini cepat membusuk.

                2. Sampah Organik Kering
                Sampah organik kering adalah sampah organik yang sedikit mengandung air. Contoh sampah organik misalnya kayu, ranting pohon, kayu dan daun – daun kering. Kebanyakan sampah organik sulit diolah kembali jadi lebih sering dibakar untuk memusnahkannya.

                Contoh Sampah Organik
                Contoh dari dari sampah organik adalah nasi, kulit buah, buah dan sayuran busuk, ampas teh / kopi, bangkai hewan, dan kotoran hewan / manusia</p>
        </div>
    </div>
</body>
</html>
@endsection
