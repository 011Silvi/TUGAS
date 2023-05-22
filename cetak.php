<?php
// Koneksi ke database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "datalengkap";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Query untuk mendapatkan data dari tabel
$sql = "SELECT id, tanggal, jenis_pendaftaran, tanggal_masuk, nis, nomor_peserta, no_seri_shun, no_seri_ijazah, hobi, 
cita_cita, nama_lengkap, jenis_kelamin, nisn, nik, tempat_lahir, tanggal_lahir, agama, berkebutuhan_khusus, alamat, rt, rw, 
dusun, kelurahan, kecamatan, kode_pos, tempat_tinggal, transportasi, nomor_hp, nomor_telepon, email, penerima_kip, no_kps, 
kewarganegaraan, nama_ayah, tahun_lahir_ayah, pendidikan_ayah, pekerjaan_ayah, penghasilan_ayah, kebutuhan_khusus_ayah, nama_ibu, 
tahun_lahir_ibu, pendidikan_ibu, pekerjaan_ibu, penghasilan_ibu, kebutuhan_khusus_ibu FROM data_lengkap";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table>";
    echo "<tr>";
    echo "<th>ID</th>";
    echo "<th>Tanggal</th>";
    echo "<th>Jenis Pendaftaran</th>";
    echo "<th>Tanggal Masuk</th>";
    echo "<th>NIS</th>";
    echo "<th>Nomor Peserta</th>";
    echo "<th>No. Seri SHUN</th>";
    echo "<th>No. Seri Ijazah</th>";
    echo "<th>Hobi</th>";
    echo "<th>Cita-cita</th>";
    echo "<th>Nama Lengkap</th>";
    echo "<th>Jenis Kelamin</th>";
    echo "<th>NISN</th>";
    echo "<th>NIK</th>";
    echo "<th>Tempat Lahir</th>";
    echo "<th>Tanggal Lahir</th>";
    echo "<th>Agama</th>";
    echo "<th>Berkebutuhan Khusus</th>";
    echo "<th>Alamat</th>";
    echo "<th>RT</th>";
    echo "<th>RW</th>";
    echo "<th>Dusun</th>";
    echo "<th>Kelurahan</th>";
    echo "<th>Kecamatan</th>";
    echo "<th>Kode Pos</th>";
    echo "<th>Tempat Tinggal</th>";
    echo "<th>Transportasi</th>";
    echo "<th>Nomor HP</th>";
    echo "<th>Nomor Telepon</th>";
    echo "<th>Email</th>";
    echo "<th>Penerima KIP</th>";
    echo "<th>No. KPS</th>";
    echo "<th>Kewarganegaraan</th>";
    echo "<th>Nama Ayah</th>";
    echo "<th>Tahun Lahir Ayah</th>";
    echo "<th>Pendidikan Ayah</th>";
    echo "<th>Pekerjaan Ayah</th>";
    echo "<th>Penghasilan Ayah</th>";
    echo "<th>Kebutuhan Khusus Ayah</th>";
    echo "<th>Nama Ibu</th>";
    echo "<th>Tahun Lahir Ibu</th>";
    echo "<th>Pendidikan Ibu</th>";
    echo "<th>Pekerjaan Ibu</th>";
    echo "<th>Penghasilan Ibu</th>";
    echo "<th>Kebutuhan Khusus Ibu</th>";
    echo "</tr>";

    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row["id"] . "</td>";
        echo "<td>" . $row["tanggal"] . "</td>";
        echo "<td>" . $row["jenis_pendaftaran"] . "</td>";
        echo "<td>" . $row["tanggal_masuk"] . "</td>";
        echo "<td>" . $row["nis"] . "</td>";
        echo "<td>" . $row["nomor_peserta"] . "</td>";
        echo "<td>" . $row["no_seri_shun"] . "</td>";
        echo "<td>" . $row["no_seri_ijazah"] . "</td>";
        echo "<td>" . $row["hobi"] . "</td>";
        echo "<td>" . $row["cita_cita"] . "</td>";
        echo "<td>" . $row["nama_lengkap"] . "</td>";
        echo "<td>" . $row["jenis_kelamin"] . "</td>";
        echo "<td>" . $row["nisn"] . "</td>";
        echo "<td>" . $row["nik"] . "</td>";
        echo "<td>" . $row["tempat_lahir"] . "</td>";
        echo "<td>" . $row["tanggal_lahir"] . "</td>";
        echo "<td>" . $row["agama"] . "</td>";
        echo "<td>" . $row["berkebutuhan_khusus"] . "</td>";
        echo "<td>" . $row["alamat"] . "</td>";
        echo "<td>" . $row["rt"] . "</td>";
        echo "<td>" . $row["rw"] . "</td>";
        echo "<td>" . $row["dusun"] . "</td>";
        echo "<td>" . $row["kelurahan"] . "</td>";
        echo "<td>" . $row["kecamatan"] . "</td>";
        echo "<td>" . $row["kode_pos"] . "</td>";
        echo "<td>" . $row["tempat_tinggal"] . "</td>";
        echo "<td>" . $row["transportasi"] . "</td>";
        echo "<td>" . $row["nomor_hp"] . "</td>";
        echo "<td>" . $row["nomor_telepon"] . "</td>";
        echo "<td>" . $row["email"] . "</td>";
        echo "<td>" . $row["penerima_kip"] . "</td>";
        echo "<td>" . $row["no_kps"] . "</td>";
        echo "<td>" . $row["kewarganegaraan"] . "</td>";
        echo "<td>" . $row["nama_ayah"] . "</td>";
        echo "<td>" . $row["tahun_lahir_ayah"] . "</td>";
        echo "<td>" . $row["pendidikan_ayah"] . "</td>";
        echo "<td>" . $row["pekerjaan_ayah"] . "</td>";
        echo "<td>" . $row["penghasilan_ayah"] . "</td>";
        echo "<td>" . $row["kebutuhan_khusus_ayah"] . "</td>";
        echo "<td>" . $row["nama_ibu"] . "</td>";
        echo "<td>" . $row["tahun_lahir_ibu"] . "</td>";
        echo "<td>" . $row["pendidikan_ibu"] . "</td>";
        echo "<td>" . $row["pekerjaan_ibu"] . "</td>";
        echo "<td>" . $row["penghasilan_ibu"] . "</td>";
        echo "<td>" . $row["kebutuhan_khusus_ibu"] . "</td>";
        echo "</tr>";
    }
    echo "</table>";
} else {
    echo "Tidak ada data yang ditemukan";
}
$conn->close();
?>
<a href="(tugas 9).php"><button>REPORT TO EXCEL</button></a>


