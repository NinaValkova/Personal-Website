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

                <h1 class="section-title"><?php echo htmlspecialchars($contactMenu->getHeading()); ?></h1>

                <?php if (isset($_GET["success"])): ?>
                    <div class="success-message">
                        Съобщението беше изпратено успешно!
                    </div>
                <?php endif; ?>


                <article class="course-card" id="contact">

                    <form id="contactForm" method="post" action="index.php?page=contacts">

                        <p>
                            <label for="fullName">Име:</label><br>
                            <span id="spryName">
                                <input type="text" id="fullName" name="fullName">
                                <span class="textfieldRequiredMsg">Моля, въведете име.</span>
                            </span>
                        </p>

                        <p>
                            <label for="email">Email:</label><br>
                            <span id="spryEmail">
                                <input type="text" id="email" name="email">
                                <span class="textfieldRequiredMsg">Моля, въведете email.</span>
                                <span class="textfieldInvalidFormatMsg">Невалиден email адрес.</span>
                            </span>
                        </p>

                        <p>
                            <label for="meetingDate">Дата:</label><br>
                            <input type="text" id="meetingDate" name="meetingDate">
                        </p>

                        <p>
                            <label for="message">Съобщение:</label><br>
                            <textarea id="message" name="message" rows="5"></textarea>
                        </p>

                        <p>
                            <input type="submit" name="add_contact" value="Изпрати" class="button-link">
                        </p>

                    </form>

                </article>


                <article class="course-card" id="map">

                    <iframe id="googleMap"
                        src="https://www.google.com/maps?q=<?php echo urlencode($user->getUserHomeCity()); ?>&output=embed">
                    </iframe>

                </article>

            </section>

        </div>

        <?php require_once("partials/footer.php"); ?>
    </div>

        <script src="assets/javascript/menu.js"></script>
        <script src="assets/javascript/contact.js"></script>

</body>

</html>