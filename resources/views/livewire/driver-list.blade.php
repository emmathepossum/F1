<div>
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
            @if ($driver->permanentNumber)
              <div>Permanent Number: {{ $driver->permanentNumber }}</div>
            @endif
            @if ($driver->code)
              <div>Code: {{ $driver->code }}</div>
            @endif
          </div>
        </x-slot:content>
      </x-card>
    @endforeach
  </div>

  <div class="pagination mt-6">
    {{ $drivers->links() }}
  </div>

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

    .pagination .sm\:flex {
      flex-direction: column;
      gap: .5rem;
    }

    .pagination .inline-flex {
      --tw-bg-opacity: 1;
      background-color: rgb(24 24 27 / var(--tw-bg-opacity, 1));
    }
  </style>
</div>
