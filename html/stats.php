<?php
/**
 * Stats Page for the main site
 * @license      Apache License v2.0
 * @author       Smashedbotatos <ian@icarey.net>
 * @copyright    Copyright © 2009-2019 iCarey Computer Services.
 *
 */
?>

<!-- Header Import -->
<?php include_once('header.php'); ?>
<!-- Main Content
================================================== -->
<div class="container well well-icarey">
    <div class="row">
        <div class="col col-12">
            <div class="clearfix text-center">
                Last update: <span id="update-time" class="text-info">(last update)</span>
            </div>
            <div id="loader" class="container text-center mt-2">
                <img class="img-pixelated img-textsize-8" src="img/loader.gif"/>
                <h4 class="mt-2 text-shadow">Loading...</h4>
            </div>
            <div id="content" style="display:none;">
                <div id="view" class="container mx-auto">
                    <div class="h1 my-4 text-center">
                        <img id="view-icon" class="img-pixelated img-left img-textsize align-baseline"/>
                        <span id="view-title" class="text-underline text-shadow">(view title)</span>
                    </div>
                    <h5 id="view-subtitle" class="text-center text-shadow">(view subtitle)</h5>
                    <div id="view-desc" class="mb-2 text-muted text-center text-shadow">(view desc)</div>
                    <div id="view-content">(view content)</div>
                </div>

            </div>
        </div>
    </div>
</div>

<!-- Footer
================================================== -->
<div class="container footer">
    <div class="row mt-4">
        <div class="col-sm-4">
            <h4 class="mb-4 icarey-orange-text"><strong><?php print_r($config['general']['sitename']); ?></strong>
            </h4>
            <ul class="list-unstyled">
                <li class="icarey-orange-text"><?php print_r($config['minecraft']['version']); ?> <?php print_r($config['minecraft']['type']); ?>
                    Minecraft Server
                </li>
            </ul>
        </div>
        <div class="col-sm-4">
            <h4 class="mb-4 icarey-orange-text"><strong>Useful Links</strong></h4>
            <ul>
                <li><a class="icarey-orange-text" href="https://optifine.net/home" target="_blank">Optifine</a></li>
                <li><a class="icarey-orange-text" href="http://chunkbase.com/" target="_blank">Chunk Base</a></li>
                <li><a class="icarey-orange-text" href="http://minecraft.tools/en/" target="_blank">Minecraft
                        Tools</a>
                </li>
            </ul>
        </div>
        <div class="col-sm-4">
            <h4 class="mb-4 icarey-orange-text"><strong>Contact Us!</strong></h4>

            <p><a class="icarey-orange-text"
                  href="mailto:<?php $config['email']['primaryemail'] ?>?Subject=Web%20Inquiry" target="_top"><i
                            class="fas fa-envelope fa-1x mr-2 icarey-orange-text"></i><?php print_r($config['email']['primaryemail']); ?>
                </a></p>
            <p><a class="icarey-orange-text"
                  href="https://discord.gg/<?php print_r($config['general']['discord']) ?>"
                  target="_blank"><i class="fab fa-discord fa-1x mr-2 icarey-orange-text"></i>Discord Chat</a></p>
        </div>
        <a class="icarey-orange-text" href="https://www.icarey.net">&nbsp;&copy;iCarey Computer Services
            2009-<?php echo date('Y'); ?></a>
    </div>
</div>
</div> <!-- Main Container Close -->
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
<script src="js/lib/pako_inflate-1.0.7.min.js"></script>
<script src="js/lib/jquery-3.3.1.min.js"></script>
<script src="js/lib/popper-1.14.3.min.js"></script>
<script src="js/lib/bootstrap-4.1.3.min.js"></script>

<script src="js/mcstats.js"></script>
<script src="js/mcstats-widgets.js"></script>
<script src="js/mcstats-awardlist.js"></script>
<script src="js/mcstats-awardview.js"></script>
<script src="js/mcstats-playerlist.js"></script>
<script src="js/mcstats-playerview.js"></script>
<script src="js/mcstats-hof.js"></script>
<script src="js/mcstats-loader.js"></script>
<script src="js/mcstats-start.js"></script>
</body>
</html>