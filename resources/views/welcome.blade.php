<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Test</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.dark\:text-gray-500{--tw-text-opacity:1;color:#6b7280;color:rgba(107,114,128,var(--tw-text-opacity))}}
        </style>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body >
        <div>
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Home</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
                <div class="flex justify-center pt-8 sm:justify-start sm:pt-0">
                    <svg width="457.9625px" height="122px" xmlns="http://www.w3.org/2000/svg" viewBox="21.01875000000001 14 457.9625 122"  preserveAspectRatio="xMidYMid"><defs><linearGradient id="editing-glowing-gradient" x1="0.8146601955249185" x2="0.18533980447508147" y1="0.8885729807284856" y2="0.11142701927151444"><stop offset="0" stop-color="#67ff43"></stop><stop offset="1" stop-color="#90ffff"></stop></linearGradient><filter id="editing-glowing" x="-100%" y="-100%" width="300%" height="300%"><feGaussianBlur in="SourceGraphic" result="blur" stdDeviation="10"></feGaussianBlur><feMerge><feMergeNode in="blur"></feMergeNode><feMergeNode in="SourceGraphic"></feMergeNode></feMerge></filter></defs><g filter="url(#editing-glowing)"><g transform="translate(92.68910026550293, 104.76000022888184)"><path d="M29.18 1.28L29.18 1.28L29.18 1.28Q20.99 1.28 20.22-10.37L20.22-10.37L9.22-10.37L9.22-10.37Q7.94-7.42 7.04-4.86L7.04-4.86L5.38 0L-3.58 0L16.58-42.24L30.34-42.24L33.02-11.14L33.02-11.14Q33.66-4.42 36.22-2.43L36.22-2.43L36.22-2.43Q34.37 1.28 29.18 1.28ZM14.72-23.17L11.20-15.04L20.03-15.04L19.26-31.49L19.26-33.22L14.72-23.17ZM44.48-26.75L44.48-26.75L44.48-26.75Q46.66-29.82 49.95-31.87L49.95-31.87L49.95-31.87Q53.25-33.92 57.28-33.92L57.28-33.92L57.28-33.92Q61.31-33.92 63.23-32.64L63.23-32.64L75.78-33.92L71.42-9.34L71.42-9.34Q69.18 3.20 64.45 8.13L64.45 8.13L64.45 8.13Q59.90 12.80 51.07 12.80L51.07 12.80L51.07 12.80Q44.35 12.80 40.51 10.69L40.51 10.69L40.51 10.69Q36.67 8.58 36.67 5.06L36.67 5.06L36.67 5.06Q36.67 2.43 38.66 0.93L38.66 0.93L38.66 0.93Q40.64-0.58 43.71-0.58L43.71-0.58L43.71-0.58Q46.40-0.58 48.45 0.64L48.45 0.64L48.45 0.64Q49.66 1.28 50.24 2.18L50.24 2.18L50.24 2.18Q48.77 3.46 48.77 5.57L48.77 5.57L48.77 5.57Q48.77 8.32 51.33 8.32L51.33 8.32L51.33 8.32Q55.62 8.32 58.05-1.79L58.05-1.79L58.05-1.79Q58.75-4.54 59.33-7.30L59.33-7.30L59.33-7.30Q56.45-3.78 49.92-3.78L49.92-3.78L49.92-3.78Q45.38-3.78 42.75-5.95L42.75-5.95L42.75-5.95Q40.13-8.13 40.13-13.25L40.13-13.25L40.13-13.25Q40.13-16.45 41.22-20.06L41.22-20.06L41.22-20.06Q42.30-23.68 44.48-26.75ZM52.80-13.06L52.80-13.06L52.80-13.06Q52.80-8.70 55.04-8.70L55.04-8.70L55.04-8.70Q56.58-8.70 58.05-10.37L58.05-10.37L58.05-10.37Q59.20-11.71 59.65-13.70L59.65-13.70L62.91-30.14L62.91-30.14Q62.59-30.21 62.27-30.34L62.27-30.34L62.27-30.34Q61.63-30.59 60.80-30.59L60.80-30.59L60.80-30.59Q56.90-30.59 54.59-24.19L54.59-24.19L54.59-24.19Q52.80-19.20 52.80-13.06ZM98.30-17.98L98.30-17.98L98.30-17.98Q100.61-22.08 100.61-26.24L100.61-26.24L100.61-26.24Q100.61-28.99 98.62-28.99L98.62-28.99L98.62-28.99Q97.09-28.99 95.49-26.37L95.49-26.37L95.49-26.37Q93.82-23.74 93.31-20.35L93.31-20.35L89.98 0L76.74 1.28L83.26-32.64L93.82-33.92L92.67-27.46L92.67-27.46Q95.81-33.92 102.85-33.92L102.85-33.92L102.85-33.92Q106.56-33.92 108.58-32L108.58-32L108.58-32Q110.59-30.08 110.59-26.14L110.59-26.14L110.59-26.14Q110.59-22.21 108-19.71L108-19.71L108-19.71Q105.41-17.22 100.99-17.22L100.99-17.22L100.99-17.22Q99.07-17.22 98.30-17.98ZM126.98-3.52L126.98-3.52L126.98-3.52Q124.99 1.28 118.66 1.28L118.66 1.28L118.66 1.28Q115.39 1.28 113.34-0.96L113.34-0.96L113.34-0.96Q111.62-2.94 111.62-4.93L111.62-4.93L111.62-4.93Q111.62-10.11 113.98-20.22L113.98-20.22L116.35-32.64L129.34-33.92L125.44-13.70L125.44-13.70Q124.35-8.96 124.35-7.30L124.35-7.30L124.35-7.30Q124.35-3.65 126.98-3.52ZM117.50-41.54L117.50-41.54L117.50-41.54Q117.50-44.03 119.58-45.38L119.58-45.38L119.58-45.38Q121.66-46.72 124.67-46.72L124.67-46.72L124.67-46.72Q127.68-46.72 129.50-45.38L129.50-45.38L129.50-45.38Q131.33-44.03 131.33-41.54L131.33-41.54L131.33-41.54Q131.33-39.04 129.31-37.76L129.31-37.76L129.31-37.76Q127.30-36.48 124.29-36.48L124.29-36.48L124.29-36.48Q121.28-36.48 119.39-37.76L119.39-37.76L119.39-37.76Q117.50-39.04 117.50-41.54ZM140.93 0.19L140.93 0.19L140.93 0.19Q138.88 1.28 136.06 1.28L136.06 1.28L136.06 1.28Q133.25 1.28 131.71-0.16L131.71-0.16L131.71-0.16Q130.18-1.60 130.18-4.38L130.18-4.38L130.18-4.38Q130.18-7.17 132.13-9.89L132.13-9.89L132.13-9.89Q134.08-12.61 136.99-14.14L136.99-14.14L136.99-14.14Q139.90-15.68 141.95-16.58L141.95-16.58L137.92-25.86L137.92-25.86Q136.83-28.22 134.78-28.22L134.78-28.22L134.27-28.16L134.08-28.16L134.08-28.16Q134.46-30.40 137.09-32.13L137.09-32.13L137.09-32.13Q139.71-33.92 142.72-33.92L142.72-33.92L142.72-33.92Q147.58-33.92 149.82-29.06L149.82-29.06L150.34-28.03L153.09-21.25L153.09-21.25Q154.82-22.02 155.55-23.46L155.55-23.46L155.55-23.46Q156.29-24.90 156.29-27.74L156.29-27.74L156.29-27.74Q156.29-30.59 154.75-32.38L154.75-32.38L154.75-32.38Q157.18-33.92 160.38-33.92L160.38-33.92L160.38-33.92Q166.14-33.92 166.14-28.35L166.14-28.35L166.14-28.35Q166.14-22.27 158.53-18.75L158.53-18.75L154.69-16.96L158.14-8.06L158.14-8.06Q159.17-5.38 161.02-4.22L161.02-4.22L161.02-4.22Q161.79-3.71 162.69-3.65L162.69-3.65L162.69-3.65Q160.77-0.51 156.61 0.90L156.61 0.90L156.61 0.90Q155.33 1.28 153.60 1.28L153.60 1.28L153.60 1.28Q151.87 1.28 149.89 0.10L149.89 0.10L149.89 0.10Q147.90-1.09 147.20-2.94L147.20-2.94L143.68-12.10L143.68-12.10Q140.10-10.50 140.10-4.67L140.10-4.67L140.10-4.67Q140.10-1.98 140.93 0.19ZM186.18-31.17L186.18-31.17L186.18-31.17Q184-32.83 184-36.38L184-36.38L184-36.38Q184-39.94 186.34-41.79L186.34-41.79L186.34-41.79Q188.67-43.65 192.70-43.65L192.70-43.65L192.70-43.65Q195.26-43.65 201.34-42.75L201.34-42.75L205.70-42.11L205.70-42.11Q207.87-41.86 210.14-41.86L210.14-41.86L210.14-41.86Q212.42-41.86 213.95-42.82L213.95-42.82L213.95-42.82Q216.26-40.77 216.26-37.82L216.26-37.82L216.26-37.82Q216.26-34.88 213.63-32.77L213.63-32.77L213.63-32.77Q210.94-30.53 207.49-30.53L207.49-30.53L207.49-30.53Q205.82-30.53 203.14-30.98L203.14-30.98L203.14-30.98Q200-21.12 200-14.27L200-14.27L200-14.27Q200-7.42 203.46-3.84L203.46-3.84L203.46-3.84Q201.86-0.96 199.49 0.16L199.49 0.16L199.49 0.16Q197.12 1.28 193.57 1.28L193.57 1.28L193.57 1.28Q190.02 1.28 187.81-0.67L187.81-0.67L187.81-0.67Q185.60-2.62 185.60-6.66L185.60-6.66L185.60-6.66Q185.60-11.33 188.16-19.01L188.16-19.01L188.16-19.01Q190.72-26.62 194.56-32.45L194.56-32.45L194.56-32.45Q192.70-32.64 190.78-32.64L190.78-32.64L190.78-32.64Q186.82-32.64 186.18-31.17ZM237.18-10.82L237.18-10.82L237.18-10.82Q238.78-9.73 238.78-7.33L238.78-7.33L238.78-7.33Q238.78-4.93 237.57-3.39L237.57-3.39L237.57-3.39Q236.35-1.86 234.37-0.83L234.37-0.83L234.37-0.83Q230.27 1.28 225.86 1.28L225.86 1.28L225.86 1.28Q221.44 1.28 218.85 0.32L218.85 0.32L218.85 0.32Q216.26-0.64 214.53-2.43L214.53-2.43L214.53-2.43Q211.14-5.82 211.14-12.03L211.14-12.03L211.14-12.03Q211.14-21.70 216.38-27.58L216.38-27.58L216.38-27.58Q222.02-33.92 231.81-33.92L231.81-33.92L231.81-33.92Q237.89-33.92 240.90-31.36L240.90-31.36L240.90-31.36Q243.14-29.44 243.14-26.30L243.14-26.30L243.14-26.30Q243.14-15.04 223.68-15.04L223.68-15.04L223.68-15.04Q223.42-13.38 223.42-11.97L223.42-11.97L223.42-11.97Q223.42-9.02 224.74-7.90L224.74-7.90L224.74-7.90Q226.05-6.78 228.48-6.78L228.48-6.78L228.48-6.78Q230.91-6.78 233.50-7.90L233.50-7.90L233.50-7.90Q236.10-9.02 237.18-10.82ZM224.13-17.79L224.13-17.79L224.13-17.79Q228.67-17.79 231.30-20.61L231.30-20.61L231.30-20.61Q233.92-23.30 233.92-27.58L233.92-27.58L233.92-27.58Q233.92-29.06 233.38-29.86L233.38-29.86L233.38-29.86Q232.83-30.66 231.74-30.66L231.74-30.66L231.74-30.66Q230.66-30.66 229.73-30.24L229.73-30.24L229.73-30.24Q228.80-29.82 227.84-28.42L227.84-28.42L227.84-28.42Q225.47-25.22 224.13-17.79ZM276.74-26.62L276.74-26.62L276.74-26.62Q276.74-23.94 274.50-22.27L274.50-22.27L274.50-22.27Q272.26-20.61 268.61-20.61L268.61-20.61L268.61-20.61Q267.07-20.61 266.18-21.06L266.18-21.06L266.18-21.06Q266.88-22.72 267.10-24.80L267.10-24.80L267.10-24.80Q267.33-26.88 267.33-27.46L267.33-27.46L267.33-27.46Q267.33-30.14 265.47-30.14L265.47-30.14L265.47-30.14Q264.19-30.14 262.75-28.54L262.75-28.54L262.75-28.54Q261.31-26.94 260.10-24.45L260.10-24.45L260.10-24.45Q257.41-18.69 257.41-12.86L257.41-12.86L257.41-12.86Q257.41-9.66 258.62-8.22L258.62-8.22L258.62-8.22Q259.84-6.78 262.53-6.78L262.53-6.78L262.53-6.78Q266.24-6.78 269.18-9.86L269.18-9.86L269.18-9.86Q270.02-10.82 270.46-11.90L270.46-11.90L270.46-11.90Q272.90-10.62 272.90-7.10L272.90-7.10L272.90-7.10Q272.90-3.52 268.93-1.15L268.93-1.15L268.93-1.15Q264.83 1.28 258.30 1.28L258.30 1.28L258.30 1.28Q245.31 1.28 245.31-12.48L245.31-12.48L245.31-12.48Q245.31-22.53 251.01-28.29L251.01-28.29L251.01-28.29Q256.51-33.92 266.62-33.92L266.62-33.92L266.62-33.92Q276.74-33.92 276.74-26.62ZM310.66-7.10L310.66-7.10L310.66-7.10Q310.66-4.29 313.54-3.46L313.54-3.46L313.54-3.46Q312.83-1.09 310.08 0.19L310.08 0.19L310.08 0.19Q307.78 1.28 305.25 1.28L305.25 1.28L305.25 1.28Q302.72 1.28 301.41 0.61L301.41 0.61L301.41 0.61Q300.10-0.06 299.39-1.15L299.39-1.15L299.39-1.15Q298.24-2.82 298.24-5.95L298.24-5.95L298.24-5.95Q298.24-7.81 299.26-12.93L299.26-12.93L300.16-17.79L300.16-17.79Q301.25-23.36 301.25-25.41L301.25-25.41L301.25-25.41Q301.25-28.99 299.26-28.99L299.26-28.99L299.26-28.99Q296.77-28.99 295.17-25.34L295.17-25.34L295.17-25.34Q294.53-23.94 294.08-21.82L294.08-21.82L289.73 0L276.86 1.28L285.89-44.80L298.75-46.08L298.24-43.52L298.24-43.52Q296.45-33.66 294.91-30.34L294.91-30.34L294.91-30.34Q298.50-33.92 305.09-33.92L305.09-33.92L305.09-33.92Q312.06-33.92 313.34-29.31L313.34-29.31L313.34-29.31Q313.79-27.84 313.79-26.56L313.79-26.56L313.79-26.56Q313.79-25.28 313.70-24.29L313.70-24.29L313.70-24.29Q313.60-23.30 313.28-21.50L313.28-21.50L312.45-16.90L310.98-9.66L310.98-9.66Q310.66-8.19 310.66-7.10Z" fill="url(#editing-glowing-gradient)"></path></g></g><style>text {
  font-size: 64px;
  font-family: Arial Black;
  dominant-baseline: central;
  text-anchor: middle;
}</style></svg>
                </div>

                <div class="mt-8 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
                    <div class="grid grid-cols-1 md:grid-cols-2">
                        <div class="p-6">
                            <div>
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500"><path d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path></svg>
                                <div class="ml-4 text-lg leading-7 font-semibold"><a href="{{ route('plant.index') }}" class="underline text-gray-900 dark:text-white">Gestion des Plantes</a></div>
                            </div>

                            <div class="ml-12">
                                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                    {{-- Nothing Here --}}
                                </div>
                            </div>
                        </div>

                        <div class="p-6">
                            <div>
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500"><path d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path></svg>
                                <div class="ml-4 text-lg leading-7 font-semibold"><a href="{{ route('farmer.index') }}" class="underline text-gray-900 dark:text-white">Gestion des Agriculteurs</a></div>
                            </div>

                            <div class="ml-12">
                                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                    {{-- Nothing Here --}}
                                </div>
                            </div>
                        </div>

                        <div class="p-6">
                            <div>
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500"><path d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path></svg>
                                <div class="ml-4 text-lg leading-7 font-semibold"><a href="{{ route('project.index') }}" class="underline text-gray-900 dark:text-white">Gestion des Projets</a></div>
                            </div>

                            <div class="ml-12">
                                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                    {{-- Nothing Here --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="flex justify-center mt-4 sm:items-center sm:justify-between">
                    <div class="text-center text-sm text-gray-500 sm:text-left">
                        <div>
                            <svg fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor" class="-mt-px w-5 h-5 text-gray-400">
                                <path d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"></path>
                            </svg>

                            <a href="#" class="ml-1 underline">
                                Help
                            </a>

                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="ml-4 -mt-px w-5 h-5 text-gray-400">
                                <path d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                            </svg>

                            <a href="#" class="ml-1 underline">
                                Contact
                            </a>
                        </div>
                    </div>

                    <div class="ml-4 text-center text-sm text-gray-500 sm:text-right sm:ml-0">
                        AgrixTech v0.1.0-alpha
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
