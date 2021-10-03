<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="UTF-8">
        <title> Form Pendaftaran | Rian Andri Waskito </title>
        
    
    </head>
<body>
    <div class="tugas">
    <div class="judul">Hasil Pendaftaran</div>
    <table>
        <tr>
            <th>Nama Lengkap</th>
            <td><?php echo $_GET['Nama_Lengkap'];?></td>
        </tr>
        <tr>
            <th>Nama Pengguna</th>
            <td><?php echo $_GET['Nama_Pengguna'];?></td>
        </tr>
        <tr>
            <th>Email</th>
            <td><?php echo $_GET['Email'];?></td>
        </tr>
        <tr>
            <th>Nomor Telepon</th>
            <td><?php echo $_GET['Nomor_Telepon'];?></td>
        </tr>
        <tr>
            <th>Password</th>
            <td><?php echo $_GET['Password'];?></td>
        </tr>
        
        <tr>
            <th>jenis kelamin</th>
            <td><?php echo $_GET['gender'];?></td>
        </tr>
    
    </table>
    </div>

<style>
    * {
        margin: 10;
        padding: 10;
        box-sizing: border-box;
        color: black;
        font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
    }

    .tugas {
        max-width: 600px;
        width: 100%;
        background-color: #C9F71E;
        padding: 25px 30px;
        border-radius: 5px;
        box-shadow: 0 10px 20px rgba(209, 15, 15, 0.692);
    }

    .tugas .judul {
        font-size: 50px;
        font-weight: 500;
        position: relative;
    }

    body{

        height: 100vh;
        display: flex;
        justify-content: center;
        align-items: center;
        padding: 10px;
        background: linear-gradient(100deg, #33D2FF, #56FF33);
    }

    table {
        font-family: arial, sans-serif;
        border-collapse: collapse;
        width: 100%;
    }

    td,
    th {
        border: 2px solid blue;
        text-align: left;
        padding: 10px;
    }

    tr:hover{
        background-color: #63FE2C;
    }

    tr{
        background-color: #FFC330;
    }
</style>


</body>
</html>
