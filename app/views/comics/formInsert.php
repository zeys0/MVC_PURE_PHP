<!-- component -->
<section class="pt-36 pb-32 bg-gradient-to-br  from-slate-950 via-purple-950 to-slate-950 bg-opacity-90">
    <div class="container">
        <a href="<?php echo BASEURL; ?>/comics" class="rounded-md font-bold mx-40 bg-green-600 py-2 px-3 hover:opacity-80">Kembali</a>

        <div class="max-w-4xl p-6 mx-auto bg-indigo-600 rounded-md shadow-md mt-2 ">

            <h1 class="text-xl font-bold text-center text-dark mb-20 capitalize">Tambah Data Comics</h1>
            <form action="<?php echo BASEURL; ?>/Comics/insert" method="post">
                <div class="grid grid-cols-1 gap-6 mt-4 sm:grid-cols-2">
                    <div>
                        <label class="text-white dark:text-gray-200" for="judul">Judul</label>
                        <input id="judul" name="judul" type="text" class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-slate-300 dark:text-dark dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">
                    </div>

                    <div>
                        <label class="text-white dark:text-gray-200" for="penulis">Penulis</label>
                        <input id="penulis" name="penulis" type="text" class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-slate-300 dark:text-dark dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">
                    </div>

                    <div>
                        <label class="text-white dark:text-gray-200" for="penerbit">Penerbit</label>
                        <input id="penerbit" type="text" name="penerbit" class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-slate-300 dark:text-dark dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">
                    </div>

                    <div>
                        <label class="text-white dark:text-gray-200" for="kategori">Kategori</label>
                        <input id="kategori" name="kategori" type="text" class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-slate-300 dark:text-dark dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">
                    </div>

                    <div>
                        <label class="text-white dark:text-gray-200" for="sinopsis">Sinopsis</label>
                        <textarea id="sinopsis" name="sinopsis" type="textarea" class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-slate-300 dark:text-dark dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring"></textarea>
                    </div>
                    <div>
                        <label class="text-white dark:text-gray-200" for="images">Sampul</label>
                        <textarea id="images" name="images" type="textarea" class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-slate-300 dark:text-dark dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring"></textarea>
                    </div>
                    <!-- <div>
                        <label class="block text-sm font-medium text-white">
                            Image
                        </label>
                        <div class="mt-1 flex justify-center px-6 pt-5 pb-6 border-2 border-gray-300 border-dashed rounded-md">
                            <div class="space-y-1 text-center">
                                <svg class="mx-auto h-12 w-12 text-white" stroke="currentColor" fill="none" viewBox="0 0 48 48" aria-hidden="true">
                                    <path d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                                <div class="flex text-sm text-gray-600">
                                    <label for="images" class="relative cursor-pointer bg-white rounded-md font-medium text-indigo-600 hover:text-indigo-500 focus-within:outline-none focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-indigo-500">
                                        <span class="">Upload a file</span>
                                        <input id="images" name="images" type="file" class="sr-only">
                                    </label>
                                    <p class="pl-1 text-white">or drag and drop</p>
                                </div>
                                <p class="text-xs text-white">
                                    PNG, JPG, GIF up to 10MB
                                </p>
                            </div>
                        </div>
                    </div> -->
                </div>

                <div class="flex justify-end mt-6">
                    <button type="submit" class="px-6 py-2 leading-5 text-white transition-colors duration-200 transform bg-pink-500 rounded-md hover:bg-pink-700 focus:outline-none focus:bg-gray-600">Tambah Data</button>
                </div>
            </form>
        </div>
    </div>
</section>