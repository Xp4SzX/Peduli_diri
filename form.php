<link href="css/form.css" rel="stylesheet">
<style>
    input{
        caret-color: red;
    }
</style>
<div class="animated-background">
<div class="card">
    <div class="card-header">
    <a href="user.php" class="btn btn-primary btn-icon-split">
       <span class="icon text-white-50">
          <i class="fas fa-arrow-left"></i>
            </span>
               <span class="text">Back</span>
   </a>
    </div>
    <div class="card-body">
        <form action="input_perjalanan.php" method="post">
            <div class="form-group">
            <label>Tanggal</label>
            <input id="datePickerId" name="tanggal" type="date" required class="form-control" placeholder="Masukan Tanggal">
            </div>
        <div class="form-group">
            <label>Jam</label>
            <input name="waktu" type="time" required class="form-control" placeholder="Masukan Jam">
        </div>
        <div class="form-group">
            <label>Lokasi</label>
            <input name="lokasi" type="text" required class="form-control" placeholder="Masukan Lokasi">
        </div>
        <div class="form-group">
            <label>Suhu</label>
            <input min="34" max="40" name="suhu" type="number" required class="form-control" placeholder="Masukan Suhu">
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-success">Simpan</button>
        <div>
    </form>
    </div>
</div>
</div>
<script>
    datePickerId.max = new Date().toISOString().split("T")[0];
</script>
