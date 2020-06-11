<?php
    // print_r ($_GET['id']);

    $link = mysqli_connect("localhost", "root", "", "adaurum") or die("Error:" . mysqli_connect_error());

    $sql = "SELECT * FROM `companies` WHERE id='$_GET[id]'";
    $result = mysqli_query($link, $sql) or die('Query failed: '.mysqli_error());
    $data = mysqli_fetch_object($result);

    $commSql = "SELECT * FROM `commentaries` 
                INNER JOIN users ON commentaries.id_user=users.id_user 
                WHERE id_comp=1";
    $commResult = mysqli_query($link, $commSql) or die('Query failed: '.mysqli_error());

    // $comm = mysqli_fetch_object($commResult);
    // var_dump ($comm);

    $comm = new stdClass();

    while ($data = mysqli_fetch_object($commResult)) {
        
        $key = $data->id_comm;
        $comm->$key = $data;
        // var_dump ($commResult);
    };
    
    var_dump ($comm);
?>

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
    <header class="header">
        <div class="container">
            <h1 class="main__title">Страница компании</h1>
        </div>
    </header>
    <div class="container">
        <div class="wrapper">
            <main>
                <div class="field">
                    <div class="field__body">
                        <div>
                            <h3 class="field__title">Название компании:</h3>
                            <input id="title" type="text" placeholder="Название компании" class="modal__input" value="<?php echo $data->title;?>" readonly>
                        </div>
                        <div>
                            <img class="edit field__icon"  src="https://img.icons8.com/windows/32/000000/edit-row.png"/>
                            <img class="com field__icon" src="https://img.icons8.com/windows/32/000000/comments.png"/>
                        </div>
                    </div>
                    <div class="field__comments comments">
                        <div class="comments__new">
                            <h3>Добавить Комментарий</h3>
                            <textarea class="modal__input" name="" id="" cols="30" rows="5"></textarea>
                            <button class="comments__button button">Добавить</button>
                        </div>
                        <div class="comments__area">
                            <h3>Комментарии</h3>
                            <div class="comments__item">
                                <div class="comments__info">
                                    <span class="comments__author">User 1</span>
                                    <span class="comments__date">01.03.2020 14:55</span>
                                </div>
                                <div class="comments__text">
                                    <p>Текст комментария</p>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
                <div class="field">
                    <div class="field__body">
                        <div>
                            <h3 class="field__title">ИНН:</h3>
                            <input id="inn" type="text" placeholder="ИНН" class="modal__input" value="<?php echo $data->inn;?>" readonly>
                        </div>
                        <div>
                            <img class="edit field__icon" src="https://img.icons8.com/windows/32/000000/edit-row.png"/>
                            <img class="com field__icon" src="https://img.icons8.com/windows/32/000000/comments.png"/>
                        </div>
                    </div>
                </div>
                <div class="field">
                    <div class="field__body">
                        <div>
                            <h3 class="field__title">Общая информация:</h3>
                            <textarea id="info"  name="" cols="30" rows="10" class="modal__input" placeholder="Общая информация"  readonly><?php echo $data->info;?></textarea>
                        </div>
                        <div>
                            <img class="edit field__icon" src="https://img.icons8.com/windows/32/000000/edit-row.png"/>
                            <img class="com field__icon" src="https://img.icons8.com/windows/32/000000/comments.png"/>
                        </div>
                        </div>
                </div>
                <div class="field">
                    <div class="field__body">
                        <div>
                            <h3 class="field__title">Ген. директор:</h3>
                            <input id="dir" type="text" placeholder="Ген. дир." class="modal__input" value="<?php echo $data->gd;?>" readonly>
                        </div>
                        <div>
                            <img class="edit field__icon" src="https://img.icons8.com/windows/32/000000/edit-row.png"/>
                            <img class="com field__icon" src="https://img.icons8.com/windows/32/000000/comments.png"/>
                        </div>
                        </div>
                </div>
                <div class="field">
                    <div class="field__body">
                        <div>
                            <h3 class="field__title">Адрес:</h3>
                            <input id="address" type="text" placeholder="Адрес" class="modal__input" value="<?php echo $data->address;?>" readonly>
                        </div>
                        <div>
                            <img class="edit field__icon" src="https://img.icons8.com/windows/32/000000/edit-row.png"/>
                            <img class="com field__icon" src="https://img.icons8.com/windows/32/000000/comments.png"/>
                        </div>
                    </div>
                </div>
                <div class="field">
                    <div class="field__body">
                        <div>
                            <h3 class="field__title">Телефон:</h3>
                            <input id="tel" type="text" placeholder="Телефон" class="modal__input" value="<?php echo $data->tel;?>" readonly>
                        </div>
                        <div>
                            <img class="edit field__icon" src="https://img.icons8.com/windows/32/000000/edit-row.png"/>
                            <img class="com field__icon" src="https://img.icons8.com/windows/32/000000/comments.png"/>
                        </div>
                    </div>
                </div>
            </main>
            <div class="chat field">
                <div class="comments">
                    <div class="comments__area">
                        <h3>Комментарии</h3>
                        <div class="comments__item">
                            <div class="comments__info">
                                <span class="comments__author">User 1</span>
                                <span class="comments__date">01.03.2020 14:55</span>
                            </div>
                            <div class="comments__text">
                                <p>Текст комментария</p>
                            </div>
                        </div>
                        <div class="comments__item">
                            <div class="comments__info">
                                <span class="comments__author">User 1</span>
                                <span class="comments__date">01.03.2020 14:55</span>
                            </div>
                            <div class="comments__text">
                                <p>Текст комментария</p>
                            </div>
                        </div>
                        <div class="comments__item">
                            <div class="comments__info">
                                <span class="comments__author">User 1</span>
                                <span class="comments__date">01.03.2020 14:55</span>
                            </div>
                            <div class="comments__text">
                                <p>Текст комментария</p>
                            </div>
                        </div>
                    </div>
                    <div class="comments__new">
                        <h3>Добавить Комментарий</h3>
                        <textarea class="modal__input" name="" id="" cols="30" rows="5"></textarea>
                        <button class="comments__button button">Добавить</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer>
        <a href="https://icons8.com/icon/14552/comments">Comments icon by Icons8</a>
    </footer>
    <script src="script.js"></script>
</body>
</html>


