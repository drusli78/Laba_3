<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Zen+Antique&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Zen+Antique&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <script type="text/javascript" src="js/JQuery3.3.1.js"></script>
    <title>STUD_FILES</title>
</head>
<body>
<div class="nav-container">
    <nav class="navbar">
        <h1 id="navbar-logo">SF_Hosting</h1>
        <div class="menu-toggle" id="mobile-menu">
            <span class="bar"></span>
            <span class="bar"></span>
            <span class="bar"></span>
        </div>
        <ul class="nav-menu">
            
            <li><a href="#" class="nav-links nav-links-btn" id="reg">Регистрация</a></li>
            <li><a href="#" class="nav-links nav-links-btn2">Вход</a></li>
        </ul>
    </nav>
</div>

<div class="main">
    <div class="main-container">
        <div class="main-content">
        
            <button class="main-btn">
                
            </button>
        </div>
        
    </div>
</div>


<!-- Modal1 -->
<div class="modal" id="email-modal">
    <div class="modal-content">
        <span  class="close-btn" style="position: absolute;top: 2%;right: 3%;font-size: 1.5rem;z-index: 1;">&times;</span>
        <div class="modal-content-left">
            <img id="modal-img" src="images/pic2.png" alt="">
        </div>
        <div class="modal-content-right">
            <form action="/" method="GET" class="modal-form" id="form">
                <h2>
                    Регистрация
                </h2>
                <div class="form-validation">
                    <input type="text" class="modal-input" id="name" name="name" placeholder="Имя" required pattern="[а-яА-Я]+"
                           title="Имя может содержать только русские буквы.">
                </div>
                <div class="form-validation">
                    <input type="email" class="modal-input" id="email" name="email" placeholder="Email">

                </div>
                <div class="form-validation">
                    <input type="tel" class="modal-input" id="tel" name="email" placeholder="Телефон" required minlength="11" maxlength="12">

                </div>
                <div class="form-validation">
                    <input type="password" class="modal-input" id="password" name="password" placeholder="Пароль" required minlength="6" maxlength="128">

                </div>
                <div class="form-validation">
                    <input type="password" class="modal-input" id="password-confirm" name="password" placeholder="Повторите пароль" required minlength="6" maxlength="128">
                    <div class="error" id="passwordConfirmError"></div>
                    <div class="box-field">
                        <input type="checkbox" onclick="checkCheckBoxRegistration()" class="checkbox" id="box1">
                        <span style="color: #686567;font-size: 14px;">Я согласен на обработку персональных данных</span>
                    </div>
                </div>
                <button type="submit" class="modal-input-btn" id="modal-input-submit">Регистрация</button>
                    <span class="modal-input-login">Уже есть аккаунт? <a href="#email-modal1">Войти</a></span>
            </form>
        </div>
    </div>
</div>

<!-- Modal2 -->
<div class="modal2" id="email-modal1">
    <div class="modal2-content">
        <span  class="close-btn1" style="position: absolute;top: 2%;right: 3%;font-size: 1.5rem;z-index: 1;">&times;</span>
        <div class="modal2-content-left">
            <img id="Modal-img" src="images/pic2.png" alt="">
        </div>
        <div class="modal2-content-right">
            <form action="/" method="GET" class="modal2-form" id="form">
                <h2>
                    Авторизация
                </h2>
                <div class="form-validation2">
                    <input type="tel" class="modal2-input" id="tel" name="tel" placeholder="Телефон" required minlength="11" maxlength="12">
                </div>
                <div class="form-validation2">
                    <input type="password" class="modal2-input" id="password" name="password" placeholder="Пароль" required minlength="6" maxlength="128">
                </div>
                <a href="index1.php" class="modal2-input-btn">Войти</a>
                
            </form>
        </div>
    </div>
</div>


<!-- add_post -->
<div class="modal3" id="email-modal3">
    <div class="modal3-content">
        <span  class="close-btn3" style="position: absolute;top: 2%;right: 3%;font-size: 1.5rem;z-index: 1;">&times;</span>
        <div class="modal3-content-left">
            <img id="Modal3-img" src="images/pic2.png" alt="">
        </div>
        <div class="modal3-content-right">
            <form action="/" method="GET" class="modal3-form" id="form">
                <h2>
                    Авторизация
                </h2>
                <div class="form-validation3">
                    <input type="tel" class="modal3-input" id="tel" name="tel" placeholder="Телефон" required minlength="11" maxlength="12">
                </div>
                <div class="form-validation2">
                    <input type="password" class="modal3-input" id="password" name="password" placeholder="Пароль" required minlength="8" maxlength="128">
                </div>
                <button type="submit" class="modal3-input-btn" id="submit">Войти</button>
            </form>
        </div>
    </div>
</div>


<!-- Cards -->
<div class="services" id="services">
    <h1>Тут есть много полезного</h1>
    <div class="services_wrapper">
        <div class="services_card">
            <h2>Заголовок</h2>
            <p>Дата загрузки</p>
            <div class="services_btn"><button><a href="index2.php">
                Открыть
            </a></button></div>
        </div>
        <div class="services_card">
            <h2>Заголовок</h2>
            <p>Дата загрузки</p>
            <div class="services_btn"><button><a href="index2.php">Открыть</a></button></div>
        </div>
        <div class="services_card">
            <h2>Заголовок</h2>
            <p>Дата загрузки</p>
            <div class="services_btn"><button><a href="index2.php">Открыть</a></button></div>
        </div>
        <div class="services_card">
            <h2>Заголовок</h2>
            <p>Дата загрузки</p>
            <div class="services_btn"><button><a href="index2.php">Открыть</a></button></div>
        </div>
        <div class="services_card">
            <h2>Заголовок</h2>
            <p>Дата загрузки</p>
            <div class="services_btn"><button><a href="index2.php">Открыть</a></button></div>
        </div>
        <div class="services_card">
            <h2>Заголовок</h2>
            <p>Дата загрузки</p>
            <div class="services_btn"><button><a href="index2.php">Открыть</a></button></div>
        </div>
        <div class="services_card">
            <h2>Заголовок</h2>
            <p>Дата загрузки</p>
            <div class="services_btn"><button><a href="index2.php">Открыть</a></button></div>
        </div>
        <div class="services_card">
            <h2>Заголовок</h2>
            <p>Дата загрузки</p>
            <div class="services_btn"><button><a href="index2.php">Открыть</a></button></div>
        </div>
    </div>
    <button class="btn-services"><a href="#">
        Далее
    </a></button>
</div>


<!-- Footer -->
<div class="footer_container">
    <section class="social_media">
        <div class="social_media-wrap">
            
            <p class="website_right"> SF_Hosting 2021. Все права защищены (но это не точно).</p>
            
        </div>
    </section>
</div>

<script type="text/javascript" src="js/app.js"></script>
<script type="text/javascript">
    
function checkCheckBoxRegistration(){
        if($('#box1').is(':checked') ) {
            document.getElementById("modal-input-submit").style.visibility = "visible";
        } else {
            document.getElementById("modal-input-submit").style.visibility = "hidden";
        }
    }
  
</script>
</body>
</html>
