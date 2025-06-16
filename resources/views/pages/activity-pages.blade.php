<x-layout.app>
    @foreach ($activities as $slug => $activity)
        <x-activity-card 
            :image="$activity['image']" 
            :title="$activity['title']"
            :description="$activity['short_description']"
            :link="route('activity.detail', ['slug' => $slug])" 
        />
    @endforeach
</x-layout.app>
