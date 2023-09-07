<section id="contact" class="pt-36 pb-32 bg-gradient-to-br from-slate-950 via-purple-950 to-slate-950 bg-opacity-90">
    <div class="container">

        <img src="../public/img/loading.png" alt="halo" width="500" class="absolute right-0 -z-1" />
        <div class="w-full px-4 relative">
            <div class="max-w-xl mx-auto text-center mb-16">
                <h4 class="font-semibold text-slate-300 mb-2 text-lg">Contact</h4>
                <h2 class="name-pixel font-bold bg-gradient-to-r text-transparent bg-clip-text from-blue-500 to-purple-500 text-3xl mb-4">Hubungi Saya</h2>
                <p class="font-medium text-md text-secondary">Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique, quas!</p>
            </div>
        </div>

        <form action="<?php echo BASEURL; ?>/Contact/pesan" method="post" class="relative z-10">
            <div class="w-full lg:w-2/3 lg:mx-auto">
                <div class="w-full px-4 mb-8">
                    <?php FlasherContact::flash(); ?>
                </div>

                <div class="w-full px-4 mb-8">
                    <label for="nama" class="font-bold text-base text-slate-300">Nama</label>
                    <input type="text" name="nama" id="nama" class="w-full bg-slate-200 text-dark p-3 
                        rounded-md focus:outline-none focus:ring-slate-300 focus:ring-1 focus:border-slate-300" />
                </div>
                <div class="w-full px-4 mb-8">
                    <label for="email" class="font-bold text-base text-slate-300">Email</label>
                    <input type="email" name="email" id="email" class="w-full bg-slate-200 text-dark p-3 
                        rounded-md focus:outline-none focus:ring-slate-300 focus:ring-1 focus:border-slate-300" />
                </div>
                <div class="w-full px-4 mb-8">
                    <label for="pesan" class="font-bold text-base text-slate-300">Pesan</label>
                    <textarea type="text" name="pesan" id="pesan" class="w-full bg-slate-200 text-dark p-3 
                        rounded-md focus:outline-none focus:ring-slate-300 focus:ring-1 focus:border-slate-300 h-32">
                    </textarea>
                </div>
                <div class="w-full px-4">
                    <button type="submit" class="text-base py-3 px-8 rounded-md w-full bg-gradient-to-br from-purple-900 via-pink-900 to-red-700 text-white hover:opacity-80 ">Kirim</button>
                </div>
            </div>
        </form>
    </div>
</section>