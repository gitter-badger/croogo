<ul class="breadcrumb">
    <?php $breadcrumb = $this->FileManager->breadcrumb($path); ?>
    <?php foreach ($breadcrumb as $pathname => $p) : ?>
        <li><?php echo $this->FileManager->linkDirectory($pathname, $p); ?></li>
    <?php endforeach; ?>
</ul>
