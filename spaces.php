<!-- 空間清單頁面：延續首頁樣式與結構 -->
<!DOCTYPE html>
<html lang="zh-Hant">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>空間清單 | 思辨空間</title>
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
    .navbar-brand, .navbar-nav .nav-link {
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
    .category-label {
      font-size: 1.25rem;
      font-weight: bold;
      color: var(--primary-color);
      margin-bottom: 1rem;
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
    <img src="https://images.pexels.com/photos/3184292/pexels-photo-3184292.jpeg?auto=compress&cs=tinysrgb&fit=crop&w=1200&h=400" alt="空間清單橫幅" class="w-100" style="height: 267px; object-fit: cover; filter: brightness(90%);">
  </section>

  <!-- 空間列表 with Tabs -->
  <section class="py-5">
    <div class="container">
      <h1 class="text-center mb-5" style="color: var(--primary-color);">可預約空間清單</h1>

      <!-- Tabs -->
      <ul class="nav nav-tabs mb-4" id="spaceTab" role="tablist">
        <li class="nav-item" role="presentation">
          <button class="nav-link active" id="tab-taipei" data-bs-toggle="tab" data-bs-target="#taipei" type="button">桃園館</button>
        </li>
        <li class="nav-item" role="presentation">
          <button class="nav-link" id="tab-zhongli" data-bs-toggle="tab" data-bs-target="#zhongli" type="button">中壢館</button>
        </li>
      </ul>

      <div class="tab-content">
        <!-- 桃園館 -->
        <div class="tab-pane fade show active" id="taipei">
          <div class="row row-cols-1 row-cols-md-3 g-4">
            <div class="col">
              <div class="card h-100 shadow-sm position-relative">
                <img src="https://images.pexels.com/photos/1595385/pexels-photo-1595385.jpeg?auto=compress&cs=tinysrgb&fit=crop&w=800&h=500" class="card-img-top" alt="空間圖片">
                <div class="card-body">
                  <h5 class="card-title">創意工作坊A廳</h5>
                  <p class="card-text text-muted">可容納20人，附設投影設備與白板。</p>
                </div>
                <div class="card-footer text-end bg-white border-top-0">
                  <a href="space.html" class="btn btn-primary btn-sm">查看詳情</a>
                </div>
                <a href="space.html" class="stretched-link" aria-label="查看 創意工作坊A廳 詳情"></a>
              </div>
            </div>
            <div class="col">
              <div class="card h-100 shadow-sm position-relative">
                <img src="https://images.pexels.com/photos/1595385/pexels-photo-1595385.jpeg?auto=compress&cs=tinysrgb&fit=crop&w=800&h=500" class="card-img-top" alt="空間圖片">
                <div class="card-body">
                  <h5 class="card-title">創意工作坊A廳</h5>
                  <p class="card-text text-muted">可容納20人，附設投影設備與白板。</p>
                </div>
                <div class="card-footer text-end bg-white border-top-0">
                  <a href="space.html" class="btn btn-primary btn-sm">查看詳情</a>
                </div>
                <a href="space.html" class="stretched-link" aria-label="查看 創意工作坊A廳 詳情"></a>
              </div>
            </div>
            <div class="col">
              <div class="card h-100 shadow-sm position-relative">
                <img src="https://images.pexels.com/photos/1595385/pexels-photo-1595385.jpeg?auto=compress&cs=tinysrgb&fit=crop&w=800&h=500" class="card-img-top" alt="空間圖片">
                <div class="card-body">
                  <h5 class="card-title">創意工作坊A廳</h5>
                  <p class="card-text text-muted">可容納20人，附設投影設備與白板。</p>
                </div>
                <div class="card-footer text-end bg-white border-top-0">
                  <a href="space.html" class="btn btn-primary btn-sm">查看詳情</a>
                </div>
                <a href="space.html" class="stretched-link" aria-label="查看 創意工作坊A廳 詳情"></a>
              </div>
            </div>
            <div class="col">
              <div class="card h-100 shadow-sm position-relative">
                <img src="https://images.pexels.com/photos/1595385/pexels-photo-1595385.jpeg?auto=compress&cs=tinysrgb&fit=crop&w=800&h=500" class="card-img-top" alt="空間圖片">
                <div class="card-body">
                  <h5 class="card-title">創意工作坊A廳</h5>
                  <p class="card-text text-muted">可容納20人，附設投影設備與白板。</p>
                </div>
                <div class="card-footer text-end bg-white border-top-0">
                  <a href="space.html" class="btn btn-primary btn-sm">查看詳情</a>
                </div>
                <a href="space.html" class="stretched-link" aria-label="查看 創意工作坊A廳 詳情"></a>
              </div>
            </div>
          </div>
        </div>

        <!-- 中壢館 -->
        <div class="tab-pane fade" id="zhongli">
          <div class="row row-cols-1 row-cols-md-3 g-4">
            <div class="col">
              <div class="card h-100 shadow-sm position-relative">
                <img src="https://images.pexels.com/photos/380768/pexels-photo-380768.jpeg?auto=compress&cs=tinysrgb&fit=crop&w=800&h=500" class="card-img-top" alt="空間圖片">
                <div class="card-body">
                  <h5 class="card-title">會議室B</h5>
                  <p class="card-text text-muted">現代風格空間，適合會議或小型講座。</p>
                </div>
                <div class="card-footer text-end bg-white border-top-0">
                  <a href="space.html" class="btn btn-primary btn-sm">查看詳情</a>
                </div>
                <a href="space.html" class="stretched-link" aria-label="查看 會議室B 詳情"></a>
              </div>
            </div>
          </div>
        </div>
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
