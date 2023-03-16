<!DOCTYPE html>
<html lang="en">

<head>
   {{-- App info --}}
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Speakr</title>
   {{-- Styles --}}
   @vite('resources/css/app.css')
   <link href="{{ asset('vendor/bladewind/css/animate.min.css') }}" rel="stylesheet" />
   <link href="{{ asset('vendor/bladewind/css/bladewind-ui.min.css') }}" rel="stylesheet" />
</head>

<body>
   {{-- Nav --}}
   <nav class="flex justify-between w-4/5 mx-auto bg-red">
      <div class="">
         Speakr.
      </div>
      <ul class="flex list-none gap-8">
         <x-bladewind::button
            type="primary" size="small">
            Posts
         </x-bladewind::button>
         <x-bladewind::button
            type="primary" size="small">
            Users
         </x-bladewind::button>
      </ul>
      <ul class="flex list-none gap-8">
         <x-bladewind::dropmenu>

            <x-slot name="trigger">
                <x-bladewind::button
                    type="secondary" size="small">
                    @svg('ri-account-circle-fill') My Account
                </x-bladewind::button>
            </x-slot>

            <x-bladewind::dropmenu-item>
                Settings
            </x-bladewind::dropmenu-item>
            <x-bladewind::dropmenu-item>
                My Posts
            </x-bladewind::dropmenu-item>
            <x-bladewind::dropmenu-item>
                Log Out
            </x-bladewind::dropmenu-item>
        </x-bladewind::dropmenu>
      </ul>
   </nav>

   {{-- Main --}}
   @yield('content')

   {{-- Scripts --}}
   <script src="{{ asset('vendor/bladewind/js/helpers.js') }}" type="text/javascript"></script>
</body>

</html>
