<!DOCTYPE html>
<html lang="ar" dir="rtl" class="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>يمن إيه آي | YEMEN AI</title>

    <!-- خط تجوال و Cairo للواجهات التقنية -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@300;400;600;700;900&family=Tajawal:wght@400;500;700;800&display=swap" rel="stylesheet">

    <!-- مكتبة الأيقونات Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            darkMode: 'class',
            theme: {
                extend: {
                    colors: {
                        brand: {
                            blue: '#0066FF',
                            cyan: '#00D2FF',
                            orange: '#FF6A00',
                            amber: '#FFA500',
                            dark: '#080B14',
                            surface: '#0F1626',
                            card: '#151F34',
                        }
                    },
                    fontFamily: {
                        cairo: ['Cairo', 'sans-serif'],
                        tajawal: ['Tajawal', 'sans-serif'],
                    },
                    animation: {
                        'pulse-glow': 'pulseGlow 4s ease-in-out infinite',
                        'float': 'float 6s ease-in-out infinite',
                        'spin-slow': 'spin 12s linear infinite',
                    },
                    keyframes: {
                        pulseGlow: {
                            '0%, 100%': { opacity: '0.4', transform: 'scale(1)' },
                            '50%': { opacity: '0.8', transform: 'scale(1.08)' },
                        },
                        float: {
                            '0%, 100%': { transform: 'translateY(0px)' },
                            '50%': { transform: 'translateY(-10px)' },
                        }
                    }
                }
            }
        }
    </script>

    <style>
        * {
            -webkit-tap-highlight-color: transparent;
            scrollbar-width: thin;
            scrollbar-color: #0066FF #080B14;
        }
        body {
            font-family: 'Cairo', sans-serif;
            background-color: #080B14;
            color: #F8FAFC;
            overflow-x: hidden;
        }
        /* خلفية التوهج التقني التفاعلي */
        .ambient-glow-blue {
            background: radial-gradient(circle, rgba(0, 102, 255, 0.22) 0%, rgba(0,0,0,0) 70%);
        }
        .ambient-glow-orange {
            background: radial-gradient(circle, rgba(255, 106, 0, 0.18) 0%, rgba(0,0,0,0) 70%);
        }
        .glass-panel {
            background: rgba(15, 22, 38, 0.75);
            backdrop-filter: blur(16px);
            -webkit-backdrop-filter: blur(16px);
            border: 1px solid rgba(255, 255, 255, 0.08);
        }
        .glass-input {
            background: rgba(8, 11, 20, 0.65);
            border: 1px solid rgba(0, 102, 255, 0.25);
            backdrop-filter: blur(8px);
        }
        .glass-input:focus {
            border-color: #00D2FF;
            box-shadow: 0 0 15px rgba(0, 210, 255, 0.25);
        }
        .text-gradient {
            background: linear-gradient(135deg, #00D2FF 0%, #0066FF 50%, #FF6A00 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }
        .text-gradient-orange {
            background: linear-gradient(135deg, #FFA500 0%, #FF6A00 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }
        /* فقاعة الشات مع وميض ذكي */
        .chat-container::-webkit-scrollbar {
            width: 4px;
        }
        .chat-container::-webkit-scrollbar-thumb {
            background: #1e293b;
            border-radius: 4px;
        }
    </style>
</head>

<body class="min-h-screen flex flex-col justify-between relative selection:bg-brand-orange selection:text-white">

    <!-- خلفيات الطاقة والأنيميشن الضوئي -->
    <div class="fixed inset-0 pointer-events-none z-0 overflow-hidden">
        <div class="absolute -top-32 -right-32 w-96 h-96 ambient-glow-blue rounded-full filter blur-3xl animate-pulse-glow"></div>
        <div class="absolute top-1/3 -left-32 w-96 h-96 ambient-glow-orange rounded-full filter blur-3xl animate-pulse-glow" style="animation-delay: 2s;"></div>
        <div class="absolute bottom-10 right-1/4 w-80 h-80 ambient-glow-blue rounded-full filter blur-3xl opacity-30"></div>
    </div>

    <!-- 1. شريط التنقل العلوي (Header) -->
    <header class="sticky top-0 z-40 glass-panel border-b border-white/10 px-4 py-3 sm:px-6">
        <div class="max-w-7xl mx-auto flex items-center justify-between">
            <!-- الشعار والهوية -->
            <div class="flex items-center gap-3">
                <button onclick="toggleSidebar()" class="lg:hidden p-2 rounded-xl bg-white/5 hover:bg-white/10 text-slate-300">
                    <i class="fa-solid fa-bars-staggered text-lg"></i>
                </button>

                <div class="flex items-center gap-2 cursor-pointer" onclick="resetToWelcome()">
                    <div class="relative w-10 h-10 sm:w-11 sm:h-11 flex items-center justify-center">
                        <div class="absolute inset-0 bg-brand-orange/30 blur-md rounded-full animate-ping opacity-30"></div>
                        <img src="{{ asset('assets/image/logo.png') }}"
                             alt="YEMEN AI Logo"
                             class="w-full h-full object-contain relative z-10 drop-shadow-[0_4px_10px_rgba(0,102,255,0.4)]"
                             onerror="this.src='https://placehold.co/100x100/0066FF/ffffff?text=Y-AI'">
                    </div>
                    <div>
                        <div class="flex items-center gap-1.5">
                            <span class="font-black text-xl tracking-wide text-white">يمن</span>
                            <span class="font-black text-xl text-gradient-orange">AI</span>
                            <span class="text-[10px] bg-brand-blue/20 text-brand-cyan border border-brand-cyan/30 px-1.5 py-0.5 rounded-full font-bold">تجريبي v1.0</span>
                        </div>
                        <p class="text-[10px] text-slate-400 hidden sm:block">الذكاء الاصطناعي اليمني الأول عالمياً</p>
                    </div>
                </div>
            </div>

            <!-- أزرار الحساب والمستخدم -->
            <div class="flex items-center gap-2 sm:gap-3">
                <button onclick="openModal('login')" class="px-3.5 py-2 text-xs sm:text-sm font-semibold rounded-xl text-slate-200 hover:text-white hover:bg-white/5 transition flex items-center gap-2 border border-white/10">
                    <i class="fa-regular fa-user text-brand-cyan"></i>
                    <span>تسجيل الدخول</span>
                </button>
                <button onclick="openModal('register')" class="px-3.5 py-2 text-xs sm:text-sm font-bold rounded-xl text-white bg-gradient-to-r from-brand-orange to-brand-amber hover:opacity-95 shadow-[0_0_15px_rgba(255,106,0,0.35)] transition transform active:scale-95 flex items-center gap-1.5">
                    <i class="fa-solid fa-sparkles text-xs"></i>
                    <span>إنشاء حساب</span>
                </button>
            </div>
        </div>
    </header>

    <!-- الحاوية الرئيسية للتطبيق -->
    <main class="relative z-10 flex-1 flex max-w-7xl w-full mx-auto overflow-hidden">

        <!-- 2. القائمة الجانبية (Drawer Sidebar) للهواتف والكمبيوتر -->
        <aside id="sidebar" class="fixed lg:static inset-y-0 right-0 z-50 w-72 bg-brand-surface/95 lg:bg-transparent backdrop-blur-xl lg:backdrop-blur-none border-l border-white/10 transform translate-x-full lg:translate-x-0 transition-transform duration-300 flex flex-col p-4">
            <div class="flex items-center justify-between pb-4 border-b border-white/10 lg:hidden">
                <span class="font-bold text-sm text-slate-300">أدوات ومنظومة الذكاء</span>
                <button onclick="toggleSidebar()" class="p-2 text-slate-400 hover:text-white">
                    <i class="fa-solid fa-xmark text-lg"></i>
                </button>
            </div>

            <!-- زر بدء جلسة شات جديدة -->
            <button onclick="startNewChat()" class="w-full mt-2 mb-4 py-3 px-4 rounded-xl bg-gradient-to-r from-brand-blue/20 to-brand-cyan/10 border border-brand-blue/40 text-brand-cyan font-bold text-sm flex items-center justify-center gap-2 hover:bg-brand-blue/30 transition shadow-[0_0_15px_rgba(0,102,255,0.2)]">
                <i class="fa-solid fa-plus text-xs"></i>
                <span>محادثة ذكية جديدة</span>
            </button>

            <!-- قائمة الخدمات والأدوات التسع (Tools Grid) -->
            <div class="flex-1 overflow-y-auto space-y-1.5 pr-1 chat-container">
                <p class="text-[11px] font-bold text-slate-500 uppercase tracking-wider px-2 py-1">أدوات YEMEN AI</p>

                <a href="javascript:void(0)" onclick="selectTool('AI Chat')" class="flex items-center gap-3 px-3 py-2.5 rounded-xl bg-white/5 border border-brand-cyan/20 text-white font-medium text-xs hover:bg-brand-blue/20 transition">
                    <i class="fa-solid fa-message-bot text-brand-cyan"></i>
                    <span>المحادثة الذكية (AI Chat)</span>
                </a>
                <a href="javascript:void(0)" onclick="selectTool('كتابة المحتوى')" class="flex items-center gap-3 px-3 py-2.5 rounded-xl text-slate-400 hover:text-white hover:bg-white/5 transition text-xs">
                    <i class="fa-solid fa-pen-nib text-brand-orange"></i>
                    <span>صناعة وكتابة المحتوى</span>
                </a>
                <a href="javascript:void(0)" onclick="selectTool('تلخيص النصوص')" class="flex items-center gap-3 px-3 py-2.5 rounded-xl text-slate-400 hover:text-white hover:bg-white/5 transition text-xs">
                    <i class="fa-solid fa-file-lines text-emerald-400"></i>
                    <span>تلخيص المستندات والنصوص</span>
                </a>
                <a href="javascript:void(0)" onclick="selectTool('الترجمة الفورية')" class="flex items-center gap-3 px-3 py-2.5 rounded-xl text-slate-400 hover:text-white hover:bg-white/5 transition text-xs">
                    <i class="fa-solid fa-language text-purple-400"></i>
                    <span>المترجم الذكي المتقدم</span>
                </a>
                <a href="javascript:void(0)" onclick="selectTool('مساعد البرمجة')" class="flex items-center gap-3 px-3 py-2.5 rounded-xl text-slate-400 hover:text-white hover:bg-white/5 transition text-xs">
                    <i class="fa-solid fa-code text-cyan-400"></i>
                    <span>مساعد الأكواد والبرمجة</span>
                </a>
                <a href="javascript:void(0)" onclick="selectTool('تحليل الملفات')" class="flex items-center gap-3 px-3 py-2.5 rounded-xl text-slate-400 hover:text-white hover:bg-white/5 transition text-xs">
                    <i class="fa-solid fa-file-pdf text-red-400"></i>
                    <span>تحليل وتفكيك الملفات (PDF)</span>
                </a>
                <a href="javascript:void(0)" onclick="selectTool('تحليل الصور')" class="flex items-center gap-3 px-3 py-2.5 rounded-xl text-slate-400 hover:text-white hover:bg-white/5 transition text-xs">
                    <i class="fa-solid fa-image text-amber-400"></i>
                    <span>تحليل وفهم الصور البصرية</span>
                </a>
                <a href="javascript:void(0)" onclick="selectTool('المساعد التعليمي')" class="flex items-center gap-3 px-3 py-2.5 rounded-xl text-slate-400 hover:text-white hover:bg-white/5 transition text-xs">
                    <i class="fa-solid fa-graduation-cap text-indigo-400"></i>
                    <span>المساعد الأكاديمي والتعليمي</span>
                </a>
            </div>

            <!-- بطاقة الترقية السفلية بالهوية البرتقالية -->
            <div class="mt-auto pt-3">
                <div class="p-3 rounded-2xl bg-gradient-to-br from-brand-orange/15 to-brand-blue/10 border border-brand-orange/30 relative overflow-hidden">
                    <div class="flex items-center justify-between">
                        <span class="text-xs font-bold text-white">ترقية باقة Gemini Ultra</span>
                        <i class="fa-solid fa-bolt text-brand-orange animate-bounce text-sm"></i>
                    </div>
                    <p class="text-[10px] text-slate-300 mt-1">سرعة مضاعفة واستجابة بدون قيود يومية.</p>
                </div>
            </div>
        </aside>

        <!-- الخلفية المعتمة للقائمة الجانبية في الهاتف -->
        <div id="sidebarOverlay" onclick="toggleSidebar()" class="fixed inset-0 bg-black/60 backdrop-blur-sm z-40 hidden lg:hidden"></div>

        <!-- 3. مساحة العمل والشات الرئيسية (Chat Viewport) -->
        <section class="flex-1 flex flex-col justify-between h-[calc(100vh-65px)] relative overflow-hidden">

            <!-- صندوق عرض الرسائل -->
            <div id="chatMessages" class="flex-1 overflow-y-auto px-4 py-6 space-y-6 chat-container">

                <!-- الواجهة الافتتاحية الترحيبية المبتكرة (تختفي فور بدء الكتابة) -->
                <div id="welcomeHero" class="flex flex-col items-center justify-center text-center my-auto min-h-[60vh] max-w-2xl mx-auto px-2">

                    <!-- مدار الذكاء الاصطناعي التفاعلي بالشعار -->
                    <div class="relative w-28 h-28 sm:w-32 sm:h-32 mb-6 flex items-center justify-center animate-float">
                        <div class="absolute inset-0 border-2 border-dashed border-brand-cyan/40 rounded-full animate-spin-slow"></div>
                        <div class="absolute -inset-2 bg-gradient-to-tr from-brand-blue via-transparent to-brand-orange rounded-full blur-xl opacity-40"></div>
                        <img src="{{ asset('assets/image/logo.png') }}"
                             alt="Yemen AI Core"
                             class="w-20 h-20 sm:w-24 sm:h-24 object-contain relative z-10"
                             onerror="this.src='https://placehold.co/100x100/0066FF/ffffff?text=Y-AI'">
                    </div>

                    <h1 class="text-2xl sm:text-4xl font-black mb-3">
                        أهلاً بك في منصة <span class="text-gradient">يمن AI</span>
                    </h1>
                    <p class="text-slate-400 text-xs sm:text-base max-w-md mb-8 leading-relaxed">
                        نموذج الذكاء الاصطناعي المصمم خصيصاً لخدمتك، أسرع، أدق، ويفهم احتياجاتك بلهجتك وثقافتك.
                    </p>

                    <!-- بطاقات المهام السريعة (Quick Prompts) للأجهزة المحمولة -->
                    <div class="grid grid-cols-2 gap-2 sm:gap-3 w-full text-right">
                        <button onclick="injectPrompt('اكتب لي خطة تسويقية لمشروع ناشئ في اليمن')" class="p-3 rounded-2xl glass-panel hover:border-brand-cyan/40 transition text-xs group flex items-start gap-2.5">
                            <span class="p-2 rounded-xl bg-brand-blue/20 text-brand-cyan group-hover:scale-110 transition"><i class="fa-solid fa-chart-line"></i></span>
                            <div>
                                <h4 class="font-bold text-slate-200">خطة تسويق رقمية</h4>
                                <p class="text-[10px] text-slate-400 line-clamp-1">صياغة استراتيجية نمو متكاملة</p>
                            </div>
                        </button>
                        <button onclick="injectPrompt('اشرح لي مفهوم الذكاء الاصطناعي التوليدي بطريقة مبسطة')" class="p-3 rounded-2xl glass-panel hover:border-brand-orange/40 transition text-xs group flex items-start gap-2.5">
                            <span class="p-2 rounded-xl bg-brand-orange/20 text-brand-orange group-hover:scale-110 transition"><i class="fa-solid fa-brain"></i></span>
                            <div>
                                <h4 class="font-bold text-slate-200">تبسيط المفاهيم</h4>
                                <p class="text-[10px] text-slate-400 line-clamp-1">شرح تقني للمبتدئين</p>
                            </div>
                        </button>
                        <button onclick="injectPrompt('قم بتصحيح وتحسين كود PHP Laravel التالي:')" class="p-3 rounded-2xl glass-panel hover:border-brand-cyan/40 transition text-xs group flex items-start gap-2.5">
                            <span class="p-2 rounded-xl bg-cyan-500/20 text-cyan-400 group-hover:scale-110 transition"><i class="fa-solid fa-code"></i></span>
                            <div>
                                <h4 class="font-bold text-slate-200">مراجعة كود برمجي</h4>
                                <p class="text-[10px] text-slate-400 line-clamp-1">تحليل أخطاء واقتراح حلول</p>
                            </div>
                        </button>
                        <button onclick="injectPrompt('لخص لي هذا التقرير في خمس نقاط جوهرية')" class="p-3 rounded-2xl glass-panel hover:border-emerald-500/40 transition text-xs group flex items-start gap-2.5">
                            <span class="p-2 rounded-xl bg-emerald-500/20 text-emerald-400 group-hover:scale-110 transition"><i class="fa-solid fa-wand-magic-sparkles"></i></span>
                            <div>
                                <h4 class="font-bold text-slate-200">تلخيص مستند سريع</h4>
                                <p class="text-[10px] text-slate-400 line-clamp-1">استخراج أهم الأفكار بدقة</p>
                            </div>
                        </button>
                    </div>
                </div>

                <!-- حاوية الرسائل النشطة عند بدء الدردشة -->
                <div id="dynamicMessages" class="space-y-4 max-w-3xl mx-auto w-full hidden">
                    <!-- سيتم حقن الرسائل هنا عبر JavaScript -->
                </div>
            </div>

            <!-- 4. شريط الإدخال المبتكر (Bottom Floating Prompt Bar) -->
            <div class="p-3 sm:p-5 relative z-20">
                <div class="max-w-3xl mx-auto">
                    <form id="chatForm" onsubmit="handleChatSubmit(event)" class="relative glass-panel rounded-2xl p-1.5 sm:p-2 border border-brand-blue/30 shadow-[0_10px_30px_rgba(0,0,0,0.5)] flex flex-col gap-2">

                        <!-- صندوق النص -->
                        <div class="flex items-center gap-2 px-2">
                            <textarea id="promptInput" rows="1" placeholder="اسأل يمن AI أي شيء أو اطلب تحليلاً..."
                                class="w-full bg-transparent text-sm sm:text-base text-white placeholder-slate-400 outline-none resize-none max-h-32 py-2"
                                oninput="autoResize(this)" onkeydown="checkEnter(event)"></textarea>
                        </div>

                        <!-- شريط الأدوات السريع وأزرار الملحقات والإرسال -->
                        <div class="flex items-center justify-between pt-1 border-t border-white/5 px-2">
                            <div class="flex items-center gap-1 sm:gap-2">
                                <label class="cursor-pointer p-2 rounded-xl text-slate-400 hover:text-brand-cyan hover:bg-white/5 transition text-sm relative" title="إرفاق ملف أو صورة">
                                    <i class="fa-solid fa-paperclip"></i>
                                    <input type="file" class="hidden" id="fileAttachment" onchange="notifyFileAttached(this)">
                                </label>
                                <button type="button" onclick="recordVoice()" class="p-2 rounded-xl text-slate-400 hover:text-brand-orange hover:bg-white/5 transition text-sm" title="تسجيل صوتي">
                                    <i class="fa-solid fa-microphone"></i>
                                </button>
                                <span id="fileBadge" class="hidden text-[10px] bg-brand-cyan/10 text-brand-cyan px-2 py-0.5 rounded-full border border-brand-cyan/20"></span>
                            </div>

                            <button type="submit" id="sendBtn" class="w-9 h-9 sm:w-10 sm:h-10 rounded-xl bg-gradient-to-r from-brand-blue to-brand-cyan text-white flex items-center justify-center hover:opacity-90 active:scale-95 transition shadow-[0_0_12px_rgba(0,102,255,0.4)]">
                                <i class="fa-solid fa-arrow-up text-sm"></i>
                            </button>
                        </div>
                    </form>
                    <p class="text-[10px] text-center text-slate-500 mt-2">
                        مدعوم بمحرك Gemini AI فائق الذكاء • طور بكل فخر لليمن والوطن العربي
                    </p>
                </div>
            </div>
        </section>
    </main>

    <!-- 5. النافذة المنبثقة الذكية (Authentication Modal: تسجيل / إنشاء / OTP) -->
    <div id="authModal" class="fixed inset-0 z-50 flex items-center justify-center p-4 bg-black/75 backdrop-blur-md opacity-0 pointer-events-none transition-all duration-300">
        <div class="relative w-full max-w-md glass-panel rounded-3xl p-6 sm:p-8 border border-white/10 shadow-[0_0_50px_rgba(0,102,255,0.2)] transform scale-95 transition-all duration-300" id="authBox">

            <!-- زر الإغلاق -->
            <button onclick="closeModal()" class="absolute top-4 left-4 w-8 h-8 rounded-full bg-white/5 hover:bg-white/10 text-slate-400 flex items-center justify-center transition">
                <i class="fa-solid fa-xmark"></i>
            </button>

            <!-- التبديل بين التبويبات -->
            <div class="flex items-center justify-center gap-2 p-1 bg-black/40 rounded-2xl mb-6 border border-white/5">
                <button id="tabLogin" onclick="switchAuthTab('login')" class="flex-1 py-2 text-xs font-bold rounded-xl transition text-white bg-brand-blue">
                    تسجيل الدخول
                </button>
                <button id="tabRegister" onclick="switchAuthTab('register')" class="flex-1 py-2 text-xs font-bold rounded-xl transition text-slate-400 hover:text-white">
                    حساب جديد
                </button>
            </div>

            <!-- نموذج تسجيل الدخول -->
            <form id="loginView" onsubmit="handleLogin(event)" class="space-y-4">
                <div class="text-center mb-4">
                    <h3 class="text-xl font-black text-white">مرحباً بعودتك!</h3>
                    <p class="text-xs text-slate-400 mt-1">سجل دخولك لمتابعة محادثاتك وسجلات الذكاء الاصطناعي</p>
                </div>

                <div>
                    <label class="block text-xs font-medium text-slate-300 mb-1.5">البريد الإلكتروني</label>
                    <div class="relative">
                        <input type="email" required placeholder="name@domain.com" class="w-full glass-input rounded-xl px-4 py-2.5 text-xs text-white outline-none pl-10">
                        <i class="fa-regular fa-envelope absolute left-3.5 top-3 text-slate-400 text-xs"></i>
                    </div>
                </div>

                <div>
                    <div class="flex items-center justify-between mb-1.5">
                        <label class="text-xs font-medium text-slate-300">كلمة المرور</label>
                        <a href="javascript:void(0)" class="text-[10px] text-brand-cyan hover:underline">نسيت الكلمة؟</a>
                    </div>
                    <div class="relative">
                        <input type="password" required placeholder="••••••••" class="w-full glass-input rounded-xl px-4 py-2.5 text-xs text-white outline-none pl-10">
                        <i class="fa-solid fa-lock absolute left-3.5 top-3 text-slate-400 text-xs"></i>
                    </div>
                </div>

                <button type="submit" class="w-full py-3 rounded-xl bg-gradient-to-r from-brand-blue to-brand-cyan text-white font-bold text-xs shadow-[0_0_15px_rgba(0,102,255,0.4)] hover:opacity-95 transition">
                    تسجيل الدخول
                </button>
            </form>

            <!-- نموذج إنشاء الحساب (الخطوة 1) -->
            <form id="registerView" onsubmit="handleRegister(event)" class="space-y-4 hidden">
                <div class="text-center mb-4">
                    <h3 class="text-xl font-black text-white">انضم إلى يمن AI</h3>
                    <p class="text-xs text-slate-400 mt-1">أنشئ حسابك واستمتع بجميع أدوات المنصة مجاناً</p>
                </div>

                <div>
                    <label class="block text-xs font-medium text-slate-300 mb-1.5">الاسم الكامل</label>
                    <div class="relative">
                        <input type="text" id="regName" required placeholder="مثال: محمد اليماني" class="w-full glass-input rounded-xl px-4 py-2.5 text-xs text-white outline-none pl-10">
                        <i class="fa-regular fa-user absolute left-3.5 top-3 text-slate-400 text-xs"></i>
                    </div>
                </div>

                <div>
                    <label class="block text-xs font-medium text-slate-300 mb-1.5">البريد الإلكتروني</label>
                    <div class="relative">
                        <input type="email" id="regEmail" required placeholder="yourname@gmail.com" class="w-full glass-input rounded-xl px-4 py-2.5 text-xs text-white outline-none pl-10">
                        <i class="fa-regular fa-envelope absolute left-3.5 top-3 text-slate-400 text-xs"></i>
                    </div>
                </div>

                <div>
                    <label class="block text-xs font-medium text-slate-300 mb-1.5">كلمة المرور</label>
                    <div class="relative">
                        <input type="password" id="regPassword" required placeholder="8 أحرف على الأقل" class="w-full glass-input rounded-xl px-4 py-2.5 text-xs text-white outline-none pl-10">
                        <i class="fa-solid fa-shield-halved absolute left-3.5 top-3 text-slate-400 text-xs"></i>
                    </div>
                </div>

                <button type="submit" class="w-full py-3 rounded-xl bg-gradient-to-r from-brand-orange to-brand-amber text-white font-bold text-xs shadow-[0_0_15px_rgba(255,106,0,0.4)] hover:opacity-95 transition">
                    إرسال كود التحقق (OTP)
                </button>
            </form>

            <!-- نموذج كود التحقق (OTP Step 2) -->
            <form id="otpView" onsubmit="handleVerifyOTP(event)" class="space-y-5 hidden text-center">
                <div class="w-14 h-14 mx-auto rounded-2xl bg-brand-orange/20 border border-brand-orange/40 flex items-center justify-center text-brand-orange text-2xl">
                    <i class="fa-solid fa-shield-check"></i>
                </div>

                <div>
                    <h3 class="text-lg font-black text-white">التحقق من البريد</h3>
                    <p class="text-xs text-slate-400 mt-1">
                        أدخل رمز التحقق المكون من 4 أرقام المرسل إلى: <br>
                        <span id="targetEmailShow" class="text-brand-cyan font-bold dir-ltr">user@example.com</span>
                    </p>
                </div>

                <!-- مربعات إدخال الـ OTP للأجهزة المحمولة -->
                <div class="flex justify-center gap-3 dir-ltr">
                    <input type="text" maxlength="1" oninput="moveNext(this, 1)" class="otp-input w-12 h-12 text-center text-lg font-bold rounded-xl glass-input text-white focus:border-brand-orange outline-none">
                    <input type="text" maxlength="1" oninput="moveNext(this, 2)" class="otp-input w-12 h-12 text-center text-lg font-bold rounded-xl glass-input text-white focus:border-brand-orange outline-none">
                    <input type="text" maxlength="1" oninput="moveNext(this, 3)" class="otp-input w-12 h-12 text-center text-lg font-bold rounded-xl glass-input text-white focus:border-brand-orange outline-none">
                    <input type="text" maxlength="1" oninput="moveNext(this, 4)" class="otp-input w-12 h-12 text-center text-lg font-bold rounded-xl glass-input text-white focus:border-brand-orange outline-none">
                </div>

                <div class="flex items-center justify-between text-xs text-slate-400 px-2">
                    <span>إعادة إرسال الرمز بعد: <b id="countdownTimer" class="text-brand-orange">01:59</b></span>
                    <button type="button" onclick="resendOTP()" class="text-brand-cyan hover:underline">إعادة إرسال</button>
                </div>

                <button type="submit" class="w-full py-3 rounded-xl bg-gradient-to-r from-brand-orange to-brand-amber text-white font-bold text-xs shadow-[0_0_15px_rgba(255,106,0,0.4)]">
                    تأكيد والدخول للمنصة
                </button>
            </form>
        </div>
    </div>

    <!-- 6. جافاسكريبت التفاعلي مع دعم الـ Fetch API للـ Laravel Backend مستقبلاً -->
    <script>
        // إظهار وإخفاء القائمة الجانبية في الهاتف
        function toggleSidebar() {
            const sidebar = document.getElementById('sidebar');
            const overlay = document.getElementById('sidebarOverlay');
            sidebar.classList.toggle('translate-x-full');
            overlay.classList.toggle('hidden');
        }

        // تكبير حقل النص تلقائياً عند الكتابة
        function autoResize(el) {
            el.style.height = 'auto';
            el.style.height = (el.scrollHeight) + 'px';
        }

        function checkEnter(e) {
            if (e.key === 'Enter' && !e.shiftKey && window.innerWidth > 768) {
                e.preventDefault();
                document.getElementById('chatForm').dispatchEvent(new Event('submit'));
            }
        }

        // النوافذ المنبثقة (Auth Modal)
        function openModal(tab = 'login') {
            const modal = document.getElementById('authModal');
            const box = document.getElementById('authBox');
            modal.classList.remove('opacity-0', 'pointer-events-none');
            box.classList.remove('scale-95');
            switchAuthTab(tab);
        }

        function closeModal() {
            const modal = document.getElementById('authModal');
            const box = document.getElementById('authBox');
            modal.classList.add('opacity-0', 'pointer-events-none');
            box.classList.add('scale-95');
        }

        function switchAuthTab(tab) {
            const loginView = document.getElementById('loginView');
            const regView = document.getElementById('registerView');
            const otpView = document.getElementById('otpView');
            const tabLogin = document.getElementById('tabLogin');
            const tabRegister = document.getElementById('tabRegister');

            otpView.classList.add('hidden');

            if (tab === 'login') {
                loginView.classList.remove('hidden');
                regView.classList.add('hidden');
                tabLogin.className = "flex-1 py-2 text-xs font-bold rounded-xl transition text-white bg-brand-blue";
                tabRegister.className = "flex-1 py-2 text-xs font-bold rounded-xl transition text-slate-400 hover:text-white";
            } else {
                loginView.classList.add('hidden');
                regView.classList.remove('hidden');
                tabRegister.className = "flex-1 py-2 text-xs font-bold rounded-xl transition text-white bg-brand-orange";
                tabLogin.className = "flex-1 py-2 text-xs font-bold rounded-xl transition text-slate-400 hover:text-white";
            }
        }

        // التعامل مع كود الـ OTP
        function moveNext(elem, index) {
            if (elem.value.length === 1) {
                const inputs = document.querySelectorAll('.otp-input');
                if (index < inputs.length) inputs[index].focus();
            }
        }

        // إرسال تسجيل الدخول عبر AJAX/Fetch
        async function handleLogin(e) {
            e.preventDefault();
            // هنا يتم الربط مع Laravel: /login أو /api/login
            alert("تم إرسال طلب تسجيل الدخول بنجاح.");
            closeModal();
        }

        // تسجيل حساب وإظهار شاشة الـ OTP
        async function handleRegister(e) {
            e.preventDefault();
            const email = document.getElementById('regEmail').value;
            document.getElementById('targetEmailShow').innerText = email;

            // إخفاء التسجيل وإظهار OTP
            document.getElementById('registerView').classList.add('hidden');
            document.getElementById('otpView').classList.remove('hidden');
            startOTPTimer();
        }

        function startOTPTimer() {
            let duration = 119;
            const timerDisplay = document.getElementById('countdownTimer');
            const timer = setInterval(() => {
                let m = Math.floor(duration / 60);
                let s = duration % 60;
                timerDisplay.textContent = `${m < 10 ? '0' : ''}${m}:${s < 10 ? '0' : ''}${s}`;
                if (--duration < 0) clearInterval(timer);
            }, 1000);
        }

        function handleVerifyOTP(e) {
            e.preventDefault();
            alert("تم التحقق بنجاح! مرحباً بك في يمن AI");
            closeModal();
        }

        // حقن المطالبات الجاهزة في صندوق الشات
        function injectPrompt(text) {
            const input = document.getElementById('promptInput');
            input.value = text;
            input.focus();
            autoResize(input);
        }

        function selectTool(toolName) {
            if (window.innerWidth < 1024) toggleSidebar();
            injectPrompt(`مرحباً، أريد استخدام أداة [${toolName}] لإنجاز: `);
        }

        function notifyFileAttached(input) {
            const badge = document.getElementById('fileBadge');
            if (input.files && input.files[0]) {
                badge.innerText = input.files[0].name;
                badge.classList.remove('hidden');
            }
        }

        // إدارة إرسال الرسائل ومحاكاة ذكاء الـ AI (Gemini Streaming Look)
        function handleChatSubmit(e) {
            e.preventDefault();
            const input = document.getElementById('promptInput');
            const message = input.value.trim();
            if (!message) return;

            // إخفاء الـ Hero عند أول رسالة
            document.getElementById('welcomeHero').classList.add('hidden');
            const container = document.getElementById('dynamicMessages');
            container.classList.remove('hidden');

            // 1. إضافة رسالة المستخدم
            container.innerHTML += `
                <div class="flex items-start justify-end gap-3">
                    <div class="bg-brand-blue text-white rounded-2xl rounded-tl-none p-3.5 max-w-[85%] sm:max-w-lg text-xs sm:text-sm shadow-md leading-relaxed">
                        ${escapeHtml(message)}
                    </div>
                    <div class="w-8 h-8 rounded-full bg-slate-700 flex items-center justify-center text-xs text-white">
                        <i class="fa-solid fa-user"></i>
                    </div>
                </div>
            `;

            input.value = '';
            input.style.height = 'auto';
            document.getElementById('fileBadge').classList.add('hidden');
            scrollToBottom();

            // 2. إظهار رد الذكاء الاصطناعي مع أنيميشن الكتابة
            const aiMsgId = 'ai-msg-' + Date.now();
            container.innerHTML += `
                <div class="flex items-start gap-3">
                    <div class="w-8 h-8 rounded-full bg-brand-surface border border-brand-cyan/40 flex items-center justify-center text-brand-cyan text-xs">
                        <i class="fa-solid fa-sparkles animate-spin"></i>
                    </div>
                    <div id="${aiMsgId}" class="glass-panel text-slate-200 border border-white/10 rounded-2xl rounded-tr-none p-3.5 max-w-[85%] sm:max-w-xl text-xs sm:text-sm leading-relaxed shadow-lg">
                        <div class="flex items-center gap-1.5 text-brand-cyan py-1">
                            <span class="w-2 h-2 rounded-full bg-brand-cyan animate-pulse"></span>
                            <span class="text-[11px] font-semibold">يمن AI يقوم بالتحليل والتفكير...</span>
                        </div>
                    </div>
                </div>
            `;
            scrollToBottom();

            // محاكاة استلام الرد بعد ثانية واحدة (هنا سيتم وضع Fetch API لاحقاً إلى Laravel)
            setTimeout(() => {
                const el = document.getElementById(aiMsgId);
                el.innerHTML = `
                    <p class="font-bold text-brand-cyan mb-1.5 flex items-center gap-1.5">
                        <i class="fa-solid fa-robot"></i> رداً على استفسارك:
                    </p>
                    <p class="text-slate-300 leading-relaxed">
                        تم استلام طلبك بنجاح في منصة <b>يمن AI</b>. الواجهة الأمامية جاهزة الآن للربط البرمجي الكامل مع كنترولر Laravel وخدمة Gemini API عبر الـ Routes.
                    </p>
                `;
                scrollToBottom();
            }, 1200);
        }

        function scrollToBottom() {
            const chatBox = document.getElementById('chatMessages');
            chatBox.scrollTop = chatBox.scrollHeight;
        }

        function escapeHtml(text) {
            return text.replace(/&/g, "&amp;").replace(/</g, "&lt;").replace(/>/g, "&gt;");
        }

        function startNewChat() {
            document.getElementById('dynamicMessages').innerHTML = '';
            document.getElementById('dynamicMessages').classList.add('hidden');
            document.getElementById('welcomeHero').classList.remove('hidden');
            if (window.innerWidth < 1024) toggleSidebar();
        }

        function resetToWelcome() {
            startNewChat();
        }
    </script>
</body>
</html>
