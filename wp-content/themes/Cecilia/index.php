<?php get_header(); ?>
<div class="bg-gray-900 leading-relaxed text-slate-400 antialiased">
   <div class="relative">
      <div class="mx-auto min-h-screen max-w-screen-xl px-6 py-12 font-sans md:px-12 md:py-16 lg:py-0 flex items-center">
         <div>
            <?php if (get_theme_mod('basic_about_callout_display') == 'Yes') { ?>
            <p class="inter"> Hiya! 👋 </p>
            <h1 class="text-5xl font-bold tracking-tight text-slate-200 sm:text-7xl"><a href="/"><?php echo get_theme_mod('basic_about_callout_name') ?></a></h1>
            <!-- <h2 class="mt-3 text-lg font-bold tracking-tight text-slate-500 sm:text-5xl"><?php echo get_theme_mod('basic_about_callout_jobtitle') ?></h2> -->
            <?php 
               $authorText = get_theme_mod('basic_about_callout_text');
               if ($authorText != '') {
                   echo wpautop('<p class="mt-3 text-lg font-bold tracking-tight text-slate-500 sm:text-6xl">'.$authorText.'</p>');
               }
               ?>
            <?php } ?>
            <!-- <ul class="ml-1 mt-8 flex items-center" aria-label="Social media">
               <li class="mr-5 shrink-0 text-xs">
                  <a class="block hover:text-slate-200" href="https://github.com/bchiang7" target="_blank" rel="noreferrer noopener" aria-label="GitHub (opens in a new tab)" title="GitHub">
                     <span class="sr-only">GitHub</span>
                     <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor" class="h-6 w-6" aria-hidden="true">
                        <path d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.013 8.013 0 0016 8c0-4.42-3.58-8-8-8z"></path>
                     </svg>
                  </a>
               </li>
               <li class="mr-5 shrink-0 text-xs">
                  <a class="block hover:text-slate-200" href="https://www.linkedin.com/in/bchiang7/" target="_blank" rel="noreferrer noopener" aria-label="LinkedIn (opens in a new tab)" title="LinkedIn">
                     <span class="sr-only">LinkedIn</span>
                     <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="h-6 w-6" aria-hidden="true">
                        <path d="M20.5 2h-17A1.5 1.5 0 002 3.5v17A1.5 1.5 0 003.5 22h17a1.5 1.5 0 001.5-1.5v-17A1.5 1.5 0 0020.5 2zM8 19H5v-9h3zM6.5 8.25A1.75 1.75 0 118.3 6.5a1.78 1.78 0 01-1.8 1.75zM19 19h-3v-4.74c0-1.42-.6-1.93-1.38-1.93A1.74 1.74 0 0013 14.19a.66.66 0 000 .14V19h-3v-9h2.9v1.3a3.11 3.11 0 012.7-1.4c1.55 0 3.36.86 3.36 3.66z"></path>
                     </svg>
                  </a>
               </li>
               <li class="mr-5 shrink-0 text-xs">
                  <a class="block hover:text-slate-200" href="https://codepen.io/bchiang7" target="_blank" rel="noreferrer noopener" aria-label="CodePen (opens in a new tab)" title="CodePen">
                     <span class="sr-only">CodePen</span>
                     <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-6 w-6" aria-hidden="true">
                        <path d="M3.06 41.732L32 60.932l28.94-19.2V22.268L32 3.068l-28.94 19.2zm57.878 0L32 22.268 3.06 41.732m0-19.463L32 41.47l28.94-19.2M32 3.068v19.2m0 19.463v19.2" stroke-width="5"></path>
                     </svg>
                  </a>
               </li>
            </ul>
            <button class="mt-5 bg-transparent hover:bg-teal-500 text-teal-700 font-normal hover:text-white py-2 px-4 border border-teal-500 hover:border-transparent rounded">
            <span class="inter">Explore my portfolio</span>
            </button> -->
         </div>
      </div>
      <div class="mx-auto min-h-screen max-w-screen-xl px-6 py-12 font-sans md:px-12 md:py-16 lg:py-0">
         <a href="#content" class="absolute left-0 top-0 block -translate-x-full rounded bg-gradient-to-br from-teal-400 via-blue-500 to-purple-600 px-4 py-3 text-sm font-bold uppercase tracking-widest text-white focus-visible:translate-x-0">Skip to Content</a>
         <div class="lg:flex lg:justify-between lg:gap-4">
            <header class="lg:sticky lg:top-0 lg:flex lg:max-h-screen lg:w-[38%] lg:flex-col  lg:py-24">
          
               <div>
  


                   <nav class="nav hidden lg:block" aria-label="In-page jump links">
                     <ul class=" w-max">
                        <li><a class="group flex items-center py-3 active" href="#about"><span class="nav-indicator mr-4 h-px w-8 bg-slate-600 transition-all group-hover:w-16 group-hover:bg-slate-200 group-focus-visible:w-16 group-focus-visible:bg-slate-200 motion-reduce:transition-none"></span><span class="nav-text text-xs font-bold uppercase tracking-widest text-slate-500 group-hover:text-slate-200 group-focus-visible:text-slate-200">About</span></a></li>
                        <li><a class="group flex items-center py-3" href="#experience"><span class="nav-indicator mr-4 h-px w-8 bg-slate-600 transition-all group-hover:w-16 group-hover:bg-slate-200 group-focus-visible:w-16 group-focus-visible:bg-slate-200 motion-reduce:transition-none"></span><span class="nav-text text-xs font-bold uppercase tracking-widest text-slate-500 group-hover:text-slate-200 group-focus-visible:text-slate-200">Experience</span></a></li>
                        <li><a class="group flex items-center py-3" href="#projects"><span class="nav-indicator mr-4 h-px w-8 bg-slate-600 transition-all group-hover:w-16 group-hover:bg-slate-200 group-focus-visible:w-16 group-focus-visible:bg-slate-200 motion-reduce:transition-none"></span><span class="nav-text text-xs font-bold uppercase tracking-widest text-slate-500 group-hover:text-slate-200 group-focus-visible:text-slate-200">Projects</span></a></li>
                     </ul>
                  </nav> 
               </div>
               <ul class="ml-1 mt-8 flex items-center" aria-label="Social media">
                  <li class="mr-5 shrink-0 text-xs">
                     <a class="block hover:text-slate-200" href="https://github.com/bchiang7" target="_blank" rel="noreferrer noopener" aria-label="GitHub (opens in a new tab)" title="GitHub">
                        <span class="sr-only">GitHub</span>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor" class="h-6 w-6" aria-hidden="true">
                           <path d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.013 8.013 0 0016 8c0-4.42-3.58-8-8-8z"></path>
                        </svg>
                     </a>
                  </li>
                  <li class="mr-5 shrink-0 text-xs">
                     <a class="block hover:text-slate-200" href="https://www.linkedin.com/in/bchiang7/" target="_blank" rel="noreferrer noopener" aria-label="LinkedIn (opens in a new tab)" title="LinkedIn">
                        <span class="sr-only">LinkedIn</span>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="h-6 w-6" aria-hidden="true">
                           <path d="M20.5 2h-17A1.5 1.5 0 002 3.5v17A1.5 1.5 0 003.5 22h17a1.5 1.5 0 001.5-1.5v-17A1.5 1.5 0 0020.5 2zM8 19H5v-9h3zM6.5 8.25A1.75 1.75 0 118.3 6.5a1.78 1.78 0 01-1.8 1.75zM19 19h-3v-4.74c0-1.42-.6-1.93-1.38-1.93A1.74 1.74 0 0013 14.19a.66.66 0 000 .14V19h-3v-9h2.9v1.3a3.11 3.11 0 012.7-1.4c1.55 0 3.36.86 3.36 3.66z"></path>
                        </svg>
                     </a>
                  </li>
                  <li class="mr-5 shrink-0 text-xs">
                     <a class="block hover:text-slate-200" href="https://codepen.io/bchiang7" target="_blank" rel="noreferrer noopener" aria-label="CodePen (opens in a new tab)" title="CodePen">
                        <span class="sr-only">CodePen</span>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-6 w-6" aria-hidden="true">
                           <path d="M3.06 41.732L32 60.932l28.94-19.2V22.268L32 3.068l-28.94 19.2zm57.878 0L32 22.268 3.06 41.732m0-19.463L32 41.47l28.94-19.2M32 3.068v19.2m0 19.463v19.2" stroke-width="5"></path>
                        </svg>
                     </a>
                  </li>

               </ul>
            </header>
            <main id="content" class="pt-24 lg:w-[62%] lg:py-24">
            <?php if (get_theme_mod('basic_intro_callout_display') == 'Yes') { ?>
               <section id="about" class="mb-16 scroll-mt-16 md:mb-24 lg:mb-36 lg:scroll-mt-24" aria-label="About me">
                  <div class="sticky top-0 z-20 -mx-6 mb-4 w-screen bg-slate-900/75 px-6 py-5 backdrop-blur md:-mx-12 md:px-12 lg:sr-only lg:relative lg:top-auto lg:mx-auto lg:w-full lg:px-0 lg:py-0 lg:opacity-0">
                     <h2 class="text-sm font-bold uppercase tracking-widest text-slate-200 lg:sr-only">About</h2>
                  </div>
                  <div>
                  <?php echo get_theme_mod('basic_intro_callout_text') ?>

                  </div>
               </section>
            <?php } ?>
            <?php if (get_theme_mod('experience_section_display') == 'Yes') { ?>
               <section id="experience" class="mb-16 scroll-mt-16 md:mb-24 lg:mb-36 lg:scroll-mt-24" aria-label="Work experience">
                  <div class="sticky top-0 z-20 -mx-6 mb-4 w-screen bg-slate-900/75 px-6 py-5 backdrop-blur md:-mx-12 md:px-12 lg:sr-only lg:relative lg:top-auto lg:mx-auto lg:w-full lg:px-0 lg:py-0 lg:opacity-0">
                     <h2 class="text-sm font-bold uppercase tracking-widest text-slate-200 lg:sr-only">Experience</h2>
                  </div>
                  <div>
                     <ol class="group/list">
                        <li class="mb-12">
                           <div class="group relative grid pb-1 transition-all sm:grid-cols-8 sm:gap-8 md:gap-4 lg:hover:!opacity-100 lg:group-hover/list:opacity-50">
                              <div class="absolute -inset-x-4 -inset-y-4 z-0 hidden rounded-md transition motion-reduce:transition-none lg:-inset-x-6 lg:block lg:group-hover:bg-slate-800/50 lg:group-hover:shadow-[inset_0_1px_0_0_rgba(148,163,184,0.1)] lg:group-hover:drop-shadow-lg"></div>
                              <header class="z-10 mb-2 mt-1 text-xs font-semibold uppercase tracking-wide text-slate-500 sm:col-span-2" aria-label="2024 to Present">2024 — Present</header>
                              <div class="z-10 sm:col-span-6">
                                 <h3 class="font-medium leading-snug text-slate-200">
                                    <div>
                                       <a class="inline-flex items-baseline font-medium leading-tight text-slate-200 hover:text-teal-300 focus-visible:text-teal-300  group/link text-base" href="https://www.klaviyo.com" target="_blank" rel="noreferrer noopener" aria-label="Senior Frontend Engineer, Accessibility at Klaviyo (opens in a new tab)">
                                          <span class="absolute -inset-x-4 -inset-y-2.5 hidden rounded md:-inset-x-6 md:-inset-y-4 lg:block"></span>
                                          <span>
                                             Senior Frontend Engineer, Accessibility ·<!-- --> 
                                             <span class="inline-block">
                                                Klaviyo
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="inline-block h-4 w-4 shrink-0 transition-transform group-hover/link:-translate-y-1 group-hover/link:translate-x-1 group-focus-visible/link:-translate-y-1 group-focus-visible/link:translate-x-1 motion-reduce:transition-none ml-1 translate-y-px" aria-hidden="true">
                                                   <path fill-rule="evenodd" d="M5.22 14.78a.75.75 0 001.06 0l7.22-7.22v5.69a.75.75 0 001.5 0v-7.5a.75.75 0 00-.75-.75h-7.5a.75.75 0 000 1.5h5.69l-7.22 7.22a.75.75 0 000 1.06z" clip-rule="evenodd"></path>
                                                </svg>
                                             </span>
                                          </span>
                                       </a>
                                    </div>
                                 </h3>
                                 <p class="mt-2 text-sm leading-normal">Build and maintain critical components used to construct Klaviyo’s frontend, across the whole product. Work closely with cross-functional teams, including developers, designers, and product managers, to implement and advocate for best practices in web accessibility.</p>
                                 <ul class="mt-2 flex flex-wrap" aria-label="Technologies used">
                                    <li class="mr-1.5 mt-2">
                                       <div class="flex items-center rounded-full bg-teal-400/10 px-3 py-1 text-xs font-medium leading-5 text-teal-300 ">JavaScript</div>
                                    </li>
                                    <li class="mr-1.5 mt-2">
                                       <div class="flex items-center rounded-full bg-teal-400/10 px-3 py-1 text-xs font-medium leading-5 text-teal-300 ">TypeScript</div>
                                    </li>
                                    <li class="mr-1.5 mt-2">
                                       <div class="flex items-center rounded-full bg-teal-400/10 px-3 py-1 text-xs font-medium leading-5 text-teal-300 ">React</div>
                                    </li>
                                    <li class="mr-1.5 mt-2">
                                       <div class="flex items-center rounded-full bg-teal-400/10 px-3 py-1 text-xs font-medium leading-5 text-teal-300 ">Storybook</div>
                                    </li>
                                 </ul>
                              </div>
                           </div>
                        </li>
                        <li class="mb-12">
                           <div class="group relative grid pb-1 transition-all sm:grid-cols-8 sm:gap-8 md:gap-4 lg:hover:!opacity-100 lg:group-hover/list:opacity-50">
                              <div class="absolute -inset-x-4 -inset-y-4 z-0 hidden rounded-md transition motion-reduce:transition-none lg:-inset-x-6 lg:block lg:group-hover:bg-slate-800/50 lg:group-hover:shadow-[inset_0_1px_0_0_rgba(148,163,184,0.1)] lg:group-hover:drop-shadow-lg"></div>
                              <header class="z-10 mb-2 mt-1 text-xs font-semibold uppercase tracking-wide text-slate-500 sm:col-span-2" aria-label="2018 to 2024">2018 — 2024</header>
                              <div class="z-10 sm:col-span-6">
                                 <h3 class="font-medium leading-snug text-slate-200">
                                    <div>
                                       <a class="inline-flex items-baseline font-medium leading-tight text-slate-200 hover:text-teal-300 focus-visible:text-teal-300  group/link text-base" href="https://upstatement.com" target="_blank" rel="noreferrer noopener" aria-label="Lead Engineer at Upstatement (opens in a new tab)">
                                          <span class="absolute -inset-x-4 -inset-y-2.5 hidden rounded md:-inset-x-6 md:-inset-y-4 lg:block"></span>
                                          <span>
                                             Lead Engineer ·<!-- --> 
                                             <span class="inline-block">
                                                Upstatement
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="inline-block h-4 w-4 shrink-0 transition-transform group-hover/link:-translate-y-1 group-hover/link:translate-x-1 group-focus-visible/link:-translate-y-1 group-focus-visible/link:translate-x-1 motion-reduce:transition-none ml-1 translate-y-px" aria-hidden="true">
                                                   <path fill-rule="evenodd" d="M5.22 14.78a.75.75 0 001.06 0l7.22-7.22v5.69a.75.75 0 001.5 0v-7.5a.75.75 0 00-.75-.75h-7.5a.75.75 0 000 1.5h5.69l-7.22 7.22a.75.75 0 000 1.06z" clip-rule="evenodd"></path>
                                                </svg>
                                             </span>
                                          </span>
                                       </a>
                                    </div>
                                    <div>
                                       <div class="text-slate-500" aria-hidden="true">Senior Engineer</div>
                                    </div>
                                    <div>
                                       <div class="text-slate-500" aria-hidden="true">Engineer</div>
                                    </div>
                                 </h3>
                                 <p class="mt-2 text-sm leading-normal">Build, style, and ship high-quality websites, design systems, mobile apps, and digital experiences for a diverse array of projects for clients including Harvard Business School, Everytown for Gun Safety, Pratt Institute, Koala Health, Vanderbilt University, The 19th News, and more. Provide leadership within engineering department through close collaboration, knowledge shares, and spearheading the development of internal tools.</p>
                                 <ul class="mt-2 flex flex-wrap" aria-label="Technologies used">
                                    <li class="mr-1.5 mt-2">
                                       <div class="flex items-center rounded-full bg-teal-400/10 px-3 py-1 text-xs font-medium leading-5 text-teal-300 ">JavaScript</div>
                                    </li>
                                    <li class="mr-1.5 mt-2">
                                       <div class="flex items-center rounded-full bg-teal-400/10 px-3 py-1 text-xs font-medium leading-5 text-teal-300 ">TypeScript</div>
                                    </li>
                                    <li class="mr-1.5 mt-2">
                                       <div class="flex items-center rounded-full bg-teal-400/10 px-3 py-1 text-xs font-medium leading-5 text-teal-300 ">HTML &amp; SCSS</div>
                                    </li>
                                    <li class="mr-1.5 mt-2">
                                       <div class="flex items-center rounded-full bg-teal-400/10 px-3 py-1 text-xs font-medium leading-5 text-teal-300 ">React</div>
                                    </li>
                                    <li class="mr-1.5 mt-2">
                                       <div class="flex items-center rounded-full bg-teal-400/10 px-3 py-1 text-xs font-medium leading-5 text-teal-300 ">Next.js</div>
                                    </li>
                                    <li class="mr-1.5 mt-2">
                                       <div class="flex items-center rounded-full bg-teal-400/10 px-3 py-1 text-xs font-medium leading-5 text-teal-300 ">React Native</div>
                                    </li>
                                    <li class="mr-1.5 mt-2">
                                       <div class="flex items-center rounded-full bg-teal-400/10 px-3 py-1 text-xs font-medium leading-5 text-teal-300 ">WordPress</div>
                                    </li>
                                    <li class="mr-1.5 mt-2">
                                       <div class="flex items-center rounded-full bg-teal-400/10 px-3 py-1 text-xs font-medium leading-5 text-teal-300 ">Contentful</div>
                                    </li>
                                    <li class="mr-1.5 mt-2">
                                       <div class="flex items-center rounded-full bg-teal-400/10 px-3 py-1 text-xs font-medium leading-5 text-teal-300 ">Node.js</div>
                                    </li>
                                    <li class="mr-1.5 mt-2">
                                       <div class="flex items-center rounded-full bg-teal-400/10 px-3 py-1 text-xs font-medium leading-5 text-teal-300 ">PHP</div>
                                    </li>
                                 </ul>
                              </div>
                           </div>
                        </li>
                        <li class="mb-12">
                           <div class="group relative grid pb-1 transition-all sm:grid-cols-8 sm:gap-8 md:gap-4 lg:hover:!opacity-100 lg:group-hover/list:opacity-50">
                              <div class="absolute -inset-x-4 -inset-y-4 z-0 hidden rounded-md transition motion-reduce:transition-none lg:-inset-x-6 lg:block lg:group-hover:bg-slate-800/50 lg:group-hover:shadow-[inset_0_1px_0_0_rgba(148,163,184,0.1)] lg:group-hover:drop-shadow-lg"></div>
                              <header class="z-10 mb-2 mt-1 text-xs font-semibold uppercase tracking-wide text-slate-500 sm:col-span-2" aria-label="July to December 2017">July — Dec 2017</header>
                              <div class="z-10 sm:col-span-6">
                                 <h3 class="font-medium leading-snug text-slate-200">
                                    <div>
                                       <a class="inline-flex items-baseline font-medium leading-tight text-slate-200 hover:text-teal-300 focus-visible:text-teal-300  group/link text-base" href="https://www.apple.com/apple-music/" target="_blank" rel="noreferrer noopener" aria-label="UI Engineer Co-op at Apple (opens in a new tab)">
                                          <span class="absolute -inset-x-4 -inset-y-2.5 hidden rounded md:-inset-x-6 md:-inset-y-4 lg:block"></span>
                                          <span>
                                             UI Engineer Co-op ·<!-- --> 
                                             <span class="inline-block">
                                                Apple
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="inline-block h-4 w-4 shrink-0 transition-transform group-hover/link:-translate-y-1 group-hover/link:translate-x-1 group-focus-visible/link:-translate-y-1 group-focus-visible/link:translate-x-1 motion-reduce:transition-none ml-1 translate-y-px" aria-hidden="true">
                                                   <path fill-rule="evenodd" d="M5.22 14.78a.75.75 0 001.06 0l7.22-7.22v5.69a.75.75 0 001.5 0v-7.5a.75.75 0 00-.75-.75h-7.5a.75.75 0 000 1.5h5.69l-7.22 7.22a.75.75 0 000 1.06z" clip-rule="evenodd"></path>
                                                </svg>
                                             </span>
                                          </span>
                                       </a>
                                    </div>
                                 </h3>
                                 <p class="mt-2 text-sm leading-normal">Developed and styled interactive web apps for Apple Music, including the user interface of Apple Music’s embeddable web player widget for in-browser user authorization and full song playback.</p>
                                 <ul class="mt-2 flex flex-wrap" aria-label="Related links">
                                    <li class="mr-4">
                                       <a class="relative mt-2 inline-flex items-center text-sm font-medium text-slate-300 hover:text-teal-300 focus-visible:text-teal-300" href="https://developer.apple.com/documentation/musickitjs" target="_blank" rel="noreferrer noopener" aria-label="MusicKit.js (opens in a new tab)">
                                          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="mr-1 h-3 w-3" aria-hidden="true">
                                             <path d="M12.232 4.232a2.5 2.5 0 013.536 3.536l-1.225 1.224a.75.75 0 001.061 1.06l1.224-1.224a4 4 0 00-5.656-5.656l-3 3a4 4 0 00.225 5.865.75.75 0 00.977-1.138 2.5 2.5 0 01-.142-3.667l3-3z"></path>
                                             <path d="M11.603 7.963a.75.75 0 00-.977 1.138 2.5 2.5 0 01.142 3.667l-3 3a2.5 2.5 0 01-3.536-3.536l1.225-1.224a.75.75 0 00-1.061-1.06l-1.224 1.224a4 4 0 105.656 5.656l3-3a4 4 0 00-.225-5.865z"></path>
                                          </svg>
                                          <span>MusicKit.js</span>
                                       </a>
                                    </li>
                                    <li class="mr-4">
                                       <a class="relative mt-2 inline-flex items-center text-sm font-medium text-slate-300 hover:text-teal-300 focus-visible:text-teal-300" href="https://9to5mac.com/2018/06/03/apple-music-embeddable-web-player-listen-browser/" target="_blank" rel="noreferrer noopener" aria-label="9to5Mac (opens in a new tab)">
                                          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="mr-1 h-3 w-3" aria-hidden="true">
                                             <path d="M12.232 4.232a2.5 2.5 0 013.536 3.536l-1.225 1.224a.75.75 0 001.061 1.06l1.224-1.224a4 4 0 00-5.656-5.656l-3 3a4 4 0 00.225 5.865.75.75 0 00.977-1.138 2.5 2.5 0 01-.142-3.667l3-3z"></path>
                                             <path d="M11.603 7.963a.75.75 0 00-.977 1.138 2.5 2.5 0 01.142 3.667l-3 3a2.5 2.5 0 01-3.536-3.536l1.225-1.224a.75.75 0 00-1.061-1.06l-1.224 1.224a4 4 0 105.656 5.656l3-3a4 4 0 00-.225-5.865z"></path>
                                          </svg>
                                          <span>9to5Mac</span>
                                       </a>
                                    </li>
                                    <li class="mr-4">
                                       <a class="relative mt-2 inline-flex items-center text-sm font-medium text-slate-300 hover:text-teal-300 focus-visible:text-teal-300" href="https://www.theverge.com/2017/10/5/16433770/facebook-messenger-apple-music-bot-song-streaming" target="_blank" rel="noreferrer noopener" aria-label="The Verge (opens in a new tab)">
                                          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="mr-1 h-3 w-3" aria-hidden="true">
                                             <path d="M12.232 4.232a2.5 2.5 0 013.536 3.536l-1.225 1.224a.75.75 0 001.061 1.06l1.224-1.224a4 4 0 00-5.656-5.656l-3 3a4 4 0 00.225 5.865.75.75 0 00.977-1.138 2.5 2.5 0 01-.142-3.667l3-3z"></path>
                                             <path d="M11.603 7.963a.75.75 0 00-.977 1.138 2.5 2.5 0 01.142 3.667l-3 3a2.5 2.5 0 01-3.536-3.536l1.225-1.224a.75.75 0 00-1.061-1.06l-1.224 1.224a4 4 0 105.656 5.656l3-3a4 4 0 00-.225-5.865z"></path>
                                          </svg>
                                          <span>The Verge</span>
                                       </a>
                                    </li>
                                 </ul>
                                 <ul class="mt-2 flex flex-wrap" aria-label="Technologies used">
                                    <li class="mr-1.5 mt-2">
                                       <div class="flex items-center rounded-full bg-teal-400/10 px-3 py-1 text-xs font-medium leading-5 text-teal-300 ">Ember</div>
                                    </li>
                                    <li class="mr-1.5 mt-2">
                                       <div class="flex items-center rounded-full bg-teal-400/10 px-3 py-1 text-xs font-medium leading-5 text-teal-300 ">SCSS</div>
                                    </li>
                                    <li class="mr-1.5 mt-2">
                                       <div class="flex items-center rounded-full bg-teal-400/10 px-3 py-1 text-xs font-medium leading-5 text-teal-300 ">JavaScript</div>
                                    </li>
                                    <li class="mr-1.5 mt-2">
                                       <div class="flex items-center rounded-full bg-teal-400/10 px-3 py-1 text-xs font-medium leading-5 text-teal-300 ">MusicKit.js</div>
                                    </li>
                                 </ul>
                              </div>
                           </div>
                        </li>
                        <li class="mb-12">
                           <div class="group relative grid pb-1 transition-all sm:grid-cols-8 sm:gap-8 md:gap-4 lg:hover:!opacity-100 lg:group-hover/list:opacity-50">
                              <div class="absolute -inset-x-4 -inset-y-4 z-0 hidden rounded-md transition motion-reduce:transition-none lg:-inset-x-6 lg:block lg:group-hover:bg-slate-800/50 lg:group-hover:shadow-[inset_0_1px_0_0_rgba(148,163,184,0.1)] lg:group-hover:drop-shadow-lg"></div>
                              <header class="z-10 mb-2 mt-1 text-xs font-semibold uppercase tracking-wide text-slate-500 sm:col-span-2" aria-label="2016 to 2017">2016 — 2017</header>
                              <div class="z-10 sm:col-span-6">
                                 <h3 class="font-medium leading-snug text-slate-200">
                                    <div>
                                       <a class="inline-flex items-baseline font-medium leading-tight text-slate-200 hover:text-teal-300 focus-visible:text-teal-300  group/link text-base" href="https://scout.camd.northeastern.edu/" target="_blank" rel="noreferrer noopener" aria-label="Developer at Scout Studio (opens in a new tab)">
                                          <span class="absolute -inset-x-4 -inset-y-2.5 hidden rounded md:-inset-x-6 md:-inset-y-4 lg:block"></span>
                                          <span>
                                             Developer · Scout<!-- --> 
                                             <span class="inline-block">
                                                Studio
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="inline-block h-4 w-4 shrink-0 transition-transform group-hover/link:-translate-y-1 group-hover/link:translate-x-1 group-focus-visible/link:-translate-y-1 group-focus-visible/link:translate-x-1 motion-reduce:transition-none ml-1 translate-y-px" aria-hidden="true">
                                                   <path fill-rule="evenodd" d="M5.22 14.78a.75.75 0 001.06 0l7.22-7.22v5.69a.75.75 0 001.5 0v-7.5a.75.75 0 00-.75-.75h-7.5a.75.75 0 000 1.5h5.69l-7.22 7.22a.75.75 0 000 1.06z" clip-rule="evenodd"></path>
                                                </svg>
                                             </span>
                                          </span>
                                       </a>
                                    </div>
                                 </h3>
                                 <p class="mt-2 text-sm leading-normal">Collaborated with other student designers and engineers on pro-bono projects to create new brands, design systems, and websites for organizations in the community.</p>
                                 <ul class="mt-2 flex flex-wrap" aria-label="Technologies used">
                                    <li class="mr-1.5 mt-2">
                                       <div class="flex items-center rounded-full bg-teal-400/10 px-3 py-1 text-xs font-medium leading-5 text-teal-300 ">Jekyll</div>
                                    </li>
                                    <li class="mr-1.5 mt-2">
                                       <div class="flex items-center rounded-full bg-teal-400/10 px-3 py-1 text-xs font-medium leading-5 text-teal-300 ">SCSS</div>
                                    </li>
                                    <li class="mr-1.5 mt-2">
                                       <div class="flex items-center rounded-full bg-teal-400/10 px-3 py-1 text-xs font-medium leading-5 text-teal-300 ">JavaScript</div>
                                    </li>
                                    <li class="mr-1.5 mt-2">
                                       <div class="flex items-center rounded-full bg-teal-400/10 px-3 py-1 text-xs font-medium leading-5 text-teal-300 ">WordPress</div>
                                    </li>
                                 </ul>
                              </div>
                           </div>
                        </li>
                        <li class="mb-12">
                           <div class="group relative grid pb-1 transition-all sm:grid-cols-8 sm:gap-8 md:gap-4 lg:hover:!opacity-100 lg:group-hover/list:opacity-50">
                              <div class="absolute -inset-x-4 -inset-y-4 z-0 hidden rounded-md transition motion-reduce:transition-none lg:-inset-x-6 lg:block lg:group-hover:bg-slate-800/50 lg:group-hover:shadow-[inset_0_1px_0_0_rgba(148,163,184,0.1)] lg:group-hover:drop-shadow-lg"></div>
                              <header class="z-10 mb-2 mt-1 text-xs font-semibold uppercase tracking-wide text-slate-500 sm:col-span-2" aria-label="July to December 2016">July — Dec 2016</header>
                              <div class="z-10 sm:col-span-6">
                                 <h3 class="font-medium leading-snug text-slate-200">
                                    <div>
                                       <a class="inline-flex items-baseline font-medium leading-tight text-slate-200 hover:text-teal-300 focus-visible:text-teal-300  group/link text-base" href="https://starry.com/" target="_blank" rel="noreferrer noopener" aria-label="Software Engineer Co-op at Starry (opens in a new tab)">
                                          <span class="absolute -inset-x-4 -inset-y-2.5 hidden rounded md:-inset-x-6 md:-inset-y-4 lg:block"></span>
                                          <span>
                                             Software Engineer Co-op ·<!-- --> 
                                             <span class="inline-block">
                                                Starry
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="inline-block h-4 w-4 shrink-0 transition-transform group-hover/link:-translate-y-1 group-hover/link:translate-x-1 group-focus-visible/link:-translate-y-1 group-focus-visible/link:translate-x-1 motion-reduce:transition-none ml-1 translate-y-px" aria-hidden="true">
                                                   <path fill-rule="evenodd" d="M5.22 14.78a.75.75 0 001.06 0l7.22-7.22v5.69a.75.75 0 001.5 0v-7.5a.75.75 0 00-.75-.75h-7.5a.75.75 0 000 1.5h5.69l-7.22 7.22a.75.75 0 000 1.06z" clip-rule="evenodd"></path>
                                                </svg>
                                             </span>
                                          </span>
                                       </a>
                                    </div>
                                 </h3>
                                 <p class="mt-2 text-sm leading-normal">Worked with the UI team to engineer and improve major features of Starry’s customer-facing Android app.</p>
                                 <ul class="mt-2 flex flex-wrap" aria-label="Related links">
                                    <li class="mr-4">
                                       <a class="relative mt-2 inline-flex items-center text-sm font-medium text-slate-300 hover:text-teal-300 focus-visible:text-teal-300" href="https://play.google.com/store/apps/details?id=com.starry.management&amp;hl=en_US&amp;gl=US" target="_blank" rel="noreferrer noopener" aria-label="Android App (opens in a new tab)">
                                          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="mr-1 h-3 w-3" aria-hidden="true">
                                             <path d="M12.232 4.232a2.5 2.5 0 013.536 3.536l-1.225 1.224a.75.75 0 001.061 1.06l1.224-1.224a4 4 0 00-5.656-5.656l-3 3a4 4 0 00.225 5.865.75.75 0 00.977-1.138 2.5 2.5 0 01-.142-3.667l3-3z"></path>
                                             <path d="M11.603 7.963a.75.75 0 00-.977 1.138 2.5 2.5 0 01.142 3.667l-3 3a2.5 2.5 0 01-3.536-3.536l1.225-1.224a.75.75 0 00-1.061-1.06l-1.224 1.224a4 4 0 105.656 5.656l3-3a4 4 0 00-.225-5.865z"></path>
                                          </svg>
                                          <span>Android App</span>
                                       </a>
                                    </li>
                                    <li class="mr-4">
                                       <a class="relative mt-2 inline-flex items-center text-sm font-medium text-slate-300 hover:text-teal-300 focus-visible:text-teal-300" href="https://starry.com/blog/product/whats-new-screentime-just-got-better-for-parents" target="_blank" rel="noreferrer noopener" aria-label="ScreenTime 2.0 (opens in a new tab)">
                                          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="mr-1 h-3 w-3" aria-hidden="true">
                                             <path d="M12.232 4.232a2.5 2.5 0 013.536 3.536l-1.225 1.224a.75.75 0 001.061 1.06l1.224-1.224a4 4 0 00-5.656-5.656l-3 3a4 4 0 00.225 5.865.75.75 0 00.977-1.138 2.5 2.5 0 01-.142-3.667l3-3z"></path>
                                             <path d="M11.603 7.963a.75.75 0 00-.977 1.138 2.5 2.5 0 01.142 3.667l-3 3a2.5 2.5 0 01-3.536-3.536l1.225-1.224a.75.75 0 00-1.061-1.06l-1.224 1.224a4 4 0 105.656 5.656l3-3a4 4 0 00-.225-5.865z"></path>
                                          </svg>
                                          <span>ScreenTime 2.0</span>
                                       </a>
                                    </li>
                                 </ul>
                                 <ul class="mt-2 flex flex-wrap" aria-label="Technologies used">
                                    <li class="mr-1.5 mt-2">
                                       <div class="flex items-center rounded-full bg-teal-400/10 px-3 py-1 text-xs font-medium leading-5 text-teal-300 ">Cordova</div>
                                    </li>
                                    <li class="mr-1.5 mt-2">
                                       <div class="flex items-center rounded-full bg-teal-400/10 px-3 py-1 text-xs font-medium leading-5 text-teal-300 ">Backbone</div>
                                    </li>
                                    <li class="mr-1.5 mt-2">
                                       <div class="flex items-center rounded-full bg-teal-400/10 px-3 py-1 text-xs font-medium leading-5 text-teal-300 ">JavaScript</div>
                                    </li>
                                    <li class="mr-1.5 mt-2">
                                       <div class="flex items-center rounded-full bg-teal-400/10 px-3 py-1 text-xs font-medium leading-5 text-teal-300 ">CSS</div>
                                    </li>
                                 </ul>
                              </div>
                           </div>
                        </li>
                        <li class="mb-12">
                           <div class="group relative grid pb-1 transition-all sm:grid-cols-8 sm:gap-8 md:gap-4 lg:hover:!opacity-100 lg:group-hover/list:opacity-50">
                              <div class="absolute -inset-x-4 -inset-y-4 z-0 hidden rounded-md transition motion-reduce:transition-none lg:-inset-x-6 lg:block lg:group-hover:bg-slate-800/50 lg:group-hover:shadow-[inset_0_1px_0_0_rgba(148,163,184,0.1)] lg:group-hover:drop-shadow-lg"></div>
                              <header class="z-10 mb-2 mt-1 text-xs font-semibold uppercase tracking-wide text-slate-500 sm:col-span-2" aria-label="July to December 2015">July — Dec 2015</header>
                              <div class="z-10 sm:col-span-6">
                                 <h3 class="font-medium leading-snug text-slate-200">
                                    <div>
                                       <a class="inline-flex items-baseline font-medium leading-tight text-slate-200 hover:text-teal-300 focus-visible:text-teal-300  group/link text-base" href="https://us.mullenlowe.com/" target="_blank" rel="noreferrer noopener" aria-label="Creative Technologist Co-op at MullenLowe U.S. (opens in a new tab)">
                                          <span class="absolute -inset-x-4 -inset-y-2.5 hidden rounded md:-inset-x-6 md:-inset-y-4 lg:block"></span>
                                          <span>
                                             Creative Technologist Co-op · MullenLowe<!-- --> 
                                             <span class="inline-block">
                                                U.S.
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="inline-block h-4 w-4 shrink-0 transition-transform group-hover/link:-translate-y-1 group-hover/link:translate-x-1 group-focus-visible/link:-translate-y-1 group-focus-visible/link:translate-x-1 motion-reduce:transition-none ml-1 translate-y-px" aria-hidden="true">
                                                   <path fill-rule="evenodd" d="M5.22 14.78a.75.75 0 001.06 0l7.22-7.22v5.69a.75.75 0 001.5 0v-7.5a.75.75 0 00-.75-.75h-7.5a.75.75 0 000 1.5h5.69l-7.22 7.22a.75.75 0 000 1.06z" clip-rule="evenodd"></path>
                                                </svg>
                                             </span>
                                          </span>
                                       </a>
                                    </div>
                                 </h3>
                                 <p class="mt-2 text-sm leading-normal">Developed, maintained, and shipped production code for client websites. Clients included JetBlue, Lovesac, U.S. Cellular, U.S. Department of Defense, and more.</p>
                                 <ul class="mt-2 flex flex-wrap" aria-label="Technologies used">
                                    <li class="mr-1.5 mt-2">
                                       <div class="flex items-center rounded-full bg-teal-400/10 px-3 py-1 text-xs font-medium leading-5 text-teal-300 ">HTML</div>
                                    </li>
                                    <li class="mr-1.5 mt-2">
                                       <div class="flex items-center rounded-full bg-teal-400/10 px-3 py-1 text-xs font-medium leading-5 text-teal-300 ">CSS</div>
                                    </li>
                                    <li class="mr-1.5 mt-2">
                                       <div class="flex items-center rounded-full bg-teal-400/10 px-3 py-1 text-xs font-medium leading-5 text-teal-300 ">JavaScript</div>
                                    </li>
                                    <li class="mr-1.5 mt-2">
                                       <div class="flex items-center rounded-full bg-teal-400/10 px-3 py-1 text-xs font-medium leading-5 text-teal-300 ">jQuery</div>
                                    </li>
                                 </ul>
                              </div>
                           </div>
                        </li>
                     </ol>
                     <div class="mt-12">
                        <a class="inline-flex items-baseline font-medium leading-tight text-slate-200 hover:text-teal-300 focus-visible:text-teal-300 font-semibold text-slate-200 group/link text-base" href="/resume.pdf" target="_blank" rel="noreferrer noopener" aria-label="View Full Résumé (opens in a new tab)">
                           <span>
                              View Full<!-- --> 
                              <span class="inline-block">
                                 Résumé
                                 <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="inline-block h-4 w-4 shrink-0 transition-transform group-hover/link:-translate-y-1 group-hover/link:translate-x-1 group-focus-visible/link:-translate-y-1 group-focus-visible/link:translate-x-1 motion-reduce:transition-none ml-1 translate-y-px" aria-hidden="true">
                                    <path fill-rule="evenodd" d="M5.22 14.78a.75.75 0 001.06 0l7.22-7.22v5.69a.75.75 0 001.5 0v-7.5a.75.75 0 00-.75-.75h-7.5a.75.75 0 000 1.5h5.69l-7.22 7.22a.75.75 0 000 1.06z" clip-rule="evenodd"></path>
                                 </svg>
                              </span>
                           </span>
                        </a>
                     </div>
                  </div>
               </section>
               <?php } ?>
               <?php if (get_theme_mod('project_section_display') == 'Yes') { ?>
               <section id="projects" class="mb-16 scroll-mt-16 md:mb-24 lg:mb-36 lg:scroll-mt-24" aria-label="Selected projects">
                  <div class="sticky top-0 z-20 -mx-6 mb-4 w-screen bg-slate-900/75 px-6 py-5 backdrop-blur md:-mx-12 md:px-12 lg:sr-only lg:relative lg:top-auto lg:mx-auto lg:w-full lg:px-0 lg:py-0 lg:opacity-0">
                     <h2 class="text-sm font-bold uppercase tracking-widest text-slate-200 lg:sr-only">Projects</h2>
                  </div>
                  <div>
                     <ul class="group/list">
                        <li class="mb-12">
                           <div class="group relative grid gap-4 pb-1 transition-all sm:grid-cols-8 sm:gap-8 md:gap-4 lg:hover:!opacity-100 lg:group-hover/list:opacity-50">
                              <div class="absolute -inset-x-4 -inset-y-4 z-0 hidden rounded-md transition motion-reduce:transition-none lg:-inset-x-6 lg:block lg:group-hover:bg-slate-800/50 lg:group-hover:shadow-[inset_0_1px_0_0_rgba(148,163,184,0.1)] lg:group-hover:drop-shadow-lg"></div>
                              <div class="z-10 sm:order-2 sm:col-span-6">
                                 <h3>
                                    <a class="inline-flex items-baseline font-medium leading-tight text-slate-200 hover:text-teal-300 focus-visible:text-teal-300  group/link text-base" href="https://www.newline.co/courses/build-a-spotify-connected-app" target="_blank" rel="noreferrer noopener" aria-label="Build a Spotify Connected App (opens in a new tab)">
                                       <span class="absolute -inset-x-4 -inset-y-2.5 hidden rounded md:-inset-x-6 md:-inset-y-4 lg:block"></span>
                                       <span>
                                          Build a Spotify Connected<!-- --> 
                                          <span class="inline-block">
                                             App
                                             <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="inline-block h-4 w-4 shrink-0 transition-transform group-hover/link:-translate-y-1 group-hover/link:translate-x-1 group-focus-visible/link:-translate-y-1 group-focus-visible/link:translate-x-1 motion-reduce:transition-none ml-1 translate-y-px" aria-hidden="true">
                                                <path fill-rule="evenodd" d="M5.22 14.78a.75.75 0 001.06 0l7.22-7.22v5.69a.75.75 0 001.5 0v-7.5a.75.75 0 00-.75-.75h-7.5a.75.75 0 000 1.5h5.69l-7.22 7.22a.75.75 0 000 1.06z" clip-rule="evenodd"></path>
                                             </svg>
                                          </span>
                                       </span>
                                    </a>
                                 </h3>
                                 <p class="mt-2 text-sm leading-normal">Video course that teaches how to build a web app with the Spotify Web API. Topics covered include the principles of REST APIs, user auth flows, Node, Express, React, Styled Components, and more.</p>
                              </div>
                              <img alt="Build a Spotify Connected App Newline course marketing card" loading="lazy" width="200" height="48" decoding="async" data-nimg="1" class="aspect-video object-cover rounded border-2 border-slate-200/10 transition group-hover:border-slate-200/30 sm:order-1 sm:col-span-2 sm:translate-y-1" style="color:transparent" srcset="/_next/image?url=%2Fimages%2Fprojects%2Fcourse-card.png&amp;w=256&amp;q=75 1x, /_next/image?url=%2Fimages%2Fprojects%2Fcourse-card.png&amp;w=640&amp;q=75 2x" src="/_next/image?url=%2Fimages%2Fprojects%2Fcourse-card.png&amp;w=640&amp;q=75">
                           </div>
                        </li>
                        <li class="mb-12">
                           <div class="group relative grid gap-4 pb-1 transition-all sm:grid-cols-8 sm:gap-8 md:gap-4 lg:hover:!opacity-100 lg:group-hover/list:opacity-50">
                              <div class="absolute -inset-x-4 -inset-y-4 z-0 hidden rounded-md transition motion-reduce:transition-none lg:-inset-x-6 lg:block lg:group-hover:bg-slate-800/50 lg:group-hover:shadow-[inset_0_1px_0_0_rgba(148,163,184,0.1)] lg:group-hover:drop-shadow-lg"></div>
                              <div class="z-10 sm:order-2 sm:col-span-6">
                                 <h3>
                                    <a class="inline-flex items-baseline font-medium leading-tight text-slate-200 hover:text-teal-300 focus-visible:text-teal-300  group/link text-base" href="https://spotify-profile.herokuapp.com/" target="_blank" rel="noreferrer noopener" aria-label="Spotify Profile (opens in a new tab)">
                                       <span class="absolute -inset-x-4 -inset-y-2.5 hidden rounded md:-inset-x-6 md:-inset-y-4 lg:block"></span>
                                       <span>
                                          Spotify<!-- --> 
                                          <span class="inline-block">
                                             Profile
                                             <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="inline-block h-4 w-4 shrink-0 transition-transform group-hover/link:-translate-y-1 group-hover/link:translate-x-1 group-focus-visible/link:-translate-y-1 group-focus-visible/link:translate-x-1 motion-reduce:transition-none ml-1 translate-y-px" aria-hidden="true">
                                                <path fill-rule="evenodd" d="M5.22 14.78a.75.75 0 001.06 0l7.22-7.22v5.69a.75.75 0 001.5 0v-7.5a.75.75 0 00-.75-.75h-7.5a.75.75 0 000 1.5h5.69l-7.22 7.22a.75.75 0 000 1.06z" clip-rule="evenodd"></path>
                                             </svg>
                                          </span>
                                       </span>
                                    </a>
                                 </h3>
                                 <p class="mt-2 text-sm leading-normal">Web app for visualizing personalized Spotify data. View your top artists, top tracks, recently played tracks, and detailed audio information about each track. Create and save new playlists of recommended tracks based on your existing playlists and more.</p>
                                 <a class="relative mt-2 inline-flex items-center text-sm font-medium text-slate-300 hover:text-teal-300 focus-visible:text-teal-300" href="https://github.com/bchiang7/spotify-profile" target="_blank" rel="noreferrer noopener" aria-label="677 stars on GitHub (opens in a new tab)">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="mr-1 h-3 w-3" aria-hidden="true">
                                       <path fill-rule="evenodd" d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z" clip-rule="evenodd"></path>
                                    </svg>
                                    <span>677</span>
                                 </a>
                                 <ul class="mt-2 flex flex-wrap" aria-label="Technologies used:">
                                    <li class="mr-1.5 mt-2">
                                       <div class="flex items-center rounded-full bg-teal-400/10 px-3 py-1 text-xs font-medium leading-5 text-teal-300 ">React</div>
                                    </li>
                                    <li class="mr-1.5 mt-2">
                                       <div class="flex items-center rounded-full bg-teal-400/10 px-3 py-1 text-xs font-medium leading-5 text-teal-300 ">Express</div>
                                    </li>
                                    <li class="mr-1.5 mt-2">
                                       <div class="flex items-center rounded-full bg-teal-400/10 px-3 py-1 text-xs font-medium leading-5 text-teal-300 ">Spotify API</div>
                                    </li>
                                    <li class="mr-1.5 mt-2">
                                       <div class="flex items-center rounded-full bg-teal-400/10 px-3 py-1 text-xs font-medium leading-5 text-teal-300 ">Heroku</div>
                                    </li>
                                 </ul>
                              </div>
                              <img alt="Spotify Profile app homepage" loading="lazy" width="200" height="48" decoding="async" data-nimg="1" class="aspect-video object-cover rounded border-2 border-slate-200/10 transition group-hover:border-slate-200/30 sm:order-1 sm:col-span-2 sm:translate-y-1" style="color:transparent" srcset="/_next/image?url=%2Fimages%2Fprojects%2Fspotify-profile.png&amp;w=256&amp;q=75 1x, /_next/image?url=%2Fimages%2Fprojects%2Fspotify-profile.png&amp;w=640&amp;q=75 2x" src="/_next/image?url=%2Fimages%2Fprojects%2Fspotify-profile.png&amp;w=640&amp;q=75">
                           </div>
                        </li>
                        <li class="mb-12">
                           <div class="group relative grid gap-4 pb-1 transition-all sm:grid-cols-8 sm:gap-8 md:gap-4 lg:hover:!opacity-100 lg:group-hover/list:opacity-50">
                              <div class="absolute -inset-x-4 -inset-y-4 z-0 hidden rounded-md transition motion-reduce:transition-none lg:-inset-x-6 lg:block lg:group-hover:bg-slate-800/50 lg:group-hover:shadow-[inset_0_1px_0_0_rgba(148,163,184,0.1)] lg:group-hover:drop-shadow-lg"></div>
                              <div class="z-10 sm:order-2 sm:col-span-6">
                                 <h3>
                                    <a class="inline-flex items-baseline font-medium leading-tight text-slate-200 hover:text-teal-300 focus-visible:text-teal-300  group/link text-base" href="https://halcyon-theme.netlify.app/" target="_blank" rel="noreferrer noopener" aria-label="Halcyon Theme (opens in a new tab)">
                                       <span class="absolute -inset-x-4 -inset-y-2.5 hidden rounded md:-inset-x-6 md:-inset-y-4 lg:block"></span>
                                       <span>
                                          Halcyon<!-- --> 
                                          <span class="inline-block">
                                             Theme
                                             <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="inline-block h-4 w-4 shrink-0 transition-transform group-hover/link:-translate-y-1 group-hover/link:translate-x-1 group-focus-visible/link:-translate-y-1 group-focus-visible/link:translate-x-1 motion-reduce:transition-none ml-1 translate-y-px" aria-hidden="true">
                                                <path fill-rule="evenodd" d="M5.22 14.78a.75.75 0 001.06 0l7.22-7.22v5.69a.75.75 0 001.5 0v-7.5a.75.75 0 00-.75-.75h-7.5a.75.75 0 000 1.5h5.69l-7.22 7.22a.75.75 0 000 1.06z" clip-rule="evenodd"></path>
                                             </svg>
                                          </span>
                                       </span>
                                    </a>
                                 </h3>
                                 <p class="mt-2 text-sm leading-normal">Minimal dark blue theme for VS Code, Sublime Text, Atom, iTerm, and more.</p>
                                 <a class="relative mt-2 inline-flex items-center text-sm font-medium text-slate-300 hover:text-teal-300 focus-visible:text-teal-300" href="https://marketplace.visualstudio.com/items?itemName=brittanychiang.halcyon-vscode" target="_blank" rel="noreferrer noopener" aria-label="Over 100,000 installs on Visual Studio Code Marketplace (opens in a new tab)">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="mr-1 h-4 w-4" aria-hidden="true">
                                       <path d="M10.75 2.75a.75.75 0 00-1.5 0v8.614L6.295 8.235a.75.75 0 10-1.09 1.03l4.25 4.5a.75.75 0 001.09 0l4.25-4.5a.75.75 0 00-1.09-1.03l-2.955 3.129V2.75z"></path>
                                       <path d="M3.5 12.75a.75.75 0 00-1.5 0v2.5A2.75 2.75 0 004.75 18h10.5A2.75 2.75 0 0018 15.25v-2.5a.75.75 0 00-1.5 0v2.5c0 .69-.56 1.25-1.25 1.25H4.75c-.69 0-1.25-.56-1.25-1.25v-2.5z"></path>
                                    </svg>
                                    <span>100k+ Installs</span>
                                 </a>
                              </div>
                              <img alt="Halcyon Theme homepage hero with screenshot of VS Code editor" loading="lazy" width="200" height="48" decoding="async" data-nimg="1" class="aspect-video object-cover rounded border-2 border-slate-200/10 transition group-hover:border-slate-200/30 sm:order-1 sm:col-span-2 sm:translate-y-1" style="color:transparent" srcset="/_next/image?url=%2Fimages%2Fprojects%2Fhalcyon.png&amp;w=256&amp;q=75 1x, /_next/image?url=%2Fimages%2Fprojects%2Fhalcyon.png&amp;w=640&amp;q=75 2x" src="/_next/image?url=%2Fimages%2Fprojects%2Fhalcyon.png&amp;w=640&amp;q=75">
                           </div>
                        </li>
                        <li class="mb-12">
                           <div class="group relative grid gap-4 pb-1 transition-all sm:grid-cols-8 sm:gap-8 md:gap-4 lg:hover:!opacity-100 lg:group-hover/list:opacity-50">
                              <div class="absolute -inset-x-4 -inset-y-4 z-0 hidden rounded-md transition motion-reduce:transition-none lg:-inset-x-6 lg:block lg:group-hover:bg-slate-800/50 lg:group-hover:shadow-[inset_0_1px_0_0_rgba(148,163,184,0.1)] lg:group-hover:drop-shadow-lg"></div>
                              <div class="z-10 sm:order-2 sm:col-span-6">
                                 <h3>
                                    <a class="inline-flex items-baseline font-medium leading-tight text-slate-200 hover:text-teal-300 focus-visible:text-teal-300  group/link text-base" href="https://v4.brittanychiang.com/" target="_blank" rel="noreferrer noopener" aria-label="brittanychiang.com (v4) (opens in a new tab)">
                                       <span class="absolute -inset-x-4 -inset-y-2.5 hidden rounded md:-inset-x-6 md:-inset-y-4 lg:block"></span>
                                       <span>
                                          brittanychiang.com<!-- --> 
                                          <span class="inline-block">
                                             (v4)
                                             <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="inline-block h-4 w-4 shrink-0 transition-transform group-hover/link:-translate-y-1 group-hover/link:translate-x-1 group-focus-visible/link:-translate-y-1 group-focus-visible/link:translate-x-1 motion-reduce:transition-none ml-1 translate-y-px" aria-hidden="true">
                                                <path fill-rule="evenodd" d="M5.22 14.78a.75.75 0 001.06 0l7.22-7.22v5.69a.75.75 0 001.5 0v-7.5a.75.75 0 00-.75-.75h-7.5a.75.75 0 000 1.5h5.69l-7.22 7.22a.75.75 0 000 1.06z" clip-rule="evenodd"></path>
                                             </svg>
                                          </span>
                                       </span>
                                    </a>
                                 </h3>
                                 <p class="mt-2 text-sm leading-normal">An old portfolio site built with Gatsby with 6k+ stars and 3k+ forks</p>
                                 <a class="relative mt-2 inline-flex items-center text-sm font-medium text-slate-300 hover:text-teal-300 focus-visible:text-teal-300" href="https://github.com/bchiang7/v4" target="_blank" rel="noreferrer noopener" aria-label="7765 stars on GitHub (opens in a new tab)">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="mr-1 h-3 w-3" aria-hidden="true">
                                       <path fill-rule="evenodd" d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z" clip-rule="evenodd"></path>
                                    </svg>
                                    <span>7,765</span>
                                 </a>
                                 <ul class="mt-2 flex flex-wrap" aria-label="Technologies used:">
                                    <li class="mr-1.5 mt-2">
                                       <div class="flex items-center rounded-full bg-teal-400/10 px-3 py-1 text-xs font-medium leading-5 text-teal-300 ">Gatsby</div>
                                    </li>
                                    <li class="mr-1.5 mt-2">
                                       <div class="flex items-center rounded-full bg-teal-400/10 px-3 py-1 text-xs font-medium leading-5 text-teal-300 ">Styled Components</div>
                                    </li>
                                    <li class="mr-1.5 mt-2">
                                       <div class="flex items-center rounded-full bg-teal-400/10 px-3 py-1 text-xs font-medium leading-5 text-teal-300 ">Netlify</div>
                                    </li>
                                 </ul>
                              </div>
                              <img alt="brittanychiang.com version 4 hero section" loading="lazy" width="200" height="48" decoding="async" data-nimg="1" class="aspect-video object-cover rounded border-2 border-slate-200/10 transition group-hover:border-slate-200/30 sm:order-1 sm:col-span-2 sm:translate-y-1" style="color:transparent" srcset="/_next/image?url=%2Fimages%2Fprojects%2Fv4.png&amp;w=256&amp;q=75 1x, /_next/image?url=%2Fimages%2Fprojects%2Fv4.png&amp;w=640&amp;q=75 2x" src="/_next/image?url=%2Fimages%2Fprojects%2Fv4.png&amp;w=640&amp;q=75">
                           </div>
                        </li>
                     </ul>
                     <div class="mt-12">
                        <a class="inline-flex items-center font-medium leading-tight text-slate-200 font-semibold text-slate-200 group" aria-label="View Full Project Archive" href="/archive">
                           <span>
                              <span class="border-b border-transparent pb-px transition group-hover:border-teal-300 motion-reduce:transition-none">
                                 View Full Project<!-- --> 
                              </span>
                              <span class="whitespace-nowrap">
                                 <span class="border-b border-transparent pb-px transition group-hover:border-teal-300 motion-reduce:transition-none">Archive</span>
                                 <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="ml-1 inline-block h-4 w-4 shrink-0 -translate-y-px transition-transform group-hover:translate-x-2 group-focus-visible:translate-x-2 motion-reduce:transition-none" aria-hidden="true">
                                    <path fill-rule="evenodd" d="M3 10a.75.75 0 01.75-.75h10.638L10.23 5.29a.75.75 0 111.04-1.08l5.5 5.25a.75.75 0 010 1.08l-5.5 5.25a.75.75 0 11-1.04-1.08l4.158-3.96H3.75A.75.75 0 013 10z" clip-rule="evenodd"></path>
                                 </svg>
                              </span>
                           </span>
                        </a>
                     </div>
                  </div>
               </section>
               <?php } ?>

            </main>
            <div class="absolute bottom-0 right-0"><button class="hover:-text-teal-300 inline-flex items-center px-2 py-4 font-medium text-slate-400 hover:-translate-y-2 focus-visible:text-teal-300" type="button" aria-haspopup="dialog" aria-expanded="false" aria-controls="radix-:R4l6:" data-state="closed"><span class="sr-only">Click to time travel</span><img alt="Spinning Tardis from Doctor Who" loading="lazy" width="100" height="86" decoding="async" data-nimg="1" style="color:transparent" srcset="/_next/image?url=%2Fimages%2Ftardis%2Frotate.gif&amp;w=128&amp;q=75 1x, /_next/image?url=%2Fimages%2Ftardis%2Frotate.gif&amp;w=256&amp;q=75 2x" src="/_next/image?url=%2Fimages%2Ftardis%2Frotate.gif&amp;w=256&amp;q=75"></button></div>
         </div>
      </div>
   </div>
</div>
<?php get_footer(); ?>