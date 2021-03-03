<x-template-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
    <div class="w-full mt-12">
                    <p class="text-xl pb-3 flex items-center">
                        <i class="fas fa-list mr-3"></i> Data Mahasiswa
                    </p>
                    <div class="bg-white overflow-auto">
                        <table class="min-w-full bg-white">
                            <thead class="bg-gray-800 text-white">
                                <tr>
                                    <th class="w-1/3 text-left py-3 px-4 uppercase font-semibold text-sm">Nama</th>
                                    <th class="w-1/3 text-left py-3 px-4 uppercase font-semibold text-sm">NIM</th>
                                    <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Alamat</th>
                                    <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Email</th>
                                </tr>
                            </thead>
                            <tbody class="text-gray-700">
                                <tr>
                                    <td class="w-1/3 text-left py-3 px-4">Putu Andi Suartika</td>
                                    <td class="w-1/3 text-left py-3 px-4">1905021001</td>
                                    <td class="text-left py-3 px-4">Singaraja</td>
                                    <td class="text-left py-3 px-4">andisuartika@mail.com</td>
                                </tr>
                                <tr class="bg-gray-200">
                                    <td class="w-1/3 text-left py-3 px-4">Galang Wijaya</td>
                                    <td class="w-1/3 text-left py-3 px-4">1905021002</td>
                                    <td class="text-left py-3 px-4">Singaraja</td>
                                    <td class="text-left py-3 px-4">galangwijaya@mail.com</td>
                                </tr>
                                <tr class="text-gray-700">
                                    <td class="w-1/3 text-left py-3 px-4">Maha Yasa</td>
                                    <td class="w-1/3 text-left py-3 px-4">1905021012</td>
                                    <td class="text-left py-3 px-4">Singaraja</td>
                                    <td class="text-left py-3 px-4">mahayasa@mail.com</td>
                                </tr>
                                <tr class="bg-gray-200">
                                    <td class="w-1/3 text-left py-3 px-4">Ananta Yoga</td>
                                    <td class="w-1/3 text-left py-3 px-4">1905021021</td>
                                    <td class="text-left py-3 px-4">Singaraja</td>
                                    <td class="text-left py-3 px-4">anantayoga@mail.com</td>
                                </tr>
                                <tr class="text-gray-700">
                                    <td class="w-1/3 text-left py-3 px-4">Trisna Sari</td>
                                    <td class="w-1/3 text-left py-3 px-4">1905021013</td>
                                    <td class="text-left py-3 px-4">Singaraja</td>
                                    <td class="text-left py-3 px-4">trisnasari@mail.com</td>
                                </tr>
                                <tr class="bg-gray-200">
                                    <td class="w-1/3 text-left py-3 px-4">Angga Wahyu</td>
                                    <td class="w-1/3 text-left py-3 px-4">1905021007</td>
                                    <td class="text-left py-3 px-4">Singaraja</td>
                                    <td class="text-left py-3 px-4">anggawahyu@mail.com</td>
                                </tr>
                                <tr class="text-gray-700">
                                    <td class="w-1/3 text-left py-3 px-4">Aditya Permadi</td>
                                    <td class="w-1/3 text-left py-3 px-4">1905021008</td>
                                    <td class="text-left py-3 px-4">Singaraja</td>
                                    <td class="text-left py-3 px-4">adityapermadi@mail.com</td>
                                </tr>
                                <tr class="bg-gray-200">
                                    <td class="w-1/3 text-left py-3 px-4">Rama Sanjaya</td>
                                    <td class="w-1/3 text-left py-3 px-4">1905021010</td>
                                    <td class="text-left py-3 px-4">Singaraja</td>
                                    <td class="text-left py-3 px-4">ramasanjaya@mail.com</td>
                                </tr>
                                <tr class="text-gray-700">
                                    <td class="w-1/3 text-left py-3 px-4">Abimanyu</td>
                                    <td class="w-1/3 text-left py-3 px-4">1905021009</td>
                                    <td class="text-left py-3 px-4">Singaraja</td>
                                    <td class="text-left py-3 px-4">abimanyu@mail.com</td>
                                </tr>
                                <tr class="bg-gray-200">
                                    <td class="w-1/3 text-left py-3 px-4">Titi Risty</td>
                                    <td class="w-1/3 text-left py-3 px-4">1905021004</td>
                                    <td class="text-left py-3 px-4">Singaraja</td>
                                    <td class="text-left py-3 px-4">titiristy@mail.com</td>
                                </tr>
                                <tr class="text-gray-700">
                                    <td class="w-1/3 text-left py-3 px-4">Putu Andika</td>
                                    <td class="w-1/3 text-left py-3 px-4">1905021015</td>
                                    <td class="text-left py-3 px-4">Singaraja</td>
                                    <td class="text-left py-3 px-4">andika@mail.com</td>
                                </tr>
                                
                            </tbody>
                        </table>
                    </div>
                </div>
    </div>
</x-template-layout>
