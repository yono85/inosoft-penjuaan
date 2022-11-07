# inosoft-penjuaan

#menampilkah semua penjulan
GET: "api/penjulaan"

#menampilkan penjualan bedaraskan kategori
GET: "api/penjualan?cat=1" //motor

#menampilkan penjualan bedaraskan tahun kendaraan
GET: "api/penjualan?year=2020" //tahun kendaraan

#input penjualan
POST: "api/penjualan/store"

dengan field:
- kategori
- tahun
- warna
- harga


#menampilkan stock kendaraan
GET: "api/stock" //stock semua kendaraan

GET: "api/stock?cat=1" //stock motor
GET: "api/stock?cat=2" //stock mobil
