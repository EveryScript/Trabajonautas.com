<section class="grid grid-cols-4 gap-2">
    @forelse ($companies as $company)
        <article class="bg-gray-900 p-4 rounded-md">
            <h5 class="text-xl font-bold text-pink-600">{{ $company->company_name }}</h5>
            <span class="text-gray-400">{{ $company->company_type }}</span>
            <p class="text-sm">{{ $company->description }}</p>
        </article>
    @empty
        <span class="text-gray-500">No data from Companies</span>
    @endforelse
</section>
