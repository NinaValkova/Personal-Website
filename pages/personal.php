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

                <h1 class="section-title"><?php echo htmlspecialchars($personal->getHeading()); ?></h1>

                <article class="course-card" id="personal-data">
                    <h2>Информация</h2>

                    <img src="<?php echo htmlspecialchars($user->getImageUrl()); ?>" alt="Profile picture"
                        class="custom-image">

                    <p>
                        Казвам се <strong><?php echo htmlspecialchars($user->getName()); ?></strong>.
                        Интересувам се от разработване на софтуер, уеб технологии,
                        бази данни, информационни системи и машинно обучение.
                    </p>
                </article>

                <article class="course-card" id="hobbies">
                    <h2>Хобита</h2>

                    <ul>
                        <li>Разработване на уеб приложения</li>
                        <li>Машинно обучение</li>
                        <li>Технологии за големи данни</li>
                    </ul>
                </article>

                <article class="course-card" id="food">
                    <h2>Любима храна</h2>

                    <img src="assets/images/stuffed-grape-leaves.jpg" alt="храна" class="custom-image">

                    <p>
                        След разпадането на Османската империя популярността на лозовите сърми
                        се запазва в турската, персийската, гръцката, румънската, иракската,
                        левантинската, египетската, бившите югославски държави и арменската кухня.
                    </p>
                </article>

                <article class="course-card" id="pets">
                    <h2>Домашни любимци</h2>

                    <img src="assets/images/pet.jpg" alt="Домашен любимец" class="custom-image">

                    <p>
                        Котка е бозайник от семейство Коткови. В Древен Египет котките са били
                        използвани за пазачи на складираното зърно от мишки и други гризачи.
                    </p>
                </article>

                <article class="course-card" id="cities">
                    <h2>Градове</h2>

                    <img src="assets/images/vidin.jpg" alt="Видин" class="custom-image">

                    <p>
                        <strong>Роден град:</strong>
                        <?php echo htmlspecialchars($user->getUserHomeCity()); ?>
                    </p>

                    <img src="assets/images/sofia.jpg" alt="София" class="custom-image">

                    <p>
                        <strong>Град на обучение:</strong>
                        <?php echo htmlspecialchars($user->getUserStudyCity()); ?>
                    </p>

                    <p>
                        <strong>Настоящ град:</strong>
                        <?php echo htmlspecialchars($user->getUserCurrentCity()); ?>
                    </p>
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
                        Страницата съдържа лична информация.
                    </p>
                </div>

            </section>

        </div>

        <?php require_once("partials/footer.php"); ?>
    </div>

    <script src="assets/javascript/menu.js"></script>

</body>

</html>