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

                <h1 class="section-title">
                    <?php echo htmlspecialchars($home->getHeading()); ?>
                </h1>

                <div class="profile">

                    <section>

                        <h2>Лични данни</h2>

                        <table class="data-table">

                            <tr>
                                <th>Информация</th>
                                <th>Данни</th>
                            </tr>

                            <tr>
                                <td>Име</td>
                                <td><?php echo htmlspecialchars($user->getName()); ?></td>
                            </tr>

                            <tr>
                                <td>Възраст</td>
                                <td><?php echo htmlspecialchars($user->getAge()); ?></td>
                            </tr>

                        </table>

                    </section>

                    <section>

                        <h2 id="cities">Градове</h2>

                        <table class="data-table">

                            <tr>
                                <th>Вид</th>
                                <th>Име</th>
                            </tr>

                            <tr>
                                <td>Роден град</td>
                                <td><?php echo htmlspecialchars($user->getUserHomeCity()); ?></td>
                            </tr>

                            <tr>
                                <td>Град на обучение</td>
                                <td><?php echo htmlspecialchars($user->getUserStudyCity()); ?></td>
                            </tr>

                            <tr>
                                <td>Настоящ град</td>
                                <td><?php echo htmlspecialchars($user->getUserCurrentCity()); ?></td>
                            </tr>

                        </table>

                    </section>

                </div>

            </section>

            <section id="sidebar">

                <ul>
                    <li><a href="index.php?page=personal">Лична информация</a></li>
                    <li><a href="index.php?page=academic">Академична информация</a></li>
                </ul>

                <h3>Документи и медия</h3>

                <ul>
                    <li>
                        <a href="assets/images/avatar_nina.png" target="_blank">
                            Лична снимка
                        </a>
                    </li>

                    <li>
                        <a href="assets/images/vidin.jpg" target="_blank">
                            Роден град
                        </a>
                    </li>
                </ul>

                <div class="info-box">

                    <p>
                        Уеб сайтът представя лична информация,
                        образование и реализирани проекти.
                    </p>

                </div>

            </section>

        </div>

        <?php require_once("partials/footer.php"); ?>
    </div>

    <script src="assets/javascript/menu.js"></script>

</body>

</html>