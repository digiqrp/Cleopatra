<x-app-layout>
    <div class="h-screen flex flex-row flex-wrap">
        <x-side-bar></x-side-bar>
        <!-- Start Content -->
        <div class="bg-gray-100 flex-1 p-6 md:mt-16">
            <x-general-report></x-general-report>
            <x-analytics></x-analytics>
            <x-sales></x-sales>
            <x-numbers></x-numbers>
            <x-quick-info></x-quick-info>
        </div>
        <!-- end content -->
    </div>
</x-app-layout>
