<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="<?php echo BASEURL; ?>/css/style.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <!-- <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet"> -->

    <title><?php echo $data['title']; ?> </title>
</head>

<body>

    <!-- HEADER START -->

    <header class="bg-gradient-to-br  bg-purple-950  absolute top-0 left-0 w-full flex
    items-center z-10">
        <div class="container">
            <div class="flex items-center justify-between relative">
                <div class="px-4">

                    <a href="#home" class="font-bold text-5xl text-primary block
                py-6 tracking-widest"><i class="fa-solid fa-compact-disc fa-spin fa-xs" style="color: #c2185d;"></i></a>
                </div>
                <div class="flex items-center px-4">
                    <button id="hamburger" name="hamburger" type="button" class="block absolute right-4 lg:hidden">
                        <span class="hamburger-line transition duration-300 ease-in-out origin-top-left"></span>
                        <span class="hamburger-line transition duration-300 ease-in-out"></span>
                        <span class="hamburger-line transition duration-300 ease-in-out  origin-bottom-left "></span>
                    </button>

                    <nav id="nav-menu" class="hidden absolute py-5 bg-dark shadow-lg rounded-lg max-w-[250px] w-full 
                    right-4 top-full lg:block lg:static lg:bg-transparent lg:max-w-full lg:shadow-none lg:rounded-none">
                        <ul class="block lg:flex">
                            <li class="group">
                                <a href="<?php echo BASEURL; ?>/Logout" class="text-base text-slate-300 rounded-xl bg-gradient-to-br from-blue-500 via-violet-900 to-purple-500 border-violet-950 p-3 py-2
                            mx-3 flex hover:shadow-lg hover:bg-opacity-80 duration-300 ease-in-out
                            hover:text-slate-800">Sign out</a>
                            </li>

                            <li class="group">
                                <a href="<?php echo BASEURL; ?>/Home" class="text-base text-slate-300 py-2
                            mx-8 flex  group-hover:text-gray-950">Home</a>
                            </li>
                            <li class="group">
                                <a href="#about" class="text-base text-slate-300 py-2
                                mx-8 flex  group-hover:text-gray-950">About me</a>
                            </li>

                            <li class="group">
                                <a href="#portofolio" class="text-base text-slate-300 py-2
                                mx-8 flex  group-hover:text-gray-950">Gallery</a>
                            </li>
                            <li class="group">
                                <a href="#contact" class="text-base text-slate-300 py-2
                                mx-8 flex  group-hover:text-gray-950">Contact</a>
                            </li>
                            <li class="group">
                                <button id="dropdownNavbarLink" data-dropdown-toggle="dropdownNavbar" class="text-slate-300 hover:bg-slate-900 border-b
                                 border-slate-300  mx-8 mt-2 md:hover:bg-transparent md:border-0 hover:text-primary md:p-0 font-medium flex 
                                 items-center justify-between  md:w-auto dropdown-toggle">Database<svg class="w-4 h-4 ml-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                                    </svg></button>
                                <!-- Dropdown menu -->
                                <div id="dropdownNavbar" class="hidden bg-dark text-base z-10 list-none divide-y divide-gray-100 rounded shadow my-4 w-44 dropdown-menu">
                                    <ul class="py-1" aria-labelledby="dropdownLargeButton">

                                        <li class="py-1">
                                            <a href="<?php echo BASEURL; ?>/Comics" class="text-sm font-semibold text-slate-300 block px-4 py-2 hover:text-blue-600">Data Comics</a>
                                        </li>
                                        <li>
                                            <a href="#" class="text-sm font-semibold text-slate-300 block px-4 py-2  hover:text-blue-600">Register</a>
                                        </li>
                                    </ul>

                                </div>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>

    </header>
    <!-- HEADER END -

    