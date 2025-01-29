<div class="">
  <select name="nationalities" id="nationalities-select"
    class="text-sm font-medium text-gray-700 bg-white border border-gray-300 leading-5 rounded-md hover:text-gray-500 focus:outline-none focus:ring ring-gray-300 focus:border-blue-300 active:bg-gray-100 active:text-gray-700 transition ease-in-out duration-150 dark:bg-zinc-900 dark:border-gray-600 dark:text-gray-300 dark:focus:border-blue-700 dark:active:bg-gray-700 dark:active:text-gray-300">
    <option value="">--Please choose an option--</option>
    @foreach ($nationalities as $nationality)
      <option value="{{ $nationality }}">{{ $nationality }}</option>
    @endforeach
  </select>
</div>

<style>
  #nationalities-select {
    padding: 6px;
    margin-bottom: 6px;
  }
</style>
