<!DOCTYPE html>
<html lang="vi">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>Liên Hoa Chi – Trà Thảo Mộc Thiên Nhiên</title>
<meta name="description" content="Trà thảo mộc Liên Hoa Chi – thuần tự nhiên, tốt cho sức khỏe, giao nhanh toàn quốc." />
<script src="https://cdn.tailwindcss.com"></script>
<script>
tailwind.config = {
  theme: {
    extend: {
      colors: {
        forest: { 50:'#f0f7f0', 100:'#d9edda', 200:'#b4d9b6', 300:'#82be85', 400:'#52a058',
                  500:'#3a7d40', 600:'#2e6433', 700:'#245129', 800:'#1c4020', 900:'#122918' },
        earth:  { 50:'#faf6f0', 100:'#f0e6d6', 200:'#e0ccae', 300:'#caaa7e', 400:'#b58a55',
                  500:'#a07040', 600:'#855a30', 700:'#6a4524', 800:'#513419', 900:'#39230f' },
        cream:  '#faf9f6',
      },
      fontFamily: {
        sans: ['"Be Vietnam Pro"', 'system-ui', 'sans-serif'],
        serif: ['"Playfair Display"', 'Georgia', 'serif'],
      },
    }
  }
}
</script>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link href="https://fonts.googleapis.com/css2?family=Be+Vietnam+Pro:wght@400;500;600&family=Playfair+Display:ital,wght@0,500;0,700;1,500&display=swap" rel="stylesheet">
<style>
  * { scroll-behavior: smooth; }
  .hero-leaf { background: radial-gradient(ellipse 60% 80% at 70% 40%, rgba(58,125,64,.12) 0%, transparent 70%); }
  .product-card:hover .buy-btn { opacity: 1; transform: translateY(0); }
  .buy-btn { opacity: 0; transform: translateY(8px); transition: all .25s ease; }
  .product-card { transition: box-shadow .25s ease; }
  .product-card:hover { box-shadow: 0 8px 32px rgba(36,81,41,.13); }
  .chatbot-panel { transition: all .3s cubic-bezier(.4,0,.2,1); }
  @keyframes dot { 0%,80%,100%{opacity:.2} 40%{opacity:1} }
  .dot1{animation:dot 1.4s infinite .0s} .dot2{animation:dot 1.4s infinite .2s} .dot3{animation:dot 1.4s infinite .4s}
  @keyframes fadeUp { from{opacity:0;transform:translateY(16px)} to{opacity:1;transform:none} }
  .fade-up { animation: fadeUp .5s ease both; }
  @media (max-width: 768px) { .hero-grid { flex-direction: column; } }
</style>
</head>
<body class="font-sans bg-cream text-forest-900 antialiased">

<!-- ═══════════════════════════════════════════════════════════ -->
<!-- HEADER / NAV                                               -->
<!-- ═══════════════════════════════════════════════════════════ -->
<header class="sticky top-0 z-50 bg-cream/90 backdrop-blur-sm border-b border-forest-100">
  <div class="max-w-6xl mx-auto px-4 h-16 flex items-center justify-between gap-4">

    <!-- Logo -->
    <a href="" class="flex items-center gap-2 shrink-0" aria-label="Liên Hoa Chi">
      <img src="images/logo.jpg" alt="Liên Hoa Chi Logo" class="w-10 h-10 object-contain"/>
      <span class="font-serif font-700 text-forest-800 text-xl leading-tight">Liên Hoa Chi</span>
    </a>

    <!-- Nav Desktop -->
    <nav class="hidden md:flex items-center gap-6 text-sm font-medium text-forest-700">
      <a href="#products" class="hover:text-forest-500 transition-colors">Sản phẩm</a>
      <a href="#benefits" class="hover:text-forest-500 transition-colors">Công dụng</a>
      <a href="#order" class="hover:text-forest-500 transition-colors">Đặt hàng</a>
      <a href="#contact" class="hover:text-forest-500 transition-colors">Liên hệ</a>
      <a href="/cau-chuyen-tra-la-sen-hong-sam" class="hover:text-forest-500 transition-colors">Câu chuyện</a>
      <a href="/quy-trinh-san-xuat" class="hover:text-forest-500 transition-colors">Quy trình</a>
    </nav>

    <!-- CTA + Cart -->
    <div class="flex items-center gap-2">
      <button onclick="scrollToOrder()"
        class="hidden sm:inline-flex items-center gap-1.5 bg-forest-600 hover:bg-forest-700 text-white text-sm font-medium px-4 py-2 rounded-lg transition-colors">
        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.3 6M17 13l2.3 6M9 19a1 1 0 11-2 0 1 1 0 012 0zm10 0a1 1 0 11-2 0 1 1 0 012 0z"/></svg>
        Đặt ngay
      </button>
      <!-- Mobile menu btn -->
      <button id="mobile-menu-btn" class="md:hidden p-2 rounded-lg text-forest-700 hover:bg-forest-50"
        onclick="document.getElementById('mobile-menu').classList.toggle('hidden')">
        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/></svg>
      </button>
    </div>
  </div>

  <!-- Mobile menu -->
  <div id="mobile-menu" class="hidden md:hidden border-t border-forest-100 bg-cream px-4 py-3 space-y-2">
    <a href="#products" class="block py-2 text-sm font-medium text-forest-700">Sản phẩm</a>
    <a href="#benefits" class="block py-2 text-sm font-medium text-forest-700">Công dụng</a>
    <a href="#order" class="block py-2 text-sm font-medium text-forest-700">Đặt hàng</a>
    <a href="#contact" class="block py-2 text-sm font-medium text-forest-700">Liên hệ</a>
    <a href="/cau-chuyen-tra-la-sen-hong-sam" class="block py-2 text-sm font-medium text-forest-700">Câu chuyện</a>
    <a href="/quy-trinh-san-xuat" class="block py-2 text-sm font-medium text-forest-700">Quy trình</a>
    <button onclick="scrollToOrder()"
      class="w-full bg-forest-600 text-white text-sm font-medium py-2.5 rounded-lg mt-1">Đặt hàng ngay</button>
  </div>
</header>


<!-- ═══════════════════════════════════════════════════════════ -->
<!-- HERO SECTION                                               -->
<!-- ═══════════════════════════════════════════════════════════ -->
<section class="hero-leaf relative overflow-hidden py-16 md:py-24">
  <div class="max-w-6xl mx-auto px-4 flex flex-col md:flex-row items-center gap-12">

    <!-- Text -->
    <div class="flex-1 fade-up">
      <p class="text-earth-500 text-sm font-medium tracking-wide mb-3">Thảo mộc Phú Thọ – Thuần tự nhiên</p>
      <h1 class="font-serif text-4xl md:text-5xl lg:text-6xl text-forest-800 leading-[1.1] mb-5">
        <span class="block">Trà lành</span>
        <em class="not-italic text-forest-500 block mt-2 md:mt-3">từ đất mẹ</em>
      </h1>
      <p class="text-forest-700 text-lg leading-relaxed max-w-md mb-8">
        Mỗi túi trà là một lá thư từ thiên nhiên — sấy lạnh giữ nguyên dưỡng chất, pha trong ba mươi giây, uống cả ngày.
      </p>
      <div class="flex flex-wrap gap-3">
        <button onclick="scrollToOrder()"
          class="bg-forest-600 hover:bg-forest-700 text-white font-medium px-6 py-3 rounded-xl transition-colors text-sm shadow-sm">
          Đặt hàng – nhận ngay hôm nay
        </button>
        <a href="#products"
          class="border border-forest-300 hover:border-forest-500 text-forest-700 font-medium px-6 py-3 rounded-xl transition-colors text-sm">
          Xem sản phẩm
        </a>
      </div>

      <!-- Stats row -->
      <div class="flex flex-wrap gap-6 mt-10 pt-8 border-t border-forest-100">
        <div>
          <p class="text-2xl font-serif font-bold text-forest-700">12+</p>
          <p class="text-xs text-forest-500 mt-0.5">Loại trà thảo mộc</p>
        </div>
        <div>
          <p class="text-2xl font-serif font-bold text-forest-700">20k+</p>
          <p class="text-xs text-forest-500 mt-0.5">Khách hàng tin dùng</p>
        </div>
        <div>
          <p class="text-2xl font-serif font-bold text-forest-700">OCOP</p>
          <p class="text-xs text-forest-500 mt-0.5">Chứng nhận 4 sao</p>
        </div>
      </div>
    </div>

    <!-- Hero visual – slideshow ảnh sản phẩm thật -->
    <div class="flex-1 flex justify-center fade-up" style="animation-delay:.15s">
      <div class="relative w-full max-w-sm md:max-w-md">
        <!-- Slideshow -->
        <div class="relative rounded-3xl overflow-hidden shadow-xl aspect-square bg-forest-100">
          <div id="hero-slides" class="flex transition-transform duration-700 ease-in-out h-full">
            <img src="https://sun9-75.userapi.com/4hzOfAMwHzYgejNAXNkp6b19KqjXMucKRpc1SQ/vdqd1GBBd5w.jpg"
              alt="Sản phẩm Liên Hoa Chi"
              class="w-full h-full object-cover shrink-0" loading="eager"/>
            <img src="https://sun9-87.userapi.com/8AsjtCoIqS0SGqjVg7BpE_i4PmoryBZCdz5GAQ/KoS26yuZ65c.jpg"
              alt="Sản phẩm Liên Hoa Chi"
              class="w-full h-full object-cover shrink-0" loading="lazy"/>
            <img src="https://sun9-22.userapi.com/_knSc5nELldLvhL9deEuJhuTvw16mGLFwHvMUg/8LPsDvIjNDs.jpg"
              alt="Sản phẩm Liên Hoa Chi"
              class="w-full h-full object-cover shrink-0" loading="lazy"/>
            <img src="https://sun9-59.userapi.com/AFL4P0SqRcOqrcSLjqhIdUHVdzR25CuHDm2YUw/F_Pq71drtHU.jpg"
              alt="Sản phẩm Liên Hoa Chi"
              class="w-full h-full object-cover shrink-0" loading="lazy"/>
            <img src="https://sun9-79.userapi.com/MjHVnauy9HovWyziIxFSfMwZkAWD4ijJpg8Krg/JQHaRWW9KeA.jpg"
              alt="Sản phẩm Liên Hoa Chi"
              class="w-full h-full object-cover shrink-0" loading="lazy"/>
          </div>
          <!-- Dots -->
          <div class="absolute bottom-3 left-1/2 -translate-x-1/2 flex gap-1.5" id="hero-dots"></div>
          <!-- Prev / Next -->
          <button onclick="heroSlide(-1)"
            class="absolute left-2 top-1/2 -translate-y-1/2 w-8 h-8 bg-white/70 hover:bg-white rounded-full flex items-center justify-center text-forest-700 shadow transition-colors">
            ‹
          </button>
          <button onclick="heroSlide(1)"
            class="absolute right-2 top-1/2 -translate-y-1/2 w-8 h-8 bg-white/70 hover:bg-white rounded-full flex items-center justify-center text-forest-700 shadow transition-colors">
            ›
          </button>
        </div>
        <!-- Badge OCOP -->
        <div class="absolute -top-2 -right-2 bg-earth-500 text-white text-xs font-semibold px-3 py-1.5 rounded-full shadow-lg">
          OCOP ★★★★
        </div>
        <!-- Thumbnail strip -->
        <div class="flex gap-2 mt-3 overflow-x-auto pb-1 scrollbar-hide">
          <img src="https://i.imgur.com/msucYbKl.jpg" alt="Trà Cần Tây"
            onclick="goHeroSlide(0)"
            class="w-14 h-14 object-cover rounded-xl border-2 border-forest-300 cursor-pointer hover:border-forest-600 transition-colors shrink-0"/>
          <img src="https://sun9-25.userapi.com/5wtg3tvgYjzaUSSR_NKudUjY_eBkV3H1x9ZTKA/oFRcJNmr0sk.jpg" alt="Trà Diếp Cá"
            onclick="goHeroSlide(1)"
            class="w-14 h-14 object-cover rounded-xl border-2 border-transparent cursor-pointer hover:border-forest-600 transition-colors shrink-0"/>
          <img src="https://sun9-34.userapi.com/-eDPccDcrWMZ_4iRG_ucDJz6kwJh3Ee2twkVXg/A7gLceiPDuk.jpg" alt="Trà Cà Gai Leo"
            onclick="goHeroSlide(2)"
            class="w-14 h-14 object-cover rounded-xl border-2 border-transparent cursor-pointer hover:border-forest-600 transition-colors shrink-0"/>
          <img src="https://sun9-64.userapi.com/UhgQPqaB_KPtNlQUb2-VK52dZJPLLVZRBJzNFA/qrihtmTUGyA.jpg" alt="Trà Lá Ổi"
            onclick="goHeroSlide(3)"
            class="w-14 h-14 object-cover rounded-xl border-2 border-transparent cursor-pointer hover:border-forest-600 transition-colors shrink-0"/>
          <img src="https://sun9-26.userapi.com/UqmdPJasWIcp_eaMlU5hhwPA6AQCHEQhluzc8g/6OwkZV1jTWo.jpg" alt="Trà Rau Má"
            onclick="goHeroSlide(4)"
            class="w-14 h-14 object-cover rounded-xl border-2 border-transparent cursor-pointer hover:border-forest-600 transition-colors shrink-0"/>
        </div>
      </div>
    </div>
  </div>
</section>


<!-- ═══════════════════════════════════════════════════════════ -->
<!-- NOTIFICATION BAR – Free ship                               -->
<!-- ═══════════════════════════════════════════════════════════ -->
<div class="bg-forest-600 text-white text-center text-sm py-2.5 px-4 font-medium">
  🚚 Miễn phí vận chuyển cho đơn từ 200.000đ – Giao trong ngày tại Phú Thọ &amp; các tỉnh lân cận
</div>


<!-- ═══════════════════════════════════════════════════════════ -->
<!-- BENEFITS                                                   -->
<!-- ═══════════════════════════════════════════════════════════ -->
<section id="benefits" class="py-16 bg-forest-50">
  <div class="max-w-6xl mx-auto px-4">
    <h2 class="font-serif text-2xl md:text-3xl text-forest-800 text-center mb-10">Vì sao chọn trà Liên Hoa Chi?</h2>
    <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
      <!-- Benefit card -->
      <div class="bg-white rounded-2xl p-5 text-center border border-forest-100">
        <div class="w-12 h-12 mx-auto mb-3 bg-forest-100 rounded-xl flex items-center justify-center text-2xl">🌿</div>
        <p class="font-semibold text-forest-800 text-sm mb-1">Nguyên liệu sạch</p>
        <p class="text-xs text-forest-600 leading-relaxed">Thu hái từ vùng núi Phú Thọ, không chất bảo quản</p>
      </div>
      <div class="bg-white rounded-2xl p-5 text-center border border-forest-100">
        <div class="w-12 h-12 mx-auto mb-3 bg-forest-100 rounded-xl flex items-center justify-center text-2xl">❄️</div>
        <p class="font-semibold text-forest-800 text-sm mb-1">Sấy lạnh</p>
        <p class="text-xs text-forest-600 leading-relaxed">Giữ nguyên tinh chất, màu sắc và hương thơm tự nhiên</p>
      </div>
      <div class="bg-white rounded-2xl p-5 text-center border border-forest-100">
        <div class="w-12 h-12 mx-auto mb-3 bg-forest-100 rounded-xl flex items-center justify-center text-2xl">📋</div>
        <p class="font-semibold text-forest-800 text-sm mb-1">Có chứng nhận</p>
        <p class="text-xs text-forest-600 leading-relaxed">OCOP 4 sao, ATTP, đăng ký kinh doanh đầy đủ</p>
      </div>
      <div class="bg-white rounded-2xl p-5 text-center border border-forest-100">
        <div class="w-12 h-12 mx-auto mb-3 bg-forest-100 rounded-xl flex items-center justify-center text-2xl">🚀</div>
        <p class="font-semibold text-forest-800 text-sm mb-1">Giao nhanh</p>
        <p class="text-xs text-forest-600 leading-relaxed">Đặt trước 15h, giao trong ngày nội tỉnh Phú Thọ</p>
      </div>
    </div>
  </div>
</section>

<!-- ═══════════════════════════════════════════════════════════ -->
<!-- ABOUT LIÊN HOA CHI                                         -->
<!-- ═══════════════════════════════════════════════════════════ -->
<section id="about" class="py-16 bg-white">
  <div class="max-w-6xl mx-auto px-4">
    <div class="grid md:grid-cols-2 gap-10 items-center">
      <div>
        <p class="text-earth-500 text-sm font-medium tracking-wide mb-3">Về Liên Hoa Chi</p>
        <h2 class="font-serif text-2xl md:text-3xl text-forest-800 mb-4">HTX Sản Xuất &amp; Kinh Doanh Liên Hoa Chi</h2>
        <p class="text-forest-700 text-sm md:text-base leading-relaxed mb-4">
          HTX Sản Xuất và Kinh Doanh Liên Hoa Chi không chỉ đơn thuần là một doanh nghiệp hoạt động sản xuất và kinh doanh,
          mà còn gắn liền với những giá trị văn hóa lâu đời trên mảnh đất tổ Hùng Vương - Phú Thọ.
        </p>
        <p class="text-forest-700 text-sm md:text-base leading-relaxed mb-5">
          Được thành lập tại xã Tứ Xã, huyện Lâm Thao, tỉnh Phú Thọ, HTX Liên Hoa Chi mang trong mình truyền thống văn hóa
          lúa nước của người Việt, kết hợp cùng tinh thần đoàn kết, sáng tạo và tôn trọng môi trường để phát triển các sản phẩm
          trà thảo mộc an toàn, lành tính và bền vững cho cộng đồng.
        </p>
        <div class="flex flex-wrap gap-3">
          <a href="/cau-chuyen-tra-la-sen-hong-sam" target="_blank" rel="noopener noreferrer"
            class="inline-flex items-center bg-forest-600 hover:bg-forest-700 text-white font-medium px-5 py-2.5 rounded-xl transition-colors text-sm">
            Tìm hiểu thêm
          </a>
          <a href="#products"
            class="inline-flex items-center border border-forest-300 hover:border-forest-500 text-forest-700 font-medium px-5 py-2.5 rounded-xl transition-colors text-sm">
            Xem sản phẩm
          </a>
        </div>
      </div>

      <div class="space-y-4">
        <div class="grid grid-cols-2 gap-3">
          <button type="button" class="gallery-thumb block overflow-hidden rounded-2xl border border-forest-100 shadow-sm hover:shadow-md transition-shadow" data-image="https://img.gs1.gov.vn/view/cdn-service/data/VNPC_Image/20260303/1772526173418_95e057c4-8219-4fe4-adb3-fd491d96bf58.jpg">
            <img src="https://img.gs1.gov.vn/view/cdn-service/data/VNPC_Image/20260303/1772526173418_95e057c4-8219-4fe4-adb3-fd491d96bf58.jpg" alt="Chứng nhận OCOP Liên Hoa Chi 1" class="w-full h-40 object-contain bg-forest-50 hover:scale-[1.02] transition-transform duration-200" loading="lazy" />
          </button>
          <button type="button" class="gallery-thumb block overflow-hidden rounded-2xl border border-forest-100 shadow-sm hover:shadow-md transition-shadow" data-image="https://img.gs1.gov.vn/view/cdn-service/data/VNPC_Image/20260303/1772526521866_ad04e0cf-eb39-4f40-8f02-ef9703d1c171.jpg">
            <img src="https://img.gs1.gov.vn/view/cdn-service/data/VNPC_Image/20260303/1772526521866_ad04e0cf-eb39-4f40-8f02-ef9703d1c171.jpg" alt="Chứng nhận OCOP Liên Hoa Chi 2" class="w-full h-40 object-contain bg-forest-50 hover:scale-[1.02] transition-transform duration-200" loading="lazy" />
          </button>
          <button type="button" class="gallery-thumb block overflow-hidden rounded-2xl border border-forest-100 shadow-sm hover:shadow-md transition-shadow" data-image="https://img.gs1.gov.vn/view/cdn-service/data/VNPC_Image/20260303/1772526686758_cbc34011-8ed7-411f-a83e-fddcf03dddfd.jpg">
            <img src="https://img.gs1.gov.vn/view/cdn-service/data/VNPC_Image/20260303/1772526686758_cbc34011-8ed7-411f-a83e-fddcf03dddfd.jpg" alt="Chứng nhận OCOP Liên Hoa Chi 3" class="w-full h-40 object-contain bg-forest-50 hover:scale-[1.02] transition-transform duration-200" loading="lazy" />
          </button>
          <button type="button" class="gallery-thumb block overflow-hidden rounded-2xl border border-forest-100 shadow-sm hover:shadow-md transition-shadow" data-image="https://i.imgur.com/7sHyZBd.jpg">
            <img src="https://i.imgur.com/7sHyZBd.jpg" alt="Chứng nhận OCOP Liên Hoa Chi 4" class="w-full h-40 object-contain bg-forest-50 hover:scale-[1.02] transition-transform duration-200" loading="lazy" />
          </button>
        </div>
        <div class="bg-earth-500 text-white text-xs font-semibold px-3 py-2 rounded-full shadow-lg inline-flex">
          Chứng nhận OCOP &amp; chất lượng
        </div>
      </div>
    </div>
  </div>
</section>

<div id="image-lightbox" class="hidden fixed inset-0 z-[100] bg-black/85 backdrop-blur-sm items-center justify-center p-4">
  <div class="relative max-w-6xl w-full max-h-[92vh] flex items-center justify-center">
    <button type="button" id="close-lightbox" class="absolute -top-12 right-0 text-white text-3xl leading-none hover:text-forest-200 transition-colors" aria-label="Đóng ảnh">×</button>
    <img id="lightbox-image" src="" alt="Ảnh lớn Liên Hoa Chi" class="max-w-full max-h-[92vh] w-auto h-auto object-contain rounded-xl shadow-2xl bg-white/5" />
  </div>
</div>

<!-- ═══════════════════════════════════════════════════════════ -->
<!-- PRODUCTS                                                   -->
<!-- ═══════════════════════════════════════════════════════════ -->
<section id="products" class="py-16">
  <div class="max-w-6xl mx-auto px-4">
    <div class="flex items-end justify-between mb-8">
      <div>
        <h2 class="font-serif text-2xl md:text-3xl text-forest-800">Trà thảo mộc</h2>
        <p class="text-forest-600 text-sm mt-1">Mỗi loại được phối chế cho một mục đích sức khỏe cụ thể</p>
      </div>
      <a href="#" class="text-forest-500 text-sm font-medium hover:text-forest-700 transition-colors hidden sm:block">Xem tất cả →</a>
    </div>

    <!-- Product grid -->
    <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 gap-4">

      <!-- Product cards (5 products) -->
      <?php
      $products = [
        [
          'name'    => 'Trà Cần Tây',
          'tag'     => 'Giảm cân',
          'sold'    => 5780,
          'benefit' => 'Thải độc, cân bằng nội tiết, ngăn mỡ máu',
          'img'     => 'https://i.imgur.com/msucYbKm.jpg',
          'url'     => '/san-pham/tra-can-tay-sp838826.html',
        ],
        [
          'name'    => 'Trà Diếp Cá',
          'tag'     => 'Làm đẹp da',
          'sold'    => 5700,
          'benefit' => 'Tăng miễn dịch, đẹp da, chống lão hóa',
          'img'     => 'https://sun9-25.userapi.com/5wtg3tvgYjzaUSSR_NKudUjY_eBkV3H1x9ZTKA/oFRcJNmr0sk.jpg',
          'url'     => '/san-pham/tra-diep-ca-sp838805.html',
        ],
        [
          'name'    => 'Trà Cà Gai Leo',
          'tag'     => 'Bảo vệ gan',
          'sold'    => 4689,
          'benefit' => 'Hỗ trợ viêm gan B, hạ men gan, giải độc',
          'img'     => 'https://sun9-34.userapi.com/-eDPccDcrWMZ_4iRG_ucDJz6kwJh3Ee2twkVXg/A7gLceiPDuk.jpg',
          'url'     => '/san-pham/tra-ca-gai-leo-sp864856.html',
        ],
        [
          'name'    => 'Trà Lá Ổi',
          'tag'     => 'Tiêu hoá',
          'sold'    => 4670,
          'benefit' => 'Đào thải cholesterol, hỗ trợ tiêu hoá',
          'img'     => 'https://sun9-64.userapi.com/UhgQPqaB_KPtNlQUb2-VK52dZJPLLVZRBJzNFA/qrihtmTUGyA.jpg',
          'url'     => '/san-pham/tra-la-oi-sp863328.html',
        ],
        [
          'name'    => 'Trà Rau Má',
          'tag'     => 'Trí nhớ',
          'sold'    => 3500,
          'benefit' => 'Tăng cường trí nhớ, làm đẹp da, giải độc gan',
          'img'     => 'https://sun9-26.userapi.com/UqmdPJasWIcp_eaMlU5hhwPA6AQCHEQhluzc8g/6OwkZV1jTWo.jpg',
          'url'     => '/san-pham/tra-rau-ma-sp838819.html',
        ],
        [
          'name'    => 'Trà Tía Tô',
          'tag'     => 'Chống lão hoá',
          'sold'    => 1780,
          'benefit' => 'Phòng ngừa gout, chống lão hoá da, ngăn mụn',
          'img'     => 'https://i.imgur.com/JfSnjHbm.jpg',
          'url'     => '/san-pham/tra-tia-to-sp838827.html',
        ],
        [
          'name'    => 'Trà Hoa Đu Đủ',
          'tag'     => 'Huyết áp',
          'sold'    => 1780,
          'benefit' => 'Điều hoà huyết áp, thanh lọc cơ thể, tăng đề kháng',
          'img'     => 'https://sun9-59.userapi.com/Ib1AkFYVJvaW3TV8sbsMnNmt2w-uR4Jy7b7UtA/HI30akfCI4k.jpg',
          'url'     => '/san-pham/tra-hoa-du-du-duc-sp864852.html',
        ],
        [
          'name'    => 'Trà Thìa Canh',
          'tag'     => 'Tiểu đường',
          'sold'    => 895,
          'benefit' => 'Điều hoà đường huyết, ức chế hấp thu glucose',
          'img'     => 'https://sun9-17.userapi.com/5aDYSgsq_BUJ6lm-cDhtRSngrJBGP-k0nceLIw/UnVhf8Gn3og.jpg',
          'url'     => '/san-pham/tra-thia-canh-an-duong-sp864851.html',
        ],
        [
          'name'    => 'Trà Lá Sen Vàng',
          'tag'     => 'Ngủ ngon',
          'sold'    => 500,
          'benefit' => 'An thần, giảm mỡ máu, cải thiện tiêu hoá',
          'img'     => 'https://sun9-60.userapi.com/M2kRKWd-1ymWCgiI1L1aZn85aWf3ibmTFKEZ5A/O4txy2prO0c.jpg',
          'url'     => '/san-pham/tra-la-sen-hoa-vang-sp872738.html',
        ],
        [
          'name'    => 'Bình Vị Thảo Trà',
          'tag'     => 'Dạ dày',
          'sold'    => 100,
          'benefit' => 'Rau mương, nghệ vàng, lá khôi tía – hỗ trợ dạ dày',
          'img'     => 'https://sun9-12.userapi.com/Rv2Sj_wDeNp-Lh9gQSe3io6loMkmIioNTZdr8w/v7UZ7g-6Dmc.jpg',
          'url'     => '/san-pham/binh-vi-thao-tra-sp877346.html',
        ],
      ];
      ?>
      <?php foreach($products as $p): ?>
      <div class="product-card bg-white rounded-2xl border border-forest-100 overflow-hidden cursor-pointer group">
        <!-- Image area -->
        <div class="relative h-40 overflow-hidden bg-forest-50">
          <img
            src="<?= htmlspecialchars($p['img']) ?>"
            alt="<?= htmlspecialchars($p['name']) ?>"
            class="w-full h-full object-cover transition-transform duration-300 group-hover:scale-105"
            loading="lazy"
            onerror="this.onerror=null;this.src='https://via.placeholder.com/300x200/d9edda/2e6433?text=<?= urlencode($p['name']) ?>'"
          />
          <!-- Tag badge -->
          <span class="absolute top-2 left-2 text-[10px] bg-earth-500/90 text-white px-2 py-0.5 rounded-full font-medium backdrop-blur-sm">
            <?= htmlspecialchars($p['tag']) ?>
          </span>
          <!-- Quick buy btn -->
          <button onclick="openOrder('<?= addslashes(htmlspecialchars($p['name'])) ?>')"
            class="buy-btn absolute bottom-3 left-1/2 -translate-x-1/2 bg-forest-700/95 text-white text-xs font-medium px-4 py-1.5 rounded-lg whitespace-nowrap shadow-lg backdrop-blur-sm">
            🛒 Mua ngay
          </button>
        </div>
        <div class="p-3">
          <p class="font-semibold text-forest-800 text-sm leading-tight mb-0.5"><?= htmlspecialchars($p['name']) ?></p>
          <p class="text-[11px] text-forest-500 leading-relaxed mb-2 line-clamp-2"><?= htmlspecialchars($p['benefit']) ?></p>
          <div class="flex items-center justify-between">
            <span class="text-forest-700 font-bold text-sm">90.000đ</span>
            <span class="text-[10px] text-forest-400">Đã bán <?= number_format($p['sold']) ?></span>
          </div>
        </div>
      </div>
      <?php endforeach; ?>

    </div>
  </div>
</section>


<!-- ═══════════════════════════════════════════════════════════ -->
<!-- ORDER SECTION – QR 1 chạm                                 -->
<!-- ═══════════════════════════════════════════════════════════ -->
<section id="order" class="py-16 bg-forest-800 text-white">
  <div class="max-w-4xl mx-auto px-4">
    <div class="text-center mb-10">
      <h2 class="font-serif text-2xl md:text-3xl mb-3">Đặt hàng siêu nhanh</h2>
      <p class="text-forest-200 text-sm">Điền form → Xác nhận → Thanh toán QR → Xong. Không cần tạo tài khoản.</p>
    </div>

    <div class="grid md:grid-cols-2 gap-8 items-start">

      <!-- Quick order form -->
      <div class="bg-forest-700/50 backdrop-blur rounded-2xl p-6 border border-forest-600">
        <h3 class="font-semibold text-base mb-5 flex items-center gap-2">
          <span class="bg-earth-400 text-white w-6 h-6 rounded-full flex items-center justify-center text-xs font-bold">1</span>
          Thông tin đặt hàng
        </h3>
        <form id="quick-order-form" onsubmit="submitOrder(event)" class="space-y-3">
          <div>
            <label class="text-xs text-forest-200 block mb-1">Họ tên *</label>
            <input type="text" id="o-name" required placeholder="Nguyễn Văn A"
              class="w-full bg-forest-600/60 border border-forest-500 text-white placeholder-forest-400 rounded-lg px-3 py-2.5 text-sm focus:outline-none focus:border-forest-300 transition-colors"/>
          </div>
          <div>
            <label class="text-xs text-forest-200 block mb-1">Số điện thoại *</label>
            <input type="tel" id="o-phone" required placeholder="0912 345 678"
              class="w-full bg-forest-600/60 border border-forest-500 text-white placeholder-forest-400 rounded-lg px-3 py-2.5 text-sm focus:outline-none focus:border-forest-300 transition-colors"/>
          </div>
          <div>
            <label class="text-xs text-forest-200 block mb-1">Email *</label>
            <input type="email" id="o-email" required placeholder="example@gmail.com"
              class="w-full bg-forest-600/60 border border-forest-500 text-white placeholder-forest-400 rounded-lg px-3 py-2.5 text-sm focus:outline-none focus:border-forest-300 transition-colors"/>
          </div>
          <div class="grid grid-cols-1 sm:grid-cols-2 gap-3">
            <div>
              <label class="text-xs text-forest-200 block mb-1">Tỉnh/Thành phố *</label>
              <select id="o-province" required
                class="w-full bg-forest-600/60 border border-forest-500 text-white rounded-lg px-3 py-2.5 text-sm focus:outline-none focus:border-forest-300 transition-colors">
                <option value="">Chọn tỉnh</option>
                <option>Hà Nội</option>
                <option>Hồ Chí Minh</option>
                <option>Hải Phòng</option>
                <option>Đà Nẵng</option>
                <option>Cần Thơ</option>
                <option>Huế</option>
                <option>An Giang</option>
                <option>Bắc Ninh</option>
                <option>Cao Bằng</option>
                <option>Cà Mau</option>
                <option>Gia Lai</option>
                <option>Hà Tĩnh</option>
                <option>Hưng Yên</option>
                <option>Khánh Hòa</option>
                <option>Lai Châu</option>
                <option>Lào Cai</option>
                <option>Lâm Đồng</option>
                <option>Lạng Sơn</option>
                <option>Nghệ An</option>
                <option>Ninh Bình</option>
                <option>Phú Thọ</option>
                <option>Quảng Ngãi</option>
                <option>Quảng Ninh</option>
                <option>Quảng Trị</option>
                <option>Sơn La</option>
                <option>Thanh Hóa</option>
                <option>Thái Nguyên</option>
                <option>Tuyên Quang</option>
                <option>Tây Ninh</option>
                <option>Vĩnh Long</option>
                <option>Điện Biên</option>
                <option>Đắk Lắk</option>
                <option>Đồng Nai</option>
                <option>Đồng Tháp</option>
              </select>
            </div>
            <div>
              <label class="text-xs text-forest-200 block mb-1">Xã/Phường *</label>
              <select id="o-ward" required
                class="w-full bg-forest-600/60 border border-forest-500 text-white rounded-lg px-3 py-2.5 text-sm focus:outline-none focus:border-forest-300 transition-colors">
                <option value="">Chọn xã</option>
              </select>
            </div>
          </div>
          <div>
            <label class="text-xs text-forest-200 block mb-1">Địa chỉ chi tiết *</label>
            <input type="text" id="o-address" required placeholder="Số nhà, đường, thôn/xóm"
              class="w-full bg-forest-600/60 border border-forest-500 text-white placeholder-forest-400 rounded-lg px-3 py-2.5 text-sm focus:outline-none focus:border-forest-300 transition-colors"/>
          </div>
          <div>
            <label class="text-xs text-forest-200 block mb-1">Sản phẩm *</label>
            <select id="o-product"
              class="w-full bg-forest-600/60 border border-forest-500 text-white rounded-lg px-3 py-2.5 text-sm focus:outline-none focus:border-forest-300 transition-colors">
              <option value="tra-can-tay">Trà Cần Tây – 90.000đ</option>
              <option value="tra-diep-ca">Trà Diếp Cá – 90.000đ</option>
              <option value="tra-ca-gai-leo">Trà Cà Gai Leo – 90.000đ</option>
              <option value="tra-la-oi">Trà Lá Ổi – 90.000đ</option>
              <option value="tra-rau-ma">Trà Rau Má – 90.000đ</option>
              <option value="tra-tia-to">Trà Tía Tô – 90.000đ</option>
              <option value="tra-hoa-du-du">Trà Hoa Đu Đủ Đực – 90.000đ</option>
            </select>
          </div>
          <div>
            <label class="text-xs text-forest-200 block mb-1">Phương thức thanh toán *</label>
            <div class="space-y-2">
              <label class="flex items-center gap-2 text-sm text-forest-200">
                <input type="radio" name="payment-method" value="cod" checked class="accent-earth-400">
                <span>1. Trả tiền khi nhận hàng</span>
              </label>
              <label class="flex items-center gap-2 text-sm text-forest-200">
                <input type="radio" name="payment-method" value="qr" class="accent-earth-400">
                <span>2. Chuyển khoản QR</span>
              </label>
            </div>
          </div>
          <div>
            <label class="text-xs text-forest-200 block mb-1">Số lượng</label>
            <div class="flex items-center gap-3">
              <button type="button" onclick="changeQty(-1)"
                class="w-8 h-8 bg-forest-600 hover:bg-forest-500 rounded-lg flex items-center justify-center text-lg font-bold transition-colors">−</button>
              <span id="qty-display" class="text-white font-semibold w-6 text-center">1</span>
              <button type="button" onclick="changeQty(1)"
                class="w-8 h-8 bg-forest-600 hover:bg-forest-500 rounded-lg flex items-center justify-center text-lg font-bold transition-colors">+</button>
              <span class="text-forest-300 text-sm ml-2">Tổng: <strong id="total-display" class="text-white">90.000đ</strong></span>
            </div>
          </div>
          <div>
            <label class="text-xs text-forest-200 block mb-1">Ghi chú (tuỳ chọn)</label>
            <textarea id="o-note" rows="2" placeholder="Giao buổi sáng, gọi trước 30 phút..."
              class="w-full bg-forest-600/60 border border-forest-500 text-white placeholder-forest-400 rounded-lg px-3 py-2 text-sm focus:outline-none focus:border-forest-300 transition-colors resize-none"></textarea>
          </div>
          <button type="submit"
            class="w-full bg-earth-500 hover:bg-earth-400 text-white font-semibold py-3 rounded-xl transition-colors text-sm shadow-md mt-1">
            Xác nhận đặt hàng →
          </button>
        </form>
      </div>

      <!-- QR payment -->
      <div class="space-y-5">
        <div class="bg-white rounded-2xl p-6 text-forest-800">
          <h3 class="font-semibold text-base mb-4 flex items-center gap-2">
            <span class="bg-earth-400 text-white w-6 h-6 rounded-full flex items-center justify-center text-xs font-bold">2</span>
            Thanh toán
          </h3>

          <div id="cod-payment-box" class="bg-forest-50 border border-dashed border-forest-200 rounded-xl p-4 text-sm text-forest-700">
            <p class="font-semibold text-forest-800 mb-2">1. Trả tiền khi nhận hàng</p>
            <p class="text-xs leading-relaxed text-forest-600">Khách hàng thanh toán trực tiếp cho shipper khi nhận hàng. Không cần chuyển khoản trước.</p>
          </div>

          <div id="qr-payment-box" class="hidden bg-forest-50 border border-dashed border-forest-200 rounded-xl p-4 text-center mt-4">
            <div class="w-40 h-40 mx-auto bg-white rounded-lg flex items-center justify-center border border-forest-100 mb-3 overflow-hidden">
              <img id="qr-code" src="" alt="Mã QR chuyển khoản" class="w-36 h-36 object-contain" />
            </div>
            <p class="text-[11px] uppercase tracking-wide text-forest-500 mb-1">Ngân hàng</p>
            <p class="text-xs font-semibold text-forest-700">MBank</p>
            <p class="text-[11px] uppercase tracking-wide text-forest-500 mt-3 mb-1">Số tài khoản</p>
            <p class="text-xs font-semibold text-forest-700">8603062003</p>
            <p class="text-[11px] uppercase tracking-wide text-forest-500 mt-3 mb-1">Chủ tài khoản</p>
            <p class="text-xs font-semibold text-forest-700">LE DIEN QUOC</p>
            <p class="text-[11px] uppercase tracking-wide text-forest-500 mt-3 mb-1">Nội dung chuyển khoản</p>
            <p id="qr-content" class="text-xs font-semibold text-forest-700 break-all">LDQ_0912345678</p>
            <p class="text-[11px] uppercase tracking-wide text-forest-500 mt-3 mb-1">Số tiền</p>
            <p id="qr-amount" class="text-base font-bold text-forest-800">90.000đ</p>
          </div>

          <p id="payment-caption" class="mt-4 text-xs text-forest-500 leading-relaxed">
            Chuyển khoản qua Mbank số tài khoản 8603062003. Nộp đúng nội dung theo tên và số điện thoại để hệ thống xác nhận nhanh hơn.
          </p>
        </div>

        <div class="bg-forest-700/50 rounded-2xl p-4 border border-forest-600 text-sm text-forest-200">
          💰 <strong class="text-white">Lựa chọn thanh toán</strong> – Chọn COD hoặc chuyển khoản QR để xác nhận đơn hàng nhanh hơn.
        </div>

        <!-- Track order -->
        <div class="bg-forest-700/50 rounded-2xl p-4 border border-forest-600">
          <p class="text-sm font-semibold text-white mb-2">Tra cứu đơn hàng</p>
          <div class="flex gap-2">
            <input type="text" id="track-input" placeholder="Nhập SĐT hoặc mã đơn..."
              class="flex-1 bg-forest-600/60 border border-forest-500 text-white placeholder-forest-400 rounded-lg px-3 py-2 text-sm focus:outline-none focus:border-forest-300 transition-colors"/>
            <button onclick="trackOrder()"
              class="bg-forest-500 hover:bg-forest-400 text-white px-4 py-2 rounded-lg text-sm font-medium transition-colors whitespace-nowrap">
              Tra cứu
            </button>
          </div>
          <div id="track-result" class="hidden mt-3 p-3 bg-forest-600/40 rounded-lg text-xs text-forest-200"></div>
        </div>
      </div>
    </div>
  </div>
</section>


<!-- ═══════════════════════════════════════════════════════════ -->
<!-- TESTIMONIALS                                               -->
<!-- ═══════════════════════════════════════════════════════════ -->
<section class="py-16 bg-cream">
  <div class="max-w-6xl mx-auto px-4">
    <h2 class="font-serif text-2xl md:text-3xl text-forest-800 text-center mb-10">Khách hàng nói gì?</h2>
    <div class="grid md:grid-cols-3 gap-5">
      <div class="bg-white rounded-2xl p-5 border border-forest-100">
        <div class="flex gap-1 mb-3 text-earth-400">★★★★★</div>
        <p class="text-forest-700 text-sm leading-relaxed mb-4">"Trà Cần Tây uống được 2 tháng, da đẹp hẳn, không còn nổi mụn như trước. Hương thơm tự nhiên, không có vị lạ. Sẽ ủng hộ lâu dài!"</p>
        <div class="flex items-center gap-2">
          <div class="w-8 h-8 rounded-full bg-forest-200 flex items-center justify-center text-forest-700 font-semibold text-sm">LH</div>
          <div>
            <p class="text-xs font-semibold text-forest-800">Lê Thị Hoa</p>
            <p class="text-[11px] text-forest-500">Hà Nội</p>
          </div>
        </div>
      </div>
      <div class="bg-white rounded-2xl p-5 border border-forest-100">
        <div class="flex gap-1 mb-3 text-earth-400">★★★★★</div>
        <p class="text-forest-700 text-sm leading-relaxed mb-4">"Mua Trà Cà Gai Leo cho ba uống hỗ trợ gan. Sau 3 tháng xét nghiệm men gan đã về bình thường. Cảm ơn Liên Hoa Chi nhiều lắm!"</p>
        <div class="flex items-center gap-2">
          <div class="w-8 h-8 rounded-full bg-earth-200 flex items-center justify-center text-earth-700 font-semibold text-sm">NV</div>
          <div>
            <p class="text-xs font-semibold text-forest-800">Nguyễn Văn Tuấn</p>
            <p class="text-[11px] text-forest-500">Phú Thọ</p>
          </div>
        </div>
      </div>
      <div class="bg-white rounded-2xl p-5 border border-forest-100">
        <div class="flex gap-1 mb-3 text-earth-400">★★★★★</div>
        <p class="text-forest-700 text-sm leading-relaxed mb-4">"Giao hàng cực nhanh, đóng gói cẩn thận. Mình đặt buổi sáng, chiều đã nhận được. Chất lượng sản phẩm rất tốt, uống ngon, sẽ tiếp tục mua!"</p>
        <div class="flex items-center gap-2">
          <div class="w-8 h-8 rounded-full bg-forest-200 flex items-center justify-center text-forest-700 font-semibold text-sm">TM</div>
          <div>
            <p class="text-xs font-semibold text-forest-800">Trần Minh Châu</p>
            <p class="text-[11px] text-forest-500">Vĩnh Phúc</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


<!-- ═══════════════════════════════════════════════════════════ -->
<!-- CONTACT                                                    -->
<!-- ═══════════════════════════════════════════════════════════ -->
<section id="contact" class="py-16 bg-forest-50">
  <div class="max-w-4xl mx-auto px-4">
    <div class="grid md:grid-cols-2 gap-10 items-center">
      <div>
        <h2 class="font-serif text-2xl md:text-3xl text-forest-800 mb-4">Liên hệ với chúng tôi</h2>
        <p class="text-forest-600 text-sm leading-relaxed mb-6">Có câu hỏi về sản phẩm, muốn trở thành đại lý, hoặc cần tư vấn? Liên hệ ngay – chúng tôi phản hồi trong 30 phút.</p>
        <div class="space-y-4">
          <div class="flex items-start gap-3">
            <div class="w-9 h-9 bg-forest-100 rounded-lg flex items-center justify-center shrink-0 text-forest-600">📍</div>
            <div>
              <p class="text-sm font-medium text-forest-800">Địa chỉ</p>
              <p class="text-xs text-forest-600 mt-0.5">Khu 1, xã Phùng Nguyên, tỉnh Phú Thọ</p>
            </div>
          </div>
          <div class="flex items-start gap-3">
            <div class="w-9 h-9 bg-forest-100 rounded-lg flex items-center justify-center shrink-0 text-forest-600">📞</div>
            <div>
              <p class="text-sm font-medium text-forest-800">Điện thoại</p>
              <a href="tel:0833231111" class="text-xs text-forest-600 hover:text-forest-800 transition-colors">0833 231 111 – 0966 918 138</a>
            </div>
          </div>
          <div class="flex items-start gap-3">
            <div class="w-9 h-9 bg-forest-100 rounded-lg flex items-center justify-center shrink-0 text-forest-600">⏰</div>
            <div>
              <p class="text-sm font-medium text-forest-800">Giờ làm việc</p>
              <p class="text-xs text-forest-600 mt-0.5">Thứ 2 – Thứ 7: 7:30 – 17:30</p>
            </div>
          </div>
        </div>
        <div class="flex gap-3 mt-6">
          <a href="https://facebook.com/tralienhoachi" target="_blank"
            class="bg-[#1877F2] hover:opacity-90 text-white text-xs font-medium px-4 py-2 rounded-lg transition-opacity">
            Facebook
          </a>
          <a href="tel:0833231111"
            class="bg-forest-600 hover:bg-forest-700 text-white text-xs font-medium px-4 py-2 rounded-lg transition-colors">
            Gọi ngay
          </a>
        </div>
      </div>
      <!-- Map -->
      <div class="bg-white rounded-2xl border border-forest-200 overflow-hidden shadow-sm">
        <iframe
          src="https://www.google.com/maps?q=21.2997428,105.3153512&z=15&output=embed"
          class="w-full h-64 border-0"
          loading="lazy"
          allowfullscreen
          referrerpolicy="no-referrer-when-downgrade"
          title="Bản đồ HTX Liên Hoa Chi">
        </iframe>
        <div class="px-4 py-3 border-t border-forest-100 bg-forest-50">
          <p class="text-xs font-medium text-forest-700">HTX Sản Xuất Và Kinh Doanh Liên Hoa Chi</p>
          <a href="https://www.google.com/maps/place/HTX+S%E1%BA%A3n+Xu%E1%BA%A5t+V%C3%A0+Kinh+Doanh+Li%C3%AAn+Hoa+Chi/@21.2999045,105.3143645,18.25z/data=!4m6!3m5!1s0x31348da4e18a44dd:0xcd9854d3028bde29!8m2!3d21.2997428!4d105.3153512!16s%2Fg%2F11tt3t08c0?entry=ttu&g_ep=EgoyMDI2MDkwOS4wIKXMDSoASAFQAw%3D%3D"
            target="_blank"
            rel="noopener noreferrer"
            class="text-[11px] text-forest-600 hover:text-forest-800 transition-colors">
            Mở trên Google Maps →
          </a>
        </div>
      </div>
    </div>
  </div>
</section>


<!-- ═══════════════════════════════════════════════════════════ -->
<!-- FOOTER                                                     -->
<!-- ═══════════════════════════════════════════════════════════ -->
<footer class="bg-forest-900 text-forest-200 py-10">
  <div class="max-w-6xl mx-auto px-4">
    <div class="grid md:grid-cols-3 gap-8 mb-8">
      <div>
        <div class="flex items-center gap-2 mb-3">
          <img src="images/logo.jpg" alt="Liên Hoa Chi Logo" class="w-10 h-10 object-contain"/>
          <span class="font-serif text-white text-lg">Liên Hoa Chi</span>
        </div>
        <p class="text-xs leading-relaxed text-forest-300">HTX SX &amp; KD Liên Hoa Chi – Cam kết mang đến những sản phẩm trà thảo mộc thuần tự nhiên, tốt cho sức khỏe cộng đồng.</p>
      </div>
      <div>
        <p class="font-semibold text-white text-sm mb-3">Chính sách</p>
        <ul class="space-y-1.5 text-xs text-forest-400">
          <li><a href="#" class="hover:text-forest-200 transition-colors">Chính sách đổi trả</a></li>
          <li><a href="#" class="hover:text-forest-200 transition-colors">Chính sách vận chuyển</a></li>
          <li><a href="#" class="hover:text-forest-200 transition-colors">Chính sách thanh toán</a></li>
          <li><a href="#" class="hover:text-forest-200 transition-colors">Chính sách bảo mật</a></li>
        </ul>
      </div>
      <div>
        <p class="font-semibold text-white text-sm mb-3">Chứng nhận</p>
        <div class="space-y-1 text-xs text-forest-400">
          <p>Giấy CNĐKKD: 2601081462</p>
          <p>Cấp ngày: 03/08/2022</p>
          <p>OCOP 4 Sao – Phú Thọ</p>
          <p>Chứng nhận ATTP</p>
        </div>
      </div>
    </div>
    <div class="border-t border-forest-700 pt-6 text-center text-xs text-forest-500">
      © 2024 HTX Liên Hoa Chi. Giấy CNĐKKD: 2601081462 – Phòng Tài Chính Kế Hoạch, Lâm Thao, Phú Thọ.
    </div>
  </div>
</footer>


<!-- ═══════════════════════════════════════════════════════════ -->
<!-- ORDER MODAL                                                -->
<!-- ═══════════════════════════════════════════════════════════ -->
<div id="order-modal" class="hidden fixed inset-0 z-50 flex items-center justify-center p-4 bg-forest-900/60 backdrop-blur-sm">
  <div class="bg-white rounded-2xl shadow-2xl w-full max-w-md p-6 relative">
    <button onclick="document.getElementById('order-modal').classList.add('hidden')"
      class="absolute top-4 right-4 text-forest-400 hover:text-forest-700 transition-colors">
      <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/></svg>
    </button>
    <h3 class="font-serif text-xl text-forest-800 mb-1">Đặt hàng nhanh</h3>
    <p class="text-xs text-forest-500 mb-5">Điền thông tin, chúng tôi gọi xác nhận trong 5 phút.</p>
    <form onsubmit="submitModalOrder(event)" class="space-y-3">
      <input type="text" id="m-name" required placeholder="Họ tên *"
        class="w-full border border-forest-200 text-forest-800 rounded-lg px-3 py-2.5 text-sm focus:outline-none focus:border-forest-500 transition-colors"/>
      <input type="tel" id="m-phone" required placeholder="Số điện thoại *"
        class="w-full border border-forest-200 text-forest-800 rounded-lg px-3 py-2.5 text-sm focus:outline-none focus:border-forest-500 transition-colors"/>
      <input type="email" id="m-email" required placeholder="Email *"
        class="w-full border border-forest-200 text-forest-800 rounded-lg px-3 py-2.5 text-sm focus:outline-none focus:border-forest-500 transition-colors"/>
      <div class="grid grid-cols-2 gap-3">
        <select id="m-province" required
          class="w-full border border-forest-200 text-forest-800 rounded-lg px-3 py-2.5 text-sm focus:outline-none focus:border-forest-500 transition-colors">
          <option value="">Tỉnh/TP *</option>
          <option>Hà Nội</option>
          <option>Hồ Chí Minh</option>
          <option>Hải Phòng</option>
          <option>Đà Nẵng</option>
          <option>Cần Thơ</option>
          <option>Huế</option>
          <option>An Giang</option>
          <option>Bắc Ninh</option>
          <option>Cao Bằng</option>
          <option>Cà Mau</option>
          <option>Gia Lai</option>
          <option>Hà Tĩnh</option>
          <option>Hưng Yên</option>
          <option>Khánh Hòa</option>
          <option>Lai Châu</option>
          <option>Lào Cai</option>
          <option>Lâm Đồng</option>
          <option>Lạng Sơn</option>
          <option>Nghệ An</option>
          <option>Ninh Bình</option>
          <option>Phú Thọ</option>
          <option>Quảng Ngãi</option>
          <option>Quảng Ninh</option>
          <option>Quảng Trị</option>
          <option>Sơn La</option>
          <option>Thanh Hóa</option>
          <option>Thái Nguyên</option>
          <option>Tuyên Quang</option>
          <option>Tây Ninh</option>
          <option>Vĩnh Long</option>
          <option>Điện Biên</option>
          <option>Đắk Lắk</option>
          <option>Đồng Nai</option>
          <option>Đồng Tháp</option>
        </select>
        <select id="m-ward" required
          class="w-full border border-forest-200 text-forest-800 rounded-lg px-3 py-2.5 text-sm focus:outline-none focus:border-forest-500 transition-colors">
          <option value="">Xã/Phường *</option>
        </select>
      </div>
      <select id="m-product"
        class="w-full border border-forest-200 text-forest-800 rounded-lg px-3 py-2.5 text-sm focus:outline-none focus:border-forest-500 transition-colors">
        <option value="">Chọn sản phẩm *</option>
        <option>Trà Cần Tây – 90.000đ</option>
        <option>Trà Diếp Cá – 90.000đ</option>
        <option>Trà Cà Gai Leo – 90.000đ</option>
        <option>Trà Lá Ổi – 90.000đ</option>
        <option>Trà Rau Má – 90.000đ</option>
        <option>Trà Tía Tô – 90.000đ</option>
      </select>
      <input type="text" id="m-address" required placeholder="Địa chỉ chi tiết *"
        class="w-full border border-forest-200 text-forest-800 rounded-lg px-3 py-2.5 text-sm focus:outline-none focus:border-forest-500 transition-colors"/>
      <button type="submit"
        class="w-full bg-forest-600 hover:bg-forest-700 text-white font-semibold py-3 rounded-xl transition-colors text-sm">
        Xác nhận đặt hàng
      </button>
    </form>
  </div>
</div>


<!-- ═══════════════════════════════════════════════════════════ -->
<!-- SUCCESS TOAST                                              -->
<!-- ═══════════════════════════════════════════════════════════ -->
<div id="success-toast" class="hidden fixed bottom-6 left-1/2 -translate-x-1/2 z-50 bg-forest-700 text-white text-sm font-medium px-5 py-3 rounded-xl shadow-xl flex items-center gap-2 whitespace-nowrap">
  ✅ Đặt hàng thành công! Chúng tôi sẽ gọi xác nhận trong 5 phút.
</div>


<!-- ═══════════════════════════════════════════════════════════ -->
<!-- CHATBOT                                                    -->
<!-- ═══════════════════════════════════════════════════════════ -->
<!-- Chat toggle button -->
<button id="chat-toggle" onclick="toggleChat()"
  class="fixed bottom-6 right-6 z-50 w-14 h-14 bg-forest-600 hover:bg-forest-700 text-white rounded-full shadow-xl flex items-center justify-center text-2xl transition-all hover:scale-105">
  💬
</button>

<!-- Chat panel -->
<div id="chat-panel" class="chatbot-panel hidden fixed bottom-24 right-6 z-50 w-80 bg-white rounded-2xl shadow-2xl border border-forest-100 overflow-hidden flex flex-col" style="height:420px">

  <!-- Header -->
  <div class="bg-forest-700 text-white px-4 py-3 flex items-center gap-3 shrink-0">
    <div class="w-8 h-8 bg-forest-500 rounded-full flex items-center justify-center text-sm">🌿</div>
    <div>
      <p class="font-semibold text-sm">Trợ lý Liên Hoa Chi</p>
      <p class="text-[11px] text-forest-300">Thường phản hồi ngay lập tức</p>
    </div>
    <button onclick="toggleChat()" class="ml-auto text-forest-300 hover:text-white transition-colors">✕</button>
  </div>

  <!-- Messages -->
  <div id="chat-messages" class="flex-1 overflow-y-auto p-3 space-y-3 bg-forest-50/40">
    <div class="flex gap-2">
      <div class="w-6 h-6 bg-forest-200 rounded-full flex items-center justify-center text-xs shrink-0">🌿</div>
      <div class="bg-white rounded-xl rounded-tl-sm px-3 py-2 text-xs text-forest-700 max-w-[85%] border border-forest-100 leading-relaxed">
        Xin chào! Mình là trợ lý của Liên Hoa Chi. Bạn cần tư vấn sản phẩm gì?
        <div class="flex flex-wrap gap-1 mt-2">
          <button onclick="sendQuick('Tư vấn trà cho người tiểu đường')" class="bg-forest-100 hover:bg-forest-200 text-forest-700 text-[10px] px-2 py-1 rounded-full transition-colors">Tiểu đường</button>
          <button onclick="sendQuick('Trà nào giúp giảm cân?')" class="bg-forest-100 hover:bg-forest-200 text-forest-700 text-[10px] px-2 py-1 rounded-full transition-colors">Giảm cân</button>
          <button onclick="sendQuick('Trà hỗ trợ gan tốt nhất?')" class="bg-forest-100 hover:bg-forest-200 text-forest-700 text-[10px] px-2 py-1 rounded-full transition-colors">Bảo vệ gan</button>
          <button onclick="sendQuick('Giá và cách đặt hàng?')" class="bg-forest-100 hover:bg-forest-200 text-forest-700 text-[10px] px-2 py-1 rounded-full transition-colors">Đặt hàng</button>
        </div>
      </div>
    </div>
  </div>

  <!-- Input -->
  <div class="border-t border-forest-100 p-3 bg-white shrink-0">
    <div class="flex gap-2">
      <input type="text" id="chat-input" placeholder="Nhập câu hỏi..."
        class="flex-1 border border-forest-200 rounded-lg px-3 py-2 text-xs focus:outline-none focus:border-forest-400 transition-colors"
        onkeydown="if(event.key==='Enter')sendMessage()"/>
      <button onclick="sendMessage()"
        class="bg-forest-600 hover:bg-forest-700 text-white w-8 h-8 rounded-lg flex items-center justify-center transition-colors shrink-0">
        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8"/></svg>
      </button>
    </div>
  </div>
</div>


<!-- ═══════════════════════════════════════════════════════════ -->
<!-- JAVASCRIPT                                                 -->
<!-- ═══════════════════════════════════════════════════════════ -->
<script>
// ─── Hero slideshow ─────────────────────────────────────────
let heroIdx = 0;
const heroTotal = 5;
const heroTrack = document.getElementById('hero-slides');
const dotsContainer = document.getElementById('hero-dots');

// Build dots
for(let i = 0; i < heroTotal; i++) {
  const d = document.createElement('button');
  d.className = 'w-2 h-2 rounded-full transition-all ' + (i===0 ? 'bg-white scale-125' : 'bg-white/50');
  d.onclick = () => goHeroSlide(i);
  dotsContainer.appendChild(d);
}

function goHeroSlide(n) {
  heroIdx = (n + heroTotal) % heroTotal;
  heroTrack.style.transform = `translateX(-${heroIdx * 100}%)`;
  document.querySelectorAll('#hero-dots button').forEach((d,i) => {
    d.className = 'w-2 h-2 rounded-full transition-all ' + (i===heroIdx ? 'bg-white scale-125' : 'bg-white/50');
  });
  // Update thumbnail borders
  document.querySelectorAll('.thumb-img').forEach((t,i) => {
    t.classList.toggle('border-forest-600', i===heroIdx);
    t.classList.toggle('border-transparent', i!==heroIdx);
  });
}
function heroSlide(dir) { goHeroSlide(heroIdx + dir); }

// Auto-play every 4 seconds
setInterval(() => heroSlide(1), 4000);

const provinceWardMap = {
  'Hà Nội': ['Phường Ba Đình', 'Phường Ngọc Hà', 'Phường Giảng Võ', 'Phường Hoàn Kiếm', 'Phường Cửa Nam', 'Phường Phú Thượng', 'Phường Hồng Hà', 'Phường Tây Hồ', 'Phường Bồ Đề', 'Phường Việt Hưng', 'Phường Phúc Lợi', 'Phường Long Biên', 'Phường Nghĩa Đô', 'Phường Cầu Giấy', 'Phường Yên Hòa', 'Phường Ô Chợ Dừa', 'Phường Láng', 'Phường Văn Miếu - Quốc Tử Giám', 'Phường Kim Liên', 'Phường Đống Đa', 'Phường Hai Bà Trưng', 'Phường Vĩnh Tuy', 'Phường Bạch Mai', 'Phường Vĩnh Hưng', 'Phường Định Công', 'Phường Tương Mai', 'Phường Lĩnh Nam', 'Phường Hoàng Mai', 'Phường Hoàng Liệt', 'Phường Yên Sở', 'Phường Phương Liệt', 'Phường Khương Đình', 'Phường Thanh Xuân', 'Xã Sóc Sơn', 'Xã Kim Anh', 'Xã Trung Giã', 'Xã Đa Phúc', 'Xã Nội Bài', 'Xã Đông Anh', 'Xã Phúc Thịnh', 'Xã Thư Lâm', 'Xã Thiên Lộc', 'Xã Vĩnh Thanh', 'Xã Phù Đổng', 'Xã Thuận An', 'Xã Gia Lâm', 'Xã Bát Tràng', 'Phường Từ Liêm', 'Phường Thượng Cát', 'Phường Đông Ngạc', 'Phường Xuân Đỉnh', 'Phường Tây Tựu', 'Phường Phú Diễn', 'Phường Xuân Phương', 'Phường Tây Mỗ', 'Phường Đại Mỗ', 'Xã Thanh Trì', 'Phường Thanh Liệt', 'Xã Đại Thanh', 'Xã Ngọc Hồi', 'Xã Nam Phù', 'Xã Yên Xuân', 'Xã Quang Minh', 'Xã Yên Lãng', 'Xã Tiến Thắng', 'Xã Mê Linh', 'Phường Kiến Hưng', 'Phường Hà Đông', 'Phường Yên Nghĩa', 'Phường Phú Lương', 'Phường Sơn Tây', 'Phường Tùng Thiện', 'Xã Đoài Phương', 'Xã Quảng Oai', 'Xã Cổ Đô', 'Xã Minh Châu', 'Xã Vật Lại', 'Xã Bất Bạt', 'Xã Suối Hai', 'Xã Ba Vì', 'Xã Yên Bài', 'Xã Phúc Thọ', 'Xã Phúc Lộc', 'Xã Hát Môn', 'Xã Đan Phượng', 'Xã Liên Minh', 'Xã Ô Diên', 'Xã Hoài Đức', 'Xã Dương Hòa', 'Xã Sơn Đồng', 'Xã An Khánh', 'Phường Dương Nội', 'Xã Quốc Oai', 'Xã Kiều Phú', 'Xã Hưng Đạo', 'Xã Phú Cát', 'Xã Thạch Thất', 'Xã Hạ Bằng', 'Xã Hòa Lạc', 'Xã Tây Phương', 'Phường Chương Mỹ', 'Xã Phú Nghĩa', 'Xã Xuân Mai', 'Xã Quảng Bị', 'Xã Trần Phú', 'Xã Hòa Phú', 'Xã Thanh Oai', 'Xã Bình Minh', 'Xã Tam Hưng', 'Xã Dân Hòa', 'Xã Thường Tín', 'Xã Hồng Vân', 'Xã Thượng Phúc', 'Xã Chương Dương', 'Xã Phú Xuyên', 'Xã Phượng Dực', 'Xã Chuyên Mỹ', 'Xã Đại Xuyên', 'Xã Vân Đình', 'Xã Ứng Thiên', 'Xã Ứng Hòa', 'Xã Hòa Xá', 'Xã Mỹ Đức', 'Xã Phúc Sơn', 'Xã Hồng Sơn', 'Xã Hương Sơn'],
  'Hồ Chí Minh': ['Phường Thủ Dầu Một', 'Phường Phú Lợi', 'Phường Bình Dương', 'Phường Phú An', 'Phường Chánh Hiệp', 'Xã Dầu Tiếng', 'Xã Minh Thạnh', 'Xã Long Hòa', 'Xã Thanh An', 'Phường Bến Cát', 'Xã Trừ Văn Thố', 'Xã Bàu Bàng', 'Phường Chánh Phú Hòa', 'Phường Long Nguyên', 'Phường Tây Nam', 'Phường Thới Hòa', 'Phường Hòa Lợi', 'Xã Phú Giáo', 'Xã Phước Thành', 'Xã An Long', 'Xã Phước Hòa', 'Phường Tân Uyên', 'Phường Tân Khánh', 'Xã Bắc Tân Uyên', 'Xã Thường Tân', 'Phường Vĩnh Tân', 'Phường Bình Cơ', 'Phường Tân Hiệp', 'Phường Dĩ An', 'Phường Tân Đông Hiệp', 'Phường Đông Hòa', 'Phường Lái Thiêu', 'Phường Thuận Giao', 'Phường An Phú', 'Phường Thuận An', 'Phường Bình Hòa', 'Phường Vũng Tàu', 'Phường Tam Thắng', 'Phường Rạch Dừa', 'Phường Phước Thắng', 'Xã Long Sơn', 'Phường Bà Rịa', 'Phường Long Hương', 'Phường Tam Long', 'Xã Ngãi Giao', 'Xã Xuân Sơn', 'Xã Bình Giã', 'Xã Châu Đức', 'Xã Kim Long', 'Xã Nghĩa Thành', 'Xã Hồ Tràm', 'Xã Xuyên Mộc', 'Xã Bàu Lâm', 'Xã Hòa Hội', 'Xã Hòa Hiệp', 'Xã Bình Châu', 'Xã Long Điền', 'Xã Long Hải', 'Xã Đất Đỏ', 'Xã Phước Hải', 'Phường Phú Mỹ', 'Phường Tân Hải', 'Phường Tân Phước', 'Phường Tân Thành', 'Xã Châu Pha', 'Đặc khu Côn Đảo', 'Phường Tân Định', 'Phường Sài Gòn', 'Phường Bến Thành', 'Phường Cầu Ông Lãnh', 'Phường An Phú Đông', 'Phường Thới An', 'Phường Tân Thới Hiệp', 'Phường Trung Mỹ Tây', 'Phường Đông Hưng Thuận', 'Phường Linh Xuân', 'Phường Tam Bình', 'Phường Hiệp Bình', 'Phường Thủ Đức', 'Phường Long Bình', 'Phường Tăng Nhơn Phú', 'Phường Phước Long', 'Phường Long Phước', 'Phường Long Trường', 'Phường An Nhơn', 'Phường An Hội Đông', 'Phường An Hội Tây', 'Phường Gò Vấp', 'Phường Hạnh Thông', 'Phường Thông Tây Hội', 'Phường Bình Lợi Trung', 'Phường Bình Quới', 'Phường Bình Thạnh', 'Phường Gia Định', 'Phường Thạnh Mỹ Tây', 'Phường Tân Sơn Nhất', 'Phường Tân Sơn Hòa', 'Phường Bảy Hiền', 'Phường Tân Hòa', 'Phường Tân Bình', 'Phường Tân Sơn', 'Phường Tây Thạnh', 'Phường Tân Sơn Nhì', 'Phường Phú Thọ Hòa', 'Phường Phú Thạnh', 'Phường Tân Phú', 'Phường Đức Nhuận', 'Phường Cầu Kiệu', 'Phường Phú Nhuận', 'Phường An Khánh', 'Phường Bình Trưng', 'Phường Cát Lái', 'Phường Xuân Hòa', 'Phường Nhiêu Lộc', 'Phường Bàn Cờ', 'Phường Hòa Hưng', 'Phường Diên Hồng', 'Phường Vườn Lài', 'Phường Hòa Bình', 'Phường Phú Thọ', 'Phường Bình Thới', 'Phường Minh Phụng', 'Phường Xóm Chiếu', 'Phường Khánh Hội', 'Phường Vĩnh Hội', 'Phường Chợ Quán', 'Phường An Đông', 'Phường Chợ Lớn', 'Phường Phú Lâm', 'Phường Bình Phú', 'Phường Bình Tây', 'Phường Bình Tiên', 'Phường Chánh Hưng', 'Phường Bình Đông', 'Phường Phú Định', 'Phường Bình Hưng Hòa', 'Phường Bình Tân', 'Phường Bình Trị Đông', 'Phường Tân Tạo', 'Phường An Lạc', 'Phường Tân Hưng', 'Phường Tân Thuận', 'Phường Phú Thuận', 'Phường Tân Mỹ', 'Xã Tân An Hội', 'Xã An Nhơn Tây', 'Xã Nhuận Đức', 'Xã Thái Mỹ', 'Xã Phú Hòa Đông', 'Xã Bình Mỹ', 'Xã Củ Chi', 'Xã Hóc Môn', 'Xã Đông Thạnh', 'Xã Xuân Thới Sơn', 'Xã Bà Điểm', 'Xã Tân Nhựt', 'Xã Vĩnh Lộc', 'Xã Tân Vĩnh Lộc', 'Xã Bình Lợi', 'Xã Bình Hưng', 'Xã Hưng Long', 'Xã Bình Chánh', 'Xã Nhà Bè', 'Xã Hiệp Phước', 'Xã Cần Giờ', 'Xã Bình Khánh', 'Xã An Thới Đông', 'Xã Thạnh An'],
  'Hải Phòng': ['Phường Thành Đông', 'Phường Hải Dương', 'Phường Lê Thanh Nghị', 'Phường Tân Hưng', 'Phường Việt Hòa', 'Phường Chí Linh', 'Phường Chu Văn An', 'Phường Nguyễn Trãi', 'Phường Trần Hưng Đạo', 'Phường Trần Nhân Tông', 'Phường Lê Đại Hành', 'Xã Nam Sách', 'Xã Hợp Tiến', 'Xã Trần Phú', 'Xã Thái Tân', 'Xã An Phú', 'Phường Ái Quốc', 'Phường Kinh Môn', 'Phường Bắc An Phụ', 'Xã Nam An Phụ', 'Phường Nhị Chiểu', 'Phường Phạm Sư Mạnh', 'Phường Trần Liễu', 'Phường Nguyễn Đại Năng', 'Xã Phú Thái', 'Xã Lai Khê', 'Xã An Thành', 'Xã Kim Thành', 'Xã Thanh Hà', 'Xã Hà Bắc', 'Phường Nam Đồng', 'Xã Hà Nam', 'Xã Hà Tây', 'Xã Hà Đông', 'Xã Cẩm Giang', 'Phường Tứ Minh', 'Xã Cẩm Giàng', 'Xã Tuệ Tĩnh', 'Xã Mao Điền', 'Xã Kẻ Sặt', 'Xã Bình Giang', 'Xã Đường An', 'Xã Thượng Hồng', 'Xã Gia Lộc', 'Phường Thạch Khôi', 'Xã Yết Kiêu', 'Xã Gia Phúc', 'Xã Trường Tân', 'Xã Tứ Kỳ', 'Xã Đại Sơn', 'Xã Tân Kỳ', 'Xã Chí Minh', 'Xã Lạc Phượng', 'Xã Nguyên Giáp', 'Xã Vĩnh Lại', 'Xã Tân An', 'Xã Ninh Giang', 'Xã Hồng Châu', 'Xã Khúc Thừa Dụ', 'Xã Thanh Miện', 'Xã Nguyễn Lương Bằng', 'Xã Bắc Thanh Miện', 'Xã Hải Hưng', 'Xã Nam Thanh Miện', 'Phường Hồng Bàng', 'Phường Ngô Quyền', 'Phường Gia Viên', 'Phường Lê Chân', 'Phường An Biên', 'Phường Đông Hải', 'Phường Hải An', 'Phường Kiến An', 'Phường Phù Liễn', 'Phường Đồ Sơn', 'Phường Bạch Đằng', 'Phường Lưu Kiếm', 'Xã Việt Khê', 'Phường Lê Ích Mộc', 'Phường Hòa Bình', 'Phường Nam Triệu', 'Phường Thiên Hương', 'Phường Thủy Nguyên', 'Phường An Dương', 'Phường An Phong', 'Phường Hồng An', 'Phường An Hải', 'Xã An Lão', 'Xã An Trường', 'Xã An Quang', 'Xã An Khánh', 'Xã An Hưng', 'Xã Kiến Thụy', 'Phường Hưng Đạo', 'Phường Dương Kinh', 'Xã Nghi Dương', 'Xã Kiến Minh', 'Xã Kiến Hưng', 'Phường Nam Đồ Sơn', 'Xã Kiến Hải', 'Xã Tiên Lãng', 'Xã Quyết Thắng', 'Xã Tân Minh', 'Xã Tiên Minh', 'Xã Chấn Hưng', 'Xã Hùng Thắng', 'Xã Vĩnh Bảo', 'Xã Vĩnh Thịnh', 'Xã Vĩnh Thuận', 'Xã Vĩnh Hòa', 'Xã Vĩnh Hải', 'Xã Vĩnh Am', 'Xã Nguyễn Bỉnh Khiêm', 'Đặc khu Cát Hải', 'Đặc khu Bạch Long Vĩ'],
  'Đà Nẵng': ['Phường Hải Vân', 'Phường Liên Chiểu', 'Phường Hòa Khánh', 'Phường Thanh Khê', 'Phường Hải Châu', 'Phường Hòa Cường', 'Phường Cẩm Lệ', 'Phường Sơn Trà', 'Phường An Hải', 'Phường Ngũ Hành Sơn', 'Phường An Khê', 'Xã Bà Nà', 'Phường Hòa Xuân', 'Xã Hòa Vang', 'Xã Hòa Tiến', 'Đặc khu Hoàng Sa', 'Phường Bàn Thạch', 'Phường Tam Kỳ', 'Phường Hương Trà', 'Phường Quảng Phú', 'Xã Chiên Đàn', 'Xã Tây Hồ', 'Xã Phú Ninh', 'Phường Hội An Tây', 'Phường Hội An', 'Phường Hội An Đông', 'Xã Tân Hiệp', 'Xã Hùng Sơn', 'Xã Tây Giang', 'Xã Avương', 'Xã Đông Giang', 'Xã Sông Kôn', 'Xã Sông Vàng', 'Xã Bến Hiên', 'Xã Đại Lộc', 'Xã Thượng Đức', 'Xã Hà Nha', 'Xã Vu Gia', 'Xã Phú Thuận', 'Phường Điện Bàn', 'Phường Điện Bàn Bắc', 'Xã Điện Bàn Tây', 'Phường An Thắng', 'Phường Điện Bàn Đông', 'Xã Gò Nổi', 'Xã Nam Phước', 'Xã Thu Bồn', 'Xã Duy Xuyên', 'Xã Duy Nghĩa', 'Xã Quế Sơn', 'Xã Xuân Phú', 'Xã Nông Sơn', 'Xã Quế Sơn Trung', 'Xã Quế Phước', 'Xã Thạnh Mỹ', 'Xã La Êê', 'Xã La Dêê', 'Xã Nam Giang', 'Xã Bến Giằng', 'Xã Đắc Pring', 'Xã Khâm Đức', 'Xã Phước Hiệp', 'Xã Phước Năng', 'Xã Phước Chánh', 'Xã Phước Thành', 'Xã Việt An', 'Xã Phước Trà', 'Xã Hiệp Đức', 'Xã Thăng Bình', 'Xã Thăng An', 'Xã Đồng Dương', 'Xã Thăng Phú', 'Xã Thăng Trường', 'Xã Thăng Điền', 'Xã Tiên Phước', 'Xã Sơn Cẩm Hà', 'Xã Lãnh Ngọc', 'Xã Thạnh Bình', 'Xã Trà My', 'Xã Trà Liên', 'Xã Trà Đốc', 'Xã Trà Tân', 'Xã Trà Giáp', 'Xã Trà Leng', 'Xã Trà Tập', 'Xã Nam Trà My', 'Xã Trà Linh', 'Xã Trà Vân', 'Xã Núi Thành', 'Xã Tam Xuân', 'Xã Đức Phú', 'Xã Tam Anh', 'Xã Tam Hải', 'Xã Tam Mỹ'],
  'Cần Thơ': ['Phường Cái Khế', 'Phường Ninh Kiều', 'Phường Tân An', 'Phường An Bình', 'Phường Ô Môn', 'Phường Thới Long', 'Phường Phước Thới', 'Phường Bình Thủy', 'Phường Thới An Đông', 'Phường Long Tuyền', 'Phường Cái Răng', 'Phường Hưng Phú', 'Phường Thốt Nốt', 'Phường Tân Lộc', 'Phường Trung Nhứt', 'Phường Thuận Hưng', 'Xã Thạnh An', 'Xã Vĩnh Thạnh', 'Xã Vĩnh Trinh', 'Xã Thạnh Quới', 'Xã Thạnh Phú', 'Xã Trung Hưng', 'Xã Thới Lai', 'Xã Cờ Đỏ', 'Xã Thới Hưng', 'Xã Đông Hiệp', 'Xã Đông Thuận', 'Xã Trường Thành', 'Xã Trường Xuân', 'Xã Phong Điền', 'Xã Trường Long', 'Xã Nhơn Ái', 'Phường Vị Thanh', 'Phường Vị Tân', 'Xã Hỏa Lựu', 'Phường Ngã Bảy', 'Xã Tân Hòa', 'Xã Trường Long Tây', 'Xã Thạnh Xuân', 'Xã Châu Thành', 'Xã Đông Phước', 'Xã Phú Hữu', 'Xã Hòa An', 'Xã Hiệp Hưng', 'Xã Tân Bình', 'Xã Thạnh Hòa', 'Phường Đại Thành', 'Xã Phụng Hiệp', 'Xã Phương Bình', 'Xã Tân Phước Hưng', 'Xã Vị Thủy', 'Xã Vĩnh Thuận Đông', 'Xã Vĩnh Tường', 'Xã Vị Thanh 1', 'Phường Long Mỹ', 'Phường Long Bình', 'Phường Long Phú 1', 'Xã Vĩnh Viễn', 'Xã Lương Tâm', 'Xã Xà Phiên', 'Phường Sóc Trăng', 'Phường Phú Lợi', 'Xã Kế Sách', 'Xã An Lạc Thôn', 'Xã Phong Nẫm', 'Xã Thới An Hội', 'Xã Nhơn Mỹ', 'Xã Đại Hải', 'Xã Mỹ Tú', 'Xã Phú Tâm', 'Xã Hồ Đắc Kiện', 'Xã Long Hưng', 'Xã Thuận Hòa', 'Xã Mỹ Hương', 'Xã An Ninh', 'Xã Mỹ Phước', 'Xã An Thạnh', 'Xã Cù Lao Dung', 'Xã Long Phú', 'Xã Đại Ngãi', 'Xã Trường Khánh', 'Xã Tân Thạnh', 'Xã Trần Đề', 'Xã Liêu Tú', 'Xã Lịch Hội Thượng', 'Phường Mỹ Xuyên', 'Xã Tài Văn', 'Xã Thạnh Thới An', 'Xã Nhu Gia', 'Xã Hòa Tú', 'Xã Ngọc Tố', 'Xã Gia Hòa', 'Phường Ngã Năm', 'Xã Tân Long', 'Phường Mỹ Quới', 'Xã Phú Lộc', 'Xã Lâm Tân', 'Xã Vĩnh Lợi', 'Phường Vĩnh Châu', 'Phường Khánh Hòa', 'Xã Vĩnh Hải', 'Phường Vĩnh Phước', 'Xã Lai Hòa'],
  'Huế': ['Phường Phú Xuân', 'Phường Kim Long', 'Phường Vỹ Dạ', 'Phường Thuận Hóa', 'Phường Hương An', 'Phường Thủy Xuân', 'Phường An Cựu', 'Phường Phong Điền', 'Phường Phong Phú', 'Phường Phong Dinh', 'Phường Phong Thái', 'Xã Quảng Điền', 'Phường Phong Quảng', 'Xã Đan Điền', 'Phường Thuận An', 'Phường Dương Nỗ', 'Xã Phú Hồ', 'Phường Mỹ Thượng', 'Xã Phú Vang', 'Xã Phú Vinh', 'Phường Phú Bài', 'Phường Thanh Thủy', 'Phường Hương Thủy', 'Phường Hương Trà', 'Phường Hóa Châu', 'Phường Kim Trà', 'Xã Bình Điền', 'Xã A Lưới 2', 'Xã A Lưới 5', 'Xã A Lưới 1', 'Xã A Lưới 3', 'Xã A Lưới 4', 'Xã Phú Lộc', 'Xã Vinh Lộc', 'Xã Hưng Lộc', 'Xã Chân Mây - Lăng Cô', 'Xã Lộc An', 'Xã Khe Tre', 'Xã Nam Đông', 'Xã Long Quảng'],
  'An Giang': ['Phường Bình Đức', 'Phường Mỹ Thới', 'Phường Long Xuyên', 'Xã Mỹ Hòa Hưng', 'Phường Châu Đốc', 'Phường Vĩnh Tế', 'Xã An Phú', 'Xã Khánh Bình', 'Xã Nhơn Hội', 'Xã Phú Hữu', 'Xã Vĩnh Hậu', 'Phường Tân Châu', 'Phường Long Phú', 'Xã Vĩnh Xương', 'Xã Tân An', 'Xã Châu Phong', 'Xã Phú Tân', 'Xã Chợ Vàm', 'Xã Phú Lâm', 'Xã Hòa Lạc', 'Xã Phú An', 'Xã Bình Thạnh Đông', 'Xã Châu Phú', 'Xã Mỹ Đức', 'Xã Vĩnh Thạnh Trung', 'Xã Thạnh Mỹ Tây', 'Xã Bình Mỹ', 'Phường Thới Sơn', 'Phường Chi Lăng', 'Phường Tịnh Biên', 'Xã An Cư', 'Xã Núi Cấm', 'Xã Tri Tôn', 'Xã Ba Chúc', 'Xã Vĩnh Gia', 'Xã Ô Lâm', 'Xã Cô Tô', 'Xã An Châu', 'Xã Cần Đăng', 'Xã Vĩnh An', 'Xã Bình Hòa', 'Xã Vĩnh Hanh', 'Xã Chợ Mới', 'Xã Long Điền', 'Xã Cù Lao Giêng', 'Xã Nhơn Mỹ', 'Xã Long Kiến', 'Xã Hội An', 'Xã Thoại Sơn', 'Xã Phú Hòa', 'Xã Óc Eo', 'Xã Tây Phú', 'Xã Vĩnh Trạch', 'Xã Định Mỹ', 'Phường Rạch Giá', 'Phường Vĩnh Thông', 'Phường Tô Châu', 'Phường Hà Tiên', 'Xã Tiên Hải', 'Xã Kiên Lương', 'Xã Hòa Điền', 'Xã Vĩnh Điều', 'Xã Giang Thành', 'Xã Sơn Hải', 'Xã Hòn Nghệ', 'Xã Hòn Đất', 'Xã Bình Sơn', 'Xã Bình Giang', 'Xã Sơn Kiên', 'Xã Mỹ Thuận', 'Xã Tân Hiệp', 'Xã Tân Hội', 'Xã Thạnh Đông', 'Xã Châu Thành', 'Xã Thạnh Lộc', 'Xã Bình An', 'Xã Giồng Riềng', 'Xã Thạnh Hưng', 'Xã Ngọc Chúc', 'Xã Hòa Hưng', 'Xã Long Thạnh', 'Xã Hòa Thuận', 'Xã Gò Quao', 'Xã Định Hòa', 'Xã Vĩnh Hòa Hưng', 'Xã Vĩnh Tuy', 'Xã An Biên', 'Xã Tây Yên', 'Xã Đông Thái', 'Xã Vĩnh Hòa', 'Xã An Minh', 'Xã Đông Hòa', 'Xã U Minh Thượng', 'Xã Tân Thạnh', 'Xã Đông Hưng', 'Xã Vân Khánh', 'Xã Vĩnh Phong', 'Xã Vĩnh Bình', 'Xã Vĩnh Thuận', 'Đặc khu Phú Quốc', 'Đặc khu Thổ Châu', 'Đặc khu Kiên Hải'],
  'Bắc Ninh': ['Phường Bắc Giang', 'Phường Đa Mai', 'Xã Xuân Lương', 'Xã Tam Tiến', 'Xã Đồng Kỳ', 'Xã Yên Thế', 'Xã Bố Hạ', 'Xã Nhã Nam', 'Xã Phúc Hòa', 'Xã Quang Trung', 'Xã Tân Yên', 'Xã Ngọc Thiện', 'Xã Lạng Giang', 'Xã Tiên Lục', 'Xã Kép', 'Xã Mỹ Thái', 'Xã Tân Dĩnh', 'Xã Lục Nam', 'Xã Đông Phú', 'Xã Bảo Đài', 'Xã Nghĩa Phương', 'Xã Trường Sơn', 'Xã Lục Sơn', 'Xã Bắc Lũng', 'Xã Cẩm Lý', 'Phường Chũ', 'Xã Tân Sơn', 'Xã Sa Lý', 'Xã Biên Sơn', 'Xã Sơn Hải', 'Xã Kiên Lao', 'Xã Biển Động', 'Xã Lục Ngạn', 'Xã Đèo Gia', 'Xã Nam Dương', 'Phường Phượng Sơn', 'Xã Sơn Động', 'Xã Tây Yên Tử', 'Xã Vân Sơn', 'Xã Đại Sơn', 'Xã Yên Định', 'Xã An Lạc', 'Xã Tuấn Đạo', 'Xã Dương Hưu', 'Phường Yên Dũng', 'Phường Tân An', 'Phường Tiền Phong', 'Phường Tân Tiến', 'Xã Đồng Việt', 'Phường Cảnh Thụy', 'Phường Tự Lạn', 'Phường Việt Yên', 'Phường Nếnh', 'Phường Vân Hà', 'Xã Hoàng Vân', 'Xã Hiệp Hoà', 'Xã Hợp Thịnh', 'Xã Xuân Cẩm', 'Phường Vũ Ninh', 'Phường Kinh Bắc', 'Phường Võ Cường', 'Xã Yên Phong', 'Xã Tam Giang', 'Xã Yên Trung', 'Xã Tam Đa', 'Xã Văn Môn', 'Phường Quế Võ', 'Phường Nhân Hòa', 'Phường Phương Liễu', 'Phường Nam Sơn', 'Xã Phù Lãng', 'Phường Bồng Lai', 'Phường Đào Viên', 'Xã Chi Lăng', 'Xã Tiên Du', 'Phường Hạp Lĩnh', 'Xã Liên Bão', 'Xã Đại Đồng', 'Xã Tân Chi', 'Xã Phật Tích', 'Phường Từ Sơn', 'Phường Tam Sơn', 'Phường Phù Khê', 'Phường Đồng Nguyên', 'Phường Thuận Thành', 'Phường Mão Điền', 'Phường Trí Quả', 'Phường Trạm Lộ', 'Phường Song Liễu', 'Phường Ninh Xá', 'Xã Gia Bình', 'Xã Cao Đức', 'Xã Đại Lai', 'Xã Nhân Thắng', 'Xã Đông Cứu', 'Xã Lương Tài', 'Xã Trung Kênh', 'Xã Trung Chính', 'Xã Lâm Thao'],
  'Cao Bằng': ['Phường Thục Phán', 'Phường Nùng Trí Cao', 'Phường Tân Giang', 'Xã Bảo Lâm', 'Xã Lý Bôn', 'Xã Nam Quang', 'Xã Quảng Lâm', 'Xã Yên Thổ', 'Xã Bảo Lạc', 'Xã Cốc Pàng', 'Xã Cô Ba', 'Xã Khánh Xuân', 'Xã Xuân Trường', 'Xã Hưng Đạo', 'Xã Huy Giáp', 'Xã Sơn Lộ', 'Xã Thông Nông', 'Xã Cần Yên', 'Xã Thanh Long', 'Xã Trường Hà', 'Xã Lũng Nặm', 'Xã Tổng Cọt', 'Xã Hà Quảng', 'Xã Trà Lĩnh', 'Xã Quang Hán', 'Xã Quang Trung', 'Xã Trùng Khánh', 'Xã Đình Phong', 'Xã Đàm Thủy', 'Xã Đoài Dương', 'Xã Lý Quốc', 'Xã Quang Long', 'Xã Hạ Lang', 'Xã Vinh Quý', 'Xã Quảng Uyên', 'Xã Độc Lập', 'Xã Hạnh Phúc', 'Xã Bế Văn Đàn', 'Xã Phục Hòa', 'Xã Hòa An', 'Xã Nam Tuấn', 'Xã Nguyễn Huệ', 'Xã Bạch Đằng', 'Xã Nguyên Bình', 'Xã Tĩnh Túc', 'Xã Ca Thành', 'Xã Minh Tâm', 'Xã Phan Thanh', 'Xã Tam Kim', 'Xã Thành Công', 'Xã Đông Khê', 'Xã Canh Tân', 'Xã Kim Đồng', 'Xã Minh Khai', 'Xã Thạch An', 'Xã Đức Long'],
  'Cà Mau': ['Phường Bạc Liêu', 'Phường Vĩnh Trạch', 'Phường Hiệp Thành', 'Xã Hồng Dân', 'Xã Ninh Quới', 'Xã Vĩnh Lộc', 'Xã Ninh Thạnh Lợi', 'Xã Phước Long', 'Xã Vĩnh Phước', 'Xã Vĩnh Thanh', 'Xã Phong Hiệp', 'Xã Hòa Bình', 'Xã Châu Thới', 'Xã Vĩnh Lợi', 'Xã Hưng Hội', 'Xã Vĩnh Mỹ', 'Xã Vĩnh Hậu', 'Phường Giá Rai', 'Phường Láng Tròn', 'Xã Phong Thạnh', 'Xã Gành Hào', 'Xã Đông Hải', 'Xã Long Điền', 'Xã An Trạch', 'Xã Định Thành', 'Phường An Xuyên', 'Phường Lý Văn Lâm', 'Phường Tân Thành', 'Phường Hòa Thành', 'Xã Nguyễn Phích', 'Xã U Minh', 'Xã Khánh An', 'Xã Khánh Lâm', 'Xã Thới Bình', 'Xã Biển Bạch', 'Xã Trí Phải', 'Xã Tân Lộc', 'Xã Hồ Thị Kỷ', 'Xã Trần Văn Thời', 'Xã Sông Đốc', 'Xã Đá Bạc', 'Xã Khánh Bình', 'Xã Khánh Hưng', 'Xã Cái Nước', 'Xã Lương Thế Trân', 'Xã Tân Hưng', 'Xã Hưng Mỹ', 'Xã Đầm Dơi', 'Xã Tạ An Khương', 'Xã Trần Phán', 'Xã Tân Thuận', 'Xã Quách Phẩm', 'Xã Thanh Tùng', 'Xã Tân Tiến', 'Xã Năm Căn', 'Xã Đất Mới', 'Xã Tam Giang', 'Xã Cái Đôi Vàm', 'Xã Phú Mỹ', 'Xã Phú Tân', 'Xã Nguyễn Việt Khái', 'Xã Tân Ân', 'Xã Phan Ngọc Hiển', 'Xã Đất Mũi'],
  'Gia Lai': ['Phường Quy Nhơn Bắc', 'Phường Quy Nhơn', 'Phường Quy Nhơn Tây', 'Phường Quy Nhơn Nam', 'Phường Quy Nhơn Đông', 'Xã Nhơn Châu', 'Xã An Lão', 'Xã An Vinh', 'Xã An Toàn', 'Xã An Hòa', 'Phường Tam Quan', 'Phường Bồng Sơn', 'Phường Hoài Nhơn Bắc', 'Phường Hoài Nhơn Tây', 'Phường Hoài Nhơn', 'Phường Hoài Nhơn Đông', 'Phường Hoài Nhơn Nam', 'Xã Hoài Ân', 'Xã Ân Hảo', 'Xã Vạn Đức', 'Xã Ân Tường', 'Xã Kim Sơn', 'Xã Phù Mỹ', 'Xã Bình Dương', 'Xã Phù Mỹ Bắc', 'Xã Phù Mỹ Đông', 'Xã Phù Mỹ Tây', 'Xã An Lương', 'Xã Phù Mỹ Nam', 'Xã Vĩnh Thạnh', 'Xã Vĩnh Sơn', 'Xã Vĩnh Thịnh', 'Xã Vĩnh Quang', 'Xã Tây Sơn', 'Xã Bình Hiệp', 'Xã Bình Khê', 'Xã Bình An', 'Xã Bình Phú', 'Xã Phù Cát', 'Xã Đề Gi', 'Xã Hội Sơn', 'Xã Hòa Hội', 'Xã Cát Tiến', 'Xã Xuân An', 'Xã Ngô Mây', 'Phường Bình Định', 'Phường An Nhơn', 'Phường An Nhơn Bắc', 'Phường An Nhơn Đông', 'Xã An Nhơn Tây', 'Phường An Nhơn Nam', 'Xã Tuy Phước', 'Xã Tuy Phước Bắc', 'Xã Tuy Phước Đông', 'Xã Tuy Phước Tây', 'Xã Vân Canh', 'Xã Canh Liên', 'Xã Canh Vinh', 'Phường Diên Hồng', 'Phường Pleiku', 'Phường Thống Nhất', 'Phường Hội Phú', 'Xã Biển Hồ', 'Phường An Phú', 'Xã Gào', 'Phường An Bình', 'Phường An Khê', 'Xã Cửu An', 'Xã Kbang', 'Xã Đak Rong', 'Xã Sơn Lang', 'Xã Krong', 'Xã Tơ Tung', 'Xã Kông Bơ La', 'Xã Đak Đoa', 'Xã Đak Sơmei', 'Xã Kon Gang', 'Xã Ia Băng', 'Xã KDang', 'Xã Chư Păh', 'Xã Ia Khươl', 'Xã Ia Ly', 'Xã Ia Phí', 'Xã Ia Grai', 'Xã Ia Hrung', 'Xã Ia Krái', 'Xã Ia O', 'Xã Ia Chia', 'Xã Mang Yang', 'Xã Ayun', 'Xã Hra', 'Xã Lơ Pang', 'Xã Kon Chiêng', 'Xã Kông Chro', 'Xã Chư Krey', 'Xã Ya Ma', 'Xã SRó', 'Xã Đăk Song', 'Xã Chơ Long', 'Xã Đức Cơ', 'Xã Ia Krêl', 'Xã Ia Dơk', 'Xã Ia Dom', 'Xã Ia Pnôn', 'Xã Ia Nan', 'Xã Chư Prông', 'Xã Bàu Cạn', 'Xã Ia Tôr', 'Xã Ia Boòng', 'Xã Ia Púch', 'Xã Ia Pia', 'Xã Ia Lâu', 'Xã Ia Mơ', 'Xã Chư Sê', 'Xã Chư Pưh', 'Xã Bờ Ngoong', 'Xã Al Bá', 'Xã Ia Hrú', 'Xã Ia Ko', 'Xã Ia Le', 'Xã Đak Pơ', 'Xã Ya Hội', 'Xã Pờ Tó', 'Xã Ia Pa', 'Xã Ia Tul', 'Xã Phú Thiện', 'Phường Ayun Pa', 'Xã Chư A Thai', 'Xã Ia Hiao', 'Xã Ia Rbol', 'Xã Ia Sao', 'Xã Phú Túc', 'Xã Ia Dreh', 'Xã Uar', 'Xã Ia Rsai'],
  'Hà Tĩnh': ['Phường Thành Sen', 'Phường Trần Phú', 'Phường Bắc Hồng Lĩnh', 'Phường Nam Hồng Lĩnh', 'Xã Hương Sơn', 'Xã Sơn Hồng', 'Xã Sơn Tiến', 'Xã Sơn Tây', 'Xã Sơn Giang', 'Xã Sơn Kim 1', 'Xã Sơn Kim 2', 'Xã Tứ Mỹ', 'Xã Kim Hoa', 'Xã Đức Thọ', 'Xã Đức Minh', 'Xã Đức Quang', 'Xã Đức Thịnh', 'Xã Đức Đồng', 'Xã Vũ Quang', 'Xã Mai Hoa', 'Xã Thượng Đức', 'Xã Nghi Xuân', 'Xã Đan Hải', 'Xã Tiên Điền', 'Xã Cổ Đạm', 'Xã Can Lộc', 'Xã Hồng Lộc', 'Xã Tùng Lộc', 'Xã Trường Lưu', 'Xã Gia Hanh', 'Xã Xuân Lộc', 'Xã Đồng Lộc', 'Xã Hương Khê', 'Xã Hà Linh', 'Xã Hương Bình', 'Xã Hương Phố', 'Xã Hương Xuân', 'Xã Phúc Trạch', 'Xã Hương Đô', 'Xã Thạch Hà', 'Xã Lộc Hà', 'Xã Mai Phụ', 'Xã Đông Kinh', 'Xã Việt Xuyên', 'Xã Thạch Khê', 'Xã Đồng Tiến', 'Xã Thạch Lạc', 'Xã Toàn Lưu', 'Phường Hà Huy Tập', 'Xã Thạch Xuân', 'Xã Cẩm Xuyên', 'Xã Thiên Cầm', 'Xã Yên Hòa', 'Xã Cẩm Bình', 'Xã Cẩm Hưng', 'Xã Cẩm Duệ', 'Xã Cẩm Trung', 'Xã Cẩm Lạc', 'Phường Sông Trí', 'Xã Kỳ Xuân', 'Xã Kỳ Anh', 'Phường Hải Ninh', 'Xã Kỳ Văn', 'Xã Kỳ Khang', 'Xã Kỳ Hoa', 'Phường Vũng Áng', 'Phường Hoành Sơn', 'Xã Kỳ Lạc', 'Xã Kỳ Thượng'],
  'Hưng Yên': ['Phường Phố Hiến', 'Xã Tân Hưng', 'Phường Hồng Châu', 'Phường Sơn Nam', 'Xã Lạc Đạo', 'Xã Đại Đồng', 'Xã Như Quỳnh', 'Xã Văn Giang', 'Xã Phụng Công', 'Xã Nghĩa Trụ', 'Xã Mễ Sở', 'Xã Nguyễn Văn Linh', 'Xã Hoàn Long', 'Xã Yên Mỹ', 'Xã Việt Yên', 'Phường Mỹ Hào', 'Phường Thượng Hồng', 'Phường Đường Hào', 'Xã Ân Thi', 'Xã Phạm Ngũ Lão', 'Xã Xuân Trúc', 'Xã Nguyễn Trãi', 'Xã Hồng Quang', 'Xã Khoái Châu', 'Xã Triệu Việt Vương', 'Xã Việt Tiến', 'Xã Châu Ninh', 'Xã Chí Minh', 'Xã Lương Bằng', 'Xã Nghĩa Dân', 'Xã Đức Hợp', 'Xã Hiệp Cường', 'Xã Hoàng Hoa Thám', 'Xã Tiên Hoa', 'Xã Tiên Lữ', 'Xã Quang Hưng', 'Xã Đoàn Đào', 'Xã Tiên Tiến', 'Xã Tống Trân', 'Phường Trần Hưng Đạo', 'Phường Trần Lãm', 'Phường Vũ Phúc', 'Xã Quỳnh Phụ', 'Xã A Sào', 'Xã Minh Thọ', 'Xã Ngọc Lâm', 'Xã Phụ Dực', 'Xã Đồng Bằng', 'Xã Nguyễn Du', 'Xã Quỳnh An', 'Xã Tân Tiến', 'Xã Hưng Hà', 'Xã Ngự Thiên', 'Xã Long Hưng', 'Xã Diên Hà', 'Xã Thần Khê', 'Xã Tiên La', 'Xã Lê Quý Đôn', 'Xã Hồng Minh', 'Xã Đông Hưng', 'Xã Bắc Đông Hưng', 'Xã Bắc Tiên Hưng', 'Xã Đông Tiên Hưng', 'Xã Bắc Đông Quan', 'Xã Tiên Hưng', 'Xã Nam Tiên Hưng', 'Xã Nam Đông Hưng', 'Xã Đông Quan', 'Phường Trà Lý', 'Xã Thái Thụy', 'Xã Tây Thụy Anh', 'Xã Bắc Thụy Anh', 'Xã Đông Thụy Anh', 'Xã Thụy Anh', 'Xã Nam Thụy Anh', 'Xã Bắc Thái Ninh', 'Xã Tây Thái Ninh', 'Xã Thái Ninh', 'Xã Đông Thái Ninh', 'Xã Nam Thái Ninh', 'Xã Tiền Hải', 'Xã Đông Tiền Hải', 'Xã Đồng Châu', 'Xã Ái Quốc', 'Xã Tây Tiền Hải', 'Xã Nam Cường', 'Xã Nam Tiền Hải', 'Xã Hưng Phú', 'Xã Kiến Xương', 'Xã Trà Giang', 'Xã Bình Nguyên', 'Xã Lê Lợi', 'Xã Quang Lịch', 'Xã Vũ Quý', 'Xã Hồng Vũ', 'Xã Bình Thanh', 'Xã Bình Định', 'Xã Vũ Thư', 'Xã Vạn Xuân', 'Xã Thư Trì', 'Phường Thái Bình', 'Xã Tân Thuận', 'Xã Thư Vũ', 'Xã Vũ Tiên'],
  'Khánh Hòa': ['Phường Bắc Nha Trang', 'Phường Nha Trang', 'Phường Tây Nha Trang', 'Phường Nam Nha Trang', 'Phường Bắc Cam Ranh', 'Phường Cam Ranh', 'Phường Ba Ngòi', 'Phường Cam Linh', 'Xã Cam Hiệp', 'Xã Cam Lâm', 'Xã Cam An', 'Xã Nam Cam Ranh', 'Xã Vạn Ninh', 'Xã Tu Bông', 'Xã Đại Lãnh', 'Xã Vạn Thắng', 'Xã Vạn Hưng', 'Phường Ninh Hòa', 'Xã Bắc Ninh Hòa', 'Xã Tây Ninh Hòa', 'Xã Hòa Trí', 'Phường Đông Ninh Hòa', 'Xã Tân Định', 'Phường Hòa Thắng', 'Xã Nam Ninh Hòa', 'Xã Khánh Vĩnh', 'Xã Trung Khánh Vĩnh', 'Xã Bắc Khánh Vĩnh', 'Xã Tây Khánh Vĩnh', 'Xã Nam Khánh Vĩnh', 'Xã Diên Khánh', 'Xã Diên Điền', 'Xã Diên Lâm', 'Xã Diên Thọ', 'Xã Diên Lạc', 'Xã Suối Hiệp', 'Xã Suối Dầu', 'Xã Khánh Sơn', 'Xã Tây Khánh Sơn', 'Xã Đông Khánh Sơn', 'Đặc khu Trường Sa', 'Phường Đô Vinh', 'Phường Bảo An', 'Phường Phan Rang', 'Phường Đông Hải', 'Xã Bác Ái Tây', 'Xã Bác Ái', 'Xã Bác Ái Đông', 'Xã Ninh Sơn', 'Xã Lâm Sơn', 'Xã Mỹ Sơn', 'Xã Anh Dũng', 'Phường Ninh Chử', 'Xã Công Hải', 'Xã Vĩnh Hải', 'Xã Thuận Bắc', 'Xã Ninh Hải', 'Xã Xuân Hải', 'Xã Ninh Phước', 'Xã Phước Hậu', 'Xã Phước Dinh', 'Xã Phước Hữu', 'Xã Thuận Nam', 'Xã Phước Hà', 'Xã Cà Ná'],
  'Lai Châu': ['Phường Đoàn Kết', 'Xã Bình Lư', 'Xã Sin Suối Hồ', 'Xã Tả Lèng', 'Phường Tân Phong', 'Xã Bản Bo', 'Xã Khun Há', 'Xã Bum Tở', 'Xã Nậm Hàng', 'Xã Thu Lũm', 'Xã Pa Ủ', 'Xã Mường Tè', 'Xã Mù Cả', 'Xã Hua Bum', 'Xã Tà Tổng', 'Xã Bum Nưa', 'Xã Mường Mô', 'Xã Sìn Hồ', 'Xã Lê Lợi', 'Xã Pa Tần', 'Xã Hồng Thu', 'Xã Nậm Tăm', 'Xã Tủa Sín Chải', 'Xã Pu Sam Cáp', 'Xã Nậm Mạ', 'Xã Nậm Cuổi', 'Xã Phong Thổ', 'Xã Sì Lở Lầu', 'Xã Dào San', 'Xã Khổng Lào', 'Xã Than Uyên', 'Xã Tân Uyên', 'Xã Mường Khoa', 'Xã Nậm Sỏ', 'Xã Pắc Ta', 'Xã Mường Than', 'Xã Mường Kim', 'Xã Khoen On'],
  'Lào Cai': ['Phường Lào Cai', 'Phường Cam Đường', 'Xã Hợp Thành', 'Xã Bát Xát', 'Xã A Mú Sung', 'Xã Trịnh Tường', 'Xã Y Tý', 'Xã Dền Sáng', 'Xã Bản Xèo', 'Xã Mường Hum', 'Xã Cốc San', 'Xã Pha Long', 'Xã Mường Khương', 'Xã Cao Sơn', 'Xã Bản Lầu', 'Xã Si Ma Cai', 'Xã Sín Chéng', 'Xã Bắc Hà', 'Xã Tả Củ Tỷ', 'Xã Lùng Phình', 'Xã Bản Liền', 'Xã Bảo Nhai', 'Xã Cốc Lầu', 'Xã Phong Hải', 'Xã Bảo Thắng', 'Xã Tằng Loỏng', 'Xã Gia Phú', 'Xã Xuân Quang', 'Xã Bảo Yên', 'Xã Nghĩa Đô', 'Xã Xuân Hòa', 'Xã Thượng Hà', 'Xã Bảo Hà', 'Xã Phúc Khánh', 'Xã Ngũ Chỉ Sơn', 'Phường Sa Pa', 'Xã Tả Phìn', 'Xã Tả Van', 'Xã Mường Bo', 'Xã Bản Hồ', 'Xã Võ Lao', 'Xã Nậm Chày', 'Xã Văn Bàn', 'Xã Nậm Xé', 'Xã Chiềng Ken', 'Xã Khánh Yên', 'Xã Dương Quỳ', 'Xã Minh Lương', 'Phường Yên Bái', 'Phường Nam Cường', 'Phường Văn Phú', 'Phường Nghĩa Lộ', 'Xã Lục Yên', 'Xã Lâm Thượng', 'Xã Tân Lĩnh', 'Xã Khánh Hòa', 'Xã Mường Lai', 'Xã Phúc Lợi', 'Xã Mậu A', 'Xã Lâm Giang', 'Xã Châu Quế', 'Xã Đông Cuông', 'Xã Phong Dụ Hạ', 'Xã Phong Dụ Thượng', 'Xã Tân Hợp', 'Xã Xuân Ái', 'Xã Mỏ Vàng', 'Xã Mù Cang Chải', 'Xã Nậm Có', 'Xã Khao Mang', 'Xã Lao Chải', 'Xã Chế Tạo', 'Xã Púng Luông', 'Xã Trấn Yên', 'Xã Quy Mông', 'Xã Lương Thịnh', 'Phường Âu Lâu', 'Xã Việt Hồng', 'Xã Hưng Khánh', 'Xã Hạnh Phúc', 'Xã Tà Xi Láng', 'Xã Trạm Tấu', 'Xã Phình Hồ', 'Xã Tú Lệ', 'Xã Gia Hội', 'Xã Sơn Lương', 'Xã Liên Sơn', 'Phường Trung Tâm', 'Xã Văn Chấn', 'Phường Cầu Thia', 'Xã Cát Thịnh', 'Xã Chấn Thịnh', 'Xã Thượng Bằng La', 'Xã Nghĩa Tâm', 'Xã Yên Bình', 'Xã Thác Bà', 'Xã Cảm Nhân', 'Xã Yên Thành', 'Xã Bảo Ái'],
  'Lâm Đồng': ['Phường Mũi Né', 'Phường Phú Thuỷ', 'Phường Hàm Thắng', 'Phường Phan Thiết', 'Phường Tiến Thành', 'Phường Bình Thuận', 'Xã Tuyên Quang', 'Xã Liên Hương', 'Xã Phan Rí Cửa', 'Xã Tuy Phong', 'Xã Vĩnh Hảo', 'Xã Bắc Bình', 'Xã Phan Sơn', 'Xã Hải Ninh', 'Xã Sông Lũy', 'Xã Lương Sơn', 'Xã Hồng Thái', 'Xã Hòa Thắng', 'Xã Hàm Thuận', 'Xã La Dạ', 'Xã Đông Giang', 'Xã Hồng Sơn', 'Xã Hàm Thuận Bắc', 'Xã Hàm Liêm', 'Xã Hàm Thuận Nam', 'Xã Hàm Thạnh', 'Xã Hàm Kiệm', 'Xã Tân Lập', 'Xã Tân Thành', 'Xã Tánh Linh', 'Xã Bắc Ruộng', 'Xã Nghị Đức', 'Xã Đồng Kho', 'Xã Suối Kiết', 'Xã Đức Linh', 'Xã Hoài Đức', 'Xã Nam Thành', 'Xã Trà Tân', 'Xã Tân Minh', 'Phường Phước Hội', 'Phường La Gi', 'Xã Hàm Tân', 'Xã Tân Hải', 'Xã Sơn Mỹ', 'Đặc khu Phú Quý', 'Phường Bắc Gia Nghĩa', 'Phường Nam Gia Nghĩa', 'Xã Quảng Sơn', 'Phường Đông Gia Nghĩa', 'Xã Quảng Hòa', 'Xã Quảng Khê', 'Xã Tà Đùng', 'Xã Cư Jút', 'Xã Đắk Wil', 'Xã Nam Dong', 'Xã Đức Lập', 'Xã Đắk Mil', 'Xã Đắk Sắk', 'Xã Thuận An', 'Xã Krông Nô', 'Xã Nam Đà', 'Xã Nâm Nung', 'Xã Quảng Phú', 'Xã Đức An', 'Xã Đắk Song', 'Xã Thuận Hạnh', 'Xã Trường Xuân', 'Xã Kiến Đức', 'Xã Quảng Trực', 'Xã Tuy Đức', 'Xã Quảng Tân', 'Xã Nhân Cơ', 'Xã Quảng Tín', 'Phường Lâm Viên - Đà Lạt', 'Phường Xuân Hương - Đà Lạt', 'Phường Cam Ly - Đà Lạt', 'Phường Xuân Trường - Đà Lạt', 'Phường 2 Bảo Lộc', 'Phường 1 Bảo Lộc', 'Phường B’Lao', 'Phường 3 Bảo Lộc', 'Phường Lang Biang - Đà Lạt', 'Xã Lạc Dương', 'Xã Đam Rông 4', 'Xã Nam Ban Lâm Hà', 'Xã Đinh Văn Lâm Hà', 'Xã Đam Rông 3', 'Xã Đam Rông 2', 'Xã Nam Hà Lâm Hà', 'Xã Đam Rông 1', 'Xã Phú Sơn Lâm Hà', 'Xã Phúc Thọ Lâm Hà', 'Xã Tân Hà Lâm Hà', 'Xã Đơn Dương', 'Xã D’Ran', 'Xã Ka Đô', 'Xã Quảng Lập', 'Xã Đức Trọng', 'Xã Hiệp Thạnh', 'Xã Tân Hội', 'Xã Ninh Gia', 'Xã Tà Năng', 'Xã Tà Hine', 'Xã Di Linh', 'Xã Đinh Trang Thượng', 'Xã Gia Hiệp', 'Xã Bảo Thuận', 'Xã Hòa Ninh', 'Xã Hòa Bắc', 'Xã Sơn Điền', 'Xã Bảo Lâm 1', 'Xã Bảo Lâm 5', 'Xã Bảo Lâm 4', 'Xã Bảo Lâm 2', 'Xã Bảo Lâm 3', 'Xã Đạ Huoai', 'Xã Đạ Huoai 2', 'Xã Đạ Huoai 3', 'Xã Đạ Tẻh', 'Xã Đạ Tẻh 3', 'Xã Đạ Tẻh 2', 'Xã Cát Tiên', 'Xã Cát Tiên 3', 'Xã Cát Tiên 2'],
  'Lạng Sơn': ['Phường Đông Kinh', 'Phường Lương Văn Tri', 'Phường Tam Thanh', 'Xã Đoàn Kết', 'Xã Quốc Khánh', 'Xã Tân Tiến', 'Xã Kháng Chiến', 'Xã Thất Khê', 'Xã Tràng Định', 'Xã Quốc Việt', 'Xã Hoa Thám', 'Xã Quý Hòa', 'Xã Hồng Phong', 'Xã Thiện Hòa', 'Xã Thiện Thuật', 'Xã Thiện Long', 'Xã Bình Gia', 'Xã Tân Văn', 'Xã Na Sầm', 'Xã Thụy Hùng', 'Xã Hội Hoan', 'Xã Văn Lãng', 'Xã Hoàng Văn Thụ', 'Xã Đồng Đăng', 'Phường Kỳ Lừa', 'Xã Ba Sơn', 'Xã Cao Lộc', 'Xã Công Sơn', 'Xã Văn Quan', 'Xã Điềm He', 'Xã Khánh Khê', 'Xã Yên Phúc', 'Xã Tri Lễ', 'Xã Tân Đoàn', 'xã Bắc Sơn', 'Xã Tân Tri', 'Xã Hưng Vũ', 'Xã Vũ Lễ', 'Xã Vũ Lăng', 'Xã Nhất Hòa', 'Xã Hữu Lũng', 'Xã Yên Bình', 'Xã Hữu Liên', 'Xã Vân Nham', 'Xã Cai Kinh', 'Xã Thiện Tân', 'Xã Tân Thành', 'Xã Tuấn Sơn', 'Xã Chi Lăng', 'Xã Bằng Mạc', 'Xã Chiến Thắng', 'Xã Nhân Lý', 'Xã Vạn Linh', 'Xã Quan Sơn', 'Xã Na Dương', 'Xã Lộc Bình', 'Xã Mẫu Sơn', 'Xã Khuất Xá', 'Xã Thống Nhất', 'Xã Lợi Bác', 'Xã Xuân Dương', 'Xã Đình Lập', 'Xã Thái Bình', 'Xã Kiên Mộc', 'Xã Châu Sơn'],
  'Nghệ An': ['Phường Thành Vinh', 'Phường Trường Vinh', 'Phường Vinh Phú', 'Phường Vinh Lộc', 'Phường Cửa Lò', 'Xã Quế Phong', 'Xã Thông Thụ', 'Xã Tiền Phong', 'Xã Tri Lễ', 'Xã Mường Quàng', 'Xã Quỳ Châu', 'Xã Châu Tiến', 'Xã Hùng Chân', 'Xã Châu Bình', 'Xã Mường Xén', 'Xã Mỹ Lý', 'Xã Bắc Lý', 'Xã Keng Đu', 'Xã Huồi Tụ', 'Xã Mường Lống', 'Xã Na Loi', 'Xã Nậm Cắn', 'Xã Hữu Kiệm', 'Xã Chiêu Lưu', 'Xã Mường Típ', 'Xã Na Ngoi', 'Xã Tương Dương', 'Xã Nhôn Mai', 'Xã Hữu Khuông', 'Xã Nga My', 'Xã Lượng Minh', 'Xã Yên Hòa', 'Xã Yên Na', 'Xã Tam Quang', 'Xã Tam Thái', 'Phường Thái Hòa', 'Xã Nghĩa Đàn', 'Xã Nghĩa Lâm', 'Xã Nghĩa Thọ', 'Xã Nghĩa Hưng', 'Xã Nghĩa Mai', 'Phường Tây Hiếu', 'Xã Đông Hiếu', 'Xã Nghĩa Lộc', 'Xã Nghĩa Khánh', 'Xã Quỳ Hợp', 'Xã Châu Hồng', 'Xã Châu Lộc', 'Xã Tam Hợp', 'Xã Minh Hợp', 'Xã Mường Ham', 'Xã Mường Chọng', 'Phường Hoàng Mai', 'Phường Quỳnh Mai', 'Phường Tân Mai', 'Xã Quỳnh Văn', 'Xã Quỳnh Tam', 'Xã Quỳnh Sơn', 'Xã Quỳnh Anh', 'Xã Quỳnh Lưu', 'Xã Quỳnh Phú', 'Xã Quỳnh Thắng', 'Xã Bình Chuẩn', 'Xã Mậu Thạch', 'Xã Cam Phục', 'Xã Châu Khê', 'Xã Con Cuông', 'Xã Môn Sơn', 'Xã Tân Kỳ', 'Xã Tân Phú', 'Xã Giai Xuân', 'Xã Nghĩa Đồng', 'Xã Tiên Đồng', 'Xã Tân An', 'Xã Nghĩa Hành', 'Xã Anh Sơn', 'Xã Thành Bình Thọ', 'Xã Nhân Hòa', 'Xã Vĩnh Tường', 'Xã Anh Sơn Đông', 'Xã Yên Xuân', 'Xã Hùng Châu', 'Xã Đức Châu', 'Xã Hải Châu', 'Xã Quảng Châu', 'Xã Diễn Châu', 'Xã Minh Châu', 'Xã An Châu', 'Xã Tân Châu', 'Xã Yên Thành', 'Xã Bình Minh', 'Xã Quang Đồng', 'Xã Giai Lạc', 'Xã Đông Thành', 'Xã Vân Du', 'Xã Quan Thành', 'Xã Hợp Minh', 'Xã Vân Tụ', 'Xã Bạch Ngọc', 'Xã Lương Sơn', 'Xã Đô Lương', 'Xã Văn Hiến', 'Xã Thuần Trung', 'Xã Bạch Hà', 'Xã Đại Đồng', 'Xã Hạnh Lâm', 'Xã Cát Ngạn', 'Xã Tam Đồng', 'Xã Sơn Lâm', 'Xã Hoa Quân', 'Xã Xuân Lâm', 'Xã Kim Bảng', 'Xã Bích Hào', 'Xã Nghi Lộc', 'Xã Hải Lộc', 'Xã Thần Lĩnh', 'Xã Văn Kiều', 'Xã Phúc Lộc', 'Xã Trung Lộc', 'Xã Đông Lộc', 'Phường Vinh Hưng', 'Xã Nam Đàn', 'Xã Đại Huệ', 'Xã Vạn An', 'Xã Kim Liên', 'Xã Thiên Nhẫn', 'Xã Hưng Nguyên', 'Xã Yên Trung', 'Xã Hưng Nguyên Nam', 'Xã Lam Thành'],
  'Ninh Bình': ['Phường Phủ Lý', 'Phường Phù Vân', 'Phường Châu Sơn', 'Phường Duy Tiên', 'Phường Duy Tân', 'Phường Duy Hà', 'Phường Đồng Văn', 'Phường Tiên Sơn', 'Phường Hà Nam', 'Phường Kim Bảng', 'Phường Lê Hồ', 'Phường Nguyễn Uý', 'Phường Kim Thanh', 'Phường Tam Chúc', 'Phường Lý Thường Kiệt', 'Phường Liêm Tuyền', 'Xã Liêm Hà', 'Xã Tân Thanh', 'Xã Thanh Bình', 'Xã Thanh Lâm', 'Xã Thanh Liêm', 'Xã Bình Mỹ', 'Xã Bình Lục', 'Xã Bình Giang', 'Xã Bình An', 'Xã Bình Sơn', 'Xã Lý Nhân', 'Xã Bắc Lý', 'Xã Nam Xang', 'Xã Trần Thương', 'Xã Vĩnh Trụ', 'Xã Nhân Hà', 'Xã Nam Lý', 'Phường Nam Định', 'Phường Thiên Trường', 'Phường Đông A', 'Phường Thành Nam', 'Phường Mỹ Lộc', 'Xã Vụ Bản', 'Xã Minh Tân', 'Xã Hiển Khánh', 'Phường Trường Thi', 'Xã Liên Minh', 'Xã Ý Yên', 'Xã Tân Minh', 'Xã Phong Doanh', 'Xã Vũ Dương', 'Xã Vạn Thắng', 'Xã Yên Cường', 'Xã Yên Đồng', 'Xã Nghĩa Hưng', 'Xã Rạng Đông', 'Xã Đồng Thịnh', 'Xã Nghĩa Sơn', 'Xã Hồng Phong', 'Xã Quỹ Nhất', 'Xã Nghĩa Lâm', 'Xã Nam Trực', 'Phường Vị Khê', 'Phường Hồng Quang', 'Xã Nam Hồng', 'Xã Nam Ninh', 'Xã Nam Minh', 'Xã Nam Đồng', 'Xã Cổ Lễ', 'Xã Ninh Giang', 'Xã Trực Ninh', 'Xã Cát Thành', 'Xã Quang Hưng', 'Xã Minh Thái', 'Xã Ninh Cường', 'Xã Xuân Trường', 'Xã Xuân Hồng', 'Xã Xuân Giang', 'Xã Xuân Hưng', 'Xã Giao Minh', 'Xã Giao Thuỷ', 'Xã Giao Hưng', 'Xã Giao Hoà', 'Xã Giao Bình', 'Xã Giao Phúc', 'Xã Giao Ninh', 'Xã Hải Hậu', 'Xã Hải Tiến', 'Xã Hải Thịnh', 'Xã Hải Anh', 'Xã Hải Hưng', 'Xã Hải An', 'Xã Hải Quang', 'Xã Hải Xuân', 'Phường Hoa Lư', 'Phường Nam Hoa Lư', 'Phường Tam Điệp', 'Phường Trung Sơn', 'Phường Yên Sơn', 'Xã Gia Lâm', 'Xã Gia Tường', 'Xã Cúc Phương', 'Xã Phú Sơn', 'Xã Nho Quan', 'Xã Thanh Sơn', 'Xã Quỳnh Lưu', 'Xã Phú Long', 'Xã Gia Viễn', 'Xã Gia Hưng', 'Xã Gia Vân', 'Xã Gia Trấn', 'Xã Đại Hoàng', 'Xã Gia Phong', 'Phường Tây Hoa Lư', 'Xã Yên Khánh', 'Xã Khánh Thiện', 'Phường Đông Hoa Lư', 'Xã Khánh Trung', 'Xã Khánh Nhạc', 'Xã Khánh Hội', 'Xã Phát Diệm', 'Xã Bình Minh', 'Xã Kim Sơn', 'Xã Quang Thiện', 'Xã Chất Bình', 'Xã Lai Thành', 'Xã Định Hóa', 'Xã Kim Đông', 'Xã Yên Mô', 'Phường Yên Thắng', 'Xã Yên Từ', 'Xã Yên Mạc', 'Xã Đồng Thái'],
  'Phú Thọ': ['Phường Tân Hòa', 'Phường Hòa Bình', 'Phường Thống Nhất', 'Xã Đà Bắc', 'Xã Đức Nhàn', 'Xã Tân Pheo', 'Xã Quy Đức', 'Xã Cao Sơn', 'Xã Tiền Phong', 'Phường Kỳ Sơn', 'Xã Thịnh Minh', 'Xã Lương Sơn', 'Xã Liên Sơn', 'Xã Kim Bôi', 'Xã Nật Sơn', 'Xã Mường Động', 'Xã Cao Dương', 'Xã Hợp Kim', 'Xã Dũng Tiến', 'Xã Cao Phong', 'Xã Thung Nai', 'Xã Mường Thàng', 'Xã Tân Lạc', 'Xã Mường Hoa', 'Xã Vân Sơn', 'Xã Mường Bi', 'Xã Toàn Thắng', 'Xã Mai Châu', 'Xã Tân Mai', 'Xã Pà Cò', 'Xã Bao La', 'Xã Mai Hạ', 'Xã Lạc Sơn', 'Xã Mường Vang', 'Xã Nhân Nghĩa', 'Xã Thượng Cốc', 'Xã Yên Phú', 'Xã Quyết Thắng', 'Xã Ngọc Sơn', 'Xã Đại Đồng', 'Xã Yên Thủy', 'Xã Lạc Lương', 'Xã Yên Trị', 'Xã Lạc Thủy', 'Xã An Nghĩa', 'Xã An Bình', 'Phường Nông Trang', 'Phường Việt Trì', 'Phường Thanh Miếu', 'Phường Vân Phú', 'Phường Phú Thọ', 'Phường Âu Cơ', 'Phường Phong Châu', 'Xã Đoan Hùng', 'Xã Bằng Luân', 'Xã Chí Đám', 'Xã Tây Cốc', 'Xã Chân Mộng', 'Xã Hạ Hòa', 'Xã Đan Thượng', 'Xã Hiền Lương', 'Xã Yên Kỳ', 'Xã Văn Lang', 'Xã Vĩnh Chân', 'Xã Thanh Ba', 'Xã Quảng Yên', 'Xã Hoàng Cương', 'Xã Đông Thành', 'Xã Chí Tiên', 'Xã Liên Minh', 'Xã Phù Ninh', 'Xã Phú Mỹ', 'Xã Trạm Thản', 'Xã Dân Chủ', 'Xã Bình Phú', 'Xã Yên Lập', 'Xã Sơn Lương', 'Xã Xuân Viên', 'Xã Trung Sơn', 'Xã Thượng Long', 'Xã Minh Hòa', 'Xã Cẩm Khê', 'Xã Tiên Lương', 'Xã Vân Bán', 'Xã Phú Khê', 'Xã Hùng Việt', 'Xã Đồng Lương', 'Xã Tam Nông', 'Xã Hiền Quan', 'Xã Vạn Xuân', 'Xã Thọ Văn', 'Xã Lâm Thao', 'Xã Xuân Lũng', 'Xã Hy Cương', 'Xã Phùng Nguyên', 'Xã Bản Nguyên', 'Xã Thanh Sơn', 'Xã Thu Cúc', 'Xã Lai Đồng', 'Xã Tân Sơn', 'Xã Võ Miếu', 'Xã Xuân Đài', 'Xã Minh Đài', 'Xã Văn Miếu', 'Xã Cự Đồng', 'Xã Long Cốc', 'Xã Hương Cần', 'Xã Khả Cửu', 'Xã Yên Sơn', 'Xã Đào Xá', 'Xã Thanh Thủy', 'Xã Tu Vũ', 'Phường Vĩnh Yên', 'Phường Vĩnh Phúc', 'Phường Phúc Yên', 'Phường Xuân Hòa', 'Xã Lập Thạch', 'Xã Hợp Lý', 'Xã Yên Lãng', 'Xã Hải Lựu', 'Xã Thái Hòa', 'Xã Liên Hòa', 'Xã Tam Sơn', 'Xã Tiên Lữ', 'Xã Sông Lô', 'Xã Sơn Đông', 'Xã Tam Dương', 'Xã Tam Dương Bắc', 'Xã Hoàng An', 'Xã Hội Thịnh', 'Xã Tam Đảo', 'Xã Đạo Trù', 'Xã Đại Đình', 'Xã Bình Nguyên', 'Xã Bình Tuyền', 'Xã Bình Xuyên', 'Xã Xuân Lãng', 'Xã Yên Lạc', 'Xã Tề Lỗ', 'Xã Tam Hồng', 'Xã Nguyệt Đức', 'Xã Liên Châu', 'Xã Vĩnh Tường', 'Xã Vĩnh An', 'Xã Vĩnh Hưng', 'Xã Vĩnh Thành', 'Xã Thổ Tang', 'Xã Vĩnh Phú'],
  'Quảng Ngãi': ['Phường Cẩm Thành', 'Phường Nghĩa Lộ', 'Xã An Phú', 'Xã Bình Sơn', 'Xã Vạn Tường', 'Xã Bình Minh', 'Xã Bình Chương', 'Xã Đông Sơn', 'Xã Trà Bồng', 'Xã Thanh Bồng', 'Xã Đông Trà Bồng', 'Xã Cà Đam', 'Xã Tây Trà', 'Xã Tây Trà Bồng', 'Phường Trương Quang Trọng', 'Xã Thọ Phong', 'Xã Trường Giang', 'Xã Ba Gia', 'Xã Tịnh Khê', 'Xã Sơn Tịnh', 'Xã Tư Nghĩa', 'Xã Vệ Giang', 'Xã Trà Giang', 'Xã Nghĩa Giang', 'Xã Sơn Hà', 'Xã Sơn Hạ', 'Xã Sơn Linh', 'Xã Sơn Thủy', 'Xã Sơn Kỳ', 'Xã Sơn Tây Thượng', 'Xã Sơn Tây', 'Xã Sơn Tây Hạ', 'Xã Sơn Mai', 'Xã Minh Long', 'Xã Nghĩa Hành', 'Xã Phước Giang', 'Xã Đình Cương', 'Xã Thiện Tín', 'Xã Mộ Đức', 'Xã Long Phụng', 'Xã Mỏ Cày', 'Xã Lân Phong', 'Phường Đức Phổ', 'Phường Trà Câu', 'Xã Nguyễn Nghiêm', 'Xã Khánh Cường', 'Phường Sa Huỳnh', 'Xã Ba Tơ', 'Xã Ba Vinh', 'Xã Ba Động', 'Xã Ba Dinh', 'Xã Đặng Thùy Trâm', 'Xã Ba Tô', 'Xã Ba Vì', 'Xã Ba Xa', 'Đặc khu Lý Sơn', 'Phường Đăk Cấm', 'Phường Kon Tum', 'Phường Đăk Bla', 'Xã Ngọk Bay', 'Xã Ia Chim', 'Xã Đăk Rơ Wa', 'Xã Đăk Pék', 'Xã Đăk Plô', 'Xã Xốp', 'Xã Ngọc Linh', 'Xã Đăk Long', 'Xã Đăk Môn', 'Xã Bờ Y', 'Xã Dục Nông', 'Xã Sa Loong', 'Xã Đăk Tô', 'Xã Đăk Sao', 'Xã Đăk Tờ Kan', 'Xã Tu Mơ Rông', 'Xã Ngọk Tụ', 'Xã Kon Đào', 'Xã Măng Ri', 'Xã Măng Bút', 'Xã Măng Đen', 'Xã Kon Plông', 'Xã Đăk Rve', 'Xã Đăk Kôi', 'Xã Kon Braih', 'Xã Đăk Hà', 'Xã Đăk Pxi', 'Xã Đăk Ui', 'Xã Đăk Mar', 'Xã Ngọk Réo', 'Xã Sa Thầy', 'Xã Rờ Kơi', 'Xã Sa Bình', 'Xã Ia Đal', 'Xã Mô Rai', 'Xã Ia Tơi', 'Xã Ya Ly'],
  'Quảng Ninh': ['Phường Hà Tu', 'Phường Cao Xanh', 'Phường Việt Hưng', 'Phường Bãi Cháy', 'Phường Hà Lầm', 'Phường Hồng Gai', 'Phường Hạ Long', 'Phường Tuần Châu', 'Phường Móng Cái 2', 'Phường Móng Cái 1', 'Xã Hải Sơn', 'Xã Hải Ninh', 'Phường Móng Cái 3', 'Xã Vĩnh Thực', 'Phường Mông Dương', 'Phường Quang Hanh', 'Phường Cửa Ông', 'Phường Cẩm Phả', 'Xã Hải Hòa', 'Phường Uông Bí', 'Phường Vàng Danh', 'Phường Yên Tử', 'Xã Bình Liêu', 'Xã Hoành Mô', 'Xã Lục Hồn', 'Xã Tiên Yên', 'Xã Điền Xá', 'Xã Đông Ngũ', 'Xã Hải Lạng', 'Xã Đầm Hà', 'Xã Quảng Tân', 'Xã Quảng Hà', 'Xã Quảng Đức', 'Xã Đường Hoa', 'Xã Cái Chiên', 'Xã Ba Chẽ', 'Xã Kỳ Thượng', 'Xã Lương Minh', 'Đặc khu Vân Đồn', 'Phường Hoành Bồ', 'Xã Quảng La', 'Xã Thống Nhất', 'Phường Mạo Khê', 'Phường Bình Khê', 'Phường An Sinh', 'Phường Đông Triều', 'Phường Hoàng Quế', 'Phường Quảng Yên', 'Phường Đông Mai', 'Phường Hiệp Hòa', 'Phường Hà An', 'Phường Liên Hòa', 'Phường Phong Cốc', 'Đặc khu Cô Tô'],
  'Quảng Trị': ['Phường Đồng Thuận', 'Phường Đồng Sơn', 'Phường Đồng Hới', 'Xã Minh Hóa', 'Xã Dân Hóa', 'Xã Tân Thành', 'Xã Kim Điền', 'Xã Kim Phú', 'Xã Đồng Lê', 'Xã Tuyên Sơn', 'Xã Tuyên Lâm', 'Xã Tuyên Phú', 'Xã Tuyên Bình', 'Xã Tuyên Hóa', 'Phường Ba Đồn', 'Xã Phú Trạch', 'Xã Trung Thuần', 'Xã Hòa Trạch', 'Xã Tân Gianh', 'Xã Quảng Trạch', 'Phường Bắc Gianh', 'Xã Nam Ba Đồn', 'Xã Nam Gianh', 'Xã Hoàn Lão', 'Xã Bắc Trạch', 'Xã Phong Nha', 'Xã Bố Trạch', 'Xã Thượng Trạch', 'Xã Đông Trạch', 'Xã Nam Trạch', 'Xã Trường Sơn', 'Xã Quảng Ninh', 'Xã Ninh Châu', 'Xã Trường Ninh', 'Xã Lệ Ninh', 'Xã Lệ Thủy', 'Xã Cam Hồng', 'Xã Sen Ngư', 'Xã Tân Mỹ', 'Xã Trường Phú', 'Xã Kim Ngân', 'Phường Đông Hà', 'Phường Nam Đông Hà', 'Phường Quảng Trị', 'Xã Vĩnh Linh', 'Xã Bến Quan', 'Xã Vĩnh Hoàng', 'Xã Vĩnh Thủy', 'Xã Cửa Tùng', 'Xã Khe Sanh', 'Xã Lao Bảo', 'Xã Hướng Lập', 'Xã Hướng Phùng', 'Xã Tân Lập', 'Xã A Dơi', 'Xã Lìa', 'Xã Gio Linh', 'Xã Cửa Việt', 'Xã Bến Hải', 'Xã Cồn Tiên', 'Xã Hướng Hiệp', 'Xã Đakrông', 'Xã Ba Lòng', 'Xã Tà Rụt', 'Xã La Lay', 'Xã Cam Lộ', 'Xã Hiếu Giang', 'Xã Triệu Phong', 'Xã Nam Cửa Việt', 'Xã Triệu Bình', 'Xã Triệu Cơ', 'Xã Ái Tử', 'Xã Diên Sanh', 'Xã Vĩnh Định', 'Xã Hải Lăng', 'Xã Nam Hải Lăng', 'Xã Mỹ Thủy', 'Đặc khu Cồn Cỏ'],
  'Sơn La': ['Phường Tô Hiệu', 'Phường Chiềng An', 'Phường Chiềng Cơi', 'Phường Chiềng Sinh', 'Xã Mường Chiên', 'Xã Mường Giôn', 'Xã Quỳnh Nhai', 'Xã Mường Sại', 'Xã Thuận Châu', 'Xã Bình Thuận', 'Xã Mường É', 'Xã Chiềng La', 'Xã Mường Khiêng', 'Xã Mường Bám', 'Xã Long Hẹ', 'Xã Co Mạ', 'Xã Nậm Lầu', 'Xã Muổi Nọi', 'Xã Mường La', 'Xã Chiềng Lao', 'Xã Ngọc Chiến', 'Xã Mường Bú', 'Xã Chiềng Hoa', 'Xã Bắc Yên', 'Xã Xím Vàng', 'Xã Tà Xùa', 'Xã Pắc Ngà', 'Xã Tạ Khoa', 'Xã Chiềng Sại', 'Xã Suối Tọ', 'Xã Mường Cơi', 'Xã Phù Yên', 'Xã Gia Phù', 'Xã Mường Bang', 'Xã Tường Hạ', 'Xã Kim Bon', 'Xã Tân Phong', 'Phường Mộc Sơn', 'Phường Mộc Châu', 'Phường Thảo Nguyên', 'Xã Chiềng Sơn', 'Xã Tân Yên', 'Xã Đoàn Kết', 'Xã Song Khủa', 'Xã Tô Múa', 'Phường Vân Sơn', 'Xã Lóng Sập', 'Xã Vân Hồ', 'Xã Xuân Nha', 'Xã Yên Châu', 'Xã Chiềng Hặc', 'Xã Yên Sơn', 'Xã Lóng Phiêng', 'Xã Phiêng Khoài', 'Xã Mai Sơn', 'Xã Chiềng Sung', 'Xã Mường Chanh', 'Xã Chiềng Mung', 'Xã Chiềng Mai', 'Xã Tà Hộc', 'Xã Phiêng Cằm', 'Xã Phiêng Pằn', 'Xã Sông Mã', 'Xã Bó Sinh', 'Xã Mường Lầm', 'Xã Nậm Ty', 'Xã Chiềng Sơ', 'Xã Chiềng Khoong', 'Xã Huổi Một', 'Xã Mường Hung', 'Xã Chiềng Khương', 'Xã Púng Bánh', 'Xã Sốp Cộp', 'Xã Mường Lèo', 'Xã Mường Lạn'],
  'Thanh Hóa': ['Phường Hàm Rồng', 'Phường Hạc Thành', 'Phường Bỉm Sơn', 'Phường Quang Trung', 'Xã Mường Lát', 'Xã Tam Chung', 'Xã Mường Lý', 'Xã Trung Lý', 'Xã Quang Chiểu', 'Xã Pù Nhi', 'Xã Nhi Sơn', 'Xã Mường Chanh', 'Xã Hồi Xuân', 'Xã Trung Thành', 'Xã Trung Sơn', 'Xã Phú Lệ', 'Xã Phú Xuân', 'Xã Hiền Kiệt', 'Xã Nam Xuân', 'Xã Thiên Phủ', 'Xã Bá Thước', 'Xã Điền Quang', 'Xã Điền Lư', 'Xã Quý Lương', 'Xã Pù Luông', 'Xã Cổ Lũng', 'Xã Văn Nho', 'Xã Thiết Ống', 'Xã Trung Hạ', 'Xã Tam Thanh', 'Xã Sơn Thủy', 'Xã Na Mèo', 'Xã Quan Sơn', 'Xã Tam Lư', 'Xã Sơn Điện', 'Xã Mường Mìn', 'Xã Yên Khương', 'Xã Yên Thắng', 'Xã Giao An', 'Xã Văn Phú', 'Xã Linh Sơn', 'Xã Đồng Lương', 'Xã Ngọc Lặc', 'Xã Thạch Lập', 'Xã Ngọc Liên', 'Xã Nguyệt Ấn', 'Xã Kiên Thọ', 'Xã Minh Sơn', 'Xã Cẩm Thủy', 'Xã Cẩm Thạch', 'Xã Cẩm Tú', 'Xã Cẩm Vân', 'Xã Cẩm Tân', 'Xã Kim Tân', 'Xã Vân Du', 'Xã Thạch Quảng', 'Xã Thạch Bình', 'Xã Thành Vinh', 'Xã Ngọc Trạo', 'Xã Hà Trung', 'Xã Hà Long', 'Xã Hoạt Giang', 'Xã Lĩnh Toại', 'Xã Tống Sơn', 'Xã Vĩnh Lộc', 'Xã Tây Đô', 'Xã Biện Thượng', 'Xã Yên Phú', 'Xã Quý Lộc', 'Xã Yên Trường', 'Xã Yên Ninh', 'Xã Định Hòa', 'Xã Định Tân', 'Xã Yên Định', 'Xã Thọ Xuân', 'Xã Thọ Long', 'Xã Xuân Hòa', 'Xã Lam Sơn', 'Xã Sao Vàng', 'Xã Thọ Lập', 'Xã Xuân Tín', 'Xã Xuân Lập', 'Xã Bát Mọt', 'Xã Yên Nhân', 'Xã Vạn Xuân', 'Xã Lương Sơn', 'Xã Luận Thành', 'Xã Thắng Lộc', 'Xã Thường Xuân', 'Xã Xuân Chinh', 'Xã Tân Thành', 'Xã Triệu Sơn', 'Xã Thọ Bình', 'Xã Hợp Tiến', 'Xã Tân Ninh', 'Xã Đồng Tiến', 'Xã Thọ Ngọc', 'Xã Thọ Phú', 'Xã An Nông', 'Xã Thiệu Hóa', 'Xã Thiệu Tiến', 'Xã Thiệu Quang', 'Xã Thiệu Toán', 'Xã Thiệu Trung', 'Phường Đông Tiến', 'Xã Hoằng Hóa', 'Xã Hoằng Giang', 'Xã Hoằng Phú', 'Xã Hoằng Sơn', 'Phường Nguyệt Viên', 'Xã Hoằng Lộc', 'Xã Hoằng Châu', 'Xã Hoằng Tiến', 'Xã Hoằng Thanh', 'Xã Hậu Lộc', 'Xã Triệu Lộc', 'Xã Đông Thành', 'Xã Hoa Lộc', 'Xã Vạn Lộc', 'Xã Nga Sơn', 'Xã Tân Tiến', 'Xã Nga Thắng', 'Xã Hồ Vương', 'Xã Nga An', 'Xã Ba Đình', 'Xã Như Xuân', 'Xã Xuân Bình', 'Xã Hóa Quỳ', 'Xã Thanh Phong', 'Xã Thanh Quân', 'Xã Thượng Ninh', 'Xã Như Thanh', 'Xã Xuân Du', 'Xã Mậu Lâm', 'Xã Xuân Thái', 'Xã Yên Thọ', 'Xã Thanh Kỳ', 'Xã Nông Cống', 'Xã Trung Chính', 'Xã Thắng Lợi', 'Xã Thăng Bình', 'Xã Trường Văn', 'Xã Tượng Lĩnh', 'Xã Công Chính', 'Phường Đông Sơn', 'Phường Đông Quang', 'Xã Lưu Vệ', 'Xã Quảng Yên', 'Xã Quảng Chính', 'Xã Quảng Ngọc', 'Phường Nam Sầm Sơn', 'Phường Quảng Phú', 'Phường Sầm Sơn', 'Xã Quảng Ninh', 'Xã Quảng Bình', 'Xã Tiên Trang', 'Phường Tĩnh Gia', 'Phường Ngọc Sơn', 'Xã Các Sơn', 'Phường Tân Dân', 'Phường Hải Lĩnh', 'Phường Đào Duy Từ', 'Phường Trúc Lâm', 'Xã Trường Lâm', 'Phường Hải Bình', 'Phường Nghi Sơn'],
  'Thái Nguyên': ['Phường Đức Xuân', 'Phường Bắc Kạn', 'Xã Phong Quang', 'Xã Bằng Thành', 'Xã Cao Minh', 'Xã Nghiên Loan', 'Xã Phúc Lộc', 'Xã Ba Bể', 'Xã Chợ Rã', 'Xã Thượng Minh', 'Xã Đồng Phúc', 'Xã Nà Phặc', 'Xã Bằng Vân', 'Xã Ngân Sơn', 'Xã Thượng Quan', 'Xã Hiệp Lực', 'Xã Phủ Thông', 'Xã Vĩnh Thông', 'Xã Cẩm Giàng', 'Xã Bạch Thông', 'Xã Chợ Đồn', 'Xã Nam Cường', 'Xã Quảng Bạch', 'Xã Yên Thịnh', 'Xã Nghĩa Tá', 'Xã Yên Phong', 'Xã Chợ Mới', 'Xã Thanh Mai', 'Xã Tân Kỳ', 'Xã Thanh Thịnh', 'Xã Yên Bình', 'Xã Văn Lang', 'Xã Cường Lợi', 'Xã Na Rì', 'Xã Trần Phú', 'Xã Côn Minh', 'Xã Xuân Dương', 'Phường Phan Đình Phùng', 'Phường Quyết Thắng', 'Phường Gia Sàng', 'Phường Quan Triều', 'Xã Đại Phúc', 'Phường Tích Lương', 'Xã Tân Cương', 'Phường Sông Công', 'Phường Bách Quang', 'Phường Bá Xuyên', 'Xã Lam Vỹ', 'Xã Kim Phượng', 'Xã Phượng Tiến', 'Xã Định Hóa', 'Xã Trung Hội', 'Xã Bình Yên', 'Xã Phú Đình', 'Xã Bình Thành', 'Xã Phú Lương', 'Xã Yên Trạch', 'Xã Hợp Thành', 'Xã Vô Tranh', 'Xã Trại Cau', 'Xã Văn Lăng', 'Xã Quang Sơn', 'Xã Văn Hán', 'Xã Đồng Hỷ', 'Xã Nam Hòa', 'Phường Linh Sơn', 'Xã Võ Nhai', 'Xã Sảng Mộc', 'Xã Nghinh Tường', 'Xã Thần Sa', 'Xã La Hiên', 'Xã Tràng Xá', 'Xã Dân Tiến', 'Xã Phú Xuyên', 'Xã Đức Lương', 'Xã Phú Lạc', 'Xã Phú Thịnh', 'Xã An Khánh', 'Xã La Bằng', 'Xã Đại Từ', 'Xã Vạn Phú', 'Xã Quân Chu', 'Phường Phúc Thuận', 'Phường Phổ Yên', 'Xã Thành Công', 'Phường Vạn Xuân', 'Phường Trung Thành', 'Xã Phú Bình', 'Xã Tân Khánh', 'Xã Tân Thành', 'Xã Điềm Thụy', 'Xã Kha Sơn'],
  'Tuyên Quang': ['Phường Hà Giang 2', 'Phường Hà Giang 1', 'Xã Ngọc Đường', 'Xã Phú Linh', 'Xã Lũng Cú', 'Xã Đồng Văn', 'Xã Sà Phìn', 'Xã Phố Bảng', 'Xã Lũng Phìn', 'Xã Mèo Vạc', 'Xã Sơn Vĩ', 'Xã Sủng Máng', 'Xã Khâu Vai', 'Xã Tát Ngà', 'Xã Niêm Sơn', 'Xã Yên Minh', 'Xã Thắng Mố', 'Xã Bạch Đích', 'Xã Mậu Duệ', 'Xã Ngọc Long', 'Xã Đường Thượng', 'Xã Du Già', 'Xã Quản Bạ', 'Xã Cán Tỷ', 'Xã Nghĩa Thuận', 'Xã Tùng Vài', 'Xã Lùng Tám', 'Xã Vị Xuyên', 'Xã Minh Tân', 'Xã Thuận Hoà', 'Xã Tùng Bá', 'Xã Thanh Thủy', 'Xã Lao Chải', 'Xã Cao Bồ', 'Xã Thượng Sơn', 'Xã Việt Lâm', 'Xã Linh Hồ', 'Xã Bạch Ngọc', 'Xã Minh Sơn', 'Xã Giáp Trung', 'Xã Bắc Mê', 'Xã Minh Ngọc', 'Xã Yên Cường', 'Xã Đường Hồng', 'Xã Hoàng Su Phì', 'Xã Bản Máy', 'Xã Thàng Tín', 'Xã Tân Tiến', 'Xã Pờ Ly Ngài', 'Xã Nậm Dịch', 'Xã Hồ Thầu', 'Xã Thông Nguyên', 'Xã Pà Vầy Sủ', 'Xã Xín Mần', 'Xã Trung Thịnh', 'Xã Nấm Dẩn', 'Xã Quảng Nguyên', 'Xã Khuôn Lùng', 'Xã Bắc Quang', 'Xã Vĩnh Tuy', 'Xã Đồng Tâm', 'Xã Tân Quang', 'Xã Bằng Hành', 'Xã Liên Hiệp', 'Xã Hùng An', 'Xã Đồng Yên', 'Xã Tiên Nguyên', 'Xã Yên Thành', 'Xã Quang Bình', 'Xã Tân Trịnh', 'Xã Bằng Lang', 'Xã Xuân Giang', 'Xã Tiên Yên', 'Phường Nông Tiến', 'Phường Minh Xuân', 'Xã Nà Hang', 'Xã Thượng Nông', 'Xã Côn Lôn', 'Xã Yên Hoa', 'Xã Hồng Thái', 'Xã Lâm Bình', 'Xã Thượng Lâm', 'Xã Chiêm Hoá', 'Xã Bình An', 'Xã Minh Quang', 'Xã Trung Hà', 'Xã Tân Mỹ', 'Xã Yên Lập', 'Xã Tân An', 'Xã Kiên Đài', 'Xã Kim Bình', 'Xã Hoà An', 'Xã Tri Phú', 'Xã Yên Nguyên', 'Xã Hàm Yên', 'Xã Bạch Xa', 'Xã Phù Lưu', 'Xã Yên Phú', 'Xã Bình Xa', 'Xã Thái Sơn', 'Xã Thái Hoà', 'Xã Hùng Đức', 'Xã Lực Hành', 'Xã Kiến Thiết', 'Xã Xuân Vân', 'Xã Hùng Lợi', 'Xã Trung Sơn', 'Xã Tân Long', 'Xã Yên Sơn', 'Xã Thái Bình', 'Phường Mỹ Lâm', 'Phường An Tường', 'Phường Bình Thuận', 'Xã Nhữ Khê', 'Xã Sơn Dương', 'Xã Tân Trào', 'Xã Bình Ca', 'Xã Minh Thanh', 'Xã Đông Thọ', 'Xã Tân Thanh', 'Xã Hồng Sơn', 'Xã Phú Lương', 'Xã Sơn Thuỷ', 'Xã Trường Sinh'],
  'Tây Ninh': ['Phường Tân Ninh', 'Phường Bình Minh', 'Xã Tân Biên', 'Xã Tân Lập', 'Xã Thạnh Bình', 'Xã Trà Vong', 'Xã Tân Châu', 'Xã Tân Đông', 'Xã Tân Hội', 'Xã Tân Hòa', 'Xã Tân Thành', 'Xã Tân Phú', 'Xã Dương Minh Châu', 'Phường Ninh Thạnh', 'Xã Cầu Khởi', 'Xã Lộc Ninh', 'Xã Châu Thành', 'Xã Hảo Đước', 'Xã Phước Vinh', 'Xã Hòa Hội', 'Xã Ninh Điền', 'Phường Long Hoa', 'Phường Thanh Điền', 'Phường Hòa Thành', 'Phường Gò Dầu', 'Xã Thạnh Đức', 'Xã Phước Thạnh', 'Xã Truông Mít', 'Phường Gia Lộc', 'Xã Bến Cầu', 'Xã Long Chữ', 'Xã Long Thuận', 'Phường Trảng Bàng', 'Xã Hưng Thuận', 'Xã Phước Chỉ', 'Phường An Tịnh', 'Phường Long An', 'Phường Tân An', 'Phường Khánh Hậu', 'Xã Tân Hưng', 'Xã Hưng Điền', 'Xã Vĩnh Thạnh', 'Xã Vĩnh Châu', 'Xã Vĩnh Hưng', 'Xã Khánh Hưng', 'Xã Tuyên Bình', 'Phường Kiến Tường', 'Xã Bình Hiệp', 'Xã Bình Hòa', 'Xã Tuyên Thạnh', 'Xã Mộc Hóa', 'Xã Tân Thạnh', 'Xã Nhơn Hòa Lập', 'Xã Hậu Thạnh', 'Xã Nhơn Ninh', 'Xã Thạnh Hóa', 'Xã Bình Thành', 'Xã Thạnh Phước', 'Xã Tân Tây', 'Xã Đông Thành', 'Xã Mỹ Quý', 'Xã Đức Huệ', 'Xã Hậu Nghĩa', 'Xã Đức Hòa', 'Xã An Ninh', 'Xã Hiệp Hòa', 'Xã Đức Lập', 'Xã Mỹ Hạnh', 'Xã Hòa Khánh', 'Xã Bến Lức', 'Xã Thạnh Lợi', 'Xã Lương Hòa', 'Xã Bình Đức', 'Xã Mỹ Yên', 'Xã Thủ Thừa', 'Xã Mỹ Thạnh', 'Xã Mỹ An', 'Xã Tân Long', 'Xã Tân Trụ', 'Xã Nhựt Tảo', 'Xã Vàm Cỏ', 'Xã Cần Đước', 'Xã Rạch Kiến', 'Xã Long Cang', 'Xã Mỹ Lệ', 'Xã Tân Lân', 'Xã Long Hựu', 'Xã Cần Giuộc', 'Xã Phước Lý', 'Xã Mỹ Lộc', 'Xã Phước Vĩnh Tây', 'Xã Tân Tập', 'Xã Tầm Vu', 'Xã Vĩnh Công', 'Xã Thuận Mỹ', 'Xã An Lục Long'],
  'Vĩnh Long': ['Phường Phú Khương', 'Phường An Hội', 'Phường Sơn Đông', 'Phường Bến Tre', 'Xã Giao Long', 'Xã Phú Túc', 'Xã Tân Phú', 'Phường Phú Tân', 'Xã Tiên Thủy', 'Xã Chợ Lách', 'Xã Phú Phụng', 'Xã Vĩnh Thành', 'Xã Hưng Khánh Trung', 'Xã Mỏ Cày', 'Xã Phước Mỹ Trung', 'Xã Tân Thành Bình', 'Xã Đồng Khởi', 'Xã Nhuận Phú Tân', 'Xã An Định', 'Xã Thành Thới', 'Xã Hương Mỹ', 'Xã Giồng Trôm', 'Xã Lương Hòa', 'Xã Lương Phú', 'Xã Châu Hòa', 'Xã Phước Long', 'Xã Tân Hào', 'Xã Hưng Nhượng', 'Xã Bình Đại', 'Xã Phú Thuận', 'Xã Lộc Thuận', 'Xã Châu Hưng', 'Xã Thạnh Trị', 'Xã Thạnh Phước', 'Xã Thới Thuận', 'Xã Ba Tri', 'Xã Mỹ Chánh Hòa', 'Xã Bảo Thạnh', 'Xã Tân Xuân', 'Xã An Ngãi Trung', 'Xã An Hiệp', 'Xã Tân Thủy', 'Xã Thạnh Phú', 'Xã Quới Điền', 'Xã Đại Điền', 'Xã Thạnh Hải', 'Xã An Qui', 'Xã Thạnh Phong', 'Phường Trà Vinh', 'Phường Nguyệt Hóa', 'Phường Long Đức', 'Xã Càng Long', 'Xã An Trường', 'Xã Tân An', 'Xã Bình Phú', 'Xã Nhị Long', 'Xã Cầu Kè', 'Xã An Phú Tân', 'Xã Phong Thạnh', 'Xã Tam Ngãi', 'Xã Tiểu Cần', 'Xã Hùng Hòa', 'Xã Tập Ngãi', 'Xã Tân Hòa', 'Xã Châu Thành', 'Xã Song Lộc', 'Phường Hòa Thuận', 'Xã Hưng Mỹ', 'Xã Hòa Minh', 'Xã Long Hòa', 'Xã Cầu Ngang', 'Xã Mỹ Long', 'Xã Vinh Kim', 'Xã Nhị Trường', 'Xã Hiệp Mỹ', 'Xã Trà Cú', 'Xã Tập Sơn', 'Xã Lưu Nghiệp Anh', 'Xã Hàm Giang', 'Xã Đại An', 'Xã Đôn Châu', 'Xã Long Hiệp', 'Phường Duyên Hải', 'Xã Long Thành', 'Phường Trường Long Hòa', 'Xã Long Hữu', 'Xã Ngũ Lạc', 'Xã Long Vĩnh', 'Xã Đông Hải', 'Phường Long Châu', 'Phường Phước Hậu', 'Phường Tân Ngãi', 'Xã An Bình', 'Phường Thanh Đức', 'Phường Tân Hạnh', 'Xã Long Hồ', 'Xã Phú Quới', 'Xã Nhơn Phú', 'Xã Bình Phước', 'Xã Cái Nhum', 'Xã Tân Long Hội', 'Xã Trung Thành', 'Xã Quới An', 'Xã Quới Thiện', 'Xã Trung Hiệp', 'Xã Trung Ngãi', 'Xã Hiếu Phụng', 'Xã Hiếu Thành', 'Xã Tam Bình', 'Xã Cái Ngang', 'Xã Hòa Hiệp', 'Xã Song Phú', 'Xã Ngãi Tứ', 'Phường Cái Vồn', 'Phường Bình Minh', 'Xã Tân Lược', 'Xã Mỹ Thuận', 'Xã Tân Quới', 'Phường Đông Thành', 'Xã Trà Ôn', 'Xã Hòa Bình', 'Xã Trà Côn', 'Xã Vĩnh Xuân', 'Xã Lục Sĩ Thành'],
  'Điện Biên': ['Phường Điện Biên Phủ', 'Phường Mường Lay', 'Xã Sín Thầu', 'Xã Mường Nhé', 'Xã Nậm Kè', 'Xã Mường Toong', 'Xã Quảng Lâm', 'Xã Mường Chà', 'Xã Nà Hỳ', 'Xã Na Sang', 'Xã Chà Tở', 'Xã Nà Bủng', 'Xã Mường Tùng', 'Xã Pa Ham', 'Xã Nậm Nèn', 'Xã Si Pa Phìn', 'Xã Mường Pồn', 'Xã Na Son', 'Xã Xa Dung', 'Xã Mường Luân', 'Xã Tủa Chùa', 'Xã Tủa Thàng', 'Xã Sín Chải', 'Xã Sính Phình', 'Xã Sáng Nhè', 'Xã Tuần Giáo', 'Xã Mường Ảng', 'Xã Pú Nhung', 'Xã Mường Mùn', 'Xã Chiềng Sinh', 'Xã Quài Tở', 'Xã Búng Lao', 'Xã Mường Lạn', 'Xã Nà Tấu', 'Xã Mường Phăng', 'Xã Thanh Nưa', 'Phường Mường Thanh', 'Xã Thanh Yên', 'Xã Thanh An', 'Xã Sam Mứn', 'Xã Núa Ngam', 'Xã Mường Nhà', 'Xã Pu Nhi', 'Xã Phình Giàng', 'Xã Tìa Dình'],
  'Đắk Lắk': ['Phường Tuy Hòa', 'Phường Bình Kiến', 'Phường Sông Cầu', 'Xã Xuân Lộc', 'Xã Xuân Cảnh', 'Xã Xuân Thọ', 'Phường Xuân Đài', 'Xã Đồng Xuân', 'Xã Xuân Lãnh', 'Xã Phú Mỡ', 'Xã Xuân Phước', 'Xã Tuy An Bắc', 'Xã Tuy An Đông', 'Xã Tuy An Tây', 'Xã Ô Loan', 'Xã Tuy An Nam', 'Xã Sơn Hòa', 'Xã Tây Sơn', 'Xã Vân Hòa', 'Xã Suối Trai', 'Xã Sông Hinh', 'Xã Đức Bình', 'Xã Ea Bá', 'Xã Ea Ly', 'Phường Phú Yên', 'Xã Sơn Thành', 'Xã Tây Hòa', 'Phường Đông Hòa', 'Phường Hòa Hiệp', 'Xã Hòa Thịnh', 'Xã Hòa Mỹ', 'Xã Hòa Xuân', 'Xã Phú Hòa 2', 'Xã Phú Hòa 1', 'Phường Tân Lập', 'Phường Buôn Ma Thuột', 'Phường Thành Nhất', 'Phường Tân An', 'Phường Ea Kao', 'Xã Hòa Phú', 'Xã Ea Drăng', 'Xã Ea H’Leo', 'Xã Ea Hiao', 'Xã Ea Wy', 'Xã Ea Khăl', 'Xã Ea Súp', 'Xã Ia Lốp', 'Xã Ea Rốk', 'Xã Ia Rvê', 'Xã Ea Bung', 'Xã Buôn Đôn', 'Xã Ea Wer', 'Xã Ea Nuôl', 'Xã Quảng Phú', 'Xã Ea Kiết', 'Xã Ea Tul', 'Xã Cư M’gar', 'Xã Ea M’Droh', 'Xã Cuôr Đăng', 'Phường Buôn Hồ', 'Xã Krông Búk', 'Xã Cư Pơng', 'Xã Pơng Drang', 'Xã Ea Drông', 'Phường Cư Bao', 'Xã Krông Năng', 'Xã Dliê Ya', 'Xã Tam Giang', 'Xã Phú Xuân', 'Xã Ea Kar', 'Xã Ea Knốp', 'Xã Ea Păl', 'Xã Ea Ô', 'Xã Cư Yang', 'Xã M’Drắk', 'Xã Cư Prao', 'Xã Ea Riêng', 'Xã Cư M’ta', 'Xã Krông Á', 'Xã Ea Trang', 'Xã Krông Bông', 'Xã Dang Kang', 'Xã Hòa Sơn', 'Xã Cư Pui', 'Xã Yang Mao', 'Xã Krông Pắc', 'Xã Ea Kly', 'Xã Ea Phê', 'Xã Ea Knuếc', 'Xã Tân Tiến', 'Xã Vụ Bổn', 'Xã Krông Ana', 'Xã Ea Ning', 'Xã Ea Ktur', 'Xã Ea Na', 'Xã Dray Bhăng', 'Xã Dur Kmăl', 'Xã Liên Sơn Lắk', 'Xã Đắk Liêng', 'Xã Đắk Phơi', 'Xã Krông Nô', 'Xã Nam Ka'],
  'Đồng Nai': ['Phường Bình Phước', 'Phường Đồng Xoài', 'Phường Phước Long', 'Phường Phước Bình', 'Xã Bù Gia Mập', 'Xã Đăk Ơ', 'Xã Đa Kia', 'Xã Bình Tân', 'Xã Phú Riềng', 'Xã Long Hà', 'Xã Phú Trung', 'Xã Phú Nghĩa', 'Xã Lộc Ninh', 'Xã Lộc Tấn', 'Xã Lộc Thạnh', 'Xã Lộc Quang', 'Xã Lộc Thành', 'Xã Lộc Hưng', 'Xã Thiện Hưng', 'Xã Hưng Phước', 'Xã Tân Tiến', 'Phường Bình Long', 'Phường An Lộc', 'Xã Tân Hưng', 'Xã Minh Đức', 'Xã Tân Quan', 'Xã Tân Khai', 'Xã Đồng Phú', 'Xã Tân Lợi', 'Xã Thuận Lợi', 'Xã Đồng Tâm', 'Xã Bù Đăng', 'Xã Đak Nhau', 'Xã Thọ Sơn', 'Xã Bom Bo', 'Xã Nghĩa Trung', 'Xã Phước Sơn', 'Phường Chơn Thành', 'Phường Minh Hưng', 'Xã Nha Bích', 'Phường Trảng Dài', 'Phường Hố Nai', 'Phường Tam Hiệp', 'Phường Long Bình', 'Phường Trấn Biên', 'Phường Biên Hòa', 'Phường Long Khánh', 'Phường Bình Lộc', 'Phường Bảo Vinh', 'Phường Xuân Lập', 'Phường Hàng Gòn', 'Xã Tân Phú', 'Xã Đak Lua', 'Xã Nam Cát Tiên', 'Xã Tà Lài', 'Xã Phú Lâm', 'Xã Trị An', 'Xã Phú Lý', 'Xã Tân An', 'Phường Tân Triều', 'Xã Định Quán', 'Xã Thanh Sơn', 'Xã Phú Vinh', 'Xã Phú Hòa', 'Xã La Ngà', 'Xã Trảng Bom', 'Xã Bàu Hàm', 'Xã Bình Minh', 'Xã Hưng Thịnh', 'Xã An Viễn', 'Xã Thống Nhất', 'Xã Gia Kiệm', 'Xã Dầu Giây', 'Xã Xuân Quế', 'Xã Cẩm Mỹ', 'Xã Xuân Đường', 'Xã Xuân Đông', 'Xã Sông Ray', 'Xã Long Thành', 'Phường Tam Phước', 'Phường Phước Tân', 'Phường Long Hưng', 'Xã An Phước', 'Xã Bình An', 'Xã Long Phước', 'Xã Phước Thái', 'Xã Xuân Lộc', 'Xã Xuân Bắc', 'Xã Xuân Thành', 'Xã Xuân Hòa', 'Xã Xuân Phú', 'Xã Xuân Định', 'Xã Nhơn Trạch', 'Xã Đại Phước', 'Xã Phước An'],
  'Đồng Tháp': ['Phường Đạo Thạnh', 'Phường Mỹ Tho', 'Phường Thới Sơn', 'Phường Mỹ Phong', 'Phường Trung An', 'Phường Long Thuận', 'Phường Gò Công', 'Phường Bình Xuân', 'Xã Tân Phước 1', 'Xã Tân Phước 2', 'Xã Hưng Thạnh', 'Xã Tân Phước 3', 'Xã Cái Bè', 'Xã Hậu Mỹ', 'Xã Mỹ Thiện', 'Xã Hội Cư', 'Xã Mỹ Đức Tây', 'Xã Mỹ Lợi', 'Xã Thanh Hưng', 'Xã An Hữu', 'Phường Mỹ Phước Tây', 'Phường Thanh Hòa', 'Phường Cai Lậy', 'Xã Thạnh Phú', 'Xã Mỹ Thành', 'Xã Tân Phú', 'Xã Bình Phú', 'Phường Nhị Quý', 'Xã Hiệp Đức', 'Xã Long Tiên', 'Xã Ngũ Hiệp', 'Xã Châu Thành', 'Xã Tân Hương', 'Xã Long Hưng', 'Xã Long Định', 'Xã Bình Trưng', 'Xã Vĩnh Kim', 'Xã Kim Sơn', 'Xã Chợ Gạo', 'Xã Mỹ Tịnh An', 'Xã Lương Hòa Lạc', 'Xã Tân Thuận Bình', 'Xã An Thạnh Thủy', 'Xã Bình Ninh', 'Xã Vĩnh Bình', 'Xã Đồng Sơn', 'Xã Phú Thành', 'Xã Vĩnh Hựu', 'Xã Long Bình', 'Xã Tân Thới', 'Xã Tân Phú Đông', 'Xã Tân Hòa', 'Xã Gia Thuận', 'Xã Tân Đông', 'Phường Sơn Qui', 'Xã Tân Điền', 'Xã Gò Công Đông', 'Phường Cao Lãnh', 'Phường Mỹ Ngãi', 'Phường Mỹ Trà', 'Phường Sa Đéc', 'Xã Tân Hồng', 'Xã Tân Hộ Cơ', 'Xã Tân Thành', 'Xã An Phước', 'Phường An Bình', 'Phường Hồng Ngự', 'Xã Thường Phước', 'Phường Thường Lạc', 'Xã Long Khánh', 'Xã Long Phú Thuận', 'Xã Tràm Chim', 'Xã Tam Nông', 'Xã An Hòa', 'Xã Phú Cường', 'Xã An Long', 'Xã Phú Thọ', 'Xã Tháp Mười', 'Xã Phương Thịnh', 'Xã Trường Xuân', 'Xã Mỹ Quí', 'Xã Đốc Binh Kiều', 'Xã Thanh Mỹ', 'Xã Mỹ Thọ', 'Xã Ba Sao', 'Xã Phong Mỹ', 'Xã Mỹ Hiệp', 'Xã Bình Hàng Trung', 'Xã Thanh Bình', 'Xã Tân Long', 'Xã Tân Thạnh', 'Xã Bình Thành', 'Xã Lấp Vò', 'Xã Mỹ An Hưng', 'Xã Tân Khánh Trung', 'Xã Hòa Long', 'Xã Tân Dương', 'Xã Lai Vung', 'Xã Phong Hòa', 'Xã Phú Hựu', 'Xã Tân Nhuận Đông', 'Xã Tân Phú Trung'],
};

function populateWardOptions(provinceSelectId, wardSelectId) {
  const provinceSelect = document.getElementById(provinceSelectId);
  const wardSelect = document.getElementById(wardSelectId);
  if (!provinceSelect || !wardSelect) return;

  const province = provinceSelect.value;
  const wards = provinceWardMap[province] || ['Chưa có dữ liệu'];

  wardSelect.innerHTML = '<option value="">Chọn xã</option>' + wards.map((ward) => {
    return `<option value="${ward}">${ward}</option>`;
  }).join('');
}

function bindProvinceWardSelects() {
  const pairs = [
    ['o-province', 'o-ward'],
    ['m-province', 'm-ward']
  ];

  pairs.forEach(([provinceId, wardId]) => {
    const provinceSelect = document.getElementById(provinceId);
    const wardSelect = document.getElementById(wardId);
    if (!provinceSelect || !wardSelect) return;

    provinceSelect.addEventListener('change', () => {
      populateWardOptions(provinceId, wardId);
    });
  });
}

// ─── Quantity counter ───────────────────────────────────────
let qty = 1;
const PRICE = 90000;
function changeQty(delta) {
  qty = Math.max(1, Math.min(20, qty + delta));
  document.getElementById('qty-display').textContent = qty;
  document.getElementById('total-display').textContent =
    (qty * PRICE).toLocaleString('vi-VN') + 'đ';
  updatePaymentSelection();
}

function formatCustomerName(name) {
  return name.trim().replace(/\s+/g, ' ') || 'KhachHang';
}

function formatCustomerPhone(phone) {
  const digits = (phone || '').replace(/\D/g, '');
  return digits || '0000000000';
}

function buildQrPayload() {
  const name = formatCustomerName(document.getElementById('o-name').value);
  const phone = formatCustomerPhone(document.getElementById('o-phone').value);
  const amount = qty * PRICE;
  const bankAccount = '8603062003';
  const content = `LDQ_${name}_${phone}`;
  const accountName = 'HTX San Xuat & Kinh Doanh Lien Hoa Chi';
  return {
    content,
    amount,
    bankAccount,
    accountName,
    textAmount: amount.toLocaleString('vi-VN') + 'đ',
    qrUrl: `https://img.vietqr.io/image/MB-${bankAccount}-compact.png?amount=${amount}&addInfo=${encodeURIComponent(content)}&accountName=${encodeURIComponent(accountName)}`
  };
}

function updatePaymentSelection() {
  const method = document.querySelector('input[name="payment-method"]:checked')?.value || 'cod';
  const codBox = document.getElementById('cod-payment-box');
  const qrBox = document.getElementById('qr-payment-box');
  const qrCode = document.getElementById('qr-code');
  const qrContent = document.getElementById('qr-content');
  const qrAmount = document.getElementById('qr-amount');
  const caption = document.getElementById('payment-caption');

  if (method === 'qr') {
    codBox.classList.add('hidden');
    qrBox.classList.remove('hidden');
    caption.textContent = 'Quét mã QR để chuyển khoản trực tiếp qua MBank. Hệ thống sẽ nhận đúng số tiền và nội dung chuyển khoản.';

    const { content, qrUrl, textAmount } = buildQrPayload();
    qrContent.textContent = content;
    qrAmount.textContent = textAmount;
    qrCode.src = qrUrl;
    qrCode.alt = 'Mã QR chuyển khoản MBank';
  } else {
    qrBox.classList.add('hidden');
    codBox.classList.remove('hidden');
    caption.textContent = 'Quét mã QR để chuyển khoản trực tiếp qua MBank. Hệ thống sẽ nhận đúng số tiền và nội dung chuyển khoản.';
  }
}

document.querySelectorAll('input[name="payment-method"]').forEach((radio) => {
  radio.addEventListener('change', updatePaymentSelection);
});

document.getElementById('o-name').addEventListener('input', updatePaymentSelection);
document.getElementById('o-phone').addEventListener('input', updatePaymentSelection);

const lightbox = document.getElementById('image-lightbox');
const lightboxImage = document.getElementById('lightbox-image');
const closeLightbox = document.getElementById('close-lightbox');

document.querySelectorAll('.gallery-thumb').forEach((thumb) => {
  thumb.addEventListener('click', () => {
    const src = thumb.getAttribute('data-image');
    if (!src || !lightbox || !lightboxImage) return;
    lightboxImage.src = src;
    lightbox.classList.remove('hidden');
    lightbox.classList.add('flex');
  });
});

if (closeLightbox) {
  closeLightbox.addEventListener('click', () => {
    if (!lightbox) return;
    lightbox.classList.add('hidden');
    lightbox.classList.remove('flex');
    lightboxImage.src = '';
  });
}

if (lightbox) {
  lightbox.addEventListener('click', (event) => {
    if (event.target === lightbox) {
      lightbox.classList.add('hidden');
      lightbox.classList.remove('flex');
      lightboxImage.src = '';
    }
  });
}

bindProvinceWardSelects();

// ─── Scroll to the order form and preselect the product ─────
function scrollToOrder(productName = '') {
  const orderSection = document.getElementById('order');
  if (orderSection) {
    orderSection.scrollIntoView({ behavior: 'smooth', block: 'start' });
  }

  if (!productName) return;

  const sel = document.getElementById('o-product');
  if (!sel) return;

  for (let i = 0; i < sel.options.length; i++) {
    if (sel.options[i].text.startsWith(productName)) {
      sel.selectedIndex = i;
      break;
    }
  }
}

function openOrder(productName) {
  const sel = document.getElementById('o-product');
  if (sel) {
    for (let i = 0; i < sel.options.length; i++) {
      if (sel.options[i].text.startsWith(productName)) {
        sel.selectedIndex = i;
        break;
      }
    }
  }
  scrollToOrder(productName);
}

// ─── Quick order form submit ─────────────────────────────────
function submitOrder(e) {
  e.preventDefault();
  showToast();
  e.target.reset();
  qty = 1; changeQty(0);
}

function submitModalOrder(e) {
  e.preventDefault();
  document.getElementById('order-modal').classList.add('hidden');
  showToast();
  e.target.reset();
}

function showToast() {
  const t = document.getElementById('success-toast');
  t.classList.remove('hidden');
  setTimeout(() => t.classList.add('hidden'), 4000);
}

// ─── Track order ─────────────────────────────────────────────
function trackOrder() {
  const v = document.getElementById('track-input').value.trim();
  const r = document.getElementById('track-result');
  if(!v) return;
  r.classList.remove('hidden');
  r.innerHTML = '<em>Đang tra cứu...</em>';
  setTimeout(() => {
    r.innerHTML = `
      <div class="flex items-center gap-2 mb-1">
        <span class="bg-green-500 w-2 h-2 rounded-full"></span>
        <strong class="text-white">Đơn #LHC${Date.now().toString().slice(-6)}</strong>
      </div>
      <p>Trạng thái: <span class="text-green-300 font-medium">Đang giao hàng</span></p>
      <p class="mt-0.5">Dự kiến nhận: hôm nay trước 17:00</p>
    `;
  }, 1200);
}

// ─── Chatbot ─────────────────────────────────────────────────
const botAnswers = {
  'tiểu đường': 'Bạn nên thử <strong>Trà Thìa Canh An Đường</strong> – giúp điều hòa đường huyết, ức chế hấp thu glucose. Giá 90.000đ/hộp 40 túi.',
  'giảm cân': '<strong>Trà Cần Tây</strong> là lựa chọn tốt nhất – hỗ trợ giảm cân hiệu quả, thải độc và cân bằng nội tiết tố.',
  'gan': '<strong>Trà Cà Gai Leo</strong> (rau má, mã đề, cỏ ngọt) – hỗ trợ hạ men gan, giải độc và bảo vệ gan rất tốt.',
  'đặt hàng': 'Bạn có thể đặt hàng ngay trên trang này! Điền form → Chọn sản phẩm → Xác nhận. Giao nhanh trong ngày tại Phú Thọ. Giá 90.000đ/hộp.',
  'giá': 'Tất cả sản phẩm trà hiện có giá <strong>90.000đ/hộp 40 túi lọc</strong>. Miễn phí ship cho đơn từ 200.000đ.',
  'default': 'Cảm ơn bạn đã hỏi! Để tư vấn chính xác hơn, hãy gọi <strong>0833 231 111</strong> – chúng tôi hỗ trợ 7:30–17:30 các ngày trong tuần.'
};

function toggleChat() {
  const p = document.getElementById('chat-panel');
  p.classList.toggle('hidden');
  if(!p.classList.contains('hidden')) {
    setTimeout(() => document.getElementById('chat-input').focus(), 100);
  }
}

function addMessage(text, isUser) {
  const c = document.getElementById('chat-messages');
  const div = document.createElement('div');
  div.className = 'flex gap-2 ' + (isUser ? 'justify-end' : '');
  if(isUser) {
    div.innerHTML = `<div class="bg-forest-600 text-white rounded-xl rounded-tr-sm px-3 py-2 text-xs max-w-[85%] leading-relaxed">${text}</div>`;
  } else {
    div.innerHTML = `
      <div class="w-6 h-6 bg-forest-200 rounded-full flex items-center justify-center text-xs shrink-0">🌿</div>
      <div class="bg-white rounded-xl rounded-tl-sm px-3 py-2 text-xs text-forest-700 max-w-[85%] border border-forest-100 leading-relaxed">${text}</div>`;
  }
  c.appendChild(div);
  c.scrollTop = c.scrollHeight;
}

function addTyping() {
  const c = document.getElementById('chat-messages');
  const div = document.createElement('div');
  div.id = 'typing-indicator';
  div.className = 'flex gap-2';
  div.innerHTML = `
    <div class="w-6 h-6 bg-forest-200 rounded-full flex items-center justify-center text-xs shrink-0">🌿</div>
    <div class="bg-white rounded-xl rounded-tl-sm px-3 py-2.5 border border-forest-100 flex items-center gap-1">
      <span class="w-1.5 h-1.5 bg-forest-400 rounded-full dot1"></span>
      <span class="w-1.5 h-1.5 bg-forest-400 rounded-full dot2"></span>
      <span class="w-1.5 h-1.5 bg-forest-400 rounded-full dot3"></span>
    </div>`;
  c.appendChild(div);
  c.scrollTop = c.scrollHeight;
}

function getBotResponse(msg) {
  const m = msg.toLowerCase();
  for(const [key, val] of Object.entries(botAnswers)) {
    if(key !== 'default' && m.includes(key)) return val;
  }
  return botAnswers.default;
}

function sendMessage() {
  const inp = document.getElementById('chat-input');
  const msg = inp.value.trim();
  if(!msg) return;
  inp.value = '';
  addMessage(msg, true);
  addTyping();
  setTimeout(() => {
    document.getElementById('typing-indicator')?.remove();
    addMessage(getBotResponse(msg), false);
  }, 900 + Math.random() * 600);
}

function sendQuick(text) {
  document.getElementById('chat-input').value = text;
  sendMessage();
}
</script>

</body>
</html>