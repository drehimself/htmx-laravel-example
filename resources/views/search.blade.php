<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search</title>

    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://unpkg.com/htmx.org@1.9.4" integrity="sha384-zUfuhFKKZCbHTY6aRR46gxiqszMk5tcHjsVFxnUo8VMus4kHGVdIYVbOYYNlKmHV" crossorigin="anonymous" defer></script>
</head>

<body>
    <div class="container mx-auto">
        @if (session('success_message'))
            <div class="bg-green-100 text-green-600 rounded px-2 py-2">
                {{ session('success_message') }}
            </div>
        @endif

        @if (count($errors) > 0)
            <div class="bg-red-100 text-red-600 rounded px-2 py-2">
                <ul class="list-disc list-inside">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="px-4 sm:px-6 lg:px-8 my-8">
            <div class="sm:flex sm:items-center">
                <div class="sm:flex-auto">
                    <h1 class="text-base font-semibold leading-6 text-gray-900">Users</h1>
                    <p class="mt-2 text-sm text-gray-700">A list of all the users in the system.</p>
                </div>

            </div>
            <div class="mt-8 flow-root">
                <div class="-mx-4 -my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                    <div class="inline-block min-w-full py-2 align-middle sm:px-6 lg:px-8">

                        <input
                               type="search"
                               name="search"
                               autocomplete="off"
                               hx-post="/api/search"
                               hx-trigger="keyup changed delay:500ms,search"
                               hx-target="#table-users"
                               placeholder="Search users"
                               class="block rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 px-4 py-2">
                        <x-table-users :users="$users" />
                    </div>
                </div>
            </div>
        </div>

    </div>
</body>

</html>
