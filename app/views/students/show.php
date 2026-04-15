<div class="mt-8 space-y-4">
    <!-- Card Header Start -->
    <div class="bg-white shadow p-4 rounded-lg">
        <h1 class="font-bold text-2xl">Detail Siswa</h1>
        <p>Menampilkan detail siswa yang terdaftar</p>
    </div>
    <!-- Card Header End -->
    <!-- Card Content Start -->
    <div class="bg-white rounded-lg shadow">
        <div class="p-4 grid grid-cols-2 gap-4">
            <div class="space-y-2">
                <label class="font-bold block" for="name">Nama</label>
                <input value="<?= $student['name'] ?>" class="px-4 py-2 border rounded-lg w-full" type="text" id="name" name="name"
                    placeholder="Masukkan nama" readonly>
            </div>
            <div class="space-y-2">
                <label class="font-bold block" for="nis">NIS</label>
                <input value="<?= $student['nis'] ?>" class="px-4 py-2 border rounded-lg w-full" type="text" id="nis" name="nis"
                    placeholder="Masukkan NIS" readonly>
            </div>
            <div class="space-y-2">
                <label class="font-bold block" for="kelas">Kelas</label>
                <input value="<?= $student['class'] ?>" class="px-4 py-2 border rounded-lg w-full" type="text" id="kelas" name="kelas"
                    placeholder="Masukkan kelas" readonly>
            </div>
            <div class="space-y-2">
                <label class="font-bold block" for="phone_number">Nomor Telepon</label>
                <input value="<?= $student['phone_number'] ?>" class="px-4 py-2 border rounded-lg w-full" type="text" id="phone_number" name="phone_number"
                    placeholder="Masukkan nomor telepon" readonly>
            </div>
            <div class="flex justify-end gap-4 col-span-2">
                <a href="/students" class="px-4 py-2 rounded-lg bg-gray-100">Kembali</a>
            </div>
        </div>
    </div>
    <!-- Card Content End -->