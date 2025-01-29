<x-layout>
  <x-slot:title>F1 Library</x-slot:title>
  <div class="grid grid-cols-4 gap-6">
    @foreach ($drivers as $driver)
      <x-card>
        <x-slot:title>{{ $driver->givenName }} {{ $driver->familyName }}</x-slot:title>
        <x-slot:content>
          <div>
            <div>
              <a class="link" href="{{ $driver->url }}">Wikipedia</a>
            </div>
            <div>Born: {{ date('d.m.Y', strtotime($driver->dateOfBirth)) }}</div>
            <div>Nationality: {{ $driver->nationality }}</div>
            @isset($driver->permanentNumber)
              <div>Permanent Number: {{ $driver->permanentNumber }}</div>
      @endif
      @isset($driver->code)
        <div>Code: {{ $driver->code }}</div>
        @endif
      </div>
      </x-slot:content>
      </x-card>
      @endforeach
      </div>
      <div class="">
        {{ $drivers->links() }}
      </div>
    </x-layout>

    <style>
      .grid-cols-4 {
        grid-template-columns: repeat(4, minmax(0, 1fr));
      }

      @media (max-width: 1250px) {
        .grid-cols-4 {
          grid-template-columns: repeat(2, minmax(0, 1fr));
        }
      }

      @media (max-width: 600px) {
        .grid-cols-4 {
          grid-template-columns: repeat(1, minmax(0, 1fr));
        }
      }

      .link {
        color: red;
      }

      .link:hover {
        text-decoration: underline;
      }
    </style>
