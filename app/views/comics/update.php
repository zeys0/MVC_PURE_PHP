<!-- component -->
<section class="pt-36 pb-32 bg-gradient-to-br  from-slate-950 via-purple-950 to-slate-950 bg-opacity-90">
    <div class="container">
        <a href="<?php echo BASEURL; ?>/Comics/detail/<?php echo $data['comics']['id']; ?>" class="rounded-md font-bold mx-40 bg-green-600 py-2 px-3 hover:opacity-80">Kembali</a>

        <div class="max-w-4xl p-6 mx-auto bg-indigo-600 rounded-md shadow-md mt-2 ">

            <h1 class="text-xl font-bold text-center text-dark mb-20 capitalize">Update Data Comics</h1>
            <form action="<?php echo BASEURL; ?>/Comics/update" method="post">
                <div class="grid grid-cols-1 gap-6 mt-4 sm:grid-cols-2">
                    <div>
                        <input id="judul" name="id" type="hidden" value="<?php echo $data['comics']['id']; ?>" class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-slate-300 dark:text-dark dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">
                        <label class="text-white dark:text-gray-200" for="newjudul">Judul</label>
                        <input id="judul" name="newjudul" type="text" value="<?php echo $data['comics']['judul']; ?>" class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-slate-300 dark:text-dark dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">
                    </div>


                    <div>
                        <label class="text-white dark:text-gray-200" for="newpenulis">Penulis</label>
                        <input id="penulis" name="newpenulis" value="<?php echo $data['comics']['penulis']; ?>" type="text" class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-slate-300 dark:text-dark dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">
                    </div>

                    <div>
                        <label class="text-white dark:text-gray-200" for="newpenerbit">Penerbit</label>
                        <input id="penerbit" type="newtext" name="penerbit" value="<?php echo $data['comics']['penerbit']; ?>" class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-slate-300 dark:text-dark dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">
                    </div>

                    <div>
                        <label class="text-white dark:text-gray-200" for="newkategori">Kategori</label>
                        <input id="kategori" name="newkategori" type="text" value="<?php echo $data['comics']['kategori']; ?>" class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-slate-300 dark:text-dark dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">
                    </div>

                    <div>
                        <label class="text-white dark:text-gray-200" for="newsinopsis">Sinopsis</label>
                        <textarea id="sinopsis" name="newsinopsis" value="<?php echo $data['comics']['sinopsis']; ?>" type="textarea" class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-slate-300 dark:text-dark dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring"></textarea>
                    </div>
                </div>

                <div class="flex justify-end mt-6">
                    <button type="submit" class="px-6 py-2 leading-5 text-white transition-colors duration-200 transform bg-pink-500 rounded-md hover:bg-pink-700 focus:outline-none focus:bg-gray-600">Tambah Data</button>
                </div>
            </form>
        </div>
    </div>
</section>