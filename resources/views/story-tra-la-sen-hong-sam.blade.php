<!DOCTYPE html>
<html lang="vi" class="scroll-smooth">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Trà Lá Sen Hồng Sâm | Liên Hoa Chi</title>
  
  <!-- Google Fonts: Hỗ trợ tiếng Việt trọn vẹn, không lỗi dấu -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,600;0,700;1,600&family=Plus+Jakarta+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">
  
  <script src="https://cdn.tailwindcss.com"></script>
  <script>
    tailwind.config = {
      theme: {
        extend: {
          colors: {
            forest: {
              50: '#f4f8f4',
              100: '#e3efe4',
              200: '#c7dec9',
              300: '#9ec4a2',
              400: '#6fa475',
              500: '#47854e',
              600: '#346b3b',
              700: '#2a5531',
              800: '#234429',
              900: '#1d3923',
              950: '#0d1f12'
            },
            earth: {
              50: '#fdf9f5',
              100: '#fbf4ee',
              200: '#f4e3d3',
              400: '#cf915f',
              500: '#b77744',
              600: '#a36233',
              700: '#844b27'
            }
          },
          fontFamily: {
            serif: ['"Playfair Display"', 'Georgia', 'serif'],
            sans: ['"Plus Jakarta Sans"', 'Segoe UI', 'sans-serif']
          }
        }
      }
    }
  </script>
  <style>
    ::-webkit-scrollbar {
      width: 8px;
    }
    ::-webkit-scrollbar-track {
      background: #f4f8f4;
    }
    ::-webkit-scrollbar-thumb {
      background: #9ec4a2;
      border-radius: 4px;
    }
    ::-webkit-scrollbar-thumb:hover {
      background: #47854e;
    }
  </style>
</head>
<header class="sticky top-0 z-50 bg-cream/90 backdrop-blur-sm border-b border-forest-100">
  <div class="max-w-6xl mx-auto px-4 h-16 flex items-center justify-between gap-4">

    <!-- Logo -->
    <a href="/" class="flex items-center gap-2 shrink-0" aria-label="Liên Hoa Chi">
      <img src="images/logo.jpg" alt="Liên Hoa Chi Logo" class="w-10 h-10 object-contain"/>
      <span class="font-serif font-700 text-forest-800 text-xl leading-tight">Liên Hoa Chi</span>
    </a>

    <!-- Nav Desktop -->
    <nav class="hidden md:flex items-center gap-6 text-sm font-medium text-forest-700">
      <a href="/#products" class="hover:text-forest-500 transition-colors">Sản phẩm</a>
      <a href="/#benefits" class="hover:text-forest-500 transition-colors">Công dụng</a>
      <a href="/#order" class="hover:text-forest-500 transition-colors">Đặt hàng</a>
      <a href="/#contact" class="hover:text-forest-500 transition-colors">Liên hệ</a>
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
    <a href="/#products" class="block py-2 text-sm font-medium text-forest-700">Sản phẩm</a>
    <a href="/#benefits" class="block py-2 text-sm font-medium text-forest-700">Công dụng</a>
    <a href="/#order" class="block py-2 text-sm font-medium text-forest-700">Đặt hàng</a>
    <a href="/#contact" class="block py-2 text-sm font-medium text-forest-700">Liên hệ</a>
    <a href="/cau-chuyen-tra-la-sen-hong-sam" class="block py-2 text-sm font-semibold text-forest-900">Câu chuyện</a>
    <a href="/quy-trinh-san-xuat" class="block py-2 text-sm font-medium text-forest-700">Quy trình</a>
    <button onclick="scrollToOrder()"
      class="w-full bg-forest-600 text-white text-sm font-medium py-2.5 rounded-lg mt-1">Đặt hàng ngay</button>
  </div>
</header>
<body class="bg-forest-50 text-forest-900 font-sans antialiased selection:bg-forest-200 selection:text-forest-900 min-h-screen flex flex-col justify-between">

  <!-- Hiệu ứng ánh sáng nền dịu nhẹ -->
  <div class="fixed inset-0 pointer-events-none -z-10 overflow-hidden">
    <div class="absolute -top-32 -right-32 w-96 h-96 bg-forest-200/40 rounded-full blur-3xl"></div>
    <div class="absolute top-1/2 -left-32 w-96 h-96 bg-earth-200/30 rounded-full blur-3xl"></div>
  </div>

  <main class="max-w-6xl mx-auto px-4 sm:px-6 py-8 md:py-14 w-full">
    
    <!-- Khối thẻ nội dung sản phẩm chính -->
    <article class="bg-white rounded-3xl border border-forest-100 shadow-[0_10px_35px_rgba(29,57,35,0.05)] overflow-hidden">
      <!-- Dải màu gradient tạo điểm nhấn trên cùng -->
      <div class="h-1.5 w-full bg-gradient-to-r from-forest-500 via-earth-500 to-forest-600"></div>

      <div class="grid lg:grid-cols-[1.18fr_0.82fr] items-stretch">
        
        <!-- CỘT TRÁI: Câu chuyện & Mô tả sản phẩm -->
        <div class="p-6 sm:p-8 md:p-12 flex flex-col justify-between">
          <div>
            <!-- Huy hiệu phân loại -->
            <div class="flex flex-wrap items-center gap-2.5 mb-4">
              <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full text-xs font-semibold uppercase tracking-wider bg-earth-100 text-earth-700 border border-earth-200">
                <span class="w-2 h-2 rounded-full bg-earth-500 animate-pulse"></span>
                Câu chuyện sản phẩm
              </span>
              <span class="text-forest-400">•</span>
              <span class="text-xs font-medium text-forest-600 uppercase tracking-wide">Trà thảo mộc cao cấp</span>
            </div>

            <!-- Tên sản phẩm với Font chuẩn không lỗi dấu -->
            <h1 class="font-serif font-bold text-3xl sm:text-4xl text-forest-900 leading-[1.25] mb-6">
              Trà Lá Sen Hồng Sâm
            </h1>

            <!-- Đoạn 1: Lịch sử & Nguồn gốc bài thuốc -->
            <div class="relative pl-4 border-l-2 border-earth-400 mb-5">
              <p class="text-forest-700 leading-relaxed text-base sm:text-lg italic font-serif">
                “Từ xa xưa, lá sen đã là nguyên liệu quen thuộc trong đời sống người Việt và là vị thuốc quý dân gian. Khi được danh y Đông Y chỉ cho bài thuốc dưỡng sinh, HTX Liên Hoa Chi đã kết tinh nguyên liệu này cùng các thảo dược quý để tạo nên vị trà an lành.”
              </p>
            </div>

            <!-- Đoạn 2: Nguồn nguyên liệu & Giá trị sức khỏe -->
            <p class="text-forest-700 leading-relaxed text-sm sm:text-base mb-4">
              Sản phẩm được chọn lọc từ vùng đất phù hợp nhất cho cây sen phát triển, giữ trọn tinh chất tự nhiên và giá trị dinh dưỡng của lá sen tươi. Trà Lá Sen Hồng Sâm là lựa chọn lý tưởng để nhâm nhi mỗi ngày, hỗ trợ thanh nhiệt, giảm căng thẳng và chăm sóc sức khỏe một cách nhẹ nhàng, bền bỉ.
            </p>

            <!-- Đoạn 3: Hương vị thanh nhã & Giá trị quà tặng -->
            <p class="text-forest-700 leading-relaxed text-sm sm:text-base mb-6">
              Hương thơm ngát đặc trưng của hoa sen, hoa nhài hòa quyện cùng vị ngọt hậu tự nhiên từ cỏ ngọt và táo đỏ. Vừa dễ uống, vừa thanh lọc cơ thể, sản phẩm còn là món quà tri ân tinh tế dành tặng người thân và đối tác trong những dịp đặc biệt.
            </p>

            <!-- Các đặc tính nổi bật dạng thẻ nhỏ -->
            <div class="grid grid-cols-2 gap-3 mb-8 p-4 rounded-2xl bg-forest-50/70 border border-forest-100">
              <div class="flex items-start gap-2.5">
                <span class="text-forest-600 text-base">🍵</span>
                <div>
                  <h4 class="text-xs font-bold text-forest-800 uppercase tracking-wider">Hương vị</h4>
                  <p class="text-xs text-forest-600">Thanh khiết, hậu ngọt dịu</p>
                </div>
              </div>
              <div class="flex items-start gap-2.5">
                <span class="text-earth-500 text-base">❤️</span>
                <div>
                  <h4 class="text-xs font-bold text-forest-800 uppercase tracking-wider">Công dụng</h4>
                  <p class="text-xs text-forest-600">Thư thái tinh thần, thanh lọc</p>
                </div>
              </div>
            </div>
          </div>

          <!-- Nút hành động -->
          <div class="pt-6 border-t border-forest-100 flex flex-wrap items-center gap-3.5">
            <a href="/#products" class="inline-flex items-center justify-center gap-2 bg-forest-600 hover:bg-forest-700 active:scale-95 text-white font-medium px-6 py-3 rounded-full transition-all duration-200 text-sm shadow-md hover:shadow-lg">
              <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z" />
              </svg>
              <span>Mua sản phẩm</span>
            </a>
            
            <a href="#" target="_blank" rel="noopener noreferrer" class="inline-flex items-center justify-center gap-2 bg-white hover:bg-forest-50 active:scale-95 text-forest-700 font-medium px-5 py-3 rounded-full border border-forest-200 hover:border-forest-300 transition-all duration-200 text-sm">
              <span>Xem bài viết</span>
              <svg class="w-3.5 h-3.5 text-forest-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14" />
              </svg>
            </a>
          </div>
        </div>

        <!-- CỘT PHẢI: Hình ảnh & Bảng 6 Vị Thảo Mộc Cân Đối -->
        <div class="p-6 sm:p-8 bg-forest-50/60 border-t lg:border-t-0 lg:border-l border-forest-100 flex flex-col justify-between gap-6">
          
          <!-- 2 Ảnh đại diện với tỉ lệ đẹp & hiệu ứng phóng to -->
          <div>
            <div class="flex items-center justify-between mb-3">
              <span class="text-xs font-semibold uppercase text-forest-600 tracking-wider">Hình ảnh thực tế</span>
              <span class="text-xs text-forest-500 italic">Nhấp ảnh để xem rõ</span>
            </div>

            <div class="grid grid-cols-2 gap-3.5">
              <!-- Ảnh 1: Hoa sen thiên nhiên -->
              <div onclick="openLightbox('https://i.imgur.com/OEFDovJ.jpg', 'Hoa sen tươi ngát hương - Vùng trồng chuẩn sạch Liên Hoa Chi')" 
                   class="group cursor-pointer relative rounded-2xl overflow-hidden shadow-sm hover:shadow-md border border-forest-100 bg-white aspect-[4/3]">
                <img 
                  src="https://i.imgur.com/OEFDovJ.jpg" 
                  alt="Hoa sen tươi Liên Hoa Chi" 
                  class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105"
                  onerror="this.src='data:image/svg+xml;utf8,<svg xmlns=\'http://www.w3.org/2000/svg\' width=\'100\' height=\'100\' fill=\'%2347854e\' viewBox=\'0 0 24 24\'><path d=\'M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8z\'/></svg>';"
                />
                <div class="absolute inset-0 bg-forest-950/20 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center">
                  <span class="p-2 rounded-full bg-white/90 text-forest-800 shadow">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0zM10 7v6m3-3H7"/></svg>
                  </span>
                </div>
                <div class="absolute bottom-2 left-2 pointer-events-none">
                  <span class="px-2 py-0.5 rounded-md text-[10px] font-semibold bg-black/60 text-white backdrop-blur-sm">
                    Vùng Sen Sạch
                  </span>
                </div>
              </div>

              <!-- Ảnh 2: Hộp Trà Lá Sen -->
              <div onclick="openLightbox('https://i.imgur.com/7oKDYJC.jpg', 'Hộp Trà Lá Sen Hồng Sâm - Đóng gói sang trọng, tinh tế')" 
                   class="group cursor-pointer relative rounded-2xl overflow-hidden shadow-sm hover:shadow-md border border-forest-100 bg-white aspect-[4/3]">
                <img 
                  src="https://i.imgur.com/7oKDYJC.jpg" 
                  alt="Hộp Trà Lá Sen Hồng Sâm" 
                  class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105"
                  onerror="this.src='data:image/svg+xml;utf8,<svg xmlns=\'http://www.w3.org/2000/svg\' width=\'100\' height=\'100\' fill=\'%2347854e\' viewBox=\'0 0 24 24\'><path d=\'M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8z\'/></svg>';"
                />
                <div class="absolute inset-0 bg-forest-950/20 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center">
                  <span class="p-2 rounded-full bg-white/90 text-forest-800 shadow">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0zM10 7v6m3-3H7"/></svg>
                  </span>
                </div>
                <div class="absolute bottom-2 left-2 pointer-events-none">
                  <span class="px-2 py-0.5 rounded-md text-[10px] font-semibold bg-black/60 text-white backdrop-blur-sm">
                    Thành Phẩm
                  </span>
                </div>
              </div>
            </div>
          </div>

          <!-- Khối thành phần 6 vị thảo dược (Giúp lấp đầy khoảng trắng và cân bằng chiều cao) -->
          <div class="bg-white rounded-2xl p-5 border border-forest-100 shadow-sm">
            <div class="flex items-center gap-2 mb-3.5">
              <span class="w-2 h-2 rounded-full bg-forest-500"></span>
              <h3 class="text-xs font-bold uppercase tracking-wider text-forest-800">
                Hòa quyện 6 vị thảo dược quý
              </h3>
            </div>
            
            <div class="grid grid-cols-2 gap-2 text-xs">
              <div class="p-2.5 rounded-xl bg-forest-50 border border-forest-100/80">
                <span class="font-bold text-forest-900 block">🌿 Lá Sen Già</span>
                <span class="text-forest-600 text-[11px]">Thanh nhiệt, an thần</span>
              </div>
              <div class="p-2.5 rounded-xl bg-forest-50 border border-forest-100/80">
                <span class="font-bold text-earth-700 block">🪵 Hồng Sâm</span>
                <span class="text-forest-600 text-[11px]">Bồi bổ nguyên khí</span>
              </div>
              <div class="p-2.5 rounded-xl bg-forest-50 border border-forest-100/80">
                <span class="font-bold text-forest-900 block">🌼 Hoa Nhài</span>
                <span class="text-forest-600 text-[11px]">Hương thơm thư giãn</span>
              </div>
              <div class="p-2.5 rounded-xl bg-forest-50 border border-forest-100/80">
                <span class="font-bold text-forest-900 block">🍃 Sơn Mật</span>
                <span class="text-forest-600 text-[11px]">Mát gan, thanh giọng</span>
              </div>
              <div class="p-2.5 rounded-xl bg-forest-50 border border-forest-100/80">
                <span class="font-bold text-forest-900 block">🌱 Cỏ Ngọt</span>
                <span class="text-forest-600 text-[11px]">Vị ngọt không calo</span>
              </div>
              <div class="p-2.5 rounded-xl bg-forest-50 border border-forest-100/80">
                <span class="font-bold text-earth-700 block">🍎 Táo Đỏ</span>
                <span class="text-forest-600 text-[11px]">Dưỡng huyết, đẹp da</span>
              </div>
            </div>
          </div>

          <!-- Cam kết nhỏ góc dưới -->
          <div class="flex items-center justify-between text-[11px] text-forest-600 px-2">
            <span class="flex items-center gap-1">
              <svg class="w-3.5 h-3.5 text-forest-600" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
              Không chất bảo quản
            </span>
            <span class="flex items-center gap-1">
              <svg class="w-3.5 h-3.5 text-forest-600" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
              100% Tự nhiên
            </span>
          </div>

        </div>

      </div>
    </article>

    <!-- Khối liên hệ & hỗ trợ nhanh -->
    <div class="mt-8 p-6 rounded-2xl bg-white border border-forest-100 shadow-sm flex flex-col sm:flex-row items-center justify-between gap-4">
      <div class="flex items-center gap-3">
        <div class="w-10 h-10 rounded-full bg-forest-100 text-forest-700 flex items-center justify-center font-bold text-lg">
          📞
        </div>
        <div>
          <p class="text-xs text-forest-500 font-medium">Cần hỗ trợ thông tin sản phẩm?</p>
          <p class="text-sm font-bold text-forest-800">Liên hệ HTX Liên Hoa Chi để được tư vấn chi tiết</p>
        </div>
      </div>
      <a href="/#contact" class="px-5 py-2.5 rounded-xl bg-forest-100 hover:bg-forest-200 text-forest-800 text-xs font-semibold transition-colors">
        Tư vấn ngay
      </a>
    </div>

  </main>

  <!-- Footer đơn giản -->
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

  <!-- Lightbox Popup Xem Ảnh Lớn -->
  <div id="imageLightbox" class="fixed inset-0 z-50 bg-black/80 backdrop-blur-sm hidden items-center justify-center p-4" onclick="closeLightbox()">
    <div class="relative max-w-2xl w-full max-h-[90vh] flex flex-col items-center" onclick="event.stopPropagation()">
      <button onclick="closeLightbox()" class="absolute -top-11 right-0 text-white hover:text-earth-400 p-2 text-2xl font-bold transition-colors">
        ✕
      </button>
      <img id="lightboxImg" src="" alt="" class="max-w-full max-h-[75vh] object-contain rounded-2xl shadow-2xl bg-white/10 border border-white/20" />
      <p id="lightboxCaption" class="mt-3 text-center text-white/90 text-sm font-medium"></p>
    </div>
  </div>

  <script>
    function openLightbox(src, caption) {
      const modal = document.getElementById('imageLightbox');
      const img = document.getElementById('lightboxImg');
      const cap = document.getElementById('lightboxCaption');
      img.src = src;
      cap.textContent = caption || '';
      modal.classList.remove('hidden');
      modal.classList.add('flex');
      document.body.style.overflow = 'hidden';
    }

    function closeLightbox() {
      const modal = document.getElementById('imageLightbox');
      modal.classList.add('hidden');
      modal.classList.remove('flex');
      document.body.style.overflow = '';
    }

    document.addEventListener('keydown', function(e) {
      if (e.key === 'Escape') closeLightbox();
    });
  </script>

</body>
</html>