<?php /** @var $l \OCP\IL10N */ ?>
<?php
script('core', 'dist/login');
?>

<div id="login"></div>

<?php if (!empty($_['alt_login'])) { ?>
    <div id="alternative-logins">
        <?php foreach($_['alt_login'] as $login): ?>
            <a class="button <?php p($login['style'] ?? ''); ?>" href="<?php print_unescaped($login['href']); ?>" style="background:rgb(53, 37, 37); color:white; border:rgb(53, 37, 37);border-radius: 7px;font-size:20px;display: inline-block;" >
                <?php p($login['name']); ?>
            </a>
        <?php endforeach; ?>
    </div>
<?php } ?>
