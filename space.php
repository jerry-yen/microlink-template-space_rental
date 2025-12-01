<!-- 空間詳細頁面：延續首頁樣式與結構 -->
<!DOCTYPE html>
<html lang="zh-Hant">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>創意工作坊A廳 | 思辨空間</title>
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

    footer {
      background-color: var(--navbar-bg);
      color: var(--navbar-text);
    }

    .banner {
      height: 267px;
      object-fit: cover;
      filter: brightness(90%);
    }

    .calendar-container {
      background-color: #fff;
      padding: 2rem;
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    iframe {
      border: 0;
      width: 100%;
      height: 600px;
    }

    .contact-box {
      background-color: #ffffff;
      padding: 1.5rem;
      border-radius: 10px;
      border-left: 5px solid var(--primary-color);
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.05);
    }

    .contact-box p {
      font-size: 1.1rem;
      margin-bottom: 0.5rem;
    }

    .contact-box strong {
      display: block;
      font-size: 1.2rem;
      margin-bottom: 0.5rem;
      color: var(--primary-color);
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
    <img
      src="https://images.pexels.com/photos/1595385/pexels-photo-1595385.jpeg?auto=compress&cs=tinysrgb&fit=crop&w=1200&h=400"
      class="w-100 banner" alt="空間橫幅">
  </section>

  <!-- 價目與容量摘要：已移至下方「設備圖片」區塊以便整合頁面內容 -->

  <!-- 空間詳細內容 -->
  <section class="py-5">
    <div class="container">
      <h1 class="mb-4" style="color: var(--primary-color);">創意工作坊A廳</h1>
      <p class="lead">位於台北館的創意工作坊A廳，空間寬敞舒適，適合小型工作坊、會議與課程進行。</p>

      <div class="row mb-4">
        <div class="col-md-6">
          <h5>空間資訊</h5>
          <ul class="list-group list-group-flush">
            <li class="list-group-item">容納人數：20人</li>
            <li class="list-group-item">設備：投影機、白板、Wi-Fi、定期清潔</li>
            <li class="list-group-item">地點：台北市大安區信義路</li>
            <li class="list-group-item">價格：NT$800/小時</li>
            <li class="list-group-item">
              <strong>使用規範：</strong>
              <ul class="mt-2">
                <li>請於使用結束後歸還原狀。</li>
                <li>禁止吸菸與飲酒。</li>
                <li>如需延長使用時間，請提前聯絡管理員。</li>
                <li>空間僅供預約者使用，不得轉租。</li>
              </ul>
            </li>
          </ul>
        </div>
        <div class="col-md-6">
          <h5>設備圖片</h5>
          <img
            src="https://images.pexels.com/photos/1181396/pexels-photo-1181396.jpeg?auto=compress&cs=tinysrgb&fit=crop&w=800&h=500"
            class="img-fluid rounded" alt="設備圖片">
        </div>

        <!-- 價目與容納（整合於設備圖片下方） -->
        <div class="col-12 mt-4">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title" style="color: var(--primary-color);">價目與容納</h5>
              <div class="row">
                <div class="col-md-6">
                  <ul class="list-unstyled mb-0">
                    <li><strong>基本租金：</strong>NT$800 / 小時（視空間而定，詳見完整價目表）</li>
                    <li><strong>最小預約時段：</strong>1 小時</li>
                    <li><strong>可容納人數：</strong>4 - 20 人（依空間規格）</li>
                    <li><strong>押金與清潔：</strong>視情況收取押金，需保持場地清潔</li>
                  </ul>
                </div>
                <div class="col-md-6">
                  <p class="text-muted mb-2">常用租借設備：投影機、白板、桌椅、麥克風/音響、視訊鏡頭等。詳細收費請參考「價目表」頁面。</p>
                </div>
              </div>
            </div>
          </div>
        </div>


      </div>

      <!-- 聯絡資訊 -->
      <div class="contact-box mb-5">
        <strong>想要預訂這個空間嗎？歡迎與我們聯絡！</strong>
        <p><i class="fas fa-envelope me-2"></i>service@spacehub.com</p>
        <p><i class="fas fa-phone me-2"></i>(02) 1234-5678</p>
      </div>

      <!-- 行事曆區塊 -->
      <div class="calendar-container">
        <h5 class="mb-3">空間使用行事曆</h5>
        <iframe
          src="https://calendar.google.com/calendar/embed?src=your-calendar-id%40group.calendar.google.com&ctz=Asia%2FTaipei"
          style="border: 0" frameborder="0" scrolling="no"></iframe>
        <p class="text-muted mt-2">以上行事曆顯示此空間的預約狀況，點選事件可查看詳細資訊。</p>
      </div>

    </div>
  </section>

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