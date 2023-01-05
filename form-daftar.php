<html>
    <head>
        <title>Sistem Informasi Kepegawaian</title>
    </head>
    <body>
        <header>
            <h3>Sistem Informasi Kepegawaian</h3>
        </header>

        <form action="proses-daftar.php"method="POST">
            <fieldset>
                <p>
                    <label for="nama">Nama: </label>
                    <input type="text" name="nama" placeholder=" " />
                </p>
                <p>
                    <label for="tempat_lahir">Tempat Lahir: </label>
                    <input type="text" name="tempat_lahir" placeholder=" ">
                </p>
                <p>
                    <label for="tanggal _lahir">Tanggal Lahir: </label>
                    <input type="date" name="tanggal_lahir" placeholder=" ">
                </p>
                <p>
                    <label for="jenis_kelamin">Jenis Kelamin</label>
                    <label><input type="radio" name="jenis_kelamin" value="laki-laki">Laki-laki</label>
                    <label><input type="radio" name="jenis_kelamin" value="perempuan">Perempuan</label>
                </p>
                <p>
                    <label for="alamat">Alamat: </label>
                    <textarea name="alamat"></textarea>
                </p>
                <p>
                    <label for="agama">Agama: </label>
                    <select name="agama">
                        <option>Islam</option>
                        <option>Kristen</option>
                        <option>Hindu</option>
                        <option>Budha</option>
                        <option>Atheis</option>
                    </select>
                </p>
                <p>
                    <label for="status_pegawai">Status Pegawai: </label>
                    <label><input type="radio" name="status_pegawai" value="kawin">Kawin</label>
                    <label><input type="radio" name="status_pegawai" value="belum kawin">Belum Kawin</label>
                </p>
                
                <p>
                    <input type="submit" value="Daftar" name="daftar" />
                </p>
            </fieldset>
        </form>
    </body>
</html>