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
<body class = "container-sm mt-5">
    <form>
        <h2 align="center">Форма обратной связи</h2><br>
        <div class="input-group input-group-sm mb-3"">
            <span class="input-group-text" id="inputGroup-sizing-sm">Ваше имя</span>
            <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
        </div>

        <div class="input-group">
            <span class="input-group-text">Расскажите о себе</span>
            <textarea rows="5" class="form-control" aria-label="With textarea"></textarea>
        </div><br>

        <p>Укажите ваш пол:</p>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
            <label class="form-check-label" for="flexRadioDefault1">Мужской
            </label>
        </div>

        <div class="form-check">
            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
            <label class="form-check-label" for="flexRadioDefault2">Женский
            </label>
        </div><br>

        <p>Каким иностранным языком вы владеете:</p>
        <div class="form-check">
            <input class="form-check-input" name="lan1" type="checkbox" value="" id="flexCheckDefault">
            <label class="form-check-label" for="flexCheckDefault">Английский
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" name="lan2" type="checkbox" value="" id="flexCheckChecked">
            <label class="form-check-label" for="flexCheckChecked">Французский
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" name="lan3" type="checkbox" value="" id="flexCheckChecked">
            <label class="form-check-label" for="flexCheckChecked">Немецкий
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" name="lan4" type="checkbox" value="" id="flexCheckChecked">
            <label class="form-check-label" for="flexCheckChecked">Испанский
            </label>
        </div><br>

        <div class="dropdown">Какой язык программирования вы изучаете?<br><br>
            <button class="btn btn-secondary dropdown-toggle" type="button" data-toggle="dropdown">Язык программирования</button>
            <div class="dropdown-menu">
                <a class="dropdown-item" href="#">JavaScript</a>
                <a class="dropdown-item" href="#">Python</a>
                <a class="dropdown-item" href="#">PHP</a>
            </div>
        </div>

    </form>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>

</body>
</html>