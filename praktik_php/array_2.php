<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Style Table</title>
    <style>
        table {
            font-family: Arial, sans-serif;
            border-collapse: collapse;
            width: 50%;
            margin: 20px auto;
        }

        th, td {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        th {
            background-color: #f2f2f2;
        }
        h2 {
            text-align: center;
        }
    </style>
</head>
<body>
    <?php
        $Dosen=[
            'nama' => 'Elok Nur Hamdana',
            'domisili' => 'Malang',
            'jenis_kelamin' => 'Perempuan'
        ];
    ?>

    <h2>Biodata Dosen</h2>
    <table>
        <tr>
            <th>Informasi</th>
            <th>Detail</th>
        </tr>
        <?php
            foreach ($Dosen as $key => $value) {
                echo "<tr>";
                echo "<td>" . ucwords(str_replace('_', ' ', $key)) . "</td>";
                echo "<td>" . $value . "</td>";
                echo "</tr>";
            }
        ?>
    </table>
</body>
</html>
