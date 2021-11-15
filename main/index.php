<?php

require_once(__DIR__ . '/../app/config.php');

use MyApp\Database;
use MyApp\Todo;
use MyApp\Utils;
$pdo = Database::getInstance();
$todoStudy = new Todo($pdo);
$todoStudy->processPost();
$todosStudy = $todoStudy->getAll();

use MyApp\Database;
use MyApp\Todo;
use MyApp\Utils;
$pdo = Database::getInstance();
$todoClub = new Todo($pdo);
$todoClub->processPost();
$todosClub = $todoClub->getAll();

use MyApp\Database;
use MyApp\Todo;
use MyApp\Utils;
$pdo = Database::getInstance();
$todoFriend = new Todo($pdo);
$todoFriend->processPost();
$todosFriend = $todoFriend->getAll();

use MyApp\Database;
use MyApp\Todo;
use MyApp\Utils;
$pdo = Database::getInstance();
$todoLove = new Todo($pdo);
$todoLove->processPost();
$todosLove = $todoLove->getAll();

use MyApp\Database;
use MyApp\Todo;
use MyApp\Utils;
$pdo = Database::getInstance();
$todoCourse = new Todo($pdo);
$todoCourse->processPost();
$todosCourse = $todoCourse->getAll();

use MyApp\Database;
use MyApp\Todo;
use MyApp\Utils;
$pdo = Database::getInstance();
$todoEvent = new Todo($pdo);
$todoEvent->processPost();
$todosEvent = $todoEvent->getAll();

?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="utf-8">
  <title>My Todos</title>
  <link rel = "stylesheet" href = "css/styles.css">
</head>
<body>

    <div class = "main-title">やることリスト</div>

    <div class = "flex-Todos-box">

      <!-- 勉強 -->
      <main data-token = "<?=Utils:: h($_SESSION['token']);?>">
        <header>
          <h1>勉強</h1>
            <span class = "purge">一括削除</span>
        </header>
            <form>
              <input type ="text" name = "title" placeholder = "ここに入力">
            </form>
        <ul>
          <?php foreach($todos_Study as $todo_Study):?>
          <li data-id="<?=Utils::h($todo_Study->id);?>">
              <input type = "checkbox" <?= $todo_Study->is_done ? 'checked' : '';?>>
              <span><?= Utils::h($todo_Study->title); ?></span>           
              <span class = "delete">完了</span>
          </li>
          <?php endforeach; ?>
        </ul>
      </main>
      <!-- 勉強 -->

      <!-- 部活動 -->
      <main data-token = "<?=Utils:: h($_SESSION['token']);?>">
        <header>
          <h1>部活動</h1>
            <span class = "purge">一括削除</span>
        </header>
            <form>
              <input type ="text" name = "title" placeholder = "ここに入力">
            </form>
        <ul>
          <?php foreach($todos_Club as $todo_Club):?>
          <li data-id="<?=Utils::h($todo_Club->id);?>">
              <input type = "checkbox" <?= $todoClub->is_done ? 'checked' : '';?>>
              <span><?= Utils::h($todo_Club->title); ?></span>           
              <span class = "delete">完了</span>
          </li>
          <?php endforeach; ?>
        </ul>
      </main>
      <!-- 部活動 -->

      <!-- 友達関係 -->
      <main data-token = "<?=Utils:: h($_SESSION['token']);?>">
        <header>
          <h1>友達関係</h1>
            <span class = "purge">一括削除</span>
        </header>
            <form>
              <input type ="text" name = "title" placeholder = "ここに入力">
            </form>
        <ul>
          <?php foreach($todos_Friend as $todo_Friend):?>
          <li data-id="<?=Utils::h($todo_Friend->id);?>">
              <input type = "checkbox" <?= $todo_Friend->is_done ? 'checked' : '';?>>
              <span><?= Utils::h($todo_Friend->title); ?></span>           
              <span class = "delete">完了</span>
          </li>
          <?php endforeach; ?>
        </ul>
      </main>
      <!-- 友達関係 -->

      <!-- 恋愛 -->
      <main data-token = "<?=Utils:: h($_SESSION['token']);?>">
        <header>
          <h1>恋愛</h1>
            <span class = "purge">一括削除</span>
        </header>
            <form>
              <input type ="text" name = "title" placeholder = "ここに入力">
            </form>
        <ul>
          <?php foreach($todos_Love as $todo_Love):?>
          <li data-id="<?=Utils::h($todo_Love->id);?>">
              <input type = "checkbox" <?= $todo_Love->is_done ? 'checked' : '';?>>
              <span><?= Utils::h($todo_Love->title); ?></span>           
              <span class = "delete">完了</span>
          </li>
          <?php endforeach; ?>
        </ul>
      </main>
      <!-- 恋愛 -->

      <!-- 進路 -->
      <main data-token = "<?=Utils:: h($_SESSION['token']);?>">
        <header>
          <h1>進路</h1>
            <span class = "purge">一括削除</span>
        </header>
            <form>
              <input type ="text" name = "title" placeholder = "ここに入力">
            </form>
        <ul>
          <?php foreach($todos_Course as $todo_Course):?>
          <li data-id="<?=Utils::h($todo_Course->id);?>">
              <input type = "checkbox" <?= $todo_Course->is_done ? 'checked' : '';?>>
              <span><?= Utils::h($todo_Course->title); ?></span>           
              <span class = "delete">完了</span>
          </li>
          <?php endforeach; ?>
        </ul>
      </main>
      <!-- 進路 -->

      <!-- 学校行事 -->
      <main data-token = "<?=Utils:: h($_SESSION['token']);?>">
        <header>
          <h1>学校行事</h1>
            <span class = "purge">一括削除</span>
        </header>
            <form>
              <input type ="text" name = "title" placeholder = "Type new todo.">
            </form>
        <ul>
          <?php foreach($todos_Event as $todo_Event):?>
          <li data-id="<?=Utils::h($todo_Event->id);?>">
              <input type = "checkbox" <?= $todo_Event->is_done ? 'checked' : '';?>>
              <span><?= Utils::h($todo_Event->title); ?></span>           
              <span class = "delete">完了</span>
          </li>
          <?php endforeach; ?>
        </ul>
      </main>
      <!-- 学校行事 -->

    </div>

</body>
<footer>
  <a href = "" target = "_blank"><button class = "OTASUKE-JIBAN-button">Go to OTASUKE-JIBAN!</button></a>
  </footer>
</html>


<!-- C:\Users\81907\Desktop\Portforio_App\main\index.php -->