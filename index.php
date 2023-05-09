<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="index.css">
</head>
<body>
    <h3>Таблица истинности PHP</h3>
    <table>
        <thead>
            <tr>
                <th>A</th>
                <th>B</th>
                <th>!A</th>
                <th>A || B</th>
                <th>A && B</th>
                <th>A xor B</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><?php echo $A = 0; ?></td>
                <td><?php echo $B = 0; ?></td>
                <td><?php (var_export(!$A)) ?></td>
                <td><?php (var_export($A || $B)) ?></td>
                <td><?php (var_export($A && $B)) ?></td>
                <td><?php (var_export($A xor $B)) ?></td>
            </tr>
            <tr>
                <td><?php echo $A = 0; ?></td>
                <td><?php echo $B = 1; ?></td>
                <td><?php (var_export(!$A)) ?></td>
                <td><?php (var_export($A || $B)) ?></td>
                <td><?php (var_export($A && $B)) ?></td>
                <td><?php (var_export($A xor $B)) ?></td>
            </tr>
            <tr>
                <td><?php echo $A = 1; ?></td>
                <td><?php echo $B = 0; ?></td>
                <td><?php (var_export(!$A)) ?></td>
                <td><?php (var_export($A || $B)) ?></td>
                <td><?php (var_export($A && $B)) ?></td>
                <td><?php (var_export($A xor $B)) ?></td>
            </tr>
            <tr>
                <td><?php echo $A = 1; ?></td>
                <td><?php echo $B = 1; ?></td>
                <td><?php (var_export(!$A)) ?></td>
                <td><?php (var_export($A || $B)) ?></td>
                <td><?php (var_export($A && $B)) ?></td>
                <td><?php (var_export($A xor $B)) ?></td>
            </tr>
        </tbody>
    </table>
    <h3>Жесткое сравнение</h3>
    <table>
        <thead>
            <tr>
                <td>&nbsp;</td>
                <th>true</th>
                <th>false</th>
                <th>1</th>
                <th>0</th>
                <th>-1</th>
                <th>"1"</th>
                <th>null</th>
                <th>"php"</th>
            </tr>
            <tr>
                <th>true</th>
                <td><?php (var_export(true === true)) ?></td>
                <td><?php (var_export(true === false)) ?></td>
                <td><?php (var_export(true === 1)) ?></td>
                <td><?php (var_export(true === 0)) ?></td>
                <td><?php (var_export(true === -1)) ?></td>
                <td><?php (var_export(true === "1")) ?></td>
                <td><?php (var_export(true === null)) ?></td>
                <td><?php (var_export(true === "php")) ?></td>
            </tr>
            <tr>
                <th>false</th>
                <td><?php (var_export(false === true)) ?></td>
                <td><?php (var_export(false === false)) ?></td>
                <td><?php (var_export(false === 1)) ?></td>
                <td><?php (var_export(false === 0)) ?></td>
                <td><?php (var_export(false === -1)) ?></td>
                <td><?php (var_export(false === "1")) ?></td>
                <td><?php (var_export(false === null)) ?></td>
                <td><?php (var_export(false === "php")) ?></td>
            </tr>
            <tr>
                <th>1</th>
                <td><?php (var_export(1 === true)) ?></td>
                <td><?php (var_export(1 === false)) ?></td>
                <td><?php (var_export(1 === 1)) ?></td>
                <td><?php (var_export(1 === 0)) ?></td>
                <td><?php (var_export(1 === -1)) ?></td>
                <td><?php (var_export(1 === "1")) ?></td>
                <td><?php (var_export(1 === null)) ?></td>
                <td><?php (var_export(1 === "php")) ?></td>
            </tr>
            <tr>
                <th>0</th>
                <td><?php (var_export(0 === true)) ?></td>
                <td><?php (var_export(0 === false)) ?></td>
                <td><?php (var_export(0 === 1)) ?></td>
                <td><?php (var_export(0 === 0)) ?></td>
                <td><?php (var_export(0 === -1)) ?></td>
                <td><?php (var_export(0 === "1")) ?></td>
                <td><?php (var_export(0 === null)) ?></td>
                <td><?php (var_export(0 === "php")) ?></td>
            </tr>
            <tr>
                <th>-1</th>
                <td><?php (var_export(-1 === true)) ?></td>
                <td><?php (var_export(-1 === false)) ?></td>
                <td><?php (var_export(-1 === 1)) ?></td>
                <td><?php (var_export(-1 === 0)) ?></td>
                <td><?php (var_export(-1 === -1)) ?></td>
                <td><?php (var_export(-1 === "1")) ?></td>
                <td><?php (var_export(-1 === null)) ?></td>
                <td><?php (var_export(-1 === "php")) ?></td>
            </tr>
            <tr>
                <th>"1"</th>
                <td><?php (var_export("1" === true)) ?></td>
                <td><?php (var_export("1" === false)) ?></td>
                <td><?php (var_export("1" === 1)) ?></td>
                <td><?php (var_export("1" === 0)) ?></td>
                <td><?php (var_export("1" === -1)) ?></td>
                <td><?php (var_export("1" === "1")) ?></td>
                <td><?php (var_export("1" === null)) ?></td>
                <td><?php (var_export("1" === "php")) ?></td>
            </tr>
            <tr>
                <th>null</th>
                <td><?php (var_export(null === true)) ?></td>
                <td><?php (var_export(null === false)) ?></td>
                <td><?php (var_export(null === 1)) ?></td>
                <td><?php (var_export(null === 0)) ?></td>
                <td><?php (var_export(null === -1)) ?></td>
                <td><?php (var_export(null === "1")) ?></td>
                <td><?php (var_export(null === null)) ?></td>
                <td><?php (var_export(null === "php")) ?></td>
            </tr>
            <tr>
                <th>"php"</th>
                <td><?php (var_export("php" === true)) ?></td>
                <td><?php (var_export("php" === false)) ?></td>
                <td><?php (var_export("php" === 1)) ?></td>
                <td><?php (var_export("php" === 0)) ?></td>
                <td><?php (var_export("php" === -1)) ?></td>
                <td><?php (var_export("php" === "1")) ?></td>
                <td><?php (var_export("php" === null)) ?></td>
                <td><?php (var_export("php" === "php")) ?></td>
            </tr>
        </thead>
    </table>
    <h3>Гибкое сравнение</h3>
    <table>
        <thead>
            <tr>
                <td>&nbsp;</td>
                <th>true</th>
                <th>false</th>
                <th>1</th>
                <th>0</th>
                <th>-1</th>
                <th>"1"</th>
                <th>null</th>
                <th>"php"</th>
            </tr>
            <tr>
                <th>true</th>
                <td><?php (var_export(true == true)) ?></td>
                <td><?php (var_export(true == false)) ?></td>
                <td><?php (var_export(true == 1)) ?></td>
                <td><?php (var_export(true == 0)) ?></td>
                <td><?php (var_export(true == -1)) ?></td>
                <td><?php (var_export(true == "1")) ?></td>
                <td><?php (var_export(true == null)) ?></td>
                <td><?php (var_export(true == "php")) ?></td>
            </tr>
            <tr>
                <th>false</th>
                <td><?php (var_export(false == true)) ?></td>
                <td><?php (var_export(false == false)) ?></td>
                <td><?php (var_export(false == 1)) ?></td>
                <td><?php (var_export(false == 0)) ?></td>
                <td><?php (var_export(false == -1)) ?></td>
                <td><?php (var_export(false == "1")) ?></td>
                <td><?php (var_export(false == null)) ?></td>
                <td><?php (var_export(false == "php")) ?></td>
            </tr>
            <tr>
                <th>1</th>
                <td><?php (var_export(1 == true)) ?></td>
                <td><?php (var_export(1 == false)) ?></td>
                <td><?php (var_export(1 == 1)) ?></td>
                <td><?php (var_export(1 == 0)) ?></td>
                <td><?php (var_export(1 == -1)) ?></td>
                <td><?php (var_export(1 == "1")) ?></td>
                <td><?php (var_export(1 == null)) ?></td>
                <td><?php (var_export(1 == "php")) ?></td>
            </tr>
            <tr>
                <th>0</th>
                <td><?php (var_export(0 == true)) ?></td>
                <td><?php (var_export(0 == false)) ?></td>
                <td><?php (var_export(0 == 1)) ?></td>
                <td><?php (var_export(0 == 0)) ?></td>
                <td><?php (var_export(0 == -1)) ?></td>
                <td><?php (var_export(0 == "1")) ?></td>
                <td><?php (var_export(0 == null)) ?></td>
                <td><?php (var_export(0 == "php")) ?></td>
            </tr>
            <tr>
                <th>-1</th>
                <td><?php (var_export(-1 == true)) ?></td>
                <td><?php (var_export(-1 == false)) ?></td>
                <td><?php (var_export(-1 == 1)) ?></td>
                <td><?php (var_export(-1 == 0)) ?></td>
                <td><?php (var_export(-1 == -1)) ?></td>
                <td><?php (var_export(-1 == "1")) ?></td>
                <td><?php (var_export(-1 == null)) ?></td>
                <td><?php (var_export(-1 == "php")) ?></td>
            </tr>
            <tr>
                <th>"1"</th>
                <td><?php (var_export("1" == true)) ?></td>
                <td><?php (var_export("1" == false)) ?></td>
                <td><?php (var_export("1" == 1)) ?></td>
                <td><?php (var_export("1" == 0)) ?></td>
                <td><?php (var_export("1" == -1)) ?></td>
                <td><?php (var_export("1" == "1")) ?></td>
                <td><?php (var_export("1" == null)) ?></td>
                <td><?php (var_export("1" == "php")) ?></td>
            </tr>
            <tr>
                <th>null</th>
                <td><?php (var_export(null == true)) ?></td>
                <td><?php (var_export(null == false)) ?></td>
                <td><?php (var_export(null == 1)) ?></td>
                <td><?php (var_export(null == 0)) ?></td>
                <td><?php (var_export(null == -1)) ?></td>
                <td><?php (var_export(null == "1")) ?></td>
                <td><?php (var_export(null == null)) ?></td>
                <td><?php (var_export(null == "php")) ?></td>
            </tr>
            <tr>
                <th>"php"</th>
                <td><?php (var_export("php" == true)) ?></td>
                <td><?php (var_export("php" == false)) ?></td>
                <td><?php (var_export("php" == 1)) ?></td>
                <td><?php (var_export("php" == 0)) ?></td>
                <td><?php (var_export("php" == -1)) ?></td>
                <td><?php (var_export("php" == "1")) ?></td>
                <td><?php (var_export("php" == null)) ?></td>
                <td><?php (var_export("php" == "php")) ?></td>
            </tr>
        </thead>
    </table>
    <p>Выводы о сравнении в PHP <br><br>Строгое сравнение учитывает не только значение, но и тип данных. Если сравниваемые значения имеют разный тип, то результат будет false.<br> Нестрогое сравнение не учитывает тип данных и может привести к неожиданным результатам.<br> Поэтому чаще советуют использовать строгое сравнение, чтобы избежать ошибок и неожиданных результатов.</p>
</body>
</html>

