<div>
    <h1 class="mt-5 text-center">Students</h1>
    {{-- La génération des données est faite avec la librairie FAKER --}}
    {{-- On va créer un model et -m pour faire une migration: php artisan make:model Student -m --}}




    <div class="row">

        {{-- Le champ de recherche --}}
        <div class="col-md-6 mb-2">
            <label for="search" class="visually-hidden">Search</label>
            <input wire:model="search" id="search" type="search" class="form-control" placeholder="Ex: John Doe"
                autocomplete="off">

        </div>

        {{-- On va créer l'affichage de nombre de personne à afficher --}}
        <div class="col-auto ms-auto fw-bold">
            Show
            <select wire:model.lazy="perPage" id="per_page" class=" w-auto ">
                @for ($i = 5; $i <= 25; $i += 5)
                    <option value="{{ $i }}">{{ $i }}</option>
                @endfor
            </select>
            <label for="per_page">per page</label>
        </div>
    </div>


    <div class="responsive-table">
        <table class="table">
            {{-- L'entête de la table --}}
            <thead class="table-dark">
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Adult</th>
                </tr>
            </thead>
            {{-- Corps de la table --}}
            <tbody>
                @foreach ($students as $student)
                    <tr>
                        <td>{{ $student->id }}</td>
                        <td>{{ $student->name }}</td>
                        <td>{{ $student->email }}</td>

                        {{-- on veut indiquer si la personne est adulte ou nom en fonction de son âge, on appel la méthode getIsAnAdultAttribute() seuelement avec IsAnAdult ou is_an_adult --}}
                        <td>{{ $student->IsAnAdult ? '✅' : '❌' }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    {{-- Pagination: $students représente notre variable et links() représente les différents liens de pagination --}}
    <div class="mt-3 col-md-6 mx-auto">
        {{-- mais avec cette pagination notre page est rechargée à chaque fois --}}
        {{ $students->links() }}
    </div>
</div>
