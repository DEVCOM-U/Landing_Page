<x-layout.app>
    <main class="xl:w-[1440px] flex flex-col bg-[#fafafa] ">
        <x-project-card image="img/kuda.jpg" title="Project Pertama"
            description="Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae sed doloribus dolore, illo est consectetur ipsa saepe minus deserunt deleniti. Perspiciatis enim voluptatum suscipit tempora eos? Temporibus consectetur expedita minus! Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut laboriosam perspiciatis officia sunt dolore! Mollitia, totam libero. Tempore commodi sint ut, cupiditate in, tempora, nesciunt recusandae vitae quia quae earum."
            :profiles="[['alt' => 'Firza Ketoprak'], ['alt' => 'Firza Kebab'], ['alt' => 'Firza Wangsaf']]" link="https://linkedin.com/in/firzahakim" />

        <x-project-card
            image="https://images.unsplash.com/photo-1523240795612-9a054b0db644?auto=format&fit=crop&w=1471&q=80"
            title="Project Kedua"
            description=" Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe eligendi, non odio iure nostrum labore sapiente deserunt ullam modi earum ipsum voluptas accusantium et nobis! Modi asperiores incidunt ipsum enim!"
            :profiles="[
                ['alt' => 'Firza katanya mirip jepri nikol'],
                ['alt' => 'Firza juga'],
                ['alt' => 'Masih firza'],
            ]" link="https://youtube.com" />

        <x-project-card image="img/gedung.png" title="Project Kedua"
            description=" Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe eligendi, non odio iure nostrum labore sapiente deserunt ullam modi earum ipsum voluptas accusantium et nobis! Modi asperiores incidunt ipsum enim!"
            :profiles="[
                ['alt' => 'Firza katanya mirip jepri nikol'],
                ['alt' => 'Firza juga'],
                ['alt' => 'Masih firza'],
            ]" link="https://youtube.com" />

        <x-project-card image="img/pohon.png" title="Project Kedua"
            description=" Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe eligendi, non odio iure nostrum labore sapiente deserunt ullam modi earum ipsum voluptas accusantium et nobis! Modi asperiores incidunt ipsum enim!"
            :profiles="[
                ['alt' => 'Firza katanya mirip jepri nikol'],
                ['alt' => 'Firza juga'],
                ['alt' => 'Masih firza'],
            ]" link="https://youtube.com" />
    </main>
</x-layout.app>
