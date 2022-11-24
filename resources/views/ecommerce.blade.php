<x-app-layout>
    <div class="h-screen flex flex-row flex-wrap">
        <x-side-bar></x-side-bar>
        <!-- Start Content -->
        <div class="bg-gray-100 flex-1 p-6 md:mt-16">
            <x-congrats></x-congrats>
            <x-summary></x-summary>
            <x-status></x-status>
            <x-best-seller></x-best-seller>
            <x-recent-orders></x-recent-orders>
        </div>
        <!-- end content -->
    </div>
</x-app-layout>


