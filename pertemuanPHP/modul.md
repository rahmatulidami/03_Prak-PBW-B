# Apa itu PHP
PHP adalah bahasa pemrograman scripting yang berjalan pada server. PHP dikembangkan dengan bahasa C sehingga sintaksnya mirip-mirip dengan bahasa C

## Peralatan yang dibutuhkan untuk Coding PHP
Ada 4 tiga alat yang perlu disiapkan untuk mulai coding PHP:

1. PHP interpreter – program buat menjalankan PHP pada server
2. Teks Editor – buat menulis kode PHP
3. Web Server – service buat menjalankan PHP
4. Web Browser – buat melihat atau membuka website

# Dasar PHP
## Struktur Program PHP yang Paling Dasar
Ini adalah bentuk paling dasar program PHP:
```
<?php

echo "Hello World!";
```
Keterangan:

```<?php``` ini adalah pembuka program PHP. Pembuka ini wajib ada di setiap program PHP.
```echo "Hello World!";``` adalah sebuah statement atau perintah untuk menampilkan teks.

Kenapa tidak ditutup dengan ```?>?```

Tutup sebenarnya bersifat opsional. Tutup program dibutuhkan saat kita menggabungkan kode PHP dengan HTML.

## Menulis Kode HTML dan PHP
Saat kita menulis kode PHP di dalam HTML, maka wajib hukumnya membuat tutup program.

Contoh:
```
<!DOCTYPE html>
<html>
    <head>
        <title><?php echo "Belajar PHP" ?></title>
    </head>
    <body>
        <?php
            echo "saya sedang belajar PHP<br>";
            echo "<p>Belajar PHP hingga jadi master</p>";
        ?>
    </body>
</html>
```

Apa yang akan terjadi bila kita menghapus tutup PHP (```?>```)?

Tentunya program akan error.

Oya, PHP yang ditulis di dalam HTML, filenya harus disimpan dengan ekstensi .php bukan .html meskipun isinya HTML dan PHP.

Lalu ada juga yang menulis seperti ini:
```
<?php

echo "<html>";
echo "<head>";
echo "<title>Judul Web</title>";
echo "</head>";
echo "<body>";
echo "<h1>Selamat datang</h1>";
echo "</body>";
echo "</html>";
```
Nah kalau yang ini bisa tidak ditutup, karena kode HTML-nya ditulis di dalam sintak PHP.

## Penulisan Statement dan Ekspresi
Statement dan ekspresi adalah instruksi yang akan diberikan ke komputer. Setiap statement dan ekspresi di PHP harus diakhiri dengan titik koma (```;```).

Contoh:
```
<?php
echo "ini statement 1";
echo "ini statement 2";
$a = $b + $c;
```
Gimana kalau kita lupa menuliskan titik koma?

Tentu programnya akan error.

## Aturan Penulisan Case PHP

Contoh:
```
<?php

$nama = "rahma;
$NAMA = "nitiya";

?>
```
Variabel ```$nama``` dan ```$NAMA``` adalah dua variabel yang berbeda. Mereka tidak sama. Hal ini dikarenakan PHP adalah bahasa pemrograman yang bersifat ```case sensitive```. Artinya, huruf besar (kapital) dan huruf kecil akan dibedakan.

Penulisan huruf besar dan kecil dalam program harus diperhatikan, karena bisa menyebabkan error bila salah.

Contoh:
```
$umur = 19;
echo "Umur saya adalah $Umur";
```

Pada kode di atas, kita membuat variabel ```$umur``` dengan huruf kecil. Lalu saat menggunakan variabel kita menggunakan ```$Umur```.

Jelas sekali ini akan menyebabkan error. Untuk menghindari ini, kita harus konsisten dalam penamaan variabel dan konstanta. Gunakan nama variabel dengan huruf kecil saja dan konstanta dengan huruf kapital.

Contoh:
```
const INI_KONSTANTA = 123;
$ini_variabel = 23;
$iniJugaVariabel = 49;
```

## Penulisan Komentar di PHP
Komentar adalah bagian yang tidak akan dieksekusi oleh komputer. Biasanya digunakan untuk keterangan, penjelasan, dan dokumentasi kode program.

Komentar di PHP dapat ditulis dengan dua cara:

Menggunakan tanda ```//``` untuk komentar satu baris;
Menggunakan tanda ```/*``` untuk komentar lebih dari satu baris.
Contoh:
```
<?php 

// ini adalah komentar
echo "Hello world";

/*
ini adalah komentar 
yang lebih dari satu 
baris
*/

?>
```

## Penulisan Blok Program
Blok program merupakan kumpulan dari statement dan ekspresi. Blok program di PHP dibungkus dengan kurung kurawal ```{ ... }```.

Contoh:
```
if ($umur > 18){
    echo "Kamu sudah dewasa";
    echo "Selamat datang";
    echo "Kamu boleh minum kopi";
}
```

Program di atas adalah contoh blok kode if yang berisi tiga statement.

# Fungsi echo(), print(), dan printf()
PHP memiliki beberapa fungsi untuk mencetak teks ke layar:

1. fungsi echo();
2. fungsi print();
3. fungsi printf();

## Fungsi echo()
Fungi ```echo()``` adalah fungsi untuk menampilkan teks ke layar. Fungsi ini dapat digunakan dengan tanda kurung maupun tanpa tanda kurung.
Contoh:
```
<?php
echo "<h2>Belajar PHP itu mudah!</h2>";
echo("Hello world!<br>");
echo "Aku sedang belajar PHP!<br>";
echo "Ini ", "teks ", "yang ", "dibuat ", "terpisah.";
?>
```
Fungsi ```echo()``` tidak akan mengembalikan apa-apa setelah dieksekusi. Dia hanya bertugas menampilkan teks saja.

## Fungsi print()
Fungsi ```print()``` sama seperti fungsi ```echo()```. Dia juga digunakan untuk menampilkan teks ke layar. Fungsi ```print()``` juga bisa digunakan tanpa tanda kurung.

Perbedaannya dengan ```echo()```:

1. Fungsi ```print()``` akan selalu mengembalikan nilai ```1``` saat dieksekusi, sedangkan ```echo()``` tidak mengembalikan apa-apa.
Fungsi ```print()``` hanya boleh diberikan satu parameter saja, sedangkan ```echo()``` boleh lebih dari satu.
Contoh:
```
<?php
print "<h2>Belajar PHP dari Nol!</h2>";
print "Hello world!<br>";
print "Belajar mencetak teks di PHP!";
?>
```
Apabila kita membuat variabel lalu mengisinya dengan fungsi ```print() ``` seperti ini:

```
$cetak = print("Hello World!");
```
Maka variabel ```$cetak``` akan bernilai 1.

Apabila kita memberikan dua parameter ke dalam fungsi ```print()```, maka akan terjadi error.
```
print("Hello", "World"); // <-- ini akan error
```

## Menggabungkan String atau Teks di PHP
Pada fungsi ```echo()```, kita menggabungkan teks atau string dengan memberikan sebagai argumen (dipisah dengan tanda koma).

```echo "Ini ", "teks ", "yang ", "dibuat ", "terpisah.";```
Selain cara ini, kita juga bisa melakukannya dengan tanda titik (```.```).

Titik adalah operator untuk menggabungkan dua teks di PHP.

Kenapa tidak menggunakan simbol plus (+)?
Pada PHP, simbol plus digunakan untuk penjumlahan, bukan untuk menggabungkan string.

Jadi:
```
echo "1" + "1"; // akan menghasilkan 2
echo "1" . "1"; // akan menghasilkan 11
```
Contoh:
```
<?php
$txt1 = "Belajar PHP";
$txt2 = "lab rpl";
$x = 5;
$y = 4;

echo "<h2>" . $txt1 . "</h2>";
echo "Aku belajar pemrograman PHP di " . $txt2 . "<br>";
echo $x + $y;
?>
```

## Fungsi printf()
Fungsi ```printf()``` adalah fungsi untuk memformat teks atau string. Fungsi ini akan mengembalikan panjang dari teks saat dieksekusi.

Biasanya saat kita menggunakan fungsi echo, kita akan menulis seperti ini:
```
$txt = "lab rpl";
echo "Aku belajar pemrograman PHP di " . $txt . "<br>";
```
Apabila kita ingin menggunakan fungsi ```printf()```, maka kita bisa lakukan seperti ini:
```
$txt = "lab rpl";
printf("Aku belajar pemrograman PHP di %s<br>", $txt);
```
Simbol ```%s``` adalah sebuah placeholder untuk teks (string). Selain simbol ```%s``` ada juga simbol:

- ```%d``` untuk bilangan desimal (integer);
- ```%f``` untuk pecahan (float);
- ```%b``` untuk boolean.

Contoh:
```
// misalkan kita punya bilangan dengan notasi E seperti ini
$harga = 100000;

// jika kita cetak dengan echo:
echo "Harganya adalah Rp $harga";

// jika kita cetak dengan printf
printf("Harganya adalah Rp %.2f", $harga);
```
Hasilnya:
```
Harganya adalah Rp 100000
Harganya adalah Rp 100000.00
```
Simbol ```%.2f``` artinya kita akan menetak bilangan dengan dua angka di belakang koma.

## Mencetak Tanda Kutip

```echo 'hari ini hari jum'at';```
Maka akan terjadi error!

Karena di sana dianggap tutup teksnya berakhir pada teks jum.

Lalu bagaimana caranya kita mencetak tanda kutip?

Kita bisa menggunakan tanda back slash (```\```).

Contoh:
```
echo 'hari ini hari jum\'at';
```
Maka akan menghasilkan:
```
hari ini hari jum'at
```

# Variabel dan Tipe Data
## Membuat variabel di PHP
Pada PHP, kita membuat variabel dengan tanda dolar (```$```), lalu diikuti dengan nama variabelnya serta nilai yang ingin kita simpan.

Contoh:
```
<?php
$harga = 1000;
```
Kita baru saja membuat variabel bernama ```$harga``` dengan isi 1000.

Tanda sama dengan (```=```) adalah simbol atau operator yang digunakan untuk mengisi nilai ke variabel.

Contoh lain:
```
<?php

$nama_barang = "Kopi C++";
$harga = 4000;
$stok = 40;
```

Awal dari nama variabel tidak boleh menggunakan angka dan simbol, kecuali underscore.

Contoh: ❌ Salah
```
$!nama = "";
$46rosi = "";
```
Contoh: ✔️ Benar
```
$nama = "";
$rosi46 = "";
```

Nama variabel yang terdiri dari dua suku kata, bisa dipisah dengan underscore (_) atau menggunakan style camelCase.

Contoh:
```
$nama_barang = "Buku PHP";
$namaPembeli = "Kak Nitiya"; // <-- menggunakan camelCase
```

Variabel harus diisi saat pembuatannya. Bila kita tidak ingin mengisi, cukup isi dengan nilai kosong.

Contoh:
```
$nama_barang = "";
$namaPembeli = "";
$harga = 0;
```
Nama variabel bersifat Case Sensitive, artinya huruf besar dan huruf kecil dibedakan.

Contoh: Tiga variabel ini akan dianggap berbeda.
```
$Belajar = "";
$BELAJAR = "";
$belajar = "";
```

## Mengambil Nilai dari Variabel
Setelah kita membuat variabel, biasanya akan kita gunakan pada proses berikutnya dengan mengambil nilainya.

Mengambil nilai dari variabel bisa kita lakukan dengan menuliskan namanya dalam perintah echo maupun ekspresi yang lain.

Contoh:
```
<?php

// membuat variabel baru
$nama_barang = "Minyak Goreng";
$harga = 15000;

// menampilkan isi variabel
echo "Ibu membeli $nama_barang seharga Rp $harga";
```

Jika kita menggunakan tanda petik ganda (```"```) dalam echo, maka kita bisa menuliskan langsung nama variabelnya seperti ini:
```
$judul = "Belajar PHP dari nol sampai expert";
echo "Judul artikel: $judul";
```

Apabila kita menggunakan tanda petik tunggal (```'```), maka kita harus menggunakan titik untuk menggabungkan teks dengan variabelnya.

Contoh:
```
$judul = "Tutorial PHP untuk Pemula";
echo 'Judul artikel: '.$judul;
```
Tanda titik pada perintah echo berfungsi untuk menggabungkan teks yang ada di dalam variabel dengan teks yang akan kita cetak.

## Mengenal Tipe Data di PHP

Ada beberapa macam tipe data yang dapat disimpan dalam variabel:

1. Tipe data char (karakter)
2. Tipe data string (teks)
3. Tipe data integer (angka)
4. Tipe data float (pecahan)
5. Tipe data boolean
6. Tipe data objek
7. Tipe data Array
8. NULL
9. dll.
Pada PHP, kita tidak harus mendeklarasikan tipe datanya secara eksplisit. Karena PHP sudah mampu mengenali tipe data dari nilai yang kita berikan.

Contoh:
```
<?php

// tipe data char (karakter)
$jenis_kelamin = 'P';

// tipe data string (teks)
$nama_lengkap = "Rahma";

// tipe data integer
$umur = 21;

// tipe data float
$berat = 48.3;

// tipe data float
$tinggi = 162.2;

// tipe data boolean
$menikah = false;

echo "Nama: $nama_lengkap<br>";
echo "Jenis Kelamin: $jenis_kelamin<br>";
echo "Umur: $umur tahun<br>";
echo "berat badan: $berat kg<br>";
echo "tinggi badan: $tinggi cm<br>";
echo "menikah: $menikah";
```
Variabel ```$menikah``` akan ditampilkan kosong, karena nilai ```false``` akan dikonversi menjadi kosong dalam string.


