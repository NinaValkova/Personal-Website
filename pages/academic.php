<?php
require_once("partials/head.php"); ?>

<body>

    <div id="wrap">


        <?php
        require_once("partials/header.php");
        require_once("partials/nav.php");
        ?>

        <div id="content">

            <section id="main">

                <h1 class="section-title">Академична информация</h1>

                <article class="course-card" id="education">

                    <h2>Образование</h2>

                    <p>
                        Бакалавърска степен по
                        <strong>Информационни технологии в индустрията</strong>.
                        Магистърска степен по
                        <strong>Информационни системи</strong>.
                    </p>

                </article>

                <article class="course-card" id="skills">

                    <h2>Технически умения</h2>

                    <p>
                        Разработване на уеб приложения,
                        бази данни и информационни системи.
                    </p>

                    <ul>
                        <li>HTML5 и CSS3</li>
                        <li>PostgreSQL и MySQL</li>
                        <li>TypeScript</li>
                        <li>Python</li>
                        <li>.NET</li>
                        <li>C++</li>
                    </ul>

                </article>

                <article class="course-card" id="experience">

                    <h2>Професионални интереси</h2>

                    <p>
                        Интересувам се от разработване на
                        информационни системи, машинно обучение,
                        анализ на данни, MLOps, Big Data и облачни технологии.
                    </p>

                </article>

                <article class="course-card" id="projects">

                    <h2>Проекти</h2>

                    <ul>
                        <li>Personal Website</li>
                        <li>Library Management System</li>
                        <li>Book Management System</li>
                    </ul>

                </article>

                <article class="course-card" id="documents">

                    <h2>Сертификати</h2>

                    <img src="assets/images/c_plus_plus.png" alt="C++ сертификат" class="custom-image">

                    <img src="assets/images/containers.png" alt="Containers сертификат" class="custom-image">

                    <img src="assets/images/mySQL.png" alt="MySQL сертификат" class="custom-image">

                    <img src="assets/images/postgreSQL.png" alt="PostgreSQL сертификат" class="custom-image">

                    <img src="assets/images/QAtesting.png" alt="QA testing сертификат" class="custom-image">

                    <img src="assets/images/certificateXML.png" alt="XML сертификат" class="custom-image">

                    <img src="assets/images/certificateDataManagment.png" alt="Data Management сертификат"
                        class="custom-image">

                    <p>
                        Реализация на проекти и допълнителна информация може да бъде
                        намерена в
                        <a href="https://github.com/NinaValkova" target="_blank">
                            GitHub
                        </a>
                        профила.
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
                        Страницата съдържа академична информация.
                    </p>
                </div>

            </section>

        </div>

        <?php require_once("partials/footer.php"); ?>
    </div>
    
        <script src="assets/javascript/menu.js"></script>

</body>

</html>