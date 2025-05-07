<div class="header">
    <h3>FITNESS</h3>
    <ul>
        <li><a href="index.php" <?php if(basename($_SERVER['PHP_SELF']) == 'index.php')
        echo 'class="active"';?>>Home</a></li>
        <li><a href="about.php"
        <?php if(basename($_SERVER['PHP_SELF']) == 'about.php') 
        echo 'class="active"';?>>About</a></li>
        <li><a href="contact.php" <?php if(basename($_SERVER['PHP_SELF']) == 'contact.php')
        echo 'class="active"';?>>Contact</a></li>
    </ul>
</div>
