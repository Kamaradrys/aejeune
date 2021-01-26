<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>

    </x-slot>

   {{--  <div class="py-12 px-12">
        <div class="max-w-8xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    You're logged in!
                    <button type="submit" class=" items-center px-2 py-1 bg-red-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150 ml-3" >ezdez<button>
                </div>
            </div>
        </div>
    </div> --}}
    <div class="container py-12">
    <div class="row">
        <div class="col-sm-2">
            <div class="list-group">
              <a href="#" class="list-group-item list-group-item-action active" aria-current="true">
                Cras justo odio
              </a>
              <a href="#" class="list-group-item list-group-item-action">menu 1</a>
              <a href="#" class="list-group-item list-group-item-action">menu 1</a>
              <a href="#" class="list-group-item list-group-item-action">Porta ac consectetur ac</a>
              <a href="#" class="list-group-item list-group-item-action disabled" tabindex="-1" aria-disabled="true">Vestibulum at eros</a>
            </div>
        </div>
        <div class="col-sm-10 ">
            <table class="table table-striped table-hover table-bordered">
              <thead class="table-light">
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">First</th>
                  <th scope="col">Last</th>
                  <th scope="col">Handle</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">1</th>
                  <td>Mark</td>
                  <td>Otto</td>
                  <td>@mdo</td>
                </tr>
                <tr>
                  <th scope="row">2</th>
                  <td>Denison</td>
                  <td>Thornton</td>
                  <td>@fat</td>
                </tr>
              </tbody>
            </table>
        </div>
    </div>
    </div>
</x-app-layout>
