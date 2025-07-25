<!doctype html>
<html lang="en" dir="ltr" data-bs-theme="auto">
<head>

    <!-- Include JavaScript for color modes -->
    <script src="./assets/js/color-modes.js"></script>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Update the 'content' attribute to reflect the actual content description -->
    <meta name="description" content="your_description_goes_here">

    <!-- Modify the 'content' attribute to include appropriate keywords -->
    <meta name="keywords" content="your_keywords_goes_here">

    <meta name="author" content="tigmatemplate">
    <meta name="generator" content="Bootstrap">

    <!-- Change the text within the <title> tag to match the webpage's content -->
    <title> your_title_goes_here </title>

    <!-- 
        Set the website's favicon and Apple touch icon using the files in the assets/logo folder. You can change these files to your own icons by replacing them with the same names and sizes.

        Be careful if you change the site.webmanifest file, as you need to update the src attribute of the icons array to match the new path of your icon files. Otherwise, your icons may not display correctly on some devices. 
    -->
	<link rel="apple-touch-icon" sizes="180x180" href="./assets/logo/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="./assets/logo/logo.png">
	<link rel="icon" type="image/png" sizes="16x16" href="./assets/logo/logo.png">
	<link rel="icon" type="image/x-icon" href="./assets/logo/logo.png">
	<link rel="manifest" href="./assets/logo/site.webmanifest">
    <!-- Stylesheets -->
    <link rel="stylesheet" href="./assets/libraries/glide/css/glide.core.min.css">
    <link rel="stylesheet" href="./assets/libraries/aos/aos.css">
    <link rel="stylesheet" href="./assets/css/main.min.css">
    <link rel="stylesheet" href="./assets/css/style.css">

    <!-- Open Graph Meta Tags for Social Sharing -->
    <!-- Update the 'title' and 'description' content below to enhance social sharing -->
    <meta property="og:title" content="your_title_goes_here">
    <meta property="og:description" content="your_description_goes_here">
    <!-- Update with actual absolute image URL like: https://example.com/main.jpg -->
    <meta property="og:image" content="your_absolute_image_url_goes_here">
    <!-- Update with the absolute URL of the content like: https://example.com/index.html -->
    <meta property="og:url" content="your_absolute_content_url_goes_here">
    <!-- Update with the type of object you’re sharing. (e.g., article, website, etc.) -->
    <meta property="og:type" content="website">
    <!-- Defines the content language -->
    <meta property="og:locale" content="en_US">

    
    <!-- X/Twitter Card Meta Tags for Social Sharing -->
    <meta name="twitter:card" content="summary_large_image">
    <!-- Update with your X/Twitter handle -->
    <meta name="twitter:site" content="@yourtwitterhandle"> 
    <!-- Update the 'title' and 'description' content below to enhance social sharing -->
    <meta name="twitter:title" content="your_title_goes_here"> 
    <meta name="twitter:description" content="your_description_goes_here">
    <!-- Update with actual absolute image URL like: https://example.com/main.jpg -->
    <meta name="twitter:image" content="your_absolute_image_url_goes_here"> 
    
    <!-- 
        The following line specifies the canonical URL for this page.
        Replace your_canonical_url_goes_here with the actual canonical URL if needed like: https://example.com/index.html
        Or just remove it!!!!
    -->
    <link rel="canonical" href="your_canonical_url_goes_here">

</head>
<body>


    <!-- loader-wrapper -->
    <div class="loader-wrapper">
        <div class="spinner-border text-primary p-5" role="status">
            <span class="visually-hidden">Loading...</span>
        </div>
    </div>



	<!-- header top -->
	<header class="navigation position-absolute w-100 bg-body-tertiary shadow border-bottom border-light border-opacity-10 rounded-bottom-3 rounded-bottom-sm-4">
	     <nav class="navbar navbar-expand-xl" aria-label="Offcanvas navbar large" style="padding: 0; ">
	        <div class="container py-1">
	            <a href="./index.php" class="navbar-brand">
	                <img src="./assets/logo/logo.png" height="60" alt="logo" style="margin-bottom: 10px;">
	            </a>
				<h4 class="px-1 home-text  rounded-3 text-base leading-6 fw-semibold" style="margin-top: 10px; font-size: 24px;">RADAR Community</h4>

	            <div class="dropdown ms-3 order-last">
	                <svg xmlns="http://www.w3.org/2000/svg" class="d-none">
	                    <symbol id="check2" viewBox="0 0 16 16">
	                        <path d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z"/>
	                    </symbol>
	                    <symbol id="circle-half" viewBox="0 0 16 16">
	                        <path d="M8 15A7 7 0 1 0 8 1v14zm0 1A8 8 0 1 1 8 0a8 8 0 0 1 0 16z"/>
	                    </symbol>
	                    <symbol id="moon-stars-fill" viewBox="0 0 16 16">
	                        <path d="M6 .278a.768.768 0 0 1 .08.858 7.208 7.208 0 0 0-.878 3.46c0 4.021 3.278 7.277 7.318 7.277.527 0 1.04-.055 1.533-.16a.787.787 0 0 1 .81.316.733.733 0 0 1-.031.893A8.349 8.349 0 0 1 8.344 16C3.734 16 0 12.286 0 7.71 0 4.266 2.114 1.312 5.124.06A.752.752 0 0 1 6 .278z"/>
	                        <path d="M10.794 3.148a.217.217 0 0 1 .412 0l.387 1.162c.173.518.579.924 1.097 1.097l1.162.387a.217.217 0 0 1 0 .412l-1.162.387a1.734 1.734 0 0 0-1.097 1.097l-.387 1.162a.217.217 0 0 1-.412 0l-.387-1.162A1.734 1.734 0 0 0 9.31 6.593l-1.162-.387a.217.217 0 0 1 0-.412l1.162-.387a1.734 1.734 0 0 0 1.097-1.097l.387-1.162zM13.863.099a.145.145 0 0 1 .274 0l.258.774c.115.346.386.617.732.732l.774.258a.145.145 0 0 1 0 .274l-.774.258a1.156 1.156 0 0 0-.732.732l-.258.774a.145.145 0 0 1-.274 0l-.258-.774a1.156 1.156 0 0 0-.732-.732l-.774-.258a.145.145 0 0 1 0-.274l.774-.258c.346-.115.617-.386.732-.732L13.863.1z"/>
	                    </symbol>
	                    <symbol id="sun-fill" viewBox="0 0 16 16">
	                        <path d="M8 12a4 4 0 1 0 0-8 4 4 0 0 0 0 8zM8 0a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 0zm0 13a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 13zm8-5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2a.5.5 0 0 1 .5.5zM3 8a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2A.5.5 0 0 1 3 8zm10.657-5.657a.5.5 0 0 1 0 .707l-1.414 1.415a.5.5 0 1 1-.707-.708l1.414-1.414a.5.5 0 0 1 .707 0zm-9.193 9.193a.5.5 0 0 1 0 .707L3.05 13.657a.5.5 0 0 1-.707-.707l1.414-1.414a.5.5 0 0 1 .707 0zm9.193 2.121a.5.5 0 0 1-.707 0l-1.414-1.414a.5.5 0 0 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .707zM4.464 4.465a.5.5 0 0 1-.707 0L2.343 3.05a.5.5 0 1 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .708z"/>
	                    </symbol>
	                </svg>

	                <button class="btn btn-primary home-text btn-sm rounded dropdown-toggle d-flex align-items-center"
	                    id="bd-theme" type="button" aria-expanded="false" data-bs-toggle="dropdown"
	                    aria-label="Toggle theme (auto)">
	                    <svg fill="currentColor" class="bi my-1 theme-icon-active" width="1em" height="1em"><use href="#circle-half"></use></svg>
	                    <span class="visually-hidden" id="bd-theme-text">Toggle theme</span>
	                </button>

	                <ul class="p-1 dropdown-menu dropdown-menu-end dropdown-menu-hover end-0 rounded-3 shadow bg-dark"
	                    style="--bs-dropdown-min-width: 9rem;" aria-labelledby="bd-theme-text">

	                    <li style="color: var(--bs-tertiary-bg);">
	                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
	                            class="mt-n1 d-inline-block position-absolute top-0 end-0 translate-middle" viewBox="0 0 16 16">
	                            <path class="carret-dropdown-path" d="m7.247 4.86-4.796 5.481c-.566.647-.106 1.659.753 1.659h9.592a1 1 0 0 0 .753-1.659l-4.796-5.48a1 1 0 0 0-1.506 0z"/>
	                        </svg>
	                    </li>

	                    <li>
	                        <button type="button" class="dropdown-item d-flex align-items-center rounded-1 home-text" data-bs-theme-value="light" aria-pressed="false">
	                            <svg fill="currentColor" class="bi me-2 theme-icon" width="1em" height="1em"><use href="#sun-fill"></use></svg>
	                            Light
	                            <svg fill="currentColor" class="bi ms-auto d-none active-check" width="1em" height="1em"><use href="#check2"></use></svg>
	                        </button>
	                    </li>

	                    <li>
	                        <button type="button" class="my-1 dropdown-item d-flex align-items-center rounded-1 home-text" data-bs-theme-value="dark" aria-pressed="false">
	                            <svg fill="currentColor" class="bi me-2 theme-icon" width="1em" height="1em"><use href="#moon-stars-fill"></use></svg>
	                            Dark
	                            <svg fill="currentColor" class="bi ms-auto d-none active-check" width="1em" height="1em"><use href="#check2"></use></svg>
	                        </button>
	                    </li>

	                    <li>
	                        <button type="button" class="dropdown-item d-flex align-items-center rounded-1 active home-text" data-bs-theme-value="auto" aria-pressed="true">
	                            <svg fill="currentColor" class="bi me-2 theme-icon" width="1em" height="1em"><use href="#circle-half"></use></svg>
	                            Auto
	                            <svg fill="currentColor" class="bi ms-auto d-none active-check" width="1em" height="1em"><use href="#check2"></use></svg>
	                        </button>
	                    </li>
	                </ul>
	            </div>

	            <button class="navbar-toggler ms-auto" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar2" aria-controls="offcanvasNavbar2" aria-label="Toggle navigation">
	                <span class="navbar-toggler-icon"></span>
	            </button>

	            <div class="offcanvas offcanvas-end border-0 rounded-start-0 rounded-start-sm-4" tabindex="-1" id="offcanvasNavbar2" aria-labelledby="offcanvasNavbar2Label">
	                <div class="offcanvas-header" style="padding: 2rem 2rem 1.5rem 2rem;">
	                    <h5 class="offcanvas-title m-0" id="offcanvasNavbar2Label">
	                        <a class="navbar-brand" href="javascript:;">
	                            <img src="./assets/logo/logo.png" height="32" alt="logo">
	                        </a>
	                    </h5>
	                    <button type="button" class="btn-close home-text" data-bs-dismiss="offcanvas" aria-label="Close"></button>
	                </div>

	                <div class="offcanvas-body">
	                    <ul class="navbar-nav align-items-xl-center flex-grow-1 column-gap-4 row-gap-4 row-gap-xl-2">
	                        <li class="nav-item ms-xl-auto">
	                            <a href="./index.php" class="px-3  home-text bg-body-secondary-hover nav-link rounded-3 text-base leading-6 fw-semibold" aria-current="page">
	                                Home
	                            </a>
	                        </li>

	                        <li class="nav-item">
	                            <a href="./community.php" class="px-3  home-text bg-body-secondary-hover nav-link rounded-3 text-base leading-6 fw-semibold">
	                                Community
	                            </a>
	                        </li>

	                        <li class="nav-item">
	                            <a href="./about.php" class="px-3  home-text bg-body-secondary-hover nav-link rounded-3 text-base leading-6 fw-semibold">
	                                About
	                            </a>
	                        </li>

	                        <li class="nav-item">
					            <div class="dropdown">
								    <button class="btn w-100 text-start dropdown-toggle px-3  home-text bg-body-secondary-hover nav-link rounded-3 text-base leading-6 fw-semibold " type="button" data-bs-toggle="dropdown" aria-expanded="false">
								        Blog
								    </button>
								    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-hover end-0 text-sm shadow bg-dark" style="--bs-dropdown-min-width: 9rem;">
								    	<li class="d-none d-xl-block" style="color: var(--bs-tertiary-bg);">
					                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
					                            class="mt-n1 d-inline-block position-absolute top-0 end-0 translate-middle" viewBox="0 0 16 16">
					                            <path class="carret-dropdown-path" d="m7.247 4.86-4.796 5.481c-.566.647-.106 1.659.753 1.659h9.592a1 1 0 0 0 .753-1.659l-4.796-5.48a1 1 0 0 0-1.506 0z"/>
					                        </svg>
					                    </li>
								        <li>
								        	<a class="dropdown-item  home-text bg-body-secondary-hover py-2 text-base leading-6 fw-semibold" href="./blog.php"> 
								        		Blog page 
								        	</a>
								        </li>
								        <li>
								        	<a class="dropdown-item  home-text bg-body-secondary-hover py-2 text-base leading-6 fw-semibold" href="./blog-post.php"> 
								        		Blog post 
								        	</a>
								        </li>
								    </ul>
								</div>
	                        </li>

	                        <li class="nav-item ms-xl-auto">
	                            <a href="./contact.php" class="px-3  home-text bg-body-secondary-hover border nav-link rounded-3 text-base leading-6 fw-semibold text-center">
	                                Contact us
	                            </a>
	                        </li>
	                    </ul>
	                </div>
	            </div>
	        </div>
	    </nav>
	</header>



	<!-- header body -->
	<div class="overflow-hidden py-9 py-xl-10 position-relative">
	   	<img id="logo" src="./assets/img/bg/logo-light.jpg" class="position-absolute z-n1 top-0 h-100 w-100 object-fit-cover" alt="Meeting">

	   	<div class="position-absolute z-n1 top-0 h-100 w-100 bg-dark"
	        style="opacity: 0.85; mix-blend-mode: multiply; filter: contrast(1.15) brightness(0.85);">
	    </div>

	    <div class="position-absolute z-0 top-0 h-100 w-100">
		    <div class="container h-100 d-flex align-items-center">
                <div class="max-w-2xl mx-auto mx-xl-0 text-center text-xl-start">
                    <h1 class="m-0 mt-7 home-text tracking-tight text-6xl fw-bold" data-aos-delay="0" data-aos="fade" data-aos-duration="3000">
                        Blog post
                    </h1>
                    <p class="m-0 mt-4 home-text text-lg leading-8" data-aos-delay="100" data-aos="fade" data-aos-duration="3000">
                        Learn how to grow your business with our expert advice.
                    </p>
                </div>
		    </div>
	    </div>
	</div>	



	<div class="overflow-hidden py-6 py-sm-7 py-xl-8">
		<div class="container">
			<div class="row gy-5 gx-xl-5 justify-content-between">
				<div class="col-12 col-xl-8">
					<div class="max-w-3xl mx-auto mx-xl-0 mt-4">
						<a class="icon-link link-primary-emphasis icon-link-hover text-decoration-none" href="blog.php" style="--bs-icon-link-transform: translate3d(-.125rem, 0, 0);">
							<svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi fs-1 bi-arrow-left-short rtl-flip" viewBox="0 0 16 16"> <path fill-rule="evenodd" d="M12 8a.5.5 0 0 1-.5.5H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5a.5.5 0 0 1 .5.5z"/> </svg>

							<span class="fw-bold">
								Back to Blog
							</span>
						</a>

						<h2 class="my-4 text-body-emphasis text-4xl tracking-tight fw-bold">
							12 Binatang Kalimantan Yang Terancam Punah
						</h2>

						<div class="d-flex justify-content-between align-items-center flex-wrap">
							<div class="mt-2">
								<img src="./assets/img/team/yass.jpg" height="40" width="40" class="img-fluid rounded-circle" alt="small team" loading="lazy">

								<span class="text-body text-sm fw-medium ps-2">
									Dias Havits
								</span>

								<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-dot text-body-tertiary" viewBox="0 0 16 16">
								  <path d="M8 9.5a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3"/>
								</svg>

								<small class="ps-1 text-body-tertiary text-xs fw-medium">
									Leader
								</small>
							</div>

							<div class="mt-2">
								<!-- X icon -->
								<a href="javascript:;" class="btn bg-body-tertiary bg-body-secondary-hover social my-2">
									<span class="d-flex justify-content-center align-items-center">
										<svg width="16" height="16" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"> <g> <path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z"></path> </g> </svg>
									</span>
								</a>

								<!-- intagram icon -->
								<a href="javascript:;" class="btn bg-body-tertiary bg-body-secondary-hover social my-2">
									<span class="d-flex justify-content-center align-items-center">
										<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16"> <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"/> </svg>
									</span>
								</a>

								<!-- facebook icon -->
								<a href="javascript:;" class="btn bg-body-tertiary bg-body-secondary-hover social my-2">
									<span class="d-flex justify-content-center align-items-center">
										<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 320 512"> <path d="M279.14 288l14.22-92.66h-88.91v-60.13c0-25.35 12.42-50.06 52.24-50.06h40.42V6.26S260.43 0 225.36 0c-73.22 0-121.08 44.38-121.08 124.72v70.62H22.89V288h81.39v224h100.17V288z"/> </svg>
									</span>
								</a>

								<!-- linkedIn icon -->
								<a href="javascript:;" class="btn bg-body-tertiary bg-body-secondary-hover social my-2">
									<span class="d-flex justify-content-center align-items-center">
										<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 448 512"> <path d="M100.28 448H7.4V148.9h92.88zM53.79 108.1C24.09 108.1 0 83.5 0 53.8a53.79 53.79 0 0 1 107.58 0c0 29.7-24.1 54.3-53.79 54.3zM447.9 448h-92.68V302.4c0-34.7-.7-79.2-48.29-79.2-48.29 0-55.69 37.7-55.69 76.7V448h-92.78V148.9h89.08v40.8h1.3c12.4-23.5 42.69-48.3 87.88-48.3 94 0 111.28 61.9 111.28 142.3V448z"/> </svg>
									</span>
								</a>
							</div>
						</div>

						<div class="mt-5">
	                        <div class="ratio ratio-16x9" data-aos-delay="0" data-aos="fade" data-aos-duration="3000">
	                            <img src="./assets/img/bg/binatang.webp" class="object-fit-cover rounded-3" alt="presentation" loading="lazy">
	                        </div>
	                    </div>

						<p class="mt-4 text-body-secondary text-lg leading-8 text-justify">
                            Kalimantan, pulau terbesar ketiga di dunia, dikenal sebagai paru-paru Asia Tenggara dan rumah bagi ribuan spesies unik. Sayangnya, aktivitas manusia seperti deforestasi, perburuan liar, dan alih fungsi lahan membuat banyak satwa endemik Kalimantan terancam punah. Berikut adalah 12 binatang yang nasibnya kini kian mengkhawatirkan:<br>

                            <br>1. Orangutan Kalimantan (Pongo pygmaeus)
                            Primata cerdas ini kehilangan habitat akibat pembukaan lahan dan kebakaran hutan. Status: Sangat Terancam Punah.<br>
                            <br>2. Bekantan (Nasalis larvatus)
                            Dikenal dengan hidung panjangnya, bekantan hanya ditemukan di Kalimantan. Status: Terancam.<br>
                            <br>3. Macan Dahan Borneo (Neofelis diardi borneensis)
                            Kucing liar pemanjat ulung ini sulit ditemukan karena hutan tempatnya hidup semakin menyempit. Status: Rentan.<br>
                            <br>4. Gajah Kalimantan (Elephas maximus borneensis)
                            Subspesies gajah Asia ini populasinya terus menyusut akibat fragmentasi hutan. Status: Terancam.<br>
                            <br>5. Rangkong Gading (Rhinoplax vigil)
                            Burung eksotis yang sering diburu karena paruhnya yang keras dan indah. Status: Sangat Terancam Punah.<br>
                            <br>6. Kucing Merah Borneo (Catopuma badia)
                            Salah satu kucing liar paling misterius dan langka di dunia. Status: Terancam.<br>
                            <br>7. Lutung Merah (Presbytis rubicunda)
                            Primata pemakan daun ini menghadapi tekanan karena habitatnya terus terfragmentasi. Status: Rentan.<br>
                            <br>Trenggiling (Manis javanica)
                            Sering diburu karena sisiknya yang dipercaya memiliki khasiat medis. Status: Kritis.<br>
                            <br>9. Beruang Madu (Helarctos malayanus)
                            Beruang terkecil di dunia ini rentan terhadap kehilangan habitat. Status: Rentan.<br>
                            <br>10. Kukang Kalimantan (Nycticebus menagensis)
                            Primata nokturnal ini sering dijadikan hewan peliharaan ilegal. Status: Rentan.<br>
                            <br>11. Pesut Mahakam (Orcaella brevirostris)
                            Lumba-lumba air tawar langka yang hanya ditemukan di Sungai Mahakam. Status: Kritis.<br>
                            <br>12. Burung Enggang Kalimantan (Buceros rhinoceros borneoensis)
                            Ikon hutan Kalimantan ini juga menghadapi ancaman dari perdagangan ilegal dan kerusakan habitat. Status: Terancam.<br>
						</p>
						<div class="text-center my-6 text-secondary">
							<span>
								<svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-three-dots" viewBox="0 0 16 16"> <path d="M3 9.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3z"/> </svg>
							</span>
						</div>
						<div class="mt-4"> 
						</div>
						<div class="mt-4">
							<div class="mt-5">
		                        <div class="ratio ratio-16x9" data-aos-delay="0" data-aos="fade" data-aos-duration="3000">
		                            <img src="./assets/img/bg/bg3.jpg" class="img-fluid object-fit-cover rounded-3" alt="presentation" loading="lazy">
		                        </div>
		                    </div>
						</div>

						<div class="mt-6">
							<h2 class="mb-3 text-body-emphasis tracking-tight text-3xl fw-semibold">
								Kesimpulan
							</h2>

							<p class="text-body-secondary text-lg leading-8 text-justify">
                                Satwa-satwa Kalimantan adalah bagian penting dari ekosistem dan identitas alam Indonesia. Kehilangan mereka berarti mengganggu keseimbangan alam dan kehilangan warisan biologis yang tak ternilai. Upaya pelestarian melalui pendidikan, penegakan hukum, dan dukungan terhadap konservasi harus terus ditingkatkan. Jika tidak, anak cucu kita mungkin hanya akan mengenal mereka lewat gambar di buku sejarah alam.
                                Mari kita jaga Kalimantan, jaga kehidupan. 🌿 #SaveKalimantan #LestarikanSatwa
							</p>
						</div>
					</div>
				</div>


				<!-- side bar -->
				<div class="col-12 col-xl-4">
					<div class="max-w-xl mx-auto mx-xl-0 pt-5 pt-xl-0">
						<div class="mt-4">
							<div class="p-4 shadow rounded-3 bg-body-tertiary">
								<div class="input-group flex-nowrap input-group-lg">
									<input type="text" class="form-control" placeholder="Search" aria-label="Username" aria-describedby="addon-wrapping">
									<span class="input-group-text bg-primary text-light" id="addon-wrapping">
										<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
											<path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
										</svg>
									</span>
								</div>
							</div>
						</div>

						<div class="mt-5">
							<div class="p-4 shadow rounded-3 bg-body-tertiary">
								<h3 class="text-body-emphasis text-2xl tracking-tight fw-semibold">
									Popular Post
								</h3>

								<hr class="text-body-emphasis opacity-10">

								<a href="raja_ampat.php" class="d-flex align-items-center mt-4 text-body link-offset-2 link-underline link-underline-opacity-0 link-underline-opacity-25-hover">
									<div class="p-5 position-relative">
										<img src="./assets/img/bg/bg7.jpg" class="position-absolute top-0 start-0 h-100 w-100 object-fit-cover rounded" loading="lazy" alt="Meeting">
									</div>

									<div class="ps-3">
										<time datetime="2024-09-16" class="d-block text-body-tertiary">
			                                20 Juni 2025
			                            </time>
										<h6 class="m-0 mt-3 text-body-secondary line-clamp-2 text-sm leading-6">
											#SaveRajaAmpat
										</h6>
									</div>
								</a>

								<a href="blog-post.php" class="d-flex align-items-center mt-4 text-body link-offset-2 link-underline link-underline-opacity-0 link-underline-opacity-25-hover">
									<div class="p-5 position-relative">
										<img src="./assets/img/bg/bg8.jpg" class="position-absolute top-0 start-0 h-100 w-100 object-fit-cover rounded" loading="lazy" alt="Meeting">
									</div>

									<div class="ps-3">
										<time datetime="2024-09-16" class="d-block text-body-tertiary">
			                                18 Mei 2025
			                            </time>
										<h6 class="m-0 mt-3 text-body-secondary line-clamp-2 text-sm leading-6">
										Aksi Bersih Pantai Bersama Radar
										</h6>
									</div>
								</a>

								<a href="manfaat.php" class="d-flex align-items-center mt-4 text-body link-offset-2 link-underline link-underline-opacity-0 link-underline-opacity-25-hover">
									<div class="p-5 position-relative">
										<img src="./assets/img/bg/bg9.jpg" class="position-absolute top-0 start-0 h-100 w-100 object-fit-cover rounded" loading="lazy" alt="Meeting">
									</div>

									<div class="ps-3">
										<time datetime="2024-09-16" class="d-block text-body-tertiary">
			                                16 September 2024
			                            </time>
										<h6 class="m-0 mt-3 text-body-secondary line-clamp-2 text-sm leading-6">
											8 Manfaat Hutan Hujan Tropis
										</h6>
									</div>
								</a>
							</div>
						</div>

						<div class="mt-5">
							<div class="p-4 shadow rounded-3 bg-body-tertiary">
								<h3 class="text-body-emphasis text-2xl tracking-tight fw-semibold">
									Categories
								</h3>

								<hr class="text-body-secondary opacity-10">

								<ul class="ps-3 text-body-secondary">
									<li class="mt-2">
										<a href="javascript:;" class="text-body-secondary link-offset-2 link-underline link-underline-opacity-0 link-underline-opacity-25-hover text-sm leading-6">
											Ekosistem Darat
										</a>
									</li>
									<li class="mt-2">
										<a href="javascript:;" class="text-body-secondary link-offset-2 link-underline link-underline-opacity-0 link-underline-opacity-25-hover text-sm leading-6">
											Ekosistem Darat & Laut
										</a>
									</li>
								</ul>
							</div>
						</div>


					
					</div>
				</div>
			</div>
		</div>
	</div>



	<!-- Call to action -->
	<div class="pb-9 pt-7">
		<div class="container">
			<div class="py-6 position-relative text-white rounded-3">
				<img src="./assets/img/bg/bg10.jpg" class="position-absolute z-n1 top-0 h-100 w-100 object-fit-cover rounded-3" loading="lazy" alt="Meeting">

			   	<div class="position-absolute z-n1 top-0 h-100 w-100 bg-dark rounded-3"
			        style="opacity: 0.85; mix-blend-mode: multiply; filter: contrast(1.15) brightness(0.85);">
			    </div>

				<div class="px-6">
					<div class="mx-auto max-w-2xl">
						<h2 class="m-0 home-text tracking-tight text-4xl fw-bold text-center">
							Sign in for Radar Community now
						</h2>
						<p class="m-0 mt-4 home-text text-lg leading-8 text-center">
							Join and help our nature now
						</p>
						<div class="mt-4 pt-3 text-center">
							<a href="index.php#myForm" class="btn btn-lg btn-primary home-text text-sm fw-semibold">
								Join Now
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>



		<footer class="overflow-hidden py-6 py-sm-7 py-xl-6 bg-body-tertiary">
	    
	    <div class="container">

	        <div class="d-flex flex-column flex-xl-row gap-5 justify-content-between align-items-xl-center">
	            <div class="order-first order-xl-last">
	                <ul class="nav row gy-4 gx-sm-4 row-cols-2 row-cols-sm-auto">
	                    <li class="nav-item">
	                        <a href="./blog.php" class="p-0 text-body-secondary nav-link leading-6 text-sm"> Blog</a>
	                    </li>
						<li class="nav-item">
	                        <a href="./about.php" class="p-0 text-body-secondary nav-link leading-6 text-sm"> About </a>
	                    </li>
	                    <li class="nav-item">
	                        <a href="./community.php" class="p-0 text-body-secondary nav-link leading-6 text-sm"> Community </a>
	                    </li>
	                  
	                    <li class="nav-item">
	                        <a href="./contact.php" class="p-0 text-body-secondary nav-link leading-6 text-sm"> Contact us </a>
	                    </li>
	                </ul>
	            </div>

	            <div class="">
	                <a href="./index.php" class="link-body-emphasis d-flex align-items-center text-decoration-none">
	                    <img src="./assets/logo/logo.png" height="24" alt="logo" loading="lazy">
						RADAR Comunity
	                </a>
	            </div>

	            <div class="order-last order-xl-first">
	                <p class="mb-0 text-body-secondary leading-6 text-sm">
	                    © 
	                    <span class="current-year"></span> 
						Radar Community
	                </p>
	            </div>
	        </div>
	    </div>  
	</footer>


	<!-- Back to top button -->
	<button type="button" class="btn btn-primary btn-back-to-top rounded-circle justify-content-center align-items-center p-2 text-white">
		<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-caret-up-fill" viewBox="0 0 16 16"> <path d="m7.247 4.86-4.796 5.481c-.566.647-.106 1.659.753 1.659h9.592a1 1 0 0 0 .753-1.659l-4.796-5.48a1 1 0 0 0-1.506 0z"/> </svg>
	</button>



	<!-- Bootstrap JavaScript: Bundle with Popper -->
	<script src="./assets/libraries/bootstrap/js/bootstrap.bundle.min.js"></script>
	<script src="./assets/libraries/glide/glide.min.js"></script>
	<script src="./assets/libraries/aos/aos.js"></script>
	<script src="./assets/js/scripts.js"></script>
			<script>
	const updateThemeImage = (theme) => {
	const logo = document.getElementById("logo");
	if (!logo) {
		console.warn("Logo tidak ditemukan");
		return;
	}

	// Tambahkan efek fade-out
	logo.classList.add("fade-out");

	setTimeout(() => {
		// Ganti gambar setelah efek fade-out
		logo.src = theme === "dark"
		? "./assets/img/bg/logo-dark.jpg"
		: "./assets/img/bg/logo-light.jpg";

		// Setelah gambar berubah, tunggu sebentar lalu fade-in
		logo.onload = () => {
		logo.classList.remove("fade-out");
		};
	}, 300); // Sesuaikan dengan waktu transisi CSS
	};


	document.querySelectorAll('[data-bs-theme-value]').forEach(btn => {
		btn.addEventListener('click', () => {
		const theme = btn.getAttribute('data-bs-theme-value');
		document.documentElement.setAttribute('data-bs-theme', theme);
		updateThemeImage(theme);
		});
	});
	</script>

</body>
</html>