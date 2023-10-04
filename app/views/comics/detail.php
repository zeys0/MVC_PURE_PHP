<!-- Section Contact -->

<section class="pt-36 pb-32  bg-gray-950">
    <div class="container">

        <div class="min-h-screen grid place-items-center font-mono bg-gray-900">

            <h2 class="font-bold text-slate-300 text-3xl -mb-32">Detail Comics</h2>

            <div class="rounded-md bg-gray-800 shadow-lg">
                <div class="md:flex px-4 leading-none max-w-4xl">
                    <div class="flex-none ">
                        <img src="<?php echo BASEURL; ?>/img/<?php echo $data['comics']['sampul']; ?>" alt="<?php echo $data['comics']['sampul']; ?>" class="h-72 w-56 rounded-md  transform -translate-y-4 border-4 border-gray-300 shadow-lg" />
                    </div>

                    <div class="flex-col text-gray-300">

                        <p class="pt-4 text-2xl m-2 font-bold"><?php echo $data['comics']['judul']; ?>|<?php echo $data['comics']['penulis']; ?> </p>
                        <hr class="hr-text" data-content="">
                        <h4 class="text-base font-semibold m-2 ">Penerbit : <?php echo $data['comics']['penerbit']; ?></h4>
                        <div class="text-md flex justify-between px-4 my-2">
                            <span class="font-bold"><?php echo $data['comics']['kategori']; ?></span>
                            <span class="font-bold"></span>
                        </div>
                        <p class="hidden md:block px-4 my-4 text-sm text-justify"><?php echo $data['comics']['sinopsis']; ?></p>
                        <div class="text-xs">
                            <a href="<?php echo BASEURL; ?>/Comics" class="border border-gray-400 text-gray-400 rounded-md px-4 py-2 m-2 transition duration-500 ease select-none hover:bg-gray-900 focus:outline-none focus:shadow-outline">Back</a>

                            <a href="" class="border border-gray-400 text-gray-400 rounded-md px-4 py-2 m-2 transition duration-500 ease select-none hover:bg-gray-900 focus:outline-none focus:shadow-outline">Update</a>
                            <button type="button" class="border border-gray-400 text-gray-400 rounded-md px-4 py-2 m-2 transition duration-500 ease select-none hover:bg-gray-900 focus:outline-none focus:shadow-outline">Delete</button>

                        </div>
                    </div>
                </div>

            </div>
        </div>

    </div>
</section>

<!-- End Section contact  -->