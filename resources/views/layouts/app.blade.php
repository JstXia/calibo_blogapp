<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Calibo Blog') · {{ config('app.name', 'Laravel') }}</title>
    <style>
        :root { color-scheme: light; font-family: Inter, ui-sans-serif, system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", sans-serif; color: #20231f; background: #f5f4ef; }
        * { box-sizing: border-box; }
        body { margin: 0; }
        a { color: inherit; }
        .topbar { background: #24352d; color: #fff; }
        .topbar-inner, main { width: min(880px, calc(100% - 36px)); margin: 0 auto; }
        .topbar-inner { min-height: 72px; display: flex; align-items: center; justify-content: space-between; gap: 20px; }
        .brand { font-family: Georgia, serif; font-size: 1.35rem; text-decoration: none; letter-spacing: .02em; }
        .top-link { color: #d8e4db; text-decoration: none; font-size: .92rem; }
        main { padding: 52px 0 76px; }
        .eyebrow { color: #65756b; text-transform: uppercase; letter-spacing: .12em; font-size: .72rem; font-weight: 700; }
        h1, h2, p { margin-top: 0; }
        h1 { font: 500 clamp(2rem, 5vw, 3.3rem)/1.08 Georgia, serif; margin: 10px 0 12px; }
        .intro { color: #68716a; margin-bottom: 30px; }
        .section-head { display: flex; align-items: end; justify-content: space-between; gap: 18px; margin-bottom: 24px; }
        .section-head h1 { margin-bottom: 0; }
        .button, button { display: inline-flex; align-items: center; justify-content: center; border: 0; border-radius: 6px; padding: 11px 16px; background: #344f40; color: #fff; font: inherit; font-size: .9rem; font-weight: 650; text-decoration: none; cursor: pointer; }
        .button:hover, button:hover { background: #263c30; }
        .button.secondary { background: #e8ebe5; color: #344f40; }
        .button.danger, button.danger { background: #f6e7e3; color: #963e31; }
        .notice { margin: 0 0 22px; padding: 13px 16px; border: 1px solid #b9d6c1; border-radius: 7px; background: #e8f4eb; color: #285a36; }
        .post-list { display: grid; gap: 14px; }
        .post-card, .paper { background: #fff; border: 1px solid #e6e5de; border-radius: 10px; padding: 24px; box-shadow: 0 5px 18px rgb(34 48 38 / 4%); }
        .post-card h2 { font: 500 1.55rem/1.2 Georgia, serif; margin: 0 0 8px; }
        .post-card h2 a { text-decoration: none; }
        .post-card h2 a:hover { color: #52755e; }
        .meta { color: #7b817c; font-size: .82rem; margin-bottom: 13px; }
        .body-copy { color: #4c554f; line-height: 1.75; white-space: pre-line; }
        .post-card .body-copy { margin-bottom: 17px; }
        .actions { display: flex; align-items: center; flex-wrap: wrap; gap: 9px; }
        .actions form { margin: 0; }
        .actions .button, .actions button { padding: 8px 12px; font-size: .82rem; }
        .empty { text-align: center; padding: 52px 24px; color: #69736c; }
        .empty h2 { color: #28352d; font: 500 1.7rem Georgia, serif; }
        .field { margin-bottom: 22px; }
        label { display: block; margin-bottom: 8px; font-size: .92rem; font-weight: 650; }
        input, textarea { width: 100%; padding: 12px 13px; border: 1px solid #d5d9d3; border-radius: 6px; color: #20231f; background: #fff; font: inherit; }
        textarea { min-height: 230px; resize: vertical; line-height: 1.6; }
        input:focus, textarea:focus { outline: 3px solid #d7e8da; border-color: #688a70; }
        .error { color: #a33f32; font-size: .86rem; margin: 7px 0 0; }
        .back-link { display: inline-block; margin-bottom: 22px; color: #526d5a; text-decoration: none; font-size: .9rem; }
        .pagination { margin-top: 24px; }
        @media (max-width: 540px) { main { padding-top: 36px; } .section-head { align-items: start; flex-direction: column; } .post-card, .paper { padding: 20px; } }
    </style>
</head>
<body>
    <header class="topbar">
        <div class="topbar-inner">
            <a class="brand" href="{{ route('posts.index') }}">Calibo Journal</a>
            <a class="top-link" href="{{ route('posts.index') }}">All posts</a>
        </div>
    </header>
    <main>
        @if (session('success'))
            <p class="notice" role="status">{{ session('success') }}</p>
        @endif

        @yield('content')
    </main>
</body>
</html>
