## Operator
Operator adalah simbol yang digunakan untuk melakukan operasi pada suatu nilai dan variabel.

Operator dalam pemrograman terbagi dalam 6 jenis:

1. Operator aritmatika;
2. Operator Penugasan (Assignment);
3. Operator relasi atau perbandingan;
4. Operator Logika;
5. Operator Bitwise;
6. Operator Ternary;

### 1. Operator Aritmatika pada Javascript
Operator aritmatika merupakan operator untuk melakukan operasi aritmatika seperti penjumlahan, pengurangan, pembagian, perkalian, dsb.
| Nama Operator | Simbol |
|---------|---------|
| Penjumlahan | +  |
| Pengurangan  | - |
| Perkalian | * |
| Pembagian  | /  |
| Pemangkatan | **  |
| Sisa Bagi | %  |

Contoh:
```
var a = 5;
var b = 3;

// menggunakan operator penjumlahan
var c = a + b;
console.log(c);
```

Coba juga dengan operator lainnya:
```
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Operator Aritmatika</title>
</head>

<body>

    <script>
        var a = 15;
        var b = 4;
        var c = 0;

        // pengurangan
        c = a - b;
        document.write(`${a} - ${b} = ${c}<br/>`);

        // Perkalian
        c = a * b;
        document.write(`${a} * ${b} = ${c}<br/>`);

        // pemangkatan
        c = a ** b;
        document.write(`${a} ** ${b} = ${c}<br/>`);

        // Pembagian
        c = a / b;
        document.write(`${a} / ${b} = ${c}<br/>`);

        // Modulo
        c = a % b;
        document.write(`${a} % ${b} = ${c}<br/>`);
    </script>
</body>

</html>
```
#### Operator Penggabungan Teks
Pada Javascript, apabila kita akan melakukan operasi terhadap tipe data string atau teks menggunakan penjumlahan (+), maka yang akan terjadi adalah penggabungan; Bukan penjumlahan.

Contoh:

```
var a = "10" + "2"; 
```
Maka hasilnya akan:
`102`

### 2. Operator Penugasan pada Javascript
Operator penugasan adalah operator yang digunakan untuk memberikan tugas kepada variabel. Biasanya digunakan untuk mengisi variabel.

Contoh:
`
var a = 19;
`
Variabel a kita berikan tugas untuk menyimpan nilai 19.

Operator penugasan terdiri dari:
| Nama Operator | Simbol |
|---------|---------|
| Pengisian Nilai | = |
| Pengisian dan Penambahan | += |
| Pengisian dan Pengurangan | -= |
| Pengisian dan Perkalian  | *=  |
| Pengisian dan Pemangkatan | **=  |
| Pengisian dan Pembagian | /= |
| Pengisian dan Sisa bagi | %=  |

Operator penugasan sama seperti operator aritmatika. Ia juga digunakan untuk melakukan operasi aritmatika.

Contoh:
```
var jumlahView = 12;

// menggunakan operator penugasan penjumlahan
// untuk menambah nilai
jumlahView += 1;
```

Hasilnya:

Variabel `jumlahView ` akan bertambah satu.

Maksud dari `jumlahView += 1` adalah seperti ini:

```
jumlahView = jumlahView + 1; 
```
Bisa dibaca:

Isi variabel `jumlahView` dengan penjumlahan dari nilai `jumlahView` sebelumnya dengan 1.

Khusus untuk operator penugasan yang dijumlahkan dan dikurangi dengan satu, bisa disingkat dengan `++` dan `--` untuk pengurangan.

Contoh:
```
var a = 2;
a++;
```
Maka nilai dari variabel a akan menjadi 3.

Berikut ini contoh operator penugasan:
```
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Operator Penugasan</title>
</head>

<body>

    <script>
        document.write("Mula-mula nilai score...<br>");
        // pengisian nilai
        var score = 100;
        document.write("score = "+ score + "<br/>");

        // pengisian dan menjumlahan dengan 5
        score += 5;
        document.write("score = "+ score + "<br/>");

        // pengisian dan pengurangan dengan 2
        score -= 2;
        document.write("score = "+ score + "<br/>");

        // pengisian dan perkalian dengan 2
        score *= 2;
        document.write("score = "+ score + "<br/>");

        // pengisian dan pembagian dengan 4
        score /= 4;
        document.write("score = "+ score + "<br/>");

        // pengisian dan pemangkatan dengan 2
        score **= 2;
        document.write("score = "+ score + "<br/>");

        // pengisian dan modulo dengan 3;
        score %= 3;
        document.write("score = "+ score + "<br/>");
    </script>
</body>

</html>
```
#### Perbedaan operator penugasan dengan operator aritmatika
Operator aritmatika hanya melakukan operasi aritmatika saja, sedangkan operator penugasan… ia melakukan operasi aritmatika dan juga pengisian.

### 3. Operator Perbandingan pada Javascript
Operator relasi atau perbandingan adalah operator yang digunakan untuk membandingkan dua nilai.

Operator perbandingan akan menghasilkan sebuah nilai boolean true dan false.

Operator perbandingan terdiri dari:
| Nama Operator	| Simbol | 
|------------| ------------|
| Lebih Besar	| > | 
| Lebih Kecil	| < | 
| Sama Dengan	| == atau === | 
| Tidak Sama dengan	| != atau !== | 
| Lebih Besar Sama dengan	| >= | 
| Lebih Kecil Sama dengan	| <= | 

Contoh:
```
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Operator Perbandingan</title>
</head>

<body>

    <script>
        var aku = 20;
        var kamu = 19;

        // sama dengan
        var hasil = aku == kamu;
        document.write(`${aku} == ${kamu} = ${hasil}<br/>`);
        
        // lebih besar
        var hasil = aku > kamu;
        document.write(`${aku} > ${kamu} = ${hasil}<br/>`);
        
        // lebih besar sama dengan
        var hasil = aku >= kamu;
        document.write(`${aku} >= ${kamu} = ${hasil}<br/>`);
        
        // lebih kecil
        var hasil = aku < kamu;
        document.write(`${aku} < ${kamu} = ${hasil}<br/>`);
        
        // lebih kecil sama dengan
        var hasil = aku <= kamu;
        document.write(`${aku} <= ${kamu} = ${hasil}<br/>`);
        
        // tidak sama dengan
        var hasil = aku != kamu;
        document.write(`${aku} != ${kamu} = ${hasil}<br/>`);
    </script>
</body>

</html>
```
##### Perbedaan == (dua simbol sama dengan) dengan === (tiga simbol sama dengan)
Perbandingan dengan menggunakan simbol == hanya akan membandingkan nilai saja. Sedangkan yang menggunakan === akan membandingkan dengan tipe data juga.

Contoh:
```
// ini akan bernilai true
var a = "4" == 4; //-> true

// sedangkan ini akan bernilai false
var b = "4" === 4; //-> false
```
Mengapa nilai b bernilai false?
Karena "4" (string) dan 4 (integer). Tipe datanya berbeda.

### 4. Operator Logika pada Javascript
Operator logika digunakan untuk melakukan operasi terhadap dua nilai boolean.

Operator ini terdiri dari:
Operator ini terdiri dari:

| Nama Operator	| Simbol |
|---------|------------|
| Logika AND	| `&&` |
| Logika OR	| || |
| Negasi/kebalikan	| `!` |

note : yang OR ini simbolnya `||`

Contoh:
```
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Operator Logika</title>
</head>

<body>

    <script>
        var aku = 20;
        var kamu = 19;

        var benar = aku > kamu;
        var salah = aku < kamu;

        // operator && (and)
        var hasil = benar && salah;
        document.write(`${benar} && ${salah} = ${hasil}<br/>`);
        
        // operator || (or)
        var hasil = benar || salah;
        document.write(`${benar} || ${salah} = ${hasil}<br/>`);
        
        // operator ! (not)
        var hasil = !benar
        document.write(`!${benar} = ${hasil}<br/>`);

    </script>
</body>

</html>
```

### 5. Operator Bitwise pada Javascript
Operator bitwise merupakan operator yang digunakan untuk operasi berdasarkan bit (biner).

Operator ini terdiri dari:
| Nama	| Simbol di Java |
|---------|---------|
| AND	| & |
| OR	| | |
| XOR	| ^ |
| Negasi/kebalikan | ~ |
| Left Shift	| « |
| Right Shift	| » |
| Left Shift (unsigned)	| «< |
| Right Shift (unsigned)	| »> |

note : yang OR ini simbolnya `|`

Operator ini berlaku untuk tipe data int, long, short, char, dan byte.

Operator ini akan menghitung dari bit-ke-bit.

Misalnya, kita punya variabel a = 60 dan b = 13.

Bila dibuat dalam bentuk biner, akan menjadi seperti ini:
```
a = 00111100
b = 00001101
```
(perhatikan bilangan binernya, angka 0 dan 1)

Kemudian, dilakukan operasi bitwise

Operasi AND
```
a     = 00111100
b     = 00001101
a & b = 00001100
```
Operasi OR
```
a     = 00111100
b     = 00001101
a | b = 00111101
```
Operasi XOR
```
a     = 00111100
b     = 00001101
a ^ b = 00110001
```
Operasi NOT (Negasi/kebalikan)
```
a   = 00111100
~a  = 11000011
```
Konsepnya memang hampir sama dengan operator Logika. Bedanya, Bitwise digunakan untuk biner.

Untuk lebih jelasnya…

Mari kita coba lihat contohnya:
```
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Operator Bitwise</title>
</head>

<body>

    <script>
        var x = 4;
        var y = 3;

        // operator bitwise and
        var hasil = x & y;
        document.write(`${x} & ${y} = ${hasil}<br/>`);

        // operator bitwise or
        var hasil = x | y;
        document.write(`${x} | ${y} = ${hasil}<br/>`);

        // operator bitwise xor
        var hasil = x ^ y;
        document.write(`${x} ^ ${y} = ${hasil}<br/>`);

        // operator negasi
        var hasil = ~x;
        document.write(`~${x} = ${hasil}<br/>`);
        
        // operator bitwise right shift >>
        var hasil = x >> y;
        document.write(`${x} >> ${y} = ${hasil}<br/>`);

        // operator bitwise right shift <<
        var hasil = x << y;
        document.write(`${x} << ${y} = ${hasil}<br/>`);

        // operator bitwise right shift (unsigned) >>>
        var hasil = x >>> y;
        document.write(`${x} >>> ${y} = ${hasil}<br/>`);

    </script>
</body>

</html>
```

### 6. Operator Ternary pada Javascript
Operator ternary merupakan operator yang terdiri dari tiga bagian.

Operator-operator sebelumnya hanya dua bagian saja, yaitu: bagian kiri dan kanan. Ini disebut operator binary.

Sementara operator trinary ada bagian kiri, tengah, dan kanan.

`bagian kiri <operator> bagian tengah <operator> bagian kanan`

Operator ternary pada Javascript, biasanya digunakan untuk membuat sebuah percabangan if/else.

Simbol operator ternary terdiri dari tanda tanya dan titik dua `(?:)`.

Bentuknya seperti ini:
`<kondisi> ? "benar" : "salah"`
Perhatikan! <kondisi> dapat kita isi dengan ekspresi yang menghasilkan nilai true dan false.

Apabila kondisi bernilai true, maka "benar" yang akan dipilih dan sebaliknya—apabila false—maka "salah" yang akan dipilih.

contoh:
```
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Operator Ternary</title>
</head>

<body>

    <script>
        var pertanyaan = confirm("Apakah kamu berumur di atas 18 tahun?")

        var hasil = pertanyaan ? "Selamat datang" : "Kamu tidak boleh di sini";
        document.write(hasil);
    </script>
</body>

</html>
```

## Percabangan pada Javascript
Pada flow chart, logika “jika…maka” digambarkan dalam bentuk cabang.
![Gambar percabangan di JavaScript](https://www.petanikode.com/img/python/percabangan/jika-maka.png)
Karena itu, ini disebut percabangan.
Selain percabangan, struktur ini juga disebut: control flow, decision, struktur kondisi, Struktur if, dsb.

Percabangan akan mampu membuat program berpikir dan menentukan tindakan sesuai dengan logika/kondisi yang kita berikan.

### 1. Percabangan if
Percabangan if merupakan percabangan yang hanya memiliki satu blok pilihan saat kondisi bernilai benar.
Coba perhatikan flowchart berikut ini:
![Gambar percabangan if](https://www.petanikode.com/img/js/percabangan/flowchart-if.png)

Flowchart tersebut dapat kita baca seperti ini:

“Jika total belanja lebih besar dari Rp 100.000, Maka tampilkan pesan <b> Selamat, Anda dapat hadiah  </b>”

Kalau di bawah Rp 100.000 bagaimana?

Ya pesannya tidak ditampilkan.

Mari kita coba dalam program Javascript:
```
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Percabangan if</title>
</head>
<body>
    <script>
        var totalBelanja = prompt("Total belanja?", 0);

        if(totalBelanja > 100000){
            document.write("<h2>Selamat Anda dapat hadiah</h2>");
        }

        document.write("<p>Terima kasih sudah berbelanja di toko kami</p>");
    </script>
</body>
</html>
```

Perhatikan bagian ini:
```
if(totalBelanja > 100000){
    document.write("<h2>Selamat Anda dapat hadiah</h2>");
}
```
Ini yang disebut <b> blok </b>.

Blok program pada Javascript, diawali dengan tanda buka kurung kurawal { dan diakhiri dengan tutup kurung kurawal }.

Apabila di dalam blok hanya terdapat satu baris ekspresi atau statement, maka boleh tidak ditulis tanda kurungnya.

```
if(totalBelanja > 100000)
    document.write("<h2>Selamat Anda dapat hadiah</h2>");
```

### 2. Percabangan if/else
Percabangan if/else merupakan percabangan yang memiliki dua blok pilihan.

Pilihan pertama untuk kondisi benar, dan pilihan kedua untuk kondisi salah (else).

Coba perhatikan flowchart ini:
![Gambar percabangan di if/else](https://www.petanikode.com/img/js/percabangan/flowchart-if-else.png)

Pesan yang berada di blok abu-abu akan tetap ditampilkan, karena dia bukan bagian dari blok percabangan if/else.

Perhatikan arah panahnya, setiap blok if/else mengarah ke sana…
![Gambar percabangan di if/else](https://www.petanikode.com/img/js/percabangan/flowchart-if-else-arrow.png)

Coba dalam program:
```
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Percabangan if/else</title>
</head>
<body>
    <script>
        var password = prompt("Password:");

        if(password == "kopi"){
            document.write("<h2>Selamat datang bos!</h2>");
        } else {
            document.write("<p>Password salah, coba lagi!</p>");
        }

        document.write("<p>Terima kasih sudah menggunakan aplikasi ini!</p>");

    </script>
</body>
</html>
```

### 3. Percabangan if/else/if
Percabangan if/else/if merupakan percabangan yang memiliki lebih dari dua blok pilihan.

Coba perhatikan flowchart berikut:
![Gambar percabangan di if/else](https://www.petanikode.com/img/js/percabangan/if-else-if.png)
Contoh Program:
```
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Percabangan if/else/if</title>
</head>
<body>
    <script>
        var nilai = prompt("Inputkan nilai akhir:");
        var grade = "";

        if(nilai >= 90) grade = "A"
        else if(nilai >= 80) grade = "B+"
        else if(nilai >= 70) grade = "B"
        else if(nilai >= 60) grade = "C+"
        else if(nilai >= 50) grade = "C"
        else if(nilai >= 40) grade = "D"
        else if(nilai >= 30) grade = "E"
        else grade = "F";

        document.write(`<p>Grade anda: ${grade}</p>`);
    </script>
</body>
</html>
```
Pada program di atas, kita tidak menggunakan kurung kurawal untuk membuat blok kode untuk if/else/if.

karena hanya terdapat satu baris perintah saja. Yaitu: grade = ....
Bila kita menggunakan kurung kurawal, maka program di atas akan menjadi seperti ini:
```
<script>
    var nilai = prompt("Inputkan nilai akhir:");
    var grade = "";

    if (nilai >= 90){
        grade = "A"
    } else if(nilai >= 80) {
        grade = "B+"
    } else if(nilai >= 70) {
        grade = "B"
    } else if(nilai >= 60) {
        grade = "C+"
    } else if(nilai >= 50) {
        grade = "C"
    } else if(nilai >= 40) {
        grade = "D"
    } else if(nilai >= 30) {
         grade = "E"
    } else { 
        grade = "F";
    }
    document.write(`<p>Grade anda: ${grade}</p>`);
</script>
```

### 4. Percabangan switch/case
Percabangan switch/case adalah bentuk lain dari percabangan if/else/if.

Strukturnya seperti ini:
```
switch(variabel){
    case <value>:
        // blok kode
        break;
    case <value>:
        // blok kode
        break;
    default:
        // blok kode
}
```
note: 
- Pada <value>, kita bisa isi dengan nilai yang nanti akan dibandingkan dengan variabel.
- Setiap case harus diakhiri dengan break. Khusus untuk default, tidak perlu diakhiri dengan break karena dia terletak di bagian akhir.
- Pemberian break bertujuan agar program berhenti mengecek case berikutnya saat sebuah case terpenuhi.

Contoh:
```
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Percabangan switch/case</title>
</head>
<body>
    <script>

        var jawab = prompt("Kamu beruntung! Silakan pilih hadiahmu dengan memasukkan angka 1 sampai 5");
        var hadiah = "";
        
        switch(jawab){
            case "1":
                hadiah = "Tisu";
                break;
            case "2":
                hadiah = "1 Kotak Kopi";
                break;
            case "3":
                hadiah = "Sticker";
                break;
            case "4":
                hadiah = "Minyak Goreng";
                break;
            case "5":
                hadiah = "Uang Rp 50.000";
                break;
            default:
                document.write("<p>Opps! anda salah pilih</p>");
        }

        if(hadiah === ""){
            document.write("<p>Kamu gagal mendapat hadiah</p>");
        } else {
            document.write("<h2>Selamat kamu mendapatkan " + hadiah + "</h2>");
        }
    </script>
</body>
</html>
```

Percabangan switch/case juga dapat dibuat seperti ini:
```
var nilai = prompt("input nilai");
var grade = "";

switch(true){
    case nilai < 90:
        grade = "A";
        break;
    case nilai < 80:
        grade = "B+";
        break;
    case nilai < 70:
        grade = "B";
        break;
    case nilai < 60:
        grade = "C+";
        break;
    case nilai < 50:
        grade = "C";
        break;
    case nilai < 40:
        grade = "D";
        break;
    case nilai < 30:
        grade = "E";
        break;
    default:
        grade = "F";
}
```

### 5. Percabangan dengan Operator Ternary
Percabangan menggunakan operator ternary merupakan bentuk lain dari percabangan if/else.

Bisa dibilang:

Bentuk singkatnya dari if/else.

Contoh:
```
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Percabangan Ternary</title>
</head>
<body>
    <script>
        var jwb = prompt("Apakah Jakarta ibu kota indonesia?");

        var jawaban = (jwb.toUpperCase() == "IYA") ? "Benar": "Salah";

        document.write(`Jawaban anda: <b>${jawaban}</b>`);
    </script>
</body>
</html>
```
Fungsi dari method toUpperCase() untuk mengubah teks yang diinputkan menjadi huruf kapital semua.

### 6. Percabangan Bersarang (Nested)
Kita juga dapat membuat blok percabangan di dalam percabangan. Ini disebut percabangan bersarang atau nested if.

Contoh:
```
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Percabangan Ternary</title>
</head>
<body>
    <script>
        var username = prompt("Username:");
        var password = prompt("Password:");

        if(username == "petanikode"){
            if(password == "kopi"){
                document.write("<h2>Selamat datang pak bos!</h2>");
            } else {
                document.write("<p>Password salah, coba lagi!</p>");
            }
        } else {
            document.write("<p>Anda tidak terdaftar!</p>");
        }
    </script>
</body>
</html>
```
#### Menggunakan Operator Logika pada Percabangan
contoh:
```
var username = prompt("Username:");
var password = prompt("Password:");

if(username == "petanikode"){
    if(password == "kopi"){
        document.write("<h2>Selamat datang pak bos!</h2>");
    } else {
        document.write("<p>Password salah, coba lagi!</p>");
    }
} else {
    document.write("<p>Anda tidak terdaftar!</p>");
}
```

Ini dapat kita buat lebih sederhana lagi dengan operator logika AND (&&).
```
var username = prompt("Username:");
var password = prompt("Password:");

if(username == "petanikode" && password == "kopi"){
    document.write("<h2>Selamat datang pak bos!</h2>");
} else {
    document.write("<p>Password salah, coba lagi!</p>");
}
```
Namun, ini bukanlah solusi terbaik.

Karena kita tidak bisa mengecek, apakah user terdaftar atau tidak.
