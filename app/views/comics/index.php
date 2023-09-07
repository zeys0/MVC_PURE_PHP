<!-- Section data comics -->

<section class="name-pixel pt-36 pb-32 bg-gradient-to-br from-slate-950 via-purple-950 to-slate-950 bg-opacity-90">
    <div class="container">
        <div class="w-full px-4">
            <div class="max-w-xl mx-auto text-center mb-16">
                <h4 class="font-semibold text-slate-300 mb-2 text-lg">Database</h4>
                <h2 class="name-pixel font-bold bg-gradient-to-r text-transparent bg-clip-text from-blue-500 to-purple-500 text-3xl mb-4">Data Comics</h2>
                <p class="font-medium text-md text-secondary">Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique, quas!</p>
            </div>

        </div>


        <div class="py-2 ">
            <?php Flasher::flash(); ?>
        </div>
        <div class="py-2 ">
            <a href="<?php echo BASEURL; ?>/Comics/formInsert" class="rounded-md font-bold bg-green-600 py-2 px-3 mhover:opacity-80">Tambah Data Comics</a>
        </div>
        <form action="<?php echo BASEURL; ?>/Comics/search" method="post">
            <div class="mb-3">
                <div class="relative mb-4 flex w-full flex-wrap items-stretch">

                    <input type="search" class="relative m-0 -mr-0.5 block w-[1px] min-w-0 flex-auto rounded-l border border-solid
                    border-slate-300 bg-transparent bg-clip-padding px-3 py-[0.25rem] text-base font-normal leading-[1.6]
                    text-slate-300 outline-none transition duration-200 ease-in-out focus:z-[3] focus:border-primary
                    focus:shadow-[inset_0_0_0_1px_rgb(59,113,202)] focus:outline-none
                    dark:border-neutral-600-200 dark:placeholder:text-neutral-200
                    dark:focus:border-primary" id="keyword" name="keyword" placeholder="Search data comics" aria-label="Search" autocomplete="off" aria-describedby="button-addon1" />

                    <button class="relative z-[2] flex items-center rounded-r bg-blue-600 px-6 py-2.5 text-xs font-medium uppercase leading-tight
                    text-white shadow-md transition duration-150 ease-in-out hover:bg-primary-700 hover:shadow-lg focus:bg-primary-700 focus:shadow-lg 
                    focus:outline-none focus:ring-0 active:bg-primary-800 active:shadow-lg" type="submit" id="tombolCari" data-te-ripple-init data-te-ripple-color="light">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="h-5 w-5">
                            <path fill-rule="evenodd" d="M9 3.5a5.5 5.5 0 100 11 5.5 5.5 0 000-11zM2 9a7 7 0 1112.452 4.391l3.328 3.329a.75.75 0 11-1.06 1.06l-3.329-3.328A7 7 0 012 9z" clip-rule="evenodd" />
                        </svg>
                    </button>

                </div>
            </div>
        </form>
        <table class="w-full divide-y table-fixed  text-center mt-2">
            <thead class="bg-transparent">
                <tr>

                    <th scope="col" class="py-3 px-6 text-xs font-medium tracking-wider  text-slate-400 uppercase dark:text-gray-400">
                        No
                    </th>
                    <th scope="col" class="py-3 px-6 text-xs font-medium tracking-wider  text-slate-400 uppercase dark:text-gray-400">
                        COVER
                    </th>
                    <th scope="col" class="py-3 px-6 text-xs font-medium tracking-wider  text-slate-400 uppercase dark:text-gray-400">
                        JUDUL
                    </th>
                    <th scope="col" class="py-3 px-6 text-xs font-medium tracking-wider  text-slate-400 uppercase dark:text-gray-400">
                        <button>ACTION</button>
                    </th>
                </tr>
            </thead>
            <?php $i = 1; ?>
            <?php foreach ($data['comics'] as $a) : ?>
                <tbody class="bg-transparent ">
                    <tr>
                        <td class="py-4 px-6 text-sm font-medium text-slate-400 whitespace-nowrap dark:text-white"><?php echo $i++; ?></td>
                        <td class="py-4 px-6 text-sm font-medium text-slate-400 whitespace-nowrap dark:text-white"><img src="img/<?php echo $a['sampul']; ?>" width="150" alt="<?php echo $a['judul']; ?>" class="rounded-md img-center"></td>
                        <td class="py-4 px-6 text-sm font-medium text-slate-400 whitespace-nowrap dark:text-white"><?php echo $a['judul']; ?></td>
                        <td class="py-4 px-6 text-sm font-medium whitespace-nowrap dark:text-white">
                            <a href="<?php echo BASEURL; ?>/Comics/detail/<?php echo $a['id']; ?>" class="text-sm bg-green-600 text-slate-950 font-medium 
                            rounded-md py-1 px-1 hover:opacity-80">Detail</a>
                            <a href="<?php echo BASEURL; ?>/Comics/delete/<?php echo $a['id']; ?>" class="text-sm bg-red-600 text-slate-950 font-medium 
                            rounded-md py-1 px-1 hover:opacity-80" onclick="return confirm('Apakah anda yakin ingin mengahapus?');">Delete</a>
                        </td>




                    </tr>
                </tbody>
            <?php endforeach; ?>
        </table>
    </div>

</section>

<!-- End data comics  -->