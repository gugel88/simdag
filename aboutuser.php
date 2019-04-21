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
        <!-- Content -->
        <?php
          if($_SESSION['level']=="Manager")  
          {
        ?>
        <!-- Akses Manager -->
        <div class="row">
            <div class="col-xl-4 col-md-6 mb-4">
              <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Jumlah Barang</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">
                        <?php
                            include 'koneksi.php';
                            ob_start();
                            $query=mysql_query("SELECT *, COUNT(*) AS numrows FROM barang");
                            $ht = mysql_fetch_array($query);
                            echo "".$ht['numrows']."";                            
                        ?> 
                      </div>
                    </div>
                    <div class="col-auto">
                      <a href="homemanager.php?page=manager-lihat-data-barang" title="Lihat"> <i class="fas fa-database fa-2x text-gray-300"></i> </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-4 col-md-6 mb-4">
              <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Laporan Barang</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">Masuk</div>
                    </div>
                    <div class="col-auto">
                      <a href="homemanager.php?page=manager-lihat-barang-masuk" title="Lihat"> <i class="fas fa-book fa-2x text-gray-300"></i> </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-4 col-md-6 mb-4">
              <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Laporan Barang</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">Keluar</div>
                    </div>
                    <div class="col-auto">
                      <a href="homemanager.php?page=manager-lihat-barang-keluar" title="Lihat"> <i class="fas fa-book fa-2x text-gray-300"></i> </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>          
        </div> 
        <?php
          }elseif($_SESSION['level']=="Gudang"){
        ?>
        <!-- Akses Gudang -->
        <div class="row">
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Jumlah Barang</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">
                        <?php
                            include 'koneksi.php';
                            ob_start();
                            $query=mysql_query("SELECT *, COUNT(*) AS numrows FROM barang");
                            $ht = mysql_fetch_array($query);
                            echo "".$ht['numrows']."";                            
                        ?> 
                      </div>
                    </div>
                    <div class="col-auto">
                      <a href="homegudang.php?page=lihat-data-barang" title="Lihat"> <i class="fas fa-database fa-2x text-gray-300"></i> </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Tambah Master</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">Barang</div>
                    </div>
                    <div class="col-auto">
                      <a href="homegudang.php?page=form-input-master-barang" title="Tambah"> <i class="fas fa-plus fa-2x text-gray-300"></i> </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Tambah Barang</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">Masuk</div>
                    </div>
                    <div class="col-auto">
                      <a href="homegudang.php?page=form-input-barang-masuk" title="Tambah"> <i class="fas fa-plus fa-2x text-gray-300"></i> </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Tambah Barang</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">Keluar</div>
                    </div>
                    <div class="col-auto">
                      <a href="homegudang.php?page=form-input-barang-keluar" title="Tambah"> <i class="fas fa-plus fa-2x text-gray-300"></i> </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>            
            <div class="col-xl-6 col-md-6 mb-4">
              <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Laporan</div>
                      <div class="row no-gutters align-items-center">
                        <div class="col-auto">
                          <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">Barang Masuk</div>
                        </div>
                      </div>
                    </div>
                    <div class="col-auto">
                      <a href="homegudang.php?page=lihat-barang-masuk" title="Lihat"><i class="fas fa-book fa-2x text-gray-300"></i></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-6 col-md-6 mb-4">
              <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Laporan</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">Barang Keluar</div>
                    </div>
                    <div class="col-auto">
                      <a href="homegudang.php?page=lihat-barang-keluar" title="Lihat"><i class="fas fa-book fa-2x text-gray-300"></i></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
        </div>        
        <?php
          }elseif($_SESSION['level']=="Admin"){
        ?>
        <!-- Akses Manager -->
        <div class="row">
            <div class="col-xl-6 col-md-6 mb-4">
              <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Jumlah Pengguna</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">
                        <?php
                            include 'koneksi.php';
                            ob_start();
                            $query=mysql_query("SELECT *, COUNT(*) AS numrows FROM login");
                            $ht = mysql_fetch_array($query);
                            echo "".$ht['numrows']."";                            
                        ?> 
                      </div>
                    </div>
                    <div class="col-auto">
                      <a href="homeadmin.php?page=lihat-data-user" title="Lihat"> <i class="fas fa-user fa-2x text-gray-300"></i> </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-6 col-md-6 mb-4">
              <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Tambah Pengguna</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">Baru</div>
                    </div>
                    <div class="col-auto">
                      <a href="homeadmin.php?page=form-input-data-user" title="Tambah"> <i class="fas fa-plus fa-2x text-gray-300"></i> </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
        </div>         
        <?php
        }
        ?>  
