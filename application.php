<!DOCTYPE html>
<html lang="zh-Hant">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>申請表 | 思辨空間</title>
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
    body { font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; background-color: var(--bg-light); color: var(--text-dark); }
    .navbar { background-color: var(--navbar-bg); }
    .navbar-brand, .navbar-nav .nav-link { color: var(--navbar-text) !important; font-weight: 500; }
    .navbar-nav .nav-link:hover { color: var(--accent-color) !important; }
    footer { background-color: var(--navbar-bg); color: var(--navbar-text); }
    .form-section { padding-top: 3.5rem; padding-bottom: 3.5rem; }
    .card { border-radius: 12px; box-shadow: 0 6px 24px rgba(16,24,40,0.06); }
  </style>
</head>
<body class="d-flex flex-column min-vh-100">
  <!-- Navbar -->
  <?php include_once 'include/nav.php'; ?>

  <!-- Banner -->
  <section>
    <img src="https://images.pexels.com/photos/1181395/pexels-photo-1181395.jpeg?auto=compress&cs=tinysrgb&fit=crop&w=1200&h=400" alt="申請表橫幅" class="w-100" style="height: 267px; object-fit: cover; filter: brightness(90%);">
  </section>

  <!-- Form -->
  <section class="form-section">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-9">
          <div class="card p-4">
            <h2 class="mb-3" style="color: var(--primary-color);">思辨空間 借用申請表</h2>
            <p class="text-muted">請如實填寫下列資料，標示「*」者為必填欄位。提交後我們會透過你提供的聯絡方式與您確認。</p>

            <form id="applicationForm" novalidate>
              <div class="row g-3">
                <div class="col-md-6">
                  <label class="form-label">1. 公司名稱</label>
                  <input type="text" class="form-control" name="company" placeholder="若無可留白">
                </div>

                <div class="col-md-6">
                  <label class="form-label">2. 收據抬頭</label>
                  <input type="text" class="form-control" name="receipt_title" placeholder="例如：公司或個人姓名">
                </div>

                <div class="col-md-6">
                  <label class="form-label">3. 統一編號</label>
                  <input type="text" class="form-control" name="tax_id" placeholder="若需開立發票/收據請填寫">
                </div>

                <div class="col-md-6">
                  <label class="form-label">4. 收據地址</label>
                  <input type="text" class="form-control" name="receipt_address" placeholder="收據郵寄地址或公司地址">
                </div>

                <div class="col-md-6">
                  <label class="form-label">5. 租借人姓名 <span class="text-danger">*</span></label>
                  <input type="text" class="form-control" name="applicant_name" required placeholder="請填寫聯絡人姓名">
                  <div class="invalid-feedback">請填寫租借人姓名。</div>
                </div>

                <div class="col-md-6">
                  <label class="form-label">6. LINE 名稱（以利人員核對資料） <span class="text-danger">*</span></label>
                  <input type="text" class="form-control" name="line_id" required placeholder="例如：@username 或 顯示名稱">
                  <div class="invalid-feedback">請填寫 LINE 名稱以利聯絡。</div>
                </div>

                <div class="col-md-6">
                  <label class="form-label">7. 聯繫電話 <span class="text-danger">*</span></label>
                  <input type="tel" pattern="[0-9\-\s()+]{7,20}" class="form-control" name="phone" required placeholder="例如：02-1234-5678 或 0912-345-678">
                  <div class="invalid-feedback">請填寫有效聯絡電話。</div>
                </div>

                <div class="col-md-6">
                  <label class="form-label">8. 電子信箱 <span class="text-danger">*</span></label>
                  <input type="email" class="form-control" name="email" required placeholder="example@domain.com">
                  <div class="invalid-feedback">請填寫有效的電子信箱。</div>
                </div>

                <div class="col-md-6">
                  <label class="form-label">9. 租借日期 <span class="text-danger">*</span></label>
                  <input type="date" class="form-control" name="rental_date" required>
                  <div class="invalid-feedback">請選擇租借日期。</div>
                </div>

                <div class="col-md-6">
                  <label class="form-label">10. 欲租借空間 <span class="text-danger">*</span></label>
                  <select class="form-select" name="space_choice" required>
                    <option value="">請選擇欲租借空間</option>
                    <option>多功能教室</option>
                    <option>會議室</option>
                    <option>團體室</option>
                    <option>晨曦會談室</option>
                    <option>和煦會談室</option>
                    <option>源泉會談室</option>
                    <option>遊戲室</option>
                  </select>
                  <div class="invalid-feedback">請選擇欲租借的空間。</div>
                </div>

                <div class="col-12">
                  <label class="form-label">備註（活動用途 / 參與人數 / 其他需求）</label>
                  <textarea class="form-control" name="notes" rows="3" placeholder="選填：可註明活動用途、預估人數、設備需求等"></textarea>
                </div>

                <div class="col-12">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="agree" id="agreeCheck" required>
                    <label class="form-check-label" for="agreeCheck">我已閱讀並同意資料提供與使用規範（必填）</label>
                    <div class="invalid-feedback">請勾選同意才能提交表單。</div>
                  </div>
                </div>

                <div class="col-12 text-end">
                  <button type="submit" class="btn btn-primary">提交申請</button>
                </div>
              </div>
            </form>

            <div id="submitResult" class="mt-3" style="display:none;"></div>

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
  <script>
    // Bootstrap 自訂驗證（表單提交前檢查）
    (function () {
      'use strict'
      const form = document.getElementById('applicationForm')
      form.addEventListener('submit', function (event) {
        if (!form.checkValidity()) {
          event.preventDefault()
          event.stopPropagation()
        } else {
          // 模擬送出結果（實際應該導向後端 API）
          event.preventDefault()
          const result = document.getElementById('submitResult')
          result.style.display = 'block'
          result.className = 'alert alert-success'
          result.innerText = '已收到您的申請，我們會儘快以您提供的聯絡資訊與您確認。'
          form.reset()
          form.classList.remove('was-validated')
        }
        form.classList.add('was-validated')
      }, false)
    })()
  </script>
</body>
</html>
