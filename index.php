<?php 
include "head.php";
/*
Kelompok 3
Agus D
Elang S
Maria L
Widia A
Iman
*/
?>
<body>
    <!-- Navbar -->
    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container-fluid">
            <div class="navbar-header">
                

                <ul class="nav navbar-nav navbar-left-custom">
                    <li class="user dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown">                           
                            <span>Sistem Penunjang Keputusan AHP</span>                            
                        </a>
                    </li>
                    <li><a class="nav-icon sidebar-toggle"><i class="fa fa-bars"></i></a></li>
                </ul>

            </div>
        </div>
    </div>
    <!-- /navbar -->

    <!-- Page header -->
    <div class="container-fluid">
        <div class="page-header">
            <!-- <div class="logo"><a href="index.php" title=""><img src="../images/gambar.png" alt=""></a></div> -->
        </div>
    </div>
    <!-- /page header -->

    <!-- Page container -->
    <div class="page-container container-fluid">
        
        <?php include "sidebar.php"; ?>

        <!-- Page content -->
        <div class="page-content">
            
            <!-- Page title -->
            <div class="page-title">
                <h5><i class="fa fa-bars"></i> Halaman Admin</h5>
            </div>
            <!-- /Page title -->

            <!-- Simple chart -->
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h6 class="panel-title">Beranda</h6>
                </div>
                <div class="panel-body">
                    Selamat datang <b><?php echo "$_SESSION[namauser]"; ?></b>
                    <br>
                    <br>
                    <h3>Definisi</h3>
                    <p>AHP  merupakan  suatu  model  pengambil  keputusan  yang  dikembangkan  oleh  Thomas  L. 
Saaty yang menguraikan masalah multifaktor atau  multikriteria menjadi suatu hierarki. AHP 
dipergunakan  untuk  menyelesaikan  suatu  permasalahan  yang  komplek  dimana  data  dan 
informasi statistik dari masalah yang dihadapi sangat sedikit.</p>
                    <br>
                    <h3>Tujuan</h3>
                    <p>
                        1.   Memahami konsep AHP <br>
2.   Mampu memodelkan permasalahan pengambilan keputusan dan menyelesaikannya 
dengan metode AHP.  
                    </p>
                    <h3>Pengertian AHP ( Analytic Hierarchy Process) </h3>
                    <p>
                        AHP  merupakan   suatu  model  pendukung   keputusan  yang  dikembangkan   oleh  Thomas  L. 
Saaty.  Model  pendukung  keputusan  ini  akan   menguraikan  masalah  multi factor   atau  multi 
kriteria  yang  kompleks   menjadi  s ua t u  hirarki,  menurut .  Saaty  (1993),  hirarki   didefinisikan 
sebagai  suatu  representasi   dari   sebuah   permasalahan  yang  kompleks  dalam  suatu  struktur 
multi level  dimana level pertama   adalah  tujuan, yang diikuti level faktor, kriteria, sub kriteria, 
dan  seterusnya  kebawah   hingga level terakhir  yaitu alternatif. Dengan  hirarki, suatu  masalah 
yang  kompleks  dapat  diuraikan   kedalam  kelompok- kelompoknya  yang  kemudian  diatur 
menjadi  suatu  bentuk   hi r a r ki   sehingga   permasalahan  akan   tampak   lebih  terstruktur  dan 
sistematis.  AHP  sering   digunakan  sebagai  metode   pemecahan  masalah  di banding  dengan  
metode yang lain karena  alasan - alasan  sebagai  berikut : <br>
1.   Struktur  yang  berhirarki,  sebagai   konsekuesi  dari   kriteria  yang  dipilih,  sampai  pada  
subkriteria yang paling dalam.   <br>
2.   Memperhitungkan  validitas  sampai   dengan   batas  toleransi   inkonsistensi  berbagai  kriteria  
dan alternatif yang dipilih  oleh  pengambil keputusan. <br>
3.   Memperhitungkan daya  tahan output analisis sensitivitas  pengambilan keputusa n.  
                    </p>
                    <p>
                        AHP didasarkan atas 3 prinsip dasar yaitu: <br>
                        1.   Dekomposisi <br>
  Dengan prinsip ini struktur masalah yang kompleks dibagi menjadi bagian- bagian secara 
hierarki.  Tujuan  didefinisikan  dari  yang  umum  sampai  khusus.  Dalam  bentuk  yang 
paling  sederhana  struktur  akan  terdiri  dari  tujuan,  kriteria  dan  level  alternatif.  Tiap 
him punan alternatif mungkin akan dibagi lebih jauh menjadi tingkatan yang lebih detail, 
mencakup  lebih  banyak  kriteria  yang  lain.  Level  paling  atas  dari  hirarki  merupakan 
tujuan  yang  terdiri  atas  satu  elemen.  Level  berikutnya  mungkin   mengandung  beberapa 
elemen,  di mana  elemen- elemen  tersebut  bisa  dibandingkan,  memiliki  kepentingan  yang 
hampir sama dan tidak memiliki perbedaan yang terlalu mencolok. Jika perbedaan terlalu 
besar h arus dibuatkan level yang baru. <br>
2.   Perbandingan penilaian/pertimbangan ( comparative jud gments ).  <br> 
  Dengan  prinsip  ini  akan  dibangun  perbandingan  berpasangan  dari  semua  elemen  yang 
ada  dengan  tujuan  menghasilkan  skala  kepentingan  relatif  dari  elemen.  Penilaian 
menghasilkan  skala  penilaian  yang  berupa  angka.  Perbandingan  berpasangan  dalam 
bentuk matriks jika dikombinasikan akan menghasilkan prioritas.  <br>
3.   Sintesa Prioritas <br>
  Sintesa  prioritas  dilakukan  dengan  mengalikan  prioritas  lokal  dengan  prioritas  dari 
kriteria bersangkutan di level atasnya dan menambahkannya ke tiap elemen dalam level 
yang  dip engaruhi  kriteria.  Hasilnya  berupa  gabungan  atau  dikenal  dengan  prioritas 
global  yang  kemudian  digunakan  untuk  memboboti  prioritas  lokal  dari  elemen  di  level 
terendah sesuai dengan kriterianya.  
                    </p>
                    <table border="1" class="table">
                    <tr>
                        <th colspan="12"><center><h2>TABEL INDEX RANDOM</h2></center></th>
                    </tr>
                        <tr>
                            <th>n</th>
                            <td>1</td>
                            <td>2</td>
                            <td>3</td>
                            <td>4</td>
                            <td>5</td>
                            <td>6</td>
                            <td>7</td>
                            <td>8</td>
                            <td>9</td>
                            <td>10</td>
                            <td>11</td>
                        </tr>
                        <tr>
                            <th>RC</th>
                            <td>0.00</td>
                            <td>0.00</td>
                            <td>0.58</td>
                            <td>0.90</td>
                            <td>1.12</td>
                            <td>1.24</td>
                            <td>1.32</td>
                            <td>1.41</td>
                            <td>1.45</td>
                            <td>1.49</td>
                            <td>1.51</td>
                        </tr>
                    </table>
                </div>
            </div>
            <!-- /simple chart -->
            <?php include "footer.php"; ?>
       