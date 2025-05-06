<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />

<title>{{ $title ?? "Stevie" }}</title>

<link rel="preconnect" href="https://fonts.bunny.net" />
<link
    href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600"
    rel="stylesheet"
/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" integrity="sha512-nN9kA3rDRPZ0D+dBZvZI1u1cq3wbR2zzmJ9TdpX2GnpP5pNSW0O3DqU+tqvYq8W1Q3LM2lTrV5lI2Kn/hpT/IQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<!-- Google Material Symbols Outlined -->
<link
    href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined"
    rel="stylesheet"
/>
<script src="//unpkg.com/alpinejs" defer></script>

@vite(["resources/css/app.css", "resources/js/app.js"])
@fluxAppearance
