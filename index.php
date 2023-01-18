<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>

<body>
    <h1>Partie 1</h1>
    <div class="partie_une">
        <div>
            <h2>Question 1</h2>
            <?php
            for ($i = 1; $i <= 30; $i++) : ?>
                <ul>
                    <li><?= $i ?><sup>2</sup><?= " = " . $i * $i ?></li>
                </ul>
            <?php endfor; ?>
        </div>
        <div>
            <h2>Question 2</h2>
            <?php
            function n_au_carre(float $n)
            {
                return $n . "<sup>2</sup> = " . $n * $n;
            }
            for ($i = 1; $i <= 30; $i++) : ?>
                <ul>
                    <li><?= n_au_carre($i) ?></li>
                </ul>
            <?php endfor; ?>
        </div>
    </div>
    <h1>Partie 2</h1>
    <div class="partie_une">
        <table>
            <tbody>
                <?php for ($i = 1; $i < 11; $i++) : ?>
                    <tr>
                        <?php for ($j = 1; $j < 11; $j++) : ?>
                            <?php if ($i == 1 && $j == 1) : ?>
                                <td></td>
                            <?php elseif (($i == $j) || $i == 1 || $j == 1) : ?>
                                <td><b><?= $i * $j ?></b></td>
                            <?php else : ?>
                                <td><?= $i * $j ?></td>
                            <?php endif ?>
                        <?php endfor ?>
                    </tr>
                <?php endfor ?>
            </tbody>
        </table>
    </div>
</body>

</html>