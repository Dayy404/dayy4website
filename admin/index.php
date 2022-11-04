<?php include("dayy_header.php")?>
  <?php 
  $katakunci = (isset($_GET['katakunci']))?$_GET['katakunci']:"";
  ?>
  <h1 style="padding-top:30px">Halaman Admin</h1>
  <p>
    <a href="halaman_input.php">
      <input type="button" class="btn btn-primary" value="Buat Halaman Baru">
    </a>
  </p>
  <form class="d-flex" menthod="get">
        <input class="form-control me-2" type="text" placeholder="Cari Kata Kunci" name="katakunci" value="<?php echo $katakunci?>">
        <input class="btn btn-outline-primary" type="submit" name="cari" value="Cari"></input>
      </form>

      <table class="table table-strippe">
        <thead>
          <tr>
            <th class="col-1">#</th>
            <th>Judul</th>
            <th>Kutipan</th>
            <th class="col-2">Aksi</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>1</td>
            <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut, nulla?</td>
            <td>Lorem ipsum dolor sit amet consectetur adipisicing elit.</td>
            <td>
              <span class="badge text-bg-warning">Edit</span>
              <span class="badge text-bg-danger">Delete</span>
            </td>
          </tr>
        </tbody>
      </table>
<?php include("dayy_footer.php")?>