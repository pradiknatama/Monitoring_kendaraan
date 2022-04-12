
## Daftar Username Password
Admin
-   Email    :admin@gmail.com
-   Password :12345678
Staff
-   Email    :tama@gmail.com
-   Password :12345678
-   Email    :alfian@gmail.com
-   Password :12345678

## Database Version
mysql 8.0.15
##  php version
PHP: 8.0.15
### Framework 
Laravel 8

## Panduan Penggunaan Aplikasi

- Admin:
    -input pegawai= Admin dapat melakukan penambahan pegawai dengan cara masuk/memilih menu pegawai yang telah ada di sidebar.Pada halaman pegawai admin dapat melakukan penambahan pegawai dengan cara menekan button tambah pegawai, kemudian akan muncul form untuk mengisi data dari pegawai tersebut. apabila sudah selesai kemudian tekan button submit untuk menyimpan data yang telah diinputkan. Setelah selesai admin dapat melihat data pegawai yang telah di daftarkan melalui table yang tersedia di halaman pegawai.
    -input kendaraan= Admin dapat melakukan penambahan kendaraan dengan cara masuk/memilih menu kendaraan yang ada di sidebar. Pada halaman kendaraan terdapat table untuk menampilkan data dari kendaraan yang sudah diinputkan dan juga terdapat button tambah kendaraan yang berguna untuk menambahkan data kendaraan yang diperlukan. Setelah memilih button tambah kendaraan maka akan ditampilkan form untuk mengisi data dari kendaraan.Setelah selesai mengisi form lalu pilih submit untuk menyimpan data kendaraan yang telah diinputkan.
    -input pesanan= Admin memilih menu pesanan yang ada di sidebar. Kemudian terdapat table untuk menampilkan data dari pesanan yang sudah diinputkan dan juga terdapat button tambah pesanan untuk menambahkan pesanan yang diperlukan. Setelah memilih button tambah pesanan maka tersedia form seperti nama pegawai yang memesan, nama driver yang akan mengendarai, memilih kendaraan yang akan digunakan , kemudian memilih pihak 1, dan 2 yang akan menyetujui.setelah selesai makan akan kembali pada tampilan pesanan dan menampilkan status apakah sudah diverifikasi(disetujui) atau belum diverifikasi oleh pihak yang menyetujui.
    -pada halaman home admin dapat melihat jumlah pegawai, kendaraan,dan lokasi kantor. Kemudain terdapat juga table data pesanan kendaraan yang dapat di ubah menjadi excel, ataupun pdf.

-staf(pihak yang menyetujui pesanan):
    -Pada halaman home staf dapat melihat data pesanan kendaraan yang belum diverifikasi ataupun sudah diverifikasi oleh staff tersebut.Apabila ingin memverifikasi staf hanya perlu memilih data pesanan mana yang ingin diverifikasi kemudian menekan button verifikasi. Setelah menekan button verifikasi maka status data pesanan yang telah dipilih sebelumnya akan menjadi Terverifikasi. Apabila staf membutuhkan data pesanan kendaraan maka staf dapat mendownload filenya menjadi excel ataupun pdf
## ERD
<p align="center"><img src="/public/img/erd.png" width="800"></p>

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
