<?php
    //Array//
    $buku = [
        [
            'judul' => 'Hatsune Miku',
            'penulis' => 'Kasane Teto',
            'Tahun' => 2009

        ],
        [
            'judul' => 'Kagamine Len',
            'penulis' => 'Kagamine Rin',
            'Tahun' => 2011
        ],
        [
            'judul' => 'Zundamon',
            'penulis' => 'Gumi',
            'Tahun' => 2012

        ]

        ]; 
    ?>
    <!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="style.css">
        <title>Diva</title>
    </head>
    <body>
        <h1>DIVA!</h1>
        <table>
            <thead>
                <tr>
                    <th>Miku</th>
                    <th>Small Miku</th>
                    <th>Year Miku</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($buku as $item): ?>
                    <tr>
                        <td><?php echo htmlspecialchars($item['judul']); ?></td>
                        <td><?php echo htmlspecialchars($item['penulis']); ?></td>
                        <td><?php echo htmlspecialchars($item['Tahun']); ?></td>
                    </tr>
                    <?php endforeach; ?>
            </tbody>
        </table>
    </body>
</html>