<x-app-layout>
    <div class="h-screen flex flex-row flex-wrap">
        <x-side-bar></x-side-bar>
        <!-- Start Content -->
        <div class="bg-gray-100 flex-1 p-6 md:mt-16">
            <h1 class="h5">Typography</h1>
            <p class="mt-3">Documentation and examples for typography, including global settings, headings, body text, lists, and more.</p>
            <p>you can check the style at <span class="badge badge-primary">src/apply/_badge.sass</span></p>
            <hr class="my-5">

            <p class="mb-4">you can loop throw class h1 to h6 and use them on any HTML element</p>


            <div class="card">
                <div class="card-body">
                    <h1 class="h1">h1 Cleopatra heading</h1>
                    <h1 class="h2">h2 Cleopatra heading</h1>
                    <h1 class="h3">h3 Cleopatra heading</h1>
                    <h1 class="h4">h4 Cleopatra heading</h1>
                    <h1 class="h5">h5 Cleopatra heading</h1>
                    <h1 class="h6">h6 Cleopatra heading</h1>
                </div>
                <div class="card-footer">
                    <script type="text/plain" class="language-markup">
            <h1 class="h1">h1 Cleopatra heading</h1>
            <h1 class="h2">h2 Cleopatra heading</h1>
            <h1 class="h3">h3 Cleopatra heading</h1>
            <h1 class="h4">h4 Cleopatra heading</h1>
            <h1 class="h5">h5 Cleopatra heading</h1>
            <h1 class="h6">h6 Cleopatra heading</h1>
        </script>
                </div>
            </div>


            <div class="card mt-5">
                <div class="card-body">
                    <p class="h1">h1. Cleopatra heading</p>
                    <p class="h2">h2. Cleopatra heading</p>
                    <p class="h3">h3. Cleopatra heading</p>
                    <p class="h4">h4. Cleopatra heading</p>
                    <p class="h5">h5. Cleopatra heading</p>
                    <p class="h6">h6. Cleopatra heading</p>
                </div>
                <div class="card-footer">
                    <script type="text/plain" class="language-markup">
                        <p class="h1">h1. Cleopatra heading</p>
                        <p class="h2">h2. Cleopatra heading</p>
                        <p class="h3">h3. Cleopatra heading</p>
                        <p class="h4">h4. Cleopatra heading</p>
                        <p class="h5">h5. Cleopatra heading</p>
                        <p class="h6">h6. Cleopatra heading</p>
                    </script>
                </div>
            </div>
        </div>
        <!-- end content -->
    </div>
</x-app-layout>
