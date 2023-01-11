<html>
<head>
</head>
<style>
    .action-btn {
  display: inline-block;
  text-decoration: none;
  color: white;
  font-weight: 700;
  background: linear-gradient(90deg,#a701c8,#55e7fc);
  padding: 0.5em 2em;
  border-radius: 60px;
  margin: 1em 0;
  transition: 0.3s;
}
</style>
<body>
    <center>
    <h1>Daftar Siswa</h1>
    <form action="proses_tambah.php" method="POST">
        <fieldset>
            <p>
                <label for="nama">Nama :</label>
                <input type="text" name="nama" />
            </p>

            <p>
                <label for="kelas">Kelas :</label>
              <label><input type="radio" name="kelas" value="X" />X</label>
              <label><input type="radio" name="kelas" value="XI" />XI</label>
              <label><input type="radio" name="kelas" value="XII" />XII</label>
            </p>
            <p>
                <label for="jurusan">jurusan :</label>
                <select name="jurusan">
                <option value="RPL">RPL </option>
                    <option value="TSM">TSM </option> 
                    <option value="TB">TB </option> 
                    <option value="TL">TL </option> 
                    <option value="TBG">TBG </option> 
</select></br>
            </p>
            <p>
                <label for="tahun">Tahun :</label>
                <input type="text" name="tahun" />
            </p>
            <p>
                <label for="nominal">Nominal :</label>
                <input type="text" name="nominal" />
            </p>
            <p>
                <input
                class="action-btn" type="submit" value="kirim" name="kirim_data" />
            </p>
        </fieldset>
</form>
</center>
</body>
</html>