<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

  <head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1" name="viewport">

    <title>Namecase API Project</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net" rel="preconnect">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- Styles -->
    <link href="/assets/css/main.css" rel="stylesheet">
    <link href="/assets/css/custom.css" rel="stylesheet">
  </head>

  <body class="antialiased">
    <div
      class="relative min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">
      <div class="max-w-7xl mx-auto p-6 lg:p-8">
        <div class="flex items-center justify-center gap-4 mt-16">

          <div class="h-16 w-16 bg-red-50 dark:bg-red-800/20 flex items-center justify-center rounded-full">
            <svg class="w-7 h-7 stroke-red-500" fill="none" stroke-width="1.5" viewBox="0 0 24 24"
              xmlns="http://www.w3.org/2000/svg">
              <path
                d="M12 6.042A8.967 8.967 0 006 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 016 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 016-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0018 18a8.967 8.967 0 00-6 2.292m0-14.25v14.25"
                stroke-linecap="round" stroke-linejoin="round" />
            </svg>
          </div>
          <div>
            <h2 class="main-title">API Documentation</h2>
            <h3 class="main-subtitle">Check out the <a href="https://github.com/TizianoN/namecase-project"
                target="_blank">GitHub repo</a></h3>
          </div>
        </div>

        <div
          class="mt-16 p-6 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">

          <h3 class="mt-6 text-xl font-semibold text-gray-900 dark:text-white">Previous Prime Number</h3>
          <p class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">Restituisce il numero primo
            precedente più vicino al parametro fornito</p>
          <code class="mt-6">
            <span class="code-method">
              GET
            </span>
            <a href="https://namecase-project.tizianonicolai.com/api/prev-prime/100" target="_blank">
              https://namecase-project.tizianonicolai.com/api/prev-prime/{number}
            </a>
          </code>
        </div>

        <div
          class="mt-16 p-6 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
          <h3 class="mt-6 text-xl font-semibold text-gray-900 dark:text-white">Next Prime Number</h3>
          <p class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">Restituisce il numero primo
            successivo più vicino al parametro fornito</p>
          <code class="mt-6">
            <span class="code-method">
              GET
            </span>
            <a href="https://namecase-project.tizianonicolai.com/api/next-prime/100" target="_blank">
              https://namecase-project.tizianonicolai.com/api/next-prime/{number}
            </a>
          </code>
        </div>

        <div
          class="mt-16 p-6 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
          <h3 class="mt-6 text-xl font-semibold text-gray-900 dark:text-white">Primes Between</h3>
          <p class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">Restituisce la lista di numeri primi
            compresa nel range specificato</p>
          <code class="mt-6">
            <span class="code-method">
              GET
            </span>
            <a href="https://namecase-project.tizianonicolai.com/api/primes-betweem/50/100" target="_blank">
              https://namecase-project.tizianonicolai.com/api/primes-betweem/{min_number}/{max_number}
            </a>
          </code>
        </div>

        <div class="flex justify-center mt-16 px-0 sm:items-center sm:justify-between">
          <div class="text-center text-sm sm:text-left">
            &nbsp;
          </div>

          <div class="text-center text-sm text-gray-500 dark:text-gray-400 sm:text-right sm:ml-0">
            Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})
          </div>
        </div>
      </div>
    </div>
  </body>

</html>
