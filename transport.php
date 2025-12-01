<!DOCTYPE html>
<html lang="zh-Hant">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>交通資訊 | 思辨空間</title>
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

    .info-box {
      background: #fff;
      border-radius: 10px;
      padding: 1rem;
      box-shadow: 0 6px 18px rgba(16,24,40,0.06);
    }

    footer {
      background-color: var(--navbar-bg);
      color: var(--navbar-text);
    }

    iframe.map {
      border: 0;
      width: 100%;
      height: 420px;
      border-radius: 8px;
      box-shadow: 0 8px 30px rgba(16,24,40,0.06);
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
    <img src="https://images.pexels.com/photos/373965/pexels-photo-373965.jpeg?auto=compress&cs=tinysrgb&fit=crop&w=1200&h=400" class="w-100 page-banner" alt="交通資訊橫幅">
  </section>

  <main class="flex-grow-1">
    <section class="py-5">
      <div class="container">
        <h1 class="mb-3" style="color: var(--primary-color);">交通資訊</h1>
        <p class="text-muted mb-4">以下說明包含大眾運輸、開車路線、地圖位置、停車與營業時間，協助您順利抵達。</p>

        <div class="row g-4">
          <div class="col-lg-6">
            <div class="info-box mb-4">
              <h4 class="mb-3">公車與大眾運輸路線</h4>
              <p class="mb-2"><strong>捷運：</strong>距離最近的捷運站為「中山站」或「台北車站」，步行約 8-12 分鐘（視出口而定）。</p>
              <p class="mb-2"><strong>公車：</strong>附近停靠多線公車，常見路線如下：</p>
              <ul class="text-muted">
                <li>紅線 5、藍線 202：於「中山路口站」下車後步行約 4 分鐘</li>
                <li>循環公車 12：於「文化中心站」下車後步行約 6 分鐘</li>
                <li>夜間公車：若晚間活動結束，可使用夜間公車路線或計程車返回</li>
              </ul>
              <p class="text-muted small mt-2">提示：建議使用捷運或主要市區公車轉乘，遇活動尖峰時間請預留更多時間抵達。</p>
            </div>

            <div class="info-box mb-4">
              <h4 class="mb-3">開車路線</h4>
              <p class="mb-2">若從高速公路來（例如國道 1 或國道 3），請由交流道下後依導航前往市中心，以下為常見路線：</p>
              <ol class="text-muted">
                <li>由國道 1 下「台北交流道」，接市區快速道路，沿指示牌前往中山北路。</li>
                <li>進入市區後，請依導航導向至目的地址；建議於附近合法停車場停車後步行前往。</li>
              </ol>
              <p class="text-muted small">建議使用即時路況導航（Google Maps / Waze）避開尖峰時段路段擁堵。</p>
            </div>

            <div class="info-box mb-4">
              <h4 class="mb-3">停車資訊</h4>
              <p class="mb-2">本站附近提供下列停車選項：</p>
              <ul class="text-muted">
                <li>路邊收費停車格（計時停車）— 視當地規範收費，請留意停車時間限制。</li>
                <li>鄰近公有停車場（例：市民公園地下停車場）— 步行約 5-10 分鐘。</li>
                <li>私人收費停車場 — 若活動人數多，建議提前查詢並預留車位。</li>
              </ul>
              <p class="text-muted small">若需大量裝卸物品，請事先聯繫我們協調暫時停車或卸貨地點。</p>
            </div>

          </div>

          <div class="col-lg-6">
            <div class="info-box mb-4">
              <h4 class="mb-3">地圖位置（Google Maps 內嵌）</h4>
              <!-- 使用 q=查詢字串 的 embed，可依需求替換成精確的 maps embed link -->
              <iframe class="map" src="https://www.google.com/maps?q=台北市中山區&z=16&output=embed" allowfullscreen loading="lazy"></iframe>
              <p class="text-muted small mt-2">提示：若需精準位置，我們建議把上方地圖的查詢字串替換為完整地址或 Google Maps 的分享連結。</p>
            </div>

            <div class="info-box mb-4">
              <h4 class="mb-3">營業時間</h4>
              <table class="table table-borderless mb-0">
                <tbody>
                  <tr>
                    <td class="text-muted" style="width:140px;"><strong>週一 — 週五</strong></td>
                    <td>09:00 — 21:30</td>
                  </tr>
                  <tr>
                    <td class="text-muted"><strong>週六</strong></td>
                    <td>09:30 — 18:00</td>
                  </tr>
                  <tr>
                    <td class="text-muted"><strong>週日 / 國定假日</strong></td>
                    <td>依活動安排或預約開放，請事先聯繫</td>
                  </tr>
                </tbody>
              </table>
              <p class="text-muted small mt-2">若需場地加時或特殊時段使用，請至少於 3 日前與我們聯繫。</p>
            </div>

            <div class="info-box">
              <h4 class="mb-3">聯絡方式</h4>
              <p class="mb-1"><i class="fas fa-phone me-2"></i>(02) 1234-5678</p>
              <p class="mb-0"><i class="fas fa-envelope me-2"></i>service@spacehub.com</p>
            </div>

          </div>
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
