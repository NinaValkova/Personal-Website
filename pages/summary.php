<?php
require_once("partials/head.php");
?>

<body>

    <div id="wrap">


        <?php
        require_once("partials/header.php");
        require_once("partials/nav.php");
        ?>

        <div id="content">

            <section id="main">

                <h1 class="section-title"><?php echo htmlspecialchars($summary->getHeading()); ?></h1>

                <article class="course-card">
                    <h2>Лични данни</h2>

                    <img src="<?php echo htmlspecialchars($user->getImageUrl()); ?>" alt="Лична снимка"
                        class="custom-image">

                    <p>
                        Личната информация включва хобита, домашни любимци, любима храна,
                        градове.
                    </p>

                    <p>
                        <a href="index.php?page=personal" class="button-link">
                            Виж лична информация
                        </a>
                    </p>
                </article>

                <article class="course-card">
                    <h2>Академична информация</h2>

                    <img src="assets/images/university.jpg" alt="Университет" class="custom-image">

                    <p>
                        Академичната информация включва образование, технически умения,
                        проекти, професионални интереси, сертификати.
                    </p>

                    <p>
                        <a href="index.php?page=academic" class="button-link">
                            Виж академична информация
                        </a>
                    </p>

                    <p>
                        Кратко видео, представящо Софийския университет:
                    </p>

                    <video class="custom-video" controls>
                        <source src="assets/video/university.mp4" type="video/mp4">
                        Вашият браузър не поддържа видео.
                    </video>
                </article>

                <article class="course-card">
                    <h2>Видео представяне на градовете</h2>

                    <p>
                        Кратки видеа, представящи градовете Видин и София.
                    </p>

                    <h3>Видин</h3>

                    <video class="custom-video" controls>
                        <source src="assets/video/vidin.mp4" type="video/mp4">
                        Вашият браузър не поддържа видео.
                    </video>

                    <h3>София</h3>

                    <video class="custom-video" controls>
                        <source src="assets/video/sofia.mp4" type="video/mp4">
                        Вашият браузър не поддържа видео.
                    </video>
                </article>

            </section>

            <section id="sidebar">

                <h3>Бързи връзки</h3>

                <ul>
                    <li><a href="index.php?page=home">Начало</a></li>
                    <li><a href="index.php?page=contacts">Контакти</a></li>
                </ul>

                <div class="info-box">
                    <h3>Информация</h3>
                    <p>
                        Страницата съдържа обобщена информация за
                        <?php echo htmlspecialchars($user->getName()); ?>.
                    </p>
                </div>

            </section>

        </div>

        <?php require_once("partials/footer.php"); ?>

    </div>

    <script src="assets/javascript/menu.js"></script>

</body>

</html>