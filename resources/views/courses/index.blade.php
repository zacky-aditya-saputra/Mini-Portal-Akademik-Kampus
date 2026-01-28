<x-layouts.app-layout>
    <x-slot:title>Daftar Mata Kuliah</x-slot>

    <div class="mb-8">
        <h2 class="text-3xl font-extrabold text-gray-900 mb-6">Manajemen Mata Kuliah</h2>
        
        {{-- Search Bar --}}
        <div class="relative max-w-lg">
            <input type="text" id="searchInput" 
                placeholder="Cari mata kuliah atau dosen..." 
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
        document.getElementById('searchInput').addEventListener('input', function(e) {
            const keyword = e.target.value.toLowerCase();
            const cards = document.querySelectorAll('.course-card');
            
            cards.forEach(card => {
                const text = card.innerText.toLowerCase();
                card.style.display = text.includes(keyword) ? 'block' : 'none';
            });
        });
    </script>
</x-layouts.app-layout>