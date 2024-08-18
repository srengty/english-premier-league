<x-app-layout>
<div>
    <table class="table-auto">
        <thead>
            <tr>
                <th class="px-4 py-2">ID</th>
                <th class="px-4 py-2">Name</th>
                <th class="px-4 py-2">Photo</th>
                <th class="px-4 py-2">Team ID</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($players as $player)
                <tr>
                    <td class="border px-4 py-2">{{ $player->id }}</td>
                    <td class="border px-4 py-2">{{ $player->name }}</td>
                    <td class="border px-4 py-2">{{ $player->photo }}</td>
                    <td class="border px-4 py-2">{{ $player->team_id }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <a href="{{ route('players.create') }}">Create new player</a>
</div>
</x-app-layout>