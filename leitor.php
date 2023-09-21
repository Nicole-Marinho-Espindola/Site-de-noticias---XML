<!DOCTYPE>
<html>
    <head>
        <meta charset="utf-8">
        <script src="https://kit.fontawesome.com/4719b1c3ae.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="style.css">
        <title>Notícias Oásis</title>
    </head>
    <body>
        <nav class="main-title-block">
            <h1 class="title">Notícias Oásis</h1>
            <i class="fa-solid fa-circle-exclamation icon"></i>
        </nav>

        <div class="subtitle-block">
            <h3 class="subtitle">Confira agora as noticias do momento:</h3>
        </div>
        <?php
            $link = "https://g1.globo.com/dynamo/pop-arte/rss2.xml";
            //link do arquivo xml
        
            $xml = simplexml_load_file($link) -> channel;  
            //carrega o arquivo XMLe retornando um Array
            
            foreach($xml -> item as $item){
        ?>     
        <div class="content">
            <div class="position">
                <strong class="main-title">Título:</strong>
                <p class="text-style"><?php echo $item -> title ?></p>
            </div>

            <div class="position">
                <strong class="main-title">Link:</strong>
            </div>

            <div class="position">
                <p class="link-style"><?php echo $item -> link ?></p>
            </div>
            
            <div class="position">
                <strong class="main-title">Descrição:</strong>
            </div>

            <div class="position">
                <p class="img-style"><?php echo $item -> description ?></p>
            </div>

            <div class="position">
                <strong class="main-title">Autor:</strong>
            </div>

            <div class="position">
                <p class="text-style"><?php echo $item -> author ?></p>
            </div>

            <div class="position">
                <strong class="main-title">Data:</strong>
            </div>

            <div class="position">
                <p class="text-style"><?php echo $item -> pubDate ?></p>
            </div>
        </div>
        
        <?php
            } //fim do foreach
        ?>

        <footer class="copyright-block">
            <div class="copyright">	&copy; 2023 Oásis</div>
        </footer>
    </body>
</html>