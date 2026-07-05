<!-- <div id="nav">

<ul id="MenuBar1" class="MenuBarHorizontal">

    <li><a href="index.php?page=home">Начало</a></li>

    <li>
        <a href="index.php?page=personal" class="MenuBarItemSubmenu">
            Лична информация
        </a>
        <ul>
            <li><a href="index.php?page=personal#personal-data">Информация</a></li>
            <li><a href="index.php?page=personal#food">Любима храна</a></li>
            <li><a href="index.php?page=personal#pets">Домашни любимци</a></li>
            <li><a href="index.php?page=personal#hobbies">Хобита</a></li>
            <li><a href="index.php?page=personal#cities">Градове</a></li>
        </ul>
    </li>

    <li>
        <a href="index.php?page=academic" class="MenuBarItemSubmenu">
            Академична информация
        </a>
        <ul>
            <li><a href="index.php?page=academic#education">Образование</a></li>
            <li><a href="index.php?page=academic#skills">Технически умения</a></li>
            <li><a href="index.php?page=academic#experience">Професионални интереси</a></li>
            <li><a href="index.php?page=academic#projects">Проекти</a></li>
            <li><a href="index.php?page=academic#documents">Сертификати</a></li>
        </ul>
    </li>

    <li>
        <a href="index.php?page=summary">Обобщение</a>
    </li>

    <li>
        <a href="index.php?page=contacts">
            Контакт
        </a>
    </li>

</ul>

</div> -->

<div id="nav">

    <ul id="MenuBar1" class="MenuBarHorizontal">

        <?php foreach ($menuItems as $menuItem) { ?>

            <li>
                <a href="<?php echo htmlspecialchars($menuItem->getUrl()); ?>" <?php if ($menuItem->hasSubmenu()) { ?>
                        class="MenuBarItemSubmenu" <?php } ?>>
                    <?php echo htmlspecialchars($menuItem->getTitle()); ?>
                </a>

                <!-- <?php if ($menuItem->getTitle() == "Лична информация") { ?>
            <ul>
                <li><a href="index.php?page=personal#personal-data">Информация</a></li>
                <li><a href="index.php?page=personal#food">Любима храна</a></li>
                <li><a href="index.php?page=personal#pets">Домашни любимци</a></li>
                <li><a href="index.php?page=personal#hobbies">Хобита</a></li>
                <li><a href="index.php?page=personal#cities">Градове</a></li>
            </ul>
        <?php } ?> -->


                <?php if ($menuItem->getTitle() == "Лична информация") { ?>
                    <ul>
                        <?php foreach ($personalSubmenuItems as $submenuItem) { ?>
                            <li>
                                <a href="index.php?page=personal#<?php echo htmlspecialchars($submenuItem->getAnchor()); ?>">
                                    <?php echo htmlspecialchars($submenuItem->getTitle()); ?>
                                </a>
                            </li>
                        <?php } ?>
                    </ul>
                <?php } ?>

                <?php if ($menuItem->getTitle() == "Академична информация") { ?>
                    <ul>
                        <?php foreach ($academicSubmenuItems as $submenuItem) { ?>
                            <li>
                                <a href="index.php?page=academic#<?php echo htmlspecialchars($submenuItem->getAnchor()); ?>">
                                    <?php echo htmlspecialchars($submenuItem->getTitle()); ?>
                                </a>
                            </li>
                        <?php } ?>
                    </ul>
                <?php } ?>

            </li>

        <?php } ?>

    </ul>

</div>