<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        .add-form {
            width: 300px;
            margin: 20px auto;
            border: 1px solid #ccc;
            padding: 20px;
            border-radius 5px;
        }
        .add-form input[type="text"], .add-form input[type="number"] {
            width: calc(100% - 20px);
            margin-bottom: 10px;
            padding: 5px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }
        .add-form input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 3px;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <div class="add-form">
        <h2>Add Transport</h2>
        <form action="proses_add_mobil.php" method="post">
            <label for="nm_transport">Nama Transport:</label><br>
            <input type="text" id="nm_transport" name="nm_transport"><br>
            <label for="jenis">Jenis:</label><br>
            <input type="text" id="jenis" name="jenis"><br>
            <label for="jumlah_penumpang">Jumlah Penumpang:</label><br>
            <input type="number" id="jumlah_penumpang" name="jumlah_penumpang"><br>
            <label for="foto">Foto:</label><br>
            <input type="text" id="foto" name="foto"><br>
            <input type="submit" value="Submit">
        </form>
    </div>
</body>
</html>
