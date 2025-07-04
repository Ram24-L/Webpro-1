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
                        About us
                    </h1>
                    <p class="m-0 mt-4 home-text text-lg leading-8" data-aos-delay="100" data-aos="fade" data-aos-duration="3000">
                        The History of Radar Community
                    </p>
                </div>
		    </div>
	    </div>
	</div>	



	<!-- About Us -->
	<div class="overflow-hidden py-7 py-sm-8 py-xl-9">
		<div class="container">
			<div class="row gy-5 align-items-center justify-content-between">
				<div class="col-12 col-xl-5 order-first order-xl-last">
					<div class="mx-auto max-w-2xl">
						<h2 class="m-0 text-primary-emphasis text-base leading-7 fw-semibold">
							Radar Community 
						</h2>
						<p class="m-0 mt-2 text-body-emphasis text-4xl tracking-tight fw-bold">
							Berawal dari Keresahan
						</p>
						<p class="m-0 mt-4 text-body-secondary text-lg leading-8 text-justify">
							Radar Community lahir dari keresahan sekelompok anak muda terhadap semakin menurunnya kesadaran masyarakat akan pentingnya menjaga lingkungan dan nilai-nilai sosial di tengah era digital. Berawal dari diskusi kecil di sebuah warung kopi di Bandung pada tahun 2019, lima orang sahabat yang berasal dari latar belakang berbeda mahasiswa, pegiat sosial, programmer, pecinta alam, dan desainer grafis sepakat bahwa perubahan harus dimulai dari komitmen dari komunitas kecil yang solid dan peduli.
						</p>
						
					</div>
				</div>

				<div class="col-12 col-xl-6">
					<div class="mx-auto max-w-2xl">
                        <div class="ratio ratio-4x3" data-aos-delay="200" data-aos="fade" data-aos-duration="3000">
                            <img src="./assets/img/bg/bg5.jpg" class="object-fit-cover rounded-3" alt="presentation">
                        </div>
					</div>
				</div>
			</div>		
		</div>
	</div>
	


	<!-- Our purpose our future Our Principles -->
	<div class="overflow-hidden py-6 py-sm-7 py-xl-8">
		<div class="container">
			<div class="row gy-5 row-cols-1 row-cols-lg-3">
				<div class="col" data-aos-delay="0" data-aos="fade-left" data-aos-duration="3000">
					<div class="bg-primary rounded-3 d-inline-flex align-items-center justify-content-center home-text"
	                     style="width: 2.5rem; height: 2.5rem;">
                        <svg xmlns="http://www.w3.org/2000/svg" width="1.5rem" height="1.5rem" fill="currentColor" class="text-white bi bi-flag" viewBox="0 0 16 16"> <path d="M14.778.085A.5.5 0 0 1 15 .5V8a.5.5 0 0 1-.314.464L14.5 8l.186.464-.003.001-.006.003-.023.009a12 12 0 0 1-.397.15c-.264.095-.631.223-1.047.35-.816.252-1.879.523-2.71.523-.847 0-1.548-.28-2.158-.525l-.028-.01C7.68 8.71 7.14 8.5 6.5 8.5c-.7 0-1.638.23-2.437.477A20 20 0 0 0 3 9.342V15.5a.5.5 0 0 1-1 0V.5a.5.5 0 0 1 1 0v.282c.226-.079.496-.17.79-.26C4.606.272 5.67 0 6.5 0c.84 0 1.524.277 2.121.519l.043.018C9.286.788 9.828 1 10.5 1c.7 0 1.638-.23 2.437-.477a20 20 0 0 0 1.349-.476l.019-.007.004-.002h.001M14 1.221c-.22.078-.48.167-.766.255-.81.252-1.872.523-2.734.523-.886 0-1.592-.286-2.203-.534l-.008-.003C7.662 1.21 7.139 1 6.5 1c-.669 0-1.606.229-2.415.478A21 21 0 0 0 3 1.845v6.433c.22-.078.48-.167.766-.255C4.576 7.77 5.638 7.5 6.5 7.5c.847 0 1.548.28 2.158.525l.028.01C9.32 8.29 9.86 8.5 10.5 8.5c.668 0 1.606-.229 2.415-.478A21 21 0 0 0 14 7.655V1.222z"/> </svg>
                    </div>

					<h3 class="m-0 mt-3 text-body-emphasis text-base leading-7 fw-semibold">
						Our Purpose
					</h3>
					<p class="m-0 mt-2 text-body-secondary text-base leading-7 max-w-lg text-justify">
						Radar Community didirikan dengan tujuan untuk meningkatkan kesadaran masyarakat terhadap isu-isu sosial, lingkungan, dan budaya melalui pendekatan kolaboratif dan aksi nyata. Komunitas ini menjadi ruang bagi anak muda dari berbagai latar belakang untuk bersatu, belajar, dan menciptakan solusi yang berdampak positif bagi lingkungan sekitar. Selain itu, Radar Community berkomitmen untuk memberdayakan komunitas lokal serta mendorong penggunaan teknologi dan data dalam merancang program-program yang berkelanjutan dan relevan dengan kebutuhan masyarakat.
					</p>
				</div>

				<div class="col" data-aos-delay="100" data-aos="fade-left" data-aos-duration="3000">
					<div class="bg-primary rounded-3 d-inline-flex align-items-center justify-content-center home-text"
	                     style="width: 2.5rem; height: 2.5rem;">
                        <svg xmlns="http://www.w3.org/2000/svg" width="1.5rem" height="1.5rem" fill="currentColor" class="text-white bi bi-binoculars" viewBox="0 0 16 16"> <path d="M3 2.5A1.5 1.5 0 0 1 4.5 1h1A1.5 1.5 0 0 1 7 2.5V5h2V2.5A1.5 1.5 0 0 1 10.5 1h1A1.5 1.5 0 0 1 13 2.5v2.382a.5.5 0 0 0 .276.447l.895.447A1.5 1.5 0 0 1 15 7.118V14.5a1.5 1.5 0 0 1-1.5 1.5h-3A1.5 1.5 0 0 1 9 14.5v-3a.5.5 0 0 1 .146-.354l.854-.853V9.5a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5v.793l.854.853A.5.5 0 0 1 7 11.5v3A1.5 1.5 0 0 1 5.5 16h-3A1.5 1.5 0 0 1 1 14.5V7.118a1.5 1.5 0 0 1 .83-1.342l.894-.447A.5.5 0 0 0 3 4.882zM4.5 2a.5.5 0 0 0-.5.5V3h2v-.5a.5.5 0 0 0-.5-.5zM6 4H4v.882a1.5 1.5 0 0 1-.83 1.342l-.894.447A.5.5 0 0 0 2 7.118V13h4v-1.293l-.854-.853A.5.5 0 0 1 5 10.5v-1A1.5 1.5 0 0 1 6.5 8h3A1.5 1.5 0 0 1 11 9.5v1a.5.5 0 0 1-.146.354l-.854.853V13h4V7.118a.5.5 0 0 0-.276-.447l-.895-.447A1.5 1.5 0 0 1 12 4.882V4h-2v1.5a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5zm4-1h2v-.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5zm4 11h-4v.5a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5zm-8 0H2v.5a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5z"/> </svg>
                    </div>

					<h3 class="m-0 mt-3 text-body-emphasis text-base leading-7 fw-semibold">
						Our Future
					</h3>
					<p class="m-0 mt-2 text-body-secondary text-base leading-7 max-w-lg text-justify">
						Visi Radar Community adalah menjadi jaringan komunitas progresif yang aktif membentuk ekosistem sosial dan lingkungan yang berkelanjutan, inklusif, dan kolaboratif. Radar Community membayangkan masa depan di mana setiap individu dan komunitas dapat terhubung, berdaya, dan bergerak bersama untuk menciptakan perubahan positif yang nyata dan berkelanjutan di berbagai daerah.
					</p>
				</div>

				<div class="col" data-aos-delay="200" data-aos="fade-left" data-aos-duration="3000">
					<div class="bg-primary rounded-3 d-inline-flex align-items-center justify-content-center home-text"
	                     style="width: 2.5rem; height: 2.5rem;">
                        <svg xmlns="http://www.w3.org/2000/svg" width="1.5rem" height="1.5rem" fill="currentColor"  class="text-white bi bi-award" viewBox="0 0 16 16"> <path d="M9.669.864 8 0 6.331.864l-1.858.282-.842 1.68-1.337 1.32L2.6 6l-.306 1.854 1.337 1.32.842 1.68 1.858.282L8 12l1.669-.864 1.858-.282.842-1.68 1.337-1.32L13.4 6l.306-1.854-1.337-1.32-.842-1.68zm1.196 1.193.684 1.365 1.086 1.072L12.387 6l.248 1.506-1.086 1.072-.684 1.365-1.51.229L8 10.874l-1.355-.702-1.51-.229-.684-1.365-1.086-1.072L3.614 6l-.25-1.506 1.087-1.072.684-1.365 1.51-.229L8 1.126l1.356.702z"/> <path d="M4 11.794V16l4-1 4 1v-4.206l-2.018.306L8 13.126 6.018 12.1z"/> </svg>
                    </div>

					<h3 class="m-0 mt-3 text-body-emphasis text-base leading-7 fw-semibold">
						Our Principles
					</h3>
					<p class="m-0 mt-2 text-body-secondary text-base leading-7 max-w-lg text-justify">
						Dalam menjalankan misinya, Radar Community berpegang pada prinsip-prinsip utama seperti kolaborasi di atas kompetisi, aksi yang berbasis data dan empati, inklusivitas tanpa batas, adaptif terhadap perubahan zaman, serta keberanian untuk bertindak nyata daripada sekadar berbicara. Prinsip-prinsip inilah yang menjadi fondasi dalam setiap kegiatan dan keputusan komunitas, memastikan bahwa setiap langkah yang diambil tetap relevan, berdampak, dan berpihak pada kebaikan bersama.
					</p>
				</div>
			</div>
		</div>
	</div>



 	<!-- 2 landscap images -->
 	<div class="overflow-hidden pt-6 pt-sm-7 pt-xl-8 pb-7 pb-sm-8 pb-xl-9">
		<div class="container">
			<div class="row gx-lg-4 row-cols-1 row-cols-lg-2">
				<div class="col">
                    <div class="ratio ratio-1x1" data-aos-delay="0" data-aos="fade" data-aos-duration="1000">
                        <img src="./assets/img/bg/bg3.jpg" class="object-fit-cover rounded-3" alt="presentation" loading="lazy">
                    </div>
				</div>

				<div class="col d-none d-lg-block">
                    <div class="ratio ratio-1x1" data-aos-delay="100" data-aos="fade" data-aos-duration="1000">
                        <img src="./assets/img/bg/bg4.jpg" class="object-fit-cover rounded-3" alt="presentation" loading="lazy">
                    </div>
				</div>
			</div>
		</div>
	</div>



	<!-- Our Story -->
	<div class="overflow-hidden py-7 py-sm-8 py-xl-9 bg-body-tertiary">
		<div class="container">
			<div class="row gy-5 justify-content-between align-items-center">
				<div class="col-12 col-xl-6 col-xxl-5">
					<div class="mx-auto mx-xl-0 max-w-2xl">
						<h2 class="m-0 text-primary-emphasis text-base leading-7 fw-semibold">
							Why Radar
						</h2>
						<p class="m-0 mt-2 text-body-emphasis text-4xl tracking-tight fw-bold">
							"RADAR"
						</p>
						<p class="m-0 mt-4 text-body text-lg leading-8">
							<p class="m-0 mt-4 text-body-secondary text-lg leading-8 text-justify">
							Nama “RADAR” dipilih dari penggalan nama dari setiap anggota kelompok, namun nama ini dapat mencerminkan sistem pemantau aktif terhadap isu-isu lingkungan, sosial, dan budaya di sekitar. Radar bukan hanya alat pendeteksi, tapi juga simbol kewaspadaan dan aksi cepat terhadap perubahan. Komunitas ini kemudian bergerak dengan pendekatan kolaboratif: menggabungkan teknologi, edukasi, dan aksi nyata.
						</p>
						</p>
					</div>
				</div>
				<div class="col-12 col-xl-6">
					<div class="mx-auto mx-xl-0 max-w-2xl">
                        <div class="ratio ratio-4x3" data-aos-delay="0" data-aos="fade" data-aos-duration="3000">
                            <img src="./assets/img/bg/bg2.jpg" class="object-fit-cover rounded-3" alt="presentation" loading="lazy">
                        </div>
	                </div>
				</div>
			</div>
		</div>
	</div>
	<!-- Team -->
<div class="overflow-hidden py-7 py-sm-8 py-xl-5 bg-body-secondary">
    <div class="container">
        <div class="mx-auto max-w-2xl text-center">
            <h2 class="m-0 text-primary-emphasis text-base leading-7 fw-semibold">
                Meet Our Executives
            </h2>
            <p class="m-0 mt-2 text-body-emphasis text-4xl tracking-tight fw-bold">
                RADAR TEAM
            </p>
            <p class="m-0 mt-4 text-body text-lg leading-8">
                The team that led and brought us here
            </p>
        </div>

        <div class="row row-cols-1 row-cols-xl-5 gy-5 gx-xl-4 mt-5 justify-content-center text-center">
            <!-- Card 1 -->
            <div class="col">
                <div class="mx-auto" data-aos="fade" data-aos-duration="1000">
                    <img src="./assets/img/team/ram.png" class="rounded-3 mx-auto" style="width: 200px; height: auto;" alt="Menanam Pohon" loading="lazy">
                    <h3 class="mt-4 text-body-emphasis text-lg fw-semibold">Muhammad Ramdhan Maulana <br> 19241129</h3>
                </div>
            </div>

            <!-- Card 2 -->
            <div class="col">
                <div class="mx-auto" data-aos-delay="100" data-aos="fade" data-aos-duration="1000">
                    <img src="./assets/img/team/ar.png" class="rounded-3 mx-auto" style="width: 200px; height: auto;" alt="Ramdhan" loading="lazy">
                    <h3 class="mt-4 text-body-emphasis text-lg fw-semibold">Muhammad Arya <br>Dwi Anggara <br>19241012</h3>
                </div>
            </div>

            <!-- Card 3 -->
            <div class="col">
                <div class="mx-auto" data-aos-delay="200" data-aos="fade" data-aos-duration="1000">
                    <img src="./assets/img/team/yas.png" class="rounded-3 mx-auto" style="width: 200px; height: auto;" alt="Konservasi" loading="lazy">
                    <h3 class="mt-4 text-body-emphasis text-lg fw-semibold">Dias Havits <br>19241041</h3>
    
				</div>
			</div>
			 <div class="col">
                <div class="mx-auto" data-aos-delay="200" data-aos="fade" data-aos-duration="1000">
                    <img src="./assets/img/team/gengsi.png" class="rounded-3 mx-auto" style="width: 200px; height: auto;" alt="Konservasi" loading="lazy">
                    <h3 class="mt-4 text-body-emphasis text-lg fw-semibold">Muhammad Athar Khairy Zhafran <br> 19241157</h3>
				</div>
			</div>
			 <div class="col">
                <div class="mx-auto" data-aos-delay="200" data-aos="fade" data-aos-duration="1000">
                    <img src="./assets/img/team/rejav.png" class="rounded-3 mx-auto" style="width: 200px; height: auto;" alt="Konservasi" loading="lazy">
                    <h3 class="mt-4 text-body-emphasis text-lg fw-semibold">Muhammad Rezafs Ilham <br>19241000</h3>
				</div>
			</div>
		</div> 
	</div>
</div>





	<!-- big centered image -->
	<div class="overflow-hidden py-6 py-sm-7 py-xl-8">
		<div class="container">
            <div class="ratio ratio-16x9">
                <img src="./assets/img/bg/Save-Raja-Ampat.jpg" class="object-fit-cover rounded-3" alt="presentation" loading="lazy">
            </div>
		</div>
	</div>


	<!-- Client -->
	<div class="overflow-hidden py-6 py-sm-7 py-xl-8 bg-body-tertiary">
		<div class="container">
			<div class="max-w-2xl">
				<h2 class="m-0 text-primary-emphasis text-base leading-7 fw-semibold">
					Our Partners
				</h2>
				<div class="m-0 mt-2 text-body-emphasis text-4xl tracking-tight fw-bold">
					We're fortunate to have incredible Partners.
				</div>
			</div>

			<div class="mt-4">
				<div class="glide glideHighLinear">
					<div class="glide__track" data-glide-el="track">
						<ul class="glide__slides align-items-center">
							<li class="glide__slide">
								<div class="p-5">
									<img src="./assets/img/clients/logo1.png" class="img-fluid" alt="clients">
								</div>
							</li>
							<li class="glide__slide">
								<div class="p-5">
									<img src="./assets/img/clients/logo2.png" class="img-fluid" alt="clients">
								</div>
							</li>
							<li class="glide__slide">
								<div class="p-5">
									<img src="./assets/img/clients/logo3.png" class="img-fluid" alt="clients">
								</div>
							</li>
							<li class="glide__slide">
								<div class="p-5">
									<img src="./assets/img/clients/logo4.png" class="img-fluid" alt="clients">
								</div>
							</li>
							<li class="glide__slide">
								<div class="p-5">
									<img src="./assets/img/clients/logo5.png" class="img-fluid" alt="clients">
								</div>
							</li>
							<li class="glide__slide">
								<div class="p-5">
									<img src="./assets/img/clients/logo6.png" class="img-fluid" alt="clients">
								</div>
							</li>
							<li class="glide__slide">
								<div class="p-5">
									<img src="./assets/img/clients/logo7.png" class="img-fluid" alt="clients" width="70px">
								</div>
							</li>
							<li class="glide__slide">
								<div class="p-5">
									<img src="./assets/img/clients/logo8.png" class="img-fluid" alt="clients" width="70px">
								</div>
							</li>
							<li class="glide__slide">
								<div class="p-5">
									<img src="./assets/img/clients/logo9.png" class="img-fluid" alt="clients">
								</div>
							</li>		
						</ul>
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