<<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Page 2</title>
</head>

<?php

require('connect.php');
if (isset( $_POST[ 'submit' ]))
{
    if ((!isset( $_POST[ 'Name' ])) && (!isset( $_POST[ 'Text' ])) && (!isset( $_POST[ 'gender' ])) &&
        (!isset( $_POST[ 'language1' ])) && (!isset( $_POST[ 'language2' ])) && (!isset( $_POST[ 'language3' ])) && (!isset( $_POST[ 'language4' ])) &&
        (!isset( $_POST[ 'list' ])))
    {
        echo "*" . "Пожалуйста заполните все поля";
    }
    else {
        $Name = $_POST['Name'];
        $Text = $_POST['Text'];
        $gender = $_POST['gender'];
        $language1 = $_POST['language1'];
        $language2 = $_POST['language2'];
        $language3 = $_POST['language3'];
        $language4 = $_POST['language4'];
        $list = $_POST['list'];

        $table = "SHOW TABLES LIKE 'data'";
        $check = mysqli_query($connection, $table);
        if ($check === false) {
            echo "Данной таблицы не существует";
        } else {

            $sql_query = "INSERT INTO `data`(`username`) SELECT DISTINCT `username` FROM `users`";
            $res = mysqli_query($connection, $sql_query) or die(mysqli_error($connection));

            if (isset($sql_query)) {
                $query = "INSERT INTO `data` (`Name`, `Text`, gender, `language1`, `language2`, `language3`, `language4`,  `list`) VALUES ('" . $Name . "','" . $Text . "','" . $gender . "','" . $language1 . "','" . $language2 . "','" . $language3 . "','" . $language4 . "','" . $list . "')";
                $result = mysqli_query($connection, $query) or die(mysqli_error($connection));
                if ($result) {
                    echo "Данные успешно добавлены!";
                } else {
                    echo "Ошибка!";
                }
            }

            mysqli_close($connection);
        }
    }
}

?>

<body class = "container-sm mt-5">
    <form action="form.php" method="POST">
        <h2>Форма обратной связи</h2><br>
        <div class="input-group input-group-sm mb-3" name="Name" id="Name">
            <span class="input-group-text" value="" id="inputGroup-sizing-sm">Ваше имя</span>
            <input type="text" class="form-control" name="Name">
        </div>

        <div class="input-group" name="Text" id="Text" ">
            <span class="input-group-text">Расскажите о себе</span>
            <textarea rows="5" class="form-control" name="Text" value=""></textarea>
        </div><br>

        <p>Укажите ваш пол:</p>
        <div class="form-group" name="gender">
            <input type="radio" name="gender" value="male" id="gender">
            <label for="gender">Мужской
            </label>
        </div>

        <div class="form-group" name="gender">
            <input type="radio" name="gender" value="female" id="gender">
            <label for="gender">Женский
            </label>
        </div><br>

        <p>Каким иностранным языком вы владеете:</p>
        <div class="form-check" name="language1" value="English">
            <input type="checkbox" name="language1" value="English">
            <label for="language">Английский
            </label>
        </div>
        <div class="form-check" name="language2" value="French">
            <input type="checkbox" name="language2" value="French">
            <label for="language">Французский
            </label>
        </div>
        <div class="form-check" name="language3" value="Deutsch">
            <input type="checkbox" name="language3" value="Deutsch">
            <label for="language">Немецкий
            </label>
        </div>
        <div class="form-check" name="language4" value="Spanish">
            <input type="checkbox" name="language4" value="Spanish">
            <label for="language">Испанский
            </label>
        </div><br>

        <label for="list">Какой язык программирования вы изучаете?:</label><br><br>
        <select id="list" name="list">
            <option>Выберите из списка</option>
            <option name="list" value="JavaScript">JavaScript</option>
            <option name="list" value="PHP">PHP</option>
            <option name="list" value="Python">Python</option>
            <option name="list" value="Java">Java</option>
        </select><br><br>

        <div class="col-sm-6 col-sm-offset-3">
        <input class="btn btn-primary btn-success" name="submit" type="submit" value="Отправить">
        <input class="btn btn-primary btn-danger" name="reset" type="reset" value="Очистить">
        </div>


    </form>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>

</body>
</html>