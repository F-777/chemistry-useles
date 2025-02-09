<?php
$elements = [
    ["H", 1, 1],
    ["He", 18, 1],
    ["Li", 1, 2], 
    ["Be", 2, 2], 
    ["B", 13, 2], 
    ["C", 14, 2], 
    ["N", 15, 2], 
    ["O", 16, 2], 
    ["F", 17, 2], 
    ["Ne", 18, 2],
    ["Na", 1, 3], 
    ["Mg", 2, 3], 
    ["Al", 13, 3], 
    ["Si", 14, 3], 
    ["P", 15, 3], 
    ["S", 16, 3], 
    ["Cl", 17, 3], 
    ["Ar", 18, 3],
    ["K", 1, 4], 
    ["Ca", 2, 4], 
    ["Sc", 3, 4], 
    ["Ti", 4, 4], 
    ["V", 5, 4], 
    ["Cr", 6, 4], 
    ["Mn", 7, 4], 
    ["Fe", 8, 4],
    ["Co", 9, 4], 
    ["Ni", 10, 4], 
    ["Cu", 11, 4], 
    ["Zn", 12, 4], 
    ["Ga", 13, 4], 
    ["Ge", 14, 4], 
    ["As", 15, 4], 
    ["Se", 16, 4],
    ["Br", 17, 4], 
    ["Kr", 18, 4],
    ["Xe", 18,5],
    ["Po", 16,6],
    ["Rn", 18,6],
    ["Fr", 1,7],
    ["Ra", 2,7],
    ["Og",18,7],
    ["Bi",15,6],
    ["Ac",4,10],
    ["U",7,10],
    ["Np",8,10],
    ["Pu",9,10],
    ["Es",14,10],
    ["Pb",14,6],
    ["Hg",12,6],
    ["Sn",14,5],
    ["I",17,5],
    ["Ag",11,5],
    ["Au",11,6],
    ["Sb",15,5],
    ["W",6,6],
    ["No",17,10],
    ["Te",16,5],
    ["Rb",1,5],
    ["Ta",5,6],
    ["Cs",1,6],
    ["Cd",12,5],
    ["In",13,5],
    ["Am",10,10],
    ["Cm",11,10],
    ["Fm",15,10],
    ["Bk",12,10],
    ["Ba",2,6],
    ["At",17,6],
    ["Tl",13,6],
    ["Ts",17,7],
    ["Lv",16,7],
    ["Th",5,10],
    ["Pa",6,10],
    ["Lr",18,10],
    ["Md",16,10],
    ["Cf",13,10],
    ["Y",3,5],
    ["Os",8,6],
    ["Ir",9,6],
    ["Pt",10,6],
    ["Re",7,6],
    ["Hf",4,6],
    ["Mc",15,7],
    ["Fl",14,7,],
    ["Nh",13,7],
    ["Cn",12,7],
    ["Sr",2,5],
    ["Zr",4,5],
    ["Nb",5,5],
    ["Mo",6,5],
    ["Tc",7,5],
    ["Ru",8,5],
    ["Rh",9,5],
    ["Pd",10,5],
    ["Rf",4,7],
    ["Db",5,7],
    ["Sg",6,7],
    ["Bh",7,7],
    ["Hs",8,7],
    ["Mt",9,7],
    ["Ds",10,7],
    ["Rg",11,7],
    ["Yb",17,9],
    ["Lu",18,9],
    ["La",4,9],
    ["Ce",5,9],
    ["Pr",6,9],
    ["Nd",7,9],
    ["Pm",8,9],
    ["Sm",9,9],
    ["Eu",10,9],
    ["Gd",11,9],
    ["Tb",12,9],
    ["Dy",13,9],
    ["Ho",14,9],
    ["Er",15,9],
    ["Tm",16,9],
    // Add other element then 
];
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chemistry Table Simple</title>
    <link rel="icon" href="./Lemrusli-removebg-preview.png" type="image/x-icon">
    <style>
    table {
        border-collapse: collapse;
        width: 100%;
        text-align: center;
        background-color: black;
        color: aqua;
        font-family: "Source Code Pro", serif;
    }
    td {
        width: 50px;
        height: 50px;
        border: 2px solid; /* Bolding border */
    }

    /* Rainbow colors off rows */
    tr:nth-child(1) td { border-color: rgb(255, 0, 0); color:  rgb(255, 0, 0); } /* Red */
    tr:nth-child(2) td { border-color: rgb(255, 127, 0); color: rgb(255, 127, 0); } /* Orange */
    tr:nth-child(3) td { border-color: rgb(255, 255, 0); color: rgb(255, 255, 0); } /* Yellow */
    tr:nth-child(4) td { border-color: rgb(0, 255, 0); color: rgb(0, 255, 0);} /* Green */
    tr:nth-child(5) td { border-color: rgb(0, 0, 255); color: rgb(0, 0, 255);} /* Blue */
    tr:nth-child(6) td { border-color: rgb(75, 0, 130); color: rgb(75, 0, 130);} /* Indigo */
    tr:nth-child(7) td { border-color: rgb(143, 0, 255); color: rgb(143, 0, 255);} /* Ungu */
    tr:nth-child(8) td { border-color: rgb(255, 0, 127); color: rgb(255, 0, 127);} /* Pink */
    tr:nth-child(9) td { border-color: rgb(255, 69, 0); color: rgb(255, 69, 0);} /* Dark Orange */
    tr:nth-child(10) td { border-color: rgb(0, 255, 127); color: rgb(0, 255, 127);} /* Green Light */
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