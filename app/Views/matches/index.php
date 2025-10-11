<h1>Matches</h1>
<a href="/matches/new">Add Match</a>
<table border="1" cellpadding="6">
    <tr><th>ID</th><th>Home</th><th>Away</th><th>Date</th><th>Location</th><th>Score</th><th>Actions</th></tr>
    <?php foreach($matches as $m): ?>
    <tr>
        <td><?= esc($m['id']) ?></td>
        <td><?= esc($m['home_team']) ?></td>
        <td><?= esc($m['away_team']) ?></td>
        <td><?= esc($m['match_date']) ?></td>
        <td><?= esc($m['location']) ?></td>
        <td><?= esc($m['home_score']) ?> - <?= esc($m['away_score']) ?></td>
        <td>
            <a href="/matches/<?= $m['id'] ?>">Show</a> |
            <a href="/matches/<?= $m['id'] ?>/edit">Edit</a> |
            <form action="/matches/<?= $m['id'] ?>" method="post" style="display:inline">
                <input type="hidden" name="_method" value="DELETE">
                <button type="submit">Delete</button>
            </form>
        </td>
    </tr>
    <?php endforeach; ?>
</table>
