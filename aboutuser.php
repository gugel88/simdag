<h1 class="h3 mb-4 text-gray-800">Selamat datang kembali, <?php echo $_SESSION['nama'];?>! </h1> 
    <div class="card mb-4">
        <div class="card-header py-3">
           <h6 class="m-0 font-weight-bold text-primary">Detail Login Anda</h6>
        </div>
        <div class="card-body">
            <form action="login.php?op=in" method="POST">
            Anda login menggunakan Username <strong><code><?php echo $_SESSION['user'];?></code></strong>, dengan hak akses sebagai <strong><code><?php echo $_SESSION['level'];?></code></strong>.
            </form>
         </div>
    </div>
