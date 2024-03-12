<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<form method="POST" action="proses_registrasi.php">
  <div class="form-group row">
    <label for="NIM" class="col-4 col-form-label">Nim</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-adn"></i>
          </div>
        </div> 
        <input id="NIM" name="NIM" type="text" class="form-control">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="nama" class="col-4 col-form-label">Nama Lengkap</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-address-card"></i>
          </div>
        </div> 
        <input id="nama" name="nama" type="text" class="form-control">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label class="col-4">Jenis Kelamin</label> 
    <div class="col-8">
      <div class="custom-control custom-radio custom-control-inline">
        <input name="jenis_kelamin" id="radio_0" type="radio" class="custom-control-input" value="laki"> 
        <label for="radio_0" class="custom-control-label">Laki - laki</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="jenis_kelamin" id="radio_1" type="radio" class="custom-control-input" value="perempuan"> 
        <label for="radio_1" class="custom-control-label">Perempuan</label>
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="program_studi" class="col-4 col-form-label">Program Studi</label> 
    <div class="col-8">
      <select id="program_studi" name="program_studi" class="custom-select">
        <?php
          $program_studi = ["SI" => "Sistem Informasi", "TI" => "Teknik Informatika", "BD" => "Bisnis Digital"];
          foreach ($program_studi as $key => $value) {
            echo "<option value='$key'>$value</option>";
          }
        ?>
      </select>
    </div>
  </div>
  <div class="form-group row">
    <label class="col-4">Skill Webs & Programming</label> 
    <div class="col-8">
      <?php
        $skills = ["HTML" => 10, "CSS" => 10, "JavaScript" => 20, "RWD Bootstrap" => 20, "PHP" => 30, "Python" => 30, "Java" => 50];
        foreach ($skills as $key => $value) {
          echo "<div class='custom-control custom-checkbox custom-control-inline'>
                  <input name='skills[$key]' id='checkbox_$key' type='checkbox' class='custom-control-input' value='$value'> 
                  <label for='checkbox_$key' class='custom-control-label'>$key</label>
                </div>";
        }
      ?>
    </div>
  </div>
  <div class="form-group row">
    <label for="domisili" class="col-4 col-form-label">Tempat Domisili</label> 
    <div class="col-8">
      <select id="domisili" name="domisili" class="custom-select">
        <?php
          $domisili = ["Jakarta", "Depok", "Bogor", "Tangerang", "Bekasi", "Lainnya"];
          foreach ($domisili as $value) {
            echo "<option value='$value'>$value</option>";
          }
        ?>
      </select>
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="submit" type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
</form>
