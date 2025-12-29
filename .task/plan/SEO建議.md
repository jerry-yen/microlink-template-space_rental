# 前端頁面 SEO 分析與優化建議報告

本報告針對 `microlink-template-space-rental` 專案中的主要前端頁面進行了 SEO 分析。以下是詳細的分析結果與優化建議。

## 1. 整體問題 (Global Issues)

所有頁面普遍存在以下 SEO 缺失，建議統一處理：

### 1.1 缺少 Meta 標籤
- **Meta Description**: 目前所有頁面皆未設定 `description`，這直接影響搜尋引擎結果頁 (SERP) 的摘要顯示。
- **Meta Keywords**: 雖然現代 SEO 權重較低，但針對特定領域關鍵字仍有輔助作用。
- **Open Graph (OG)**: 缺少 FB/Line/社群分享所需的 `og:title`, `og:description`, `og:image`, `og:url` 等標籤，導致分享預覽無法正確顯示。

### 1.2 缺少標準網址 (Canonical URL)
- 未設定 `rel="canonical"`，若網址有參數 (如 `?date=...`) 可能造成內容重複問題。

### 1.3 缺少結構化資料 (Structured Data)
- 未使用 JSON-LD 標記，無法讓搜尋引擎更理解內容（如：組織資訊、麵包屑、產品/空間資訊、FAQ）。

### 1.4 程式碼重複 (Code Duplication)
- `<head>` 區塊在每個 PHP 檔案中重複，維護不易。建議提取為獨立的 `include/head.php`。

---

## 2. 單頁面分析細節

### 1. [index.php] 首頁
- **標題**: 使用 `$setting->title`，建議可強化為「品牌名稱 | 核心價值/Slogan」。
- **H標籤**:
  - **缺失 H1**: 頁面無 `<h1>` 標籤。建議將主要 Banner 文字或「思辨空間簡介」提升為 `H1`。
- **圖片**: 大部分圖片有 `alt` 屬性，良好。但動態載入的 URL 邏輯需確認一致性。

### 2. [about.php] 關於我們
- **標題**: 良好 (`關於我們 | ...`)。
- **H標籤**: 有 `<h1>` (關於我們)，結構尚可。
- **內容**: 使用 `nl2br` 輸出，建議確保後台輸入的內容包含適當的段落標籤 `<p>` 以利語意分析。
- **結構化資料**: 建議加入 `Organization` Schema。

### 3. [spaces.php] 空間清單
- **標題**: 良好。
- **H標籤**: 有 `<h1>` (可預約空間清單)。
- **圖片**: 第 163 行圖片路徑未串接 `$domain_url` (與首頁邏輯不一致)，可能導致圖片破圖，嚴重影響 SEO。
- **結構化資料**: 建議加入 `ItemList` 或 `CollectionPage` Schema。

### 4. [space.php] 空間詳情
- **標題**: 良好 (`$space->title | ...`).
- **H標籤**: 有 `<h1>` (`$space->title`)。
- **圖片**: 第 195 行圖片路徑寫法 `$domain_url . '/' . ...` 多一個斜線，可能導致路徑錯誤。
- **結構化資料**: 強烈建議加入 `Product` 或 `EventVenue` Schema，包含價格、地點、容納人數等資訊。

### 5. [rental.php] 租借辦法
- **標題**: 良好。
- **H標籤**: **缺失 H1**。目前的標題「租借辦法」是 `<h2>`，應改為 `<h1>`。
- **結構化資料**: 可加入 `HowTo` Schema 標記申請流程。

### 6. [application.php] 借用申請
- **標題**: 良好。
- **H標籤**: **缺失 H1**。目前的標題「思辨空間 借用申請表」是 `<h2>`，應改為 `<h1>`。
- **Meta**: 此頁為功能性頁面，但仍建議加入 Meta Description 說明申請須知。

### 7. [faq.php] 常見問題
- **標題**: 良好。
- **H標籤**: 有 `<h1>`。
- **結構化資料**: 強烈建議加入 `FAQPage` Schema，這對搜尋結果的「複合式搜尋摘要」非常有幫助。

### 8. [pricing.php] 價目表
- **標題**: 良好。
- **H標籤**: 有 `<h1>`。
- **結構化資料**: 建議加入 `PriceList` 或 `Product` Schema。

### 9. [transport.php] 交通資訊
- **標題**: 良好。
- **H標籤**: 有 `<h1>`。
- **結構化資料**: 建議加入 `LocalBusiness` 或 `Place` Schema，標記地圖與地址。

---

## 3. 優化執行計畫 (Action Plan)

建議採取以下步驟進行優化：

1.  **重構 Header**: 建立 `include/head.php`，統一管理 Meta Tags、CSS 引用與 SEO 標籤。
2.  **修正 H1 標籤**: 針對 `index.php`, `rental.php`, `application.php` 修正標題層級。
3.  **修復圖片路徑**: 修正 `spaces.php` 與 `space.php` 中的圖片路徑拼接錯誤。
4.  **注入動態 Meta**: 在各頁面頂端設定變數 `$page_title`, `$page_desc`，並傳遞給 `head.php`。
5.  **加入結構化資料**: 在各頁面 footer 前加入對應的 JSON-LD script (這部分可能需要後端配合輸出資料，或先以前端變數組合)。
