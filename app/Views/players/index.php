<h1>Players</h1>
<a href="/players/new">Add Player</a>
<table border="1" cellpadding="6">
    <tr><th>ID</th><th>Name</th><th>Position</th><th>Number</th><th>Team</th><th>Actions</th></tr>
    <?php foreach($players as $p): ?>
    <tr>
        <td><?= esc($p['id']) ?></td>
        <td><?= esc($p['name']) ?></td>
        <td><?= esc($p['position']) ?></td>
        <td><?= esc($p['number']) ?></td>
        <td><?= esc($p['team']) ?></td>
        <td>
            <a href="/players/<?= $p['id'] ?>">Show</a> |
            <a href="/players/<?= $p['id'] ?>/edit">Edit</a> |
            <form action="/players/<?= $p['id'] ?>" method="post" style="display:inline">
                <input type="hidden" name="_method" value="DELETE">
                <button type="submit">Delete</button>
            </form>
        </td>
    </tr>
    <?php endforeach; ?>
</table>
