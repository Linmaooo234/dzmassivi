    <?php
    $massive1 = ['Идиятова', 'Найденова', 'Арсланова', 'Нурлыгаянова', 'Галимова', 'Закирова'];

    $massive2 = [
    "Спортивный" => "Сидоров",
    "Художественный" => "Емелина",
    "Музыкальный" => "Иванова",
    "Литературный" => "Петров",
    "Биологический" => "Антонова"
    ];

    uasort($massive2, function ($a, $b) {
    return strcasecmp($a, $b);
    });

    $student = [
    'name' => 'Камила',
    'surname' => 'Закирова',
    'group' => '427 веб',
    'hobby' => 'Рисование',
    'socialmedia' => [
        'TikTok' => 'Linmao',
        'Telegram' => 'Linmao',
        'YouTube' => 'CamilaZaki',
        'VK' => 'Камила Закирова'
    ]
    ];
    ?>

    <!DOCTYPE html>
    <html lang="ru">
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Массивы</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style/style.css">
    </head>

    <body>
    <div class="ucheniki">
        <h3 class="daa">Массивы практика</h3>
        <div class="Zadanieone">
            <h2>Задание 1</h2>
            <p class="da">Список студентов:</p>
            <?php
                foreach ($massive1 as $name) {
                echo $name . ' ';
            }
            ?>
            <p>Всего: <?= count($massive1) ?> учеников</p>
            <div class="sidorov">
                <?php
                if (in_array("Сидоров", $massive1)) {
                    echo "Фамилия Сидоров присуствует в списке";
                } else if (!in_array("Сидоров", $massive1)) {
                    echo "Фамилия Сидоров отсуствует в списке";
                }
                $expelled = array_pop($massive1);
                ?>
            </div>
                <p>Фамилия <?= $expelled ?> была удалена из списка потому что последняя</p>
        </div>

        <div class="Zadanietwo">
            <h2>Задание 2</h2>
            <?php
            foreach ($massive2 as $kruzhock => $surname) {
                echo "$kruzhock - $surname<br>";
            }
            ?>
        </div>

        <div class="Zadamiethree">
            <h2>Задание 3</h2>
            <p>Студент:<?= $student['name'] ?> <?= $student['surname'] ?></p>
            <p>Группа:<?= $student['group'] ?></p>
            <p>Хобби:<?= $student['hobby'] ?></p>
            <p>Соцсети:</p>
                <?php
                foreach ($student['socialmedia'] as $social => $nickname) {
                    echo "$social: $nickname<br>";
                }
                ?>
        </div>
    </div>
    </body>

    </html>