<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta Name="Siewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css" integrity="sha512-q3eWabyZPc1XTCmF+8/LuE1ozpg5xxn7iO89yfSOd5/oKvyqLngoNGsx8jq92Y8eXJ/IRxQbEC+FGSYxtk2oiw==" crossorigin="anonymous" />
    <title>sidenav</title>
</head>
<body>
    <aside>
    <nav id="nav">
            <div class="nav-header">
                <div class="logo">
                    <label for="btn-fold" class="fold">
                        <img src="img/bear-in-gray.jpg" alt="logo">
                    </label>
                    <input type="checkbox" id="btn-fold" onclick="navfold()">
                </div>
                <div class="logo-extension">
                    <a href="index.html">Jannick</a>
                </div>
            </div>
            <ul>
                <li><a href="index.html"><i class="slimbar-i fas fa-home"></i><span>Home</span></a></li>
                <li><a href="Projects.html"><i class="slimbar-i fas fa-cubes"></i><span>Projects</span></a></li>
                <li>
                    <label for="btn-1" class="first"><i class="slimbar-i fas fa-code"></i><span>Snippets</span>
                        <i class="fas fa-caret-down"></i>
                    </label>
                    <input type="checkbox" id="btn-1">
                    <ul>
                        <li><a href="#"><p class="slimbar-p">HTML</p><span>HTML</span></a></li>
                        <li><a href="#"><p class="slimbar-p">CSS</p><span>CSS</span></a></li>
                        <li><a href="#"><p class="slimbar-p">JS</p><span>JavaScript</span></a></li>
                        <li><a href="#"><p class="slimbar-p">PHP</p><span>PHP</span></a></li>
                        <li><a href="#"><p class="slimbar-p">SASS</p><span>SASS</span></a></li>
                        <li><a href="#"><p class="slimbar-p">Node</p><span>Node.js</span></a></li>
                    </ul>
                </li>
                <li><a href="about.html"><i class="slimbar-i fas fa-address-card"></i><span>About</span></a></li>
                <li><a href="contact.html"><i class="slimbar-i fas fa-envelope"></i><span>Contact</span></a></li>
                <li><a href="servers.html"><i class="slimbar-i fas fa-server"></i><span>Servers</span></a></li>
                <li><a href="settings.html"><i class="slimbar-i fas fa-wrench"></i><span>Settings</span></a></li>
            </ul>
            <div class="nav-bottom">
                <a href="https://github.com/LolerSwager/portfolie" target="_blank"><p>v.1</p><span>Version 1</span></a>
            </div>
        </nav>
    </aside>
    <main>
        <ul id="post-server">
            <h1>Websites</h1>
            <?php
                include 'ping.php';
                use \JJG\Ping as Ping;
                $array = array(
                    "https://jann5143.apache.techcollege.dk/",
                    "https://jann51432.apache.techcollege.dk/",
                    "https://jann51433.apache.techcollege.dk/",
                    "https://jann51434.apache.techcollege.dk/",
                    "https://jann51435.apache.techcollege.dk/",
                    "https://lolerswager.com/",
                    "http://rebogskammel.dk/");

                foreach($array as $url){
                    $host = parse_url($url, PHP_URL_HOST);
                    $host = preg_replace('/^(www\.)/i', '', $host);
                    $metas = get_meta_tags($url);
                    $page = file_get_contents($url);
                    $title = preg_match('/<title[^>]*>(.*?)<\/title>/ims', $page, $match) ? $match[1] : null;
                        
                    $favicon = 'https://www.google.com/s2/favicons?domain=' . $url;
                    
                    $description = isset($metas['description']) && !empty($metas['description']) ? 
                    $metas['description'] : "no description found";

                    $keywords = isset($metas['keywords']) && !empty($metas['keywords']) ? 
                    $metas['keywords'] : "no keywords found";

                    $ping = new Ping($host);
                    $latency = $ping->ping();
                    if ($latency !== false) {
                        $ping_resultat = $latency . ' ms';
                      }
                      else {
                        $ping_resultat = 'error';
                      }


                    echo '<li><a href="'.$url
                        .'" target="_blank"><img src="'.$favicon
                        .'"><p> Title: '.$title
                        .'</p><p> Description: '.$description
                        .'</p><p> Keywords: '.$keywords
                        .'</p><p> ping: '.$ping_resultat
                        .'</p></a></li>';
                } 




            ?>
        </ul>
    </main>
    <footer>
        
    </footer>
</body>
<script src="js/sidenav.js"></script>
<script src="js/serverlist.js"></script>
</html>