<?= $_SESSION['login']?>
<form method='post'>
<input type="submit" name="logout" value="Log out">
</form>
<div>
    <?php foreach($this->articles as $article):?>
    <h2><?= $article['title']?></h2>
    <p><?= $article['text']?></p>
    <p><?= $article['date']?></p>
    <?php endforeach;?>
</div>

