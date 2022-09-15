<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite("resources/css/app.css")
</head>
<body>


    <div class="w-full bg-white rounded-lg border shadow-md dark:bg-gray-800 dark:border-gray-700">
        <div class="sm:hidden">
            <label for="tabs" class="sr-only">Select tab</label>
            <select id="tabs" class="bg-gray-50 border-0 border-b border-gray-200 text-gray-900 sm:text-sm rounded-t-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                <option>Pathway</option>
            </select>
        </div>
        <ul class="hidden text-sm font-medium text-center text-gray-500 rounded-lg divide-x divide-gray-200 sm:flex dark:divide-gray-600 dark:text-gray-400" id="fullWidthTab" data-tabs-toggle="#fullWidthTabContent" role="tablist">
            <li class="w-full">
                <button id="stats-tab" data-tabs-target="#stats" type="button" role="tab" aria-controls="stats" aria-selected="true" class="inline-block p-4 w-full bg-gray-50 rounded-tl-lg hover:bg-gray-100 focus:outline-none dark:bg-gray-700 dark:hover:bg-gray-600 text-blue-600 hover:text-blue-600 dark:text-blue-500 dark:hover:text-blue-500 border-blue-600 dark:border-blue-500">Pathway</button>
            </li>

        </ul>
        <div id="fullWidthTabContent" class="border-t border-gray-200 dark:border-gray-600">
            <div class="p-4 bg-white rounded-lg md:p-8 dark:bg-gray-800" id="stats" role="tabpanel" aria-labelledby="stats-tab">
                <dl class="grid grid-cols-2 gap-8 p-4 mx-auto max-w-screen-xl text-gray-900 sm:grid-cols-3 xl:grid-cols-6 dark:text-white sm:p-8">

                    <div class="flex flex-col justify-center items-center">
                        <a href="{{ route('wh-index') }}">
                            <dt class="mb-2 text-3xl font-extrabold">
                                <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M22 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4">
                                    </path>
                                </svg>
                            </dt>
                            <dd class="font-light text-gray-500 dark:text-gray-400">Warehouse</dd>
                        </a>
                    </div>

                    <div class="flex flex-col justify-center items-center">
                        <dt class="mb-2 text-3xl font-extrabold">100M+</dt>
                        <dd class="font-light text-gray-500 dark:text-gray-400">Public repositories</dd>
                    </div>
                    <div class="flex flex-col justify-center items-center">
                        <dt class="mb-2 text-3xl font-extrabold">1000s</dt>
                        <dd class="font-light text-gray-500 dark:text-gray-400">Open source projects</dd>
                    </div>
                    <div class="flex flex-col justify-center items-center">
                        <dt class="mb-2 text-3xl font-extrabold">1B+</dt>
                        <dd class="font-light text-gray-500 dark:text-gray-400">Contributors</dd>
                    </div>
                    <div class="flex flex-col justify-center items-center">
                        <dt class="mb-2 text-3xl font-extrabold">90+</dt>
                        <dd class="font-light text-gray-500 dark:text-gray-400">Top Forbes companies</dd>
                    </div>
                    <div class="flex flex-col justify-center items-center">
                        <dt class="mb-2 text-3xl font-extrabold">4M+</dt>
                        <dd class="font-light text-gray-500 dark:text-gray-400">Organizations</dd>
                    </div>
                </dl>
            </div>
        </div>
    </div>


</body>
</html>
