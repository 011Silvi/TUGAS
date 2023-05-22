<?php
require 'vendor/autoload.php';
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

$spreadsheet = new Spreadsheet();
$sheet = $spreadsheet->getActiveSheet();
$sheet->setCellValue('A1', 'ID');
$sheet->setCellValue('B1', 'NAMA_LENGKAP');
$sheet->setCellValue('C1', 'JENIS_KELAMIN');
$sheet->setCellValue('D1', 'NISN');
$sheet->setCellValue('E1', 'NIK');
$sheet->setCellValue('F1', 'TEMPAT_LAHIR');
$sheet->setCellValue('G1', 'TANGGAL_LAHIR');
$sheet->setCellValue('H1', 'AGAMA');
$sheet->setCellValue('I1', 'BERKEBUTUHAN_KHUSUS');
$sheet->setCellValue('J1', 'ALAMAT');
$sheet->setCellValue('K1', 'RT');
$sheet->setCellValue('L1', 'RW');
$sheet->setCellValue('M1', 'DUSUN');
$sheet->setCellValue('N1', 'KELURAHAN');
$sheet->setCellValue('O1', 'KECAMATAN');
$sheet->setCellValue('P1', 'KODE_POS');
$sheet->setCellValue('Q1', 'TEMPAT_TINGGAL');
$sheet->setCellValue('R1', 'TRANSPORTASI');
$sheet->setCellValue('S1', 'NOMOR_HP');
$sheet->setCellValue('T1', 'NOMOR_TELEPON');
$sheet->setCellValue('U1', 'EMAIL');
$sheet->setCellValue('V1', 'PENERIMA_KIP');
$sheet->setCellValue('W1', 'NOMOR_KPS');
$sheet->setCellValue('X1', 'KEWARGANEGARAAN');
$sheet->setCellValue('Y1', 'NAMA_IBU');
$sheet->setCellValue('Z1', 'TAHUN_LAHIR_IBU');
$sheet->setCellValue('AA1', 'PENDIDIKAN_IBU');
$sheet->setCellValue('AB1', 'PEKERJAAN_IBU');
$sheet->setCellValue('AC1', 'PENGHASILAN_IBU');
$sheet->setCellValue('AD1', 'KEBUTUHAN_KHUSUS_IBU');
$sheet->setCellValue('AE1', 'NAMA_AYAH');
$sheet->setCellValue('AF1', 'TAHUN_LAHIR_AYAH');
$sheet->setCellValue('AG1', 'PENDIDKAN_AYAH');
$sheet->setCellValue('AH1', 'PEKERJAAN_AYAH');
$sheet->setCellValue('AI1', 'PENGHASILAN_AYAH');
$sheet->setCellValue('AJ1', 'KEBUTUHAN_KHUSUS_AYAH');


$koneksi = mysqli_connect("localhost", "root", "", "datalengkap");
$query = mysqli_query($koneksi, "SELECT * FROM data_lengkap");
$i = 2;
$no = 1;
while ($row = mysqli_fetch_array($query)) {
    $sheet->setCellValue('A' . $i, $no++);
    $sheet->setCellValue('B' . $i, $row['nama_lengkap']);
    $sheet->setCellValue('C' . $i, $row['jenis_kelamin']);
    $sheet->setCellValue('D' . $i, $row['nisn']);
    $sheet->setCellValue('E' . $i, $row['nik']);
    $sheet->setCellValue('F' . $i, $row['tempat_lahir']);
    $sheet->setCellValue('G' . $i, $row['tanggal_lahir']);
    $sheet->setCellValue('H' . $i, $row['agama']);
    $sheet->setCellValue('I' . $i, $row['berkebutuhan_khusus']);
    $sheet->setCellValue('J' . $i, $row['alamat']);
    $sheet->setCellValue('K' . $i, $row['rt']);
    $sheet->setCellValue('L' . $i, $row['rw']);
    $sheet->setCellValue('M' . $i, $row['dusun']);
    $sheet->setCellValue('N' . $i, $row['kelurahan']);
    $sheet->setCellValue('O' . $i, $row['kecamatan']);
    $sheet->setCellValue('P' . $i, $row['kode_pos']);
    $sheet->setCellValue('Q' . $i, $row['tempat_tinggal']);
    $sheet->setCellValue('R' . $i, $row['transportasi']);
    $sheet->setCellValue('S' . $i, $row['nomor_hp']);
    $sheet->setCellValue('T' . $i, $row['nomor_telepon']);
    $sheet->setCellValue('U' . $i, $row['email']);
    $sheet->setCellValue('V' . $i, $row['penerima_kip']);
    $sheet->setCellValue('W' . $i, $row['no_kps']);
    $sheet->setCellValue('X' . $i, $row['kewarganegaraan']);
    $sheet->setCellValue('Y' . $i, $row['nama_ibu']);
    $sheet->setCellValue('Z' . $i, $row['tahun_lahir_ibu']);
    $sheet->setCellValue('AA' . $i, $row['pendidikan_ibu']);
    $sheet->setCellValue('AB' . $i, $row['pekerjaan_ibu']);
    $sheet->setCellValue('AC' . $i, $row['penghasilan_ibu']);
    $sheet->setCellValue('AD' . $i, $row['kebutuhan_khusus_ibu']);
    $sheet->setCellValue('AE' . $i, $row['nama_ayah']);
    $sheet->setCellValue('AF' . $i, $row['tahun_lahir_ayah']);
    $sheet->setCellValue('AG' . $i, $row['pendidikan_ayah']);
    $sheet->setCellValue('AH' . $i, $row['pekerjaan_ayah']);
    $sheet->setCellValue('AI' . $i, $row['penghasilan_ayah']);
    $sheet->setCellValue('AJ' . $i, $row['kebutuhan_khusus_ayah']);
    $i++;
}

$styleArray = [
    'borders' => [
        'allBorders' => [
            'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN,
        ],
    ],
];
$sheet->getStyle('A1:AJ' . ($i - 1))->applyFromArray($styleArray);

$writer = new Xlsx($spreadsheet);
$writer->save('REPORT DATABASE.xlsx');
?>
