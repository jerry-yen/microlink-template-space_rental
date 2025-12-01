<!-- 租借辦法頁面：延續網站共用樣式 -->
<!DOCTYPE html>
<html lang="zh-Hant">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>租借辦法 | 思辨空間</title>
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

        .page-banner {
            height: 220px;
            object-fit: cover;
            filter: brightness(88%);
        }

        h2.section-title {
            color: var(--primary-color);
        }

        .step-box {
            background: #fff;
            border-radius: 10px;
            padding: 1rem;
            box-shadow: 0 6px 18px rgba(16,24,40,0.06);
            text-align: center;
        }

        .rule-list li {
            margin-bottom: 0.6rem;
        }

        footer {
            background-color: var(--navbar-bg);
            color: var(--navbar-text);
        }
    </style>
</head>
<style>
    /* 固定社群按鈕（桌面側邊 / 手機底部） */
    .social-fixed { position: fixed; right: 18px; top: 50%; transform: translateY(-50%); display: flex; flex-direction: column; gap: 10px; z-index: 1050; }
    .social-fixed a { width: 48px; height: 48px; display: inline-flex; align-items: center; justify-content: center; border-radius: 50%; color: #fff; text-decoration: none; box-shadow: 0 6px 18px rgba(16,24,40,0.12); transition: transform 0.14s ease, box-shadow 0.14s ease; font-size:20px; }
    .social-fixed a:focus, .social-fixed a:hover { transform: translateY(-3px); box-shadow: 0 10px 22px rgba(16,24,40,0.16); }
    .social-fb { background:#1877F2; } .social-ig { background: radial-gradient(circle at 30% 107%, #fdf497 0%, #fdf497 5%, #fd5949 45%, #d6249f 60%, #285AEB 90%); } .social-line { background:#00C300; }
    @media (max-width: 767.98px) { .social-fixed { right:0; left:0; bottom:0; top:auto; transform:none; flex-direction:row; justify-content:center; padding:10px 6px; background: rgba(255,255,255,0.92); box-shadow: 0 -6px 18px rgba(16,24,40,0.06); } .social-fixed a { width:44px; height:44px; font-size:18px; } }
</style>

<body class="d-flex flex-column min-vh-100">
    <!-- Navbar -->
    <?php include_once 'include/nav.php'; ?>

    <!-- Banner -->
    <section>
        <img src="https://images.pexels.com/photos/3182756/pexels-photo-3182756.jpeg?auto=compress&cs=tinysrgb&fit=crop&w=1200&h=400"
            class="w-100 page-banner" alt="租借辦法 橫幅">
    </section>

    <!-- 主要內容 -->
    <main class="flex-grow-1">
        <section class="py-5">
            <div class="container">
                <h2 class="section-title mb-3">租借辦法</h2>
                <p class="text-muted mb-4">以下說明為租借我們空間的一般程序與使用規範，請在預訂前詳閱，以確保雙方權益。</p>

                <!-- 申請流程 -->
                <div class="mb-5">
                    <h4 class="mb-3">申請流程</h4>
                    <div class="row g-3">
                        <div class="col-md-3">
                            <div class="step-box">
                                <i class="fas fa-phone fa-2x text-primary mb-2"></i>
                                <h6>聯繫館方</h6>
                                <p class="text-muted small">電話或 Email 詢問場地可用性與需求</p>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="step-box">
                                <i class="fas fa-file-signature fa-2x text-primary mb-2"></i>
                                <h6>申請租借</h6>
                                <p class="text-muted small">填寫申請表或線上表單，提供活動資訊</p>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="step-box">
                                <i class="fas fa-calendar-check fa-2x text-primary mb-2"></i>
                                <h6>確認時間</h6>
                                <p class="text-muted small">館方確認場地與可用時段後回覆</p>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="step-box">
                                <i class="fas fa-money-bill-wave fa-2x text-primary mb-2"></i>
                                <h6>訂金匯款</h6>
                                <p class="text-muted small">依通知繳交訂金以確保預約時段</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- 使用規範 -->
                <div class="mb-5">
                    <h4 class="mb-3">使用規範</h4>
                    <div class="row">
                        <div class="col-md-6">
                            <h6>時間</h6>
                            <ul class="rule-list text-muted">
                                <li>租借時段依預約為準，請準時到場並於結束前整理離場。</li>
                                <li>最小預約時段為 1 小時；若需延長，請至少於結束前 30 分鐘向館方提出申請。</li>
                                <li>若逾時離場，館方有權依時段收費或扣除押金。</li>
                            </ul>
                        </div>
                        <div class="col-md-6">
                            <h6>保管</h6>
                            <ul class="rule-list text-muted">
                                <li>請妥善保管個人物品，館方不負保管責任。</li>
                                <li>如需寄放物品或道具，請事先說明並經館方同意。</li>
                                <li>若造成設備或場地損壞，承租人需負賠償責任。</li>
                            </ul>
                        </div>
                    </div>

                    <div class="mt-4">
                        <h6>注意事項</h6>
                        <ul class="rule-list text-muted">
                            <li>場地僅供預約者使用，不得轉租或用於違法用途。</li>
                            <li>場內禁止吸菸、嚴禁明火與任意懸掛設備。</li>
                            <li>若有飲食需求，請於申請時告知並依館方規定處理垃圾與回收。</li>
                            <li>活動期間請尊重其他使用者，維持場地安靜與整潔。</li>
                            <li>館方保留最終審核與調整預約之權利。</li>
                        </ul>
                    </div>
                </div>

                <div class="contact-box p-3 bg-white rounded" style="border-left:5px solid var(--primary-color);">
                    <strong>如需申請或有疑問，請與我們聯絡：</strong>
                    <p class="mb-1"><i class="fas fa-envelope me-2"></i>service@spacehub.com</p>
                    <p class="mb-0"><i class="fas fa-phone me-2"></i>(02) 1234-5678</p>
                </div>

            </div>
        </section>
    </main>

    <!-- Footer -->
    <footer class="mt-auto text-center py-3">
        <p class="mb-0">&copy; 2025 思辨空間 All rights reserved.</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- 固定社群按鈕（FB / IG / 官方 LINE） -->
    <div class="social-fixed" aria-hidden="false">
        <a class="social-fb" href="#" aria-label="Facebook - 打開新分頁" target="_blank" rel="noopener noreferrer"><i class="fab fa-facebook-f"></i></a>
        <a class="social-ig" href="#" aria-label="Instagram - 打開新分頁" target="_blank" rel="noopener noreferrer"><i class="fab fa-instagram"></i></a>
        <a class="social-line" href="#" aria-label="官方 LINE - 打開新分頁" target="_blank" rel="noopener noreferrer"><i class="fab fa-line"></i></a>
    </div>
</body>

</html>
