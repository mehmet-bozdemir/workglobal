<x-layout>
  <div class="bg-white mx-auto p-8 rounded-lg shadow-md w-full md:max-w-3xl">
  <form method="POST" action="{{ route('jobs.store') }}" enctype="multipart/form-data">
    @csrf
    <h2 class="text-2xl font-bold mb-6 text-center text-gray-500" >
      Job Info
    </h2>

    <input id="title" name="title" label="Job Title" placeholder="Software Engineer"  class="bg-gray-100"/>

    <input id="description" name="description" label="Description"
      placeholder="We are seeking a skilled and motivated Software Developer..."  class="bg-gray-100"/>

      <button type="submit"
        class=" bg-green-500 hover:bg-green-600 text-white px-4 py-2 my-3 rounded focus:outline-none">
        Save
      </button>
  </form>
  </div>
</x-layout>
