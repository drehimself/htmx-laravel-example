<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Form</title>

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
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div class="my-96">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas praesentium dolor amet soluta, id quibusdam quo omnis beatae expedita. Eius minus consequuntur nulla impedit ad itaque, inventore laboriosam tempore quos maxime, exercitationem neque blanditiis pariatur corrupti. Animi et quibusdam minus deserunt, voluptates voluptatem vero? Laborum ipsam, ab maiores doloremque eum excepturi minima praesentium temporibus explicabo atque nemo dignissimos, voluptate maxime voluptas libero at nulla, in inventore dolorem nobis fuga quisquam quos! Laudantium rem molestias vero repellendus itaque voluptatem! Maxime facilis laudantium, praesentium quasi, corporis deleniti quis, minima consectetur culpa voluptatibus nihil necessitatibus sapiente distinctio aliquam quidem. Possimus, ducimus earum? Vero accusamus quae corrupti modi blanditiis excepturi explicabo. Sed dolore est in fugit blanditiis nobis, magni temporibus sint, officia excepturi necessitatibus rerum saepe laudantium. Laborum provident obcaecati corporis modi repudiandae ipsum dolore adipisci. Amet maiores obcaecati quo accusantium, ullam rem officiis iure culpa illo fugiat quam error, ea corrupti ducimus. Perferendis magnam, molestias iure, officia, numquam necessitatibus ipsam voluptatem magni tempora fugit quia aliquid laboriosam aut consequuntur unde expedita totam. Ullam architecto doloremque culpa ad officia soluta velit expedita nobis vitae blanditiis, laboriosam enim! Nisi quaerat sit officiis alias praesentium dignissimos unde tempora eaque quas explicabo, cumque commodi dolore quidem itaque! Dolorem ea magnam consequuntur. Tempore, corrupti. Maiores velit reprehenderit ut aliquam dolores voluptatem excepturi, hic doloremque molestias iusto amet tenetur accusantium enim aut neque recusandae libero facere sed consequatur tempore voluptate. Pariatur ea quidem fuga in magni eius deleniti perspiciatis architecto dolores esse, dignissimos, vero, at eligendi deserunt temporibus quam recusandae nemo? Quae fugit itaque maxime tenetur nihil deserunt perferendis, blanditiis aliquid saepe eum reprehenderit deleniti quos culpa, iure possimus porro. Iusto aliquid maxime debitis nostrum reiciendis atque, maiores asperiores, earum tempore fuga qui consequatur deleniti, exercitationem molestiae laborum repellat molestias incidunt! Soluta laudantium explicabo commodi a, ab temporibus ipsum numquam inventore error sint fuga perspiciatis illum pariatur? Quisquam consequatur nulla, quo fugiat consequuntur odio dolorem ipsam recusandae nam libero voluptate eveniet accusamus sequi placeat quae necessitatibus, molestias dolorum fugit blanditiis nihil neque omnis tempora reprehenderit porro. Accusantium distinctio vitae labore veniam incidunt sapiente deserunt beatae, quos ab, odit laudantium? Dolore soluta ullam, rerum voluptas voluptates ipsum nemo in veritatis officia quos iusto consequatur. Possimus magni id, quod quos eaque praesentium, molestias soluta perferendis quis, pariatur tempora ea provident totam fugiat delectus iure recusandae. Quod ipsum cumque architecto cum necessitatibus eaque nobis laboriosam deserunt quo ad consequuntur animi, magnam reprehenderit explicabo suscipit. Incidunt, quas accusamus? Amet sit vel similique harum alias aut culpa voluptate? Ipsum perferendis explicabo iure, aliquam, unde nisi deserunt quos ipsam quo suscipit vitae placeat fugit, esse ex praesentium? Ducimus quis saepe numquam cumque similique magnam facilis animi quidem. Eaque possimus odio veniam atque, ad inventore, odit soluta, quam architecto magni asperiores consectetur et! Quaerat quam, amet et autem ipsum vel perspiciatis velit quis illo dignissimos distinctio provident tenetur eius quo harum incidunt expedita aperiam blanditiis suscipit, doloremque molestias. Accusamus quis doloremque fuga? Accusamus, repellat consectetur recusandae repudiandae magnam quod officia possimus esse? Optio, odio, tempora quibusdam provident debitis ipsam distinctio quisquam accusantium officiis repudiandae adipisci assumenda nostrum ratione aut, voluptas a in ut consequatur porro veritatis natus minima! Dicta, maxime non hic obcaecati consectetur fuga sunt nobis dignissimos ex itaque delectus eum officia odit dolore dolores iste eaque nostrum voluptas quasi impedit. Impedit veritatis, reprehenderit consequatur tempora nobis at, quam voluptates aliquid earum ratione a distinctio sed in reiciendis? Omnis hic nam totam fuga non error pariatur quae, quasi et, ipsum doloremque voluptatem ut inventore illo optio odio at odit, quisquam sapiente aliquam? Corporis repudiandae ipsam architecto optio illo animi, velit eius adipisci quae enim dicta saepe doloribus fuga earum nihil deserunt atque commodi error minima amet. Fugiat nobis iusto repellendus alias et nemo non corrupti quaerat iste. Ab facilis optio odit velit laboriosam sequi accusamus in, vel suscipit, officia veritatis corporis eaque impedit quidem quos molestias voluptate quisquam vero dignissimos libero aliquid provident, quia ipsam recusandae. Illum quod suscipit porro esse, aliquid omnis libero et beatae voluptatum eveniet eaque dicta accusantium voluptatem similique, nemo possimus iure non. Commodi qui voluptate ad ducimus ullam architecto excepturi, harum eos molestiae! Voluptas quo mollitia aliquid error accusamus veniam hic! Voluptatem obcaecati maxime aut tenetur. Ipsum dolorem eligendi, dolorum deleniti impedit a sequi est corrupti. Numquam quidem laudantium impedit, nulla delectus corrupti, non explicabo sapiente itaque similique quae necessitatibus quos, assumenda repellendus recusandae. Nostrum repudiandae exercitationem inventore impedit voluptates quaerat maxime quam nulla hic! Facere mollitia nam, itaque nobis expedita hic facilis officiis iure omnis reprehenderit delectus neque quia perspiciatis repudiandae voluptate, aspernatur ipsum in provident? In quaerat voluptatum velit, vero ipsum quidem at qui modi temporibus impedit? Iste, quo error perferendis, repudiandae eveniet debitis sapiente quaerat enim adipisci explicabo optio iure laudantium. Aliquam officiis facere hic officia sit numquam animi doloribus dignissimos molestiae ipsa ad dolor voluptatibus nostrum, quam labore, incidunt rem consequuntur itaque? Et nostrum eaque quam esse, incidunt sequi, veritatis cumque nisi quo eos placeat. Repellendus ex ducimus unde ad ea mollitia consectetur impedit laudantium, aut perferendis, ipsam iure, quasi repellat quis animi aliquam harum numquam tempore earum qui. Dolore quae nihil aliquid? Recusandae nobis libero maxime maiores quis cum eveniet, impedit magnam rerum dignissimos commodi optio pariatur ipsam laborum voluptatem esse delectus animi explicabo quia quisquam accusamus ducimus ullam et officiis. Repudiandae, nulla! Reiciendis placeat reprehenderit numquam ratione in doloribus incidunt corporis! Molestiae, laborum repellat. Rerum placeat cum, corrupti architecto nulla repellendus pariatur possimus reiciendis expedita nesciunt aliquam officia quis ipsum maiores, esse modi fugiat molestias obcaecati, temporibus vitae itaque. Non officiis quasi obcaecati, nobis numquam esse blanditiis, explicabo, ducimus minus hic cumque excepturi necessitatibus laboriosam possimus at ex sequi officia unde illum illo? Non odio iure unde alias dolorum a adipisci architecto et modi possimus omnis vitae asperiores debitis delectus sed aut itaque suscipit, aspernatur autem ipsum perferendis inventore minima animi totam. Suscipit deleniti, facilis labore eum aspernatur rerum ratione in quo facere, adipisci hic magnam dolorum nihil quibusdam cumque, officia nemo molestiae itaque ex animi ipsa! Maxime consequatur voluptate tempora in quasi nemo?
        </div>
        <section class="bg-white dark:bg-gray-900">
            <div class="py-8 lg:py-16 px-4 mx-auto max-w-screen-md">
                <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-center text-gray-900 dark:text-white">Contact Us</h2>
                <div id="response"></div>

                <form
                      action="/contact"
                      class="space-y-8"
                      method="POST"
                      hx-post="/api/contact"
                      hx-target="#response"
                      hx-swap="innerHTML">
                    @csrf
                    <div>
                        <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Your email</label>
                        <input type="text" name="email" id="email" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-indigo-500 focus:border-indigo-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-indigo-500 dark:focus:border-indigo-500 dark:shadow-sm-light" placeholder="name@company.com">
                        @error('email')
                            <div class="text-red-500 mt-1">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="sm:col-span-2">
                        <label for="message" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Your message</label>
                        <textarea id="message" name="message" rows="6" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg shadow-sm border border-gray-300 focus:ring-indigo-500 focus:border-indigo-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-indigo-500 dark:focus:border-indigo-500" placeholder="Leave a message"></textarea>
                        @error('message')
                            <div class="text-red-500 mt-1">{{ $message }}</div>
                        @enderror
                    </div>
                    <button type="submit" class="py-3 px-5 text-sm font-medium text-center text-white rounded-lg bg-indigo-700 sm:w-fit hover:bg-indigo-800 focus:ring-4 focus:outline-none focus:ring-primary-300 dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">Send message</button>
                </form>
            </div>
        </section>
    </div>
</body>

</html>
