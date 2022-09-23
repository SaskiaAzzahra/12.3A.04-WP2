<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="widt=device-width, initial-scale=1.0"
</head> 
<head>
    <title>Form Input Matakuliah</title>
</head>
<body>
    <center>
        <from action="<?= base_url('matakuliah/cetak'); ?>"
        methode="post"> 
        <table>
            <tr>
                <th colspan="3">
                Form Input Data Mata Kuliah
                </th>
            </tr>
            <tr>
                <td colspan="3">
                    <hr>
                </td>
            </tr>

            <tr>
                <th>Kode Mtk</th>
                <th>:</th>
                <td>
                    <input type="text" name="kode" id="kode">
                </td>
            </tr>

            <tr>
                <th>Nama MTK</th>
                <td>:</td>
                <td>
                    <input type="text" name="nama" id="nama">
                </td>
            </tr>

            <tr>
                <th>SKS</th>
                <td>:</td>
                <td>
                    <select name="sks" id="sks">
                        <option value="">Pilih SKS</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                    </select>
                </td>
            </tr>

            <tr>
                <td colspan="3" align="center">
                    <input type="submit" value="Submit">
                </td>
            </tr>
        </table>
        </from>
    </center>
</body>  
</html> 