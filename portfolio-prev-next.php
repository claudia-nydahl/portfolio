<?php 
$portfolio_list=[
    [
        "title" => 'Wine Cellar',
        "url" => '/wine-cellar'
    ],
    [
        "title" => 'Nicholas Whitehorn',
        "url" => '/nicholas-whitehorn'
    ],
    [
        "title" => 'Sledgehammer Studio',
        "url" => '/sledgehammer-studio'
    ],
    [
        "title" => 'GrowPro app UI',
        "url" => '/growpro'
    ],
    [
        "title" => 'Woven Knitwear',
        "url" => '/woven'
    ],
    [
        "title" => 'Yayoi Kusama',
        "url" => '/yayoi-kusama'
    ],
    [
        "title" => 'Boxing app UI',
        "url" => '/app-ui'
    ],
    [
        "title" => 'Yuschav Arly',
        "url" => '/yuschav-arly'
    ],
    [
        "title" => 'Woolworths UI',
        "url" => '/woolworths-ui'
    ],
    [
        "title" => 'Sir Magazine',
        "url" => '/sir-magazine'
    ],
    [
        "title" => 'Infographic',
        "url" => '/infographic'
    ],
    [
        "title" => 'Corporate Design',
        "url" => '/corporate-design'
    ]
];

$this_url = $_SERVER['PHP_SELF'];
if (strpos($this_url, '.php')) {
    $this_url = str_replace('.php', '', $this_url) ;
}

$key = array_search($this_url, array_column($portfolio_list, 'url'));
?>

<section class="col-dk-12 other-projects-container">

    <!-- previous project -->
    <?php if ($portfolio_list[$key-1]) { ?>
        <div class="other-project">
            <div class="prev-icon">
                <svg onclick="window.location = '<?php echo $portfolio_list[$key-1]["url"]; ?>';" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve" width="20"><style type="text/css">.st0{fill:#C0C0C0;}</style><g><g><path class="st0" d="M492,236H68.4l70.2-69.8c7.8-7.8,7.9-20.5,0.1-28.3c-7.8-7.8-20.5-7.9-28.3-0.1L5.9,241.8l0,0c-7.8,7.8-7.8,20.5,0,28.3l0,0l104.5,104c7.8,7.8,20.5,7.8,28.3-0.1c7.8-7.8,7.8-20.5-0.1-28.3L68.4,276H492c11,0,20-9,20-20S503,236,492,236z" /></g></g></svg>
            </div>
            <div class="prev-project">
                <h2>Previous Project</h2>
                <a href="<?php echo $portfolio_list[$key-1]["url"]; ?>"><?php echo $portfolio_list[$key-1]["title"]; ?></a>
            </div>
        </div>
    <?php } else { ?>
        <div class="other-project transparent">
            <div class="prev-project">
                <h2>Previous Project</h2>
            </div>
        </div>
    <?php } ?>

    <!-- next project -->
    <?php if ($portfolio_list[$key+1]) { ?>
        <div class="other-project">
            <div class="next-project">
                <h2>Next Project</h2>
                <a href="<?php echo $portfolio_list[$key+1]["url"]; ?>"><?php echo $portfolio_list[$key+1]["title"]; ?></a>
            </div>
            <div class="next-icon">
                <svg onclick="window.location = '<?php echo $portfolio_list[$key+1]["url"]; ?>';" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve" width="20"><style type="text/css">.st0{fill:#C0C0C0;}</style><g><g><path class="st0" d="M506.1,241.8C506.1,241.8,506.1,241.8,506.1,241.8l-104.5-104c-7.8-7.8-20.5-7.8-28.3,0.1c-7.8,7.8-7.8,20.5,0.1,28.3l70.2,69.8H20c-11,0-20,9-20,20c0,11,9,20,20,20h423.6l-70.2,69.8c-7.8,7.8-7.9,20.5-0.1,28.3c7.8,7.8,20.5,7.9,28.3,0.1l104.5-104c0,0,0,0,0,0C514,262.3,513.9,249.6,506.1,241.8z" /></g></g></svg>
            </div>
        </div>
    <?php } else { ?>
        <div class="other-project transparent">
            <div class="next-project">
                <h2>Next Project</h2>
            </div>
        </div>
    <?php } ?>
</section>