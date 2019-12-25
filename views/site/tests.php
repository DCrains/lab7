<?php

/* @var $this \yii\web\View */
/* @var $content string */
use yii\helpers\Html;
use yii\helpers\Url;
use yii\web\UrlManager;
use kartik\select2\Select2;

/* @var $this yii\web\View */

$this->title = 'Страница тестирования';
?>
<h3>Выберите тест:</h3>
<ul>
<?php foreach ($model as $test):
    echo '<li class="nav-link">
      <a href="/site/voprosi?question=1&test='.$test['id'].'" class="nav-link active ">
      '.$test->name . '  :  '. $test->description.'
      </a>
      </li>';
    endforeach;
    ?>
</ul>
<a class = 'btn btn-primary' href="test/create">Добавить новый тест</a>
<a class = 'btn btn-primary' href="question/create">Добавить новый вопрос</a>
<a class = 'btn btn-primary' href="answer/create">Добавить новый ответ</a>
