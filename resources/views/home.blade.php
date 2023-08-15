<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel Explorer</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>
    <main class="px-12 py-8">
        @auth
            <p>User logged in...</p>
            <form action="/logout" method="POST">
                @csrf
                <button
                    class="block my-2 mb-6 p-2 border-2 border-zinc-800 text-slate-50 bg-zinc-800 rounded-md">Logout</button>
            </form>

            <div>
                <h3 class="text-3xl">Create a new post:</h2>

                    <form action="/create-post" method="post">

                        <input type="text" name="title" placeholder="Post title"
                            class="block my-2 p-2 border-2 border-zinc-800 text-zinc-800 rounded-md">
                        <textarea name="body" placeholder="Body content..."
                            class="block my-2 p-2 border-2 border-zinc-800 text-zinc-800 rounded-md"></textarea>
                        <button
                            class="block my-2 mb-6 p-2 border-2 border-zinc-800 text-slate-50 bg-zinc-800 rounded-md">Save
                            Post</button>

                    </form>
            </div>
        @else
            <div>
                <h2 class="text-4xl font-medium mb-6">Register</h2>
                <form action="/register" method="post">
                    @csrf
                    <input name="name" type="text" placeholder="name"
                        class="block my-2 p-2 border-2 border-zinc-800 text-zinc-800 rounded-md">
                    <input name="email" type="text" placeholder="email"
                        class="block my-2 p-2 border-2 border-zinc-800 text-zinc-800 rounded-md">
                    <input name="password" type="password" placeholder="password"
                        class="block my-2 p-2 border-2 border-zinc-800 text-zinc-800 rounded-md">
                    <button type="submit"
                        class="block my-2 mb-6 p-2 border-2 border-zinc-800 text-slate-50 bg-zinc-800 rounded-md">Register</button>
                </form>
            </div>

            <hr>

            <div>
                <h2 class="text-4xl font-medium mb-6">Login</h2>
                <form action="/login" method="post">
                    @csrf
                    <input name="loginname" type="text" placeholder="name"
                        class="block my-2 p-2 border-2 border-zinc-800 text-zinc-800 rounded-md">
                    <input name="loginpassword" type="password" placeholder="password"
                        class="block my-2 p-2 border-2 border-zinc-800 text-zinc-800 rounded-md">
                    <button type="submit"
                        class="block my-2 mb-6 p-2 border-2 border-zinc-800 text-slate-50 bg-zinc-800 rounded-md">Register</button>
                </form>
            </div>
        @endauth
    </main>
</body>

</html>
