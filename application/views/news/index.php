<?php foreach ($news as $news_item): ?>

    <h2><?php echo $news_item['title'] ?></h2>
    <div id="main">
        <?php echo $news_item['text'] ?>
    </div>
    <p><a href="<?php echo $this->config->site_url();?>news/<?php echo $news_item['slug'] ?>/<?php echo $news_item['id'] ?>">View article</a></p>

<?php endforeach ?>