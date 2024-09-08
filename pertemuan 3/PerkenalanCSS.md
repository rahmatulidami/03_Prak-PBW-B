# Modul Pertemuan 3
## _Perkenalan Dasar CSS_

CSS (Cascade Style Sheet) adalah sebuah bahasa untuk mengatur tampilan web sehingga terlihat lebih menarik dan indah. Dengan CSS, kita dapat mengatur layout (tata letak), warna, font, garis, background, animasi, dan lain-lain.

Untuk membantu belajar CSS bisa lihat di [cheast sheet CSS](https://htmlcheatsheet.com/css/) atau yang lain.

### CARA MENULIS CSS DI HTML

Ada tiga cara menulis CSS di HTML:
- ##### Internal CSS 
    
    Internal CSS adalah kode CSS yang ditulis di dalam tag  `<style>`. Internal CSS juga dikenal dengan sebutan **Embedded CSS**.
    Tag style bisa ditulis di dalam tag  `<head>`, bisa juga ditulis di dalam tag  `<body>`. Namun kebanyakan orang menulisnya di dalam  `<head> `.
    contoh:

    ```sh 
    <!DOCTYPE html>
    <html>
        <head>
            <title>Contoh Internal CSS</title>
            <!-- penulisan internal css dalam tag head -->
            <style type="text/css">
                p{
                font-family: serif;
                line-height: 1.75em;
                font-size: 18px;
                }
                i { 
                font-family: sans;
                color: orange;
                }
            </style>
        </head>

        <body>
            <!-- penulisan internal css dalam tag body -->
            <style type="text/css">
                h2 { 
                font-family: sans;
                color: #333;
                }
            </style>
            <h2>Ini judul artikel</h2>
            <p>Ini adalah paragraf yang memuat isi artikel. Paragraf ini hanya untuk percobaan saja. Percobaan untuk mendemokan <i>internal css</i>. Seperti namanya, <i>inline CSS</i> adalah kode CSS yang ditulis langsung dalam file HTML.</p>
        </body>
    </html>
    ```
- ##### Inline CSS
    Inline CSS adalah kode CSS yang ditulis langsung pada atribut style di elemen HTML.
    contoh:
    ``` sh
    <h1 style="color: brown; text-align: center;"> Ini pake div</h1>
    ```

    Inline CSS biasanya digunakan untuk memberikan style pada satu elemen saja.


- ##### External

    Eksternal CSS adalah kode CSS yang ditulis terpisah dengan kode HTML. Eksternal CSS ditulis di dalam file khusus yang berekstensi ` .css `.

    ```
    📁 namafolder/
    │
    ├── 📄 index.html
    └── 📄 style.css
    ```

    Untuk menggunakan CSS ini, kita harus menghubungkannya dengan HTML.
    Ada dua cara yang bisa kita lakukan:

    - Menggunakan tag `<link>`
        ```sh
        <head>
            <title>Contoh Eksternal CSS</title>
            <link rel="stylesheet" type="text/css" href="style-ku.css">
        </head>
        ```
    - Menggunakan `@import`
         ```sh
        <style type="text/css">
        @import "style-ku.css";
        </style>
         ```
    
    Selain menggunakan eksternal CSS yang ada di satu folder dengan project, kita juga bisa gunakan CSS yang sudah ada di internet atau domain lain.

---

### Penulisan Komentar di CSS
Cara menulis komentar di CSS dilakukan dengan tanda `/*` dan diakhiri dengan `*/`.

    p {
        /* color: red; */
        font-family: "Times new roman";
    }

Properti color: red tidak akan dipakai, karena dia berada di dalam komentar.

---

### Struktur Dasar CSS

format penulisannya seperti ini

    Selektor {
        Propoerti : value ;
        Propoerti : value ;
    }

- Selektor

    Selektor adalah kata kunci untuk memilih elemen HTML yang akan kita beri style.

        h1 {
            color: red;
        }
    
    Artinya: Kita memilih semua elemen `<h1>`, lalu diberikan warna teks red (merah). *Selektor dapat berupa nama tag, class, id, dan atribut.*

- Blok Deklarasi 

    Blok deklarasi dimulai atau dibuka dengan tanda kurung `{` lalu ditutup dengan `}`. Satu blok deklarasi, bisa dipakai oleh lebih dari satu selektor dengan koma **( , )** sebagai pemisah.
    
        h1, h2, h3, h4, h5, h6 {
            color: teal;
        }

- Properti dan value

    Setiap properti harus diakhiri dengan titik koma (;)

        blockquote {
            background: pink;
        }


### Selektor di CSS


1. **Selektor Tag**

    memilih elemen berdasarkan nama tag.

        p {
            color: blue;
        }

    Artinya: Pilih semua elemen `<p>` lalu atur warna teksnya menjadi biru.

2. **Selektor Class**

    Selektor class adalah selektor yang memilih elemen berdasarkan nama class yang diberikan. Selektor class dibuat dengan tanda titik di depannya.

        .pink {
            color: white;
            background: pink;
            padding: 5px;
        }

    Kita memiliki selektor class bernama `.pink`. Cara menggunakannya sebagai berikut.

    ```sh
    <p>Saya sedang belajar <b class="pink">CSS</b> di petanikode.com.</p>
    ```

    Selektor class dapat kita gunakan pada elemen yang kita inginkan.

3. **Selektor ID**

    Selektor ID hampir sama dengan class. Bedanya, ID bersifat unik. Hanya boleh digunakan oleh satu elemen saja. Selektor ID ditandai dengan tanda pagar `(#)` di depannya.

    ```sh
    #header {
        background: teal;
        color: white;
        height: 100px;
        padding: 50px;
    }
    ```

    Cara menggunakannya seperti ini :

    ```sh
    <header id="header">
        <h1>Selamat Datang di Website Saya</h1>
    </header>
    ```

4. **Selektor Atribut**

    Selektor atribut adalah selektor yang memiliki elemen berdasarkan atribut. Selektor ini hampir sama seperti selektor Tag.

    ```sh
    input[type=text] {
        background: none;
        color: cyan;
        padding: 10px;
        border: 1px solid cyan;
    }
    ```

    Artinya kita akan memilih semua elemen `<input>` yang memiliki atribut `type='text'`.

5. **Selektor Universal**

    Selektor universal adalah selektor yang digunakan untuk menyeleksi semua elemen pada jangkauan (scope) tertentu.

    ```sh
    * {
        border: 1px solid grey;
    }
    ```


6. **Selektor Pseudo**

    - pseudo-class 

        pakai satu titik dua `(:)`

        ```sh
        a:hover {
            color: green;
        }
        ```

    - pseudo-element

        menggunakan tanda titik dua ganda `(::)`

        ```sh
        p::first-line {
            color: magenta;
        }
        ```
        > Berikut ini beberapa contoh selektor pseudo-element:
        > 
        > - **::before** untuk memilih elemen semu sebelum elemen
        > - **::after** untuk memilih elemen semu setelah elemen
        > - **::marker** untuk memilih marker pada list
        > - **::placeholder** untuk memilih teks placeholder pada elemen input teks

----

### Properti color

1. **Nama warna**
    ```sh
    h1 {
        color: orange;
    }
    ```

    Artinya : Berikan warna `orange` untuk teks pada elemen `<h1>`.

    Nama-nama warna ini sudah ada secara default, jadi kita tinggal pakai aja dengan menuliskan nama warnanya.. Atau bisa lihat nama warna-warna di CSS [ disini ](https://www.w3.org/wiki/CSS/Properties/color/keywords).

2. **Kode Heksadesimal**

    Kode heksadesimal diawali dengan tanda pagar `(#)`

        #0011ff (6 digit)
    
3. **Fungsi rgb dan rgba**

    Fungsi rgb() adalah fungsi yang menghasilkan warna berdasarkan konsep warna RGB pada komputer.
       
        h1 {
	        color: rgb(0, 0, 255);
        }

    Selain rgb ada juga rgba .Fungsi ini sama seperti fungsi RGB, tapi ada penambahan parameter alpha di belakangnya.

        p {
            color: rgba(40, 23, 11, 0.7);
        }

    Pada contoh di atas, nilai `alpha(tingkat transparannya)` yang diberikan adalah `0.7`, atau sama dengan `70%`.

4. **Fungsi hsl() dan hsla()**

    Fungsi `hsl()` merupakan fungsi yang menghasilkan warna berdasarkan konsep warna HSL. HSL merupakan singkatan dari Hue, Saturation, Lightness. Contoh :

        h1 {
            color: hsl(324, 70%, 40%);
        }

    Fungsi `hsl()` juga punya fungsi `hsla()` untuk memberikan nilai alpha atau transparan pada warna HSL.

        h1 {
            color: hsla(267, 80%, 45%, 0.6);
        }

5. **Warna Gradasi**

    Warna gradasi di CSS biasanya dibuat dengan fungsi:

    - linear-gradient() untuk gradasi linear;

            linear-gradient (arah, warna1, warna2, ...)


    - radial-gradient() untuk gradasi lingkaran

            radial-gradient([shape] [size] [at position], start-color, ..., end-color);

    - conic-gradient() untuk gradasi memutar;

            conic-gradient(from angle at position, color1, color2, ...);


    untuk membuat warna gradasi dengan mudah.. kita bisa memanfaatkan website [**ini**](https://cssgradient.io/).

---
### Menggunakan Background

Ada dua cara kita memberikan background di CSS, yakni dengan warna dan gambar.

1. **Background Warna**

    properti `background` fungsinya untuk memberikan background pada elemen tertentu. 

    ```sh
    header {
        background: rgb(34,193,195);
        background: linear-gradient(90deg, rgba(34,193,195,1) 0%, rgba(240,45,253,1) 100%);
    }
    ```

2. **Background Image**

    Jika ingin menggunakan warna latar gambar, maka kita bisa menggunakan properti background-image atau background saja.

    Format gambar yang didukung bisa: `jpg, png, gif, webp, avif, svg, dll.`

    ```sh
    body {
        background-image: url('background.jpg');
    }
    ```

    Kita bisa gunakan properti `background-repeat` agar gambar tidak berulang. Properti ini punya beberapa nilai:

    - repeat-x artinya mengulang background pada sumbu x aja;
    - repeat-y artinya mengulang background pada sumbu y aja;
    - no-repeat artinya tidak mengulang background.

    Kita bisa mengatur ukuran background dengan properti background-size, properti ini punya beberapa nilai yang valid:

    - px, pt, em, rem (fixed) ukuran dalam angka dan satuan, contoh 200px, 20em.
    - vw, vh (dynamic) mengikuti ukuran tinggi dan lebar layar (view port);
    - contain (dynamic) mengikuti ukuran lebar elemen;
    - cover (dynamic) mengikuti ukuran lebar dan tinggi elemen;

            background-size: cover;

2. **Background Blur di CS**
    
    Gunakan properti `backdrop-filter` untuk memberikan filter pada background. Jika ingin memberikan filter blur, maka kita harus memberikan nilai dengan fungsi `blur()`.

        article {
            background-color: rgba(255, 255, 255, 0.5);
            backdrop-filter: blur(10px);
            padding: 1rem;
        }

    Selain efek blur(), masih ada lagi efek lainnya seperti:

    - `brightness()` untuk efek kecerahan;
    - `contrast()` untuk efek kontras;
    - `drop-shadow()` untuk efek bayangan;
    - `grayscale()` untuk efek hitam putih;
    - `hue-rotate()` untuk efek warna hue;
    - `invert()` untuk efek warna negatif;
    - `opacity()` untuk efek transparan;
    - `saturate()` untuk efek saturasi warna;
    - `sepia()` untuk efek warna sepia.

----
### Text Formatting di CSS
1. **Text Align**

    Meratakan teks dengan properti CSS `text-align`. Contoh :

        p {
            text-align: justify; 
        }

2. **Text Direction**

    CSS punya properti   untuk menentukan arah baca teks. Misalnya dari kiri ke kanan `(ltr)` atau dari kanan ke kiri `(rtl)`.

        body {
            direction: rtl;
        }

3. **Text Direction** 

    Properti `text-decoration` adalah properti untuk memberikan dekorasi garis pada teks.

    Properti ini punya nilai beripa:

    - `none` artinya tidak menggunakan dekorasi apapun;
    - `underline` artinya kita akan memberikan dekorasi garis bawah;
    - `overline` dekorasi dengan garis di atas teks;
    - `line-through` dekorasi garis di tengah atau teks tercoret.

            .strike {
                text-decoration: line-through;
            }

            .underline {
                text-decoration: underline wavy green;
            }

3. **Text Transform** 

    Properti `text-transform` berfungsi untuk mengubah bentuk teks.

    Berikut ini nilai-nilai yang valid untuk `text-transform`.

    - `lowercase` untuk mengubah semua teks menjadi huruf kecil;

    - `uppercase` untuk mengubah semua teks menjadi huruf kapital (besar);

    - `capitaliz`e untuk mengubah teks pada huruf pertama kata menjadi kapital.

    - `none` untuk tidak melakukan transform.

    Contoh penggunaannya :

            h1 {
                text-transform: capitalize;
            }

3. **Text Spacing**

    Text Spacing adalah ruang kosong pada teks. CSS menyediakan beberapa properti untuk mengatur spacing pada teks.

    - `text-indent` untuk mengatur indentasi atau tab awal di baris pertama.
    - `letter-spacing` untuk mengatur jarak spasi antar huruf.
    - `line-height` untuk mengatur jarak antar baris.
    - `word-spacing` untuk mengatur jarak antar kata.
    - `white-space` untuk mengatur white space (tab ) pada teks.

            h1 {
                letter-spacing: -2px;
                word-spacing: 4px;
            }

            .small {
                font-size: 8px;
                letter-spacing: 2px;
                text-transform: uppercase;
            }

            .line-height {
                line-height: 1.6;
            }

            .indent {
                text-indent: 2em;
            }

            .nowrap {
                white-space: break-spaces;
            }

6. **Text Overflow**

    Properti `text-overflow` berfungsi untuk mengatur panjang teks yang melebihi ukuran dari elemen.

        p {
            width: 400px;
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
        }
    
6. **Text Text Shadow**

    Properti `text-shadow` merupakan properti untuk memberikan bayangan pada teks.

        text-shadow: x y blur warna;

    - x adalah jarak bayangan berdasarkan sumbu x (vertikal);
    - y adalah jarak bayangan berdasarkan sumbu y (horizontal);
    - blur adalah ukuran kepudaran dari bayangan;
    - warna adalah warna bayangan, bisa diberikan dalam nama warna, - fungsi rgb(), hsl(), dsb.

    Contoh :

            h1 {
                color: lime;
                text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.8);
            }

---

### Font di CSS

| Properti | Value |Fungsi |
| ------ |------ | ------ |
| font-size | normal, small, large, x-large, xx-large, x-smal, xx-small| untuk mengatur ukuran font |
| font-weight | lighter, normal, bold, bolder, 100-900| untuk mengatur ketebalan font |
| font-style | normal, italic, oblique | untuk mengatur gaya font |
| font-family | Sans Serif, Serif, Monospace, Cursive, Fantasy , gunakan web font| untuk mengatur jenis font |

Untuk value `font-family` juga bisa menggunakan [google Font](https://fonts.google.com/).

Berikut cara menggunakan web font dari google font :

- Cari font yang ingin digunakan
- klik `Get font`
- Kemudian klik `Get Embed Code` 
- Selanjutnya bisa pilih mau menggunakan `<link>` atau `@import`
- Untuk `<link>` salin code link untuk di format `file.html` pada tag `<head>` dan atau salin classes css nya yang di letakkan pada `file.css` atau menggunakan `<style>` pada `file.html`
- untuk `@import` juga sama, salin code dan letakkan pada `file.css`

<div>
    <br>
</div>

----


<footer style="text-align: center; margin-top: 20px;">
    <strong>Model Pemrograman Berbasis Web</strong><br>
    Made by: Fatiya Humaira Yunaz, Nitiya Rihadatul 'Aisy, Rahmatul Idam
</footer>

