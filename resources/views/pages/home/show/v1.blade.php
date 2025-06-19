<x-html>
    <x-header.v1 />
    <x-main.v1>
        <x-section.v1>
            <x-slot name="title">
                Competências
            </x-slot>
            <x-slot name="content">
                <x-competence.container.v1>
                    <x-slot name="title">
                        UX & UI Design
                    </x-slot>
                    <x-slot name="content">
                        <x-competence.h-scroll.v1>
                            <x-competence.item.v1>
                                <x-slot name="icon">
                                    <i class="fa-brands fa-figma text-[3rem] lg:text-[6rem]" aria-hidden="true"></i>
                                </x-slot>
                                <x-slot name="title">
                                    Figma
                                </x-slot>
                            </x-competence.item.v1>
                        </x-competence.h-scroll.v1>
                    </x-slot>
                </x-competence.container.v1>
            </x-slot>
        </x-section.v1>
    </x-main.v1>
</x-html>
