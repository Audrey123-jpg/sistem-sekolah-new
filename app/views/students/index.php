<div class="mt-8 space-y-4">
    <!-- Card Header Start -->
    <div class="bg-white shadow p-4 rounded-lg">
        <h1 class="font-bold text-2xl">Daftar Siswa</h1>
        <p>Menampilkan daftar siswa yang terdaftar</p>
    </div>
    <!-- Card Header End -->
    <!-- Card Content Start -->
    <div class="bg-white rounded-lg shadow">
        <table class="w-full">
            <thead class="bg-gray-200">
                <tr>
                    <th class="px-4 py-2 text-left">No</th>
                    <th class="px-4 py-2 text-left">Nama</th>
                    <th class="px-4 py-2 text-left">Kelas</th>
                    <th class="px-4 py-2 text-left">NIS</th>
                    <th class="px-4 py-2 text-left">No Telepon</th>
                    <th class="px-4 py-2">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($students as $index => $student): ?>
                    <tr>
                    <td class="px-4 py-2 text-left">
                        <?= $index + 1?>
                    </td>
                    <td class="px-4 py-2 text-left">
                        <?= $student['name']?>
                    </td>
                    <td class="px-4 py-2 text-left">
                        <?= $student['class']?>
                    </td>
                    <td class="px-4 py-2 text-left">
                        <?= $student['nis']?>
                    </td>
                    <td class="px-4 py-2 text-left">
                        <?= $student['phone_number']?>
                    </td>
                    <td class="px-4 py-2">
                        <div class="flex justify-center items-center gap-4">
                            <a href="/students/<?= $student['id']?>" class="text-green-500">Detail</a>
                            <a href="/students/<?= $student['id']?>/edit" class="text-yellow-500">Edit</a>
                            <form action="/students/<?= $student['id']?>" method="POST" onsubmit="return confirm('Apakah Anda yakin ingin menghapus data siswa ini?')">
                                <input type="hidden" name="_method" value="DELETE">
                                <button type="submit" class="text-red-500">Hapus</button>
                            </form>
                        </div>
                    </td>
                </tr>
                <?php endforeach?>
                
            </tbody>
        </table>
    </div>
    <!-- Card Content End -->
</div>