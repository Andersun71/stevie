<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />

<title>{{ $title ?? "Stevie" }}</title>

<link rel="preconnect" href="https://fonts.bunny.net" />
<link
    href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600"
    rel="stylesheet"
/>

<!-- Google Material Symbols Outlined -->
<link
    href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined"
    rel="stylesheet"
/>

@vite(["resources/css/app.css", "resources/js/app.js"])
@fluxAppearance
