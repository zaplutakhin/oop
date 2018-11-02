<?php
class News
{
    private $news;
    public function __construct($name)
    {
        $data = json_decode(file_get_contents($name),true);
        $this->news = $data;
    }
    public function getNews()
    {
        $newsList ='';
        foreach ($this->news as $item)
        {
            $newsList .= '<h2>' . $item['title'] . '</h2>' . '<b>' . $item['date'] . '</b>' . '<p>' . $item['body'] . '</p>' . '<br>';
        }
        return $newsList;
    }
}

$newsInWorld = new News('newsInWorld.json');
$newsAboutLife = new News('newsAboutLife.json');
$newsAboutSport = new News('newsAboutSport.json');
?>

<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Новости</title>
</head>
<body>

<?=$newsInWorld->getNews();?>
<?=$newsAboutLife->getNews();?>
<?=$newsAboutSport->getNews();?>

</body>
</html>