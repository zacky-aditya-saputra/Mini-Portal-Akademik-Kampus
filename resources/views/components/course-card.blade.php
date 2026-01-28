@props(['course'])

<div class="course-card bg-white rounded-xl shadow-sm border border-gray-200 overflow-hidden hover:shadow-md transition">
    <div class="p-5">
        <div class="flex justify-between items-center mb-3">
            <span class="bg-blue-100 text-blue-700 text-xs font-bold px-2.5 py-0.5 rounded uppercase">
                {{ $course->course_code }}
            </span>
            <span class="text-sm font-medium text-gray-500">{{ $course->sks }} SKS</span>
        </div>

        <h3 class="text-lg font-bold text-gray-900 mb-1 course-name">{{ $course->name }}</h3>
        <p class="text-sm text-gray-600 mb-4 italic">Dosen: {{ $course->lecturer }}</p>

        <p class="text-gray-600 text-sm line-clamp-2 mb-4">
            {{ $course->description }}
        </p>

        <div class="flex items-center justify-between mt-4 pt-4 border-t border-gray-100">
            <span class="text-xs font-semibold text-gray-400">{{ $course->category }}</span>
            <span class="text-[10px] text-gray-300 font-mono">ID: {{ substr($course->id, 0, 8) }}...</span>
        </div>
    </div>
</div>
