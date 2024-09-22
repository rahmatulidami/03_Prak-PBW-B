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



