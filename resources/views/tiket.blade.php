<!DOCTYPE html>
<html>

<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width">
<title>replit</title>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@500&family=Ubuntu:wght@400;500;700&display=swap"
    rel="stylesheet">
<style>body {
font-weight: bold;
font-family: 'Poppins', sans-serif;
overflow: hidden;
}

form {
font-family: Arial, sans-serif;
background-color: #ededed;
display: block;
background-size: 100vh;
padding: 20px;
}

table {
width: 100%;
border-collapse: collapse;
background: linear-gradient(135deg, #ff6b6b, #ffc154);


margin: 0 auto;
background-color: #fff;
border: thick double #111111;
}

th {
background-color: #333;
color: #fff;
padding: 10px;
text-align: center;
}

label {
display: block;
margin: 10px 0;
font-weight: bold;
}

input[type="text"],
select {
width: 200px;
/* You can adjust this width according to your preference */
padding: 10px;
margin: 5px 0;
border: 1px solid #ddd;
border-radius: 5px;
}

/* Style the "Hitung" and "Ulang" buttons */
input[type="button"] {
background-color: #47a0ff;
color: #fff;
padding: 10px 20px;
border: none;
border-radius: 5px;
cursor: pointer;
}

input[type="reset"] {
background-color: rgb(255, 26, 26);
color: #fff;
padding: 10px 20px;
border: none;
border-radius: 5px;
cursor: pointer;
}

/* Style the checkbox label */
label.checkbox-label {
display: flex;
align-items: center;
}

/* Center align the buttons */
center {
text-align: center;
}

.Hitung:hover {
background-color: rgb(115, 255, 0);
transition-duration: 0s;
}

.Ulang:hover {
background-color: #f18e04;
transition-duration: 0s;
}</style>
</head>

<body>
<FORM NAME="fform">
    <table border="1" align="center" width="70%">
    <tr>
        <td width="100%" colspan="2">
        <H2 ALIGN="center">Tiket Kapal Motor Air Pontianak</H2>
        </td>
    </tr>
    <tr>
        <td width="50%" class="border align-left">
        <PRE>
            Nama :
            <input type="text" size="20" name="inama">
            Tujuan :
            <select name="itujuan" size=1>
            <option value="Anjongan">Anjongan</option>
            <option value="Terentang">Terentang</option>
            <option value="Ambawang">Ambawang</option>
            <option value="Batu Ampar">Batu Ampar</option>
            </select>
            Kelas : 
            <select name="ikelas" size="1">
            <option value="Eksekutif">Eksekutif</option>
            <option value="Bisnis">Bisnis</option>
            <option value="Ekonomi">Ekonomi</option>
            </select>
            Jumlah Tiket :
            <input type="text" class="" size="20" name="ijumlah">
            Member :
            <input type="checkbox" name="imember">Ya</td></pre>
        <td width="50%" class="border align-right">
        <pre>
            Harga Tiket :
            <input type="text" size="10" name="otiket">
            Sub Total :
            <input type="text" size="10" name="osub">
            Diskon :
            <input type="text" size="10" name="odiskon">
            Total Bayar :
            <input type="text" size="10" name="ototal"></td><pre>
    </tr>
        <tr>
            <td width="100%" colspan="2">
            <center>
                <INPUT TYPE="button" class="Hitung" value="Hitung" onclick="hitungtotal()">
                <INPUT TYPE="reset" class="Ulang" value="Ulang">
            </center></td>
        </tr>
    </table>
</FORM>
<script>function hitungtotal() {
var nama = document.fform.inama.value;
var tujuan = document.fform.itujuan.value;
var kelas = document.fform.ikelas.value;
var jumlahtiket = parseFloat(document.fform.ijumlah.value);
var ht = 0.0;
var sub = 0.0;
var diskon = 0.0;
var total = 0.0;

if (!nama || !jumlahtiket) {
    // Menampilkan pesan alert jika nama atau jumlah tiket kosong
    alert("Silakan isi nama dan jumlah tiket terlebih dahulu");
    return; // Menghentikan eksekusi fungsi jika ada yang kosong
}

if (tujuan == "Anjongan") {
    if (kelas == "Eksekutif") {
    ht = 40000;
    } else if (kelas == "Bisnis") {
    ht = 20000;
    } else if (kelas == "Ekonomi") {
    ht = 10000;
    }
} else if (tujuan == "Terentang") {
    if (kelas == "Eksekutif") {
    ht = 80000;
    } else if (kelas == "Bisnis") {
    ht = 50000;
    } else if (kelas == "Ekonomi") {
    ht = 20000;
    }
} else if (tujuan == "Ambawang") {
    if (kelas == "Eksekutif") {
    ht = 90000;
    } else if (kelas == "Bisnis") {
    ht = 60000;
    } else if (kelas == "Ekonomi") {
    ht = 30000;
    }
}
else if (tujuan == "Batu Ampar") {
    if (kelas == "Eksekutif") {
    ht = 70000;
    } else if (kelas == "Bisnis") {
    ht = 40000;
    } else if (kelas == "Ekonomi") {
    ht = 10000;
    }
}

sub = jumlahtiket * ht;

if (document.fform.imember.checked == true) {
    diskon = 0.10 * sub;
} else {
    diskon = 0.0;
}

total = sub - diskon;
document.fform.otiket.value = ht;
document.fform.osub.value = sub;
document.fform.odiskon.value = diskon;
document.fform.ototal.value = total;
}
</script>
<script src="https://replit.com/public/js/replit-badge-v2.js" theme="dark"position="bottom-right"></script>
</body>

</html>