<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Kelompok 1 - Form 1</title>
  </head>
  <body>
    <form method="POST" action="handle.php" enctype="multipart/form-data">
      <!-- FAWZUL AZHIM MUMIN (50421500) -->
      <fieldset>
        <!-- M.NUR LUTHFI (50421769) -->
        <legend>FORM REGISTRASI CALON MAHASISWA</legend>
        <table>
          <!-- MUHAMMAD RAFI ILHAM (51421034)-->
          <tr>
            <td>
              <label for="fullname">Nama Lengkap</label>
            </td>
            <td>:</td>
            <td>
              <input
                type="text"
                name="fullname"
                id="fullname"
                placeholder="e.g. Asep Sarip"
                maxlength="70"
                required
              />
            </td>
          </tr>

          <!-- RIVAL FEBRIAN	(51421329) -->
          <tr>
            <td>
              <label for="nik">NIK</label>
            </td>
            <td>:</td>
            <td>
              <input
                type="text"
                name="nik"
                id="nik"
                placeholder="XXXXXXXXXXXXXXXX"
                minlength="16"
                maxlength="16"
                required
              />
            </td>
          </tr>

          <!-- M.NUR LUTHFI (50421769) -->
          <tr>
            <td>
              <label for="nisn">NISN</label>
            </td>
            <td>:</td>
            <td>
              <input
                type="text"
                name="nisn"
                id="nisn"
                placeholder="XXXXXXXXXX"
                minlength="10"
                maxlength="10"
                required
              />
            </td>
          </tr>

          <!-- DICKY WIJAYA SAPUTRA (50421373) -->
          <tr>
            <td>
              <label for="email">Alamat Email</label>
            </td>
            <td>:</td>
            <td>
              <input
                type="email"
                name="email"
                placeholder="e.g. nama@email.com"
                maxlength="70"
                required
              />
            </td>
          </tr>

          <!-- FAWZUL AZHIM MUMIN (50421500) -->
          <tr>
            <td>
              <label for="phone">Nomor Handphone (Terkoneksi WhatsApp)</label>
            </td>
            <td>:</td>
            <td>
              <input
                type="text"
                name="phone"
                id="phone"
                placeholder="08XXXXXXXXXX"
                minlength="10"
                maxlength="13"
                required
              />
            </td>
          </tr>

          <!-- RIVAL FEBRIAN	(51421329) -->
          <tr>
            <td>
              <label for="place_of_birth">Tempat Lahir</label>
            </td>
            <td>:</td>
            <td>
              <input
                type="text"
                name="place_of_birth"
                id="place_of_birth"
                placeholder="e.g. Bogor"
                maxlength="50"
                required
              />
            </td>
          </tr>

          <tr>
            <td>
              <label for="date_of_birth">Tanggal Lahir</label>
            </td>
            <td>:</td>
            <td>
              <input
                type="date"
                name="date_of_birth"
                id="date_of_birth"
                required
              />
            </td>
          </tr>

          <!-- GEREN HAEKAL HAFIZH (50421549)-->
          <tr>
            <td>
              <label>Jenis Kelamin</label>
            </td>
            <td>:</td>
            <td>
              <input
                type="radio"
                name="gender"
                id="male_gender"
                value="laki - laki"
                required
              />
              <label for="male_gender">Laki - Laki</label>
              <input
                type="radio"
                name="gender"
                id="female_gender"
                value="perempuan"
              />
              <label for="female_gender">Perempuan</label>
            </td>
          </tr>

          <!-- MUHAMMAD RAFI ILHAM (51421034)-->
          <tr>
            <td>
              <label for="religion">Agama</label>
            </td>
            <td>:</td>
            <td>
              <select name="religion" id="religion" required>
                <option value="">-Pilih-</option>
                <option value="buddha">Buddha</option>
                <option value="hindu">Hindu</option>
                <option value="islam">Islam</option>
                <option value="katolik">Katolik</option>
                <option value="khonghucu">Khonghucu</option>
                <option value="kristen">Kristen</option>
              </select>
            </td>
          </tr>

          <!-- MUHAMMAD RAFI ILHAM (51421034)-->
          <tr>
            <td>
              <label for="address">Alamat Rumah</label>
            </td>
            <td>:</td>
            <td>
              <textarea
                name="address"
                id="address"
                cols="30"
                rows="5"
                placeholder="e.g. JALAN MANGGA BESAR III NO. 17, RT 06 RW 07, KELURAHAN BEDALI, KECAMATAN LAWANG, KAB. MALANG, JAWA TIMUR"
                maxlength="300"
                required
              ></textarea>
            </td>
          </tr>

          <!-- GEREN HAEKAL HAFIZH (50421549)-->
          <tr>
            <td>
              <label for="postal_code">Kode Pos</label>
            </td>
            <td>:</td>
            <td>
              <input
                type="text"
                name="postal_code"
                id="postal_code"
                minlength="5"
                maxlength="5"
                placeholder="60526"
                required
              />
            </td>
          </tr>

          <!-- DICKY WIJAYA SAPUTRA (50421373) -->
          <tr>
            <td>
              <label for="high_school">Asal Sekolah</label>
            </td>
            <td>:</td>
            <td>
              <input
                type="text"
                name="high_school"
                id="high_school"
                placeholder="e.g. SMAN 1 Depok"
                maxlength="50"
                required
              />
            </td>
          </tr>

          <!-- RIVAL FEBRIAN	(51421329) -->
          <tr>
            <td>
              <label for="pass_photo">Pas Foto (PNG, JPG, JPEG)</label>
            </td>
            <td>:</td>
            <td>
              <input type="file" name="pass_photo" id="pass_photo" required />
              * Ukuran Maksimal 5 MB
            </td>
          </tr>

          <!-- GEREN HAEKAL HAFIZH (50421549)-->
          <tr>
            <td>
              <label for="ktp">Scan KTP (PDF)</label>
            </td>
            <td>:</td>
            <td>
              <input type="file" name="ktp" id="ktp" required />
              * Ukuran Maksimal 5 MB
            </td>
          </tr>

          <!-- M.NUR LUTHFI (50421769) -->
          <tr>
            <td>
              <label for="diploma">Scan Ijazah Terlegalisir (PDF)</label>
            </td>
            <td>:</td>
            <td>
              <input type="file" name="diploma" id="diploma" required />
              * Ukuran Maksimal 5 MB
            </td>
          </tr>

          <!-- NUR MUHAMMAD HUSEIN (51421157)-->
          <tr>
            <td>
              <label for="transcript"
                >Transkrip Nilai (Semester 1 - 6) (PDF)</label
              >
            </td>
            <td>:</td>
            <td>
              <input type="file" name="transcript" id="transcript" required />
              * Ukuran Maksimal 5 MB
            </td>
          </tr>

          <!-- NUR MUHAMMAD HUSEIN (51421157) -->
          <tr>
            <td>
              <label for="region">Wilayah Kampus</label>
            </td>
            <td>:</td>
            <td>
              <select name="region" id="region" required>
                <option value="">-Pilih-</option>
                <option value="depok">Depok</option>
                <option value="alam sutera">Alam Sutera</option>
                <option value="karawaci">Karawaci</option>
                <option value="kalimalang">Kalimalang</option>
              </select>
            </td>
          </tr>

          <!-- NUR MUHAMMAD HUSEIN (51421157) -->
          <tr>
            <td>
              <label for="study_program">Program Studi</label>
            </td>
            <td>:</td>
            <td>
              <select name="study_program" id="study_program" required>
                <option value="">-Pilih-</option>
                <optgroup
                  label="Fakultas Ilmu Komputer dan Teknologi Informasi"
                >
                  <option value="sistem komputer s1">
                    - Sistem Komputer S1
                  </option>
                  <option value="sistem informasi s1">
                    - Sistem Informasi S1
                  </option>
                  <option value="teknik komputer d3">
                    - Teknik Komputer D3
                  </option>
                  <option value="manajemen informatika d3">
                    - Manajemen Informatika D3
                  </option>
                </optgroup>
                <optgroup label="Fakultas Teknologi Industri">
                  <option value="informatika s1">- Informatika S1</option>
                  <option value="teknik elektro s1">- Teknik Elektro S1</option>
                  <option value="teknik mesin s1">- Teknik Mesin S1</option>
                  <option value="teknik industri s1">
                    - Teknik Industri S1
                  </option>
                  <option value="agroteknologi s1">- Agroteknologi S1</option>
                </optgroup>
                <optgroup label="Fakultas Ekonomi">
                  <option value="akuntansi s1">- Akuntansi S1</option>
                  <option value="manajemen s1">- Manajemen S1</option>
                  <option value="ekonomi syariah s1">
                    - Ekonomi Syariah S1
                  </option>
                  <option value="akuntansi d3">- Akuntansi D3</option>
                  <option value="manajemen d3">- Manajemen D3</option>
                </optgroup>
                <optgroup label="Fakultas Sipil dan Perencanaan">
                  <option value="arsitektur s1">- Arsitektur S1</option>
                  <option value="desain interior s1">
                    - Desain Interior S1
                  </option>
                  <option value="teknik sipil s1">- Teknik Sipil S1</option>
                </optgroup>
              </select>
            </td>
          </tr>

          <!-- FAWZUL AZHIM MUMIN (50421500) -->
          <tr>
            <td>
              <input type="submit" value="Kirim" />
              <input type="reset" value="Bersihkan" />
            </td>
          </tr>
        </table>
      </fieldset>
    </form>

    <a href="view.php">View</a>
    <script src="script.js"></script>
  </body>
</html>
