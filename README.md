# kepegawaian

bagian admin
1. masih error untuk menangkap file dan data pns (7 juli 2021) -> ok

7 juli 2021
- error crud pns, di bagian admin.(tambah, hapus) -> ok
- error datepicker

9 juli 2021
- crud pengumnan -> ok

11 juli 2021
- tampil pengumuman di user pns -> ok
- ganti password belum bisa -> ok

16 juli 2021
- login kasubag -> ok
- tampilan kasubag, laporan data pegawai, data berkas upload -> ok

18 juli 2021
- kurang tampil data file yang belum di Upload
SELECT * FROM tb_permintaan_file WHERE NOT EXISTS (SELECT id_keterangan FROM tb_file where id_pegawai=1 and tb_file.id_keterangan=tb_permintaan_file.id_keterangan)
