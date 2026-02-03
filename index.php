<!-- Bootstrap 5 template for space booking site -->
<!DOCTYPE html>
<html lang="zh-Hant">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo htmlspecialchars($setting->title); ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <style>
        :root {
            --primary-color: #5567dd;
            --primary-hover: #3d4eb1;
            --text-dark: #2c2c2c;
            --text-muted: #666;
            --bg-light: #f7f9fc;
            --card-bg: #ffffff;
            --navbar-bg: #313a49;
            --navbar-text: #ffffff;
            --accent-color: #ffbc42;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: var(--bg-light);
            color: var(--text-dark);
        }

        .navbar {
            background-color: var(--navbar-bg);
        }

        .navbar-brand,
        .navbar-nav .nav-link {
            color: var(--navbar-text) !important;
            font-weight: 500;
        }

        .navbar-nav .nav-link:hover {
            color: var(--accent-color) !important;
        }

        .carousel-inner img {
            height: 267px;
            object-fit: cover;
            filter: brightness(90%);
        }

        .container h2 {
            color: var(--primary-color);
        }

        .space-card {
            height: 100%;
            display: flex;
            flex-direction: column;
            border: none;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.08);
        }

        .space-card .card-body {
            flex-grow: 1;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            background-color: var(--card-bg);
        }

        .space-card .card-title {
            color: var(--primary-color);
            font-weight: 600;
        }

        .space-card .card-text {
            color: var(--text-muted);
        }

        .space-card img {
            height: 200px;
            object-fit: cover;
        }

        .btn-primary {
            background-color: var(--primary-color);
            border-color: var(--primary-color);
        }

        .btn-primary:hover {
            background-color: var(--primary-hover);
            border-color: var(--primary-hover);
        }

        footer {
            background-color: var(--navbar-bg);
            color: var(--navbar-text);
        }

        /* 思辨空間專用樣式 */
        #thinking-space {
            /* 微微隔開上下區塊 */
            padding-top: 3.5rem;
            padding-bottom: 3.5rem;
        }

        #thinking-space .lead {
            font-size: 1.05rem;
            line-height: 1.8;
            color: var(--text-dark);
        }

        #thinking-space .thinking-features li {
            margin-bottom: 0.65rem;
        }

        #thinking-space .thinking-features i {
            background-color: rgba(85, 103, 221, 0.08);
            color: var(--primary-color);
            border-radius: 50%;
            padding: 6px;
            width: 28px;
            height: 28px;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            margin-right: 0.6rem;
            box-shadow: 0 1px 2px rgba(0, 0, 0, 0.04);
        }

        /* 圖片大小與陰影微調 */
        .thinking-img {
            max-width: 100%;
            height: auto;
            border-radius: 12px;
            box-shadow: 0 8px 30px rgba(16, 24, 40, 0.08);
            object-fit: cover;
        }

        /* 桌面時增加左右間距讓版面更平衡 */
        @media (min-width: 992px) {
            #thinking-space .col-md-7 {
                padding-right: 3.5rem;
            }

            #thinking-space .col-md-5 {
                padding-left: 1.5rem;
            }
        }

        /* 固定社群按鈕（桌面側邊 / 手機底部） */
        .social-fixed {
            position: fixed;
            right: 18px;
            top: 50%;
            transform: translateY(-50%);
            display: flex;
            flex-direction: column;
            gap: 10px;
            z-index: 1050;
        }

        .social-fixed a {
            width: 48px;
            height: 48px;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            border-radius: 50%;
            color: #fff;
            text-decoration: none;
            box-shadow: 0 6px 18px rgba(16, 24, 40, 0.12);
            transition: transform 0.14s ease, box-shadow 0.14s ease;
            font-size: 20px;
        }

        .social-fixed a:focus,
        .social-fixed a:hover {
            transform: translateY(-3px);
            box-shadow: 0 10px 22px rgba(16, 24, 40, 0.16);
        }

        .social-fb {
            background: #1877F2;
        }

        .social-ig {
            background: radial-gradient(circle at 30% 107%, #fdf497 0%, #fdf497 5%, #fd5949 45%, #d6249f 60%, #285AEB 90%);
        }

        .social-line {
            background: #00C300;
        }

        /* 手機或窄螢幕：移到底部水平排列 */
        @media (max-width: 767.98px) {
            .social-fixed {
                right: 0;
                left: 0;
                bottom: 0;
                top: auto;
                transform: none;
                flex-direction: row;
                justify-content: center;
                padding: 10px 6px;
                background: rgba(255, 255, 255, 0.92);
                box-shadow: 0 -6px 18px rgba(16, 24, 40, 0.06);
            }

            .social-fixed a {
                width: 44px;
                height: 44px;
                font-size: 18px;
            }
        }
    </style>
</head>

<body>

    <!-- Navbar -->
    <?php include_once 'include/nav.php'; ?>


    <!-- Carousel -->
    <div id="mainCarousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <?php
            if (isset($banners) && isset($banners->data) && is_array($banners->data)):
                $is_first = true;
                foreach ($banners->data as $banner_item):
                    $active_class = $is_first ? ' active' : '';
                    $is_first = false;
            ?>
                    <div class="carousel-item<?php echo $active_class; ?>">
                        <?php if (!empty($banner_item->url)): ?>
                            <a href="<?php echo htmlspecialchars($banner_item->url); ?>" target="_blank">
                            <?php endif; ?>
                            <img src="<?php echo $domain_url . htmlspecialchars($banner_item->banner); ?>" class="d-block w-100"
                                alt="<?php echo htmlspecialchars($banner_item->title); ?>">
                            <?php if (!empty($banner_item->url)): ?>
                            </a>
                        <?php endif; ?>
                    </div>
            <?php
                endforeach;
            endif;
            ?>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#mainCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#mainCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon"></span>
        </button>
    </div>

    <!-- Example Homepage Content -->

    <!-- 思辨空間簡介 -->
    <section class="py-5" id="thinking-space">
        <div class="container container-lg">
            <h2 class="mb-4 text-center">思辨空間簡介</h2>
            <div class="row align-items-center">
                <div class="col-md-7">
                    <div class="lead"><?php echo $setting->intro_desc; ?></div>
                </div>
                <div class="col-md-5 text-center">
                    <img src="<?php echo $domain_url . htmlspecialchars($setting->intro_image); ?>"
                        alt="<?php echo htmlspecialchars($setting->title); ?>" class="img-fluid thinking-img">
                </div>
            </div>
        </div>
    </section>

    <section class="py-5 bg-white">
        <div class="container text-center">
            <h2 class="mb-4">特色與優點</h2>
            <div class="row row-cols-2 row-cols-md-4 g-4 justify-content-center">
                <?php
                if (isset($equipments) && isset($equipments->data) && is_array($equipments->data)):
                    foreach ($equipments->data as $item):
                        $icon_class = 'fa-star'; // Default icon
                        $title = $item->title ?? '';

                        // Simple keyword matching for icons
                        if (mb_strpos($title, '投影') !== false)
                            $icon_class = 'fa-project-diagram';
                        elseif (mb_strpos($title, '麥克風') !== false)
                            $icon_class = 'fa-microphone';
                        elseif (mb_strpos($title, '音響') !== false)
                            $icon_class = 'fa-music';
                        elseif (mb_strpos($title, '茶水') !== false)
                            $icon_class = 'fa-mug-hot';
                        elseif (mb_strpos($title, 'WiFi') !== false || stripos($title, 'wifi') !== false)
                            $icon_class = 'fa-wifi';
                        elseif (mb_strpos($title, '清潔') !== false)
                            $icon_class = 'fa-broom';
                        elseif (mb_strpos($title, '停車') !== false)
                            $icon_class = 'fa-parking';
                        elseif (mb_strpos($title, '便利') !== false || mb_strpos($title, '商店') !== false)
                            $icon_class = 'fa-store';
                        elseif (mb_strpos($title, '裝潢') !== false)
                            $icon_class = 'fa-paint-roller';
                ?>
                        <div class="col">
                            <button class="btn btn-outline-secondary w-100">
                                <i class="fas <?php echo $icon_class; ?> fa-lg mb-1"></i><br>
                                <?php echo htmlspecialchars($title); ?>
                            </button>
                        </div>
                <?php
                    endforeach;
                endif;
                ?>
            </div>
        </div>
    </section>

    <section class="py-5" id="featured-spaces">
        <div class="container">
            <h2 class="mb-4 text-center">精選空間照片</h2>
            <?php
            // Prepare data for tabs and carousels
            $all_spaces = [];
            $spaces_by_branch = [];
            $branch_tabs = [];

            if (isset($branches) && isset($branches->data) && is_array($branches->data)) {
                foreach ($branches->data as $branch) {
                    $b_title = $branch->title ?? '未命名館別';
                    // Generate a safe, simple ID for tabs
                    $b_id = md5($b_title);

                    $branch_tabs[] = [
                        'title' => $b_title,
                        'id' => $b_id
                    ];

                    $spaces_by_branch[$b_id] = [];

                    if (isset($branch->spaces) && is_array($branch->spaces)) {
                        foreach ($branch->spaces as $space) {
                            $space->branch_title = $b_title;
                            $spaces_by_branch[$b_id][] = $space;
                            $all_spaces[] = $space;
                        }
                    }
                }
            }

            // Randomize "All" spaces order
            shuffle($all_spaces);
            ?>

            <!-- Hall Tabs -->
            <ul class="nav nav-pills justify-content-center mb-5" id="spaceTabs" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="tab-all" data-bs-toggle="pill" data-bs-target="#content-all" type="button" role="tab" aria-selected="true">全部</button>
                </li>
                <?php foreach ($branch_tabs as $tab): ?>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="tab-<?php echo $tab['id']; ?>" data-bs-toggle="pill" data-bs-target="#content-<?php echo $tab['id']; ?>" type="button" role="tab" aria-selected="false"><?php echo htmlspecialchars($tab['title']); ?></button>
                    </li>
                <?php endforeach; ?>
            </ul>

            <!-- Tab Content -->
            <div class="tab-content" id="spaceTabsContent">

                <?php
                // Create an array of all panes to render loop
                $panes = array_merge(
                    [['id' => 'all', 'spaces' => $all_spaces]],
                    array_map(function ($t) use ($spaces_by_branch) {
                        return ['id' => $t['id'], 'spaces' => $spaces_by_branch[$t['id']]];
                    }, $branch_tabs)
                );

                foreach ($panes as $index => $pane):
                    $isActive = ($index === 0) ? 'show active' : '';
                    $paneId = 'content-' . $pane['id'];
                    $carouselId = 'carousel-' . $pane['id'];
                    $paneSpaces = $pane['spaces'];
                ?>
                    <div class="tab-pane fade <?php echo $isActive; ?>" id="<?php echo $paneId; ?>" role="tabpanel">
                        <?php if (empty($paneSpaces)): ?>
                            <div class="text-center py-5 text-muted">
                                <i class="fas fa-box-open fa-3x mb-3"></i>
                                <p>此類別目前沒有空間展示。</p>
                            </div>
                        <?php else: ?>
                            <div id="<?php echo $carouselId; ?>" class="carousel slide carousel-dark" data-bs-ride="false" data-bs-interval="false">
                                <div class="carousel-inner">
                                    <?php
                                    // Logic to generate slides:
                                    // We want to step 3 items at a time.
                                    // If total is not divisible by 3, we continue wrapping around until we return to offset 0.
                                    // This creates a seamless loop that satisfies the user's request:
                                    // e.g. 4 items: [0,1,2] -> [3,0,1] -> [2,3,0] -> [1,2,3] -> [0,1,2]...

                                    $totalSpaceCount = count($paneSpaces);
                                    $slides = [];

                                    if ($totalSpaceCount > 0) {
                                        $offset = 0;
                                        // Safety break to prevent infinite loops in weird edge cases, though math guarantees return to 0
                                        $maxLoops = 100;
                                        $loopCount = 0;

                                        do {
                                            $currentSlice = [];
                                            for ($i = 0; $i < 3; $i++) {
                                                // Use modulo to wrap around
                                                $currentSlice[] = $paneSpaces[($offset + $i) % $totalSpaceCount];
                                            }
                                            $slides[] = $currentSlice;

                                            // Step by 3
                                            $offset = ($offset + 3) % $totalSpaceCount;
                                            $loopCount++;
                                        } while ($offset !== 0 && $loopCount < $maxLoops);
                                    }

                                    foreach ($slides as $chunkIndex => $chunkSpaces):
                                        $itemActive = ($chunkIndex === 0) ? 'active' : '';
                                    ?>
                                        <div class="carousel-item <?php echo $itemActive; ?>">
                                            <div class="row">
                                                <?php foreach ($chunkSpaces as $space):
                                                    // Extract Variables
                                                    $space_img = !empty($space->images) ? $domain_url . $space->images : 'https://placehold.co/600x400?text=No+Image';
                                                    $space_title = htmlspecialchars($space->title ?? '');
                                                    $space_desc = htmlspecialchars($space->description ?? '');
                                                    if (mb_strlen($space_desc) > 50) $space_desc = mb_substr($space_desc, 0, 50) . '...';
                                                    $capacity = htmlspecialchars($space->capacity ?? 'N/A');
                                                    $location = htmlspecialchars($space->branch_title ?? '');

                                                    // Link Construction
                                                    $space_id_full = $space->id ?? '';
                                                    $space_id_short = explode('-', $space_id_full)[0];
                                                    $platform = !empty($space->branch_title) ? $space->branch_title : 'unknown';
                                                    $link_url = 'space.html/' . $space_id_short . '/' . $platform . '/' . $space_title;
                                                ?>
                                                    <div class="col-md-4 mb-4">
                                                        <div class="card space-card h-100 position-relative">
                                                            <img src="<?php echo $space_img; ?>" class="card-img-top" alt="<?php echo $space_title; ?>">
                                                            <div class="card-body">
                                                                <h5 class="card-title"><?php echo $space_title; ?></h5>
                                                                <p class="card-text small mb-3"><?php echo $space_desc; ?></p>
                                                                <div class="mt-auto">
                                                                    <p class="mb-1"><i class="fas fa-users me-2"></i>可容納 <?php echo $capacity; ?> 人</p>
                                                                    <p class="mb-2"><i class="fas fa-map-marker-alt me-2"></i><?php echo $location; ?></p>
                                                                    <a href="<?php echo $link_url; ?>" class="btn btn-primary w-100 stretched-link">查看詳情</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                <?php endforeach; ?>
                                            </div>
                                        </div>
                                    <?php endforeach; ?>
                                </div>

                                <?php if (count($slides) > 1): ?>
                                    <button class="carousel-control-prev" type="button" data-bs-target="#<?php echo $carouselId; ?>" data-bs-slide="prev" style="width: 5%;">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Previous</span>
                                    </button>
                                    <button class="carousel-control-next" type="button" data-bs-target="#<?php echo $carouselId; ?>" data-bs-slide="next" style="width: 5%;">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Next</span>
                                    </button>
                                <?php endif; ?>
                            </div>
                        <?php endif; ?>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- 聯絡資訊 -->
    <section class="py-4 bg-white" id="contact-info">
        <div class="container">
            <h2 class="mb-3 text-center">聯絡資訊</h2>
            <div class="row justify-content-center">
                <div class="col-md-6 text-center">
                    <p><i class="fas fa-envelope me-2"></i><?php echo htmlspecialchars($setting->email); ?></p>
                    <p><i class="fas fa-phone me-2"></i><?php echo htmlspecialchars($setting->phone); ?></p>
                </div>
            </div>
        </div>
    </section>


    <!-- Footer -->
    <?php include dirname(__FILE__) . '/include/footer.php'; ?>

    <!-- 固定社群按鈕（FB / IG / 官方 LINE） -->
    <?php include dirname(__FILE__) . '/include/third-party-link.php'; ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>