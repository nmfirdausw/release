<?php

use function Laravel\Folio\name;
use function Livewire\Volt\{state};

?>

<x-layout.app title="Tailwind">
    @volt
        <div class="w-40 h-40 bg-red-500">
            Tailwind
        </div>
    @endvolt
</x-layout.app>
