<x-layout.app>
    @foreach ($projects as $slug => $project)
        <x-project-card 
            :image="$project['image']" 
            :title="$project['title']"
            :description="$project['short_description']"
            :profiles="$project['profiles']"
            :link="route('project.detail', ['slug' => $slug])" 
        />
    @endforeach
</x-layout.app>