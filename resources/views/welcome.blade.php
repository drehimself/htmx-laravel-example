<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HTMX</title>

    <script src="https://unpkg.com/htmx.org@1.9.4" integrity="sha384-zUfuhFKKZCbHTY6aRR46gxiqszMk5tcHjsVFxnUo8VMus4kHGVdIYVbOYYNlKmHV" crossorigin="anonymous" defer></script>
</head>

<body>
    <div>
        <button hx-post="/api/clicked"
                hx-trigger="click"
                hx-target="#message"
                hx-swap="outerHTML"
                hx-indicator="#indicator">
            Click Me!
        </button>

        <span class="htmx-indicator" id="indicator">Loading...</span>

        <div id="message"></div>
    </div>
</body>

</html>
