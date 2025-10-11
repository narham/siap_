<h1>Edit Player</h1>
<form action="/players/<?= $player['id'] ?>" method="post">
    <input type="hidden" name="_method" value="PUT">
    <label>Name: <input type="text" name="name" value="<?= esc($player['name']) ?>"></label><br>
    <label>Position: <input type="text" name="position" value="<?= esc($player['position']) ?>"></label><br>
    <label>Number: <input type="number" name="number" value="<?= esc($player['number']) ?>"></label><br>
    <label>Team: <input type="text" name="team" value="<?= esc($player['team']) ?>"></label><br>
    <button type="submit">Update</button>
</form>
