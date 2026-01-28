<x-layouts.app-layout>
    <x-slot:title>Daftar Mata Kuliah</x-slot>

    <div class="mb-8">
        <h2 class="text-3xl font-extrabold text-gray-900 mb-6">Manajemen Mata Kuliah</h2>

        {{-- Search Bar --}}
        <div class="relative max-w-lg">
            <input type="text" id="searchInput" placeholder="Cari mata kuliah atau dosen..."
                class="w-full pl-4 pr-10 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-blue-500 outline-none">
        </div>
    </div>

    {{-- Grid View --}}
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6" id="courseList">
        @forelse($courses as $course)
            <x-course-card :course="$course" />
        @empty
            <p class="col-span-full text-center text-gray-500 py-10">Belum ada data mata kuliah.</p>
        @endforelse
    </div>

    {{-- Script Interaktif tetap ditaruh di sini atau di app.js --}}
    <script>
        const searchInput = document.getElementById('searchInput');
        const courseList = document.getElementById('courseList');

        searchInput.addEventListener('input', function() {
            const keyword = this.value;

            fetch(`{{ url('/api/courses/search') }}?q=${keyword}`, {
                    headers: {'Accept': 'application/json'}
                })
                .then(response => response.json())
                .then(data => {
                    courseList.innerHTML = '';

                    if (data.length > 0) {
                        data.forEach(course => {
                            // Gunakan struktur HTML yang sama dengan Blade Component CourseCard
                            courseList.innerHTML += `
                        <div class="course-card bg-white rounded-xl shadow-sm border border-gray-200 overflow-hidden hover:shadow-md transition">
                            <div class="p-5">
                                <div class="flex justify-between items-center mb-3">
                                    <span class="bg-blue-100 text-blue-700 text-xs font-bold px-2.5 py-0.5 rounded uppercase">
                                        ${course.course_code}
                                    </span>
                                    <span class="text-sm font-medium text-gray-500">${course.sks} SKS</span>
                                </div>
                                
                                <h3 class="text-lg font-bold text-gray-900 mb-1 course-name">${course.name}</h3>
                                <p class="text-sm text-gray-600 mb-4 italic">Dosen: ${course.lecturer}</p>
                                
                                <p class="text-gray-600 text-sm line-clamp-2 mb-4">
                                    ${course.description}
                                </p>

                                <div class="flex items-center justify-between mt-4 pt-4 border-t border-gray-100">
                                    <span class="text-xs font-semibold text-gray-400">${course.category}</span>
                                    <span class="text-[10px] text-gray-300 font-mono">ID: ${course.id.substring(0, 8)}...</span>
                                </div>
                            </div>
                        </div>
                    `;
                        });
                    } else {
                        courseList.innerHTML =
                            '<p class="col-span-full text-center text-gray-500 py-10">Data tidak ditemukan.</p>';
                    }
                });
        });
    </script>
</x-layouts.app-layout>
