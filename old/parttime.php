<!DOCTYPE html>
<html>
<title>SYNI</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="shortcut icon" href="./img/favicon.ico">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
.w3-sidebar a {font-family: "Roboto", sans-serif}
body,h1,h2,h3,h4,h5,h6,.w3-wide {font-family: "Montserrat", sans-serif;}
#map {
  width: 100%;
  height: 200px;
  background-color: grey;
}
.marrsgreen {
  background-color: #008c8c;
  color: #ffffff;
}
input.empty {
  font-family: FontAwesome;
  font-style: normal;
  font-weight: normal;
  text-decoration: inherit;
}
</style>
<body class="w3-content" style="max-width:1200px; margin-left: 0; margin-right: 0">

<!-- Sidebar/menu -->
<nav class="w3-sidebar w3-bar-block marrsgreen w3-collapse w3-top" style="z-index:3; width:250px; padding-left: 10px;" id="mySidebar">
  <div class="w3-container w3-display-container w3-padding-16 w3-center">
    <i onclick="w3_close()" class="fa fa-remove w3-hide-large w3-button w3-display-topright"></i>
    <a href="index"><img src="./img/logo.png" width="50%"></a>
  </div>
  <div class="w3-padding-32 w3-large w3-text-white" style="font-weight:bold">
    <a onclick="getinfo()" href="javascript:void(0)" class="w3-button w3-block marrsgreen w3-left-align" id="buttoninfo">
      Info <i class="fa fa-caret-down"></i>
    </a>
    <div id="info" class="w3-bar-block w3-hide w3-padding-large w3-medium">
      <a href="diskon" class="w3-bar-item w3-button">Diskon</a>
      <a href="intern" class="w3-bar-item w3-button">Internship</a>
      <a href="parttime" class="w3-bar-item w3-button">Kerja Paruh Waktu</a>
      <a href="fulltime" class="w3-bar-item w3-button">Kerja Fulltime</a>
    </div>
    <a onclick="getsewa()" href="javascript:void(0)" class="w3-button w3-block marrsgreen w3-left-align" id="buttonsewa">
      Penjualan dan Sewa <i class="fa fa-caret-down"></i>
    </a>
    <div id="sewa" class="w3-bar-block w3-hide w3-padding-large w3-medium">
      <a href="kos" class="w3-bar-item w3-button">Kos</a>
      <a href="ebook" class="w3-bar-item w3-button">Ebook</a>
      <a href="buku" class="w3-bar-item w3-button">Buku Fisik</a>
      <a href="ukm" class="w3-bar-item w3-button">Produk Unit Kegiatan Mahasiswa/Himpunan Mahasiswa</a>
      <a href="akomodasi" class="w3-bar-item w3-button">Akomodasi</a>
    </div>
  </div>
  <hr>
  <a href="faq" class="w3-bar-item w3-button w3-padding">FAQ</a>
  <a href="about"  class="w3-bar-item w3-button w3-padding">Tentang Kami</a>
</nav>

<!-- Top menu on small screens -->
<header class="w3-bar w3-top w3-hide-large marrsgreen w3-xlarge">
  <a href="index"><img class="w3-padding-24" style="margin-left: 20px" src="./img/logo.png" width="10%"></a>
  <a href="javascript:void(0)" class="w3-bar-item w3-button w3-padding-24 w3-right" onclick="w3_open()"><i class="fa fa-bars"></i></a>
</header>

<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:260px; width: 100%;">

  <!-- Push down content on small screens -->
  <div class="w3-hide-large" style="margin-top:83px"></div>
  
  <!-- Top header -->
  <header class="w3-container">
    <p class="w3-left w3-col l6 m6 s6">
      <span class="w3-col l12 m12 s12">
        <input class="w3-input w3-border form-control empty" id="iconified" placeholder="&#xF002; What are you looking for?" type="text" style="width: 100%;">
      </span>
    </p>
    <p class="w3-left w3-col l6 m6 s6">
      <a href="javascript:void(0)" class="w3-bar-item w3-button w3-padding" onclick="document.getElementById('daftar').style.display='block'">Daftar</a>
      /
      <a href="javascript:void(0)" class="w3-bar-item w3-button w3-padding" onclick="document.getElementById('masuk').style.display='block'">Masuk</a> 
    </p>
  </header>

  <script>
    $('#iconified').on('keyup', function() {
    var input = $(this);
    if(input.val().length === 0) {
        input.addClass('empty');
    } else {
        input.removeClass('empty');
    }
    });
  </script>

  <!-- Product grid -->
  <div class="w3-display-container w3-row">
    <div class="w3-margin-bottom w3-threequarter">
      <header class="w3-container w3-grey w3-padding-16">
        <img src="./img/truemoney.png" alt="Avatar" class="w3-left w3-circle w3-margin-right" style="width:60px; height: 60px;">
        <p>PT Witami Tunai Mandiri (TrueMoney Indonesia)</p>
      </header>
      <div class="w3-container w3-light-grey" style="padding-left: 40px; padding-right: 40px;">
        <h3>Product Owner Intern</h3>
        <hr>
        <h4>Deskripsi</h4>
        <p style="text-align: justify;">Membantu product owner dalam menyusun product requirements document berdasarkan business requirements document yang tersedia. Terlibat dalam pengembangan aplikasi menggunakan metodologi Scrum.</p><br>
      </div>
      <button class="w3-button w3-block marrsgreen">Lihat lebih lengkap</button>
    </div>

    <div class="w3-margin-bottom w3-threequarter">
      <header class="w3-container w3-grey w3-padding-16">
        <img src="./img/truemoney.png" alt="Avatar" class="w3-left w3-circle w3-margin-right" style="width:60px; height: 60px;">
        <p>PT Witami Tunai Mandiri (TrueMoney Indonesia)</p>
      </header>
      <div class="w3-container w3-light-grey" style="padding-left: 40px; padding-right: 40px;">
        <h3>Product Owner Intern</h3>
        <hr>
        <h4>Deskripsi</h4>
        <p style="text-align: justify;">Membantu product owner dalam menyusun product requirements document berdasarkan business requirements document yang tersedia. Terlibat dalam pengembangan aplikasi menggunakan metodologi Scrum.</p><br>
      </div>
      <button class="w3-button w3-block marrsgreen">Lihat lebih lengkap</button>
    </div>
  </div>
  <div class="marrsgreen w3-center w3-padding-24">Copyright <a href="index" class="w3-hover-opacity">SYNI</a></div>
</div>

<!-- Login Modal -->
<div id="masuk" class="w3-modal" style="padding-top: 5px;">
  <div class="w3-modal-content w3-animate-top" style="padding:32px">
    <div class="w3-container w3-white w3-center">
      <i onclick="document.getElementById('masuk').style.display='none'" class="fa fa-remove w3-right w3-button w3-transparent w3-xxlarge"></i>
      <h2 class="w3-wide w3-left">SELAMAT DATANG</h2>
      <p class="w3-left">Silakan isi form login di bawah ini untuk melakukan transaksi yang kamu inginkan</p>
      <p><input class="w3-input w3-border" type="text" placeholder="Email atau Username"></p>
      <p><input class="w3-input w3-border" type="Password" placeholder="Password"></p>
      <a href="lupa" class="w3-left">Lupa Password</a>
      <button type="button" class="w3-button w3-padding-large marrsgreen w3-right w3-margin-bottom" onclick="document.getElementById('masuk').style.display='none'">Log In</button>
    </div>
  </div>
</div>

<!-- Register Modal -->
<div id="daftar" class="w3-modal" style="padding-top: 5px;">
  <div class="w3-modal-content w3-animate-top" style="padding:32px;">
    <div class="w3-container w3-white w3-center">
      <i onclick="document.getElementById('daftar').style.display='none'" class="fa fa-remove w3-right w3-button w3-transparent w3-xxlarge"></i>
      <h2 class="w3-wide w3-left">BERGABUNG DENGAN SYNI</h2>
      <p class="w3-left">Mohon isi form register di bawah ini dengan benar agar transaksi Anda menjadi lebih mudah</p>
      <p><input class="w3-input w3-border" type="text" placeholder="Nama Lengkap"></p>
      <p><input class="w3-input w3-border" type="text" placeholder="Username"></p>
      <p><input class="w3-input w3-border" type="email" placeholder="Email"></p>
      <p><input class="w3-input w3-border" type="Password" placeholder="Password"></p>
      <p><input class="w3-input w3-border" type="Password" placeholder="Ulangi Password"></p>
      <p><input class="w3-input w3-border" type="number" min="6" max="12" placeholder="Nomor Telepon"></p>
      <p>
        <select class="w3-input w3-border" value="pekerjaan">
          <option value="Status" disabled="true" selected="true">Status Pekerjaan</option>
          <option value="Pelajar">Pelajar</option>
          <option value="Mahasiswa">Mahasiswa</option>
          <option value="Pengusaha">Pegawai Swasta</option>
          <option value="Pengusaha">Pegawai Negeri Sipil</option>
          <option value="Pengusaha">Wiraswasta</option>
          <option value="Pengusaha">Ibu Rumah Tangga</option>
          <option value="Pengusaha">Lainnya</option>
  	  </select>
      </p>
      <p class="w3-left"><input type="checkbox" value="setuju">Saya menyetujui <a href="syaratk">Syarat dan Ketentuan</a> SYNI</p>
      <button type="button" class="w3-button w3-padding-large marrsgreen w3-right w3-margin-bottom" onclick="document.getElementById('daftar').style.display='none'">Daftar</button>
    </div>
  </div>
</div>

<script>
// Accordion 
function getinfo() {
    var x = document.getElementById("info");
    if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
    } else {
        x.className = x.className.replace(" w3-show", "");
    }
}

function getsewa() {
    var x = document.getElementById("sewa");
    if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
    } else {
        x.className = x.className.replace(" w3-show", "");
    }
}

document.getElementById("buttoninfo").click();
document.getElementById("buttonsewa").click();
</script>

<script>
w3_close();
function w3_open() {
    document.getElementById("mySidebar").style.display = "block";
}
function w3_close() {
    document.getElementById("mySidebar").style.display = "none";
}
</script>

</body>
</html>
