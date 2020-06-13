<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Laporan Pengaduan</title>

    <style type="text/css">
        @page {
            margin: 15px;
        }
        body {
            margin: 15px;
        }
        * {
            font-family: Verdana, Arial, sans-serif;
        }
        a {
            color: #fff;
            text-decoration: none;
        }
        table {
            font-size: x-medium;
        }
        tfoot tr td {
            font-weight: bold;
            font-size: x-small;
        }
        .invoice table {
            margin: 10px;
        }
        .invoice h3 {
            margin-left: 15px;
        }
        .information {
            background-color: #FFFF;
            color: Black;
        }
        .information .logo {
            margin: 5px;
        }
        .information table {
            padding: 10px;
        }
    </style>

</head>
<body>

<div class="information">
    <table width="100%">
        <tr>
            <td align="left" style="width: 10%;">
                
                <img src="images/logo1.jpg" alt="Logo" width="90" class="logo" border-radius="50%"/>

            </td>
            <td align="center" style="width: 80%">
                <h1>PEMERINTAH DESA SITOLUAMA</h1>
                <h3>Jalan PI Del, Kec. Laguboti, Kode Pos: 22381</h3>
            </td>
            <td align="right" style="width: 10%">
               
            </td>
            
            
        </tr>

    </table>
</div>

<hr class="style-one">
<br/>

<div class="invoice">
        <p>Kepada Yth</p>
        <br>
        <p>Di-</p>
        <br>
        <p>Dengan hormat,</p>
        <p>Berdasarkan pengaduan yang dilaporkan masyarakat dengan keterangan sebagai berikut: </p>
        <table>
            <tr>
                <td>Nama Masyarakat</td>
                <td>: Angelina Jolie</td>
            </tr>
            <tr>
                <td>NIK</td>
                <td>: 12120000000000</td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td>: ddddd</td>
            </tr>
            <tr>
                <td>Desa</td>
                <td>: Sitoluama</td>
            </tr>
        </table>
        <p>mengajukan pengaduan mengenai:</p>
        <table>
            <tr>
                <td>Judul Pengaduan</td>
                <td>: Lampu Jalan tidak memadai</td>
            </tr>
            <tr>
                <td>Kategori</td>
                <td>: Infrastruktur</td>
            </tr>
            <tr>
                <td>Status Pengaduan</td>
                <td>: diterima</td>
            </tr>
        </table>
        <p>Dengan demikian Pemerintah Desa Sitoluama menyatakan bahwa pengaduan tersebut telah ditindaklanjuti dan telah diselesaikan.</p>
        <p>Demikian laporan ini diperbuat, untuk dapat dipergunakan sebagaimana mestinya. Atas perhatiannya, terima kasih.</p>

        <p align="right">Sitoluama,</p>
        <p align="right">Pemerintah Desa Sitoluama</p>
        <br>
        <br>
        <p align="right">Kepala Desa</p>
    <!--<h3>Invoice specification #123</h3>
    <table width="100%">
        <thead>
        <tr>
            <th>Description</th>
            <th>Quantity</th>
            <th>Total</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>Item 1</td>
            <td>1</td>
            <td align="left">€15,-</td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        </tbody>

        <tfoot>
        <tr>
            <td colspan="1"></td>
            <td align="left">Total</td>
            <td align="left" class="gray">€15,-</td>
        </tr>
        </tfoot>
    </table>-->
</div>

<div class="information" style="position: absolute; bottom: 0;">
    <table width="100%">
        <tr>
            <td align="left" style="width: 50%;">
                &copy; {{ date('Y') }} {{ config('app.url') }} - All rights reserved.
            </td>
            <td align="right" style="width: 50%;">
                
            </td>
        </tr>

    </table>
</div>
</body>
</html>