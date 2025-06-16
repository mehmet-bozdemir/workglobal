<x-layout>
  <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-6">
    @forelse($jobs as $job)
      <x-job-card :job="$job" />
      {{-- <div>
        <a href="{{ route('jobs.show', $job->id) }}">
          <i class="fa fa-briefcase mr-2"></i>
          {{ $job->title }}-{{ $job->description }}
        </a>
      </div> --}}
    @empty
      <p>No jobs available</p>
    @endforelse
  </div>
  <a href="{{ route('jobs.index') }}" class="block text-xl text-center">
    <i class="fa fa-arrow-alt-circle-right"></i> Show All Jobs
  </a>

  <x-bottom-banner />
</x-layout>
