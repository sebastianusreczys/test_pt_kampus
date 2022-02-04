SELECT tbl_mahasiswa.`mhs_nama`, tbl_mahasiswa_nilai.`nilai` FROM tbl_mahasiswa, `tbl_mahasiswa_nilai`, `tb_matakuliah`
WHERE tb_matakuliah.`mk_kode` ="MK303" AND `tbl_mahasiswa_nilai`.`nilai` = (SELECT MAX(nilai) FROM `tbl_mahasiswa_nilai`
WHERE mk_kode = "MK303");