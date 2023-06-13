<?php
    $h1 = "Vytvoření instance";
    $siteTitle = "Vytvoření instance | Oracle cloud";
?>
<!DOCTYPE html>
<html lang="cs">
<?php include_once "head.php" ?>
<body>
    <?php include_once "header.php"?>
    <main>
        <div class="container pt-5 pb-5">    
            <p>
                Klikněte v na hamburger menu v pravém horním rohu a v něm na záložku Compute a v ní na Instances. 
                Zde můžete seznam vašich instancí. Jestli nic nevidíte, musíte si nějakou vytvořit. Klikněte na tlačítko 
                Create instance. V prvním poli si instanci pojmenujte. V záložce comparment, placement a security nemusíte 
                nic měnit. První změna může nastat v záložce Image and shape. Zde si můžete kliknutím na tlačítko Change 
                image zvolit operační systém (image), který vám vyhovuje. Já jsem zvolil ubuntu verze 22.04. 
            </p>
            <a href="images/instance-1.png" data-lightbox="image-1" data-title="My caption">
                <img class="lightbox-image" src="images/instance-1.png" alt="">
            </a>
            <p>
                Poté si můžete změnit i Shape, to je procesor, na kterém vaše instance poběží a velikost paměti RAM. Můžete si 
                zvolit velmi výkonný 4 jádrový arm procesor Ampere a 24 GB RAM, ale ten je momentálně nedostupný a museli byste 
                si chvíli počkat. Z tohoto důvodu zvolím poslední záložku Specialty and previous generation a v ní jedno jádro 
                z procesoru AMD EPYC a 1 GB RAM.
            </p>
            <a href="images/instance-2.png" data-lightbox="image-1" data-title="My caption">
                <img class="lightbox-image" src="images/instance-2.png" alt="">
            </a>
            <p>
                V záložce networking vytvořte novou Virtualní síť, Subnet a zaškrtnout možnost Assign a public IPv4 address. V další 
                záložce si stáhněte private ssh key kliknutím na tlačítko Save private key. Budete jej potřebovat při připojování k instanci.
                V poslední záložce si můžete nastavit velikost bootovacího disku disku. Na konci stačí kliknout na tlačítko Create a 
                chvíli počkat, než se instance vytvoří a gratuluji, máte svou první instanci.
            </p>
        </div>
    </main>
    <?php include_once "footer.php" ?>
</body>
</html>