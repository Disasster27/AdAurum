<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles/reset.css">
    <link rel="stylesheet" href="./styles/main.css">
    <link rel="shortcut icon" href="./images/2443322.png" type="image/x-icon">
    <title>AdAurum</title>
</head>
<body>
    <header>
        <div class="container">
            <div class="header">
                <a href="#" class="header__logo"><div class="logo"></div>Text</a>    
                <div class="header__menu">
                    <ul class="header__list list">
                        <li><a href="#">Компании</a></li>
                        <li><a href="#">Users</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </header>
    <main>
        <div class="container">
            <div class="companies" >
                <!-- <a href="#" class="companies__item">
                    <div class=" company">
                        <div class="company__title">
                            <h3 class="title">Компания 1</h3>
                        </div>
                        <div class="company__address">
                            здесь будет адрес
                        </div>
                        <div class="company__tel">
                            +7(888)-233-22-11
                        </div>
                    </div>
                </a>
                <a href="#" class="company__link">
                    <div class="companies__item company">
                        <div class="company__title">
                            <h3 class="title">Компания 1</h3>
                        </div>
                        <div class="company__address">
                            здесь будет адрес
                        </div>
                        <div class="company__tel">
                            +7(888)-233-22-11
                        </div>
                    </div>
                </a>
                <a href="#" class="company__link">
                    <div class="companies__item company">
                        <div class="company__title">
                            <h3 class="title">Компания 1</h3>
                        </div>
                        <div class="company__address">
                            здесь будет адрес
                        </div>
                        <div class="company__tel">
                            +7(888)-233-22-11
                        </div>
                    </div>
                </a> -->

                <!-- <div class="gg-close-r"></div> -->
                <div class="companies__item add">
                    <div class="add__cross"></div>  
                    
                </div>
                <div class="fixed invisible">
                    <div class="modal">
                        <div class="modal__header">
                            <h3 class="title">Добавить компании</h3>
                        </div>
                        <form class="modal__form" action="">
                            <label class="modal__label" for="title">Название компании:</label>
                            <input id="title" type="text" placeholder="Название компании" class="modal__input">
                            <label class="modal__label" for="inn">ИНН:</label>
                            <input id="inn" type="text" placeholder="ИНН" class="modal__input">
                            <label class="modal__label" for="info">Общая информация:</label>
                            <textarea id="info"  name="" id="" cols="30" rows="10" class="modal__input" placeholder="Общая информация"></textarea>
                            <label class="modal__label" for="gd">Ген. директор:</label>
                            <input id="gd" type="text" placeholder="Ген. дир." class="modal__input">
                            <label class="modal__label" for="address">Адрес:</label>
                            <input id="address" type="text" placeholder="Адрес" class="modal__input">
                            <label class="modal__label" for="tel">Телефон:</label>
                            <input id="tel" type="text" placeholder="Телефон" class="modal__input">
                        </form>
                        <div class="modal__footer">
                            <button class="modal__button button">Добавить</button>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </main>
    <footer>

    </footer>
    <script src="script.js"></script>
</body>
</html>
