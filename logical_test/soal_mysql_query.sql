SELECT a.`mhs_nama` ,b.`nilai`, c.mk_nama FROM tb_mahasiswa a 
JOIN `tb_mahasiswa_nilai` b ON a.`mhs_id`=b.`mhs_id`
JOIN `tb_matakuliah` c ON c.`mk_id` = b.`mk_id`
WHERE c.`mk_kode`= 'MK303'
ORDER BY b.`nilai` DESC LIMIT 1
