<html>
<head>
    <title>Pencarian Data</title>
    <meta charset="UTF-8">
    <title></title>
    <link rel="stylesheet" href="SCSS/main.css"/>
    <link rel="stylesheet" href="css/bootstrap.css"/>
    <link rel="stylesheet" href="css/bootstrap-theme.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/1.11.8/semantic.min.css"/>

    <style>
h1 {
  color: white;
}
</style>
    <script>
		var baseurl = "<?php echo base_url("index.php/"); ?>"; // Buat variabel baseurl untuk nanti di akses pada file config.js
    </script>
    <script src="<?php echo base_url("js/jquery.min.js"); ?>"></script> <!-- Load library jquery -->
    <script src="<?php echo base_url("js/config.js"); ?>"></script> <!-- Load file process.js -->
</head>
<body>
<div class="container">
    <div class="row">
        <div class="form-div text-center">
        <center><h1>Pencarian Data</h1></center>
            <form>
                <div class="ui big left icon input full-width">
                    <input type="text" id="nis" placeholder="Masukan Nomor Induk Siswa..." required/>
                    <i class="user icon"></i>
                </div>
       
            </form>

            <button class="positive ui button" id="btn-search">Cari</button>
        </div>
        <div class="form-table">
            <table id="MyTable" class="table">
                <thead>
                <tr>
                    <th>Nama</th>
                    <th>Jenis Kelamin</th>
                    <th>Telepon</th>
                    <th>Alamat</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td id="ele-1"><input type="text" name="nama" id="nama"></td>
                    <td id="ele-2"><input type="text" name="jenis_kelamin" id="jenis_kelamin"></td>
                    <td id="ele-3"><input type="text" name="telepon" id="telepon"></td>
                    <td id="ele-4"><input type="text" name="alamat" id="alamat"></td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

<script src="javascript/jquery-3.1.1.min.js"></script>
<script src="javascript/bootstrap.min.js"></script>
<script src="javascript/ajax.js"></script>

</body>
</html>
