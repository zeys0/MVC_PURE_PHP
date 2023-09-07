<?php

require '../app/models/LoginModel.php';

if (isset($_POST['register'])) {
    $loginModel = new LoginModel();
    if ($loginModel->registrasi($_POST) > 0) {

        echo "<script> 
        alert('User baru berhasil ditambahkan!');
        </script>";
    } else {
        echo 'Gagal menambahkan user baru';
    }
}
?>


<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="<?php echo BASEURL; ?>/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <title>registrasi</title>
</head>

<body>




    <div style="background: url('../img/netflix.jpg');">
        <div class="p-8 lg:w-1/2 mx-auto">

            <div class="bg-white rounded-t-lg p-8">
                <p class="text-center text-sm text-gray-400 font-light">Sign up</p>
                <div>
                    <div class="flex items-center justify-center space-x-4 mt-3">
                        <a href="<?php echo BASEURL; ?>/Login" class="flex items-center py-2 px-4 text-sm uppercase rounded bg-white hover:bg-gray-100 text-indigo-500 border border-transparent hover:border-transparent hover:text-gray-700 shadow-md hover:shadow-lg font-medium transition transform hover:-translate-y-0.5">

                            <svg width="150px" height="130px" viewBox="-66.56 -66.56 645.12 645.12" class="w-6 h-6 mr-3" xmlns="http://www.w3.org/2000/svg" fill="#0f172a" stroke="#0f172a" transform="rotate(0)">
                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round" stroke="#CCCCCC" stroke-width="9.216"></g>
                                <g id="SVGRepo_iconCarrier">
                                    <defs>
                                        <style>
                                            .cls-1 {
                                                fill: none;
                                                stroke: #0f172a;
                                                stroke-linecap: round;
                                                stroke-linejoin: round;
                                                stroke-width: 24.576;
                                            }
                                        </style>
                                    </defs>
                                    <g data-name="Layer 2" id="Layer_2">
                                        <g data-name="E421, Back, buttons, multimedia, play, stop" id="E421_Back_buttons_multimedia_play_stop">
                                            <circle class="cls-1" cx="256" cy="256" r="246"></circle>
                                            <line class="cls-1" x1="352.26" x2="170.43" y1="256" y2="256"></line>
                                            <polyline class="cls-1" points="223.91 202.52 170.44 256 223.91 309.48"></polyline>
                                        </g>
                                    </g>
                                </g>
                            </svg>
                            Login
                        </a>
                        <button class="flex items-center py-2 px-4 text-sm uppercase rounded bg-white hover:bg-gray-100 text-indigo-500 border border-transparent hover:border-transparent hover:text-gray-700 shadow-md hover:shadow-lg font-medium transition transform hover:-translate-y-0.5">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 mr-3" viewBox="0 0 48 48">
                                <path fill="#fbc02d" d="M43.611 20.083H42V20H24v8h11.303c-1.649 4.657-6.08 8-11.303 8-6.627 0-12-5.373-12-12s5.373-12 12-12c3.059 0 5.842 1.154 7.961 3.039l5.657-5.657C34.046 6.053 29.268 4 24 4 12.955 4 4 12.955 4 24s8.955 20 20 20 20-8.955 20-20c0-1.341-.138-2.65-.389-3.917z" />
                                <path fill="#e53935" d="m6.306 14.691 6.571 4.819C14.655 15.108 18.961 12 24 12c3.059 0 5.842 1.154 7.961 3.039l5.657-5.657C34.046 6.053 29.268 4 24 4 16.318 4 9.656 8.337 6.306 14.691z" />
                                <path fill="#4caf50" d="M24 44c5.166 0 9.86-1.977 13.409-5.192l-6.19-5.238A11.91 11.91 0 0 1 24 36c-5.202 0-9.619-3.317-11.283-7.946l-6.522 5.025C9.505 39.556 16.227 44 24 44z" />
                                <path fill="#1565c0" d="M43.611 20.083 43.595 20H24v8h11.303a12.04 12.04 0 0 1-4.087 5.571l.003-.002 6.19 5.238C36.971 39.205 44 34 44 24c0-1.341-.138-2.65-.389-3.917z" />
                            </svg>
                            Google
                        </button>
                    </div>
                </div>
            </div>

            <div class="bg-dark rounded-b-lg py-12 px-4 lg:px-24">
                <p class="text-center text-sm text-gray-500 font-light"> Sign up with credentials </p>
                <form class="mt-6" action="" method="post">
                    <div class="relative">
                        <input class="appearance-none border pl-12 border-gray-100 shadow-sm focus:shadow-md focus:placeholder-gray-600  transition  rounded-md w-full py-3 text-gray-600 leading-tight focus:outline-none focus:ring-gray-600 focus:shadow-outline" name="username" id="username" type="text" placeholder="Username" />
                        <div class="absolute left-0 inset-y-0 flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 ml-3 text-gray-400 p-1" viewBox="0 0 20 20" fill="currentColor">
                                <path d="M10.394 2.08a1 1 0 00-.788 0l-7 3a1 1 0 000 1.84L5.25 8.051a.999.999 0 01.356-.257l4-1.714a1 1 0 11.788 1.838L7.667 9.088l1.94.831a1 1 0 00.787 0l7-3a1 1 0 000-1.838l-7-3zM3.31 9.397L5 10.12v4.102a8.969 8.969 0 00-1.05-.174 1 1 0 01-.89-.89 11.115 11.115 0 01.25-3.762zM9.3 16.573A9.026 9.026 0 007 14.935v-3.957l1.818.78a3 3 0 002.364 0l5.508-2.361a11.026 11.026 0 01.25 3.762 1 1 0 01-.89.89 8.968 8.968 0 00-5.35 2.524 1 1 0 01-1.4 0zM6 18a1 1 0 001-1v-2.065a8.935 8.935 0 00-2-.712V17a1 1 0 001 1z" />
                            </svg>
                        </div>
                    </div>
                    <div class="relative mt-3">
                        <input class="appearance-none border pl-12 border-gray-100 shadow-sm focus:shadow-md focus:placeholder-gray-600  transition  rounded-md w-full py-3 text-gray-600 leading-tight focus:outline-none focus:ring-gray-600 focus:shadow-outline" name="email" id="email" type="email" placeholder="Email" />
                        <div class="absolute left-0 inset-y-0 flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 ml-3 text-gray-400 p-1" viewBox="0 0 20 20" fill="currentColor">
                                <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z" />
                                <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z" />
                            </svg>
                        </div>
                    </div>
                    <div class="relative mt-3">
                        <input class="appearance-none border pl-12 border-gray-100 shadow-sm focus:shadow-md focus:placeholder-gray-600  transition 
                     rounded-md w-full py-3 text-gray-600 leading-tight focus:outline-none focus:ring-gray-600 focus:shadow-outline" name="password" id="password" type="password" placeholder="Password" />
                        <div class="absolute left-0 inset-y-0 flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 ml-3 text-gray-400 p-1" viewBox="0 0 20 20" fill="currentColor">
                                <path d="M10 2a5 5 0 00-5 5v2a2 2 0 00-2 2v5a2 2 0 002 2h10a2 2 0 002-2v-5a2 2 0 00-2-2H7V7a3 3 0 015.905-.75 1 1 0 001.937-.5A5.002 5.002 0 0010 2z" />
                            </svg>
                        </div>
                    </div>
                    <div class="relative mt-3">
                        <input class="appearance-none border pl-12 border-gray-100 shadow-sm focus:shadow-md focus:placeholder-gray-600  transition 
                     rounded-md w-full py-3 text-gray-600 leading-tight focus:outline-none focus:ring-gray-600 focus:shadow-outline" name="password2" id="password2" type="password" placeholder="Confirm Password" />
                        <div class="absolute left-0 inset-y-0 flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 ml-3 text-gray-400 p-1" viewBox="0 0 20 20" fill="currentColor">
                                <path d="M10 2a5 5 0 00-5 5v2a2 2 0 00-2 2v5a2 2 0 002 2h10a2 2 0 002-2v-5a2 2 0 00-2-2H7V7a3 3 0 015.905-.75 1 1 0 001.937-.5A5.002 5.002 0 0010 2z" />
                            </svg>
                        </div>
                    </div>

                    <p class="mt-4 italic text-gray-500 font-light text-xs">Password strength: <span class="font-bold text-green-400">strong</span></p>
                    <div class="mt-4 flex items-center text-gray-500"> <input type="checkbox" id="remember" name="remember" class="mr-2" /> <label class="text-sm" for="remember">I agree with the <a class="text-indigo-400 hover:text-indigo-500">Privacy Policy</a></p>
                    </div>
                    <div class="flex items-center justify-center mt-8">
                        <button type="submit" name="register" class="text-white py-2 px-4 uppercase rounded bg-indigo-500
                     hover:bg-indigo-600 shadow hover:shadow-lg font-medium transition transform hover:-translate-y-0.5">Create Account </button>
                    </div>
                </form>
            </div>
        </div>
    </div>




</body>

</html>