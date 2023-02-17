<x-dropdown>
    <x-slot name="trigger">
        <button class="py-2 pl-3 text-sm font-semibold w-full lg:w-32 text-left flex lg:inline-flex">
            {{ isset($currentCategory) ? ucwords($currentCategory->name) : 'Categories' }}

            <x-down-arrow class="absolute pointer-events-none" style="right: 12px;"/>
        </button>
    </x-slot>

    <x-dropdown-item href="/">All</x-dropdown-item>

    @foreach($categories as $category)
        <x-dropdown-item href="/?category={{ $category->slug }}"
                         :active='request()->is("categories/{$category->slug}")'
        >
            {{ ucwords($category->name) }}
        </x-dropdown-item>
    @endforeach

</x-dropdown>