<?php
$elements = [
    ["H", 1, 1],
    ["He", 18, 1],
    ["Li", 1, 2], ["Be", 2, 2], ["B", 13, 2], ["C", 14, 2], ["N", 15, 2], ["O", 16, 2], ["F", 17, 2], ["Ne", 18, 2],
    ["Na", 1, 3], ["Mg", 2, 3], ["Al", 13, 3], ["Si", 14, 3], ["P", 15, 3], ["S", 16, 3], ["Cl", 17, 3], ["Ar", 18, 3],
    ["K", 1, 4], ["Ca", 2, 4], ["Sc", 3, 4], ["Ti", 4, 4], ["V", 5, 4], ["Cr", 6, 4], ["Mn", 7, 4], ["Fe", 8, 4],
    ["Co", 9, 4], ["Ni", 10, 4], ["Cu", 11, 4], ["Zn", 12, 4], ["Ga", 13, 4], ["Ge", 14, 4], ["As", 15, 4], ["Se", 16, 4],
    ["Br", 17, 4], ["Kr", 18, 4],["Xe", 18,5],["Po", 16,6],["Rn", 18,6],["Fr", 1,7],["Ra", 2,7],["Og",18,7],["89-103",3,7],["Bi",15,6],["Ac",4,10],["U",7,10],["Np",8,10],["Pu",9,10],
    ["Es",14,10],["Pb",14,6],["Hg",12,6],["Sn",14,5],["I",17,5],["57-71",3,6],["Ag",11,5],["Au",11,6],["Sb",15,5],["W",6,6],["No",17,10]
    // Tambahkan elemen lainnya jika diperlukan
];
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chemistry Table Simple</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
            text-align: center;
            background-color: black;
            color: aqua;
        }
        td {
            width: 50px;
            height: 50px;
            border: 1px solid aqua;
        }
    </style>
</head>
<body>
    <table>
        <?php for ($row = 1; $row <= 10; $row++): ?>
            <tr>
                <?php for ($col = 1; $col <= 18; $col++): ?>
                    <td>
                        <?php 
                        foreach ($elements as $element) {
                            if ($element[1] == $col && $element[2] == $row) {
                                echo $element[0];
                            }
                        }
                        ?>
                    </td>
                <?php endfor; ?>
            </tr>
        <?php endfor; ?>
    </table>
</body>
</html>
