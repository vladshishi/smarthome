<?php require "includes/includes.php"; ?>
<?php if (isset ($_SESSION ["logged_user"])) : ?>

<!DOCTYPE html>
<html>
<head>
  <?php require "includes/config.php"?>
</head>
<body>
	<nav class="navbar navbar-expand-md navbar-light bg-light sticky-top top">
	  <div class="container-fluid">
	    <a class="navbar-brand" href="index.php">
	      <img src="/images/smarthome.svg" alt="Smart Home" width="30" height="24" class="d-inline-block align-text-top wow swing">
	      Smart Home
	    </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target=".navbar-collapse" aria-controls="#navbarResponsive" aria-expanded="true">
        <span class="navbar-toggler-icon"></span>
      </button>
		  <div class="collapse navbar-collapse" id="navbarResponsive">
	      <ul class="navbar-nav ml-auto">
	        <li class="nav-item">
	          <a class="nav-link active" aria-current="page" href="index.php">Главная</a>
	        </li>
			<li class="nav-item">
	          <a class="nav-link active" aria-current="page" href="pages/admin.php">Личный кабинет</a>
	        </li>
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="pages/logout.php">Выйти</a>
            </li>
            <li class="nav-item">
	          <a class="nav-link active" aria-current="page" href="pages/helpus.php">Помогали</a>
	        </li>
	      </ul>
	    </div>
	  </div>
	</nav>

  <div class = "container-fluid">
      <div class = "row padding text-center">
          <div class = "container">
          <img src = "images/esp.jpg" vspace = "25" title = "https://amperka.ru/product/troyka-wi-fi"
              class = "wow fadeIn col-12 col-xs-6 col-sm-5 col-md-7 col-lg-7 col-xl-4 " />
          </div>
          <div class = "container">
          <button type = "button" class = "btn btn-warning btn-lg wow fadeIn">
              <a href = "/pages/admin.php">Посмотреть показания прибора</a>
          </button>
          </div>
      </div>
  </div>

  <hr class = "hr-circle" />

  <div class = "container wow fadeIn">
    <center>
      <img src = "images/useful.svg" width = 180 height = 190 />
    </center>
    <p class = "text-center text">Удобно</p>
  </div>

  <br />
  <hr />
  <br />

  <div class = "container wow fadeIn">
    <center>
      <img src = "images/protect.svg" width = 180 height = 190 />
    </center>
    <p class = "text-center text">Безопасное хранение данных</p>
  </div>

  <br />
  <hr />
  <br />

  <div class = "container wow fadeIn">
    <center>
      <img src = "images/home.svg" width = 180 height = 190 />
    </center>
    <p class = "text-center text">Охраняет ваш дом, когда вы далеко</p>
  </div>

  <br />
  <hr />
  <br />

  <div class = "container wow fadeIn">
    <center>
      <img src = "images/robot.svg" width = 180 height = 190 />
    </center>
    <p class = "text-center text">Не переживайте, робот обо всем позаботится ;)</p>
  </div>

  <br id = "avocados" />
  <hr />
  <br />

  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
    <symbol id="telegram" viewbox="0 0 16 16">
        <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.287 5.906c-.778.324-2.334.994-4.666 2.01-.378.15-.577.298-.595.442-.03.243.275.339.69.47l.175.055c.408.133.958.288 1.243.294.26.006.549-.1.868-.32 2.179-1.471 3.304-2.214 3.374-2.23.05-.012.12-.026.166.016.047.041.042.12.037.141-.03.129-1.227 1.241-1.846 1.817-.193.18-.33.307-.358.336a8.154 8.154 0 0 1-.188.186c-.38.366-.664.64.015 1.088.327.216.589.393.85.571.284.194.568.387.936.629.093.06.183.125.27.187.331.236.63.448.997.414.214-.02.435-.22.547-.82.265-1.417.786-4.486.906-5.751a1.426 1.426 0 0 0-.013-.315.337.337 0 0 0-.114-.217.526.526 0 0 0-.31-.093c-.3.005-.763.166-2.984 1.09z"/>
    </symbol>
    <symbol id="mailbox" viewbox="0 0 16 16">
        <path d="M9 8.5h2.793l.853.854A.5.5 0 0 0 13 9.5h1a.5.5 0 0 0 .5-.5V8a.5.5 0 0 0-.5-.5H9v1z"/>
        <path d="M12 3H4a4 4 0 0 0-4 4v6a1 1 0 0 0 1 1h14a1 1 0 0 0 1-1V7a4 4 0 0 0-4-4zM8 7a3.99 3.99 0 0 0-1.354-3H12a3 3 0 0 1 3 3v6H8V7zm-3.415.157C4.42 7.087 4.218 7 4 7c-.218 0-.42.086-.585.157C3.164 7.264 3 7.334 3 7a1 1 0 0 1 2 0c0 .334-.164.264-.415.157z"/>
    </symbol>
    <symbol id="mail" viewbox="0 0 16 16">
        <path d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555zM0 4.697v7.104l5.803-3.558L0 4.697zM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757zm3.436-.586L16 11.801V4.697l-5.803 3.546z"/>
    </symbol>
  </svg>

  <center>
    <button type = "button" class = "btn btn-outline-success btn-lg" data-bs-toggle = "modal" data-bs-target = "#exampleModal">Задать вопрос</button>
  </center>
  <div class = "modal fade" id = "exampleModal" tabindex = "-1" aria-labelledby = "exampleModalLabel" aria-hidden = "true">
    <div class = "modal-dialog">
      <div class = "modal-content">
        <div class = "modal-header">
          <h5 class = "modal-title" id = "exampleModalLabel">Обращение</h5>
          <button type = "button" class = "btn-close" data-bs-dismiss = "modal" aria-label = "Close"></button>
        </div>
        <form action = "/pages/feedback.php" method = "POST">
            <div class = "modal-body">
                <div class = "mb-3">
                    <label for="name" class="col-form-label">Укажите ваше имя:</label>
                    <input type = "text" name = "name" class="form-control" maxlength = "15" id = "name" required>
                </div>
                <div class = "mb-3">
                    <label for="email" class="col-form-label">Укажите ваш e-mail:</label>
                    <input type = "email" name = "email" class="form-control" required>
                </div>
                <div class = "mb-3">
                    <label for="text" class="col-form-label">Напишите ваше сообщение</label>
                    <input type = "text" name = "text" class="form-control" required>
                </div>
                <center>
                    <div class = "mb-3">
                          <span class="icons">Или:</span>
                          <a class="text-muted icons" href="https://t.me/greenavoc" target = "_blank" title="Telegram"><svg class="bi" width="40" height="40"><use xlink:href="#telegram"/></svg></a>
                          <a class="text-muted icons" href="mailto:gohomecomp@gmail.com" target = "_blank" title="Gmail"><svg class="bi" width="40" height="40"><use xlink:href="#mailbox"/></svg></a>
                          <a class="text-muted" href="mailto:vip.redsmile@mail.ru" target = "_blank" title="Mail.ru"><svg class="bi" width="40" height="40"><use xlink:href="#mail"/></svg></a>
                    </div>
                </center>
            </div>
            <div class = "modal-footer">
                <input type = "submit" value = "Отправить" class = "btn btn-success">
                <button type = "button" class = "btn btn-secondary" data-bs-dismiss = "modal"> Закрыть </button>
            </div>
      </form>
     </div>
    </div>
  </div>

  <br /><br /><br />

</body>
</html>

<?php else : ?>
<!DOCTYPE html>
<html>
<head>
  <?php require "includes/config.php"?>
</head>
<body>
	<nav class="navbar navbar-expand-md navbar-light bg-light sticky-top top">
	  <div class="container-fluid">
	    <a class="navbar-brand" href="index.php">
	      <img src="/images/smarthome.svg" alt="Smart Home" width="30" height="24" class="d-inline-block align-text-top wow swing">
	      Smart Home
	    </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target=".navbar-collapse" aria-controls="#navbarResponsive" aria-expanded="true">
        <span class="navbar-toggler-icon"></span>
      </button>
		  <div class="collapse navbar-collapse" id="navbarResponsive">
	      <ul class="navbar-nav ml-auto">
	        <li class="nav-item">
	          <a class="nav-link active" aria-current="page" href="index.php">Главная</a>
	        </li>
			<li class="nav-item">
	          <a class="nav-link active" aria-current="page" href="pages/signin.php">Войти</a>
	        </li>
			    <li class="nav-item">
	          <a class="nav-link active" aria-current="page" href="pages/signup.php">Регистрация</a>
	        </li>
          <li class="nav-item">
	          <a class="nav-link active" aria-current="page" href="pages/helpus.php">Помогали</a>
	        </li>
	      </ul>
	    </div>
	  </div>
	</nav>

    <div class = "container-fluid">
        <div class = "row padding text-center">
            <div class = "container">
            <img src = "images/esp.jpg" vspace = "25" title = "https://amperka.ru/product/troyka-wi-fi"
                class = "wow fadeIn col-12 col-xs-6 col-sm-5 col-md-7 col-lg-7 col-xl-4 " />
            </div>
            <div class = "container">
            <button type = "button" class = "btn btn-warning btn-lg wow fadeIn" style = "margin-right: 5%; margin-bottom: 3%">
                <a href = "/pages/signin.php">Войти</a>
            </button>
            <button type = "button" class = "btn btn-danger btn-lg wow fadeIn" style = "margin-bottom: 3%">
                <a href = "/pages/signup.php">Зарегистрироваться</a>
            </button>
            </div>
        </div>
    </div>
    <hr class = "hr-circle" />

    <div class = "container wow fadeIn">
      <center>
        <img src = "images/useful.svg" width = 180 height = 190 />
      </center>
      <p class = "text-center text">Удобно</p>
    </div>

    <br />
    <hr />
    <br />

    <div class = "container wow fadeIn">
      <center>
        <img src = "images/protect.svg" width = 180 height = 190 />
      </center>
      <p class = "text-center text">Безопасное хранение данных</p>
    </div>

    <br />
    <hr />
    <br />

    <div class = "container wow fadeIn">
      <center>
        <img src = "images/home.svg" width = 180 height = 190 />
      </center>
      <p class = "text-center text">Охраняет ваш дом, когда вы далеко</p>
    </div>

    <br />
    <hr />
    <br />

    <div class = "container wow fadeIn">
      <center>
        <img src = "images/robot.svg" width = 180 height = 190 />
      </center>
      <p class = "text-center text">Не переживайте, робот обо всем позаботится ;)</p>
    </div>

    <br id = "avocados" />
    <hr />
    <br />

    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
      <symbol id="telegram" viewbox="0 0 16 16">
          <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.287 5.906c-.778.324-2.334.994-4.666 2.01-.378.15-.577.298-.595.442-.03.243.275.339.69.47l.175.055c.408.133.958.288 1.243.294.26.006.549-.1.868-.32 2.179-1.471 3.304-2.214 3.374-2.23.05-.012.12-.026.166.016.047.041.042.12.037.141-.03.129-1.227 1.241-1.846 1.817-.193.18-.33.307-.358.336a8.154 8.154 0 0 1-.188.186c-.38.366-.664.64.015 1.088.327.216.589.393.85.571.284.194.568.387.936.629.093.06.183.125.27.187.331.236.63.448.997.414.214-.02.435-.22.547-.82.265-1.417.786-4.486.906-5.751a1.426 1.426 0 0 0-.013-.315.337.337 0 0 0-.114-.217.526.526 0 0 0-.31-.093c-.3.005-.763.166-2.984 1.09z"/>
      </symbol>
      <symbol id="mailbox" viewbox="0 0 16 16">
          <path d="M9 8.5h2.793l.853.854A.5.5 0 0 0 13 9.5h1a.5.5 0 0 0 .5-.5V8a.5.5 0 0 0-.5-.5H9v1z"/>
          <path d="M12 3H4a4 4 0 0 0-4 4v6a1 1 0 0 0 1 1h14a1 1 0 0 0 1-1V7a4 4 0 0 0-4-4zM8 7a3.99 3.99 0 0 0-1.354-3H12a3 3 0 0 1 3 3v6H8V7zm-3.415.157C4.42 7.087 4.218 7 4 7c-.218 0-.42.086-.585.157C3.164 7.264 3 7.334 3 7a1 1 0 0 1 2 0c0 .334-.164.264-.415.157z"/>
      </symbol>
      <symbol id="mail" viewbox="0 0 16 16">
          <path d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555zM0 4.697v7.104l5.803-3.558L0 4.697zM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757zm3.436-.586L16 11.801V4.697l-5.803 3.546z"/>
      </symbol>
    </svg>

    <center>
      <button type = "button" class = "btn btn-outline-success btn-lg" data-bs-toggle = "modal" data-bs-target = "#exampleModal">Задать вопрос</button>
    </center>
    <div class = "modal fade" id = "exampleModal" tabindex = "-1" aria-labelledby = "exampleModalLabel" aria-hidden = "true">
      <div class = "modal-dialog">
        <div class = "modal-content">
          <div class = "modal-header">
            <h5 class = "modal-title" id = "exampleModalLabel">Обращение</h5>
            <button type = "button" class = "btn-close" data-bs-dismiss = "modal" aria-label = "Close"></button>
          </div>
          <form action = "/pages/feedback.php" method = "POST">
              <div class = "modal-body">
                  <div class = "mb-3">
                      <label for="name" class="col-form-label">Укажите ваше имя:</label>
                      <input type = "text" name = "name" class="form-control" maxlength = "15" id = "name" required>
                  </div>
                  <div class = "mb-3">
                      <label for="email" class="col-form-label">Укажите ваш e-mail:</label>
                      <input type = "email" name = "email" class="form-control" required>
                  </div>
                  <div class = "mb-3">
                      <label for="text" class="col-form-label">Напишите ваше сообщение:</label>
                      <input type = "text" name = "text" class="form-control" required>
                  </div>
                  <center>
                      <div class = "mb-3">
                            <span class="icons">Или:</span>
                            <a class="text-muted icons" href="https://t.me/greenavoc" target = "_blank" title="Telegram"><svg class="bi" width="40" height="40"><use xlink:href="#telegram"/></svg></a>
                            <a class="text-muted icons" href="mailto:vladshishi@yandex.ru" target = "_blank" title="Yandex"><svg class="bi" width="40" height="40"><use xlink:href="#mailbox"/></svg></a>
                            <a class="text-muted" href="mailto:vip.redsmile@mail.ru" target = "_blank" title="Mail.ru"><svg class="bi" width="40" height="40"><use xlink:href="#mail"/></svg></a>
                      </div>
                  </center>
              </div>
              <div class = "modal-footer">
                  <input type = "submit" value = "Отправить" class = "btn btn-success">
                  <button type = "button" class = "btn btn-secondary" data-bs-dismiss = "modal"> Закрыть </button>
              </div>
        </form>
       </div>
      </div>
    </div>

    <br /><br /><br />

</body>
</html>

<?php endif; ?>
