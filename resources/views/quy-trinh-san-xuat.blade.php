<!DOCTYPE html>
<html lang="vi" class="scroll-smooth">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Quy Trình Sản Xuất Tiêu Chuẩn | Liên Hoa Chi</title>
  
  <!-- Google Fonts: Plus Jakarta Sans & Playfair Display chuẩn hiển thị tiếng Việt -->
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
    /* Thanh cuộn trang nhã */
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
    <a href="/cau-chuyen-tra-la-sen-hong-sam" class="block py-2 text-sm font-medium text-forest-700">Câu chuyện</a>
    <a href="/quy-trinh-san-xuat" class="block py-2 text-sm font-semibold text-forest-900">Quy trình</a>
    <button onclick="scrollToOrder()"
      class="w-full bg-forest-600 text-white text-sm font-medium py-2.5 rounded-lg mt-1">Đặt hàng ngay</button>
  </div>
</header>

<body class="bg-forest-50 text-forest-900 font-sans antialiased selection:bg-forest-200 selection:text-forest-900 min-h-screen flex flex-col justify-between">
  <!-- Background trang trí ánh sáng tự nhiên -->
  <div class="fixed inset-0 pointer-events-none -z-10 overflow-hidden">
    <div class="absolute -top-40 -right-40 w-96 h-96 bg-forest-200/40 rounded-full blur-3xl"></div>
    <div class="absolute top-1/2 -left-40 w-96 h-96 bg-earth-200/30 rounded-full blur-3xl"></div>
  </div>
  <main class="max-w-6xl mx-auto px-4 sm:px-6 py-8 md:py-14 w-full">

    <!-- Giới Thiệu Quy Trình -->
    <section class="relative bg-white rounded-3xl border border-forest-100/80 shadow-[0_10px_30px_rgba(29,57,35,0.04)] overflow-hidden">
      <!-- Dải màu nhấn thương hiệu -->
      <div class="h-1.5 w-full bg-gradient-to-r from-forest-500 via-earth-500 to-forest-600"></div>
      <div class="px-6 py-10 md:px-12 md:py-14">
        <div class="flex flex-wrap items-center gap-2.5 mb-4">
          <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full text-xs font-semibold uppercase tracking-wider bg-earth-100 text-earth-700 border border-earth-200">
            <span class="w-2 h-2 rounded-full bg-earth-500 animate-pulse"></span>
            Tiêu Chuẩn Khép Kín
          </span>
          <span class="text-forest-400">•</span>
          <span class="text-xs font-medium text-forest-600 tracking-wide uppercase">Thảo mộc tự nhiên</span>
        </div>
        <h1 class="font-serif font-bold text-3xl sm:text-4xl md:text-5xl text-forest-900 leading-[1.2] mb-6">
          Quy trình sản xuất sản phẩm<br class="hidden sm:inline" />
          <span class="text-forest-600 italic">Liên Hoa Chi</span>
        </h1>
            <p class="text-forest-700 text-base md:text-lg font-normal text-justify">
            Tại <strong class="font-semibold text-forest-800">Liên Hoa Chi</strong>, mỗi sản phẩm được tạo ra từ chuỗi khép kín khởi nguồn từ nguyên liệu tự nhiên, chọn lọc vùng trồng đạt chuẩn, cùng quy trình sấy nhiệt thấp và kiểm định nghiêm ngặt. Từng công đoạn đều hướng tới việc bảo toàn trọn vẹn dưỡng chất, sắc hương thuần khiết và an toàn cao nhất cho sức khỏe người tiêu dùng.
            </p>
        <!-- 3 Điểm nhấn cam kết chất lượng -->
        <div class="grid grid-cols-2 sm:grid-cols-3 gap-3 md:gap-4 mt-8 pt-8 border-t border-forest-100">
          <div class="flex items-center gap-3">
            <div class="w-10 h-10 rounded-xl bg-forest-50 border border-forest-200 flex items-center justify-center text-forest-700 flex-shrink-0 text-lg">
              🌿
            </div>
            <div>
              <p class="text-xs text-forest-500 font-medium">Nguyên liệu</p>
              <p class="text-sm font-semibold text-forest-800">100% Thiên Nhiên</p>
            </div>
          </div>
          <div class="flex items-center gap-3">
            <div class="w-10 h-10 rounded-xl bg-forest-50 border border-forest-200 flex items-center justify-center text-forest-700 flex-shrink-0 text-lg">
              ⚙️
            </div>
            <div>
              <p class="text-xs text-forest-500 font-medium">Công nghệ</p>
              <p class="text-sm font-semibold text-forest-800">Sấy Khép Kín</p>
            </div>
          </div>
          <div class="flex items-center gap-3 col-span-2 sm:col-span-1">
            <div class="w-10 h-10 rounded-xl bg-forest-50 border border-forest-200 flex items-center justify-center text-forest-700 flex-shrink-0 text-lg">
              🛡️
            </div>
            <div>
              <p class="text-xs text-forest-500 font-medium">Chất lượng</p>
              <p class="text-sm font-semibold text-forest-800">Chuẩn VSATTP</p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Section: Video Quy Trình (Các thẻ và text được cân bằng chiều cao tuyệt đối) -->
    <section class="mt-14">
      <div class="flex flex-col sm:flex-row sm:items-end justify-between mb-8 gap-2">
        <div>
          <span class="text-earth-600 text-xs font-bold tracking-widest uppercase mb-1 block">Minh bạch quy trình</span>
          <h2 class="font-serif text-2xl md:text-3xl font-bold text-forest-900">Video các bước thực hiện</h2>
        </div>
        <p class="text-xs sm:text-sm text-forest-500 italic">Theo dõi từng thước phim thực tế tại xưởng sản xuất</p>
      </div>
      <!-- Grid 3 cột video: Chiều cao đồng đều với flex flex-col -->
      <div class="grid md:grid-cols-3 gap-6 items-stretch">
        
        <!-- Bước 1 -->
        <div class="bg-white rounded-3xl border border-forest-100 shadow-[0_4px_20px_rgba(29,57,35,0.05)] hover:shadow-lg transition-all duration-300 overflow-hidden flex flex-col h-full group">
          <!-- Khung video cố định tỉ lệ 4:3 -->
          <div class="relative w-full aspect-[4/3] bg-forest-900 overflow-hidden">
            <video class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-[1.02]" controls playsinline preload="metadata" poster="/images/thumb_3406.jpg">
              <source src="/images/IMG_3406.mp4" type="video/mp4" />
              Trình duyệt không hỗ trợ xem video.
            </video>
            <div class="absolute top-3 left-3 pointer-events-none">
              <span class="px-2.5 py-1 rounded-full text-xs font-semibold bg-forest-900/80 text-white backdrop-blur-sm border border-white/20">
                Bước 01
              </span>
            </div>
          </div>
          
          <!-- Phần text căn chỉnh đồng bộ -->
          <div class="p-6 flex flex-col flex-1 justify-between bg-white">
            <div>
              <h3 class="font-bold text-forest-800 text-lg leading-snug mb-2 group-hover:text-forest-600 transition-colors">
                Giai đoạn 1: Tuyển chọn nguyên liệu
              </h3>
              <p class="text-forest-600 text-sm leading-relaxed">
                Chọn lọc 100% thảo mộc tự nhiên từ vùng trồng hữu cơ đạt chuẩn, thu hoạch vào thời điểm hàm lượng dược tính cao nhất.
              </p>
            </div>
            <div class="mt-4 pt-3 border-t border-forest-50 flex items-center justify-between text-xs text-forest-500">
              <span class="inline-flex items-center gap-1 font-medium text-forest-700">
                <svg class="w-3.5 h-3.5 text-forest-500" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
                Kiểm định nguồn gốc
              </span>
              <span class="font-mono font-medium text-earth-500">01 / 03</span>
            </div>
          </div>
        </div>
        <!-- Bước 2 -->
        <div class="bg-white rounded-3xl border border-forest-100 shadow-[0_4px_20px_rgba(29,57,35,0.05)] hover:shadow-lg transition-all duration-300 overflow-hidden flex flex-col h-full group">
          <!-- Khung video cố định tỉ lệ 4:3 -->
          <div class="relative w-full aspect-[4/3] bg-forest-900 overflow-hidden">
            <video class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-[1.02]" controls playsinline preload="metadata" poster="/images/thumb_3407.jpg">
              <source src="/images/IMG_3407.mp4" type="video/mp4" />
              Trình duyệt không hỗ trợ xem video.
            </video>
            <div class="absolute top-3 left-3 pointer-events-none">
              <span class="px-2.5 py-1 rounded-full text-xs font-semibold bg-forest-900/80 text-white backdrop-blur-sm border border-white/20">
                Bước 02
              </span>
            </div>
          </div>
          
          <!-- Phần text căn chỉnh đồng bộ -->
          <div class="p-6 flex flex-col flex-1 justify-between bg-white">
            <div>
              <h3 class="font-bold text-forest-800 text-lg leading-snug mb-2 group-hover:text-forest-600 transition-colors">
                Giai đoạn 2: Sơ chế & Sấy nhiệt thấp
              </h3>
              <p class="text-forest-600 text-sm leading-relaxed">
                Ứng dụng buồng sấy khép kín hiện đại kiểm soát nhiệt độ nghiêm ngặt, giữ trọn sắc hương, vị thanh và dược chất quý giá.
              </p>
            </div>
            <div class="mt-4 pt-3 border-t border-forest-50 flex items-center justify-between text-xs text-forest-500">
              <span class="inline-flex items-center gap-1 font-medium text-forest-700">
                <svg class="w-3.5 h-3.5 text-forest-500" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
                Công nghệ khép kín
              </span>
              <span class="font-mono font-medium text-earth-500">02 / 03</span>
            </div>
          </div>
        </div>
        <!-- Bước 3 -->
        <div class="bg-white rounded-3xl border border-forest-100 shadow-[0_4px_20px_rgba(29,57,35,0.05)] hover:shadow-lg transition-all duration-300 overflow-hidden flex flex-col h-full group">
          <!-- Khung video cố định tỉ lệ 4:3 -->
          <div class="relative w-full aspect-[4/3] bg-forest-900 overflow-hidden">
            <video class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-[1.02]" controls playsinline preload="metadata" poster="/images/thumb_3408.jpg">
              <source src="/images/IMG_3408.mp4" type="video/mp4" />
              Trình duyệt không hỗ trợ xem video.
            </video>
            <div class="absolute top-3 left-3 pointer-events-none">
              <span class="px-2.5 py-1 rounded-full text-xs font-semibold bg-forest-900/80 text-white backdrop-blur-sm border border-white/20">
                Bước 03
              </span>
            </div>
          </div>
          
          <!-- Phần text căn chỉnh đồng bộ -->
          <div class="p-6 flex flex-col flex-1 justify-between bg-white">
            <div>
              <h3 class="font-bold text-forest-800 text-lg leading-snug mb-2 group-hover:text-forest-600 transition-colors">
                Giai đoạn 3: Kiểm định & Đóng gói
              </h3>
              <p class="text-forest-600 text-sm leading-relaxed">
                Đóng gói túi lọc tự động trong môi trường vô trùng, hoàn thiện kiểm tra chỉ tiêu an toàn trước khi xuất xưởng giao tới tay bạn.
              </p>
            </div>
            <div class="mt-4 pt-3 border-t border-forest-50 flex items-center justify-between text-xs text-forest-500">
              <span class="inline-flex items-center gap-1 font-medium text-forest-700">
                <svg class="w-3.5 h-3.5 text-forest-500" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
                Chuẩn chỉ tiêu an toàn
              </span>
              <span class="font-mono font-medium text-earth-500">03 / 03</span>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Section: Hình ảnh sản phẩm & chứng nhận -->
    <section class="mt-16">
      <div class="flex flex-col sm:flex-row sm:items-end justify-between mb-8 gap-2">
        <div>
          <span class="text-earth-600 text-xs font-bold tracking-widest uppercase mb-1 block">Chất lượng & Pháp lý</span>
          <h2 class="font-serif text-2xl md:text-3xl font-bold text-forest-900">Hình ảnh sản phẩm &amp; chứng nhận</h2>
        </div>
        <p class="text-xs sm:text-sm text-forest-500">Nhấp vào ảnh để phóng to chi tiết</p>
      </div>
      <div class="grid grid-cols-2 md:grid-cols-5 gap-4 md:gap-5">
        
        <div onclick="openLightbox('https://i.ibb.co/bDdM49y/IMG-3424.jpg', 'Chứng nhận Liên Hoa Chi 01')" 
             class="group cursor-pointer relative overflow-hidden rounded-2xl border border-forest-100 bg-white shadow-sm hover:shadow-md transition-all duration-300 flex flex-col">
          <div class="w-full aspect-[4/5] bg-forest-100 relative overflow-hidden flex items-center justify-center">
            <img 
              src="https://i.ibb.co/bDdM49y/IMG-3424.jpg" 
              alt="Chứng nhận Liên Hoa Chi 01" 
              class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105"
              onerror="this.onerror=null; this.parentElement.classList.add('p-4'); this.src='data:image/svg+xml;utf8,<svg xmlns=\'http://www.w3.org/2000/svg\' width=\'100\' height=\'100\' fill=\'%23b77744\' viewBox=\'0 0 24 24\'><path d=\'M12 1L3 5v6c0 5.55 3.84 10.74 9 12 5.16-1.26 9-6.45 9-12V5l-9-4zm-2 16l-4-4 1.41-1.41L10 14.17l6.59-6.59L18 9l-8 8z\'/></svg>';"
            />
            <div class="absolute inset-0 bg-gradient-to-t from-forest-950/70 via-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-end p-4">
              <span class="text-white text-xs font-medium flex items-center gap-1">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0zM10 7v6m3-3H7"/></svg>
                Xem chi tiết
              </span>
            </div>
            <div class="absolute top-2.5 left-2.5">
              <span class="px-2.5 py-0.5 rounded-full text-[11px] font-semibold bg-earth-100 text-earth-700 shadow-sm border border-earth-200">
                Chứng nhận
              </span>
            </div>
          </div>
          <div class="p-3 text-center bg-white border-t border-forest-50">
            <p class="font-medium text-forest-800 text-xs truncate">Chứng nhận 01</p>
          </div>
        </div>

        <div onclick="openLightbox('https://i.ibb.co/sdhwtJk2/IMG-3426.jpg', 'Chứng nhận Liên Hoa Chi 02')" 
             class="group cursor-pointer relative overflow-hidden rounded-2xl border border-forest-100 bg-white shadow-sm hover:shadow-md transition-all duration-300 flex flex-col">
          <div class="w-full aspect-[4/5] bg-forest-100 relative overflow-hidden flex items-center justify-center">
            <img 
              src="https://i.ibb.co/sdhwtJk2/IMG-3426.jpg" 
              alt="Chứng nhận Liên Hoa Chi 02" 
              class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105"
              onerror="this.onerror=null; this.parentElement.classList.add('p-4'); this.src='data:image/svg+xml;utf8,<svg xmlns=\'http://www.w3.org/2000/svg\' width=\'100\' height=\'100\' fill=\'%23b77744\' viewBox=\'0 0 24 24\'><path d=\'M12 1L3 5v6c0 5.55 3.84 10.74 9 12 5.16-1.26 9-6.45 9-12V5l-9-4zm-2 16l-4-4 1.41-1.41L10 14.17l6.59-6.59L18 9l-8 8z\'/></svg>';"
            />
            <div class="absolute inset-0 bg-gradient-to-t from-forest-950/70 via-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-end p-4">
              <span class="text-white text-xs font-medium flex items-center gap-1">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0zM10 7v6m3-3H7"/></svg>
                Xem chi tiết
              </span>
            </div>
            <div class="absolute top-2.5 left-2.5">
              <span class="px-2.5 py-0.5 rounded-full text-[11px] font-semibold bg-earth-100 text-earth-700 shadow-sm border border-earth-200">
                Chứng nhận
              </span>
            </div>
          </div>
          <div class="p-3 text-center bg-white border-t border-forest-50">
            <p class="font-medium text-forest-800 text-xs truncate">Chứng nhận 02</p>
          </div>
        </div>

        <div onclick="openLightbox('https://i.ibb.co/WpFZtHb1/IMG-3431.jpg', 'Chứng nhận Liên Hoa Chi 03')" 
             class="group cursor-pointer relative overflow-hidden rounded-2xl border border-forest-100 bg-white shadow-sm hover:shadow-md transition-all duration-300 flex flex-col">
          <div class="w-full aspect-[4/5] bg-forest-100 relative overflow-hidden flex items-center justify-center">
            <img 
              src="https://i.ibb.co/WpFZtHb1/IMG-3431.jpg" 
              alt="Chứng nhận Liên Hoa Chi 03" 
              class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105"
              onerror="this.onerror=null; this.parentElement.classList.add('p-4'); this.src='data:image/svg+xml;utf8,<svg xmlns=\'http://www.w3.org/2000/svg\' width=\'100\' height=\'100\' fill=\'%23b77744\' viewBox=\'0 0 24 24\'><path d=\'M12 1L3 5v6c0 5.55 3.84 10.74 9 12 5.16-1.26 9-6.45 9-12V5l-9-4zm-2 16l-4-4 1.41-1.41L10 14.17l6.59-6.59L18 9l-8 8z\'/></svg>';"
            />
            <div class="absolute inset-0 bg-gradient-to-t from-forest-950/70 via-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-end p-4">
              <span class="text-white text-xs font-medium flex items-center gap-1">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0zM10 7v6m3-3H7"/></svg>
                Xem chi tiết
              </span>
            </div>
            <div class="absolute top-2.5 left-2.5">
              <span class="px-2.5 py-0.5 rounded-full text-[11px] font-semibold bg-earth-100 text-earth-700 shadow-sm border border-earth-200">
                Chứng nhận
              </span>
            </div>
          </div>
          <div class="p-3 text-center bg-white border-t border-forest-50">
            <p class="font-medium text-forest-800 text-xs truncate">Chứng nhận 03</p>
          </div>
        </div>

        <div onclick="openLightbox('https://i.ibb.co/M5jj2020/IMG-3437.jpg', 'Chứng nhận Liên Hoa Chi 04')" 
             class="group cursor-pointer relative overflow-hidden rounded-2xl border border-forest-100 bg-white shadow-sm hover:shadow-md transition-all duration-300 flex flex-col">
          <div class="w-full aspect-[4/5] bg-forest-100 relative overflow-hidden flex items-center justify-center">
            <img 
              src="https://i.ibb.co/M5jj2020/IMG-3437.jpg" 
              alt="Chứng nhận Liên Hoa Chi 04" 
              class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105"
              onerror="this.onerror=null; this.parentElement.classList.add('p-4'); this.src='data:image/svg+xml;utf8,<svg xmlns=\'http://www.w3.org/2000/svg\' width=\'100\' height=\'100\' fill=\'%23b77744\' viewBox=\'0 0 24 24\'><path d=\'M12 1L3 5v6c0 5.55 3.84 10.74 9 12 5.16-1.26 9-6.45 9-12V5l-9-4zm-2 16l-4-4 1.41-1.41L10 14.17l6.59-6.59L18 9l-8 8z\'/></svg>';"
            />
            <div class="absolute inset-0 bg-gradient-to-t from-forest-950/70 via-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-end p-4">
              <span class="text-white text-xs font-medium flex items-center gap-1">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0zM10 7v6m3-3H7"/></svg>
                Xem chi tiết
              </span>
            </div>
            <div class="absolute top-2.5 left-2.5">
              <span class="px-2.5 py-0.5 rounded-full text-[11px] font-semibold bg-earth-100 text-earth-700 shadow-sm border border-earth-200">
                Kiểm nghiệm
              </span>
            </div>
          </div>
          <div class="p-3 text-center bg-white border-t border-forest-50">
            <p class="font-medium text-forest-800 text-xs truncate">Chứng nhận 04</p>
          </div>
        </div>

        <div onclick="openLightbox('https://i.ibb.co/0Vtj75q5/IMG-3439.jpg', 'Chứng nhận Liên Hoa Chi 05')" 
             class="group cursor-pointer relative overflow-hidden rounded-2xl border border-forest-100 bg-white shadow-sm hover:shadow-md transition-all duration-300 flex flex-col">
          <div class="w-full aspect-[4/5] bg-forest-100 relative overflow-hidden flex items-center justify-center">
            <img 
              src="https://i.ibb.co/0Vtj75q5/IMG-3439.jpg" 
              alt="Chứng nhận Liên Hoa Chi 05" 
              class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105"
              onerror="this.onerror=null; this.parentElement.classList.add('p-4'); this.src='data:image/svg+xml;utf8,<svg xmlns=\'http://www.w3.org/2000/svg\' width=\'100\' height=\'100\' fill=\'%23b77744\' viewBox=\'0 0 24 24\'><path d=\'M12 1L3 5v6c0 5.55 3.84 10.74 9 12 5.16-1.26 9-6.45 9-12V5l-9-4zm-2 16l-4-4 1.41-1.41L10 14.17l6.59-6.59L18 9l-8 8z\'/></svg>';"
            />
            <div class="absolute inset-0 bg-gradient-to-t from-forest-950/70 via-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-end p-4">
              <span class="text-white text-xs font-medium flex items-center gap-1">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0zM10 7v6m3-3H7"/></svg>
                Xem chi tiết
              </span>
            </div>
            <div class="absolute top-2.5 left-2.5">
              <span class="px-2.5 py-0.5 rounded-full text-[11px] font-semibold bg-earth-100 text-earth-700 shadow-sm border border-earth-200">
                Chứng nhận
              </span>
            </div>
          </div>
          <div class="p-3 text-center bg-white border-t border-forest-50">
            <p class="font-medium text-forest-800 text-xs truncate">Chứng nhận 05</p>
          </div>
        </div>
      </div>
    </section>
    <!-- Hộp liên hệ & tư vấn cuối trang -->
    <section class="mt-16 bg-gradient-to-br from-forest-50 via-white to-earth-100 border border-forest-200/80 rounded-3xl text-forest-900 p-8 md:p-10 shadow-[0_10px_30px_rgba(29,57,35,0.06)] relative overflow-hidden">
      <div class="absolute -right-16 -bottom-16 w-64 h-64 bg-forest-200/40 rounded-full blur-2xl pointer-events-none"></div>
      
      <div class="relative z-10 flex flex-col md:flex-row items-center justify-between gap-6">
        <div class="max-w-xl text-center md:text-left">
          <h3 class="font-serif text-2xl md:text-3xl font-bold mb-2 text-forest-800">Đồng hành cùng sức khỏe tự nhiên</h3>
          <p class="text-forest-700 text-sm md:text-base leading-relaxed">
            Mọi thắc mắc về nguồn nguyên liệu, chứng chỉ kiểm định hoặc hợp tác phân phối sản phẩm Liên Hoa Chi, xin vui lòng liên hệ với chúng tôi.
          </p>
        </div>
        <div class="flex-shrink-0 flex items-center gap-3">
          <a href="/" class="px-6 py-3 rounded-full bg-forest-600 hover:bg-forest-700 text-white font-medium text-sm shadow-md hover:shadow-lg transition-all duration-200 inline-flex items-center gap-2">
            <span>Liên hệ tư vấn</span>
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
          </a>
        </div>
      </div>
    </section>
  </main>
  <!-- Chân trang thanh lịch -->
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
  <!-- Lightbox Modal xem ảnh phóng to -->
  <div id="imageLightbox" class="fixed inset-0 z-50 bg-black/80 backdrop-blur-sm hidden items-center justify-center p-4" onclick="closeLightbox()">
    <div class="relative max-w-3xl w-full max-h-[90vh] flex flex-col items-center" onclick="event.stopPropagation()">
      <button onclick="closeLightbox()" class="absolute -top-12 right-0 text-white hover:text-earth-400 p-2 text-2xl font-bold focus:outline-none transition-colors">
        ✕
      </button>
      <img id="lightboxImg" src="" alt="" class="max-w-full max-h-[75vh] object-contain rounded-xl shadow-2xl bg-white/5 border border-white/10" />
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
    // Đóng khi bấm phím ESC
    document.addEventListener('keydown', function(e) {
      if (e.key === 'Escape') closeLightbox();
    });
  </script>
</body>
</html>